@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','Service Price') <!-- Page Title -->
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
                            <i class="fa fa-wrench"></i>
                            Service Price
                        </h4>
                    </div>

                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right   ">
                            <li class="breadcrumb-item " >
                                <a href="/serviceprice">
                                    <i class="fa fa-wrench" data-pack="default" data-tags=""></i>
                                    Service Price
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
                                        <a  id="editable_table_new" class=" btn btn-raised btn-default hvr-pulse-grow adv_cust_mod_btn" data-toggle="modal" data-href="#responsive" href="#addModal">
                                        <i class="fa fa-plus"></i>
                                            &nbsp;  Add Service Price                                   
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

                        <!--Table: Service Price-->
                        <table class="table  table-bordered table-hover table-advance dataTable no-footer" id="editable_table" role="grid">
                            <thead>
                                <tr role="row">
                                    
                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 25%;"><b>Service Name</b></th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 30%;"><b>Vehicle Model</b></th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 25%;"><b>Price</b></th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1"><b>Actions</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="even">
                                    <td>
                                        Change Oil
                                    </td>
                                    <td class="center">
                                        <ul style="padding-left: 1.7em;">
                                            <li>Honda City 2015 - AT/MT</li>
                                            <li>Honda City 2005 - MT</li>
                                    </td>
                                    <td class="center">
                                        300
                                    </td>
                                    <td class="examples transitions">

                                        <!--EDIT BUTTON-->
                                        <button class="btn btn-success hvr-float-shadow adv_cust_mod_btn tipso_bounceIn" data-background="#3CB371" data-color="white" data-tipso="Edit" data-toggle="modal" data-href="#responsive" href="#editModal"><i class="fa fa-pencil text-white"></i>
                                        </button>
                                        
                                        
                                        <!--DELETE BUTTON-->
                                        <button class="btn btn-danger hvr-float-shadow warning confirm tipso_bounceIn" data-background="#FA8072" data-color="white" data-tipso="Delete"><i class="fa fa-trash text-white"></i>
                                        </button>
                                       
                                    </td>
                                </tr>

                               
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->



                <!--ADD MODAL -->
                 <div class="modal fade in " id="addModal" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-plus"></i>
                                            &nbsp;&nbsp;Add Service Price</h4>
                            </div>
                            <div class="modal-body" style="padding-left: 55px;">
                                
                                <!--Search Select: Service Name-->
                                 <div class="row m-t-5">  
                                    <div class="col-md-11 ">
                                        <h5>Service Name: <span style="color: red">*</span></h5>
                                        <p class ="m-t-10">
                                            <select class="form-control  chzn-select" tabindex="4">
                                                <option disabled selected>Choose Service</option>
                                                <option value="Change Oil">Change Oil</option>
                                            </select>
                                        </p>
                                    </div>
                                 </div>

                                 <!--Multi Search Select: Vehicle Model -->
                                 <div class="row m-t-5">  
                                    <div class="col-md-11 ">
                                        <h5>Vehicle Model: <span style="color: red">*</span></h5>
                                        <p class ="m-t-10">
                                        <select size="9" multiple class="form-control chzn-select " id="test_me_paddington" name="test_me_form" tabindex="8" placeholder="Choose Model">
                                            <div>
                                                <option>Honda City 2015 - AT/MT</option>
                                                <option>Honda City 2005 - MT</option>
                                            </div>
                                        </select>
                                    </div>
                                 </div>
                                
                                <!--Textfield: Price -->
                                <div class="row m-t-5">  
                                    <div class="col-md-11 ">
                                        <h5>Vehicle Model: <span style="color: red">*</span></h5>
                                            <p class ="m-t-10">
                                                <input id="price" name="price" type="text" placeholder="Price"class="form-control">
                                            </p>
                                    </div>
                                 </div>
                                 
                            </div>


                            <!--Button: Close, Save -->
                            <div class="modal-footer">
                              <div class="examples transitions m-t-5">
                                <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                              </div>
                                <div class="examples transitions m-t-5">
                                    <button class="btn btn-success  source success_clr m-l-10 hvr-float-shadow adv_cust_mod_btn" data-dismiss="modal"><i class="fa fa-save text-white"></i>&nbsp; Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END OF ADD MODAL-->


            <!--EDIT MODAL -->
            <div class="modal fade in " id="editModal" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-pencil"></i>
                                            &nbsp;&nbsp;Edit Service Price</h4>                  
                            </div>


                        <div class="modal-body" style="padding-left: 55px;">
                                

                                 <!--Search Select: Service Name-->
                                 <div class="row m-t-5">  
                                    <div class="col-md-11 ">
                                        <h5>Service Name: <span style="color: red">*</span></h5>
                                        <p class ="m-t-10">
                                            <select class="form-control  chzn-select" tabindex="4">
                                                <option disabled selected>Choose Service</option>
                                                <option value="Change Oil">Change Oil</option>
                                            </select>
                                        </p>
                                    </div>
                                 </div>

                                 <!--Multi Search Select: Vehicle Model -->
                                 <div class="row m-t-5">  
                                    <div class="col-md-11 ">
                                        <h5>Vehicle Model: <span style="color: red">*</span></h5>
                                        <p class ="m-t-10">
                                        <select size="9" multiple class="form-control chzn-select " id="test_me_paddington" name="test_me_form" tabindex="8" placeholder="Choose Model">
                                            <div>
                                                <option>Honda City 2015 - AT/MT</option>
                                                <option>Honda City 2005 - MT</option>
                                            </div>
                                        </select>
                                    </div>
                                 </div>
                                
                                <!--Textfield: Price -->
                                <div class="row m-t-5">  
                                    <div class="col-md-11 ">
                                        <h5>Vehicle Model: <span style="color: red">*</span></h5>
                                            <p class ="m-t-10">
                                                <input id="price" name="price" type="text" placeholder="Price"class="form-control">
                                            </p>
                                    </div>
                                 </div>
                                 
                            </div>

                            <!--Button: Close, Save Changes -->
                            <div class="modal-footer">
                              <div class="examples transitions m-t-5">
                                <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                              </div>
                                <div class="examples transitions m-t-5">
                                    <button class="btn btn-success  source success_clr m-l-10 hvr-float-shadow adv_cust_mod_btn" data-dismiss="modal"><i class="fa fa-save text-white"></i>&nbsp; Save Changes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END OF EDIT MODAL-->              
            

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


<!-- global scripts modals-->
<script type="text/javascript" src="js/pages/modals.js"></script>
<!--End of global scripts-->


@stop