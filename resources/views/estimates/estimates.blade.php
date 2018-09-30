@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','Estimates') <!-- Page Title -->
@section('content')

    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/sweetalert/css/sweetalert2.min.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/pages/sweet_alert.css') }}"/>

    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/animate/css/animate.min.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/hover/css/hover-min.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/wow/css/animate.css') }}"/>

    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/tooltipster/css/tooltipster.bundle.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('vendors/tipso/css/tipso.min.css') }}">

    <link type="text/css" rel="stylesheet" href="{{ asset('css/pages/animations.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('css/pages/portlet.css') }}"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/animate/css/animate.min.css') }}" />
    <!--End of plugin styles-->

        <!-- CONTENT -->
        <div id="content" class="bg-container">

            <header class="head">
                <div class="main-bar">
                    <div class="row" style = "height: 47px;">
                    <div class="col-6">
                        <h4 class="m-t-15">
                            <i class="fa fa-file-text"></i>&nbsp;
                            Estimates
                        </h4>
                    </div>

                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right">
                            <li class="breadcrumb-item " >
                                <a href="/estimates">
                                    <i class="fa fa-file-text" data-pack="default" data-tags=""></i>
                                    &nbsp;Estimates
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
                                        <a  id="editable_table_new" class=" btn btn-raised btn-default hvr-pulse-grow adv_cust_mod_btn" href="/addestimates">
                                            <i class="fa fa-plus"></i> &nbsp;  Add Estimate                                  
                                         </a>
                                </div>
                            </div>


                            <div class="card-block m-t-35">
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
                                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 12%;"><b>Estimate ID</b></th>
                                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 25%;"><b>Vehicle</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 30%;"><b>Customer</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 15%;"><b>Date</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1"><b>Actions</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($estimates as $estimate)
                                                <tr role="row" class="even">
                                                    <td>
                                                        ES000{{ $estimate->EstimateID }}
                                                    </td>
                                                    <td>
                                                    <!-- @foreach($automobiles as $automobile) -->
                                                        <!-- @if($estimate->AutomobileID == $automobile->AutomobileID) -->
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
                                                    </td>
                                                    <td class="center">
                                                        <ul style="padding-left: 1.2em;">
                                                            <!-- @foreach($automobiles as $automobile) -->
                                                                <!-- @if($estimate->AutomobileID == $automobile->AutomobileID) -->
                                                                    <!-- @foreach($customers as $customer) -->
                                                                        <!-- @if($customer->CustomerID == $automobile->CustomerID) -->
                                                                        <li>Name: {{$customer->FullName}}</li>
                                                                        <li>Contact No: {{$customer->ContactNo}}</li>
                                                                        <li>Address: {{$customer->CompleteAddress}}</li>
                                                                        <!-- @endif -->
                                                                    <!-- @endforeach -->
                                                                <!-- @endif -->
                                                            <!-- @endforeach -->
                                                        </ul>
                                                    </td>
                                                    <td>{{ $estimate->created_at }}</td>
                                                    <td>
                                                        <!--VIEW BUTTON-->
                                                        <div class="examples transitions m-t-5">
                                                            <a class="btn btn-primary hvr-float-shadow tipso_bounceIn" data-background=" #00C0EF" data-color="white" data-tipso="View" href="/viewestimates/{{ $estimate->EstimateID }}" >
                                                                <i class="fa fa-eye text-white"></i>
                                                            </a>

                                                            <!--EDIT BUTTON-->
                                                            <a class="btn btn-success hvr-float-shadow tipso_bounceIn" data-background="#3CB371" data-color="white" data-tipso="Edit" href="/editestimates/{{ $estimate->EstimateID }}">
                                                                <i class="fa fa-pencil text-white"></i>
                                                            </a>
                                                
                                                            <!--DELETE BUTTON-->
                                                            <button class="btn btn-danger hvr-float-shadow warning confirm tipso_bounceIn" data-background="#FA8072" data-color="white" data-tipso="Delete">
                                                                <i class="fa fa-trash text-white"></i>
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
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/components.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/sweetalert/js/sweetalert2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/pages/sweet_alerts.js') }}"></script>
<!-- end of plugin scripts -->

<!-- global scripts animation-->
<script type="text/javascript" src="{{ asset('vendors/snabbt/js/snabbt.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/wow/js/wow.min.js') }}"></script>
<!-- end of plugin scripts -->
<script>
    new WOW().init();
</script>

<script type="text/javascript" src="{{ asset('vendors/tooltipster/js/tooltipster.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendors/tipso/js/tipso.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/pages/tooltips.js') }}"></script>


<!-- global scripts modals-->
<script type="text/javascript" src="{{ asset('js/pages/modals.js') }}"></script>
<!--End of global scripts-->

<script>
$(document).ready(function() {
    $('#example2').DataTable({
        "pagingType": "full_numbers",
        "order": [[3, 'desc']],
        scrollY: true,
        scroller: {
            "rowHeight": 1
        }
    });
});
</script>
@stop