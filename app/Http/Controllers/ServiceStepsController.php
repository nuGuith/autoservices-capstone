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

class ServiceStepsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ser = DB::table('service')
            ->WHERE('isActive',1)
            ->GET();

        $srcount = DB::table('service_steps as ss')
            ->LEFTJOIN('service as s','ss.ServiceID','=','s.ServiceID')
            ->groupby('ss.ServiceID')
            ->WHERE('ss.isActive',1)
            ->GET();

        $view = DB::table('service_steps as ss')
            ->LEFTJOIN('service as s','ss.ServiceID','=','s.ServiceID')
            ->WHERE('ss.isActive',1)
            ->GET();


        return view ('service.servicesteps',compact('ser','srcount','view'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = Input::get('serv');
        $step = Input::get('step');
        $arr = Input::get('arr');

        $st = array("ServiceID"=>$service,"Step"=>$step);
        DB::table('service_steps')->insert($st);

        for($i=0;$i<count($arr);$i++)
      {
        $sr = array("ServiceID"=>$service,"Step"=>$arr[$i]);
        DB::table('service_steps')->insert($sr);

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
        $stp = DB::table('service_steps')
            ->WHERE('ServiceID',Input::get('id'))
            ->GET();

        return \Response::json(['stp'=>$stp]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $id = Input::get('id');
        $step = Input::get('step');
        $service = Input::get('service');

      for($i=0;$i<count($step);$i++)
      {

      DB::table('service_steps')
      ->WHERE('ServiceStepID',$id[$i])
      ->UPDATE(['ServiceID'=>$service,'Step'=>$step[$i]]);

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

         DB::table('service_steps')
        ->WHERE('ServiceID',Input::get('id'))
        ->UPDATE(['isActive'=>0]);

   


       
    }
}
