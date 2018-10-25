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
use App\ServicePerformed;
use App\ServicePrice;
use App\Product;
use App\ProductsUsed;
use App\PersonnelHeader;
use App\Process;
use App\ProcessService;
use Validator;
use Session;
use Redirect;

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
        ->groupBy('fullname')
        ->distinct('fullname')
        ->pluck('fullname','customerid');
        
        $automobiles = Automobile::orderBy('created_at', 'desc')
        ->where('isActive', 1)
        ->groupBy('plateno')
        ->distinct('plateno')
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
            ->groupBy('servicename')
            ->distinct('servicename')
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

        $estimateID = new Estimate;
        $estimateID->EstimatedID = 0;

        return view ('estimates.addestimates', compact('customerids', 'automobiles', 'automobile_models', 'service_bays', 'discounts', 'services', 'products', 'personnels', 'estimateID'));
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
        $cust_id = new Customer;
        $auto_id = new Automobile;

        try{
            DB::beginTransaction();
            if ($request->has('customerid')){
                $cust_id->CustomerID = ($request->customerid);
                $firstname = ($request->fname). ' ';
                $middlename = ($request->mname). ' ';
                Customer::where(['isActive' => 1, 'customerid' => $cust_id->CustomerID])
                        ->update([
                            'firstname' => $firstname,
                            'middlename' => $middlename, 
                            'lastname' => $request->lname, 
                            'ContactNo' => $request->contact, 
                            'emailaddress' => $request->email, 
                            'pwd_sc_no' => $request->pwd_sc_no, 
                            'CompleteAddress' => $request->address
                        ]);
            }
            else {
                $firstname = ($request->fname). ' ';
                $middlename = ($request->mname). ' ';
                Customer::create([
                    'firstname' => ($firstname),
                    'middlename' => ($middlename),
                    'lastname' => ($request->lname),
                    'ContactNo' => ($request->contact),
                    'emailaddress' => ($request->email),
                    'pwd_sc_no' => ($request->pwd_sc_no),
                    'CompleteAddress' => ($request->address)
                ]);
                $cust_id = DB::table('customer')->orderBy('customerid', 'desc')->first();
            }

            if ($request->has('automobileid')){
                $auto_id->AutomobileID = ($request->automobileid);
                Automobile::where(['isActive' => 1, 'automobileid' => $auto_id->AutomobileID])
                ->update([
                    'plateno' => ($request->plateno),
                    'chassisno' => ($request->chassisno),
                    'mileage' => ($request->mileage),
                    'color' => ($request->color)
                ]);
            }
            else {
                Automobile::create([
                    'plateno' => ($request->plateno),
                    'customerid' => ($cust_id->CustomerID),
                    'modelid' => ($request->model),
                    'transmission' => ($request->transmission),
                    'chassisno' => ($request->chassisno),
                    'mileage' => ($request->mileage),
                    'color' => ($request->color),
                    'updated_at' => (date('Y-m-d H:i:s'))
                ]);
                $auto_id = DB::table('automobile')->orderBy('automobileid', 'desc')->first();
            }
            Estimate::create([
                'CustomerID' => ($cust_id->CustomerID),
                'AutomobileID' => ($auto_id->AutomobileID),
                'ServiceBayID' => ($request->servicebayid),
                'PersonnelID' => ($request->personnelid),
                'TotalCost' => ($request->totalcost)
            ]);

            $estimate = Estimate::orderBy('estimateid', 'desc')->first();

            $services = $request->service;
            $products = $request->product;
            $quantity = $request->quantity;
            $untprice = $request->unitprice;
            $laborcost = $request->labor;
            $serviceid= $request->serviceid;

            //if (is_array($services) || is_object($services))
            foreach($services as $svckey=>$service){
                
                $subTotal = 0;
                $svcprc = DB::table('service_price')->where(['ServiceID' => $service, 'ModelID' => $request->modelid])->first();
                ServicePerformed::create([
                        'ServiceID' => $service,
                        'EstimateID' => $estimate->EstimateID,
                        'LaborCost' => (float) $laborcost[$svckey]
                    ]);
                
                $svcperf = DB::table('service_performed')->orderBy('serviceperformedid', 'desc')->first();

                foreach($serviceid as $key=>$svcid){
                    if ($serviceid[$key] == $svcperf->ServiceID){
                        if ($quantity[$key] < 1 || $quantity[$key] == null || is_nan($quantity[$key]))
                            $quantity[$key] = 1;
                            
                        $subTotal = (float) $untprice[$key] * (float) $quantity[$key];
                        ProductsUsed::create([
                            'estimateid' => $estimate->EstimateID,
                            'serviceperformedid' => $svcperf->ServicePerformedID,
                            'productid' => $products[$key],
                            'dateused' => (date('Y-m-d')),
                            'quantity' => $quantity[$key],
                            'subtotal' => $subTotal
                        ]);
                    }
                }
            }

            $newRoute = "/addjoborder/" . $estimate->EstimateID. "/fromEstimate";
            DB::commit();
        }catch(\Illuminate\Database\QueryException $e){
            DB::rollBack();
            $err = $e->getMessage();
            return response()->json($err);
        }
        //return redirect()->route('fromEstimate', $estimateID->EstimateID);
        return response()->json(compact('newRoute'));
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
        $customer = Customer::findOrFail($id);
        $automobile = Automobile::where('customerid', $customer->CustomerID)->first();
        $plates = DB::table('automobile AS auto')
                ->where(['auto.customerid' => $id, 'auto.isActive' => 1])
                ->select('auto.plateno','auto.automobileid')
                ->get();
        return response()->json(compact('automobile', 'customer', 'plates'));
    }

    public function filterPlateNo($id)
    {
        $plates = DB::table('automobile AS auto')
                ->where(['auto.customerid' => $id, 'auto.isActive' => 1])
                ->select('auto.plateno','auto.automobileid')
                ->get();
        return response()->json(compact('plates'));
    }

    public function unfilterPlateNo($id){
        $plates = DB::table('automobile')
            ->orderBy('created_at', 'desc')
            ->where('isActive', 1)
            ->groupBy('plateno')
            ->distinct('plateno')
            ->select('plateno','automobileid')
            ->get();
        return response()->json(compact('plates'));
    }

    public function showAutomobile($id)
    {
        $automobile = Automobile::findOrFail($id);
        $customer = Customer::findOrFail($automobile->CustomerID);
        return response()->json(compact('customer', 'automobile'));
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
        $products = DB::table('product as pr')
            ->join('product_brand as pb', 'pr.productbrandid', '=', 'pb.productbrandid')
            ->join('product_unit_type as pt', 'pr.productunittypeid', '=', 'pt.productunittypeid')
            ->join('product_service AS ps', 'pr.productid', 'ps.productid')
            ->orderBy('pr.productid', 'desc')
            ->where(['ps.serviceid' => $id, 'pr.isActive' => 1])
            ->select(DB::raw("CONCAT('(', pr.partnumber, ') ', pb.brandname, ' ', pr.productname, ' ', pr.size, pt.unit) AS productname"), 'pr.productid', 'pr.price')
            ->groupBy('pr.productid')
            ->distinct('pr.productid')
            ->get();
        return response()->json(compact('products'));
    }

    public function getProductDetails($id)
    {
        $product = DB::table('product as pr')
            ->join('product_brand as pb', 'pr.productbrandid', '=', 'pb.productbrandid')
            ->join('product_unit_type as pt', 'pr.productunittypeid', '=', 'pt.productunittypeid')
            ->join('product_service AS ps', 'pr.productid', 'ps.productid')
            ->where(['pr.productid' => $id, 'pr.isActive' => 1])
            ->select(DB::raw("CONCAT('(', pr.partnumber, ') ', pb.brandname, ' ', pr.productname, ' ', pr.size, pt.unit) AS productname"), 'pr.productid', 'pr.price')
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
        $service = DB::table('service_price AS sp')
                    ->join('automobile_model as am', 'sp.modelid', '=', 'am.modelid')
                    ->join('service as se', 'sp.serviceid', '=', 'se.serviceid')
                    ->where(['sp.serviceid' => $id,'sp.modelid' => 1, 'sp.isActive' => 1])
                    ->select('se.servicename','sp.price', 'se.estimatedtime')
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
