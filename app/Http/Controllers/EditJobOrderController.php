<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use App\JobOrder;
use App\Estimate;
use App\Customer;
use App\Automobile;
use App\ServiceBay;
use App\Personnel;
use App\Discount;
use App\PromoHeader;
use App\PackageHeader;
use App\Service;
use App\Product;
use App\PersonnelHeader;
use Validator;
use Session;
use Redirect;

class EditJobOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $joborder = JobOrder::findOrFail($id);
        $estimate = Estimate::findOrFail($joborder->EstimateID);
        $customer = DB::table('customer')
                    ->where('customerid',$joborder->CustomerID)
                    ->select(DB::table('customer')->raw("CONCAT(firstname, middlename, lastname)  AS FullName"), 'FirstName', 'MiddleName', 'LastName', 'ContactNo','CompleteAddress', 'EmailAddress', 'PWD_SC_No')
                    ->first();
        $model = Automobile::findOrFail($joborder->AutomobileID);
        
        $automobile = DB::table('automobile_model AS md')
                    ->where('md.ModelID', $model->ModelID)
                    ->join('automobile_make AS mk', 'md.makeid', '=', 'mk.makeid')
                    ->join('automobile AS auto', 'md.modelid', '=', 'auto.modelid')
                    ->select('mk.Make', 'md.Model', 'auto.CustomerID', 'auto.Transmission', 'auto.PlateNo', 'auto.Mileage', 'auto.ChassisNo')
                    ->first();
        $automobile_models = DB::table('automobile_model')
            ->leftJoin('automobile_make', 'automobile_model.makeid', '=', 'automobile_make.makeid')
            ->where('automobile_model.isActive',1)
            ->pluck(DB::raw("CONCAT(make, ' - ', model, ' - ', SUBSTRING(year, 1, 4),'.',SUBSTRING(year, 6, 2))  AS automobile_models"), 'modelid');
        $customer = DB::table('customer')
                    ->where('customerid',$model->CustomerID)
                    ->select(DB::table('customer')->raw("CONCAT(firstname, middlename, lastname)  AS FullName"), 'FirstName', 'MiddleName', 'LastName', 'ContactNo','CompleteAddress', 'EmailAddress', 'PWD_SC_No')
                    ->first();
        $servicebay = ServiceBay::findOrFail($joborder->ServiceBayID);
        $service_bays = ServiceBay::where('isActive', 1)
            ->pluck('servicebayname', 'servicebayid');

        $personnels = PersonnelHeader::where('isActive', 1)
            ->select('personnelid', DB::table('personnel_header')->raw("CONCAT(firstname, middlename, lastname)  AS personnelfullname"))
            ->pluck('personnelfullname','personnelid');

        $discounts = Discount::orderBy('discountid', 'desc')
            ->where('isActive', 1)
            ->pluck('discountname', 'discountid');

        $promos = PromoHeader::orderBy('promoid', 'desc')
            ->where('isActive', 1)
            ->pluck('promoname', 'promoid');

        $packages = PackageHeader::orderBy('packageid', 'desc')
            ->where('isActive', 1)
            ->pluck('packagename', 'packageid');

        $services = Service::orderBy('serviceid', 'desc')
            ->where('isActive', 1)
            ->pluck('servicename', 'serviceid');

        $products = Product::orderBy('productid', 'desc')
            ->where('isActive', 1)
            ->pluck('productname', 'productid');
        
        $serviceperformed = DB::table('service_performed AS sp')
            ->join('service AS svc', 'sp.serviceid', '=', 'svc.serviceid')
            ->where(['sp.estimateid' => $joborder->EstimateID, 'sp.isActive' => 1])
            ->select('sp.*', 'svc.*')
            ->get();

        $productused = DB::table('product_used AS pu')
            ->join('product as pr', 'pu.productid', '=', 'pr.productid')
            ->where(['estimateid' => $joborder->EstimateID, 'pu.isActive' => 1])
            ->select('pu.*', 'pr.*')
            ->get();

        $service_bays->prepend('Please choose a Bay', 0);
        $discounts->prepend('Choose a Discount', 0);
        $services->prepend('Choose a Service', 0);
        $products->prepend('Choose a Product', 0);
        $automobile_models->prepend('Select a Model', 0);
        $personnels->prepend('Select a Personnel', 0);
        $promos->prepend('Choose a Promo', 0);
        $packages->prepend('Choose a Package', 0);

        //dd(compact('joborder','customer','model','automobile','automobile_models', 'servicebay', 'service_bays', 'services', 'products', 'serviceperformed', 'automobile_models', 'personnels'));
        return view ('joborder.editjoborder', compact('joborder', 'estimate', 'customer','model','automobile','automobile_models', 'servicebay', 'service_bays', 'discounts', 'promos', 'packages', 'services', 'products', 'serviceperformed', 'productused', 'automobile_models', 'personnels'));
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
