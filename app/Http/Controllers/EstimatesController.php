<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use App\Estimate;
use App\Customer;
use App\Automobile;
use App\AutomobileMake;
use App\AutomobileModel;
use App\Inspection;
use App\Service;
use App\ServiceBay;
use App\Product;
use Validator;
use Session;
use Redirect;
use Tables;
use DateTables;

class EstimatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $automobilemakes = DB::table('automobile_make as ma')
            ->leftjoin('automobile_model as am', 'ma.makeid', '=', 'am.makeid')
            ->select('ma.*', 'am.*')
            ->where('ma.isActive', 1)
            ->get();
        
        $automobiles = DB::table('automobile as a')
            ->leftjoin('automobile_model as am', 'a.modelid', '=', 'am.modelid')
            ->select('am.*', 'a.*')
            ->where('a.isActive', 1)
            ->get();

        $estimates = DB::table('estimate as e')
            ->leftjoin('customer as c', 'e.customerid', '=', 'c.customerid')
            ->leftjoin('automobile as a', 'e.automobileid', '=', 'a.automobileid')
            ->join('automobile_model as am', 'a.modelid', '=', 'am.modelid')
            ->select('e.*', 'c.*', 'a.*', 'am.*')
            ->where('e.isActive', 1)
            ->get();
        
        return view('estimates.estimates')->withEstimates($estimates)->withAutomobiles($automobiles)->withAutomobileMakes($automobilemakes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('estimates.addestimates');
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
    public function show($estimateid)
    {
        $estimate = Estimate::findOrFail($estimateid);
        return view('estimates.viewestimates')->withEstimate($estimate);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view ('estimates.editestimates');
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
        try{
            DB::table('estimate')
                    ->where('estimateid', $request->deleteId)
                    ->update(['isActive' => 0]);
        }
        catch(\Illuminate\Database\QueryException $e){
            $err = $e->getMessage();
                return redirect('estimates')
                    ->withErrors($err, 'delete');
        }
        return redirect('estimates');  
    }
}
