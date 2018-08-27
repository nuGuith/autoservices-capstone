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
                            <i class="fa fa-plus"></i>&nbsp;
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
                                            <h5>Middle Name: <span style="color:red">*</span></h5>
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
                                                <input id="phones" name="contact" placeholder="(999) 999-9999" class="form-control m-t-10" type="text" data-inputmask='"mask": "(999) 999-9999"' data-mask value="{{$customer->ContactNo}}" >
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
                                                <input id="plate" name="plate" type="text" placeholder="Plate No." class="form-control m-t-10" value="{{ $automobile->PlateNo }}">
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
                                                <input id="chassis" name="chassis" type="text" placeholder="Chassis No." maxlength="6" class="form-control m-t-10" value="{{ $automobile->ChassisNo }}">
                                            </p>
                                        </div>

                                        <div class="col-lg-3 ">
                                            <h5>Mileage.: <span style="color: red">*</span></h5>
                                                <div class="input-group">
                                                    <span class="input-group-addon m-t-10">
                                                        <i class="fa fa-dashboard"></i>
                                                    </span>
                                                    <input id="mileage" name="mileage" type="text" placeholder="Miles" class="form-control m-t-10" value="{{ $automobile->Mileage }}">
                                                </div>
                                        </div>                         
                                </div>

                                <!--Textfield: Assign Mechanic, Service Bay -->
                                <div class="row m-t-5">
                                    <div class="col-lg-3">
                                            <h5>Color: <span style="color: red">*</span></h5>
                                            <p>
                                                <input id="color" name="color" type="text" placeholder="Color"  class="form-control m-t-10" value="{{ $automobile->Color }}">
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
                                            <h5>Service Bay: <span style="color:red">*</span></h5>
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
                                            <h5>Labor <span style="color:red"></span></h5>
                                            <input type="number" style="width:120px;" name="labor" id="labor" placeholder="Labor" class="form-control m-t-10" readonly>
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


                            <!--Textfield: Complaints and Diagnosis -->
                                    <div class="row m-t-5">
                                        <div class="col-lg-6">
                                            <h5 style = "padding-bottom: 10px;">Complaints: <span style="color: red"></span></h5>
                                            <textarea id="complaints" name="complaint" class="form-control" cols="30" rows="2"></textarea>
                                        </div>
                                        <div class="col-lg-6">
                                            <h5 style = "padding-bottom: 10px;">Diagnosis: <span style="color: red"></span></h5>
                                            <textarea id="diagnosis" name="diagnosis" class="form-control" cols="30" rows="2"></textarea>
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

                                    <button class="btn btn-success  source success_clr m-l-0 hvr-float-shadow adv_cust_mod_btn" style ="width: 80px;"  ><i class="fa fa-save text-white" ></i>&nbsp; Save</button>
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



<!--SCRIPT FOR ESTIMATE TABLE -->
<script> 
$(document).ready(function () {


    $("#automobile_models option[value='0']").prop("disabled",true);
    $("#servicebays option[value='0']").prop("disabled",true);
    $("#personnels option[value='0']").prop("disabled",true);
    $("#services option[value='0']").prop("disabled",true);
    $("#products option[value='0']").prop("disabled",true);
    $('#products').prop('disabled', true);

    //TO ADD PRODUCT ROW
    $("table.order-list").on("click", ".ibtnAdd", function (event) {
        var newRow = $("<tr>");
        var cols = "";

        //to display class chz-select property
        $(".chzn-select").chosen();

        //to move product to third column
        cols += '<td></td>'; 
        cols += '<td></td>';
        cols += '<td></td>';

        //Column: Product
        cols += '<td><select class="form-control chzn-select" id="product" tabindex="" name="product"><option disabled selected>Choose Product</option><option value="Dunlop 1.5mL">Dunlop 1.5mL</option></select></td>';
        //Column: Quantity
        cols += '<td><input type="text" class="form-control" name="quantity" placeholder="Quantity"/></td>';
        //Column: Price
        cols += '<td><input type="text" readonly class="form-control" name="price" placeholder="Price"/></td>';
        //Column: Button: Delete Product ROw
        cols += '<td><input type="button" class="ibtnDelp btn  btn-danger btn-md hvr-float-shadow" value ="X"></td>';
        //Column: for delete button of service


        //add new product row to the table
        newRow.append(cols);
        $("table.order-list").append(newRow);
      
    });

    //Button: Delete Product Row
    $("table.order-list").on("click", ".ibtnDelp", function (event) {
        $(this).closest("tr").remove();       
      
    });

    //Button Delete Service Row
    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
      
    });

});


</script>

<!--SCRIPT FOR DELETE ROW INSIDE JOB ORDER TABLE -->
<script> 
$(document).ready(function () {
    
    //Button: Delete Row
    $("table.list").on("click", ".btnDel", function (event) {
        $(this).closest("tr").remove();       
      
    });

});
</script>

@stop