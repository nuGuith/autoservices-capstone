 <!-- Include Master Page -->
<?php $__env->startSection('Title','Product Unit Type'); ?> <!-- Page Title -->
<?php $__env->startSection('content'); ?>

    <link type="text/css" rel="stylesheet" href="<?php echo e(url('/vendors/sweetalert/css/sweetalert2.min.css')); ?>"/>
    <link type="text/css" rel="stylesheet" href="<?php echo e(url('/css/pages/sweet_alert.css')); ?>"/>

    <link type="text/css" rel="stylesheet" href="<?php echo e(url('/vendors/animate/css/animate.min.css')); ?>"/>
    <link type="text/css" rel="stylesheet" href="<?php echo e(url('/vendors/hover/css/hover-min.css')); ?>"/>
    <link type="text/css" rel="stylesheet" href="<?php echo e(url('/vendors/wow/css/animate.css')); ?>"/>

    <link type="text/css" rel="stylesheet" href="<?php echo e(url('/vendors/modal/css/component.css')); ?>"/>
    <link type="text/css" rel="stylesheet" href="<?php echo e(url('/vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css')); ?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('/vendors/animate/css/animate.min.css')); ?>" />

    <link type="text/css" rel="stylesheet" href="<?php echo e(url('/css/pages/animations.css')); ?>"/>
    <link type="text/css" rel="stylesheet" href="<?php echo e(url('/css/pages/portlet.css')); ?>"/>
    <link type="text/css" rel="stylesheet" href="<?php echo e(url('/css/pages/advanced_components.css')); ?>"/>

    <!-- CONTENT -->
    <div id="content" class="bg-container">
        <header class="head">
            <div class="main-bar">
                <div class="row" style="height: 47px;">
                    <div class="col-6">
                        <h4 class="m-t-15">
                        <i class="fa fa-pencil-square-o"></i>
                        Product Unit Type
                        </h4>
                    </div>
                    <div class="col-sm-6 col-12"  >
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">
                                <a href="<?php echo e(url('/')); ?>">
                                    <i class="fa fa-home"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">
                                    <i class="fa fa-pencil-square-o"></i>
                                    Product Listing
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="<?php echo e(url('/productunittype')); ?>">
                                    Product Unit Type
                                </a>
                            </li>
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
                                &nbsp;  Add Product Unit Type
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
                            <table class="table table-striped table-bordered table-hover table-advance dataTable no-footer" id="editable_table" role="grid">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 30%;">
                                            <b>Unit of Measurement</b>
                                        </th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 20%;">
                                            <b>Abbreviation</b>
                                        </th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 20%;">
                                            <b>Actions</b>
                                        </th>     
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $unittypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $unittype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr role="row" class="even">
                                        <td> <?php echo $unittype->UnitTypeName; ?></td>
                                        <td class="center"><?php echo $unittype->Unit; ?></td>
                                        <td>
                                        <!--EDIT BUTTON-->
                                            <div class="examples transitions m-t-5">
                                                <?php echo e(Form::open(array('id' => 'edit', 'url' => 'productunittype\edit', 'action' => 'ProductUnitTypeController@update', 'method' => 'POST'))); ?>

                                                        <?php echo e(Form::button('<i class="fa fa-pencil text-white"></i>&nbsp; Edit', [
                                                            'id' => 'editModal',
                                                            'type' => 'submit',
                                                            'class' => 'btn btn-success hvr-float-shadow adv_cust_mod_btn',
                                                            'action' => 'ProductUnitTypeController@update',
                                                            'data-info' => '<?php echo ProductUnitType->ProductUnitTypeID; ?>',
                                                            'data dismiss' => 'modal',
                                                            'data-href' => '#responsive'
                                                            ])); ?>

                                                <?php echo Form::close(); ?>

                                            </div>
                                        <!--DELETE BUTTON-->
                                            <div class="examples transitions m-t-5">
                                                <?php echo e(Form::open(array('id' => 'delete', 'url' => 'productunittype', 'action' => 'ProductUnitTypeController@destroy', 'method' => 'POST'))); ?>

                                                        <?php echo e(Form::button('<i class="fa fa-trash text-white"></i>&nbsp; Delete', [
                                                            'type' => 'submit',
                                                            'class' => 'btn btn-danger source warning confirm hvr-float-shadow',
                                                            'action' => 'ProductUnitTypeController@destroy',
                                                            'data-info' => '<?php echo ProductUnitType->ProductUnitTypeID; ?>',
                                                            'data dismiss' => 'modal',
                                                            'data-href' => '#responsive',
                                                            'style' => 'width: 70px'
                                                            ])); ?>

                                                <?php echo Form::close(); ?>                                           
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                                    <!-- END EXAMPLE TABLE PORTLET-->

                    <!-- ADD Product Unit Type-->
                    <?php echo Form::open(array('id' => 'addForm', 'url' => 'productunittype', 'action' => 'ProductUnitTypeController@store', 'method' => 'POST')); ?>

                    <div class="modal fade in " id="addModal" tabindex="-1" role="dialog" aria-hidden="false">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title text-white">
                                        <i class="fa fa-pencil"></i>
                                        &nbsp;&nbsp;Add Product Unit
                                    </h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h4 style="font-weight:bold">Product Unit Information</h4><br><br>
                                            <h4>Unit Category</h4><br>
                                            <?php echo Form::select('category', [
                                                    'select' => 'Select a category',
                                                    '1' => 'Volume',
                                                    '2' => 'Mass',
                                                    '3' => 'Length',
                                                ],  'Select a category',
                                                [
                                                'id' => 'category',
                                                'name' => 'category',
                                                'class' => 'form-control',
                                                'required',
                                                ]); ?>

                                        </div>
                                    <div class="col-md-8"><br><br><br>
                                        <table id="myTable" class=" table order-list" >
                                            <thead>
                                                <tr>
                                                    <td><h4>Unit Type</h4></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="width:20%">
                                                        <h5>Unit of Measurement:</h5>
                                                    </td>
                                                    <td>
                                                        <?php echo e(Form::input('text', 'unitmeasurement', Input::old('unitmeasurement'), [
                                                            'id' => 'unitmeasurement',
                                                            'name' => 'unitmeasurement',
                                                            'class' => 'form-control',
                                                            'type' => 'text',
                                                            'style' => 'text-align:right',
                                                            'placeholder' => 'Unit',
                                                            'required'
                                                            ])); ?>

                                                    </td>
                                                    <td>
                                                        <?php echo e(Form::input('text', 'abbrv', null, [
                                                            'id' => 'abbrv',
                                                            'name' => 'abbrv',
                                                            'class' => 'form-control',
                                                            'type' => 'text',
                                                            'style' => 'width:65px; text-align:right',
                                                            'placeholder' => 'abbrv',
                                                            'required'
                                                            ])); ?>

                                                    </td>
                                                    <td>
                                                        <i class="deleteRow"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr role= "row">
                                                    <td colspan="5" style="text-align: right;">
                                                        <div class="examples transitions m-t-5">
                                                            <?php echo e(Form::button('<i class="fa fa-plus text-white"></i>&nbsp; Add Row', [
                                                                'id' => 'addrow',
                                                                'name' => 'addrow',
                                                                'class' => 'btn btn-warning hvr-float-shadow'
                                                                ])); ?>

                                                        </div>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <br>
                                        <div id="show-errors">
                                            <?php if($errors->any()): ?>
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li><?php echo e($error); ?></li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <div class="examples transitions m-t-5">
                                    <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                                </div>
                                <div class="examples transitions m-t-5">
                                    <?php echo Form::button('<i class="fa fa-save text-white"></i>&nbsp; Save', [
                                        'type' => 'submit',
                                        'class' => 'btn btn-success warning source cancel_add m-l-10 adv_cust_mod_btn',
                                        'data-dismiss' => 'modal',
                                        ]); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                 <?php echo Form::close(); ?>


                    <!-- EDIT Product Unit Type-->
                <div class="modal fade in " id="editModal" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h4 class="modal-title text-white">
                                    <i class="fa fa-pencil"></i>
                                    &nbsp;&nbsp;Edit Product Unit Type
                                </h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <h4 style="font-weight:bold">Product Unit Type Information</h4><br>
                                        <h4>Unit Category</h4>
                                        <select class="form-control">
                                            <option>Volume</option>                                            
                                        </select><br>
                                        <h4>Product Type</h4>
                                        <select size="1" multiple class="form-control chzn-select" id="test_me_paddington" name="test_me_form" tabindex="8">
                                            <option>Oil</option>
                                            <option>Lubricant</option>
                                        </select><br>
                                    </div>
                                <div class="col-md-8"><br><br><br>
                                    <table id="myTable" class=" table order-list" >
                                        <thead>
                                            <tr>
                                                <td><h4>Dimension(s)</h4></td>
                                                <td><td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h5>Dimension:</h5>
                                                </td>
                                                <td>
                                                    <input type="text" name="value" placeholder="0" class="form-control" style="text-align:right">
                                                </td>
                                                <td>
                                                    <select class="form-control">
                                                        <option>ml</option>
                                                        <option>l</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <i class="deleteRow "></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr role= "row">
                                                <td colspan="5" style="text-align: right;">
                                                    <div class="examples transitions m-t-5">
                                                        <button type="button" id="addrow" value="Add Row" class="btn btn-warning hvr-float-shadow">
                                                            <i class="fa fa-plus text-white"></i>
                                                            &nbsp; Add Row </button>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
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
<?php $__env->stopSection(); ?>

<!-- scripts -->
<script type="text/javascript" src="<?php echo e(url('/vendors/sweetalert/js/sweetalert2.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(url('/js/pages/sweet_alerts.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(url('/js/components.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(url('/vendors/datatables/js/jquery.dataTables.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(url('/js/custom.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(url('/vendors/snabbt/js/snabbt.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(url('/vendors/wow/js/wow.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(url('/js/pages/modals.js')); ?>"></script>
<!-- end of scripts -->

<script>
    new WOW().init();
</script>

<!--script for table add unit type-->
<script> 
$(document).ready(function () {
    var counter = 0;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><h5>Unit of Measurement:</h5></td>';
        cols += '<td><input type="text" class="form-control" id="unitmeasurement" name="unitmeasurement" placeholder="Unit" style="text-align:right"' + counter + '"/></td>';
        cols += '<td><input type="text" class="form-control" id="abbrv" name="abbrv" placeholder="abbrv" style="text-align:right; width:65px"' + counter + '"/></td>';
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
</script>
<!--end script of table add unit type-->
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>