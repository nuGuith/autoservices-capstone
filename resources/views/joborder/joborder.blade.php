@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','Job Order') <!-- Page Title -->
@section('content')

    <link type="text/css" rel="stylesheet" href="vendors/sweetalert/css/sweetalert2.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/pages/sweet_alert.css"/>

    <link type="text/css" rel="stylesheet" href="vendors/animate/css/animate.min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/hover/css/hover-min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/wow/css/animate.css"/>

    <link type="text/css" rel="stylesheet" href="vendors/themify/css/themify-icons.css" />

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
                            <i class="fa fa-wpforms"></i>&nbsp;
                            Job Order
                        </h4>
                    </div>

                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right">
                            <li class="breadcrumb-item " >
                                <a href="/joborder">
                                    <i class="fa fa-wpforms" data-pack="default" data-tags=""></i>
                                    &nbsp;Job Order
                                </a>
                            </li>
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
                                        <a  id="editable_table_new" class=" btn btn-raised btn-default hvr-pulse-grow adv_cust_mod_btn" 
                                                    href="/addjoborder">
                                        <i class="fa fa-plus"></i> &nbsp;  Add Job Order                                  
                                        </a>
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
                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 13%;"><b>Job Order ID</b></th>
                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 25%;"><b>Vehicle</b></th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 27%;"><b>Customer</b></th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 15%;"><b>Date</b></th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 23%;"><b>Actions</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($joborders as $joborder)
                                <tr role="row" class="even">
                                    <td>
                                        JO000{{$joborder->JobOrderID}}
                                    </td>
                                    <td>
                                        <ul style="padding-left: 1.2em;">
                                        <!-- @foreach($automobiles as $automobile) -->
                                            <!-- @if($joborder->AutomobileID == $automobile->AutomobileID) -->
                                                <li>Plate No: {{$automobile->PlateNo}}</li>
                                                <li>
                                                    <!-- @foreach($automobile_models as $md) -->
                                                        <!-- @if($automobile->ModelID == $md->ModelID) -->
                                                            Model: {{$md->AutomobileModel}}
                                                        <!-- @endif -->
                                                    <!-- @endforeach -->
                                                </li>
                                                <li>Chassis No: {{$automobile->ChassisNo}}</li>
                                                <li>Mileage: {{$automobile->Mileage}} KM</li>
                                            <!-- @endif -->
                                        <!-- @endforeach -->
                                        </ul>
                                    </td>
                                    <td class="center">
                                        <ul style="padding-left: 1.2em;">
                                        <!-- @foreach($customers as $customer) -->
                                            <!-- @if($joborder->CustomerID == $customer->CustomerID) -->
                                                <li>Name: {{$customer->FullName}}</li>
                                                <li>Contact No: {{$customer->ContactNo}}</li>
                                                <li>Address: {{$customer->CompleteAddress}}</li>
                                            <!-- @endif -->
                                        <!-- @endforeach -->
                                        </ul>
                                    </td>
                                    <td>
                                        {{$joborder->created_at}}                                             
                                    </td>

                                    <td>   
                                        <div class="examples transitions m-t-5">
                                            <!--VIEW BUTTON-->
                                            <a class="btn btn-primary hvr-float-shadow tipso_bounceIn" data-background=" #6495ED" data-color="white" data-tipso="View" href="/viewjoborder/{{$joborder->JobOrderID}}" >
                                            <i class="fa fa-eye text-white"></i>
                                            </a>

                                            <!--UPDATE BUTTON-->
                                            <a class="btn btn-info hvr-float-shadow  tipso_bounceIn" style ="width:;"data-background="blue" data-color="white" data-tipso="Update" href="/updatejoborder/{{$joborder->JobOrderID}}">
                                            <i class="fa fa-refresh text-white"></i>
                                            </a>

                                            <!--EDIT BUTTON-->
                                            <a class="btn btn-success hvr-float-shadow adv_cust_mod_btn tipso_bounceIn" data-background="#3CB371" data-color="white" data-tipso="Edit" href="/editjoborder/{{$joborder->JobOrderID}}"><i class="fa fa-pencil text-white"></i>
                                            </a>
                                        </div>

                                        <div class="examples transitions m-t-5">
                                            <!--INSPECT BUTTON-->
                                            <button class="btn hvr-float-shadow tipso_bounceIn" style="background-color: violet; color:violet; width:" data-background="violet" data-color="white" data-tipso="View Inspect" onclick="window.location='{{ url("/vieweinspect") }}'" ><i class="fa fa-search text-white"></i></button>

                                            <!--ESTIMATE BUTTON-->
                                            <button class="btn btn-warning hvr-float-shadow adv_cust_mod_btn tipso_bounceIn" data-background="  #ffcc00" data-color="white" data-tipso="View Estimate" onclick="window.location='{{ url("/viewestimates") }}'"><i class="fa fa-file-text text-white"></i>
                                            </button>

                                        <!--OFFICIAL RECEIPT BUTTON-->
                                            <button class="btn hvr-float-shadow tipso_bounceIn" style="background-color:#b2b2a4; color:#b2b2a4; width:;" data-background="#b2b2a4" data-color="white" data-tipso="Official Receipt" onclick="window.location='{{ url("/receipt") }}'" ><i class="ti-receipt text-white" style="left: 0em;"></i></button>
                                        </div>

                                        <div class="examples transitions m-t-5">
                                            <!--DELETE BUTTON-->
                                            <button class="btn btn-danger hvr-float-shadow warning confirm tipso_bounceIn" data-background="#FA8072" data-color="white" data-tipso="Delete"><i class="fa fa-trash text-white"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
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

<script>
    $(document).ready(function() {
    $('#example2').DataTable( {
        "pagingType": "full_numbers"
    } );    
} );

</script>


@stop