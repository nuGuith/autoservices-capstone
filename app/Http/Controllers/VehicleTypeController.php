<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VehicleTypeController extends Controller
{	
    public function index(){

        $makes = DB::table('automobile_make')
            ->where('isActive', 1)
            ->get();
        $models = DB::table('automobile_model as md')
        	->leftJoin('automobile_make as mk', 'mk.makeid', '=', 'md.makeid')
        	->select('md.MakeID', 'md.Model')
        	->where('md.isActive', 1)
        	->get();
        /*dd($models, $makes);*/
    	return view('vehicletype.vehicletype', compact('makes', 'models'));
    }

 
}