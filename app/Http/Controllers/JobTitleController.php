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

class JobTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $view = DB::table('job_description')
      ->SELECT('JobDescriptionID','JobDescription')
      ->WHERE('isActive',1)
      ->get();

        return view ('personnel.jobtitle',compact('view'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $jd = Input::get('title');

      $disc = array("JobDescription"=>$jd);
      DB::table('job_description')->INSERT($disc);
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
        $jd = DB::table('job_description')
        ->SELECT('JobDescriptionID','JobDescription')
        ->WHERE('JobDescriptionID',Input::get('id'))
        ->get();

        return \Response::json(['jd'=>$jd]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
      $jd = Input::get('jd');

      DB::table('job_description')
      ->WHERE('JobDescriptionID',Input::get('id'))
      ->UPDATE(['JobDescription'=>$jd]);
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


      DB::table('job_description')
      ->WHERE('JobDescriptionID',Input::get('id'))
      ->UPDATE(['isActive'=>0]);

    }
}
