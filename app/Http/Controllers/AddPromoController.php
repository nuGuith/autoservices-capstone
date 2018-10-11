<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Response;

class AddPromoController extends Controller
{
    public function addpromo(){
      $product = DB::table('product')
                ->leftjoin('product_type', 'product.ProductTypeID', 'product_type.ProductTypeID')
                ->leftjoin('product_unit_type', 'product.ProductUnitTypeID', 'product_unit_type.ProductUnitTypeID')
                ->where('product.isActive',1)
                ->get();

      $service = DB::table('service')
                ->leftjoin('service_category', 'service.ServiceCategoryID', 'service_category.ServiceCategoryID')
                ->where('service.isActive',1)
                ->get();

      $items = DB::table('promo_freeitems')
                ->where('isActive',1)
                ->get();

    	return view('promo.addpromo')
      ->with('product', $product)
      ->with('service', $service)
      ->with('items', $items);
    }
      public function savePromo(Request $request){
        $var = $request->input('StartDate');
        $date = str_replace('/', '-', $var);
        $varStart = date('Y-m-d', strtotime($date));

        $varr = $request->input('EndDate');
        $dateee = str_replace('/', '-', $varr);
        $varEnd = date('Y-m-d', strtotime($dateee));

          DB::table('promo_header')
          ->insert([
            'PromoName' => $request->input('promoName'),
            'StartDate' => $varStart,
            'EndDate' => $varEnd,
            'Price' => $request->input('price'),
            'WarrantyDuration' => $request->input('warranty'),
            'WarrantyDurationMode' => $request->input('durationMode')
          ]);
          // get latest promo id
          $prmID = DB::table('promo_header')
                    ->orderBy('PromoID', 'desc')
                    ->groupBy('PromoID')
                    ->value('PromoID');

          $qty = $request->input('qty');
          $prodIDD = $request->input('productId');
          $ctr = 0;

          foreach ($prodIDD as $pd => $pdd) {
            DB::table('promo_product_inclusions')
            ->insert([
              'PromoID' => $prmID,
              'ProductID' => $pdd,
              'Quantity' => $qty[$ctr],
            ]);
            $ctr = $ctr + 1;
          }

          foreach($request->input('serviceId') as $srvcid){
            DB::table('promo_service_inclusions')
            ->insert([
              'PromoID' => $prmID,
              'ServiceID' => $srvcid
            ]);
          }

          foreach($request->input('itemId') as $itmid){
            DB::table('promo_freeitems_inclusions')
            ->insert([
              'PromoID' => $prmID,
              'FreeItemsID' => $itmid
            ]);
          }
      }
}
