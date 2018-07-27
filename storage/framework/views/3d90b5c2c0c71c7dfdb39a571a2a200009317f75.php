 <!-- Include Master Page -->
<?php $__env->startSection('Title','Service Category'); ?> <!-- Page Title -->
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
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css"/>
<!--page level styles-->
    <link type="text/css" rel="stylesheet" href="css/pages/wizards.css"/>
    <!-- <link type="text/css" rel="stylesheet" href="css/pages/advanced_components.css"/> -->

        <!-- CONTENT -->
        <div id="content" class="bg-container">

            <header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-6">
                        <h4 class="m-t-5">
                            <i class="fa fa-wrench"></i>
                            Service Category
                        </h4>
                    </div>
                    </div>
                </div>
            </header>
                <div class="outer">
                    <div class="inner bg-container">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card m-t-35">
                                <div class="card-header bg-white">
                                    <i class="fa fa-file-text-o"></i>
                                    New Transaction
                                </div>
                                <div class="card-block m-t-20">
                                    <!--main content-->
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <!-- BEGIN FORM WIZARD WITH VALIDATION -->
                                            <form id="commentForm" method="post" action="#" class="validate">
                                                <div id="rootwizard">
                                                    <ul class="nav nav-pills">
                                                        <li class="nav-item m-t-15">
                                                            <a class="nav-link" href="#tab1" data-toggle="tab">
                                                                <span class="userprofile_tab1">1.</span> Customer Information
                                                        </a>
                                                        </li>
                                                        <li class="nav-item m-t-15">
                                                            <a class="nav-link" href="#tab2" data-toggle="tab">
                                                                <span class="userprofile_tab2">2.</span> Inpect Vehicle
                                                            </a>
                                                        </li>
                                                        <li class="nav-item m-t-15">
                                                            <a class="nav-link" href="#tab3" data-toggle="tab">
                                                               <span class="userprofile_tab2">3.</span> Check Up
                                                           </a>
                                                        </li>
                                                        <li class="nav-item m-t-15">
                                                            <a class="nav-link" href="#tab3" data-toggle="tab">
                                                               <span class="userprofile_tab2">4.</span> Estimate
                                                           </a>
                                                        </li>
                                                        <li class="nav-item m-t-15">
                                                            <a class="nav-link" href="#tab3" data-toggle="tab">
                                                               <span class="userprofile_tab2">5.</span> Finish Na.
                                                           </a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content m-t-20">
                                                        <div class="tab-pane" id="tab1">
                                                            <div class="col-lg-4 input_field_sections">
                                                                <h5>Existing Customer</h5>
                                                                <select class="form-control chzn-select chosen-container chosen-container-single" tabindex="-1" style="display: none;">
                                                                    <option disabled="" selected="">Choose an Existing Customer Record</option>
                                                                    <option value="1">Guesh Almario</option>
                                                                    <option value="2">Sofia Wabe</option>
                                                                    <option value="3">Danice Tanguilan</option>
                                                                    <option value="4">Ivann Nuguid</option>
                                                                    
                                                                </select><!-- <div class="chosen-container chosen-container-single" style="width: 306px;" title=""><a class="chosen-single"><span>Choose Existing Customer Record</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off" tabindex="2"></div><ul class="chosen-results"></ul></div></div> -->
                                                                <!--</div>-->
                                                            </div>
                                                            <div>
                                                                <div class="form-group">
                                                                <label for="userName" class="control-label">First
                                                                    name *</label>
                                                                <input id="fisrtName" name="firstname" type="text"
                                                                       placeholder="Enter your First Name"
                                                                       class="form-control required">
                                                                </div>
                                                                <label for="userName" class="control-label">Middle
                                                                    name</label>
                                                                <input id="middleName" name="middlename" type="text"
                                                                       placeholder="Enter your Middle Name"
                                                                       class="form-control">
                                                                </div>
                                                                <label for="userName" class="control-label">Last
                                                                    name *</label>
                                                                <input id="lastName" name="lastname" type="text"
                                                                       placeholder="Enter your Last Name"
                                                                       class="form-control required">
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="email" class="control-label">Email
                                                                        *</label>
                                                                    <input id="email" name="email"
                                                                           placeholder="Enter your Email"
                                                                           type="text"
                                                                           class="form-control required email">
                                                                </div>
                                                                <ul class="pager wizard pager_a_cursor_pointer">
                                                                    <li class="previous">
                                                                        <a><i class="fa fa-long-arrow-left"></i>
                                                                            Previous</a>
                                                                    </li>
                                                                    <li class="next">
                                                                        <a>Next <i class="fa fa-long-arrow-right"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li class="next finish" style="display:none;">
                                                                        <a>Finish</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="tab2">
                                                            <div class="form-group">
                                                                <label for="name1" class="control-label">First name
                                                                    *</label>
                                                                <input id="name1" name="val_first_name"
                                                                       placeholder="Enter your First name"
                                                                       type="text"
                                                                       class="form-control required">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="surname1" class="control-label">Last
                                                                    name *</label>
                                                                <input id="surname1" name="lname" type="text"
                                                                       placeholder=" Enter your Last name"
                                                                       class="form-control required">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email">Gender</label>
                                                                <select class="custom-select form-control"
                                                                        id="gender"
                                                                        title="Select an account type...">
                                                                    <option>Select</option>
                                                                    <option>MALE</option>
                                                                    <option>FEMALE</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="address">Address *</label>
                                                                <input id="address" name="val_address" type="text"
                                                                       class="form-control">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="age" class="control-label">Age *</label>
                                                                <input id="age" name="val_age" type="text"
                                                                       maxlength="3"
                                                                       class="form-control required number">
                                                            </div>
                                                            <ul class="pager wizard pager_a_cursor_pointer">
                                                                <li class="previous">
                                                                    <a><i class="fa fa-long-arrow-left"></i>
                                                                        Previous</a>
                                                                </li>
                                                                <li class="next">
                                                                    <a>Next <i class="fa fa-long-arrow-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="next finish" style="display:none;">
                                                                    <a>Finish</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-pane" id="tab3">
                                                            <div class="form-group">
                                                                <label>Home number *</label>
                                                                <input type="text" class="form-control" id="phone1"
                                                                       name="phone1"
                                                                       placeholder="(999)999-9999">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Personal number *</label>
                                                                <input type="text" class="form-control" id="phone2"
                                                                       name="phone2"
                                                                       placeholder="(999)999-9999">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Alternate number *</label>
                                                                <input type="text" class="form-control" id="phone3"
                                                                       name="phone3"
                                                                       placeholder="(999)999-9999">
                                                            </div>
                                                            <div class="form-group">
                                                                <span>Terms and Conditions *</span>
                                                                <br>
                                                                <label class="custom-control custom-checkbox wizard_label_block">
                                                                    <input type="checkbox" id="acceptTerms"
                                                                           name="acceptTerms"
                                                                           class="custom-control-input">
                                                                    <span class="custom-control-indicator"></span>
                                                                    <span class="custom-control-description custom_control_description_color">I agree with the Terms and Conditions.</span>
                                                                </label>

                                                            </div>
                                                            <ul class="pager wizard pager_a_cursor_pointer">
                                                                <li class="previous">
                                                                    <a><i class="fa fa-long-arrow-left"></i>
                                                                        Previous</a>
                                                                </li>
                                                                <li class="next">
                                                                    <a>Next <i class="fa fa-long-arrow-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="next finish" style="display:none;">
                                                                    <a>Finish</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-pane" id="tab4">
                                                            <div class="form-group">
                                                                <label>Home number *</label>
                                                                <input type="text" class="form-control" id="phone1"
                                                                       name="phone1"
                                                                       placeholder="(999)999-9999">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Personal number *</label>
                                                                <input type="text" class="form-control" id="phone2"
                                                                       name="phone2"
                                                                       placeholder="(999)999-9999">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Alternate number *</label>
                                                                <input type="text" class="form-control" id="phone3"
                                                                       name="phone3"
                                                                       placeholder="(999)999-9999">
                                                            </div>
                                                            <div class="form-group">
                                                                <span>Terms and Conditions *</span>
                                                                <br>
                                                                <label class="custom-control custom-checkbox wizard_label_block">
                                                                    <input type="checkbox" id="acceptTerms"
                                                                           name="acceptTerms"
                                                                           class="custom-control-input">
                                                                    <span class="custom-control-indicator"></span>
                                                                    <span class="custom-control-description custom_control_description_color">I agree with the Terms and Conditions.</span>
                                                                </label>

                                                            </div>
                                                            <ul class="pager wizard pager_a_cursor_pointer">
                                                                <li class="previous">
                                                                    <a><i class="fa fa-long-arrow-left"></i>
                                                                        Previous</a>
                                                                </li>
                                                                <li class="next">
                                                                    <a>Next <i class="fa fa-long-arrow-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="next finish" style="display:none;">
                                                                    <a>Finish</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-pane" id="tab5">
                                                            <div class="form-group">
                                                                <label>Home number *</label>
                                                                <input type="text" class="form-control" id="phone1"
                                                                       name="phone1"
                                                                       placeholder="(999)999-9999">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Personal number *</label>
                                                                <input type="text" class="form-control" id="phone2"
                                                                       name="phone2"
                                                                       placeholder="(999)999-9999">
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Alternate number *</label>
                                                                <input type="text" class="form-control" id="phone3"
                                                                       name="phone3"
                                                                       placeholder="(999)999-9999">
                                                            </div>
                                                            <div class="form-group">
                                                                <span>Terms and Conditions *</span>
                                                                <br>
                                                                <label class="custom-control custom-checkbox wizard_label_block">
                                                                    <input type="checkbox" id="acceptTerms"
                                                                           name="acceptTerms"
                                                                           class="custom-control-input">
                                                                    <span class="custom-control-indicator"></span>
                                                                    <span class="custom-control-description custom_control_description_color">I agree with the Terms and Conditions.</span>
                                                                </label>

                                                            </div>
                                                            <ul class="pager wizard pager_a_cursor_pointer">
                                                                <li class="previous">
                                                                    <a><i class="fa fa-long-arrow-left"></i>
                                                                        Previous</a>
                                                                </li>
                                                                <li class="next">
                                                                    <a>Next <i class="fa fa-long-arrow-right"></i>
                                                                    </a>
                                                                </li>
                                                                <li class="next finish" style="display:none;">
                                                                    <a>Finish</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="myModal" class="modal fade" role="dialog">
                                                    <div class="modal-dialog">
                                                        <!-- Modal content-->
                                                        <div class="modal-content">
                                                            <div class="modal-header">

                                                                <h4 class="modal-title">Wizard</h4>
                                                                <button type="button" class="close"
                                                                        data-dismiss="modal">&times;</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>You Submitted Successfully.</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default"
                                                                        data-dismiss="modal">
                                                                    OK
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--main content end-->
                            </div>
                        </div>
                    </div>

                    </div>
                </div>
                <!-- /.inner -->
        </div>
        <!-- /.outer -->
    <!--END CONTENT -->


<!-- scripts-->
<script type="text/javascript" src="vendors/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/components.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="vendors/sweetalert/js/sweetalert2.min.js"></script>
<script type="text/javascript" src="js/pages/sweet_alerts.js"></script>
<script type="text/javascript" src="vendors/snabbt/js/snabbt.min.js"></script>
<script type="text/javascript" src="vendors/wow/js/wow.min.js"></script>
<!--Plugin scripts-->
<script type="text/javascript" src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="vendors/twitter-bootstrap-wizard/js/jquery.bootstrap.wizard.min.js"></script>
<!--End of plugin scripts-->
<!--Page level scripts-->
<script type="text/javascript" src="js/pages/wizard.js"></script>
<!-- end page level scripts -->
<script>
    new WOW().init();
</script>
<script>
     function editModal(id){
            $.ajax({
                type: "GET",
                url: "/servicecategory/"+id+"/edit",
                dataType: "JSON",
                success:function(data){
                    $("#servicecategoryname").val(data.category.ServiceCategoryName);
                    $("#description").val(data.category.Description);
                    $("#servicecategoryid").val(data.category.ServiceCategoryID);
                }
            });
            $('#editModal').modal('show');
        }
</script>

<script type="text/javascript" src="js/pages/modals.js"></script>
<!--End of global scripts-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>