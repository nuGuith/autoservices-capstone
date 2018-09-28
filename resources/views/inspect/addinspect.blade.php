@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','Add Inspect Vehicle') <!-- Page Title -->
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
                            Add Inspect Vehicle
                        </h4>
                    </div>
                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right   ">
                            <li class="breadcrumb-item " >
                                <a href="/inspect">
                                    <i class="fa fa-search" data-pack="default" data-tags=""></i>
                                    Inspect Vehicle
                                </a>
                            </li>
                            <li class="active breadcrumb-item">&nbsp;Add Inspect Vehicle</li>
                        </ol>
                    </div>
                    </div>
                </div>
            </header>
            
            <div class="outer">
                <div class="inner bg-container">
                    <div class="row">
                        <div class="col-lg-12">
                        {!! Form::open(array('id' => 'inspectForm', 'url' => 'addinspect', 'action' => 'AddInspectController@store', 'method' => 'POST')) !!}
                            <div class="card" >
                            <!-- SEARCH BY ESTIMATE/JOB ORDER ID -->
                                <div class="card-block m-t-15">
                                    <div class="row m-t-15">
                                <!-- SEARCH EXISTING RECORDS BY ESTIMATE ID -->
                                    <div class="col-lg-5">
                                        <h4>Search Estimate ID</h4>
                                        <input type="hidden" id="formEstimateID" name="estimateID">
                                        <p>
                                            <p class="m-t-10">
                                                {{
                                                    Form::select(
                                                    'estimates',
                                                    $estimateids,
                                                    null,
                                                    array(
                                                    'class' => 'form-control chzn-select',
                                                    'id' => 'estimates',
                                                    'name' => 'estimateid')
                                                    )
                                                }}
                                            </p>
                                        </p>
                                    </div>
                                    <div class="col-lg-1 m-t-20" style="margin-left:-15px;margin-right:-15px;">
                                        <center><h3> </h3></center>
                                        <center><h3> or </h3></center>
                                    </div>
                                <!-- SEARCH EXISTING RECORDS BY JOB ORDER ID -->
                                    <div class="col-lg-6">
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
                                                <h5 id="plateno"><span style="color:gray">Plate No.:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>                    
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
        
        <!--START INSPECTION-->
                    <div class="col-lg-12">
                        <h4 class="m-t-10">Inspection Details</h2>
                        <hr style="margin-top: 10px; border: 2px solid #ffb74d  ">
                            <div class="row m-t-5">
                                <div class="col-lg-6">
                                    <h5>Assign Personnel:</h5>
                                        <p class="m-t-10">
                                            {{ Form::select(
	                                            'personnel',
	                                            $personnels,
	                                            null,
	                                            array(
	                                            'class' => 'form-control chzn-select',
	                                            'id' => 'personnel',
	                                            'name' => 'personnelid')
	                                            )  
	                                        }}
                                        </p>
                                </div>  
                                <div class="col-lg-6">
                                    <h5>Service Bay:</h5>
                                        <p class="m-t-10">
                                            {{ Form::select(
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
                                    </div>  
                            </div>
                        <!-- TABLE OF INSPECTION CHECKLIST -->
                            <table class="table table-bordered table-hover dataTable no-footer" id="sample_6" role="grid" aria-describedby="sample_6_info">
                                <thead>
                                    <tr class="trrow">
                                        <th colspan="2">Inspection Items</th>
                                        <th style="text-align: center">Condition</th>
                                        <th style="text-align: center">Function</th>
                                        <th style="text-align: center">Inventory</th>
                                        <th style="padding-left: 20px;">Remarks</th>
                                    </tr>
                                </thead>
                                    <tbody>
                                        
                                        <!--Inspection Item-->
                                        @foreach($checklists as $checklist)
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">&nbsp;<b style="color:red; size: 10px">{{$checklist->inspectiontypename}}<b></td>
                                            <td class="sorting_1">
                                                <!--List of Specific Item -->
                                                <ul style="list-style-type: none; padding-left: 1.2em;">
                                                @foreach($inspects as $inspect)
                                                    @if($checklist->inspectiontypeid == $inspect->inspectiontypeid)
                                                        <li style="padding-bottom: 7px;">{{ $inspect->inspectionitem }}</li>
                                                    @endif
                                                @endforeach
                                                <ul>
                                            </td>
                                            <td>
                                                <!-- Checkbox: Inventory -->
                                                <ul style="list-style-type: none;">
                                                 <li style="padding-bottom: 2px;">
                                                @foreach($inspects as $inspect)
                                                    @if($checklist->inspectiontypeid == $inspect->inspectiontypeid)
                                                    <div class="checkboxmin box radio_Checkbox_size4">
                                                        <label>
                                                        @foreach($insp as $inspection)
                                                            <input id="{{$inspection->hasInventory}}" type="checkbox">
                                                        @endforeach
                                                         </label>
                                                    </div>
                                                @endif
                                                @endforeach
                                                </li>
                                                </ul>
                                            </td>
                                            <td>
                                            
                                                <!--Checkbox: Function -->
                                                <ul style="list-style-type: none;">
                                                 <li style="padding-bottom: 2px;">
                                                 @foreach($inspects as $inspect)
                                                    @if($checklist->inspectiontypeid == $inspect->inspectiontypeid)
                                                <!--Checkbox: Function -->
                                                    <div class="checkboxmin box radio_Checkbox_size4">
                                                        <label>
                                                        @foreach($insp as $inspection)
                                                            <input id="{{$inspection->isWorking}}" type="checkbox">
                                                        @endforeach
                                                         </label>
                                                    </div>
                                                @endif
                                                @endforeach
                                                </li>
                                                </ul>
                                            </td>
                                            <td>
                                            
                                                <!--Checkbox: Condition -->
                                                <ul style="list-style-type: none;">
                                                 <li style="padding-bottom: 2px;">
                                                @foreach($inspects as $inspect)
                                                    @if($checklist->inspectiontypeid == $inspect->inspectiontypeid)
                                                    <div class="checkboxmin box radio_Checkbox_size4">
                                                        <label>
                                                        @foreach($insp as $inspection)
                                                            <input id="{{$inspection->Condition}}" type="checkbox" name="condition[]">
                                                        @endforeach
                                                         </label>
                                                    </div>
                                                @endif
                                                @endforeach
                                                </li>
                                                </ul>
                                            </td>
                                            <td>
                                            <!--Remarks per Items-->
                                            <ul style="list-style-type: none; padding-left: 0px;">
                                                @foreach($inspects as $inspect)
                                                    @if($checklist->inspectiontypeid == $inspect->inspectiontypeid)
                                             <li style="padding-bottom: 8px;" >
                                                <div class ="col-sm-10">
                                                    <input id="remark" name="remark" type="text" placeholder="Remarks" class="form-control form-control-sm">
                                                </div> 
                                            </li>
                                            @endif
                                            @endforeach  
                                            </ul>                 
                                            </td>
                                        </tr>
                                        @endforeach()
                                        <!--END PER INSPECTION RED ITEMS -->
                                    </tbody>
                            </table>
                            <!--END OF INSPECTION TABLE -->
                            <!--Textfield: Remarks -->
                            <div class="row m-t-20">
                                <div class="col-lg-12">
                                    <h5 style = "padding-bottom: 10px;">Remarks: <span style="color: red"></span></h5>
                                    <textarea id="remark3" class="form-control" cols="30" rows="2"></textarea>
                                </div>                               
                            </div>
                    <!-- END OF INSPECTION -->
                        </div>
                    </div>
                </div>
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