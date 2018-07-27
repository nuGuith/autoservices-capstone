<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\StoreServiceCategory;
use App\ServiceCategory;
use App\Http\Controllers\Controller;
use Validator;
use Redirect;
use Session;
use DataTables;
use Table;

class ServiceCategoryController extends Controller
{	

    public function servicecategory(){
        $categories = ServiceCategory::get();
    	return view('service.servicecategory', ['categories' => $categories]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
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
    public function store(StoreServiceCategory $request)
    {
        //return Redirect('servicecategory'); */
        /* $rules = [
            'servicecategoryname' => ['required','max:100','unique:service_category','regex:/^[^~`!@#*_={}|\;<>,.?]+$/'],
            'description' => 'max:255',
        ];
        $messages = [
            'unique' => ':attribute already exists.',
            'required' => 'The :attribute field is required.',
            'max' => 'The :attribute field must be no longer than :max characters.',
            'regex' => 'The :attribute must not contain special characters.'                
        ];
        $niceNames = [
            'servicecategoryname' => 'Category Name',
            'description' => 'Description',
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
        $validator->setAttributeNames($niceNames);  */
        /* $category = new ServiceCategory;
        $category->name = $request->get('servicecategoryname');
        $category->description = $request->get('description');
        DB::insert('insert into service_category (servicecategoryname, description) values (:name, :desc)', ['name' => $category->name, 'desc' => $category->description], ')'); */
        /* $rules = [
            'servicecategoryname' => ['required','max:100','unique:service_category','regex:/^[^~`!@#*_={}|\;<>,.?]+$/'],
            'description' => ['max:255'],
            ]; */
        //return Redirect('servicecategory'); */
        /* $rules = [
            'servicecategoryname' => ['required','max:100','unique:service_category','regex:/^[^~`!@#*_={}|\;<>,.?]+$/'],
            'description' => 'max:255',
        ];
        $messages = [
            'unique' => ':attribute already exists.',
            'required' => 'The :attribute field is required.',
            'max' => 'The :attribute field must be no longer than :max characters.',
            'regex' => 'The :attribute must not contain special characters.'                
        ];
        $niceNames = [
            'servicecategoryname' => 'Category Name',
            'description' => 'Description',
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
        $validator->setAttributeNames($niceNames);  */
        $rules = array(
            'name' => 'required'
        );
        $validation = $request->validate();
        if ($validation->fails()) {
        }
        else{
            try{
                DB::beginTransaction();
                ServiceCategory::create([
                    'servicecategoryname' => trim($request->servicecategoryname),
                    'description' => trim($request->description),
                ]);
                DB::commit();
                $category = new ServiceCategory;
                $category->name = $request->get('category');
                $category->description = $request->get('description');
                DB::insert('insert into service_category (servicecategoryname, description) values (:name, :desc)', ['name' => $category->name, 'desc' => $category->description], ')');
            }catch(\Illuminate\Database\QueryException $e){
                DB::rollBack();
                $err = $e->getMessage();
                return Redirect::back()->withErrors($err);
            }
            $request->session()->flash('success', 'Record successfully added.');  
            return Redirect('servicecategory');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
