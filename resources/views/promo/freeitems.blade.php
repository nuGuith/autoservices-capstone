@extends('layout.master') <!-- Include Master Page -->
@section('Title','Free Items') <!-- Page Title -->
@section('content')

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

    <link type="text/css" rel="stylesheet" href="vendors/jquery-validation-engine/css/validationEngine.jquery.css" />
    <link type="text/css" rel="stylesheet" href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css" />
    <link type="text/css" rel="stylesheet" href="css/pages/portlet.css"/>
    <!-- <link type="text/css" rel="stylesheet" href="css/pages/advanced_components.css"/> -->

        <!-- CONTENT -->
        <div id="content" class="bg-container">

            <header class="head">
                <div class="main-bar">
                    <div class="row" style = "height: 47px;">
                    <div class="col-6">
                        <h4 class="m-t-15">
                            <i class="fa fa-bookmark"></i>
                            Free Items
                        </h4>
                    </div>

                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right   ">
                            <li class="breadcrumb-item " >
                                <a href="/freeitems">
                                    <i class="fa fa-bookmark" data-pack="default" data-tags=""></i>
                                    Promo
                                </a>
                            </li>
                            <li class="active breadcrumb-item">Free Items</li>
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
                                            &nbsp; Free Items                                  
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

                        <!--Table: Service Price-->
                        <table class="table  table-bordered table-hover table-advance dataTable no-footer" id="editable_table" role="grid">
                            <thead>
                                <tr role="row">
                                    
                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 40%;"><b>Free Items</b></th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 40%;"><b>Description</b></th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1"><b>Actions</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($view as $item)
                                <tr role="row" class="even">
                                    <td>
                                        {{$item->ItemName}}
                                    </td>
                                    <td class="center">
                                        {{$item->Description}}
                                    </td>
                                    <td class="examples transitions">

                                        <!--EDIT BUTTON-->
                                            <button name = '{{$item->FreeItemsID}}' class="btn btn-success hvr-float-shadow adv_cust_mod_btn tipso_bounceIn" onclick="ret(this.name);" data-background="#3CB371" data-color="white" data-tipso="Edit" data-toggle="modal" data-href="#responsive" href="#editModal"><i class="fa fa-pencil text-white"></i>
                                            </button>
                                        
                                        <!--DELETE BUTTON-->
                                        <button name = '{{$item->FreeItemsID}}' class="btn btn-danger hvr-float-shadow tipso_bounceIn" onclick="del(this.name);" data-toggle="modal" data-href="#responsive" href="#deleteModal" data-background="#FA8072" data-color="white" data-tipso="Delete"><i class="fa fa-trash text-white"></i>
                                        </button>
                                       
                                    </td>
                                </tr>
                                @endforeach

                               
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->



                <!--ADD MODAL -->
                 <div class="modal fade in " id="addModal" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <form id="addForms">
                        <div class="modal-content">
                            <div class="modal-header bg-info">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-plus"></i>
                                            &nbsp;&nbsp;Add Free Items</h4>
                            </div>
                            <div class="modal-body" style="padding-left: 55px;">
                                
                                                         
                                <!--Textfield: Free Items -->
                                <div class="form-group row m-t-5">  
                                    <div class="col-md-11 ">
                                        <h5>Free Item: <span style="color: red">*</span></h5>
                                                <input id="afreeitem" name="freeitem" type="text" placeholder="Item" class="form-control m-t-10" >
                                    </div>
                                 </div>

                                 <!--Textfield: Free Items -->
                                <div class="form-group row m-t-5">  
                                    <div class="col-md-11 ">
                                        <h5>Description: <span style="color: red">*</span></h5>
                                                <input id="adescription" name="description" type="text" placeholder="Description" class="form-control m-t-10">
                                    </div>
                                 </div>
                                 
                            </div>


                            <!--Button: Close, Save -->
                            <div class="modal-footer">
                              <div class="examples transitions m-t-5">
                                <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                              </div>
                                <div class="examples transitions m-t-5">
                                  <input type="hidden" id="token" value="{{ csrf_token() }}">
                                    <button  type="submit" id='addform' class="btn btn-success  source success_clr m-l-10 hvr-float-shadow adv_cust_mod_btn" data-dismiss="modal"><i class="fa fa-save text-white"></i>&nbsp; Save
                                    </button>
                                </div>
                            </div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- END OF ADD MODAL-->


            <!--EDIT MODAL -->
            <div class="modal fade in " id="editModal" tabindex="-1" role="dialog" aria-hidden="false">
                
                    <div class="modal-dialog modal-md">
                        <form id="editForms">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-pencil"></i>
                                            &nbsp;&nbsp;Edit Free Item</h4>                  
                            </div>


                        <div class="modal-body" style="padding-left: 55px;">
                            

                                 <!--Textfield: Free Items -->
                                <div class="form-group row m-t-5">  
                                    <div class="col-md-11 ">
                                        <h5>Free Item: <span style="color: red">*</span></h5>
                                                <input id="efreeitem" name="freeitem" type="text" placeholder="Item"class="form-control m-t-10">
                                    </div>
                                 </div>

                                 <!--Textfield: Free Items -->
                                <div class="form-group row m-t-5">  
                                    <div class="col-md-11 ">
                                        <h5>Description: <span style="color: red">*</span></h5>
                                                <input id="edescription" name="description" type="text" placeholder="Description"class="form-control m-t-10">
                                                <input id = 'did' hidden>
                                    </div>
                                 </div>
                                 
                            </div>

                            <!--Button: Close, Save Changes -->
                            <div class="modal-footer">
                              <div class="examples transitions m-t-5">
                                <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                              </div>
                                <div class="examples transitions m-t-5">
                                    <button type="submit" id="editform" class="btn btn-success  source success_clr m-l-10 hvr-float-shadow adv_cust_mod_btn" data-dismiss="modal"><i class="fa fa-save text-white"></i>&nbsp; Save Changes
                                    </button>
                                </div>
                        </form>
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
</script>



<!-- global scripts modals-->
<script type="text/javascript" src="js/pages/modals.js"></script>
<!--End of global scripts-->
<script>
new WOW().init();

    $("#addform").on("click", function () {

      var freeitem =  $('#afreeitem').val();
      var description = $('#adescription').val();

      $.ajax({
        type:"POST",
        url:"/addfreeitem",
        data:
        {
          item:freeitem,
          desc:description,
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
              url:"/RetrieveFreeItem",
              data:
              {
                id:id,
              },
              success: function(data){

                document.getElementById('efreeitem').value = data['ret'][0]['ItemName'];
                document.getElementById('edescription').value = data['ret'][0]['Description'];
                document.getElementById('did').value = data['ret'][0]['FreeItemsID'];



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
        url:"/delfreeitem",
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

          var eitem =  $('#efreeitem').val();
          var edesc = $('#edescription').val();
          var eid = $('#did').val();

          $.ajax({
            type:"POST",
            url:"/editfreeitem",
            data:
            {
              id:eid,
              eitems:eitem,
              edesc:edesc,
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


<script type="text/javascript" src="vendors/jquery-validation/js/jquery.validate.js"></script>
<script type="text/javascript" src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
    $('#chosenForm')
        .find('[name="colors"]')
            .chosen()
            // Revalidate the color when it is changed
            .change(function(e) {
                $('#chosenForm').bootstrapValidator('revalidateField', 'colors');
            })
            .end()
        .bootstrapValidator({
            excluded: ':disabled',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                colors: {
                    validators: {
                        callback: {
                            message: 'Please choose 2-4 color you like most',
                            callback: function(value, validator) {
                                // Get the selected options
                                var options = validator.getFieldElements('colors').val();
                                return (options != null && options.length >= 2 && options.length <= 4);
                            }
                        }
                    }
                }
            }
        });
});
</script>



<script type="text/javascript">
   $(document).ready(function() {
    $('#addForms').bootstrapValidator({
        message: 'This value is not valid',
        excluded: [':disabled', ':hidden', ':not(:visible)'],
        feedbackIcons: {
            required: 'fa fa-asterisk',
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh',
            },
        trigger: 'blur',
        submitButtons: 'button[type="submit"]',      
        fields: {
            feedbackIcons: 'true',
            freeitem: {
                message: 'The free item is not valid',
                validators: {
                    notEmpty: {
                        message: 'The free item is required and cannot be empty. '
                    },
                    
                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'The free item only accept alphanumeric values. '
                    },
                    regexp: {
                        regexp: /^[^~`!$@#*_={}()|\;<>,.?%^&]+/,
                        message: 'The free item only accept alphanumeric values. '
                    },
                }
            },
            description: {
                message: 'The description is not valid',
                validators: {
                    notEmpty: {
                        message: 'The description is required and cannot be empty. '
                    },
                    
                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'The description only accept alphanumeric values. '
                    },
                    regexp: {
                        regexp: /^[^~`!$@#*_={}()|\;<>,.?%^&]+/,
                        message: 'The description only accept alphanumeric values. '
                    },
                }
            },
        }
    });


});
</script>

<script type="text/javascript">
   $(document).ready(function() {
    $('#editForms').bootstrapValidator({
        message: 'This value is not valid',
        excluded: [':disabled', ':hidden', ':not(:visible)'],
        feedbackIcons: {
            required: 'fa fa-asterisk',
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh',
            },
        trigger: 'blur',
        submitButtons: 'button[type="submit"]',      
        fields: {
            feedbackIcons: 'true',
            freeitem: {
                message: 'The free item is not valid',
                validators: {
                    notEmpty: {
                        message: 'The free item is required and cannot be empty. '
                    },
                    
                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'The free item only accept alphanumeric values. '
                    },
                    regexp: {
                        regexp: /^[^~`!$@#*_={}()|\;<>,.?%^&]+/,
                        message: 'The free item only accept alphanumeric values. '
                    },
                }
            },
            description: {
                message: 'The description is not valid',
                validators: {
                    notEmpty: {
                        message: 'The description is required and cannot be empty. '
                    },
                    
                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'The description only accept alphanumeric values. '
                    },
                    regexp: {
                        regexp: /^[^~`!$@#*_={}()|\;<>,.?%^&]+/,
                        message: 'The description only accept alphanumeric values. '
                    },
                }
            },
        }
    });


});
</script>
@stop