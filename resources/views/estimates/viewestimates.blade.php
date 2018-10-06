@extends('layout.master') <!-- Include Master Page -->
@section('Title','View Estimates') <!-- Page Title -->
@section('content')

    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/sweetalert/css/sweetalert2.min.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/pages/sweet_alert.css') }}"/>

    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/animate/css/animate.min.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/hover/css/hover-min.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/wow/css/animate.css') }}"/>

    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/tooltipster/css/tooltipster.bundle.min.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/tipso/css/tipso.min.css') }}">

    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/pages/animations.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/pages/portlet.css') }}"/>

    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/animate/css/animate.min.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/jquery-validation-engine/css/validationEngine.jquery.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/bootstrapvalidator/css/bootstrapValidator.min.css') }}" />
    <!--End of plugin styles-->

        <!-- CONTENT -->
        <div id="content" class="bg-container">

            <header class="head">
                <div class="main-bar">
                    <div class="row" style = "height: 47px;">
                    <div class="col-6">
                        <h4 class="m-t-15">
                            <i class="fa fa-file-text"></i>
                            &nbsp;Estimates
                        </h4>
                    </div>

                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right">
                            <li class="breadcrumb-item " >
                                <a href="/estimates">
                                    <i class="fa fa-file-text" data-pack="default" data-tags=""></i>
                                    Estimate
                                </a>
                            </li>
                            <li class="active breadcrumb-item">&nbsp;View Estimate</li>
                        </ol>
                    </div>

                    </div>
                </div>
            </header>
                <div class="outer">
                    <div class="inner bg-container">
                        <div class="card">
                            <div class="card-header bg-black">
                                <span class="fa fa-eye fa-lg"></span>&nbsp;
                                View Estimate
                             </div>


                            <div class="card-block m-t-25" id="user_body">

                            <!--START CUSTOMER INFORMATION-->
                            <h4>Customer Information</h2>
                            <hr style="margin-top: 10px; border: 2px solid #a7dfcd">

                            <!--Label: Customer Name,  Contact No. Email, Adress, Senior Citizen /PWD ID-->
                            <div class="row m-t-15">
                                    <div class="col-lg-12">
                                            <h5><span style="color:gray">Customer Name:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $customer->FullName }}</h5>                    
                                    </div>  
                                    <div class="col-lg-12 m-t-10">
                                            <h5><span style="color:gray">Contact No.:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $customer->ContactNo }}</h5>               
                                    </div>
                                    <div class="col-lg-12 m-t-10">
                                            <h5><span style="color:gray">Email Address:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $customer->EmailAddress }}</h5>
                                    </div>
                                    <div class="col-lg-12 m-t-10">
                                            <h5><span style="color:gray">Address:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $customer->CompleteAddress }}</h5>
                                    </div>
                                    <div class="col-lg-12 m-t-10">
                                            <h5><span style="color:gray">Senior Citizen/ PWD ID:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $customer->PWD_SC_No }}</h5>
                                    </div>                    
                                </div> 


                            <!--START VEHICLE INFORMATION-->
                            <h4 class ="m-t-25">Vehicle Information</h2>
                            <hr style="margin-top: 10px; border: 2px solid #6699cc">

                            <!--Label: Customer Name,  Contact No. Email, Adress, Senior Citizen /PWD ID-->
                            <div class="row m-t-15">
                                    <div class="col-lg-6 m-t-5">
                                            <h5><span style="color:gray">Plate No.:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $automobile->PlateNo }}</h5>                    
                                    </div>  
                                    <div class="col-lg-6 m-t-5">
                                            <h5><span style="color:gray">Make:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $automobile->Make }}</h5>               
                                    </div>
                                    <div class="col-lg-6 m-t-10">
                                            <h5><span style="color:gray">Chassis No.:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $automobile->ChassisNo }}</h5>
                                    </div>
                                    <div class="col-lg-6 m-t-10">
                                            <h5><span style="color:gray">Model:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $automobile->Model }}</h5>
                                    </div>
                                    <div class="col-lg-6 m-t-10">
                                            <h5><span style="color:gray">Mileage:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $automobile->Mileage }}</h5>
                                    </div> 
                                    <div class="col-lg-6 m-t-10">
                                            <h5><span style="color:gray">Transmission:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $automobile->Transmission }}</h5>
                                    </div>
                                    <div class="col-lg-6 m-t-10">
                                            <h5><span style="color:gray">Color:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $automobile->Color }}</h5>
                                    </div>             
                                </div>

                        <!--START OF ESTIMATE DETAILS -->
                        <h4 class="m-t-25">Estimate Details</h2>
                        <hr style="margin-top: 10px; border: 2px solid #ffb74d  ">

                        <div class="row m-t-20" style="padding-bottom:20px">  
                            <div class="col-lg-6 m-t-0">
                                    <h5><span style="color:gray">Estimated by:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $personnel->FullName }}</h5>
                            </div>                         
                            <div class="col-lg-6 m-t-0">
                                    <h5><span style="color:gray">Service Bay:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    {{ $servicebay->ServiceBayName }}</h5>
                            </div>                          
                        </div>


                        <!--Start of estimate table-->
                        <table class="table list table-bordered display table-hover dataTable">
                                    <thead>
                                        <br>
                                        <tr>
                                            <td style="width: 20%;">
                                                <h5>Service <span style="color: red">*</span></h5>
                                            </td>
                                            <td style="width: 10%;">
                                                <h5>Labor <span style="color: red">*</span>
                                                </h5>
                                            </td>
                                            <td style="width: 20%;">
                                                <h5>Product <span style="color: red"></span>
                                                </h5>
                                            </td>
                                            <td style="width: 10%;">
                                                <h5>Quantity <span style="color: red">*</span></h5>
                                            </td>
                                            <td style="width: 10%;">
                                                <h5>Unit Price<span style="color: red"></span>
                                                </h5>
                                            </td>
                                            <td style="width: 10%;">
                                                <h5>Total Price<span style="color: red"></span>
                                                </h5>
                                            </td>
                                            <td style="width: 5%;">
                                                <h5>Included<span style="color: red"></span>
                                                </h5>
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($serviceperformed as $sp)
                                        <tr>
                                            <td style="border-right:none !important">
                                                {!!$sp->ServiceName!!}<br>
                                            </td>
                                            <td style="border-right:none !important">
                                                <input type="text" style="width:70px;" id="laborcost" name="labor" placeholder="Labor" class="form-control" value="{!!$sp->LaborCost!!}" readonly>
                                            </td>
                                            <td style="border-right:none !important"><a></a></td>
                                            <td  style="border-right:none !important">
                                                <input type="hidden" style="width:55px;" id="quantity" name="quantity" placeholder="" value="1" readonly class="form-control hidden">
                                            </td>
                                            <td style="border-right:none !important">
                                                <input type="hidden" style="width:50px;" id="unitprice" name="unitprice" placeholder="" class="form-control" value="{!!$sp->LaborCost!!}">
                                            </td>
                                            <td style="border-right:none !important">
                                                <input type="text" readonly style="width:70px;text-align: right"  id="totalprice" name="price" placeholder=".00" class="form-control" value="{!!$sp->LaborCost!!}">
                                                </td>
                                            <td style="border-left:none !important">
                                                <center>
                                                    <input style="-webkit-transform: scale(1.7);" data-serviceid="{!!$sp->ServiceID!!}" id="chkInclude" type="checkbox" checked disabled value="">
                                                    <button type="button" id="svc" name="{!!$sp->EstimatedTime!!}"  class="btnDel btn btn-danger hvr-float-shadow" style="display:none;"></button>
                                                </center>
                                            </td>
                                        </tr>
                                            @foreach($productused as $pu)
                                                @if($sp->ServicePerformedID == $pu->ServicePerformedID)
                                                <tr>
                                                    <td style="border-right:none !important"></td>
                                                    <td style="border-right:none !important">
                                                        <input type="hidden" style="width:50px; text-align:right;" name="labor" placeholder="Labor" class="form-control">
                                                    </td>
                                                    <td style="border-right:none !important">
                                                        {!!$pu->ProductName!!}
                                                    </td>
                                                    <td style="border-right:none !important">
                                                        <input type="text" style="width:55px;text-align:center;" id="quantity" name="quantity" placeholder="Quantity" value="{!!$pu->Quantity!!}" class="form-control" readonly>
                                                    </td>
                                                    <td style="border-right:none !important">
                                                        <input type="text" readonly style="width:50px; text-align: right" id="unitprice" name="unitprice" readonly placeholder=".00" value="{!!$pu->Price!!}" class="form-control">
                                                    </td>
                                                    <td style="border-right:none !important">
                                                        <input type="text" readonly style="width:70px;text-align: right" id="totalprice" name="totalprice" placeholder=".00" class="form-control" value="{!!$pu->Price!!}">
                                                    </td>
                                                    <td style="border-left:none !important">
                                                        <center>
                                                            <input style="-webkit-transform: scale(1.7);" data-serviceid="{!!$sp->ServiceID!!}" id="chkInclude" type="checkbox" checked disabled value="">
                                                        </center>
                                                    </td>
                                                </tr>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    </tbody>

                                     <!--Footer: Total Price-->
                                    <tfoot>
                                        <tr class="trrow">
                                            <th colspan="2" style="text-align: left;">Estimated Time: 
                                             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                <span id="estimated" style="text-align: center; color: blue">3 days</span>
                                            </th>
                                            <th colspan="3" style="text-align: right;">
                                                <div class="cols">
                                                    <h5 style="padding-top:5px;">Total Product Cost:</h5>
                                                    <h5 style="padding-top:5px;">Total Labor Cost (Service):</h5>
                                                    <h5 style="padding-top:5px;">Grand Total: </h5>
                                                </div>
                                            </th>
                                            <th colspan="1" style="text-align:right">
                                                <div class="cols">
                                                    <h5 id="totalprodsales" style="padding-top:5px;">PHP&nbsp;&nbsp;&nbsp;<span style="color:red">&nbsp;&nbsp;&nbsp;0.00</span></h5>
                                                    <h5 id="totallaborcost" style="padding-top:5px;">PHP&nbsp;&nbsp;&nbsp;<span style="color:red">&nbsp;&nbsp;&nbsp;0.00</span></h5>
                                                    <h5 id="grandtotal" style="padding-top:5px;">PHP&nbsp;&nbsp;&nbsp;<span style="color:red">&nbsp;&nbsp;&nbsp;0.00</span></h5>
                                                </div>
                                            </th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                </table>





                                    <div class="row m-t-20">
                                        <div class="col-lg-6">
                                            <h5 style = "padding-bottom: 10px;">Complaints: <span style="color: red"></span></h5>
                                            <textarea id="complaints" name="complaint" class="form-control" cols="30" rows="4" readonly>{{ $complaint->Problem }}</textarea>
                                        </div>
                                        <div class="col-lg-6">
                                            <h5 style = "padding-bottom: 10px;">Diagnosis: <span style="color: red"></span></h5>
                                            <textarea id="diagnosis" name="diagnosis" class="form-control" cols="30" rows="4" readonly>{{ $complaint->Diagnosis }}</textarea>
                                        </div>                              
                                    </div>



                                <!--VIEW STEPS MODAL -->
            <div class="modal fade in " id="viewModal" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-info">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-info"></i>
                                            &nbsp;&nbsp;Service Steps </h4>                  
                            </div>


                        <div class="modal-body" style="padding-left: 47px;">
                                 <!--Content-->
                                 <div class="row m-t-5">  
                                    <div class="col-md-11 ">
                                        <h4>Steps: <span style="color: red">Change Oil</span></h4>
                                        <p class="m-t-15" style="padding-left: 20px;">
                                            1. Open Oil Gauge </br>
                                            2. Check Air Pump </br>
                                            3. Clean oil filter. </br>
                                            4. Clean valves. </br>
                                        </p>
                                    </div>
                                 </div>
                                 
                            </div>

                            <!--Button: Close, Save Changes -->
                            <div class="modal-footer">
                              <div class="examples transitions m-t-5">
                                <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- VIEW STEPS MODAL-->             


  
                            </div>
                           
                                <!--Button: Back, Save-->
                             <div class="card-footer bg-black">
                               <div class="examples transitions m-t-5 pull-right">
                                    <button onclick="window.location='{{ url("/estimates") }}'" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn gray"  href="/estimates" target="_blank"><i class="fa fa-arrow-left" >
                                    </i>&nbsp;Back</button>

                                    <a href="/estimateform/{{ $estimate->EstimateID }}" target="_blank">
                                    <button class="btn btn-info btn-raised" style ="width: 80px;"><i class="fa fa-print text-white" ></i>&nbsp; Print</button>
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

<script type="text/javascript" src="{{ URL::asset('vendors/tooltipster/js/tooltipster.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('vendors/tipso/js/tipso.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/pages/tooltips.js') }}"></script>


<!-- global scripts modals-->
<script type="text/javascript" src="{{ URL::asset('js/pages/modals.js') }}"></script>
<!--End of global scripts-->

<script>
$(document).ready(function(){
    
    getGrandTotal();
    getEstimatedTime();

    function getGrandTotal(){
        grandTotal = 0;
        var qty, price, total, laborcost = 0, productsales = 0;
        $('table td input').each(function() {
            if((this.id) == "quantity"){
                qty = this.value;
            }

            if((this.id) == "unitprice"){
                price = this.value;
            }

            if((this.id) == "totalprice"){
                if (isNaN(qty) || qty == 0) qty = 1;
                total = parseFloat(qty).toFixed(2) * parseFloat(price).toFixed(2);
                this.value = parseFloat(total).toFixed(2);
                grandTotal += parseFloat(total);
            }

            if((this.id) == "laborcost"){
                laborcost += parseFloat(this.value);
            }
        });
        productsales = grandTotal - laborcost;
        $("#totalprodsales").html("PHP " + parseFloat(productsales).toFixed(2));
        $("#totallaborcost").html("PHP " + parseFloat(laborcost).toFixed(2));
        $("#grandtotal").html("PHP " + parseFloat(grandTotal).toFixed(2));
    }

    function getGrandTotalNoQty(){
        grandTotal = 0;
        var qty, price, total, laborcost = 0, productsales = 0;
        $('table td input').each(function() {
            if((this.id) == "quantity"){
                qty = this.value;
                if ((qty*1) == 0){
                    qty = 1;
                    this.value = qty;
                }
            }

            if((this.id) == "unitprice"){
                price = this.value;
            }

            if((this.id) == "totalprice"){
                if (isNaN(qty) || qty == 0) qty = 1;
                total = parseFloat(qty).toFixed(2) * parseFloat(price).toFixed(2);
                this.value = parseFloat(total).toFixed(2);
                grandTotal += parseFloat(total);
            } 
                
            if((this.id) == "laborcost"){
                laborcost += parseFloat(this.value);
            }
        });
        productsales = grandTotal - laborcost;
        $("#totalprodsales").html("PHP " + parseFloat(productsales).toFixed(2));
        $("#totallaborcost").html("PHP " + parseFloat(laborcost).toFixed(2));
        $("#grandtotal").html("PHP " + parseFloat(grandTotal).toFixed(2));
    }


    function getEstimatedTime(){
        totalEstimatedTime = 0;
        var time, inHours, inMins;
        $('table td button').each(function() {
            if ((this.id) == "svc"){
                time = this.name;
                totalEstimatedTime += parseFloat(time);
            }
        });
        inHours = parseInt(totalEstimatedTime / 60);
        if (inHours > 1) inHours = inHours + "hrs. ";
        else inHours = inHours + "hr. ";
        inMins = totalEstimatedTime % 60;

        if (totalEstimatedTime != 0)
        document.getElementById("estimated").innerHTML = "Approx. " +totalEstimatedTime + " mins. <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(" + inHours + inMins + "mins.)";
        else
        document.getElementById("estimated").innerHTML = "No job to do.";
    }

});
</script>

@stop