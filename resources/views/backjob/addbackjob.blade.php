@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','Add Back Job') <!-- Page Title -->
@section('content')

    <link type="text/css" rel="stylesheet" href="vendors/sweetalert/css/sweetalert2.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/pages/sweet_alert.css"/>

    <link type="text/css" rel="stylesheet" href="vendors/animate/css/animate.min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/hover/css/hover-min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/wow/css/animate.css"/>

    <link type="text/css" rel="stylesheet" href="vendors/modal/css/component.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/animate/css/animate.min.css" />

    <!-- end of plugin styles -->
    <link type="text/css" rel="stylesheet" href="css/pages/animations.css"/>
    <link type="text/css" rel="stylesheet" href="{{URL::asset('vendors/tooltipster/css/tooltipster.bundle.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('vendors/tipso/css/tipso.min.css')}}">

    <link type="text/css" rel="stylesheet" href="css/pages/portlet.css"/>

        <!-- CONTENT -->
        <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row" style = "height: 47px;">
                    <div class="col-6">
                        <h4 class="m-t-15">
                            <i class="fa fa-plus"></i>&nbsp;
                            Add Back Job
                        </h4>
                    </div>
                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right   ">
                            <li class="breadcrumb-item " >
                                <a href="/backjob">
                                    <i class="fa fa-search" data-pack="default" data-tags=""></i>
                                    Back Job
                                </a>
                            </li>
                            <li class="active breadcrumb-item">&nbsp;Add Back Job</li>
                        </ol>
                    </div>
                    </div>
                </div>
            </header>
            
            <div class="outer">
                <div class="inner bg-container">
                    <div class="row">
                        <div class="col-lg-12">
                        {!! Form::open(array('id' => 'backjobForm', 'url' => '/addbackjob', 'action' => 'AddBackJobController@store', 'method' => 'POST')) !!}
                            <div class="card" >
                            <!-- SEARCH BY ESTIMATE/JOB ORDER ID -->
                                <div class="card-block m-t-15">
                                    <div class="row m-t-15">
                                        <!-- SEARCH EXISTING RECORDS BY Job Order ID -->
                                        <div class="col-lg-4">
	                                        <h5>Search Job Order ID:</h5>
                                            <input type="hidden" id="formEstimateID" name="estimateID">
	                                        <p>
	                                            <p class="m-t-10">
	                                            {{ Form::select(
	                                                'joborders',
	                                                $joborderids,
	                                                null,
	                                                array(
	                                                'class' => 'form-control chzn-select',
	                                                'id' => 'joborders',
	                                                'name' => 'joborderid')
	                                                ) 
	                                            }}
	                                            </p>
	                                        </p>
	                                    </div>
                                        <!--Search by Customer Name -->
                                        <div class="col-lg-4">
	                                        <h5>Search via Customer Name:</h5>
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
	                                        <h5>Search via Plate No:</h5>
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
                                    <!-- ./SEARCH BY ESTIMATE/JOB ORDER ID -->
                                    </div>
                        <!-- CARDS START -->
                            <div class="row m-t-15">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-block m-t-20" id="user_body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <!--START CUSTOMER INFORMATION-->
                                                    <h4>Customer Information</h2>
                                                    <hr style="margin-top: 10px; border: 2px solid #a7dfcd">

                                                    <!--Label: Customer Name,  Contact No. Email, Adress, Senior Citizen /PWD ID-->
                                                    <div class="row m-t-15">
                                                        <div class="col-lg-12">
                                                                <h5><span style="color:gray">Customer Name:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="customername"></span></h5>                    
                                                        </div>  
                                                        <div class="col-lg-12 m-t-10">
                                                                <h5><span style="color:gray">Contact No.:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="contactno"></span></h5>               
                                                        </div>
                                                        <div class="col-lg-12 m-t-10">
                                                                <h5><span style="color:gray">Email Address:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="email"></span></h5>
                                                        </div>
                                                        <div class="col-lg-12 m-t-10">
                                                                <h5><span style="color:gray">Address:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="address"></span></h5>
                                                        </div>
                                                        <div class="col-lg-12 m-t-10">
                                                                <h5><span style="color:gray">Senior Citizen/ PWD ID:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="pwd_sc_no"></span></h5>
                                                        </div>                    
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <!-- VEHICLE INFORMATION --> 
                                                    <h4>Vehicle Information</h2>
                                                    <hr style="margin-top: 10px; border: 2px solid #6699cc"> 

                                                    <div class="row m-t-15">
                                                            <div class="col-lg-7">
                                                                    <h5><span style="color:gray">Plate Number:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="plateno"></span></h5>                    
                                                            </div>
                                                            <div class="col-lg-5">
                                                                    <h5><span style="color:gray">Color:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="color"></span></h5>
                                                            </div>
                                                            <div class="col-lg-12 m-t-10">
                                                                    <h5><span style="color:gray">Chassis No.:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="chassisno"></span></h5>
                                                            </div>
                                                            <div class="col-lg-12 m-t-10">
                                                                    <h5><span style="color:gray">Model:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="model"></span></h5>
                                                            </div>
                                                            <div class="col-lg-12 m-t-10">
                                                                    <h5><span style="color:gray">Mileage:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="mileage"></span></h5>
                                                            </div> 
                                                            <div class="col-lg-6 m-t-10">
                                                                    <h5><span style="color:gray">Transmission:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="transmission"></span></h5>
                                                            </div>          
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                    
            <!--START JOB ORDER DETAILS-->
                 <h4 class="m-t-20">Back Job Details</h2>
                        <hr style="margin-top: 10px; border: 2px solid #ffb74d  ">                                       
                        <!--Select Button: Service, Proodcut, Promo, Package-->
                        <div class="row m-t-10">
                            <div class="col-lg-12">
                                <div style="padding:1.5%; padding-bottom: 0px; border: 1px solid lightgray; border-radius:5px; margin-top:0.5%;">
                                    <h4> Note: </h4>
                                    <p>
                                        Products and Services that are with <del>strikethrough</del> cannot be staged for the back job because they have reached or exceeded the warranty limit. If a vehicle is in need of a new service and/or product, a new job order must be created.
                                    </p>
                                </div>
                            </div>        
                        </div> 
                        <!--Start Job Order Table -->
                            <div class="row m-t-10" style="padding: 0% 1.5%;">
                                <table id="table1" class="table order-list table-bordered table-hover dataTable" style="table-layout:fixed;">
                                    <thead id="header">
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
                                                <h5>Assigned Mechanic <span style="color: red">*</span>
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
                                                <h5>Select<span style="color: red"></span>
                                                </h5>
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                    <tfoot id="footer1">
                                        <tr>
                                            <th colspan="7"></th>
                                            <th colspan="1" style="height:20px;">
                                                <button id="moveTo2" class="btn btn-info hvr-float-shadow adv_cust_mod_btn m-t-5 tipso_bounceIn" style="float:left;" data-background="#428bca" data-color="white" data-tipso="Move" type="button"><i class="fa fa-arrow-down text-white"></i></button>
                                            </th>
                                        </tr>
                                     </tfoot>
                                    </table>
                                </div>
                                    <div class="row" style="margin-top: 2%; margin-bottom:2%;">
                                        <div class="col-lg-4" style="padding-top:1.1em; margin-left:1.4%;border: 1px solid lightgray; border-radius:5px;">
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
                                        <div class="col-lg-5" style="padding-top:1em; margin-left:5px;border: 1px solid lightgray; border-radius:5px;">
                                            <h5>Mileage: <span style="color:red">*</span></h5>
                                            <h5 class="m-t-15">Previous: <span id="prevMileage" style="color:gray;">0</span> km(s)</h5>
                                            <h5 class="m-t-5">Current: <span id="currMileage" style="color:gray;">0</span> km(s)</h5>
                                        </div>
                                    </div>
                                    <div class="row m-t-5" style="padding: 0% 1.5%;">
                                        <table id="table2" class="table order-list table-bordered table-hover dataTable" style="table-layout:fixed;">
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
                                                        <h5>Assigned Mechanic <span style="color: red">*</span>
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
                                                        <h5>Select<span style="color: red"></span>
                                                        </h5>
                                                    </td>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                            <tfoot  id="footer2">
                                                <tr>
                                                    <th colspan="3" style="text-align: left;">Estimated Time: 
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span id="estimated" style="text-align: center; color: blue"></span>
                                                    </th>
                                                    <td colspan="2" style="width: 5px; text-align: right">
                                                        <div class="cols">
                                                            <h5 style="padding-top:5px;">Total Product Cost:</h5>
                                                            <h5 style="padding-top:5px;">Total Labor Cost (Service):</h5>
                                                            <h5 style="padding-top:5px;">Grand Total:</h5>
                                                        </div>
                                                    </td>
                                                    <td colspan="2" style="text-align:right">
                                                        <div class="cols">
                                                            <h5 id="totalprodsales" style="padding-top:5px;">PHP&nbsp;&nbsp;&nbsp;<span style="color:red">&nbsp;&nbsp;&nbsp;0.00</span></h5>
                                                            <h5 id="totallaborcost" style="padding-top:5px;">PHP&nbsp;&nbsp;&nbsp;<span style="color:red">&nbsp;&nbsp;&nbsp;0.00</span></h5>
                                                            <h5 id="totalamountdue" style="padding-top:5px;">PHP&nbsp;&nbsp;&nbsp;<span style="color:red">&nbsp;&nbsp;&nbsp;0.00</span></h5>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div style="margin-top:1.8em;">
                                                            <button id="moveTo1" class="btn btn-info hvr-float-shadow adv_cust_mod_btn m-t-5 tipso_bounceIn" data-background="#428bca" data-color="white" data-tipso="Unstage" type="button"><i class="fa fa-arrow-up text-white"></i></button>
                                                        </div>
                                                    </td>  
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                            <!-- Assigning of SA, QA, IM, Mechanic -->
                            <div class="row m-t-30">
                                <div class="col-lg-3">
                                    <div class="row">
                                        <div class="col-sm-8" style="margin-top:0px;">
	                                        <h5>Mechanic: <span style="color: red">*</span></h5>
                                        </div>
                                        <!-- <div class="col-sm-4"  style="margin-bottom:-5px;margin-top:-5px;">
                                            <div>
                                                <span style="padding-left:7px; font-size: 14px;">[<a id="mechFilters" style="fontsize:12px; color:#1BBFC9; cursor:pointer;" data-toggle="tooltip" data-placement="top" title="&nbsp;&nbsp;View Active Filters&nbsp;&nbsp;" data-trigger="hover" data-html="true" data-container="body" data-dismiss="tooltip"> Filters </a>]</span>
                                            </div>
                                        </div> -->
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
                    </div> <!-- This end div is for margin top -->

                    <!-- START Mileage check MODAL -->
                    <div  class="modal show" id="modal-3" role="dialog" aria-labelledby="modalLabelbouncedown">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header bg-danger">
                                    <button id="close" type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                    <h4 class="modal-title text-white"><i class="fa fa-save"></i>
                                                &nbsp;Mileage</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="col m-t-15">
                                        <h4>Before everything else, we need you to enter the current mileage of the customer's vehicle.</h4>
                                        <div>
                                            <br>
                                            <hr style="color:gray; padding-bottom:5px;">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <h5>Previous Mileage: </h5>
                                                    <input id="prevMileageMod" type="number" class="form-control" placeholder="Mileage" readonly style="margin-top:3%;">
                                                </div>
                                                <div class="col-lg-6">
                                                    <h5>Current Mileage: <span id="required" style="font-size:12px; color:red; visibility:hidden;">&nbsp;Required.</span></h5>
                                                    <input id="currMileageMod" type="number" class="form-control" placeholder="Current Mileage" style="margin-top:3%;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer m-t-10">
                                    <!-- <div class="examples transitions m-t-5">
                                        <button id="btnNo" type="button" data-dismiss="modal" class="btn btn-secondary adv_cust_mod_btn">Cancel</button>
                                    </div> -->
                                    <div class="examples transitions m-t-5">
                                        <button id="btnConfirm" type="button" class="btn btn-outline-success">
                                            &nbsp;Confirm
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END RESET MODAL -->
                    
                    <!-- END -->
                            <div class="card-footer bg-black">
                               <div class="examples transitions m-t-5 pull-right">
                                    <button type="button" onclick="window.location='{{ url("/backjob") }}'" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn gray"  href="/backjob"><i class="fa fa-arrow-left" >
                                    </i>&nbsp;Back</button>  
                                    <button class="btn btn-success source success_clr m-l-0 hvr-float-shadow adv_cust_mod_btn" style ="width: 80px;" type="button"><i class="fa fa-save text-white" ></i>&nbsp; Save</button>
                                </div>
                            </div>
                    {!!Form::close()!!}
                <!-- /.outer -->
        <div>
    </div>
        <!--END CONTENT -->

<!-- global scripts sweet alerts-->
<script type="text/javascript" src="js/components.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="vendors/sweetalert/js/sweetalert2.min.js"></script>
<script type="text/javascript" src="js/pages/sweet_alerts.js"></script>
<script type="text/javascript" src="{{URL::asset('vendors/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/switchery/js/switchery.min.js')}}"></script>
<!-- end of plugin scripts -->

<!--Page level scripts-->
<script type="text/javascript" src="{{URL::asset('js/pages/radio_checkbox.js')}}"></script>
<!-- global scripts animation-->
<script type="text/javascript" src="vendors/snabbt/js/snabbt.min.js"></script>
<script type="text/javascript" src="vendors/wow/js/wow.min.js"></script>

<!-- plugin scripts -->
<script type="text/javascript" src="{{URL::asset('vendors/tooltipster/js/tooltipster.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/tipso/js/tipso.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/pages/tooltips.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/pages/modals.js')}}"></script>

<!-- end of plugin scripts -->
<script>
    new WOW().init();
</script>
<script>
$(document).ready(function(){
    $('#joborders option[value="0"]').prop("disabled", true);
    $('#customers option[value="0"]').prop("disabled", true);
    $('#automobiles option[value="0"]').prop("disabled", true);
    var joborderID = 0, ctr = 0, selectedCtr = 0, currMileage = 0;

    $('#moveTo2').on('click', function(){
        selectedCtr = 0
        $('#table1 #tag').each(function(){
            if(this.checked == true){
                var tr = $(this).closest("tr").remove().clone();
                $(tr).insertBefore("#footer2");
                selectedCtr++;
            }
        });
        if(selectedCtr == 0) alert("You haven't selected any services and/or products.");
        getGrandTotal();
        getEstimatedTime();
        arrangeRows("#table2", "#footer2");
    });

    $('#moveTo1').on('click', function(){
        selectedCtr = 0
        $('#table2 #tag').each(function(){
            if(this.checked == true){
                var tr = $(this).closest("tr").remove().clone();
                $(tr).insertBefore("#footer1");
                selectedCtr++;
            }
        });
        if(selectedCtr == 0) alert("You haven't selected any services and/or products.");
        getGrandTotal();
        getEstimatedTime();
        arrangeRows("#table1", "#footer1");
    });

    function arrangeRows(tag, location){
        var temp, svcid;
        $(tag +' tr').each(function(){
            if($(this).attr("class") == "service"){
                temp = this.id;
                tr = $(this).remove().clone();
                $(tr).insertBefore(location);
                svcid = "svc" + temp;
                $(tag +' tr').each(function(){
                    if($(this).attr("class") == "product" && this.id == svcid){
                        tr = $(this).remove().clone();
                        $(tr).insertBefore(location);
                    }
                });
            }
        });
    }

    var min = null;
    /* SELECT RECORD via ESTIMATE ID SEARCH */
    $("#joborders").on("change", function () {
        var selectedID = $(this).val();
        joborderID = selectedID;
        showJobOrder();
        $('#currMileageMod').val("");
        $('#required').css('visibility', 'hidden');
        $('#modal-3').modal('show');
    });

    $('#btnConfirm').on('click', function(){
        var curr = $('#currMileageMod').val();
        if(curr == null || curr == "")
            $('#required').css('visibility', 'visible');
        else{
            $('#currMileage').html(curr);
            showJobOrder();
            $('#modal-3').modal('hide');
        }
    });

    $('#currMileageMod').on('keyup', function(e){
        if ($(this).val() < min 
            && e.keyCode !== 46 // keycode for delete
            && e.keyCode !== 8 // keycode for backspace
        ) {
        e.preventDefault();
        $(this).val(min);
        }
    });

    function showJobOrder(){
        $.ajax({
            type: "GET",
            url: "/addbackjob/"+joborderID+"/showJobOrder",
            dataType: "JSON",
            async: false,
            success:function(data){
                $('#joborders').val(data.joborder.JobOrderID).trigger('chosen:updated');
                $('#customers').val(data.automobile.CustomerID).trigger('chosen:updated');
                $('#automobiles').val(data.automobile.AutomobileID).trigger('chosen:updated');
                $('#customername').html($.trim(data.customer.fullname));
                $('#contactno').html(data.customer.ContactNo);
                $('#email').html(data.customer.EmailAddress);
                $('#pwd_sc_no').html(data.customer.PWD_SC_No);
                $('#address').html(data.customer.CompleteAddress);
                $('#plateno').html(data.automobile.PlateNo);
                $('#model').html(data.automobile.make_model);
                $('#chassisno').html(data.automobile.ChassisNo);
                $('#mileage').html(data.automobile.Mileage);
                $('#prevMileage').html(data.automobile.Mileage);
                $('#prevMileageMod').val(data.automobile.Mileage);
                $('#currMileageMod').attr('min', data.automobile.Mileage);
                min = data.automobile.Mileage;
                $('#color').html(data.automobile.Color);
                $('#transmission').html(data.automobile.Transmission);
                showJobOrderDetails(data);
            }
        });
    }

    function showJobOrderDetails(data){
        
        var svcCount = Object.keys(data.serviceperformed).length;
        var prodCount = Object.keys(data.productused).length;
        var pid, sid, ServiceID, ServiceName, ServicePerformedID, CategoryID, CategoryName, LaborCost, EstimatedTime, hasWarranty, WarrantyPeriod;
        var tbody = $("<tbody>");
        var cols = "";
        var newServiceRow;
        var newProductRow;
        for(var i = 0; i < svcCount; i++){
            sid = data.serviceperformed[i].ServicePerformedID;
            ServiceID = data.serviceperformed[i].ServiceID;
            ServiceName = data.serviceperformed[i].ServiceName;
            ServicePerformedID = data.serviceperformed[i].ServicePerformedID;
            CategoryID = data.serviceperformed[i].ServiceCategoryID;
            CategoryName = data.serviceperformed[i].ServiceCategoryName;
            LaborCost = data.serviceperformed[i].LaborCost;
            EstimatedTime = data.serviceperformed[i].EstimatedTime;
            WarrantyPeriod = data.serviceperformed[i].warrantyperiod;
            hasWarranty = data.serviceperformed[i].hasWarranty;
            if(!hasWarranty) ServiceName = "<del>" + ServiceName + "</del>";

            newServiceRow = $("<tr class='service' id='"+ ServiceID +"' name='"+ ServicePerformedID +"' data-servicecategoryid='"+ CategoryID +"'  data-servicecategoryname='"+ CategoryName +"'>");
            cols += '<td style="border-right:none !important"> <span style="color:red">Service:</span><br>'+ ServiceName +'<br><input type="hidden" id="'+ ServicePerformedID +'" name="serviceperformed[]" value="'+ ServicePerformedID +'"><input type="hidden" id="include" name="include[]" value="True"></td>';
            cols += '<td style="border-right:none !important"><a></a></td>';
            cols += '<td style="border-right:none !important"></td>';
            cols += '<td style="border-right:none !important"><input type="text" style="width:75px; text-align:right;" id="laborcost" name="labor" placeholder="Labor" class="form-control" value="'+ LaborCost +'" readonly></td>';
            cols += '<td  style="border-right:none !important"><input type="hidden" name="personnelperformed[]"><select id="personnelperformed" name="personnelperformed[]" class="form-control chzn-select" style="width:110px;">@foreach($mechanic as $id => $name)<option value="{{$id}}">{{$name}}</option> @endforeach</select></td>';
            cols += '<td style="border-right:none !important"><input type="hidden" style="width:60px;" id="unitprice" class="form-control" value="'+ LaborCost +'"></td>';
            cols += '<td style="border-right:none !important"><input type="text" style="width:80px;text-align: right"  id="totalprice" name="laborcost[]" placeholder=".00" class="form-control" value="'+ LaborCost +'" readonly></td>';
            if(!hasWarranty)
                cols += '<td style="border-left:none !important"><center><input class="service" style="-webkit-transform: scale(1.7);" data-serviceid="'+ ServiceID +'" id="tag" name="include[]" type="checkbox" value="True" data-toggle="tooltip" data-placement="top" title="Warranty expired on: '+WarrantyPeriod+'." data-trigger="hover" disabled ><button type="button" id="svc" name="'+ EstimatedTime +'" class="btnDel btn btn-danger hvr-float-shadow" style="display:none;"></button></td>';
            else
                cols += '<td style="border-left:none !important"><center><input class="service" style="-webkit-transform: scale(1.7);" data-serviceid="'+ ServiceID +'" id="tag" name="include[]" type="checkbox" value="True"data-toggle="tooltip" data-placement="top" title="This service is within warranty." data-trigger="hover"><button type="button" id="svc" name="'+ EstimatedTime +'" class="btnDel btn btn-danger hvr-float-shadow" style="display:none;"></button></td>';
                    
            newServiceRow.append(cols);
            tbody.append(newServiceRow);
            cols = "";
            for(var j = 0; j < prodCount; j++){
                pid = data.productused[j].ServicePerformedID;
                if(pid == sid){
                    var ProductID, ProductName, ProductUsedID, Quantity, Price, SubTotal;
                    ProductID = data.productused[j].ProductID;
                    ProductName = data.productused[j].fullproductname;
                    ProductUsedID = data.productused[j].ProductUsedID;
                    Quantity = data.productused[j].Quantity;
                    Price = data.productused[j].Price;
                    SubTotal = data.productused[j].SubTotal;
                    WarrantyPeriod = data.productused[j].warrantyperiod;
                    hasWarranty = data.productused[j].hasWarranty;
                    if(!hasWarranty) ProductName = "<del>" + ProductName + "</del>";

                    newProductRow = $("<tr class='product' data-productid='"+ ProductID +"' id='svc"+ ServiceID +"'>");
                    cols = "";
                    cols += '<td style="border-right:none !important"><input type="hidden" style="width:50px; text-align:right;" name="product[]" placeholder="" class="form-control" value="'+ ProductID +'"><input type="hidden" style="width:50px; text-align:right;" name="productused[]" placeholder="" class="form-control" value="'+ ProductUsedID +'"><input type="hidden" style="width:50px; text-align:right;" name="prodservperf[]" placeholder="" class="form-control" value="'+ ServicePerformedID +'"></td>';
                    if(!hasWarranty)
                        cols += '<td style="border-right:none !important"><input type="number" min="1" style="width:55px;text-align:center;" id="quantity" name="quantity[]" placeholder="Quantity" value="'+ Quantity +'" data-serviceid="'+ ServiceID +'" class="form-control" readonly></td>';
                    else
                        cols += '<td style="border-right:none !important"><input type="number" min="1" style="width:55px;text-align:center;" id="quantity" name="quantity[]" placeholder="Quantity" value="'+ Quantity +'" data-serviceid="'+ ServiceID +'" class="form-control"></td>';
                    cols += '<td style="border-right:none !important"><span style="color:red">Product:</span><br>'+ ProductName +'</td>';
                    cols += '<td style="border-right:none !important"><input type="hidden" style="width:50px; text-align:right;" placeholder="Labor" class="form-control"></td>';
                    cols += '<td style="border-right:none !important"><a></a></td>';
                    cols += '<td style="border-right:none !important"><input type="text" readonly style="width:60px; text-align: right" id="unitprice" name="unitprice[]" readonly placeholder=".00" value="'+ Price +'" class="form-control"></td>';
                    cols += '<td style="border-right:none !important"><input type="text" readonly style="width:80px;text-align: right" id="totalprice" name="totalprice[]" placeholder=".00" class="form-control" value="'+ SubTotal +'"></td>';
                    if(!hasWarranty)
                        cols += '<td style="border-left:none !important"><center><input class="product" style="-webkit-transform: scale(1.7);" data-serviceid="'+ ServiceID +'" id="tag" type="checkbox" value="true" data-toggle="tooltip" data-placement="top" title="Warranty expired on: '+WarrantyPeriod+'."  data-trigger="hover" disabled></center></td>';
                    else
                        cols += '<td style="border-left:none !important"><center><input class="product" style="-webkit-transform: scale(1.7);" data-serviceid="'+ ServiceID +'" id="tag" type="checkbox" value="true" data-toggle="tooltip" data-placement="top" title="This product is within warranty." data-trigger="hover"></center></td>';

                    newProductRow.append(cols);
                    tbody.append(newProductRow);
                    if (ctr != 1){ newProductRow = $("<tr>"); cols = ""; }
                    cols = "";
                }
            }
        }
        $('#table1').find('tbody').empty();
        $(tbody).insertBefore("#footer1");
        createChosen();
        
        $("table td input").bind({
            keyup: function() { getGrandTotal(); },
            mouseleave: function() { $(this).blur(); getGrandTotalNoQty(); },
            focusout: function() { getGrandTotalNoQty(); }
        });

        //getEstimatedTime();
        //getGrandTotal();
        //filterTags();
    }

    $("table.order-list").on("click", "#tag", function (event){
        var id = $(this).data('serviceid');
        if($(this).attr('class') == "service"){
            if(!(this.checked)){
                //deselect all products included in this service
                $('table tr td input[type=checkbox]').each( function() {
                    if ((this.id) == "tag" && $(this).data('serviceid') == id && $(this).attr('class') == "product") 
                        $(this).prop("checked", false);
                    if ((this.id) == "quantity" && $(this).data('serviceid') == id)
                        $(this).prop("readonly", "readonly");
                });
            }
            else{
                //select all products included in this service
                $('table tr td input[type=checkbox]').each( function() {
                    if ((this.id) == "tag" && $(this).data('serviceid') == id && $(this).attr('class') == "product" && this.disabled == false) 
                        $(this).prop("checked", true);
                    if ((this.id) == "quantity" && $(this).data('serviceid') == id)
                        $(this).prop("readonly", false);
                });
            }
        }
        else if($(this).attr('class') == "product"){
            if(!(this.checked)){
                var remaining = 1;
                //check kung mag-isa na lang ba siya
                $('table tr td input[type=checkbox]').each( function() {
                    if ((this.id) == "tag" && $(this).data('serviceid') == id && $(this).attr('class') == "product" && this.checked == true) 
                        remaining++;
                });
                if(remaining == 1){
                    $('table tr td input[type=checkbox]').each( function() {
                        if ((this.id) == "tag" && $(this).data('serviceid') == id && $(this).attr('class') == "service") 
                            $(this).prop("checked", false);
                    });
                }
            }
            else{
                //select the parent service
                $('table tr td input[type=checkbox]').each( function() {
                    if ((this.id) == "tag" && $(this).data('serviceid') == id && $(this).attr('class') == "service") 
                        $(this).prop("checked", true);
                });
            }
        }
    });

    function createChosen(){
        $('table td select').each(function(){
            if ($(this).attr('id') == 'personnelperformed'){ 
                $(this).chosen();
                $(this).prop("disabled", true);
                $("#personnelperformed option[value='0']").prop("disabled", true);
                $(this).trigger("chosen:updated");
            }
        });
    }

    function getGrandTotal(){
        grandTotal = 0;
        var qty, price, total, laborcost = 0, productsales = 0;
        $('#table2 td input').each(function() {
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
        $("#totalamountdue").html("PHP <span style='color:red;'>" + parseFloat(grandTotal).toFixed(2) + "</span> ");
        $('#totalamtdue').val(grandTotal);
    }

    function getGrandTotalNoQty(){
        grandTotal = 0;
        var qty, price, total, laborcost = 0, productsales = 0;
        $('#table2 td input').each(function() {
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
        $("#totalamountdue").html("PHP <span style='color:red;'>" + parseFloat(grandTotal).toFixed(2) + "</span> ");
        $('#totalamtdue').val(grandTotal);
    }

    function getEstimatedTime(){
        totalEstimatedTime = 0;
        var time, inHours, inMins;
        $('#table2 td button').each(function() {
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
                
                $('#customers').val(data.automobile.CustomerID).trigger('chosen:updated');
                $('#automobiles').val(data.joborder.AutomobileID).trigger('chosen:updated');
                $('#customername').html($.trim(data.customer.fullname));
                $('#contactno').html(data.customer.ContactNo);
                $('#email').html(data.customer.EmailAddress);
                $('#pwd_sc_no').html(data.customer.PWD_SC_No);
                $('#address').html(data.customer.CompleteAddress);
                $('#plateno').html(data.automobile.PlateNo);
                $('#model').html(data.automobile.Model);
                $('#chassisno').html(data.automobile.ChassisNo);
                $('#mileage').html(data.automobile.Mileage);
                $('#color').html(data.automobile.Color);
                $('#transmission').html(data.automobile.Transmission);

                var model = Object.keys(data.plates).length;
                if (model < 2){
                    modelID = parseInt(data.automobile.ModelID);
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
});
</script>
@stop