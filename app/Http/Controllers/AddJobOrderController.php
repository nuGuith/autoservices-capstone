<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use App\JobOrder;
use App\Estimate;
use App\InspectionHeader;
use App\Customer;
use App\Automobile;
use App\ServiceBay;
use App\Discount;
use App\Service;
use App\Product;
use App\PromoHeader;
use App\PackageHeader;
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
        ->select('estimateid', DB::table('estimate')
                                ->raw("CONCAT('ID: ',estimateid, ' - ', updated_at)  AS estimate_desc"))
        ->pluck('estimate_desc','estimateid');

        $inspectionids = InspectionHeader::orderBy('inspectionid', 'desc')
        ->where('isActive', 1)
        ->select('inspectionid', DB::table('inspection_header')
                                ->raw("CONCAT('ID: ',inspectionid, ' - ', updated_at)  AS inspection_desc"))
        ->pluck('inspection_desc','inspectionid');

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
                                ->pluck(DB::raw("CONCAT(make, ' - ', model, ' - ', SUBSTRING(year, 1, 4),'.',SUBSTRING(year, 6, 2))  AS automobile_models"), 'modelid');

        $service_bays = ServiceBay::where('isActive', 1)
        ->pluck('servicebayname', 'servicebayid');

        $discounts = Discount::orderBy('discountid', 'desc')
        ->where('isActive', 1)
        ->pluck('discountname', 'discountid');

        $services = Service::orderBy('serviceid', 'desc')
        ->where('isActive', 1)
        ->pluck('servicename', 'serviceid');

        $products = Product::orderBy('productid', 'desc')
        ->where('isActive', 1)
        ->pluck('productname', 'productid');

        $promos = PromoHeader::orderBy('promoid', 'desc')
        ->where('isActive', 1)
        ->pluck('promoname', 'promoid');

        $packages = PackageHeader::orderBy('packageid', 'desc')
        ->where('isActive', 1)
        ->pluck('packagename', 'packageid');

        $estimateids->prepend('Please choose an Estimate ID',0);
        $inspectionids->prepend('Please choose an Inspection ID',0);
        $customerids->prepend('Please select a customer',0);
        $automobiles->prepend('Select a Plate Number',0);
        $automobile_models->prepend('Select a Model',0);
        $service_bays->prepend('Please choose a Service Bay', 0);
        $discounts->prepend('Choose a Discount', 0);
        $services->prepend('Choose a Service', 0);
        $products->prepend('Choose a Product', 0);
        $promos->prepend('Choose a Promo', 0);
        $packages->prepend('Choose a Package', 0);

        //dd($products);
        //return response()->json(compact('products'));
        return view ('joborder.addjoborder', compact('inspectionids','estimateids', 'customerids', 'automobiles', 'automobile_models', 'service_bays','discounts','services','products','promos','packages'));
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
        try{
            DB::beginTransaction();
            JobOrder::create([
                'customerid' => ($request->customerid),
                'automobileid' => ($request->automobileid),
                'inspectionid' => ($request->inspectionid),
                'servicebayid' => ($request->servicebayid),
                'promoid' => ($request->promoid),
                'userid' => (1),
                'status' => ('Ongoing'),
                'agreement_timestamp' => (date('Y-m-d H:i:s')),
                'laborcharge' => (499)
            ]);
            DB::commit();
        }catch(\Illuminate\Database\QueryException $e){
            DB::rollBack();
            $errors = $e->getMessage();
            return redirect('\addjoborder')
                ->withErrors($errors, 'jo');
        }
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


    public function getProducts($id)
    {
        $products = DB::table('product AS pr')
                    ->join('product_service AS ps', 'pr.productid', 'ps.productid')
                    ->where(['ps.serviceid' => $id, 'ps.isActive' => 1])
                    ->select('pr.productname','pr.productid')
                    ->get();
        return response()->json(compact('products'));
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
