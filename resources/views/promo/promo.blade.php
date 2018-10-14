@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','Promo') <!-- Page Title -->
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
    <!-- <link type="text/css" rel="stylesheet" href="css/pages/advanced_components.css"/> -->

    <style type="text/css">
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
        },
        
        #promoform{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%)
        }
    </style>

    <!-- CONTENT -->
    <div id="content" class="bg-container">
        <header class="head">
            <div class="main-bar">
                <div class="row" style = "height: 47px;">
                    <div class="col-6">
                        <h4 class="m-t-15">
                            <i class="fa fa-bookmark"></i>
                            Promo
                        </h4>
                    </div>
                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right">
                            <li class="breadcrumb-item " >
                                <a href="/promo">
                                    <i class="fa fa-bookmark" data-pack="default" data-tags=""></i>
                                    Promo
                                </a>
                            </li>
                            <!-- <li class="active breadcrumb-item">Calendar</li> -->
                        </ol>
                    </div>
                </div>
            </div>
        </header>
        <div class="outer">
            <div class="inner bg-container">
                <div class="card">
                    <div class="card-header bg-dark">
                        <div class="btn-group">
                            <!--ADD BUTTON MODAL-->
                            <a  id="editable_table_new" class=" btn btn-raised btn-default hvr-pulse-grow adv_cust_mod_btn" href="/addpromo">
                                <i class="fa fa-plus-square"></i>
                                &nbsp;  Add Promo                                   
                            </a>
                        </div>
                    </div>
                    <div class="card-block m-t-35" id="user_body">
                        <div class="table-toolbar">
                            <div class="btn-group">
                                <div class="btn-group float-right users_grid_tools">
                                        <div class="tools"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <table class="table table-bordered table-hover table-advance dataTable no-footer" id="editable_table" role="grid">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 18%;"><b>Promo</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 35%;"><b>Product and Services</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 20%;"><b>Warranty Details</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 10%;"><b>Price</b></th>
                                        <th style="width: 15%;" class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" ><b>Actions</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pack as $cb)
                                        @if($cb->isActive == 1)
                                            <tr role="row" class="even">
                                                <!-- <td hidden>{{$cb->PromoID}}</td> -->
                                                <td>{{$cb->PromoName}}</td>                                    
                                                <td class="center">
                                                    <b>Services:</b>
                                                    <ul>
                                                        @foreach($sr as $ser)
                                                            @if($ser->PromoID == $cb->PromoID)
                                                                <li>{{$ser->ServiceName}}</li>
                                                            @endif
                                                        @endforeach   
                                                    </ul>
                                                    <b>Products:</b>
                                                    <ul>
                                                        @foreach($pr as $prod)
                                                            @if($prod->PromoID == $cb->PromoID)
                                                                <li>{{ $prod->BrandName }} - {{$prod->ProductName}} - {{$prod->Size}} {{$prod->Unit}} - {{$prod->Quantity}}pc(s)</li>
                                                            @endif
                                                        @endforeach 
                                                    </ul>
                                                    <b>Free Items:</b>
                                                    <ul style="padding-left: 1.2em;">
                                                        @foreach($fr as $fre)
                                                            @if($fre->PromoID == $cb->PromoID)
                                                                <li>{{$fre->ItemName}}  - {{$fre->Description}}</li>
                                                            @endif
                                                        @endforeach 
                                                    </ul>
                                                </td>
                                                <td>
                                                    <?php
                                                        $duration = $cb->WarrantyDuration;
                                                        $mileage = $cb->WarrantyMileage;

                                                        if(($duration != 0 || $duration != null)&&($mileage != 0 || $mileage != null))
                                                            echo $cb->WarrantyDuration . " " . $cb->WarrantyDurationMode . "/" . $cb->WarrantyMileage . "km";
                                                        elseif(($duration != 0 || $duration != null)&&($mileage == 0 || $mileage == null))
                                                            echo $cb->WarrantyDuration . " " . $cb->WarrantyDurationMode;
                                                        elseif(($duration == 0 || $duration == null)&&($mileage != 0 || $mileage != null))
                                                            echo $cb->WarrantyMileage ."km";
                                                        else
                                                            echo("N/A");
                                                    ?>
                                                </td>
                                                <td>Php {{$cb->Price}}</td>
                                                <td>
                                                    <!--EDIT BUTTON-->
                                                    <button name="{{{$cb->PromoID}}}" onclick="ret(this.name)" onclick="window.location.href='/editpackage'"class="btn btn-success hvr-float-shadow adv_cust_mod_btn tipso_bounceIn" data-background="#3CB371" data-color="white" data-tipso="Edit" data-toggle="modal" data-href="#responsive" href="#editModal"><i class="fa fa-pencil text-white"></i>
                                                    </button>
                                                     <!--DELETE BUTTON-->
                                                    <button name = '{{{$cb->PromoID}}}' class="btn btn-danger hvr-float-shadow warning confirm tipso_bounceIn" onclick="del(this.name);" data-toggle="modal" data-href="#responsive" href="#deleteModal" data-background="#FA8072" data-color="white" data-tipso="Delete"><i class="fa fa-trash text-white"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
        </div>
        <!-- /.inner -->
    </div>
    <!-- /.outer -->
<!--END CONTENT -->

    <!-- EDIT MODAL -->
    <div class="modal fade in " id="editModal" tabindex="-2" role="dialog" aria-hidden="false">
        <form id="promoForm">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="width: 980px;">
                    <div class="modal-header bg-primary">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title text-white">
                            <i class="fa fa-plus"></i>
                            &nbsp;Edit Promo
                        </h4>
                    </div>
                    <div class="modal-body">
                        <h4>&nbsp;&nbsp;Promo Information:</h4>
                        <div class ="col-md-12">
                            <div class="row m-t-10">
                                <div class="col-lg-6 m-t-10">
                                    <div class="card">
                                        <div class="card-header bg-white">
                                            <ul class="nav nav-tabs card-header-tabs float-left">
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#tab1" data-toggle="tab">Products</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#tab2" data-toggle="tab">Services</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#tab3" data-toggle="tab">Free Items</a>
                                                </li>                   
                                            </ul>
                                        </div>
                                        <div class="card-block">
                                            <div class="tab-content m-t-15">
                                            <!--PRODUCT TAB-->  
                                            <div class="tab-pane active" id="tab1">
                                                <table class="table  table-bordered table-hover table-advance dataTable no-footer" id="producttab1" role="grid">
                                                    <tr style="background-color: #f5f5f5">
                                                        <th>#</th>
                                                        <th>Product</th>
                                                        <th>Description</th>
                                                        <th><b>Price</b></th>
                                                        <th style="width: 5%;">Select</th>
                                                    </tr>
                                                </table>
                                                <div class="tab tab-btn">
                                                    <button class="btn btn-info hvr-float-shadow adv_cust_mod_btn m-t-5" style = "left: 360px;" onclick="prodtab1_To_tab2();"><i class="fa fa-arrow-right" ></i></button>
                                                </div>
                                            </div>
                                            <!--END PRODUCT TAB--> 
                                            <!--SERVICE TAB--> 
                                            <div class="tab-pane" id="tab2">
                                                <table class="table table-bordered table-hover table-advance dataTable no-footer" id="servicetab1" role="grid">
                                                    <tr style="background-color: #f5f5f5">
                                                        <th>#</th>
                                                        <th>Service</th>
                                                        <th>Category</th>
                                                    <th><b>Price</b></th>
                                                        <th style="width: 5%;">Select</th>
                                                    </tr>
                                                </table>
                                                <div class="tab tab-btn">
                                                    <button class="btn btn-info hvr-float-shadow adv_cust_mod_btn m-t-5" style = " left: 360px;" onclick="servicetab1_To_tab2();"><i class="fa fa-arrow-right" ></i></button>
                                                </div>
                                            </div>
                                            <!--END SERVICE TAB--> 
                                            <!--FREE ITEM TAB--> 
                                            <div class="tab-pane" id="tab3">
                                                <table class="table table-bordered table-hover table-advance dataTable no-footer" id="itemtab1" role="grid">       
                                                    <tr style="background-color: #f5f5f5">
                                                        <th>#</th>
                                                        <th>Free Items</th>
                                                        <th>Description</th>
                                                        <th style="width: 5%;">Select</th>
                                                    </tr>
                                                </table>
                                                <div class="tab tab-btn">
                                                    <button class="btn btn-info hvr-float-shadow adv_cust_mod_btn m-t-5" style = "left: 360px;" onclick="itemtab1_To_tab2();"><i class="fa fa-arrow-right" ></i></button>
                                                </div>
                                            </div>
                                            <!--END FREE ITEM TAB--> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--PROMO DETAILS-->
                            <div class="col-lg-6 m-t-10">
                                <div class="card">
                                    <div class="card-header bg-black">
                                        Promo Details
                                    </div>
                                    <div class="card-block">
                                        <div class="tab">
                                            <div class="row">
                                                <div class="col-md-7 m-t-15">
                                                    <div class="form-group">
                                                    <h5 style = "">Promo:</h5>
                                                        <input id="eid" hidden>
                                                        <input id="promoname" name="promoname" type="text" placeholder="Promo Name" class="form-control  m-t-5"  >
                                                    </div>
                                                </div>
                                                <div class="col-md-5 m-t-15">
                                                    <h5 style = "">Computed Price:</h5>
                                                    <div class="input-group m-t-5" style = "width: 139px;" >
                                                        <input id="computePrice" type="number" class="form-control" disabled="disabled" placeholder ="Php." style="text-align: right">
                                                        <!-- <span class="input-group-addon">.00</span> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Promo Details Product Table-->
                                        <div class ="m-t-15">
                                            <table class="table table-bordered table-hover table-advance dataTable no-footer" id="producttab2" role="grid">   
                                                <tr style="background-color: #f5f5f5">
                                                    <th>#</th>
                                                    <th>Product</th>
                                                    <th>Description</th>
                                                    <th><b>Price</b></th>
                                                    <th>Quantity</th>
                                                    <th style="width: 5%;">Select</th>
                                                </tr>
                                            </table>   
                                            <div class="tab tab-btn">
                                                <button class="btn btn-warning hvr-float-shadow adv_cust_mod_btn m-t-5" style = "left: 360px;" onclick="prodtab2_To_tab1();"><i class="fa fa-arrow-left" ></i></button>
                                            </div>
                                        </div>
                                        <!--End Promo Details Product Table-->
                                        <!--Promo Details Service Table-->
                                        <div class ="m-t-15">
                                            <table class="table table-bordered table-hover table-advance dataTable no-footer" id="servicetab2" role="grid">   
                                                <tr style="background-color: #f5f5f5">
                                                    <th>#</th>
                                                    <th>Service</th>
                                                    <th>Category</th>
                                                    <th><b>Price</b></th>
                                                    <th style="width: 5%;">Select</th>
                                                </tr>
                                            </table>   
                                            <div class="tab tab-btn">
                                                <button class="btn btn-warning hvr-float-shadow adv_cust_mod_btn m-t-5" style = "left: 360px;" onclick="servicetab2_To_tab1();"><i class="fa fa-arrow-left" ></i></button>
                                            </div>
                                        </div>
                                        <!--End Promo Details Service Table-->
                                        <!--Promo Details Free Item Table-->
                                        <div class ="m-t-15">
                                            <table class="table table-bordered table-hover table-advance dataTable no-footer" id="itemtab2" role="grid">   
                                                <tr style="background-color: #f5f5f5">
                                                    <th>#</th>
                                                    <th>Free Items</th>
                                                    <th>Description</th>
                                                    <th style="width: 5%;">Select</th>
                                                </tr>
                                            </table>   
                                            <div class="tab tab-btn">
                                                <button class="btn btn-warning hvr-float-shadow adv_cust_mod_btn m-t-5" style = "left: 360px;" onclick="itemtab2_To_tab1();"><i class="fa fa-arrow-left" ></i></button>
                                            </div>
                                        </div>
                                        <!--End Promo Details Free Item Table-->
                                        <div class="row lter form_elements_datepicker" id="dateRangePickerBlock">
                                            <div class="form-group col-md-12 m-t-5">
                                                <h5 style = "">Date Range:</h5>
                                            <!-- <form> -->
                                                <div class="input-group"> 
                                                    <input type="text" class="form-control m-t-5" id="reportrange" placeholder="dd/mm/yyyy-dd/mm/yyyy" required>
                                                    <span class="input-group-addon m-t-5"><i class="fa fa-calendar"></i></span>
                                                </div>
                                            <!-- </form> -->
                                            </div>
                                        </div>
                                        <!-- <div class="col-md-5 m-t-5">
                                        <h5 style = "">Stock Range:</h5>
                                            <div class="input-group m-t-5" style = "width: 139px;">
                                                <span class="input-group-addon"><i class="fa fa-bar-chart-o"></i></i></span>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div> -->
                                        <div class="row">
                                            <div class="col-md-7 m-t-10">
                                                <h5>Warranty: <span style="color: red"></span></h5>
                                                <div class="form-group">
                                                    <input type="number" id="warranty" name="warranty" placeholder="Warranty" class="form-control m-t-10" style = "width: 210px;"/>
                                                </div>
                                            </div>
                                            <div class="col-md-5 m-t-10">
                                                <div class="m-t-25"></div>
                                                <div class="form-group">
                                                    <select id="durationmode" name="durationmode" class=" form-control chzn-select m-t-10">
                                                        <option selected disabled>Please Choose</option>
                                                        <option value="Day">Day(s)</option>
                                                        <option value="Wees">Week(s)</option>
                                                        <option value="Month">Month(s)</option>
                                                        <option value="Year">Year(s)</option>
                                                    </select>
                                                    <span class="form-control-feedback bv-no-label" aria-hidden="true" data-bv-icon-for="durationmode"></span>
                                                </div>
                                            </div><br>
                                            <div class="col-md-7 m-t-10">
                                                <h5>Warranty(mileage): <span style="color: red"></span></h5>
                                                <input type="number" id="warrantymileage" name="warrantymileage" placeholder="Mileage" class="form-control m-t-10"/>
                                            </div>
                                        </div>
                                    </div>                        
                                    <div class="card-footer bg-black">
                                        <div class="input-group">
                                            <div class="col-md-9 m-t-0">
                                                <div class="input-group" >
                                                    <h5 style = "width: 150px;"class="m-t-10">Promo Price:</h5>
                                                    <div class="form-group">
                                                        <input id = "promoprice" type="number" name="price" step="0.01" min="0" class="form-control" style = "width: 180px;" placeholder ="Php";>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>     
                                </div>
                            </div>
                            <!--END PROMO DETAILS-->
                        </div>
                    </div>
                </div><br>
                <input type="hidden" id="token" value="{{ csrf_token() }}">
                <!--Button: Close and Save Changes -->
                <div class="modal-footer">
                    <div class="examples transitions m-t-5">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                    </div>
                    <div class="examples transitions m-t-5">
                        <button id='editform' type="submit" class="btn btn-success  source success_clr m-l-10 hvr-float-shadow adv_cust_mod_btn" data-dismiss="modal"><i class="fa fa-save text-white"></i>&nbsp; Save Changes
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!--END OF EDIT MODAL -->
    
    <!-- START OF DELETE MODAL -->
    <div class="modal fade in " id="deleteModal" tabindex="-3" role="dialog" aria-hidden="false">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title text-white">
                        <i class="fa fa-trash"></i>
                        &nbsp;&nbsp;Delete this record?
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="col m-t-15">
                        <h5>Are you sure you want to delete this record?</h5>
                        <input id="deleteId" name="deleteId" type="hidden">
                    </div>
                </div>
                <div class="modal-footer m-t-10">
                    <div class="examples transitions m-t-5">
                        <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Cancel</button>
                    </div>
                    <div class="examples transitions m-t-5">
                        <button id = "delete" class ='btn btn-danger source confirm m-l-10 adv_cust_mod_btn' data-dismiss='modal'><i class="fa fa-trash"></i>&nbsp;OK </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


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


<!-- global scripts date picker-->
<script type="text/javascript" src="vendors/jquery.uniform/js/jquery.uniform.js"></script>
<script type="text/javascript" src="vendors/inputlimiter/js/jquery.inputlimiter.js"></script>
<script type="text/javascript" src="vendors/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script type="text/javascript" src="vendors/jquery-tagsinput/js/jquery.tagsinput.js"></script>
<script type="text/javascript" src="vendors/validval/js/jquery.validVal.min.js"></script>
<script type="text/javascript" src="vendors/inputmask/js/jquery.inputmask.bundle.js"></script>
<script type="text/javascript" src="vendors/moment/js/moment.min.js"></script>
<script type="text/javascript" src="vendors/daterangepicker/js/daterangepicker.js"></script>
<script type="text/javascript" src="vendors/datepicker/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="vendors/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="vendors/autosize/js/jquery.autosize.min.js"></script>
<script type="text/javascript" src="vendors/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
<script type="text/javascript" src="vendors/jasny-bootstrap/js/inputmask.js"></script>
<script type="text/javascript" src="vendors/datetimepicker/js/DateTimePicker.min.js"></script>
<script type="text/javascript" src="vendors/j_timepicker/js/jquery.timepicker.min.js"></script>
<script type="text/javascript" src="vendors/clockpicker/js/jquery-clockpicker.min.js"></script>
<!--end of plugin scripts-->
<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript" src="js/pages/datetime_piker.js"></script>


<script>

$(document).ready(function(){
     $("#editform").click(function(){
            var submitProdIdVal = []
            var submitServiceIdVal = []
            var submitItemIdVal = []
            var qtyArr = []
            var rangeDate = $('#reportrange').val().replace(/ /g,'')
            var temporary
            producttab2 = document.getElementById("producttab2")
            servicetab2 = document.getElementById("servicetab2")
            itemtab2 = document.getElementById("itemtab2")

            for (var i = 1; i < producttab2.rows.length; i++) {
              submitProdIdVal.push(producttab2.rows[i].cells[0].innerHTML)
              temporary = producttab2.rows[i].cells[1].innerHTML
              temporary = temporary.replace(/'/g,'').replace(/ /g,'')
              qtyArr[i-1] = $("#qty"+temporary).val()
            }
            for (var i = 1; i < servicetab2.rows.length; i++) {
              submitServiceIdVal.push(servicetab2.rows[i].cells[0].innerHTML)
            }
            for (var i = 1; i < itemtab2.rows.length; i++) {
              submitItemIdVal.push(itemtab2.rows[i].cells[0].innerHTML)
            }
            var splitDate = rangeDate.split("-")
            var startDate = splitDate[0]
            var endDate = splitDate[1]


            $.ajax({
                 type:"POST",
                 url:"/editpromo",
                 data:
                 {
                      promoID : $('#eid').val(),
                      promoName : $('#promoname').val(),
                      price : $('#promoprice').val(),
                      warranty : $('#warranty').val(),
                      durationMode : $('#durationmode').val(),
                      mileage : $('#warrantymileage').val(),
                      StartDate : startDate,
                      EndDate : endDate,
                      productId : submitProdIdVal,
                      serviceId : submitServiceIdVal,
                      itemId : submitItemIdVal,
                      qty : qtyArr,
                        '_token': $('#token').val()
                 },
                 success: function(data){
                                 window.location.href = "promo";
                   },
                         error: function(xhr)
                       {
                         //alert("Error!");
                         location.reload();
                       }

                     });

     });
});
</script>


<script>



    function ret(id){
        // prodtable
        pcheckboxes = document.getElementsByName("prodcheck-tab2");
        plth = pcheckboxes.length
        for(j=0; j<plth; j++){
        var index = producttab2.rows[1].rowIndex
        producttab2.deleteRow(index);
        }
        //sertable
        scheckboxes = document.getElementsByName("servicecheck-tab2");
        slth = scheckboxes.length
        for(j=0; j<slth; j++){
        var index = servicetab2.rows[1].rowIndex
        servicetab2.deleteRow(index);
        }

        // itemtable
        icheckboxes = document.getElementsByName("itemcheck-tab2");
        ilth = icheckboxes.length
        for(j=0; j<ilth; j++){
        var index = itemtab2.rows[1].rowIndex
        itemtab2.deleteRow(index);
        }


         // prodtable1
        p1checkboxes = document.getElementsByName("prodcheck-tab1");
        p1lth = p1checkboxes.length
        for(j=0; j<p1lth; j++){
        var index = producttab1.rows[1].rowIndex
        producttab1.deleteRow(index);
        }

        // sertable1
        s1checkboxes = document.getElementsByName("servicecheck-tab1");
        s1lth = s1checkboxes.length
        for(j=0; j<s1lth; j++){
        var index = servicetab1.rows[1].rowIndex
        servicetab1.deleteRow(index);
        }

        // itemtable1
        i1checkboxes = document.getElementsByName("itemcheck-tab1");
        i1lth = i1checkboxes.length
        for(j=0; j<i1lth; j++){
        var index = itemtab1.rows[1].rowIndex
        itemtab1.deleteRow(index);
        }

        $("#computePrice").val("")
             $.ajax({
               type:"GET",
               url:"/retpromo",
               data:
               {
                 id:id,
               },
               success: function(data){
                // start
               var sdate = data['per'][0]['StartDate']
               var rangeDate = sdate.replace(/ /g,'')
               var splitDate = rangeDate.split("-")
                var syear = splitDate[0]
                var smm = splitDate[1]
                var sdd = splitDate[2]
                var startDate = sdd +"/"+smm +"/"+syear
// end
                 var edate = data['per'][0]['EndDate']
               var rangeeDate = edate.replace(/ /g,'')
               var spliteDate = rangeeDate.split("-")
                var eyear = spliteDate[0]
                var emm = spliteDate[1]
                var edd = spliteDate[2]
                var endDate = edd +"/"+emm +"/"+eyear

                 document.getElementById('eid').value = data['per'][0]['PromoID'];
                 document.getElementById('promoname').value = data['per'][0]['PromoName'];
                 document.getElementById('warranty').value = data['per'][0]['WarrantyDuration'];
                 document.getElementById('warrantymileage').value = data['per'][0]['WarrantyMileage'];
                 document.getElementById('promoprice').value = data['per'][0]['Price'];
                 document.getElementById('reportrange').value = startDate+'-'+endDate;
                $(".chzn-select").chosen();
                $("#durationmode").val(data['per'][0]['WarrantyDurationMode']).trigger('chosen:updated');
                // prodtable
                for(i=0; i<data['prod'].length; i++){

                            var newRow = producttab2.insertRow(producttab2.length),
                                cell1 = newRow.insertCell(0),
                                cell2 = newRow.insertCell(1),
                                cell3 = newRow.insertCell(2);
                                cell4 = newRow.insertCell(3);
                                cell5 = newRow.insertCell(4);
                                cell6 = newRow.insertCell(5);

                            //compute on add
                                var compTempPrice = $("#computePrice").val()
                            if (compTempPrice == '') {
                               compTempPrice = 0
                            }
                            else {
                              compTempPrice = parseFloat(compTempPrice)
                            }
                            var tempPrice = parseFloat(data['prod'][i]['Price'])
                            var tempQuan = parseFloat(data['prod'][i]['Quantity'])
                            var mult = tempPrice * tempQuan
                            var totalTempPrice = mult + compTempPrice * 1

                            // add values to the cells
                            cell1.innerHTML = data['prod'][i]['ProductID'];
                            cell2.innerHTML = data['prod'][i]['ProductName'];
                            cell3.innerHTML = data['prod'][i]['ProductTypeName']+" - "+data['nprod'][i]['Size']+" "+data['prod'][i]['UnitTypeName']+' '+'<input type="number" hidden style="width:2cm;" id="hidTotal'+data['prod'][i]['ProductName'].replace(/'/g, '').replace(/ /g,'')+'" value="0">';

                            cell4.innerHTML = data['prod'][i]['Price']+' '+'<input type="number" hidden style="width:2cm;" id="hidprice'+data['prod'][i]['ProductName'].replace(/'/g, '').replace(/ /g,'')+'" value="'+data['prod'][i]['Price']+'">';

                            cell5.innerHTML = '<input type="number" onchange="computeQty(this.id)" name="quantity" id="qty'+data['prod'][i]['ProductName'].replace(/'/g, '').replace(/ /g,'')+'" value="'+data['prod'][i]['Quantity']+'" class="form-control" style="width: 30px;";>'
                            cell6.innerHTML = "<input type='checkbox' name='prodcheck-tab2'>";
                            $("#computePrice").val(parseFloat(totalTempPrice))

                            
                }
          



                // sertable
                for(i=0; i<data['ser'].length; i++){

                            var newRow = servicetab2.insertRow(servicetab2.length),
                                cell1 = newRow.insertCell(0),
                                cell2 = newRow.insertCell(1),
                                cell3 = newRow.insertCell(2);
                                cell4 = newRow.insertCell(3),
                                cell5 = newRow.insertCell(4);

                            //compute on add
                                var compTempPrice = $("#computePrice").val()
                            if (compTempPrice == '') {
                               compTempPrice = 0
                            }
                            else {
                              compTempPrice = parseFloat(compTempPrice)
                            }
                            var tempPrice = parseFloat(data['ser'][i]['InitialPrice'])
                            var totalTempPrice = tempPrice + compTempPrice * 1

                            // add values to the cells
                            cell1.innerHTML = data['ser'][i]['ServiceID'];
                            cell2.innerHTML = data['ser'][i]['ServiceName'];
                            cell3.innerHTML = data['ser'][i]['ServiceCategoryName'];
                            cell4.innerHTML = data['ser'][i]['InitialPrice'];
                            cell5.innerHTML = "<input type='checkbox' name='servicecheck-tab2'>";
                            $("#computePrice").val(parseFloat(totalTempPrice))
                }

                // fretable
                for(i=0; i<data['fre'].length; i++){

                            var newRow = itemtab2.insertRow(itemtab2.length),
                                cell1 = newRow.insertCell(0),
                                cell2 = newRow.insertCell(1),
                                cell3 = newRow.insertCell(2);
                                cell4 = newRow.insertCell(3),

                            //compute on add

                            // add values to the cells
                            cell1.innerHTML = data['fre'][i]['FreeItemsID'];
                            cell2.innerHTML = data['fre'][i]['ItemName'];
                            cell3.innerHTML = data['fre'][i]['Description'];
                            cell4.innerHTML = "<input type='checkbox' name='itemcheck-tab2'>";
                }

                // for prodtab1
                for(i=0; i<data['nprod'].length; i++){

                            var newRow = producttab1.insertRow(producttab1.length),
                                cell1 = newRow.insertCell(0),
                                cell2 = newRow.insertCell(1),
                                cell3 = newRow.insertCell(2);
                                cell4 = newRow.insertCell(3),
                                cell5 = newRow.insertCell(4);

    

                            // add values to the cells
                            cell1.innerHTML = data['nprod'][i]['ProductID'];
                            cell2.innerHTML = data['nprod'][i]['ProductName'];
                            cell3.innerHTML = data['nprod'][i]['ProductTypeName']+" - "+data['nprod'][i]['Size']+" "+data['nprod'][i]['UnitTypeName'];
                            cell4.innerHTML = data['nprod'][i]['Price'];
                            cell5.innerHTML = "<input type='checkbox' name='prodcheck-tab1'>";
                            
                }


                // for sertab1
                for(i=0; i<data['nser'].length; i++){

                            var newRow = servicetab1.insertRow(servicetab1.length),
                                cell1 = newRow.insertCell(0),
                                cell2 = newRow.insertCell(1),
                                cell3 = newRow.insertCell(2);
                                cell4 = newRow.insertCell(3),
                                cell5 = newRow.insertCell(4);

        

                            // add values to the cells
                            cell1.innerHTML = data['nser'][i]['ServiceID']
                            cell2.innerHTML = data['nser'][i]['ServiceName'];
                            cell3.innerHTML = data['nser'][i]['ServiceCategoryName'];
                            cell4.innerHTML = data['nser'][i]['InitialPrice'];
                            cell5.innerHTML = "<input type='checkbox' name='servicecheck-tab1'>";;
                }

                  // for sertab1
                for(i=0; i<data['nfre'].length; i++){

                            var newRow = itemtab1.insertRow(itemtab1.length),
                                cell1 = newRow.insertCell(0),
                                cell2 = newRow.insertCell(1),
                                cell3 = newRow.insertCell(2);
                                cell4 = newRow.insertCell(3),

        

                            // add values to the cells
                            cell1.innerHTML = data['nfre'][i]['FreeItemsID']
                            cell2.innerHTML = data['nfre'][i]['ItemName'];
                            cell3.innerHTML = data['nfre'][i]['Description'];
                            cell4.innerHTML = "<input type='checkbox' name='itemcheck-tab1'>";;
                }



                         },
                               error: function(xhr)
                             {
                               alert("Error!");
                             }

                           });
     }
</script>

<script>
function prodtab1_To_tab2()
{

    var producttab1 = document.getElementById("producttab1"),
        producttab2 = document.getElementById("producttab2"),
        checkboxes = document.getElementsByName("prodcheck-tab1");
     for(var i = 0; i < checkboxes.length; i++)
         if(checkboxes[i].checked)
            {
               // create new row and cells
                var newRow = producttab2.insertRow(producttab2.length),
                    cell1 = newRow.insertCell(0),
                    cell2 = newRow.insertCell(1),
                    cell3 = newRow.insertCell(2);
                    cell4 = newRow.insertCell(3);
                    cell5 = newRow.insertCell(4);
                    cell6 = newRow.insertCell(5);

                //compute on add
                    var compTempPrice = $("#computePrice").val()
                if (compTempPrice == '') {
                   compTempPrice = 0
                }
                else {
                  compTempPrice = parseFloat(compTempPrice)
                }
                var tempPrice = parseFloat(producttab1.rows[i+1].cells[3].innerHTML)
                var totalTempPrice = tempPrice + compTempPrice * 1

                // add values to the cells
                cell1.innerHTML = producttab1.rows[i+1].cells[0].innerHTML;
                cell2.innerHTML = producttab1.rows[i+1].cells[1].innerHTML;
                cell3.innerHTML = producttab1.rows[i+1].cells[2].innerHTML+' '+'<input type="number" hidden style="width:2cm;" id="hidTotal'+producttab1.rows[i+1].cells[1].innerHTML.replace(/'/g, '').replace(/ /g,'')+'" value="0">';
                cell4.innerHTML = producttab1.rows[i+1].cells[3].innerHTML+' '+'<input type="number" hidden style="width:2cm;" id="hidprice'+producttab1.rows[i+1].cells[1].innerHTML.replace(/'/g, '').replace(/ /g,'')+'" value="'+producttab1.rows[i+1].cells[3].innerHTML+'">';
                $("#computePrice").val(parseFloat(totalTempPrice))
                cell5.innerHTML = '<input type="number" onchange="computeQty(this.id)" id="qty'+producttab1.rows[i+1].cells[1].innerHTML.replace(/'/g, '').replace(/ /g,'')+'" class="form-control" style="width: 30px;"  value="1";>'
                cell6.innerHTML = "<input type='checkbox' name='prodcheck-tab2'>";

                // remove the transfered rows from the first table [producttab1]
                var index = producttab1.rows[i+1].rowIndex;
                producttab1.deleteRow(index);
                // we have deleted some rows so the checkboxes.length have changed
                // so we have to decrement the value of i
                i--;
               console.log(checkboxes.length);
            }
}

function computeQty(id){
  var hidPriceId = id.replace('qty','hidprice')
  var hidTotalId = id.replace('qty','hidTotal')
  var compPrice = $("#computePrice").val()
  var pricee = $('#'+hidPriceId).val()
  var qtyVal = $('#'+id).val()
  var multiplyQty = qtyVal * pricee
  $('#'+hidTotalId).val(multiplyQty)
  var totalMultiplyPrice = $('#'+hidTotalId).val()
  var newPrice = compPrice - pricee
  var finalPrice = parseInt(newPrice) + parseInt(totalMultiplyPrice)
  $("#computePrice").val(finalPrice)
}

          function prodtab2_To_tab1()
            {
                var producttab1 = document.getElementById("producttab1"),
                    producttab2 = document.getElementById("producttab2"),
                    checkboxes = document.getElementsByName("prodcheck-tab2");
            console.log("Val1 = " + checkboxes.length);
                 for(var i = 0; i < checkboxes.length; i++)
                     if(checkboxes[i].checked)
                        {
                            // create new row and cells
                            var newRow = producttab1.insertRow(producttab1.length),
                                cell1 = newRow.insertCell(0),
                                cell2 = newRow.insertCell(1),
                                cell3 = newRow.insertCell(2);
                                cell4 = newRow.insertCell(3);
                                cell5 = newRow.insertCell(4);

                                //subtract
                                var compTempPrice = $("#computePrice").val()
                                if (compTempPrice == '') {
                                   compTempPrice = 0
                                }
                                else {
                                  compTempPrice = parseInt(compTempPrice)
                                }
                                var tempPrice = parseInt(producttab2.rows[i+1].cells[3].innerHTML)
                                var cond = $("#hidTotal"+producttab1.rows[i+1].cells[1].innerHTML.replace(/'/g, '').replace(/ /g,'')).val()
                                var totalTempPrice
                                if (cond == 0) {
                                  totalTempPrice = parseInt(compTempPrice) - parseInt(tempPrice) * 1
                                }
                                else {
                                  totalTempPrice = parseInt(compTempPrice) - parseInt(cond) * 1
                                }
                                var subtractPrice = parseInt(totalTempPrice)

                            // add values to the cells
                            cell1.innerHTML = producttab2.rows[i+1].cells[0].innerHTML;
                            cell2.innerHTML = producttab2.rows[i+1].cells[1].innerHTML;
                            cell3.innerHTML = producttab2.rows[i+1].cells[2].innerHTML;
                            cell4.innerHTML = producttab2.rows[i+1].cells[3].innerHTML;
                            cell5.innerHTML = "<input type='checkbox' name='prodcheck-tab1'>";
                            $("#computePrice").val(subtractPrice)
                            // remove the transfered rows from the second table [producttab2]
                            var index = producttab2.rows[i+1].rowIndex;
                            producttab2.deleteRow(index);
                            // we have deleted some rows so the checkboxes.length have changed
                            // so we have to decrement the value of i
                            i--;
                           console.log(checkboxes.length);
                        }
            }

</script>
<!--End Product Table 1 to Product Table 2-->

<!--Service table 1 to Service Table 2-->
<script>

function servicetab1_To_tab2()
{
    var servicetab1 = document.getElementById("servicetab1"),
        servicetab2 = document.getElementById("servicetab2"),
        checkboxes = document.getElementsByName("servicecheck-tab1");
        // console.log("Val1 = " + checkboxes.length);
     for(var i = 0; i < checkboxes.length; i++)
         if(checkboxes[i].checked)
            {
                // create new row and cells
                var newRow = servicetab2.insertRow(servicetab2.length),
                    cell1 = newRow.insertCell(0),
                    cell2 = newRow.insertCell(1),
                    cell3 = newRow.insertCell(2);
                    cell4 = newRow.insertCell(3);
                    cell5 = newRow.insertCell(4);

                    //compute on price
                    var compTempPrice = $("#computePrice").val()
                    if (compTempPrice == '') {
                       compTempPrice = 0
                    }
                    else {
                      compTempPrice = parseFloat(compTempPrice)
                    }
                    var tempPrice = parseFloat(servicetab1.rows[i+1].cells[3].innerHTML)
                    var totalTempPrice = compTempPrice + tempPrice * 1

                // add values to the cells
                cell1.innerHTML = servicetab1.rows[i+1].cells[0].innerHTML;
                cell2.innerHTML = servicetab1.rows[i+1].cells[1].innerHTML;
                cell3.innerHTML = servicetab1.rows[i+1].cells[2].innerHTML;
                cell4.innerHTML = servicetab1.rows[i+1].cells[3].innerHTML;
                $("#computePrice").val(parseFloat(totalTempPrice))
                cell5.innerHTML = "<input type='checkbox' name='servicecheck-tab2'>";

                // remove the transfered rows from the first table [servicetab1]
                var index = servicetab1.rows[i+1].rowIndex;
                servicetab1.deleteRow(index);
                // we have deleted some rows so the checkboxes.length have changed
                // so we have to decrement the value of i
                i--;
               // console.log(checkboxes.length);
            }
}


function servicetab2_To_tab1()
{
    var servicetab1 = document.getElementById("servicetab1"),
        servicetab2 = document.getElementById("servicetab2"),
        checkboxes = document.getElementsByName("servicecheck-tab2");
        // console.log("Val1 = " + checkboxes.length);
     for(var i = 0; i < checkboxes.length; i++)
         if(checkboxes[i].checked)
            {
                // create new row and cells
                var newRow = servicetab1.insertRow(servicetab1.length),
                    cell1 = newRow.insertCell(0),
                    cell2 = newRow.insertCell(1),
                    cell3 = newRow.insertCell(2);
                    cell4 = newRow.insertCell(3);
                    cell5 = newRow.insertCell(4);

                    //compute on price
                    var compTempPrice = $("#computePrice").val()
                    if (compTempPrice == '') {
                       compTempPrice = 0
                    }
                    else {
                      compTempPrice = parseFloat(compTempPrice)
                    }
                    var tempPrice = parseFloat(servicetab2.rows[i+1].cells[3].innerHTML)
                    var totalTempPrice = compTempPrice - tempPrice * 1

                // add values to the cells
                cell1.innerHTML = servicetab2.rows[i+1].cells[0].innerHTML;
                cell2.innerHTML = servicetab2.rows[i+1].cells[1].innerHTML;
                cell3.innerHTML = servicetab2.rows[i+1].cells[2].innerHTML;
                cell4.innerHTML = servicetab2.rows[i+1].cells[3].innerHTML;
                $("#computePrice").val(parseFloat(totalTempPrice))
                cell5.innerHTML = "<input type='checkbox' name='servicecheck-tab1'>";

                // remove the transfered rows from the second table [servicetab2]
                var index = servicetab2.rows[i+1].rowIndex;
                servicetab2.deleteRow(index);
                // we have deleted some rows so the checkboxes.length have changed
                // so we have to decrement the value of i
                i--;
               // console.log(checkboxes.length);
            }
}

</script>
<!--End Service table 1 to Service Table 2-->

<!--Free Item table 1 to Free Item Table 2-->
    <script>

            function itemtab1_To_tab2()
            {
                var itemtab1 = document.getElementById("itemtab1"),
                    itemtab2 = document.getElementById("itemtab2"),
                    checkboxes = document.getElementsByName("itemcheck-tab1");
            console.log("Val1 = " + checkboxes.length);
                 for(var i = 0; i < checkboxes.length; i++)
                     if(checkboxes[i].checked)
                        {
                            // create new row and cells
                            var newRow = itemtab2.insertRow(itemtab2.length),
                                cell1 = newRow.insertCell(0),
                                cell2 = newRow.insertCell(1),
                                cell3 = newRow.insertCell(2);
                                cell4 = newRow.insertCell(3);
                            // add values to the cells
                            cell1.innerHTML = itemtab1.rows[i+1].cells[0].innerHTML;
                            cell2.innerHTML = itemtab1.rows[i+1].cells[1].innerHTML;
                            cell3.innerHTML = itemtab1.rows[i+1].cells[2].innerHTML;
                            cell4.innerHTML = "<input type='checkbox' name='itemcheck-tab2'>";

                            // remove the transfered rows from the first table [itemtab1]
                            var index = itemtab1.rows[i+1].rowIndex;
                            itemtab1.deleteRow(index);
                            // we have deleted some rows so the checkboxes.length have changed
                            // so we have to decrement the value of i
                            i--;
                           console.log(checkboxes.length);
                        }
            }


            function itemtab2_To_tab1()
            {
                var itemtab1 = document.getElementById("itemtab1"),
                    itemtab2 = document.getElementById("itemtab2"),
                    checkboxes = document.getElementsByName("itemcheck-tab2");
            console.log("Val1 = " + checkboxes.length);
                 for(var i = 0; i < checkboxes.length; i++)
                     if(checkboxes[i].checked)
                        {
                            // create new row and cells
                            var newRow = itemtab1.insertRow(itemtab1.length),
                                cell1 = newRow.insertCell(0),
                                cell2 = newRow.insertCell(1),
                                cell3 = newRow.insertCell(2);
                                cell4 = newRow.insertCell(3);
                            // add values to the cells
                            cell1.innerHTML = itemtab2.rows[i+1].cells[0].innerHTML;
                            cell2.innerHTML = itemtab2.rows[i+1].cells[1].innerHTML;
                            cell3.innerHTML = itemtab2.rows[i+1].cells[2].innerHTML;
                            cell4.innerHTML = "<input type='checkbox' name='itemcheck-tab1'>";

                            // remove the transfered rows from the second table [itemtab2]
                            var index = itemtab2.rows[i+1].rowIndex;
                            itemtab2.deleteRow(index);
                            // we have deleted some rows so the checkboxes.length have changed
                            // so we have to decrement the value of i
                            i--;
                           console.log(checkboxes.length);
                        }
            }

function del(id){
      document.getElementById('deleteId').value = id;
      // alert(id)

    }

$("#delete").on("click", function() {

      var del = $('#deleteId').val();
     
      $.ajax({
        type:"POST",
        url:"/delpromo",
        data:
        {
          id:del,
          '_token': $('#token').val()

        },
        success: function(data){
                        location.reload();

                  },
                        error: function(xhr)
                      {
                        alert("Error!");
                      }

                    });

    });

</script>


<script type="text/javascript" src="vendors/jquery-validation/js/jquery.validate.js"></script>
<script type="text/javascript" src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>


<script type="text/javascript">
   $(document).ready(function() {

    $('#promoForm')
    .find('[name="durationmode"]')
            .chosen()
            // Revalidate the color when it is changed
            .change(function(e) {
                $('#promoForm').bootstrapValidator('revalidateField', 'durationmode');
            })           
            .end()

    .bootstrapValidator({
        message: 'This value is not valid', 
        excluded: ':disabled',
        feedbackIcons: {
            required: 'fa fa-asterisk',
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh',
            },
        trigger: 'blur',
        submitButtons: 'button[type="submit"]',
        fields: {
            feedbackIcons: 'true',
            promoname: {
                message: 'The package name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The promo name is required and cannot be empty. '
                    },
                    
                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'The promo name only accepts of alphanumeric values. '
                    },
                    regexp: {
                        regexp: /^[^~`!$@#*_={}()|\;<>,.?%^&]+/,
                        message: 'The promo name only accept alphanumeric values. '
                    },
                }
            },
            price: {
                message: 'The price is not valid',
                validators: {
                    notEmpty: {
                        message: 'The price is required and cannot be empty. '
                    },
                regexp: {
                        regexp: /^(0|[1-9]\d*)(\.\d+)?$/,
                        message: 'The price only accept numeric values. '
                    },
                }
            },
            reportrange: {
                message: 'The price is not valid',
                validators: {
                    notEmpty: {
                        message: 'The price is required and cannot be empty. '
                    },
                regexp: {
                        regexp: /^(0|[1-9]\d*)(\.\d+)?$/,
                        message: 'The price only accept numeric values. '
                    },
                }
            },
           
        }
    });


});

</script>


<!--End Free Item table 1 to Free Item Table 2-->
@stop