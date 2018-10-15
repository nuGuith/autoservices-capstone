@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','Settings') <!-- Page Title -->
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
    <link type="text/css" rel="stylesheet" href="vendors/jasny-bootstrap/css/jasny-bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css"/>


        <!-- CONTENT -->
        <div id="content" class="bg-container">

            <header class="head">
                <div class="main-bar">
                    <div class="row" style = "height: 47px;">
                    <div class="col-6">
                        <h4 class="m-t-15">
                            <i class="fa fa-gear"></i>
                            Settings
                        </h4>
                    </div>

                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right   ">
                            <li class="breadcrumb-item " >
                                <a href="/utilities">
                                    <i class="fa fa-gear" data-pack="default" data-tags=""></i>
                                    Settings
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

                                    <h4 class="m-t-5">Company Information</h4>
                                </div>
                             </div>


                <div class="card-block m-t-20" id="user_body">
                    <div class="col-md-12">
                        <h5><b>Company Logo:</b></h5>
                         @foreach($view as $view)
                        <div class="row">
                             <div class="col-md-6 col-lg-3 m-t-10">
                                <img src = "img/{{$view->image}}" style="width:230px;height:180px">
                             </div>

                             <div class="col-md-8 m-t-25 m-l-20">
                                <h5><b>Company Name:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$view->CompanyName}}</h5>
                                <h5 class="m-t-15"><b>Company Address:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$view->CompleteAddress}}</h5>
                                <h5 class="m-t-15"><b>Company Contact No:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$view->ContactNo}}</h5>
                                <h5 class="m-t-15"><b>Company Email Address:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$view->EmailAddress}}</h5>

                                <button name="{{{$view->SettingID}}}" onclick="ret(this.name)" class="btn btn-success hvr-float-shadow adv_cust_mod_btn tipso_bounceIn m-t-25" data-background="#3CB371" data-color="white" data-tipso="Edit" data-toggle="modal" data-href="#responsive" href="#editModal"><i class="fa fa-pencil text-white"></i>
                            </button>

                             </div>
                        </div>

                        @endforeach
                    </div>
                <div>
        </div>
    </div>
                <div class="card-footer bg-black">
            </div>
                   
    <!-- END EXAMPLE TABLE PORTLET-->



     <input type="hidden" id="__token" value="{{ csrf_token() }}">
                          


    <!-- EDIT MODAL -->

    <form id="editper" enctype="multipart/form-data">
    <div class="modal fade in " id="editModal" tabindex="-2" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-plus"></i>
                                            &nbsp;Edit Personnel</h4>
                            </div>


                    <div class="modal-body"  style="padding-left: 45px; padding-right: 45px;">
                        <h4>Personnel Information:</h4>
                        <div class ="col-md-12">

                            <div class="row m-t-10">

                                    <div class="col-md-5">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new" style ="background-color: #d3d3d3">
                                                <img src = "img/{{$view->image}}" style="width:240px;height:180px">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists img-thumbnail">

                                            </div>
                                            <div class="form-group m-t-20 text-center">
                                                <span class="btn btn-primary btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input id="eimage" type="file" name="eimage" required></span>
                                                <a href="#" class="btn btn-warning fileinput-exists"
                                                           data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                
                                </div>


                                <div class="col-md-7">
                                    <div class="form-group">
                                        <h5>First Name: <span style="color: red">*</span></h5>
                                          <input id="eid" hidden>
                                          <input id="efname" name="fname" type="text" placeholder="First Name"class="form-control m-t-10">
                                    </div>

                                    <div class="form-group">
                                        <h5>Address: <span style="color: red">*</span></h5>
                                            <input id="eaddress" name="address" type="text" placeholder="Address" class="form-control m-t-10">
                                    </div>


                                    <div class="form-group">
                                        <h5>Contact No.: <span style="color: red">*</span></h5>
                                            <input id="ephones" name="contact" placeholder="(999) 999-9999" class="form-control m-t-10" type="number" maxsize="11" minsize="11">
                                    </div>

                                    <div class="form-group">
                                        <h5>Email Address: <span style="color: red">*</span></h5>
                                        <input id="eemail" name="email" type="email" placeholder="john@gmail.com" class="date_mask form-control m-t-10" data-inputmask="'alias': 'email'">
                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                     <br>

                            <!--Button: Close and Save Changes -->
                            <div class="modal-footer">
                              <div class="form-group examples transitions m-t-5">
                                <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                              </div>
                                <div class="form-group examples transitions m-t-5">
                                    <input type="hidden" id="token" value="{{ csrf_token() }}">
                                    <button type="submit" id='editform' class="btn btn-success  source success_clr m-l-10 hvr-float-shadow adv_cust_mod_btn" data-dismiss="modal"><i class="fa fa-save text-white"></i>&nbsp; Save Changes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!--END OF EDIT MODAL -->
            </form>


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


     function ret(id){

             $.ajax({
               type:"GET",
               url:"/retutilities",
               data:
               {
                 id:id,
               },
               success: function(data){
                 $(".chzn-select").chosen();
                 jtitle = [];
                 jpid = [];
                 document.getElementById('eid').value = data['per'][0]['SettingID'];
                 document.getElementById('efname').value = data['per'][0]['CompanyName'];
                 document.getElementById('eaddress').value = data['per'][0]['CompleteAddress'];
                 document.getElementById('ephones').value = data['per'][0]['ContactNo'];
                 document.getElementById('eemail').value = data['per'][0]['EmailAddress'];
                 document.getElementById('eimage').value = data['per'][0]['image'];

                         },
                               error: function(xhr)
                             {
                               alert("Error!");
                             }

                           });
     }

     $("#editform").on("click", function () {

    var form_data = $('#editper').serialize();
       var epic = $('#eimage').val();
       var efname = $('#efname').val();
       var eadd = $('#eaddress').val();
       var ephones = $('#ephones').val();
       var eemail = $('#eemail').val();
       var eid = $('#eid').val();

       // alert(s);

       $.ajax({
         type:"POST",
         url:"/editutilities",
         data:
         {
           id:eid,
           pic:epic,
           fname:efname,
           add:eadd,
           num:ephones,
           email:eemail,


           '_token': $('#token').val()
         },
         success: function(data){
                          var pic = $('#eimage').val();

       if(pic==null||pic==""){
             window.location.href = "utilities"
       }
       else{
                         var formd = new FormData($('#editper')[0]);
                    var file = document.getElementById("eimage").files[0];
                    formd.append("pic", file);
                    formd.append("_token", $('#__token').val());
                    $.ajax({
                        type: "POST",
                        url: '/picutilities',
                        data: formd,
                        contentType: false,
                        processData: false,
                        success: function (response) {
                            // alert("succ")
                            window.location.href = "utilities";
                        },
                        error:function(xhr){

                            // window.location.href = "driver_info";
                            // alert("errorr");
                        }

                    });
             }

                   },
                         error: function(xhr)
                       {
                         alert("Error!");
                       }

                     });



     });

  




</script>

<script type="text/javascript" src="js/pluginjs/jasny-bootstrap.js"></script>
<script type="text/javascript" src="vendors/holderjs/js/holder.js"></script>
<script type="text/javascript" src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>


<!-- global scripts modals-->
<script type="text/javascript" src="js/components.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/pages/modals.js"></script>
<!--End of global scripts-->

<!-- plugin scripts -->
<!--end of plugin scripts-->



<script type="text/javascript" src="vendors/jquery-validation/js/jquery.validate.js"></script>
<script type="text/javascript" src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>




<script type="text/javascript">
   $(document).ready(function() {
    $('#editper').bootstrapValidator({
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
             eimage: {
                validators: {
                    file: {
                        // extension: 'jpeg,png',
                        // type: 'image/jpeg,image/png',
                        // maxSize: 2048 * 1024,
                        // message: 'The selected file is not valid'
                    }
                },
                 notEmpty: {
                        message: ' required and cannot be empty. '
                    },
            },
            'jobs[]': {
                validators: {
                    choice: {
                        min: 1,
                        // max: 4,
                        message: 'Please choose %s or more job title, '
                    },

                    notEmpty: {
                        message: ' required and cannot be empty. '
                    },
                }
            },
            fname: {
                message: 'The first name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The first name is required and cannot be empty. '
                    },

                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'The first name only accept alphanumeric values. '
                    },
                    regexp: {
                        regexp: /^[^~`!$@#*_={}()|\;<>,.?%^&]+/,
                        message: 'The first name only accept alphanumeric values. '
                    },
                }
            },
            mname: {
                message: 'The middle name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The middle name is required and cannot be empty. '
                    },

                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'The middle name only accept alphanumeric values. '
                    },
                    regexp: {
                        regexp: /^[^~`!$@#*_={}()|\;<>,.?%^&]+/,
                        message: 'The middle name only accept alphanumeric values. '
                    },
                }
            },
            sname: {
                message: 'The surname is not valid',
                validators: {
                    notEmpty: {
                        message: 'The surname is required and cannot be empty. '
                    },

                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'The surname only accept alphanumeric values. '
                    },
                    regexp: {
                        regexp: /^[^~`!$@#*_={}()|\;<>,.?%^&]+/,
                        message: 'The surname only accept of alphanumeric values. '
                    },
                }
            },
            address: {
                message: 'The address is not valid',
                validators: {
                    notEmpty: {
                        message: 'The address is required and cannot be empty. '
                    },

                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'The address only accept alphanumeric values. '
                    },
                    regexp: {
                        regexp: /^[^~`!$@*_={}()|\;<>,.?%^&]+/,
                        message: 'The address only accept alphanumeric values. '
                    },
                }
            },
            dob: {
                message: 'The birth date is not valid',
                validators: {
                    notEmpty: {
                        message: 'The birth date is required and cannot be empty. '
                    },
                    date: {
                        format: 'mm/dd/yyyy',
                        message: 'The birth date is not valid'
                    }
                }
            },
            contact: {
                message: 'The contact no. is not valid',
                validators: {
                    notEmpty: {
                        message: 'The contact no. is required and cannot be empty. '
                    },
                    regexp: {
                        regexp: /^(0|[1-9]\d*)(\.\d+)?$/,
                        message: 'The contact only accept numeric values. '
                    },


                }
            },
            email: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The category name is required and cannot be empty. '
                    },

                }
            },
        }
    });





});

</script>

@stop
