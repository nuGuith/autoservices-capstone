 <!-- Include MAster PAge -->
<?php $__env->startSection('Title','Product Brand'); ?> <!-- Page Title -->
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
                <div class="card">
                    <div class="card-header bg-dark">
                        <div class="btn-group">
                            <!--ADD BUTTON MODAL-->
                            <a  id="editable_table_new" class=" btn btn-raised btn-default hvr-pulse-grow adv_cust_mod_btn" href="/addproductbrand">
                            <i class="fa fa-plus"></i>
                            &nbsp;  Add Product Brand                                   
                            </a>
                        </div>
                    </div>
                    <div class="card-block m-t-35" id="user_body">
                        <div class="table-toolbar">
                            <div class="btn-group">
                                <div class="btn-group float-right users_grid_tools">
                                    <div class="tools">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <table class="table  table-striped table-bordered table-hover table-advance dataTable no-footer" id="editable_table" role="grid">
                                <thead>
                                    <tr role="row">     
                                        <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 35%;">
                                            <b>Product Brand</b>
                                        </th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 35%;">
                                            <b>Product Type</b>
                                        </th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">
                                            <b>Actions</b>
                                        </th>    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr role="row" class="even">                                                    
                                        <td>
                                        </td>
                                        <td class="center">
                                            <ul>
                                                <li></li>
                                        </td>
                                        <td>
                                            <!--EDIT BUTTON-->
                                            <div class="examples transitions m-t-5">
                                                <button class="btn btn-success hvr-float-shadow adv_cust_mod_btn" data-toggle="modal" data-href="#responsive" href="#editproductbrand">
                                                <i class="fa fa-pencil text-white"></i>
                                                &nbsp; Edit
                                                </button>
                                            <!--DELETE BUTTON-->
                                                <button class="btn btn-danger source warning confirm hvr-float-shadow" style = "width: 70px ">
                                                <i class="fa fa-trash text-white"></i> 
                                                &nbsp; Delete
                                                </button>
                                            </div>
                                        </td>
                                    </tr>                                               
                               </tbody>
                            </table>
                        </div>
                    </div>
                                <!-- END EXAMPLE TABLE PORTLET-->

                    <!-- EDIT PRODUCT BRAND-->
                    <div class="modal fade in " id="editproductbrand" tabindex="-1" role="dialog" aria-hidden="false">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <h4 class="modal-title text-white">
                                    <i class="fa fa-pencil"></i>
                                    &nbsp;&nbsp;Edit Product Brand</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <h4 style="font-weight:bold">Product Brand Information</h4><br>
                                        <h4>Product Brand</h4>
                                        <p><input id="name" name="make" type="text" placeholder="Brand"
                                        class="form-control"></p>
                                        <h4>Product Type</h4>
                                        <select size="1" multiple class="form-control chzn-select" id="test_me_paddington" name="test_me_form" tabindex="8" style="width:300px">
                                            <option>Oil</option>
                                            <option selected>Tires</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="examples transitions m-t-5">
                                    <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                                </div>
                            <div class="examples transitions m-t-5">
                                <button class="btn btn-success  source success_clr m-l-10 hvr-float-shadow adv_cust_mod_btn" data-dismiss="modal">
                                <i class="fa fa-save text-white"></i>
                                &nbsp; Save Changes
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!-- END modal-->
        </div>
    </div>
</div>
            <!-- /.inner -->
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
<script>
    new WOW().init();
</script>


<!-- global scripts modals-->
<script type="text/javascript" src="js/components.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/pages/modals.js"></script>
<!--End of global scripts-->

<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript" src="js/pages/form_elements.js"></script>

<!--script for table add brand-->
<script> 

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