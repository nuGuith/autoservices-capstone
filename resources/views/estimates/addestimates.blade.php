@extends('layout.master') <!-- Include Master Page -->
@section('Title','Add Estimate') <!-- Page Title -->
@section('content')
    

    <link type="text/css" rel="stylesheet" href="vendors/sweetalert/css/sweetalert2.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/pages/sweet_alert.css"/>

    <link type="text/css" rel="stylesheet" href="vendors/animate/css/animate.min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/hover/css/hover-min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/wow/css/animate.css"/>

    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/modal/css/component.css') }}"/>
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/animate/css/animate.min.css" />

    <link type="text/css" rel="stylesheet" href="vendors/fileinput/css/fileinput.min.css"/>
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('vendors/bootstrap-switch/css/bootstrap-switch.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{URL::asset('vendors/switchery/css/switchery.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{URL::asset('vendors/radio_css/css/radiobox.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{URL::asset('vendors/checkbox_css/css/checkbox.min.css')}}" />
    <!--End of Plugin styles-->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/pages/radio_checkbox.css')}}" />

    <!-- end of plugin styles -->
    <link type="text/css" rel="stylesheet" href="css/pages/animations.css"/>
    <link type="text/css" rel="stylesheet" href="css/pages/portlet.css"/>

        <!-- CONTENT -->
        <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row" style = "height: 47px;">
                        <div class="col-6">
                            <h4 class="m-t-15">
                                <i class="fa fa-plus"></i>&nbsp;
                                Add Estimate
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
                                <li class="active breadcrumb-item">&nbsp;Add Estimate</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </header>
            
            <div class="outer">
                <div class="inner bg-container">
                    <div class="row">
                        <div class="col-lg-12">
                            {!! Form::open(array('id' => 'estimateForm', 'url' => '/addestimates', 'action' => 'AddEstimatesController@store', 'method' => 'POST')) !!}
                            <div class="card" >
                                <div class="card-block m-t-15">
                                    <div class="row m-t-15">    
                                        <div class="col-lg-6">
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
                                                        'name' => 'customerid'
                                                        )
                                                    ) 
                                                }}
                                            </p>
                                        </div>
                                        <div id="selectPlateNo" class="col-lg-6 ">
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
                                                        'name' => 'automobileid'
                                                        )
                                                    ) 
                                                }}
                                            </p>
                                        </div>                        
                                    </div>
                            
                                    <!--Start Customer Information -->                
                                    <h4 class="m-t-10">Customer Information</h2>
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
                                        <div class="col-lg-1  m-t-15">
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
                                <h4>Vehicle Information</h2>
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
                                            <input id="chassisno" name="chassisno" type="text" placeholder="Chassis No." maxlength="30" class="form-control m-t-10">
                                        </p>
                                    </div>
                                    <div class="col-lg-3 ">
                                        <h5>Mileage.: <span style="color: red">*</span></h5>
                                        <div class="input-group">
                                            <span class="input-group-addon m-t-10">
                                                <i class="fa fa-dashboard"></i>
                                            </span>
                                            <input id="mileage" name="mileage" type="text" placeholder="Miles" class="form-control m-t-10">
                                        </div>
                                    </div>                         
                                </div>

                                <!--Textfield: Assign Mechanic, Service Bay -->
                                <div class="row m-t-5">
                                    <div class="col-lg-3">
                                            <h5>Color: <span style="color: red"></span></h5>
                                            <p>
                                                <input id="color" name="color" type="text" placeholder="Color"  class="form-control m-t-10">
                                            </p>
                                        </div>
                                        <div class="col-lg-3">
                                            <h5>Transmission: <span style="color:red">*</span></h5>
                                            <div class="row checkbox-rotate m-t-15">
                                                <label class="text-black"  style="padding-left: 45px;">
                                                    <input id="MT" type="checkbox" value="MT">
                                                    &nbsp;&nbsp;Manual 
                                                </label>

                                                <label class="text-black" style="padding-left: 45px;">
                                                    <input id="AT" type="checkbox" value="AT">
                                                    &nbsp;&nbsp;Automatic 
                                                </label>
                                            </div>
                                        </div>  
                                        <div class="col-lg-3" style="padding-bottom: 10px;">
                                            <h5 style = "padding-bottom: 10px;">Estimated by: <span style="color: red">*</span></h5>
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
                                        </div>
                                        <div class="col-lg-3 m-t-2">
                                            <h5 style="padding-bottom: 10px;">Service Bay: <span style="color:red"></span></h5>
                                            <p>
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
                                            <h5>Labor <span style="color:red"></span></h5>
                                            <input type="text" style="width:120px;" name="labor" id="labor" placeholder="Labor" class="form-control m-t-10" readonly>
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
                                                    <h5>Items <span style="color: red"></span>
                                                    </h5>
                                                </td>
                                                <td style="width: 10%;">
                                                    <h5>Labor <span style="color: red">*</span>
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
                                                <td style="width: 3%;">
                                                    <h5>Include<span style="color: red"></span>
                                                    </h5>
                                                </td>
                                            </tr>
                                        </thead>
                                        <!--Footer: Total Price-->
                                        <tfoot id="footer">
                                            <tr class="trrow">
                                                <th colspan="2" style="text-align: left;">Estimated Time:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                    <span style="text-align: center; color: blue"></span>
                                                </th>
                                                <th colspan="3" style="text-align: right;">Grand Total Price (PhP):  </th>
                                                <th id="grandtotal" style="text-align: right; color: red">0.00</th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <br>

                                    <!--Textfield: Complaint -->
                                    <div class="row m-t-5">
                                        <div class="col-lg-6">
                                            <h5 style = "padding-bottom: 10px;">Complaints: <span style="color: red"></span></h5>
                                            <textarea id="complaints" class="form-control" cols="30" rows="2"></textarea>
                                        </div>
                                        <div class="col-lg-6">
                                            <h5 style = "padding-bottom: 10px;">Diagnosis: <span style="color: red"></span></h5>
                                            <textarea id="diagnosis" class="form-control" cols="30" rows="2"></textarea>
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
                                                <h4 class="modal-title text-white">
                                                    <i class="fa fa-info"></i>
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
                            {{ Form::close() }}             

                                <!--Button: Back, Save-->
                                <div class="card-footer bg-black">
                                    <div class="examples transitions m-t-5 pull-right">
                                        <button onclick="window.location='{{ url("/estimates") }}'" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn gray"  href="/estimates">
                                            <i class="fa fa-arrow-left"></i>
                                            &nbsp;Back
                                        </button>  
                                        <button class="btn btn-success m-l-0 hvr-float-shadow" style="width: 85px;" onclick="validate()">
                                            <i class="fa fa-save text-white" ></i>
                                            &nbsp; Save
                                        </button>
                                    </div>
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

<!-- global scripts animation-->
<script type="text/javascript" src="{{URL::asset('vendors/snabbt/js/snabbt.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/wow/js/wow.min.js')}}"></script>
<!-- end of plugin scripts -->

<script>
    new WOW().init();
</script>

<script>
$(document).on('submit', 'form.estimateForm', function() {
    var validation = validate();
    if (validation){
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
    }
});
</script>

<script>
function validate(){
    return false;
}
</script>

<!--SCRIPT FOR ESTIMATE TABLE -->
<script> 
$(document).ready(function () {

    $("#estimates option[value='0']").prop("disabled",true);
    $("#inspections option[value='0']").prop("disabled",true);
    $("#customers option[value='0']").prop("disabled",true);
    $("#automobiles option[value='0']").prop("disabled",true);
    $("#automobile_models option[value='0']").prop("disabled",true);
    $("#servicebays option[value='0']").prop("disabled",true);
    $("#personnels option[value='0']").prop("disabled",true);
    $("#discounts option[value='0']").prop("disabled",true);
    $("#services option[value='0']").prop("disabled",true);
    $("#products option[value='0']").prop("disabled",true);
    $("#addRow").prop("disabled",true);
    $('#products').prop('disabled', true);

    var servicePrices = [];
    var selectProduct = [];
    var selectedService= "";
    var selectService;
    var i, j, ctr, qtyCtr = 1;
    var modelID = null;
    var grandTotal;


    /* SELECT RECORD via CUSTOMER NAME SEARCH */
    $("#customers").change(function () {
        var selectedID = $(this).val();
        $.ajax({
            type: "GET",
            url: "/addestimates/"+selectedID+"/showCustomer",
            dataType: "JSON",
            async: false,
            success:function(data){
                $('#customers').val(data.customer.CustomerID).trigger('chosen:updated');
                $('#automobiles').val(data.automobile.AutomobileID).trigger('chosen:updated');
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
                $('#automobile_models').val(data.automobile.ModelID).trigger('chosen:updated');
                var model = Object.keys(data.plates).length;
                if (model < 2){
                    modelID = parseInt(data.automobile.ModelID);
                    filterServices();
                }
            }
        });

                
        $.ajax({
            type: "GET",
            url: "/addestimates/"+selectedID+"/filterPlateNo",
            dataType: "JSON",
            success:function(data){
                var count = Object.keys(data.plates).length;
                if (count>1){
                    $('#automobiles').empty().append('<option value = 0> Please select a Plate Number</option>');
                    $('#automobiles').trigger("chosen:updated");
                    var options = '';
                    resetFieldsIfhasMultipleRecs();
                    for(var i = 0; i < count; i++){
                        options += '<option value ="' + data.plates[i].automobileid + '">' + data.plates[i].plateno +'</option>';
                    }
                    $('#automobiles').append(options);
                    $("#automobiles option[value='0']").prop("disabled", true, "selected", false);
                    $('#automobiles').trigger("chosen:updated");
                }
            }
        });
        
    });

    // this function resets the Vehicle Information fields if multiple vehicle records are found.
    function resetFieldsIfhasMultipleRecs(){
        $('#plateno').val(null);
        $('#chassisno').val(null);
        $('#mileage').val(null);
        $('#color').val(null);
        $('#automobile_models').val(0).trigger('chosen:updated');
        alert("This customer has more than one registered car, \nplease select using the Plate Number for the Vehicle Information. \nOr you can just register a new one! \n\nThank you.");
        $('#selectPlateNo').addClass('focused_input');
    }

    /* SELECT RECORD via PLATE NUMBER SEARCH */
    $("#automobiles").change(function () {
        var selectedID = $(this).val();
        $.ajax({
            type: "GET",
            url: "/addestimates/"+selectedID+"/showAutomobile",
            dataType: "JSON",
            success:function(data){
                $('#customers').val(data.customer.CustomerID).trigger('chosen:updated');
                $('#automobiles').val(data.automobile.AutomobileID).trigger('chosen:updated');
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
                $('#automobile_models').val(data.automobile.ModelID).trigger('chosen:updated');
                modelID = parseInt(data.automobile.ModelID);
                $('#labor').val(null);
                $('#labor').removeClass('focused_input');
                $('#products').val(null).trigger('chosen:updated');
                $('#products').prop("disabled", true);
                $('#addRow').prop('disabled', true);
                filterServices();
                $('#AT').prop("checked", true);
                $('#MT').prop("checked", true);               
            }
        });
    });	
    
    /** CHOOSE SERVICE BAY **/
    $("#servicebays").change(function () {
		var selectedID = $(this).val();
	});

    /** CHOOSE PERSONNEL **/
    $("#personnel").change(function () {
		var selectedID = $(this).val();
    });
    
    /* CHOOSE MODEL TO FILTER SERVICE PRICE*/
    $("#automobile_models").change(function(){
        var selectedID = $(this).val();
        modelID = selectedID;

        filterServices();
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
            }
        });
    }


    /* CHOOSE SERVICE TO FILTER THE PRODUCTS */
    $("#services").change(function () {
        var selectedID = $(this).val();
        selectedService = selectedID;

        if (modelID < 1){
            alert('Please choose the model of your vehicle first as service prices vary from vehicle to vehicle. \n\nThank You.');
            $('#services').prop('selectedIndex', 0);
            $('#services').trigger("chosen:updated");
        }

        if (modelID > 0){
            $('#products').empty().append('<option value=0 >Choose a Product</option>');
            $('#products').trigger("chosen:updated");
            var select = $('#products');
            var labor = $("#services :selected").data("price");
            $('#labor').val(labor);
            $('#labor').addClass("focused_input");
            $('#products').prop('disabled', false);

            $.ajax({
                type: "GET",
                url: "/addestimates/"+selectedID+"/getProducts",
                dataType: "JSON",
                async: false,
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

    // ADD ITEMS Button
    var newProductRow = $("<tr/>");
    $("#addRow").on("click", function (event) {
        var counter = 0;
        var cols = "";

        $.ajax({
            type: "GET",
            url: "/addestimates/"+selectedService+"/getServiceDetails",
            dataType: "JSON",
            success:function(data){
                var newServiceRow = $("<tr id='id'>");
                cols += '<td style="border-right:none !important"> <span style="color:red">Service:</span><br>'+ data.service.servicename +'</td>';
                cols += '<td  style="border-right:none !important"><input type="hidden" style="width:55px;" id="id" name="quantity" placeholder="" value="'+ selectedService +'" readonly class="form-control hidden"></td>';
                cols += '<td style="border-right:none !important"></td>';
                var pr = data.service.price;
                pr = parseFloat(pr).toFixed(2);
                cols += '<td style="border-right:none !important"><input type="text" style="width:50px;" name="labor" placeholder="Labor" class="form-control" value="'+ pr +'"></td>';
                cols += '<td style="border-right:none !important"><input type="hidden" style="width:50px;" id="unitprice" name="unitprice" placeholder="" class="form-control"></td>';
                cols += '<td style="border-right:none !important"><input type="text" readonly style="width:50px;text-align: right"  name="price" placeholder=".00" class="form-control" value="'+ pr +'"></td>';
                cols += '<td style="border-left:none !important"><center><button type="button" id=" " data-serviceid="'+selectedService+'" class="btnDel btn btn-danger hvr-float-shadow" ><i class="fa fa-trash text-white"></i></button></center></td>';
                $('#labor').removeClass("focused_input");
                newServiceRow.append(cols);
                $(newServiceRow).insertBefore("#footer");
                $("#services option[value='"+selectedService+"']").prop("disabled", true);
                $("#services").trigger("chosen:updated");
                selectedService = null;
                cols = "";
                grandTotal += parseFloat(pr).toFixed(2);
            }
        });
        
        
        counter++;
        for(var k = 0; k < ctr; k++){
            $.ajax({
                type: "GET",
                url: "/addestimates/"+ selectProduct[k] +"/getProductDetails",
                dataType: "JSON",
                success: function (data) {
                    var newProductRow = $("<tr>");
                    cols = "";
                    cols += '<td style="border-right:none !important"></td>';
                    cols += '<td style="border-right:none !important"><input type="text" style="width:55px;" id="quantity'+qtyCtr+'" name="quantity" placeholder="Quantity" class="form-control hidden"></td>';
                    cols += '<td style="border-right:none !important">'+ data.product.productname +'</td>';
                    cols += '<td style="border-right:none !important"><input type="hidden" style="width:50px;" name="labor" placeholder="Labor" class="form-control"></td>';
                    var pr = data.product.price;
                    pr = parseFloat(pr).toFixed(2);
                    cols += '<td style="border-right:none !important"><input type="text" readonly style="width:50px; text-align: right" id="unitprice" name="unitprice" readonly placeholder=".00" value='+ pr +' class="form-control"></td>';
                    cols += '<td id="total" style="border-right:none !important"><input type="text" readonly style="width:50px;text-align: right" id="totalprice" name="totalprice " placeholder=".00" class="form-control" value="'+ pr +'"></td>';
                    cols += '<td style="border-left:none !important"><center><input style="-webkit-transform: scale(1.7);" data-serviceid="'+selectedService+'" id="chkInclude" type="checkbox" checked value="'+selectProduct[k]+'"></center></td>';
                    newProductRow.append(cols);
                    $(newProductRow).insertBefore("#footer");
                    if (ctr != 1){
                        newProductRow = $("<tr>");
                        cols = "";
                    }
                    cols = "";
                    counter++;
                    $("#quantity"+qtyCtr).on("keyup", function(){
                        var qty = $(this).val();
                        qty = parseFloat(qty).toFixed(2);
                        if (qty == null || qty == 1){
                            qty = 1;
                        }
                        var unitprice = parseFloat(pr).toFixed(2);
                        total = parseFloat(qty * unitprice).toFixed(2);
                        grandTotal += parseFloat(total).toFixed(2);
                        alert("Grand total: " + grandTotal);
                        alert("Qty: "+qty + " * Unitprice: " +unitprice + " Total: " + total);
                        /* var tdTotal = $(this).parent().children("#total");
                        tdTotal.childNodes[1].value = total; */
                        document.getElementById("grandtotal").innerHTML = grandTotal;
                        getGrandTotal();
                    });
                    qtyCtr++;

                    $("#chkInclude").on("click", function() {
                        if(this.checked) {
                            alert("i'm checked, u know it");
                        }
                        if(!(this.checked)) {
                            alert("oh no, now i'm not.");
                        }
                    });

                    $("table.list").on("click", ".btnDel", function (event) {
                        var svcID = $(this).data('serviceid');
                        $("#itemsTable tr").each(function(){
                            var prodSvcID = $(this).closest("#chkInclude").data('serviceid');
                            alert(prodSvcID);
                        });
                        $(this).closest("tr").remove();
                        getGrandTotal();
                    });
                    //grandTotal += pr;
                    getGrandTotal();
                }
            });
        }
        
        document.getElementById("grandtotal").innerHTML = grandTotal;
        $("#problem").val(null);
        $("#services").val(0).trigger("chosen:updated");
        $("#products").val(null).trigger("chosen:updated");
        $("#addRow").prop("disabled", true);
        $("#products").prop("disabled", true);
    });

    function getGrandTotal(){
        var table = document.getElementById("itemsTable");
        var k, d, temp;
        var i = table.rows.length;

        /* for (k = 1; k <= i; k++) {
            for (d = 0; d < 6; d++) {
                if (d == 2) {
                    temp = parseFloat(document.getElementById("itemsTable").rows[k].cells[2].childNodes[1].value);
                }
                if (d == 5) {
                    temp = temp * parseFloat(document.getElementById("itemsTable").rows[k].cells[5].childNodes[1].value);
                }
                //grandTotal += temp;
            }
            document.getElementById("itemsTable").rows[k].cells[6].childNodes[1].value = temp;
            document.getElementById("grandtotal").value = temp;
        } */
    }

    //Button: Delete Row
    $("table.list").on("click", ".btnDel", function (event) {
        $(this).closest("tr").remove();       
      
    });

    $("table.list").on("click", ".btnDel", function (event) {
        $(this).closest("tr").remove();
        var svcID = $(this).data('serviceid');
        alert(svcID);
        $("tr#product").each(function() {
            var prodSvcID = $(this).data('serviceid');
            alert(prodSvcID);   
            if(prodSvcID == svcID)
                $(this).closest("tr").remove();
        });
        /* if (this.checked) {
            $("#checkProduct").each(function() {
                var prodSvcID = $(this).data('serviceid').val();
                if(prodSvcID)
                this.checked=true;
            });
        } 
        else {
            $("#checkProduct").each(function() {
                this.checked=false;
            });
        } */
    });

});
</script>

@stop