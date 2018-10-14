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

class MechanicSkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $view = DB::table('personnel_skill as ps')
           ->JOIN('personnel_header as ph','ps.PersonnelID','=','ph.PersonnelID')
           ->JOIN('personnel_job as pj','pj.PersonnelID','=','ps.PersonnelID')
           ->JOIN('skill_header as sh','ps.SkillID','=','sh.SkillID')
           ->WHERE('pj.JobDescriptionID', 5)
           ->get();

      $skill = DB::table('skill_header')
              ->SELECT('SkillID','Skill','isActive')
              ->WHERE('isActive',1)
              ->GET();

      $perskill = DB::table('personnel_skill as ps')
            ->LEFTJOIN('personnel_header as ph','ps.PersonnelID','=','ph.PersonnelID')
            ->LEFTJOIN('skill_header as sh','ps.SkillID','=','sh.SkillID')
            ->WHERE(['ps.isActive'=>1, 'sh.isActive'=>1])
            ->get();

      $personnel = DB::table('personnel_skill as ps')
           ->JOIN('personnel_header as ph','ph.PersonnelID','=','ps.PersonnelID')
            ->JOIN('personnel_job as pj','pj.PersonnelID','=','ps.PersonnelID')
            ->WHERE('pj.JobDescriptionID', 5)
           ->Groupby('ps.PersonnelID')
           ->WHERE('ps.isActive',1)
           ->get();

      $per= DB::table('personnel_job')
            ->JOIN('personnel_header', 'personnel_job.PersonnelID', '=', 'personnel_header.PersonnelID')
            ->WHERE('JobDescriptionID', 5)
            ->Groupby('personnel_header.PersonnelID')
            ->WHERE('personnel_header.isActive', 1)
            ->get();
           // dd($personnel);

            // dd($per);

        return view ('personnel.mechanicskills',compact('view','skill','perskill','personnel','per'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      $skill = Input::get('skill');

      $emp = Input::get('emp');




      for($i=0;$i<=count($skill);$i++)
      {
          $PS = array("SkillID"=>$skill[$i],"PersonnelID"=>$emp);

          DB::table('personnel_skill')->insert($PS);

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
      $type = DB::table('personnel_header')
      ->WHERE('PersonnelID',Input::get('id'))
      ->get();

      $ps = DB::table('personnel_skill as ps')
      ->LEFTJOIN('skill_header as sh','ps.SkillID','=','sh.SkillId')
      ->WHERE('ps.isActive',1)
      ->WHERE('PersonnelID',Input::get('id'))
      ->get();

        return \Response::json(['type'=>$type,'ps'=>$ps]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

      $eskill = Input::get('eskill');
      $id = Input::get('eid');
      $emp = Input::get('eemp');
      $parr = Input::get('parr');
      $prodcount = Input::get('prodcount');
      $darr = Input::get('darr');


      if(count($parr)>0){

        for($x=0;$x<count($parr);$x++){

          $pskill = array("PersonnelID"=>$emp,"SkillID"=>$parr[$x]);
          DB::table('personnel_skill')->insert($pskill);
        }


      }

      if(count($darr)>0){

        for($z=0;$z<count($darr);$z++){

          DB::table('personnel_skill')
          ->WHERE('PersonnelSkillID',$darr[$z])
          ->UPDATE(['isActive'=>0]);

        }
      }


        for($i=0;$i<$prodcount;$i++){

          DB::table('personnel_skill')
          ->WHERE('PersonnelSkillID',$id[$i])
          ->UPDATE(['SkillID'=>$eskill[$i],'PersonnelID'=>$emp]);


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

      DB::table('personnel_job')
      ->WHERE('PersonnelID',Input::get('clid'))
      ->UPDATE(['isActive'=>0]);

      DB::table('personnel_skill')
      ->WHERE('PersonnelID',Input::get('clid'))
      ->UPDATE(['isActive'=>0]);




    }
}
