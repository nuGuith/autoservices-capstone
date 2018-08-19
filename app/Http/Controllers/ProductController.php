<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use App\Product;
use App\ProductCategory;
use App\ProductType;
use App\ProductBrand;
use App\ProductUnitType;
use App\ProductWarranty;
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
    		->join('product_unit_type', 'product.ProductUnitTypeID', '=', 'product_unit_type.ProductUnitTypeID')
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
  		$unit        = $product->input('unit');
  		$description = $product->input('description');
  		$date        = date('Y-m-d h:i:s');

		$data = array('ProductTypeID'=>$producttype, 'ProductBrandID'=>$brand, 'ProductUnitTypeID'=>$unit, 'ProductName'=>$productname, 'Description'=>$description, 'Price'=>$price, 'Size'=>$size, 'created_at'=>$date, 'updated_at'=>$date);

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
            'productname' => 'Product Name',
            'producttypeid' => 'Type',
            'productbrandid' => 'Brand',
            'productunittypeid' => 'Unit Type',
            'size' => 'Unit Size',
            'price' => 'Price',
            'duration' => 'Warranty Duration',
            'durationmode' => 'Duration Mode',
            'description' => 'Description'
        ];
        $messages = [
            'required' => 'The :attribute is required',
            'unique' => 'The :attribute is already taken',
            'max' => 'The :attribute has over the required maximum length.',
            'regex' => 'You cannot input special characters' 
        ];

        $validation = Validator::make($request->all(), [
            'productname' => ['bail', 'required', 'unique:product', 'max:50', 'regex:/^[^~`!@#*$_={}|\;<>,.?]+/'],
            'producttypeid' => 'required',
            'productbrandid' => 'required',
            'productunittypeid' => 'required',
            'size' => ['bail', 'required', 'max:4', 'regex:/^[^~`!@#*$_={}|\;<>,.?]+/'],
            'price' => ['bail', 'required', 'max:14', 'regex:/^[^~`!@#*$_={}|\;<>,.?]+/'],
            'duration' => ['bail', 'max:14', 'regex:/^[^~`!@#*$_={}|\;<>,.?]+/'],
            'description' => ['bail', 'max:200', 'regex:/^[^~`!@#*$_={}|\;<>,.?]+/']
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
                'productname' => trim($request->productname),
                'producttypeid' => ($request->producttypeid),
                'productbrandid' => ($request->productbrandid),
                'productunittypeid' => ($request->productunittypeid),
                'size' => trim($request->size),
                'price' => trim($request->price),
                'description' => ($request->description)
            ]);
            $id = Product::orderBy('created_at', 'DESC')
                ->first();
            ProductWarranty::create([
                'productid' => ($id),
                'duration' => trim($request->duration),
                'durationmode' => ($request->durationmode)
            ]);
            DB::commit();
            }
                catch(\Illuminate\Database\QueryException $e){
                    DB::rollBack();
                    $err = $e->getMessage();
                    return redirect('product')
                        ->withErrors($err, 'add');
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
			  ->where('ProductID', Input::get('ProductIDedit'))
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
	     
	  $id = Input::get('ProductIDedit');
	  $product = product::find($id);
	  $product->ProductName = Input::get('productnameedit');
	  $product->ProductTypeID = Input::get('unitedit');
	  $product->ProductBrandID = Input::get('brandedit');
	  $product->Size = Input::get('sizeedit');
	  $product->Description = Input::get('descriptionedit');
	  $product->Price = Input::get('priceedit');
	  $date        = date('Y-m-d h:i:s');
	  $product->updated_at = $date;

	  $product->save();

	  return redirect()->to('product');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete()
    {
      $getID = Input::get('deleteId');

      $p = product::find($getID);
        $p->isActive='0';
        $p->save();
        return \Redirect::back();
    }

    public function delet(Request $request)
    {
        try{
            DB::table('product')
                    ->where('productid', $request->deleteId)
                    ->update(['isActive' => 0]);
        }
        catch(\Illuminate\Database\QueryException $e){
            $err = $e->getMessage();
                return redirect('product')
                    ->withErrors($err, 'delete');
        }
        return redirect('product');
    }
}
