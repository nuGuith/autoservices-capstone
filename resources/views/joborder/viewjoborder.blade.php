@extends('layout.master') <!-- Include Master Page -->
@section('Title','View Job Order') <!-- Page Title -->
@section('content')

    <link type="text/css" rel="stylesheet" href="{{URL::asset('vendors/sweetalert/css/sweetalert2.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/pages/sweet_alert.css')}}"/>

    <link type="text/css" rel="stylesheet" href="{{URL::asset('vendors/animate/css/animate.min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{URL::asset('vendors/hover/css/hover-min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{URL::asset('vendors/wow/css/animate.css')}}"/>

    <link type="text/css" rel="stylesheet" href="{{URL::asset('vendors/tooltipster/css/tooltipster.bundle.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('vendors/tipso/css/tipso.min.css')}}">

    <!-- end of plugin styles -->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/pages/animations.css')}}"/>

    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/pages/portlet.css')}}"/>

    <!-- CONTENT -->
    <div id="content" class="bg-container">
        <header class="head">
            <div class="main-bar">
                <div class="row" style = "height: 47px;">
                    <div class="col-6">
                        <h4 class="m-t-15">
                            <i class="fa fa-wpforms"></i>
                            &nbsp;Job Order
                        </h4>
                    </div>
                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right">
                            <li class="breadcrumb-item " >
                                <a href="/joborder">
                                    <i class="fa fa-wpforms" data-pack="default" data-tags=""></i>
                                    Job Order
                                </a>
                            </li>
                            <li class="active breadcrumb-item">&nbsp;View Job Order</li>
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
                        &nbsp;View Job Order
                    </div>
                    <div class="col-lg-12" style="padding-left: 15px; padding-right:15px;">
                        <div class="row m-t-25">

                            <!--Accordion: Job Order Details -->
                            <div class="col-lg-12">
                                            <div class="col-lg-12">
                                                <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                                                    <div class="card">
                                                        <div class="card-header" role="tab" id="headingOne">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="" aria-controls="collapseOne" active="false">
                                                                <h5 class="mb-0">
                                                                    <span style="color:gray">Job Order Details (Customer Information, Vehicle Information & Personnel Assignments)
                                                                        <i style="padding-left: 300px; color:red" id="balance" name="balance"></i>
                                                                    </span>
                                                                    <span>
                                                                        <i class="fa fa-angle-down rotate-icon pull-right"></i>
                                                                    </span>
                                                                </h5>
                                                            </a>
                                                        </div>

                                                        <!-- Content -->
                                                        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionEx">
                                                            <div class="card-body" style="padding: 0px 15px 15px">
                                                                <div class="row">
                                                                    <div class="col-lg-4">
                                                                        <!--START CUSTOMER INFORMATION-->
                                                                        <h4 class="m-t-15">Customer Information</h2>
                                                                        <hr style="margin-top: 10px; border: 2px solid #a7dfcd">


                                                                        <!--Label: Customer Name,  Contact No. Email, Adress, Senior Citizen /PWD ID-->
                                                                        <div class="row m-t-15">
                                                                            <div class="col-lg-12 m-t-10">
                                                                                    <h5><span style="color:gray">Name:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                                                                                    {{$customer->FullName}}</h5>                    
                                                                            </div>  
                                                                            <div class="col-lg-12 m-t-10">
                                                                                    <h5><span style="color:gray">Contact No.:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$customer->ContactNo}}</h5>               
                                                                            </div>
                                                                            <div class="col-lg-15 m-t-10">
                                                                                    <h5><span style="color:gray">&nbsp;&nbsp;&nbsp; Email Address:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$customer->EmailAddress}}</h5>
                                                                            </div>
                                                                            <div class="col-lg-12 m-t-10">
                                                                                    <h5><span style="color:gray">Address:</span>&nbsp;&nbsp;&nbsp;{{$customer->CompleteAddress}}</h5>
                                                                            </div>
                                                                            <div class="col-lg-12 m-t-10">
                                                                                    <h5><span style="color:gray">Senior Citizen/ PWD ID:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$customer->PWD_SC_No}}</h5>
                                                                            </div>             
                                                                        </div> 
                                                                    </div>

                                                                    <div class="col-lg-4">
                                                                        <!--START VEHICLE INFORMATION-->
                                                                        <h4 class ="m-t-15">Vehicle Information</h2>
                                                                        <hr style="margin-top: 10px; border: 2px solid #6699cc">

                                                                        <div class="row m-t-15">
                                                                            <div class="col-lg-12 m-t-10">
                                                                                    <h5><span style="color:gray">Plate No.:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$automobile->PlateNo}}</h5>                    
                                                                            </div>

                                                                            <div class="col-lg-12 m-t-10">
                                                                                    <h5><span style="color:gray">Chassis No.:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$automobile->ChassisNo}}</h5>
                                                                            </div>

                                                                            <div class="col-lg-12 m-t-10">
                                                                                    <h5><span style="color:gray">Mileage:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$automobile->Mileage}} km </h5>
                                                                            </div>

                                                                            <div class="col-lg-12 m-t-10">
                                                                                    <h5><span style="color:gray">Make:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$automobile->Make}}</h5>               
                                                                            </div>
                                                                            
                                                                            <div class="col-lg-12 m-t-10">
                                                                                    <h5><span style="color:gray">Model:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$automobile->Model}}</h5>
                                                                            </div>
                                                                            
                                                                            <div class="col-lg-12 m-t-10">
                                                                                    <h5><span style="color:gray">Transmission:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$automobile->Transmission}}</h5>
                                                                            </div>              
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-4">
                                                                        <!--START OTHER INFORMATION-->
                                                                        <h4 class ="m-t-15">Other Information</h2>
                                                                        <hr style="margin-top: 10px; border: 2px solid #aa66cc">

                                                                        <div class="row m-t-15">

                                                                            <div class="col-lg-12">
                                                                                <h5>Service Advisor: <span style="color:red"></span></h5>
                                                                                <p class="m-t-10">
                                                                                    <select class="form-control  chzn-select" tabindex="2">
                                                                                        <option disabled selected>Choose Service Advisor</option>
                                                                                        <option value="">Daphne</option>
                                                                                    </select>
                                                                                </p>
                                                                            </div>

                                                                            <div class="col-lg-12">
                                                                                <h5>Inventory Manager: <span style="color:red"></span></h5>
                                                                                <p class="m-t-10">
                                                                                    <select class="form-control  chzn-select" tabindex="2">
                                                                                        <option disabled selected>Choose Service Advisor</option>
                                                                                        <option value="">Daphne</option>
                                                                                    </select>
                                                                                </p>
                                                                            </div>

                                                                            <div class="col-lg-12">
                                                                                <h5>Quality Assurance: <span style="color:red"></span></h5>
                                                                                <p class="m-t-10">
                                                                                    <select class="form-control  chzn-select" tabindex="2">
                                                                                        <option disabled selected>Choose Service Advisor</option>
                                                                                        <option value="">Daphne</option>
                                                                                    </select>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Information END -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                </div>
                            </div>


                        <div class="col-lg-12 m-t-25">
                            <div class="card">                                   
                                <div class="card-block">
                                    <!--START JOB ORDER PROGRESS DETAIL-->
                                    <h4 class="m-t-15">Progress Details</h2>
                                    <hr style="margin-top: 10px; border: 2px solid #ffb74d  ">
                                    <!--Label: Start Date, End Date, Service Bay-->
                                    <div class="row m-t-15">
                                        <div class="col-lg-4">
                                            <h5>
                                                <span style="color:gray">Start:</span>
                                                &nbsp;&nbsp;&nbsp;{{ $startdate }}
                                            </h5>                    
                                        </div>  
                                        <div class="col-lg-4">
                                            <h5>
                                                <span style="color:gray">End:</span>
                                                &nbsp;&nbsp;&nbsp;&nbsp;{{ $joborder->release_timestamp }}
                                            </h5>               
                                        </div>
                                        <div class="col-lg-4">
                                            <h5>
                                                <span style="color:gray">Service Bay:</span>
                                                &nbsp;&nbsp;&nbsp;{{ $servicebay->ServiceBayName }}
                                            </h5>
                                        </div>
                                    </div> 
                                    <!--progress bar-->
                                    <div class="row m-t-20">
                                        <div class="col-lg-4">
                                            <h5>
                                                <span style="color:gray" id="progress">Progress: </span>
                                                &nbsp;&nbsp;&nbsp;
                                            </h5>
                                        </div>                        
                                        <div class="col-lg-8">
                                            <h5>
                                                <span style="color:gray">Status: </span>
                                                &nbsp;&nbsp;&nbsp;{{ $joborder->Status }}
                                            </h5>
                                        </div>
                                        <div class="col-lg-12 m-t-10">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 50%; height:20px; font-size:14px" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row m-t-15">
                                    <!--Start of job order profgress tavle-->
                                        <table class="table table-bordered table-hover dataTable" id="sample_6" role="grid" aria-describedby="sample_6_info" style="top:30px;" >
                                            <thead>
                                                <tr class="trrow">
                                                    <th>Items</th>
                                                    <th>Steps</th>
                                                    <th>Mechanic</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!--example for servoice -->
                                                <tr role="row" class="odd">
                                                    <!--Column: Service -->
                                                    <td>
                                                        Engine Overhaul
                                                    </td>
                                                    <!--Column: Quantity-->
                                                    <td style="text-align: center">
                                                        Step <span style="color:red"><b>10</b></span> of 16
                                                    </td>
                                                    <!--Column: Completed-->
                                                    <td>
                                                        Pedro Cruz Mayo
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
                                                        Change Oil
                                                    </td>
                                                    <!--Column: Quantity-->
                                                    <td style="text-align: center">
                                                        Step <span style="color:red"><b>0</b></span> of 4
                                                    </td>
                                                    <!--Column: Mechanic -->
                                                    <td>
                                                        John Paul Repolona
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
                                            <h5>
                                                <span style="color:gray">Remarks:</span>
                                                &nbsp;&nbsp;{{ $joborder->Remarks }}
                                            </h5>
                                        </div>                         
                                    </div><br>

                                    <!--Accordion: Payment Details -->
                                    <div class="row m-t-15">
                                        <div class="col-lg-12">
                                            <div class="accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                                                <div class="card">
                                                    <div class="card-header" role="tab" id="headingOne">
                                                        <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne" aria-expanded="" aria-controls="collapseOne" active="false">
                                                            <!--Label: balance -->
                                                            <h5 class="mb-0">
                                                                <span style="color:gray">Balance:
                                                                    <i style="padding-left: 300px; color:red" id="balance" name="balance"></i>
                                                                </span>
                                                                <i class="fa fa-angle-down rotate-icon pull-right"></i>
                                                            </h5>
                                                        </a>
                                                    </div>
                                                    <!-- accordion body -->
                                                    <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionEx">
                                                        <div class="card-body" style="padding-left:15px; padding-right: 15px; ">
                                                            <!--Lable: Overl All Total -->
                                                            <div class="row m-t-20" style="padding-bottom:0px">  
                                                                <div class="col-lg-12 m-t-0 pull-right">
                                                                    <h5>
                                                                        <span style="color:gray">Grand Total:</span>
                                                                        &nbsp;&nbsp;<span id="grandtotal">{{ $joborder->TotalAmountDue }}</span>
                                                                    </h5>
                                                                </div>                         
                                                            </div>  
                                                            <!--Table: Payment Details -->
                                                            <table class="table table-bordered table-hover dataTable no-footer "  role="grid" aria-describedby="sample_6_info" style="top:5px;" id="paymentTbl">
                                                                <thead>
                                                                    <tr class="trrow">
                                                                        <th>Date</th>
                                                                        <th>Amount</th>   
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach($payments as $payment)
                                                                    <tr role="row" class="odd" id="row">
                                                                        <!--Column: Date -->
                                                                        <td>{{ $payment->Date }}</td>
                                                                            <!--Column: Amount-->
                                                                        <td class="payment" id="payment" style="text-align: center">
                                                                            {{ $payment->TotalPayment }}
                                                                        </td>
                                                                    </tr>
                                                                @endforeach
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                    @foreach($totals as $t)
                                                                        <!--Row: Total Amount-->
                                                                        <th style="text-align: right">
                                                                            Total Amount:&nbsp;&nbsp;(Php)
                                                                        </th> 
                                                                        <th style="color:blue; text-align: center" id="totalamountpaid" name="totalamountpaid">{{ $t->total }}</th>
                                                                    @endforeach
                                                                    </tr> 
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                            </div>
                        </div>
                    </div>
                    <!--Button: Back, Save-->
                    <div class="card-footer bg-black">
                        <div class="examples transitions m-t-5 pull-right">
                            <button onclick="window.location='{{ url("/joborder") }}'" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn gray"  href="/estimates">
                                <i class="fa fa-arrow-left" ></i>
                                &nbsp;Back
                            </button>           
                            <button onclick="window.location='{{ url("/joborderform") }}'" class="btn btn-info btn-raised" style ="width: 80px;"  >
                                <i class="fa fa-print text-white" ></i>
                                &nbsp; Print
                            </button>
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
<script type="text/javascript" src="{{URL::asset('js/components.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/custom.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/sweetalert/js/sweetalert2.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/pages/sweet_alerts.js')}}"></script>
<!-- end of plugin scripts -->

<!-- global scripts animation-->
<script type="text/javascript" src="{{URL::asset('vendors/snabbt/js/snabbt.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/wow/js/wow.min.js')}}"></script>
<!-- end of plugin scripts -->
<script>
    new WOW().init();
</script>
<script type="text/javascript" src="{{URL::asset('vendors/tooltipster/js/tooltipster.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/tipso/js/tipso.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/pages/tooltips.js')}}"></script>


<!-- global scripts modals-->
<script type="text/javascript" src="{{URL::asset('js/pages/modals.js')}}"></script>
<!--End of global scripts-->


<script>
    $(window).bind('load', function() {
        getBalance();
        //alert('hellooo');
        //$balance = ((float($joborder->totalamountdue)) - (float($totals)));
        
    }); 
    function getBalance(){
        var totalpayment = parseFloat(document.getElementById("totalamountpaid").innerHTML).toFixed(2);
        var grandtotal = parseFloat(document.getElementById("grandtotal").innerHTML).toFixed(2);
        var balance = grandtotal - totalpayment;
        balance = parseFloat(balance).toFixed(2);

        //balance = document.getElementById("balance");
        //alert("Balance: " + balance);
    }
</script>


@stop