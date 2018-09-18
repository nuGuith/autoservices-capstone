 <!-- Include MAster PAge -->
<?php $__env->startSection('Title','Dashboard'); ?> <!-- Page Title -->
<?php $__env->startSection('content'); ?>


<link type="text/css" rel="stylesheet" href="vendors/fullcalendar/css/fullcalendar.min.css" />


<link type="text/css" rel="stylesheet" href="vendors/swiper/css/swiper.min.css"/>
<link type="text/css" rel="stylesheet" href="vendors/bootstrap-switch/css/bootstrap-switch.min.css" />
<link type="text/css" rel="stylesheet" href="vendors/switchery/css/switchery.min.css" />

<link rel="stylesheet" type="text/css" href="css/pages/widgets.css">
<link type="text/css" rel="stylesheet" href="css/pages/calendar_custom.css" />




<div id="content" class="bg-container">
	 <header class="head">
                <div class="main-bar">
                    <div class="row" style = "height: 47px;">
                    <div class="col-6">
                        <h4 class="m-t-15">
                            <i class="fa fa-home"></i>
                            Dashboard
                        </h4>
                    </div>

                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right   ">
                            <li class="breadcrumb-item " >
                                <a href="/">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                    Dashboard
                                </a>
                            </li>
                            <!-- <li class="active breadcrumb-item">Calendar</li> -->
                        </ol>
                    </div>

                    </div>
                </div>
            </header>


    <div class="outer">
                <div class="inner bg-light lter bg-container cal_btn_hov">
                    <div class="row">
                        <div class="col-lg-3">
                            
                             
                            <div class="icon_align bg-white widget_border">
                                <div class="float-left progress_icon">
                                    <span class="fa-stack fa-sm ">
                                        <i class="fa fa-circle fa-stack-2x" style="color: #DCDCDC"></i>
                                        <i class="fa fa-wpforms fa-stack-1x fa-inverse text-info"></i>
                                    </span>
                                </div>
                                <div class="text-right m-t-10">
                                    <h3 id="widget_count1" style="color: blue">10</h3>
                                    <p><b>Total Job Order</b></p>
                                </div>                                                   
                            </div>

                            <div class="icon_align bg-white widget_border m-t-15" style="border-color: orange">
                                <div class="float-left progress_icon">
                                    <span class="fa-stack fa-sm ">
                                        <i class="fa fa-circle fa-stack-2x " style="color: #DCDCDC" ></i>
                                        <i class="fa fa-spinner fa-stack-1x fa-inverse text-warning"></i>
                                    </span>
                                </div>
                                <div class="text-right m-t-10">
                                    <h3 id="widget_count2" style="color: orange">9</h3>
                                    <p><b>Ongoing Job Order</b></p>
                                </div>                                                   
                            </div>

                            <div class="icon_align bg-white widget_border m-t-15" style="border-color: green">
                                <div class="float-left progress_icon">
                                    <span class="fa-stack fa-sm ">
                                        <i class="fa fa-circle fa-stack-2x" style="color: #DCDCDC"></i>
                                        <i class="fa fa-wpforms fa-stack-1x fa-inverse text-success"></i>
                                    </span>
                                </div>
                                <div class="text-right ">
                                    <h3 id="widget_count3" style="color: green "> 10</h3>
                                    <p><b>Completed Job Order</b></p>
                                </div>                                                   
                            </div>

                            <div class="icon_align bg-white widget_border m-t-15" style="border-color: red">
                                <div class="float-left progress_icon">
                                    <span class="fa-stack fa-sm">
                                        <i class="fa fa-circle fa-stack-2x" style="color: #DCDCDC"></i>
                                        <i class="fa fa-rotate-left fa-stack-1x fa-inverse text-danger"></i>
                                    </span>
                                </div>
                                <div class="text-right m-t-10">
                                    <h3 id="widget_count4" style="color: red ">485</h3>
                                    <p><b>Total Back Job</b></p>
                                </div>                                                   
                            </div>

                            

                        </div>
                        <div class="col-lg-9">
                            <div class="card">
                                <div class="card-block m-t-35">
                                    <div id="calendar" style="overflow-y: hidden;"></div>
                                </div>
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col -->
                    </div>

                    
    <!-- edit Modal -->
    <div class="modal fade" id="evt_modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    
                    <button type="button" class="close text-white" data-dismiss="modal" aria-hidden="true">×</button>

                    <h4 class="modal-title text-white"><i class="fa fa-"></i>
                                &nbsp;Job Order
                    </h4>
                           
                </div>
                <div class="modal-body">

                    <div class="row" style="padding-left: 15px; padding-right:15px;">

                            <div class="col-lg-5 m-t-25">
                                <div class="card">                                   
                                    <div class="card-block">

                                        <!--START CUSTOMER INFORMATION-->
                                        <h4 class="m-t-15">Customer Information</h2>
                                        <hr style="margin-top: 10px; border: 2px solid #a7dfcd">


                                        <!--Label: Customer Name,  Contact No. Email, Adress, Senior Citizen /PWD ID-->
                                        <div class="row m-t-15">
                                                <div class="col-lg-12">
                                                        <h5><span style="color:gray">Name:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xavier Tanguilan Eugenio</h5>                    
                                                </div>  
                                                <div class="col-lg-12 m-t-10">
                                                        <h5><span style="color:gray">Contact No.:</span>&nbsp;&nbsp;&nbsp;&nbsp;(999)9999-999</h5>               
                                                </div>
                                                <div class="col-lg-12 m-t-10">
                                                        <h5><span style="color:gray">Email Address:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;xavier@handsome.com</h5>
                                                </div>
                                                <div class="col-lg-12 m-t-10">
                                                        <h5><span style="color:gray">Address:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Valenzuella City</h5>
                                                </div>
                                                <div class="col-lg-12 m-t-10">
                                                        <h5><span style="color:gray">Senior Citizen/ PWD ID:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N/A</h5>
                                                </div>                    
                                            </div> 


                                        <!--START OTHER INFORMATION-->
                                        <h4 class ="m-t-30">Vehicle Information</h2>
                                        <hr style="margin-top: 10px; border: 2px solid #6699cc">

                                        <div class="row m-t-15">
                                            <div class="col-lg-12 m-t-5">
                                                    <h5><span style="color:gray">Plate No.:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XTE 0202</h5>                    
                                            </div>

                                            <div class="col-lg-12 m-t-10">
                                                    <h5><span style="color:gray">Chassis No.:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;020217</h5>
                                            </div>

                                            <div class="col-lg-12 m-t-10">
                                                    <h5><span style="color:gray">Mileage:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;200 km </h5>
                                            </div>

                                            <div class="col-lg-12 m-t-10">
                                                    <h5><span style="color:gray">Make:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ford</h5>               
                                            </div>
                                            
                                            <div class="col-lg-12 m-t-10">
                                                    <h5><span style="color:gray">Model:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mustang</h5>
                                            </div>
                                            
                                            <div class="col-lg-12 m-t-10">
                                                    <h5><span style="color:gray">Transmission:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AT</h5>
                                            </div>              
                                        </div>
                                       
                                        <!--START VEHICLE INFORMATION-->
                                        <h4 class ="m-t-30">Other Information</h2>
                                        <hr style="margin-top: 10px; border: 2px solid #aa66cc">

                                        <div class="row m-t-15">
                                            <div class="col-lg-12 m-t-5">
                                                    <h5><span style="color:gray">Service Advisor:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Daphne</h5>                    
                                            </div>

                                            <div class="col-lg-12 m-t-10">
                                                    <h5><span style="color:gray">Inventory:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hercules</h5>
                                            </div>

                                            <div class="col-lg-12 m-t-10">
                                                    <h5><span style="color:gray">Qulaity Assurance:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Athena</h5>
                                            </div>
          
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-7 m-t-25">
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
                                                <h5><span style="color:gray">Progress: </span></h5>
                                            </div>

                                            <div class="col-lg-12 m-t-10">
                                                <div class="progress" style="height: 15px !important;">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 50%;  font-size:14px" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">50%
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
                                                <th>Completed</th>
                                                <th>Mechanic</th>
                                                <th>Status</th>
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
                                                        0
                                                    </td>
                                                    <!--Column: Mechanic -->
                                                    <td>
                                                        Juan Dela Crusz
                                                    </td>
                                                    <!--Column: Status -->
                                                    <td>
                                                        On going        
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
                                                        2
                                                    </td>
                                                    <!--Column: Mechanic -->
                                                    <td>
                                                        Pedro Penduko
                                                    </td>
                                                    <!--Column: Status -->
                                                    <td>
                                                        On going        
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
                                                        <span style="color:gray">Balance:<i style="padding-left: 180px; color:red">Php 3750.00</i></span><i class="fa fa-angle-down rotate-icon pull-right"></i>
                                                    </h5>
                                                </a>
                                            </div>

                                            <!-- accordion body -->
                                            <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionEx">
                                                <div class="card-body" style="padding-left:15px; padding-right: 15px; ">

                                            <!--Lable: Overl All Total -->
                                            <div class="row m-t-20" style="padding-bottom:0px">  
                                                <div class="col-lg-12 m-t-0 pull-right">
                                                    <h5><span style="color:gray">Over All Total:
                                                    </span>&nbsp;&nbsp;3800.00</h5>
                                                    </p>
                                                </div>                         
                                            </div>
                                                    
                                            <!--Table: Payment Details -->
                                            <table class="table table-bordered table-hover dataTable no-footer " id="sample_6" role="grid" aria-describedby="sample_6_info" style="top:5px;" >
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
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn gray" data-dismiss="modal">
                        Close
                        <!-- <i class="fa fa-times"></i> -->
                    </button>
                </div>
            </div>
        </div>

    </div>
                <!-- /.inner -->
            </div>
            <!-- /.outer -->
        </div>
        <!-- /#content -->



</div>


<script type="text/javascript" src="js/components.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<!-- end of global scripts-->
<!--plugin script-->
<script type="text/javascript" src="vendors/countUp.js/js/countUp.min.js"></script>
<script type="text/javascript" src="vendors/moment/js/moment.min.js"></script>
<script type="text/javascript" src="vendors/fullcalendar/js/fullcalendar.min.js"></script>
<script type="text/javascript" src="js/pluginjs/calendarcustom.js" ></script>

<!-- end of plugin scripts -->

<script type="text/javascript" src="js/pages/calendar.js"></script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>