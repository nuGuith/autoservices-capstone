@extends('layout.master') <!-- Include Master Page -->
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

    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('vendors/bootstrap-switch/css/bootstrap-switch.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{URL::asset('vendors/switchery/css/switchery.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{URL::asset('vendors/radio_css/css/radiobox.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{URL::asset('vendors/checkbox_css/css/checkbox.min.css')}}" />
    <!--End of Plugin styles-->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/pages/radio_checkbox.css')}}" />

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
                                    <!-- Search by Estimate ID, Customer Name, Plate No -->
                                    <div class="row m-t-15">
                                        <!--Search Existing Records using Estimate ID -->
                                        <div class="col-lg-4">
	                                            <h5>Search Estimate ID:</h5>
                                                <input type="hidden" id="formEstimateID" name="estimateID">
	                                            <p>
	                                                <p class="m-t-10">
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
                                            <div class="col-lg-4">
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
	                                        <div class="col-lg-4 ">
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
                                            <h5>Middle Name:</h5>
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
                                                <input id="phones" name="contact" placeholder="(9999) 999-9999" class="form-control m-t-10" type="text" data-inputmask='"mask": "(9999) 999-9999"' data-mask>
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
                                                <input id="pwd_sc_no" name="pwd_sc_no" type="text" placeholder="Senior Citizen/PWD ID" class="form-control m-t-10">
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
                                            <form>
                                                <p class="m-t-10">
                                                    {{ Form::select(
                                                            'automobile_models',
                                                            $automobile_models,
                                                            null,
                                                            array(
                                                            'class' => 'form-control chzn-select',
                                                            'id' => 'automobile_models',
                                                            'name' => 'automobile_model')
                                                        ) 
                                                    }}
                                                </p>
                                            </form>
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
                                                <input id="mileage" name="mileage" type="number" placeholder="km" class="form-control" min="1" onkeypress="return event.charCode >= 48 && event.charCode <= 57"/>
                                            </div>
                                    </div>  
                                    <div class="col-lg-4 ">
                                        <h5>Color: <span style="color: red">*</span></h5>
                                        <p class="m-t-10">
                                            <input id="color" name="color" type="text" placeholder="Color" class="form-control" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                                        </p>
                                    </div> 
                                    <div class="col-lg-4">
                                        <input type="hidden" id="transmission" name="transmission" class="form-control m-t-10">
                                        <h5>Transmission: <span style="color:red">*</span></h5>
                                        <div class="checkbox-rotate m-t-20">
                                        <label class="text-black"  style="padding-left: 45px;">
                                            <input id="MT" type="checkbox" value="MT" style="-webkit-transform: scale(1.4);">
                                            &nbsp;&nbsp;Manual 
                                        </label>

                                        <label class="text-black" style="padding-left: 60px;">
                                            <input id="AT" type="checkbox" value="AT" style="-webkit-transform: scale(1.4);">
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
                            <div class="col-lg-4">
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
                            <div class="col-lg-4">
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
                            <div class="col-lg-4">
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
                            <div class="col-lg-4">
                                <h5>Service Bay: <span style="color:red">*</span></h5>
                                <p class="m-t-10">
                                    <p id="svcbaywrapper">
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
                                </p>
                            </div>   
                            <div class="col-lg-4">
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
                            <div class="col-lg-3">
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
	                                            'multiple',
                                                'data-placeholder' => 'Select some products')
	                                        ) 
	                                }}
                                </p>
                            </div>
                            <div class="col-lg-1">
                                <button type="button" id="addRow" class="ibtnAdd btn btn-info m-t-25" ><i class="fa fa-plus text-white"></i></button>
                            </div>           
                        </div>


                        <!--Start Job Order Table -->
                            <div class ="row m-t-10" style="padding: 0% 1.6%;">
                                <table id="itemsTable" class="table order-list table-bordered display  table-hover dataTable" style="table-layout:fixed;">
                                    <thead>
                                        <br>
                                        <tr>
                                            <td style="width: 18%;">
                                                <h5>Service <span style="color: red">*</span></h5>
                                            </td>
                                            <td style="width: 10%;">
                                                <h5>Quantity <span style="color: red">*</span></h5>
                                            </td>
                                            <td style="width: 12%;">
                                                <h5>Product <span style="color: red"></span>
                                                </h5>
                                            </td>
                                            <td style="width: 13%;">
                                                <h5>Labor Cost <span style="color: red">*</span>
                                                </h5>
                                            </td>
                                            <td style="width: 23%;">
                                                <h5>Assign Mechanic <span style="color: red">*</span>
                                                <span class="badge badge-pill badge-primary float-right calendar_badge" data-toggle="modal" data-href="#responsive" href="#viewModal">?</span>
                                                </h5>
                                            </td>
                                            <td style="width: 12%;">
                                                <h5>Unit Price<span style="color: red"></span>
                                                </h5>
                                            </td>
                                            <td style="width: 13%;">
                                                <h5>Total Price<span style="color: red"></span>
                                                </h5>
                                            </td>
                                            <td style="width: 7%;">
                                                <h5>Include<span style="color: red"></span>
                                                </h5>
                                            </td>
                                        </tr>
                                    </thead>
                                    @if(Route::current()->getName() == 'fromEstimate')
                                    <tbody>
                                        @foreach($serviceperformed as $sp)
                                        <tr class="service" id="{!!$sp->ServiceID!!}" name="{!!$sp->ServicePerformedID!!}">
                                            <td style="border-right:none !important">
                                                <span style="color:red">Service:</span><br>{!!$sp->ServiceName!!}<br>
                                                <input type="hidden" id="svsperf{!!$sp->ServicePerformedID!!}" name="serviceperformed[]" value="{!!$sp->ServicePerformedID!!}">
                                                <input type="hidden" id="include" name="include[]" value="True">
                                            </td>
                                            <td  style="border-right:none !important">
                                                <a></a>
                                            </td>
                                            <td style="border-right:none !important"></td>
                                            <td style="border-right:none !important">
                                                <input type="text" style="width:75px; text-align:right;" id="laborcost" name="labor" placeholder="Labor" class="form-control" value="{!!$sp->LaborCost!!}" readonly>
                                            </td>
                                            <td style="border-right:none !important">
                                                {{ Form::select(
                                                    'personnels',
                                                    $mechanic,
                                                    null,
                                                    array(
                                                        'class' => 'form-control chzn-select',
                                                        'id' => 'personnels',
                                                        'name' => 'personnelperformed[]',
                                                        'style' => 'width:110px')
                                                    ) 
                                                }}
                                            </td>
                                            <td style="border-right:none !important">
                                                <input type="hidden" style="width:60px;" id="unitprice" placeholder="" class="form-control" value="{!!$sp->LaborCost!!}">
                                            </td>
                                            <td style="border-right:none !important">
                                                <input type="text" readonly style="width:80px;text-align: right"  id="totalprice" name="laborcost[]" placeholder=".00" class="form-control" value="{!!$sp->LaborCost!!}">
                                                </td>
                                            <td style="border-left:none !important">
                                                <center>
                                                    <input style="-webkit-transform: scale(1.7);" data-serviceid="{!!$sp->ServiceID!!}" id="svcInclude" name="include[]" type="checkbox" checked value="True">
                                                    <button type="button" id="svc" name="{!!$sp->EstimatedTime!!}"  class="btnDel btn btn-danger hvr-float-shadow" style="display:none;"></button>
                                                </center>
                                            </td>
                                        </tr>
                                            @foreach($productused as $pu)
                                                @if($sp->ServicePerformedID == $pu->ServicePerformedID)
                                                <tr class="product" id="svc{!!$sp->ServiceID!!}">
                                                    <td style="border-right:none !important"><input type="hidden" style="width:50px; text-align:right;" name="product[]" placeholder="" class="form-control" value="{!!$pu->ProductID!!}"><input type="hidden" style="width:50px; text-align:right;" name="productused[]" placeholder="" class="form-control" value="{!!$pu->ProductUsedID!!}"><input type="hidden" style="width:50px; text-align:right;" name="prodservperf[]" placeholder="" class="form-control" value="{!!$sp->ServicePerformedID!!}"></td>
                                                    <td style="border-right:none !important">
                                                        <input type="number" min="1" style="width:55px;text-align:center;" id="quantity" name="quantity[]" placeholder="Quantity" value="{!!$pu->Quantity!!}" data-serviceid="{!!$sp->ServiceID!!}" class="form-control">
                                                    </td>
                                                    <td style="border-right:none !important">
                                                    <span style="color:red">Product:</span><br>{!!$pu->ProductName!!}
                                                    </td>
                                                    <td style="border-right:none !important">
                                                        <input type="hidden" style="width:50px; text-align:right;" placeholder="Labor" class="form-control">
                                                    </td>
                                                    <td style="border-right:none !important"><a></a></td>
                                                    <td style="border-right:none !important">
                                                        <input type="text" readonly style="width:60px; text-align: right" id="unitprice" name="unitprice[]" readonly placeholder=".00" value="{!!$pu->Price!!}" class="form-control">
                                                    </td>
                                                    <td style="border-right:none !important">
                                                        <input type="text" readonly style="width:80px;text-align: right" id="totalprice" name="totalprice[]" placeholder=".00" class="form-control" value="{!!$pu->SubTotal!!}">
                                                    </td>
                                                    <td style="border-left:none !important">
                                                        <center>
                                                            <input class="product" style="-webkit-transform: scale(1.7);" data-serviceid="{!!$sp->ServiceID!!}" id="prodInclude" type="checkbox" checked value="true">
                                                        </center>
                                                    </td>
                                                </tr>
                                                @endif
                                            @endforeach
                                        @endforeach
                                        <tr id="discount">
                                            <td style="border-right:none !important"></td>
                                            <td style="border-right:none !important">
                                                <input type="hidden" style="width:55px;" placeholder="Quantity" class="form-control">
                                            </td>   
                                            <td style="border-right:none !important">  
                                                <span style="color:red">Discount:</span>
                                                <br>
                                            </p>
                                            </td>
                                            <td style="border-right:none !important">
                                                <input type="hidden" style="width:50px;" placeholder="Labor" class="form-control">
                                            </td>
                                            <td style="border-right:none !important">
                                               <a></a>
                                            </td>
                                            <td style="border-right:none !important">
                                                <input type="text" style="width:60px; text-align: right" readonly placeholder="0%" class="form-control">
                                            </td>
                                            <td style="border-right:none !important">
                                                <input type="text" style="width:80px; text-align: right;color:red" readonly placeholder=".00" class="form-control">
                                            </td>
                                            <!--Delete Row Inside Job Order Table -->
                                            <td style="border-left:none !important">
                                                <button type="button" class="btnDel btn btn-danger hvr-float-shadow" ><i class="fa fa-times text-white"></i></button>
                                            </td> 
                                           </tr>
                                    </tbody>
                                    @elseif(Route::current()->getName() != 'fromEstimate')
                                    <tbody >
                                            <!--Example: for Discount-->
                                            <!--Hidden Field: Quantity Labor, Assign Mechanic -->
                                            <tr id="discount">
                                            <td style="border-right:none !important"></td>
                                            <td style="border-right:none !important">
                                                <input type="hidden" style="width:55px;"  placeholder="Quantity" class="form-control">
                                            </td>   
                                            <td style="border-right:none !important">  
                                                <span style="color:red">Discount:</span>
                                                <br>
                                            </p>
                                            </td>
                                            <td style="border-right:none !important">
                                                <input type="hidden" style="width:50px;" placeholder="Labor" class="form-control">
                                            </td>
                                            <td style="border-right:none !important">
                                               <a></a>
                                            </td>
                                            <td style="border-right:none !important">
                                                <input type="text" style="width:60px; text-align: right" readonly placeholder="0%" class="form-control" value="">
                                            </td>
                                            <td style="border-right:none !important">
                                                <input type="text" style="width:80px; text-align: right;color:red" readonly placeholder=".00" class="form-control" value="">
                                            </td>
                                            <!--Delete Row Inside Job Order Table -->
                                            <td style="border-left:none !important">
                                                <button type="button" id=" " class="btnDel btn btn-danger hvr-float-shadow" ><i class="fa fa-times text-white"></i></button>
                                            </td> 
                                           </tr>

                                        </tbody>
                                        <!--Overall Total -->
                                    @endif
                                    <tfoot>
                                        <tr>
                                            <th colspan="2" style="text-align: left;">Estimated Time:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <span id="estimated" style="text-align: center; color: blue"></span>
                                            </th>
                                            <th colspan="3" style="width: 5px; text-align: right">
                                                <div class="cols">
                                                    <h5 style="padding-top:5px;">Total Product Cost:</h5>
                                                    <h5 style="padding-top:5px;">Total Labor Cost (Service):</h5>
                                                    <h5 style="padding-top:5px;">Grand Total:</h5>
                                                    <h5 style="padding-top:5px;">Less Discount:</h5>
                                                    <h5 style="padding-top:5px;">Total Amount Due:</h5>
                                                </div>
                                            </th>
                                            <th colspan="2" style="text-align:right">
                                                <div class="cols">
                                                    <h5 id="totalprodsales" style="padding-top:5px;">PHP&nbsp;&nbsp;&nbsp;<span style="color:red">&nbsp;&nbsp;&nbsp;0.00</span></h5>
                                                    <h5 id="totallaborcost" style="padding-top:5px;">PHP&nbsp;&nbsp;&nbsp;<span style="color:red">&nbsp;&nbsp;&nbsp;0.00</span></h5>
                                                    <h5 id="grandtotal" style="padding-top:5px;">PHP&nbsp;&nbsp;&nbsp;<span style="color:red">&nbsp;&nbsp;&nbsp;0.00</span></h5>
                                                    <h5 id="lessdiscount" style="padding-top:5px;">PHP&nbsp;&nbsp;&nbsp;<span style="color:red">&nbsp;&nbsp;&nbsp;0.00</span></h5>
                                                    <h5 id="totalamountdue" style="padding-top:5px;">PHP&nbsp;&nbsp;&nbsp;<span style="color:red">&nbsp;&nbsp;&nbsp;0.00</span></h5>
                                                </div>
                                                <input id="discountedamt" type="hidden" name="discountedamt">
                                                <input id="totalamtdue" type="hidden" name="totalamtdue">
                                            </th>
                                            <th></th>  
                                        </tr>
                                     </tfoot>
                                    </table> 

                            </div>
                            <!-- Assigning of SA, QA, IM, Mechanic -->
                            <div class="row m-t-15">
                                <div class="col-lg-3">
                                    <div class="row">
                                        <div class="col-sm-8" style="margin-top:0px;">
	                                        <h5>Mechanic: <span style="color: red">*</span></h5>
                                        </div>
                                        <div class="col-sm-4"  style="margin-bottom:-5px;margin-top:-5px;">
                                            <div>
                                                <span style="padding-left:7px; font-size: 14px;">[<a id="mechFilters" style="fontsize:12px; color:#1BBFC9; cursor:pointer;" data-toggle="tooltip" data-placement="top" title="&nbsp;&nbsp;View Active Filters&nbsp;&nbsp;" data-trigger="hover" data-html="true" data-container="body" data-dismiss="tooltip"> Filters </a>]</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
	                                    <p class="m-t-5">
                                            <p id="mechanicwrapper">
                                                {{ Form::select(
                                                    'mechanic',
                                                    $mechanic,
                                                    null,
                                                    array(
                                                        'class' => 'form-control chzn-select',
                                                        'id' => 'mechanic',
                                                        'name' => 'mechanic',
                                                        'style' => 'width:110px')
                                                    ) 
                                                }}
	                                        </p>
                                        </p>
                                    </div>
	                            </div>
                                <div class="col-lg-3">
	                                <h5>Service Advisor: <span style="color: red">*</span></h5>
	                                    <p class="m-t-10">
                                            <p id="SAwrapper">
                                                {{ Form::select(
                                                    'SA',
                                                    $serviceadvisor,
                                                    null,
                                                    array(
                                                        'class' => 'form-control chzn-select',
                                                        'id' => 'SA',
                                                        'name' => 'SA',
                                                        'style' => 'width:110px')
                                                    ) 
                                                }}
	                                        </p>
	                                    </p>
	                            </div>
                                <div class="col-lg-3">
	                                <h5>Quality Analyst: </h5>
	                                    <p class="m-t-10">
                                            <p id="QAwrapper">
                                                {{ Form::select(
                                                    'QA',
                                                    $qualityanalyst,
                                                    null,
                                                    array(
                                                        'class' => 'form-control chzn-select',
                                                        'id' => 'QA',
                                                        'name' => 'QA',
                                                        'style' => 'width:110px')
                                                    ) 
                                                }}
	                                        </p>
	                                    </p>
	                            </div>
                                <div class="col-lg-3">
	                                <h5>Inventory Manager: <span style="color: red">*</span></h5>
	                                    <p class="m-t-10">
                                            <p id="IMwrapper">
                                                    {{ Form::select(
                                                    'IM',
                                                    $inventorymanager,
                                                    null,
                                                    array(
                                                        'class' => 'form-control chzn-select',
                                                        'id' => 'IM',
                                                        'name' => 'IM',
                                                        'style' => 'width:110px')
                                                    ) 
                                                }}
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
                {{ Form::close() }}

                             <!--Button: Back, Save-->
                             <div class="card-footer bg-black">
                               <div class="examples transitions m-t-5 pull-right">
                                    <button onclick="window.location='{{ url("/joborder") }}'" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn gray"  href="/joborder"><i class="fa fa-arrow-left">
                                    </i>&nbsp;Back</button>  

                                    <button id="btnSave" type="button" class="btn btn-raised btn-success" data-toggle="modal" >
                                            <i class="fa fa-save text-white" ></i> 
                                            &nbsp;Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- START SUBMIT MODAL -->
                <div class="modal fade in " id="confirmationModal" tabindex="-2" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-success">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-save"></i>
                                    &nbsp;Confirmation
                                </h4>
                            </div>
                            <div class="modal-body">
                                <div class="col m-t-15">
                                    <h4>We are about to save this record.</h4><br>
                                    <h5 style="font-weight:light; line-height:16px;"> If you just want to save it click &nbsp;<i class="fa fa-save text-black" ></i><strong> Save</strong> but if you want to proceed to viewing the Job Order now, click <strong>Save & Proceed </strong>.</h5>
                                </div>
                            </div>
                            <div class="modal-footer m-t-10">
                                <div class="examples transitions m-t-5">
                                    <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Cancel</button>
                                </div>
                                <div class="m-t-5">
                                    <a id="btnJustSave" style="border:1px solid #008A60" type="submit" class="btn btn-success">
                                    <i class="fa fa-save text-white" ></i>&nbsp;Save
                                    </a>
                                </div>
                                <div class="m-t-5">
                                    <a id="btnSaveProceed" style="border:1px solid #008A60" type="submit" class="btn btn-success">
                                    <i class="fa fa-save text-white" ></i>&nbsp;Save & Proceed &rarr;
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SUBMIT MODAL -->
                
                <!-- START PRODUCT SUGGESTIONS MODAL -->
                <div class="modal fade in " id="productSuggest" tabindex="-3" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-success">
                                <button id="close" type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-save"></i>
                                            &nbsp;Product suggestions</h4>
                            </div>
                            <div class="modal-body">
                                <div class="col m-t-15">
                                    <h5>Here are the product suggestions or the list of all the product(s) that might be needed for the service <strong><span id="servicename">Engine Overhaul</span></strong>. We can automatically add all of them for you.</h5>
                                    <div>
                                        <table class="table display nowrap dataTable no-footer" style="width:96%;">
                                        </table>
                                    </div>
                                    <div style="display:block; width:100%; height:150px; overflow-y:scroll;">
                                        <table id="prodSuggestTbl" class="table display nowrap dataTable" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <td><h5>Product</h5></td>
                                                    <td><h5>Unit Price</h5></td>
                                                </tr>
                                            </thead>
                                            <tfoot id="prodSuggestFooter">
                                            </tfoot>
                                        </table>
                                    </div>
                                </div><br>
                                <div style="background:#F7F7F9; padding: 3%;" class="row m-t-6">
                                    <div class="col-md-9">
                                        <h6>If you don't like this feature, you can turn this off in <a style="color:#0366D6" href="#">Utilities</a> or just click the 'Turn off' button here.</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-outline-primary" style="border:1px solid #aeafaf;padding-top:4%;padding-bottom:4%; color: #0366D6; background-color:#FFFFFF" onMouseOver="this.style.backgroundColor='#0366D6';this.style.color='#FFFFFF'" onMouseOut="this.style.backgroundColor='#FFFFFF';this.style.color='#0366D6'">Turn off</button>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer m-t-10">
                                <div class="examples transitions m-t-5">
                                    <button id="btnNo" type="button" data-dismiss="modal" class="btn btn-secondary adv_cust_mod_btn">No, I want to manually add products.</button>
                                </div>
                                <div class="examples transitions m-t-5">
                                    <button id="btnGo" type="button" data-dismiss="modal" onclick="" class="btn btn-success">
                                        &nbsp;Proceed
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PRODUCT SUGGESTIONS MODAL -->

                <!-- START MECHANIC FILTER MODAL -->
                <div class="modal fade in " id="mechFilterModal" tabindex="-3" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-header bg-success">
                                <button id="close" type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-save"></i>
                                    &nbsp;Mechanic Filtering
                                    </h4>
                            </div>
                            <div class="modal-body">
                                <div class="col m-t-15">
                                    <hr>
                                    <div class="row" style="margin-bottom:-5px; padding-bottom:-5px;">
                                        <div class="col-sm-7">
                                            <h5 style="padding-top:5px; margin-left:0px;">Status: (<span id="filterStatus">Active</span>)</h5>
                                        </div>
                                        <div class="form-group radio_basic_swithes_padbott col-sm-3" style="padding-left:15px; margin-bottom:4px;">
                                            <input id="filterSwitch" class="make-switch-radio" type="checkbox" data-off-color="success" data-on-color="danger" data-on-text="OFF" data-off-text="ON" data-size="small" data-toggle="switch" unchecked>
                                        </div>
                                    </div>
                                    <div style="margin-top:-5px;padding-bottom:10px;">
                                        <hr>
                                        <h5>We are filtering the list of mechanic based on the following skills required for the services you have chosen:</h5>
                                    </div>
                                    <div style="display:block; width:100%; height:150px; overflow-y:scroll; border-bottom: 1px solid #ECECEC; border-top: 1px solid #ECECEC;">
                                        <table id="mechFilterTbl" class="table list table-hover" style="width:100%;">
                                            <tfoot id="mechFilterFooter">
                                            </tfoot>
                                        </table>
                                    </div>
                                </div><br>
                            </div>
                            <div class="modal-footer m-t-10">
                                <div class="examples transitions m-t-5">
                                    <button id="btnCancel" type="button" data-dismiss="modal" class="btn btn-secondary adv_cust_mod_btn">Cancel</button>
                                </div>
                                <div class="examples transitions m-t-5">
                                    <button id="btnApply" type="button" data-dismiss="modal" class="btn btn-success">
                                        &nbsp;Apply
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PERSONNEL FILTER MODAL -->
                
                <!-- START PRODUCT UNCHECKED MODAL -->
                <div class="modal fade in " id="prodUncheckedModal" tabindex="-3" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-success">
                                <button id="close" type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-save"></i>
                                    &nbsp;Unincluded Products
                                    </h4>
                            </div>
                            <div class="modal-body">
                                <div class="col m-t-15">
                                    <h5>One last thing, here is the list of all the product(s) that you did not choose to be included in this Job Order. We need you to indicate a reason why they were not included. Thank you!</h5>
                                    <div>
                                        <table class="table display nowrap dataTable no-footer" style="width:96%;">
                                        </table>
                                    </div>
                                    <div style="display:block; width:100%; height:150px; overflow-y:scroll;">
                                        <table id="prodUncheckedTbl" class="table display nowrap dataTable" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <td><h5>Product</h5></td>
                                                    <td><h5>Reason</h5></td>
                                                </tr>
                                            </thead>
                                            <tfoot id="prodUncheckedFooter">
                                            </tfoot>
                                        </table>
                                    </div>
                                </div><br>
                                <div style="background:#F7F7F9; padding: 3%;" class="row m-t-6">
                                    <div class="col-md-9">
                                        <h6>If you don't like this feature, you can turn this off in <a style="color:#0366D6" href="#">Utilities</a> or just click the 'Turn off' button here.</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <button type="button" class="btn btn-outline-primary" style="border:1px solid #aeafaf;padding-top:4%;padding-bottom:4%; color: #0366D6; background-color:#FFFFFF" onMouseOver="this.style.backgroundColor='#0366D6';this.style.color='#FFFFFF'" onMouseOut="this.style.backgroundColor='#FFFFFF';this.style.color='#0366D6'">Turn off</button>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer m-t-10">
                                <div class="examples transitions m-t-5">
                                    <button id="btnJustGo" type="button" data-dismiss="modal" class="btn btn-secondary adv_cust_mod_btn">No, just go.</button>
                                </div>
                                <div class="examples transitions m-t-5">
                                    <button id="btnConfirm" type="button" data-dismiss="modal" class="btn btn-success">
                                        &nbsp;Confirm
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END PRODUCT UNCHECKED MODAL -->
            </div>
        </div>
                   
                <!-- /.outer -->
        <!--END CONTENT -->

<!-- global scripts sweet alerts-customer -->
<script type="text/javascript" src="{{URL::asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/components.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/custom.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/sweetalert/js/sweetalert2.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/pages/sweet_alerts.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/switchery/js/switchery.min.js')}}"></script>
<!-- end of plugin scripts -->

<!--Page level scripts-->
<script type="text/javascript" src="{{URL::asset('js/pages/radio_checkbox.js')}}"></script>
<!-- global scripts animation-->
<script type="text/javascript" src="{{URL::asset('vendors/snabbt/js/snabbt.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/wow/js/wow.min.js')}}"></script>
<!--End of plugin scripts-->
<script>
    new WOW().init();
</script>


<!--SCRIPT FOR EVERYTHING HIHI, ANG DUMI NG CODE KO AHAHAKKK -->
<script> 

$(document).ready(function () {

    var estimateID, inspectID, packageID, promoID;
    var nah;
    var routeID = null;
    var servicePrices = [];
    var selectProduct = [];
    var selectedService = "";
    var selectService;
    var i, j, ctr, totalCounter = 0;
    var modelID = null;
    var mechanicID = null, saID = null, qaID = null, imID = null, svcbayID = null;
    var price;
    var grandTotal = 0;
    var discountRate = 0, discountedAmt = 0, totalAmtDue = 0;
    var totalEstimatedTime = 0;
    var fromEstimate = false;
    var serviceCtr = 0;
    var deleted = [];
    var PWD_SC_NO = $("#pwd_sc_no").val();
    var cloneCtr = 0;
    var dismissed = false;
    var reasonsConfirmed = false;
    var selectedMechIndex = 0;

    $("#estimates option[value='0']").prop("disabled",true);
    $("#customers option[value='0']").prop("disabled",true);
    $("#automobiles option[value='0']").prop("disabled",true);
    $("#automobile_models option[value='0']").prop("disabled",true);
    $("#servicebays option[value='0']").prop("disabled",true);
    $("#discounts option[value='0']").prop("disabled",true);
    $("#services option[value='0']").prop("disabled",true);
    $("#products option[value='0']").prop("disabled",true);
    $("#promos option[value='0']").prop("disabled",true);
    $("#packages option[value='0']").prop("disabled",true);
    $("#personnels option[value='0']").prop("disabled",true);
    $("#mechanic option[value='0']").prop("disabled",true);
    $("#SA option[value='0']").prop("disabled",true);
    $("#QA option[value='0']").prop("disabled",true);
    $("#IM option[value='0']").prop("disabled",true);
    $("#SA").prop("disabled", "disabled");
    $("#QA").prop("disabled", "disabled");
    $("#IM").prop("disabled", "disabled");
    $("#products").prop("disabled","disabled");
    $("#addRow").prop("disabled",true);
    $("#AT").prop("checked", false);
    $("#MT").prop("checked", false);

    $('table tr select').each(function(){
        if(this.id == "personnels")
            $(this).prop("disabled", "disabled");
    });

    var estimate = {!! json_encode($estimate->toArray()) !!};
    var automobile = {!! json_encode($automobile->toArray()) !!};

    if((estimate.EstimateID > 0) || (estimate.EstimateID != null)){
        estimateID = (estimate.EstimateID);
        $('#formEstimateID').val(estimateID);
        getGrandTotal();
        getEstimatedTime();
        getDiscountedPrice();
    }

    if((estimate.ServiceBayID > 0) || (estimate.ServiceBayID != null)){
        svcbayID = (estimate.ServiceBayID);
        $("#servicebays").val(svcbayID).trigger("chosen:updated");
    }

    if(automobile.Transmission != null){
        if ((automobile.Transmission) == "A/T"){
            $("#AT").prop("checked", true);
            $("#MT").prop("checked", false);
        }
        else if ((automobile.Transmission) == "M/T"){
            $("#MT").prop("checked", true);
            $("#AT").prop("checked", false);
        }
        $('#transmission').val(automobile.Transmission);
        $('#automobile_models').val(automobile.ModelID).trigger('chosen:updated');
        modelID = (automobile.ModelID);
        $('#model').val(modelID);
    }


    var clicked = false;
    $("#fname, #lname, #phones, #address, #plateno, #automobile_models, #chassisno, #mileage, #MT, #AT, #personnels, #mechanic, #servicebays").on({
        focusin: function() {
            if($(this).val() == "") $(this).css("border-color", "lightblue");
            else { $(this).css("border-color", "lightblue"); }
            if (mechanicID != null || mechanicID != 0) $(this).css("border-color", "lightblue");

        },
        focusout: function() {
            if($(this).val() == "" && clicked){ $(this).css("border", "1.5px solid #FF3839"); /* $(this).css("display", "inline"); */ }
        },
        click: function() {
            clicked = true;
        }
    });

    $("#btnSave").on("click", function(){
        confirmationModal();
    });

    $("#btnConfirm").on("click", function(){
        $("#prodUncheckedModal").modal('hide');
        var resp = confirm("Save this record?");
        if (resp)
            $("#confirmationModal").modal('show');
    });
    
    function checkAllRequired(){
            var result = true;
            $("#fname, #lname, #phones, #address, #plateno, #automobile_models, #chassisno, #mileage, #transmission, #mechanic, #SA, #IM, #servicebays").each(function() {
                if(modelID > 0 && mechanicID > 0 && saID > 0 && imID > 0 && svcbayID > 0)
                    result = true;
                if($(this).val() == null || $(this).val() == 0){ 
                    $(this).css("border", "1.5px solid #FF3839"); 
                    result = false; 
                };
                if(modelID < 1 && $(this).attr('id') == "automobile_models"){ $("#modelwrapper").css("border", "1.5px solid #FF3839").css("border-radius","7px").css("padding", "0px 0px 1px 1px"); }
                if(mechanicID == null || mechanicID < 0 && $(this).attr('id') == "mechanic"){ $("#mechanicwrapper").css("border", "1.5px solid #FF3839").css("border-radius","7px").css("padding", "0px 0px 1px 1px"); }
                if(saID == null || saID < 0 && $(this).attr('id') == "SA"){ $("#SAwrapper").css("border", "1.5px solid #FF3839").css("border-radius","7px").css("padding", "0px 0px 1px 1px"); }
                /* if(qaID == null || qaID < 0 && $(this).attr('id') == "QA"){ $("#QAwrapper").css("border", "1.5px solid #FF3839").css("border-radius","7px").css("padding", "0px 0px 1px 1px"); } */
                if(imID == null || imID < 0 && $(this).attr('id') == "IM"){ $("#IMwrapper").css("border", "1.5px solid #FF3839").css("border-radius","7px").css("padding", "0px 0px 1px 1px"); }
                if(svcbayID == null || svcbayID < 0 && $(this).attr('id') == "servicebays"){ $("#svcbaywrapper").css("border", "1.5px solid #FF3839").css("border-radius","7px").css("padding", "0px 0px 1px 1px"); result = false;}
            });
            if (result) valid = true;
            else valid = false;
            return valid;
        }

    function confirmationModal(){
        var require = checkAllRequired();
        if (!require)
            alert("Fill out all the required fields first!");
        if (require) {
            countServices();
            if(serviceCtr < 1 || serviceCtr == null)
                alert("You haven't added any services or products! \nWe cannot process your request, sorry.");
            else{
                if (valid){
                    $("#prodUncheckedModal").modal('show');
                }
            }
        }
    }

    function countServices(){
        serviceCtr = 0;
        $('table tr').each( function() { if ($(this).attr('class') == 'service') ++serviceCtr; });
    }


    $("#btnSaveProceed").on("click", function (e) {

        $('table select').each(function(){
            $(this).prop("disabled", false);
        });
        $('#automobile_models').prop("disabled", false);

        var formData = $('#jobForm').serialize();
        alert(formData);
        //alert(estimateID);

        if(routeID == 0 || routeID == null){
            $.ajax({
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                url: '/addjoborder',
                data: formData,
                type: 'POST',
                success: function(data) { 
                    $('#automobile_models').prop("disabled", true);    
                    alert("Yey.");
                    routeID = 1;
                    redirect = data.newRoute;
                    window.location.href = "/joborder";
                },
                fail: function(data) {
                    alert("Failed to save data.");
                }
            });
        }
        else{
            window.location.href = "/joborder";
        }
    });

    $('table tr').each( function() {
        if ($(this).attr('class') == 'service'){
            ++serviceCtr;
        }
    });

    $("table td input").bind({
        keyup: function() {
            getGrandTotal();
            getDiscountedPrice();
        },
        mouseleave: function() {
            $(this).blur();
            getGrandTotalNoQty();
            getDiscountedPrice();
        },
        focusout: function() {
            getGrandTotalNoQty();
            getDiscountedPrice();
        }
    });

    $("table.list").on("click", ".btnDel", function (event) {
        
        if (estimateID !== null){
            var id = $(this).data('serviceid');
            var svcid = "svc" + id;
                            
            //remove all products included in this service
            $('table tr').each( function() {
                if ((this.id) == svcid) 
                    $(this).closest("tr").remove();
            });

            deleted.push($(this).closest("tr").attr('name'));
            //alert(deleted);
            $(this).closest("tr").remove();
            $('#services option[value="'+id+'"]').prop("disabled", false);
            $('#services').trigger("chosen:updated");
            getEstimatedTime();
            getGrandTotal();
            getDiscountedPrice();

            countServices();
            if(isNaN(serviceCtr)) $("#automobile_models").prop("disabled", false).trigger("chosen:updated");
        }
    });

    $("table.list").on("click", "#productid", function(event){
        var remaining = 1;
        var id = $(this).attr('name');
        var svcid = "svc" + id;
        var this_ServiceID = "#" + id;
        $('table tr').each( function() {
            if ($(this).attr('class') == 'product' && $(this).attr('id') == svcid ){
                remaining++;
            }
        });
        if(remaining == 1) {
            $('#itemsTable').find(this_ServiceID).remove();
            $('#services option[value="'+id+'"]').prop("disabled", false);
            $('#services').trigger("chosen:updated");            
            
            countServices();
            $("#automobile_models").prop("disabled", false).trigger("chosen:updated");
        }
        
        getEstimatedTime();
        getGrandTotal();
        getDiscountedPrice();
    });


    //// Check all Checkboxes ////
    //$('input:checkbox').prop('checked', true);

    $("table.order-list").on("click", "#svcInclude", function (event){
        if(!(this.checked)){
            var id = $(this).data('serviceid');
            $(this).val(false);

            //deselect all products included in this service
            $('table tr td input').each( function() {
                if ((this.id) == "prodInclude" && $(this).data('serviceid') == id && $(this).attr('class') == "product") 
                    $(this).prop("checked", false);
                if ((this.id) == "quantity" && $(this).data('serviceid') == id)
                    $(this).prop("readonly", "readonly");
            });
        }
        else{
            var id = $(this).data('serviceid');
            $(this).val(true);

            //select all products included in this service
            $('table tr td input').each( function() {
                if ((this.id) == "prodInclude" && $(this).data('serviceid') == id && $(this).attr('class') == "product") 
                    $(this).prop("checked", true);
                if ((this.id) == "quantity" && $(this).data('serviceid') == id)
                    $(this).prop("readonly", false);
            });
        }
    });

    /* $('select').on('change', function () {}); */
    if (routeID != 1 || routeID == null){
        window.addEventListener("beforeunload", function (e) {
        var message = "Are you sure you want to leave?";
            (e || window.event).returnValue = message;     
                return message;
        });
    }


    $(window).on('load',function(){
        @if(Route::current()->getName() == 'fromEstimate')
            var estimate = {!! json_encode($estimate->EstimateID) !!};
            fromEstimate = true;
            showEstimate(estimate);
            $("#automobile_models").prop("disabled", true);
        @endif
        
        var PWD_SC_NO = $("#pwd_sc_no").val();
        if(PWD_SC_NO != ""){
            confirm("This customer has a registered PWD/SC ID, automatically add a Senior Citizen Discount?");
        }
    });

    //Button: Delete Row
    $("table.order-list").on("click", ".btnDel", function (event) {
        if($(this).closest("tr#discount")){ 
            var newDiscountRow = $('<tr id="discount">');
            var cols = "";
            cols += '<td style="border-right:none !important"></td>';
            cols += '<td style="border-right:none !important"><input type="hidden" style="width:55px;" placeholder="" readonly class="form-control hidden"></td>';
            cols += '<td style="border-right:none !important"><span style="color:red">Discount:</span><br> </td>';
            cols += '<td style="border-right:none !important"><input type="hidden" style="width:50px;" placeholder="Labor" class="form-control"></td>';
            cols += '<td style="border-right:none !important"><a></a></td>';
            cols += '<td style="border-right:none !important"><input type="text" readonly style="width:60px;text-align: right" name="unitprice" placeholder="0%" class="form-control"></td>';
            cols += '<td style="border-right:none !important"><input type="text" readonly style="width:80px;text-align: right" name="price " placeholder=".00" class="form-control"></td>';
            cols += '<td style="border-left:none !important"><button type="button" id=" " class="btnDel btn btn-danger hvr-float-shadow" ><i class="fa fa-times text-white"></i></button></td>';
            newDiscountRow.append(cols);
            $("tr#discount").replaceWith(newDiscountRow);
            $("#discounts").val(null).trigger("chosen:updated");
            getGrandTotal();
            getDiscountedPrice();
            $(this).closest("tr").remove();
        }
        
        if($(this).closest("tr#promo")){
            $("#promos").val(null).trigger("chosen:updated");
        }
        
        if($(this).closest("tr#package")){
            $("#packages").val(null).trigger("chosen:updated");
        }

        if($(this).closest("tr#id")){
            $(this).closest("tr#id", function (){
                var id = $(this).find("input#id").val();
                $("#services option[value='"+ id +"']").prop("disabled", false);
                $("#services").trigger("chosen:updated");
            });
        }
            
    });

    function createChosen(){
        $('table td select').each(function(){
            if ($(this).attr('id') == 'personnelperformed'){ 
                $(this).chosen();
                $(this).prop("disabled", true);
                $("#personnelperformed option[value='0']").prop("disabled", true);
                if(selectedMechIndex > 0){
                    $(this).val(mechanicID);
                    $(this).prop("selectedIndex", selectedMechIndex);
                    $(this).prop("disabled", false);
                }
                $(this).trigger("chosen:updated");
            }
        });
    }

    function getGrandTotal(){
        grandTotal = 0;
        var qty, price, total, laborcost = 0, productsales = 0;
        $('table td input').each(function() {
            if((this.id) == "quantity"){
                qty = this.value;
            }

            if((this.id) == "unitprice"){
                price = this.value;
            }

            if((this.id) == "totalprice"){
                if (isNaN(qty) || qty == 0){ qty = 1;}
                total = parseFloat(qty).toFixed(2) * parseFloat(price).toFixed(2);
                this.value = parseFloat(total).toFixed(2);
                grandTotal += parseFloat(total);
            }

            if((this.id) == "laborcost"){
                laborcost += parseFloat(this.value);
            }
        });
        productsales = grandTotal - laborcost;
        $("#totalprodsales").html("PHP " + parseFloat(productsales).toFixed(2));
        $("#totallaborcost").html("PHP " + parseFloat(laborcost).toFixed(2));
        $("#grandtotal").html("PHP " + parseFloat(grandTotal).toFixed(2));
        $("#totalamountdue").html("PHP " + parseFloat(grandTotal).toFixed(2));
        $('#totalamtdue').val(grandTotal);
        getDiscountedPrice();
    }

    function getGrandTotalNoQty(){
        grandTotal = 0;
        var qty, price, total, laborcost = 0, productsales = 0;
        $('table td input').each(function() {
            if((this.id) == "quantity"){
                qty = this.value;
                if ((qty*1) == 0){
                    qty = 1;
                    this.value = qty;
                }
            }

            if((this.id) == "unitprice"){
                price = this.value;
            }

            if((this.id) == "totalprice"){
                if (isNaN(qty) || qty == 0) qty = 1;
                total = parseFloat(qty).toFixed(2) * parseFloat(price).toFixed(2);
                this.value = parseFloat(total).toFixed(2);
                grandTotal += parseFloat(total);
            }
            
            if((this.id) == "laborcost"){
                laborcost += parseFloat(this.value);
            }
        });
        productsales = grandTotal - laborcost;
        $("#totalprodsales").html("PHP " + parseFloat(productsales).toFixed(2));
        $("#totallaborcost").html("PHP " + parseFloat(laborcost).toFixed(2));
        $("#grandtotal").html("PHP " + parseFloat(grandTotal).toFixed(2));
        $("#totalamountdue").html("PHP " + parseFloat(grandTotal).toFixed(2));
        $('#totalamtdue').val(grandTotal);
        getDiscountedPrice();
    }

    function getEstimatedTime(){
        totalEstimatedTime = 0;
        var time, inHours, inMins;
        $('table td button').each(function() {
            if ((this.id) == "svc"){
                time = this.name;
                totalEstimatedTime += parseFloat(time);
            }
        });
        inHours = parseInt(totalEstimatedTime / 60);
        if (inHours > 1) inHours = inHours + "hrs. ";
        else inHours = inHours + "hr. ";
        inMins = totalEstimatedTime % 60;

        if (totalEstimatedTime != 0)
        document.getElementById("estimated").innerHTML = "Approx. " +totalEstimatedTime + " mins. <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(" + inHours + inMins + "mins.)";
        else
        document.getElementById("estimated").innerHTML = "No job to do.";
    }

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
            $('#customers').val(0).trigger('chosen:updated');
            $('#automobiles').val(0).trigger('chosen:updated');
            $('#fname').val(null);
            $('#mname').val(null);
            $('#lname').val(null);
            $('#phones').val(null);
            $('#email').val(null);
            $('#pwd_sc_no').val(null);
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

    /* SELECT RECORD via ESTIMATE ID SEARCH */
    $("#estimates").on("change", function () {
        var selectedID = $(this).val();
        estimateID = selectedID;
        showEstimate(estimateID);
    });

    function showEstimate(id){
        estimateID = id;
        $.ajax({
            type: "GET",
            url: "/addjoborder/"+estimateID+"/showEstimate",
            dataType: "JSON",
            success:function(data){
                $('#estimates').val(data.estimate.EstimateID).trigger('chosen:updated');
                $('#customers').val(data.automobile.CustomerID).trigger('chosen:updated');
                $('#automobiles').val(data.estimate.AutomobileID).trigger('chosen:updated');
                $('#fname').val($.trim(data.customer.FirstName));
                $('#mname').val($.trim(data.customer.MiddleName));
                $('#lname').val($.trim(data.customer.LastName));
                $('#phones').val(data.customer.ContactNo);
                $('#email').val(data.customer.EmailAddress);
                $('#pwd_sc_no').val(data.customer.PWD_SC_No);
                $('#address').val(data.customer.CompleteAddress);
                $('#plateno').val(data.automobile.PlateNo);
                $('#automobile_models').val(data.automobile.ModelID).trigger('chosen:updated');
                modelID = data.automobile.ModelID;
                $('#chassisno').val(data.automobile.ChassisNo);
                $('#mileage').val(data.automobile.Mileage);
                $('#color').val(data.automobile.Color);
                if ((data.automobile.Transmission) == "A/T"){
                    $("#AT").prop("checked", "checked");
                    $("#MT").prop("checked", false);
                }
                else if ((data.automobile.Transmission) == "M/T"){
                    $("#MT").prop("checked", "checked");
                    $("#AT").prop("checked", false);
                }
                $('#transmission').val(automobile.Transmission);
                if (fromEstimate){
                    $("#estimates").prop("disabled","disabled").trigger('chosen:updated');
                    $("#customers").prop("disabled", "disabled").trigger('chosen:updated');
                    $("#automobiles").prop("disabled", "disabled").trigger('chosen:updated');
                }
                filterServices();
            }
        });
    }

    /* SELECT RECORD via CUSTOMER NAME SEARCH */
    $("#customers").change(function () {
        var selectedID = $(this).val();
        var autoID = 0;
        $.ajax({
            type: "GET",
            url: "/addjoborder/"+selectedID+"/searchByCustomerName",
            dataType: "JSON",
            async: false,
            success:function(data){
                if (!(jQuery.isEmptyObject(data.estimate))){
                    var count = Object.keys(data.estimate).length;
                    var options = '';

                    if (count == 0){
                        $('#estimates').empty().append('<option value = 0> No previous Estimate records available. </option>');
                        $('#estimates').trigger("chosen:updated");
                    }

                    else if (count == 1){
                        unfilterEstimateID();
                        $('#estimates').val(data.estimate[0].estimateid).trigger('chosen:updated');
                    }
                        
                    else if (count > 1){
                        $('#estimates').empty().append('<option value = 0> Please choose an Estimate ID</option>');
                        $('#estimates').trigger("chosen:updated");
                        for(var i = 0; i < count; ++i){
                            options += '<option value ="' + data.estimate[i].estimateid + '">' + data.estimate[i].estimate_desc +'</option>';
                        }
                        $("#estimates option[value = '0']").prop('disabled', true);
                        $('#estimates').append(options);
                        $('#estimates').trigger("chosen:updated");
                    }
                    $('#automobiles').val(data.automobile.AutomobileID).trigger('chosen:updated');
                    autoID = data.automobile.AutomobileID;
                }
                else {
                    $('#estimates').val(0).trigger('chosen:updated');
                    $('#automobiles').val(data.joborder.AutomobileID).trigger('chosen:updated');
                    autoID = data.joborder.AutomobileID;
                }
                
                $('#fname').val($.trim(data.customer.FirstName));
                $('#mname').val($.trim(data.customer.MiddleName));
                $('#lname').val($.trim(data.customer.LastName));
                $('#phones').val(data.customer.ContactNo);
                $('#email').val(data.customer.EmailAddress);
                $('#pwd_sc_no').val(data.customer.PWD_SC_No);
                $('#address').val(data.customer.CompleteAddress);
                $('#plateno').val(data.automobile.PlateNo);
                $('#automobile_models').val(data.automobile.ModelID).trigger('chosen:updated');
                $('#chassisno').val(data.automobile.ChassisNo);
                $('#mileage').val(data.automobile.Mileage);
                $('#color').val(data.automobile.Color);
                if ((data.automobile.Transmission) == "A/T"){
                    $("#AT").prop("checked", true);
                    $("#MT").prop("checked", false);
                }
                else if ((data.automobile.Transmission) == "M/T"){
                    $("#MT").prop("checked", true);
                    $("#AT").prop("checked", false);
                }
                $('#transmission').val(data.automobile.Transmission);
                var model = Object.keys(data.plates).length;
                if (model < 2){
                    modelID = parseInt(data.automobile.ModelID);
                    filterServices();
                }
            }
        });

        $.ajax({
            type: "GET",
            url: "/addjoborder/"+selectedID+"/filterPlateNo",
            dataType: "JSON",
            success:function(data){
                var count = Object.keys(data.plates).length;
                var options = '';
                if (count>1){
                    $('#automobiles').empty().append('<option value = 0> Please select a Plate Number</option>');
                    $('#automobiles').trigger("chosen:updated");
                    resetFieldsIfhasMultipleRecs();
                    for(var i = 0; i < count; i++){
                        options += '<option value ="' + data.plates[i].automobileid + '">' + data.plates[i].plateno +'</option>';
                    }
                    $('#automobiles').append(options);
                    $("#automobiles option[value='0']").prop("disabled", true, "selected", false);
                    $('#automobiles').trigger("chosen:updated");
                }
                if (count==1) {
                    unfilterPlateNo(selectedID, autoID);
                    $("#automobiles option[value='0']").prop("disabled", true, "selected", false);
                    $('#automobiles').trigger("chosen:updated");
                }
            }
        });
    });

    function filterServices(){
        $.ajax({
            type: "GET",
            url: "addestimates/"+modelID+"/getServicePrice",
            dataType: "JSON",
            success:function(data){
                var options = '';
                var price ='';
                var count = Object.keys(data.serviceprices).length;
                if (count > 0)
                    $('#services').empty().append('<option value="0"> Choose a Service</option>');
                else
                    $('#services').empty().append('<option value="0"> No services available. </option>');

                $('#services').trigger("chosen:updated");
                for(var i = 0; i < count; i++)
                {
                    options += '<option value ="' + data.serviceprices[i].serviceid + '" data-price="' + data.serviceprices[i].price + '">' + data.serviceprices[i].servicename +'</option>';
                }
                $('#services').append(options);
                $("#services option[value='0']").prop("disabled", true, "selected", false);
                $('#services').trigger("chosen:updated");
            }
        });
    }

    // this function resets the Vehicle Information fields if multiple vehicle records are found.
    function resetFieldsIfhasMultipleRecs(){
        alert("This customer has more than one registered car, \nplease select using the Plate Number for the Vehicle Information. \nOr you can just register a new one! :D \n\nThank you.");
        $('#plateno').val(null);
        $('#chassisno').val(null);
        $('#mileage').val(null);
        $('#color').val(null);
        $('#automobiles').val(0).trigger('chosen:updated');
        $('#automobile_models').val(0).trigger('chosen:updated');
        $('#AT').prop("checked", false);
        $('#MT').prop("checked", false);
        //$('#selectPlateNo').addClass('focused_input');
    }

    function unfilterPlateNo(id, autoID){
        $.ajax({
            type: "GET",
            url: "/addjoborder/"+id+"/unfilterPlateNo",
            dataType: "JSON",
            async: false,
            success:function(data){
                var count = Object.keys(data.plates).length;
                var options = '';
                $('#automobiles').empty().append('<option value = 0> Please select a Plate Number</option>');
                $('#automobiles').trigger("chosen:updated");
                for(var i = 0; i < count; i++){
                    options += '<option value ="' + data.plates[i].automobileid + '">' + data.plates[i].plateno +'</option>';
                }
                $('#automobiles').append(options);
                $('#automobiles').val(autoID);
                $('#automobiles').trigger("chosen:updated");
            }
        });
    }

    function unfilterEstimateID(){
        $.ajax({
            type: "GET",
            url: "/addjoborder/1/unfilterEstimateIDs",
            dataType: "JSON",
            async: false,
            success:function(data){
                var count = Object.keys(data.estimates).length;
                var options = '';
                $('#estimates').empty().append('<option value = 0> Please choose an Estimate ID</option>');
                $('#estimates').trigger("chosen:updated");
                for(var i = 0; i < count; i++){
                    options += '<option value ="' + data.estimates[i].estimateid + '">' + data.estimates[i].estimate_desc +'</option>';
                }
                $('#estimates option[value="0"]').prop("disabled", true);
                $('#estimates').append(options);
                $('#estimates').trigger("chosen:updated");
            }
        });
    }

    /* SELECT RECORD via PLATE NUMBER SEARCH */
    $("#automobiles").change(function () {
        var selectedID = $(this).val();

        $.ajax({
            type: "GET",
            url: "/addjoborder/"+selectedID+"/searchByPlateNo",
            dataType: "JSON",
            success:function(data){
                $('#customers').val(data.automobile.CustomerID).trigger('chosen:updated');
                
                if (!(jQuery.isEmptyObject(data.estimate))){
                    $('#estimates').val(data.estimate.EstimateID).trigger('chosen:updated');
                    $('#automobiles').val(data.estimate.AutomobileID).trigger('chosen:updated');
                }
                else{
                    $('#estimates').val(0).trigger('chosen:updated');
                    $('#automobiles').val(data.joborder.AutomobileID).trigger('chosen:updated');
                }

                $('#fname').val($.trim(data.customer.FirstName));
                $('#mname').val($.trim(data.customer.MiddleName));
                $('#lname').val($.trim(data.customer.LastName));
                $('#phones').val(data.customer.ContactNo);
                $('#email').val(data.customer.EmailAddress);
                $('#pwd_sc_no').val(data.customer.PWD_SC_No);
                $('#address').val(data.customer.CompleteAddress);
                $('#plateno').val(data.automobile.PlateNo);
                $('#automobile_models').val(data.automobile.ModelID).trigger('chosen:updated');
                modelID = parseInt(data.automobile.ModelID);
                $('#chassisno').val(data.automobile.ChassisNo);
                $('#mileage').val(data.automobile.Mileage);
                $('#color').val(data.automobile.Color);if ((data.automobile.Transmission) == "A/T"){
                    $("#AT").prop("checked", true);
                    $("#MT").prop("checked", false);
                }
                else if ((data.automobile.Transmission) == "M/T"){
                    $("#MT").prop("checked", true);
                    $("#AT").prop("checked", false);
                }
                $('#transmission').val(data.automobile.Transmission);
                filterServices();
            }
        });
    });

    function filterServices(){
        $.ajax({
            type: "GET",
            url: "addestimates/"+modelID+"/getServicePrice",
            dataType: "JSON",
            success:function(data){
                var options = '';
                var price ='';
                var count = Object.keys(data.serviceprices).length;
                if (count > 0)
                    $('#services').empty().append('<option value = 0> Choose a Service</option>');
                else
                    $('#services').empty().append('<option value = 0> No services available. </option>');

                $('#services').trigger("chosen:updated");
                for(var i = 0; i < count; i++)
                {
                    options += '<option value ="' + data.serviceprices[i].serviceid + '" data-price="' + data.serviceprices[i].price + '">' + data.serviceprices[i].servicename +'</option>';
                }
                $('#services').append(options);
                $("#services option[value='0']").prop("disabled", true, "selected", false);
                $('#services').trigger("chosen:updated");
                $('#labor').val(null);
            }
        });
    }

    /* CHOOSE SERVICE TO FILTER THE PRODUCTS */
    $("#services").change(function () {
        var selectedID = $(this).val();
        var selectedSvc = $('#services :selected').text();
        selectedService = selectedID;

        if (modelID < 1){
            modelID = $('#automobile_models').val();
            alert('Please choose the model of your vehicle first as service prices vary from vehicle to vehicle. \n\nThank you.');
            $('#services').prop('selectedIndex', 0);
            $('#services').trigger("chosen:updated");
        }

        if (modelID > 0){
            $('#products').empty().append('<option value=0 >Choose a Product</option>');
            $('#products').trigger("chosen:updated");
            var select = $('#products');
            var labor = $('#services :selected').data('price');
            $('#labor').val(labor);
            $('#labor').addClass('focused_input');
            $('#products').prop("disabled", false);
            $('#productSuggest').find('tbody').empty();
            var tbody = $("<tbody>");

            $.ajax({
                type: "GET",
                url: "/addjoborder/"+selectedID+"/getFilteredProductList",
                dataType: "JSON",
                async: false,
                success:function(data){
                    var options = '';
                    var row = $("<tr>");
                    var cols = "";
                    var count = Object.keys(data.products).length;
                    for (var i = 0; i < count; i++) {
                        options += '<option value="' + data.products[i].productid + '">' + data.products[i].fullproductname + '</option>';
                        cols += '<td style="border-right:none !important">'+ data.products[i].fullproductname +'</td>';
                        cols += '<td style="border-right:none !important"><input type="text" readonly style="width:50px; text-align:right; height:10px;" readonly placeholder=".00" value='+ data.products[i].price +' class="form-control"></td>';
                        selectProduct[i] = parseInt(data.products[i].productid);
                        row.append(cols);
                        tbody.append(row);
                        row = $("<tr>");
                        cols = "";
                    }
                    ctr = count;
                    $("#products").append(options);
                    $("#products option[value='0']").prop("disabled",true, "selected",false);
                    $('#products').trigger("chosen:updated");
                }
            });
            $('#servicename').html(selectedSvc);
            $(tbody).insertBefore("#prodSuggestFooter");
            disableOutsideClick();
            $('#productSuggest').modal('show');
        }
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
    
    // ADD ITEMS Functions
    var newProductRow = $("<tr/>");
    $("#addRow").on("click", function (event) {
        if (dismissed) addService();
        $("#services").prop("disabled", false).trigger("chosen:updated");
        addProduct();
        getEstimatedTime();
        getGrandTotal();
        reset();
    });

    $('#btnNo').on("click", function(){
        addService();
        getEstimatedTime();
        getGrandTotal();
        $("#services").prop("disabled", true).trigger("chosen:updated");
        $("#products").val(null).trigger("chosen:updated");
    });

    $('#close').on("click", function(){
        dismissed = true;
    });

    $('#btnGo').on("click", function(){
        addService();
        addProduct();
        getEstimatedTime();
        getGrandTotal();
        resetFields();
    });

    function disableOutsideClick(){
        $('#productSuggest').modal({
            backdrop: 'static',
            keyboard: false
        });
    }

    function resetFields(){
        $("#services").val(0).trigger("chosen:updated");
        $("#products").val(null).trigger("chosen:updated");
        $("#addRow").prop("disabled", true);
        $("#labor").val(null);
        $("#products").prop("disabled", "disabled").trigger('chosen:updated');
    }

    function addService(){
        var cols = "";

        $.ajax({
            type: "GET",
            url: "/addjoborder/"+selectedService+"/getServiceDetails",
            dataType: "JSON",
            async: false,
            success:function(data){
                var newServiceRow = $("<tr class='service' id='"+selectedService+"' data-servicecategoryid='"+data.service.servicecategoryid+"'  data-servicecategoryname='"+data.service.servicecategoryname+"'>");
                var pr = $('#services :selected').data('price');
                pr = parseFloat(pr).toFixed(2);
                cols += '<td style="border-right:none !important"> <span style="color:red">Service:</span><br>'+ data.service.servicename +'</td>';
                cols += '<td  style="border-right:none !important"><input type="hidden" style="width:5px;" id="quantity" name="" placeholder="" class="form-control" value="1"></td>';
                cols += '<td style="border-right:none !important"><input type="hidden" style="width:50px; text-align:right;" name="service[]" placeholder="" class="form-control" value="'+ selectedService +'"></td>';
                cols += '<td style="border-right:none !important"><input type="text" min="1" style="width:70px; text-align:right;" id="laborcost" name="laborcost[]" placeholder="Labor" class="form-control" value="'+ pr +'" readonly></td>';
                cols += '<td  style="border-right:none !important"><input type="hidden" name="personnelperformed[]"><select id="personnelperformed" name="personnelperformed[]" class="form-control chzn-select" style="width:110px;">@foreach($mechanic as $id => $name)<option value="{{$id}}">{{$name}}</option> @endforeach</select></td>';
                cols += '<td style="border-right:none !important"><input type="hidden" style="width:50px;" id="unitprice" name="" placeholder="" class="form-control" value="'+ pr +'"></td>';
                cols += '<td style="border-right:none !important"><input type="text" readonly style="width:70px;text-align: right"  id="totalprice" name="totalprice[]" placeholder=".00" class="form-control" value="'+ pr +'"></td>';
                cols += '<td style="border-left:none !important"><center><button type="button" id="svc" data-serviceid="'+selectedService+'" name="'+data.service.estimatedtime+'" class="btnDel btn btn-danger hvr-float-shadow" ><i class="fa fa-times text-white"></i></button</center></td>';
                
                newServiceRow.append(cols);
                $(newServiceRow).insertBefore("#discount");
                createChosen();

                bindListenerToBtnDel();

                $("#services option[value='"+selectedService+"']").prop("disabled", true);
                $("#services").trigger("chosen:updated");

                $("#automobile_models").prop("disabled", "disabled").trigger("chosen:updated");
                
                ++serviceCtr;
                cols = "";
            }
        });
        filterTags();
        dismissed=false;
        //selectedService = null;
    }

    function filterTags(){
        var tbody = $("<tbody>");
        var row = $("<tr>");
        var cols = "";
        var filterID = new Array();
        var filterTag = new Array();
        $('table.order-list tr').each(function(){
            if($(this).attr('class') == 'service'){
                filterID.push($(this).data('servicecategoryid'));
                filterTag.push($(this).data('servicecategoryname'));
            }
        });
        var count = filterID.length;
        for (var i = 0; i < count; i++) {
            cols += '<td><label style="width:100%; display:inline-block; margin: auto;"><input id="filterTag" name="filterTag[]" type="checkbox" value="'+filterID[i]+'" checked style="-webkit-transform: scale(1.4);">&nbsp;&nbsp;&nbsp;'+filterTag[i]+'</label></td>';           
            row.append(cols);
            tbody.append(row);
            row = $("<tr>");
            cols = "";
        }
        $('#mechFilterTbl').find('tbody').empty();
        $(tbody).insertBefore("#mechFilterFooter");
    }

    function addProduct(){  
        for(var k = 0; k < ctr; k++){
            $.ajax({
                type: "GET",
                url: "/addjoborder/"+ selectProduct[k] +"/getProductDetails",
                dataType: "JSON",
                async: false,
                success: function (data) {
                    var newProductRow = $("<tr class='product' id='svc"+selectedService+"'>");
                    cols = "";
                    var pr = data.product.price;
                    pr = parseFloat(pr).toFixed(2);
                    cols += '<td style="border-right:none !important"><input type="hidden" style="width:5px;" id="serviceid" name="serviceid[]" placeholder="" class="form-control" value="'+ selectedService +'"><input type="hidden" style="width:50px; text-align:right;" name="product[]" placeholder="" class="form-control" value="'+ selectProduct[k] +'"></td>';
                    cols += '<td style="border-right:none !important"><input type="number" min="1" max="999" onkeypress="return event.charCode >= 48 && event.charCode <= 57" style="width:55px; text-align:center;" id="quantity" name="quantity[]" placeholder="Quantity" class="form-control" value="1"></td>';
                    cols += '<td style="border-right:none !important">'+ data.product.fullproductname +'</td>';
                    cols += '<td style="border-right:none !important"><input type="hidden" style="width:50px; text-align:right;" placeholder="Labor" class="form-control"></td>';
                    cols += '<td style="border-right:none !important"><a></a></td>';
                    cols += '<td style="border-right:none !important"><input type="text" readonly style="width:50px; text-align: right" id="unitprice" name="unitprice[]" readonly placeholder=".00" value='+ pr +' class="form-control"></td>';
                    cols += '<td style="border-right:none !important"><input type="text" readonly style="width:70px;text-align: right" id="totalprice" name="totalprice" placeholder=".00" class="form-control" value="'+ pr +'"></td>';
                    cols += '<td style="border-left:none !important"><center><button type="button" id="productid" name="'+selectedService+'" class="btnDel btn btn-danger hvr-float-shadow" ><i class="fa fa-times text-white"></i></button></center></td>';

                    newProductRow.append(cols);
                    $(newProductRow).insertBefore("#discount");

                    if (ctr != 1){
                        newProductRow = $("<tr>");
                        cols = "";
                    }

                    cols = "";

                    $("table td input").bind({
                        keyup: function() {
                            getGrandTotal();
                        },
                        mouseleave: function() {
                            $(this).blur();
                            getGrandTotalNoQty();
                        },
                        focusout: function() {
                            getGrandTotalNoQty();
                        }
                    });

                    bindListenerToBtnDel();

                    $("table.order-list").on("click", "#productid", function(event){
                        var remaining = 1;
                        var id = $(this).attr('name');
                        var svcid = "svc" + id;
                        var this_ServiceID = "#" + id;
                        $('table tr').each( function() {
                            if ($(this).attr('class') == 'product' && $(this).attr('id') == svcid){
                                remaining++;
                            }
                        });
                        if(remaining == 1) {
                            $('#itemsTable').find(this_ServiceID).remove();
                            $('#services option[value="'+id+'"]').prop("disabled", false);
                            $('#services').trigger("chosen:updated");            
                            
                            countServices();
                            $("#automobile_models").prop("disabled", false).trigger("chosen:updated");
                        }
                        getEstimatedTime();
                        getGrandTotal();
                    });
                }
            });
        }

    }

    function bindListenerToBtnDel(){
        $("table.order-list").on("click", ".btnDel", function (event) {
            var id = $(this).data('serviceid');
            var svcid = "svc" + id;
                        
            //remove all products included in this service
            $('table tr').each( function() {
                if ((this.id) == svcid) 
                    $(this).closest("tr").remove();
            });

            $(this).closest("tr").remove();
            $('#services option[value="'+id+'"]').prop("disabled", false);
            $('#services').trigger("chosen:updated");
            getEstimatedTime();
            getGrandTotal();
            countServices();
            $("#services").prop("disabled", false);
            $("#services").prop("selectedIndex", 0).trigger("chosen:updated");
            $("#products").prop("disabled", true);
            $("#products").val(null).trigger("chosen:updated");
            $("#addRow").prop("disabled", true);

            if(isNaN(serviceCtr) || serviceCtr == 0) $("#automobile_models").prop("disabled", false).trigger("chosen:updated");
        });
    }

	$("#servicebays").change(function () {
		var selectedID = $(this).val();
        svcbayID = selectedID;
        if($(this).val() != null || $(this).val() != 0) { $("#svcbaywrapper").css("border", "none"); }
	});

    /* CHOOSE MODEL TO FILTER SERVICE PRICE*/
    $("#automobile_models").on("change", function(){
        var selectedID = $(this).val();
        modelID = selectedID;

        filterServices();
    });

    $("#AT").change(function(){
        $("#MT").prop("checked", false);
        $("#AT").prop("checked", true);
        $("#transmission").val("A/T");
    });
    
    $("#MT").change(function(){
        $("#AT").prop("checked", false);
        $("#MT").prop("checked", true);
        $("#transmission").val("M/T");
    });
    
	$("#discounts").change(function () {
		var selectedID = $(this).val();
        var discountName = $("#discounts option:selected").text();

        $.ajax({
            type: "GET",
            url: "/addjoborder/"+selectedID+"/getDiscountDetails",
            dataType: "JSON",
            async: false,
            success: function(data){
                var newDiscountRow = $('<tr id="discount">');
                var cols = "";
                
                cols += '<td style="border-right:none !important"></td>';
                cols += '<td style="border-right:none !important"><input type="hidden" style="width:55px;" placeholder="" readonly class="form-control hidden"></td>';
                cols += '<td style="border-right:none !important"><span style="color:red">Discount:</span><br>'+discountName+' </td>';
                cols += '<td style="border-right:none !important"><input type="hidden" style="width:50px;" placeholder="Labor" class="form-control"></td>';
                cols += '<td style="border-right:none !important"><a></a></td>';
                cols += '<td style="border-right:none !important"><input type="text" readonly style="width:60px;text-align: right" id="discountrate" name="discountrate" placeholder="20%" class="form-control" data-rate="'+data.discount.discountrate+'" value="'+ data.discount.discountrate +'%"></td>';
                cols += '<td style="border-right:none !important"><input type="text" readonly style="width:80px;text-align: right" id="discountamt" name="discountamt" placeholder=".00" class="form-control"></td>';
                cols += '<td style="border-left:none !important"><button type="button" id=" " class="btnDel btn btn-danger hvr-float-shadow" ><i class="fa fa-trash text-white"></i></button></td>';
                newDiscountRow.append(cols);
                $("tr#discount").replaceWith(newDiscountRow);
            }
	    });
            getDiscountedPrice();

    }); 

    function getDiscountedPrice(){
        discountRate = $("#discountrate").data('rate');
        discountedAmt = (parseFloat(grandTotal) / 100) * parseFloat(discountRate);
        if (isNaN(discountedAmt)) discountedAmt = 0;
        totalAmtDue = grandTotal - discountedAmt;
        discountedAmt = discountedAmt.toFixed(2);
        totalAmtDue = totalAmtDue.toFixed(2);
        if (!(isNaN(totalAmtDue))){
            $("#discountamt").val(discountedAmt);
            $("#lessdiscount").html("- PHP " + discountedAmt);
            $("#discountedamt").val(totalAmtDue);
        }
            $("#totalamountdue").html("PHP " + totalAmtDue);
            $("#totalamtdue").val(grandTotal);
    }
    
	$("#promos").change(function () {
		var selectedID = $(this).val();
        var newPromoRow = $('<tr id="promo">');
        var cols = "";

        if (promoID == null){
            cols += '<td style="border-right:none !important"></td>';
            cols += '<td style="border-right:none !important"><input type="hidden" style="width:55px;" placeholder="" readonly class="form-control hidden"></td>';
            cols += '<td style="border-right:none !important"><span style="color:red">Promo:</span><br>Summer Promo </td>';
            cols += '<td style="border-right:none !important"><input type="hidden" style="width:50px;" placeholder="Labor" class="form-control"></td>';
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
            cols += '<td style="border-right:none !important"><input type="hidden" style="width:55px;" placeholder="" readonly class="form-control hidden"></td>';
            cols += '<td style="border-right:none !important"><span style="color:red">Promo:</span><br>Ultimate Change Oil Promo </td>';
            cols += '<td style="border-right:none !important"><input type="hidden" style="width:50px;" placeholder="Labor" class="form-control"></td>';
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
            cols += '<td style="border-right:none !important"><input type="hidden" style="width:55px;" placeholder="" readonly class="form-control hidden"></td>';
            cols += '<td style="border-right:none !important"><span style="color:red">Package:</span><br>Summer Package </td>';
            cols += '<td style="border-right:none !important"><input type="hidden" style="width:50px;" placeholder="Labor" class="form-control"></td>';
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
            cols += '<td style="border-right:none !important"><input type="hidden" style="width:55px;" placeholder="" readonly class="form-control hidden"></td>';
            cols += '<td style="border-right:none !important"><span style="color:red">Package:</span><br>Ultimate Change Oil Package</td>';
            cols += '<td style="border-right:none !important"><input type="hidden" style="width:50px;" placeholder="Labor" class="form-control"></td>';
            cols += '<td style="border-right:none !important"><a></a></td>';
            cols += '<td style="border-right:none !important"><input type="text" readonly style="width:50px;text-align: right" name="unitprice" placeholder=".00" class="form-control"></td>';
            cols += '<td style="border-right:none !important"><input type="text" readonly style="width:50px;text-align: right" name="price " placeholder=".00" class="form-control"></td>';
            cols += '<td style="border-left:none !important"><button type="button" id=" " class="btnDel btn btn-danger hvr-float-shadow" ><i class="fa fa-trash text-white"></i></button></td>';
            newPackageRow.append(cols);
            $("tr#package").replaceWith(newPackageRow);
        }
        packageID = selectedID;
	});

    $("#mechFilters").on("click", function(){
        $('#mechFilterModal').modal('show');
    });

    $(function(){ 
        $('#filterSwitch').on('switchChange.bootstrapSwitch', function(event){
            if($(this).is(':checked')){   
                $('#filterStatus').html('Inactive');
            }
            else{
                $('#filterStatus').html('Active');
            }
        })
    });

    var old = null;
    $("#mechanic").change(function(){
        var selectedID = $(this).val();
        var selectedIndex = $(this).prop('selectedIndex');
        var idx = $(this).find(':selected').attr('data-idx');

        mechanicID = selectedID;
        selectedMechIndex = selectedIndex;
        $('table td select').each(function(){
            $(this).prop('selectedIndex', selectedIndex);
            $(this).val(selectedID);
            $(this).trigger("chosen:updated");
        });

        $('table td input').each(function(){
            if(this.id == "mech" && $(this).data('idx') == idx){
                $(this).val(selectedID);
            }
        });

        if($(this).val() != null || $(this).val() != 0) { 
            $("#mechanicwrapper").css("border", "none");
        }

        if(mechanicID == saID || mechanicID == qaID || mechanicID == imID){
            var res = confirm("It seems like you have already assigned this personnel to a task. Proceeding would reset the assignment of other personnels. Continue?");
            if (res){
                disablePersonnels(selectedID);
            }
            else{
                old = $("#personnels option:selected").val();
                    $('#mechanic').prop('selectedIndex', old);
                    $('#mechanic').trigger("chosen:updated");
            }
        }
        else {
            disablePersonnels(selectedID);
        }
    });

    function disablePersonnels(selectedID){
            
            $("#mechanic option").prop("disabled", false);
            $('#mechanic option[value ="0"]').prop("disabled", true)
            $('#mechanic option[value ="'+ selectedID+'"]').prop("disabled", true);
            $("#mechanic").trigger("chosen:updated");
            
            $("#SA option").prop("disabled", false);
            $('#SA option[value ="0"]').prop("disabled", true)
            $('#SA option[value ="'+ selectedID+'"]').prop("disabled", true);
            $('#SA').val(0);
            $("#SA").prop("disabled", false);
            $("#SA").trigger("chosen:updated");

            $("#QA option").prop("disabled", false);
            $('#QA option[value ="0"]').prop("disabled", true)
            $('#QA option[value ="'+ selectedID+'"]').prop("disabled", true);
            $('#QA').val(0);
            $("#QA").prop("disabled", false);
            $("#QA").trigger("chosen:updated");
            
            $("#IM option").prop("disabled", false);
            $('#IM option[value ="0"]').prop("disabled", true)
            $('#IM option[value ="'+ selectedID+'"]').prop("disabled", true);
            $('#IM').val(0);
            $("#IM").prop("disabled", false);
            $("#IM").trigger("chosen:updated");

            $('table tr select').each(function(){
                if(this.id == "personnels")
                    $(this).val(selectedID);
                    $(this).prop("disabled", false);
                    $(this).trigger("chosen:updated");
            });
    }

    $("#SA").change(function(){
        var selectedID = $(this).val();
        saID = selectedID;
        if($(this).val() != null || $(this).val() != 0) { $("#SAwrapper").css("border", "none"); }
        $("#QA option").prop("disabled", false);
        $('#QA option[value ="0"]').prop("disabled", true)
        $('#QA option[value ="'+ mechanicID+'"]').prop("disabled", true).trigger("chosen:updated");
        $('#QA option[value ="'+ selectedID+'"]').prop("disabled", true).trigger("chosen:updated");
    });

    $("#QA").change(function(){
        var selectedID = $(this).val();
        qaID = selectedID;
        if($(this).val() != null || $(this).val() != 0) { $("#QAwrapper").css("border", "none"); }
        $("#SA option").prop("disabled", false);
        $('#SA option[value ="0"]').prop("disabled", true)
        $('#SA option[value ="'+ mechanicID+'"]').prop("disabled", true).trigger("chosen:updated");
        $('#SA option[value ="'+ selectedID+'"]').prop("disabled", true).trigger("chosen:updated");
    });

    $("#IM").change(function(){
        var selectedID = $(this).val();
        imID = selectedID;
        if($(this).val() != null || $(this).val() != 0) { $("#IMwrapper").css("border", "none"); }
    });

    $("#personnels").change(function(){
        var selectedID = $(this).val();
        
        $("#personnels option").prop("disabled", false);
        $('#personnels option[value ="0"]').prop("disabled", true)
        $('#personnels').trigger("chosen:updated");
    });

});
</script>

<script>
function autoDiscount(){
        //alert("i was here");
        var newDiscountRow = $('<tr id="discount">');
        var cols = "";
        cols += '<td style="border-right:none !important"></td>';
        cols += '<td style="border-right:none !important"><input type="hidden" style="width:55px;" placeholder="" readonly class="form-control hidden"></td>';
        cols += '<td style="border-right:none !important"><span style="color:red">Discount:</span><br>Senior Citizen Discount </td>';
        cols += '<td style="border-right:none !important"><input type="hidden" style="width:50px;" placeholder="Labor" class="form-control"></td>';
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