@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','Add Estimate') <!-- Page Title -->
@section('content')
    

    <link type="text/css" rel="stylesheet" href="vendors/sweetalert/css/sweetalert2.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/pages/sweet_alert.css"/>

    <link type="text/css" rel="stylesheet" href="vendors/animate/css/animate.min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/hover/css/hover-min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/wow/css/animate.css"/>

    <link type="text/css" rel="stylesheet" href="{{URL::asset('vendors/modal/css/component.css')}}"/>
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/animate/css/animate.min.css" />

    <link type="text/css" rel="stylesheet" href="vendors/fileinput/css/fileinput.min.css"/>
    
        <link type="text/css" rel="stylesheet" href="vendors/bootstrap-switch/css/bootstrap-switch.min.css" />
    <link type="text/css" rel="stylesheet" href="vendors/switchery/css/switchery.min.css" />
    <link type="text/css" rel="stylesheet" href="vendors/radio_css/css/radiobox.min.css" />
    <link type="text/css" rel="stylesheet" href="vendors/checkbox_css/css/checkbox.min.css" />

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
                            <li class="breadcrumb-item">
                                <a href="/">
                                    <i class="fa fa-home"></i>
                                        Dashboard
                                </a>
                            </li>
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
                                                'name' => 'customerid')
	                                        ) 
	                                    }}
                                    </p>
                                </div>
                                <div class="col-lg-6 ">
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
                                                <input id="phones" name="contact" placeholder="(999) 999-9999" class="form-control m-t-10" type="text" data-inputmask='"mask": "0(999) 999-9999"' data-mask>
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
                                            <h5>Mileage: <span style="color: red">*</span></h5>
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
                                            <div class="checkbox-rotate m-t-20">
                                            <label class="text-black">
                                                <input type="checkbox" id="transmission" value="M/T">
                                                &nbsp;&nbsp;Manual 
                                            </label>

                                            <label class="text-black m-l-20">
                                                <input type="checkbox" id="transmission" value="A/T">
                                                &nbsp;&nbsp;Automatic 
                                            </label>
                                            </div>
                                        </div>  

                                        <div class="col-lg-3">
                                            <h5 style = "padding-bottom: 10px;">Assign Mechanic: <span style="color: red">*</span></h5>
                                                {{ Form::select(
                                                    'personnel',
                                                    $personnels,
                                                    null,
                                                    array(
                                                        'class' => 'form-control chzn-select',
                                                        'id' => 'personnels',
                                                        'name' => 'personnelid')
                                                    ) 
                                                }}
                                        </div>
                                        <div class="col-lg-3">
                                            <h5>Service Bay: <span style="color:red"></span></h5>
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
                            <div class ="row">

                                <table id="myTable" class=" table order-list responsive" style="border-color: white" rules="rows" >
                                    <thead>
                                        <br>
                                        <tr>
                                            <td><h5>Service <span style="color:red">*</span></h5></td>
                                            <td style="width: 20px;"><h5>Labor <span style="color:red"></span></h5></td>
                                            <td><h5>Product <span style="color:red">*</span></h5></td>            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p class="col-lg-15">
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
                                            </td>
                                            <td>
                                                <input type="text" style="width:120px;" name="labor" id="labor" placeholder="Labor" class="form-control" readonly>
                                            </td>
                                            <td>
                                                <p class="col-lg-15">
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
                                            </td>
                                            <td>
                                                <button type="button" name="addRow" id="addrow" value="Add Row" class="btn btn-success hvr-float-shadow" ><i class="fa fa-plus text-white"></i>&nbsp;Add Items</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>



                            <!--Start of estimate table-->
                        <table id="itemsTable" class="table list table-bordered display table-hover dataTable">
                                <thead>
                                    <tr class="trrow">
                                        <th style="width: 20% !important">Service</th>
                                        <th style="width: 23% !important">Product</th>
                                        <th>Labor</th>
                                        <th>Unit Price</th>
                                        <th>Quantity</th>
                                        <th>Total Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                    
                                     <!--Footer: Total Price-->
                                    <tfoot>
                                        <tr class="trrow">
                                            <th colspan="2" style="text-align: left;">Estimated Time: 
                                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="text-align: center; color: blue"></span>
                                            </th>
                                            <th colspan="3" style="text-align: right;">Grand Total Price (Php): </th>
                                            <th style="text-align: center; color: red"></th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table><br>


                            <!--Textfield: Problem -->
                                <div class="row m-t-5">
                                    <div class="col-lg-12">
                                            <h5 style = "padding-bottom: 10px;">Problems: <span style="color: red"></span></h5>
                                                <textarea id="remark3" class="form-control" cols="30" rows="2"></textarea>
                                        </div>                               
                                </div>
                       
                    <!--END OF INSPECTION DETAILS -->
                    </div>



            <!--VIEW STEPS MODAL -->
            <div class="modal fade in " id="viewModal" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-info">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-info"></i>
                                            &nbsp;&nbsp;Service Steps </h4>                  
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

                             <!--Button: Back, SAVe-->
                             <div class="card-footer bg-black disabled">
                               <div class="examples transitions m-t-5 pull-right">
                                    <button onclick="window.location='{{ url("/estimates") }}'" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn gray"  href="/estimates"><i class="fa fa-arrow-left">
                                    </i>&nbsp;Back</button>  

                                    <button class="btn btn-success  source success_clr m-l-0 hvr-float-shadow adv_cust_mod_btn" style ="width: 80px;"><i class="fa fa-save text-white" ></i>&nbsp; Save</button>
                                </div>
                            </div>
                        {{ Form::close() }}
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
$(document).on('submit', 'form.estimateForm', function() {
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


<!--SCRIPT FOR ESTIMATE TABLE -->
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
    $("#addRow").prop("disabled",true);

    var servicePrices = [];
    var selectProduct = [];
    var selectService;
    var i, j, ctr;


    /* SELECT RECORD via CUSTOMER NAME SEARCH */
    $("#customers").change(function () {
        var selectedID = $(this).val();
        $.ajax({
            type: "GET",
            url: "/addestimates/"+selectedID+"/showCustomer",
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
                $('#automobile_models').val(data.automobile.ModelID).trigger('chosen:updated');
            }
        });
        
    });

    /* SELECT RECORD via PLATE NUMBER SEARCH */
    $("#automobiles").change(function () {
        var selectedID = $(this).val();
        $.ajax({
            type: "GET",
            url: "/addestimates/"+selectedID+"/showAutomobile",
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
                $('#automobile_models').val(data.automobile.ModelID).trigger('chosen:updated');               
            }
        });
    });	
    
    /** CHOOSE SERVICE BAY **/
    $("#servicebays").change(function () {
		var selectedID = $(this).val();
	});

    /* CHOOSE MODEL TO FILTER SERVICE PRICE*/
    $("#automobile_models").change(function(){
        var selectedID = $(this).val();
        $('#services').empty().append('<option value = 0> Choose a Service</option>');
        $('#services').trigger("chosen:updated");

        $.ajax({
            type: "GET",
            url: "addestimates/"+selectedID+"/getServicePrice",
            dataType: "JSON",
            success:function(data){
                var options = '';
                var price ='';
                var count = Object.keys(data.serviceprices).length;
                for(var i = 0; i < count; i++)
                {
                    options += '<option value ="' + data.serviceprices[i].serviceid + '" data-price="' + data.serviceprices[i].price + '">' + data.serviceprices[i].servicename +'</option>';
                }
                $('#services').append(options);
                $("#services option[value='0']").prop("disabled", true, "selected", false);
                $('#services').trigger("chosen:updated");
            }
        });
    });


    /* CHOOSE SERVICE TO FILTER THE PRODUCTS */
    $("#services").change(function () {
        var selectedID = $(this).val();
        $('#products').empty().append('<option value=0 >Choose a Product</option>');
        $('#products').trigger("chosen:updated");
        var select = $('#products');
        var labor = $("#services :selected").data("price");
        $('#labor').val(labor);

        $.ajax({
            type: "GET",
            url: "/addestimates/"+selectedID+"/getProducts",
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

    $("#addRow").on("click", function (event) {
        alert("Eyy");
        var counter = 0;
        var newServiceRow = $("<tr>");
        var newProductRow = $("<tr>");
        var cols = "";

        newServiceRow.append(cols);
        $("#itemsTable").append(newServiceRow);
        counter++;

        for(var k = 0; k < ctr; k++){
            cols = "";
            cols += '<td style="border-right:none !important">'+ selectProduct[k] +'</td>';
            cols += '<td style="border-right:none !important"><input type="text" style="width:55px;" name="quantity" placeholder="Quantity" class="form-control hidden"></td>';
            cols += '<td style="border-right:none !important"> Semisynthetic Oil </td>';
            cols += '<td style="border-right:none !important"><input type="hidden" style="width:50px;" name="labor" placeholder="Labor" class="form-control"></td>';
            //cols += '<td style="border-right:none !important"><a></a></td>';
            cols += '<td style="border-right:none !important"><input type="text" readonly style="width:50px; text-align: right" name="unitprice" readonly placeholder=".00" class="form-control"></td>';
            cols += '<td style="border-right:none !important"><input type="text" readonly style="width:50px;text-align: right" name="totalprice " placeholder=".00" class="form-control"></td>';
            cols += '<td style="border-left:none !important"><button type="button" id=" " class="btnDel btn btn-danger hvr-float-shadow" ><i class="fa fa-trash text-white"></i></button></td>';
            newProductRow.append(cols);
            $("#itemsTable").append(newProductRow);
            counter++;
            var newProductRow = $("<tr>");
            var cols = "";
        }
    });
    
    //Button: Delete Row
    $("table.list").on("click", ".btnDel", function (event) {
        $(this).closest("tr").remove();       
      
    });

});
</script>

@stop