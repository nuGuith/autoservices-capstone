 <!-- Include Master Page -->
<?php $__env->startSection('Title','Inspection Checklist'); ?> <!-- Page Title -->
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
                            Inspection Checklist
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
                                <a href="inspectionchecklist">
                                        Inspection Checklist
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
                                            &nbsp;  Add Inspection Items                                  
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
                                        <table class="table table-bordered table-hover table-advance dataTable no-footer" style="border-radius: 10px;" id="editable_table" role="grid">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 20%;"><b>Inspection</b></th>
                                                    <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1" style="width: 20%;"><b>Inspection Items</b></th>
                                                    <th class="sorting wid-15" tabindex="0" rowspan="1" colspan="1" style="width: 15%;"><b>Actions</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <!--EDIT BUTTON-->
                                                        <button class="btn btn-success hvr-float-shadow adv_cust_mod_btn" onclick="editModal()" data-toggle="modal" data-href="#responsive" type="button"><i class="fa fa-pencil text-white"></i>&nbsp; Edit
                                                        </button>
                                                        <button class="btn btn-danger source warning confirm hvr-float-shadow" onclick="deleteModal()" type="button" style="width:70px"><i class="fa fa-trash text-white"></i> &nbsp; Delete
                                                        </button>
                                                    </td>
                                                </tr>
                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END TABLE -->
            <!-- START EDIT MODAL -->
            <?php echo Form::open(array('id' => 'editForm', 'url' => 'inspectionchecklist', 'action' => 'InspectionChecklistController@update', 'method' => 'PUT')); ?>

                <!-- <?php echo csrf_field(); ?> -->
                <div class="modal fade in" id="editModal" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-pencil"></i>
                                            &nbsp;&nbsp;Edit Inspection Checklist</h4>
                            </div>
                            <div class="modal-body">
                                <div class="col">
                                    <div class="col-xl-12" style="padding-right:25px;">
                                        <br>
                                        <h4>Inspection Name</h4>
                                        <div>
                                            <?php echo Form::input ('name','text', Input::old('inspectionname'), [
                                                'id'=>'inspectionname',
                                                'name'=>'inspectionname',
                                                'type'=>'text',
                                                'placeholder'=>'Inspection Name',
                                                'class'=>'form-control',
                                                'maxlength'=>'100',
                                                'required'
                                                ]); ?>

                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <table id="myTable" class="table" >
                                            <tbody>
                                                <tr>
                                                    <td><h5>Inspection Item(s):</h5></td>
                                                </tr>
                                                <!-- for here -->
                                                <tr role= "row">
                                                    <td>
                                                        <input type="text" name="item" placeholder="Item" class="form-control"/>
                                                    </td>
                                                    <td>
                                                        <i class="deleteRow "></i>
                                                    </td>
                                                </tr>
                                                <!-- endfor here -->
                                                <tr role= "row">
                                                    <td>
                                                        <input type="text" name="item" placeholder="Item" class="form-control"/>
                                                    </td>
                                                    <td>
                                                        <i class="deleteRow "></i>
                                                    </td>
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
                <?php echo Form::open(array('id' => 'addForm', 'url' => 'inspectionchecklist', 'action' => 'InspectionChecklistController@store', 'method' => 'POST')); ?>

                <!-- <?php echo csrf_field(); ?> -->
                <div class="modal fade in " id="addModal" tabindex="-2" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-pencil"></i>
                                            &nbsp;&nbsp;Add Inspection Items</h4>
                            </div>
                            <div class="modal-body">
                                <div class="col">
                                    <div class="col-xl-12" style="padding-right:25px;">
                                        <br>
                                        <h4>Inspection Name</h4>
                                        <p>
                                            <?php echo Form::input ('name','text', Input::old('inspectionname'), [
                                                'id'=>'inspectionname',
                                                'name'=>'inspectionname',
                                                'type'=>'text',
                                                'placeholder'=>'Inspection Name',
                                                'class'=>'form-control',
                                                'maxlength'=>'100',
                                                'required'
                                                ]); ?>

                                        </p>
                                    </div>
                                    <div class="col-xl-12" style="padding-right:-10px;">
                                        <table id="myTable" class="table order-list" >
                                            <tbody>
                                                <tr>
                                                    <td><h5>Inspection Item(s):</h5></td>
                                                    <td>
                                                        <input type="text" name="item" placeholder="Item" class="form-control"/>
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
                                                <td><i class="deleteRow "></i>
                                                </td>
                                                </tr>
                                            </tfoot>
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

                <!-- END ADD MODAL -->

                <!-- START DELETE MODAL -->
                <?php echo Form::open(array('id' => 'deleteForm', 'url' => 'inspectionchecklist', 'action' => 'InspectionChecklistController@delete', 'method' => 'PATCH')); ?>

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
<!-- end of plugin scripts -->

<!-- global scripts animation-->
<script type="text/javascript" src="vendors/snabbt/js/snabbt.min.js"></script>
<script type="text/javascript" src="vendors/wow/js/wow.min.js"></script>
<!-- end of plugin scripts -->
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
                url: "/inspectionchecklist/"+id+"/edit",
                dataType: "JSON",
                success:function(data){
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
<script> 
$(document).ready(function () {
    var counter = 0;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";
        cols += '<td> </td>';
        cols += '<td><input type="text" class="form-control" name="item" placeholder="Item"' + counter + '"/></td>';
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>