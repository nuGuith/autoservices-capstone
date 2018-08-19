 <!-- Include Master Page -->
<?php $__env->startSection('Title','Service'); ?> <!-- Page Title -->
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
                            <i class="fa fa-wrench"></i>
                            Service
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
                                    <i class="fa fa-wrench"></i>
                                        Services
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="/service">
                                        Service
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
                                            &nbsp;  Add Service                                   
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
                                                    
                                                    <th class="sorting wid-30" tabindex="0" rowspan="1" colspan="1" style="width: 30%;"><b>Service Name</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 20%;"><b>Estimated Time</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 20%;"><b>Initial Price</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1"><b>Actions</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    
                                                    <td><?php echo $service->ServiceName; ?></td>
                                                    <td><?php echo $service->EstimatedTime; ?></td>
                                                    <td>Php <?php echo $service->InitialPrice; ?></td>
                                                    <td>
                                                        <!--EDIT BUTTON-->
                                                        <button class="btn btn-success hvr-float-shadow adv_cust_mod_btn tipso_bounceIn" data-background="#3CB371" data-color="white" data-tipso="Edit" data-toggle="modal" data-href="#responsive" onclick="editModal(<?php echo $service->ServiceID; ?>)"><i class="fa fa-pencil text-white"></i>
                                                        </button>
                                                        
                                                        
                                                        <!--DELETE BUTTON-->
                                                        <button class="btn btn-danger hvr-float-shadow warning confirm tipso_bounceIn" onclick="deleteModal(<?php echo $service->ServiceID; ?>)"  data-background="#FA8072" data-color="white" data-tipso="Delete"><i class="fa fa-trash text-white"></i>
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
            <?php echo Form::open(array('id' => 'editForm', 'url' => 'service', 'action' => 'ServiceController@update', 'method' => 'PUT')); ?>

            <div class="modal fade in " id="editModal" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-pencil"></i>
                                            &nbsp;&nbsp;Edit Service</h4>
                            </div>
                            <div class="modal-body">
                                <div class="col">
                                    <div class="col-xl-12" style="padding-right:25px;">
                                        <br>
                                        <h4>Service Name</h4>
                                        <p>
                                            <input id="servicename" name="servicename" type="text" placeholder="Service Name" maxlength="255" required="required" class="form-control">
                                            <!-- <?php echo Form::input ('servicename','text', Input::old('servicename'), [
                                                'id'=>'servicename',
                                                'name'=>'servicename',
                                                'type'=>'text',
                                                'placeholder'=>'Service Name',
                                                'class'=>'form-control',
                                                'maxlength'=>'255',
                                                'disabled' =>'disabled',
                                                'required'
                                                ]); ?> -->
                                        </p>
                                    </div>
                                    <div class="col-xl-12">
                                        <table id="myTable" class="table order-list" >
                                            <tbody>
                                                <tr>
                                                    <td><h5>Service Category</h5></td>
                                                    <td>
                                                        <?php echo e(Form::select(
                                                            'servicecategoryid',
                                                            $categories,
                                                            null,
                                                            array(
                                                            'class' => 'form-control',
                                                            'id' => 'servicecategoryid',
                                                            'name' => 'servicecategoryid')
                                                            )); ?>

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><h5>Estimated Time</h5></td>
                                                    <td>
                                                        <input type="text" id="estimatedtime" name="estimatedtime" placeholder="Estimated Time" class="form-control"/>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><h5>Size Type</h5></td>
                                                    <td>
                                                        <input type="text" id="sizetype" name="sizetype" placeholder="Size Type" class="form-control"/>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><h5>Class</h5></td>
                                                    <td>
                                                        <input type="text" id="class" name="class" placeholder="Class" class="form-control"/>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><h5>Initial Price</h5></td>
                                                    <td>
                                                        <input type="text" id="initialprice" name="initialprice" placeholder="Initial Price"class="form-control"/>
                                                    </td>
                                                    <td><input id="serviceid" name="serviceid" type="hidden" value=null></td>
                                                </tr>
                                            </tbody>
                                        </table>
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
                <?php echo Form::open(array('id' => 'addForm', 'url' => 'service', 'action' => 'ServiceController@store', 'method' => 'POST')); ?>

                <div class="modal fade in " id="addModal" tabindex="-2" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-pencil"></i>
                                            &nbsp;&nbsp;Add New Service</h4>
                            </div>
                            <div class="modal-body">
                                <div class="col">
                                    <div class="col-xl-12" style="padding-right:25px;">
                                        <br>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <h4>Service Name<span style="color:red;font-size:14px;">*</span></h4>
                                            </div>
                                            <div class="col-xl-6" style="text-align:right;">
                                                <h6>Required fields<span style="color:red;font-size:14px;">*</span></h6>
                                            </div>
                                        </div>
                                        <p>
                                            <?php echo Form::input ('servicename','text', Input::old('servicename'), [
                                                'id'=>'servicename',
                                                'name'=>'servicename',
                                                'type'=>'text',
                                                'placeholder'=>'Service Name',
                                                'class'=>'validate[required] form-control',
                                                'maxlength'=>'255',
                                                'required'
                                                ]); ?>

                                        </p>
                                    </div>
                                    <div class="col-xl-12">
                                        <table id="myTable" class="table order-list" >
                                            <tbody>
                                                <tr>
                                                    <td>
                                                    <h5>Service Category<span style="color:red">*</span></h5>
                                                    </td>
                                                    <td>
                                                        <?php echo e(Form::select(
                                                            'servicecategoryid',
                                                            $categories,
                                                            null,
                                                            array(
                                                            'class' => 'form-control',
                                                            'id' => 'servicecategoryid',
                                                            'name' => 'servicecategoryid')
                                                            )); ?>

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                    <h5>Estimated Time<span style="color:red">*</span></h5>
                                                    </td>
                                                    <td>
                                                        <?php echo Form::input ('estimatedtime','text', Input::old('estimatedtime'), [
                                                            'id'=>'estimatedtime',
                                                            'name'=>'estimatedtime',
                                                            'type'=>'text',
                                                            'placeholder'=>'Estimated Time',
                                                            'class'=>'form-control',
                                                            'maxlength'=>'3',
                                                            'required'
                                                            ]); ?>

                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><h5>Size Type</h5></td>
                                                    <td>
                                                        <input type="text" id="sizetype" name="sizetype" placeholder="Size Type" class="form-control"/>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><h5>Class</h5></td>
                                                    <td>
                                                        <input type="text" id="class" name="class" placeholder="Class" class="form-control"/>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                    <h5>Initial Price<span style="color:red">*</span></h5>
                                                    </td>
                                                    <td>
                                                        <?php echo Form::input ('initialprice','text', Input::old('initialprice'), [
                                                            'id'=>'initialprice',
                                                            'name'=>'initialprice',
                                                            'type'=>'text',
                                                            'placeholder'=>'Initial Price',
                                                            'class'=>'form-control',
                                                            'required'
                                                            ]); ?>

                                                    </td>
                                                </tr>

                                            </tbody>
                                        </table>
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
                <?php echo Form::open(array('id' => 'deleteForm', 'url' => 'service', 'action' => 'ServiceController@delete', 'method' => 'PATCH')); ?>

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
                url: "/service/"+id+"/edit",
                dataType: "JSON",
                success:function(data){
                    $("#servicename").val(data.service.ServiceName);
                    $("#servicecategoryid").val(data.service.ServiceCategoryID);
                    $("#estimatedtime").val(data.service.EstimatedTime);
                    $("#sizetype").val(data.service.SizeType);
                    $("#class").val(data.service.Class);
                    $("#initialprice").val(data.service.InitialPrice);
                    $("#serviceid").val(data.service.ServiceID);
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