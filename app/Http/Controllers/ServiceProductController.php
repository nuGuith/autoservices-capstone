<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Validator;
use Session;
use Redirect;
use Tables;
use DateTables;

class ServiceProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $service = DB::table('Service')
                ->SELECT('ServiceID','ServiceName')
                ->WHERE('isActive',1)
                ->get();

        $product = DB::table('product')
                ->LEFTJOIN('product_unit_type as pu','product.ProductUnitTypeID','=','pu.ProductUnitTypeID')
                ->SELECT('ProductID','ProductBrandID','ProductName','Size','pu.Unit')
                ->WHERE('product.isActive',1)
                ->GET();

        $view = DB::table('product_service as ps')
                ->LEFTJOIN('Product as p','ps.ProductID','=','p.ProductID')
                ->LEFTJOIN('service as s','ps.ServiceID','=','s.ServiceID')
                ->LEFTJOIN('product_unit_type as pu','p.ProductUnitTypeID','=','pu.ProductUnitTypeID')
                ->WHERE('ps.isActive',1)
                ->GET();
        $cnt = DB::table('product_service as ps')
                ->LEFTJOIN('service as s','ps.ServiceID','=','s.ServiceID')
                ->groupby('ps.ServiceID')
                ->WHERE('ps.isActive',1)
                ->get();
       
        return view ('service.serviceproduct',compact('service','product','view','cnt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $service = Input::get('ser');
        $product = Input::get('prod');

        for($x=0;$x<count($product);$x++){

            $insert = array("ProductID"=>$product[$x],"ServiceID"=>$service);
            DB::table('product_service')->insert($insert);

        }


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
    public function show()
    {
       $ret = DB::table('product_service')
            ->WHERE('ServiceID',Input::get('id'))
            ->where('isActive',1)
            ->GET();

         return \Response::json(['ret'=>$ret]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {

        $ser = Input::get('ser');
        $prod = Input::get('prod');
        $id = Input::get('id');
        $darr = Input::get('darr');
        $count = Input::get('pscnt');


        for($i=0;$i<$count;$i++) {

      DB::table('product_service as ps')
      ->WHERE('ps.ProductServiceID',$id[$i])
      ->UPDATE(['ps.ProductID'=>$prod[$i],'ps.ServiceID'=>$ser]);

    }

        if(count($darr)>0){

            for($x=0;$x<$darr;$x++){

                   DB::table('product_service as ps')
                     ->WHERE('ps.ProductServiceID',$darr[$x])
                     ->UPDATE(['isActive'=>0]);

            }

        }



          

      


        

      
        
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
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete()
    {
        $did = Input::get('id');

     

      DB::table('product_service as ps')
      ->WHERE('ps.ServiceID',$did)
      ->UPDATE(['isActive'=>0]);

    
       
    }
}
