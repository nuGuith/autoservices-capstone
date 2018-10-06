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
<body class="fixedMenu_header">
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
<div class="bg-dark" id="wrap">
    <div id="top"  class="fixed">
        <!-- .navbar -->
        <nav class="navbar navbar-static-top" style="bottom: 2px">
            <div class="container-fluid m-0" >
            <a class="navbar-brand float-left text-center " href="{{URL::asset('/')}}" style="margin-top: 2px;">
                    <div class="row">&nbsp;&nbsp;&nbsp;<i class="fa fa-car text-white"></i><h4 class="text-white">&nbsp;&nbsp;JPR AUTOPRECISION </h4></div>
                </a>
                <div class="menu">
                    <span class="toggle-left" id="menu-toggle">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-bars text-white"></i>
                    </span>


                </div>

                
                
                <div class="topnav dropdown-menu-right float-right">       

                
                    <div class="menu float-left">
                      <h5><span class="toggle-left text-white" id="clockbox">&nbsp;&nbsp;</span></h5>  
                    </div>

                    <div class="btn-group">
                        <div class="user-settings no-bg">

                            <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown"> 
                                <img src="{{URL::asset('/img/user-admin.png')}}" class=" media-object img-thumbnail admin_img2 rounded-circle avatar-img" alt="avatar"> <strong>&nbsp;&nbsp;Admin&nbsp;</strong>
                                <span class="fa fa-sort-down white_bg"></span>
                            </button>

                            <div class="dropdown-menu admire_admin">
                                <a class="dropdown-item title" href="">
                                    Admin</a>
                                <a class="dropdown-item" href="{{URL::asset('edit_user.html')}}"><i class="fa fa-cogs"></i>
                                    Account Settings</a>
                                <a class="dropdown-item" href="{{URL::asset('lockscreen.htm')}}l"><i class="fa fa-lock"></i>
                                    Lock Screen</a>
                                <a class="dropdown-item" href="{{URL::asset('login.html')}}"><i class="fa fa-sign-out"></i>
                                    Log Out</a>
                            </div>
                        </div>
                    </div>


                    <div class="btn-group">
                        &nbsp;&nbsp;&nbsp;
                        <a class="btn btn-default btn-sm messages toggle-right">
                            &nbsp;
                            <i class="fa fa-cogs text-white"></i>
                            &nbsp;
                        </a>
                    </div>

                </div>
         </nav>
        <!-- /.navbar -->
        <!-- /.head --> </div>
    <!-- /#top -->
    <div class="wrapper">
        <div id="left" class="fixed">
            <div class="menu_scroll">
                <div class="media user-media bg-dark dker">
                    <div class="media user-media bg-dark dker" style="top: 10px">
                <div class="user-media-toggleHover">
                    <span class="fa fa-user"></span>
                </div>
                <div class="user-wrapper bg-dark">
                    <a class="user-link" href="">
                        <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture"
                             src="{{URL::asset('img/user-admin.png')}}">
                        <p class="text-white user-info"><big>WELCOME,&nbsp;&nbsp;Admin!</big></p>
                    </a>
                </div>
                <br>
            </div>
                </div>
                <!-- #menu -->
                <!-- #menu -->
            <ul id="menu" class="bg-blue dker">
                <li {!! (Request::is('/') ? 'class="active"' : '') !!} style="border-radius: 4px; margin: 0% 5% 0%;">
                    <a href="/" style="padding-left:10%; padding-right: 10%;">
                        <i class="fa fa-home"></i>
                        <span class="link-title">&nbsp;Dashboard</span>
                    </a>
                </li>

                <br>
                    <span class="link-title" style="border-radius: 4px; margin: 0% 5% 0%;">&nbsp;&nbsp;MAINTENANCE</span>

                <li {!! (Request::is('vehicletype') ? 'class="active"' : '') !!} style="border-radius: 4px; margin: 0% 5% 0%;">
                    <a href="/vehicletype" style="padding-left:10%; padding-right: 2%;">
                        <i class="fa fa-truck"></i>
                        <span class="link-title">&nbsp; Vehicle Type</span>
                    </a>
                    
                </li>
                <li {!! (Request::is('productcategory')|| Request::is('producttype')|| Request::is('productbrand')|| Request::is('productunittype')|| Request::is('product')? 'class="active"' : '') !!} style="border-radius: 4px; margin: 0% 5% 0%;">
                    <a href="javascript:;" style="padding-left:10%; padding-right: 2%;">
                        <i class="fa fa-pencil-square-o"></i>
                        <span class="link-title">&nbsp; Product Listing</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul>
                        <li {!! (Request::is('productcategory') ? 'class="active"' : '') !!} style="border-radius: 4px;">
                            <a href="{{url('/productcategory')}}" style="padding-left:10%; padding-right: 10%;">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Product Category
                            </a>
                        </li>
                        <li {!! (Request::is('producttype')  ? 'class="active"' : '') !!} style="border-radius: 4px;">
                            <a href="{{url('/producttype')}}" style="padding-left:10%; padding-right: 10%;">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Product Type
                            </a>
                        </li>
                        <li {!! (Request::is('productbrand')  ? 'class="active"' : '') !!} style="border-radius: 4px;">
                            <a href="{{url('/productbrand')}}" style="padding-left:10%; padding-right: 10%;">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Product Brand
                            </a>
                        </li>
                        <li {!! (Request::is('productunittype')  ? 'class="active"' : '') !!} style="border-radius: 4px;">
                            <a href="{{url('/productunittype')}}" style="padding-left:10%; padding-right: 10%;">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Product Unit Type
                            </a>
                        </li>
                        <li {!! (Request::is('product')  ? 'class="active"' : '') !!}  style="border-radius: 4px;">
                            <a href="{{url('/product')}}" style="padding-left:10%; padding-right: 10%;">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Product
                            </a>
                        </li>
                    </ul>
                </li>
                <li {!! (Request::is('servicecategory')|| Request::is('service')|| Request::is('servicesteps')|| Request::is('serviceprice')|| Request::is('serviceproduct')|| Request::is('servicebay')|| Request::is('transact') ? 'class="active"' : '') !!} style="border-radius: 4px; margin: 0% 5% 0%;">
                    <a href="javascript:;" style="padding-left:10%; padding-right: 2%;">
                        <i class="fa fa-wrench"></i>
                        <span class="link-title">&nbsp; Service</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul>
                        <li {!! (Request::is('servicecategory')  ? 'class="active"' : '') !!} >
                            <a href="/servicecategory" style="padding-left:10%; padding-right: 10%;">
                                <i class="fa fa-angle-right"></i> &nbsp; Service Category
                            </a>
                        </li>
                        <li {!! (Request::is('service')  ? 'class="active"' : '') !!} >
                            <a href="/service" style="padding-left:10%; padding-right: 10%;">
                                <i class="fa fa-angle-right"></i> &nbsp; Services
                            </a>
                        </li>
                        <li {!! (Request::is('servicesteps')  ? 'class="active"' : '') !!} >
                            <a href="/servicesteps" style="padding-left:10%; padding-right: 10%;">
                                <i class="fa fa-angle-right"></i> &nbsp; Service Steps
                            </a>
                        </li>
                        <li {!! (Request::is('serviceskills')  ? 'class="active"' : '') !!} >
                        <!--     <a href="/serviceskills" style="padding-left:10%; padding-right: 10%;">
                                <i class="fa fa-angle-right"></i> &nbsp; Service Skills
                            </a>
                        </li> -->
                        <li {!! (Request::is('serviceprice')  ? 'class="active"' : '') !!} >
                            <a href="/serviceprice" style="padding-left:10%; padding-right: 10%;">
                                <i class="fa fa-angle-right"></i> &nbsp; Service Price
                            </a>
                        </li>
                        <li {!! (Request::is('serviceproduct')  ? 'class="active"' : '') !!} >
                            <a href="/serviceproduct" style="padding-left:10%; padding-right: 10%;">
                                <i class="fa fa-angle-right"></i> &nbsp; Service Product
                            </a>
                        </li>
                        <li {!! (Request::is('servicebay')  ? 'class="active"' : '') !!} >
                            <a href="/servicebay" style="padding-left:10%; padding-right: 10%;">
                                <i class="fa fa-angle-right"></i> &nbsp; Service Bay
                            </a>
                        </li>
                        <li {!! (Request::is('inspectionchecklist')  ? 'class="active"' : '') !!} >
                            <a href="/inspectionchecklist" style="padding-left:10%; padding-right: 10%;">
                                <i class="fa fa-angle-right"></i> &nbsp; Inspection Checklist
                            </a>
                        </li>
                        <!-- <li>
                            <a href="/maintenancechecklist" style="padding-left:10%; padding-right: 10%;">
                                <i class="fa fa-angle-right"></i> &nbsp; Maintenance Checklist
                            </a>
                        </li> -->
                    </ul>
                </li>
                <li {!! (Request::is('jobtitle')|| Request::is('skills') || Request::is('personnel') || Request::is('mechanicskills') ? 'class="active"' : '') !!} style="border-radius: 4px; margin: 0% 5% 0%;" >
                    <a href="javascript;" style="padding-left:10%; padding-right: 2%;">
                        <i class="fa fa-group"></i>
                            &nbsp;Personnel
                            <span class="fa arrow"></span>
                    </a>
                    <ul>
                        <li {!! (Request::is('jobtitle')  ? 'class="active"' : '') !!} >
                            <a href="/jobtitle" style="padding-left:10%; padding-right: 10%;">
                                <i class="fa fa-angle-right"></i>
                                    &nbsp;Job Title
                            </a>
                        </li>

                        <li {!! (Request::is('skills')  ? 'class="active"' : '') !!} >
                            <a href="/skills" style="padding-left:10%; padding-right: 10%;">
                                <i class="fa fa-angle-right"></i>
                                    &nbsp;Skills
                            </a>
                        </li>
                         
                        <li {!! (Request::is('personnel')  ? 'class="active"' : '') !!} >
                            <a href="/personnel" style="padding-left:10%; padding-right: 10%;">
                                <i class="fa fa-angle-right"></i>
                                    &nbsp;Personnel
                            </a>
                        </li>

                        <li {!! (Request::is('mechanicskills')  ? 'class="active"' : '') !!} >
                            <a href="/mechanicskills" style="padding-left:10%; padding-right: 10%;">
                                <i class="fa fa-angle-right"></i>
                                    &nbsp;Mechanic Skills
                            </a>
                        </li>
                    </ul>
                </li>
                <li {!! (Request::is('package')  ? 'class="active"' : '') !!} style="border-radius: 4px; margin: 0% 5% 0%;">
                    <a href="/package" style="padding-left:10%; padding-right: 10%;">
                        <i class="fa  fa-gift"></i>
                        <span class="link-title">&nbsp; Package</span>
                    </a>
                </li>


                 <li {!! (Request::is('freeitems')|| Request::is('promo')? 'class="active"' : '') !!} style="border-radius: 4px; margin: 0% 5% 0%;">
                    <a href="javascript:;" style="padding-left:10%; padding-right: 2%;">
                        <i class="fa fa-bookmark"></i>
                        <span class="link-title">&nbsp; Promo</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul>
                        <li {!! (Request::is('freeitems') ? 'class="active"' : '') !!} style="border-radius: 4px;">
                            <a href="{{url('/freeitems')}}" style="padding-left:10%; padding-right: 10%;">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Free Items
                            </a>
                        </li>
                        <li {!! (Request::is('promo')  ? 'class="active"' : '') !!} style="border-radius: 4px;">
                            <a href="{{url('/promo')}}" style="padding-left:10%; padding-right: 10%;">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Promo
                            </a>
                        </li>
                    </ul>
                </li>


                <li {!! (Request::is('discount')  ? 'class="active"' : '') !!} style="border-radius: 4px; margin: 0% 5% 0%;">
                    <a href="/discount" style="padding-left:10%; padding-right: 10%;">
                        <i class="fa fa-ticket"></i>
                        <span class="link-title">&nbsp; Discount</span>
                    </a>
                </li>

                    <br>
                    <span class="link-title" style="border-radius: 4px; margin: 0% 5% 0%">&nbsp;&nbsp; TRANSACTION</span>
                
                <li {!! (Request::is('customer')  ? 'class="active"' : '') !!}  style="border-radius: 4px; margin: 0% 5% 0%;">
                    <a href="/customerinformation" style="padding-left:10%; padding-right: 10%;">
                        <i class="fa fa-info"></i>
                        <span class="link-title">&nbsp;Customer Information</span>
                    </a>
                </li>
                
                <li {!! (Request::is('inspect')  ? 'class="active"' : '') !!}  style="border-radius: 4px; margin: 0% 5% 0%;">
                    <a href="/inspect" style="padding-left:10%; padding-right: 10%;">
                        <i class="fa fa-search"></i>
                        <span class="link-title">&nbsp; Inspect Vehicle</span>
                    </a>
                </li>
                <li {!! (Request::is('estimates')  ? 'class="active"' : '') !!} style="border-radius: 4px; margin: 0% 5% 0%;">
                    <a href="/estimates" style="padding-left:10%; padding-right: 10%;">
                        <i class="fa fa-file-text"></i>
                        <span class="link-title">&nbsp; Estimates</span>
                    </a>
                </li>
                </li>
                <li {!! (Request::is('joborder')  ? 'class="active"' : '') !!}  style="border-radius: 4px; margin: 0% 5% 0%;">
                    <a href="/joborder" style="padding-left:10%; padding-right: 10%;">
                        <i class="fa fa fa-wpforms"></i>
                        <span class="link-title">&nbsp; Job Order</span>
                    </a>
                </li>
                <li {!! (Request::is('backjob')  ? 'class="active"' : '') !!}  style="border-radius: 4px; margin: 0% 5% 0%;">
                    <a href="/backjob" style="padding-left:10%; padding-right: 10%;">
                        <i class="fa fa-rotate-left"></i>
                        <span class="link-title">&nbsp; Back Job</span>
                    </a>
                </li>

                    <br>
                    <span class="link-title" style="border-radius: 4px; margin: 0% 5% 0%">&nbsp;&nbsp; QUERIES AND REPORTS</span>
                
                <li {!! (Request::is('queries')  ? 'class="active"' : '') !!} style="border-radius: 4px; margin: 0% 5% 0%;">
                    <a href="/queries" style="padding-left:10%; padding-right: 10%;">
                        <i class="fa fa-database"></i>
                        <span class="link-title">&nbsp; Queries</span>
                    </a>
                    
                </li>
                <li {!! (Request::is('reports')  ? 'class="active"' : '') !!} style="border-radius: 4px; margin: 0% 5% 0%;">
                    <a href="javascript:;" style="padding-left:10%; padding-right: 2%;">
                        <i class="fa fa-bookmark"></i>
                        <span class="link-title">&nbsp; Reports</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul>
                        <li {!! (Request::is('estimate_report') ? 'class="active"' : '') !!} style="border-radius: 4px;">
                            <a href="{{url('/estimate_report')}}" style="padding-left:10%; padding-right: 10%;">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Estimate Report
                            </a>
                        </li>
                        <li {!! (Request::is('inspection_report')  ? 'class="active"' : '') !!} style="border-radius: 4px;">
                            <a href="{{url('/inspection_report')}}" style="padding-left:10%; padding-right: 10%;">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Inspection Report
                            </a>
                        </li>
                        <li {!! (Request::is('joborder_report')  ? 'class="active"' : '') !!} style="border-radius: 4px;">
                            <a href="{{url('/joborder_report')}}" style="padding-left:10%; padding-right: 10%;">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Job Order Report
                            </a>
                        </li>
                        <li {!! (Request::is('jobordersales_report')  ? 'class="active"' : '') !!} style="border-radius: 4px;">
                            <a href="{{url('/jobordersales_report')}}" style="padding-left:10%; padding-right: 10%;">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Job Order Sales Report
                            </a>
                        </li>
                        <!--<li {!! (Request::is('billing_report')  ? 'class="active"' : '') !!} style="border-radius: 4px;">
                            <a href="{{url('/payment_report')}}" style="padding-left:10%; padding-right: 10%;">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Billing Report
                            </a>
                        </li>-->
                        <li {!! (Request::is('sales_report')  ? 'class="active"' : '') !!} style="border-radius: 4px;">
                            <a href="{{url('/sales_report')}}" style="padding-left:10%; padding-right: 10%;">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Sales Report
                            </a>
                        </li>
                    </ul>
                </li>

                <br>
                    <span class="link-title" style="border-radius: 4px; margin: 0% 5% 0%">&nbsp;&nbsp; UTILITIES</span>
                

                <li {!! (Request::is('settings')  ? 'class="active"' : '') !!} style="border-radius: 4px; margin: 0% 5% 0%;">
                    <a href="/settings" style="padding-left:10%; padding-right: 10%;">
                        <i class="fa fa-cogs"></i>
                        <span class="link-title">&nbsp; Manage Settings</span>
                    </a>
                    
                </li>
                <li {!! (Request::is('user')  ? 'class="active"' : '') !!}  style="border-radius: 4px; margin: 0% 5% 0%;">
                    <a href="/users" style="padding-left:10%; padding-right: 10%;">
                        <i class="fa fa fa-user"></i>
                        <span class="link-title">&nbsp; Users</span>
                    </a>
                </li>
                <br>

            </ul>
            <!-- /#menu -->
            </div>
            <!-- /#menu -->
        </div>
        <!-- /#left -->
        
            @yield("content")
            
      
        <!-- /#content -->
    </div>
    <!--wrapper-->
    

    <!--wrapper-->
    <div id="right">
        <div class="right_content">
            <div class="well well-small dark">
                <div class="xs_skin_hide hidden-sm-up toggle-right"> <i class="fa fa-cog"></i></div>
                <h4 class="brown_txt">
                    <span class="fa-stack fa-sm">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-paint-brush fa-stack-1x fa-inverse"></i>
                </span>
                    Skins
                </h4>
                <br/>

                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('blue_black_skin.css','css')">
                    <div class="skin_blue skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('green_black_skin.css','css')">
                    <div class="skin_green skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('purple_black_skin.css','css')">
                    <div class="skin_purple skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('orange_black_skin.css','css')">
                    <div class="skin_orange skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('red_black_skin.css','css')">
                    <div class="skin_red skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('mint_black_skin.css','css')">
                    <div class="skin_mint skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('brown_black_skin.css','css')">
                    <div class="skin_brown skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skinmulti_btn" onclick="javascript:loadjscssfile('black_skin.css','css')">
                    <div class="skin_black skin_size"></div>
                    <div class="skin_black skin_size"></div>
                </div>
                <div class="skin_btn skin_blue" onclick="javascript:loadjscssfile('blue_skin.css','css')"></div>
                <div class="skin_btn skin_green" onclick="javascript:loadjscssfile('green_skin.css','css')"></div>
                <div class="skin_btn skin_purple" onclick="javascript:loadjscssfile('purple_skin.css','css')"></div>
                <div class="skin_btn skin_orange" onclick="javascript:loadjscssfile('orange_skin.css','css')"></div>
                <div class="skin_btn skin_red" onclick="javascript:loadjscssfile('red_skin.css','css')"></div>
                <div class="skin_btn skin_mint" onclick="javascript:loadjscssfile('mint_skin.css','css')"></div>
                <div class="skin_btn skin_brown" onclick="javascript:loadjscssfile('brown_skin.css','css')"></div>
                <div class="skin_btn skin_black" onclick="javascript:loadjscssfile('black_skin.css','css')"></div>

            </div>
            
          
        </div>
    </div>
    <!-- # right side -->
</div>
<!-- /#wrap -->

<!--Plugin scripts-->

<script type="text/javascript" src="{{URL::asset('vendors/select2/js/select2.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/datatables/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/datatables/js/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/datatables/js/dataTables.responsive.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/datatables/js/dataTables.buttons.min.js')}}"></script>
<!-- <script type="text/javascript" src="vendors/datatables/js/buttons.colVis.min.js"></script> -->
<script type="text/javascript" src="{{URL::asset('vendors/datatables/js/buttons.html5.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/datatables/js/buttons.bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/datatables/js/buttons.print.min.js')}}"></script>

<!-- <script type="text/javascript" src="vendors/sweetalert/js/sweetalert2.min.js"></script> -->

<!--End of plugin scripts-->
<!-- global scripts-->

<!-- plugin level scripts -->
<script type="text/javascript" src="{{URL::asset('vendors/jquery.uniform/js/jquery.uniform.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/inputlimiter/js/jquery.inputlimiter.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/chosen/js/chosen.jquery.js')}}"></script>
<!-- <script type="text/javascript" src="vendors/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script> -->
<script type="text/javascript" src="{{URL::asset('vendors/jquery-tagsinput/js/jquery.tagsinput.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/validval/js/jquery.validVal.min.js')}}"></script>
<!-- <script type="text/javascript" src="vendors/moment/js/moment.min.js"></script> -->
<!-- <script type="text/javascript" src="vendors/daterangepicker/js/daterangepicker.js"></script> -->
<!-- <script type="text/javascript" src="vendors/datepicker/js/bootstrap-datepicker.min.js"></script> -->
<!-- <script type="text/javascript" src="vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script> -->
<!-- <script type="text/javascript" src="vendors/bootstrap-switch/js/bootstrap-switch.min.js"></script> -->
<!-- <script type="text/javascript" src="vendors/autosize/js/jquery.autosize.min.js"></script> -->
<script type="text/javascript" src="{{URL::asset('vendors/inputmask/js/inputmask.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('vendors/inputmask/js/jquery.inputmask.js')}}"></script>
<!-- <script type="text/javascript" src="vendors/inputmask/js/inputmask.date.extensions.js"></script> -->
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