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
Route::get('/personnel','PersonnelController@personnel');

Route::get('/customer','CustomerController@customer');
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

//Maintenance - Vehicle Type
Route::resource('vehicletype','VehicleTypeController');
Route::put('/vehicletype', 'VehicleTypeController@update');
Route::patch('/vehicletype', 'VehicleTypeController@delete');

Route::resource('addvehicletype','AddVehicleTypeController');
Route::post('/addvehicletype', 'AddVehicleTypeController@store');

//Maintenance - Products
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

Route::resource('product', 'ProductController');
Route::post('/product', 'ProductController@store');
Route::put('/product', 'ProductController@update');
Route::patch('/product', 'ProductController@delete');

//Maintenance - Services
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

//404 blade - modified
Route::get('/404',['as'=>'404','uses'=>'ErrorHandlerController@errorCode404']);
Route::get('/405',['as'=>'405','uses'=>'ErrorHandlerController@errorCode405']);


//Transaction - Inspect Vehicle
Route::get('/inspect','InspectController@index');
Route::get('/addinspect','AddInspectController@index');
Route::get('/editinspect','EditInspectController@index');
Route::get('/viewinspect','ViewInspectController@index');

//Transaction - Estimate
Route::get('/estimates','EstimatesController@index');
Route::get('/addestimates','AddEstimatesController@index');
Route::get('/editestimates','EditEstimatesController@index');
Route::get('/viewestimates','ViewEstimatesController@index');

//Transaction - Job Order
Route::get('/joborder','JobOrderController@index');
Route::get('/addjoborder','AddJobOrderController@index');
Route::get('/editjoborder','EditJobOrderController@index');
Route::get('/viewjoborder', 'ViewJobOrderController@index');
Route::get('/updatejoborder', 'UpdateJobOrderController@index');

