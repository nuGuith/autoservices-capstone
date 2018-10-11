<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use App\product;
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
    		->select('*')
    		->where('isActive', '1')
    		->get();

    	$prodbrand = DB::table('product_brand')
    		->select('*')
    		->where('isActive', '1')
    		->get();

    	$produnittype = DB::table('product_unit_type')
			->select('*')
    		->where('isActive', '1')
    		->get();

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
  		$producttype = $product->input('producttype');
  		$brand       = $product->input('brand');
  		$size        = $product->input('size');
  		$unit        = $product->input('unit');
  		$price       = $product->input('price');
  		$description = $product->input('description');

      $war = $product->input('warranty');
      $WDM =  $product->input('durationmode');

  		$date        = date('Y-m-d h:i:s');

		$data = array('ProductTypeID'=>$producttype, 'ProductBrandID'=>$brand, 'ProductUnitTypeID'=>$unit, 'ProductName'=>$productname,
                  'Description'=>$description, 'Price'=>$price, 'Size'=>$size,'WarrantyDuration'=>$war,'WarrantyDurationMode'=>$WDM);

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

    DB::table('product')
    ->WHERE('ProductID',$id)
    ->UPDATE(['ProductTypeID'=>$ProductName,'ProductTypeID'=>$ProductTypeID,'ProductBrandID'=>$ProductBrandID,'ProductUnitTypeID'=>$ProductUnitTypeID,'ProductName'=>$ProductName,
              'Description'=>$Description,'Description'=>$Description,'Price'=>$Price,'Size'=>$Size,'WarrantyDuration'=>$WarrantyDuration,'WarrantyDurationMode'=>$WarrantyDurationMode]);

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
