 <!-- Include MAster PAge -->
<?php $__env->startSection('Title','Service Bay'); ?> <!-- Page Title -->
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
                            <i class="fa fa-wrench"></i>
                            Service Bay
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
                                        <a  id="editable_table_new" class=" btn btn-raised btn-default hvr-pulse-grow adv_cust_mod_btn" 
                                                    href="#">
                                        <i class="fa fa-plus"></i>
                                            &nbsp;  Add Service Bay                                  
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
                                                    
                                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 15%;"><b>Service Bay ID</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 25%;"><b>Service Bay Name</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 30%;"><b>Description</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1"><b>Actions</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row" class="even">
                                                    
                                                    <td>
                                                        SVCBAY1
                                                    </td>
                                                    <td class="center">
                                                        Service Bay 1
                                                    </td>
                                                    <td></td>
                                                    <td>
                                                        <!--EDIT BUTTON-->
                                                        <div class="examples transitions m-t-5">
                                                        <button class="btn btn-success hvr-float-shadow adv_cust_mod_btn" data-toggle="modal" data-href="#responsive" href="#editservicebay"><i class="fa fa-pencil text-white"></i>&nbsp; Edit
                                                        </button>
                                               
                                                        <!--DELETE BUTTON-->
                                                       <button class="btn btn-danger source warning confirm hvr-float-shadow" style = "width: 70px "><i class="fa fa-trash text-white"></i> &nbsp; Delete
                                                        </button>
                                                       
                                                    </div>
                                                    </td>
                                                </tr>
                                                

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->

            <div class="modal fade in " id="editservicebay" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h4 class="modal-title text-white"><i class="fa fa-pencil"></i>
                                            &nbsp;&nbsp;Edit Service Bay</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4>Service Bay Name</h4>
                                        <p>
                                            <input id="name" name="category" type="text" placeholder="Service Bay Name"
                                                   class="form-control"></p>
                                    </div>
                                    <div class="col-md-8">
                                        <table id="myTable" class=" table order-list" >
                                            <thead>
                                                <tr>
                                                <td><h5>Description</h5></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                            <td>
                                                <input type="text" name="name" placeholder="Description" class="form-control"/>
                                                
                                            </td>
                                            </tr>
                                        </tbody>
                                    <!-- <tfoot>
                                        <tr role= "row">
                                        <td colspan="5" style="text-align: right;">
                                            <div class="examples transitions m-t-5">
                                                <button type="button" id="addrow" value="Add Row" class="btn btn-warning hvr-float-shadow" ><i class="fa fa-plus text-white"></i>&nbsp; Add Row </button>
                                             </div>
                                        </td>
                                        </tr>
                                     </tfoot> -->
                                    </table>
                                </div>

                             </div>
                        </div>



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
                <!-- END modal-->

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


<!--script for table edit brand-->
<script> 
$(document).ready(function () {
    var counter = 0;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" class="form-control" name="brand" placeholder="Brand"' + counter + '"/></td>';
        cols += '<td><input type="checkbox" class="form-control" name="automatic"' + counter + '"/><label for="automatic">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Automatic</label></td>';
        cols += '<td><input type="checkbox" class="form-control" name="manual"' + counter + '"/><label for="manual">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manual</label></td>';
        cols += '<td><input type="button" class="ibtnDel btn  btn-danger btn-md" value ="X"></td>';

        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    });



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

<!--end script of table edit brand-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>