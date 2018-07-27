@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','Customer') <!-- Page Title -->
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
                    <div class="row">
                    <div class="col-6">
                        <h4 class="m-t-5">
                            <i class="fa fa-users"></i>
                            Customers
                        </h4>
                    </div>
                    </div>
                </div>
            </header>
                <div class="outer">
                    <div class="inner bg-container">
                        <div class="card">
                            <div class="card-header bg-dark">
                                <div class="btn-group">

                                        <!--ADD BUTTON-->
                                        <a  id="editable_table_new" class=" btn btn-raised btn-default hvr-pulse-grow adv_cust_mod_btn" data-toggle="modal" data-href="#responsive"  href="#addcustomer">
                                        <i class="fa fa-plus"></i>&nbsp;  Add Customer                                   
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
                                                    
                                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 35%;"><b>Customer Name</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 35%;"><b>Information</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1"><b>Actions</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row" class="even">
                                                    
                                                    <td>
                                                        Danice Joy Tanguilan
                                                    </td>
                                                    <td class="center">
                                                        <ul>
                                                            <li>Eating</li>
                                                            <li>Drinking</li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <!--VIEW BUTTON-->
                                                        <div class="btn-group">
                                                        <a class="btn btn-success hvr-float-shadow adv_cust_mod_btn" href="/viewcustomer">
                                                        <i class="fa fa-eye"></i>&nbsp; View
                                                        </a>

                                                        <!-- REMOVE BUTTON -->
                                                        <button class="btn btn-danger hvr-float-shadow adv_cust_mod_btn">
                                                        <i class="fa fa-trash text-white"></i>&nbsp; Remove
                                                        </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->

<!-- ADD CUSTOMER MODAL -->
<div class="modal fade in " id="addcustomer" tabindex="-1" role="dialog" aria-hidden="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h4 class="modal-title text-white"><i class="fa fa-plus"></i>
                        &nbsp;&nbsp;Add Customer</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                    <div class="modal-body">
                        <div class="row" >

                            <!-- first name -->
                            <div class="col-md-4">
                            <br>
                            <h5 for="First Name" class="form-group-horizontal">
                                First Name
                            </h5>
                            <p>
                            <input id="name" name="firstname" type="text" placeholder="First Name"
                            class="form-control"></p>
                            </div>
                            <!-- middle name -->
                            <div class="col-md-4">
                            <br>
                            <h5 for="Middle Name" class="form-group-horizontal">
                            Middle Name
                            </h5>
                            <p>
                            <input id="name" name="middlename" type="text" placeholder="Middle Name"
                            class="form-control"></p>
                        </div>
                                    <!-- last name -->
                                    <div class="col-md-4">
                                    <br>
                                    <h5 for="Last Name" class="form-group-horizontal">
                                        Last Name
                                    </h5>
                                    <p>
                                        <input id="name" name="lastname" type="text" placeholder="Last Name"
                                        class="form-control"></p>
                                    </div>
                                    <!-- contact number -->
                                    <div class="col-lg-4 form_input_fields">
                                    <h5>Contact No.</h5>
                                        <div class="input-group">
                                            <input id="phones" class="form-control" type="text" name="contactnumber" data-inputmask='"mask": "(639) 999999999"' data-mask>
                                        </div>
                                    </div>
                                    <!-- email -->
                                    <div class="col-lg-4">
                                    <h5 for="email" class="form-group-horizontal">
                                        Email
                                    </h5>
                                    <p>
                                        <input id="name" name="email" type="text" placeholder="Email"
                                        class="form-control"></p>
                                    </div>
                                    <!-- Senior Citizen/PWD ID -->
                                    <div class="col-lg-4">
                                    <h5 for="sc/pwd" class="form-group-horizontal">
                                        Senior Citizen/PWD ID
                                    </h5>
                                    <p>
                                        <input id="name" name="sc/pwd" type="text" placeholder="Senior Citizen/PWD ID"
                                        class="form-control"></p>
                                    </div>
                                    <!-- Street -->
                                    <div class="col-lg-4">
                                    <h5 for="street" class="form-group-horizontal">
                                        No. & St./Bldg.
                                    </h5>
                                    <p>
                                        <input id="name" name="street" type="text" placeholder="No. & St./Bldg."
                                        class="form-control"></p>
                                    </div>
                                    <!-- Barangay -->
                                    <div class="col-lg-4">
                                    <h5 for="brgy" class="form-group-horizontal">
                                        Brgy./Subd.
                                    </h5>
                                    <p>
                                        <input id="name" name="brgy" type="text" placeholder="Brgy./Subd."
                                        class="form-control"></p>
                                    </div>
                                    <!-- City -->
                                    <div class="col-lg-4">
                                    <h5 for="city" class="form-group-horizontal">
                                        City/Municipality
                                    </h5>
                                    <p>
                                        <input id="name" name="city" type="text" placeholder="City/Municipality"
                                        class="form-control"></p>
                                    </div>
                                    <div class="col-md-8">
                                    </div>

                        <!-- START OF MODAL FOOTER -->
                        <div class="modal-footer">
                              <div class="examples transitions m-t-5">
                                <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Back</button>
                                </div>
                                <div class="examples transitions m-t-5">
                                    <button class="btn btn-success  source success_clr m-l-10 hvr-float-shadow adv_cust_mod_btn" data-dismiss="modal"><i class="fa fa-save text-white"></i>&nbsp; Save
                                    </button>
                                </div>
                        </div>
                        <!-- END OF MODAL FOOTER -->
    <!-- END OF ADD JOB DESCRIPTION MODAL -->


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
<script type="text/javascript" src="js/components.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="vendors/sweetalert/js/sweetalert2.min.js"></script>
<script type="text/javascript" src="js/pages/sweet_alerts.js"></script>
<!-- end of plugin scripts -->

<!-- global scripts animation-->
<script type="text/javascript" src="js/components.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="vendors/snabbt/js/snabbt.min.js"></script>
<script type="text/javascript" src="vendors/wow/js/wow.min.js"></script>
<!-- end of plugin scripts -->
<script>
    new WOW().init();
</script>


<!-- global scripts modals-->
<script type="text/javascript" src="js/components.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/pages/modals.js"></script>
<!--End of global scripts-->


<!--functions-->
<script> 
</script>

<!--functions-->

@stop