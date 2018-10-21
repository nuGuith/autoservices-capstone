<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use App\Customer;
use App\Automobile;
use App\AutomobileMake;
use App\AutomobileModel;
use App\JobOrder;
use App\ServicePerformed;
use App\ProductUsed;
use App\Personnel_Job_Performed;
use App\Personnel_Job;
use App\JobDescription;
use App\Personnel_Header;
use Validator;
use Session;
use Redirect;
use Tables;
use DateTables;

class VehicleHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $customer = Customer::findOrFail($id);
        $automobiles = DB::table('automobile as a')
            ->join('automobile_model AS am', 'a.modelid', '=', 'am.modelid')
            ->join('automobile_make AS mk', 'am.makeid', '=', 'mk.makeid')
            ->where(['a.isActive'=>1, 'a.customerid'=>$id])
            ->select('a.*', 'mk.*', 'am.*')
            ->get();

        $showjoborder = DB::table('job_order as JO')
            ->join('automobile as AM', 'AM.automobileid', '=', 'JO.automobileid')
            ->where(['JO.isActive'=>1, 'AM.customerid'=>$id])
            ->select('JO.*', 'AM.*')
            ->get();

        $showestimate = DB::table('estimate as es')
            ->join('automobile as AM', 'AM.automobileid', '=', 'es.automobileid')
            ->where(['es.isActive'=>1, 'AM.customerid'=>$id])
            ->select('es.*', 'AM.*')
            ->get();

        $showbackjob = DB::table('job_order_backjob as bj')
            ->join('job_order as jo', 'bj.joborderid', '=', 'jo.joborderid')
            ->join('automobile as am', 'jo.automobileid', '=', 'am.automobileid')
            ->join('customer as cus', 'am.customerid', '=', 'cus.customerid')
            ->where(['bj.isActive'=>1, 'cus.customerid'=>$id])
            ->select('bj.*', 'jo.*', 'am.*', 'cus.*')
            ->get();
        //dd($automobiles);


        return view('customer.viewvehiclehistory', compact('customer', 'automobiles', 'showjoborder', 'showestimate', 'showbackjob'));
    }

    public function showHistory($id)
    {
        $auto = DB::table('automobile as a')
            ->join('automobile_model AS am', 'a.modelid', '=', 'am.modelid')
            ->join('automobile_make AS mk', 'am.makeid', '=', 'mk.makeid')
            ->where(['a.automobileid' => $id, 'a.isActive' => 1 ])
            ->get();

        return response()->json(compact('auto'));
    }

    public function showJobOrder($id)
    {

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
