<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddProductTypeController extends Controller
{	
    public function addproducttype(){
    	return view('productlisting.addproducttype');
    }

 
}