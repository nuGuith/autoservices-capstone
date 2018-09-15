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
        // $pic = Input::get('pic');
        $f = Input::get('fname');
        $m = Input::get('mname');
        $s = Input::get('sname');
        $add = Input::get('add');
        $phone = Input::get('num');
        $email = Input::get('email');
        $bday = Input::get('bday');
        $pos = "Manager";

        $jt = Input::get('jt');
// null photo
        $pic = "";
        
        $data = array('FirstName'=>$f,'MiddleName'=>$m,'LastName'=>$s,
                      'Position'=>$pos,'Birthday'=>$bday,'ContactNo'=>$phone,'CompleteAddress'=>$add,'image'=>$pic,'emailaddress'=>$email);

        DB::table('personnel_header')->insert($data);

        $temp = DB::table('personnel_header')->max('PersonnelID');


        foreach ($jt as $jobt) {
          DB::table('personnel_job')
          ->insert([
            'PersonnelID' => $temp,
            'JobDescriptionID' => $jobt,
          ]);
        }

        // for($i=0;$i<=count($jt);$i++)
        // {
        //   $model = array("PersonnelID"=>$temp,"JobDescriptionID"=>$jt[$i]);
        //   DB::table('personnel_job')->insert($model);

        // }


    Session::put('perId' , $temp);
  }

public function perph()
  {
    // $logo = ($_FILES["pic"]["name"]);
    $stid = Session::get('perId');
    $target_dir = "img/";
    $target_file = $target_dir.$_FILES["pic"]["name"];
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    // if(isset($_POST["submit"])) 
    // {
    //     $check = getimagesize($_FILES["pic"]["tmp_name"]);
    //     if($check !== false) 
    //     {
    //       // Session::flash( 'message',"File is an image - " . $check["mime"] . ".");
           
    //         $uploadOk = 1;
    //     } else 
    //     {
    //       // Session::flash( 'message',"File is not an image.");
    //         $uploadOk = 0;
    //     }
    // }
    // Check if file already exists
    // if (file_exists($target_file)) 
    // {
    //  $id = Session::get('driverId');
    //     $company = MDriverInfo::find($id);
    //  $company->strDriverPhoto=($_FILES["pic"]["name"]);
    //  $company->save();

    //  // return \Redirect::back();
    //     $uploadOk = 0;
    // }
    // // Check file size
    // if ($_FILES["pic"]["size"] > 500000) {
    //  Session::flash( 'message',"Sorry, your file is too large.");

    //     $uploadOk = 0;
    // }
    // // Allow certain file formats
    // if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    // && $imageFileType != "gif" ) 
    // {
    //   Session::flash( 'message',"Sorry, only JPG, JPEG, PNG & GIF files are allowed.");   
     
    //     $uploadOk = 0;
    // }
    // // // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) 
    {
       Session::flash( 'message',"Sorry, your file was not uploaded.");

       
    // if everything is ok, try to upload file
    } 
    else 
    {
      
        if (move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file)) 
        {
        // $shifttemp = PersonnelHeader::find($stid);
        // $shifttemp->image= ;
        // $shifttemp->save();
        DB::table('personnel_header')
      ->WHERE('PersonnelID',$stid)
      ->UPDATE(['image'=>($_FILES["pic"]["name"])]);
        // Session::flash('title', 'Success!');
        // Session::flash('type', "success");
        // Session::flash('message', "Driver succesfully created!");
        // Session::forget('driverId');
        // return \Redirect::back();
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

      $epic = "";
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
