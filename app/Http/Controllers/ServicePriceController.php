<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Validator;
use Session;
use Redirect;
use Tables;
use DateTables;

class ServicePriceController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicle = DB::table('automobile_make as mak')
                ->LEFTJOIN('automobile_model as mod','mak.MakeID','=','mod.MakeID')
                ->where('mak.isActive',1)
                ->GET();

        $service = DB::table('service')
                ->SELECT('ServiceID','ServiceName')
                ->where('isActive',1)
                ->get();

        $view = DB::table('service_price as sp')
                ->LEFTJOIN('automobile_model as mod','sp.ModelID','=','mod.ModelID')
                ->LEFTJOIN('automobile_make as mk','mod.MakeID','=','mk.MakeID')
<<<<<<< HEAD
                ->WHERE('sp.isActive', 1)
=======
                ->WHERE('sp.isActive',1)
>>>>>>> guesshee-backup
                ->GET();

        $sname = DB::table('service_price as sp')
                ->LEFTJOIN('service as s','sp.ServiceID','=','s.ServiceID')
                ->SELECT('s.ServiceName','sp.Price','sp.ServiceID','sp.ServicePriceID', 'sp.ModelID')
                ->WHERE('sp.isActive',1)
                ->groupby('sp.Price')
                ->GET();
        //dd($sname);

<<<<<<< HEAD
=======


>>>>>>> guesshee-backup
        return view ('service.serviceprice',compact('vehicle','service','view','sname'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehicle = Input::get('veh');
        $service = Input::get('ser');
        $price = Input::get('pr');

        for($i=0;$i<count($vehicle);$i++)
      {
          $PS = array("ServiceID"=>$service,"ModelID"=>$vehicle[$i],"Price"=>$price);

          DB::table('service_price')->insert($PS);

      }
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
    public function show()
    {
         $type = DB::table('service_price as sp')
        ->LEFTJOIN('automobile_model as md','md.ModelID','=','sp.ModelID')
        ->SELECT('sp.ModelID','sp.ServicePriceID','sp.Price','sp.ServiceID')
        ->WHERE('ServiceID',Input::get('id'))
        ->WHERE('sp.isActive',1)
        ->get();

        return \Response::json(['ty'=>$type]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    function edit()
    {
        $evehicle = Input::get('eveh');
        $service = Input::get('eser');
        $price = Input::get('epr');
        $spid = Input::get('idarr');

        if(count($spid)>0)
        {
        
        for($i=0;$i<count($spid);$i++)
        {

        DB::table('service_price')
        ->WHERE('ServicePriceID','=', $spid[$i])
        ->delete();
        }   
        }

        for($i=0;$i<count($evehicle);$i++)
      {
          $PS = array("ServiceID"=>$service,"ModelID"=>$evehicle[$i],"Price"=>$price);
          DB::table('service_price')->insert($PS);

      }

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
    public function delete()
    {
        DB::table('service_price')
          ->WHERE('ServiceID',Input::get('id'))
          ->UPDATE(['isActive'=>0]);


    }
}
