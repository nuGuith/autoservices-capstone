<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddVehicleTypeController extends Controller
{	
    public function addvehicletype(){
    	return view('vehicletype.addvehicletype');
    }

 
}