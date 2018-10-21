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
use App\PersonnelHeader;

class UtilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $view = DB::table('settings')
      ->WHERE('isActive',1)
      ->get();

        return view ('utilities.utilities',compact('view'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

public function perph()
  {
    // $logo = ($_FILES["pic"]["name"]);
    $stid = Session::get('perId');
    $target_dir = "img/";
    $target_file = $target_dir.$_FILES["pic"]["name"];
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if ($uploadOk == 0)
    {
       Session::flash( 'message',"Sorry, your file was not uploaded.");

    // if everything is ok, try to upload file
    }
    else
    {

        if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file))
        {
      
        DB::table('settings')
       ->WHERE('SettingID',$stid)
       ->UPDATE(['image'=>($_FILES["pic"]["name"])]);
        }
        else
        {
          Session::flash('title', 'Error!');
        Session::flash('type', 'error');
            Session::flash( 'message',"Sorry, there was an error uploading your file.");
            // return \Redirect::back();
        }
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
        $ret = DB::table('settings')
        ->SELECT('SettingID','CompanyName','ContactNo','CompleteAddress','image','EmailAddress')
        ->WHERE('SettingID',Input::get('id'))
        ->get();


          return \Response::json(['per'=>$ret,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

      $epic = "";
      $ef = Input::get('fname');
      $eadd = Input::get('add');
      $ephone = Input::get('num');
      $eemail = Input::get('email');
      $pid = Input::get('id');


      DB::table('settings')
      ->WHERE('SettingID',Input::get('id'))
      ->UPDATE(['CompanyName'=>$ef,'CompleteAddress'=>$eadd,'ContactNo'=>$ephone,'EmailAddress'=>$eemail,
                'image'=>$epic]);
    Session::put('perId' , Input::get('id'));

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

    
}
