<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Requests\StoreServiceCategory;
use App\ServiceCategory;
use App\Http\Controllers\Controller;
use Validator;
use Redirect;
use Session;

class ServiceCategoryController extends Controller
{	


    /**
     * This serves as the index hehe
     */
    public function index(){
        $categories = DB::table('service_category')
        ->where('isActive', 1)
        ->get();
    	return view('service.servicecategory', ['categories' => $categories]); /* returns the view along with the result set or data na na-query galing sa db */
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
                'servicecategoryname' => 'Service Category Name',
                'description' => 'Description',
            ]; 
            /** This is an array of custom variable names you could set so that in case there is an Exception, 
            * the variable name displayed in the view is a decent one and not a name straight from the database. */
        $customMessages = [
                'servicecategoryname.regex' => 'You cannot input special characters into :attribute field. Sorry. :(',
                'servicecategoryname.unique' => 'The :attribute you entered is already taken.',
            ];
            /** This is an array of custom messages you could set so aside from the default ones by laravel. */
        $validation = Validator::make($request->all(), [
            'servicecategoryname' => ['bail','required','max:100', 'unique:service_category', 'regex:/$^[^~`!$@#*_={}|\;<>,.?]+/'],
            'description' => ['nullable','max:255']
        ], $customMessages);
            /** The $validation variable using the 'Validator' facade takes the arguments $request->all() getting all the data sent over the Request
             * from the view/user input, next argument is an array of rules for validation and finally the $customMessages.
             */
        
        $validation->setAttributeNames($customNames);
            /** setting the custom names */

        if ($validation->fails()) {
            return redirect('servicecategory')
                ->withErrors($validation, 'add')
                ->withInput();
        }
        else{
            try{
                DB::beginTransaction();
                ServiceCategory::create([ /** this uses Eloquent by the way, create an object based on the ServiceCategory Model */
                    'servicecategoryname' => trim($request->servicecategoryname), /** insert into the database the data inputted by the user */
                    'description' => trim($request->description), 
                ]);
                DB::commit();
            }catch(\Illuminate\Database\QueryException $e){
                DB::rollBack();
                $errors = $e->getMessage();
                return redirect('servicecategory')
                    ->withErrors($errors, 'add');
            }
            $request->session()->flash('success', 'Record successfully added.');  
            return redirect('servicecategory');
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
        $category = ServiceCategory::findOrFail($id); /** returns a single set/row of data when there is a matching record with the same $id */
        return response()->json(compact('category')); /** returns the response result data as JSON */
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
            'servicecategoryname' => 'Service Category Name',
            'description' => 'Description',
        ];
        $customMessages = [
                'servicecategoryname.regex' => 'You cannot input special characters into :attribute field. Sorry. :(',
                'servicecategoryname.unique' => 'The :attribute you entered is already taken.',
            ];
        $validation = Validator::make($request->all(), [
            'servicecategoryname' => [
                'bail',
                'required',
                'max:100', 
                Rule::unique('service_category')->ignore($request->servicecategoryid, 'servicecategoryid'),
                'regex:/^[^~`!@#*_={}|\;<>,.?]+$/'
            ],
            'description' => ['nullable','max:255']
        ], $customMessages);
        
        $validation->setAttributeNames($customNames);
        if ($validation->fails()) {
            return redirect('servicecategory')
                ->withErrors($validation, 'update')
                ->withInput();
        }
        else{
            try{
                DB::table('service_category')
                    ->where('servicecategoryid', $request->servicecategoryid)
                    ->update(['servicecategoryname' => ($request->servicecategoryname), 'description' => ($request->description)]);
            }
            catch(\Illuminate\Database\QueryException $e){
                DB::rollBack();
                $errors = $e->getMessage();
                return redirect('servicecategory')
                    ->withErrors($errors, 'update');
            }
            $request->session()->flash('success', 'Record successfully updated.');  
            return redirect('servicecategory');
        }
    }

    /* *
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
    
    public function destroy($id)
    {
        try{
            ServiceCategory::findOrFail($id);
            ServiceCategory::destroy($id);
        }
        catch(\Illuminate\Database\QueryException $e){
            $err = $e->getMessage();
                return redirect('servicecategory')
                    ->withErrors($err);
        }
        return redirect('servicecategory');
    } */

    public function delete(Request $request)
    {
        try{
            DB::table('service_category')
                    ->where('servicecategoryid', $request->deleteId)
                    ->update(['isActive' => 0]);
        }
        catch(\Illuminate\Database\QueryException $e){
            $err = $e->getMessage();
                return redirect('servicecategory')
                    ->withErrors($err, 'delete');
        }
        return redirect('servicecategory');
    }

}
