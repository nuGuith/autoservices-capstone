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
        $cust_id = 0;
        $auto_id = 0;
        try{
            DB::beginTransaction();
            if (($request->customerid) < 1){
                $firstname = ($request->fname). ' ';
                $middlename = ($request->mname). ' ';
                Customer::create([
                    'firstname' => ($firstname),
                    'middlename' => ($middlename),
                    'lastname' => ($request->lname),
                    'ContactNo' => ($request->contact),
                    'emailaddress' => ($request->email),
                    'pwd_sc_no' => ($request->pwd_sc_no),
                    'completeaddress' => ($request->address)
                ]);
                $cust_id = Customer::orderBy('customerid', 'desc')->first();
            }
            if (($request->automobileid) < 1){
                Automobile::create([
                    'plateno' => ($request->plateno),
                    'modelid' => ($request->modelid),
                    'chassisno' => ($request->chassisno),
                    'mileage' => ($request->mileage),
                    'color' => ($request->color)
                ]);
                $auto_id = Automobile::orderBy('automobileid', 'desc')->first();
            }
            if ($cust_id->CustomerID < 1)
                $cust_id->CustomerID = ($request->customerid);
            if ($auto_id->AutomobileID < 1)
                $auto_id->AutomobileID = ($request->automobileid);
            JobOrder::create([
                'CustomerID' => ($cust_id->CustomerID),
                'AutomobileID' => ($auto_id->AutomobileID),
                'InspectionID' => ($request->inspectionid),
                'EstimateID' => ($request->estimateid),
                'ServiceBayID' => ($request->servicebayid),
                'PromoID' => ($request->promoid),
                'PackageID' => ($request->packageid),
                'DiscountID' => ($request->discountid),
                'UserID' => (1),
                'Status' => ('Ongoing'),
                'Agreement_Timestamp' => (date('Y-m-d H:i:s')),
                'LaborCharge' => (499),
                'updated_at' => (date('Y-m-d H:i:s'))
            ]);
            DB::commit();
        }catch(\Illuminate\Database\QueryException $e){
            DB::rollBack();
            $err = $e->getMessage();
            return response()->json($err);
        }
        return redirect('/joborder');
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

    public function filterByCustomer($id)
    {
        $products = DB::table('product AS pr')
                    ->join('product_service AS ps', 'pr.productid', 'ps.productid')
                    ->where(['ps.serviceid' => $id, 'ps.isActive' => 1])
                    ->select('pr.productname','pr.productid')
                    ->get();
        return response()->json(compact('products'));
    }

    public function getFilteredProductList($id)
    {
        $products = DB::table('product AS pr')
                    ->join('product_service AS ps', 'pr.productid', 'ps.productid')
                    ->where(['ps.serviceid' => $id, 'ps.isActive' => 1])
                    ->select('pr.productname','pr.productid')
                    ->get();
        return response()->json(compact('products'));
    }

    public function getProductDetails($id)
    {
        $product = DB::table('product')
                    ->where(['productid' => $id, 'isActive' => 1])
                    ->select('productname','price')
                    ->first();
        return response()->json(compact('product'));
    }

    public function getDiscountDetails($id)
    {
        $discount = DB::table('discount')
                    ->where(['discountid' => $id, 'isActive' => 1])
                    ->select('discountname','discountrate')
                    ->first();
        return response()->json(compact('discount'));
    }

    public function getServiceDetails($id)
    {
        $service = DB::table('service AS se')
                    ->join('service_price AS sp', 'se.serviceid', 'sp.serviceid')
                    ->where(['sp.serviceid' => $id, 'sp.isActive' => 1, 'sp.modelid' => 1])
                    ->select('se.servicename','sp.price')
                    ->first();
        return response()->json(compact('service'));
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
