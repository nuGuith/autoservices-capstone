 <!-- Include Master Page -->
<?php $__env->startSection('Title','Add Vehicle Type'); ?> <!-- Page Title -->
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
                            <i class="fa fa-truck"></i>
                            Vehicle Type
                        </h4>
                    </div>

                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right   ">
                            <li class="breadcrumb-item " >
                                <a href="/vehicletype">
                                    <i class="fa fa-truck" data-pack="default" data-tags=""></i>
                                    Vehicle Type
                                </a>
                            </li>
                            <li class="active breadcrumb-item">&nbsp;Add Vehicle Type</li>
                        </ol>
                    </div>

                    </div>
                </div>
            </header>
                <div class="outer">
                    <div class="inner bg-container">
                        <div class="row">
                            <div class="col-lg-12">
                                <?php echo Form::open(array('id' => 'addForm', 'method' => 'POST', 'url' => '\addvehicletype', 'action' => 'AddVehicleTypeController@store')); ?>

                                <div class="card" >
                                    <div class="card-header bg-primary disabled text-white" ><i class="fa fa-plus-square"></i>&nbsp;&nbsp;Add Vehicle Type</div>
                                    <div class="card-block ">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <br>
                                                <h4>Vehicle Make</h4>
                                                <p>
                                                    <input id="name" name="make" type="text" placeholder="Make"
                                                           class="form-control"></p>
                                            </div>
                                            <div class="col-md-8">
                                                <table id="myTable" class=" table order-list" >
                                                    <thead>
                                                        <br>
                                                        <tr>
                                                            <td><h5>Model</h5></td>
                                                            <td><h5>Transmission</h5></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                        <td>
                                                            <input type="text" name="model" placeholder="Model" class="form-control"/>
                                                            
                                                        </td>
                                                        <td>

                                                            <input id="automatic" name="automatic" type="checkbox" value="automatic" class="input-small custom-checkbox custom-control">
                                                             <label for="automatic">Automatic</label>
                                                        </td>
                                                        <td>
                                                            <input id="manual" name="manual" type="checkbox" value="manual" class="input-small custom-checkbox custom-control">
                                                            <label for="manual">Manual</label>
                                                        </td>
                                                        <td><i class="deleteRow "></i>
                                                        </td>
                                                        </tr>
                                                    </tbody>
                                                <tfoot>
                                                    <tr role= "row">
                                                    <td colspan="5" style="text-align: right;">
                                                        <div class="examples transitions m-t-5">
                                                            <button type="button" id="addrow" value="Add Row" class="btn btn-warning hvr-float-shadow" ><i class="fa fa-plus text-white"></i>&nbsp; Add Row </button>
                                                        </div>
                                                    </td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    
                                </div>


                                <div class="card-footer">
                                   <div class="examples transitions m-t-5 pull-right">
                                        <button onclick="window.location='<?php echo e(url("/vehicletype")); ?>'" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn"  href="/vehicletype"><i class="fa fa-arrow-left" >
                                        </i>&nbsp;Back</button>                
                                        <button class="btn btn-success warning source cancel_add m-l-10 adv_cust_mod_btn" style ="width: 80px;" type="submit" data-dismiss="modal"><i class="fa fa-save text-white" ></i>&nbsp; Save</button>
                                    </div>
                                </div>
                            </div>
                            <?php echo Form::close(); ?>

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


<!--script for table add brand-->
<script> 
$(document).ready(function () {
    var counter = 0;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" class="form-control" name="model" placeholder="Model"' + counter + '"/></td>';
        cols += '<td><input type="checkbox" class="form-control" name="automatic"' + counter + '"/><label for="automatic">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Automatic</label></td>';
        cols += '<td><input type="checkbox" class="form-control" name="manual"' + counter + '"/><label for="manual">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manual</label></td>';
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

<!--end script of table add brand-->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>