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
use App\PersonnelHeader;
use App\Inspection;
use App\InspectionChecklist;
use App\InspectionType;
use App\InspectionHeader;
use Validator;
use Session;
use Redirect;

class AddBackJobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $inspects = DB::table('inspection_checklist as ic')
        ->where('ic.isActive', 1)
        ->select('ic.inspectiontypeid', 'inspectionitem')
        ->get();

        $checklists = InspectionType::where('isActive', 1)
        ->select('inspectiontypeid', 'inspectiontypename')
        ->get();

        $joborderids = JobOrder::orderBy('joborderid', 'desc')
        ->where(['isActive' => 1, 'isFinalized' => 1])
        ->select('joborderid', DB::table('joborder')
                                ->raw("CONCAT('ID: ',joborderid, ' - ', updated_at)  AS joborder_desc"))
        ->pluck('joborder_desc', 'joborderid');

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

        $joborderids->prepend('Please choose a Job Order ID', 0);
        $customerids->prepend('Please select a Customer',0);
        $automobiles->prepend('Please select a Plate Number',0);
        $mechanic->prepend('Assign a Mechanic', 0);
        $serviceadvisor->prepend('Assign a Service Advisor', 0);
        $qualityanalyst->prepend('Assign a Quality Analyst', 0);
        $inventorymanager->prepend('Assign an Inventory Manager', 0);
        $service_bays->prepend('Please select a Service Bay',0);

        return view('backjob.addbackjob', compact('inspects', 'checklists', 'joborderids', 'customerids', 'automobiles', 'mechanic',  'serviceadvisor', 'qualityanalyst', 'inventorymanager', 'service_bays'));
    }


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

    public function showJobOrder($id)
    {
        $joborder = DB::table('job_order as jo')
            ->join('automobile as au', 'jo.automobileid', '=', 'au.automobileid')
            ->join('customer as cs', 'au.customerid', '=', 'cs.customerid')
            ->where('jo.joborderid', $id)
            ->select('cs.*', 'au.*', 'jo.*', DB::table('customer')->raw("CONCAT(firstname, middlename, lastname)  AS fullname"))
            ->groupBy(['cs.firstname', 'au.automobileid'])
            ->orderBy('cs.customerid', 'asc')
            ->distinct('cs.fullname')
            ->first();
        $automobile = DB::table('automobile as au')
            ->join('automobile_model as am', 'au.modelid', '=', 'am.modelid')
            ->join('automobile_make as ak', 'am.makeid', '=', 'ak.makeid')
            ->where('automobileid', $joborder->AutomobileID)
            ->select('am.*', 'ak.*', 'au.*', DB::raw('CONCAT(ak.make, " ", am.model) as make_model'))
            ->first();
        $customer = DB::table('customer AS c')
            ->join('automobile as a', 'c.customerid', '=', 'a.customerid')
            ->where(['c.isActive' => 1, 'c.customerid' =>$joborder->CustomerID])
            ->select('c.*', DB::table('customer')->raw("CONCAT(firstname, middlename, lastname)  AS fullname"))
            ->groupBy('fullname')
            ->orderBy('c.customerid', 'asc')
            ->first();
        $serviceperformed = DB::table('service_performed AS sp')
            ->join('service as se', 'sp.serviceid', '=', 'se.serviceid')
            ->join('service_category as sc', 'se.servicecategoryid', '=', 'sc.servicecategoryid')
            ->where(['sp.joborderid' => $id, 'sp.isActive' => 1])
            ->select('sp.*', 'sc.*', 'se.*', DB::raw("CONCAT(warrantyduration, ' ', warrantydurationmode) as warrantyperiod"), DB::raw('0 as hasWarranty'))
            ->get();
        $productused = DB::table('product_used AS pu')
            ->join('product as pr', 'pu.productid', '=', 'pr.productid')
            ->join('product_brand as pb', 'pr.productbrandid', '=', 'pb.productbrandid')
            ->join('product_unit_type as pt', 'pr.productunittypeid', '=', 'pt.productunittypeid')
            ->where(['joborderid' => $id, 'pu.isActive' => 1])
            ->select('pu.*', 'pr.*', DB::raw("CONCAT(pb.brandname, ' ', pr.productname, ' ', pr.size, pt.unit) AS fullproductname"), DB::raw("CONCAT(warrantyduration, ' ', warrantydurationmode) as warrantyperiod"), DB::raw('0 as hasWarranty'))
            ->get();
        $currentdate = date("Y-m-d H:i:s");

        foreach($serviceperformed as $sp){
            if($sp->warrantyperiod == "0 " || $sp->warrantyperiod == 0)
                $sp->hasWarranty = true;
            else{
                $sp->warrantyperiod = strtotime($joborder->Release_Timestamp."+ ".$sp->warrantyperiod);
                $sp->warrantyperiod = date("Y-m-d H:i:s", $sp->warrantyperiod);
                if($currentdate <= $sp->warrantyperiod)
                    $sp->hasWarranty = true;
                else
                    $sp->hasWarranty = false;
            }
        }
        foreach($productused as $pu){
            if($pu->warrantyperiod == "0 " || $pu->warrantyperiod == 0)
                $pu->hasWarranty = true;
            else{
                $pu->warrantyperiod = strtotime($joborder->Release_Timestamp."+ ".$pu->warrantyperiod);
                $pu->warrantyperiod = date("Y-m-d H:i:s", $pu->warrantyperiod);
                if($currentdate <= $pu->warrantyperiod)
                    $pu->hasWarranty = true;
                else
                    $pu->hasWarranty = false;
            }
        }
        return response()->json(compact('joborder', 'customer', 'automobile', 'serviceperformed', 'productused', 'currentdate'));
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
