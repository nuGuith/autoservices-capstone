<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Illuminate\Http\RedirectResponse;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function service(){
        $service = DB::table('service')
            ->select('*')
            ->join('service_category', 'service.ServiceCategoryID', '=', 'service_category.ServiceCategoryID')
            ->where('service.isActive', '1')
            ->get();

        $category = DB::table('service_category')
            ->select('*')
            ->where('isActive', '1')
            ->get();

        // dd($kill);
        // dd($service);

        return View('service.service',compact('service','category'));
    }

    public function add(){
      $servicename = Input::get('servicename');
      $sc = Input::get('desc');
      $etime = Input::get('item');
      $ip = Input::get('iprice');
      $warr = Input::get('warr');
      $mil = Input::get('wm');
      $dm = Input::get('dm');

      $serv = array('ServiceCategoryID'=>$sc,'ServiceName'=>$servicename, 'EstimatedTime'=>$etime,'InitialPrice'=>$ip,
      'WarrantyDuration'=>$warr, 'WarrantyMileage'=>$mil, 'WarrantyDurationMode'=>$dm);
      DB::table('service')->insert($serv);

      $did = DB::table('service')->max('ServiceID');
    }


    public function ret(){
      $ret = DB::table('service')
      ->SELECT('ServiceID','ServiceCategoryID','ServiceName','EstimatedTime', 'InitialPrice','WarrantyDuration','WarrantyDurationMode')
      ->WHERE('ServiceID',Input::get('id'))
      ->get();

      $ski = DB::table('service_skill')
            ->SELECT('ServiceID','SkillID')
            ->WHERE('ServiceID',Input::get('id'))
            ->get();

      return \Response::json(['ret'=>$ret,'ski'=>$ski]);
    }

    public function edit(){
      $eservicename = Input::get('servicename');
      $esc = Input::get('desc');
      $eetime = Input::get('item');
      $eip = Input::get('iprice');
      $ewarr = Input::get('warr');
      $edm = Input::get('dm');
      $emil = Input::get('mil');
      $edid = Input::get('did');

      DB::table('service')
        ->WHERE('ServiceID',$edid)
        ->UPDATE(['ServiceCategoryID'=>$esc,'ServiceName'=>$eservicename, 'EstimatedTime'=>$eetime,'InitialPrice'=>$eip,
      'WarrantyDuration'=>$ewarr,'WarrantyDurationMode'=>$edm, 'WarrantyMileage'=>$emil]);

     
    }


    public function delete(){
      DB::table('service')
      ->WHERE('ServiceID',Input::get('id'))
      ->UPDATE(['isActive'=>0]);
    }

}
