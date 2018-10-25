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
use App\PersonnelJob;
use App\PersonnelJobPerformed;
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
        $estimates_in_joborder = DB::table('job_order as jo')
            ->join('estimate as e', 'jo.estimateid', '=', 'e.estimateid')
            ->where(['jo.isActive' => 1, 'e.isActive' => 1])
            ->pluck('jo.estimateid');
        
        $estimateids = DB::table('estimate')
            ->where('isActive', 1)
            ->whereNotIn('estimateid', $estimates_in_joborder)
            ->select('estimateid', DB::raw("CONCAT('ID: ',estimateid, ' - ', updated_at)  AS estimate_desc"))
            ->orderBy('estimateid', 'desc')
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
        
        $mechanic = DB::table('personnel_header as ph')
            ->join('personnel_job as pj', 'ph.personnelid', '=', 'pj.personnelid')
            ->orderBy('ph.personnelid', 'desc')
            ->where(['pj.jobdescriptionid' => 5, 'ph.isActive' => 1, 'pj.isActive' => 1])
            ->select('pj.personneljobid', DB::raw("CONCAT(ph.firstname, ph.middlename, ph.lastname)  AS personnelfullname"))
            ->groupBy('personnelfullname')
            ->distinct('personnelfullname')
            ->pluck('personnelfullname','pj.personneljobid');
        
        $serviceadvisor = DB::table('personnel_header as ph')
            ->join('personnel_job as pj', 'ph.personnelid', '=', 'pj.personnelid')
            ->orderBy('ph.personnelid', 'desc')
            ->where(['pj.jobdescriptionid' => 1, 'ph.isActive' => 1, 'pj.isActive' => 1])
            ->select('pj.personneljobid', DB::raw("CONCAT(ph.firstname, ph.middlename, ph.lastname)  AS personnelfullname"))
            ->groupBy('personnelfullname')
            ->distinct('personnelfullname')
            ->pluck('personnelfullname','pj.personneljobid');
        
        $qualityanalyst = DB::table('personnel_header as ph')
            ->join('personnel_job as pj', 'ph.personnelid', '=', 'pj.personnelid')
            ->orderBy('ph.personnelid', 'desc')
            ->where(['pj.jobdescriptionid' => 4, 'ph.isActive' => 1, 'pj.isActive' => 1])
            ->select('pj.personneljobid', DB::raw("CONCAT(ph.firstname, ph.middlename, ph.lastname)  AS personnelfullname"))
            ->groupBy('personnelfullname')
            ->distinct('personnelfullname')
            ->pluck('personnelfullname','pj.personneljobid');
        
        $inventorymanager = DB::table('personnel_header as ph')
            ->join('personnel_job as pj', 'ph.personnelid', '=', 'pj.personnelid')
            ->orderBy('ph.personnelid', 'desc')
            ->where(['pj.jobdescriptionid' => 3, 'ph.isActive' => 1, 'pj.isActive' => 1])
            ->select('pj.personneljobid', DB::raw("CONCAT(ph.firstname, ph.middlename, ph.lastname)  AS personnelfullname"))
            ->groupBy('personnelfullname')
            ->distinct('personnelfullname')
            ->pluck('personnelfullname','pj.personneljobid');
        
        $service_bays = ServiceBay::where('isActive', 1)
            ->pluck('servicebayname', 'servicebayid');

        $discounts = Discount::orderBy('discountid', 'desc')
            ->where('isActive', 1)
            ->pluck('discountname', 'discountid');

        $services = Service::orderBy('serviceid', 'desc')
            ->where('isActive', 1)
            ->pluck('servicename', 'serviceid');

        $products = DB::table('product as p')
            ->join('product_brand as pb', 'p.productbrandid', '=', 'pb.productbrandid')
            ->join('product_unit_type as pt', 'p.productunittypeid', '=', 'pt.productunittypeid')
            ->orderBy('p.productid', 'desc')
            ->where('p.isActive', 1)
            ->select(DB::raw("CONCAT('(', pr.partnumber, ') ',pb.brandname, ' ', p.productname, ' ', p.size, pt.unit) AS fullproductname"), 'p.productid')
            ->pluck('fullproductname', 'p.productid');

        $promos = PromoHeader::orderBy('promoid', 'desc')
            ->where('isActive', 1)
            ->pluck('promoname', 'promoid');

        $packages = PackageHeader::orderBy('packageid', 'desc')
            ->where('isActive', 1)
            ->pluck('packagename', 'packageid');

        $vat = DB::table('tax')
            ->where('isActive', 1)
            ->groupBy('taxid')
            ->orderBy('taxid', 'desc')
            ->first();

        $estimateids->prepend('Please choose an Estimate ID',0);
        $inspectionids->prepend('Please choose an Inspection ID',0);
        $customerids->prepend('Please select a customer',0);
        $automobiles->prepend('Select a Plate Number',0);
        $automobile_models->prepend('Select a Model',0);
        $service_bays->prepend('Please choose a Service Bay', 0);
        $discounts->prepend('Choose a Discount', 0);
        $services->prepend('Choose a Service', 0);
        $products->prepend('Choose a Product', 0);
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
        
        //dd(compact('estimate', 'customer', 'automobile', 'serviceperformed', 'products'));
        //return response()->json(compact('estimate', 'customer', 'automobile', 'service_performed', 'product_used'));
        return view ('joborder.addjoborder', compact('inspectionids','estimateids', 'customerids', 'automobiles', 'automobile_models', 'service_bays','discounts','services','products', 'mechanic', 'serviceadvisor', 'qualityanalyst', 'inventorymanager', 'promos','packages', 'estimate', 'automobile', 'vat'));
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
        
        $mechanic = DB::table('personnel_header as ph')
            ->join('personnel_job as pj', 'ph.personnelid', '=', 'pj.personnelid')
            ->orderBy('ph.personnelid', 'desc')
            ->where(['pj.jobdescriptionid' => 5, 'ph.isActive' => 1, 'pj.isActive' => 1])
            ->select('pj.personneljobid', DB::raw("CONCAT(ph.firstname, ph.middlename, ph.lastname)  AS personnelfullname"))
            ->groupBy('personnelfullname')
            ->distinct('personnelfullname')
            ->pluck('personnelfullname','pj.personneljobid');
        
        $serviceadvisor = DB::table('personnel_header as ph')
            ->join('personnel_job as pj', 'ph.personnelid', '=', 'pj.personnelid')
            ->orderBy('ph.personnelid', 'desc')
            ->where(['pj.jobdescriptionid' => 1, 'ph.isActive' => 1, 'pj.isActive' => 1])
            ->select('pj.personneljobid', DB::raw("CONCAT(ph.firstname, ph.middlename, ph.lastname)  AS personnelfullname"))
            ->groupBy('personnelfullname')
            ->distinct('personnelfullname')
            ->pluck('personnelfullname','pj.personneljobid');
        
        $qualityanalyst = DB::table('personnel_header as ph')
            ->join('personnel_job as pj', 'ph.personnelid', '=', 'pj.personnelid')
            ->orderBy('ph.personnelid', 'desc')
            ->where(['pj.jobdescriptionid' => 4, 'ph.isActive' => 1, 'pj.isActive' => 1])
            ->select('pj.personneljobid', DB::raw("CONCAT(ph.firstname, ph.middlename, ph.lastname)  AS personnelfullname"))
            ->groupBy('personnelfullname')
            ->distinct('personnelfullname')
            ->pluck('personnelfullname','pj.personneljobid');
        
        $inventorymanager = DB::table('personnel_header as ph')
            ->join('personnel_job as pj', 'ph.personnelid', '=', 'pj.personnelid')
            ->orderBy('ph.personnelid', 'desc')
            ->where(['pj.jobdescriptionid' => 3, 'ph.isActive' => 1, 'pj.isActive' => 1])
            ->select('pj.personneljobid', DB::raw("CONCAT(ph.firstname, ph.middlename, ph.lastname)  AS personnelfullname"))
            ->groupBy('personnelfullname')
            ->distinct('personnelfullname')
            ->pluck('personnelfullname','pj.personneljobid');
        
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
            ->join('service_category AS sc', 'sc.servicecategoryid', '=', 'svc.servicecategoryid')
            ->where(['sp.estimateid' => $id, 'sp.isActive' => 1])
            ->select('sp.*', 'svc.*', 'sc.servicecategoryname')
            ->get();

        $productused = DB::table('product_used AS pu')
            ->join('product as pr', 'pu.productid', '=', 'pr.productid')
            ->join('product_brand as pb', 'pr.productbrandid', '=', 'pb.productbrandid')
            ->join('product_unit_type as pt', 'pr.productunittypeid', '=', 'pt.productunittypeid')
            ->where(['estimateid' => $id, 'pu.isActive' => 1])
            ->select('pu.*', 'pr.*', DB::raw("CONCAT('(', pr.partnumber, ') ', pb.brandname, ' ', pr.productname, ' ', pr.size, pt.unit) AS fullproductname"))
            ->get();

        $vat = DB::table('tax')
            ->where('isActive', 1)
            ->groupBy('taxid')
            ->orderBy('taxid', 'desc')
            ->first();

        $estimateids->prepend('Please choose an Estimate ID',0);
        $inspectionids->prepend('Please choose an Inspection ID',0);
        $customerids->prepend('Please select a customer',0);
        $automobiles->prepend('Select a Plate Number',0);
        $automobile_models->prepend('Select a Model',0);
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
        return view ('joborder.addjoborder', compact('inspectionids','estimateids', 'customerids', 'automobiles', 'automobile_models', 'mechanic', 'serviceadvisor', 'qualityanalyst', 'inventorymanager', 'service_bays','discounts','services','products','promos','packages','estimate', 'customer', 'automobile','serviceperformed', 'productused', 'currentRoute', 'vat'));
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
                $auto = $request->automobile_model;
                Automobile::create([
                    'plateno' => ($request->plateno),
                    'customerid' => ($cust_id->CustomerID),
                    'modelid' => ($auto[0]),
                    'transmission' => ($request->transmission),
                    'chassisno' => ($request->chassisno),
                    'mileage' => ($request->mileage),
                    'color' => ($request->color),
                    'updated_at' => (date('Y-m-d H:i:s'))
                ]);
                $auto_id = DB::table('automobile')->orderBy('automobileid', 'desc')->first();
            }

            //check whether the job order is from an estimate
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
                'Status' => ('Pending'),
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
                foreach((array) $svcperf as $spKey=>$sp){
                    
                    $subTotal = 0;

                    if ($include[$spKey] == 'True') $bool = true;
                    else $bool = false;

                    /* $personnel_job = PersonnelJob::where(['PersonnelID' => $personnelperf[$spKey], 'JobDescriptionID' => 5, 'isActive' => 1])
                        ->first(); */

                    PersonnelJobPerformed::create([
                        'JobOrderID' => $jo->JobOrderID,
                        'PersonnelJobID' => $personnelperf[$spKey],
                    ]);

                    $personnelperformed = PersonnelJobPerformed::orderBy('PersonnelPerformedID', 'desc')->where(['isActive' => 1])
                    ->first();

                    ServicePerformed::where(['isActive' => 1, 'serviceperformedid' => $svcperf[$spKey]])
                    ->update([
                            'JobOrderID' => $jo->JobOrderID,
                            'PersonnelPerformedID' => $personnelperformed->PersonnelPerformedID,
                            'isPerformed' => $bool,
                            'LaborCost' => $laborcost[$spKey]
                        ]);
    
                    foreach((array) $productused as $key=>$pu){
                        if ($prodservperf[$key] == $svcperf[$spKey]){
                            if ($quantity[$key] < 1 || $quantity[$key] == null || is_nan($quantity[$key])) 
                                $quantity[$key] = 1;
                                
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
            else{
                
                $services = $request->service;
                $temp  = $request->personnelperformed;
                foreach($temp as $key=>$t)
                    if(!(is_null($t))){
                        $personnelperf[] = $temp[$key];
                    }

                $products = $request->product;
                $quantity = $request->quantity;
                $untprice = $request->unitprice;
                $laborcost = $request->laborcost;
                $serviceid= $request->serviceid;
    
                //if (is_array($services) || is_object($services))
                foreach((array) $services as $svckey=>$service){
                    
                    $subTotal = 0;
                    
                    /* $personnel_job = DB::table('personnel_job')
                        ->where(['PersonnelID' => 3, 'JobDescriptionID' => 5, 'isActive' => 1])
                        ->select('PersonnelJobID')
                        ->first(); */

                    PersonnelJobPerformed::create([
                        'JobOrderID' => $jo->JobOrderID,
                        'PersonnelJobID' => $personnelperf[$svckey],
                    ]);

                    $personnelperformed = DB::table('personnel_job_performed as pj')
                        ->where(['pj.isActive' => 1])
                        ->orderBy('pj.PersonnelPerformedID', 'desc')
                        ->select('pj.PersonnelPerformedID')
                        ->first();

                    ServicePerformed::create([
                            'ServiceID' => $service,
                            'JobOrderID' => $jo->JobOrderID,
                            'LaborCost' => $laborcost[$svckey],
                            'PersonnelPerformedID' =>  $personnelperformed->PersonnelPerformedID,
                            'isPerformed' => true,
                        ]);
                    
                    $svcperf = DB::table('service_performed')->orderBy('serviceperformedid', 'desc')->first();
    
                    $svcprc = DB::table('service_price')->where(['ServiceID' => $service, 'ModelID' => $request->modelid])->first();

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
            $newRoute = "/updatejoborder/" . $jo->JobOrderID;
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
        return response()->json(compact('response', 'newRoute'));
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
            ->join('service as se', 'sp.serviceid', '=', 'se.serviceid')
            ->join('service_category as sc', 'se.servicecategoryid', '=', 'sc.servicecategoryid')
            ->where(['sp.estimateid' => $id, 'sp.isActive' => 1])
            ->select('sp.*', 'sc.*', 'se.*')
            ->get();
        $productused = DB::table('product_used AS pu')
            ->join('product as pr', 'pu.productid', '=', 'pr.productid')
            ->join('product_brand as pb', 'pr.productbrandid', '=', 'pb.productbrandid')
            ->join('product_unit_type as pt', 'pr.productunittypeid', '=', 'pt.productunittypeid')
            ->where(['estimateid' => $id, 'pu.isActive' => 1])
            ->select('pu.*', 'pr.*', DB::raw("CONCAT(pb.brandname, ' ', pr.productname, ' ', pr.size, pt.unit) AS fullproductname"))
            ->get();
        return response()->json(compact('estimate', 'customer', 'automobile', 'serviceperformed', 'productused'));
    }

    public function searchByCustomerName($id)
    {
        $automobile = Automobile::where('customerid', '=', $id)->first();
        $estimate = Estimate::where('AutomobileID', '=', $automobile->AutomobileID)
            ->orderBy('estimateid', 'desc')
            ->select('estimateid', DB::table('estimate')->raw("CONCAT('ID: ',estimateid, ' - ', updated_at)  AS estimate_desc"))
            ->get();
        $joborder = JobOrder::where('AutomobileID', '=', $automobile->AutomobileID)->first();
        $customer = DB::table('customer AS c')
            ->join('automobile as a', 'c.customerid', '=', 'a.customerid')
            ->where(['c.isActive' => 1, 'c.customerid' =>$automobile->CustomerID])
            ->select('c.*', DB::table('customer')->raw("CONCAT(firstname, middlename, lastname)  AS fullname"))
            ->first();
        $plates = DB::table('automobile AS auto')
                ->where(['auto.customerid' => $id, 'auto.isActive' => 1])
                ->select('auto.plateno','auto.automobileid')
                ->get();
        return response()->json(compact('estimate', 'joborder', 'customer', 'automobile', 'plates'));
    }

    public function searchByPlateNo($id)
    {
        $automobile = Automobile::findOrFail($id);
        $estimate = Estimate::where('AutomobileID', $id)->first();
        $joborder = JobOrder::where('AutomobileID', $automobile->AutomobileID)->first();
        $customer = Customer::findOrFail($automobile->CustomerID);
        return response()->json(compact('estimate', 'joborder', 'customer', 'automobile'));
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

    public function unfilterEstimateIDs($id){
        $estimates = Estimate::orderBy('estimateid', 'desc')
            ->where('isActive', 1)
            ->select('estimateid', DB::table('estimate')
                                    ->raw("CONCAT('ID: ',estimateid, ' - ', updated_at)  AS estimate_desc"))
            ->get();
        return response()->json(compact('estimates'));
    }

    public function filterMechanic(Request $request, $id)
    {
        $skills = $request->input('filterTag', []);

        $mechanic = DB::table('personnel_header as ph')
            ->join('personnel_job as pj', 'ph.personnelid', '=', 'pj.personnelid')
            ->join('personnel_skill as ps', 'ph.personnelid', '=', 'ps.personnelid')
            ->where(['pj.jobdescriptionid' => 5, 'ph.isActive' => 1, 'pj.isActive' => 1])
            ->whereIn('ps.skillid', $skills)
            ->select('pj.personneljobid', DB::raw("CONCAT(ph.firstname, ph.middlename, ph.lastname)  AS personnelfullname"))
            ->groupBy('personnelfullname')
            ->orderBy('ph.personnelid', 'desc')
            ->distinct('personnelfullname')
            ->get();
        return response()->json(compact('mechanic','skills'));
    }
    
    public function unfilterMechanic($id)
    {
        $mechanic = DB::table('personnel_header as ph')
            ->join('personnel_job as pj', 'ph.personnelid', '=', 'pj.personnelid')
            ->where(['pj.jobdescriptionid' => 5, 'ph.isActive' => 1, 'pj.isActive' => 1])
            ->select('pj.personneljobid', DB::raw("CONCAT(ph.firstname, ph.middlename, ph.lastname)  AS personnelfullname"))
            ->groupBy('personnelfullname')
            ->orderBy('ph.personnelid', 'desc')
            ->distinct('personnelfullname')
            ->get();
        return response()->json(compact('mechanic'));
    }

    public function getFilteredProductList($id)
    {
        $products = DB::table('product as pr')
            ->join('product_brand as pb', 'pr.productbrandid', '=', 'pb.productbrandid')
            ->join('product_unit_type as pt', 'pr.productunittypeid', '=', 'pt.productunittypeid')
            ->join('product_service AS ps', 'pr.productid', 'ps.productid')
            ->orderBy('pr.productid', 'desc')
            ->where(['ps.serviceid' => $id, 'pr.isActive' => 1])
            ->select(DB::raw("CONCAT(pb.brandname, ' ', pr.productname, ' ', pr.size, pt.unit) AS fullproductname"), 'pr.productid', 'pr.price')
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
            ->where(['pr.productid' => $id, 'pr.isActive' => 1])
            ->select(DB::raw("CONCAT('(', pr.partnumber, ') ', pb.brandname, ' ', pr.productname, ' ', pr.size, pt.unit) AS fullproductname"), 'pr.price')
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

    public function toArray()
    {
        return array_map(function ($value) {
            return $value instanceof Arrayable ? $value->toArray() : $value;
        }, $this->items);
    }

    public function getPromoDetails($id)
    {
        $serviceinclusions = DB::table('promo_header as pm')
            ->join('promo_service_inclusions as psi', 'pm.promoid', '=', 'psi.promoid')
            ->join('service as svc', 'psi.serviceid', '=', 'svc.serviceid')
            ->select('svc.servicename')
            ->get();
        /* $serviceinclusions = array_map(function ($value) {
            return (array)$value;
        }, $serviceinclusions);*/
        /* $serviceinclusions = json_decode(json_encode($serviceinclusions), true);
        $serviceinclusions = implode("\n", (array)$serviceinclusions); */ 
        $productinclusions = DB::table('promo_header as pm')
            ->join('promo_product_inclusions as ppi', 'pm.promoid', '=', 'ppi.promoid')
            ->join('product as pr', 'ppi.productid', '=', 'pr.productid')
            ->select('pr.productname')
            ->get();
        /* $productinclusions = array_map(function ($value) {
            return (array)$value;
        }, $productinclusions->productname); 
        $productinclusions = json_decode(json_encode($productinclusions), true);
        $productinclusions = implode("\n", $productinclusions); */
        $promo = DB::table('promo_header')
            ->where(['promoid' => $id, 'isActive' => 1])
            ->select('promoname','price', DB::raw('1 as serviceinclusions'), DB::raw('1 as productinclusions'))
            ->first();
        $promo->serviceinclusions = $serviceinclusions;
        $promo->productinclusions = $productinclusions;
        return response()->json(compact('promo'));
    }

    public function getPackageDetails($id)
    {
        $package = DB::table('package_header')
            ->where(['packageid' => $id, 'isActive' => 1])
            ->select('packagename','price')
            ->first();
        return response()->json(compact('package'));
    }

    public function getServiceDetails($id)
    {
        $service = DB::table('service AS se')
            ->join('service_price AS sp', 'se.serviceid', 'sp.serviceid')
            ->join('service_category AS sc', 'sc.servicecategoryid', '=', 'se.servicecategoryid')
            ->where(['sp.serviceid' => $id, 'sp.isActive' => 1, 'sp.modelid' => 1])
            ->select('se.servicename','sp.price', 'se.estimatedtime', 'se.servicecategoryid', 'sc.servicecategoryname')
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
