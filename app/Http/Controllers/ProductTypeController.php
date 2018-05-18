<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductTypeController extends Controller
{	
    public function producttype(){
    	return view('productlisting.producttype');
    }

 
}