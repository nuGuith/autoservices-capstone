 <!-- Include MAster PAge -->
<?php $__env->startSection('Title','Promo'); ?> <!-- Page Title -->
<?php $__env->startSection('content'); ?>

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

    <link type="text/css" rel="stylesheet" href="css/pages/portlet.css"/>
    <!-- <link type="text/css" rel="stylesheet" href="css/pages/advanced_components.css"/> -->

        <!-- CONTENT -->
        <div id="content" class="bg-container">

            <header class="head">
                <div class="main-bar">
                    <div class="row" style = "height: 47px;">
                    <div class="col-6">
                        <h4 class="m-t-15">
                            <i class="fa fa-bookmark"></i>
                            Promo
                        </h4>
                    </div>

                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right">
                            <li class="breadcrumb-item " >
                                <a href="/promo">
                                    <i class="fa fa-bookmark" data-pack="default" data-tags=""></i>
                                    Promo
                                </a>
                            </li>
                            <!-- <li class="active breadcrumb-item">Calendar</li> -->
                        </ol>
                    </div>

                    </div>
                </div>
            </header>
                <div class="outer">
                    <div class="inner bg-container">
                        <div class="card">
                            <div class="card-header bg-dark">
                                <div class="btn-group">

                                        <!--ADD BUTTON MODAL-->
                                        <a  id="editable_table_new" class=" btn btn-raised btn-default hvr-pulse-grow adv_cust_mod_btn" 
                                                    href="/addpromo">
                                        <i class="fa fa-plus-square"></i>
                                            &nbsp;  Add Promo                                   
                                         </a>
                                    </div>
                             </div>


                            <div class="card-block m-t-35" id="user_body">
                                <div class="table-toolbar">
                                    <div class="btn-group">
                                    <div class="btn-group float-right users_grid_tools">
                                        <div class="tools"></div>
                                    </div>
                                    </div>
                                </div>
                            <div>
                                        <table class="table  table-striped table-bordered table-hover table-advance dataTable no-footer" id="editable_table" role="grid">
                                            <thead>
                                                <tr role="row">
                                                    
                                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 18%;"><b>Promo</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 35%;"><b>Product and Services</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 35%;"><b>Free</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 15%;"><b>Price</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" ><b>Actions</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row" class="even">
                                                    
                                                    <td>
                                                     Summer Promo
                                                    </td>
                                                    <td class="center">
                                                        <b>Products:</b>
                                                        <ul>
                                                            <li>Petron - Ultron (500mL) x 2 pcs.</li>
                                                        </ul>

                                                        <b>Services:</b>
                                                        <ul>
                                                            <li>Change Oil - Sedan</li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                    <ul>
                                                        <li>Petron - Ultron (500mL) x 1 pc.</li>
                                                    </ul>
                                                    </td>
                                                    <td>
                                                        1 200.00                                                      
                                                    </td>
                                                    <td>
                                                    
                                                    <!--EDIT BUTTON-->
                                                    <div class ="input-group">
                                                        <div class="examples transitions">
                                                        <button onclick="window.location.href='/editpromo'" class="btn btn-success hvr-float-shadow adv_cust_mod_btn" style = "width: 45px"><i class="fa fa-pencil text-white"></i>&nbsp; Edit
                                                        </button>
                                                    </div>
                                               
                                                        <!--DELETE BUTTON-->
                                                    <div class ="input-group examples transitions">
                                                       <button class="btn btn-danger source warning confirm hvr-float-shadow" style = "width: 65px"><i class="fa fa-trash text-white"></i> &nbsp; Delete
                                                        </button>
                                                    </div>
                                                       
                                                    </div>
                                                    </td>
                                                </tr>

                                               
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
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


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>