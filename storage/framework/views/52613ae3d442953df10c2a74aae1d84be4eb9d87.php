 <!-- Include MAster PAge -->
<?php $__env->startSection('Title','Add Product Brand'); ?> <!-- Page Title -->
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
                        <i class="fa fa-pencil-square-o"></i>
                        Product Brand 
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
                                <div class="card-header bg-primary disabled text-white">
                                    <i class="fa fa-plus"></i>
                                    &nbsp;&nbsp;Add Product Brand
                                </div>
                                <div class="card-block">                               
                                    <div class="row" >
                                        <div class="col-md-4"><br>
                                            <h4 style="font-weight:bold">Product Brand Information</h4><br>
                                            <h4>Product Brand</h4>
                                            <p><input id="name" name="type" type="text" placeholder="Brand" class="form-control"></p>
                                            <h4>Product Type</h4>                                                
                                            <select size="1" multiple class="form-control chzn-select" id="test_me_paddington" name="test_me_form" tabindex="8" style="width:320px">
                                                <option>Oil</option>
                                                <option selected>Tires</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            <div class="card-footer bg-black disabled">
                                <div class="examples transitions m-t-5 pull-right">
                                    <button onclick="window.location='<?php echo e(url("/productbrand")); ?>'" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn" href="/productbrand">Back</button>
                                    <button class="btn btn-success  source success_clr m-l-0 hvr-float-shadow adv_cust_mod_btn" style ="width: 80px;" >
                                    <i class="fa fa-save text-white"></i>
                                    &nbsp; Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>       
    <!-- /.outer -->
<!--END CONTENT -->


<!-- global scripts sweet alerts-->
<script type="text/javascript" src="vendors/sweetalert/js/sweetalert2.min.js"></script>
<script type="text/javascript" src="js/pages/sweet_alerts.js"></script>
<!-- end of plugin scripts -->

<!-- global scripts animation-->
<script type="text/javascript" src="js/components.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="vendors/snabbt/js/snabbt.min.js"></script>
<script type="text/javascript" src="vendors/wow/js/wow.min.js"></script>
<!-- end of plugin scripts -->

<!--Page level scripts-->
<script type="text/javascript" src="<?php echo e(asset('assets/js/form.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/pages/form_elements.js')); ?>"></script>
<!--end page level scripts-->

<script>
    new WOW().init();
</script>


<!-- global scripts modals-->
<script type="text/javascript" src="js/components.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/pages/modals.js"></script>
<!--End of global scripts-->

<!--script for table add brand-->
<script> 
$(document).ready(function () {
    var counter = 0;

    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});



function calculateRow(row) {
    var price = +row.find('input[name^="price"]').val();
}

function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.order-list").find('input[name^="price"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
}
</script>

<!--end script of table add brand-->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>