@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','Vehicle Type') <!-- Page Title -->
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
                                <i class="fa fa-truck"></i>
                                Vehicle Type
                            </h4>
                        </div>

                        @if(session()->has('message'))
                            <?php
                                $message = session()->get("message");
                            ?>

                            <script type="text/javascript">
                                function message()
                                {
                                var mess = "<?php echo $message ?>";
                                new PNotify({
                                title: 'Success!',
                                text: mess,
                                type: 'success',
                                styling: 'bootstrap3'
                                });
                                }

                                window.onload = message;
                            </script>
                        @endif

                        <div class="col-sm-6 col-12"  >
                            <ol  class="breadcrumb float-right   ">
                                <li class="breadcrumb-item " >
                                    <a href="/vehicletype">
                                        <i class="fa fa-truck" data-pack="default" data-tags=""></i>
                                        Vehicle Type
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
                                    &nbsp;  Add Vehicle Type
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
                                            <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 35%;"><b>Vehicle Make</b></th>
                                            <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 35%;"><b>Model</b></th>
                                            <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1"><b>Actions</b></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($makes as $makes)
                                            <tr role="row" class="even">
                                                <td>{{$makes->Make}}</td>
                                                <td class="center">
                                                    <ul style="padding-left: 1.7em;">
                                                        @foreach($models as $model)
                                                            @if($makes->MakeID == $model->MakeID)
                                                                <li>{{$model->Model}} {{$model->year}}</li>
                                                            @endif
                                                        @endforeach
                                                    </ul>
                                                </td>
                                                <td class="examples transitions">
                                                    <!--EDIT BUTTON-->
                                                    <button name = '{{$makes->MakeID}}' onclick="updateVT(this.name);" class="btn btn-success hvr-float-shadow adv_cust_mod_btn tipso_bounceIn" data-background="#3CB371" data-color="white" data-tipso="Edit" data-toggle="modal" data-href="#responsive" href="#editModal">
                                                        <i class="fa fa-pencil text-white"></i>
                                                    </button>
                                                    <!--DELETE BUTTON-->
                                                    <button name = '{{$makes->MakeID}}' onclick="deleteVT(this.name);" class="btn btn-danger hvr-float-shadow tipso_bounceIn" data-background="#FA8072" data-color="white" data-tipso="Delete">
                                                        <i class="fa fa-trash text-white"></i>
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
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <form id="addForm">
                                        <div class="modal-header bg-info">
                                            <button id = "closebutton" type="reset" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title text-white">
                                                <i class="fa fa-plus"></i>
                                                &nbsp;&nbsp;Add Vehicle Type
                                            </h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row m-l-20">
                                                <!--Texfield: Vehicle MAke-->
                                                <div class="col-md-3 m-t-10">
                                                    <h5>Vehicle Make <span style="color: red">*</span></h5>
                                                    <div class ="m-t-20"></div>
                                                    <div class="form-group">
                                                        <input id="make" name="make" type="text" placeholder="Make" class="form-control">
                                                    </div>
                                                </div>
                                                <!--Textfield: Year, Bradnd/ CheckBox: AT, MT-->
                                                <div class="col-md-9">
                                                    <table id="myTable" class="table add-order-list" style="border-color: white" rules="rows" >
                                                        <thead>
                                                            <tr>
                                                                <td>
                                                                    <h5>Model 
                                                                        <span style="color: red">*</span>
                                                                    </h5>
                                                                </td>
                                                                <td>
                                                                    <h5>Year 
                                                                        <span style="color: red">*</span>
                                                                    </h5>
                                                                </td>
                                                                <td></td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="form-group">
                                                                    <input type="text" name="model[]" id="model" placeholder="model" class="form-control"/>
                                                                </td>
                                                                <td class="form-group">
                                                                    <input type="number" name="year[]" id="year" placeholder="Year" class="form-control"/>
                                                                </td>
                                                                <td>
                                                                    <!--ADD ROW FOR ADD MODAL-->
                                                                    <div class="examples transitions m-t-0">
                                                                        <button type="button" id="addrow" value="Add Row" class="btn btn-warning hvr-float-shadow" >
                                                                            <i class="fa fa-plus text-white"></i>
                                                                        </button>
                                                                    </div>
                                                                </td>
                                                                    <!--DELETE ROW FOR ADD MODAL-->
                                                                <td  style="border-color: white" rules="rows">
                                                                    <i class="deleteaddRow "></i>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Button: Close and Save-->
                                        <div class="modal-footer">
                                            <div class="examples transitions m-t-5">
                                                <button id = "closebutton" type="reset" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                                            </div>
                                            <div class="examples transitions m-t-5">
                                                <input type="hidden" id="token" value="{{ csrf_token() }}">
                                                <button id = "addform" type="submit" class="btn btn-success success_clr   " data-dismiss="modal">
                                                    <i class="fa fa-save text-white"></i>
                                                    &nbsp; Save
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- END OF ADD MODAL-->

                        <!-- EDIT MODAL-->
                        <div class="modal fade in " id="editModal"  tabindex="-1" role="dialog" aria-hidden="false">
                            <div class="modal-dialog modal-lg">
                                <form id="editForm">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary">
                                            <button id = "closebutton" type="reset"  class="close" data-dismiss="modal" aria-hidden="true" onClick="window.location.reload()">×</button>
                                            <h4 class="modal-title text-white">
                                                <i class="fa fa-pencil"></i>
                                                &nbsp;&nbsp;Edit Vehicle Type
                                            </h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row m-l-20">
                                                <!--Textfield: vehicle Make-->
                                                <div class="col-md-3 m-t-10">
                                                    <h5>Vehicle Make <span style="color: red">*</span></h5>
                                                    <div class ="m-t-20"></div>
                                                    <div class="form-group">
                                                        <input id="editmake" name="make" type="text" placeholder="Make" class="form-control">
                                                    </div>
                                                    <input id = 'mkid' hidden>
                                                </div>
                                                <!--Textfield: model, Year / Checkbox: MT, AT -->
                                                <div class="col-md-9">
                                                    <table id="myTable" class="table edit-order-list" style="border-color: white" rules="rows" >
                                                        <thead>
                                                            <tr>
                                                                <td>
                                                                    <h5>Model 
                                                                        <span style="color: red">*</span>
                                                                    </h5>
                                                                </td>
                                                                <td>
                                                                    <h5>Year 
                                                                        <span style="color: red">*</span>
                                                                    </h5>
                                                                </td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <!-- <tr>
                                                                <td>
                                                                    <div class="examples transitions m-t-5">
                                                                        <button type="button" id="editrow" value="Add Row" class="btn btn-warning hvr-float-shadow">
                                                                            <i class="fa fa-plus text-white"></i>
                                                                        </button>
                                                                    </div>
                                                                </td>
                                                            </tr> -->
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td colspan="3">
                                                                    <div class="examples transitions m-t-5">
                                                                        <button type="button" id="editrow" value="Add Row" class="btn btn-warning hvr-float-shadow">
                                                                            <i class="fa fa-plus text-white"></i>
                                                                        </button>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Button: Close and Save Changes-->
                                        <div class="modal-footer">
                                            <div class="examples transitions m-t-5">
                                                <button id = "closebutton" type="reset" onClick="window.location.reload()"  data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                                            </div>
                                            <div class="examples transitions m-t-5">
                                                <button id="editform" class="btn btn-success success_clr" data-dismiss="modal">
                                                    <i class="fa fa-save text-white"></i>
                                                    &nbsp; Save Changes
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                            <!-- END OF EDIT MODAL-->
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


<!--script for table add model and year-->
<script>

$("#addform").on("click", function () {

      var make = $('#make').val();
      var md = $('#model').val();
      var myr = $('#year').val();

      var model = []
      var year = [];

      model.push(md);
      year.push(myr);

      for(var i=0; i<counter; i++){
        var mod = $('#model'+i+'').val()
        var yr = $('#year'+i+'').val()

        model.push(mod);
        year.push(yr);
      }

      $.ajax({
        url: "/Addvehicletype",
        type: "POST",
        data:{

        make:make,
        model:model,
        year:year,

        '_token': $('#token').val()
      },
      success: function(data){
            // alert("Success");
            location.reload();
                },
                error: function(xhr)
                {
                    location.reload();
                }
      });
});

$("#editform").on("click", function () {

 var emake = $('#editmake').val()
 var emk = $('#mkid').val()

 var emodel = [];
 var eyear= [];


 for(var i=0; i<counter; i++){
 var emod = $('#editmodel'+i+'').val()
 var eyr = $('#edityear'+i+'').val()

   emodel.push(emod);
   eyear.push(eyr);
}
// alert(eid)
$.ajax({
  url: "/editvehicletype",
  type: "POST",
  data:{

  make:emake,
  makeid:emk,
  model:emodel,
  year:eyear,
  id:eid,
  '_token': $('#token').val()
},
success: function(data){
                // alert("Success");
                location.reload();
          },
                error: function(xhr)
              {
              alert('Error!');
              }

});

});
//SOFT DELETE VEHICLE Type

function deleteVT(id){

  $.ajax({
    url: "/Deletevehicletype",
    type: "POST",
    data:{

    mid:id,
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
}


//display data to edit modal
function updateVT(id){
    $.ajax({
    type: "GET",
    url:  "/RetrieveVT",
    data:
    {
    MakeID: id,
    },
    success: function(data){
        var mk = data['Brand'][0]['Make'];
        var mid = data['Brand'][0]['MakeID'];

        document.getElementById('mkid').value = mid;
        document.getElementById('editmake').value = mk;

        var md = data['Mod'][0]['Model'];
        eid = [];

        for (var i=0;i<data.Mod.length;i++){
            var newRow = $("<tr>");
            var cols = "";

            cols += '<td class="form-group"><input type="text" id="editid'+counter+'" hidden value="'+data['Mod'][i]['ModelID']+'"/> <input type="text" id="editmodel'+counter+'" value="'+data['Mod'][i]['Model']+'"class="form-control" name="model[]" placeholder="model"/></td>';
            cols += '<td class="form-group"><input type="number" id="edityear'+counter+'" value="'+data['Mod'][i]['year']+'"class="form-control" name="year[]" placeholder="Year"/></td>';
            cols += '<td style="border-color: white"><input type="button" class="ibtneDel btn  btn-danger btn-md btn-md hvr-float-shadow" value ="X"></td>';
            
            eid.push(data['Mod'][i]['ModelID']);

            newRow.append(cols);
            $("table.edit-order-list").append(newRow);
            counter++;

            $('#editForm').bootstrapValidator('addField', 'model[]');
            $('#editForm').bootstrapValidator('addField', 'year[]');
        }
    },
        error: function(xhr)
        {
            alert("Error");
            alert($.parseJSON(xhr.responseText)['error']['message']);
        }
    });
}

$(document).ready(function () {
    $("#closebutton").on("click",function(){
        $(".modal-body input").val("")
        $("#table.edit-order-list").closest("tr").remove();
    });
    counter = 0;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td class="form-group"><input type="text" id="model'+counter+'" class="form-control" name="model[]" placeholder="model"/></td>';
        cols += '<td class="form-group"><input type="number" id="year'+counter+'"class="form-control" name="year[]" placeholder="Year"/></td>';
        cols += '<td><input type="button" class="ibteDel btn  btn-danger btn-md hvr-float-shadow" value ="X"></td>';

        newRow.append(cols);
        $("table.add-order-list").append(newRow);
        counter++;

        $('#addForm').bootstrapValidator('addField', 'model[]');
        $('#addForm').bootstrapValidator('addField', 'year[]');
    });

    $("table.add-order-list").on("click", ".ibteDel", function (event) {
        $(this).closest("tr").remove();
        counter -= 1
    });
});
</script>
<!--end script of table edit model-->



<!--script for table edit model and year-->
<script>
$(document).ready(function () {
    $("#editrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td class="form-group"><input type="text"  id="editmodel'+counter+'" class="form-control" name="model[]" placeholder="model"' + counter + '"/></td>';
        cols += '<td class="form-group"><input type="text"  id="edityear'+counter+'" class="form-control" name="year[]" placeholder="Year"' + counter + '"/></td>';
        cols += '<td style="border-color: white"><input type="button" class="ibtneDel btn  btn-danger btn-md btn-md hvr-float-shadow" value ="X"></td>';

        newRow.append(cols);
        $("table.edit-order-list").append(newRow);
        counter++;

        $('#editForm').bootstrapValidator('addField', 'model[]');
        $('#editForm').bootstrapValidator('addField', 'year[]');
    });

    $("table.edit-order-list").on("click", ".ibtneDel", function (event) {
        if(counter == 1)
        {
          alert('Must Have atleast 1 Row');
        }
        else{
          $(this).closest("tr").remove();
          counter -= 1
        }
    });
});

$('#editModal').on('hidden', function () {
  document.location.reload();
})

</script>

<script type="text/javascript" src="vendors/jquery-validation/js/jquery.validate.js"></script>
<script type="text/javascript" src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#addForm').bootstrapValidator({
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
                make: {
                    message: 'Is not valid',
                    validators: {
                        notEmpty: {
                            message: ' Required and cannot be empty. '
                        },

                        regexp: {
                            regexp: /^[a-zA-Z0-9]+$/,
                            message: ' Only accept alphanumeric values. '
                        },
                        regexp: {
                            regexp: /^[^~`!$@#*_={}()|\;<>,.?%^&]+/,
                            message: ' Only accept alphanumeric values. '
                        },
                    }
                },
                'model[]': {
                    message: 'Is not valid',
                    validators: {
                        notEmpty: {
                            message: ' Required and cannot be empty. '
                        },

                        regexp: {
                            regexp: /^[a-zA-Z0-9]+$/,
                            message: ' Only accept alphanumeric values. '
                        },
                        regexp: {
                            regexp: /^[^~`!$@#*_={}()|\;<>,.?%^&]+/,
                            message: ' Only accept alphanumeric values. '
                        },
                    }
                },
                'year[]': {
                    message: 'The vehicle year is not valid',
                    validators: {
                        notEmpty: {
                            message: ' Required and cannot be empty. '
                        },

                        regexp: {
                            regexp: /^[a-zA-Z0-9]+$/,
                            message: ' Only accept alphanumeric values. '
                        },
                        regexp: {
                            regexp: /^[^~`!$@#*_={}()|\;<>,.?%^&]+/,
                            message: ' Only accept alphanumeric values. '
                        },
                    }
                },
            }
        })

        .on('error.field.bv', function(e, data) {
            if (data.bv.getSubmitButton()) {
                data.bv.disableSubmitButtons(false);
            }
        })
        .on('success.field.bv', function(e, data) {
            if (data.bv.getSubmitButton()) {
                data.bv.disableSubmitButtons(false);
            }
        });
    });

</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#editForm').bootstrapValidator({
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
                make: {
                    message: 'Is not valid',
                    validators: {
                        notEmpty: {
                            message: ' Required and cannot be empty. '
                        },

                        regexp: {
                            regexp: /^[a-zA-Z0-9]+$/,
                            message: ' Only accept alphanumeric values. '
                        },
                        regexp: {
                            regexp: /^[^~`!$@#*_={}()|\;<>,.?%^&]+/,
                            message: ' Only accept alphanumeric values. '
                        },
                    }
                },
                'model[]': {
                    message: 'Is not valid',
                    validators: {
                        notEmpty: {
                            message: ' Required and cannot be empty. '
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9]+$/,
                            message: ' Only accept alphanumeric values. '
                        },
                        regexp: {
                            regexp: /^[^~`!$@#*_={}()|\;<>,.?%^&]+/,
                            message: ' Only accept alphanumeric values. '
                        },
                    }
                },
                'year[]': {
                    message: 'The vehicle year is not valid',
                    validators: {
                        notEmpty: {
                            message: 'Required and cannot be empty. '
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9]+$/,
                            message: ' Only accept alphanumeric values. '
                        },
                        regexp: {
                            regexp: /^[^~`!$@#*_={}()|\;<>,.?%^&]+/,
                            message: ' Only accept alphanumeric values. '
                        },
                    }
                },
            }
        });
    });
</script>
<!--end script of table edit model-->

@stop
