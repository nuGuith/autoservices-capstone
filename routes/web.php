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

//Maintenance - Vehicle Type
Route::resource('vehicletype','VehicleTypeController');
Route::POST('/Addvehicletype', 'VehicleTypeController@addvehicletype');
Route::GET('/RetrieveVT', 'VehicleTypeController@RetrieveVT');
Route::POST('/editvehicletype', 'VehicleTypeController@editvehicletype');
Route::POST('/Deletevehicletype', 'VehicleTypeController@Deletevehicletype');

//Maintenance - Product Category
Route::resource('productcategory', 'ProductCategoryController');
Route::post('/productcategory', 'ProductCategoryController@store');
Route::put('/productcategory', 'ProductCategoryController@update');
Route::patch('/productcategory', 'ProductCategoryController@delete');

//Maintenance - Product Type
Route::resource('producttype', 'ProductTypeController');
Route::post('/producttype', 'ProductTypeController@store');
Route::put('/producttype', 'ProductTypeController@update');
Route::patch('/producttype', 'ProductTypeController@delete');

//Maintenance - Product Brand
Route::resource('productbrand', 'ProductBrandController');
Route::post('/productbrand', 'ProductBrandController@store');
Route::put('/productbrand', 'ProductBrandController@update');
Route::patch('/productbrand', 'ProductBrandController@delete');

//Maintenance - Product Unit Type
Route::resource('productunittype', 'ProductUnitTypeController');
Route::post('/productunittype', 'ProductUnitTypeController@store');
Route::put('/productunittype', 'ProductUnitTypeController@update');
Route::patch('/productunittype', 'ProductUnitTypeController@delete');

//Maintenance - Product
Route::get('/product', 'ProductController@index');
Route::post('/addproduct', 'ProductController@create');
Route::get('/RetrieveProduct', 'ProductController@edit');
Route::post('/updateproduct', 'ProductController@update');
Route::post('/deleteproduct', 'ProductController@delete');

//Maintenance - Service Category
Route::resource('servicecategory','ServiceCategoryController');
Route::post('/servicecategory', 'ServiceCategoryController@store');
Route::put('/servicecategory', 'ServiceCategoryController@update');
Route::patch('/servicecategory', 'ServiceCategoryController@delete');

//Maintenance - Services
Route::resource('service','ServiceController');
Route::post('/service', 'ServiceController@store');
Route::put('/service', 'ServiceController@update');
Route::patch('/service', 'ServiceController@delete');

//Maintenance - Service Steps
Route::resource('servicesteps','ServiceStepsController');
Route::POST('/addsteps','ServiceStepsController@create');
Route::GET('/retsteps','ServiceStepsController@show');
Route::POST('/editsteps','ServiceStepsController@edit');
Route::POST('/deletesteps','ServiceStepsController@delete');

//Maintenance - Service Price
Route::resource('/serviceprice', 'ServicePriceController');
Route::post('/addsprice', 'ServicePriceController@create');
Route::GET('/RetrieveSP', 'ServicePriceController@show');
Route::post('/editsprice', 'ServicePriceController@edit');
Route::post('/delsprice', 'ServicePriceController@delete');


//Maintenance - Service Product
Route::resource('/serviceproduct', 'ServiceProductController');
Route::post('/addsproduct', 'ServiceProductController@create');
Route::GET('/retSP', 'ServiceProductController@show');
Route::post('/editSP', 'ServiceProductController@edit');
Route::post('/delSP', 'ServiceProductController@delete');

//Maintenance - Service Bay
Route::resource('servicebay','ServiceBayController');
Route::post('/servicebay', 'ServiceBayController@store');
Route::put('/servicebay', 'ServiceBayController@update');
Route::patch('/servicebay', 'ServiceBayController@delete');

//Maintenance - Service Skills
Route::resource('serviceskills','ServiceSkillsController');

//Maintenance - Inspection Checklist
Route::resource('inspectionchecklist','InspectionChecklistController');
Route::post('/addchecklist','InspectionChecklistController@add');
Route::get('/retrievechecklist','InspectionChecklistController@Retrieve');
Route::post('/editchecklist','InspectionChecklistController@editchecklist');
Route::post('/deletecheckList','InspectionChecklistController@delete');

//Maintenance - Maintenance Checklist
//Route::get('/maintenancechecklist','ServiceController@maintenancechecklist');


//Maintenance - Job Title
Route::get('/jobtitle', 'JobTitleController@index');
Route::POST('/addJD', 'JobTitleController@create');
Route::GET('/RetrieveJD', 'JobTitleController@show');
Route::POST('/editJD', 'JobTitleController@edit');
Route::POST('/delJD', 'JobTitleController@delete');

//Maintenance - Skills
Route::get('/skills', 'SkillsController@index');
Route::POST('/addskills', 'SkillsController@create');
Route::GET('/retskill', 'SkillsController@show');
Route::POST('/editskills', 'SkillsController@edit');
Route::POST('/delskills', 'SkillsController@delete');

//Maintenance - Personnel
Route::resource('/personnel','PersonnelController');
Route::POST('/addpersonnel','PersonnelController@create');
Route::POST('/perph','PersonnelController@perph');
Route::GET('/retpersonnel','PersonnelController@show');
Route::POST('/editpersonnel','PersonnelController@edit');
Route::POST('/delpersonnel','PersonnelController@delete');

//Maintenance - Mechanic Skills
Route::get('/mechanicskills','MechanicSkillsController@index');
Route::POST('/addmskills','MechanicSkillsController@create');
Route::GET('/retmskils','MechanicSkillsController@show');
Route::POST('/editmskills','MechanicSkillsController@edit');
Route::POST('/delmskills','MechanicSkillsController@delete');

//Maintenance - Package
Route::get('/package','packageController@package');
Route::POST('/savePackage','AddPackageController@savePackage');
Route::get('/addpackage','AddPackageController@addpackage');
Route::GET('/retpagkage','packageController@packageshow');
Route::POST('/editpackage','packageController@editpackage');

//Maintenance - Promo
Route::get('/promo','PromoController@promo');
Route::get('/addpromo','AddPromoController@addpromo');
Route::POST('/savePromo','AddPromoController@savePromo');
Route::GET('/retpromo','PromoController@promoshow');
Route::POST('/editpromo','PromoController@editpromo');

//Maintenance - Free Items
Route::get('/freeitems','FreeItemsController@freeitems');
Route::POST('/addfreeitem','FreeItemsController@add');
Route::GET('/RetrieveFreeItem','FreeItemsController@ret');
Route::POST('/editfreeitem','FreeItemsController@edit');
Route::POST('/delfreeitem','FreeItemsController@delete');

//Maintenance - Discount
Route::get('/discount','DiscountController@discount');
Route::POST('/adddiscount','DiscountController@add');
Route::GET('/RetrieveDiscount','DiscountController@ret');
Route::POST('/editdiscount','DiscountController@edit');
Route::POST('/deldiscount','DiscountController@delete');


//404 bladeac
Route::get('/404',['as'=>'404','uses'=>'ErrorHandlerController@errorCode404']);
Route::get('/405',['as'=>'405','uses'=>'ErrorHandlerController@errorCode405']);


//Transaction - Customer Information
Route::resource('/customerinformation','CustomerController');
Route::put('/customerinformation', 'CustomerController@update');

Route::get('/viewvehiclehistory/{id}','VehicleHistoryController@index');
Route::get('/viewvehiclehistory/{id}/showHistory','VehicleHistoryController@showHistory');
Route::get('/viewvehiclehistory/{id}/showJobOrder','VehicleHistoryController@showJobOrder');

//Transaction - Inspect Vehicle
Route::get('/inspect','InspectController@index');
Route::resource('/addinspect', 'AddInspectController');
Route::get('/addinspect/{id}/fromEstimate','AddInspectController@fromEstimate')->name('fromEstimate');
Route::get('/addinspect/{id}/showEstimate','AddInspectController@showEstimate')->name('showEstimate');
Route::get('/editinspect','EditInspectController@index');
Route::get('/viewinspect','ViewInspectController@index');

///Transaction - Estimate
Route::get('/estimates','EstimatesController@index');

Route::resource('/addestimates','AddEstimatesController');
Route::get('/addestimates/{automobile}/showAutomobile', 'AddEstimatesController@showAutomobile');
Route::get('/addestimates/{customer}/showCustomer', 'AddEstimatesController@showCustomer');
Route::get('/addestimates/{id}/getProducts', 'AddEstimatesController@getProducts');
Route::get('/addestimates/{id}/getServicePrice', 'AddEstimatesController@getServicePrice');
Route::get('/addestimates/{id}/filterPlateNo', 'AddEstimatesController@filterPlateNo');
Route::get('/addestimates/unfilterPlateNo', 'AddEstimatesController@unfilterPlateNo');
Route::get('/addestimates/{id}/getServiceDetails', 'AddEstimatesController@getServiceDetails');
Route::get('/addestimates/{id}/getProductDetails', 'AddEstimatesController@getProductDetails');
Route::get('/addestimates/{id}/getDiscountDetails', 'AddEstimatesController@getDiscountDetails');

Route::get('/editestimates/{id}','EditEstimatesController@index');
Route::get('/editestimates/{id}/getServicePrice', 'EditEstimatesController@getServicePrice');
Route::get('/viewestimates/{id}','ViewEstimatesController@index');

//Transaction - Job Order
Route::get('/joborder','JobOrderController@index');

Route::resource('/addjoborder', 'AddJobOrderController');
Route::get('/addjoborder/{id}/fromEstimate', 'AddJobOrderController@fromEstimate')->name('fromEstimate');
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
Route::get('/updatejoborder/{id}/getSteps', 'UpdateJobOrderController@getSteps');
Route::get('/updatejoborder/{id}/getProducts', 'UpdateJobOrderController@getProducts');
Route::patch('/updatejoborder/updateJob', 'UpdateJobOrderController@updateJob');
Route::patch('/updatejoborder/setStartDate', 'UpdateJobOrderController@setStartDate');
Route::patch('/updatejoborder/updateJobOrder', 'UpdateJobOrderController@updateJobOrder');

//Back Job
Route::resource('/backjob','BackJobController');
Route::resource('/addbackjob','AddBackJobController');
Route::resource('/editbackjob','EditBackJobController');
Route::resource('/updatebackjob','UpdateBackJobController');
Route::resource('/viewbackjob','ViewBackJobController');

// Output Forms - Sample
Route::get('/indexx','SampleController@inspect');
Route::get('/inspectform','SampleController@inspect_pdf');
Route::get('/estimateform','SampleController@estimate_pdf');
Route::get('/receipt','SampleController@receipt_pdf');
Route::get('/joborderform','SampleController@joborder_pdf');

//Reports - Sample
Route::get('/estimate_report', 'ReportsController@estimate');
Route::get('/inspection_report', 'ReportsController@inspection');
Route::get('/joborder_report', 'ReportsController@joborder');
Route::get('/jobordersales_report', 'ReportsController@jobordersales');
Route::get('/netsales_report', 'ReportsController@netsales');
Route::get('/payment_report', 'ReportsController@payment');

//Reports - Printable Forms
Route::get('/report-estimate', 'PDFController@estimate');
Route::get('/report-inspection', 'PDFController@inspection');
Route::get('/report-joborder', 'PDFController@joborder');
Route::get('/report-jobordersales', 'PDFController@jobordersales');
Route::get('/report-netsales', 'PDFController@netsales');