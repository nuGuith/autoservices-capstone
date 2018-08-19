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

class PersonnelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $view = DB::table('personnel_header')
      ->WHERE('isActive',1)
      ->get();

      $jt = DB::table('job_description')
      ->WHERE('isActive',1)
      ->get();

      $pj = DB::table('personnel_job as pj')
      ->LEFTJOIN('job_description as jd','pj.JobDescriptionID','=','jd.JobDescriptionID')
      ->get();

        return view ('personnel.personnel',compact('view','jt','pj'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pic = Input::get('pic');
        $f = Input::get('fname');
        $m = Input::get('mname');
        $s = Input::get('sname');
        $add = Input::get('add');
        $phone = Input::get('num');
        $email = Input::get('email');
        $bday = Input::get('bday');
        $pos = "Manager";

        $jt = Input::get('jt');




        $data = array('FirstName'=>$f,'MiddleName'=>$m,'LastName'=>$s,
                      'Position'=>$pos,'Birthday'=>$bday,'ContactNo'=>$phone,'CompleteAddress'=>$add,'image'=>$pic,'emailaddress'=>$email);

        DB::table('personnel_header')->insert($data);

        $temp = DB::table('personnel_header')->max('PersonnelID');




        for($i=0;$i<=count($jt);$i++)
        {
          $model = array("PersonnelID"=>$temp,"JobDescriptionID"=>$jt[$i]);
          DB::table('personnel_job')->insert($model);

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
        $ret = DB::table('personnel_header')
        ->SELECT('PersonnelID','FirstName','MiddleName','LastName','ContactNo','CompleteAddress','image','Birthday','EmailAddress')
        ->WHERE('PersonnelID',Input::get('id'))
        ->get();

        $job = DB::table('personnel_job')
            ->SELECT('JobDescriptionID')
            ->WHERE('PersonnelID',Input::get('id'))
            ->get();

          return \Response::json(['per'=>$ret,'job'=>$job]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

      $epic = Input::get('pic');
      $ef = Input::get('fname');
      $em = Input::get('mname');
      $es = Input::get('sname');
      $eadd = Input::get('add');
      $ephone = Input::get('num');
      $eemail = Input::get('email');
      $ebday = Input::get('bday');
      $epos = "Manager";


      DB::table('personnel_header')
      ->WHERE('PersonnelID',Input::get('id'))
      ->UPDATE(['FirstName'=>$ef,'MiddleName'=>$em,'LastName'=>$es,'CompleteAddress'=>$eadd,'ContactNo'=>$ephone,'EmailAddress'=>$eemail,
                'Birthday'=>$ebday,'Position'=>$epos,'image'=>$epic]);



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

      DB::table('personnel_header')
      ->WHERE('PersonnelID',Input::get('id'))
      ->UPDATE(['isActive'=>0]);



    }
}
