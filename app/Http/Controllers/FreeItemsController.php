<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Illuminate\Http\RedirectResponse;

class FreeItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function freeitems(){
      $view = DB::table('promo_freeitems')
      ->SELECT('FreeItemsID','ItemName','Description')
      ->WHERE('isActive',1)
      ->get();

        return view('promo.freeitems',compact('view'));
    }

    public function add(){
      $item = Input::get('item');
      $desc = Input::get('desc');

      $item = array("ItemName"=>$item,"Description"=>$desc);
      DB::table('promo_freeitems')->INSERT($item);
    }


    public function ret(){
      $ret = DB::table('promo_freeitems')
      ->SELECT('FreeItemsID','ItemName','Description')
      ->WHERE('FreeItemsID',Input::get('id'))
      ->get();

      return \Response::json(['ret'=>$ret]);
    }

    public function edit(){

      $name = Input::get('eitems');
      $descrip = Input::get('edesc');

      DB::table('promo_freeitems')
      ->WHERE('FreeItemsID',Input::get('id'))
      ->UPDATE(['ItemName'=>$name,'Description'=>$descrip]);

    }

    public function delete(){

      DB::table('promo_freeitems')
      ->WHERE('FreeItemsID',Input::get('id'))
      ->UPDATE(['isActive'=>0]);

    }

}
