<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehicleTypeController extends Controller
{	
    public function vehicletype(){
    	return view('vehicletype.vehicletype');
    }

 
}