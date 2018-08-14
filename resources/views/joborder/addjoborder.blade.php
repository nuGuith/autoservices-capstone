@extends('layout.master') <!-- Include Master Page -->
@section('Title','Add Job Order') <!-- Page Title -->
@section('content')

    <link type="text/css" rel="stylesheet" href="vendors/sweetalert/css/sweetalert2.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/pages/sweet_alert.css"/>

    <link type="text/css" rel="stylesheet" href="vendors/animate/css/animate.min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/hover/css/hover-min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/wow/css/animate.css"/>

    <link type="text/css" rel="stylesheet" href="vendors/modal/css/component.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/animate/css/animate.min.css" />

    <link type="text/css" rel="stylesheet" href="vendors/fileinput/css/fileinput.min.css"/>

    <!-- end of plugin styles -->
    <link type="text/css" rel="stylesheet" href="css/pages/animations.css"/>

    <link type="text/css" rel="stylesheet" href="css/pages/portlet.css"/>
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
	                            
	                                <!-- Search by: Inspection/Estimate, Inspection ID/Estimate ID, Customer Name, Plate No -->
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
	                                    	<div class="col-lg-3">
	                                            <h5>Plate No.: <span style="color:red">*</span></h5>
	                                            <p>
	                                                <input id="plateno" name="plateno" type="text" placeholder="Plate No." class="form-control m-t-10">
	                                            </p>
	                                        </div>
	                                        <div class="col-lg-3">
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
	                                        <div class="col-lg-3 ">
	                                           <h5>Chassis No.: <span style="color: red">*</span></h5>
	                                            <p>
	                                                <input id="chassisno" name="chassisno" type="text" placeholder="Chassis No." maxlength="17" class="form-control m-t-10">
	                                            </p>
	                                        </div>

	                                        <div class="col-lg-3 ">
	                                            <h5>Mileage.: <span style="color: red">*</span></h5>
	                                                <div class="input-group">
	                                                    <span class="input-group-addon m-t-10">
	                                                        <i class="fa fa-dashboard"></i>
	                                                    </span>
	                                                    <input id="mileage" name="mileage" type="text" placeholder="km" class="form-control m-t-10">
	                                                </div>
	                                        </div>                         
	                                </div>

	                            <!--END VEHICLE INFORMATION -->


	                        <!--START JOB ORDER DETAILS-->
	                        <h4 class="m-t-20">Job Order Details</h4>
	                        <hr style="margin-top: 10px; border: 2px solid #ffb74d ">

	                        <!--Select Button: Service Bay, Discount-->
	                        <div class="row m-t-15">
	                           <div class="col-lg-6">
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
	                            <div class="col-lg-6">
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
	                        </div>


	                        <!--Select Button: Service, Proodcut, Promo, Package-->
	                        <div class="row m-t-15">
	                            <div class="col-lg-3">
	                                <h5>Search Service: <span style="color:red"></span>&nbsp;<button class="btn btn-warning hvr-float tipso" style ="padding:1px 3px; margin:-5px 2px;" data-background="orange" data-color="white" data-tipso="Reset">
	                                            <i class="fa fa-refresh text-white"></i>
	                                </button></h5>
	                                
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
	                                <h5>Search Product: <span style="color:red"></span>&nbsp;<button class="btn btn-success hvr-float tipso" style ="padding:1px 3px; margin:-5px 2px;" data-background="green" data-color="white" data-tipso="Add this Product" href="/addjoborder/addProduct">
	                                            <i class="fa fa-plus text-white"></i>
	                                </button></h5>
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


	                        <!--Start Job Order Table -->
	                            <div class ="row m-t-10">
	                                <table class="table order-list table-bordered display nowrap table-hover dataTable" >
	                                    <thead>
	                                        <br>
	                                        <tr>
	                                            <td style="width: 5px;">
	                                                <h5>Quantity <span style="color: red">*</span></h5>
	                                            </td>
	                                            <td style="width: 250px;">
	                                                <h5>Items <span style="color: red"></span>
	                                                </h5>
	                                            </td>
	                                            <td style="width: 10px;">
	                                                <h5>Labor <span style="color: red">*</span>
	                                                </h5>
	                                            </td>
	                                            <td style="width: 250px;">
	                                                <h5>Assign Mechanic <span style="color: red">*</span>
	                                                </h5>
	                                            </td>
	                                            <td style="width: 30px;">
	                                                <h5>Unit Price<span style="color: red"></span>
	                                                </h5>
	                                            </td>
	                                            <td style="width: 5px;">
	                                                <h5>Total Price<span style="color: red"></span>
	                                                </h5>
	                                            </td>
	                                            <td style="width: 30px;">
	                                                <h5>Action<span style="color: red"></span>
	                                                </h5>
	                                            </td>
	                                        </tr>
	                                    </thead>
	                                    <tbody>
	                                        <!--Example: for SERVICE-->
	                                            <!--Hidden Field: Quantity, Unit Price -->
	                                        <tr>
	                                            <td style="border-right:none !important">
	                                                <input type="hidden" style="width:70px;" name="quantity" readonly class="form-control hidden">
	                                            </td>   
	                                            <td style="border-right:none !important">  
	                                                Change Oil 
	                                            </td>
	                                            <td style="border-right:none !important">
	                                                <input type="text" style="width:70px;" name="labor" placeholder="Labor" class="form-control">
	                                            </td>
	                                            <td style="border-right:none !important">
	                                                <select class="form-control chzn-select" multiple style="width:170px;" value="Choose Mechanic">
	                                                    <option disabled>Choose Mechanic</option>
	                                                    <optgroup label="Maintenace">
	                                                        <option>Juan Dela Cruz</option>
	                                                        <option>Pedro Penduko</option>
	                                                    </optgroup>
	                                                </select>
	                                            </td>
	                                            <td style="border-right:none !important">
	                                                <input type="hidden" style="width:70px;" name="unitprice" class="form-control">
	                                            </td>
	                                            <td style="border-right:none !important">
	                                                <input type="text" readonly style="width:70px;text-align: right" name="price " placeholder=".00" class="form-control">
	                                            </td>
	                                            <!--Delete Row Inside Job Order Table -->
	                                            <td style="border-left:none !important">
	                                                <button type="button" id=" " class="btnDel btn btn-danger hvr-float-shadow" ><i class="fa fa-trash text-white"></i></button>
	                                            </td> 
	                                        </tr>

	                                           <!--Example: for PRODUCT-->
	                                            <!--Hidden Field: Labor, Assign Mechanic -->
	                                        <tr>
	                                            <td style="border-right:none !important">
	                                                <input type="text" style="width:70px;" name="quantity" placeholder="Quantity" class="form-control">
	                                            </td>   
	                                            <td style="border-right:none !important">  
	                                                Dunlop 1.5mL
	                                            </td>
	                                            <td style="border-right:none !important">
	                                                <input type="hidden" style="width:70px;" name="labor" placeholder="Labor" class="form-control">
	                                            </td>
	                                            <td style="border-right:none !important">
	                                               <a></a>
	                                            </td>
	                                            <td style="border-right:none !important">
	                                                <input type="text" style="width:70px; text-align: right" name="unitprice" readonly placeholder=".00" class="form-control">
	                                            </td>
	                                            <td style="border-right:none !important">
	                                                <input type="text" style="width:70px; text-align: right" name="price" readonly placeholder=".00" class="form-control">
	                                            </td>
	                                            <!--Delete Row Inside Job Order Table -->
	                                            <td style="border-left:none !important">
	                                                <button type="button" id=" " class="btnDel btn btn-danger hvr-float-shadow" ><i class="fa fa-trash text-white"></i></button>
	                                            </td> 
	                                        </tr>

	                                           <!--Example: for Discount-->
	                                            <!--Hidden Field: Quantity Labor, Assign Mechanic -->
	                                        <tr>
	                                            <td style="border-right:none !important">
	                                                <input type="hidden" style="width:70px;" name="quantity" placeholder="Quantity" class="form-control">
	                                            </td>   
	                                            <td style="border-right:none !important">  
	                                                <span style="color:red">Discount:
	                                            </span>&nbsp;&nbsp;Senior Citizen
	                                            </p>
	                                            </td>
	                                            <td style="border-right:none !important">
	                                                <input type="hidden" style="width:70px;" name="labor" placeholder="Labor" class="form-control">
	                                            </td>
	                                            <td style="border-right:none !important">
	                                               <a></a>
	                                            </td>
	                                            <td style="border-right:none !important">
	                                                <input type="text" style="width:70px; text-align: right" name="unitprice" readonly placeholder="10%" class="form-control">
	                                            </td>
	                                            <td style="border-right:none !important">
	                                                <input type="text" style="width:70px; text-align: left;color:red" name="price" readonly placeholder="-100" class="form-control">
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
	                                            <td colspan="5" style="width: 5px; text-align: right">
	                                                <h5>Overall Total:<span style="color: red"></span></h5>
	                                            </td>
	                                            <td style="text-align:right">
	                                                <h5><span style="color:blue">3750</span></h5>
	                                            </td>
	                                            <td>
	                                            </td>  
	                                        </tr>
	                                    </tfoot>
	                                </table> 

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
	                    	{!!Form::close()!!}

	                             <!--Button: Back, Save-->
	                            <div class="card-footer bg-black">
	                                <div class="examples transitions m-t-5 pull-right">
	                                    <button onclick="window.location='{{ url("/joborder") }}'" class="btn btn-secondary hvr-float adv_cust_mod_btn gray"  href="/joborder"><i class="fa fa-arrow-left">
	                                    </i>&nbsp;Back</button>  

	                                    <button class="btn btn-success  source success_clr m-l-0 hvr-float adv_cust_mod_btn" style ="width: 80px;"  ><i class="fa fa-save text-white" ></i>&nbsp; Save</button>
	                                </div>
	                            </div>
	                        </div>
							{!!Form::close()!!}
	                        <!-- card-block m-t-15 -->
	                        </div>
	                        <!-- card -->
                        </div>
                        <!-- col-lg-12 -->
                    </div>
                    <!-- row -->
                </div>
                <!-- /.inner bg-container -->
            </div>        
            <!-- /.outer -->
        </div>
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
$(document).on('submit', 'form.jobForm', function() {
	$.ajax({
		url: $(this).attr('action'),
		type: $(this).attr('method'),
		dataType: 'json',
		data: $(this).serialize(),
		success: function(data) {
			alert('Submitted');
		},
		error: function(xhr,err) {
			alert('Error');
		}
	});
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

    var estimateID;
    var inspectID;
    var nah;

    /* $('select').on('change', function () {}); */
    window.addEventListener("beforeunload", function (e) {
    var message = "Are you sure you want to leave?";
        (e || window.event).returnValue = message;     
            return message;
    });

    //Button: Delete Row
    $("table.order-list").on("click", ".btnDel", function (event) {
        $(this).closest("tr").remove();
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
            }
        });
    });

    /* SELECT RECORD via CUSTOMER NAME SEARCH */
    $("#customers").change(function () {
        var selectedID = $(this).val();
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
            }
        });
        
    });

    /* SELECT RECORD via PLATE NUMBER SEARCH */
    $("#automobiles").change(function () {
        var selectedID = $(this).val();
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
            }
        });
    });

    /* CHOOSE SERVICE TO FILTER THE PRODUCTS */
    $("#services").change(function () {
        var selectedID = $(this).val();
        $('#products').empty().append('<option value=0 >Choose a Product</option>');
        $('#products').trigger("chosen:updated");
        var select = $('#products');

        $.ajax({
            type: "GET",
            url: "/addjoborder/"+selectedID+"/getProducts",
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
        var counter = 0;
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" class="form-control" name="item" placeholder="Item"' + counter + '"/></td>';
        cols += '<td><input type="button" class="ibtneDel btn  btn-danger btn-md hvr-float-shadow" value ="X"></td>';

        newRow.append(cols);
        $("table.edit-order-list").append(newRow);
        counter++;
    });

});
</script>

@stop