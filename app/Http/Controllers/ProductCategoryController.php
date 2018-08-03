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

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$productcategories = DB::table('product_category as pc')
            ->join('product_type as pt', 'pc.ProductCategoryID', '=', 'pt.ProductCategoryID')
            ->select('pc.*', 'ProductTypeName')
            ->get();*/
        $productcategories = DB::table('product_category')
            ->where('isActive', 1)
            ->get();
        return view('product.productcategory', compact('productcategories'));
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
            'categoryname' => 'Category Name'
        ];
        $messages = [
            'categoryname.required' => 'The :attribute is required',
            'categoryname.unique' => 'The :attribute is already taken',
            'categoryname.max' => 'The :attribute has over the required maximum length.',
            'categoryname.regex' => 'You cannot input special characters' 
        ];

        $validation = Validator::make($request->all(), [
            'categoryname' => ['bail', 'required', 'unique:product_category', 'max:50', 'regex:/^[^~`!$@#*_={}|\;<>,.?]+/'],
            ], $niceNames);
        
        $validation->setAttributeNames($niceNames);
        if ($validation->fails()){
            return redirect('productcategory')
                ->withErrors($validation, 'add')
                ->withInput();
        }
        else{
            try{
            DB::beginTransaction();
            ProductCategory::create([
                'categoryname' => trim($request->categoryname)
            ]);
            DB::commit();
            }catch(\Illuminate\Database\QueryException $e){
                    DB::rollBack();
                    $err = $e->getMessage();
                    return redirect('productcategory')
                        ->withErrors($err, 'add');
            }
            $request->session()->flash('success', 'Record successfully added');
            return redirect('productcategory');
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
        $category = ProductCategory::findOrFail($id);
        return response()->json(compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $niceNames = [
            'categoryname' => 'Category Name'
        ];
        $messages = [
            'required' => 'The :attribute is required',
            'unique' => 'The :attribute is already taken',
            'max' => 'The :attribute has over the required maximum length.',
            'regex' => 'You cannot input special characters' 
        ];

        $validation = Validator::make($request->all(), [
            'categoryname' => [
                'bail',
                'required', 
                Rule::unique('product_category')->ignore($request->productcategoryid, 'productcategoryid'),
                'max:50',
                'regex:/^[^~`!@#*_={}|\;<>,.?]+$/'],
            ], $niceNames);
        
        $validation->setAttributeNames($niceNames);
        if ($validation->fails()){
            return redirect('productcategory')
                ->withErrors($validation, 'update')
                ->withInput();
        }
        else{
            try{
                DB::table('product_category')
                    ->where('productcategoryid', $request->productcategoryid)
                    ->update(['categoryname' => ($request->categoryname)]);
            }
                catch(\Illuminate\Database\QueryException $e){
                    DB::rollBack();
                    $err = $e->getMessage();
                    return redirect('productcategory')
                        ->withErrors($err, 'update');
            }
            
            $request->session()->flash('success', 'Record successfully added');
            return redirect('productcategory');
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
             DB::table('product_category')
                     ->where('productcategoryid', $request->deleteId)
                     ->update(['isActive' => 0]);
         }
         catch(\Illuminate\Database\QueryException $e){
             $err = $e->getMessage();
                 return redirect('product.productcategory')
                     ->withErrors($err, 'delete');
         }
         return redirect('productcategory');
     }
}
