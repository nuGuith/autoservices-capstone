<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Illuminate\Http\RedirectResponse;

class DiscountController extends Controller
{
    public function discount(){
      $view = DB::table('discount')
      ->SELECT('DiscountID','DiscountName','DiscountRate')
      ->WHERE('isActive',1)
      ->get();

    	return view('discount.discount',compact('view'));
    }

    public function add(){
      $disc = Input::get('dis');
      $per = Input::get('per');

      $disc = array("DiscountName"=>$disc,"DiscountRate"=>$per);
      DB::table('discount')->INSERT($disc);
    }

    public function ret(){
      $ret = DB::table('discount')
      ->SELECT('DiscountID','DiscountName','DiscountRate')
      ->WHERE('DiscountID',Input::get('id'))
      ->get();

      return \Response::json(['ret'=>$ret]);
    }

    public function edit(){

      $name = Input::get('edis');
      $rate = Input::get('eper');

      DB::table('discount')
      ->WHERE('DiscountID',Input::get('id'))
      ->UPDATE(['DiscountName'=>$name,'DiscountRate'=>$rate]);

    }

    public function delete(){

      DB::table('discount')
      ->WHERE('DiscountID',Input::get('id'))
      ->UPDATE(['isActive'=>0]);

    }


}
