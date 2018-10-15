@extends('layout.master') <!-- Include Master Page -->
@section('Title','Service Steps') <!-- Page Title -->
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
                <div class="row" style="height: 47px;">
                    <div class="col-6">
                        <h4 class="m-t-5" style="margin-top: 2.5%;">
                            <i class="fa fa-wrench"></i>
                            Service Steps
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
                                <a href="servicesteps">
                                        Service Steps
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
                                &nbsp;Add Service Steps
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
                                        <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 30%;"><b>Service Name</b></th>
                                        <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1" style="width: 50%;"><b>Steps</b></th>
                                        <th class="sorting wid-15" tabindex="0" rowspan="1" colspan="1" style="width: ;"><b>Actions</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($srcount as $scount)
                                        <tr>
                                            <td>{{$scount->ServiceName}}</td>
                                            <td>
                                                <ol style="padding-left: 1.2em;">
                                                    @foreach($view as $vw)
                                                        @if($scount->ServiceID == $vw->ServiceID)
                                                            <li>{{$vw->Step}}</li>
                                                        @endif
                                                    @endforeach
                                                </ol>
                                            </td>
                                            <td>
                                                <!--EDIT BUTTON-->
                                                <button class="btn btn-success hvr-float-shadow adv_cust_mod_btn tipso_bounceIn" name="{{$scount->ServiceID}}" onclick="editMod(this.name)" data-background="#3CB371" data-color="white" data-tipso="Edit" data-toggle="modal" data-href="#responsive" href="#editModal"><i class="fa fa-pencil text-white"></i>
                                                </button>
                                                <!--DELETE BUTTON-->
                                                <button class="btn btn-danger hvr-float-shadow tipso_bounceIn" name="{{$scount->ServiceID}}" onclick="deleteModal(this.name)" data-background="#FA8072" data-color="white" data-tipso="Delete"><i class="fa fa-trash text-white"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END TABLE -->

                    <!-- START EDIT MODAL -->
                    <div class="modal fade in " id="editModal" tabindex="-1" role="dialog" aria-hidden="false">
                        <div class="modal-dialog modal-md">
                            <form id="editForm">
                                <div class="modal-content">
                                    <div class="modal-header bg-primary">
                                        <button id = "closebutton" type="reset" class="close" data-dismiss="modal" aria-hidden="true"  onClick="window.location.reload()">×</button>
                                        <h4 class="modal-title text-white">
                                            <i class="fa fa-pencil"></i>
                                            &nbsp;Edit Service Steps
                                        </h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row m-t-10">
                                            <div class="col-md-11 m-t-10 m-l-20">
                                                <h5>Service Name: <span style="color: red">*</span></h5>
                                                <div class ="m-t-10"></div>
                                                <div class="form-group">
                                                    <select id="eservice" name="service" class="form-control  chzn-select" tabindex="2" disabled>
                                                        <option disabled selected>Choose Service Name</option>
                                                        @foreach($ser as $sv)
                                                            <option value="{{$sv->ServiceID}}">{{$sv->ServiceName}}</option>
                                                        @endforeach
                                                    </select>
                                                    <span class="form-control-feedback bv-no-label" aria-hidden="true" data-bv-icon-for="service"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Table: edit-order-list -->
                                        <div class="col-md-12 m-t-10">
                                            <table id="myTable" class="table edit-order-list" style="border-color: white" rules="rows">
                                                <thead>
                                                    <tr>
                                                        <td>
                                                            <h5>Steps <span style="color: red">*</span></h5>
                                                        </td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <!-- <td style="border-color: white" rules="rows"><i class="deleteeditRow "></i></td> -->
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                    <td></td>
                                                    <td colspan="2" style="border-color: white" rules="rows">
                                                        <div class="examples transitions m-t-0">
                                                            <button type="button" id="editrow" value="Add Row" class="btn btn-warning hvr-float-shadow" ><i class="fa fa-plus text-white" ></i></button>
                                                        </div>
                                                    </td>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="examples transitions m-t-5">
                                            <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                                        </div>
                                        <div class="examples transitions m-t-5">
                                            <button id="editform" onClick="window.location.reload()" type="submit"class="btn btn-success   source success_clr m-l-10 hvr-float-shadow adv_cust_mod_btn" data-dismiss="modal"><i class="fa fa-save text-white"></i>&nbsp;Save Changes
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END EDIT MODAL -->

                    <!-- START ADD MODAL -->
                    <div class="modal fade in " id="addModal" tabindex="-1" role="dialog" aria-hidden="false">
                        <div class="modal-dialog modal-md">
                            <form id="addForm">
                                <div class="modal-content">
                                    <div class="modal-header bg-info">
                                        <button id = "closebutton" type="reset" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title text-white">
                                            <i class="fa fa-plus"></i>
                                            &nbsp;Add Service Steps
                                        </h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row m-t-10">
                                            <div class="col-md-11 m-t-10 m-l-20">
                                                <h5>Service Name: <span style="color: red">*</span></h5>
                                                <div class ="m-t-10"></div>
                                                <div class="form-group">
                                                    <select id="service" class="form-control  chzn-select" tabindex="2" name="service">
                                                        <option disabled selected>Choose Service Name</option>
                                                        @foreach($ser as $serv)
                                                            <option value="{{$serv->ServiceID}}">{{$serv->ServiceName}}</option>
                                                        @endforeach
                                                    </select>
                                                    <span class="form-control-feedback bv-no-label" aria-hidden="true" data-bv-icon-for="service"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Table: edit-order-list -->
                                        <div class="col-md-12 m-t-10">
                                            <table id="myTable" class="table order-list" style="border-color: white" rules="rows">
                                                <thead>
                                                    <tr>
                                                        <td>
                                                            <h5>Steps <span style="color: red">*</span></h5>
                                                        </td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <!--Seach Select: Product-->
                                                        <td class="form-group">
                                                            <input type="text" id="step" name="item[]" placeholder="Steps" class="form-control" style="width:350px;"/>
                                                        </td>
                                                        <!--ADD ROW FOR EDIT MODAL-->
                                                        <td style="border-color: white" rules="rows">
                                                            <div class="examples transitions m-t-0">
                                                                <button type="button" id="addrow" value="Add Row" class="btn btn-warning hvr-float-shadow" ><i class="fa fa-plus text-white" ></i></button>
                                                            </div>
                                                        </td>
                                                        <td style="border-color: white" rules="rows"><i class="deleteeditRow "></i></td>
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <!--<div id="show-errors" class="m-t-5">
                                        @if ($errors->add->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->add->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                    </ul>
                                            </div>
                                            <br>
                                        @endif
                                    </div> -->
                                </div>
                                <div class="modal-footer">
                                    <div class="examples transitions m-t-5">
                                        <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                                    </div>
                                    <div class="examples transitions m-t-5">
                                        <input type="hidden" id="token" value="{{ csrf_token() }}">
                                        <button id= "addform" type="submit" class='btn btn-success warning source cancel_add m-l-10 adv_cust_mod_btn'data-dismiss='modal',><i class="fa fa-save text-white"></i>&nbsp;Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END ADD MODAL -->

                    <!-- START DELETE MODAL -->
                    <!-- {!! csrf_field() !!} -->
                    <div class="modal fade in " id="deleteModal" tabindex="-3" role="dialog" aria-hidden="false">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header bg-danger">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title text-white">
                                        <i class="fa fa-trash"></i>
                                        &nbsp;Delete Record
                                    </h4>
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
                                    <div class="examples transitions m-t-5">
                                        <button id="deletebutt" type='submit' class='btn btn-success warning source danger m-l-10 adv_cust_mod_btn' data-dismiss='modal'><i class="fa fa-trash text-white"></i>&nbsp;OK
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
        @if($errors->add->any())
            $('#addModal').modal('show');
        @endif
        @if($errors->update->any())
            $('#editModal').modal('show');
        @endif
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


            $('#deleteId').val(id);


            $('#deleteModal').modal('show');
        }
</script>

<!-- global scripts modals-->
<script type="text/javascript" src="js/pages/modals.js"></script>
<!--End of global scripts-->

<!--script for add modal steps -->
<script>
$(document).ready(function () {
    addcounter = 0;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td class="form-group"><input type="text" id="step'+addcounter+'"class="form-control" name="item[]" placeholder="Steps' + addcounter + '"/></td>';
        cols += '<td><input type="button" class="ibtnDel btn  btn-danger btn-md hvr-float-shadow" value ="X"></td>';

        newRow.append(cols);
        $("table.order-list").append(newRow);
        addcounter++;

        $('#addForm').bootstrapValidator('addField', 'item[]');
    });



$("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();
        addcounter -= 1
    });

});

   $("#addform").on("click", function () {
       // alert(addcounter)

       var service = $('#service').val();
       var step = $('#step').val();
       var arr = [];

       for(var x=0;x<addcounter;x++){

        arr.push( $('#step'+x+'').val() )


       }
       // alert(arr);

      $.ajax({
        url: "/addsteps",
        type: "POST",
        data:{

        serv:service,
        step:step,
        arr:arr,

        '_token': $('#token').val()
      },
      success: function(data){
                            // alert("Add Successful!");
                             location.reload();
                            },
                        error: function(xhr)
                        {
                          alert('error')
                         //  location.reload();
                        }




      });

    });

   function editMod(id){

      $.ajax({
        url: "/retsteps",
        type: "GET",
        data:{

        id:id,

        '_token': $('#token').val()
      },
      success: function(data){
                $('#eservice').val(data['stp'][0]['ServiceID']).trigger('chosen:updated');
                // $('#estep').val(data['stp'][0]['Step']);
                idarr=[];


        for (var i=0;i<data.stp.length;i++){

        var newRow = $("<tr>");
        var cols = "";

        var val =  data['stp'][i]['Step']
        idarr.push(data['stp'][i]['ServiceStepID']);


        cols += '<td class="form-group" style="border-color: white"><input type="text" id="estep'+counter+'" value="'+val+'" class="form-control" name="item[]" placeholder="Steps'+ counter +'" style="width:350px;" /></td>';
        cols += '<td style="border-color: white"><input type="button" class="ibtneDel btn  btn-danger btn-md hvr-float-shadow" value ="X"></td>';

        newRow.append(cols);
        $("table.edit-order-list").append(newRow);
        counter++;

        $('#editForm').bootstrapValidator('addField', 'item[]');

        }

        },
                  error: function(xhr)
                  {
                    alert('error')
                   //  location.reload();
                  }




      });


   }

    $("#editform").on("click", function () {


        var starr = [];
        var service = $('#eservice').val()
        for(var x=0;x<=counter;x++){

            starr.push( $('#estep'+x+'').val() )
        }
      
         $.ajax({
        url: "/editsteps",
        type: "POST",
        data:{

        id:idarr,
        step:starr,
        service:service,
        '_token': $('#token').val()
      },
      success: function(data){
                            // alert("edit Successful!");
                             location.reload();
                            },
                        error: function(xhr)
                        {
                          alert('error')
                         //  location.reload();
                        }




      });




    });

      $("#deletebutt").on("click", function () {

        var did = $('#deleteId').val()
        // alert(did)


         $.ajax({
        url: "/deletesteps",
        type: "POST",
        data:{

        id:did,
        '_token': $('#token').val()
      },
      success: function(data){
                             location.reload();
                            },
                        error: function(xhr)
                        {
                          alert('error')
                         //  location.reload();
                        }




      });




    });



</script>

<!--script for edit modal steps-->
<script>
$(document).ready(function () {
    counter = 0;


    $("#editrow").on("click", function ( ) {
        var newRow = $("<tr>");
        var cols = "";


        cols += '<td class="form-group"><input type="text" id="estep'+counter+'" class="form-control" name="item[]" placeholder="Steps'+ counter +'" style="width:350px;" /></td>';
        cols += '<td><input type="button" class="ibtneDel btn  btn-danger btn-md hvr-float-shadow" value ="X"></td>';

        newRow.append(cols);
        $("table.edit-order-list").append(newRow);
        counter++;

        $('#editForm').bootstrapValidator('addField', 'item[]');
    });


    $("table.edit-order-list").on("click", ".ibtneDel", function (event) {

        if(counter == 1)
        {
          alert('Atleast 1 row required')
        }
        else{
          $(this).closest("tr").remove();
          counter -= 1
        }

    });


});
</script>


<script type="text/javascript" src="vendors/jquery-validation/js/jquery.validate.js"></script>
<script type="text/javascript" src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>



<script type="text/javascript">
   $(document).ready(function() {
    $('#addForm')


    .find('[name="service"]')
            .chosen()
            .change(function(e) {
                $('#addForm').bootstrapValidator('revalidateField', 'service');
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
            service: {
                    feedbackIcons: 'false',
                    trigger: 'focus blur',
                    live: 'enabled',
                    validators: {
                        callback: {
                            message: 'Please choose service',
                            callback: function(value, validator) {
                                // Get the selected options
                                var options = validator.getFieldElements('service').val();
                                return (options != null && options.length >= 1);
                            }
                        }
                    },
                     notEmpty: {
                        message: 'The unit is required and cannot be empty. '
                    },
                },
            'item[]': {
                message: 'The steps name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The steps is required and cannot be empty. '
                    },

                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: ' The steps only accept alphanumeric values. '
                    },
                    regexp: {
                        regexp: /^[^~`!$@#*_={}()|\;<>,.?%^&]+/,
                        message: ' steps only accept alphanumeric values. '
                    },
                }
            },
        }
    });


});

</script>


<script type="text/javascript">
   $(document).ready(function() {
    $('#editForm')


    .find('[name="service"]')
            .chosen()
            .change(function(e) {
                $('#editForm').bootstrapValidator('revalidateField', 'service');
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
            service: {
                    feedbackIcons: 'false',
                    trigger: 'focus blur',
                    live: 'enabled',
                    validators: {
                        callback: {
                            message: 'Please choose service',
                            callback: function(value, validator) {
                                // Get the selected options
                                var options = validator.getFieldElements('service').val();
                                return (options != null && options.length >= 1);
                            }
                        }
                    },
                     notEmpty: {
                        message: 'The unit is required and cannot be empty. '
                    },
                },
            'item[]': {
                message: 'The steps name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The steps is required and cannot be empty. '
                    },

                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: ' The steps only accept alphanumeric values. '
                    },
                    regexp: {
                        regexp: /^[^~`!$@#*_={}()|\;<>,.?%^&]+/,
                        message: ' steps only accept alphanumeric values. '
                    },
                }
            },
        }
    });


});

</script>


@stop
