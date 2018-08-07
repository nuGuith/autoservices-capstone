@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','Add Inspect Vehicle') <!-- Page Title -->
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

    <link type="text/css" rel="stylesheet" href="css/pages/portlet.css"/>

        <!-- CONTENT -->
        <div id="content" class="bg-container">

            <header class="head">
                <div class="main-bar">
                    <div class="row" style = "height: 47px;">
                    <div class="col-6">
                        <h4 class="m-t-15">
                            <i class="fa fa-pencil"></i>&nbsp;
                            Edit Inspect Vehicle
                        </h4>
                    </div>

                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right   ">
                            <li class="breadcrumb-item " >
                                <a href="/inspect">
                                    <i class="fa fa-search" data-pack="default" data-tags=""></i>
                                    Inspect Vehicle
                                </a>
                            </li>
                            <li class="active breadcrumb-item">&nbsp;Edit Inspect Vehicle</li>
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
                            

                            <!--Start Customer Information -->                
                            <h4>Customer Information</h2>
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
                                                <input id="phones" name="contact" placeholder="(999) 999-9999"" class="form-control m-t-10" type="text" data-inputmask='"mask": "(999) 999-9999"' data-mask>
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
                                                <input id="id" name="id" type="text" placeholder="Senior Citizen/PWD ID" class="form-control m-t-10">
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
                                                <input id="plate" name="plate" type="text" placeholder="Plate No." class="form-control m-t-10">
                                            </p>
                                        </div>
                                        <div class="col-lg-3">
                                            <h5>Model: <span style="color:red">*</span></h5>
                                            <p class="m-t-10">
                                                <select class="form-control  chzn-select" tabindex="2">
                                                    <option disabled selected>Choose Model</option>
                                                    <option value="Honda-City 2015-M">Honda-City 2015-MT</option>
                                                </select>
                                            </p>
                                        </div>
                                        <div class="col-lg-3 ">
                                           <h5>Chassis No.: <span style="color: red">*</span></h5>
                                            <p>
                                                <input id="chassis" name="chassis" type="text" placeholder="Chassis No." maxlength="6" class="form-control m-t-10">
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
                                    <div class="col-lg-6">
                                            <h5 style = "padding-bottom: 10px;">Assign Mechanic: <span style="color: red">*</span></h5>
                                                <select size="3" multiple class="form-control chzn-select" id="test_me_paddington" name="test_me_form" tabindex="8">
                                                    <div>
                                                    <option selected>Xavier</option>
                                                    <option>Pingu</option>
                                                    </div>
                                                </div>
                                                </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <h5>Service Bay: <span style="color:red">*</span></h5>
                                            <p class="m-t-10">
                                                <select class="form-control  chzn-select" tabindex="2">
                                                    <option disabled selected>Choose Service Bay</option>
                                                    <option value="1">1</option>
                                                </select>
                                            </p>
                                        </div>  
                                    </div>
                            <!--END VEHICLE INFORMATION -->


                        <!--START INSPECTION-->
                        <h4 class="m-t-20">Inspection Details</h2>
                        <hr style="margin-top: 10px; border: 2px solid #ffb74d  ">

                        <table class="table table-bordered table-hover dataTable no-footer" id="sample_6" role="grid" aria-describedby="sample_6_info">
                                <thead>
                                    <tr class="trrow">
                                        <th colspan="2">Inpection Items</th>
                                        <th style="text-align: center">Condition</th>
                                        <th style="text-align: center">Function</th>
                                        <th style="text-align: center">Inventory</th>
                                        <th style="padding-left: 20px;">Remarks</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        <!--Inspection Item-->
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">&nbsp;<b style="color:red; size: 10px">Open Door<b> </td>
                                            <td class="sorting_1">
                                                <!--List of Specific Item -->
                                                <ul style="list-style-type: none; padding-left: 1.2em;">
                                                  <li style="padding-bottom: 7px;">Weather Strip</li>
                                                  <li style="padding-bottom: 7px;">Door Lining</li>
                                                <ul>
                                            </td>
                                            <td>
                                                <!-- Checkbox: Condition -->
                                                <ul style="list-style-type: none;">
                                                 <li style="padding-bottom: 2px;">
                                                    <div class="checkboxmin box radio_Checkbox_size4">
                                                        <label>
                                                            <input type="checkbox">
                                                         </label>
                                                    </div>
                                                </li>
                                                <li style="padding-bottom: 2px;">
                                                    <div class="checkboxmin box radio_Checkbox_size4">
                                                        <label>
                                                            <input type="checkbox">
                                                         </label>
                                                    </div>
                                                </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <!--Checkbox: Function -->
                                                <ul style="list-style-type: none;">
                                                 <li style="padding-bottom: 2px;">
                                                    <div class="checkboxmin box radio_Checkbox_size4">
                                                        <label>
                                                            <input type="checkbox">
                                                         </label>
                                                    </div>
                                                </li>
                                                <li style="padding-bottom: 2px;">
                                                    <div class="checkboxmin box radio_Checkbox_size4">
                                                        <label>
                                                            <input type="checkbox">
                                                         </label>
                                                    </div>
                                                </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <!--Checkbox: Inventory -->
                                                <ul style="list-style-type: none;">
                                                 <li style="padding-bottom: 2px;">
                                                    <div class="checkboxmin box radio_Checkbox_size4">
                                                        <label>
                                                            <input type="checkbox">
                                                         </label>
                                                    </div>
                                                </li>
                                                <li style="padding-bottom: 2px;">
                                                    <div class="checkboxmin box radio_Checkbox_size4">
                                                        <label>
                                                            <input type="checkbox">
                                                         </label>
                                                    </div>
                                                </li>
                                                </ul>
                                            </td>
                                            <td>
                                            <!--Remarks per Items-->
                                            <ul style="list-style-type: none; padding-left: 0px;">
                                             <li style="padding-bottom: 7px;" >
                                                <div class ="col-sm-10">
                                                    <input id="remark" name="remark" type="text" placeholder="Remarks" class="form-control form-control-sm">
                                                </div> 
                                            </li>
                                            <li style="padding-bottom: 7px; padding-left: 0em;">
                                                <div class ="col-sm-10">
                                                    <input id="remark" name="remark" type="text" placeholder="Remarks" class="form-control form-control-sm">
                                                </div> 
                                            </li>
                                            </ul>                   
                                            </td>
                                        </tr>
                                        <!--END PER INSPECTION RED ITEMS -->

                                        <!--START NEW INSPECTION RED ITEMS - to show how it looks like -->
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">&nbsp;<b style="color:red; size: 10px">Open Door<b> </td>
                                            <td class="sorting_1">
                                                <ul style="list-style-type: none; padding-left: 1.2em;">
                                                  <li style="padding-bottom: 7px;">Weather Strip</li>
                                                  <li style="padding-bottom: 7px;">Door Lining</li>
                                                <ul>
                                            </td>
                                            <td>
                                                <ul style="list-style-type: none;">
                                                 <li style="padding-bottom: 2px;">
                                                    <div class="checkboxmin box radio_Checkbox_size4">
                                                        <label>
                                                            <input type="checkbox">
                                                         </label>
                                                    </div>
                                                </li>
                                                <li style="padding-bottom: 2px;">
                                                    <div class="checkboxmin box radio_Checkbox_size4">
                                                        <label>
                                                            <input type="checkbox">
                                                         </label>
                                                    </div>
                                                </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul style="list-style-type: none;">
                                                 <li style="padding-bottom: 2px;">
                                                    <div class="checkboxmin box radio_Checkbox_size4">
                                                        <label>
                                                            <input type="checkbox">
                                                         </label>
                                                    </div>
                                                </li>
                                                <li style="padding-bottom: 2px;">
                                                    <div class="checkboxmin box radio_Checkbox_size4">
                                                        <label>
                                                            <input type="checkbox">
                                                         </label>
                                                    </div>
                                                </li>
                                                </ul>
                                            </td>
                                            <td>
                                                <ul style="list-style-type: none;">
                                                 <li style="padding-bottom: 2px;">
                                                    <div class="checkboxmin box radio_Checkbox_size4">
                                                        <label>
                                                            <input type="checkbox">
                                                         </label>
                                                    </div>
                                                </li>
                                                <li style="padding-bottom: 2px;">
                                                    <div class="checkboxmin box radio_Checkbox_size4">
                                                        <label>
                                                            <input type="checkbox">
                                                         </label>
                                                    </div>
                                                </li>
                                                </ul>
                                            </td>
                                            <td>
                                            <ul style="list-style-type: none; padding-left: 0px;">
                                             <li style="padding-bottom: 7px;" >
                                                <div class ="col-sm-10">
                                                    <input id="remark" name="remark" type="text" placeholder="Remarks" class="form-control form-control-sm">
                                                </div> 
                                            </li>
                                            <li style="padding-bottom: 7px; padding-left: 0em;">
                                                <div class ="col-sm-10">
                                                    <input id="remark" name="remark" type="text" placeholder="Remarks" class="form-control form-control-sm">
                                                </div> 
                                            </li>
                                            </ul>                
                                                
                                            </td>
                                        </tr>
                                            <!--END PER INSPECTION RED ITEMS -->
                                    </tbody>
                                </table>
                            <!--END OF INPECTION TABLE -->


                            <!--Textfield: Remarks -->
                                <div class="row m-t-20">
                                    <div class="col-lg-12">
                                            <h5 style = "padding-bottom: 10px;">Remarks: <span style="color: red"></span></h5>
                                                <textarea id="remark3" class="form-control" cols="30" rows="2"></textarea>
                                        </div>                               
                                </div>
                            <!--END OF INSPECTION DETAILS -->
                             </div>

                             <!--Button: Back, SAVe-->
                             <div class="card-footer bg-black disabled">
                               <div class="examples transitions m-t-5 pull-right">
                                    <button onclick="window.location='{{ url("/inspect") }}'" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn gray"  href="/vehicletype"><i class="fa fa-arrow-left" >
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
<script type="text/javascript" src="js/components.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="vendors/sweetalert/js/sweetalert2.min.js"></script>
<script type="text/javascript" src="js/pages/sweet_alerts.js"></script>
<!-- end of plugin scripts -->

<!-- global scripts animation-->
<script type="text/javascript" src="vendors/snabbt/js/snabbt.min.js"></script>
<script type="text/javascript" src="vendors/wow/js/wow.min.js"></script>
<!-- end of plugin scripts -->
<script>
    new WOW().init();
</script>


@stop