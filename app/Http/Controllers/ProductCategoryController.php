<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{	
    public function productcategory(){
    	return view('productlisting.productcategory');
    }

 
}