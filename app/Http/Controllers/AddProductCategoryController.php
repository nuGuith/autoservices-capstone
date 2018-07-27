<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddProductCategoryController extends Controller
{	
    public function addproductcategory(){
    	return view('productlisting.addproductcategory');
    }

 
}