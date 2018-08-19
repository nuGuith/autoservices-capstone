@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','Add Job Order') <!-- Page Title -->
@section('content')
    

    <link type="text/css" rel="stylesheet" href="{{URL::asset('vendors/sweetalert/css/sweetalert2.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/pages/sweet_alert.css')}}"/>

    <link type="text/css" rel="stylesheet" href="{{URL::asset('vendors/animate/css/animate.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{URL::asset('vendors/hover/css/hover-min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{URL::asset('vendors/wow/css/animate.css')}}"/>

    <link type="text/css" rel="stylesheet" href="{{URL::asset('vendors/modal/css/component.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{URL::asset('vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendors/animate/css/animate.min.css')}}" />

    <link type="text/css" rel="stylesheet" href="{{URL::asset('vendors/fileinput/css/fileinput.min.css')}}"/>

    <!-- end of plugin styles -->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/pages/animations.css')}}"/>

    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/pages/portlet.css')}}"/>

    <style>
    p.hidden{
        display:none;
    }
    p.visible{
        display:inline;
    }
    p:target {
        animation: highlight 2s forwards;
        background: 2px solid yellow;
        }
    @keyframes highlight {
        80% {
            background: 2px solid yellow;
        }
        100% {
            background: transparent;
        }
    }
    </style>
        <!-- CONTENT -->
        <div id="content" class="bg-container">

            <header class="head">
                <div class="main-bar">
                    <div class="row" style = "height: 47px;">
                    <div class="col-6">
                        <h4 class="m-t-15">
                            <i class="fa fa-plus"></i>&nbsp;
                            Add Job Order
                        </h4>
                    </div>

                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right   ">
                            <li class="breadcrumb-item " >
                                <a href="/joborder">
                                    <i class="fa fa-wpforms" data-pack="default" data-tags=""></i>
                                    &nbsp;Job Order
                                </a>
                            </li>
                            <li class="active breadcrumb-item">&nbsp;Add Job Order</li>
                        </ol>
                    </div>

                    </div>
                </div>
            </header>
            
            <div class="outer">
                <div class="inner bg-container">
                    <div class="row">
                        <div class="col-lg-12">
                        {!! Form::open(array('id' => 'jobForm', 'url' => '/addjoborder', 'action' => 'AddJobOrderController@store', 'method' => 'POST')) !!}
                            <div class="card" >

                            <div class="card-block m-t-15">
                            
                            <!-- Seacrh by: Inspection/Estimate, Inspection Id/Estimate Id, Customer Name, Plate No -->
                            <div class="row m-t-15">
                                    <!--Search by Inspection/Estimate-->
                                    <div class="col-lg-3">    
	                                            <h5>Search by:</h5>
	                                            <p>
	                                                <p class="m-t-10">
	                                                <select class="form-control hide_search" tabindex="2" id="search" href="#anchor">
	                                                    <option disabled selected value=0>Choose Search by</option>
	                                                    <option href="#anchor" value = 1>Inspection ID</option>
	                                                    </option>
	                                                    <option href="#anchor" value = 2>Estimate ID</option>
	                                                </select>
	                                                </p>
	                                            </p>
	                                        </div>
                                        <!--Search by Inpection ID/Estimate ID -->
                                        <div class="col-lg-3">
                                            <h5>Search <a id="by"></a></h5>
	                                            <p>
	                                                <p>
	                                                    <p id="initial" class="m-t-10 visible">
	                                                        <select class="form-control chzn-select"></select>
	                                                    </p>
	                                                </p>
	                                                <p id="inspectionIDs" class="m-t-10 hidden">
	                                                    {{ Form::select(
	                                                        'inspections',
	                                                        $inspectionids,
	                                                        null,
	                                                        array(
	                                                        'class' => 'form-control chzn-select',
	                                                        'id' => 'inspections',
	                                                        'name' => 'inspectionid')
	                                                        ) 
	                                                    }}
	                                                </p>
	                                                <p id="estimateIDs" class="m-t-10 hidden">
	                                                    {{ Form::select(
	                                                        'estimates',
	                                                        $estimateids,
	                                                        null,
	                                                        array(
	                                                        'class' => 'form-control chzn-select',
	                                                        'id' => 'estimates',
	                                                        'name' => 'estimateid')
	                                                        ) 
	                                                    }}
	                                                </p>
	                                            </p>
                                        </div>
                                        <!--Search by Customer Name -->
                                            <div class="col-lg-3">
	                                            <h5>Search Customer Name:</h5>
	                                            <p>
	                                                <p class="m-t-10">
	                                                {{ Form::select(
	                                                    'customers',
	                                                    $customerids,
	                                                    null,
	                                                    array(
	                                                    'class' => 'form-control chzn-select',
	                                                    'id' => 'customers',
	                                                    'name' => 'customerid')
	                                                    ) 
	                                                }}
	                                                </p>
	                                            </p>
	                                        </div>
	                                        <!--Search by Customer Plate No.-->
	                                        <div class="col-lg-3 ">
	                                            <h5>Search Plate No:</h5>
	                                            <p>
	                                                <p class="m-t-10">
	                                                {{ Form::select(
	                                                    'automobiles',
	                                                    $automobiles,
	                                                    null,
	                                                    array(
	                                                    'class' => 'form-control chzn-select',
	                                                    'id' => 'automobiles',
	                                                    'name' => 'automobileid')
	                                                    ) 
	                                                }}
	                                                </p>
	                                            </p>
	                                        </div>                        
                                </div>


                            
                            <!--Start Customer Information -->                
                            <h4 class="m-t-10">Customer Information</h4>
                            <hr style="margin-top: 10px; border: 2px solid #a7dfcd">
                            

                            <!--Textfield: First Name, Middle Name, Last Name -->
                            <div class="row m-t-15">
                                    <div class="col-lg-4">
                                            <h5>First Name: <span style="color:red">*</span></h5>
                                            <p>
                                                <input id="fname" name="fname" type="text" placeholder="First Name" class="form-control m-t-10">
                                            </p>
                                        </div>
                                        <div class="col-lg-4">
                                            <h5>Middle Name: <span style="color:red">*</span></h5>
                                            <p>
                                                <input id="mname" name="mname" type="text" placeholder="Middle Name" class="form-control m-t-10">
                                            </p>
                                        </div>
                                        <div class="col-lg-4 ">
                                            <h5>Last Name: <span style="color: red">*</span></h5>
                                            <p>
                                                <input id="lname" name="lname" type="text" placeholder="Last Name" class="form-control m-t-10">
                                            </p>
                                        </div>                        
                                </div>


                                <!--Textfield: Contact No, Email, Senior Citizen/PWD ID -->
                                <div class="row m-t-5">
                                    <div class="col-lg-4 ">
                                            <h5>Contact No: <span style="color:red">*</span></h5>
                                            <p>
                                                <input id="phones" name="contact" placeholder="(999) 999-9999" class="form-control m-t-10" type="text" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                                            </p>
                                        </div>
                                        <div class="col-lg-4">
                                            <h5>Email: <span style="color:red"></span></h5>
                                            <p>
                                                <input id="email" name="email" type="text" placeholder="john@gmail.com" class="date_mask form-control m-t-10" data-inputmask="'alias': 'email'">
                                            </p>
                                        </div>
                                        <div class="col-lg-4 ">
                                            <h5>Senior Citizen/PWD ID: <span style="color: red"></span></h5>
                                            <p>
                                                <input id="pwd_sc_No" name="pwd_sc_No" type="text" placeholder="Senior Citizen/PWD ID" class="form-control m-t-10">
                                            </p>
                                        </div>                        
                                </div>


                                <!--Textfield: Address -->
                                <div class="form-group row m-t-0">
                                    <div class=" col-lg-1  m-t-15">
                                            <h5>Address:<span style="color:red">*</span></h5>
                                        </div>
                                        <div class="col-md-12 col-lg-11">                                        
                                            <p>
                                                <input id="address" name="address" type="text" placeholder="Address" class=" form-control m-t-10">
                                            </p>
                                        </div>                                                
                                </div>
                            <!--End Customer Information --> 


                            <!--Start Vehicle Information --> 
                            <h4>Vehicle Information</h4>
                            <hr style="margin-top: 10px; border: 2px solid #6699cc">


                            <!--Textfield: Plate No, Model, Chassis No, Mileage -->
                            <div class="row m-t-15">
                                    <div class="col-lg-4">
                                            <h5>Plate No.: <span style="color:red">*</span></h5>
                                            <p>
                                                <input id="plateno" name="plateno" type="text" placeholder="Plate No." class="form-control m-t-10">
                                            </p>
                                        </div>
                                        <div class="col-lg-4">
                                            <h5>Model: <span style="color:red">*</span></h5>
                                            <p class="m-t-10">
                                                {{ Form::select(
	                                                    'automobile_models',
	                                                    $automobile_models,
	                                                    null,
	                                                    array(
	                                                    'class' => 'form-control chzn-select',
	                                                    'id' => 'automobile_models',
	                                                    'name' => 'modelid')
	                                                    ) 
	                                            }}
                                            </p>
                                        </div>
                                        <div class="col-lg-4 ">
                                           <h5>Chassis No.: <span style="color: red">*</span></h5>
                                            <p>
                                                <input id="chassisno" name="chassisno" type="text" placeholder="Chassis No." maxlength="14" class="form-control m-t-10">
                                            </p>
                                        </div>

                                                               
                                </div>


                                 <!--Textfield:Color, Transmission Assign Mechanic, Service Bay -->
                                <div class="row m-t-5">
                                    <div class="col-lg-4 ">
                                        <h5>Mileage.: <span style="color: red">*</span></h5>
                                            <div class="input-group m-t-10" style="padding-bottom: 20px;">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-dashboard"></i>
                                                </span>
                                                <input id="mileage" name="mileage" type="text" placeholder="km" class="form-control"/>
                                            </div>
                                    </div>  
                                    <div class="col-lg-4 ">
                                        <h5>Color: <span style="color: red">*</span></h5>
                                        <p class="m-t-10">
                                            <input id="color" name="color" type="text" placeholder="Color" class="form-control">
                                        </p>
                                    </div> 
                                    <div class="col-lg-4">
                                        <h5>Transmission: <span style="color:red">*</span></h5>
                                        <div class="checkbox-rotate m-t-20">
                                        <label class="text-black"  style="padding-left: 45px;">
                                            <input id="MT" type="checkbox" value="MT">
                                            &nbsp;&nbsp;Manual 
                                        </label>

                                        <label class="text-black" style="padding-left: 60px;">
                                            <input id="AT" type="checkbox" value="AT">
                                            &nbsp;&nbsp;Automatic 
                                        </label>
                                        </div>
                                    </div>  

                                </div>
                            <!--END VEHICLE INFORMATION -->



                            <!--END VEHICLE INFORMATION -->


                        <!--START JOB ORDER DETAILS-->
                        <h4 class="m-t-20">Job Order Details</h2>
                        <hr style="margin-top: 10px; border: 2px solid #ffb74d  ">

                        <!--Select Button: Service Bay, Discount-->
                        <div class="row m-t-15">
                           <div class="col-lg-3">
                                <h5>Service Bay: <span style="color:red">*</span></h5>
                                <p class="m-t-10">
                                    {{Form::select(
	                                        'servicebays',
	                                        $service_bays,
	                                        null,
	                                        array(
	                                            'class' => 'form-control chzn-select',
	                                            'id' => 'servicebays',
	                                            'name' => 'servicebayid')
	                                        ) 
	                                }}
                                </p>
                            </div>
                            <div class="col-lg-3">
                                <h5>Discount: <span style="color:red"></span></h5>
                                <p class="m-t-10">
                                    {{Form::select(
	                                        'discounts',
	                                        $discounts,
	                                        null,
	                                        array(
	                                            'class' => 'form-control chzn-select',
	                                            'id' => 'discounts',
	                                            'name' => 'discountid')
	                                        ) 
	                                }}
                                </p>
                            </div>
                            <div class="col-lg-3">
                                <h5>Search Promo: <span style="color:red"></span></h5>
                                <p class="m-t-10">
                                    {{Form::select(
	                                        'promos',
	                                        $promos,
	                                        null,
	                                        array(
	                                            'class' => 'form-control chzn-select',
	                                            'id' => 'promos',
	                                            'name' => 'promoid')
	                                        ) 
	                                }}
                                </p>
                            </div>
                            <div class="col-lg-3">
                                <h5>Search Package: <span style="color:red"></span></h5>
                                <p class="m-t-10">
                                    {{Form::select(
	                                        'packages',
	                                        $packages,
	                                        null,
	                                        array(
	                                            'class' => 'form-control chzn-select',
	                                            'id' => 'packages',
	                                            'name' => 'packageid')
	                                        ) 
	                                }}
                                </p>
                            </div>                                                    
                        </div>

                        <!--Select Button: Service, Proodcut, Promo, Package-->
                        <div class="row m-t-10">
                            <div class="col-lg-4 ">
                                <h5>Problem: <span style="color: red"></span></h5>
                                <p class="m-t-10">
                                    <input id="problem" name="problem" type="text" placeholder="Problem" class="form-control">
                                </p>
                            </div> 
                            <div class="col-lg-3">
                                <h5>Search Service: <span style="color:red"></span></h5>
                                <p class="m-t-10">
                                    {{Form::select(
	                                        'services',
	                                        $services,
	                                        null,
	                                        array(
	                                            'class' => 'form-control chzn-select',
	                                            'id' => 'services',
	                                            'name' => 'serviceid')
	                                        ) 
	                                }}
                                </p>
                            </div>
                            <div class="col-lg-4">
                                <h5>Search Product: <span style="color:red"></span></h5>
                                <p class="m-t-10">
                                    {{Form::select(
	                                        'products',
	                                        $products,
	                                        null,
	                                        array(
	                                            'class' => 'form-control chzn-select',
	                                            'id' => 'products',
	                                            'name' => 'productid',
	                                            'multiple')
	                                        ) 
	                                }}
                                </p>
                            </div>
                            <div class="col-lg-1">
                                <button type="button" id="addRow" class="ibtnAdd btn btn-info m-t-25" ><i class="fa fa-plus text-white"></i></button>
                            </div>
                            
                                                      
                        </div>


                        <!--Start Job Order Table -->
                            <div class ="row m-t-10">
                                <table id="itemsTable" class="table order-list table-bordered display  table-hover dataTable" >
                                    <thead>
                                        <br>
                                        <tr>
                                            <td style="width: 18%;">
                                                <h5>Problem <span style="color: red">*</span></h5>
                                            </td>
                                            <td style="width: 10%;">
                                                <h5>Quantity <span style="color: red">*</span></h5>
                                            </td>
                                            <td style="width: 20%;">
                                                <h5>Items <span style="color: red"></span>
                                                </h5>
                                            </td>
                                            <td style="width: 10%;">
                                                <h5>Labor <span style="color: red">*</span>
                                                </h5>
                                            </td>
                                            <td style="width: 25%;">
                                                <h5>Assign Mechanic <span style="color: red">*</span>
                                                <span class="badge badge-pill badge-primary float-right calendar_badge" data-toggle="modal" data-href="#responsive" href="#viewModal">?</span>
                                                </h5>
                                            </td>
                                            <td style="width: 10%;">
                                                <h5>Unit Price<span style="color: red"></span>
                                                </h5>
                                            </td>
                                            <td style="width: 15%;">
                                                <h5>Total Price<span style="color: red"></span>
                                                </h5>
                                            </td>
                                            <td style="width: 10%;">
                                                <h5>Action<span style="color: red"></span>
                                                </h5>
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody >
                                        <!--Example: for SERVICE-->

                                           <!--Example: for Discount-->
                                            <!--Hidden Field: Quantity Labor, Assign Mechanic -->
                                           <tr id="discount">
                                            <td style="border-right:none !important"></td>
                                            <td style="border-right:none !important">
                                                <input type="hidden" style="width:55px;" name="quantity" placeholder="Quantity" class="form-control">
                                            </td>   
                                            <td style="border-right:none !important">  
                                                <span style="color:red">Discount:</span>
                                                <br>
                                            </p>
                                            </td>
                                            <td style="border-right:none !important">
                                                <input type="hidden" style="width:50px;" name="labor" placeholder="Labor" class="form-control">
                                            </td>
                                            <td style="border-right:none !important">
                                               <a></a>
                                            </td>
                                            <td style="border-right:none !important">
                                                <input type="text" style="width:50px; text-align: right" name="unitprice" readonly placeholder="0%" class="form-control">
                                            </td>
                                            <td style="border-right:none !important">
                                                <input type="text" style="width:50px; text-align: left;color:red" name="price" readonly placeholder=".00" class="form-control">
                                            </td>
                                            <!--Delete Row Inside Job Order Table -->
                                            <td style="border-left:none !important">
                                                <button type="button" id=" " class="btnDel btn btn-danger hvr-float-shadow" ><i class="fa fa-trash text-white"></i></button>
                                            </td> 
                                           </tr>

                                        </tbody>
                                        <!--Over All Total -->
                                    <tfoot>
                                        <tr>
                                            <th colspan="2" style="text-align: left;">Estimated Time: 
                                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="text-align: center; color: blue">3 days</span>
                                            </th>

                                            <td colspan="4" style="width: 5px; text-align: right">
                                                <h5>Grand Total:<span style="color: red"></span></h5>
                                            </td>
                                            <td style="text-align:right">
                                                <h5 id="grandtotal">Php&nbsp;&nbsp;&nbsp;<span style="color:red">&nbsp;&nbsp;&nbsp;0.00</span>
                                                </h5>
                                            </td>
                                            <td>
                                            </td>  
                                        </tr>
                                     </tfoot>
                                    </table> 

                            </div>
                            <!-- Assigning of SA, QA, IM, Mechanic -->
                            <div class="row m-t-15">
                                <div class="col-lg-3">
	                                <h5>Service Advisor:</h5>
	                                    <p>
	                                        <p class="m-t-10">
                                                <select class="form-control chzn-select" multiple style="width:120px;" value="Choose Service Advisor">
                                                    <option disabled>Choose Service Advisor</option>
                                                    <optgroup label="Maintenance">
                                                        <option>Juan Dela Cruz</option>
                                                        <option>Pedro Penduko</option>
                                                    </optgroup>
                                                </select>
	                                        </p>
	                                    </p>
	                            </div>
                                <div class="col-lg-3">
	                                <h5>Mechanic:</h5>
	                                    <p>
	                                        <p class="m-t-10">
                                                <select class="form-control chzn-select" multiple style="width:120px;" value="Choose Mechanic">
                                                    <option disabled>Choose Mechanic</option>
                                                    <optgroup label="Maintenance">
                                                        <option>Juan Dela Cruz</option>
                                                        <option>Pedro Penduko</option>
                                                    </optgroup>
                                                </select>
	                                        </p>
	                                    </p>
	                            </div>
                                <div class="col-lg-3">
	                                <h5>Quality Analyst:</h5>
	                                    <p>
	                                        <p class="m-t-10">
                                                <select class="form-control chzn-select" multiple style="width:120px;" value="Choose Quality Analyst">
                                                    <option disabled>Choose Quality Analyst</option>
                                                    <optgroup label="Quality Analyst">
                                                        <option>Juan Dela Cruz</option>
                                                        <option>Pedro Penduko</option>
                                                    </optgroup>
                                                </select>
	                                        </p>
	                                    </p>
	                            </div>
                                <div class="col-lg-3">
	                                <h5>Inventory Manager:</h5>
	                                    <p>
	                                        <p class="m-t-10">
                                                <select class="form-control chzn-select" multiple style="width:120px;" value="Inventory Manager">
                                                    <option disabled>Choose Inventory Manager</option>
                                                    <optgroup label="Maintenace">
                                                        <option>Juan Dela Cruz</option>
                                                        <option>Pedro Penduko</option>
                                                    </optgroup>
                                                </select>
	                                        </p>
	                                    </p>
	                            </div>
                            </div>

                            <!--Textfield: Remarks -->
                                <div class="row m-t-5">
                                    <div class="col-lg-12">
                                            <h5 style = "padding-bottom: 10px;">Remarks: <span style="color: red"></span></h5>
                                                <textarea id="remark3" class="form-control" cols="30" rows="2"></textarea>
                                        </div>                               
                                </div>
                       
                            <!--END OF JOB ORDER DETAILS -->
                             </div>


                     <!--VIEW STEPS MODAL -->
                <div class="modal fade in " id="viewModal" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-info">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-info"></i>
                                            &nbsp;&nbsp;Mechanic Assignment Information</h4>                  
                            </div>


                        <div class="modal-body" style="padding-left: 47px;">
                                 <!--Content-->
                                 <div class="row m-t-0">  
                                    <div class="col-md-11 ">
                                        <div class="row m-t-10">
                                           <div class="col-lg-12">
                                                <h5><span style="color:gray">Inday Sarah: </span>&nbsp;&nbsp;&nbsp;20%</h5>
                                            </div>

                                            <div class="col-lg-12 m-t-10">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width:20%; height:15px; font-size:12px" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">20%
                                                    </div>
                                                </div>
                                            </div>
                                         </div>
                                        <div class="row m-t-10">
                                           <div class="col-lg-12">
                                                <h5><span style="color:gray">Inday Cruz: </span>&nbsp;&nbsp;&nbsp;50%</h5>
                                            </div>

                                            <div class="col-lg-12 m-t-10">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 50%; height:15px; font-size:12px" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">50%
                                                    </div>
                                                </div>
                                            </div>
                                         </div>
                                         <div class="row m-t-10">
                                           <div class="col-lg-12">
                                                <h5><span style="color:gray">Simon Ibarra: </span>&nbsp;&nbsp;&nbsp;70%</h5>
                                            </div>

                                            <div class="col-lg-12 m-t-10">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: 70%; height:15px; font-size:12px" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">70%
                                                    </div>
                                                </div>
                                            </div>
                                         </div>
                                         <div class="row m-t-10">
                                           <div class="col-lg-12">
                                                <h5><span style="color:gray">Pedro Penduko: </span>&nbsp;&nbsp;&nbsp;80%</h5>
                                            </div>

                                            <div class="col-lg-12 m-t-10">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: 80%; height:15px; font-size:12px" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">80%
                                                    </div>
                                                </div>
                                            </div>
                                         </div>
                                         <div class="row m-t-10">
                                           <div class="col-lg-12">
                                                <h5><span style="color:gray">Victor Magtanggol: </span>&nbsp;&nbsp;&nbsp;100%</h5>
                                            </div>

                                            <div class="col-lg-12 m-t-10">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 100%; height:15px; font-size:12px" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">100%
                                                    </div>
                                                </div>
                                            </div>
                                         </div> 


                                    </div>
                                 </div>
                                 
                            </div>

                            <!--Button: Close, Save Changes -->
                            <div class="modal-footer m-t-10">
                              <div class="examples transitions m-t-5">
                                <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- VIEW STEPS MODAL-->  
                {!!Form::close()!!}

                             <!--Button: Back, Save-->
                             <div class="card-footer bg-black">
                               <div class="examples transitions m-t-5 pull-right">
                                    <button onclick="window.location='{{ url("/joborder") }}'" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn gray"  href="/joborder"><i class="fa fa-arrow-left">
                                    </i>&nbsp;Back</button>  

                                    <button class="btn btn-success  source success_clr m-l-0 hvr-float-shadow adv_cust_mod_btn" style ="width: 80px;" ><i class="fa fa-save text-white" ></i>&nbsp; Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                   
                <!-- /.outer -->
        <!--END CONTENT -->

<!-- global scripts sweet alerts-->
<script type="text/javascript" src="{{URL::asset('js/components.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/custom.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/sweetalert/js/sweetalert2.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/pages/sweet_alerts.js')}}"></script>
<!-- end of plugin scripts -->

<!-- global scripts animation-->
<script type="text/javascript" src="{{URL::asset('vendors/snabbt/js/snabbt.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/wow/js/wow.min.js')}}"></script>
<!-- end of plugin scripts -->
<script>
    new WOW().init();
</script>

<script>
$(document).on('submit', 'form.jobForm', function(e) {
	$.ajax({
		url: $(this).attr('action'),
		type: $(this).attr('method'),
		dataType: 'JSON',
		data: $(this).serialize(),
		success: function(data) {
			alert('Submitted');
		},
		error: function(xhr,err) {
			alert('Error ', err);
		}
	});
	e.PreventDefault();
	return false;
});
</script>
<!--SCRIPT FOR DELETE ROW INSIDE JOB ORDER TABLE -->
<script> 
$(document).ready(function () {
    $("#estimates option[value='0']").prop("disabled",true);
    $("#inspections option[value='0']").prop("disabled",true);
    $("#customers option[value='0']").prop("disabled",true);
    $("#automobiles option[value='0']").prop("disabled",true);
    $("#automobile_models option[value='0']").prop("disabled",true);
    $("#servicebays option[value='0']").prop("disabled",true);
    $("#discounts option[value='0']").prop("disabled",true);
    $("#services option[value='0']").prop("disabled",true);
    $("#products option[value='0']").prop("disabled",true);
    $("#promos option[value='0']").prop("disabled",true);
    $("#packages option[value='0']").prop("disabled",true);
    $("#addRow").prop("disabled",true);

    var estimateID, inspectID, packageID, promoID;
    var nah;
    var selectProduct = [];
    var selectedService = "";
    var selectService;
    var i, j, ctr, totalCounter = 0;
    var price;
    var grandTotal = 0;

    /* $('select').on('change', function () {}); */
    window.addEventListener("beforeunload", function (e) {
    var message = "Are you sure you want to leave?";
        (e || window.event).returnValue = message;     
            return message;
    });

    // On Quantity Change
    $("table.order-list").on("click", "input#quantity", function (event) {
        var quantity = $(this).closest("input#quantity").val();
        var unitprice = $(this).closest("input#unitprice").val();
        alert(quantity+" "+unitprice);
        $(this).closest("input#totalprice").val(999999);
    });

    //Button: Delete Row
    $("table.order-list").on("click", ".btnDel", function (event) {
        if($(this).closest("tr#discount")){ 
            var newDiscountRow = $('<tr id="discount">');
            var cols = "";
            cols += '<td style="border-right:none !important"></td>';
            cols += '<td style="border-right:none !important"><input type="hidden" style="width:55px;" name="quantity" placeholder="" readonly class="form-control hidden"></td>';
            cols += '<td style="border-right:none !important"><span style="color:red">Discount:</span><br> </td>';
            cols += '<td style="border-right:none !important"><input type="hidden" style="width:50px;" name="labor" placeholder="Labor" class="form-control"></td>';
            cols += '<td style="border-right:none !important"><a></a></td>';
            cols += '<td style="border-right:none !important"><input type="text" readonly style="width:50px;text-align: right" name="unitprice" placeholder="0%" class="form-control"></td>';
            cols += '<td style="border-right:none !important"><input type="text" readonly style="width:50px;text-align: right" name="price " placeholder="00" class="form-control"></td>';
            cols += '<td style="border-left:none !important"><button type="button" id=" " class="btnDel btn btn-danger hvr-float-shadow" ><i class="fa fa-trash text-white"></i></button></td>';
            newDiscountRow.append(cols);
            $("tr#discount").replaceWith(newDiscountRow);
            $("#discounts").val(null).trigger("chosen:updated");
        }
        
        $(this).closest("tr").remove();
            if($(this).closest("tr#id")){
                $(this).closest("tr#id", function (){
                    var id = $(this).find("input#id").val();
                    $("#services option[value='"+ id +"']").prop("disabled", false);
                    $("#services").trigger("chosen:updated");
                });
            }
            
    });

    function compute(){
        for (i = 0; i < totalCounter; i++){
            grandTotal += price[i];
        }
        document.getElementById("grandtotal").innerHTML = "PhP " + grandTotal;
    }

    //Button: Add Row
    var newProductRow = $("<tr/>");
    $("#addRow").on("click", function (event) {
        compute();
        var counter = 0;
        var cols = "";
        var problem = $("#problem").val();

        $.ajax({
            type: "GET",
            url: "/addjoborder/"+selectedService+"/getServiceDetails",
            dataType: "JSON",
            success:function(data){
                var newServiceRow = $("<tr id='id'>");
                cols += '<td style="border-right:none !important">'+ problem +'</td>';
                cols += '<td  style="border-right:none !important"><input type="hidden" style="width:55px;" id="id" name="quantity" placeholder="" value="'+ selectedService +'" readonly class="form-control hidden"></td>';
                cols += '<td style="border-right:none !important"> <span style="color:red">Service:</span><br>'+ data.service.servicename +'</td>';
                var pr = data.service.price;
                cols += '<td style="border-right:none !important"><input type="text" style="width:50px;" name="labor" placeholder="Labor" class="form-control" value="'+ pr +'"></td>';
                cols += '<td style="border-right:none !important"><select id="mechanic" class="form-control chzn-select"></select></td>';
                cols += '<td style="border-right:none !important"><input type="hidden" style="width:50px;" id="unitprice" name="unitprice" placeholder="" class="form-control"></td>';
                cols += '<td style="border-right:none !important"><input type="text" readonly style="width:50px;text-align: right"  name="price" placeholder=".00" class="form-control" value="'+ pr +'"></td>';
                cols += '<td style="border-left:none !important"><button type="button" id=" " class="btnDel btn btn-danger hvr-float-shadow" ><i class="fa fa-trash text-white"></i></button></td>';
                newServiceRow.append(cols);
                $(newServiceRow).insertBefore("#discount");
                $("#services option[value='"+selectedService+"']").prop("disabled", true);
                $("#services").trigger("chosen:updated");
                selectedService = null;
                price[totalCounter] = pr;
                cols = "";
                counter++;
                totalCounter++;
            }.done(function() {
                price = data.product.price;
                grandTotal += price;
            });
        }
        
        counter++;
        var newProductRow = $("<tr>");
        for(var k = 0; k < ctr; k++){
            $.ajax({
                type: "GET",
                url: "/addjoborder/"+ selectProduct[k] +"/getProductDetails",
                dataType: "JSON",
                success: function (data) {
                    cols = "";
                    cols += '<td style="border-right:none !important"></td>';
                    cols += '<td style="border-right:none !important"><input type="text" style="width:55px;" id="quantity" name="quantity" placeholder="Quantity" class="form-control hidden"></td>';
                    cols += '<td style="border-right:none !important">'+ data.product.productname +'</td>';
                    cols += '<td style="border-right:none !important"><input type="hidden" style="width:50px;" name="labor" placeholder="Labor" class="form-control"></td>';
                    cols += '<td style="border-right:none !important"><a></a></td>';
                    var pr = data.product.price;
                    cols += '<td style="border-right:none !important"><input type="text" readonly style="width:50px; text-align: right" id="unitprice" name="unitprice" readonly placeholder=".00" value='+ pr +' class="form-control"></td>';
                    cols += '<td style="border-right:none !important"><input type="text" readonly style="width:50px;text-align: right" id="totalprice" name="totalprice " placeholder=".00" class="form-control" value="'+ pr +'"></td>';
                    cols += '<td style="border-left:none !important"><button type="button" id=" " class="btnDel btn btn-danger hvr-float-shadow" ><i class="fa fa-trash text-white"></i></button></td>';
                    newProductRow.append(cols);
                    $(newProductRow).insertBefore("#discount");
                    if (ctr != 1){
                        newProductRow = $("<tr>");
                        cols = "";
                    }
                    price[totalCounter] = pr;
                    cols = "";
                    counter++;
                    totalCounter++;
                }).done(function(){
                for (i = 0; i < totalCounter; i++){
                    grandTotal += parseFloat(price[i]);
                }
            }
        }

        $("#grandtotal").text("Php " + grandTotal);
        $("#problem").val(null);
        $("#services").val(0).trigger("chosen:updated");
        $("#products").val(null).trigger("chosen:updated");
        $("#addRow").prop("disabled", true);
        
    });

    /* CHANGE SEARCH BY OPTION */
    $("#search").change(function () {
        var selected = $(this).val();
        var previous;
        var by = document.getElementById("by");
        if(selected == 1){
            by.innerHTML = "Inspection ID";
            document.getElementById("initial").className = "m-t-10 hidden";
            document.getElementById("inspectionIDs").className = "m-t-10 visible";
            document.getElementById("estimateIDs").className = "m-t-10 hidden";
            previous = inspectID;
            document.getElementById("inspectionIDs").focus();
            if (estimateID > 0){
                var ans = confirm("There might be changes you haven't saved yet. Continue?");
                if (ans){
                    document.getElementById("inspectionIDs").className = "m-t-10 visible";
                    document.getElementById("estimateIDs").className = "m-t-10 hidden";
                    reset();
                }
                if (!ans) {
                    document.getElementById("inspectionIDs").className = "m-t-10 hidden";
                    document.getElementById("estimateIDs").className = "m-t-10 visible";
                    by.innerHTML = "Estimate ID";
                    $('#inspections').val(previous).trigger('chosen:updated');
                }
            }
        }
        else if (selected == 2){
            by.innerHTML = "Estimate ID";
            document.getElementById("initial").className = "m-t-10 hidden";
            document.getElementById("inspectionIDs").className = "m-t-10 hidden";
            document.getElementById("estimateIDs").className = "m-t-10 visible";
            previous = estimateID;
            if (inspectID > 0){
                var ans = confirm("There might be changes you haven't saved yet. Continue?");
                if (ans){
                    document.getElementById("inspectionIDs").className = "m-t-10 hidden";
                    document.getElementById("estimateIDs").className = "m-t-10 visible";
                    reset();
                }
                if (!ans) {
                    document.getElementById("inspectionIDs").className = "m-t-10 visible";
                    document.getElementById("estimateIDs").className = "m-t-10 hidden";
                    by.innerHTML = "Inspection ID";
                    $('#estimates').val(previous).trigger('chosen:updated');
                }
            }
        }

        function reset(){
            $('#estimates').val(0).trigger('chosen:updated');
            $('#inspects').val(0).trigger('chosen:updated');
            $('#customers').val(0).trigger('chosen:updated');
            $('#automobiles').val(0).trigger('chosen:updated');
            $('#fname').val(null);
            $('#mname').val(null);
            $('#lname').val(null);
            $('#phones').val(null);
            $('#email').val(null);
            $('#pwd_sc_No').val(null);
            $('#address').val(null);
            $('#plateno').val(null);
            $('#automobile_models').val(0).trigger('chosen:updated');
            $('#chassisno').val(null);
            $('#mileage').val(null);
            $('#color').val(null);
        }

        function takeMeBack(val){
            if (!nah && val == 1)
                $('#search').val(2);
            if (!nah && val == 2 )
                $('#search').val(1);
        }
    });

    /* SELECT RECORD via INSPECTION ID SEARCH */
    $("#inspections").change(function () {
        var selectedID = $(this).val();
        inspectID = selectedID;
        $.ajax({
            type: "GET",
            url: "/addjoborder/"+selectedID+"/showInspection",
            dataType: "JSON",
            success:function(data){
                $('#customers').val(data.inspection.CustomerID).trigger('chosen:updated');
                $('#automobiles').val(data.inspection.AutomobileID).trigger('chosen:updated');
                $('#fname').val($.trim(data.customer.FirstName));
                $('#mname').val($.trim(data.customer.MiddleName));
                $('#lname').val($.trim(data.customer.LastName));
                $('#phones').val(data.customer.ContactNo);
                $('#email').val(data.customer.EmailAddress);
                $('#pwd_sc_No').val(data.customer.PWD_SC_No);
                $('#address').val(data.customer.CompleteAddress);
                $('#plateno').val(data.automobile.PlateNo);
                $('#automobile_models').val(data.automobile.ModelID).trigger('chosen:updated');
                $('#chassisno').val(data.automobile.ChassisNo);
                $('#mileage').val(data.automobile.Mileage);
            }
        });
    });

    /* SELECT RECORD via ESTIMATE ID SEARCH */
    $("#estimates").change(function () {
        var selectedID = $(this).val();
        estimateID = selectedID;
        var PWDSCNO = null;
        $.ajax({
            type: "GET",
            url: "/addjoborder/"+selectedID+"/showEstimate",
            dataType: "JSON",
            success:function(data){
                $('#customers').val(data.estimate.CustomerID).trigger('chosen:updated');
                $('#automobiles').val(data.estimate.AutomobileID).trigger('chosen:updated');
                $('#fname').val($.trim(data.customer.FirstName));
                $('#mname').val($.trim(data.customer.MiddleName));
                $('#lname').val($.trim(data.customer.LastName));
                $('#phones').val(data.customer.ContactNo);
                $('#email').val(data.customer.EmailAddress);
                $('#pwd_sc_No').val(data.customer.PWD_SC_No);
                $('#address').val(data.customer.CompleteAddress);
                $('#plateno').val(data.automobile.PlateNo);
                $('#automobile_models').val(data.automobile.ModelID).trigger('chosen:updated');
                $('#chassisno').val(data.automobile.ChassisNo);
                $('#mileage').val(data.automobile.Mileage);
                $('#color').val(data.automobile.Color);
                PWDSCNO = data.customer.PWD_SC_No;
            }
        });
        alert(PWDSCNO);
        if (PWDSCNO != null)
            autoDiscount();

    });

    /* SELECT RECORD via CUSTOMER NAME SEARCH */
    $("#customers").change(function () {
        var selectedID = $(this).val();
        var PWDSCNO;
        //Filter by Customer
        /* $('#automobiles').empty().append('<option value=0 >These are your registered automobiles</option>');
        $('#automobiles').trigger("chosen:updated");
        var select = $('#automobiles');
        $.ajax({
            type: "GET",
            url: "/addjoborder/"+selectedID+"/filterByCustomer",
            dataType: "JSON",
            success:function(data){
                var options = '';
                var count = Object.keys(data.products).length;
                for (var i = 0; i < count; i++) {
                    options += '<option value="' + data.products[i].productid + '">' + data.products[i].productname + '</option>';
                }
                $("#products").append(options);
                $("#products option[value='0']").prop("disabled",true, "selected",false);
                $('#products').trigger("chosen:updated");
            }
        }); */

        $.ajax({
            type: "GET",
            url: "/addjoborder/"+selectedID+"/showEstimate",
            dataType: "JSON",
            success:function(data){
                $('#customers').val(data.estimate.CustomerID).trigger('chosen:updated');
                $('#automobiles').val(data.estimate.AutomobileID).trigger('chosen:updated');
                $('#fname').val($.trim(data.customer.FirstName));
                $('#mname').val($.trim(data.customer.MiddleName));
                $('#lname').val($.trim(data.customer.LastName));
                $('#phones').val(data.customer.ContactNo);
                $('#email').val(data.customer.EmailAddress);
                $('#pwd_sc_No').val(data.customer.PWD_SC_No);
                $('#address').val(data.customer.CompleteAddress);
                $('#plateno').val(data.automobile.PlateNo);
                $('#chassisno').val(data.automobile.ChassisNo);
                $('#mileage').val(data.automobile.Mileage);
                $('#color').val(data.automobile.Color);
                PWDSCNO = data.customer.PWD_SC_No;
                alert(PWDSCNO);
            }
        });
        if (PWDSCNO != null)
            autoDiscount();
        
    });

    /* SELECT RECORD via PLATE NUMBER SEARCH */
    $("#automobiles").change(function () {
        var selectedID = $(this).val();
        var PWDSCNO;
        $.ajax({
            type: "GET",
            url: "/addjoborder/"+selectedID+"/showEstimate",
            dataType: "JSON",
            success:function(data){
                $('#customers').val(data.estimate.CustomerID).trigger('chosen:updated');
                $('#automobiles').val(data.estimate.AutomobileID).trigger('chosen:updated');
                $('#fname').val($.trim(data.customer.FirstName));
                $('#mname').val($.trim(data.customer.MiddleName));
                $('#lname').val($.trim(data.customer.LastName));
                $('#phones').val(data.customer.ContactNo);
                $('#email').val(data.customer.EmailAddress);
                $('#pwd_sc_No').val(data.customer.PWD_SC_No);
                $('#address').val(data.customer.CompleteAddress);
                $('#plateno').val(data.automobile.PlateNo);
                $('#automobile_models').val(data.automobile.ModelID).trigger('chosen:updated');
                $('#chassisno').val(data.automobile.ChassisNo);
                $('#mileage').val(data.automobile.Mileage);
                $('#color').val(data.automobile.Color);
                $('#AT').prop("checked", true);
                $('#MT').prop("checked", true);
                PWDSCNO = data.customer.PWD_SC_No;
            }
        });
        if (PWDSCNO != null)
            autoDiscount();
    });

    /* CHOOSE SERVICE TO FILTER THE PRODUCTS */
    $("#services").change(function () {
        var selectedID = $(this).val();
        selectedService = selectedID;
        $('#products').empty().append('<option value=0 >Choose a Product</option>');
        $('#products').trigger("chosen:updated");
        var select = $('#products');

        $.ajax({
            type: "GET",
            url: "/addjoborder/"+selectedID+"/getFilteredProductList",
            dataType: "JSON",
            success:function(data){
                var options = '';
                var count = Object.keys(data.products).length;
                for (var i = 0; i < count; i++) {
                    options += '<option value="' + data.products[i].productid + '">' + data.products[i].productname + '</option>';
                }
                $("#products").append(options);
                $("#products option[value='0']").prop("disabled",true, "selected",false);
                $('#products').trigger("chosen:updated");
            }
        });
    });

    $("#products").change(function () {
        var selectedID = $(this).val();
        $("#addRow").prop("disabled", false);
        //alert(selectedID);

        if(selectedID != null){
            ctr = selectedID.length;
            j = ctr;
            //alert("Length: " + ctr);

            for (i = 0; i < j; i++ )
                if (selectedID[i] == null)
                    ctr--;

            for (i = 0; i < ctr; i++)
                selectProduct[i] = selectedID[i];
                
        }
    });

	$("#servicebays").change(function () {
		var selectedID = $(this).val();
	});

    $("#pwd_sc_No").change(function(){
        autoDiscount();
    });
    
	$("#discounts").change(function () {
		var selectedID = $(this).val();
        var newDiscountRow = $('<tr id="discount">');
        var cols = "";
        
        cols += '<td style="border-right:none !important"></td>';
        cols += '<td style="border-right:none !important"><input type="hidden" style="width:55px;" name="quantity" placeholder="" readonly class="form-control hidden"></td>';
        cols += '<td style="border-right:none !important"><span style="color:red">Discount:</span><br>Senior Citizen Discount </td>';
        cols += '<td style="border-right:none !important"><input type="hidden" style="width:50px;" name="labor" placeholder="Labor" class="form-control"></td>';
        cols += '<td style="border-right:none !important"><a></a></td>';
        cols += '<td style="border-right:none !important"><input type="text" readonly style="width:50px;text-align: right" id="discountrate" name="discountrate" placeholder="20%" class="form-control" value="'+ 20 +'"></td>';
        cols += '<td style="border-right:none !important"><input type="text" readonly style="width:50px;text-align: right" id="discountamt" name="discountamt " placeholder="-100" class="form-control"></td>';
        cols += '<td style="border-left:none !important"><button type="button" id=" " class="btnDel btn btn-danger hvr-float-shadow" ><i class="fa fa-trash text-white"></i></button></td>';
        newDiscountRow.append(cols);
        $("tr#discount").replaceWith(newDiscountRow);
        var discountRate = parseInt($("#discountrate").val());
        var discountAmount = ( grandTotal % discountRate );
        //alert("rate: " + discountRate + "amount:" + discountAmount);
        var discounted = grandTotal - discountAmount;
        $("#discountamt").val(discountAmount);
        $("#grandtotal").val(""+discounted);
	});
    
	$("#promos").change(function () {
		var selectedID = $(this).val();
        var newPromoRow = $('<tr id="promo">');
        var cols = "";

        if (promoID == null){
            cols += '<td style="border-right:none !important"></td>';
            cols += '<td style="border-right:none !important"><input type="hidden" style="width:55px;" name="quantity" placeholder="" readonly class="form-control hidden"></td>';
            cols += '<td style="border-right:none !important"><span style="color:red">Promo:</span><br>Summer Promo </td>';
            cols += '<td style="border-right:none !important"><input type="hidden" style="width:50px;" name="labor" placeholder="Labor" class="form-control"></td>';
            cols += '<td style="border-right:none !important"><a></a></td>';
            cols += '<td style="border-right:none !important"><input type="text" readonly style="width:50px;text-align: right" name="unitprice" placeholder=".00" class="form-control"></td>';
            cols += '<td style="border-right:none !important"><input type="text" readonly style="width:50px;text-align: right" name="price " placeholder=".00" class="form-control"></td>';
            cols += '<td style="border-left:none !important"><button type="button" id=" " class="btnDel btn btn-danger hvr-float-shadow" ><i class="fa fa-trash text-white"></i></button></td>';
            newPromoRow.append(cols);
            $("#itemsTable").append(newPromoRow);
        }
        else {
            newPromoRow = $('<tr id="promo">');
            cols = "";
            cols += '<td style="border-right:none !important"></td>';
            cols += '<td style="border-right:none !important"><input type="hidden" style="width:55px;" name="quantity" placeholder="" readonly class="form-control hidden"></td>';
            cols += '<td style="border-right:none !important"><span style="color:red">Promo:</span><br>Ultimate Change Oil Promo </td>';
            cols += '<td style="border-right:none !important"><input type="hidden" style="width:50px;" name="labor" placeholder="Labor" class="form-control"></td>';
            cols += '<td style="border-right:none !important"><a></a></td>';
            cols += '<td style="border-right:none !important"><input type="text" readonly style="width:50px;text-align: right" name="unitprice" placeholder=".00" class="form-control"></td>';
            cols += '<td style="border-right:none !important"><input type="text" readonly style="width:50px;text-align: right" name="price " placeholder=".00" class="form-control"></td>';
            cols += '<td style="border-left:none !important"><button type="button" id=" " class="btnDel btn btn-danger hvr-float-shadow" ><i class="fa fa-trash text-white"></i></button></td>';
            newPromoRow.append(cols);
            $("tr#promo").replaceWith(newPromoRow);
        }
        promoID = selectedID;
	});

	$("#packages").change(function () {
		var selectedID = $(this).val();
        var newPackageRow = $('<tr id="package">');
        var cols = "";

        if (packageID == null){
            cols += '<td style="border-right:none !important"></td>';
            cols += '<td style="border-right:none !important"><input type="hidden" style="width:55px;" name="quantity" placeholder="" readonly class="form-control hidden"></td>';
            cols += '<td style="border-right:none !important"><span style="color:red">Package:</span><br>Summer Package </td>';
            cols += '<td style="border-right:none !important"><input type="hidden" style="width:50px;" name="labor" placeholder="Labor" class="form-control"></td>';
            cols += '<td style="border-right:none !important"><a></a></td>';
            cols += '<td style="border-right:none !important"><input type="text" readonly style="width:50px;text-align: right" name="unitprice" placeholder=".00" class="form-control"></td>';
            cols += '<td style="border-right:none !important"><input type="text" readonly style="width:50px;text-align: right" name="price " placeholder=".00" class="form-control"></td>';
            cols += '<td style="border-left:none !important"><button type="button" id=" " class="btnDel btn btn-danger hvr-float-shadow" ><i class="fa fa-trash text-white"></i></button></td>';
            newPackageRow.append(cols);
            $("#itemsTable").append(newPackageRow);
        }
        else {
            var newPackageRow = $('<tr id="package">');
            var cols = "";
            cols += '<td style="border-right:none !important"></td>';
            cols += '<td style="border-right:none !important"><input type="hidden" style="width:55px;" name="quantity" placeholder="" readonly class="form-control hidden"></td>';
            cols += '<td style="border-right:none !important"><span style="color:red">Package:</span><br>Ultimate Change Oil Package</td>';
            cols += '<td style="border-right:none !important"><input type="hidden" style="width:50px;" name="labor" placeholder="Labor" class="form-control"></td>';
            cols += '<td style="border-right:none !important"><a></a></td>';
            cols += '<td style="border-right:none !important"><input type="text" readonly style="width:50px;text-align: right" name="unitprice" placeholder=".00" class="form-control"></td>';
            cols += '<td style="border-right:none !important"><input type="text" readonly style="width:50px;text-align: right" name="price " placeholder=".00" class="form-control"></td>';
            cols += '<td style="border-left:none !important"><button type="button" id=" " class="btnDel btn btn-danger hvr-float-shadow" ><i class="fa fa-trash text-white"></i></button></td>';
            newPackageRow.append(cols);
            $("tr#package").replaceWith(newPackageRow);
        }
        packageID = selectedID;
	});

});
</script>

<script>
function autoDiscount(){
        //alert("i was here");
        var newDiscountRow = $('<tr id="discount">');
        var cols = "";
        cols += '<td style="border-right:none !important"></td>';
        cols += '<td style="border-right:none !important"><input type="hidden" style="width:55px;" name="quantity" placeholder="" readonly class="form-control hidden"></td>';
        cols += '<td style="border-right:none !important"><span style="color:red">Discount:</span><br>Senior Citizen Discount </td>';
        cols += '<td style="border-right:none !important"><input type="hidden" style="width:50px;" name="labor" placeholder="Labor" class="form-control"></td>';
        cols += '<td style="border-right:none !important"><a></a></td>';
        cols += '<td style="border-right:none !important"><input type="text" readonly style="width:50px;text-align: right" id="discountrate" name="discountrate" placeholder="20%" class="form-control" value="'+ 20 +'"></td>';
        cols += '<td style="border-right:none !important"><input type="text" readonly style="width:50px;text-align: right" id="discountamt" name="discountamt " placeholder="-100" class="form-control"></td>';
        cols += '<td style="border-left:none !important"><button type="button" id=" " class="btnDel btn btn-danger hvr-float-shadow" ><i class="fa fa-trash text-white"></i></button></td>';
        newDiscountRow.append(cols);
        $("tr#discount").replaceWith(newDiscountRow);
        var discountRate = parseInt($("#discountrate").val());
        var discountAmount = ( grandTotal % discountRate );
        alert("rate: " + discountRate + "amount:" + discountAmount);
        var discounted = grandTotal - discountAmount;
        $("#discountamt").val(discountAmount);
        $("#grandtotal").val(""+discounted);
    }
</script>

@stop