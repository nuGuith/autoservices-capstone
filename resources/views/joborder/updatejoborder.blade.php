@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','Update Job Order') <!-- Page Title -->
@section('content')

    <link type="text/css" rel="stylesheet" href="vendors/sweetalert/css/sweetalert2.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/pages/sweet_alert.css"/>

    <link type="text/css" rel="stylesheet" href="vendors/animate/css/animate.min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/hover/css/hover-min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/wow/css/animate.css"/>

    <link type="text/css" rel="stylesheet" href="vendors/tooltipster/css/tooltipster.bundle.min.css">
    <link type="text/css" rel="stylesheet" href="vendors/tipso/css/tipso.min.css">

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
                            <i class="fa fa-wpforms"></i>
                            &nbsp;Job Order
                        </h4>
                    </div>

                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right">
                            <li class="breadcrumb-item " >
                                <a href="/joborder">
                                    <i class="fa fa-wpforms" data-pack="default" data-tags=""></i>
                                    Job Order
                                </a>
                            </li>
                            <li class="active breadcrumb-item">&nbsp;Update Job Order</li>
                        </ol>
                    </div>

                    </div>
                </div>
            </header>
                <div class="outer">
                    <div class="inner bg-container">
                        <div class="card">
                            <div class="card-header bg-black">
                                <span class="fa fa-refresh fa-lg"></span>&nbsp;
                                Update Job Order
                             </div>

                        <div class="row" style="padding-left: 15px; padding-right:15px;">

                            <div class="col-lg-4 m-t-25">
                                <div class="card">                                   
                                    <div class="card-block">

                                        <!--START CUSTOMER INFORMATION-->
                                        <h4 class="m-t-15">Customer Information</h2>
                                        <hr style="margin-top: 10px; border: 2px solid #a7dfcd">


                                        <!--Label: Customer Name,  Contact No. Email, Adress, Senior Citizen /PWD ID-->
                                        <div class="row m-t-15">
                                                <div class="col-lg-12">
                                                        <h5><span style="color:gray">Name:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        {{$customer->FullName}}</h5>                    
                                                </div>  
                                                <div class="col-lg-12 m-t-10">
                                                        <h5><span style="color:gray">Contact No.:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$customer->ContactNo}}</h5>               
                                                </div>
                                                <div class="col-lg-15 m-t-10">
                                                        <h5><span style="color:gray">&nbsp;&nbsp;&nbsp; Email Address:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$customer->EmailAddress}}</h5>
                                                </div>
                                                <div class="col-lg-12 m-t-10">
                                                        <h5><span style="color:gray">Address:</span>&nbsp;&nbsp;&nbsp;{{$customer->CompleteAddress}}</h5>
                                                </div>
                                                <div class="col-lg-12 m-t-10">
                                                        <h5><span style="color:gray">Senior Citizen/ PWD ID:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$customer->PWD_SC_No}}</h5>
                                                </div>             
                                            </div> 


                                        <!--START VEHICLE INFORMATION-->
                                        <h4 class ="m-t-30">Vehicle Information</h2>
                                        <hr style="margin-top: 10px; border: 2px solid #6699cc">

                                        <div class="row m-t-15">
                                            <div class="col-lg-12 m-t-5">
                                                    <h5><span style="color:gray">Plate No.:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$automobile->PlateNo}}</h5>                    
                                            </div>

                                            <div class="col-lg-12 m-t-10">
                                                    <h5><span style="color:gray">Chassis No.:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$automobile->ChassisNo}}</h5>
                                            </div>

                                            <div class="col-lg-12 m-t-10">
                                                    <h5><span style="color:gray">Mileage:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$automobile->Mileage}} km </h5>
                                            </div>

                                            <div class="col-lg-12 m-t-10">
                                                    <h5><span style="color:gray">Make:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$automobile->Make}}</h5>               
                                            </div>
                                            
                                            <div class="col-lg-12 m-t-10">
                                                    <h5><span style="color:gray">Model:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$automobile->Model}}</h5>
                                            </div>
                                            
                                            <div class="col-lg-12 m-t-10">
                                                    <h5><span style="color:gray">Transmission:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$automobile->Transmission}}</h5>
                                            </div>              
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-8 m-t-25">
                                <div class="card">                                   
                                    <div class="card-block">

                                        <!--START JOB ORDER PROGRESS DETAIL-->
                                        <h4 class="m-t-15">Progress Details</h2>
                                        <hr style="margin-top: 10px; border: 2px solid #ffb74d  ">


                                        <!--Label: Start Date, End Date, Service Bay-->
                                        <div class="row m-t-15">
                                                <div class="col-lg-4">
                                                        <h5><span style="color:gray">Start:</span>&nbsp;&nbsp;&nbsp;June 28, 2018</h5>                    
                                                </div>  
                                                <div class="col-lg-4">
                                                        <h5><span style="color:gray">End:</span>&nbsp;&nbsp;&nbsp;&nbsp;</h5>               
                                                </div>
                                                <div class="col-lg-4">
                                                        <h5><span style="color:gray">Service Bay:</span>&nbsp;&nbsp;&nbsp;3</h5>
                                                </div>
                                         </div> 

                                        <!--progress bar-->
                                        <div class="row m-t-20">
                                           <div class="col-lg-12">
                                                <h5><span style="color:gray">Progress: </span>&nbsp;&nbsp;&nbsp;50%</h5>
                                            </div>

                                            <div class="col-lg-12 m-t-10">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 50%; height:20px; font-size:14px" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">50%
                                                    </div>
                                                </div>
                                            </div>
                                         </div>  



                                <div class="row m-t-15">
                                <!--Start of job order profgress tavle-->
                                    <table class="table table-bordered table-hover dataTable" id="sample_6" role="grid" aria-describedby="sample_6_info" style="top:30px;" >
                                        <thead>
                                            <tr class="trrow">
                                                <th>Items</th>
                                                <th>Quantity</th>
                                                <th colspan="2" style="text-align: center">Completed</th>
                                                <th>Mechanic</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                                <!--example for servoice -->
                                                <tr role="row" class="odd">
                                                    <!--Column: Service -->
                                                    <td>
                                                        Change Oil
                                                    </td>
                                                    <!--Column: Quantity-->
                                                    <td style="text-align: center">
                                                        1
                                                    </td>
                                                    <!--Column: Completed-->
                                                    <td style="text-align: center">
                                                        1
                                                    </td>
                                                    <td>
                                                        <input type="text" style="width:60px;" name="completed" placeholder="" class="form-control" value="">
                                                        </div>
                                                    </td>   
                                                    <!--Column: Mechanic -->
                                                    <td>
                                                        Juan Dela Crusz
                                                    </td>
                                                    <!--Column: Status -->
                                                    <td>
                                                        On going        
                                                    </td>
                                                    <!--Column: Actions: Refresh-->
                                                    <td>
                                                        <button type="button" id=" " class="btn btn-success hvr-float-shadow" ><i class="fa fa-refresh text-white"></i></button>       
                                                    </td>
                                                </tr>

                                                 <!--example for product -->
                                                <tr role="row" class="odd">
                                                    <!--Column: Service -->
                                                    <td>
                                                        Dunlop 1.5mL
                                                    </td>
                                                    <!--Column: Quantity-->
                                                    <td style="text-align: center">
                                                        3
                                                    </td>
                                                    <!--Column: Completed-->
                                                    <td style="text-align: center">
                                                        1
                                                    </td>
                                                    <td>
                                                        <input type="text" style="width:60px;" name="completed" placeholder="" class="form-control" value="">
                                                        </div>
                                                    </td>
                                                    <!--Column: Mechanic -->
                                                    <td>
                                                        Pedro Penduko
                                                    </td>
                                                    <!--Column: Status -->
                                                    <td>
                                                        On going        
                                                    </td>
                                                    <!--Column: Actions: Refresh-->
                                                    <td>
                                                        <button type="button" id=" " class="btn btn-success hvr-float-shadow" ><i class="fa fa-refresh text-white"></i></button>         
                                                    </td>
                                                </tr>
                                            </tbody>
                                             
                                            <tfoot>
                                            </tfoot>
                                        </table>
                                    </div> 

                                    <!--Label: Remarks -->
                                    <div class="row m-t-20">  
                                        <div class="col-lg-12 m-t-0">
                                            <h5><span style="color:gray">Remarks:
                                            </span>&nbsp;&nbsp;The quick brown fox jump over the lazy dog.</h5>
                                            </p>
                                        </div>                         
                                    </div>

                                <!--Accordion: Payment Details -->
                                <div class="row m-t-15">
                                    <div class="col-lg-12">

                                    <div class="accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingOne">
                                                <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne" aria-expanded="" aria-controls="collapseOne" active="false">
                                                    <!--Lablel: balance -->
                                                    <h5 class="mb-0">
                                                        <span style="color:gray">Balance:<i style="padding-left: 380px; color:red">Php 3750.00</i></span><i class="fa fa-angle-down rotate-icon pull-right"></i>
                                                    </h5>
                                                </a>
                                            </div>

                                            <!-- Payment Details -->
                                            <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionEx">
                                                <div class="card-body" style="padding-left:15px; padding-right: 15px; ">


                                            <!--Textfield: Add Payment -->
                                            <div class="form-group row m-t-5">
                                                <div class=" col-lg-3  m-t-20">
                                                        <h5>Add Payment<span style="color:red">*</span></h5>
                                                    </div>
                                                    <div class="col-md-12 col-lg-4">               
                                                        <p>
                                                            <input id="address" name="payment" type="text" placeholder=".00" class=" form-control m-t-10" style="text-align: right">
                                                        </p>
                                                    </div>                                             
                                            </div>                                                                                              
                                            
                                                    
                                            <!--Table: Payment Details -->
                                            <table class="table table-bordered table-hover dataTable no-footer " id="sample_6" role="grid" aria-describedby="sample_6_info" style="top:0px;" >
                                                <thead>
                                                    <tr class="trrow">
                                                        <th>Date</th>
                                                        <th>Amount</th>   
                                                    </tr>
                                                </thead>
                                                    <tbody>
                                                        <tr role="row" class="odd">
                                                            <!--Column: Date -->
                                                            <td>
                                                               June 28, 2018
                                                            </td>
                                                            <!--Column: Amount-->
                                                            <td style="text-align: center">
                                                                50.00
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                     
                                                    <tfoot>
                                                        <tr>
                                                            <!--Row: Total Amount-->
                                                            <th style="text-align: right">
                                                                Total Amount:
                                                            </th> 
                                                            <th style="color:blue; text-align: center">
                                                                50.00
                                                            </th>   
                                                        </tr> 
                                                    </tfoot>
                                                </table>

                                                <!--Lable: Overl All Total -->
                                                <div class="row m-t-20" style="padding-bottom:15px">  
                                                    <div class="col-lg-12 m-t-0 pull-right">
                                                        <h5 style="padding-left: 240px;"><span style="color:gray">Over All Total:
                                                        </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3800.00</h5>
                                                        </p>
                                                    </div>                         
                                                </div>


                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                    
                    </div>
                </div>
            </div>
        </div>


                           
                                <!--Button: Back, Save-->
                             <div class="card-footer bg-black disabled m-t-20" >
                               <div class="examples transitions m-t-5 pull-right">
                                    <button onclick="window.location='{{ url("/joborder") }}'" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn gray"  href="/estimates"><i class="fa fa-arrow-left" >
                                    </i>&nbsp;Back</button>  
                                                  
                                    <button class="btn btn-info source success_clr m-l-0 hvr-float-shadow adv_cust_mod_btn" style ="width: 80px;"  ><i class="fa fa-print text-white" ></i>&nbsp; Print</button>
                                </div>
                            </div>
            
                            </div>
                        </div>
                    </div>
                    <!-- /.inner -->
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

<script type="text/javascript" src="vendors/tooltipster/js/tooltipster.bundle.min.js"></script>
<script type="text/javascript" src="vendors/tipso/js/tipso.min.js"></script>
<script type="text/javascript" src="js/pages/tooltips.js"></script>


<!-- global scripts modals-->
<script type="text/javascript" src="js/pages/modals.js"></script>
<!--End of global scripts-->



@stop