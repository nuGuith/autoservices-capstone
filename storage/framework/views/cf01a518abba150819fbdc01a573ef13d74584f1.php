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
    <!-- <link type="text/css" rel="stylesheet" href="css/pages/advanced_components.css"/> -->

        <!-- CONTENT -->
        <div id="content" class="bg-container">

            <header class="head">
                <div class="main-bar">
                    <div class="row" style="height: 47px;">
                    <div class="col-6">
                        <h4 class="m-t-5" style="margin-top: 2.5%;">
                            <i class="fa fa-wrench"></i>
                            Service Category
                        </h4>
                    </div>
                    <div class="col-sm-6 col-12"  >
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">
                                <a href="#">
                                    <i class="fa fa-wrench"></i>
                                        Service
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="/servicecategory">
                                        Service Category
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
                                            &nbsp;  Add Service Category                                   
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
                                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 35%;"><b>Service Category Name</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 35%;"><b>Description</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 25%;"><b>Actions</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <!-- -->
                                                <tr>
                                                    <td><?php echo $category->ServiceCategoryName; ?></td>
                                                    <td><?php echo $category->Description; ?></td>
                                                    <td>
                                                        

                                                         <!--EDIT BUTTON-->
                                                        <button class="btn btn-success hvr-float-shadow adv_cust_mod_btn tipso_bounceIn" onclick="editModal(<?php echo $category->ServiceCategoryID; ?>)" data-background="#3CB371" data-color="white" data-tipso="Edit" data-toggle="modal" data-href="#responsive" href="#editModal"><i class="fa fa-pencil text-white"></i>
                                                        </button>
                                                              


                                                        <!--DELETE BUTTON-->
                                                        <button class="btn btn-danger hvr-float-shadow tipso_bounceIn" onclick="deleteModal(<?php echo $category->ServiceCategoryID; ?>)" data-background="#FA8072" data-color="white" data-tipso="Delete"><i class="fa fa-trash text-white"></i>
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
                <?php echo Form::open(array('id' => 'editForm', 'method' => 'PUT', 'url' => 'servicecategory', 'action' => 'ServiceCategoryController@update')); ?>

                <!-- <?php echo csrf_field(); ?> -->
                <div class="modal fade in" id="editModal" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-pencil"></i>
                                            &nbsp;Edit Service Category</h4>
                            </div>
                            <div class="modal-body" style="padding-left: 47px;">
                                <div class="row m-t-5">
                                    <div class="col-md-11" style="padding-right:25px;">
                                        <h5>Service Category: <span style="color: red">*</span></h5>
                                        <p>
                                            <?php echo Form::input ('servicecategoryname','text', Input::old('servicecategoryname'), [
                                                'id'=>'servicecategoryname',
                                                'name'=>'servicecategoryname',
                                                'type'=>'text',
                                                'placeholder'=>'Category Name',
                                                'class'=>'form-control m-t-10',
                                                'maxlength'=>'100',
                                                'required'
                                                ]); ?>

                                        </p>
                                    </div>
                                </div>
                                    
                                <div class="row m-t-5">
                                    <div class="col-md-11" style="padding-right:25px;">
                                        <h5>Description: <span style="color: red">*</span></h5>   
                                            <p>
                                                <?php echo Form::input ('description','text', Input::old('description'), [
                                                    'id'=>'description',
                                                    'name'=>'description',
                                                    'type'=>'text',
                                                    'placeholder'=>'Description',
                                                    'class'=>'form-control m-t-10',
                                                    'maxlength'=>'255'
                                                    ]); ?>

                                            </p>
                                        <input id="servicecategoryid" name="servicecategoryid" type="hidden" value=null>                        
                                    </div>
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
                <?php echo Form::open(array('id' => 'addForm', 'url' => 'servicecategory', 'action' => 'ServiceCategoryController@store', 'method' => 'POST')); ?>

                <!-- <?php echo csrf_field(); ?> -->
                <div class="modal fade in " id="addModal" tabindex="-2" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-info">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-plus"></i>
                                            &nbsp;Add Service Category</h4>
                            </div>
                            <div class="modal-body" style="padding-left: 47px;">
                                <div class="row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Service Category: <span style="color: red">*</span></h5>
                                        <p>
                                            <?php echo Form::input ('name','text', Input::old('servicecategoryname'), [
                                                'id'=>'servicecategoryname',
                                                'name'=>'servicecategoryname',
                                                'type'=>'text',
                                                'placeholder'=>'Category Name',
                                                'class'=>'form-control m-t-10',
                                                'maxlength'=>'100',
                                                'required'
                                                ]); ?>

                                        </p>
                                    </div>
                                </div>
                                
                                 <div class="row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Description: <span style="color: red">*</span></h5>
                                            <p>
                                                <?php echo Form::input ('description','text', Input::old('description'), [
                                                    'id'=>'description',
                                                    'name'=>'description',
                                                    'type'=>'text',
                                                    'placeholder'=>'Description',
                                                    'class'=>'form-control m-t-10',
                                                    'maxlength'=>'255'
                                                    ]); ?>

                                            </p>
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

                <!-- END ADD MODAL -->

                <!-- START DELETE MODAL -->
                <?php echo Form::open(array('id' => 'deleteForm', 'method' => 'PATCH', 'url' => 'servicecategory', 'action' => 'ServiceCategoryController@delete')); ?>

                <!-- <?php echo csrf_field(); ?> -->
                <div class="modal fade in " id="deleteModal" tabindex="-3" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-danger">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-trash"></i>
                                            &nbsp;&nbsp;Delete this record?</h4>
                            </div>
                            <div class="modal-body">
                                <div class="col m-t-15">
                                    <h5>Are you sure do you want to delete this record?</h5>
                                    <input id="deleteId" name="deleteId" type="hidden" value=null>
                                </div>
                            </div>




                            <div class="modal-footer m-t-10">
                                <div class="examples transitions m-t-5">
                                    <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Cancel</button>
                                </div>
                                <div class="examples  m-t-5">
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


<!-- scripts-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="vendors/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/components.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/pages/sweet_alerts.js"></script>
<script type="text/javascript" src="vendors/sweetalert/js/sweetalert2.min.js"></script>
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