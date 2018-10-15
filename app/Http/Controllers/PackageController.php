<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\PackageHeader;
use App\PackageProductInclusions;
use App\PackageServiceInclusions;
use App\Product;
use App\Service;
use Illuminate\Support\Facades\Input;
class PackageController extends Controller
{ 
    public function package(){
      

   //   $pack = DB::table('package_header')
      // ->select('*')
      // ->get();


  
    $pack = DB::table('package_header')
      ->WHERE('isActive',1)
      ->get();

      //PRODUCT
     $pr = DB::table('package_product_inclusions')
      ->leftjoin('product', 'package_product_inclusions.ProductID','=','product.ProductID')
      ->leftjoin('product_type', 'product.ProductTypeID', 'product_type.ProductTypeID')
      ->leftjoin('product_brand', 'product.ProductBrandID', '=', 'product_brand.ProductBrandID')
      ->leftjoin('product_unit_type', 'product.ProductUnitTypeID', 'product_unit_type.ProductUnitTypeID')
      // ->where('product.isActive',1)             
      ->get();

      //SERVICE
      $sr = DB::table('package_service_inclusions')
      ->leftjoin('service', 'package_service_inclusions.ServiceID','=','service.ServiceID')
      ->get();

     
    

    return View::make('package.package')->with('pack', $pack)->with('pr', $pr)->with('sr', $sr);
      //return view('package.package');
    }

public function packageshow()
    {
        $ret = DB::table('package_header')
        ->WHERE('PackageID',Input::get('id'))
        ->get();


       $pr = DB::table('package_product_inclusions')
      ->leftjoin('product', 'package_product_inclusions.ProductID','=','product.ProductID')
    ->leftjoin('product_type', 'product_type.ProductTypeID','=','product.ProductTypeID')
    ->leftjoin('product_brand', 'product.ProductBrandID', '=', 'product_brand.ProductBrandID')
    ->leftjoin('product_unit_type', 'product_unit_type.ProductUnitTypeID','=','product.ProductUnitTypeID')
      ->WHERE('PackageID',Input::get('id'))
      ->get();

      //SERVICE
      $sr = DB::table('package_service_inclusions')
      ->leftjoin('service', 'package_service_inclusions.ServiceID','=','service.ServiceID')
    ->leftjoin('service_category', 'service_category.ServiceCategoryID','=','service.ServiceCategoryID')
        ->WHERE('PackageID',Input::get('id'))
      ->get();

 $pquery = DB::table('package_product_inclusions')
        ->WHERE('PackageID',Input::get('id'))
        ->pluck('ProductID');
  
  $npr= DB::table('product')
    ->leftjoin('product_type', 'product_type.ProductTypeID','=','product.ProductTypeID')
    ->leftjoin('product_brand', 'product.ProductBrandID', '=', 'product_brand.ProductBrandID')
    ->leftjoin('product_unit_type', 'product_unit_type.ProductUnitTypeID','=','product.ProductUnitTypeID')
      ->WHERE('product.isActive',1)
      ->whereNotIn('ProductID', $pquery)
      ->select('*')
      ->get();

 $squery = DB::table('package_service_inclusions')
        ->WHERE('PackageID',Input::get('id'))
        ->pluck('ServiceID');

      $nsr= DB::table('service')
    ->leftjoin('service_category', 'service_category.ServiceCategoryID','=','service.ServiceCategoryID')
      ->WHERE('service.isActive',1)
      ->whereNotIn('ServiceID', $squery)
      ->select('*')
      ->get();
          return \Response::json(['per'=>$ret,'prod'=>$pr,'ser'=>$sr,'nprod'=>$npr,'nser'=>$nsr]);
    }



    public function editpackage()
    {

      $packageID = Input::get('packageID');
      $packageName = Input::get('packageName');
      $price = Input::get('price');
      $warranty = Input::get('warranty');
      $mileage = Input::get('mileage');
      $durationMode = Input::get('durationMode');
      $productId = Input::get('productId');
      $serviceId = Input::get('serviceId');
      $qty = Input::get('qty');



      DB::table('package_header')
      ->WHERE('PackageID',$packageID)
      ->UPDATE(['PackageName'=>$packageName,'Price'=>$price,'WarrantyDuration'=>$warranty,'WarrantyDurationMode'=>$durationMode, 'WarrantyMileage'=>$mileage]);

  DB::table('package_product_inclusions')->where('PackageID', $packageID)->delete();
  DB::table('package_service_inclusions')->where('PackageID', $packageID)->delete();
  $ctr = 0;
     foreach ($productId as $pdd) {
          DB::table('package_product_inclusions')
          ->insert([
            'PackageID' => $packageID,
            'ProductID' => $pdd,
            'Quantity' => $qty[$ctr],
          ]);
          $ctr = $ctr + 1;
        }

        foreach($serviceId as $srvcid){
          DB::table('package_service_inclusions')
          ->insert([
            'PackageID' => $packageID,
            'ServiceID' => $srvcid
          ]);
        }

    }

    public function delete(){

      DB::table('package_header')
      ->WHERE('PackageID',Input::get('id'))
      ->UPDATE(['isActive'=>0]);

      DB::table('package_product_inclusions')
      ->WHERE('PackageID',Input::get('id'))
      ->UPDATE(['isActive'=>0]);

      DB::table('package_product_inclusions')
      ->WHERE('PackageID',Input::get('id'))
      ->UPDATE(['isActive'=>0]);

    }
 
}