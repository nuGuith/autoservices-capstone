<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewCustomerController extends Controller
{	
    public function viewcustomer(){
    	return view('customer.viewcustomer');
    }

 
}