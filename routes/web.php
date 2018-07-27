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
Route::get('/addvehicletype','AddVehicleTypeController@addvehicletype');
Route::get('/personnel','PersonnelController@personnel');

Route::get('/customer','CustomerController@customer');
Route::get('/estimates', 'EstimatesController@estimates');
Route::get('/warranty', 'WarrantyController@warranty');
Route::get('/jobdescription', 'JobDescriptionController@jobdescription');
Route::get('/viewcustomer', 'ViewCustomerController@viewcustomer');
Route::get('/addpersonnel', 'AddPersonnelController@addpersonnel');
Route::get('/discount','DiscountController@discount');
Route::get('/adddiscount','AddDiscountController@adddiscount');
Route::get('/promo','PromoController@promo');
Route::get('/addpromo','AddPromoController@addpromo');
Route::get('/editpromo','EditPromoController@editpromo');
Route::get('/package','packageController@package');
Route::get('/addpackage','AddPackageController@addpackage');
Route::get('/editpackage','EditPackageController@editpackage');

//MaintenanceVehicle
Route::resource('vehicletype','AddVehicleTypeController');
Route::post('/vehicletype', 'AddVehicleTypeController@store');
Route::put('/vehicletype', 'AddVehicleTypeController@update');
Route::patch('/vehicletype', 'AddVehicleTypeController@delete');

//MaintenanceProducts
Route::resource('productcategory', 'ProductCategoryController');
Route::post('/productcategory', 'ProductCategoryController@store');
Route::put('/productcategory', 'ProductCategoryController@update');
Route::patch('/productcategory', 'ProductCategoryController@delete');

Route::resource('productbrand', 'ProductBrandController');
Route::post('/productbrand', 'ProductBrandController@store');
Route::put('/productbrand', 'ProductBrandController@update');
Route::patch('/productbrand', 'ProductBrandController@delete');

Route::resource('producttype', 'ProductTypeController');
Route::post('/producttype', 'ProductTypeController@store');
Route::put('/producttype', 'ProductTypeController@update');
Route::patch('/producttype', 'ProductTypeController@delete');

Route::resource('productunittype', 'ProductUnitTypeController');
Route::post('/productunittype', 'ProductUnitTypeController@store');
Route::put('/productunittype', 'ProductUnitTypeController@update');
Route::patch('/productunittype', 'ProductUnitTypeController@delete');

//MaintenanceServices
Route::resource('servicecategory','ServiceCategoryController');
Route::post('/servicecategory', 'ServiceCategoryController@store');
Route::put('/servicecategory', 'ServiceCategoryController@update');
Route::patch('/servicecategory', 'ServiceCategoryController@delete');

Route::resource('servicebay','ServiceBayController');
Route::post('/servicebay', 'ServiceBayController@store');
Route::put('/servicebay', 'ServiceBayController@update');
Route::patch('/servicebay', 'ServiceBayController@delete');

Route::resource('service','ServiceController');
Route::post('/service', 'ServiceController@store');
Route::put('/service', 'ServiceController@update');
Route::patch('/service', 'ServiceController@delete');

Route::resource('inspectionchecklist','InspectionChecklistController');
Route::get('/maintenancechecklist','ServiceController@maintenancechecklist');
Route::resource('transact','TransactionController');

// Route::get('/service', function () {
//     return view('maintenance.service');
// });


