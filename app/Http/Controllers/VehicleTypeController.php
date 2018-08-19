<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Illuminate\Http\RedirectResponse;


class VehicleTypeController extends Controller
{
    public function index(){

        $makes = DB::table('automobile_make')
            ->where('isActive', 1)
            ->get();
        $models = DB::table('automobile_model as md')
          ->leftJoin('automobile_make as mk', 'mk.makeid', '=', 'md.makeid')
          ->leftJoin('automobile as auto', 'auto.modelid', '=', 'md.modelid')
        	->select('md.ModelID','md.MakeID', 'md.Model', 'auto.transmission','md.year')
        	->where('md.isActive', 1)
          ->where('mk.isActive',1)
        	->get();

    	return view('vehicletype.vehicletype', compact('makes', 'models'));
    }

    public function addvehicletype(){
      $trans = 'Automatic';
      $stat = 1;

      $make = Input::get('make');
      $mod = Input::get('model');
      $year = Input::get('year');

      $make = array("Make"=>$make,"isActive"=>$stat);
      DB::table('automobile_make')->insert($make);

      $temp = DB::table('automobile_make')->max('MakeID');
      //get Max MakeID for temporary input


      for($i=0;$i<=count($mod);$i++)
      {
        $model = array("Model"=>$mod[$i],"MakeID"=>$temp,"year"=>$year[$i],"isActive"=>$stat);
        DB::table('automobile_model')->insert($model);

      }



    }

    public function RetrieveVT(){

      //get vehicle make
      $vm = DB::table('automobile_make as mk')
      ->SELECT('mk.MakeID','mk.Make')
      ->where('mk.MakeID',Input::get('MakeID'))
      ->get();

      //get vehicle $model
      $vmod = DB::table('automobile_model as md')
      ->SELECT('md.ModelID','md.Model','md.year','md.Transmission')
      ->WHERE('md.MakeID',Input::get('MakeID'))
      ->get();

      return \Response::json(['Brand'=>$vm,'Mod'=>$vmod]);


    }

    public function editvehicletype(){
      //Update vehicle make
      DB::table('automobile_make as mk')
      ->WHERE('mk.MakeID',Input::get('makeid'))
      ->UPDATE(['mk.Make'=>Input::get('make')]);

      //Update vehicle Model

      $emod = Input::get('model');
      $eyear = Input::get('year');
      $eid  = Input::get('id');



      for($i=0;$i<=count($emod);$i++)
      {

      DB::table('automobile_model as md')
      ->WHERE('md.ModelID',$eid[$i])
      ->UPDATE(['md.Model'=>$emod[$i],'md.year'=>$eyear[$i]]);

      }







    }

    public function Deletevehicletype(){

      //soft delete 1 = active , 0= disabled

      DB::table('automobile_make as mk')
      ->WHERE('mk.MakeID',Input::get('mid'))
      ->UPDATE(['mk.isActive'=>0]);

      DB::table('automobile_model as md')
      ->WHERE('md.MakeID',Input::get('mid'))
      ->UPDATE(['md.isActive'=>0]);



    }


}
