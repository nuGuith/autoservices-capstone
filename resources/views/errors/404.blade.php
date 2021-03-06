<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="shortcut icon" href="{{URL::asset('img/icon.png')}}"/>
    <title>404 Page Not Found</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    
    <!-- global level css-->
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/components.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/custom.css')}}"/>
    <!-- end of globallevel js-->
    <!-- page level styles-->
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/pages/404.css')}}"/>
    <link type="text/css" rel="stylesheet" href="#" id="skin_change"/>
    <!-- end of page level styles-->
</head>
<body style="background-color:powderblue;">

<!-- <div class="preloader" style=" position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 100000;
  backface-visibility: hidden;
  background: #ffffff;">
    <div class="preloader_img" style="width: 200px;
  height: 200px;
  position: absolute;
  left: 48%;
  top: 48%;
  background-position: center;
z-index: 999999">
        <img src="img/loader.gif" style=" width: 40px;" alt="loading...">
    </div>
</div> -->
<div id="animate" >
    <div class="white_txt number text-center">
        Go back to
        <a href="/"><b>HOME</b></a>
    </div>
    <div class="text-center" >
        <img src="{{URL::asset('img/404.png')}}" class="img-fluid center-block" alt="Page Not Found"/>
    </div>
</div>
<!-- global js -->
<!--jQuery 2.1.1 -->
<script type="text/javascript" src="{{URL::asset('js/jquery.min.js')}}"></script>
<!--Bootstrap -->
<script type="text/javascript" src="{{URL::asset('js/tether.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/pages/404.js')}}"></script>

<!-- end of global js -->
<!-- end of page level js-->
</body>

</html>