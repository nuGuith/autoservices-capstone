<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use App\Automobile;
use Validator;
use Session;
use Redirect;

class AddVehicleTypeController extends Controller
{	
    public function index(){
    	return view('vehicletype.addvehicletype');
    }

    public function store(Request $request){

    }
 
}