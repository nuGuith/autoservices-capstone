 <!-- Include Master Page -->
<?php $__env->startSection('Title','Product Unit Type'); ?> <!-- Page Title -->
<?php $__env->startSection('content'); ?>

    <link type="text/css" rel="stylesheet" href="vendors/sweetalert/css/sweetalert2.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/pages/sweet_alert.css"/>

    <link type="text/css" rel="stylesheet" href="vendors/animate/css/animate.min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/hover/css/hover-min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/wow/css/animate.css"/>

    <link type="text/css" rel="stylesheet" href="vendors/modal/css/component.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/animate/css/animate.min.css" />
    <link type="text/css" rel="stylesheet" href="vendors/jquery-validation-engine/css/validationEngine.jquery.css" />
    <link type="text/css" rel="stylesheet" href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css" />
    <!--End of plugin styles-->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="css/pages/form_validations.css" />
    <!-- end of plugin styles -->
    <link type="text/css" rel="stylesheet" href="css/pages/animations.css"/>

    <link type="text/css" rel="stylesheet" href="css/pages/portlet.css"/>
    <!-- <link type="text/css" rel="stylesheet" href="css/pages/advanced_components.css"/> -->

        <!-- CONTENT -->
        <div id="content" class="bg-container">

            <header class="head">
                <div class="main-bar">
                    <div class="row" style="height: 47px;">
                        <div class="col-6">
                            <h4 class="m-t-5" style="margin-top: 2.5%;">
                                <i class="fa fa-pencil-square-o"></i>
                                Product Unit Type
                            </h4>
                        </div>
                        <div class="col-sm-6 col-12"  >
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">
                                    <a href="/">
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
                                    <a href="/productunittype">
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
                                        <table class="table table-bordered table-hover table-advance dataTable no-footer" id="editable_table" role="grid">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 30%;">Unit of Measurement
                                                    </th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 20%;">Abbreviation
                                                    </th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 20%;">Actions
                                                    </th>    
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php $__currentLoopData = $productunittypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productunittype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    
                                                    <td><?php echo $productunittype->UnitTypeName; ?></td>
                                                    <td><?php echo $productunittype->Unit; ?></td>
                                                    <td>
                                                        <!--EDIT BUTTON-->
                                                        <button class="btn btn-success hvr-float-shadow adv_cust_mod_btn" onclick="editModal(<?php echo $productunittype->ProductUnitTypeID; ?>)" data-toggle="modal" data-href="#responsive" type="button"><i class="fa fa-pencil text-white"></i>&nbsp; Edit
                                                        </button>
                                               
                                                        <!--DELETE BUTTON-->
                                                        <button class="btn btn-danger source warning confirm hvr-float-shadow" onclick="deleteModal(<?php echo $productunittype->ProductUnitTypeID; ?>)" style = "width: 70px "><i class="fa fa-trash text-white"></i> &nbsp; Delete
                                                        </button>
                                                    </td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END TABLE -->

            <!-- START EDIT MODAL -->
            <?php echo Form::open(array('id' => 'editForm', 'url' => 'productunittype', 'action' => 'ProductUnitTypeController@update', 'method' => 'PUT')); ?>

            <div class="modal fade in " id="editModal" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-pencil"></i>
                                            &nbsp;&nbsp;Edit Product Unit Type</h4>
                            </div>
                            <div class="modal-body">
                                <div class="col">
                                    <div class="col-xl-12" style="padding-right:25px;">
                                        <br>
                                        <h4>Product Unit Type</h4>
                                        <br><hr>
                                        <div class="row">
                                            <div class="col-xl-8">
                                                <p>
                                                    <?php echo e(Form::input('unittypename', 'text', 
                                                        Input::old('unittypename'), [
                                                        'id' => 'unittypename',
                                                        'name' => 'unittypename',
                                                        'class' => 'form-control',
                                                        'type' => 'text',
                                                        'placeholder' => 'Unit',
                                                        'required'
                                                        ])); ?>

                                                </p>
                                            </div>
                                            <div class="col-xl-4" style="text-align:right;">
                                                <p>
                                                    <?php echo e(Form::input('unit', 'text',
                                                        Input::old('unit'), [
                                                        'id' => 'unit',
                                                        'name' => 'unit',
                                                        'class' => 'form-control',
                                                        'type' => 'text',
                                                        'style' => 'width:65px; text-align:right',
                                                        'placeholder' => 'abbrv',
                                                        'required'
                                                        ])); ?>

                                                </p>
                                            </div>
                                        </div>
                                        <input id="productunittypeid" name="productunittypeid" type="hidden" value=null>
                                    </div>
                                    <br>
                                    <div id="show-errors">
                                        <?php if($errors->update->any()): ?>
                                            <div class="alert alert-danger">
                                                <ul>
                                                    <?php $__currentLoopData = $errors->update->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li><?php echo e($error); ?></li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </div>
                                            <br>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>



                            <div class="modal-footer">
                                <div class="examples transitions m-t-5">
                                    <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                                </div>
                                <div class="examples transitions m-t-5">
                                    <?php echo Form::button('<i class="fa fa-save text-white"></i>&nbsp; Save Changes', [
                                        'type'=>'submit',
                                        'class'=>'btn btn-success warning source cancel_edit m-l-10 hvr-float-shadow adv_cust_mod_btn',
                                        'data-dismiss'=>'modal'
                                    ]); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo Form::close(); ?>

                <!-- END EDIT MODAL -->
                <!-- START ADD MODAL -->
                <?php echo Form::open(array('id' => 'addForm', 'url' => 'productunittype', 'action' => 'ProductUnitTypeController@store', 'method' => 'POST')); ?>

                <div class="modal fade in " id="addModal" tabindex="-2" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-pencil"></i>
                                            &nbsp;&nbsp;Add New Product Unit Type</h4>
                            </div>
                            <div class="modal-body">
                                <div class="col">
                                    <div class="col-xl-12" style="padding-right:25px;">
                                        <br>
                                        <div class="row">
                                            <div class="col-xl-8">
                                                <h4>Product Unit Type Name<span style="color:red;font-size:14px;">*</span></h4>
                                            </div>
                                            <div class="col-xl-4" style="text-align:right;">
                                                <h6>Required field(s)<span style="color:red;font-size:14px;">*</span></h6>
                                            </div>
                                        </div>
                                        <br><hr>
                                        <div class="row">
                                            <div class="col-xl-8">
                                                <p>
                                                    <?php echo e(Form::input('unittypename', 'text',
                                                        Input::old('unittypename'), [
                                                        'id' => 'unittypename',
                                                        'name' => 'unittypename',
                                                        'class' => 'form-control',
                                                        'type' => 'text',
                                                        'placeholder' => 'Unit',
                                                        'required'
                                                        ])); ?>

                                                </p>
                                            </div>
                                            <div class="col-xl-4" style="text-align:right;">
                                                <p>
                                                    <?php echo e(Form::input('unit', 'text',
                                                        Input::old('unit'), [
                                                        'id' => 'unit',
                                                        'name' => 'unit',
                                                        'class' => 'form-control',
                                                        'type' => 'text',
                                                        'style' => 'width:65px; text-align:right',
                                                        'placeholder' => 'abbrv',
                                                        'required'
                                                        ])); ?>

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div id="show-errors">
                                        <?php if($errors->add->any()): ?>
                                            <div class="alert alert-danger">
                                                <ul>
                                                    <?php $__currentLoopData = $errors->add->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <li><?php echo e($error); ?></li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </div>
                                            <br>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <div class="examples transitions m-t-5">
                                    <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                                </div>
                                <div class="examples transitions m-t-5">
                                    <?php echo Form::button('<i class="fa fa-save text-white"></i>&nbsp;Save', [
                                        'type'=>'submit',
                                        'class'=>'btn btn-success warning source cancel_add m-l-10 adv_cust_mod_btn',
                                        'data-dismiss'=>'modal',
                                    ]); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo Form::close(); ?>

                <!--END ADD MODAL -->

                <!-- START DELETE MODAL -->
                <?php echo Form::open(array('id' => 'deleteForm', 'url' => 'productunittype', 'action' => 'ProductUnitTypeController@delete', 'method' => 'PATCH')); ?>

                <!-- <?php echo csrf_field(); ?> -->
                <div class="modal fade in " id="deleteModal" tabindex="-3" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-pencil"></i>
                                            &nbsp;&nbsp;Delete this record?</h4>
                            </div>
                            <div class="modal-body">
                                <div class="col">
                                    <div class="col-xl-12" style="padding-right:25px;">
                                        <br>
                                        <p>
                                            Are you sure you want to delete this record?
                                        </p>
                                    </div>
                                    <div class="col-xl-12">
                                        <table id="myTable" class="table order-list" >
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <input id="deleteId" name="deleteId" type="hidden" value=null>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>



                            <div class="modal-footer">
                                <div class="examples transitions m-t-5">
                                    <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Cancel</button>
                                </div>
                                <div class="examples transitions m-t-5">
                                    <?php echo Form::button('<i class="fa fa-save text-white"></i>&nbsp;OK', [
                                        'type'=>'submit',
                                        'class'=>'btn btn-success warning source confirm m-l-10 adv_cust_mod_btn',
                                        'data-dismiss'=>'modal',
                                    ]); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php echo Form::close(); ?>

                <!-- END DELETE MODAL -->
                <!-- END MODAL-->

                            </div>
                        </div>
                    </div>
                    <!-- /.inner -->
                </div>
                <!-- /.outer -->
        <!--END CONTENT -->


<!-- global scripts sweet alerts-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="vendors/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/components.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="vendors/sweetalert/js/sweetalert2.min.js"></script>
<script type="text/javascript" src="js/pages/sweet_alerts.js"></script>
<script type="text/javascript" src="vendors/snabbt/js/snabbt.min.js"></script>
<script type="text/javascript" src="vendors/wow/js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<script>
    $(window).on('load',function(){
        <?php if($errors->add->any()): ?>
            $('#addModal').modal('show');
        <?php endif; ?>
        <?php if($errors->update->any()): ?>
            $('#editModal').modal('show');
        <?php endif; ?>
    });
</script>
<script>
     function editModal(id){
            $.ajax({
                type: "GET",
                url: "/productunittype/"+id+"/edit",
                dataType: "JSON",
                success:function(data){
                    $("#unittypename").val(data.unittype.UnitTypeName);
                    $("#unit").val(data.unittype.Unit);                    
                    $("#productunittypeid").val(data.unittype.ProductUnitTypeID);
                }
            });
            $('#editModal').modal('show');
        }
    function deleteModal(id){
            document.getElementById("deleteId").value = id;
            $('#deleteModal').modal('show');
        }
</script>

<!-- global scripts modals-->
<script type="text/javascript" src="js/pages/modals.js"></script>
<!--End of global scripts-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>