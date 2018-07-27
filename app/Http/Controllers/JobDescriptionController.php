<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobDescriptionController extends Controller
{	
    public function jobdescription(){
    	return view('personnel.jobdescription');
    }

 
}