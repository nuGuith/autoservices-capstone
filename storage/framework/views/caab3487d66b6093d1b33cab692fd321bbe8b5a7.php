 <!-- Include MAster PAge -->
<?php $__env->startSection('Title','Add Personnel'); ?> <!-- Page Title -->
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
            <div class="row">
                <div class="col-6">
                    <h4 class="m-t-5">
                    <i class="fa fa-users"></i>
                        Personnel 
                    </h4>
                </div>
            </div>
        </div>
    </header>
        <div class="outer">
            <div class="inner bg-container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" >
                            <div class="card-header bg-primary disabled text-white" ><i class="fa fa-plus"></i>&nbsp;&nbsp;Add Personnel</div>
                                <div class="card-block ">
                                    <br>
                                    <!-- START OF IMAGE -->
                                    <div class="col-lg-4 text-center text-lg-left">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new img-thumbnail text-center">
                                            </div>
                                                <div class="fileinput-preview fileinput-exists img-thumbnail">
                                                </div>
                                        </div>
                                    </div>
                                    <!-- END OF IMAGE -->

                                    <!-- START OF PERSONNEL INFORMATION FIELDS -->
                                        <div class="row">
                                            <div class="col-lg-3 col-xl-2 two_column_label_margintop text-lg-right">
                                            <br>
                                            <h5>Job Description ID *</h5>
                                            <p>
                                                <input id="jobdescID" name="jobdescID" type="text" placeholder="Job Description ID" class="form-control">
                                            </p>
                                        </div>
                                            <br>
                                        <div class="col-md-4">
                                            <br>
                                            <h5>Job Description</h5>
                                            <p>
                                                <input id="jobdesc" name="jobdesc" type="text" placeholder="Job Description" class="form-control">
                                            </p>
                                        </div>
                                    <!-- START OF PERSONNEL INFORMATION FIELDS -->
                                </div>
            <!-- start card footer -->
                <div class="card-footer bg-black disabled">
                   <div class="examples transitions m-t-5 pull-right">
                        <button onclick="window.location='<?php echo e(url("/customer")); ?>'" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn"  href="/customer">Back</button>                
                        <button class="btn btn-success  source success_clr m-l-0 hvr-float-shadow adv_cust_mod_btn" style ="width: 80px;"  ><i class="fa fa-save text-white" ></i>&nbsp; Save</button>
                    </div>
                </div>
            <!-- end card footer -->
                    </div>
                </div>
            </div>
        </div>
    </div>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>