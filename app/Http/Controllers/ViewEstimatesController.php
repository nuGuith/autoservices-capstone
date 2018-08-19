<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use App\Customer;
use App\Estimate;
use App\Automobile;
use App\AutomobileMake;
use App\AutomobileModel;
use App\ServiceBay;
use App\Personnel;
use App\Discount;
use App\Service;
use App\Product;
use App\PersonnelHeader;
use App\Process;
use App\ProcessService;
use Validator;
use Session;
use Redirect;

class ViewEstimatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $estimate = Estimate::findOrFail($id);
        $customer = DB::table('customer')
                    ->where('customerid',$estimate->CustomerID)
                    ->select(DB::table('customer')->raw("CONCAT(firstname, middlename, lastname)  AS FullName"), 'ContactNo','CompleteAddress', 'EmailAddress', 'PWD_SC_No')
                    ->first();
        $model = Automobile::findOrFail($estimate->AutomobileID);
        
        $automobile = DB::table('automobile_model AS md')
                    ->where('md.ModelID', $model->ModelID)
                    ->join('automobile_make AS mk', 'md.makeid', '=', 'mk.makeid')
                    ->join('automobile AS auto', 'md.modelid', '=', 'auto.modelid')
                    ->select('mk.Make', 'md.Model', 'auto.Transmission', 'auto.PlateNo', 'auto.Mileage', 'auto.ChassisNo')
                    ->first();
        $servicebay = ServiceBay::findOrFail($estimate->ServiceBayID);
        $personnel = DB::table('personnel_header')
                    ->where('personnelid',$estimate->PersonnelID)
                    ->select(DB::table('personnel_header')->raw("CONCAT(firstname, middlename, lastname)  AS FullName"))
                    ->first();

        return view('joborder.viewjoborder', compact('estimate','customer', 'model', 'automobile','servicebay','personnel'));
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
