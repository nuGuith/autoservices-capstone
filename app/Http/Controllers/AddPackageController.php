<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Response;

class AddPackageController extends Controller
{
    public function addpackage(){
      $product = DB::table('product')
                ->leftjoin('product_type', 'product.ProductTypeID', 'product_type.ProductTypeID')
                ->leftjoin('product_unit_type', 'product.ProductUnitTypeID', 'product_unit_type.ProductUnitTypeID')
                ->get();

      $service = DB::table('service')
                ->leftjoin('service_category', 'service.ServiceCategoryID', 'service_category.ServiceCategoryID')
                ->get();

    	return view('package.addpackage')
      ->with('product', $product)
      ->with('service', $service);
    }

    public function savePackage(Request $request){

      // dd($request->all());
        DB::table('package_header')
        ->insert([
          'PackageName' => $request->input('packageName'),
          'Price' => $request->input('price'),
          'WarrantyDuration' => $request->input('warranty'),
          'WarrantyDurationMode' => $request->input('durationMode')
        ]);
        // get latest package id
        $pckgID = DB::table('package_header')
                  ->orderBy('PackageID', 'desc')
                  ->groupBy('PackageID')
                  ->value('PackageID');

        $qty = $request->input('qty');
        $prodIDD = $request->input('productId');
        $ctr = 0;

        foreach ($prodIDD as $pd => $pdd) {
          DB::table('package_product_inclusions')
          ->insert([
            'PackageID' => $pckgID,
            'ProductID' => $pdd,
            'Quantity' => $qty[$ctr],
          ]);
          $ctr = $ctr + 1;
        }

        foreach($request->input('serviceId') as $srvcid){
          DB::table('package_service_inclusions')
          ->insert([
            'PackageID' => $pckgID,
            'ServiceID' => $srvcid
          ]);
        }
    }

}
