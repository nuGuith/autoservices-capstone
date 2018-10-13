@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','Job Title') <!-- Page Title -->
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

    <link type="text/css" rel="stylesheet" href="css/pages/portlet.css"/>
    <!-- <link type="text/css" rel="stylesheet" href="css/pages/advanced_components.css"/> -->

        <!-- CONTENT -->
        <div id="content" class="bg-container">

            <header class="head">
                <div class="main-bar">
                    <div class="row" style = "height: 47px;">
                    <div class="col-6">
                        <h4 class="m-t-15">
                            <i class="fa fa-users"></i>
                            Job Title
                        </h4>
                    </div>

                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right">
                            <li class="breadcrumb-item " >
                                <a href="#">
                                    <i class="fa fa-users" data-pack="default" data-tags=""></i>
                                    Personnel
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="/jobdescription">
                                    Job Title
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
                                        &nbsp;Add Job Title
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

           
                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 55%;"><b>Job Title</b></th>
                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1"><b>Actions</b></th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($view as $jd)
                    <tr role="row" class="even">

                        
                        <td class="center" >
                          {{$jd->JobDescription}}
                        </td>
                        <td class = "examples transitions">
                            <!--EDIT BUTTON-->
                            <button name = "{{$jd->JobDescriptionID}}" onclick="ret(this.name);" class="btn btn-success hvr-float-shadow adv_cust_mod_btn tipso_bounceIn" data-background="#3CB371" data-color="white" data-tipso="Edit" data-toggle="modal" data-href="#responsive" href="#editModal"><i class="fa fa-pencil text-white"></i>
                            </button>


                            <!--DELETE BUTTON-->
                           <!--  <button name = '{{$jd->JobDescriptionID}}' onclick="del(this.name);" class="btn btn-danger hvr-float-shadow warning confirm tipso_bounceIn" data-toggle="modal" data-href="#responsive" href="#deleteModal" data-background="#FA8072" data-color="white" data-tipso="Delete"><i class="fa fa-trash text-white"></i>
                            </button> -->

                     
                            
                            <!--DELETE BUTTON-->
                            <button  name = '{{$jd->JobDescriptionID}}' onclick="del(this.name);" class="btn btn-danger hvr-float-shadow  tipso_bounceIn" data-toggle="modal" data-href="#responsive" href="#deleteModal" data-background="#FA8072" data-color="white" data-tipso="Delete"><i class="fa fa-trash text-white"></i>
                            </button>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- END EXAMPLE TABLE PORTLET-->




    <!-- ADD MODAL -->
    <div class="modal fade in " id="addModal" tabindex="-2" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <form  id="addForms">
                        <div class="modal-content">
                            <div class="modal-header bg-info">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-plus"></i>
                                            &nbsp;Add Job Title</h4>
                            </div>
                            <div class="modal-body"  style="padding-left: 45px;">
                            

                                        <div class="form-group row m-t-10">
                                            <div class="col-md-11">
                                               <h5>Job Title: <span style="color: red">*</span></h5>
                                                  <input type="hidden" id="token" value="{{ csrf_token() }}">
                                                <input id="jobtitle" name="jobtitle" type="text" placeholder="Job Title"class="form-control m-t-10">
                                          </div>
                                        </div>
                                    </div>
                                    <br>

                            <!--Button: Close and Save Changes -->
                            <div class="modal-footer">
                                <div class="examples transitions m-t-5">
                                    <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                                </div>
                                <div class="examples transitions m-t-5">
                                    <button type="submit" id="addform" class="btn btn-success  source success_clr m-l-10 hvr-float-shadow adv_cust_mod_btn" data-dismiss="modal"><i class="fa fa-save text-white"></i>&nbsp; Save
                                    </button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            <!--END OF ADD MODAL -->



            <!-- EDIT MODAL -->
    <div class="modal fade in " id="editModal" tabindex="-2" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <form id="editForms">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-pencil"></i>
                                            &nbsp;Edit Job Title</h4>
                            </div>
                            <div class="modal-body"  style="padding-left: 45px;">
                            

                                        <div class="form-group row m-t-10">
                                            <div class="col-md-11">
                                               <h5>Job Title: <span style="color: red">*</span></h5>
                                                <input id = 'eid' hidden>
                                                <input id="ejobtitle" name="jobtitles" type="text" placeholder="Job Title"class="form-control m-t-10">
                                          </div>
                                        </div>
                                    </div>
                                    <br>

                            <!--Button: Close and Save Changes -->
                            <div class="modal-footer">
                                <div class="examples transitions m-t-5">
                                    <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                                </div>
                                <div class="examples transitions m-t-5">
                                    <button type="submit" id="editform" class="btn btn-success  source success_clr m-l-10 hvr-float-shadow adv_cust_mod_btn" data-dismiss="modal"><i class="fa fa-save text-white"></i>&nbsp; Save Changes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            <!--END OF EDIT MODAL -->


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


<!--functions-->
<script>

$("#addform").on("click", function () {

  var jd =  $('#jobtitle').val();

  $.ajax({
    type:"POST",
    url:"/addJD",
    data:
    {
      title:jd,
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

function ret(id)
{
  $.ajax({
    type:"GET",
    url:"/RetrieveJD",
    data:
    {
      id:id,
    },
    success: function(data){

      document.getElementById('ejobtitle').value = data['jd'][0]['JobDescription'];
      document.getElementById('eid').value = data['jd'][0]['JobDescriptionID'];




              },
                    error: function(xhr)
                  {
                    alert("Error!");
                  }

                });
}

$("#editform").on("click", function () {

  var ejd =  $('#ejobtitle').val();
  var eid =   $('#eid').val();


  $.ajax({
    type:"POST",
    url:"/editJD",
    data:
    {
      jd:ejd,
      id:eid,
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



 function del(id){
      document.getElementById('deleteId').value = id;

    }

    $("#delete").on("click", function() {

      var del = $('#deleteId').val();

      $.ajax({
        type:"POST",
        url:"/delJD",
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

</script>

<!--functions-->

<script type="text/javascript" src="vendors/jquery-validation/js/jquery.validate.js"></script>
<script type="text/javascript" src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>



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
            jobtitle: {
                message: 'The job title is not valid',
                validators: {
                    notEmpty: {
                        message: 'The job title is required and cannot be empty. '
                    },
                    
                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'The job title only accept alphanumeric values. '
                    },
                    regexp: {
                        regexp: /^[^~`!$@#*_={}()|\;<>,.?%^&]+/,
                        message: 'The job title only accept alphanumeric values. '
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
            jobtitles: {
                message: 'The job title is not valid',
                validators: {
                    notEmpty: {
                        message: 'The job title is required and cannot be empty. '
                    },
                    
                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'The job title only accept alphanumeric values. '
                    },
                    regexp: {
                        regexp: /^[^~`!$@#*_={}()|\;<>,.?%^&]+/,
                        message: 'The job title only accept alphanumeric values. '
                    },
                }
            },
        }
    });


});

</script>



@stop
