@extends('layout.master') <!-- Include Master Page -->
@section('Title','Update Back Job') <!-- Page Title -->
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
    <style>
    /* @media screen and (-webkit-min-device-pixel-ratio:1) {
        input[type="password"] {
           -webkit-text-stroke-width: 0.2em;
           letter-spacing: 0.2em;
        }
    } */
    </style>

        <!-- CONTENT -->
        <div id="content" class="bg-container">

            <header class="head">
                <div class="main-bar">
                    <div class="row" style = "height: 47px;">
                    <div class="col-6">
                        <h4 class="m-t-15">
                            <i class="fa fa-wpforms"></i>
                            &nbsp;Back Job
                        </h4>
                    </div>

                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right">
                            <li class="breadcrumb-item " >
                                <a href="/joborder">
                                    <i class="fa fa-wpforms" data-pack="default" data-tags=""></i>
                                    Back Job
                                </a>
                            </li>
                            <li class="active breadcrumb-item">&nbsp;Update Back Job</li>
                        </ol>
                    </div>

                    </div>
                </div>
            </header>
                <div class="outer">
                    <div class="inner bg-container">
                        <div class="card">
                            <div class="card-header bg-black">
                                <span class="fa fa-refresh fa-lg"></span>&nbsp;
                                Update Back Job
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
                                                                    <span style="color:gray">Back Job Details (Customer Information, Vehicle Information & Personnel Assignments)
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
                                        <div class="row">
                                            <div class="col-lg-10 m-t-5">
                                                <div class="m-t-15"><h4>Progress Details<span style="padding-left:7px; font-size: 12.5px;">[<a href="#" style="color:#1BBFC9;"> view logs </a>]</span></h4></div>
                                            </div>
                                            
                                            @if(is_null($joborder->JobStartDate))
                                            <div id="divStartJob" class="col-lg-1 m-t-10">
                                                <button id="btnStartJob" class="btn btn-success" style="margin-left:40px; margin-top:4%; width:95px"><span style="letter-spacing:0.85px;">Start</span>&nbsp;&nbsp;<i class="fa fa-play text-white" style="font-size: 0.75em;"></i></button>
                                            </div>
                                            <div id="divResetJob" class="col-lg-1 m-t-10" style="display:none;">
                                                <button id="btnResetJob" class="btn btn-raised btn-outline-danger adv_cust_mod_btn bounceindown" data-toggle="modal" data-target="#modal-3" style="margin-left:40px; margin-top:4%; width:95px"><strong>Reset</strong>&nbsp;&nbsp;<i class="fa fa-rotate-left" style="font-size: 1em;"></i></button>
                                            </div>
                                            @else
                                            <div id="divStartJob" class="col-lg-1 m-t-10" style="display:none;">
                                                <button id="btnStartJob" class="btn btn-success" style="margin-left:40px; margin-top:4%; width:95px"><span style="letter-spacing:0.85px;">Start</span>&nbsp;&nbsp;<i class="fa fa-play text-white" style="font-size: 0.75em;"></i></button>
                                            </div>
                                            <div id="divResetJob" class="col-lg-1 m-t-10">
                                                <button id="btnResetJob" class="btn btn-raised btn-outline-danger adv_cust_mod_btn bounceindown" data-toggle="modal" data-target="#modal-3" style="margin-left:40px; margin-top:4%; width:95px"><strong>Reset</strong>&nbsp;&nbsp;<i class="fa fa-rotate-left" style="font-size: 1em;"></i></button>
                                            </div>
                                            @endif
                                        </div>

                                        <hr style="margin-top: 10px; border: 2px solid #D3D6DA">

                                        <!--Label: Start Date, End Date, Service Bay-->
                                        <div class="row m-t-15">
                                                <div class="col-lg-4">
                                                    <h5><span style="color:gray">Job Start Date:</span>&nbsp;&nbsp;&nbsp;
                                                        <span id="jobstartdate">
                                                            @if(!(is_null($joborder->JobStartDate)))
                                                            {{date('F d, Y - H:i', strtotime($joborder->JobStartDate))}}
                                                            @else
                                                                Not set.
                                                            @endif
                                                        </span>
                                                    </h5>
                                                </div>  

                                                <div class="col-lg-4">
                                                    <h5><span style="color:gray">Job End Date:</span>&nbsp;&nbsp;&nbsp;
                                                        <span id="jobenddate">
                                                            @if(!(is_null($joborder->JobEndDate)))
                                                            {{date('F d, Y - H:i', strtotime($joborder->JobEndDate))}}
                                                            @else
                                                                Not set.
                                                            @endif
                                                        </span>
                                                        </h5>               
                                                </div>

                                                <div class="col-lg-4">
                                                    <h5><span style="color:gray">Service Bay:</span>&nbsp;&nbsp;&nbsp;{{$servicebay->ServiceBayName}}</h5>
                                                </div>
                                         </div> 

                                        <!--Progress Bar-->
                                        <div class="row m-t-20" style="margin-top:7px;">
                                            <div class="col-lg-4">
                                                <h5><span style="color:gray">Progress: </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="progressTxt">0%</span></h5>
                                            </div>

                                            <div class="col-lg-8">
                                                <h5>
                                                    <span style="color:gray">Status: </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="jobStatus">{{$joborder->Status}}</span>
                                                </h5>
                                                {{Form::open(array('id' => 'jobOrderUpdateForm'))}}
                                                    <input type="hidden" name="joborderid" value="{{$joborder->JobOrderID}}">
                                                    <input id="jobStatusUpdate" type="hidden" name="jobstatus" value="{{$joborder->Status}}">
                                                    <input id="jobStartDate" type="hidden" name="jobstartdate" value="{{$joborder->JobStartDate}}">
                                                    <input id="jobEndDate" type="hidden" name="jobenddate" value="{{$joborder->JobEndDate}}">
                                                {{Form::close()}}
                                            </div>
                                            <br>

                                            <div class="col-lg-12 m-t-10">
                                                <div class="progress">
                                                    <div id="progress" class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width:50%; height:20px; font-size:14px; padding:2px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span id="progresspercent">0%</span>
                                                    </div>
                                                </div>
                                            </div>
                                         </div>  

                                <div id="jobDiv" class="row m-t-15" style="padding: 0% 1.7%;">
                                <!--Start of job order progress table-->
                                    <table class="table table-bordered table-hover dataTable" id="sample_6" role="grid" aria-describedby="sample_6_info" style="top:30px;">
                                        <thead>
                                            <tr class="trrow">
                                                <th style="width: 20%;">Service</th>
                                                <th style="width: 20%;">Mechanic</th>
                                                <th style="width: 12%;">Steps</th>
                                                <th style="width: 17%;">Start Date</th>
                                                <th style="width: 17%;">End Date</th>
                                                <th style="width: 10%;">Status</th>
                                                <th style="width: 3%;">Action</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                                @foreach($serviceperformed as $sp)
                                                    <tr role="row" data-currentstep="{!!$sp->CurrentStep!!}" data-serviceid="{!!$sp->ServiceID!!}">
                                                        <td>{!!$sp->ServiceName!!}</td> 
                                                        <td>Pedro Cruz Mayo</td>
                                                        <td style="text-align: center">
                                                            <input id="progresscount" data-svcperfid="{!!$sp->ServicePerformedID!!}" type="hidden" value="{!!$sp->CurrentStep!!}">
                                                            Step <span id="{!!$sp->ServicePerformedID!!}" style="color:red"><b>{!!$sp->CurrentStep!!}</b></span> of
                                                            @foreach($stepcounts as $sc)
                                                                @if($sp->ServiceID == $sc->serviceid)
                                                                    {!!$sc->StepCount!!}
                                                                    <input id="stepcount" data-svcperfid="{!!$sp->ServicePerformedID!!}" type="hidden" value="{!!$sc->StepCount!!}">
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                        @if (!(is_null($sp->StartDate))) 
                                                            <span id="startdate" data-svcperfid="{!!$sp->ServicePerformedID!!}">{{date('M d, Y - H:i', strtotime($sp->StartDate))}}</span>
                                                        @else
                                                            <span id="startdate" data-svcperfid="{!!$sp->ServicePerformedID!!}">Not set.</span>
                                                        @endif
                                                        </td>
                                                        <td>
                                                        @if (!(is_null($sp->EndDate)))
                                                            <span id="enddate" data-svcperfid="{!!$sp->ServicePerformedID!!}">{{date('M d, Y - H:i', strtotime($sp->EndDate))}}</span>
                                                        @else
                                                            <span id="enddate" data-svcperfid="{!!$sp->ServicePerformedID!!}">Not set.</span>
                                                        @endif
                                                        </td>
                                                        <td>
                                                        @foreach($stepcounts as $sc)
                                                            @if ($sp->CurrentStep == 0 && $sc->serviceid == $sp->ServiceID)
                                                                <center><b><span id="status" data-svcperfid="{!!$sp->ServicePerformedID!!}" style="color:orange;">Pending</span></b></center>
                                                            @elseif ($sp->CurrentStep < $sc->StepCount && $sc->serviceid == $sp->ServiceID)
                                                                <center><b><span id="status" data-svcperfid="{!!$sp->ServicePerformedID!!}" style="color:green;">Ongoing</span></b></center>
                                                            @elseif ($sp->CurrentStep == $sc->StepCount && $sc->serviceid == $sp->ServiceID)
                                                                <center><b><span id="status" data-svcperfid="{!!$sp->ServicePerformedID!!}" style="color:blue;">Finished</span></b></center>
                                                            @endif
                                                        @endforeach
                                                        </td>
                                                        @foreach($stepcounts as $sc)
                                                        @if ($sp->CurrentStep == 0 && $sc->serviceid == $sp->ServiceID && (is_null($sp->StartDate)))
                                                        <td id="start" data-svcperfid="{!!$sp->ServicePerformedID!!}">
                                                            <button type="button" id="startBtn" data-svcperfid="{!!$sp->ServicePerformedID!!}" onclick="startJob({{$sp->ServicePerformedID}});" class="btn btn-secondary" style="border:1px solid #aeafaf; color: #0366D6; background-color:#FFFFFF" onMouseOver="this.style.backgroundColor='#0366D6';this.style.color='#FFFFFF'" onMouseOut="this.style.backgroundColor='#FFFFFF';this.style.color='#0366D6'" data-toggle="tooltip" data-placement="top" title="Start this job" data-trigger="hover"><i class="fa fa-play text-green"></i></button>
                                                        </td>
                                                        <td id="update" style="display:none;" data-svcperfid="{!!$sp->ServicePerformedID!!}">
                                                            <button type="button" id="updateBtn" data-svcperfid="{!!$sp->ServicePerformedID!!}" onclick="getSteps({{$sp->ServiceID}});getProducts({{$sp->ServicePerformedID}});tickCheckBox({{$sp->CurrentStep}});" data-serviceid="{{$sp->ServiceID}}" class="btn btn-outline-success" style="border-color:#AEAFAF;" data-toggle="tooltip" data-placement="top" title="Update Status" data-trigger="hover"><i id="icon" data-svcperfid="{!!$sp->ServicePerformedID!!}" class="fa fa-refresh text-green"></i></button>
                                                        </td>

                                                        @elseif ($sp->CurrentStep < $sc->StepCount && $sc->serviceid == $sp->ServiceID  && !(is_null($sp->StartDate)))
                                                        <td>
                                                            <button type="button" id="updateBtn" data-svcperfid="{!!$sp->ServicePerformedID!!}" onclick="getSteps({{$sp->ServiceID}});getProducts({{$sp->ServicePerformedID}});tickCheckBox({{$sp->CurrentStep}});" data-serviceid="{{$sp->ServiceID}}" class="btn btn-outline-success" style="border-color:#AEAFAF;" data-toggle="tooltip" data-placement="top" title="Update Status" data-trigger="hover"><i id="icon" data-svcperfid="{!!$sp->ServicePerformedID!!}" class="fa fa-refresh text-green"></i></button>
                                                        </td>

                                                        @elseif ($sp->CurrentStep == $sc->StepCount && $sc->serviceid == $sp->ServiceID  && !(is_null($sp->StartDate)))
                                                        <td>
                                                            <button type="button" id="updateBtn" data-svcperfid="{!!$sp->ServicePerformedID!!}" onclick="getSteps({{$sp->ServiceID}});getProducts({{$sp->ServicePerformedID}});tickCheckBox({{$sp->CurrentStep}});" data-serviceid="{{$sp->ServiceID}}" class="btn btn-outline-success" style="border-color:#AEAFAF;" data-toggle="tooltip" data-placement="top" title="Update Status" data-trigger="hover"><i id="icon" data-svcperfid="{!!$sp->ServicePerformedID!!}" class="fa fa-smile-o"></i></button>
                                                        </td>  
                                                        @endif 
                                                        @endforeach
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                             
                                            <tfoot>
                                                {{Form::open(array('id' => 'upDateForm'))}}
                                                    <input id="updateID" type="hidden" name="serviceperformedid">
                                                {{Form::close()}}
                                            </tfoot>
                                        </table>
                                    </div> 

                                    <!--Label: Remarks -->
                                    <div class="row m-t-20">  
                                        <div class="col-lg-12 m-t-0">
                                            <h5><span style="color:gray">Remarks:
                                            </span>&nbsp;&nbsp;The client wants to be updated of the progress all the time.</h5>
                                            </p>
                                        </div>                         
                                    </div>

                                <!--Accordion: Payment Details -->
                                <div id="balanceDiv" class="row m-t-15">
                                    <div class="col-lg-12">
                                        <div class="accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                                            <div class="card">
                                                <!-- <div class="card-header" role="tab" id="headingTwo">
                                                    <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo" aria-expanded="" aria-controls="collapseTwo" active="false">
                                                        Label: balance
                                                        <h5 class="mb-0">
                                                            <span style="color:gray">Billing:
                                                                <i style="padding-left: 300px; color:red" id="balance" name="balance"></i>
                                                            </span>
                                                            <span>
                                                                <i class="fa fa-angle-down rotate-icon pull-right"></i>
                                                            </span>
                                                        </h5>
                                                    </a>
                                                </div> -->

                                            <!-- Payment Details -->
                                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordionEx">
                                                <div class="card-body" style="padding-left:15px; padding-right: 15px; ">


                                                    <!--Textfield: Add Payment -->
                                                    <div class="form-group row m-t-5">
                                                        <div class=" col-lg-3  m-t-20">
                                                                <h5>Add Payment<span style="color:red">*</span></h5>
                                                        </div>

                                                        <div class="col-md-12 col-lg-4">               
                                                            <p>
                                                                <input id="address" name="payment" type="text" placeholder=".00" class=" form-control m-t-10" style="text-align: right">
                                                            </p>
                                                        </div>
                                                            
                                                        <div class="col-md-12 col-lg-4 m-t-10">
                                                            <button type="button" id=" " class="btn btn-outline-primary" ><i class="fa fa-plus text-cyan"></i></button>
                                                        </div>                                       
                                                    </div>
                                                    
                                                    <!--Table: Payment Details -->
                                                    <table class="table table-bordered table-hover dataTable no-footer " id="sample_6" role="grid" aria-describedby="sample_6_info" style="top:0px;" >
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
                                                                    <th style="color:blue; text-align: center" id="totalamountpaid" name="totalamountpaid">
                                                                        {{ $t->total }}
                                                                    </th>
                                                                @endforeach
                                                            </tr> 
                                                        </tfoot>
                                                    </table>

                                                    <!--Label: Overall Total -->
                                                    <div class="row m-t-20" style="padding-bottom:15px">  
                                                        <div class="col-lg-12 m-t-0 pull-right">
                                                            <h5 style="padding-left: 240px;"><span style="color:gray">Over All Total:
                                                            </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:gray">{{ $joborder->TotalAmountDue }}</span></h5>
                                                        </div>                         
                                                    </div>
                                                    <!--Label: Overall Total -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                <!-- START UPDATE MODAL -->
                <div class="modal fade in " id="updateModal" tabindex="-2" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-info" style="border-radius:4px 4px 0px 0px; height:58px;">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-save"></i>
                                            &nbsp;Update</h4>
                            </div>
                            <div class="modal-body" style="margin-bottom: -10px;">
                                
                                <div class="row m-t-5"  style="padding:0% 2% 0% 2%;">
                                    <div class="col-lg-4">
                                        <h3 id="serviceTitle" style="padding:1% 2% 0%;"></h3>
                                    </div>
                                    <div class="col-lg-8" style="border-left: 3px solid #ECECEC;">
                                        <h5 style="margin-bottom: 2px;">Currently on:&nbsp;&nbsp;&nbsp;&nbsp; <span id="currentStep">x</span></h5>
                                        <h5>Mechanic assigned: Crisostomo dela Cruz</h5>
                                    </div>
                                </div>
                                <div class="col-lg-12 m-t-10" style="padding-top: 2%;">
                                    <div class="progress">
                                        <div id="serviceProgress" class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width:71%; height:20px; font-size:14px; padding:2px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            <span id="serviceProgressPercent">0%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-5">
                                    <div class ="col-lg-6" style="margin: 2% 1% 2% 3%; padding:2%; border: 1px solid #ECECEC;border-radius: 7px;">
                                        <div class="row m-t-5">
                                            <div class="col-lg-6"><h4>Steps: </h4></div>
                                            <div class="col-lg-2"><button class="btn btn-info" style="font-size: 12px; padding: 2px 10px; margin-bottom: 7px;" id="checkAll">Select all</button></div>&nbsp;&nbsp;&nbsp;
                                            <div class="col-lg-2"><button class="btn btn-warning" style="font-size: 12px; padding: 2px 10px; margin-bottom: 7px;" id="uncheckAll">Unselect all</button></div>
                                            <div class="col-lg-1"></div>
                                        </div>
                                        <div style="display:block; width:100%; height:200px; overflow-y:scroll; border-bottom: 1px solid #ECECEC; border-top: 1px solid #ECECEC;">
                                            <table id="stepsTbl" class="table order-list table-hover">
                                                <tfoot id="stepsFooter">
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div> 
                                    <div class="col-lg-5"  style="margin: 2% 3% 2% 1%; padding:2%; border: 1px solid #ECECEC; border-radius: 7px;">
                                    {!!Form::open(array('id' => 'updateForm'))!!}
                                    <input id="servicePerformed" type="hidden" name="serviceperformedid">
                                    <input id="updateStep" type="hidden" name="updatestep">
                                    <input id="endDate" type="hidden" name="enddate">
                                        <div class="row m-t-5">
                                            <div class="col-lg-12"><h4>Products: </h4></div>
                                        </div>
                                        <div style="display:block; width:100%; height:200px; overflow-y:scroll; border-bottom: 1px solid #ECECEC; border-top: 1px solid #ECECEC;">
                                            <table id="productsTbl" class="table list display table-hover">
                                                <thead>
                                                    <tr>
                                                        <td style="width: 58%;">
                                                            <h5>Product</h5>
                                                        </td>
                                                        <td style="width: 42%;">
                                                            <h5>Quantity used <span style="color: red">*</span></h5>
                                                        </td>
                                                    </tr>
                                                </thead>
                                                <tfoot id="productsFooter">
                                                </tfoot>
                                            </table>
                                        </div>
                                    {!!Form::close()!!}
                                    </div>
                                    <div class="col-lg-12" style="padding: 0% 3% 0%;">
                                        <h5 style = "padding-bottom: 5px;">Remarks: <span style="color: red"></span></h5>
                                        <textarea id="remark3" class="form-control" cols="30" rows="2" style="max-width:100%; max-height:70px; min-height:50px;"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer m-t-10" style="height:50px;">
                                <div class="examples transitions">
                                    <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Cancel</button>
                                </div>
                                <div class="examples transitions">
                                    <button id="btnSave" class="btn btn-success" style ="width: 80px;"><i class="fa fa-save text-white" ></i>&nbsp; Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END UPDATE MODAL -->
                
                <!-- START RESET MODAL -->
                <div  class="modal show" id="modal-3" role="dialog" aria-labelledby="modalLabelbouncedown">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-danger">
                                <button id="close" type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-save"></i>
                                            &nbsp;RESET</h4>
                            </div>
                            <div class="modal-body">
                                <div class="col m-t-15">
                                    <h4>Are you sure you want to reset this job? All progress will be lost.</h4>
                                    <div>
                                        <br>
                                        <hr style="color:gray">
                                        <h5>This cannot be undone. So, we will ask you to re-enter your password as a confirmation of your action and to ensure the safety of your data. </h5><br>
                                        <div style="display:flex;">
                                            <input id="password1" type="password" class="form-control" placeholder="Password" style="flex:1;">
                                            <button class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Show password" data-trigger="hover" onclick="togglePassVisibility('password1');"><i class="fa fa-eye"></i></button>
                                        </div>
                                    </div>
                                </div><br>
                            </div>
                            <div class="modal-footer m-t-10">
                                <div class="examples transitions m-t-5">
                                    <button id="btnNo" type="button" data-dismiss="modal" class="btn btn-secondary adv_cust_mod_btn">Cancel</button>
                                </div>
                                <div class="examples transitions m-t-5">
                                    <button id="btnConfirm" type="button" data-dismiss="modal" class="btn btn-outline-success" onclick="resetJobOrder();">
                                        &nbsp;Confirm
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END RESET MODAL -->

                <!-- START ASSESSMENT MODAL -->
                <div class="modal show" id="assessModal" role="dialog" aria-labelledby="modalLabelbouncedown">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-info">
                                <button id="close" type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-save"></i>
                                            &nbsp;Assessment</h4>
                            </div>
                            <div class="modal-body">
                                <div class="col m-t-15">
                                    <h4>This Job Order seems to have all the jobs finished. Do you want to assess it now?</h4>
                                    <div>
                                        <br>
                                        <hr style="color:gray">
                                        <h5 style="font-weight:light;">Note: <span style="color:gray;">This cannot be undone, once you assess a job order <span style="color:#FF5656;">you cannot modify it anymore</span>. So please be careful. We will ask you to re-enter your password as a confirmation of your action.<span></h5><br>
                                        <hr style="color:gray"><br>
                                        <div style="display:flex;">
                                            <input id="password2" type="password" class="form-control" placeholder="Password" style="flex:1;">
                                            <button class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Show password" data-trigger="hover" onclick="togglePassVisibility('password2');"><i class="fa fa-eye"></i></button>
                                        </div>
                                    </div>
                                </div><br>
                            </div>
                            <div class="modal-footer m-t-10">
                                <div class="examples transitions m-t-5">
                                    <button id="btnNo" type="button" data-dismiss="modal" class="btn btn-secondary adv_cust_mod_btn">Cancel</button>
                                </div>
                                <div class="examples transitions m-t-5">
                                    <button id="btnConfirm" type="button" data-dismiss="modal" class="btn btn-outline-info" onclick="assessJobOrder();">
                                        <i class="fa fa-print" ></i>&nbsp; Assess
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END ASSESSMENT MODAL -->
                    </div>
                </div>
            </div>
        </div>


                           
                                <!--Button: Back, Save-->
                             <div class="card-footer bg-black m-t-20" >
                               <div class="examples transitions m-t-5 pull-right">
                                    <button onclick="window.location='{{ url("/joborder") }}'" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn gray"  href="/estimates"><i class="fa fa-arrow-left" >
                                    </i>&nbsp;Back</button>  
                                    
                                    <button id="btnAssess" class="btn btn-raised btn-info adv_cust_mod_btn bounceindown" data-toggle="modal" onclick="assessJobOrder();" style ="width:100px;"><i class="fa fa-print text-white" ></i>&nbsp; Assess </button>
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
<script type="text/javascript" src="{{URL::asset('vendors/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/switchery/js/switchery.min.js')}}"></script>
<!-- end of plugin scripts -->

<!--Page level scripts-->
<script type="text/javascript" src="{{URL::asset('js/pages/radio_checkbox.js')}}"></script>
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
    var finished = false;

    function togglePassVisibility(id) {
        var element = document.getElementById(id);
        if (element.type === "password") element.type = "text";
        else element.type = "password";
    }

    function getSteps(serviceid){
        var tbody = $("<tbody>");
        
        $.ajax({
            type: "GET",
            url: "/updatejoborder/"+serviceid+"/getSteps",
            dataType: "JSON",
            async: false,
            success:function(data){
                var options = '';
                var row = $("<tr>");
                var cols = "";
                var stepCtr;
                var currentStep;
                var count = Object.keys(data.steps).length;
                for (var i = 0; i < count; i++) {
                    cols += '<td><label style="width:100%; display:inline-block; margin: auto;"><input id="chk" name="step[]" data-stepcount="'+ (i+1) +'" type="checkbox" value="1" style="-webkit-transform: scale(1.4);">&nbsp;&nbsp;&nbsp;Step '+ (i+1) +': '+data.steps[i].Step+'</label></td>';           
                    row.append(cols);
                    tbody.append(row);
                    row = $("<tr>");
                    cols = "";
                }
                $('#serviceTitle').html(data.service.ServiceName);
                $('table.table-bordered tr').each(function(){
                    if($(this).data('serviceid') == serviceid){
                        currentStep = $(this).data('currentstep');
                        if(currentStep < 1)
                            $('#currentStep').html("Step " + currentStep + " (Pending)");
                        else
                            $('#currentStep').html("Step " + currentStep);
                    }
                });
            }
        });
        $('#stepsTbl').find('tbody').empty();
        $(tbody).insertBefore("#stepsFooter");
        $("#updateModal").modal('show');
    }

    function setMax(id, max){
        $('table.list input').each(function() {
            if(this.id == "quantity" && $(this).data('produsedid') == id)
                $(this).val(max);
        });
    }

    function getProducts(id){
        $('#servicePerformed').val(id);
        var tbody = $("<tbody>");
        
        $.ajax({
            type: "GET",
            url: "/updatejoborder/"+id+"/getProducts",
            dataType: "JSON",
            success:function(data){
                var options = '';
                var row = $("<tr>");
                var cols = "";
                var stepCtr;
                var count = Object.keys(data.productused).length;
                for (var i = 0; i < count; i++) {
                    cols += '<td style="border-right:none !important">'+ data.productused[i].ProductName +' (<b>'+ data.productused[i].QuantityUsed +'</b>/' + data.productused[i].Quantity +')</td>';
                    cols += '<td style="border-right:none !important"><div class="row btn-group" style="height:28px; margin-left:1%;"><input type="hidden" name="productusedid[]" class="form-control hidden" value="'+ data.productused[i].ProductUsedID +'"><input type="number" style="width:55px; text-align:center; " id="quantity" data-produsedid="'+ data.productused[i].ProductUsedID +'" name="quantityused[]" placeholder="" min="1" class="form-control" max="'+ data.productused[i].Quantity +'"><button onclick="setMax('+ data.productused[i].ProductUsedID + ','+ data.productused[i].Quantity +');" type="button" style="background:#007ACC;border:none;color:white;margin-left:2px; padding: 0px 10px;" >Max</button></div> <span style="font-size:12.5px;"> <b>'+ data.productused[i].QuantityUsed +'</b>'+ ' of <b>' + data.productused[i].Quantity +'</b> used <b>'+ (data.productused[i].Quantity - data.productused[i].QuantityUsed) +'</b> left</span></td>';
                    row.append(cols);
                    tbody.append(row);
                    row = $("<tr>");
                    cols = "";                               
                }
            }
        });
        $('#productsTbl').find('tbody').empty();
        $(tbody).insertBefore("#productsFooter");
    }

    function tickCheckBox(step){
        var id = step;
        var stepCount = 0;
        //check all the steps preceding the selected step
        $('table.order-list tr td input').each( function(){
            var chk = $(this).data('stepcount');
            chk = parseInt(chk);
            if ((this.id) == "chk" && chk <= id )
                $(this).prop("checked", "checked");
            else
                $(this).prop("checked", false);
            stepCount++;
        });
        progressCount = step;
        progressPercent = (progressCount / stepCount) * 100;
        temp = progressPercent.toFixed(2) + "%";
        if (progressPercent == 0){
            $('#serviceProgress').attr('class', 'progress-bar progress-bar-striped progress-bar-animated bg-warning');
        }
        else if (progressPercent < 100){
            $('#serviceProgress').attr('class', 'progress-bar progress-bar-striped progress-bar-animated bg-success');
        }
        else if (progressPercent == 100){
            $('#serviceProgress').attr('class', 'progress-bar progress-bar-striped progress-bar-animated bg-info');
        }

        if (progressCount == 0){
            $('#checkAll').prop("disabled", false);
            $('#uncheckAll').prop("disabled", "disabled");
        }
        else if (progressCount == stepCount){
            $('#uncheckAll').prop("disabled", false);
            $('#checkAll').prop("disabled", "disabled");
        }

        progressPercent = parseFloat(progressPercent).toFixed(2);
        $('#serviceProgress').css('width', temp);
        $('#serviceProgressPercent').html(progressPercent + "%");
        $('#updateStep').val(id);
    }
    
    function updateJobOrder(){
        var formData = $('#jobOrderUpdateForm').serialize();
        $.ajax({
            type: "PATCH",
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            url: "/updatejoborder/updateJobOrder",
            data: formData,
            async: false,
            fail: function(data) {
                alert("Failed to save data.");
            }
        });
    }

    function drawProgress(){
    var progressCount = 0, stepCount = 0, progressPercent = 0, temp;

        $("table.table-bordered tr td input").each(function(){
            if (this.id == "progresscount"){
                temp = parseInt($(this).val());
                progressCount += temp;
            }
            else if (this.id == "stepcount"){
                temp = parseInt($(this).val());
                stepCount += temp;
            }
        });

        progressPercent = (progressCount/stepCount) * 100;

        if (progressPercent == 0){
            $('#jobStatus').html("Pending");
            $('#jobStatusUpdate').val("Pending");
            $('#jobenddate').html("Not set.");
            $('#jobEndDate').val(null);
            $('#progress').attr('class', 'progress-bar progress-bar-striped progress-bar-animated bg-warning');
            finished = false;
        }
        else if (progressPercent < 100){
            $('#jobStatus').html("Ongoing");
            $('#jobStatusUpdate').val("Ongoing");
            $('#jobenddate').html("Not set.");
            $('#jobEndDate').val(null);
            $('#progress').attr('class', 'progress-bar progress-bar-striped progress-bar-animated bg-success');
            finished = false;
        }
        else if (progressPercent == 100){
            $('#jobStatus').html("Finished");
            $('#jobStatusUpdate').val("Finished");
            $('#jobenddate').html(getDateToday());
            $('#jobEndDate').val(getTimestamp());
            $('#progress').attr('class', 'progress-bar progress-bar-striped progress-bar-animated bg-info');
            assessmentPrompt();
        }

        updateJobOrder();

        if (isNaN(progressPercent)){
            temp = 0 + "%";
            progressPercent = 0;
            $('#jobStatus').html("No job to track.");
        }
        else{
            temp = progressPercent.toFixed(0) + "%";
            progressPercent = parseFloat(progressPercent).toFixed(2);
        }
        
        $('#progressTxt').html(progressPercent + "%");
        $('#progress').css('width', temp);
        $('#progresspercent').html(progressPercent + "%");
    }

    function updateTable(id){
        var update = $('#updateStep').val();
        var svcid, svcperfid, stepcount, progresscount;
        svcperfid = id;
        progresscount = update;
        tickCheckBox(update);

        $('table.table-bordered tr td span').each(function(){
            if(this.id == svcperfid){
                $(this).html("<b>" + update + "</b>");
            }
        });

        $('table.table-bordered tr td input').each(function(){
            if(this.id == "progresscount" && $(this).data('svcperfid') == svcperfid){
                $(this).val(update);
            }
            if(this.id == "stepcount" && $(this).data('svcperfid') == svcperfid){
                stepcount = $(this).val();
            }
        });

        $('table.table-bordered tr td button').each(function(){
            if(this.id == "updateBtn" && $(this).data('svcperfid') == svcperfid){
                svcid = $(this).data('serviceid');
                $(this).attr('onclick', 'getSteps('+ svcid +');getProducts('+ svcperfid +');tickCheckBox('+ update +');');
            }
        });

        $('table.table-bordered tr td i').each(function(){
            if(this.id == "icon" && $(this).data('svcperfid') == svcperfid){
                if(progresscount == stepcount)
                    $(this).attr('class', 'fa fa-smile-o text-blue');
                else
                    $(this).attr('class', 'fa fa-refresh text-green');
            }
        });

        $('table.table-bordered tr').each(function(){
            if($(this).data('serviceid') == svcid){
                $(this).data('currentstep', update);
            }
        });

        $('table.table-bordered tr td span').each(function(){
            if(this.id == "status" && $(this).data('svcperfid') == svcperfid){
                if (progresscount == 0){
                    $(this).html("Pending");
                    $(this).css('color', '#FF7D00');
                    resetJob(svcperfid);
                }
                else if (progresscount < stepcount){
                    $(this).html("Ongoing");
                    $(this).css('color', 'green');
                }
                else if (progresscount == stepcount){
                    $(this).html("Finished");
                    $(this).css('color', 'blue');
                }
            }
            if(this.id == "enddate" && $(this).data('svcperfid') == svcperfid){
                var today = getDateToday();
                var timestamp = getTimestamp();
                if (progresscount == stepcount){
                    $(this).html(today);
                    $("#endDate").val(timestamp);
                }
                else{
                    $(this).html("Not set.");
                    $("#endDate").val(null);
                }
            }
        });
    }

    function getDateToday(){
        var today = new Date().toString();
        today = today.substr(4,6) + ',' + today.substr(10, 5) + ' - ' + today.substr(15, 6);
        return today;
    }

    function getTimestamp(){
        var today = new Date();
        var timestamp = today.getFullYear() + "-" + (today.getMonth()+1) + "-" + today.getDate() + " " + today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
        return timestamp;
    }

$(window).load(function(){
    drawProgress();
});

    function startJob(id){
        var svcperfid = id;
        $('table.table-bordered tr td').each(function(){
            if (this.id == "update" && $(this).data('svcperfid') == svcperfid){
                $(this).css('display', 'block');
            }
            else if (this.id == "start" && $(this).data('svcperfid') == svcperfid){
                $(this).css('display', 'none');
            }
        });
        setStartDate(svcperfid);
    }

    function setStartDate(id){
        var svcperfid = id;
        var today;
        $('table.table-bordered tr td span').each(function(){
            if (this.id == "startdate" && $(this).data('svcperfid') == svcperfid){
                today = getDateToday();
                $(this).html(today);
                $('#startDate').val(today);
                $('#updateID').val(svcperfid);
            }
        });
        var formData = $('#upDateForm').serialize();
        $.ajax({
            type: "PATCH",
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            url: "/updatejoborder/setStartDate",
            data: formData,
            async: false,
            success: function(data) {
                //alert("Success");
            },
            fail: function(data) {
                alert("Failed to save data.");
            }
        });
    }

    function resetJob(id){
        var svcperfid = id;
        $('table.table-bordered tr td').each(function(){
            if (this.id == "update" && $(this).data('svcperfid') == svcperfid){
                $(this).css('display', 'none');
            }
            else if (this.id == "start" && $(this).data('svcperfid') == svcperfid){
                $(this).css('display', 'block');
            }
        });
    }

    function resetJobOrder(){
        var formData = $('#jobOrderUpdateForm').serialize();
        $.ajax({
            type: 'PATCH',
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            url: "/updatejoborder/resetJobOrder",
            data: formData,
            async: false,
            success: function(data) {
                alert("Success! The job has been reset.");
                location.reload();
            },
            fail: function(data) {
                alert("Failed to save data.");
            }
        });
    }

    function assessmentPrompt(){
        $('#assessModal').modal('show');
        finished = true;;
    }

    function assessJobOrder(){
        if (finished)
            $('#assessModal').modal('show');
        else
            alert("Not allowed. You can only assess a Job Order once all the jobs are finished.");
    }

    function enableClicks(){
        $('#sample_6 :button').attr("disabled", false);
        $('#balanceDiv').off('click.following');
    }

$(document).ready(function(){

    var clicks = 0;

    var joborder = {!! json_encode($joborder->toArray()) !!};

    if(joborder.JobStartDate == null){
        $('#sample_6 :button').attr("disabled", true);
        $('#balanceDiv').on('click.following', function(){ alert("You'd have to start this job first."); return false;});
    }
    
    $("table.order-list").on("click", "#chk", function (event){
        var progressCount = 0, stepCount = 0, progressPercent = 0, temp;
        var id = $(this).data('stepcount');
        //check all the steps preceding the selected step
        $('table.order-list tr td input').each( function(){
            var chk = $(this).data('stepcount');
            chk = parseInt(chk);
            if ((this.id) == "chk" && chk <= id )
                $(this).prop("checked", "checked");
            else
                $(this).prop("checked", false);
            stepCount++;
        });
        progressCount = id;
        progressPercent = (progressCount / stepCount) * 100;
        temp = progressPercent.toFixed(2) + "%";
        if (progressPercent == 0){
            $('#serviceProgress').attr('class', 'progress-bar progress-bar-striped progress-bar-animated bg-warning');
        }
        else if (progressPercent < 100){
            $('#serviceProgress').attr('class', 'progress-bar progress-bar-striped progress-bar-animated bg-success');
        }
        else if (progressPercent == 100){
            $('#serviceProgress').attr('class', 'progress-bar progress-bar-striped progress-bar-animated bg-info');
        }

        progressPercent = parseFloat(progressPercent).toFixed(2);
        $('#serviceProgress').css('width', temp);
        $('#serviceProgressPercent').html(progressPercent + "%");
        $('#updateStep').val(id);
    });

    $("#checkAll").on("click", function(){
        var count = 0;
        $('table.order-list tr td input').each( function(){
            $(this).prop("checked", "checked");
            count++;
        });
        $('#serviceProgress').attr('class', 'progress-bar progress-bar-striped progress-bar-animated bg-info');
        $('#serviceProgress').css('width', '100%');
        $('#serviceProgressPercent').html("100%");
        $('#updateStep').val(count);
        $(this).prop("disabled", "disabled");
        $("#uncheckAll").prop("disabled", false);
    });

    $("#uncheckAll").on("click", function(){
        $('table.order-list tr td input').each( function(){
            $(this).prop("checked", false);
        });
        $('#serviceProgress').attr('class', 'progress-bar progress-bar-striped progress-bar-animated bg-warning');
        $('#serviceProgress').css('width', '0%');
        $('#serviceProgressPercent').html("0%");
        $('#updateStep').val(0);
        $(this).prop("disabled", "disabled");
        $("#checkAll").prop("disabled", false);
    });

    $('#btnSave').on("click", function(){
        var id = $('#servicePerformed').val();
        updateTable(id);
        var formData = $('#updateForm').serialize();
        $.ajax({
            type: "PATCH",
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            url: "/updatejoborder/updateJob",
            data: formData,
            async: false,
            success: function(data) {
                updateTable(id);
                alert("Success");
            },
            fail: function(data) {
                alert("Failed to save data.");
            }
        });
        $('#updateModal').modal('hide');
        setTimeout(function () {
            drawProgress();
        }, 300);
    });

    $('#btnStartJob').on("click", function(){
        var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        var today = new Date();
        var month;
        var timestamp = getTimestamp();
        month = today.getMonth();
        today = today.toString();
        today = months[month] + ' ' + today.substr(8,2) + ',' + today.substr(10, 5) + ' - ' + today.substr(15, 6);
        $("#jobstartdate").html(today);
        $("#jobStartDate").val(timestamp);
        $('#divStartJob').css('display', 'none');
        $('#divResetJob').css('display', 'block');
        enableClicks();
        updateJobOrder();
    });
    
});
</script>


@stop