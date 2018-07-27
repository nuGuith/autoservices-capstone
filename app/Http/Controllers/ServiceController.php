<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{	

    public function servicecategory(){
    	return view('service.servicecategory');	
    }

    public function addservicecategory(){
    	return view('service.addservicecategory');	
    }

    public function service(){
    	return view('service.service');	
    }

    public function servicebay(){
    	return view('service.servicebay');	
    }

    public function inspectionchecklist(){
    	return view('service.inspectionchecklist');	
    }
}
