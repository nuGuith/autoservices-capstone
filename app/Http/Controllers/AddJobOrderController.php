<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use App\Estimate;
use App\InspectionHeader;
use App\Customer;
use App\Automobile;
use App\ServiceBay;
use App\Discount;
use Validator;
use Session;
use Redirect;

class AddJobOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estimateids = Estimate::orderBy('estimateid', 'desc')
        ->where('isActive', 1)
        ->select('estimateid', DB::table('estimate')->raw("CONCAT('ID: ',estimateid, ' - ', updated_at)  AS estimate_desc"))
        ->pluck('estimate_desc','estimateid');

        $inspectionids = InspectionHeader::orderBy('inspectionid', 'desc')
        ->where('isActive', 1)
        ->pluck('inspectionid','inspectionid');

        $customerids = Customer::orderBy('customerid', 'desc')
        ->where('isActive', 1)
        ->select('customerid', DB::table('customer')->raw("CONCAT(firstname, middlename, lastname)  AS fullname"))
        ->pluck('fullname','customerid');
        
        $automobiles = Automobile::orderBy('created_at', 'desc')
        ->where('isActive', 1)
        ->pluck('plateno','automobileid');

        $automobile_models = DB::table('automobile_model')
                                ->leftJoin('automobile_make', 'automobile_model.makeid', '=', 'automobile_make.makeid')
                                ->where('automobile_model.isActive',1)
                                ->pluck(DB::raw("CONCAT(make, ' - ', model, ' - ', year)  AS automobile_models"), 'modelid');

        $service_bays = ServiceBay::where('isActive', 1)
        ->pluck('servicebayname', 'servicebayid');

        $discounts = Discount::where('isActive', 1)
        ->pluck('discountname', 'discountid');

        $estimateids->prepend('Please choose an Estimate ID',0);
        $inspectionids->prepend('Please choose an Inspection ID',0);
        $customerids->prepend('Please select a customer',0);
        $automobiles->prepend('Select a Plate Number',0);
        $automobile_models->prepend('Select a Model',0);
        $service_bays->prepend('Please choose a Service Bay', 0);
        $discounts->prepend('Choose a Discount', 0);

        return view ('joborder.addjoborder', compact('inspectionids','estimateids', 'customerids', 'automobiles', 'automobile_models', 'service_bays','discounts'));
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

    public function showInspection($id)
    {
        $inspection = InspectionHeader::findOrFail($id);
        $customer = Customer::findOrFail($inspection->CustomerID);
        $automobile = Automobile::findOrFail($inspection->AutomobileID);
        return response()->json(compact('inspection', 'customer', 'automobile'));
    }

    public function showEstimate($id)
    {
        $estimate = Estimate::findOrFail($id);
        $customer = Customer::findOrFail($estimate->CustomerID);
        $automobile = Automobile::findOrFail($estimate->AutomobileID);
        return response()->json(compact('estimate', 'customer', 'automobile'));
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
