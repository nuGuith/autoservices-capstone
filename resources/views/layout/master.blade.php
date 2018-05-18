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
                <a class="navbar-brand float-left text-center " href="index.html">
                    <h4 class="fa fa-car text-white">&nbsp;&nbsp;&nbsp;JPR AUTOPRECISION </h4>
                </a>
                <div class="menu">
                    <span class="toggle-left" id="menu-toggle">
                        <i class="fa fa-bars text-white"></i>
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
            <div class="media user-media bg-white dker" style="top: 10px">
                <div class="user-media-toggleHover">
                    <span class="fa fa-user"></span>
                </div>
                <div class="user-wrapper bg-dark">
                    <a class="user-link" href="">
                        <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture"
                             src="img/admin.jpeg">
                        <p class="text-dark user-info"><big>WELCOME ADMIN</big></p>
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
                    <a href="javascript:;">
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
                            <a href="productvariance">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Product Variance
                            </a>
                        </li>
                        <li>
                            <a href="product">
                                <i class="fa fa-angle-right"></i>
                                &nbsp; Product
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-wrench"></i>
                        <span class="link-title">&nbsp; Service</span>
                        <span class="fa arrow"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-angle-right"></i> &nbsp; Service Category
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-angle-right"></i> &nbsp; Services
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-angle-right"></i> &nbsp; Bay
                            </a>
                        </li>
                        <li>
                            <a href="form_editors.html">
                                <i class="fa fa-angle-right"></i> &nbsp; Inspection
                            </a>
                        </li>
                        <li>
                            <a href="radio_checkbox.html">
                                <i class="fa fa-angle-right"></i> &nbsp; Maintenance
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-angle-right"></i> &nbsp; Work Force
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu sub-submenu">
                                        <li>
                                            <a href="/jobdescription">
                                                <i class="fa fa-angle-right"></i> &nbsp; Job Description
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/personnel">
                                                <i class="fa fa-angle-right"></i> &nbsp; Personnel
                                            </a>
                                        </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="fa  fa-shopping-cart"></i>
                        <span class="link-title">&nbsp; Promos and Packages</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa  fa-money"></i>
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
                    <a href="javascript:;">
                        <i class="fa fa fa-wpforms"></i>
                        <span class="link-title">&nbsp; Job Order</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa fa-wpforms"></i>
                        <span class="link-title">&nbsp; Warranty</span>
                    </a>
                </li>
                <li>
                    <a href="/warranty">
                        <i class="fa fa-tags"></i>
                        <span class="link-title">&nbsp; Back Job</span>
                    </a>
                </li>

                    </br>
                    <span class="link-title">&nbsp;&nbsp; QUERIES AND REPORTS</span>
                
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-database"></i>
                        <span class="link-title">&nbsp; Queries</span>
                    </a>
                    
                </li>
                <li>
                    <a href="javascript:;">
                        <i class="fa fa-bar-chart-o"></i>
                        <span class="link-title">&nbsp; Reports</span>
                    </a>
                </li>

                </br>
                    <span class="link-title">&nbsp;&nbsp; UTILITIES</span>
                

                <li>
                    <a href="javascript:;">
                        <i class="fa fa-cogs"></i>
                        <span class="link-title">&nbsp; Manage Settings</span>
                    </a>
                    
                </li>
                <li>
                    <a href="javascript:;">
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
<!-- global scripts-->
<script type="text/javascript" src="js/components.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<!-- global scripts end-->


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


<!--end of plugin scripts-->

<script type="text/javascript" src="js/pages/users.js"></script>



</body>
</html>
