@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','Inspect') <!-- Page Title -->
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
                            <i class="fa fa-search"></i>
                            Inspect Vehicle
                        </h4>
                    </div>

                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right">
                            <li class="breadcrumb-item " >
                                <a href="/inspect">
                                    <i class="fa fa-search" data-pack="default" data-tags=""></i>
                                    Inspect Vehicle
                                </a>
                            </li>
                            <li class="active breadcrumb-item">&nbsp;View Inspect Vehicle</li>
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
                                View Inpect Vehicle
                             </div>


                            <div class="card-block m-t-25" id="user_body">
                            
                            <!--START CUSTOMER INFORMATION-->
                            <h4>Customer Information</h2>
                            <hr style="margin-top: 10px; border: 2px solid #a7dfcd">

                            <!--Label: Customer Name,  Contact No. Email, Adress, Senior Citizen /PWD ID-->
                            <div class="row m-t-15">
                                    <div class="col-lg-12">
                                            <h5><span style="color:gray">Customer Name:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xavier Tanguilan Eugenio</h5>                    
                                    </div>  
                                    <div class="col-lg-12 m-t-10">
                                            <h5><span style="color:gray">Contact No.:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(999)9999-999</h5>               
                                    </div>
                                    <div class="col-lg-12 m-t-10">
                                            <h5><span style="color:gray">Email Address:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;xavier@handsome.com</h5>
                                    </div>
                                    <div class="col-lg-12 m-t-10">
                                            <h5><span style="color:gray">Address:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Valenzuella City</h5>
                                    </div>
                                    <div class="col-lg-12 m-t-10">
                                            <h5><span style="color:gray">Senior Citizen/ PWD ID:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N/A</h5>
                                    </div>                    
                                </div> 


                            <!--START Vehicle INFORMATION-->
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

                        <h4 class="m-t-25">Inspection Details</h2>
                        <hr style="margin-top: 10px; border: 2px solid #ffb74d  ">

                        <div class="row m-t-20" style="padding-bottom:20px">  
                                    <div class="col-lg-6 m-t-0">
                                            <h5><span style="color:gray">Assign Mechanic:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Juan Dela Cruz</h5>
                                    </div>                         
                                    <div class="col-lg-6 m-t-0">
                                            <h5><span style="color:gray">Service Bay:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3</h5>
                                    </div> 
                                    
                        </div>

                        <table class="table table-bordered table-hover dataTable no-footer m-t-15" id="sample_6" role="grid" aria-describedby="sample_6_info" >
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
                                                   qwertyuiopasdfghjkl
                                                </div> 
                                            </li>
                                            <li style="padding-bottom: 7px; padding-left: 0em;">
                                                <div class ="col-sm-10">
                                                   zxcvbnm1234567890
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
                                                    halooooooooo
                                                </div> 
                                            </li>
                                            <li style="padding-bottom: 7px; padding-left: 0em;">
                                                <div class ="col-sm-10">
                                                    hiiiiiiiiiiii
                                                </div> 
                                            </li>
                                            </ul>                
                                                
                                            </td>
                                        </tr>
                                            <!--END PER INSPECTION RED ITEMS -->
                                    </tbody>
                                </table>
                            <!--END OF INPECTION TABLE -->

                            <div class="row m-t-20" style="padding-bottom:20px">  
                                    <div class="col-lg-12 m-t-0">
                                            <h5><span style="color:gray">Remarks:
                                            <p class="m-t-20">
                                            </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The quick brown fox jump over the lazy dog.</h5>
                                            </p>
                                    </div>                         
                            </div>



                            
                            </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                                <!--Button: Back, SAVe-->
                             <div class="card-footer bg-black disabled">
                               <div class="examples transitions m-t-5 pull-right">
                                    <button onclick="window.location='{{ url("/inspect") }}'" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn gray"  href="/vehicletype"><i class="fa fa-arrow-left" >
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