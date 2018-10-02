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
                            &nbsp;Vehicle Information
                        </h4>
                    </div>
                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right">
                            <li class="breadcrumb-item " >
                                <a href="/vehicleinformation">
                                    <i class="fa fa-info" data-pack="default" data-tags=""></i>
                                    &nbsp;Vehicle Information
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
                                                        <li>Model: {{ $automobile->Model }} {{ $automobile->Year }}</li>
                                                        <li>Chassis No: {{ $automobile->ChassisNo }}</li>
                                                    </ul>
                                                </td>
                                                <td>
                                                    <button type="button" id="viewBtn" onclick="showHistory({{$automobile->AutomobileID}});" data-automobileid="{{$automobile->AutomobileID}}" class="btn btn-outline-info tipso_bounceIn" data-background=" #6495ED" data-color="white" data-tipso="View"><i class="fa fa-refresh text-green"></i></button>   
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
                        <!-- START VIEW MODAL -->
                        <div class="modal fade in " id="viewModal" tabindex="-3" role="dialog" aria-hidden="false">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header bg-info">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title text-white">
                                            <i class="fa fa-eye"></i>
                                            &nbsp;View Vehicle History
                                        </h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-5 m-t-10">
                                                <div class="card">                                   
                                                    <div class="card-block">
                                                       <!--START OTHER INFORMATION-->
                                                        <h4 class ="m-t-15">Vehicle Information</h2>
                                                        <hr style="margin-top: 10px; border: 2px solid #6699cc">
                                                        <div class="row m-t-15">
                                                            <div class="col-lg-12 m-t-5">
                                                                <h5>
                                                                    <span style="color:gray">Plate No.:</span>
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                    <h5 class="plateno"></h5>
                                                                </h5>
                                                            </div>
                                                            <div class="col-lg-12 m-t-10">
                                                                <h5>
                                                                    <span style="color:gray">Chassis No.:</span>
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                </h5>
                                                            </div>
                                                            <div class="col-lg-12 m-t-10">
                                                                <h5>
                                                                    <span style="color:gray">Make:</span>
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                </h5>               
                                                            </div>
                                                            <div class="col-lg-12 m-t-10">
                                                                <h5>
                                                                    <span style="color:gray">Model:</span>
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                </h5>
                                                            </div>
                                                            <div class="col-lg-12 m-t-10">
                                                                <h5>
                                                                    <span style="color:gray">Transmission:</span>
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                </h5>
                                                            </div>
                                                            <div class="col-lg-12 m-t-10">
                                                                <h5>
                                                                    <span style="color:gray">Color:</span>
                                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                </h5>
                                                            </div>           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-7 m-t-25">
                                                <!--START JOB ORDER PROGRESS DETAIL-->
                                                <h4 class="m-t-15">Job Order History Details</h4>                
                                                <hr style="margin-top: 10px; border: 2px solid #ffb74d  ">
                                                <div class="row m-t-15">
                                                    <h5 class="m-t-5 m-l-20" style="display: inline">Notes: </h5>
                                                    <div class="col-lg-4">
                                                        <ul style="padding-left: 1.2em;">
                                                            <li style ="color:blue">Service Rendered</li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <ul style="padding-left: 1.2em;">
                                                            <li style ="color:red">Unrendered Service in Estimate</li>    
                                                        </ul>
                                                    </div>
                                                </div> 
                                                <!--Accordion: Payment Details -->
                                                <div class="row m-t-5">
                                                    <div class="col-lg-12">
                                                        <div class="accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                                                            <div class="card">
                                                                <div class="card-header" role="tab" id="headingOne">
                                                                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne" aria-expanded="" aria-controls="collapseOne" active="false">
                                                                        <!--Lablel: balance -->
                                                                        <h5 class="">
                                                                            <i class="fa fa-angle-down rotate-icon pull-right"></i>
                                                                            <span style="color:gray" id="joID">
                                                                                <i style="padding-left: 270px;"></i>
                                                                                <b> September 7, 2018</b>
                                                                            </span>
                                                                        </h5>
                                                                    </a>
                                                                </div>                                            
                                                                <!-- accordion body -->
                                                                <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionEx">
                                                                    <div class="card-body" style="padding-left:15px; padding-right: 15px; ">
                                                                        <!--Lable: Overl All Total -->
                                                                        <div class="row " style="padding-bottom:0px">  
                                                                            <div class="col-lg-12">
                                                                                <!--Lable: Overl All Total -->
                                                                                <div class="row m-t-20">  
                                                                                    <div class="col-lg-6">
                                                                                        <h5>
                                                                                            <span style="color:gray">Mileage:</span>
                                                                                             &nbsp;&nbsp;1500 km
                                                                                        </h5>
                                                                                    </div>
                                                                                    <!-- <div class="col-lg-6">
                                                                                        <h5><span style="color:gray">Mileage:
                                                                                        </span>&nbsp;&nbsp;1500 km</h5>
                                                                                    </div>  -->                  
                                                                                </div>
                                                                                <div class="row m-t-15">  
                                                                                    <div class="col-lg-12">
                                                                                        <table class="table table-bordered table-hover dataTable no-footer " id="sample_6" role="grid" aria-describedby="sample_6_info" style="top:5px;" >
                                                                                            <thead>
                                                                                                <tr class="trrow">
                                                                                                    <th>Service</th>
                                                                                                    <th>Product</th>   
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                <tr role="row">
                                                                                                    <!--Column: Service-->
                                                                                                    <td style ="color:blue">
                                                                                                        Change Oil
                                                                                                    </td>
                                                                                                    <!--Column: Product-->
                                                                                                    <td>
                                                                                                        <ul style="padding-left: 1.2em;">
                                                                                                            <li style ="color:blue">Dunlop 1.5mL x 4 pc</li>
                                                                                                        </ul>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr role="row">
                                                                                                    <!--Column: Service-->
                                                                                                    <td style ="color:red">
                                                                                                        Change Oil
                                                                                                    </td>
                                                                                                    <!--Column: Product-->
                                                                                                    <td>
                                                                                                        <ul style="padding-left: 1.2em;">
                                                                                                            <li style ="color:red">Dunlop 1.5mL x 4 pc</li>
                                                                                                        </ul>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>  
                                                                                        </table>
                                                                                    </div>                      
                                                                                </div>
                                                                                <div class="row m-t-10 m-b-20">  
                                                                                    <div class="col-lg-12">
                                                                                        <h5>
                                                                                            <span style="color:gray">Remarks:</span>
                                                                                            &nbsp;&nbsp;The quick brown fox jumpover the lazy dog.
                                                                                        </h5>
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
                                    </div>
                                    <div class="modal-footer m-t-10">
                                        <div class="examples transitions m-t-5">
                                            <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                    <!--Button: Back, SAVe-->
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

<script>
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
</script>


@stop