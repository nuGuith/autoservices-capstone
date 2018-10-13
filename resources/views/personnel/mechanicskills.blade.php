@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','Mechanic Skills') <!-- Page Title -->
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
                            Mechanic Skills
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
                                <a href="/mechanicskills">
                                    Mechanic Skills
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
                                            &nbsp;  Add Mechanic Skills
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

                        <!--Table: Service Product-->
                        <table class="table table-bordered table-hover table-advance dataTable no-footer" id="editable_table" role="grid">
                            <thead>
                                <tr role="row">

                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 35%;"><b>Mechanic Name </b></th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 35%;"><b>Skills </b></th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1"><b>Actions</b></th>
                                </tr>
                            </thead>
                            <tbody>

                              @foreach($personnel as $pj)
                                <tr role="row" class="even">
                                    <td>
                                        {{$pj->FirstName}} {{$pj->MiddleName}} {{$pj->LastName}}
                                    </td>
                                    <td class="center">
                                        <ul style="padding-left: 1.7em;">


                                          @foreach($perskill as $ps)

                                          @if($ps->PersonnelID == $pj->PersonnelID)

                                          <li>{{$ps->Skill}}</li>

                                          @endif

                                          @endforeach

                                        </ul>
                                    </td>
                                    <td class="examples transitions">

                                        <!--EDIT BUTTON-->
                                        <button name = '{{$pj->PersonnelID}}' onclick='edit(this.name)' class="btn btn-success hvr-float-shadow adv_cust_mod_btn tipso_bounceIn" data-background="#3CB371" data-color="white" data-tipso="Edit" data-toggle="modal" data-href="#responsive" href="#editModal"><i class="fa fa-pencil text-white"></i>
                                        </button>


                                        <!--DELETE BUTTON-->
                                        <button name = '{{$pj->PersonnelID}}' onclick='deletepj(this.name)'  class="btn btn-danger hvr-float-shadow tipso_bounceIn" data-background="#FA8072" data-color="white" data-tipso="Delete" data-toggle="modal" data-href="#responsive" href="#deleteModal"><i class="fa fa-trash text-white"></i>
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
                        <div class="modal-content">
                            <div class="modal-header bg-info">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-plus"></i>
                                            &nbsp;&nbsp;Add Mechanic Skills</h4>
                            </div>
                            <div class="modal-body">
                                <form id="addForms">
                                <div class="row m-r-10">

                                    <!--Search Select: Mechanic Name -->
                                    <div class="col-md-11 m-t-10 m-l-20">
                                        <h5>Mechanic Name: <span style="color: red">*</span></h5>
                                        <div class ="m-t-10">
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control chzn-select"  id='mechanic' tabindex="2" name="mechanic">
                                                <option disabled selected>Choose Mechanic</option>
                                                  @foreach($per as $per)
                                                <option value="{{$per->PersonnelID}}">{{$per->FirstName}} {{$per->MiddleName}} {{$per->LastName}}</option>
                                                  @endforeach
                                            </select>
                                            <span class="form-control-feedback bv-no-label" aria-hidden="true" data-bv-icon-for="mechanic"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="row m-r-10">
                                    <!--Search Select: Mechanic Skills -->
                                    <div class="col-md-11 m-t-10 m-l-20">
                                        <h5>Skills: <span style="color: red">*</span></h5>
                                        <div class ="m-t-10">
                                        <div class="form-group">
                                            <select class="form-control chzn-select" id="product" name="product"  tabindex="3" multiple="">
                                                    <option disabled>Choose Skills</option>
                                                    @foreach($skill as $askill)
                                                    <option value="{{$askill->SkillID}}">{{$askill->Skill}}</option>
                                                    @endforeach
                                                </select>
                                                <span class="form-control-feedback bv-no-label" aria-hidden="true" data-bv-icon-for="product"></span>
                                            </div>
                                        </div>
                                    </div>

                             </div>
                        </div>


                            <!--Button: Close and Save -->
                            <div class="modal-footer">
                              <div class="examples transitions m-t-5">
                                <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                              </div>
                                <div class="examples transitions m-t-5">
                                  <input type="hidden" id="token" value="{{ csrf_token() }}">
                                    <button type="submit" form="addForms" id="submitform"class="btn btn-success  source success_clr m-l-10 hvr-float-shadow adv_cust_mod_btn" data-dismiss="modal"><i class="fa fa-save text-white"></i>&nbsp; Save
                                    </button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                <!-- END OF ADD MODAL-->


                <!-- EDIT MODAL-->
                <div class="modal fade in " id="editModal" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-pencil"></i>
                                            &nbsp;&nbsp;Edit Mechanic Skills</h4>
                            </div>


                            <div class="modal-body">
                                <form id="editForms">
                                <div class="row">

                                    <!--Search Select: Mechanic Name -->
                                    <div class="col-md-11 m-t-10 m-l-20">
                                        <h5>Mechanic Name: <span style="color: red">*</span></h5>
                                        <div class ="m-t-10">
                                        </div>
                                        <div class="form-group">
                                            <select id='emechanic' name="emechanic" class="form-control  chzn-select" tabindex="2">
                                                <option disabled selected>Choose Mechanic</option>
                                                  @foreach($view as $eper)
                                                <option value="{{$eper->PersonnelID}}">{{$eper->FirstName}} {{$eper->MiddleName}} {{$eper->LastName}}</option>
                                                  @endforeach
                                            </select>
                                            <span class="form-control-feedback bv-no-label" aria-hidden="true" data-bv-icon-for="emechanic"></span>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="row">
                                    <!--Search Select: Mechanic Skills -->
                                    <div class="col-md-11 m-t-10 m-l-20">
                                        <h5>Skills: <span style="color: red">*</span></h5>
                                        <div class ="m-t-10">
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control chzn-select" id="eproduct" name="eproduct" tabindex="3" multiple="" onchange="eprod()">
                                                    <option disabled>Choose Skills</option>
                                                    @foreach($skill as $eskill)
                                                    <option value="{{$eskill->SkillID}}">{{$eskill->Skill}}</option>
                                                    @endforeach

                                                </select>
                                            <span class="form-control-feedback bv-no-label" aria-hidden="true" data-bv-icon-for="eproduct"></span>
                                        </div>
                                    </div>
                             </div>
                        </div>

                            <!--Button: Close and Save Cahnges -->
                            <div class="modal-footer">
                              <div class="examples transitions m-t-5">
                                <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                              </div>
                                <div class="examples transitions m-t-5">
                                    <button type="submit" form="editForms" id="editform" class="btn btn-success  source success_clr m-l-10 hvr-float-shadow adv_cust_mod_btn" data-dismiss="modal"><i class="fa fa-save text-white"></i>&nbsp; Save Changes
                                    </button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                <!-- END OF EDIT MODAL-->


                <!-- START OF DELETE MODAL -->
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
                                    <button id = "deletebutt" class ='btn btn-danger source confirm m-l-10 adv_cust_mod_btn' data-dismiss='modal'><i class="fa fa-trash"></i>&nbsp;OK </button>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--END OF DELETE MODAL -->



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


         $("#submitform").on("click", function () {

           var skill = $('#product').val();
           var emp =  $('#mechanic').val();


           $.ajax({
             type:"POST",
             url:"/addmskills",
             data:
             {
               emp:emp,
               skill:skill,
               '_token': $('#token').val()
             },
             success: function(data){
                             location.reload();

                       },
                             error: function(xhr)
                           {
                                // alert("Error!");
                             location.reload();

                           }

                         });



         });

         function edit(id){

           $.ajax({
             type:"GET",
             url:"/retmskils",
             data:
             {
               id:id
             },
             success: function(data){

               var arr = []
               sid = []
               prodcount = 0;



              $("#emechanic").val(data['type'][0]['PersonnelID']).trigger("chosen:updated");

              for(i=0;i<data.ps.length;i++)
              {
                arr.push(data['ps'][i]['SkillID'])
                sid.push(data['ps'][i]['PSID'])
                prodcount +=1;
              }

              $("#eproduct").val(arr).trigger("chosen:updated");

                       },
                             error: function(xhr)
                           {
                            // alert("Error!");
                             location.reload();

                           }

                        });
                      }

           $("#editform").on("click", function () {

             var eskill = $('#eproduct').val();
             var eemp =  $('#emechanic').val();
             // alert(eskill);


             $.ajax({
               type:"POST",
               url:"/editmskills",
               data:
               {
                 eid:sid,
                 eemp:eemp,
                 eskill:eskill,
                 parr:parr,
                 prodcount:prodcount,
                 darr:darr,
                 '_token': $('#token').val()
               },
               success: function(data){
                               location.reload();

                         },
                               error: function(xhr)
                             {
                                  // alert("Error!");
                               location.reload();

                             }

                           });



           });

           function deletepj(id){
             // alert(id)
             $('#deleteId').val(id);

           }


           $("#deletebutt").on("click", function () {

             var id = $("#deleteId").val();


             $.ajax({
               url: "/delmskills",
               type: "POST",
               data:{

               clid:id,
               '_token': $('#token').val()
             },
             success: function(data){
                             alert("Success");
                             location.reload();
                       },
                             error: function(xhr)
                           {
                            location.reload();
                           }




             });

           });


           function eprod(){
             var val = $('#eproduct').val()
             parr = []
             darr = []

             if(val.length > prodcount)
             {
                // alert(val.length)
              for(var x=prodcount;x<val.length;x++)
               {
                 parr.push(val[x])
               }

             }

             else if (val.length < prodcount) {


               for(var i=val.length;i<prodcount;i++)
                {
                  darr.push(sid[i])
                }
                // alert(darr);

             }



           }





</script>


<script type="text/javascript" src="vendors/jquery-validation/js/jquery.validate.js"></script>
<script type="text/javascript" src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>



<script type="text/javascript">
   $(document).ready(function() {
    $('#addForms')

    .find('[name="mechanic"]')
            .chosen()
            .change(function(e) {
                $('#addForms').bootstrapValidator('revalidateField', 'mechanic');
            })
            .end()
    .find('[name="product"]')
            .chosen()
            .change(function(e) {
                $('#addForms').bootstrapValidator('revalidateField', 'product');
            })
            .end()

    .bootstrapValidator({
        message: 'This value is not valid',
        excluded: ':disabled',
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
            mechanic: {
                    feedbackIcons: 'false',
                    trigger: 'focus blur',
                    live: 'enabled',
                    validators: {
                        callback: {
                            message: 'Please choose mechanic',
                            callback: function(value, validator) {
                                // Get the selected options
                                var options = validator.getFieldElements('mechanic').val();
                                return (options != null && options.length >= 1);
                            }
                        }
                    },
                     notEmpty: {
                        message: 'The mechanic is required and cannot be empty. '
                    },
                },
            product: {
                    feedbackIcons: 'false',
                    trigger: 'focus blur',
                    live: 'enabled',
                    validators: {
                        callback: {
                            message: 'Please choose skill',
                            callback: function(value, validator) {
                                // Get the selected options
                                var options = validator.getFieldElements('product').val();
                                return (options != null && options.length >= 1);
                            }
                        }
                    },
                     notEmpty: {
                        message: 'The skill is required and cannot be empty. '
                    },
                },
        }
    });


});

</script>



<script type="text/javascript">
   $(document).ready(function() {
    $('#editForms')

    .find('[name="emechanic"]')
            .chosen()
            .change(function(e) {
                $('#editForms').bootstrapValidator('revalidateField', 'emechanic');
            })
            .end()
    .find('[name="eproduct"]')
            .chosen()
            .change(function(e) {
                $('#editForms').bootstrapValidator('revalidateField', 'eproduct');
            })
            .end()

    .bootstrapValidator({
        message: 'This value is not valid',
        excluded: ':disabled',
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
            emechanic: {
                    feedbackIcons: 'false',
                    trigger: 'focus blur',
                    live: 'enabled',
                    validators: {
                        callback: {
                            message: 'Please choose mechanic',
                            callback: function(value, validator) {
                                // Get the selected options
                                var options = validator.getFieldElements('emechanic').val();
                                return (options != null && options.length >= 1);
                            }
                        }
                    },
                     notEmpty: {
                        message: 'The mechanic is required and cannot be empty. '
                    },
                },
            eproduct: {
                    feedbackIcons: 'false',
                    trigger: 'focus blur',
                    live: 'enabled',
                    validators: {
                        callback: {
                            message: 'Please choose skill',
                            callback: function(value, validator) {
                                // Get the selected options
                                var options = validator.getFieldElements('eproduct').val();
                                return (options != null && options.length >= 1);
                            }
                        }
                    },
                     notEmpty: {
                        message: 'The skill is required and cannot be empty. '
                    },
                },
        }
    });


});

</script>


<!-- global scripts modals-->
<script type="text/javascript" src="js/pages/modals.js"></script>
<!--End of global scripts-->

@stop
