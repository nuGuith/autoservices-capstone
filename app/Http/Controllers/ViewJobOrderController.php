<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use App\JobOrder;
use App\Customer;
use App\Automobile;
use App\ServiceBay; 
use App\Payment;
use App\ServicePerformed;
use App\ProductUsed;
use App\Personnel_Job_Performed;
use App\Personnel_Job;
use App\JobDescription;
use App\Personnel_Header;
use Validator;
use Session;
use Redirect;

class ViewJobOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $joborder = JobOrder::findOrFail($id);
        $model = Automobile::findOrFail($joborder->AutomobileID);
        
        $automobile = DB::table('automobile_model AS md')
            ->where('md.ModelID', $model->ModelID)
            ->join('automobile_make AS mk', 'md.makeid', '=', 'mk.makeid')
            ->join('automobile AS auto', 'md.modelid', '=', 'auto.modelid')
            ->select('mk.Make', 'md.Model', 'auto.CustomerID', 'auto.Transmission', 'auto.PlateNo', 'auto.Mileage', 'auto.ChassisNo')
            ->first();

        $customer = DB::table('customer')
            ->where('customerid', $model->CustomerID)
            ->select(DB::table('customer')->raw("CONCAT(firstname, middlename, lastname)  AS FullName"), 'ContactNo','CompleteAddress', 'EmailAddress', 'PWD_SC_No')
            ->first();

        $servicebay = ServiceBay::findOrFail($joborder->ServiceBayID);

        $payments = DB::table('payment as p')
            ->join('job_order as jo', 'p.joborderid', '=', 'jo.joborderid')
            ->where(['p.isActive' => 1, 'p.joborderid' => $id])

            ->select('p.*', 'jo.totalamountdue')
            ->get();

        $totals = DB::table('payment as p')
            ->join('job_order as jo', 'p.joborderid', '=', 'jo.joborderid')
            ->select(DB::table('payment')->raw("SUM(totalpayment) as total"))
            ->where(['p.isActive' => 1, 'p.joborderid' => $id])
            ->get();
        

        /*$jobdesc = DB::table('personnel_job_performed as pjp')
            ->join('job_order as jo', 'pjp.joborderid', '=', 'jo.joborderid')
            ->join('personnel_job as pj', 'pjp.personneljobid', '=', 'pj.personneljobid')
            ->join('job_description as jd', 'pj.jobdescriptionid', '=', 'jd.jobdescriptionid')
            ->join('personnel_header as ph', 'pj.personnelid', '=', 'ph.personnelid')
            ->select('pjp.*', 'jo.*', 'pj.*', 'jd.*', 'ph.*')
            ->where(['pjp.isActive' => 1, 'pjp.joborderid' => $id])
            ->get();

        dd($jobdesc);*/

        //$balance = ((float)$joborder->totalamountdue - (float)$totals->total);

        //$date = date('F j, Y', strtotime($payments->created_at));

        $startdate = date('F j, Y', strtotime($joborder->created_at));
        $enddate = date('F j, Y', strtotime($joborder->agreement_timestamp));

        return View('joborder.viewjoborder',compact('joborder','customer','automobile','servicebay','payments', 'startdate', 'enddate', 'totals'));
    }

    /*public function getServices($id)
    {
        $service = DB::table('service_performed as sp')
            ->join('job_order as jo', 'sp.joborderid', '=', 'jo.joborderid')
            ->join('service as s', 'sp.serviceid', '=', 's.serviceid')
            ->join('product_used as pu', 'sp.productusedid')
            ->get();

        return response()->json(compact('services', 'joborder'));
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
       
    }
}
