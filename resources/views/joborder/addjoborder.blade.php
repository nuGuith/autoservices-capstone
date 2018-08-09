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
                            <div class="card" >

                            <div class="card-block m-t-15">
                            
                            <!-- Seacrh by: Inspection/Estimate, Inspection Id/Estimate Id, Customer Name, Plate No -->
                            <div class="row m-t-15">
                                    <div class="col-lg-3">
                                            <!--Serch by Inspection/Estimate-->
                                            <h5>Search by:</h5>
                                            <p>
                                                <p class="m-t-10">
                                                <select class="form-control hide_search" tabindex="2" id="search" onchange="searchChange(this);">
                                                    <option disabled selected>Choose Search by</option>
                                                    <option value="Inspection Id">Inspection Id</option>
                                                    </option>
                                                    <option value="Estimate Id">Estimate Id</option>
                                                </select>
                                            </p>
                                        </div>
                                        <!--Serch by Inpection Id/Estimate Id -->
                                        <div class="col-lg-3">
                                            <h5>Search <a id="by"></a></h5>
                                            <p>
                                                <p class="m-t-10">
                                                <select class="form-control chzn-select" tabindex="2">
                                                    <option disabled selected>Choose <a></a></option>
                                                    <option value="1">id</option>
                                                </select>
                                                {{ Form::select(
                                                    'id',
                                                    $estimateids,
                                                    null,
                                                    array(
                                                    'class' => 'form-control',
                                                    'id' => 'id',
                                                    'name' => 'estimateids')
                                                    ) 
                                                }}
                                            </p>
                                        </div>
                                        <!--Serch by Cutomer Name -->
                                        <div class="col-lg-3">
                                            <h5>Search Customer Name:</h5>
                                            <p>
                                                <p class="m-t-10">
                                                <select class="form-control  chzn-select" tabindex="2">
                                                    <option disabled selected>Choose Customer Name</option>
                                                    <option value="1">Xavier Tanguilan Eugenio</option>
                                                </select>
                                            </p>
                                        </div>
                                        <!--Search by Customer Plate No.-->
                                        <div class="col-lg-3 ">
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
                                                    <input id="mileage" name="mileage" type="text" placeholder="km" class="form-control m-t-10">
                                                </div>
                                        </div>                         
                                </div>

                            <!--END VEHICLE INFORMATION -->


                        <!--START JOB ORDER DETAILS-->
                        <h4 class="m-t-20">Job Order Details</h2>
                        <hr style="margin-top: 10px; border: 2px solid #ffb74d  ">

                        <!--Select Button: Service Bay, Discount-->
                        <div class="row m-t-15">
                           <div class="col-lg-6">
                                <h5>Service Bay: <span style="color:red">*</span></h5>
                                <p class="m-t-10">
                                    <select class="form-control  chzn-select" tabindex="2">
                                        <option disabled selected>Choose Service Bay</option>
                                        <option value="">1</option>
                                    </select>
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <h5>Discount: <span style="color:red"></span></h5>
                                <p class="m-t-10">
                                    <select class="form-control  chzn-select" tabindex="2">
                                        <option disabled selected>Choose Discount</option>
                                        <option value="">Senior Citizen</option>
                                        <option value="">PWD</option>
                                    </select>
                                </p>
                            </div>                                                    
                        </div>


                        <!--Select Button: Service, Proodcut, Promo, Package-->
                        <div class="row m-t-15">
                            <div class="col-lg-3">
                                <h5>Search Service: <span style="color:red"></span></h5>
                                <p class="m-t-10">
                                    <select class="form-control  chzn-select" tabindex="2">
                                        <option disabled selected>Choose Service</option>
                                        <option value="">Change Oil</option>
                                    </select>
                                </p>
                            </div>
                            <div class="col-lg-3">
                                <h5>Search Product: <span style="color:red"></span></h5>
                                <p class="m-t-10">
                                    <select class="form-control  chzn-select" tabindex="2">
                                        <option disabled selected>Choose Product</option>
                                        <option value="">Dunlop 1.5mL</option>
                                    </select>
                                </p>
                            </div>
                            <div class="col-lg-3">
                                <h5>Search Promo: <span style="color:red"></span></h5>
                                <p class="m-t-10">
                                    <select class="form-control  chzn-select" tabindex="2">
                                        <option disabled selected>Choose Promo</option>
                                        <option value="">Summer Promo</option>
                                    </select>
                                </p>
                            </div>
                            <div class="col-lg-3">
                                <h5>Search Package: <span style="color:red"></span></h5>
                                <p class="m-t-10">
                                    <select class="form-control  chzn-select" tabindex="2">
                                        <option disabled selected>Choose Package</option>
                                        <option value="">Summer Package</option>
                                    </select>
                                </p>
                            </div>
                                                      
                        </div>


                        <!--Start Job Order Table -->
                            <div class ="row m-t-10">
                                <table class="table order-list table-bordered display nowrap table-hover dataTable" >
                                    <thead>
                                        <br>
                                        <tr >
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
                                    <tbody >
                                        <!--Example: for SERVICE-->
                                            <!--Hidden Field: Quantity, Unit Price -->
                                        <tr >
                                            <td style="border-right:none !important">
                                                <input type="hidden" style="width:70px;" name=quantity" placeholder="" readonly class="form-control hidden">
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
                                                <input type="hidden" style="width:70px;" name="unitprice" placeholder="" class="form-control">
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
                                           <tr >
                                            <td style="border-right:none !important">
                                                <input type="text" style="width:70px;" name=quantity" placeholder="Quantity" class="form-control">
                                            </td>   
                                            <td style="border-right:none !important">  
                                                Dumlop 1.5mL
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
                                           <tr >
                                            <td style="border-right:none !important">
                                                <input type="hidden" style="width:70px;" name=quantity" placeholder="Quantity" class="form-control">
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
                                                <h5><span style="color:blue">3750</span>
                                                </h5>
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

                             <!--Button: Back, Save-->
                             <div class="card-footer bg-black disabled">
                               <div class="examples transitions m-t-5 pull-right">
                                    <button onclick="window.location='{{ url("/joborder") }}'" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn gray"  href="/joborder"><i class="fa fa-arrow-left">
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

<!--SCRIPT FOR DELETE ROW INSIDE JOB ORDER TABLE -->
<script> 
$(document).ready(function () {
    
    //Button: Delete Row
    $("table.order-list").on("click", ".btnDel", function (event) {
        $(this).closest("tr").remove();       
      
    });

});
</script>

<!--SCRIPT CHOOSE SEARCH BY- will display to next field-->
<script type="text/javascript">
 function searchChange(selectObj) {
   var selectIndex=selectObj.selectedIndex;
   var selectValue=selectObj.options[selectIndex].text;
   var by=document.getElementById("by");
   by.innerHTML=selectValue;
 }
</script>

@stop