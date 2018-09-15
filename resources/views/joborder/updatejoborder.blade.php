@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','Update Job Order') <!-- Page Title -->
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
                            <li class="active breadcrumb-item">&nbsp;Update Job Order</li>
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
                                Update Job Order
                             </div>

                        <div class="row" style="padding-left: 15px; padding-right:15px;">

                            <div class="col-lg-4 m-t-25">
                                <div class="card">                                   
                                    <div class="card-block">

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


                                        <!--START VEHICLE INFORMATION-->
                                        <h4 class ="m-t-30">Vehicle Information</h2>
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

                                        <!--START OTHER INFORMATION-->
                                        <h4 class ="m-t-30">Other Information</h2>
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
                            </div>

                            <div class="col-lg-8 m-t-25">
                                <div class="card">                                   
                                    <div class="card-block">

                                        <!--START JOB ORDER PROGRESS DETAIL-->
                                        <h4 class="m-t-15">Progress Details</h2>
                                        <hr style="margin-top: 10px; border: 2px solid #ffb74d  ">


                                        <!--Label: Start Date, End Date, Service Bay-->
                                        <div class="row m-t-15">
                                                <div class="col-lg-4">
                                                        <h5><span style="color:gray">Start:</span>&nbsp;&nbsp;&nbsp;June 28, 2018</h5>     
                                                </div>  

                                                <div class="col-lg-4">
                                                        <h5><span style="color:gray">End:</span>&nbsp;&nbsp;&nbsp;&nbsp;</h5>               
                                                </div>

                                                <div class="col-lg-4">
                                                        <h5><span style="color:gray">Service Bay:</span>&nbsp;&nbsp;&nbsp;{{$servicebay->ServiceBayName}}</h5>
                                                </div>
                                         </div> 

                                        <!--progress bar-->
                                        <div class="row m-t-20">
                                            <div class="col-lg-4">
                                                <h5><span style="color:gray">Progress: </span>&nbsp;&nbsp;&nbsp;50%</h5>
                                            </div>

                                            <div class="col-lg-8">
                                                <h5><span style="color:gray">Status: </span>&nbsp;&nbsp;&nbsp;{{$joborder->Status}}</h5>
                                            </div>

                                            <div class="col-lg-12 m-t-10">
                                                <div class="progress">
                                                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: 50%; height:20px; font-size:14px" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">50%
                                                    </div>
                                                </div>
                                            </div>
                                         </div>  



                                <div class="row m-t-15">
                                <!--Start of job order profgress tavle-->
                                    <table class="table table-bordered table-hover dataTable" id="sample_6" role="grid" aria-describedby="sample_6_info" style="top:30px;" >
                                        <thead>
                                            <tr class="trrow">
                                                <th style="width: 27%;">Items</th>
                                                <th style="width: 28%;">Mechanic</th>
                                                <th style="width: 21%;">Steps</th>
                                                <th style="width: 15%;">Status</th>
                                                <th style="width: 8%;">Actions</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                            <tr role="row" class="odd">
                                                    <!--Column: Service -->
                                                    <td>
                                                        Engine Overhaul
                                                    </td> 
                                                    <!--Column: Mechanic -->
                                                    <td>
                                                        Juan Dela Crusz
                                                    </td>
                                                    <td style="text-align: center">
                                                        Step <span style="color:red"><b>10</b></span> of 16
                                                    </td>
                                                    <!--Column: Status -->
                                                    <td>
                                                        On going        
                                                    </td>
                                                    <!--Column: Actions: Refresh-->
                                                    <td>
                                                        <button type="button" id="updateBtn1" data-toggle="modal" class="btn btn-outline-success" ><i class="fa fa-refresh text-green"></i></button>       
                                                    </td>
                                                </tr>
                                                <!--example for service -->
                                                <tr role="row" class="odd">
                                                    <!--Column: Service -->
                                                    <td>
                                                        Change Oil
                                                    </td> 
                                                    <!--Column: Mechanic -->
                                                    <td>
                                                        Juan Dela Crusz
                                                    </td>
                                                    <td style="text-align: center">
                                                        Step <span style="color:red"><b>0</b></span> of 4
                                                    </td>
                                                    <!--Column: Status -->
                                                    <td>
                                                        Pending        
                                                    </td>
                                                    <!--Column: Actions: Refresh-->
                                                    <td>
                                                        <button type="button" id="updateBtn2" data-toggle="modal" class="btn btn-outline-success" ><i class="fa fa-refresh text-green"></i></button>       
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
                                            <h5><span style="color:gray">Remarks:
                                            </span>&nbsp;&nbsp;The client wants to be updated of the progress all the time.</h5>
                                            </p>
                                        </div>                         
                                    </div>

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

                                            <!-- Payment Details -->
                                            <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionEx">
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
                                                                        <th style="color:blue; text-align: center" id="totalamountpaid" name="totalamountpaid">{{ $t->total }}</th>
                                                                    @endforeach
                                                                    </tr> 
                                                                </tfoot>
                                                </table>

                                                <!--Lable: Overl All Total -->
                                                <div class="row m-t-20" style="padding-bottom:15px">  
                                                    <div class="col-lg-12 m-t-0 pull-right">
                                                        <h5 style="padding-left: 240px;"><span style="color:gray">Over All Total:
                                                        </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color:gray">{{ $joborder->TotalAmountDue }}</span></h5>
                                                        </p>
                                                    </div>                         
                                                </div>


                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                    <!-- START SUBMIT MODAL -->
                <div class="modal fade in " id="updateModal1" tabindex="-3" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header bg-info">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-save"></i>
                                            &nbsp;Update</h4>
                            </div>
                            <div class="modal-body">
                                    <h3 style="padding:2% 2% 0%;">Engine Overhaul</h3>
                                <div class="row m-t-5">
                                    <div class ="col-lg-6" style="margin: 2% 1% 2% 3%; padding:2%; border: 1px solid #ECECEC;border-radius: 7px;">
                                        <div class="row m-t-5">
                                            <div class="col-lg-6"><h4>Steps: </h4></div>
                                            <div class="col-lg-2"><button class="btn btn-info" style="font-size: 12px; padding: 2px 10px;" id="checkAll">Select all</button></div>&nbsp;&nbsp;&nbsp;
                                            <div class="col-lg-2"><button class="btn btn-warning" style="font-size: 12px; padding: 2px 10px;" id="uncheckAll">Unselect all</button></div>
                                            <div class="col-lg-1"></div>
                                        </div>
                                        <table class="table order-list display nowrap table-hover dataTable">
                                            <tbody>
                                                <tr>
                                                    <td><input id="chk" name="1" type="checkbox" value="1" style="-webkit-transform: scale(1.4);"></td>
                                                    <td>Step 1: Prepare engine for removal.</td>
                                                </tr>
                                                <tr>
                                                    <td><input id="chk" name="2" type="checkbox" value="2" style="-webkit-transform: scale(1.4);"></td>
                                                    <td>Step 2: Remove the engine.</td>
                                                </tr>
                                                <tr>
                                                    <td><input id="chk" name="3" type="checkbox" value="3" style="-webkit-transform: scale(1.4);"></td>
                                                    <td>Step 3: Removal of the accessories - Carburetor.</td>
                                                </tr>
                                            </tbody>
                                        </table><!-- 
                                        <label class="text-black"  style="padding-left: 10px;">
                                            <input id="chk" name="1" type="checkbox" value="1" style="-webkit-transform: scale(1.4);">
                                            &nbsp;&nbsp;Step 1: Prepare engine for removal.
                                        </label><br>
                                        <label class="text-black"  style="padding-left: 10px;">
                                            <input id="chk" name="2" type="checkbox" value="2" style="-webkit-transform: scale(1.4);">
                                            &nbsp;&nbsp;Step 2: Remove the engine.
                                        </label>
                                        <label class="text-black"  style="padding-left: 10px;">
                                            <input id="chk" name="3" type="checkbox" value="3" style="-webkit-transform: scale(1.4);">
                                            &nbsp;&nbsp;Step 3: Removal of the accessories - Carburetor.
                                        </label>
                                        <label class="text-black"  style="padding-left: 10px;">
                                            <input id="chk" name="4" type="checkbox" value="4" style="-webkit-transform: scale(1.4);">
                                            &nbsp;&nbsp;Step 4: Removal of the accessories - Muffler.
                                        </label>
                                        <label class="text-black"  style="padding-left: 10px;">
                                            <input id="chk" name="5" type="checkbox" value="4" style="-webkit-transform: scale(1.4);">
                                            &nbsp;&nbsp;Step 5: Removal of the accessories - Flywheel.
                                        </label>
                                        <label class="text-black"  style="padding-left: 10px;">
                                            <input id="chk" name="6" type="checkbox" value="4" style="-webkit-transform: scale(1.4);">
                                            &nbsp;&nbsp;Step 6: Removal of the accessories - Ignition.
                                        </label>
                                        <label class="text-black"  style="padding-left: 10px;">
                                            <input id="chk" name="6" type="checkbox" value="4" style="-webkit-transform: scale(1.4);">
                                            &nbsp;&nbsp;Step 7: Removal of the accessories - Cylinder head.
                                        </label><br> -->
                                    </div>
                                    <div class="col-lg-5"  style="margin: 2% 3% 2% 1%; padding:2%; border: 1px solid #ECECEC; border-radius: 7px;">
                                        <h4>Products: </h4>
                                        <table class="table list table-bordered display nowrap table-hover dataTable">
                                            <thead>
                                                <tr>
                                                    <td style="width: 30%;">
                                                        <h5>Quantity <span style="color: red">*</span></h5>
                                                    </td>
                                                    <td style="width: 50%;">
                                                        <h5>Product</h5>
                                                    </td>
                                                    <td style="width: 20%;">
                                                        <h5>Action<span style="color: red"></span></h5>
                                                    </td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="border-right:none !important">
                                                        <input type="number" style="width:55px; text-align:center; " id="quantity" name="quantity" placeholder="" min="1" class="form-control hidden" value="5">
                                                    </td>
                                                    <td style="border-right:none !important">
                                                        Piston
                                                    </td>
                                                    <td>
                                                        <button type="button" id="update" data-toggle="modal" class="btn btn-outline-success" ><i class="fa fa-plus text-green"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="border-right:none !important">
                                                        <input type="number" style="width:55px; text-align:center;   " id="quantity" name="quantity" placeholder="" min="1" class="form-control hidden" value="7">
                                                    </td>
                                                    <td style="border-right:none !important">
                                                        Crank Rods
                                                    </td>
                                                    <td>
                                                        <button type="button" id="update" data-toggle="modal" class="btn btn-outline-success" ><i class="fa fa-plus text-green"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer m-t-10">
                                <div class="examples transitions m-t-5">
                                    <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Cancel</button>
                                </div>
                                <div class="examples transitions m-t-5">
                                    <button class="btn btn-success source success_clr m-l-0 hvr-float-shadow adv_cust_mod_btn" style ="width: 80px;"><i class="fa fa-save text-white" ></i>&nbsp; Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SUBMIT MODAL -->
                <div class="modal fade in " id="updateModal2" tabindex="-3" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-info">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-save"></i>
                                            &nbsp;Update</h4>
                            </div>
                            <div class="modal-body">
                                <div class="col m-t-15">
                                    <h3><span style="color: green">Change Oil</span></h3>
                                    <h4>Steps: </h4><br>
                                    <table id="steps2">
                                        <label class="text-black"  style="padding-left: 10px;">
                                            <input id="chk" name="1" type="checkbox" value="1" style="-webkit-transform: scale(1.4);">
                                            &nbsp;&nbsp;Step 1: Open Oil Gauge.
                                        </label>
                                        <label class="text-black"  style="padding-left: 10px;">
                                            <input id="chk" name="2" type="checkbox" value="2" style="-webkit-transform: scale(1.4);">
                                            &nbsp;&nbsp;Step 2: Check Air Pump.
                                        </label>
                                        <label class="text-black"  style="padding-left: 10px;">
                                            <input id="chk" name="3" type="checkbox" value="3" style="-webkit-transform: scale(1.4);">
                                            &nbsp;&nbsp;Step 3: Clean oil filter.
                                        </label>
                                        <label class="text-black"  style="padding-left: 10px;">
                                            <input id="chk" name="4" type="checkbox" value="4" style="-webkit-transform: scale(1.4);">
                                            &nbsp;&nbsp;Step 4: Clean valves.
                                        </label>
                                    </table>
                                </div>
                            </div>
                            <div class="modal-footer m-t-10">
                                <div class="examples transitions m-t-5">
                                    <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Cancel</button>
                                </div>
                                <div class="examples transitions m-t-5">
                                <button class="btn btn-info source success_clr m-l-0 hvr-float-shadow adv_cust_mod_btn" style ="width: 80px;"  ><i class="fa fa-print text-white" ></i>&nbsp; Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END SUBMIT MODAL -->
                    </div>
                </div>
            </div>
        </div>


                           
                                <!--Button: Back, Save-->
                             <div class="card-footer bg-black m-t-20" >
                               <div class="examples transitions m-t-5 pull-right">
                                    <button onclick="window.location='{{ url("/joborder") }}'" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn gray"  href="/estimates"><i class="fa fa-arrow-left" >
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
$(document).ready(function(){
    $("#updateBtn1").on("click", function(){
        $("#updateModal1").modal('show');
    });
    $("#updateBtn2").on("click", function(){
        $("#updateModal2").modal('show');
    });

    var clicks = 0;
    $("table.order-list").on("click", "#chk", function (event){
        var id = $(this).attr('name');
            //check all the steps preceding the selected step
            $('table.order-list tr td input').each( function(){
                var chk = $(this).attr('name');
                chk = parseInt(chk);
                if ((this.id) == "chk" && chk <= id )
                    $(this).prop("checked", "checked");
                else
                    $(this).prop("checked", false);
            });
    });

    $("#checkAll").on("click", function(){
        $('table.order-list tr td input').each( function(){
            $(this).prop("checked", "checked");
        });
    });

    $("#uncheckAll").on("click", function(){
        $('table.order-list tr td input').each( function(){
            $(this).prop("checked", false);
        });
    });
});
</script>


@stop