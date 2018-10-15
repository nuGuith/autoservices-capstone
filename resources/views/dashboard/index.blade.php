@extends('layout.master') <!-- Include Master PAge -->
@section('Title','Dashboard') <!-- Page Title -->
@section('content')


<link type="text/css" rel="stylesheet" href="vendors/fullcalendar/css/fullcalendar.min.css" />


<link type="text/css" rel="stylesheet" href="vendors/swiper/css/swiper.min.css"/>
<link type="text/css" rel="stylesheet" href="vendors/bootstrap-switch/css/bootstrap-switch.min.css" />
<link type="text/css" rel="stylesheet" href="vendors/switchery/css/switchery.min.css" />

<link rel="stylesheet" type="text/css" href="css/pages/widgets.css">
<link type="text/css" rel="stylesheet" href="css/pages/calendar_custom.css" />


<link type="text/css" rel="stylesheet" href="vendors/tooltipster/css/tooltipster.bundle.min.css">
<link type="text/css" rel="stylesheet" href="vendors/tipso/css/tipso.min.css">

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
                        </ol>
                    </div>
            </div>
        </div>
    </header>

    <div class="outer">
        <div class="inner bg-light lter bg-container cal_btn_hov">
            <div class="col-lg-12">
                <div class="row"> 
                <!-- CARD:JOB ORDER -->
                <div class="col-lg-6">
                    <div class="icon_align bg-white widget_border m-t-15" style="border-color: black">
                        <div class="float-right progress_icon">
                            <span class="fa-stack fa-sm ">
                                <i class="fa fa-circle fa-stack-2x" style="color: #DCDCDC"></i>
                                <i class="fa fa-gear fa-stack-1x fa-inverse text-primary"></i>
                           </span>
                        </div>
                        <div class="text-left">
                            <h1 id="widget_count3" style="color: green "> 10</h1>
                            <h3 style="color:black;">On going Job Orders</h3>
                            <h4 style="color:green;">Completed: 00</h4>
                        </div>                                         
                    </div>
                </div>
                <!-- CARD:JOB ORDER -->
                <div class="col-lg-6">
                    <div class="icon_align bg-white widget_border m-t-15" style="border-color: black">
                        <div class="float-right progress_icon">
                            <span class="fa-stack fa-sm ">
                                <i class="fa fa-circle fa-stack-2x" style="color: #DCDCDC"></i>
                                <i class="fa fa-rotate-left fa-stack-1x fa-inverse text-success"></i>
                           </span>
                        </div>
                        <div class="text-left">
                            <h1 id="widget_count3" style="color: green "> 10</h1>
                            <h3 style="color:black;">On going Back Jobs</h3>
                            <h4 style="color:green;">Completed: 00</h4>
                        </div>                                             
                    </div>
                </div>
                <!--TABLE -->
                <div class="col-lg-12 m-t-15">
                <div class="card">
                    <div class="card-header bg-dark">
                        <div class="btn-group">
                            <h4 class="m-t-5">
                            <i class="fa fa-info"></i>
                            &nbsp;Ongoing Job Orders for </h4>
                        </div>
                    </div>
                    <div class="card-block m-t-0">
                        <div class="table-toolbar">
                            <div class="btn-group">
                                <div class="btn-group float-right users_grid_tools">
                                    <div class="tools"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <table class="table table-bordered table-hover table-advance dataTable no-footer" id="example2" role="grid">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 50%;"><b>Job Order ID</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 50%;"><b>Customer Name</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 50%;"><b>Actions</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr role="row" class="even">
                                        <td class="center">
                                            JO001
                                        </td>
                                        <td class="center">
                                            Ivann Nuguith
                                        </td>
                                        <td>  
                                            <div class="examples transitions m-t-5">
                                                <!--VIEW BUTTON-->
                                                <button class="btn btn-primary" data-background=" #6495ED" data-color="white" data-tipso="View" onclick="window.location='  {{ url("/viewvehiclehistory") }}'" >
                                                    <i class="fa fa-eye text-white"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="center">
                                            JO001
                                        </td>
                                        <td class="center">
                                            Ivann Nuguith
                                        </td>
                                        <td>  
                                            <div class="examples transitions m-t-5">
                                                <!--VIEW BUTTON-->
                                                <button class="btn btn-primary" data-background=" #6495ED" data-color="white" data-tipso="View" onclick="window.location='  {{ url("/viewvehiclehistory") }}'" >
                                                    <i class="fa fa-eye text-white"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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

<script type="text/javascript" src="vendors/tooltipster/js/tooltipster.bundle.min.js"></script>
<script type="text/javascript" src="vendors/tipso/js/tipso.min.js"></script>
<script type="text/javascript" src="js/pages/tooltips.js"></script>

<!-- end of plugin scripts -->

<script type="text/javascript" src="js/pages/calendar.js"></script>

<script>
    $(document).ready(function() {
    $('#example2').DataTable( {
        
    } );    
} );

</script>


@stop