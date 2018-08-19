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

class AddEstimatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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

        $personnels = PersonnelHeader::where('isActive', 1)
            ->select('personnelid', DB::table('personnel_header')->raw("CONCAT(firstname, middlename, lastname)  AS personnelfullname"))
            ->pluck('personnelfullname','personnelid');
        
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
       
        $customerids->prepend('Please select a customer',0);
        $automobiles->prepend('Select a Plate Number', 0);
        $automobile_models->prepend('Select a Model', 0);
        $personnels->prepend('Select a Personnel', 0);
        $service_bays->prepend('Please choose a Bay', 0);
        $discounts->prepend('Choose a Discount', 0);
        $services->prepend('Choose a Service', 0);
        $products->prepend('Choose a Product', 0);

        return view ('estimates.addestimates', compact('customerids', 'automobiles', 'automobile_models', 'service_bays', 'discounts', 'services', 'products', 'personnels'));
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
            Estimate::create([
                'customerid' => ($request->customerid),
                'automobileid' => ($request->automobileid),
                'servicebayid' => ($request->servicebayid),
                'discountid' => ($request->discountid),
                'personnelid' => ($request->personnelid)
            ]);
            DB::commit();
        }catch(\Illuminate\Database\QueryException $e){
            DB::rollBack();
            $errors = $e->getMessage();
            return redirect('\addestimates')
                ->withErrors($errors, 'estimate');
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

    public function showCustomer($id)
    {
        $estimate = Estimate::findOrFail($id);
        $automobile = Automobile::findOrFail($estimate->AutomobileID);
        $customer = Customer::findOrFail($estimate->CustomerID);
        return response()->json(compact('estimate', 'automobile', 'customer'));
    }

    public function showAutomobile($id)
    {
        $estimate = Estimate::findOrFail($id);
        $automobile = Automobile::findOrFail($estimate->AutomobileID);
        $customer = Customer::findOrFail($estimate->CustomerID);
        return response()->json(compact('estimate', 'customer', 'automobile'));
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
