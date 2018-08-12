<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use App\JobOrder;
use App\Automobile;
use App\Customer;
use Validator;
use Session;
use Redirect;

class JobOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $joborders = JobOrder::orderBy('joborderid', 'desc')
       ->where('isActive', 1)
       ->get();
       $automobiles = Automobile::where('isActive', 1)->get();
       $automobile_models = DB::table('automobile_model')
                                ->leftJoin('automobile_make', 'automobile_model.makeid', '=', 'automobile_make.makeid')
                                ->where('automobile_model.isActive',1)
                                ->select(DB::raw("CONCAT(make, ' - ', model, ' (', year, ')')  AS AutomobileModel"), 'ModelID')
                                ->get();
       $customers = Customer::where('isActive', 1)
       ->select('CustomerID', DB::table('customer')->raw("CONCAT(firstname, middlename, lastname)  AS FullName"), 'ContactNo','CompleteAddress')
       ->get();

       //dd($joborders, $automobiles, $customers);
       return view ('joborder.joborder', compact('joborders','automobiles','automobile_models', 'customers'));
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
