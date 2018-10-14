<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\JobOrder;
use App\Estimate;
use App\Customer;
use App\Automobile;
use Validator;
use Session;
use Redirect;


class DashboardIndexController extends Controller
{	
    public function index()
    {
        $count_ongoing = DB::table('job_order as jo')
                ->where('status', '=', 'ongoing')
                ->count();

        $count_pending = DB::table('job_order as jo')
                ->where('status', '=', 'pending')
                ->count();

        // $backjob_ongoing = DB::table('job_order_backjob')
        //         ->where('status', '=', 'ongoing')
        //         ->count();

        // $backjob_pending = DB::table('job_order_backjob')
        //         ->where('status', '=', 'pending')
        //         ->count();
        
        // $backjob_auto = DB::table('job_order_backjob as bj')
        //         ->join('job_order as jo', 'bj.joborderid', '=', 'jo.joborderid')
        //         ->where('isActive', 1)
        //         ->get();
        
        $backjob = DB::table('job_order_backjob as bj')
        ->join('job_order as jo', 'bj.joborderid', '=', 'jo.joborderid')
        ->join('automobile as au', 'jo.automobileid', '=', 'au.automobileid')
        // ->where(['bj.backjobid' => $id, 'bj.isActive' => 1])
        ->where('bj.isActive', 1)
        ->select('au.*', 'bj.*', 'jo.*')
        ->get();

        $count_backjob = DB::table('job_order_backjob')
                ->where('isActive', 1)
                ->count();

        $joborder = JobOrder::orderBy('joborderid', 'desc')
                ->where('status', '=', 'ongoing')
                ->get();

        $pending_jo = JobOrder::orderBy('joborderid', 'desc')
                ->where('status', '=', 'pending')
                ->get();

        $automobiles = DB::table('automobile as auto')
                ->join('customer as c', 'auto.customerid', '=', 'c.customerid')
                ->select(DB::table('customer')->raw("CONCAT(firstname, middlename, lastname)  AS FullName"), 'c.ContactNo','c.CompleteAddress','auto.AutomobileID', 'auto.CustomerID', 'auto.PlateNo', 'auto.ModelID', 'auto.Mileage', 'auto.Transmission', 'auto.Color', 'ChassisNo')
                ->get();
        $customers = Customer::where('isActive', 1)
                ->select('CustomerID', DB::table('customer')->raw("CONCAT(firstname, middlename, lastname)  AS FullName"), 'ContactNo','CompleteAddress')
                ->get();

        return view('dashboard.index', compact('count_ongoing', 'count_pending', 'pending_jo', 'count_backjob','backjob', 'joborder', 'automobiles', 'customers'));
    }

}