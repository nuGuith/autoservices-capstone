 <!-- Include MAster PAge -->
<?php $__env->startSection('Title','Discount'); ?> <!-- Page Title -->
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
                        <ol  class="breadcrumb float-right">
                            <li class="breadcrumb-item " >
                                <a href="/discount">
                                    <i class="fa fa-ticket" data-pack="default" data-tags=""></i>
                                    Discount
                                </a>
                            </li>
                            <!-- <li class="active breadcrumb-item">Calendar</li> -->
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
                                        &nbsp;Add Discount
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

                                        <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 40%;"><b>Discount</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 40%;"><b>Rate</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1"><b>Actions</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php $__currentLoopData = $view; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $disc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr role="row" class="even">

                                        <td>
                                         <?php echo e($disc->DiscountName); ?>

                                        </td>
                                        <td>
                                          <?php echo e($disc->DiscountRate); ?>%
                                        </td>
                                        <td>
                                             <!--EDIT BUTTON-->
                                            <button name = '<?php echo e($disc->DiscountID); ?>' class="btn btn-success hvr-float-shadow adv_cust_mod_btn tipso_bounceIn" onclick="ret(this.name);" data-background="#3CB371" data-color="white" data-tipso="Edit" data-toggle="modal" data-href="#responsive" href="#editModal"><i class="fa fa-pencil text-white"></i>
                                            </button>

                                            <!--DELETE BUTTON-->
                                            <button name = '<?php echo e($disc->DiscountID); ?>' class="btn btn-danger hvr-float-shadow warning confirm tipso_bounceIn" onclick="del(this.name);" data-toggle="modal" data-href="#responsive" href="#deleteModal" data-background="#FA8072" data-color="white" data-tipso="Delete"><i class="fa fa-trash text-white"></i>
                                            </button>

                                        </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE -->

                <!--ADD MODAL -->
                 <div class="modal fade in " id="addModal" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-info">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-plus"></i>
                                            &nbsp;&nbsp;Add Discount</h4>
                            </div>
                            <div class="modal-body" style="padding-left: 55px;">


                                <!--Textfield: Discount -->
                                <div class="row m-t-5">
                                    <div class="col-md-11 ">
                                        <h5>Discount Name: <span style="color: red">*</span></h5>
                                            <p class ="m-t-10">
                                                <input id="adddiscount" name="discount" type="text" placeholder="Discount Name"class="form-control">
                                            </p>
                                    </div>
                                </div>

                                <!--Textfield: Rate -->
                                <div class="row m-t-5">
                                    <div class="col-md-11 ">
                                        <h5>Rate: <span style="color: red">*</span></h5>
                                            <p class =" input-group">
                                                <input class="form-control m-t-10" type="text" id="addpercent" data-mask placeholder="%">
                                                <span class="input-group-addon m-t-10">%</span>
                                            </p>
                                    </div>
                                </div>

                            </div>


                            <!--Button: Close, Save -->
                            <div class="modal-footer">
                              <div class="examples transitions m-t-5">
                                <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                              </div>
                                <div class="examples transitions m-t-5">
                                  <input type="hidden" id="token" value="<?php echo e(csrf_token()); ?>">
                                    <button id='addform'class="btn btn-success  source success_clr m-l-10 hvr-float-shadow adv_cust_mod_btn" data-dismiss="modal"><i class="fa fa-save text-white"></i>&nbsp; Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END OF ADD MODAL-->



                <!--EDIT MODAL -->
                 <div class="modal fade in " id="editModal" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-pencil"></i>
                                            &nbsp;&nbsp;Edit Discount</h4>
                            </div>
                            <div class="modal-body" style="padding-left: 55px;">


                                <!--Textfield: Discount -->
                                <div class="row m-t-5">
                                    <div class="col-md-11 ">
                                        <h5>Discount Name: <span style="color: red">*</span></h5>
                                            <p class ="m-t-10">
                                                <input id="ediscount" name="discount" type="text" placeholder="Discount Name"class="form-control">
                                                <input id = 'did' hidden>
                                            </p>
                                    </div>
                                </div>

                                <!--Textfield: Rate -->
                                <div class="row m-t-5">
                                    <div class="col-md-11 ">
                                        <h5>Rate: <span style="color: red">*</span></h5>
                                            <p class =" input-group">
                                                <input class="form-control m-t-10" type="text" id="epercent" data-mask placeholder="%">
                                                <span class="input-group-addon m-t-10">%</span>
                                            </p>
                                    </div>
                                </div>

                            </div>


                            <!--Button: Close, Save -->
                            <div class="modal-footer">
                              <div class="examples transitions m-t-5">
                                <button  type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                              </div>
                                <div class="examples transitions m-t-5">
                                    <button id="editform" class="btn btn-success  source success_clr m-l-10 hvr-float-shadow adv_cust_mod_btn" data-dismiss="modal"><i class="fa fa-save text-white"></i>&nbsp; Save Changes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END OF EDIT MODAL-->


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
                                    <input id="deleteId" name="deleteId" type="hidden">
                                </div>
                            </div>




                            <div class="modal-footer m-t-10">
                                <div class="examples transitions m-t-5">
                                    <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Cancel</button>
                                </div>
                                <div class="examples transitions m-t-5">
                                    <button id = "delete" class ='btn btn-danger source confirm m-l-10 adv_cust_mod_btn' data-dismiss='modal'><i class="fa fa-trash"></i>&nbsp;OK </button>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>





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
<script type="text/javascript" src="vendors/sweetalert/js/sweetalert2.min.js"></script>
<script type="text/javascript" src="js/pages/sweet_alerts.js"></script>
<!-- end of plugin scripts -->

<!-- global scripts animation-->
<script type="text/javascript" src="vendors/snabbt/js/snabbt.min.js"></script>
<script type="text/javascript" src="vendors/wow/js/wow.min.js"></script>
<!-- end of plugin scripts -->
<script>
    new WOW().init();

    $("#addform").on("click", function () {

      var discount =  $('#adddiscount').val();
      var percent = $('#addpercent').val();

      $.ajax({
        type:"POST",
        url:"/adddiscount",
        data:
        {
          dis:discount,
          per:percent,
          '_token': $('#token').val()
        },
        success: function(data){
                        location.reload();

                  },
                        error: function(xhr)
                      {
                        alert("Error!");
                      }

                    });



    });

    function ret(id){


            $.ajax({
              type:"GET",
              url:"/RetrieveDiscount",
              data:
              {
                id:id,
              },
              success: function(data){

                document.getElementById('ediscount').value = data['ret'][0]['DiscountName'];
                document.getElementById('epercent').value = data['ret'][0]['DiscountRate'];
                  document.getElementById('did').value = data['ret'][0]['DiscountID'];



                        },
                              error: function(xhr)
                            {
                              alert("Error!");
                            }

                          });



    }

   function del(id){
      document.getElementById('deleteId').value = id;

    }

    $("#delete").on("click", function() {

      var del = $('#deleteId').val();

      $.ajax({
        type:"POST",
        url:"/deldiscount",
        data:
        {
          id:del,
          '_token': $('#token').val()

        },
        success: function(data){
                        location.reload();

                  },
                        error: function(xhr)
                      {
                        alert("Error!");
                      }

                    });

    });


        $("#editform").on("click", function () {

          var edisc =  $('#ediscount').val();
          var eper = $('#epercent').val();
          var eid = $('#did').val();

          $.ajax({
            type:"POST",
            url:"/editdiscount",
            data:
            {
              id:eid,
              edis:edisc,
              eper:eper,
              '_token': $('#token').val()

            },
            success: function(data){
                            location.reload();

                      },
                            error: function(xhr)
                          {
                            alert("Error!");
                          }

                        });



        });




</script>



<!-- global scripts modals-->
<script type="text/javascript" src="js/pages/modals.js"></script>
<!--End of global scripts-->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>