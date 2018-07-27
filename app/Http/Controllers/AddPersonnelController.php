<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddPersonnelController extends Controller
{	
    public function addpersonnel(){
    	return view('personnel.addpersonnel');
    }

 
}