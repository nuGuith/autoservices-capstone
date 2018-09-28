@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','Add Back Job') <!-- Page Title -->
@section('content')

    <link type="text/css" rel="stylesheet" href="vendors/sweetalert/css/sweetalert2.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/pages/sweet_alert.css"/>

    <link type="text/css" rel="stylesheet" href="vendors/animate/css/animate.min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/hover/css/hover-min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/wow/css/animate.css"/>

    <link type="text/css" rel="stylesheet" href="vendors/modal/css/component.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/animate/css/animate.min.css" />

    <!-- end of plugin styles -->
    <link type="text/css" rel="stylesheet" href="css/pages/animations.css"/>
    <link type="text/css" rel="stylesheet" href="{{URL::asset('vendors/tooltipster/css/tooltipster.bundle.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('vendors/tipso/css/tipso.min.css')}}">

    <link type="text/css" rel="stylesheet" href="css/pages/portlet.css"/>

        <!-- CONTENT -->
        <div id="content" class="bg-container">
            <header class="head">
                <div class="main-bar">
                    <div class="row" style = "height: 47px;">
                    <div class="col-6">
                        <h4 class="m-t-15">
                            <i class="fa fa-plus"></i>&nbsp;
                            Add Back Job
                        </h4>
                    </div>
                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right   ">
                            <li class="breadcrumb-item " >
                                <a href="/backjob">
                                    <i class="fa fa-search" data-pack="default" data-tags=""></i>
                                    Back Job
                                </a>
                            </li>
                            <li class="active breadcrumb-item">&nbsp;Add Back Job</li>
                        </ol>
                    </div>
                    </div>
                </div>
            </header>
            
            <div class="outer">
                <div class="inner bg-container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card" >
                            <!-- SEARCH BY ESTIMATE/JOB ORDER ID -->
                                <div class="card-block m-t-15">
                                    <div class="row m-t-15">
                                <!-- SEARCH EXISTING RECORDS BY Job Order ID -->
                                    <div class="col-lg-12">
                                        <h4>Search Job Order ID</h4>
                                        <p>
                                            <p class="m-t-10">
                                            {{
                                                Form::select(
                                                'joborder',
                                                $joborderids,
                                                null,
                                                array(
                                                'class' => 'form-control chzn-select',
                                                'id' => 'joborder',
                                                'name' => 'joborderid')
                                                )
                                            }}
                                            </p>
                                        </p>
                                    </div>
                                <!-- ./SEARCH BY ESTIMATE/JOB ORDER ID -->
                                </div>
                    <!-- CARDS START -->
                            <div class="row m-t-15">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-block m-t-20" id="user_body">
                                        <!--START CUSTOMER INFORMATION-->
                                        <h4>Customer Information</h2>
                                        <hr style="margin-top: 10px; border: 2px solid #a7dfcd">

                                        <!--Label: Customer Name,  Contact No. Email, Adress, Senior Citizen /PWD ID-->
                                        <div class="row m-t-15">
                                                <div class="col-lg-12">
                                                        <h5 id="customername"><span style="color:gray">Customer Name:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>                    
                                                </div>  
                                                <div class="col-lg-12 m-t-10">
                                                        <h5 id="contactno"><span style="color:gray">Contact No.:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>               
                                                </div>
                                                <div class="col-lg-12 m-t-10">
                                                        <h5 id="email"><span style="color:gray">Email Address:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                                                </div>
                                                <div class="col-lg-12 m-t-10">
                                                        <h5 id="address"><span style="color:gray">Address:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                                                </div>
                                                <div class="col-lg-12 m-t-10">
                                                        <h5 id="pwd_sc_no"><span style="color:gray">Senior Citizen/ PWD ID:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                                                </div>                    
                                            </div> 
                                        </div> 
                                    </div>
                                </div>
                    <!-- VEHICLE INFORMATION -->
                        <div class="col-lg-12 m-t-10">
                            <div class="card">
                                <div class="card-block m-t-20 m-b-20" id="user_body">  
                                <h4 class ="">Vehicle Information</h2>
                                <hr style="margin-top: 10px; border: 2px solid #6699cc"> 

                                <div class="row m-t-15">
                                        <div class="col-lg-6 m-t-5">
                                                <h5 id="plateno"><span style="color:gray">Plate Number:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>                    
                                        </div>  
                                        <div class="col-lg-6 m-t-10">
                                                <h5 id="chassisno"><span style="color:gray">Chassis No.:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                                        </div>
                                        <div class="col-lg-6 m-t-10">
                                                <h5 id="contactno"><span style="color:gray">Model:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                                        </div>
                                        <div class="col-lg-6 m-t-10">
                                                <h5><span style="color:gray">Mileage:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                                        </div> 
                                        <div class="col-lg-6 m-t-10">
                                                <h5><span style="color:gray">Transmission:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                                        </div>
                                        <div class="col-lg-6 m-t-10">
                                                <h5><span style="color:gray">Color:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                                        </div>             
                                    </div>
                                </div>                       
                            </div> 
                        </div>
                    <!-- END OF CARDS -->
                    </div>
            <!--START JOB ORDER DETAILS-->
                 <h4 class="m-t-20">Back Job Details</h2>
                        <hr style="margin-top: 10px; border: 2px solid #ffb74d  ">                                       
                        <!--Select Button: Service, Proodcut, Promo, Package-->
                        <div class="row m-t-10">
                            <div class="col-lg-6">
                                <h4> Note: </h4>
                                <p>
                                    Products and Services that are <del>strikethrough</del> cannot be selected in the back job because they have reached the given warranty. If a vehicle is in need of a new service and/or product, a new job order must be created.
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <h5>Service Bay: <span style="color:red">*</span></h5>
                                <p class="m-t-10">
                                    <p id="svcbaywrapper">
                                        {{Form::select(
	                                        'servicebays',
	                                        $service_bays,
	                                        null,
	                                        array(
	                                            'class' => 'form-control chzn-select',
	                                            'id' => 'servicebays',
	                                            'name' => 'servicebayid')
	                                        ) 
	                                    }}
                                    </p>
                                </p>
                            </div>          
                        </div> 
                        <!--Start Job Order Table -->
                            <div class ="row m-t-10">
                                <table id="itemsTable" class="table order-list table-bordered display  table-hover dataTable" style="table-layout:fixed;">
                                    <thead>
                                        <br>
                                        <tr>
                                            <td style="width: 18%;">
                                                <h5>Service <span style="color: red">*</span></h5>
                                            </td>
                                            <td style="width: 10%;">
                                                <h5>Quantity <span style="color: red">*</span></h5>
                                            </td>
                                            <td style="width: 12%;">
                                                <h5>Product <span style="color: red"></span>
                                                </h5>
                                            </td>
                                            <td style="width: 13%;">
                                                <h5>Labor Cost <span style="color: red">*</span>
                                                </h5>
                                            </td>
                                            <td style="width: 23%;">
                                                <h5>Assign Mechanic <span style="color: red">*</span>
                                                <span class="badge badge-pill badge-primary float-right calendar_badge" data-toggle="modal" data-href="#responsive" href="#viewModal">?</span>
                                                </h5>
                                            </td>
                                            <td style="width: 12%;">
                                                <h5>Unit Price<span style="color: red"></span>
                                                </h5>
                                            </td>
                                            <td style="width: 13%;">
                                                <h5>Total Price<span style="color: red"></span>
                                                </h5>
                                            </td>
                                            <td style="width: 7%;">
                                                <h5>Include<span style="color: red"></span>
                                                </h5>
                                            </td>
                                        </tr>
                                    </thead>
                                    @if(Route::current()->getName() == 'fromEstimate')
                                    <tbody>
                                        @foreach($serviceperformed as $sp)
                                        <tr class="service" id="{!!$sp->ServiceID!!}" name="{!!$sp->ServicePerformedID!!}">
                                            <td style="border-right:none !important">
                                                <span style="color:red">Service:</span><br>{!!$sp->ServiceName!!}<br>
                                                <input type="hidden" id="svsperf{!!$sp->ServicePerformedID!!}" name="serviceperformed[]" value="{!!$sp->ServicePerformedID!!}">
                                                <input type="hidden" id="include" name="include[]" value="True">
                                            </td>
                                            <td  style="border-right:none !important">
                                                <input type="hidden" style="width:55px;" id="quantity" name="" placeholder="" value="1" readonly class="form-control hidden">
                                            </td>
                                            <td style="border-right:none !important"></td>
                                            <td style="border-right:none !important">
                                                <input type="text" style="width:75px; text-align:right;" name="labor" placeholder="Labor" class="form-control" value="{!!$sp->LaborCost!!}" readonly>
                                            </td>
                                            <td style="border-right:none !important">
                                                {{ Form::select(
                                                    'personnels',
                                                    $personnels,
                                                    null,
                                                    array(
                                                        'class' => 'form-control chzn-select',
                                                        'id' => 'personnels',
                                                        'name' => 'personnelperformed[]',
                                                        'style' => 'width:110px')
                                                    ) 
                                                }}
                                            </td>
                                            <td style="border-right:none !important">
                                                <input type="hidden" style="width:60px;" id="unitprice" name="" placeholder="" class="form-control" value="{!!$sp->LaborCost!!}">
                                            </td>
                                            <td style="border-right:none !important">
                                                <input type="text" readonly style="width:80px;text-align: right"  id="totalprice" name="laborcost[]" placeholder=".00" class="form-control" value="{!!$sp->LaborCost!!}">
                                                </td>
                                            <td style="border-left:none !important">
                                                <center>
                                                    <input style="-webkit-transform: scale(1.7);" data-serviceid="{!!$sp->ServiceID!!}" id="svcInclude" name="include[]" type="checkbox" checked value="">
                                                    <button type="button" id="svc" name="{!!$sp->EstimatedTime!!}"  class="btnDel btn btn-danger hvr-float-shadow" style="display:none;"></button>
                                                </center>
                                            </td>
                                        </tr>
                                            @foreach($productused as $pu)
                                                @if($sp->ServicePerformedID == $pu->ServicePerformedID)
                                                <tr class="product" id="svc{!!$sp->ServiceID!!}">
                                                    <td style="border-right:none !important"><input type="hidden" style="width:50px; text-align:right;" name="product[]" placeholder="" class="form-control" value="{!!$pu->ProductID!!}"><input type="hidden" style="width:50px; text-align:right;" name="productused[]" placeholder="" class="form-control" value="{!!$pu->ProductUsedID!!}"><input type="hidden" style="width:50px; text-align:right;" name="prodservperf[]" placeholder="" class="form-control" value="{!!$sp->ServicePerformedID!!}"></td>
                                                    <td style="border-right:none !important">
                                                        <input type="number" min="1" style="width:55px;text-align:center;" id="quantity" name="quantity[]" placeholder="Quantity" value="{!!$pu->Quantity!!}" data-serviceid="{!!$sp->ServiceID!!}" class="form-control">
                                                    </td>
                                                    <td style="border-right:none !important">
                                                    <span style="color:red">Product:</span><br>{!!$pu->ProductName!!}
                                                    </td>
                                                    <td style="border-right:none !important">
                                                        <input type="hidden" style="width:50px; text-align:right;" name="labor" placeholder="Labor" class="form-control">
                                                    </td>
                                                    <td style="border-right:none !important"><a></a></td>
                                                    <td style="border-right:none !important">
                                                        <input type="text" readonly style="width:60px; text-align: right" id="unitprice" name="unitprice[]" readonly placeholder=".00" value="{!!$pu->Price!!}" class="form-control">
                                                    </td>
                                                    <td style="border-right:none !important">
                                                        <input type="text" readonly style="width:80px;text-align: right" id="totalprice" name="totalprice[]" placeholder=".00" class="form-control" value="{!!$pu->SubTotal!!}">
                                                    </td>
                                                    <td style="border-left:none !important">
                                                        <center>
                                                            <input class="product" style="-webkit-transform: scale(1.7);" data-serviceid="{!!$sp->ServiceID!!}" id="prodInclude" type="checkbox" checked value="true">
                                                        </center>
                                                    </td>
                                                </tr>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </tbody>
                                    @elseif(Route::current()->getName() != 'fromEstimate')
                                    <tbody >
                                        </tbody>
                                        <!--Overall Total -->
                                    @endif
                                    <tfoot>
                                        <tr>
                                            <th colspan="2" style="text-align: left;">Estimated Time: 
                                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                             <span id="estimated" style="text-align: center; color: blue"></span>
                                            </th>

                                            
                                            <td colspan="3" style="width: 5px; text-align: right">
                                                <div class="cols">
                                                    <h5 style="padding-top:5px;">Total Amount Due:</h5>
                                                </div>
                                            </td>
                                            <td colspan="2" style="text-align:right">
                                                <div class="cols">
                                                    <h5 id="grandtotal" style="padding-top:5px;">PHP&nbsp;&nbsp;&nbsp;<span style="color:red">&nbsp;&nbsp;&nbsp;0.00</span></h5>
                                                </div>
                                            </td>
                                            <td>
                                            </td>  
                                        </tr>
                                     </tfoot>
                                    </table> 
                                </div>
                            <!--Textfield: Remarks -->
                             <div class="row m-t-5">
                                <div class="col-lg-12">
                                    <h5 style = "padding-bottom: 10px;">Remarks: <span style="color: red"></span></h5>
                                        <textarea id="remark3" class="form-control" cols="30" rows="2"></textarea>
                                </div>
                            </div>
                    </div> <!-- This end div is for margin top -->
                    
                    <!-- END -->
                            <div class="card-footer bg-black disabled">
                               <div class="examples transitions m-t-5 pull-right">
                                    <button onclick="window.location='{{ url("/inspect") }}'" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn gray"  href="/inspect"><i class="fa fa-arrow-left" >
                                    </i>&nbsp;Back</button>  
                                    <button class="btn btn-success  source success_clr m-l-0 hvr-float-shadow adv_cust_mod_btn" style ="width: 80px;"  ><i class="fa fa-save text-white" ></i>&nbsp; Save</button>
                                </div>
                            </div>
                    {!!Form::close()!!}
                <!-- /.outer -->
        <div>
    </div>
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

<!-- plugin scripts -->
<script type="text/javascript" src="{{URL::asset('vendors/tooltipster/js/tooltipster.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/tipso/js/tipso.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/pages/tooltips.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/pages/modals.js')}}"></script>

<!-- end of plugin scripts -->
<script>
    new WOW().init();
</script>
@stop