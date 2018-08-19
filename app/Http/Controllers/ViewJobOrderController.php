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
                    ->where('customerid', $automobile->CustomerID)
                    ->select(DB::table('customer')->raw("CONCAT(firstname, middlename, lastname)  AS FullName"), 'ContactNo','CompleteAddress', 'EmailAddress', 'PWD_SC_No')
                    ->first();
        $servicebay = ServiceBay::findOrFail($joborder->ServiceBayID);
        //dd($automobile);
        return View('joborder.viewjoborder',compact('joborder','customer','automobile','servicebay'));
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
