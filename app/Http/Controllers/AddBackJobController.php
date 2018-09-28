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

        $estimateids = Estimate::orderBy('estimateid', 'desc')
        ->where('isActive', 1)
        ->select('estimateid', DB::table('estimate')
                                ->raw("CONCAT('ID: ',estimateid, ' - ', updated_at)  AS estimate_desc"))
        ->pluck('estimate_desc','estimateid');

        $joborderids = JobOrder::orderBy('estimateid', 'desc')
        ->where('isActive', 1)
        ->select('joborderid', DB::table('joborder')
                                ->raw("CONCAT('ID: ',joborderid, ' - ', updated_at)  AS joborder_desc"))
        ->pluck('joborder_desc', 'joborderid');

        $personnels = PersonnelHeader::where('isActive', 1)
        ->select('personnelid', DB::table('personnel_header')->raw("CONCAT(firstname, middlename, lastname)  AS personnelfullname"))
        ->pluck('personnelfullname','personnelid');
    
        $service_bays = ServiceBay::where('isActive', 1)
        ->pluck('servicebayname', 'servicebayid');

        $estimateids->prepend('Please choose an Estimate ID', 0);
        $joborderids->prepend('Please choose a Job Order ID', 0);

        $estimate = new Estimate;
        $joborder = new JobOrder;

        return view('backjob.addbackjob', compact('inspects', 'checklists', 'estimateids', 'joborderids', 'personnels', 'service_bays'));
    }

    public function fromEstimate($id)
    {
        $estimateids = Estimate::orderBy('estimateid', 'desc')
        ->where('isActive', 1)
        ->select('estimateid', DB::table('estimate')
                                ->raw("CONCAT('ID: ',estimateid, ' - ', updated_at)  AS estimate_desc"))
        ->pluck('estimate_desc','estimateid');

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
        ->pluck('plateno','automobileid');

        $automobile_models = DB::table('automobile_model')
                                ->leftJoin('automobile_make', 'automobile_model.makeid', '=', 'automobile_make.makeid')
                                ->where('automobile_model.isActive',1)
                                ->pluck(DB::raw("CONCAT(make, ' - ', model, ' - ', SUBSTRING(year, 1, 4),'.',SUBSTRING(year, 6, 2))  AS automobile_models"), 'modelid');

        $estimate = Estimate::findOrFail($id);
        $automobile = Automobile::findOrFail($estimate->AutomobileID);

        $estimateids->prepend('Please choose an Estimate ID',0);


        $currentRoute = Route::currentRouteName();

        return view('inspect.addinspect', compact('estimateids', 'customerids', 'automobiles', 'automobile_models', 'currentRoute'));
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

    public function showEstimate($id)
    {
        $estimate = Estimate::findOrFail($id);
        $customer = Customer::findOrFail($automobile->CustomerID);
        return response()->json(compact('estimate', 'customer'));
    }
}
