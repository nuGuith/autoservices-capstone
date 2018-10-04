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
use Tables;
use DateTables;

class EditEstimatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
       
        $estimate = Estimate::findOrFail($id);
        $model = Automobile::findOrFail($estimate->AutomobileID);
        
        $automobile = DB::table('automobile_model AS md')
                    ->where('md.ModelID', $model->ModelID)
                    ->join('automobile_make AS mk', 'md.makeid', '=', 'mk.makeid')
                    ->join('automobile AS auto', 'md.modelid', '=', 'auto.modelid')
                    ->select('mk.Make', 'md.Model', 'auto.CustomerID', 'auto.Transmission', 'auto.PlateNo', 'auto.Mileage', 'auto.ChassisNo', 'auto.Color')
                    ->first();

        $automobile_models = DB::table('automobile_model')
            ->leftJoin('automobile_make', 'automobile_model.makeid', '=', 'automobile_make.makeid')
            ->where('automobile_model.isActive',1)
            ->pluck(DB::raw("CONCAT(make, ' - ', model, ' - ', SUBSTRING(year, 1, 4),'.',SUBSTRING(year, 6, 2))  AS automobile_models"), 'modelid');

        $customer = DB::table('customer')
                    ->where('customerid', $model->CustomerID)
                    ->select('firstname', 'middlename', 'lastname', 'ContactNo','CompleteAddress', 'EmailAddress', 'PWD_SC_No')
                    ->first();
        
        $service_bays = ServiceBay::where('isActive', 1)
            ->pluck('servicebayname', 'servicebayid');

        if($estimate->ServiceBayID != null)
            $servicebay = ServiceBay::findOrFail($estimate->ServiceBayID);
        else{
            $servicebay = new ServiceBay;
            $servicebay->ServiceBayName = null;
        }

        $personnels = PersonnelHeader::where('isActive', 1)
            ->select('personnelid', DB::table('personnel_header')->raw("CONCAT(firstname, middlename, lastname)  AS personnelfullname"))
            ->pluck('personnelfullname','personnelid');

        $services = Service::orderBy('serviceid', 'desc')
            ->where('isActive', 1)
            ->pluck('servicename', 'serviceid');

        $products = Product::orderBy('productid', 'desc')
            ->where('isActive', 1)
            ->pluck('productname', 'productid');
        
        $serviceperformed = DB::table('service_performed AS sp')
            ->join('service AS svc', 'sp.serviceid', '=', 'svc.serviceid')
            ->where(['sp.estimateid' => $id, 'sp.isActive' => 1])
            ->select('sp.*', 'svc.*')
            ->get();

        $productused = DB::table('product_used AS pu')
            ->join('product as pr', 'pu.productid', '=', 'pr.productid')
            ->where(['estimateid' => $id, 'pu.isActive' => 1])
            ->select('pu.*', 'pr.*')
            ->get();
    
        $complaint = DB::table('complaint as c')
            ->where(['estimateid' => $id, 'c.isActive'=> 1])
            ->select('c.Diagnosis', 'c.Problem')
            ->first();

        $service_bays->prepend('Please choose a Bay', 0);
        $services->prepend('Choose a Service', 0);
        $products->prepend('Choose a Product', 0);
        $automobile_models->prepend('Select a Model', 0);
        $personnels->prepend('Select a Personnel', 0);

        return View('estimates.editestimates',compact('estimate','customer', 'model', 'automobile', 'automobile_models', 'service_bays', 'servicebay', 'services', 'products', 'personnels', 'serviceperformed', 'productused', 'complaint'));
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

    public function getServicePrice($id)
    {
        $serviceprices = DB::table('service_price AS sp')
            ->join('automobile_model as am', 'sp.modelid', '=', 'am.modelid')
            ->join('service as s', 'sp.serviceid', '=', 's.serviceid')
            ->where(['sp.modelid' => $id, 'sp.isActive' => 1])
            ->select('sp.serviceid', 's.servicename', 'sp.price')
            ->get();
        return response()->json(compact('serviceprices'));
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
