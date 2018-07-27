<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use App\ProductType;
use App\ProductCategory;
use Validator;
use Session;
use Redirect;
use Tables;
use DateTables;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ctr = 0;
        $producttypes = DB::table('product_type as pt')
            ->join('product_category as pc', 'pt.productcategoryid', '=', 'pc.productcategoryid')
            ->select('pt.*', 'CategoryName')
            ->where('pt.isActive', 1)
            ->get();
        $categories = ProductCategory::where('isActive',1)->pluck('categoryname', 'productcategoryid');
        $categories->prepend('Please choose a category',0);
        return view ('product.producttype', compact('producttypes', 'categories','ctr'));
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
        $niceNames = [
            'producttypename' => 'Type Name',
            'productcategoryid' => 'Category Name'
        ];
        $messages = [
            'required' => 'The :attribute is required',
            'unique' => 'The :attribute is already taken',
            'max' => 'The :attribute has over the required maximum length.',
            'regex' => 'You cannot input special characters' 
        ];

        $validation = Validator::make($request->all(), [
            'producttypename' => ['bail', 'required', 'unique:product_type', 'max:50', 'regex:/$^[^~`!@#*_={}|\;<>,.?]+/'],
            'productcategoryid' => 'required'
            ], $niceNames);
        
        $validation->setAttributeNames($niceNames);
        if ($validation->fails()){
            return redirect('producttype')
                ->withErrors($validation, 'add')
                ->withInput();
        }
        else{
            try{
            DB::beginTransaction();
            ProductType::create([
                'producttypename' => trim($request->producttypename),
                'productcategoryid' => ($request->productcategoryid)
            ]);
            DB::commit();
            }
                catch(\Illuminate\Database\QueryException $e){
                    DB::rollBack();
                    $err = $e->getMessage();
                    return redirect('producttype')
                        ->withErrors($err, 'add');
            }
            
            $request->session()->flash('success', 'Record successfully added');
            return redirect('producttype');
        }
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
        $type = ProductType::findOrFail($id);
        return response()->json(compact('type'));
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
        $niceNames = [
            'producttypename' => 'Type Name',
            'productcategoryid' => 'Category Name'
        ];
        $messages = [
            'required' => 'The :attribute is required',
            'unique' => 'The :attribute is already taken',
            'max' => 'The :attribute has over the required maximum length.',
            'regex' => 'You cannot input special characters' 
        ];

        $validation = Validator::make($request->all(), [
            'producttypename' => [
                'bail',
                'required',
                Rule::unique('product_type')->ignore($request->producttypeid, 'producttypeid'),
                'max:50',
                'regex:/^[^~`!@#*_={}|\;<>,.?]+$/'],
            'productcategoryid' => 'required'
            ], $niceNames);
        
        $validation->setAttributeNames($niceNames);
        if ($validation->fails()){
            return redirect('producttype')
                ->withErrors($validation, 'update')
                ->withInput();
        }
        else{
            try{
                DB::table('product_type')
                    ->where('producttypeid', $request->producttypeid)
                    ->update(['producttypename' => ($request->producttypename),
                    'productcategoryid' => ($request->productcategoryid)
                ]);
            }
                catch(\Illuminate\Database\QueryException $e){
                    DB::rollBack();
                    $err = $e->getMessage();
                    return redirect('producttype')
                        ->withErrors($err, 'update');
            }
            
            $request->session()->flash('success', 'Record successfully added');
            return redirect('producttype');
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
        try{
            DB::table('product_type')
                    ->where('producttypeid', $request->deleteId)
                    ->update(['isActive' => 0]);
        }
        catch(\Illuminate\Database\QueryException $e){
            $err = $e->getMessage();
                return redirect('producttype')
                    ->withErrors($err, 'delete');
        }
        return redirect('producttype');
    }
}
