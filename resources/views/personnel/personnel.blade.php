@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','Personnel') <!-- Page Title -->
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
                            <i class="fa fa-users"></i>
                            Personnel
                        </h4>
                    </div>

                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right   ">
                            <li class="breadcrumb-item " >
                                <a href="/skills">
                                    <i class="fa fa-users" data-pack="default" data-tags=""></i>
                                    Personnel
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
                                        &nbsp;Add Personnel
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

                        <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 25%;"><b>Personnel Picture</b></th>
                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 35%;"><b>Personnel</b></th>
                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 20%;"><b>Job Title</b></th>
                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1"><b>Actions</b></th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($view as $view)
                    <tr role="row" class="even">

                        <td>

                            <img src = "img/{{$view->image}}" style="width:150px;height:150px">
                        </td>
                        <td class="center">
                            <ul style="padding-left: 1.2em;">
                                <li><b>Name: </b>{{$view->FirstName}} {{$view->MiddleName}} {{$view->LastName}}  </li>
                                <li><b>Address: </b>{{$view->CompleteAddress}}</li>
                                <li><b>Contact No.: </b>{{$view->ContactNo}}</li>
                            </ul>
                        </td>

                        <td>
                            <ul style="padding-left: 1.2em;">

                                  @foreach($pj as $job)

                                  @if($job->PersonnelID == $view->PersonnelID)
                                  <li>
                                  {{$job->JobDescription}}

                                  @endif

                                  @endforeach
                                </li>
                            </ul>
                        </td>
                        <td class = "examples transitions">
                            <!--EDIT BUTTON-->
                            <button name="{{{$view->PersonnelID}}}" onclick="ret(this.name)" class="btn btn-success hvr-float-shadow adv_cust_mod_btn tipso_bounceIn" data-background="#3CB371" data-color="white" data-tipso="Edit" data-toggle="modal" data-href="#responsive" href="#editModal"><i class="fa fa-pencil text-white"></i>
                            </button>


                            <!--DELETE BUTTON-->
                            <button name="{{{$view->PersonnelID}}}" onclick = "del(this.name)"class="btn btn-danger hvr-float-shadow  tipso_bounceIn" data-background="#FA8072" data-color="white" data-tipso="Delete" data-toggle="modal" data-href="#responsive" href="#deleteModal"><i class="fa fa-trash text-white"></i>
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
    <form id="addper" enctype="multipart/form-data">
    <div class="modal fade in " id="addModal" tabindex="-2" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header bg-info">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-plus"></i>
                                            &nbsp;Add Personnel</h4>
                            </div>
                    <div class="modal-body"  style="padding-left: 45px; padding-right: 45px;">
                        <h4>Personnel Information:</h4>
                        <div class ="col-md-12">

                            <div class="row m-t-10">

                                    <div class="col-md-5">
                                        <div class="">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new" style ="background-color: #d3d3d3">

                                            </div>
                                            <div class="fileinput-preview fileinput-exists img-thumbnail">
                                            </div>
                                            <div class="form-group m-t-20 text-center">
                                                <span class="btn btn-primary btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" id='image' name="image" required=""></span></input>
                                                <a href="#" class="btn btn-warning fileinput-exists"data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>


                                <input type="hidden" id="__token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                        <h5 style="padding-bottom: 10px;" class ="m-t-35 m-b-10">Job Title: <span style="color: red;">*</span></h5>

                                        @foreach($jt as $jobt)
                                        <div class="m-t-10 checkbox" style="margin: 0px;">
                                            <input type="checkbox" class=""  value="{{$jobt->JobDescriptionID}}" name="jobs[]" id="{{$jobt->JobDescriptionID}}" onclick="myFunction(this.id)">
                                            <label class="">&nbsp;&nbsp;&nbsp;{{$jobt->JobDescription}}</label>
                                        </div>
                                        @endforeach
                                    </div>

                            </div>
                                <!-- </div> -->


                                <div class="col-md-7">
                                    <div class="form-group">
                                        <h5>First Name: <span style="color: red">*</span></h5>
                                            <input id="fname" name="fname" type="text" placeholder="First Name"class="form-control m-t-10">
                                    </div>


                                    <div class="form-group">
                                        <h5>Middle Name: <span style="color: red">*</span></h5>
                                            <input id="mname" name="mname" type="text" placeholder="Middle Name"class="form-control m-t-10">
                                    </div>

                                    <div class="form-group">
                                        <h5>Surname: <span style="color: red">*</span></h5>
                                            <input id="sname" name="sname" type="text" placeholder="Surname"class="form-control m-t-10">
                                    </div>


                                    <div class="form-group">
                                        <h5>Address: <span style="color: red">*</span></h5>
                                            <input id="address" name="address" type="text" placeholder="Address" class="form-control m-t-10">
                                    </div>

                                    <div class="form-group">
                                    <h5>Date of Birth: <span style="color: red">*</span></h5>
                                            <input id = 'dob' type="date" name="dob "class="form-control m-t-10" required="" >
                                    </div>

                                    <div class="form-group">
                                        <h5>Contact Number: <span style="color: red">*</span></h5>
                                            <input id = "phones" name="contact" class="form-control m-t-10" required="" >
                                    </div>

                                    <div class="form-group">
                                        <h5>Email Address: <span style="color: red">*</span></h5>
                                        <input id="email" name="email" type="text" placeholder="john@gmail.com" class="date_mask form-control m-t-10" data-inputmask="'alias': 'email'" required="">
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
                                    <button  type ="submit" id='addform' class="btn btn-success  source success_clr m-l-10 hvr-float-shadow adv_cust_mod_btn" data-dismiss="modal"><i class="fa fa-save text-white"></i>&nbsp; Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!--END OF ADD MODAL -->



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
                                        <!-- Making way for JT DD -->
                                    <!-- <div class="form-group">
                                        <h5 style="padding-bottom: 10px;" class ="m-t-35 m-b-10">Job Title: <span style="color: red;">*</span></h5>


                                        @foreach($jt as $jtype)
                                        <div class="m-t-10 checkbox" style="margin: 0px;">
                                            <input type="checkbox" class="" value="{{$jtype->JobDescriptionID}}" id="{{$jtype->JobDescriptionID}}" name="jobs[]" onclick="editFunction(this.id)">
                                            <label class="m-t-0">&nbsp;&nbsp;&nbsp;{{$jtype->JobDescription}}</label>
                                        </div>
                                        @endforeach

                                    </div> -->

                                    <div class="form-group">
                                        <h5 style="padding-bottom: 10px;" class ="m-t-35 m-b-10">Job Title: <span style="color: red;">*</span></h5>



                                        <div class="m-t-10 checkbox" style="margin: 0px;">
                                          <select class="form-control chzn-select" id="jt" name="jobs[]"  tabindex="3" multiple="">
                                                  <option disabled>Choose Skills</option>
                                                @foreach($jt as $jtype)
                                              <option value = "{{$jtype->JobDescriptionID}}">{{$jtype->JobDescription}}</option>
                                                @endforeach

                                            </select>
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
                                        <h5>Middle Name: <span style="color: red">*</span></h5>
                                            <input id="emname" name="mname" type="text" placeholder="Middle Name"class="form-control m-t-10">
                                    </div>

                                    <div class="form-group">
                                        <h5>Surname: <span style="color: red">*</span></h5>
                                            <input id="esname" name="sname" type="text" placeholder="Surname"class="form-control m-t-10">
                                    </div>

                                    <div class="form-group">
                                        <h5>Address: <span style="color: red">*</span></h5>
                                            <input id="eaddress" name="address" type="text" placeholder="Address" class="form-control m-t-10">
                                    </div>

                                    <div class="form-group">
                                        <h5>Date of Birth: <span style="color: red">*</span></h5>
                                            <input id='edate' type="date" class="form-control m-t-10" name="dob" placeholder="dd-mm-yyyy" required>
                                    </div>

                                    <div class="form-group">
                                        <h5>Contact Number: <span style="color: red">*</span></h5>
                                            <input id = "phones" name="contact" class="form-control m-t-10" required="" >
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

    var jtarr = [];
    var ejtarr = [];




     $("#addform").on("click", function () {


    var form_data = $('#addper').serialize();
       var pic = $('#image').val();
       var fname = $('#fname').val();
       var mname = $('#mname').val();
       var sname = $('#sname').val();
       var add = $('#address').val();
       var bday = $('#dob').val();
       var num = $('#phones').val();
       var email = $('#email').val();



// alert(jtarr)
       $.ajax({
         type:"POST",
         url:"/addpersonnel",
         data:
         {
           fname:fname,
           mname:mname,
           sname:sname,
           add:add,
           bday:bday,
           num:num,
           email:email,
           jt:jtarr,
           '_token': $('#token').val()
         },
         success: function(data){

       var pic = $('#image').val();

       if(pic==null||pic==""){
             window.location.href = "personnel"
       }
       else{
                    var formd = new FormData($('#addper')[0]);
                    var file = document.getElementById("image").files[0];
                    formd.append("pic", file);
                    formd.append("_token", $('#__token').val());
                    $.ajax({
                        type: "POST",
                        url: '/perph',
                        data: formd,
                        contentType: false,
                        processData: false,
                        success: function (response) {
                            // alert("succ")
                            window.location.href = "personnel";
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
                        alert("error")
                       // location.reload();
                       }

                     });



     });

     function ret(id){

             $.ajax({
               type:"GET",
               url:"/retpersonnel",
               data:
               {
                 id:id,
               },
               success: function(data){
                 $(".chzn-select").chosen();
                 jtitle = [];
                 jpid = [];
                 document.getElementById('eid').value = data['per'][0]['PersonnelID'];
                 document.getElementById('efname').value = data['per'][0]['FirstName'];
                 document.getElementById('emname').value = data['per'][0]['MiddleName'];
                 document.getElementById('esname').value = data['per'][0]['LastName'];
                 document.getElementById('eaddress').value = data['per'][0]['CompleteAddress'];
                 document.getElementById('edate').value = data['per'][0]['Birthday'];
                 document.getElementById('ephones').value = data['per'][0]['ContactNo'];
                 document.getElementById('eemail').value = data['per'][0]['EmailAddress'];
                 // document.getElementById('eimage').value = data['per'][0]['image'];

                 for(var x=0;x<data.job.length;x++)
                 {
                   jtitle.push(data['job'][x]['JobDescriptionID'])
                   jpid.push(data['job'][x]['PersonnelJobID'])
                 }

                   $("#jt").val(jtitle).trigger("chosen:updated");



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
       var emname = $('#emname').val();
       var esname = $('#esname').val();
       var eadd = $('#eaddress').val();
       var ebday = $('#edate').val();
       var ephones = $('#ephones').val();
       var eemail = $('#eemail').val();
       var eid = $('#eid').val();

       var s = $('#jt').val();
       // alert(s);

       $.ajax({
         type:"POST",
         url:"/editpersonnel",
         data:
         {
           id:eid,
           pic:epic,
           fname:efname,
           mname:emname,
           sname:esname,
           add:eadd,
           bday:ebday,
           num:ephones,
           email:eemail,
           jtitle:s,
           jpid:jpid,

           '_token': $('#token').val()
         },
         success: function(data){
                          var pic = $('#eimage').val();

       if(pic==null||pic==""){
             window.location.href = "personnel"
       }
       else{
                         var formd = new FormData($('#editper')[0]);
                    var file = document.getElementById("eimage").files[0];
                    formd.append("pic", file);
                    formd.append("_token", $('#__token').val());
                    $.ajax({
                        type: "POST",
                        url: '/perph',
                        data: formd,
                        contentType: false,
                        processData: false,
                        success: function (response) {
                            // alert("succ")
                            window.location.href = "personnel";
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

     function del(id){

        document.getElementById('deleteId').value = id;

     }

     $("#delete").on("click", function () {


       var did = $('#deleteId').val();


       $.ajax({
         type:"POST",
         url:"/delpersonnel",
         data:
         {
           id:did,

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

     function myFunction(id){

     // alert(temp)
         var temp = 0;

       if (jtarr.length > 0){

         for(var i=0;i<=jtarr.length;i++)
         {
           if(jtarr[i] == id)
           {
             jtarr.splice(i,1);
             // alert("remove")


             temp = 1;
              break;
           }
           // alert('finishedcheck')

         }

         if(temp == 0)
         {
           jtarr.push(id);
           // alert("Added"+jtarr+"")
         }

       }

       else{
         jtarr.push(id);
         // alert('push1st')

       }

     }

     function editFunction(id)
     {

       var ctr = 0;

     if (ejtarr.length > 0){

       for(var i=0;i<=ejtarr.length;i++)
       {
         if(jtarr[i] == id)
         {
           ejtarr.splice(i,1);
           // alert("remove")


           ctr = 1;
            break;
         }
         // alert('finishedcheck')

       }

       if(ctr == 0)
       {
         ejtarr.push(id);
         // alert("Added"+jtarr+"")
       }

     }

     else{
       ejtarr.push(id);
       // alert('push1st')

     }


     }


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

<!--ADD: Script for Mechanic Checkbox: Chzn Select Multiple and Password-->
<!-- <script>
function myFunction() {

    var checkBox = document.getElementById("myCheck");
    var text = document.getElementById("text"); //mechanice multiple chzn select
    var label = document.getElementById("label"); //label: Mechanic Skills
    var labelpass = document.getElementById("labelpass"); //Label: Password
    var pass = document.getElementById("pass"); //Textfield: Password
     $(".chzn-select").chosen();

    if (checkBox.checked == true){
        text.style.display = "block";
        label.style.display = "block";
        labelpass.style.display = "block";
        pass.style.display = "block";
    } else {
       text.style.display = "none";
       label.style.display = "none";
       labelpass.style.display = "none";
       pass.style.display = "none";

    }
}
</script> -->
<!--END -->

<!--ADD: Script for Secretary: Password -->
<!-- <script>
function myFunction2() {

    var checkBox = document.getElementById("myCheckS");
    var labelpass = document.getElementById("labelpass");
    var pass = document.getElementById("pass");
     $(".chzn-select").chosen();

    if (checkBox.checked == true){
         labelpass.style.display = "block";
        pass.style.display = "block";
    } else {
       labelpass.style.display = "none";
       pass.style.display = "none";
    }
}
</script> -->
<!--END -->

<!--EDIT: Script for Mechanic Checkbox: Chzn Select Multiple and Password-->
<!-- <script>
function editmyFunction() {

    var checkBox = document.getElementById("editmyCheck");
    var text = document.getElementById("edittext");
    var label = document.getElementById("editlabel");
    var labelpass = document.getElementById("editlabelpass");
    var pass = document.getElementById("editpass");
     $(".chzn-select").chosen();

    if (checkBox.checked == true){
        text.style.display = "block";
        label.style.display = "block";
        labelpass.style.display = "block";
        pass.style.display = "block";
    } else {
       text.style.display = "none";
       label.style.display = "none";
       labelpass.style.display = "none";
       pass.style.display = "none";
    }
}
</script> -->
<!-- END -->

<!--EDIT: Script for Secretary: Password -->
<!-- <script>
function editmyFunction2() {

    var checkBox = document.getElementById("editmyCheckS");
    var labelpass = document.getElementById("editlabelpass");
    var pass = document.getElementById("editpass");
     $(".chzn-select").chosen();

    if (checkBox.checked == true){
         labelpass.style.display = "block";
        pass.style.display = "block";
    } else {
       labelpass.style.display = "none";
       pass.style.display = "none";
    }
}
</script> -->
<!--END -->


<script type="text/javascript" src="vendors/jquery-validation/js/jquery.validate.js"></script>
<script type="text/javascript" src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>



<script type="text/javascript">
   $(document).ready(function() {
    $('#addper').bootstrapValidator({
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
             image: {
                validators: {
                    file: {
                        extension: 'jpeg,png',
                        type: 'image/jpeg,image/png',
                        maxSize: 2048 * 1024,
                        message: 'The selected file is not valid'
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
                        message: 'The email is required and cannot be empty. '
                    },

                }
            },
        }
    });


});

</script>

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
                        extension: 'jpeg,png',
                        type: 'image/jpeg,image/png',
                        maxSize: 2048 * 1024,
                        message: 'The selected file is not valid'
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
                message: 'The email is not valid',
                validators: {
                    notEmpty: {
                        message: 'The email is required and cannot be empty. '
                    },

                }
            },
        }
    });





});

</script>

@stop
