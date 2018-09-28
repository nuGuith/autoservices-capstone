    @extends('layout.master') <!-- Include MAster PAge -->
    @section('Title','Back Job') <!-- Page Title -->
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

        <link type="text/css" rel="stylesheet" href="css/pages/portlet.css"/>
        <!-- <link type="text/css" rel="stylesheet" href="css/pages/advanced_components.css"/> -->

            <!-- CONTENT -->
            <div id="content" class="bg-container">

                <header class="head">
                    <div class="main-bar">
                        <div class="row" style = "height: 47px;">
                        <div class="col-6">
                            <h4 class="m-t-15">
                                <i class="fa fa-rotate-left"></i>
                                Back Job
                            </h4>
                        </div>

                        <div class="col-sm-6 col-12"  >
                            <ol  class="breadcrumb float-right">
                                <li class="breadcrumb-item " >
                                    <a href="/backjob">
                                        <i class="fa fa-rotate-left" data-pack="default" data-tags=""></i>
                                        Back Job
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
                                                        href="/addbackjob">
                                            <i class="fa fa-plus-square"></i>
                                                &nbsp;  Add Back Job                           
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
                                            <table class="table table-bordered table-hover table-advance dataTable no-footer" id="editable_table" role="grid">
                                                <thead>
                                                    <tr role="row">
                                                        
                                                        <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 15%;"><b>Back Job ID</b></th>
                                                        <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 25%;"><b>Job Order ID</b></th>
                                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 35%;"><b>Customer and Vehicle Information</b></th>
                                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" ><b>Actions</b></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr role="row" class="even">
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td>
                                                            <ul align="left">
                                                                <li>Customer Name:</li>
                                                                <li>Plate Number:</li>
                                                            <ul>
                                                        </td>
                                                        <td>
                                                        <!--VIEW BUTTON-->
                                                        <button class="btn btn-primary hvr-float-shadow tipso_bounceIn" data-background=" #6495ED" data-color="white" data-tipso="View" onclick="window.location.href='/viewbackjob'"  ><i class="fa fa-eye text-white"></i></button>


                                                        <!--UPDATE BUTTON-->
                                                        <button class="btn btn-info hvr-float-shadow  tipso_bounceIn" style ="width:;"data-background="blue" data-color="white" data-tipso="Update" onclick="window.location.href='/updatebackjob'"><i class="fa fa-refresh text-white"></i>
                                                        </button>
                                                        
                                                        <!--EDIT BUTTON-->
                                                        <button name = '' class="btn btn-success hvr-float-shadow adv_cust_mod_btn tipso_bounceIn" data-background="#3CB371" data-color="white" data-tipso="Edit" onclick="window.location.href='/editbackjob'"><i class="fa fa-pencil text-white"></i>
                                                        </button>


                                                        <!--DELETE BUTTON-->
                                                        <button name = '' class="btn btn-danger hvr-float-shadow warning confirm tipso_bounceIn" onclick="del(this.name);" data-toggle="modal" data-href="#responsive" href="#deleteModal" data-background="#FA8072" data-color="white" data-tipso="Delete"><i class="fa fa-trash text-white"></i>
                                                        </button>
                                                        
                                                        </div>
                                                        </td>
                                                    </tr>

                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- END EXAMPLE TABLE PORTLET-->


                                    <div class="modal fade in " id="deleteModal" tabindex="-3" role="dialog" aria-hidden="false">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header bg-danger">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title text-white"><i class="fa fa-trash"></i>
                                                &nbsp;&nbsp;Delete this record?</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="col m-t-15">
                                        <h5>Are you sure do you want to delete this record?</h5>
                                        <input id="deleteId" name="deleteId" type="hidden">
                                    </div>
                                </div>




                                <div class="modal-footer m-t-10">
                                    <div class="examples transitions m-t-5">
                                        <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Cancel</button>
                                    </div>
                                    <div class="examples transitions m-t-5">
                                        <button id = "delete" class ='btn btn-danger source confirm m-l-10 adv_cust_mod_btn' data-dismiss='modal'><i class="fa fa-trash"></i>&nbsp;OK </button>



                                    </div>
                                </div>
                            </div>
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


    @stop