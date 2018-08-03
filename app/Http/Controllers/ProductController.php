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
        $ctr = 0;
        $products = DB::table('product as p')
            ->join('product_type as pt', 'p.producttypeid', '=', 'pt.producttypeid')
            ->join('product_brand as pb', 'p.productbrandid', '=', 'pb.productbrandid')
            ->join('product_unit_type as put', 'p.productunittypeid', '=', 'put.productunittypeid')
            ->select('p.*', 'ProductTypeName', 'BrandName', 'Unit')
            ->where('p.isActive',1)
            ->get();

        $types = ProductType::where('isActive', 1)->pluck('producttypename', 'producttypeid');
        $types->prepend('Please choose a type',0);

        $brands = ProductBrand::where('isActive', 1)->pluck('brandname', 'productbrandid');
        $brands->prepend('Please choose a brand', 0);

        $unittypes = ProductUnitType::where('isActive', 1)->pluck('unit', 'productunittypeid');

        $prodwarranties = DB::table('product_warranty as pw')
            ->join('product as p', 'p.productid', '=', 'pw.productid')
            ->select('pw.*')
            ->get();
        $warranties = ProductWarranty::where('isActive', 1)->pluck('durationmode', 'productwarrantyid');
        $warranties->prepend('Please choose a mode', 0);

        return view('product.product', compact('products', 'ctr', 'types', 'brands', 'unittypes', 'prodwarranties', 'warranties'));
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
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return response()->json(compact('product'));
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
        //
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
