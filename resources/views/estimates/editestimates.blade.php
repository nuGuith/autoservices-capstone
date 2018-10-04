@extends('layout.master') <!-- Include Master Page -->
@section('Title','Edit Estimate') <!-- Page Title -->
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

        <!-- CONTENT -->
        <div id="content" class="bg-container">

            <header class="head">
                <div class="main-bar">
                    <div class="row" style = "height: 47px;">
                    <div class="col-6">
                        <h4 class="m-t-15">
                            <i class="fa fa-pencil"></i>&nbsp;
                            Edit Estimate
                        </h4>
                    </div>

                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right   ">
                            <li class="breadcrumb-item " >
                                <a href="/estimates">
                                    <i class="fa fa-file-text" data-pack="default" data-tags=""></i>
                                    &nbsp;Estimates
                                </a>
                            </li>
                            <li class="active breadcrumb-item">&nbsp;Edit Estimate</li>
                        </ol>
                    </div>

                    </div>
                </div>
            </header>
            
            <div class="outer">
                <div class="inner bg-container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card" >

                            <div class="card-block m-t-15">
                            

                            <!-- <div class="row m-t-15">
                                    
                                <div class="col-lg-6">
                                    <h5>Search Customer Name:</h5>
                                    <p>
                                        <p class="m-t-10">
                                        <select class="form-control  chzn-select" tabindex="2">
                                            <option disabled selected>Choose Customer Name</option>
                                            <option value="1">Xavier Tanguilan Eugenio</option>
                                        </select>
                                    </p>
                                </div>
                                <div class="col-lg-6 ">
                                    <h5>Search Plate No:</h5>
                                    <p>
                                        <p class="m-t-10">
                                        <select class="form-control  chzn-select" tabindex="2">
                                            <option disabled selected>Choose Plate No.</option>
                                            <option value="1">XTE 0202</option>
                                        </select>
                                    </p>
                                </div>                        
                            </div> -->


                            
                            <!--Start Customer Information -->                
                            <h4 class="m-t-10">Customer Information</h2>
                            <hr style="margin-top: 10px; border: 2px solid #a7dfcd">
                            

                            <!--Textfield: First Name, Middle Name, Last Name -->
                            <div class="row m-t-15">
                                    <div class="col-lg-4">
                                            <h5>First Name: <span style="color:red">*</span></h5>
                                            <p>
                                                <input id="fname" name="fname" type="text" placeholder="First Name" class="form-control m-t-10" value="{{$customer->firstname}}">
                                            </p>
                                        </div>
                                        <div class="col-lg-4">
                                            <h5>Middle Name:</h5>
                                            <p>
                                                <input id="mname" name="mname" type="text" placeholder="Middle Name" class="form-control m-t-10" value="{{$customer->middlename}}">
                                            </p>
                                        </div>
                                        <div class="col-lg-4 ">
                                            <h5>Last Name: <span style="color: red">*</span></h5>
                                            <p>
                                                <input id="lname" name="lname" type="text" placeholder="Last Name" class="form-control m-t-10" value="{{$customer->lastname}}">
                                            </p>
                                        </div>                        
                                </div>


                                <!--Textfield: Contact No, Email, Senior Citizen/PWD ID -->
                                <div class="row m-t-5">
                                    <div class="col-lg-4 ">
                                            <h5>Contact No: <span style="color:red">*</span></h5>
                                            <p>
                                                <input id="phones" name="contact" placeholder="(999) 999-9999" class="form-control m-t-10" type="text" data-inputmask='"mask": "(9999) 999-9999"' data-mask value="{{$customer->ContactNo}}" >
                                            </p>
                                        </div>
                                        <div class="col-lg-4">
                                            <h5>Email: <span style="color:red"></span></h5>
                                            <p>
                                                <input id="email" name="email" type="text" placeholder="john@gmail.com" class="date_mask form-control m-t-10" data-inputmask="'alias': 'email'" value="{{$customer->EmailAddress}}">
                                            </p>
                                        </div>
                                        <div class="col-lg-4 ">
                                            <h5>Senior Citizen/PWD ID: <span style="color: red"></span></h5>
                                            <p>
                                                <input id="id" name="id" type="text" placeholder="Senior Citizen/PWD ID" class="form-control m-t-10" value="{{$customer->PWD_SC_No}}">
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
                                                <input id="address" name="address" type="text" placeholder="Address" class=" form-control m-t-10" value="{{ $customer->CompleteAddress }}">
                                            </p>
                                        </div>                                                
                                </div>
                            <!--End Customer Information --> 


                            <!--Start Vehicle Information --> 
                            <h4>Vehicle Information</h2>
                            <hr style="margin-top: 10px; border: 2px solid #6699cc">


                            <!--Textfield: Plate No, Model, Chassis No, Mileage -->
                            <div class="row m-t-15">
                                    <div class="col-lg-3">
                                            <h5>Plate No.: <span style="color:red">*</span></h5>
                                            <p>
                                                <input id="plate" name="plate" type="text" placeholder="Plate No." class="form-control m-t-10" value="{{ $model->PlateNo }}">
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
                                                <input id="chassis" name="chassis" type="text" placeholder="Chassis No." maxlength="6" class="form-control m-t-10" value="{{ $model->ChassisNo }}">
                                            </p>
                                        </div>

                                        <div class="col-lg-3 ">
                                            <h5>Mileage.: <span style="color: red">*</span></h5>
                                                <div class="input-group">
                                                    <span class="input-group-addon m-t-10">
                                                        <i class="fa fa-dashboard"></i>
                                                    </span>
                                                    <input id="mileage" name="mileage" type="number" placeholder="Miles" class="form-control m-t-10" value="{{ $model->Mileage }}" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                                                </div>
                                        </div>                         
                                </div>

                                <!--Textfield: Assign Mechanic, Service Bay -->
                                <div class="row m-t-5">
                                    <div class="col-lg-3">
                                            <h5>Color: <span style="color: red">*</span></h5>
                                            <p>
                                                <input id="color" name="color" type="text" placeholder="Color"  class="form-control m-t-10" value="{{ $model->Color }}" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)">
                                            </p>
                                        </div>

                                        <div id="transwrapper" class="col-lg-3">
                                            <h5>Transmission: <span style="color:red">*</span></h5>
                                            <div class="row checkbox-rotate m-t-15">
                                            <input type="hidden" id="transmission" name="transmission" class="form-control m-t-10">
                                            <p >
                                                <label class="text-black"  style="padding-left: 45px;">
                                                    <input id="MT" type="checkbox" value="MT" style="-webkit-transform: scale(1.4);">
                                                    &nbsp;&nbsp;Manual 
                                                </label>

                                                <label class="text-black" style="padding-left: 45px;">
                                                    <input id="AT" type="checkbox" value="AT" style="-webkit-transform: scale(1.4);">
                                                    &nbsp;&nbsp;Automatic
                                                </label>
                                            </p>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <h5 style = "padding-bottom: 10px;">Estimated By: <span style="color: red">*</span></h5>
                                            <p id="personnelwrapper">
                                                {{ Form::select(
                                                    'personnels',
                                                    $personnels,
                                                    null,
                                                    array(
                                                    'class' => 'form-control chzn-select',
                                                    'id' => 'personnels',
                                                    'name' => 'personnelid')
                                                    ) 
                                                }}
                                            </p>
                                        </div>
                                        <div class="col-lg-3">
                                            <h5>Service Bay:</h5>
                                            <p class="m-t-10">
                                                {{ Form::select(
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
                                    </div>
                            <!--END VEHICLE INFORMATION -->




                        <!--START ESTIMATE-->
                        <h4 class="m-t-20">Estimate Details</h2>
                        <hr style="margin-top: 10px; border: 2px solid #ffb74d  ">
                            <!--Start Add Service and Product  -->
                                    <div class ="row m-t-10">
                                        <div class="col-lg-4 m-t-20">
                                            <h5>Service <span style="color:red">*</span></h5>
                                            <p class="m-t-10">
                                                {{ Form::select(
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

                                        <div class="col-lg-2 m-t-20">
                                            <h5>Labor Cost <span style="color:red"></span></h5>
                                            <input type="number" style="width:120px;" name="labor" id="labor" placeholder="Labor Cost" class="form-control m-t-10" readonly>
                                        </div>

                                        <div class="col-lg-4 m-t-20">
                                            <h5>Products <span style="color:red">*</span></h5>
                                            <p class="m-t-10">
                                                {{ Form::select(
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

                                        <div class="col-lg-2 m-t-40">
                                            <h5></h5>
                                            <p class="m-t-5">
                                            <button type="button" name="addRow" id="addRow" value="Add Row" class="btn btn-outline-success" ><i class="fa fa-plus text-green"></i>&nbsp;Add Items</button>
                                            </p>
                                        </div>
                                    </div>



                            <!--Start of estimate table-->
                            <table id="itemsTable" class="table list table-bordered display table-hover dataTable">
                                <thead>
                                        <br>
                                        <tr>
                                            <td style="width: 18%;">
                                                <h5>Service <span style="color: red">*</span></h5>
                                            </td>
                                            <td style="width: 10%;">
                                                <h5>Quantity <span style="color: red">*</span></h5>
                                            </td>
                                            <td style="width: 20%;">
                                                <h5>Product <span style="color: red"></span>
                                                </h5>
                                            </td>
                                            <td style="width: 10%;">
                                                <h5>Labor Cost <span style="color: red">*</span>
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
                                            <td style="width:3%;">
                                                <h5>Action<span style="color: red"></span>
                                                </h5>
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($serviceperformed as $sp)
                                        <tr class="service" id="{!!$sp->ServiceID!!}" name="{!!$sp->ServicePerformedID!!}">
                                            <td style="border-right:none !important">
                                                {!!$sp->ServiceName!!}<br>
                                            </td>
                                            <td  style="border-right:none !important">
                                                <input type="hidden" style="width:55px;" id="quantity" name="quantity" placeholder="" value="1" readonly class="form-control hidden">
                                            </td>
                                            <td style="border-right:none !important"><a></a></td>
                                            <td style="border-right:none !important">
                                                <input type="text" style="width:70px; text-align:right;" id="laborcost" name="labor" placeholder="Labor" class="form-control" value="{!!$sp->LaborCost!!}" readonly>
                                            </td>
                                            <td style="border-right:none !important">
                                                <input type="hidden" style="width:50px;" id="unitprice" name="unitprice" placeholder="" class="form-control" value="{!!$sp->LaborCost!!}">
                                            </td>
                                            <td style="border-right:none !important">
                                                <input type="text" readonly style="width:70px;text-align: right"  id="totalprice" name="price" placeholder=".00" class="form-control" value="{!!$sp->LaborCost!!}">
                                                </td>
                                            <td style="border-left:none !important">
                                                <center>
                                                    <button type="button" id="svc" name="{!!$sp->EstimatedTime!!}" data-serviceid="{!!$sp->ServiceID!!}" class="btnDel btn btn-danger hvr-float-shadow"><i class="fa fa-times text-white"></i></button>
                                                </center>
                                            </td>
                                        </tr>
                                            @foreach($productused as $pu)
                                                @if($sp->ServicePerformedID == $pu->ServicePerformedID)
                                                <tr class="product" id="svc{!!$sp->ServiceID!!}">
                                                    <td style="border-right:none !important"></td>
                                                    <td style="border-right:none !important">
                                                        <input type="number" min="1" style="width:55px;text-align:center;" id="quantity" name="quantity" placeholder="Quantity" value="{!!$pu->Quantity!!}" class="form-control" onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                                                    </td>
                                                    <td style="border-right:none !important">
                                                        {!!$pu->ProductName!!}
                                                    </td>
                                                    <td style="border-right:none !important">
                                                        <input type="hidden" style="width:50px; text-align:right;" name="labor" placeholder="Labor" class="form-control">
                                                    </td>
                                                    <td style="border-right:none !important">
                                                        <input type="text" readonly style="width:50px; text-align: right" id="unitprice" name="unitprice" readonly placeholder=".00" value="{!!$pu->Price!!}" class="form-control">
                                                    </td>
                                                    <td style="border-right:none !important">
                                                        <input type="text" readonly style="width:70px;text-align: right" id="totalprice" name="totalprice" placeholder=".00" class="form-control" value="{!!$pu->Price!!}">
                                                    </td>
                                                    <td style="border-left:none !important">
                                                        <center>
                                                            <button type="button" id="productid" name="{!!$sp->ServiceID!!}" class="btnDel btn btn-danger hvr-float-shadow" ><i class="fa fa-times text-white"></i></button>
                                                        </center>
                                                    </td>
                                                </tr>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </tbody>
                                     <!--Footer: Total Price-->
                                    <tfoot>
                                        <tr class="trrow">
                                            <th colspan="2" style="text-align: left;">Estimated Time: 
                                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <span id="estimated" style="text-align: center; color: blue"></span>
                                            </th>
                                            <th colspan="3" style="text-align: right;">
                                                <div class="cols">
                                                    <h5 style="padding-top:5px;">Total Product Cost:</h5>
                                                    <h5 style="padding-top:5px;">Total Labor Cost (Service):</h5>
                                                    <h5 style="padding-top:5px;">Grand Total: </h5>
                                                </div>
                                            </th>
                                            <th colspan="1" style="text-align:right">
                                                <div class="cols">
                                                    <h5 id="totalprodsales" style="padding-top:5px;">PHP&nbsp;&nbsp;&nbsp;<span style="color:red">&nbsp;&nbsp;&nbsp;0.00</span></h5>
                                                    <h5 id="totallaborcost" style="padding-top:5px;">PHP&nbsp;&nbsp;&nbsp;<span style="color:red">&nbsp;&nbsp;&nbsp;0.00</span></h5>
                                                    <h5 id="grandtotal" style="padding-top:5px;">PHP&nbsp;&nbsp;&nbsp;<span style="color:red">&nbsp;&nbsp;&nbsp;0.00</span></h5>
                                                </div>
                                            </th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table><br>


                            <!--Textfield: Complaints and Diagnosis -->
                                    <div class="row m-t-5">
                                        <div class="col-lg-6">
                                            <h5 style = "padding-bottom: 10px;">Complaints: <span style="color: red">*</span></h5>
                                            <textarea id="complaints" name="complaint" class="form-control" cols="30" rows="2">{{ $complaint->Problem }}</textarea>
                                        </div>
                                        <div class="col-lg-6">
                                            <h5 style = "padding-bottom: 10px;">Diagnosis: <span style="color: red"></span></h5>
                                            <textarea id="diagnosis" name="diagnosis" class="form-control" cols="30" rows="2">{{ $complaint->Diagnosis }}</textarea>
                                        </div>                              
                                    </div>
                       
                    <!--END OF ESTIMATE DETAILS -->
                    </div>



            <!--VIEW STEPS MODAL -->
            <div class="modal fade in " id="viewModal" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-info">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-info"></i>
                                    &nbsp;&nbsp;Service Steps 
                                </h4>                  
                            </div>


                        <div class="modal-body" style="padding-left: 47px;">
                                 <!--Content-->
                                 <div class="row m-t-5">  
                                    <div class="col-md-11 ">
                                        <h4>Steps: <span style="color: red">Change Oil</span></h4>
                                        <p class="m-t-15" style="padding-left: 20px;">
                                            1. Ikiss ni Xavier </br>
                                            2. Matapos ito. </br>
                                            3. Mapasa kay Vhel. </br>
                                            4. Para makiss si Xavier </br>
                                        </p>
                                    </div>
                                 </div>
                                 
                            </div>

                            <!--Button: Close, Save Changes -->
                            <div class="modal-footer">
                              <div class="examples transitions m-t-5">
                                <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- VIEW STEPS MODAL-->             


                             <!--Button: Back, Save-->
                             <div class="card-footer bg-black">
                               <div class="examples transitions m-t-5 pull-right">
                                    <button onclick="window.location='{{ url("/estimates") }}'" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn gray"  href="/estimates"><i class="fa fa-arrow-left">
                                    </i>&nbsp;Back</button>  

                                    <button class="btn btn-success  source success_clr m-l-0 hvr-float-shadow adv_cust_mod_btn text-white" style ="width: 80px;"  ><i class="fa fa-save text-white" ></i>&nbsp; Save</button>
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
<script type="text/javascript" src="{{URL::asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/components.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/custom.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/sweetalert/js/sweetalert2.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/pages/sweet_alerts.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/switchery/js/switchery.min.js')}}"></script>
<!-- end of plugin scripts -->

<!-- global scripts animation-->
<script type="text/javascript" src="{{URL::asset('vendors/snabbt/js/snabbt.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/wow/js/wow.min.js')}}"></script>
<!-- end of plugin scripts -->

<script>
    new WOW().init();
</script>



<!--SCRIPT FOR ESTIMATE-->
<script> 
$(document).ready(function () {

    var serviceCtr = 0;
    var deleted = [];


    $("#automobile_models option[value='0']").prop("disabled",true);
    $("#servicebays option[value='0']").prop("disabled",true);
    $("#personnels option[value='0']").prop("disabled",true);
    $("#services option[value='0']").prop("disabled",true);
    $("#products option[value='0']").prop("disabled",true);
    $('#products').prop('disabled', true);


    var estimate = {!! json_encode($estimate->toArray()) !!};
    var automobile = {!! json_encode($model->toArray()) !!};

    if((estimate.ServiceBayID > 0) || (estimate.ServiceBayID != null)){
        $("#servicebays").val(estimate.ServiceBayID).trigger("chosen:updated");
    }

    if(estimate.PersonnelID != null)
        $("#personnels").val(estimate.PersonnelID).trigger("chosen:updated");
    
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
        filterServices(automobile.ModelID);
    }

    getGrandTotal();
    getEstimatedTime();
    

    var clicked = false;
    $("#fname, #lname, #phones, #address, #plateno, #automobile_models, #chassisno, #mileage, #MT, #AT, #personnels").on({
        focusin: function() {
            if($(this).val() == "") $(this).css("border-color", "lightblue");
            else { $(this).css("border-color", "lightblue"); }
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

    
    function checkAllRequired(){
            var result = true;
            $("#fname, #lname, #phones, #address, #plateno, #automobile_models, #chassisno, #mileage, #transmission, #personnels").each(function() {
                if($(this).val() == null || $(this).val() == 0){ $(this).css("border", "1.5px solid #FF3839"); result = false };
                if(modelID < 1 && $(this).attr('id') == "automobile_models"){ $("#modelwrapper").css("border", "1.5px solid #FF3839").css("border-radius","7px").css("padding", "0px 0px 1px 1px"); }
                if($(this).val() == null || $(this).val() == 0 && $(this).attr('id') == "personnels"){ $("#personnelwrapper").css("border", "1.5px solid #FF3839").css("border-radius","7px").css("padding", "0px 0px 1px 1px"); }
            });
            if (result) valid = true;
            else valid = false;
            return result;
        }

    function confirmationModal(){
        var require = checkAllRequired();
        if (!require)
            alert("Fill out all the required fields first!");
        if (require) {
            if(serviceCtr < 1 || serviceCtr == null)
                alert("You haven't added any services or products! \nWe cannot process your request, sorry.")
            else{
                if (valid)
                    $("#confirmationModal").modal('show');
            }
        }
    }


    $("#btnProceed").on("click", function (e) {
        var formData = $('#estimateForm').serialize();
        alert(formData);

        if(routeID == 0 || routeID == null){
            $.ajax({
                type: "POST",
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                url: "/addestimates",
                data: formData,
                async: false,
                success: function(data) { 
                    alert(data);
                    routeID = 1;
                    redirect = data.newRoute;
                    window.location.href = redirect;
                },
                fail: function(data) {
                    alert("Failed to save data.");
                }
            });
        }
        else{
            window.location.href = redirect;
        }
    });

    $('table tr').each( function() {
        if ($(this).attr('class') == 'service'){
            serviceCtr++;
        }
    });

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

    $("table.list").on("click", ".btnDel", function (event) {
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

        serviceCtr--;
        if(isNaN(serviceCtr)) $("#automobile_models").prop("disabled", false).trigger("chosen:updated");
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
            serviceCtr--;
            $("#automobile_models").prop("disabled", false).trigger("chosen:updated");
        }
        
        getEstimatedTime();
        getGrandTotal();
    });

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
        document.getElementById("estimated").innerHTML = "Approx. " +totalEstimatedTime + " mins. <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(" + inHours + inMins + "mins.)";
        else
        document.getElementById("estimated").innerHTML = "No job to do.";
    }
    
    function filterServices(modelID){
        $.ajax({
            type: "GET",
            url: '/editestimates/'+ modelID +'/getServicePrice',
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
            }
        });
    }

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

});
</script>

@stop