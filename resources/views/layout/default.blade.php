<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('Title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="{{URL::asset('img/icon.png')}}"/>



    <!--global styles-->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/components.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/custom.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/pages/layouts.css')}}"/>
    <!-- end of global styles-->

    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('vendors/select2/css/select2.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{URL::asset('vendors/datatables/css/colReorder.bootstrap.min.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/pages/dataTables.bootstrap.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/pages/dataTables.bootstrap.css')}}" />
    <!--End of plugin styles-->

    <!--Plugin styles-->
    <!-- <link type="text/css" rel="stylesheet" href="vendors/inputlimiter/css/jquery.inputlimiter.css"/> -->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('vendors/chosen/css/chosen.css')}}"/>
    <!-- <link type="text/css" rel="stylesheet" href="vendors/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css"/> -->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('vendors/jquery-tagsinput/css/jquery.tagsinput.css')}}"/>
    <!-- <link type="text/css" rel="stylesheet" href="vendors/daterangepicker/css/daterangepicker.css"/> -->
    <!-- <link type="text/css" rel="stylesheet" href="vendors/datepicker/css/bootstrap-datepicker.min.css"/> -->
    <!-- <link type="text/css" rel="stylesheet" href="vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css"/> -->
    <!-- <link type="text/css" rel="stylesheet" href="vendors/bootstrap-switch/css/bootstrap-switch.min.css"/> -->
    <!-- <link type="text/css" rel="stylesheet" href="vendors/jasny-bootstrap/css/jasny-bootstrap.min.css"/> -->
    <!-- <link type="text/css" rel="stylesheet" href="vendors/fileinput/css/fileinput.min.css"/> -->

    <!-- <link type="text/css" rel="stylesheet" href="css/pages/colorpicker_hack.css" /> -->

    <link type="text/css" rel="stylesheet" href="{{URL::asset('vendors/tooltipster/css/tooltipster.bundle.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{URL::asset('vendors/tipso/css/tipso.min.css')}}">

    <!--End of plugin styles-->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/pages/form_elements.css')}}"/>

    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/pages/tables.css')}}" />
    <link type="text/css" rel="stylesheet" href="#" id="skin_change" />
    <!-- end of page level styles -->
    
</head>
<body style="font-family:'Segoe UI';">
        
            @yield("content")
            
      
        <!-- /#content -->
    </div>
    <!--wrapper-->
</body>

<!--Plugin scripts-->

<script type="text/javascript" src="{{URL::asset('vendors/select2/js/select2.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/datatables/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/datatables/js/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/datatables/js/dataTables.responsive.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/datatables/js/dataTables.buttons.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/datatables/js/buttons.html5.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/datatables/js/buttons.bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/datatables/js/buttons.print.min.js')}}"></script>

<!--End of plugin scripts-->
<!-- global scripts-->

<!-- plugin level scripts -->
<script type="text/javascript" src="{{URL::asset('vendors/jquery.uniform/js/jquery.uniform.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/inputlimiter/js/jquery.inputlimiter.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/chosen/js/chosen.jquery.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/jquery-tagsinput/js/jquery.tagsinput.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/validval/js/jquery.validVal.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/inputmask/js/inputmask.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/inputmask/js/jquery.inputmask.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/inputmask/js/inputmask.extensions.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/fileinput/js/fileinput.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/fileinput/js/theme.js')}}"></script>

<script type="text/javascript" src="{{URL::asset('vendors/tooltipster/js/tooltipster.bundle.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/tipso/js/tipso.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/pages/tooltips.js')}}"></script>



<!--end of plugin scripts-->
<script type="text/javascript" src="{{URL::asset('js/form.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/pages/form_elements.js')}}"></script>
<!--end of plugin scripts-->

<script type="text/javascript" src="{{URL::asset('js/pages/users.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/pages/fixed_menu.js')}}"></script>


<script type="text/javascript" src="{{URL::asset('js/pages/radio_checkbox.js')}}"></script>


<script type="text/javascript">
tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

function GetClock(){
var d=new Date();
var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getFullYear();
var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

if(nhour==0){ap=" AM";nhour=12;}
else if(nhour<12){ap=" AM";}
else if(nhour==12){ap=" PM";}
else if(nhour>12){ap=" PM";nhour-=12;}

if(nmin<=9) nmin="0"+nmin;
if(nsec<=9) nsec="0"+nsec;

document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+" "+nyear+" - "+nhour+":"+nmin+":"+nsec+ap+"";
}

window.onload=function(){
GetClock();
setInterval(GetClock,1000);
}
</script>

</body>
</html>