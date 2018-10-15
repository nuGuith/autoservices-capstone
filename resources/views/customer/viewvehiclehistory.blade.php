@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','Vehicle History') <!-- Page Title -->
@section('content')

    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/sweetalert/css/sweetalert2.min.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/pages/sweet_alert.css') }}"/>

    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/animate/css/animate.min.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/hover/css/hover-min.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/wow/css/animate.css') }}"/>

    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/modal/css/component.css') }}"/>

    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/tooltipster/css/tooltipster.bundle.min.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/tipso/css/tipso.min.css') }}"/>

    <!-- end of plugin styles -->
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/pages/animations.css') }}"/>

    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/pages/portlet.css') }}"/>

    <style type="text/css">
        @media (min-width: 768px) {
          .modal-xl {
            width: 90%;
           max-width: 1000px;
          }
        }
    </style>

    <!-- CONTENT -->
    <div id="content" class="bg-container">
        <header class="head">
            <div class="main-bar">
                <div class="row" style = "height: 47px;">
                    <div class="col-6">
                        <h4 class="m-t-15">
                            <i class="fa fa-info"></i>
                            &nbsp;Vehicle History
                        </h4>
                    </div>
                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right">
                            <li class="breadcrumb-item " >
                                <a href="/customerinformation">
                                    <i class="fa fa-info" data-pack="default" data-tags=""></i>
                                    &nbsp;Customer Information
                                </a>
                            </li>
                            <li class="active breadcrumb-item">&nbsp;Vehicle History</li>
                        </ol>
                    </div>
                </div>
            </div>
        </header>
        <div class="outer">
            <div class="inner bg-container">
                <div class="card">
                    <div class="card-header bg-black">
                        <span class="fa fa-eye fa-lg"></span>
                        &nbsp;View Vehicle History
                    </div>
                    <div class="row" style="padding-left: 15px; padding-right:15px;">
                        <div class="col-lg-12 m-t-25">
                            <!--START CUSTOMER INFORMATION-->
                            <h4 class="m-t-15">Customer Information</h2>
                            <hr style="margin-top: 10px; border: 2px solid #a7dfcd">
                            <!--Label: Customer Name,  Contact No. Email, Adress, Senior Citizen /PWD ID-->
                            <div class="row m-t-15">
                                <div class="col-lg-6">
                                    <h5>
                                        <span style="color:gray">Customer Name:</span>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$customer->FirstName}} {{$customer->MiddleName}} {{$customer->LastName}}
                                    </h5>                    
                                </div> 
                                <div class="col-lg-6">
                                    <h5>
                                        <span style="color:gray">Email Address:</span>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$customer->EmailAddress}}
                                    </h5>
                                </div>
                                <div class="col-lg-6 m-t-10">
                                    <h5>
                                        <span style="color:gray">Contact No.:</span>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$customer->ContactNo}}
                                    </h5>               
                                </div>
                                <div class="col-lg-6 m-t-10">
                                    <h5>
                                        <span style="color:gray">Senior Citizen/ PWD ID:</span>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$customer->PWD_SC_ID}}
                                    </h5>
                                </div>    
                                <div class="col-lg-6 m-t-10">
                                    <h5>
                                        <span style="color:gray">Address:</span>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$customer->CompleteAddress}}
                                    </h5>
                                </div>                 
                            </div>
                            <!--START OTHER INFORMATION-->
                            <h4 class ="m-t-30">Customer Vehicle</h2>
                            <hr style="margin-top: 10px; border: 2px solid #6699cc">
                            <div class="row m-t-15">
                                <div class="col-md-12">
                                    <!--Start of job order profgress tavle-->
                                    <table class="table table-bordered table-hover dataTable" id="sample_6" role="grid" aria-describedby="sample_6_info" style="top:30px;" >
                                        <thead>
                                            <tr class="trrow">
                                                <th style="width:20%">Vehicle ID</th>
                                                <th>Vehicle</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($automobiles as $automobile)
                                            <!--@if($automobile->CustomerID == $customer->CustomerID)-->
                                            <tr role="row" class="odd">
                                                <!--Column: Vehicle -->
                                                <td>
                                                    AM0000{{ $automobile->AutomobileID }}
                                                </td>
                                                <td>
                                                    <ul style="padding-left: 1.2em;">
                                                        <li>Plate No: {{ $automobile->PlateNo }}</li>
                                                        <li>Make: {{ $automobile-> Make }}</li>
                                                        <li>Model: {{ $automobile->Model }} {{ $automobile->Year }}</li>
                                                        <li>Transmission: {{ $automobile->Transmission }}</li>
                                                        <li>Color: {{ $automobile-> Color }}</li>
                                                        <li>Chassis No: {{ $automobile->ChassisNo }}</li>

                                                    </ul>
                                                </td>
                                                <td>
                                                    <!-- <button onclick="window.location='{{ url("/viewJob") }}'" class="btn btn-primary hvr-float-shadow adv_cust_mod_btn gray tipso_bounceIn" data-tipso="Job Order " data-background=" #6495ED">
                                                    <i class="fa fa-gear" ></i>
                                                    </button>
                                                    <button onclick="window.location='{{ url("/viewEstimates") }}'" class="btn btn-danger hvr-float-shadow adv_cust_mod_btn gray tipso_bounceIn"  data-tipso="Estimates" data-background=" #FF4D4D">
                                                    <i class="fa fa-file-text" ></i>
                                                    </button>
                                                    <button type="button" id="updateBtn1"  class="btn btn-success tipso_bounceIn" data-background=" #008C62" data-color="white" data-tipso="Back Job"  data-toggle="modal" data-href="#responsive" href="#viewModal">
                                                        <i class="fa fa-rotate-left text-green"></i>
                                                    </button> -->
                                                    <button class="btn btn-primary adv_cust_mod_btn fadein tipso_bounceIn"
                                                    data-tipso="Job Orders" data-background=" #6495ED" data-toggle="modal" data-target="#modal-3" data-id="{{$automobile->AutomobileID}}">
                                                    <i class="fa fa-gear"></i>
                                                    </button>
                                                    <button class="btn btn-danger adv_cust_mod_btn fadein tipso_bounceIn"
                                                    data-tipso="Estimates" data-background=" #FF4D4D"
                                                    data-toggle="modal" data-target="#modal-2">
                                                    <i class="fa fa-file-text"></i>
                                                    </button>
                                                    <button class="btn btn-success adv_cust_mod_btn fadein tipso_bounceIn"
                                                    data-tipso="Back Jobs" data-background="#008C62"
                                                    data-toggle="modal" data-target="#modal-1">
                                                    <i class="fa fa-rotate-left text-green"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            <!--example for service -->
                                            <!--@endif-->
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Button: Back-->
                    <div class="card-footer bg-black disabled m-t-15">
                        <div class="examples transitions m-t-5 pull-right">
                            <button onclick="window.location='{{ url("/customerinformation") }}'" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn gray"  href="/customerinformation">
                                <i class="fa fa-arrow-left" ></i>&nbsp;Back
                            </button>          
                            <!--  <button class="btn btn-info source success_clr m-l-0 hvr-float-shadow adv_cust_mod_btn" style ="width: 80px;"  ><i class="fa fa-print text-white" ></i>&nbsp; Print</button> -->
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
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 50%;"><b>Time</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 20%;"><b>Actions</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($showbackjob as $backjob)
                                    <tr role="row" class="even">
                                        <td class="center">{{$backjob->BackJobID}}</td>
                                        <td class="center">{{$backjob->JobOrderID}}</td>
                                        <td class="center">
                                        @foreach($automobiles as $automobile)
                                            @foreach($showjoborder as $joborder)
                                                @if($backjob->JobOrderID == $joborder->JobOrderID)
                                                    @if($joborder->AutomobileID == $automobile->AutomobileID)
                                                        {{$automobile->PlateNo}}
                                                    @endif
                                                @endif
                                            @endforeach
                                        @endforeach
                                        </td>
                                        <td>{{$backjob->Status}}</td>
                                        <td></td>
                                        <td>  
                                            <div class="examples transitions m-t-5">
                                                <!--VIEW BUTTON-->
                                                <a class="btn btn-primary hvr-float-shadow" data-background="#00C0EF" data-color="white" target="_blank" href="/updatejoborder/" >
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
            <!--JOB ORDERS -->
                <div class="modal" tabindex="-1" id="modal-3" role="dialog"
                     aria-labelledby="modalLabelfade" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h4 class="modal-title text-white" id="modalLabelfade">Job Orders</h4>
                            </div>
                            <div class="modal-body">
                            <table class="table table-bordered table-hover dataTable no-footer" id="joborder" role="grid">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 20%;"><b>Job Order ID</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 15%;"><b>Start Date</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 20%;"><b>End Date</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 20%;"><b>Status</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 20%;"><b>Actions</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($showjoborder as $jo)
                                    <tr role="row" class="even">
                                        <td class="center">
                                            JO00{{$jo->JobOrderID}}
                                        </td>
                                        <td class="center">
                                            {{$jo->JobStartDate}}
                                        </td>
                                        <td class="center">
                                            {{$jo->JobEndDate}}
                                        </td>
                                        <td>{{$jo->Status}}</td>
                                        <td>  
                                            <div class="examples transitions m-t-5">
                                                <!--VIEW BUTTON-->
                                                <a class="btn btn-primary hvr-float-shadow" data-background="#00C0EF" data-color="white" target="_blank" href="/viewjoborder/{{$jo->JobOrderID}}" >
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
                                <button class="btn btn-primary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- JOB ORDERS -->
        <!--ESTIMATES -->
                <div class="modal" tabindex="-1" id="modal-2" role="dialog"
                     aria-labelledby="modalLabelfade" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-danger">
                                <h4 class="modal-title text-white" id="modalLabelfade">Estimates</h4>
                            </div>
                            <div class="modal-body">
                            <table class="table table-bordered table-hover dataTable no-footer" id="estimate" role="grid">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 20%;"><b>Date</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 15%;"><b>Estimate ID</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 20%;"><b>Job Order ID</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 20%;"><b>Actions</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($showestimate as $estimate)
                                    <tr role="row" class="even">
                                        <td class="center">
                                        {{$estimate->created_at}}
                                        </td>
                                        <td class="center">
                                        {{$estimate->EstimateID}}
                                        </td>
                                        <td>
                                        @foreach($showjoborder as $joborder)
                                            @if($estimate->EstimateID == $joborder->EstimateID)
                                                {{$joborder->JobOrderID}}
                                            @endif
                                        @endforeach
                                        </td>
                                        <td>  
                                            <div class="examples transitions m-t-5">
                                                <!--VIEW BUTTON-->
                                                <a class="btn btn-primary hvr-float-shadow" data-background="#00C0EF" data-color="white" target="_blank" href="/viewestimates/{{$estimate->EstimateID}}" >
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
            <!-- ESTIMATES -->
        <!-- /.inner -->
    </div>
        <!-- /.outer -->
    <!--END CONTENT -->


<!-- global scripts sweet alerts-->
<script type="text/javascript" src="{{ URL::asset('js/components.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/custom.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('vendors/sweetalert/js/sweetalert2.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/pages/sweet_alerts.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('vendors/snabbt/js/snabbt.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('vendors/wow/js/wow.min.js') }}"></script>
<script>
    new WOW().init();
</script>

<script type="text/javascript" src="{{ URL::asset('vendors/tooltipster/js/tooltipster.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('vendors/tipso/js/tipso.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/pages/tooltips.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/pages/modals.js') }}"></script>
<!--End of global scripts-->

<!-- <script>
     function showHistory(automobileid){
        $.ajax({
            type: "GET",
            url: "/viewvehiclehistory/"+automobileid+"/showHistory",
            dataType: "JSON",
            success:function(data){
                $('.plateno').val(data.auto.PlateNo);
            }
        });
        $('#viewModal').modal('show');
    }
</script> -->

<script>
$(document).ready(function() {
    $('#joborder').DataTable({});
} );

</script>

<script>
$(document).ready(function() {
    $('#estimate').DataTable({});
} );

</script>

<script>
$(document).ready(function() {
    $('#backjob').DataTable({});
} );
</script>

<script>
$(document).ready(function(){
    $('modal-3').on('click', '.AutomobileID', function(){
        document.getElementById("AutomobileID").value = $(this).attr('data-id');
        console.log($(this).attr('data-id'));
    });
});
</script>

@stop