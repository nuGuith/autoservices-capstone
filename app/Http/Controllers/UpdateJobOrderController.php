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
use Validator;
use Session;
use Redirect;

class UpdateJobOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $joborder = JobOrder::findOrFail($id);
        $customer = DB::table('customer')
                    ->where('customerid',$joborder->CustomerID)
                    ->select(DB::table('customer')->raw("CONCAT(firstname, middlename, lastname)  AS FullName"), 'ContactNo','CompleteAddress', 'EmailAddress', 'PWD_SC_No')
                    ->first();
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

        $serviceperformed = DB::table('service_performed AS sp')
            ->join('service AS svc', 'sp.serviceid', '=', 'svc.serviceid')
            ->where(['sp.estimateid' => $joborder->EstimateID, 'sp.isActive' => 1])
            ->select('sp.*', 'svc.*')
            ->get();
        
        $stepcounts =  DB::table('service AS svc')
            ->leftJoin('service_steps AS ss', 'svc.serviceid', '=', 'ss.serviceid')
            ->where(['svc.isActive' => 1 ])
            ->groupBy('ss.serviceid')
            ->select('svc.serviceid', DB::raw('count(ss.step) as StepCount'))
            ->get();

        $productused = DB::table('product_used AS pu')
            ->join('product as pr', 'pu.productid', '=', 'pr.productid')
            ->where(['estimateid' => $joborder->EstimateID, 'pu.isActive' => 1])
            ->select('pu.*', 'pr.*')
            ->get();

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

        //dd(compact('joborder','customer','automobile','servicebay', 'serviceperformed', 'stepcounts', 'productused', 'payments', 'totals'));

        return view ('joborder.updatejoborder',compact('joborder','customer','automobile','servicebay', 'serviceperformed', 'stepcounts', 'productused', 'payments', 'totals'));
    }

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

    public function getSteps($id)
    {
        $steps = DB::table('service_steps')
            ->where(['serviceid' => $id,'isActive' => 1 ])
            ->get();
        $service = DB::table('service')->where('serviceid', $id)->first();
        return response()->json(compact('steps', 'service'));
    }

    public function getProducts($id)
    {
        $productused = DB::table('product as pr')
            ->join('product_used as pu', 'pr.productid', '=', 'pu.productid')
            ->where(['pu.serviceperformedid' => $id,'pu.isActive' => 1 ])
            ->get();
        return response()->json(compact('productused'));
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

    public function updateJob(Request $request)
    {
        try{
            DB::table('service_performed')
                ->where('serviceperformedid', $request->serviceperformedid)
                ->update(['CurrentStep' => ($request->updatestep)]);
        }
        catch(\Illuminate\Database\QueryException $e){
            DB::rollBack();
            $errors = $e->getMessage();
            return response()->json(compact('errors'));
        }
        return response()->json(compact('response'));
    }

    public function setStartDate(Request $request){
        try{
            DB::table('service_performed')
                ->where('serviceperformedid', $request->serviceperformedid)
                ->update(['startdate' => date('Y-m-d H:i:s')]);
        }
        catch(\Illuminate\Database\QueryException $e){
            DB::rollBack();
            $errors = $e->getMessage();
            return response()->json(compact('errors'));
        }
        return response()->json(compact('response'));
    }

    public function updateJobOrder(Request $request)
    {
        try{
            DB::table('job_order')
                ->where('joborderid', $request->joborderid)
                ->update(['Status' => ($request->jobstatus), 'JobStartDate' => ($request->jobstartdate)]);
        }
        catch(\Illuminate\Database\QueryException $e){
            DB::rollBack();
            $errors = $e->getMessage();
            return response()->json(compact('errors'));
        }
        return response()->json(compact('response'));
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
