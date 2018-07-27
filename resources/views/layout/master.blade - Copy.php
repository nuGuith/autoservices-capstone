<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('Title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="img/icon.png"/>



    <!--global styles-->
    <link type="text/css" rel="stylesheet" href="css/components.css"/>
    <link type="text/css" rel="stylesheet" href="css/custom.css"/>
    <!-- end of global styles-->

    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="vendors/select2/css/select2.min.css" />
    <link type="text/css" rel="stylesheet" href="css/pages/dataTables.bootstrap.css" />
    <!--End of plugin styles-->

    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="vendors/inputlimiter/css/jquery.inputlimiter.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/chosen/css/chosen.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/jquery-tagsinput/css/jquery.tagsinput.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/daterangepicker/css/daterangepicker.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/datepicker/css/bootstrap-datepicker.min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-switch/css/bootstrap-switch.min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/jasny-bootstrap/css/jasny-bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/fileinput/css/fileinput.min.css"/>

        <link type="text/css" rel="stylesheet" href="css/pages/colorpicker_hack.css" />

    <!--End of plugin styles-->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="css/pages/form_elements.css"/>

    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="css/pages/tables.css" />
    <link type="text/css" rel="stylesheet" href="#" id="skin_change" />
    <!-- end of page level styles -->
    
</head>

<body class="body">
<div class="preloader" style=" position: fixed;
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
</div>
<div class="bg-dark" id="wrap" >
    <div id="top" >
        <!-- .navbar -->
        <nav class="navbar navbar-static-top" style="bottom: 2px">
            <div class="container-fluid m-0" >
            <a class="navbar-brand float-left text-center " href="index.html" style="margin-top: 2px;">
                    <div class="row">&nbsp;&nbsp;&nbsp;<i class="fa fa-car text-white"></i><h4 class="text-white">&nbsp;&nbsp;JPR AUTOPRECISION </h4></div>
                </a>
                <div class="menu">
                    <span class="toggle-left" id="menu-toggle">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-bars text-white"></i>
                    </span>
                </div>
                <div class="topnav dropdown-menu-right float-right">                    
                    <div class="btn-group">
                        <div class="user-settings no-bg">
                            <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown"> 
                                <img src="img/admin.jpeg" class=" media-object img-thumbnail admin_img2 rounded-circle avatar-img" alt="avatar"> <strong>&nbsp;&nbsp;Admin&nbsp;</strong>
                                <span class="fa fa-sort-down white_bg"></span>
                            </button>

                            <div class="dropdown-menu admire_admin">
                                <a class="dropdown-item title" href="#">
                                    Admin</a>
                                <a class="dropdown-item" href="edit_user.html"><i class="fa fa-cogs"></i>
                                    Account Settings</a>
                                <a class="dropdown-item" href="lockscreen.html"><i class="fa fa-lock"></i>
                                    Lock Screen</a>
                                <a class="dropdown-item" href="login.html"><i class="fa fa-sign-out"></i>
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
    </div>
           <!-- /.container-fluid --> 
        <!-- /.navbar -->
       <!-- /.head --> 
    <!-- /#top -->
    <div class="wrapper">
        <div id="left">
            <div class="media user-media bg-dark dker" style="top: 10px">
                <div class="user-media-toggleHover">
                    <span class="fa fa-user"></span>
                </div>
                <div class="user-wrapper bg-dark">
                    <a class="user-link" href="">
                        <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture"
                             src="img/admin.jpeg">
                        <p class="text-white user-info"><big>WELCOME, Admin!</big></p>
                    </a>         
                </div>
            </div>
       <!--  </br> -->
            <!-- #menu -->
            <ul id="menu" class="bg-blue dker">
                <li class="active">
                    <a href="/">
                        <i class="fa fa-home"></i>
                        <span class="link-title">&nbsp;Dashboard</span>
                    </a>
                </li>


                    </br>
                    <span class="link-title">&nbsp;&nbsp;MAINTENANCE</span>
                

                <li>
                    <a href="/vehicletype">
                        <i class="fa fa-truck"></i>
                        <span class="link-title">&nbsp; Vehicle Type</span>
                    </a>
                    
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-pencil-square-o"></i>
                        <span class="link-title">&nbsp; Product Listing</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="/producttype">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Product Type
                            </a>
                        </li>
                        <li>
                            <a href="/productbrand">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Product Brand
                            </a>
                        </li>
                        <li>
                            <a href="/productcategory">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Product Variance
                            </a>
                        </li>
                        <li>
                            <a href="/product">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Product
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-wrench"></i>
                        <span class="link-title">&nbsp; Service</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="/servicecategory">
                                <i class="fa fa-angle-right"></i> &nbsp; Service Category
                            </a>
                        </li>
                        <li>
                            <a href="/service">
                                <i class="fa fa-angle-right"></i> &nbsp; Services
                            </a>
                        </li>
                        <li>
                            <a href="/servicebay">
                                <i class="fa fa-angle-right"></i> &nbsp; Service Bay
                            </a>
                        </li>
                        <li>
                            <a href="/inspectionchecklist">
                                <i class="fa fa-angle-right"></i> &nbsp; Inspection Checklist
                            </a>
                        </li>
                        <li>
                            <a href="/maintenancechecklist">
                                <i class="fa fa-angle-right"></i> &nbsp; Maintenance Checklist
                            </a>
                        </li>
                    <ul class="sub-menu">
                        <li>
                            <a href="#">
                                <i class="fa fa-angle-right"></i>
                                &nbsp;Personnel
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu sub-submenu">
                                <li>
                                    <a href="/jobdescription">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp;Job Description
                                    </a>
                                </li>  
                                <li>
                                    <a href="/personnel">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp;Personnel
                                    </a>
                                </li>   
                            </ul>
                        </li>
                    </ul>
                    </li>
                    </ul>
                </li>
             <li>
                    <a href="/package">
                        <i class="fa  fa-gift"></i>
                        <span class="link-title">&nbsp; Package</span>
                    </a>
                </li>
                <li>
                    <a href="/promo">
                        <i class="fa  fa-bookmark"></i>
                        <span class="link-title">&nbsp; Promo</span>
                    </a>
                </li>
                <li>
                    <a href="/discount">
                        <i class="fa fa-ticket"></i>
                        <span class="link-title">&nbsp; Discount</span>
                    </a>
                </li>

                    </br>
                    <span class="link-title">&nbsp;&nbsp; TRANSACTION</span>
                

                <li>
                    <a href="/customer">
                        <i class="fa fa-users"></i>
                        <span class="link-title">&nbsp; Customer</span>
                    </a>
                    
                </li>
                <li>
                    <a href="/estimates">
                        <i class="fa fa-file-text"></i>
                        <span class="link-title">&nbsp; Estimates</span>
                    </a>
                </li>
                <li>
                    <a href="/joborder">
                        <i class="fa fa fa-wpforms"></i>
                        <span class="link-title">&nbsp; Job Order</span>
                    </a>
                </li>
                <li>
                    <a href="/backjob">
                        <i class="fa fa-file-text"></i>
                        <span class="link-title">&nbsp; Back Job</span>
                    </a>
                </li>
                <li>
                    <a href="/warranty">
                        <i class="fa fa-tags"></i>
                        <span class="link-title">&nbsp; Warranty</span>
                    </a>
                </li>

                    </br>
                    <span class="link-title">&nbsp;&nbsp; QUERIES AND REPORTS</span>
                
                <li>
                    <a href="/queries">
                        <i class="fa fa-database"></i>
                        <span class="link-title">&nbsp; Queries</span>
                    </a>
                    
                </li>
                <li>
                    <a href="/reports">
                        <i class="fa fa-bar-chart-o"></i>
                        <span class="link-title">&nbsp; Reports</span>
                    </a>
                </li>

                </br>
                    <span class="link-title">&nbsp;&nbsp; UTILITIES</span>
                

                <li>
                    <a href="/managesettings">
                        <i class="fa fa-cogs"></i>
                        <span class="link-title">&nbsp; Manage Settings</span>
                    </a>
                    
                </li>
                <li>
                    <a href="/users">
                        <i class="fa fa fa-user"></i>
                        <span class="link-title">&nbsp; Users</span>
                    </a>
                </li>


            </ul>
            <!-- /#menu -->
        </div>
        <!-- /#left -->


        <!-- CONTENT -->
        <div id="content" class="bg-container">          
              @yield('content')
        </div>
        <!--END CONTENT -->


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
<script type="text/javascript" src="vendors/select2/js/select2.js"></script>
<script type="text/javascript" src="vendors/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="vendors/datatables/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="vendors/datatables/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="vendors/datatables/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="vendors/datatables/js/buttons.colVis.min.js"></script>
<script type="text/javascript" src="vendors/datatables/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="vendors/datatables/js/buttons.bootstrap.min.js"></script>
<script type="text/javascript" src="vendors/datatables/js/buttons.print.min.js"></script>

<script type="text/javascript" src="vendors/sweetalert/js/sweetalert2.min.js"></script>

<!--End of plugin scripts-->
<!-- global scripts-->

<!-- plugin level scripts -->
<script type="text/javascript" src="vendors/jquery.uniform/js/jquery.uniform.js"></script>
<script type="text/javascript" src="vendors/inputlimiter/js/jquery.inputlimiter.js"></script>
<script type="text/javascript" src="vendors/chosen/js/chosen.jquery.js"></script>
<script type="text/javascript" src="vendors/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script type="text/javascript" src="vendors/jquery-tagsinput/js/jquery.tagsinput.js"></script>
<script type="text/javascript" src="vendors/validval/js/jquery.validVal.min.js"></script>
<script type="text/javascript" src="vendors/moment/js/moment.min.js"></script>
<script type="text/javascript" src="vendors/daterangepicker/js/daterangepicker.js"></script>
<script type="text/javascript" src="vendors/datepicker/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="vendors/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="vendors/autosize/js/jquery.autosize.min.js"></script>
<script type="text/javascript" src="vendors/inputmask/js/inputmask.js"></script>
<script type="text/javascript" src="vendors/inputmask/js/jquery.inputmask.js"></script>
<script type="text/javascript" src="vendors/inputmask/js/inputmask.date.extensions.js"></script>
<script type="text/javascript" src="vendors/inputmask/js/inputmask.extensions.js"></script>
<script type="text/javascript" src="vendors/fileinput/js/fileinput.min.js"></script>
<script type="text/javascript" src="vendors/fileinput/js/theme.js"></script>


<!--end of plugin scripts-->
<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript" src="js/pages/form_elements.js"></script>
<!--end of plugin scripts-->

<script type="text/javascript" src="js/pages/users.js"></script>



</body>
</html>
