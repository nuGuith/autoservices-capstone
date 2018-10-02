@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','Net Sales Report') <!-- Page Title -->
@section('content')

    <link type="text/css" rel="stylesheet" href="vendors/sweetalert/css/sweetalert2.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/pages/sweet_alert.css"/>

    <link type="text/css" rel="stylesheet" href="vendors/animate/css/animate.min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/hover/css/hover-min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/wow/css/animate.css"/>

    <link type="text/css" rel="stylesheet" href="vendors/tooltipster/css/tooltipster.bundle.min.css">
    <link type="text/css" rel="stylesheet" href="vendors/tipso/css/tipso.min.css">

    <!-- end of plugin styles -->
    <link type="text/css" rel="stylesheet" href="css/pages/animations.css"/>
    <link type="text/css" rel="stylesheet" href="css/pages/portlet.css"/>

    <!--plugin syles-->
    <link type="text/css" rel="stylesheet" href="vendors/inputlimiter/css/jquery.inputlimiter.css" />
    <link type="text/css" rel="stylesheet" href="vendors/jquery-tagsinput/css/jquery.tagsinput.css" />
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('vendors/daterangepicker/css/daterangepicker.css') }}" />
    <link type="text/css" rel="stylesheet" href="vendors/datepicker/css/bootstrap-datepicker.min.cs>s" />
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-switch/css/bootstrap-switch.min.css" />
    <link type="text/css" rel="stylesheet" href="vendors/jasny-bootstrap/css/jasny-bootstrap.min.css" />
    <!-- end of plugin styles -->

        <!-- CONTENT -->
<div id="content" class="bg-container">
    <header class="head">
        <div class="main-bar">
            <div class="row" style = "height: 47px;">
                <div class="col-6">
                    <h4 class="m-t-15">
                        <i class="fa fa-file"></i>
                            Job Order Sales Report
                    </h4>
                </div>
                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right">
                            <li class="breadcrumb-item " >
                                <a href="/inspect">
                                    <i class="fa fa-file" data-pack="default" data-tags=""></i>
                                    Job Order Sales Report
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
                <div class="card-header default_bg_dark">
                    <div align="center" class="m-t-10">
                        <h3> NET SALES REPORT </h3>
                        <h4 id="reportdate"></h3>
                    </div>
                </div>
                <div class="card-block m-t-5" id="user_body">
                    <div class="col-lg-4 input_field_sections">
                        <form>
                            <div class="input-group">
                                <span class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </span>
                                <input type="text" class="form-control" id="reportrange" placeholder="dd/mm/yyyy-dd/mm/yyyy">
                            </div>
                        </form>
                    </div>
                    <table class="table table-bordered table-hover table-advance dataTable no-footer" id="editable_table" role="grid">
                        <thead>
                            <tr role="row">
                                <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 12%;"><b>DATE</b></th>
                                <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 15%;"><b>JOB ORDER ID</b></th>
                                <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 25%;"><b>NET AMOUNT</b></th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($sales as $sale)
                            <tr role="row" class="even">
                                <td>
                                	<?php
                                		$date = date('F d, Y', strtotime($sale->JODate));
                                		echo $date;
                                	?>
                                </td>
                                <td>JO000{{ $sale->JobOrderID }}</td>
                                <td id="sales">
                                    <?php
                                        $amount = $sale->DiscountedAmount;
                                        $value = 0.00;
                                        $format = number_format($value, 2, ".", "");

                                        if(($amount)==0)
                                            echo "Php"." ".$format;
                                        else
                                            echo "Php"." ".$amount;
                                    ?>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
	                    <tfoot>
	                        <tr>
	                            <th></th>
	                            <th>
                                    <ul>
                                        <li style="list-style-type:none">Total Net:</li>
                                    </ul>
                                </th>
	                            <td>
                                    <b>
                                        @foreach($totalsales as $total)
                                            Php {{ $total->net }}
                                        @endforeach
                                    </b>
                                </td>
	                        </tr>
	                    </tfoot>
                    </table>
                </div>
                <!-- FOOTER -->
                <div class="card-footer bg-black disabled">
                    <div class="examples transitions m-t-5 pull-right">
                        <div class="btn-group">
                            <a href="{{url('/report-netsales')}}" target="_blank">
                            <button class="btn btn-warning m-l-0 adv_cust_mod_btn" style ="width: 150px;" >
                            	<i class="fa fa-save text-white" ></i>
                            	&nbsp; Generate PDF
                            </button>
                        </div>
                    </div>
                </div>
            <!-- /. FOOTER -->
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

<script type="text/javascript" src="js/components.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<!-- end of global scripts-->
<!-- plugin scripts -->
<script type="text/javascript" src="vendors/jquery.uniform/js/jquery.uniform.js"></script>
<script type="text/javascript" src="vendors/inputlimiter/js/jquery.inputlimiter.js"></script>
<script type="text/javascript" src="vendors/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script type="text/javascript" src="vendors/jquery-tagsinput/js/jquery.tagsinput.js"></script>
<script type="text/javascript" src="vendors/validval/js/jquery.validVal.min.js"></script>
<script type="text/javascript" src="vendors/inputmask/js/jquery.inputmask.bundle.js"></script>
<script type="text/javascript" src="vendors/moment/js/moment.min.js"></script>
<script type="text/javascript" src="vendors/daterangepicker/js/daterangepicker.js"></script>
<script type="text/javascript" src="vendors/datepicker/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="vendors/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="vendors/autosize/js/jquery.autosize.min.js"></script>
<script type="text/javascript" src="vendors/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
<script type="text/javascript" src="vendors/jasny-bootstrap/js/inputmask.js"></script>
<script type="text/javascript" src="vendors/datetimepicker/js/DateTimePicker.min.js"></script>
<script type="text/javascript" src="vendors/j_timepicker/js/jquery.timepicker.min.js"></script>
<script type="text/javascript" src="vendors/clockpicker/js/jquery-clockpicker.min.js"></script>

<script type ="text/javascript" src="{{URL::asset('vendors/daterangepicker/js/moment.min.js')}}"></script>
<!--end of plugin scripts-->
<script type="text/javascript" src="{{ URL::asset('js/form.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/pages/datetime_piker.js') }}"></script>

<script>
$(document).ready( function(){
    var start = moment();
    var end = moment();

    function date(start, end){
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        var startdate = $('#reportrange').data('daterangepicker').startDate.format('YYYY-MM-DD');
        var enddate = $('#reportrange').data('daterangepicker').endDate.format('YYYY-MM-DD');
            
        if (enddate == startdate)
            $('#reportdate').text(""+start.format('MMMM D, YYYY'));
        else
            $('#reportdate').text(""+start.format('MMMM D, YYYY') + " to " + end.format('MMMM D, YYYY'));
    }

    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges:{
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, date);

    date(start, end);

});
</script>

@stop