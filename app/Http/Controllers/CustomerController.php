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
        $customer = Customer::findOrFail($id);
        return response()->json(compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $customNames = [
            'lastname' => 'Last Name',
            'middlename' => 'Middle Name',
            'firstname' => 'First Name',
            'contactno' => 'Contact Number',
            'completeaddress' => 'Address',
            'emailaddress' => 'Email Address',
            'pwd_sc_id' => 'PWD/SC ID',
        ];

        $customMessages = [
            'required' => 'The :attribute is required',
            'unique' => 'The :attribute is already taken',
            'max' => 'The :attribute has over the required maximum length.',
            'regex' => 'You cannot input special characters' 
        ];

        $validation = Validator::make($request->all(), [
            'lastname' => ['bail', 'required', 'max:150', 'regex:/^[^~`!$@#*_={}|\;<>,.?]+/'],
            'middlename' => ['bail', 'required', 'max:50', 'regex:/^[^~`!$@#*_={}|\;<>,.?]+/'],
            'firstname' => ['bail', 'required', 'max:50', 'regex:/^[^~`!$@#*_={}|\;<>,?]+/'],
            'contactno' => ['required','numeric'],
            'completeaddress' => ['required']
        ], $customMessages);

        $validation->setAttributeNames($customNames);
        if ($validation->fails()) {
            return redirect('customer')
                ->withErrors($validation, 'update')
                ->withInput();
        }
        else{
            try{
                DB::table('customer')
                    ->where('customer', $request->customerid)
                    ->update(['firstname' => ($request->firstname), 'middlename' => ($request->middlename), 'lastname' => ($request->lastname), 'contactno' => ($request->contactno), 'completeaddress' => ($request->completeaddress), 'emailaddress' => ($request->emailaddress), 'pwd_sc_id' => ($request->pwd_sc_id)]);
            }
            catch(\Illuminate\Database\QueryException $e){
                DB::rollBack();
                $errors = $e->getMessage();
                return redirect('customer')
                    ->withErrors($errors, 'update');
            }
            $request->session()->flash('success', 'Record successfully updated.');
            return redirect('customer');
        }
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