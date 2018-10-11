<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\PromoHeader;
use App\PromoProductInclusions;
use App\PromoServiceInclusions;
use App\PromoFreeItemInclusions;
use App\Product;
use App\Service;
use App\FreeItems;
use Illuminate\Support\Facades\Input;

class PromoController extends Controller
{	
    public function promo(){

    	 $pack = DB::table('promo_header')
      ->WHERE('isActive',1)
      ->get();

      //PRODUCT
   	 $pr = DB::table('promo_product_inclusions')
      ->leftjoin('product', 'promo_product_inclusions.ProductID','=','product.ProductID')
      ->leftjoin('product_type', 'product.ProductTypeID', 'product_type.ProductTypeID')
      ->leftjoin('product_unit_type', 'product.ProductUnitTypeID', 'product_unit_type.ProductUnitTypeID')
      ->get();

      //SERVICE
      $sr = DB::table('promo_service_inclusions')
      ->leftjoin('service', 'promo_service_inclusions.ServiceID','=','service.ServiceID')
      ->get();

     
      //FREE
      $fr = DB::table('promo_freeitems_inclusions')
      ->leftjoin('promo_freeitems', 'promo_freeitems_inclusions.FreeItemsID','=','promo_freeitems.FreeItemsID')
      ->get();

    

		return View::make('promo.promo')->with('pack', $pack)->with('pr', $pr)->with('sr', $sr)->with('fr', $fr);
    }

public function promoshow()
    {
        $ret = DB::table('promo_header')
        ->WHERE('PromoID',Input::get('id'))
        ->get();


       $pr = DB::table('promo_product_inclusions')
      ->leftjoin('product', 'promo_product_inclusions.ProductID','=','product.ProductID')
	  ->leftjoin('product_type', 'product_type.ProductTypeID','=','product.ProductTypeID')
	  ->leftjoin('product_unit_type', 'product_unit_type.ProductUnitTypeID','=','product.ProductUnitTypeID')
      ->WHERE('PromoID',Input::get('id'))
      ->get();

      //SERVICE
      $sr = DB::table('promo_service_inclusions')
      ->leftjoin('service', 'promo_service_inclusions.ServiceID','=','service.ServiceID')
	  ->leftjoin('service_category', 'service_category.ServiceCategoryID','=','service.ServiceCategoryID')
        ->WHERE('PromoID',Input::get('id'))
      ->get();

      $fr = DB::table('promo_freeitems_inclusions')
      ->leftjoin('promo_freeitems', 'promo_freeitems_inclusions.FreeItemsID','=','promo_freeitems.FreeItemsID')
        ->WHERE('PromoID',Input::get('id'))
      ->get();

 $pquery = DB::table('promo_product_inclusions')
        ->WHERE('PromoID',Input::get('id'))
        ->pluck('ProductID');
	
	$npr= DB::table('product')
	  ->leftjoin('product_type', 'product_type.ProductTypeID','=','product.ProductTypeID')
	  ->leftjoin('product_unit_type', 'product_unit_type.ProductUnitTypeID','=','product.ProductUnitTypeID')
      ->WHERE('product.isActive',1)
      ->whereNotIn('ProductID', $pquery)
      ->select('*')
      ->get();

 $squery = DB::table('promo_service_inclusions')
        ->WHERE('PromoID',Input::get('id'))
        ->pluck('ServiceID');

      $nsr= DB::table('service')
	  ->leftjoin('service_category', 'service_category.ServiceCategoryID','=','service.ServiceCategoryID')
      ->WHERE('service.isActive',1)
      ->whereNotIn('ServiceID', $squery)
      ->select('*')
      ->get();


    $fquery = DB::table('promo_freeitems_inclusions')
        ->WHERE('PromoID',Input::get('id'))
        ->pluck('FreeItemsID');

      $nfr= DB::table('promo_freeitems')
      ->WHERE('promo_freeitems.isActive',1)
      ->whereNotIn('FreeItemsID', $fquery)
      ->select('*')
      ->get();
          return \Response::json(['per'=>$ret,'prod'=>$pr,'ser'=>$sr,'fre'=>$fr,'nprod'=>$npr,'nser'=>$nsr,'nfre'=>$nfr]);
    }

 

 	public function editpromo()
    {

      $promoID = Input::get('promoID');
      $promoName = Input::get('promoName');
      $price = Input::get('price');
      $warranty = Input::get('warranty');
      $durationMode = Input::get('durationMode');
      $StartDate = Input::get('StartDate');
      $EndDate = Input::get('EndDate');
      $productId = Input::get('productId');
      $serviceId = Input::get('serviceId');
      $itemId = Input::get('itemId');
      $qty = Input::get('qty');

        $date = str_replace('/', '-', $StartDate);
        $varStart = date('Y-m-d', strtotime($date));

        $dateee = str_replace('/', '-', $EndDate);
        $varEnd = date('Y-m-d', strtotime($dateee));

      DB::table('promo_header')
      ->WHERE('PromoID',$promoID)
      ->UPDATE(['PromoName'=>$promoName,'StartDate'=>$varStart,'EndDate'=>$varEnd,'Price'=>$price,'WarrantyDuration'=>$warranty,'WarrantyDurationMode'=>$durationMode]);

	DB::table('promo_product_inclusions')->where('PromoID', $promoID)->delete();
	DB::table('promo_service_inclusions')->where('PromoID', $promoID)->delete();
	DB::table('promo_freeitems_inclusions')->where('PromoID', $promoID)->delete();
	$ctr = 0;
		 foreach ($productId as $pdd) {
          DB::table('promo_product_inclusions')
          ->insert([
            'PromoID' => $promoID,
            'ProductID' => $pdd,
            'Quantity' => $qty[$ctr],
          ]);
          $ctr = $ctr + 1;
        }



        foreach($serviceId as $srvcid){
          DB::table('promo_service_inclusions')
          ->insert([
            'PromoID' => $promoID,
            'ServiceID' => $srvcid
          ]);
        }


        foreach($itemId as $itmid){
            DB::table('promo_freeitems_inclusions')
            ->insert([
              'PromoID' => $promoID,
              'FreeItemsID' => $itmid
            ]);
          }

    }

    public function delete(){

      DB::table('promo_header')
      ->WHERE('PromoID',Input::get('id'))
      ->UPDATE(['isActive'=>0]);

      DB::table('promo_product_inclusions')
      ->WHERE('PromoID',Input::get('id'))
      ->UPDATE(['isActive'=>0]);

      DB::table('promo_service_inclusions')
      ->WHERE('PromoID',Input::get('id'))
      ->UPDATE(['isActive'=>0]);

      DB::table('promo_freeitems_inclusions')
      ->WHERE('PromoID',Input::get('id'))
      ->UPDATE(['isActive'=>0]);

    

    }
 
}