<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use App\Product;
use Validator;
use Session;
use Redirect;
use Tables;
use DateTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    	$product = DB::table('product')
    		->select('*')
    		->join('product_type', 'product.ProductTypeID', '=', 'product_type.ProductTypeID')
    		->join('product_brand', 'product.ProductBrandID', '=', 'product_brand.ProductBrandID')
    		->join('product_unit_type', 'product.ProductUnitTypeID', '=','product_unit_type.ProductUnitTypeID')
    		->where('product.isActive', '1')
    		->get();

    	$prodtype = DB::table('product_type')
    		->where('isActive', '1')
    		->pluck('producttypename', 'producttypeid');

    	$prodbrand = DB::table('product_brand')
    		->where('isActive', '1')
    		->pluck('brandname', 'productbrandid');

    	$produnittype = DB::table('product_unit_type')
    		->where('isActive', '1')
    		->pluck( 'unittypename', 'productunittypeid');

    	$prodtype2 = DB::table('product_type')
    		->select('*')
    		->where('isActive', '1')
    		->get();

    	$prodbrand2 = DB::table('product_brand')
    		->select('*')
    		->where('isActive', '1')
    		->get();

    	$produnittype2 = DB::table('product_unit_type')
			->select('*')
    		->where('isActive', '1')
    		->get();

        // dd($prodbrand2);
        return view ('product.product')
        	->with('product', $product)->with('prodtype', $prodtype)->with('prodbrand', $prodbrand)->with('produnittype', $produnittype)->with('prodtype2', $prodtype2)->with('prodbrand2', $prodbrand2)->with('produnittype2', $produnittype2);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $product)
    {
        //
      $productname = $product->input('productname');
      $partnumber  = $product->input('partnumber');
  		$producttype = $product->input('producttype');
  		$brand       = $product->input('brand');
  		$size        = $product->input('size');
  		$unit        = $product->input('unit');
  		$price       = $product->input('price');
  		$description = $product->input('description');

      $war = $product->input('warranty');
      $WDM =  $product->input('durationmode');
      $mil = $product->input('warrantymileage');

  		$date        = date('Y-m-d h:i:s');

		$data = array(
      'ProductTypeID'=>$producttype,
      'ProductBrandID'=>$brand,
      'ProductUnitTypeID'=>$unit,
      'ProductName'=>$productname,
      'PartNumber'=> $partnumber,
      'Description'=>$description,
      'Price'=>$price,
      'Size'=>$size,
      'WarrantyDuration'=>$war,
      'WarrantyDurationMode'=>$WDM,
      'WarrantyMileage'=>$mil
    );

		DB::table('product')->insert($data);

		return redirect()->to('product');

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
          'partnumber' => 'Part Number',
          'productname' => 'Product Name',
          'producttype' => 'Product Type',
          'brand' => 'Product Brand',
          'size' => 'Size',
          'unit' => 'Unit',
          'price' => 'Price'
      ];
      $messages = [
          'required' => 'The :attribute is required',
          'unique' => 'The :attribute is already taken',
          'max' => 'The :attribute has over the required maximum length.',
          'regex' => 'You cannot input special characters' 
      ];

      $validation = Validator::make($request->all(), [
          'partnumber' => ['bail', 'required', 'unique:product', 'max:13', 'regex:/^[^~`!$@#*_={}|\;<>,.?]+/'],
          'productname' => ['bail', 'required', 'max:50', 'regex:/^[^~`!$@#*_={}|\;<>,.?]+/'],
          'producttype' => ['bail', 'required', 'max:50', 'regex:/^[^~`!$@#*_={}|\;<>,.?]+/'],
          'brand' => ['bail', 'required', 'regex:/^[^~`!$@#*_={}|\;<>,.?]+/'],
          'size' => ['bail', 'required', 'regex:/^[^~`!$@#*_={}|\;<>,.?]+/'],
          'unit' => ['bail', 'required','regex:/^[^~`!$@#*_={}|\;<>,.?]+/'],
          'price' => ['bail', 'required', 'regex:/^[^~`!$@#*_={}|\;<>,.?]+/']
          ], $niceNames);
      
      $validation->setAttributeNames($niceNames);
      if ($validation->fails()){
          return redirect('product')
              ->withErrors($validation, 'add')
              ->withInput();
      }
      else{
          try{
          DB::beginTransaction();
          Product::create([
              'partnumber' => trim($request->partnumber),
              'productname' => trim($request->productname),
              'producttypeid' => trim($request->producttype),
              'productbrandid' => trim($request->brand),
              'price' => trim($request->price),
              'size' => trim($request->size),
              'warrantydurationmode' => trim($request->warranty),
              'warrantyduration' => trim($request->durationmode),
              'warrantymileage' => trim($request->warrantymileage)
          ]);
          DB::commit();
          }catch(\Illuminate\Database\QueryException $e){
                  DB::rollBack();
                  $err = $e->getMessage();
                  return redirect('product')
                      ->withErrors($err, 'add')
                      ->withInput();
          }
          $request->session()->flash('success', 'Record successfully added');
          return redirect('product');
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
    public function edit(Request $product)
    {

    	$product = DB::table('product')
			  ->select('*')
			  ->where('ProductID', $product->input('ProductIDedit'))
			  ->get();


		return \Response::json(['product'=>$product]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $product)
    {

	  $id = $product->input('ProductIDedit');
	  $ProductName = $product->input('productnameedit');
	  $ProductUnitTypeID = $product->input('unitedit');
	  $ProductBrandID = $product->input('brandedit');
	  $Size = $product->input('sizeedit');
	  $Description = $product->input('descriptionedit');
	  $Price = $product->input('priceedit');
    $ProductTypeID = $product->input('producttypeedit');

    $WarrantyDuration = $product->input('warrantyedit');
    $WarrantyDurationMode = $product->input('durationmodeedit');
    $WarrantyMileage = $product->input('warrantymileageedit');

    DB::table('product')
    ->WHERE('ProductID',$id)
    ->UPDATE(['ProductTypeID'=>$ProductName,'ProductTypeID'=>$ProductTypeID,'ProductBrandID'=>$ProductBrandID,'ProductUnitTypeID'=>$ProductUnitTypeID,'ProductName'=>$ProductName,
              'Description'=>$Description,'Description'=>$Description,'Price'=>$Price,'Size'=>$Size,'WarrantyDuration'=>$WarrantyDuration,'WarrantyDurationMode'=>$WarrantyDurationMode, 'WarrantyMileage'=>$WarrantyMileage]);

    return redirect()->to('/product');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $product)
    {
      $getID = $product->input('deleteId');

      DB::table('product')
      ->WHERE('ProductID',$getID)
      ->UPDATE(['isActive'=>0]);


        return \Redirect::back();

    }
}
