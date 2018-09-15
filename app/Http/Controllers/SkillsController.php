<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Http\RedirectResponse;
use Validator;
use Session;
use Redirect;
use Tables;
use DateTables;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $view = DB::table('skill_header')
      ->SELECT('SkillID','Skill')
      ->WHERE('isActive',1)
      ->get();

        return view ('personnel.skills',compact('view'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $skill = Input::get('skills');


      $data = array('Skill'=>$skill);

      DB::table('skill_header')->insert($data);



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
      $ret = DB::table('skill_header')
      ->SELECT('SkillID','Skill')
      ->WHERE('SkillID',Input::get('id'))
      ->get();

      return \Response::json(['sk'=>$ret]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
      $name = Input::get('skills');

      DB::table('skill_header')
      ->WHERE('SkillID',Input::get('id'))
      ->UPDATE(['Skill'=>$name]);
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

      DB::table('skill_header')
      ->WHERE('SkillID',Input::get('id'))
      ->UPDATE(['isActive'=>0]);

    }
}
