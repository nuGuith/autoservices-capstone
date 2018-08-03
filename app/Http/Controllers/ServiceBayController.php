<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\ServiceBay;
use App\Http\Controllers\Controller;
use Validator;
use Redirect;
use Session;

class ServiceBayController extends Controller
{	

    /**
     * Show the default page
     */
    public function index(){
        $servicebays = DB::table('service_bay')
        ->where('isActive', 1)
        ->get();
    	return view('service.servicebay', ['servicebays' => $servicebays]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
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
        $customNames = [
                'servicebayname' => 'Service Bay Name',
                'description' => 'Description',
            ];
        $customMessages = [
                'servicebayname.regex' => 'You cannot input special characters into :attribute field. Sorry. :(',
                'servicebayname.unique' => 'The :attribute you entered is already taken.',
            ];
        $validation = Validator::make($request->all(), [
            'servicebayname' => ['bail','required','max:100', 'unique:service_bay', 'regex:/^[^~`!$@#*_={}|\;<>,.?]+/'],
            'description' => ['nullable','max:255']
        ], $customMessages);
        
        $validation->setAttributeNames($customNames);
        if ($validation->fails()) {
            return redirect('servicebay')
                ->withErrors($validation, 'add')
                ->withInput();
        }
        else{
            try{
                DB::beginTransaction();
                ServiceBay::create([
                    'servicebayname' => trim($request->servicebayname),
                    'description' => trim($request->description),
                ]);
                DB::commit();
            }catch(\Illuminate\Database\QueryException $e){
                DB::rollBack();
                $errors = $e->getMessage();
                return redirect('servicebay')
                    ->withErrors($errors, 'add');
            }
            $request->session()->flash('success', 'Record successfully added.');  
            return redirect('servicebay');
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $bay = ServiceBay::findOrFail($id);
        return response()->json(compact('bay'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request)
    {
        $customNames = [
            'servicebayname' => 'Service Bay Name',
            'description' => 'Description',
        ];
        $customMessages = [
                'servicebayname.regex' => 'You cannot input special characters into :attribute field. Sorry. :(',
                'servicebayname.unique' => 'The :attribute you entered is already taken.',
            ];
        $validation = Validator::make($request->all(), [
            'servicebayname' => [
                'bail',
                'required',
                'max:100',
                Rule::unique('service_bay')->ignore($request->servicebayid, 'servicebayid'),
                'regex:/^[^~`!@#*_={}|\;<>,.?]+$/'
                ],
            'description' => ['nullable','max:255']
        ], $customMessages);
        
        $validation->setAttributeNames($customNames);
        if ($validation->fails()) {
            return redirect('servicebay')
                ->withErrors($validation, 'update')
                ->withInput();
        }
        else{
            try{
                DB::table('service_bay')
                    ->where('servicebayid', $request->servicebayid)
                    ->update(['servicebayname' => ($request->servicebayname), 'description' => ($request->description)]);
            }
            catch(\Illuminate\Database\QueryException $e){
                DB::rollBack();
                $errors = $e->getMessage();
                return redirect('servicebay')
                    ->withErrors($errors, 'update');
            }
            $request->session()->flash('success', 'Record successfully updated.');  
            return redirect('servicebay');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        try{
            ServiceCategory::findOrFail($id);
            ServiceCategory::destroy($id);
        }
        catch(\Illuminate\Database\QueryException $e){
            $err = $e->getMessage();
                return redirect('servicecategory')
                    ->withErrors($err, 'delete');
        }
        return redirect('servicecategory');
    }

    public function delete(Request $request)
    {
        try{
            DB::table('service_bay')
                    ->where('servicebayid', $request->deleteId)
                    ->update(['isActive' => 0]);
        }
        catch(\Illuminate\Database\QueryException $e){
            $err = $e->getMessage();
                return redirect('servicebay')
                    ->withErrors($err, 'delete');
        }
        return redirect('servicebay');
    }

}
