<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Service;
use App\ServiceCategory;
use App\Http\Controllers\Controller;
use Validator;
use Redirect;
use Session;

class ServiceController extends Controller
{	

    /**
     * This serves as the index hehe
     */
    public function index(){
        $services = DB::table('service as se')
                    ->leftJoin('service_category as sc', 'se.servicecategoryid', '=', 'sc.servicecategoryid')
                    ->where('se.isActive',1)
                    ->get();
        $categories = ServiceCategory::where('isActive', 1)->pluck('servicecategoryname', 'servicecategoryid');
        $categories->prepend('Please choose a category',0);
        return view('service.service', ['services' => $services, 'categories' => $categories]);
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
                'servicename' => 'Service Name',
                'servicecategoryid' => 'Service Category',
                'estimatedtime' => 'Estimated Time',
                'sizetype' => 'Size Type',
                'class' => 'Class',
                'initialprice' => 'Initial Price',
            ]; 
            /** This is an array of custom variable names you could set so that in case there is an Exception, 
            * the variable name displayed in the view is a decent one and not a name straight from the database. */
        $customMessages = [
                'servicename.regex' => 'You cannot input special characters into :attribute field. Sorry. :(',
                'servicename.unique' => 'The :attribute you entered is already taken.',
            ];
            /** This is an array of custom messages you could set so aside from the default ones by laravel. */
        $validation = Validator::make($request->all(), [
            'servicename' => [
                'bail',
                'required',
                'max:255',
                Rule::unique('service')->ignore(0, 'isactive'),
                'regex:/^[^~`!$@#*_={}|\;<>,.?]+/'
            ],
            'servicecategoryid' => ['required'],
            'estimatedtime' => ['required','numeric','between:1,999'],
            'initialprice' => ['bail','required','numeric','between:0.00,99999.9999']
        ], $customMessages);
            /** The $validation variable using the 'Validator' facade takes the arguments $request->all() getting all the data sent over the Request
             * from the view/user input, next argument is an array of rules for validation and finally the $customMessages.
             */
        
        $validation->setAttributeNames($customNames);
            /** setting the custom names */

        if ($validation->fails()) {
            /* dd($request); */
            return redirect('service')
                ->withErrors($validation, 'add')
                ->withInput();
        }
        else{
            try{
                DB::beginTransaction();
                Service::create([ 
                    'servicename' => trim($request->servicename),
                    'servicecategoryid' => ($request->servicecategoryid),
                    'estimatedtime' => trim($request->estimatedtime),
                    'sizetype' => trim($request->sizetype),
                    'class' => trim($request->class),
                    'initialprice' => ($request->initialprice)
                ]);
                DB::commit();
            }catch(\Illuminate\Database\QueryException $e){
                DB::rollBack();
                $errors = $e->getMessage();
                return redirect('service')
                    ->withErrors($errors, 'add');
            }
            $request->session()->flash('success', 'Record successfully added.');  
            return redirect('service');
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
        $service = Service::findOrFail($id);
        /*  DB::table('service as se')
                ->leftJoin('service_category as sc', 'se.servicecategoryid', '=', 'sc.servicecategoryid')
                ->where('se.serviceid', $id)
                ->get(); */
        

        return response()->json(compact('service')); /** returns the response result data as JSON */
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
            'estimatedtime' => 'Estimated Time',
            'sizetype' => 'Size Type',
            'class' => 'Class',
            'initialprice' => 'Initial Price',
        ];
        $customMessages = [
                'servicecategoryname.regex' => 'You cannot input special characters into :attribute field. Sorry. :(',
                'servicecategoryname.unique' => 'The :attribute you entered is already taken.',
            ];
        $validation = Validator::make($request->all(), [
            'estimatedtime' => ['required','numeric','between:1,999'],
            'initialprice' => ['bail','required','numeric','between:0.00,99999.9999']
        ], $customMessages);
        
        $validation->setAttributeNames($customNames);
        if ($validation->fails()) {
            return redirect('service')
                ->withErrors($validation, 'update')
                ->withInput();
        }
        else{
            try{
                DB::table('service')
                    ->where('serviceid', $request->serviceid)
                    ->update(['estimatedtime' => ($request->estimatedtime), 'sizetype' => ($request->sizetype), 'class' => ($request->class), 'initialprice' => ($request->initialprice)]);
            }
            catch(\Illuminate\Database\QueryException $e){
                DB::rollBack();
                $errors = $e->getMessage();
                return redirect('service')
                    ->withErrors($errors, 'update');
            }
            $request->session()->flash('success', 'Record successfully updated.');  
            return redirect('service');
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
            Service::findOrFail($id);
            Service::destroy($id);
        }
        catch(\Illuminate\Database\QueryException $e){
            $err = $e->getMessage();
                return redirect('service')
                    ->withErrors($err);
        }
        return redirect('service');
    }

    public function delete(Request $request)
    {
        try{
            DB::table('service')
                    ->where('serviceid', $request->deleteId)
                    ->update(['isActive' => 0]);
        }
        catch(\Illuminate\Database\QueryException $e){
            $err = $e->getMessage();
                return redirect('service')
                    ->withErrors($err, 'delete');
        }
        return redirect('service');
    }

}
