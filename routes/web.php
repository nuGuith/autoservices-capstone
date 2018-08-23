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

//Maintenance - Vehicle
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


//Maintenance - Services
Route::resource('servicebay','ServiceBayController');
Route::post('/servicebay', 'ServiceBayController@store');
Route::put('/servicebay', 'ServiceBayController@update');
Route::patch('/servicebay', 'ServiceBayController@delete');

Route::resource('servicecategory','ServiceCategoryController');
Route::post('/servicecategory', 'ServiceCategoryController@store');
Route::put('/servicecategory', 'ServiceCategoryController@update');
Route::patch('/servicecategory', 'ServiceCategoryController@delete');

Route::resource('/serviceprice', 'ServicePriceController');
Route::resource('/serviceproduct', 'ServiceProductController');

Route::resource('service','ServiceController');
Route::post('/service', 'ServiceController@store');
Route::put('/service', 'ServiceController@update');
Route::patch('/service', 'ServiceController@delete');

Route::resource('inspectionchecklist','InspectionChecklistController');
Route::get('/maintenancechecklist','ServiceController@maintenancechecklist');
Route::resource('transact','TransactionController');


//404 blade
Route::get('/404',['as'=>'404','uses'=>'ErrorHandlerController@errorCode404']);
Route::get('/405',['as'=>'405','uses'=>'ErrorHandlerController@errorCode405']);


//Transaction - Inspect Vehicle
Route::get('/inspect','InspectController@index');
Route::get('/addinspect','AddInspectController@index');
Route::get('/editinspect','EditInspectController@index');
Route::get('/viewinspect','ViewInspectController@index');

///Transaction - Estimate
Route::get('/estimates','EstimatesController@index');

Route::resource('/addestimates','AddEstimatesController');
Route::post('/addestimates', 'AddEstimatesController@store');
Route::get('/addestimates/{automobile}/showAutomobile', 'AddEstimatesController@showAutomobile');
Route::get('/addestimates/{customer}/showCustomer', 'AddEstimatesController@showCustomer');
Route::get('/addestimates/{id}/getProducts', 'AddEstimatesController@getProducts');
Route::get('/addestimates/{id}/getServicePrice', 'AddEstimatesController@getServicePrice');
Route::get('/addestimates/{id}/filterPlateNo', 'AddEstimatesController@filterPlateNo');
Route::get('/addestimates/{id}/getServiceDetails', 'AddEstimatesController@getServiceDetails');
Route::get('/addestimates/{id}/getProductDetails', 'AddEstimatesController@getProductDetails');
Route::get('/addestimates/{id}/getDiscountDetails', 'AddEstimatesController@getDiscountDetails');

Route::get('/editestimates/{id}','EditEstimatesController@index');
Route::get('/viewestimates/{id}','ViewEstimatesController@index');

//Transaction - Job Order
Route::get('/joborder','JobOrderController@index');

Route::resource('/addjoborder','AddJobOrderController');
Route::get('/addjoborder/fromEstimate/{id}', 'AddJobOrderController@fromEstimate')->name('fromEstimate');
Route::get('/addjoborder/{id}/showEstimate', 'AddJobOrderController@showEstimate');
Route::get('/addjoborder/{id}/searchByCustomerName', 'AddJobOrderController@searchByCustomerName');
Route::get('/addjoborder/{id}/searchByPlateNo', 'AddJobOrderController@searchByPlateNo');
Route::get('/addjoborder/{id}/getFilteredProductList', 'AddJobOrderController@getFilteredProductList');
Route::get('/addjoborder/{id}/getServiceDetails', 'AddJobOrderController@getServiceDetails');
Route::get('/addjoborder/{id}/getProductDetails', 'AddJobOrderController@getProductDetails');
Route::get('/addjoborder/{id}/getDiscountDetails', 'AddJobOrderController@getDiscountDetails');

Route::get('/editjoborder/{id}','EditJobOrderController@index');
Route::get('/viewjoborder/{id}', 'ViewJobOrderController@index');
Route::get('/updatejoborder/{id}', 'UpdateJobOrderController@index');


//Maintenance - Vehicle Type
Route::resource('vehicletype','VehicleTypeController');
Route::POST('/Addvehicletype', 'VehicleTypeController@addvehicletype');
Route::GET('/RetrieveVT', 'VehicleTypeController@RetrieveVT');
Route::POST('/editvehicletype', 'VehicleTypeController@editvehicletype');
Route::POST('/Deletevehicletype', 'VehicleTypeController@Deletevehicletype');

//Maintenance - Product
Route::get('/product', 'ProductController@index');
Route::post('/addproduct', 'ProductController@create');
Route::get('/RetrieveProduct', 'ProductController@edit');
Route::post('/updateproduct', 'ProductController@update');
Route::post('/deleteproduct', 'ProductController@delete');

//Maintenance - Personnel
Route::get('/jobtitle', 'JobTitleController@index');
Route::POST('/addJD', 'JobTitleController@create');
Route::GET('/RetrieveJD', 'JobTitleController@show');
Route::POST('/editJD', 'JobTitleController@edit');
Route::POST('/delJD', 'JobTitleController@delete');

//Maintenance - skills
Route::get('/skills', 'SkillsController@index');
Route::POST('/addskills', 'SkillsController@create');
Route::GET('/retskill', 'SkillsController@show');
Route::POST('/editskills', 'SkillsController@edit');
Route::POST('/delskills', 'SkillsController@delete');

//Add,Edit,Delete,View InspectionChecklist
Route::resource('transact','TransactionController');
Route::POST('/AddIChecklist','InspectionChecklistController@add');
Route::GET('/RetrieveChecklist','InspectionChecklistController@Retrieve');
Route::POST('/EditIChecklist','InspectionChecklistController@editchecklist');
Route::POST('/DeleteCheckList','InspectionChecklistController@delete');

//Maintenance - Personnel
Route::resource('/personnel','PersonnelController');
Route::POST('/addpersonnel','PersonnelController@create');
Route::GET('/retpersonnel','PersonnelController@show');
Route::POST('/editpersonnel','PersonnelController@edit');
Route::POST('/delpersonnel','PersonnelController@delete');

//Maintenance - Discount
Route::get('/discount','DiscountController@discount');
Route::POST('/adddiscount','DiscountController@add');
Route::GET('/RetrieveDiscount','DiscountController@ret');
Route::POST('/editdiscount','DiscountController@edit');
Route::POST('/deldiscount','DiscountController@delete');

