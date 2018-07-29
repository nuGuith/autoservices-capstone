 <!-- Include MAster PAge -->
<?php $__env->startSection('Title','Add Discount'); ?> <!-- Page Title -->
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
                            <i class="fa fa-ticket"></i>
                            Discount
                        </h4>
                    </div>

                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right   ">
                            <li class="breadcrumb-item " >
                                <a href="/discount">
                                    <i class="fa fa-ticket" data-pack="default" data-tags=""></i>
                                    Discount
                                </a>
                            </li>
                            <li class="active breadcrumb-item">&nbsp;Add Discount</li>
                        </ol>
                    </div>

                    </div>
                </div>
            </header>
            
            <div class="outer">
                <div class="inner bg-container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card" >

                                    
                            <div class="card-header bg-primary disabled text-white" ><i class="fa fa-plus-square"></i>&nbsp;&nbsp;Add Discount</div>
                            <div class="card-block">
                                                    

                             <div class="row m-t-15">
                                    <div class="col-md-4">
                                        <h5>Discount:</h5>
                                        <p>
                                            <input id="name" name="make" type="text" placeholder="Discount Name" class="form-control m-t-10">
                                        </p>
                                    </div>

                               <div class="input-group">
                                    <div class="col-md-4">
                                        
                                        <h5>Discount Rate:</h5>
                                            <div class="input-group">
                                             <input class="form-control m-t-10" type="text" id="percent" data-mask placeholder="%">
                                             <span class="input-group-addon m-t-10">%</span>
                                            </div>
                                    </div>

                                </div>
                                
                                
                                    <div class="col-md-5 m-t-15">
                                                <h5 style = "padding-bottom: 10px;">Product:</h5>
                                                <select size="3" multiple class="form-control chzn-select" id="test_me_paddington"
                                                        name="test_me_form" tabindex="8">
                                                    <div >
                                                    <option selected>Petron - Ultron (500mL)</option>
                                                </div>
                                                </select>
                                            </div>
                                       

                                       <div class="col-md-5 m-t-15">
                                                <h5 style = "padding-bottom: 10px;">Service:</h5>
                                                <select size="3" multiple class="form-control chzn-select m-t-10" id="test_me_paddington"
                                                        name="test_me_form" tabindex="8">
                                                    <option selected>Change Oil - Sedan</option>
                                                </select>
                                            </div>
                                   
                                </div>
                             </div>

                             <div class="card-footer bg-black disabled">
                               <div class="examples transitions m-t-5 pull-right">
                                    <button onclick="window.location='<?php echo e(url("/vehicletype")); ?>'" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn gray"  href="/vehicletype"><i class="fa fa-arrow-left" >
                                    </i>&nbsp;Back</button>                
                                    <button class="btn btn-success  source success_clr m-l-0 hvr-float-shadow adv_cust_mod_btn" style ="width: 80px;"  ><i class="fa fa-save text-white" ></i>&nbsp; Save</button>
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