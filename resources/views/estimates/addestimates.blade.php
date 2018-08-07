@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','Add Estimate') <!-- Page Title -->
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
                            <div class="card" >

                            <div class="card-block m-t-15">
                            

                            <div class="row m-t-15">
                                    <div class="col-lg-4">
                                            <h5>Search Customer Id:</h5>
                                            <p>
                                                <p class="m-t-10">
                                                <select class="form-control  chzn-select" tabindex="2">
                                                    <option disabled selected>Choose Inspect Id</option>
                                                    <option value="1">IS0001</option>
                                                </select>
                                            </p>
                                        </div>
                                        <div class="col-lg-4">
                                            <h5>Search Customer Name:</h5>
                                            <p>
                                                <p class="m-t-10">
                                                <select class="form-control  chzn-select" tabindex="2">
                                                    <option disabled selected>Choose Customer Name</option>
                                                    <option value="1">Xavier Tanguilan Eugenio</option>
                                                </select>
                                            </p>
                                        </div>
                                        <div class="col-lg-4 ">
                                            <h5>Search Plate No:</h5>
                                            <p>
                                                <p class="m-t-10">
                                                <select class="form-control  chzn-select" tabindex="2">
                                                    <option disabled selected>Choose Plate No.</option>
                                                    <option value="1">XTE 0202</option>
                                                </select>
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


                        <!--START ESTIMATE-->
                        <h4 class="m-t-20">Estimate Details</h2>
                        <hr style="margin-top: 10px; border: 2px solid #ffb74d  ">

                        
                        <!--Start Add Estimate  -->
                            <div class ="row">

                                <table id="myTable" class=" table order-list responsive" >
                                    <thead>
                                        <br>
                                        <tr>
                                            <!-- <td><h5>Problem</h5></td> -->
                                            <td><h5>Service <span style="color:red">*</span></h5></td>
                                            <td style="width: 30px;"><h5>Labor <span style="color:red">*</span></h5></td>
                                            <td><h5>Product <span style="color:red">*</span></h5></td>
                                            <td style="width: 30px;"><h5>Quantity <span style="color:red">*</span></h5></td>
                                            <td style="width: 30px;"><h5>Price</h5></td>
                                            <td style="width: 10px;"></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- <td>
                                                <textarea id="text4"  type="text" name="problem" class="form-control" cols="5" rows="1" placeholder="Problem"></textarea>                                               
                                            </td> -->
                                            <td>                                            
                                                <select class="form-control chzn-select" id="service" name="service"  tabindex="2">
                                                    <option disabled selected>Choose Service</option>
                                                    <option value="Change Oil">Change Oil</option>
                                                </select>   
                                            </td>
                                            <td>
                                                <input type="text" style="width:90px;" name="labor" placeholder="Labor" class="form-control">
                                            </td>
                                            <td>
                                                <select class="form-control chzn-select" id="product" name="product"  tabindex="2">
                                                    <option disabled selected>Choose Product</option>
                                                    <option value="Change Oil">Dunlop 1.5mL</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" style="width:90px;" name="quantity" placeholder="Quantity" class="form-control">
                                            </td>
                                            <td>
                                                <input type="text" style="width:90px;" name="price" placeholder="Price" class="form-control" value="" readonly>
                                            </td>
                                            <td>
                                                <button type="button" id="addrowproduct" class="ibtnAdd btn btn-info hvr-float-shadow" ><i class="fa fa-plus text-white"></i></button>
                                            </td> 
                                            <td>
                                                <i class="deleteRow "></i>
                                            </td>

                                            <td>
                                                <i class="deleteRow "></i>
                                            </td>
                                            </tr>
                                        </tbody>
                                    <tfoot>
                                        <tr role= "row">
                                        <td colspan="7" style="text-align: right;">
                                        <div class="examples transitions m-t-5">
                                                <button type="button" id="addrow" value="Add Row" class="btn btn-warning hvr-float-shadow" ><i class="fa fa-plus text-white"></i>&nbsp; Add Service </button>
                                             </div>
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
                       
                            <!--END OF INSPECTION DETAILS -->
                             </div>

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

<!--SCRIPT FOR ESTIMATE TABLE -->
<script> 
$(document).ready(function () {


// TO ADD SERVICE ROW
$("#addrow").on("click", function () {

        var newRow = $("<tr>");
        var cols = "";

        //to display class chz-select property
        $(".chzn-select").chosen();
        
        //Column: Problem--open if it is really necessary
        // cols += '<td><textarea type="text" class="form-control" cols="5" rows="1" name="problem" placeholder="Problem"/></td>';

        //Column: Service
        cols += '<td><select class="form-control chzn-select" id="service" tabindex="" name="service"><option disabled selected>Choose Service</option><option value="Change Oil">Change Oil</option></select></td>';
        //Column: Labor
        cols += '<td><input type="text" class="form-control" name="labor" placeholder="Labor"/></td>';
        //Column: Product
        cols += '<td><select class="form-control chzn-select" id="product" tabindex="" name="product"><option disabled selected>Choose Product</option><option value="Dunlop 1.5mL">Dunlop 1.5mL</option></select></td>';
        //Column: Quantity
        cols += '<td><input type="text" class="form-control" name="quatity" placeholder="Quantity"/></td>';
        //Column: Price
        cols += '<td><input type="text" class="form-control" name="price" placeholder="Price"/></td>';
        //Column: Button - To add product
        cols += '<td><button type="button" id="addrowproduct" readonly class="ibtnAdd btn btn-info hvr-float-shadow" ><i class="fa fa-plus text-white"></i></button></td>';
        //Column: Buton - To delete SERVICE
        cols += '<td><input type="button" class="ibtnDel btn  btn-warning btn-md hvr-float-shadow" value ="X"/></td>';

        //add new service row to the table
        newRow.append(cols);
        $("table.order-list").append(newRow);
        
    });

    //TO ADD PRODUCT ROW
    $("table.order-list").on("click", ".ibtnAdd", function (event) {
        var newRow = $("<tr>");
        var cols = "";

        //to display class chz-select property
        $(".chzn-select").chosen();

        //to move product to third column
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
        cols += '<td></td>';


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

@stop