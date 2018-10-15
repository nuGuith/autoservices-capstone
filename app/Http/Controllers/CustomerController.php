<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use App\Customer;
use Validator;
use Session;
use Redirect;
use Tables;
use DateTables;

class CustomerController extends Controller
{	    
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     	$customers = DB::table('customer')
     		->where('isActive', 1)
     		->get();   

        return view('customer.customerinformation', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fname = Input::get('FNAME');
        $mname = Input::get('MNAME');
        $lname = Input::get('LNAME');
        $contact = Input::get('CONTACT');
        $address = Input::get('ADDRESS');
        $email = Input::get('EMAIL');
        $pwd_sc = Input::get('PWD_SC');

        DB::table('customer')
        ->WHERE('CustomerID', Input::get('CID'))
        ->UPDATE(['FirstName'=>$fname, 'MiddleName'=>$mname, 'LastName'=>$lname, 'ContactNo'=>$contact, 'PWD_SC_No'=>$pwd_sc, 'CompleteAddress'=>$address, 'EmailAddress'=>$email]);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int 
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
       
    }
 
}