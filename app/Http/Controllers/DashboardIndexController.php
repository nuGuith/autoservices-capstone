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

        $joborder = JobOrder::orderBy('joborderid', 'desc')
                ->where('status', '=', 'ongoing')
                ->get();
        $automobiles = DB::table('automobile as auto')
                ->join('customer as c', 'auto.customerid', '=', 'c.customerid')
                ->select(DB::table('customer')->raw("CONCAT(firstname, middlename, lastname)  AS FullName"), 'c.ContactNo','c.CompleteAddress','auto.AutomobileID', 'auto.CustomerID', 'auto.PlateNo', 'auto.ModelID', 'auto.Mileage', 'auto.Transmission', 'auto.Color', 'ChassisNo')
                ->get();
        $customers = Customer::where('isActive', 1)
                ->select('CustomerID', DB::table('customer')->raw("CONCAT(firstname, middlename, lastname)  AS FullName"), 'ContactNo','CompleteAddress')
                ->get();

        return view('dashboard.index', compact('count_ongoing', 'count_pending', 'joborder', 'automobiles', 'customers'));
    }

}