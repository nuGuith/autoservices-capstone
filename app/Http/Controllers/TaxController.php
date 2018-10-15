<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Illuminate\Http\RedirectResponse;

class TaxController extends Controller
{
    public function tax(){
      $view = DB::table('tax')
      ->SELECT('TaxID','Tax')
      ->WHERE('isActive',1)
      ->get();

      return view('tax.tax',compact('view'));
    }

    public function add(){
      $stat = 1;

      $tax = Input::get('tax');

      $tax = array("Tax"=>$tax,"isActive"=>$stat);
      DB::table('tax')->INSERT($tax);
    }

    public function ret(){
      $ret = DB::table('tax')
      ->SELECT('TaxID','Tax')
      ->WHERE('TaxID',Input::get('id'))
      ->get();

      return \Response::json(['ret'=>$ret]);
    }

    public function edit(){

      $vat = Input::get('vat');

      DB::table('tax')
      ->WHERE('TaxID',Input::get('id'))
      ->UPDATE(['Tax'=>$vat]);

    }

    public function delete(){

      DB::table('tax')
      ->WHERE('TaxID',Input::get('id'))
      ->UPDATE(['isActive'=>0]);

    }


}
