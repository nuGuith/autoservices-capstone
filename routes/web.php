<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*Route::get('/', function () {
    return view('welcome');
});*/

//Dashboard
Route::get('/','DashboardIndexController@index');
Route::get('/vehicletype','VehicleTypeController@vehicletype');
Route::get('/addvehicletype','AddVehicleTypeController@addvehicletype');
Route::get('/personnel','PersonnelController@personnel');
Route::get('/productcategory','ProductCategoryController@productcategory');
Route::get('/addproductcategory','AddProductCategoryController@addproductcategory');
Route::get('/producttype','ProductTypeController@producttype');
Route::get('/addproducttype','AddProductTypeController@addproducttype');
Route::get('/productbrand','ProductBrandController@productbrand');
Route::get('/addproductbrand','AddProductBrandController@addproductbrand');
Route::get('/productvariance','ProductVarianceController@productvariance');
Route::get('/addproductvariance','AddProductVarianceController@addproductvariance');
Route::get('/product','ProductController@product');
Route::get('/addproduct','AddProductController@addproduct');
Route::get('/customer','CustomerController@customer');
Route::get('/estimates', 'EstimatesController@estimates');
Route::get('/warranty', 'WarrantyController@warranty');
Route::get('/jobdescription', 'JobDescriptionController@jobdescription');
Route::get('/addcustomer', 'AddCustomerController@addcustomer');
Route::get('/viewcustomer', 'ViewCustomerController@viewcustomer');
Route::get('/addpersonnel', 'AddPersonnelController@addpersonnel');


// Route::get('/service', function () {
//     return view('maintenance.service');
// });


