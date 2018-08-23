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
use App\ServicePerformed;
use App\ProductUsed;
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
            ->pluck('fullname','c.customerid');
        
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
        $personnels->prepend('Assign Personnel', 0);
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

        //dd($personnelskills);
        return view ('joborder.addjoborder', compact('inspectionids','estimateids', 'customerids', 'automobiles', 'automobile_models', 'service_bays','discounts','services','products',  'personnels', 'promos','packages'));
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
                Customer::where(['isActive' => 1, 'customerid' => $cust_id->CustomerID])
                        ->update([
                            'firstname' => $firstname,
                            'middlename' => $middlename, 
                            'lastname' => $request->lname, 
                            'ContactNo' => $request->contact, 
                            'emailaddress' => $request->email, 
                            'pwd_sc_no' => $request->pwd_sc_no, 
                            'completeaddress' => $request->address
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
                    'completeaddress' => ($request->address)
                ]);
                $cust_id = Customer::orderBy('customerid', 'desc')->first();
            }

            if ($request->has('automobileid')){
                $auto_id->AutomobileID = ($request->automobileid);
                Automobile::where(['isActive' => 1, 'automobileid' => $auto_id->AutomobileID])
                ->update([
                    'plateno' => ($request->plateno),
                    'customerid' => ($cust_id),
                    'modelid' => ($request->modelid),
                    'chassisno' => ($request->chassisno),
                    'mileage' => ($request->mileage),
                    'color' => ($request->color)
                ]);
            }
            else {
                Automobile::create([
                    'plateno' => ($request->plateno),
                    'customerid' => ($cust_id),
                    'modelid' => ($request->modelid),
                    'chassisno' => ($request->chassisno),
                    'mileage' => ($request->mileage),
                    'color' => ($request->color)
                ]);
                $auto_id = Automobile::orderBy('automobileid', 'desc')->first();
            }
                
            JobOrder::create([
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
            return redirect('/addjoborder')
                        ->withErrors($err)
                        ->withInput();
            return response()->json(compact('err'));
        }
        return redirect('/joborder')->with('status', 'Record saved!');
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
        return response()->json(compact('estimate', 'customer', 'automobile'));
    }

    public function searchByCustomerName($id)
    {
        $automobile = Automobile::where('customerid', '=', $id)->first();
        $estimate = Estimate::where('AutomobileID', '=', $automobile->AutomobileID)->first();
        $customer = Customer::findOrFail($id);
        return response()->json(compact('estimate', 'customer', 'automobile'));
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
