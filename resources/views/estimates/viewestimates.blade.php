@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','View Estimates') <!-- Page Title -->
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
                            <i class="fa fa-file-text"></i>
                            &nbsp;Estimates
                        </h4>
                    </div>

                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right">
                            <li class="breadcrumb-item">
                                <a href="/">
                                    <i class="fa fa-home"></i>
                                    &nbsp;Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item " >
                                <a href="/estimates">
                                    <i class="fa fa-file-text" data-pack="default" data-tags=""></i>
                                    &nbsp;Estimate
                                </a>
                            </li>
                            <li class="active breadcrumb-item">
                                &nbsp;View Estimate
                            </li>
                        </ol>
                    </div>

                    </div>
                </div>
            </header>
                <div class="outer">
                    <div class="inner bg-container">
                        <div class="card">
                            <div class="card-header bg-black">
                                <span class="fa fa-eye fa-lg"></span>&nbsp;
                                View Estimate
                             </div>

                        
                            <div class="card-block m-t-25" id="user_body">
                            
                            <!--START CUSTOMER INFORMATION-->
                            <h4>Customer Information</h2>
                            <hr style="margin-top: 10px; border: 2px solid #a7dfcd">

                            <!--Label: Customer Name,  Contact No. Email, Adress, Senior Citizen /PWD ID-->
                            <div class="row m-t-15">
                                    <div class="col-lg-12">
                                            <h5><span style="color:gray">Customer Name:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; blah blah blah</h5>                    
                                    </div>  
                                    <div class="col-lg-12 m-t-10">
                                            <h5><span style="color:gray">Contact No.:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>               
                                    </div>
                                    <div class="col-lg-12 m-t-10">
                                            <h5><span style="color:gray">Email Address:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                                    </div>
                                    <div class="col-lg-12 m-t-10">
                                            <h5><span style="color:gray">Address:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                                    </div>
                                    <div class="col-lg-12 m-t-10">
                                            <h5><span style="color:gray">Senior Citizen/ PWD ID:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N/A</h5>
                                    </div>                    
                                </div> 


                            <!--START VEHICLE INFORMATION-->
                            <h4 class ="m-t-25">Vehicle Information</h2>
                            <hr style="margin-top: 10px; border: 2px solid #6699cc">

                            <!--Label: Customer Name,  Contact No. Email, Adress, Senior Citizen /PWD ID-->
                            <div class="row m-t-15">
                                    <div class="col-lg-6 m-t-5">
                                            <h5><span style="color:gray">Plate No.:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XTE 0202</h5>                    
                                    </div>  
                                    <div class="col-lg-6 m-t-5">
                                            <h5><span style="color:gray">Make:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ford</h5>               
                                    </div>
                                    <div class="col-lg-6 m-t-10">
                                            <h5><span style="color:gray">Chassis No.:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;020217</h5>
                                    </div>
                                    <div class="col-lg-6 m-t-10">
                                            <h5><span style="color:gray">Model:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mustang</h5>
                                    </div>
                                    <div class="col-lg-6 m-t-10">
                                            <h5><span style="color:gray">Mileage:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;200 miles </h5>
                                    </div> 
                                    <div class="col-lg-6 m-t-10">
                                            <h5><span style="color:gray">Transmission:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AT</h5>
                                    </div>              
                                </div>

                        <!--START OF ESTIMATE DETAILS -->
                        <h4 class="m-t-25">Estimate Details</h2>
                        <hr style="margin-top: 10px; border: 2px solid #ffb74d  ">

                        <div class="row m-t-20" style="padding-bottom:20px">  
                            <div class="col-lg-6 m-t-0">
                                    <h5><span style="color:gray">Assign Mechanic:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Juan Dela Cruz</h5>
                            </div>                         
                            <div class="col-lg-6 m-t-0">
                                    <h5><span style="color:gray">Service Bay:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3</h5>
                            </div>                          
                        </div>


                        <!--Start of estimate table-->
                        <table class="table table-bordered dataTable no-footer m-t-15" id="sample_6" role="grid" aria-describedby="sample_6_info" >
                                <thead>
                                    <tr class="trrow">
                                        <th>Service</th>
                                        <th>Product</th>
                                        <th>Labor</th>
                                        <th>Unit Price</th>
                                        <th>Quantity</th>
                                        <th>Total Price</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        <tr role="row" class="odd">
                                            <!--Column: Service -->
                                            <td>&nbsp;<b style="color:red; size: 10px">Change Oil<b>
                                            </td>
                                            <!--Column: Product-->
                                            <td>
                                                <ul style="list-style-type: none; padding-left: 0.5em;">
                                                  <li style="padding-bottom: 7px;">&nbsp;</li>
                                                  <li style="padding-bottom: 7px;">Dunlop 1.5mL</li>
                                                  <li style="padding-bottom: 7px;">Shell Helix Ulta 2.5m</li>
                                                <ul>
                                            </td>
                                            <!--Column: Labor-->
                                            <td>
                                                <ul style="list-style-type: none; padding-left: 1.2em;">
                                                  <li style="text-align: right">350</li>
                                                  <li>&nbsp;</li>
                                                  <li>&nbsp;</li>
                                                <ul>
                                            </td>
                                            <!--Column: Unit Price-->
                                            <td>
                                                <ul style="list-style-type: none; padding-left: 0.5em;">
                                                  <li style="padding-bottom: 7px;">&nbsp;</li>
                                                  <li style="padding-bottom: 7px; text-align: right">700</li>
                                                  <li style="padding-bottom: 7px; text-align: right">650</li>
                                                <ul>
                                            </td>
                                            <!--Column: Quantity -->
                                            <td>
                                                <ul style="list-style-type: none; padding-left: 0em;">
                                                  <li style="padding-bottom: 7px;">&nbsp;</li>
                                                  <li style="padding-bottom: 7px; text-align: center">3</li>
                                                  <li style="padding-bottom: 7px; text-align: center">2</li>
                                                <ul>
                                            </td>
                                            <!--Column: Total Price -->
                                            <td>
                                                <ul style="list-style-type: none; padding-left: 0em;">
                                                  <li style="padding-bottom: 7px; text-align: center">350</li>
                                                  <li style="padding-bottom: 7px; text-align: center">2100</li>
                                                  <li style="padding-bottom: 7px; text-align: center">1300</li>
                                                <ul>            
                                            </td>
                                        </tr>

                                    <!-- TO SHOW HOW IT LOOKS LIKE: another row -->
                                        <tr role="row" class="odd">
                                            <!--Column: Service -->
                                            <td>&nbsp;<b style="color:red; size: 10px">Change Oil<b>
                                            </td>
                                            <!--Column: Product-->
                                            <td>
                                                <ul style="list-style-type: none; padding-left: 0.5em;">
                                                  <li style="padding-bottom: 7px;">&nbsp;</li>
                                                  <li style="padding-bottom: 7px;">Dunlop 1.5mL</li>
                                                  <li style="padding-bottom: 7px;">Shell Helix Ulta 2.5m</li>
                                                <ul>
                                            </td>
                                            <!--Column: Labor-->
                                            <td>
                                                <ul style="list-style-type: none; padding-left: 1.2em;">
                                                  <li style="text-align: right">350</li>
                                                  <li>&nbsp;</li>
                                                  <li>&nbsp;</li>
                                                <ul>
                                            </td>
                                            <!--Column: Unit Price-->
                                            <td>
                                                <ul style="list-style-type: none; padding-left: 0.5em;">
                                                  <li style="padding-bottom: 7px;">&nbsp;</li>
                                                  <li style="padding-bottom: 7px; text-align: right">700</li>
                                                  <li style="padding-bottom: 7px; text-align: right">650</li>
                                                <ul>
                                            </td>
                                            <!--Column: Quantity -->
                                            <td>
                                                <ul style="list-style-type: none; padding-left: 0em;">
                                                  <li style="padding-bottom: 7px;">&nbsp;</li>
                                                  <li style="padding-bottom: 7px; text-align: center">3</li>
                                                  <li style="padding-bottom: 7px; text-align: center">2</li>
                                                <ul>
                                            </td>
                                            <!--Column: Total Price -->
                                            <td>
                                                <ul style="list-style-type: none; padding-left: 0em;">
                                                  <li style="padding-bottom: 7px; text-align: center">350</li>
                                                  <li style="padding-bottom: 7px; text-align: center">2100</li>
                                                  <li style="padding-bottom: 7px; text-align: center">1300</li>
                                                <ul>            
                                            </td>
                                        </tr>

                                    <!-- TO SHOW HOW IT LOOKS LIKE -->



                                    </tbody>
                                     <!--Footer: Total Price-->
                                    <tfoot>
                                        <tr class="trrow">
                                            <th colspan="5" style="text-align: right;">Overall Total Price: </th>
                                            <th style="text-align: center; color: blue">7500</th>
                                        </tr>
                                    </tfoot>
                                </table>



                                <div class="row m-t-20" style="padding-bottom:20px">  
                                    <div class="col-lg-12 m-t-0">
                                            <h5><span style="color:gray">Remarks:
                                            <p class="m-t-20">
                                            </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The quick brown fox jump over the lazy dog.</h5>
                                            </p>
                                    </div>                         
                            </div>
  
                            </div>
                           
                                <!--Button: Back, Save-->
                             <div class="card-footer bg-black disabled">
                               <div class="examples transitions m-t-5 pull-right">
                                    <button onclick="window.location='{{ url("/estimates") }}'" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn gray"  href="/estimates"><i class="fa fa-arrow-left" >
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