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
<<<<<<< HEAD
        $service = DB::table('service')
            ->select('*')
            ->join('service_category', 'service.ServiceCategoryID', '=', 'service_category.ServiceCategoryID')
            ->where('service.isActive', '1')
            ->get();

=======


        $service = DB::table('service')
            ->select('*')
            ->join('service_category', 'service.ServiceCategoryID', '=', 'service_category.ServiceCategoryID')
            ->where('service.isActive', '1')
            ->get();

>>>>>>> guesshee-backup
        $category = DB::table('service_category')
            ->select('*')
            ->where('isActive', '1')
            ->get();

<<<<<<< HEAD
        // dd($kill);
        // dd($service);

        return View('service.service',compact('service','category'));
=======
        $perskill = DB::table('skill_header')
            ->select('*')
            ->where('isActive', '1')
            ->get();

        $kill = DB::table('service_skill')
            ->select('*')
            ->join('skill_header', 'service_skill.SkillID','=', 'skill_header.SkillID')
            ->get();

        // dd($kill);
        // dd($service);

        return View('service.service',compact('service','category','perskill','kill'));
>>>>>>> guesshee-backup
    }

    public function add(){
      $servicename = Input::get('servicename');
      $sc = Input::get('desc');
      $etime = Input::get('item');
<<<<<<< HEAD
      $ip = Input::get('iprice');
      $warr = Input::get('warr');
      $mil = Input::get('wm');
      $dm = Input::get('dm');

      $serv = array('ServiceCategoryID'=>$sc,'ServiceName'=>$servicename, 'EstimatedTime'=>$etime,'InitialPrice'=>$ip,
      'WarrantyDuration'=>$warr, 'WarrantyMileage'=>$mil, 'WarrantyDurationMode'=>$dm);
      DB::table('service')->insert($serv);

      $did = DB::table('service')->max('ServiceID');
=======
      $st = Input::get('sizetype');
      $class = Input::get('class');
      $ip = Input::get('iprice');
      $warr = Input::get('warr');
      $dm = Input::get('dm');
      $skills = Input::get('skill');

      $serv = array('ServiceCategoryID'=>$sc,'ServiceName'=>$servicename,'Sizetype'=>$st,'Class'=>$class,'EstimatedTime'=>$etime,'InitialPrice'=>$ip,
      'WarrantyDuration'=>$warr,'WarrantyDurationMode'=>$dm);
      DB::table('service')->insert($serv);

      $did = DB::table('service')->max('ServiceID');

      for($x=0;$x<count($skills);$x++)
      {

        $ic = array('ServiceID'=>$did,'SkillID'=>$skills[$x]);
        DB::table('service_skill')->insert($ic);

      }

>>>>>>> guesshee-backup
    }


    public function ret(){
      $ret = DB::table('service')
<<<<<<< HEAD
      ->SELECT('ServiceID','ServiceCategoryID','ServiceName','EstimatedTime', 'InitialPrice','WarrantyDuration','WarrantyDurationMode', 'WarrantyMileage')
=======
      ->SELECT('ServiceID','ServiceCategoryID','ServiceName','SizeType','Class','EstimatedTime', 'InitialPrice','WarrantyDuration','WarrantyDurationMode')
>>>>>>> guesshee-backup
      ->WHERE('ServiceID',Input::get('id'))
      ->get();

      $ski = DB::table('service_skill')
            ->SELECT('ServiceID','SkillID')
            ->WHERE('ServiceID',Input::get('id'))
            ->get();

<<<<<<< HEAD
=======

>>>>>>> guesshee-backup
      return \Response::json(['ret'=>$ret,'ski'=>$ski]);
    }

    public function edit(){
      $eservicename = Input::get('servicename');
      $esc = Input::get('desc');
      $eetime = Input::get('item');
<<<<<<< HEAD
      $eip = Input::get('iprice');
      $ewarr = Input::get('warr');
      $edm = Input::get('dm');
      $emil = Input::get('mil');
      $edid = Input::get('did');

      DB::table('service')
        ->WHERE('ServiceID',$edid)
        ->UPDATE(['ServiceCategoryID'=>$esc,'ServiceName'=>$eservicename, 'EstimatedTime'=>$eetime,'InitialPrice'=>$eip,
      'WarrantyDuration'=>$ewarr, 'WarrantyMileage'=>$emil, 'WarrantyDurationMode'=>$edm]);
=======
      $est = Input::get('sizetype');
      $eclass = Input::get('class');
      $eip = Input::get('iprice');
      $ewarr = Input::get('warr');
      $edm = Input::get('dm');
      $eskills = Input::get('skill');
      $edid = Input::get('did');
      $sid = Input::get('sid');

      DB::table('service')
      ->WHERE('ServiceID',$edid)
      ->UPDATE(['ServiceCategoryID'=>$esc,'ServiceName'=>$eservicename,'Sizetype'=>$est,'Class'=>$eclass,'EstimatedTime'=>$eetime,'InitialPrice'=>$eip,
      'WarrantyDuration'=>$ewarr,'WarrantyDurationMode'=>$edm]);

      if(count($sid)>0)
      {
        for($i=0;$i<count($sid);$i++)
        {

        DB::table('service_skill')
        ->WHERE('ServiceID','=', $sid[$i])
        ->delete();
        }

      }

      for($x=0;$x<count($eskills);$x++)
      {

        $ic = array('ServiceID'=>$edid,'SkillID'=>$eskills[$x]);
        DB::table('service_skill')->insert($ic);

      }


>>>>>>> guesshee-backup

    }


    public function delete(){
<<<<<<< HEAD
      DB::table('service')
      ->WHERE('ServiceID',Input::get('id'))
      ->UPDATE(['isActive'=>0]);
=======

      DB::table('service')
      ->WHERE('ServiceID',Input::get('id'))
      ->UPDATE(['isActive'=>0]);

      DB::table('service_skill')
      ->WHERE('ServiceID',Input::get('id'))
      ->UPDATE(['isActive'=>0]);
>>>>>>> guesshee-backup
    }

}
