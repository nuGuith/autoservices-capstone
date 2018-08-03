<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use App\ProductBrand;
use Validator;
use Session;
use Redirect;
use Tables;
use DateTables;

class ProductBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productbrands = DB::table('product_brand')
            ->where('isActive', 1)
            ->get();
        return view('product.productbrand', compact('productbrands'));
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
            'brandname' => 'Brand Name'
        ];
        $messages = [
            'required' => 'The :attribute is required',
            'unique' => 'The :attribute is already taken',
            'max' => 'The :attribute has over the required maximum length.',
            'regex' => 'You cannot input special characters' 
        ];

        $validation = Validator::make($request->all(), [
            'brandname' => ['bail', 'required', 'unique:product_brand', 'max:50', 'regex:/^[^~`!$@#*_={}|\;<>,.?]+/']
            ], $niceNames);
        
        $validation->setAttributeNames($niceNames);
        if ($validation->fails()){
            return redirect('productbrand')
                ->withErrors($validation, 'add')
                ->withInput();
        }
        else{
            try{
            DB::beginTransaction();
            ProductBrand::create([
                'brandname' => trim($request->brandname)
            ]);
            DB::commit();
            }
                catch(\Illuminate\Database\QueryException $e){
                    DB::rollBack();
                    $err = $e->getMessage();
                    return redirect('productbrand')
                        ->withErrors($err, 'add');
            }
            
            $request->session()->flash('success', 'Record successfully added');
            return redirect('productbrand');
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
        $brand = ProductBrand::findOrFail($id);
        return response()->json(compact('brand'));
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
            'brandname' => 'Brand Name'
        ];
        $messages = [
            'required' => 'The :attribute is required',
            'unique' => 'The :attribute is already taken',
            'max' => 'The :attribute has over the required maximum length.',
            'regex' => 'You cannot input special characters' 
        ];

        $validation = Validator::make($request->all(), [
            'brandname' => [
                'bail',
                'required', 
                Rule::unique('product_brand')->ignore($request->productbrandid, 'productbrandid'),
                'max:50',
                'regex:/^[^~`!@#*_={}|\;<>,.?]+$/']
            ], $niceNames);
        
        $validation->setAttributeNames($niceNames);
        if ($validation->fails()){
            return redirect('productbrand')
                ->withErrors($validation, 'update')
                ->withInput();
        }
        else{
            try{
                DB::table('product_brand')
                    ->where('productbrandid', $request->productbrandid)
                    ->update(['brandname' => ($request->brandname)]);
            }
                catch(\Illuminate\Database\QueryException $e){
                    DB::rollBack();
                    $err = $e->getMessage();
                    return redirect('productbrand')
                        ->withErrors($err, 'update');
            }
            
            $request->session()->flash('success', 'Record successfully added');
            return redirect('productbrand');
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
             DB::table('product_brand')
                     ->where('productbrandid', $request->deleteId)
                     ->update(['isActive' => 0]);
         }
         catch(\Illuminate\Database\QueryException $e){
             $err = $e->getMessage();
                 return redirect('productbrand')
                     ->withErrors($err, 'delete');
         }
         return redirect('productbrand');
     }
}
