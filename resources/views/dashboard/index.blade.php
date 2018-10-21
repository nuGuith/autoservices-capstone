@extends('layout.master') <!-- Include Master PAge -->
@section('Title','Dashboard') <!-- Page Title -->
@section('content')


<link type="text/css" rel="stylesheet" href="vendors/fullcalendar/css/fullcalendar.min.css" />


<link type="text/css" rel="stylesheet" href="vendors/swiper/css/swiper.min.css"/>
<link type="text/css" rel="stylesheet" href="vendors/bootstrap-switch/css/bootstrap-switch.min.css" />
<link type="text/css" rel="stylesheet" href="vendors/switchery/css/switchery.min.css" />

<link rel="stylesheet" type="text/css" href="css/pages/widgets.css">
<link type="text/css" rel="stylesheet" href="css/pages/calendar_custom.css" />
<link type="text/css" rel="stylesheet" href="vendors/modal/css/component.css"/>

<link type="text/css" rel="stylesheet" href="vendors/tooltipster/css/tooltipster.bundle.min.css">
<link type="text/css" rel="stylesheet" href="vendors/tipso/css/tipso.min.css">

<link type="text/css" rel="stylesheet" href="vendors/Buttons/css/buttons.min.css"/>
<link type="text/css" rel="stylesheet" href="css/pages/buttons.css"/>
<!---->

<style>
    .bts{
        width: 70px;
        height: 70px;
    }
</style>


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
                <div class="col-lg-4">
                    <div class="icon_align bg-white widget_border m-t-15" style="border-color: black">
                        <div class="float-right progress_icon">
                            <span class="fa-stack fa-sm ">
                                <!-- <i class="fa fa-circle fa-stack-2x" style="color: #DCDCDC"></i>
                                <i class="fa fa-gear fa-stack-1x fa-inverse text-primary"></i> -->
                                <button class="fa fa-gear fa-stack-1x fa-inverse text-primary button-circle button-wrapper bts fadeindown">
                                </button>
                           </span>
                        </div>
                        <div class="text-left">
                            <h1 id="widget_count3" style="color: green ">{{$count_ongoing}}</h1>
                            <h4 style="color:black;">On going Job Orders</h4>
                        </div>                                         
                    </div>
                </div>
                <!-- CARD: PENDING -->
                <div class="col-lg-4">
                    <div class="icon_align bg-white widget_border m-t-15" style="border-color: black">
                        <div class="float-right progress_icon">
                            <span class="fa-stack fa-sm ">
                                <!-- <i class="fa fa-circle fa-stack-2x" style="color: #DCDCDC"></i> -->
                                <!-- <i class="fa fa-ellipsis-h fa-stack-1x fa-inverse text-danger"></i> -->
                                <button class="button-circle button-wrapper bts fadeindown fa fa-ellipsis-h fa-stack-1x fa-inverse text-danger"
                                data-toggle="modal" data-target="#modal-fadeindown">
                                </button>
                           </span>
                        </div>
                        <div class="text-left">
                            <h1 id="widget_count3" style="color: green ">{{$count_pending}}</h1>
                            <h4 style="color:black;">Pending Job Orders</h4>
                        </div>                                         
                    </div>
                </div>               
                <!-- CARD:BACK JOB-->
                <div class="col-lg-4">
                    <div class="icon_align bg-white widget_border m-t-15" style="border-color: black">
                        <div class="float-right progress_icon">
                            <span class="fa-stack fa-sm ">
                                <!-- <i class="fa fa-circle fa-stack-2x" style="color: #DCDCDC"></i>
                                <i class="fa fa-rotate-left fa-stack-1x fa-inverse text-success"></i> -->
                                <button class="button-circle button-wrapper bts adv_cust_mod_btn fadein fa fa-rotate-left fa-stack-1x fa-inverse text-success"
                                    data-toggle="modal" data-target="#modal-1">
                                </button>
                           </span>
                        </div>
                        <div class="text-left">
                            <h1 id="widget_count3" style="color: green ">{{$count_backjob}}</h1>
                            <h4 style="color:black;">Back Jobs</h4>
                        </div>                                             
                    </div>
                </div>
                <!--TABLE: ONGOING JOB ORDERS -->
                <div class="col-lg-12 m-t-15">
                <div class="card">
                    <div class="card-header bg-dark">
                        <div class="btn-group">
                            <h4 class="m-t-5">
                            <i class="fa fa-info"></i>
                            &nbsp;Ongoing Job Orders</h4>
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
                            <table class="table table-bordered table-hover table-advance dataTable no-footer" id="ongoing" role="grid">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 20%;"><b>Date</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 15%;"><b>Job Order ID</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 20%;"><b>Vehicle Information</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 50%;"><b>Customer Name</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 20%;"><b>Actions</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($joborder as $jo)
                                    <tr role="row" class="even">
                                        <td class="center">
                                            {{$jo->created_at}}
                                        </td>
                                        <td class="center">
                                            JO00{{$jo->JobOrderID}}
                                        </td>
                                        <td class="center">
                                            @foreach($automobiles as $automobile) 
                                                @if($jo->AutomobileID == $automobile->AutomobileID)
                                                    <b>Plate Number:</b> {{$automobile->PlateNo}}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($automobiles as $automobile)
                                                @if($jo->AutomobileID == $automobile->AutomobileID)
                                                    @foreach($customers as $customer)
                                                        @if($customer->CustomerID == $automobile->CustomerID)
                                                            {{$customer->FullName}}
                                                        @endif
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>  
                                            <div class="examples transitions m-t-5">
                                                <!--VIEW BUTTON-->
                                                <a class="btn btn-primary hvr-float-shadow tipso_bounceIn" data-background="#00C0EF" data-color="white" target="_blank" data-tipso="View progress" href="/updatejoborder/{{$jo->JobOrderID}}" >
                                                <i class="fa fa-eye text-white"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>      
            </div>
        <!-- BACK JOB -->
            <div class="modal" tabindex="-1" id="modal-1" role="dialog"
                     aria-labelledby="modalLabelfade" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-success">
                                <h4 class="modal-title text-white" id="modalLabelfade">Back Job</h4>
                            </div>
                            <div class="modal-body">
                            <table class="table table-bordered table-hover dataTable no-footer" id="backjob" role="grid">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 20%;"><b>Back Job ID</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 15%;"><b>Job Order ID</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 20%;"><b>Vehicle</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 20%;"><b>Status</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 20%;"><b>Actions</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($backjob as $bj)
                                    <tr role="row" class="even">
                                        <td class="center">
                                            BJ00{{$bj->BackJobID}}
                                        </td>
                                        <td class="center">
                                            JO00{{$bj->JobOrderID}}
                                        </td>
                                        <td class="center">
                                            @foreach($automobiles as $automobile) 
                                                @if($bj->AutomobileID == $automobile->AutomobileID)
                                                    <b>{{$automobile->PlateNo}}</b>
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            {{$bj->Status}}
                                        </td>
                                        <td>  
                                            <div class="examples transitions m-t-5">
                                                <!--VIEW BUTTON-->
                                                <a class="btn btn-primary hvr-float-shadow" data-background="#00C0EF" data-color="white" target="_blank" href="/updatebackjob/{{$bj->BackJobID}}" >
                                                <i class="fa fa-eye text-white"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            </div>
                            <div class="modal-footer">
                                <button class="btn  btn-success" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- BACK JOB -->
        <!-- PENDING JOB ORDERS -->
            <div class="modal" tabindex="-1" id="modal-fadeindown" role="dialog"
                     aria-labelledby="modalLabelfade3" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-danger">
                                <h4 class="modal-title text-white" id="modalLabelfade3">Pending Job Orders</h4>
                            </div>
                            <div class="modal-body">
                            <table class="table table-bordered table-hover dataTable no-footer" id="pending" role="grid">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 20%;"><b>Date</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 15%;"><b>Job Order ID</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 20%;"><b>Vehicle</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 50%;"><b>Customer Name</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 50%;"><b>Time</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 20%;"><b>Actions</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pending_jo as $pending)
                                    <tr role="row" class="even">
                                        <td class="center">
                                            {{$pending->created_at}}
                                        </td>
                                        <td class="center">
                                            JO00{{$pending->JobOrderID}}
                                        </td>
                                        <td class="center">
                                            @foreach($automobiles as $automobile) 
                                                @if($pending->AutomobileID == $automobile->AutomobileID)
                                                    <b>{{$automobile->PlateNo}}</b>
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($automobiles as $automobile)
                                                @if($pending->AutomobileID == $automobile->AutomobileID)
                                                    @foreach($customers as $customer)
                                                        @if($customer->CustomerID == $automobile->CustomerID)
                                                            {{$customer->FullName}}
                                                        @endif
                                                    @endforeach
                                                @endif
                                            @endforeach
                                        </td>
                                        <td></td>
                                        <td>  
                                            <div class="examples transitions m-t-5">
                                                <!--VIEW BUTTON-->
                                                <a class="btn btn-primary hvr-float-shadow" data-background="#00C0EF" data-color="white" target="_blank" href="/updatejoborder/{{$pending->JobOrderID}}" >
                                                <i class="fa fa-eye text-white"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- PENDING JOB ORDERS -->
            

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
<script type="text/javascript" src="js/pages/modals.js"></script>
<script type="text/javascript" src="js/pages/calendar.js"></script>
<script type="text/javascript" src="vendors/Buttons/js/buttons.js"></script>

<script>
$(document).ready(function() {
    $('#ongoing').DataTable({});
} );

</script>

<script>
$(document).ready(function() {
    $('#pending').DataTable({});
} );

</script>

<script>

$(document).ready(function() {
    $('#backjob').dataTable({});
} );
</script>


@stop