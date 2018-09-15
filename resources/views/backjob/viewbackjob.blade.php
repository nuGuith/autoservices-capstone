@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','Update back Job') <!-- Page Title -->
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
                            <i class="fa fa-rotate-left"></i>
                            &nbsp;Back Job and Warranty
                        </h4>
                    </div>

                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right">
                            <li class="breadcrumb-item " >
                                <a href="/backjob">
                                    <i class="fa fa-rotate-left" data-pack="default" data-tags=""></i>
                                    Back Job and Warranty
                                </a>
                            </li>
                            <li class="active breadcrumb-item">&nbsp;View Back Job</li>
                        </ol>
                    </div>

                    </div>
                </div>
            </header>
                <div class="outer">
                    <div class="inner bg-container">
                        <div class="card">
                            <div class="card-header bg-black">
                                <span class="fa fa-refresh fa-eye"></span>&nbsp;
                                View Back Job 
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
                                                        <h5><span style="color:gray">Name:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xavier Tanguilan Eugenio</h5>                    
                                                </div>  
                                                <div class="col-lg-12 m-t-10">
                                                        <h5><span style="color:gray">Contact No.:</span>&nbsp;&nbsp;&nbsp;&nbsp;(999)9999-999</h5>               
                                                </div>
                                                <div class="col-lg-12 m-t-10">
                                                        <h5><span style="color:gray">Email:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;xavier@handsome.com</h5>
                                                </div>
                                                <div class="col-lg-12 m-t-10">
                                                        <h5><span style="color:gray">Address:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Valenzuella City</h5>
                                                </div>
                                                <div class="col-lg-12 m-t-10">
                                                        <h5><span style="color:gray">Senior Citizen/ PWD ID:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N/A</h5>
                                                </div>                    
                                            </div> 


                                       

                                        <!--START VEHICLE INFORMATION-->
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
                                                <th>Mechanic</th>
                                                <th>Steps</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                            <tr role="row" class="odd">
                                                    <!--Column: Service -->
                                                    <td>
                                                        Engine Overhaul
                                                    </td> 
                                                    <!--Column: Mechanic -->
                                                    <td>
                                                        Juan Dela Crusz
                                                    </td>
                                                    <td style="text-align: center">
                                                        Step <span style="color:red"><b>10</b></span> of 16
                                                    </td>
                                                    <!--Column: Status -->
                                                    <td>
                                                        On going        
                                                    </td>
                                                    <!--Column: Actions: Refresh-->

                                                </tr>
                                                <!--example for service -->
                                                <tr role="row" class="odd">
                                                    <!--Column: Service -->
                                                    <td>
                                                        Change Oil
                                                    </td> 
                                                    <!--Column: Mechanic -->
                                                    <td>
                                                        Juan Dela Crusz
                                                    </td>
                                                    <td style="text-align: center">
                                                        Step <span style="color:red"><b>0</b></span> of 4
                                                    </td>
                                                    <!--Column: Status -->
                                                    <td>
                                                        Pending        
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
                                         
                        </div>
                    </div>
                </div>
            </div>


                                <!--Button: Back, Save-->
                             <div class="card-footer bg-black disabled m-t-20" >
                               <div class="examples transitions m-t-5 pull-right">
                                    <button onclick="window.location='{{ url("/backjob") }}'" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn gray"  href="/estimates"><i class="fa fa-arrow-left" >
                                    </i>&nbsp;Back</button>  
                                                
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