<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddProductController extends Controller
{	
    public function addproduct(){
    	return view('productlisting.addproduct');
    }

 
}