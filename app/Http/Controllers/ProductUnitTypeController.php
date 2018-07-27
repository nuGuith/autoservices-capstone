<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\ProductUnitType;
use Validator;
use Session;
use Redirect;
use Tables;
use DateTables;

class ProductUnitTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productunittypes = DB::table('product_unit_type')
            ->where('isActive', 1)
            ->get();
        return view('product.productunittype', compact('productunittypes'));
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
            'unittypename' => 'Unit of Measurement',
            'unit' => 'Abbreviation'
        ];
        $messages = [
            'required' => 'The :attribute is required',
            'unique' => 'The :attribute is already taken',
            'max' => 'The :attribute has over the required maximum length.',
            'regex' => 'You cannot input special characters' 
        ];

        $validation = Validator::make($request->all(), [
            'unittypename' => ['bail', 'required', 'unique:product_unit_type', 'max:50', 'regex:/$^[^~`!@#*_={}|\;<>,.?]+/'],
            'unit' => ['bail', 'required', 'unique:product_unit_type', 'max:6', 'regex:/$^[^~`!@#*_={}|\;<>,.?]+/']
            ], $niceNames);
        
        $validation->setAttributeNames($niceNames);
        if ($validation->fails()){
            return redirect('productunittype')
                ->withErrors($validation, 'add')
                ->withInput();
        }
        else{
            try{
            DB::beginTransaction();
            ProductUnitType::create([
                'unittypename' => trim($request->unittypename),
                'unit' => trim($request->unit)
            ]);
            DB::commit();
            }
                catch(\Illuminate\Database\QueryException $e){
                    DB::rollBack();
                    $err = $e->getMessage();
                    return redirect('productunittype')
                        ->withErrors($err, 'add');
            }
            
            $request->session()->flash('success', 'Record successfully added');
            return redirect('productunittype');
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
        $unittype = ProductUnitType::findOrFail($id);
        return response()->json(compact('unittype')); 
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
            'unittypename' => 'Unit of Measurement',
            'unit' => 'Abbreviation'
        ];
        $messages = [
            'required' => 'The :attribute is required',
            'unique' => 'The :attribute is already taken',
            'max' => 'The :attribute has over the required maximum length.',
            'regex' => 'You cannot input special characters' 
        ];

        $validation = Validator::make($request->all(), [
            'unittypename' => [
                'bail',
                'required', 
                Rule::unique('product_unit_type')->ignore($request->productunittypeid, 'productunittypeid'),
                'max:50',
                'regex:/^[^~`!@#*_={}|\;<>,.?]+$/'],
        
            'unit' => [
                'bail',
                'required', 
                Rule::unique('product_unit_type')->ignore($request->productunittypeid, 'productunittypeid'),
                'max:6',
                'regex:/^[^~`!@#*_={}|\;<>,.?]+$/'],
            
            'unitcategory' => 'required'
            ], $niceNames);
        
        $validation->setAttributeNames($niceNames);
        if ($validation->fails()){
            return redirect('productunittype')
                ->withErrors($validation, 'update')
                ->withInput();
        }
        else{
            try{
                DB::table('product_unittype')
                    ->where('productunittypeid', $request->productunittypeid)
                    ->update(['unittypename' => ($request->unittypename), 'unit' => ($request->unit), 'unitcategory' => ($request->unitcategory)]);
            }
                catch(\Illuminate\Database\QueryException $e){
                    DB::rollBack();
                    $err = $e->getMessage();
                    return redirect('productunittype')
                        ->withErrors($err, 'update');
            }

            $request->session()->flash('success', 'Record successfully added');
            return redirect('productunittype');
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
             DB::table('product_unit_type')
                     ->where('productunittypeid', $request->deleteId)
                     ->update(['isActive' => 0]);
         }
         catch(\Illuminate\Database\QueryException $e){
             $err = $e->getMessage();
                 return redirect('productunittype')
                     ->withErrors($err, 'delete');
         }
         return redirect('productunittype');
     }
}
