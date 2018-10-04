<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Route;
use App\JobOrder;
use App\Estimate;
use App\InspectionHeader;
use App\Customer;
use App\Automobile;
use App\ServiceBay;
use App\Discount;
use App\Service;
use App\Product;
use App\ServicePerformed;
use App\ProductsUsed;
use App\PromoHeader;
use App\PackageHeader;
use App\PersonnelHeader;
use App\PersonnelSkill;
use App\ServiceSkill;
use App\SkillHeader;
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

        $customerids = DB::table('customer AS c')
            ->join('automobile as a', 'c.customerid', '=', 'a.customerid')
            ->orderBy('a.customerid', 'desc')
            ->where('c.isActive', 1)
            ->select('c.customerid', DB::table('customer')->raw("CONCAT(firstname, middlename, lastname)  AS fullname"))
            ->groupBy('fullname')
            ->distinct('fullname')
            ->pluck('fullname','c.customerid');
        
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
        
        $mechanic = DB::table('personnel_header as ph')
            ->join('personnel_job as pj', 'ph.personnelid', '=', 'pj.personnelid')
            ->orderBy('ph.personnelid', 'desc')
            ->where(['pj.jobdescriptionid' => 5, 'ph.isActive' => 1, 'pj.isActive' => 1])
            ->select('ph.personnelid', DB::raw("CONCAT(ph.firstname, ph.middlename, ph.lastname)  AS personnelfullname"))
            ->groupBy('personnelfullname')
            ->distinct('personnelfullname')
            ->pluck('personnelfullname','ph.personnelid');
        
        $serviceadvisor = DB::table('personnel_header as ph')
            ->join('personnel_job as pj', 'ph.personnelid', '=', 'pj.personnelid')
            ->orderBy('ph.personnelid', 'desc')
            ->where(['pj.jobdescriptionid' => 1, 'ph.isActive' => 1, 'pj.isActive' => 1])
            ->select('ph.personnelid', DB::raw("CONCAT(ph.firstname, ph.middlename, ph.lastname)  AS personnelfullname"))
            ->groupBy('personnelfullname')
            ->distinct('personnelfullname')
            ->pluck('personnelfullname','ph.personnelid');
        
        $qualityanalyst = DB::table('personnel_header as ph')
            ->join('personnel_job as pj', 'ph.personnelid', '=', 'pj.personnelid')
            ->orderBy('ph.personnelid', 'desc')
            ->where(['pj.jobdescriptionid' => 4, 'ph.isActive' => 1, 'pj.isActive' => 1])
            ->select('ph.personnelid', DB::raw("CONCAT(ph.firstname, ph.middlename, ph.lastname)  AS personnelfullname"))
            ->groupBy('personnelfullname')
            ->distinct('personnelfullname')
            ->pluck('personnelfullname','ph.personnelid');
        
        $inventorymanager = DB::table('personnel_header as ph')
            ->join('personnel_job as pj', 'ph.personnelid', '=', 'pj.personnelid')
            ->orderBy('ph.personnelid', 'desc')
            ->where(['pj.jobdescriptionid' => 3, 'ph.isActive' => 1, 'pj.isActive' => 1])
            ->select('ph.personnelid', DB::raw("CONCAT(ph.firstname, ph.middlename, ph.lastname)  AS personnelfullname"))
            ->groupBy('personnelfullname')
            ->distinct('personnelfullname')
            ->pluck('personnelfullname','ph.personnelid');
        
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
        $personnels->prepend('Assign a personnel', 0);
        $mechanic->prepend('Assign a Mechanic', 0);
        $serviceadvisor->prepend('Assign a Service Advisor', 0);
        $qualityanalyst->prepend('Assign a Quality Analyst', 0);
        $inventorymanager->prepend('Assign an Inventory Manager', 0);
        $promos->prepend('Choose a Promo', 0);
        $packages->prepend('Choose a Package', 0);

        $serviceskills = DB::table('service_skill as ss')
            ->join('service as ser', 'ss.serviceid', '=', 'ser.serviceid')
            ->join('skill_header as sk', 'ss.skillid', '=', 'sk.skillid')
            ->where(['ss.serviceid' => 6, 'ss.isActive' => 1])
            ->select('ss.*', 'ser.*', 'sk.*')
            ->get();

        $personnelskills = DB::table('personnel_skill as ps')
            ->join('skill_header as sh', 'ps.skillid', '=', 'sh.skillid')
            ->join('personnel_header as ph', 'ps.personnelid', '=', 'ph.personnelid')
            ->where(['ps.isActive' => 1, 'ps.SkillID' => 3])
            ->select('ps.*', 'ph.*', 'sh.*')
            ->get();

        $estimate = new Estimate;
        $automobile = new Automobile;
        //dd($personnelskills);
        
        //dd(compact('estimate', 'customer', 'automobile', 'serviceperformed', 'productused'));
        //return response()->json(compact('estimate', 'customer', 'automobile', 'service_performed', 'product_used'));
        return view ('joborder.addjoborder', compact('inspectionids','estimateids', 'customerids', 'automobiles', 'automobile_models', 'service_bays','discounts','services','products',  'personnels', 'mechanic', 'serviceadvisor', 'qualityanalyst', 'inventorymanager', 'promos','packages', 'estimate', 'automobile'));
    }

    
    public function fromEstimate($id)
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

        $customerids = DB::table('customer AS c')
        ->join('automobile as a', 'c.customerid', '=', 'a.customerid')
        ->orderBy('a.customerid', 'desc')
        ->where('c.isActive', 1)
        ->select('c.customerid', DB::table('customer')->raw("CONCAT(firstname, middlename, lastname)  AS fullname"))
        ->groupBy('fullname')
        ->distinct('fullname')
        ->pluck('fullname','c.customerid');
        
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

        $mechanic = DB::table('personnel_header as ph')
            ->join('personnel_job as pj', 'ph.personnelid', '=', 'pj.personnelid')
            ->orderBy('ph.personnelid', 'desc')
            ->where(['pj.jobdescriptionid' => 5, 'ph.isActive' => 1, 'pj.isActive' => 1])
            ->select('ph.personnelid', DB::raw("CONCAT(ph.firstname, ph.middlename, ph.lastname)  AS personnelfullname"))
            ->groupBy('personnelfullname')
            ->distinct('personnelfullname')
            ->pluck('personnelfullname','ph.personnelid');
        
        $serviceadvisor = DB::table('personnel_header as ph')
            ->join('personnel_job as pj', 'ph.personnelid', '=', 'pj.personnelid')
            ->orderBy('ph.personnelid', 'desc')
            ->where(['pj.jobdescriptionid' => 1, 'ph.isActive' => 1, 'pj.isActive' => 1])
            ->select('ph.personnelid', DB::raw("CONCAT(ph.firstname, ph.middlename, ph.lastname)  AS personnelfullname"))
            ->groupBy('personnelfullname')
            ->distinct('personnelfullname')
            ->pluck('personnelfullname','ph.personnelid');
        
        $qualityanalyst = DB::table('personnel_header as ph')
            ->join('personnel_job as pj', 'ph.personnelid', '=', 'pj.personnelid')
            ->orderBy('ph.personnelid', 'desc')
            ->where(['pj.jobdescriptionid' => 4, 'ph.isActive' => 1, 'pj.isActive' => 1])
            ->select('ph.personnelid', DB::raw("CONCAT(ph.firstname, ph.middlename, ph.lastname)  AS personnelfullname"))
            ->groupBy('personnelfullname')
            ->distinct('personnelfullname')
            ->pluck('personnelfullname','ph.personnelid');
        
        $inventorymanager = DB::table('personnel_header as ph')
            ->join('personnel_job as pj', 'ph.personnelid', '=', 'pj.personnelid')
            ->orderBy('ph.personnelid', 'desc')
            ->where(['pj.jobdescriptionid' => 3, 'ph.isActive' => 1, 'pj.isActive' => 1])
            ->select('ph.personnelid', DB::raw("CONCAT(ph.firstname, ph.middlename, ph.lastname)  AS personnelfullname"))
            ->groupBy('personnelfullname')
            ->distinct('personnelfullname')
            ->pluck('personnelfullname','ph.personnelid');
        
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

        $estimate = Estimate::findOrFail($id);
        $automobile = Automobile::findOrFail($estimate->AutomobileID);
        $customer = Customer::findOrFail($automobile->CustomerID);

        
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

        $estimateids->prepend('Please choose an Estimate ID',0);
        $inspectionids->prepend('Please choose an Inspection ID',0);
        $customerids->prepend('Please select a customer',0);
        $automobiles->prepend('Select a Plate Number',0);
        $automobile_models->prepend('Select a Model',0);
        $personnels->prepend('Assign a personnel',0);
        $mechanic->prepend('Assign a Mechanic', 0);
        $serviceadvisor->prepend('Assign a Service Advisor', 0);
        $qualityanalyst->prepend('Assign a Quality Analyst', 0);
        $inventorymanager->prepend('Assign an Inventory Manager', 0);
        $service_bays->prepend('Please choose a Service Bay', 0);
        $discounts->prepend('Choose a Discount', 0);
        $services->prepend('Choose a Service', 0);
        $products->prepend('Choose a Product', 0);
        $promos->prepend('Choose a Promo', 0);
        $packages->prepend('Choose a Package', 0);

        $currentRoute = Route::currentRouteName();

        //dd(compact('inspectionids','estimateids', 'customerids', 'automobiles', 'automobile_models', 'service_bays','discounts','services','products','promos','packages','estimate', 'customer', 'automobile', 'currentRoute'));
        return view ('joborder.addjoborder', compact('inspectionids','estimateids', 'customerids', 'automobiles', 'automobile_models', 'personnels', 'mechanic', 'serviceadvisor', 'qualityanalyst', 'inventorymanager', 'service_bays','discounts','services','products','promos','packages','estimate', 'customer', 'automobile','serviceperformed', 'productused', 'currentRoute'));
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
                    'modelid' => ($request->modelid),
                    'transmission' => ($request->transmission),
                    'chassisno' => ($request->chassisno),
                    'mileage' => ($request->mileage),
                    'color' => ($request->color),
                    'updated_at' => (date('Y-m-d H:i:s'))
                ]);
                $auto_id = DB::table('automobile')->orderBy('automobileid', 'desc')->first();
            }
            $estimateid = $request->estimateid;
            if ($estimateid === null)
                $estimateid = $request->estimateID;

            JobOrder::create([
                'AutomobileID' => ($auto_id->AutomobileID),
                'InspectionID' => ($request->inspectionid),
                'EstimateID' => ($estimateid),
                'ServiceBayID' => ($request->servicebayid),
                'PromoID' => ($request->promoid),
                'PackageID' => ($request->packageid),
                'DiscountID' => ($request->discountid),
                'UserID' => (1),
                'Status' => ('Ongoing'),
                'Agreement_Timestamp' => (date('Y-m-d H:i:s')),
                'DiscountedAmount' => ($request->discountedamt),
                'TotalAmountDue' => ($request->totalamtdue),
                'updated_at' => (date('Y-m-d H:i:s'))
            ]);

            
            $jo = DB::table('job_order')->orderBy('joborderid', 'desc')->first();
            
            if($request->has('serviceperformed')){
                $svcperf = $request->serviceperformed;
                $personnelperf = $request->personnelperformed;
                $include = $request->include;
                $laborcost = $request->laborcost;
                //$services = $request->service;
                $products = $request->product;
                $prodservperf = $request->prodservperf;
                $productused = $request->productused;
                $quantity = $request->quantity;
                $untprice = $request->unitprice;
    
                //if (is_array($services) || is_object($services))
                foreach($svcperf as $spKey=>$sp){
                    
                    $subTotal = 0;

                    if ($include[$spKey] == 'True') $bool = true;
                    else $bool = false;

                    //DB::table('personnel_performed')

                    ServicePerformed::where(['isActive' => 1, 'serviceperformedid' => $svcperf[$spKey]])
                    ->update([
                            'JobOrderID' => $jo->JobOrderID,
                            'PersonnelPerformedID' => $personnelperf[$spKey],
                            'isPerformed' => $bool,
                            'LaborCost' => $laborcost[$spKey]
                        ]);
    
                    foreach($productused as $key=>$pu){
                        if ($prodservperf[$key] == $svcperf[$spKey]){
                            if ($quantity[$key] < 1 || $quantity[$key] == null || is_nan($quantity[$key])) $quantity[$key] = 1;
                            $subTotal = (float) $untprice[$key] * (float) $quantity[$key];
                            ProductsUsed::where(['isActive' => 1, 'productusedid' => $productused[$key]])
                            ->update([
                                'dateused' => (date('Y-m-d')),
                                'joborderid' => $jo->JobOrderID,
                                'quantity' => $quantity[$key],
                                'subtotal' => $subTotal
                            ]);
                        }
                    }
                }
            }

            if($request->has('service')){
                
                $services = $request->service;
                $products = $request->product;
                $quantity = $request->quantity;
                $untprice = $request->unitprice;
                $laborcost = $request->laborcost;
                $serviceid= $request->serviceid;
    
                //if (is_array($services) || is_object($services))
                foreach((array) $services as $svckey=>$service){
                    
                    $subTotal = 0;
                    $svcprc = DB::table('service_price')->where(['ServiceID' => $service, 'ModelID' => $request->modelid])->first();
                    ServicePerformed::create([
                            'ServiceID' => $service,
                            'JobOrderID' => $jo->JobOrderID,
                            'LaborCost' => $laborcost[$svckey],
                            //'PersonnelPerformedID' => $personnelperf[$svcKey],
                            'isPerformed' => true,
                        ]);
                    
                    $svcperf = DB::table('service_performed')->orderBy('serviceperformedid', 'desc')->first();
    
                    foreach((array) $serviceid as $key=>$svcid){
                        if ($serviceid[$key] == $svcperf->ServiceID){
                            if ($quantity[$key] < 1 || $quantity[$key] == null || is_nan($quantity[$key]))
                                $quantity[$key] = 1;

                            $subTotal = (float) $untprice[$key] * (float) $quantity[$key];
                            ProductsUsed::create([
                                'joborderid' => $jo->JobOrderID,
                                'serviceperformedid' => $svcperf->ServicePerformedID,
                                'productid' => $products[$key],
                                'dateused' => (date('Y-m-d')),
                                'quantity' => $quantity[$key],
                                'subtotal' => $subTotal
                            ]);
                        }
                    }
                }
            }

            DB::commit();
            $newRoute = "/joborder";
        }catch(\Illuminate\Database\QueryException $e){
            DB::rollBack();
            $err = $e->getMessage();
            //return redirect('/addjoborder')->withErrors($err)->withInput();
            return response()->json(compact('err'));
        }
        $response = array(
            'status' => 'success',
            'msg' => 'Record saved successfully!',
        );
        //return redirect('/joborder');
        return response()->json(compact('response'));
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

    public function showEstimate($id)
    {
        $estimate = Estimate::findOrFail($id);
        $automobile = Automobile::findOrFail($estimate->AutomobileID);
        $customer = Customer::findOrFail($automobile->CustomerID);
        $serviceperformed = DB::table('service_performed AS sp')
            ->where(['sp.estimateid' => $id, 'sp.isActive' => 1])
            ->select('sp.*')
            ->get();
        $productused = DB::table('product_used AS pu')
            ->where(['estimateid' => $id, 'isActive' => 1])
            ->select('pu.*')
            ->get();
        return response()->json(compact('estimate', 'customer', 'automobile', 'serviceperformed', 'productused'));
    }

    public function searchByCustomerName($id)
    {
        $automobile = Automobile::where('customerid', '=', $id)->first();
        $estimate = Estimate::where('AutomobileID', '=', $automobile->AutomobileID)->first();
        $customer = Customer::findOrFail($id);
        $plates = DB::table('automobile AS auto')
                ->where(['auto.customerid' => $id, 'auto.isActive' => 1])
                ->select('auto.plateno','auto.automobileid')
                ->get();
        return response()->json(compact('estimate', 'customer', 'automobile', 'plates'));
    }
    
    public function searchByPlateNo($id)
    {
        $automobile = Automobile::findOrFail($id);
        $estimate = Estimate::where('AutomobileID', $id)->first();
        $customer = Customer::findOrFail($automobile->CustomerID);
        return response()->json(compact('estimate', 'customer', 'automobile'));
    }

    public function getFilteredProductList($id)
    {
        $products = DB::table('product AS pr')
            ->join('product_service AS ps', 'pr.productid', 'ps.productid')
            ->where(['ps.serviceid' => $id, 'ps.isActive' => 1])
            ->select('pr.productname','pr.productid', 'pr.price')
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
            ->select('se.servicename','sp.price', 'se.estimatedtime')
            ->first();
        return response()->json(compact('service'));
    }

    public function computeEstimatedTime($id)
    {
        $estimate = DB::table('service')
            ->where(['isActive'=>1, 'serviceid' => $id])
            ->select('serviceid', 'servicename', 'estimatedtime')
            ->get();
    }

    public function getServiceSkill($id)
    {
        $serviceskills = DB::table('service_skill as ss')
            ->join('service as ser', 'ss.serviceid', '=', 'ser.serviceid')
            ->join('skill_header as sk', 'ss.skillid', '=', 'sk.skillid')
            ->where(['ss.serviceid' => $id, 'ss.isActive' => 1])
            ->select('ss.*', 'ser.*', 'sk.*')
            ->get();
        return response()->json(compact('serviceskills'));
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
