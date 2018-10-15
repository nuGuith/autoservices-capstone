@extends('layout.master') <!-- Include Master Page -->
@section('Title','Service') <!-- Page Title -->
@section('content')

    <link type="text/css" rel="stylesheet" href="vendors/sweetalert/css/sweetalert2.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/pages/sweet_alert.css"/>

    <link type="text/css" rel="stylesheet" href="vendors/animate/css/animate.min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/hover/css/hover-min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/wow/css/animate.css"/>

    <link type="text/css" rel="stylesheet" href="vendors/modal/css/component.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/animate/css/animate.min.css" />
     <link type="text/css" rel="stylesheet" href="vendors/jquery-validation-engine/css/validationEngine.jquery.css" />
    <link type="text/css" rel="stylesheet" href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css" />
    <!--End of plugin styles-->
    <!--Page level styles-->
    <link type="text/css" rel="stylesheet" href="css/pages/form_validations.css" />
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
                            Service
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
                                <a href="/service">
                                    Services
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
                                &nbsp;Add Service
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
                                    <tr role="row" class="even">
                                        <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 20%;"><b>Service Name</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 15%;"><b>Service Category</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 10%;"><b>Estimated Time</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 12%;"><b>Initial Price</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 10%;"><b>Warranty</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 15%;"><b>Actions</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($service as $ser)
                                        <tr>
                                            <td>{{$ser->ServiceName}}</td>
                                            <td>{{$ser->ServiceCategoryName}}</td>
                                            <td>{{$ser->EstimatedTime}} mins</td>
                                            <td>Php {{$ser->InitialPrice}}</td>
                                            <td>
                                                <?php
                                                    $duration = $ser->WarrantyDuration;
                                                    $mileage = $ser->WarrantyMileage;

                                                    if(($duration != 0 || $duration != null)&&($mileage != 0 || $mileage != null))
                                                        echo $ser->WarrantyDuration . " " . $ser->WarrantyDurationMode . "/" . $ser->WarrantyMileage . "km";
                                                    elseif(($duration != 0 || $duration != null)&&($mileage == 0 || $mileage == null))
                                                        echo $ser->WarrantyDuration . " " . $ser->WarrantyDurationMode;
                                                    elseif(($duration == 0 || $duration == null)&&($mileage != 0 || $mileage != null))
                                                        echo $ser->WarrantyMileage ."km";
                                                    else
                                                        echo("N/A");
                                                ?>
                                            </td>
                                            <td>
                                                <!--EDIT BUTTON-->
                                                <button name = '{{$ser->ServiceID}}' class="btn btn-success hvr-float-shadow adv_cust_mod_btn tipso_bounceIn" onclick="ret(this.name);" data-background="#3CB371" data-color="white" data-tipso="Edit" data-toggle="modal" data-href="#responsive" href="#editModal"><i class="fa fa-pencil text-white"></i>
                                                </button>
                                                <!--DELETE BUTTON-->
                                                <button name = '{{$ser->ServiceID}}' class="btn btn-danger hvr-float-shadow tipso_bounceIn" onclick="del(this.name);" data-toggle="modal" data-href="#responsive" href="#deleteModal" data-background="#FA8072" data-color="white" data-tipso="Delete"><i class="fa fa-trash text-white"></i>
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
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title text-white">
                                            <i class="fa fa-pencil"></i>
                                            &nbsp;Edit Service
                                        </h4>
                                    </div>
                                    <div class="modal-body" style="padding-left: 47px;">
                                        <div class="form-group row m-t-5">
                                            <div class="col-md-11">
                                                <input id = 'did' hidden="">
                                                <h5>Service Name: <span style="color: red">*</span></h5>
                                                <input id="eservicename" name="servicename" type="text" placeholder="Service Name" maxlength="255" required="required" class="form-control m-t-10">
                                            </div>
                                        </div>
                                        <div class=" row m-t-5">
                                            <div class="col-md-11">
                                                <h5>Service Category: <span style="color: red">*</span></h5>
                                                <div class="m-t-10"></div>
                                                <div class="form-group">
                                                    <select id="eservicecategory" name="servicecategory" class=" form-control chzn-select m-t-10">
                                                        <option disabled selected>Please choose service category</option>
                                                            @foreach($category as $cat)
                                                                <option value="{{$cat->ServiceCategoryID}}">
                                                                    {{$cat->ServiceCategoryName}}
                                                                </option>
                                                            @endforeach
                                                    </select>
                                                    <span class="form-control-feedback bv-no-label" aria-hidden="true" data-bv-icon-for="servicecategory"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-t-5">
                                            <div class="col-md-11">
                                                <h5>Estimated Time: <span style="color: red">*</span></h5>
                                                <input type="number" min="0" id="eestimatedtime" name="estimatedtime" placeholder="minutes" class="form-control m-t-10"/>
                                            </div>
                                        </div>
                                        <div class="form-group row m-t-5">
                                            <div class="col-md-11">
                                                <h5>Initial Price: <span style="color: red">*</span></h5>
                                                <input type="number" min="0.01" step="0.01" id="einitialprice" name="initialprice" placeholder="Initial Price"class="form-control m-t-10"/>
                                            </div>
                                        </div><br>
                                        <!-- WARRANTY -->
                                        <div class="row m-t-5">
                                            <div class="col-md-5">
                                                <h5>Warranty: <span style="color: red"></span></h5>
                                                <p>
                                                    <input type="number" id="ewarranty" name="warranty" placeholder="Warranty" class="form-control m-t-10"/>
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <p class="m-t-25">
                                                    <select id="edurationmode" name="durationmode" class=" form-control chzn-select m-t-10">
                                                        <option disabled selected>Choose Duration Mode</option>
                                                        <option value="Days">Day(s)</option>
                                                        <option value="Weeks">Week(s)</option>
                                                        <option value="Months">Month(s)</option>
                                                        <option value="Years">Year(s)</option>
                                                    </select>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="form-group row m-t-5">
                                            <div class="col-md-11">
                                                <h5>Warranty(mileage): <span style="color: red"></span></h5>
                                                <input type="number" id="ewarrantymileage" name="warrantymileage" placeholder="Mileage" class="form-control m-t-10"/>
                                            </div>
                                        </div><br> 
                                    </div>
<<<<<<< HEAD
                                    <div class="modal-footer">
                                        <div class="examples transitions m-t-5">
                                            <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                                        </div>
                                        <div class="examples transitions m-t-5">
                                            <button type="submit" id='editform' form ="updateprod" class="btn btn-success  source success_clr m-l-10 hvr-float-shadow adv_cust_mod_btn" >
                                                <i class="fa fa-save text-white"></i>
                                                &nbsp; Save Changes
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- END EDIT MODAL -->

                    <!-- START ADD MODAL -->
                    <div class="modal fade in " id="addModal" tabindex="-2" role="dialog" aria-hidden="false">
                        <div class="modal-dialog modal-md">
                            <form id="addForm">
                                <div class="modal-content">
                                    <div class="modal-header bg-info">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title text-white">
                                            <i class="fa fa-plus"></i>
                                            &nbsp;Add Service
                                        </h4>
                                    </div>
                                    <div class="modal-body" style="padding-left: 47px;">
                                        <div class="form-group row m-t-5">
                                            <div class="col-md-11">
                                                <h5>Service Name: <span style="color: red">*</span></h5>
                                                <input id="servicename" name="servicename" type="text" placeholder="Service Name" maxlength="255" required="required" class="form-control m-t-10">
                                            </div>
                                        </div>
                                        <div class=" row m-t-5">
                                            <div class="col-md-11">
                                                <h5>Service Category: <span style="color: red">*</span></h5>
                                                <div class="m-t-10"></div>
                                                <div class="form-group">
                                                    <select id="servicecategory" name="servicecategory" class=" form-control chzn-select m-t-10">
                                                        <option disabled selected>Please choose service category</option>
                                                        @foreach($category as $cat)
                                                        <option value="{{$cat->ServiceCategoryID}}">{{$cat->ServiceCategoryName}}</option>
                                                        @endforeach
                                                    </select>
                                                    <span class="form-control-feedback bv-no-label" aria-hidden="true" data-bv-icon-for="servicecategory"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row m-t-5">
                                            <div class="col-md-11">
                                                <h5>Estimated Time: <span style="color: red">*</span></h5>
                                                <input type="number" min="0" id="estimatedtime" name="estimatedtime" placeholder="minutes" class="form-control m-t-10"/>
                                            </div>
                                        </div>
                                        <div class="form-group row m-t-5">
                                            <div class="col-md-11">
                                                <h5>Initial Price: <span style="color: red">*</span></h5>
                                                <input type="number" step="0.01" min="0.01" id="initialprice" name="initialprice" placeholder="Initial Price"class="form-control m-t-10"/>
                                            </div>
                                        </div><br>
                                        <!-- WARRANTY -->
                                        <div class="row m-t-5">
                                            <div class="col-md-6">
                                                <h5>Warranty: <span style="color: red"></span></h5>
                                                <p>
                                                    <input type="number" id="warranty" name="warranty" placeholder="Warranty" class="form-control m-t-10"/>
                                                </p>
                                            </div>
                                            <div class="col-md-5">
                                                <p class="m-t-25">
                                                    <select id="durationmode" name="durationmode" class=" form-control chzn-select m-t-10">
                                                        <option disabled selected>Choose Duration Mode</option>
                                                        <option value="Days">Day(s)</option>
                                                        <option value="Weeks">Week(s)</option>
                                                        <option value="Months">Month(s)</option>
                                                        <option value="Years">Year(s)</option>
                                                    </select>
                                                </p>
                                            </div><br>
                                        </div>
                                        <div class="form-group row m-t-5">
                                            <div class="col-md-11">
                                                <h5>Warranty(mileage): <span style="color: red"></span></h5>
                                                <input type="number" id="warrantymileage" name="warrantymileage" placeholder="Mileage" class="form-control m-t-10"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="examples transitions m-t-5">
                                            <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                                        </div>
                                        <div class="examples transitions m-t-5">
                                            <div class="examples transitions m-t-5">
                                                <input type="hidden" id="token" value="{{ csrf_token() }}">
                                                <button  type="submit" id='addforms' class="btn btn-success  source success_clr m-l-10 hvr-float-shadow adv_cust_mod_btn" data-dismiss="modal">
                                                    <i class="fa fa-save text-white"></i>
                                                    &nbsp; Save
                                                </button>
                                            </div>
=======
                                </div>
                            <div>
                                        <table class="table table-bordered table-hover table-advance dataTable no-footer" id="editable_table" role="grid">
                                            <thead>
                                                <tr role="row" class="even">

                                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 20%;"><b>Service Name</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 15%;"><b>Service Category</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 10%;"><b>Estimated Time</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 12%;"><b>Initial Price</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 10%;"><b>Warranty</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 15%;"><b>Skills</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 15%;"><b>Actions</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($service as $ser)
                                                <tr>
                                                    <td>{{$ser->ServiceName}}</td>
                                                    <td>{{$ser->ServiceCategoryName}}</td>
                                                    <td>{{$ser->EstimatedTime}} mins</td>
                                                    <td>Php {{$ser->InitialPrice}}</td>
                                                    <td>{{$ser->WarrantyDuration}}
                                                        {{$ser->WarrantyDurationMode}}</td>


                                                    <td>
                                                        @foreach($kill as $skill)
                                                        @if($skill->ServiceID == $ser->ServiceID)
                                                        <ul style="padding-left: 1.2em; line-height: 1;">
                                                            <li>{{$skill->Skill}}</li>
                                                        </ul>
                                                        @endif
                                                        @endforeach
                                                    </td>
                                            <td>
                                            <!--EDIT BUTTON-->
                                            <button name = '{{$ser->ServiceID}}' class="btn btn-success hvr-float-shadow adv_cust_mod_btn tipso_bounceIn" onclick="ret(this.name);" data-background="#3CB371" data-color="white" data-tipso="Edit" data-toggle="modal" data-href="#responsive" href="#editModal"><i class="fa fa-pencil text-white"></i>
                                            </button>

                                            <!--DELETE BUTTON-->
                                            <button name = '{{$ser->ServiceID}}' class="btn btn-danger hvr-float-shadow tipso_bounceIn" onclick="del(this.name);" data-toggle="modal" data-href="#responsive" href="#deleteModal" data-background="#FA8072" data-color="white" data-tipso="Delete"><i class="fa fa-trash text-white"></i>
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
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-pencil"></i>
                                            &nbsp;Edit Service</h4>
                            </div>

                            <div class="modal-body" style="padding-left: 47px;">

                                <div class="form-group row m-t-5">
                                    <div class="col-md-11">
                                        <input id = 'did' hidden="">
                                        <h5>Service Name: <span style="color: red">*</span></h5>
                                            <input id="eservicename" name="servicename" type="text" placeholder="Service Name" maxlength="255" required="required" class="form-control m-t-10">
                                    </div>
                                </div>

                                <div class=" row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Service Category: <span style="color: red">*</span></h5>
                                        <div class="m-t-10">
                                        </div>
                                        <div class="form-group">
                                            <select id="eservicecategory" name="servicecategory" class=" form-control chzn-select m-t-10">
                                                <option disabled selected>Please choose service category</option>
                                                @foreach($category as $cat)
                                                <option value="{{$cat->ServiceCategoryID}}">
                                                    {{$cat->ServiceCategoryName}}
                                                </option>
                                                @endforeach
                                            </select>

                                            <span class="form-control-feedback bv-no-label" aria-hidden="true" data-bv-icon-for="servicecategory"></span>
>>>>>>> guesshee-backup
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--END ADD MODAL -->

                    <!-- START DELETE MODAL -->
                    <div class="modal fade in " id="deleteModal" tabindex="-3" role="dialog" aria-hidden="false">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header bg-danger">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title text-white">
                                        <i class="fa fa-trash"></i>
                                        &nbsp;&nbsp;Delete this record?
                                    </h4>
                                </div>
<<<<<<< HEAD
                                <div class="modal-body">
                                    <div class="col m-t-15">
                                        <h5>Are you sure do you want to delete this record?</h5>
                                        <input id="deleteId" name="deleteId" type="hidden">
                                        <input type="hidden" id="token" value="{{ csrf_token() }}">
                                    </div>
                                </div>
                                <div class="modal-footer m-t-10">
                                    <div class="examples transitions m-t-5">
                                        <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Cancel</button>
                                    </div>
                                    <div class="examples transitions m-t-5">
                                        <button id="delete" class ='btn btn-danger source confirm m-l-10 adv_cust_mod_btn' data-dismiss='modal'><i class="fa fa-trash"></i>&nbsp;OK </button>
=======

                                <div class="form-group row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Estimated Time: <span style="color: red">*</span></h5>
                                            <input type="number" min="0" id="eestimatedtime" name="estimatedtime" placeholder="minutes" class="form-control m-t-10"/>
                                    </div>
                                </div>

                                <div class="row m-t-5">
                                    <div class="form-group col-md-6">
                                        <h5>Size Type: <span style="color: red"></span></h5>
                                            <input type="text" id="esizetype" name="sizetype" placeholder="Size Type" class="form-control m-t-10"/>
                                    </div>

                                    <div class="form-group col-md-5">
                                        <h5>Class: <span style="color: red"></span></h5>
                                            <input type="text" id="eclass" name="class" placeholder="Size Type" class="form-control m-t-10"/>
>>>>>>> guesshee-backup
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
<script type="text/javascript" src="vendors/snabbt/js/snabbt.min.js"></script>
<script type="text/javascript" src="vendors/wow/js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

<<<<<<< HEAD
<script>

    $("#addforms").on("click", function () {

      var servicename =  $('#servicename').val();
      var servicecategory = $('#servicecategory').val();
      var estimatedtime = $('#estimatedtime').val();
      var initialprice = $('#initialprice').val();
      var warranty = $('#warranty').val();
      var durationmode = $('#durationmode').val();
      var warrantymileage = $('#warrantymileage').val();

      $.ajax({
        type:"POST",
        url:"/addservice",
        data:
        {
          servicename:servicename,
          desc:servicecategory,
          item:estimatedtime,
          iprice:initialprice,
          warr:warranty,
          dm:durationmode,
          wm:warrantymileage,
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
          url:"/retservice",
          data:
          {
            id:id,
          },
          success: function(data){
            $(".chzn-select").chosen();

            document.getElementById('did').value = data['ret'][0]['ServiceID'];
            document.getElementById('eservicename').value = data['ret'][0]['ServiceName'];
            document.getElementById('eestimatedtime').value = data['ret'][0]['EstimatedTime'];
            document.getElementById('einitialprice').value = data['ret'][0]['InitialPrice'];
            document.getElementById('ewarranty').value = data['ret'][0]['WarrantyDuration'];
            document.getElementById('edurationmode').value = data['ret'][0]['WarrantyDurationMode'];
            document.getElementById('ewarrantymileage').value = data['ret'][0]['WarrantyMileage'];

            $('#eservicecategory').val(data['ret'][0]['ServiceCategoryID']).trigger('chosen:updated');

            $('#edurationmode').val(data['ret'][0]['WarrantyDurationMode']).trigger('chosen:updated');

        },
              error: function(xhr)
            {
              alert("Error!");
            }

          });

    }

    $("#editform").on("click", function () {

      var servicename =  $('#eservicename').val();
      var servicecategory = $('#eservicecategory').val();
      var estimatedtime = $('#eestimatedtime').val();
      var initialprice = $('#einitialprice').val();
      var warranty = $('#ewarranty').val();
      var durationmode = $('#edurationmode').val();
      var warrantymileage = $('#ewarrantymileage').val();
      var did = $('#did').val();

      $.ajax({
        type:"POST",
        url:"/editservice",
        data:
        {
          servicename:servicename,
          desc:servicecategory,
          item:estimatedtime,
          iprice:initialprice,
          warr:warranty,
          dm:durationmode,
          mil:warrantymileage,
          did:did,
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

=======
                                <div class="form-group row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Initial Price: <span style="color: red">*</span></h5>
                                            <input type="number" min="0.01" step="0.01" id="einitialprice" name="initialprice" placeholder="Initial Price"class="form-control m-t-10"/>
                                    </div>
                                </div>

                                <!-- WARRANTY -->
                                <div class="row m-t-5">
                                    <div class="col-md-6">
                                        <h5>Warranty (mileage): <span style="color: red"></span></h5>
                                        <p>
                                            <input type="text" id="ewarranty" name="warranty" placeholder="Warranty" class="form-control m-t-10"/>
                                        </p>
                                    </div>

                                    <div class="col-md-5">
                                        <p class="m-t-25">
                                            <select id="edurationmode" name="durationmode" class=" form-control chzn-select m-t-10">
                                                <option disabled selected>Choose Duration Mode</option>
                                                <option value="Day(s)">Day(s)</option>
                                                <option value="Week(s)">Week(s)</option>
                                                <option value="Month(s)">Month(s)</option>
                                                <option value="Year(s)">Year(s)</option>
                                            </select>
                                        </p>
                                    </div>
                                </div>

                                <!--Textfield: Mechanic Skills -->
                                <div class="row m-t-5">
                                <div class="col-md-11">
                                        <h5>Service Skills: <span style="color: red">*</span></h5>
                                        <div class ="m-t-10">
                                        </div>
                                        <div class="form-group">
                                          <select id="eskill" name="skill" class=" form-control chzn-select m-t-10" multiple>
                                                @foreach($perskill as $per)
                                                <option value="{{$per->SkillID}}">{{$per->Skill}}</option>
                                                @endforeach
                                            </select>
                                          <span class="form-control-feedback bv-no-label" aria-hidden="true" data-bv-icon-for="skill"></span>
                                      </div>
                                    </div>
                                </div>
                        </div>
>>>>>>> guesshee-backup


    function del(id){
    document.getElementById('deleteId').value = id;
      // alert(id);

<<<<<<< HEAD
    }

    $("#delete").on("click", function() {

      var del = $('#deleteId').val();

      $.ajax({
        type:"POST",
        url:"/delservice",
        data:
        {
          id:del,
          '_token': $('#token').val()
        },
        success: function(data){

                    location.reload();

                },
         error: function(xhr){

                    alert("Error!");
                }
        });
    });

</script>



<script type="text/javascript" src="vendors/jquery-validation/js/jquery.validate.js"></script>
<script type="text/javascript" src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>



<script type="text/javascript">
   $(document).ready(function() {
    $('#addForm')

    .find('[name="servicecategory"]')
            .chosen()
            .change(function(e) {
                $('#addForm').bootstrapValidator('revalidateField', 'servicecategory');
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
            servicename: {
                message: 'The service name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The service name is required and cannot be empty. '
                    },

                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'The service name only accept alphanumeric values. '
                    },
                    regexp: {
                        regexp: /^[^~`!$@#*_={}()%^&|\;<>,.?]+/,
                        message: 'The service name only accept alphanumeric values. '
                    },
                }
            },
            servicecategory: {
                    feedbackIcons: 'false',
                    trigger: 'focus blur',
                    live: 'enabled',
                    validators: {
                        callback: {
                            message: 'Please choose service category',
                            callback: function(value, validator) {
                                // Get the selected options
                                var options = validator.getFieldElements('servicecategory').val();
                                return (options != null && options.length >= 1);
                            }
                        }
                    },
                     notEmpty: {
                        message: 'The unit is required and cannot be empty. '
                    },
                },
            estimatedtime: {
                message: 'The estimated time is not valid',
                validators: {
                    notEmpty: {
                        message: 'The estimated time is required and cannot be empty. '
                    },
                regexp: {
                        regexp: /^(0|[1-9]\d*)(\.\d+)?$/,
                        message: 'The estimated time only accept numeric values. '
                    },
                }
            },
            initialprice: {
                // message: 'The initial price is not valid',
                validators: {
                    notEmpty: {
                        message: 'The initial price is required and cannot be empty. '
                    },
                regexp: {
                        regexp:/^(0|[1-9]\d*)(\.\d+)?$/,
                        message: 'The initial price only accept numeric values. '
                    },
                }
            },

        }
    })



});
=======
                            <div class="modal-footer">
                                <div class="examples transitions m-t-5">
                                    <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                                </div>
                                <div class="examples transitions m-t-5">
                                    <button type="submit" id='editform' form ="updateprod" class="btn btn-success  source success_clr m-l-10 hvr-float-shadow adv_cust_mod_btn" ><i class="fa fa-save text-white"></i>&nbsp; Save Changes
                                    </button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>

                <!-- END EDIT MODAL -->
                <!-- START ADD MODAL -->
                <div class="modal fade in " id="addModal" tabindex="-2" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <form id="addForm">
                        <div class="modal-content">
                            <div class="modal-header bg-info">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-plus"></i>
                                            &nbsp;Add Service</h4>
                            </div>
                            <div class="modal-body" style="padding-left: 47px;">

                                <div class="form-group row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Service Name: <span style="color: red">*</span></h5>
                                            <input id="servicename" name="servicename" type="text" placeholder="Service Name" maxlength="255" required="required" class="form-control m-t-10">
                                    </div>
                                </div>

                                <div class=" row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Service Category: <span style="color: red">*</span></h5>
                                        <div class="m-t-10">
                                        </div>
                                        <div class="form-group">
                                            <select id="servicecategory" name="servicecategory" class=" form-control chzn-select m-t-10">
                                                <option disabled selected>Please choose service category</option>
                                                @foreach($category as $cat)
                                                <option value="{{$cat->ServiceCategoryID}}">{{$cat->ServiceCategoryName}}</option>
                                                @endforeach
                                            </select>

                                            <span class="form-control-feedback bv-no-label" aria-hidden="true" data-bv-icon-for="servicecategory"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Estimated Time: <span style="color: red">*</span></h5>
                                            <input type="number" min="0" id="estimatedtime" name="estimatedtime" placeholder="minutes" class="form-control m-t-10"/>
                                    </div>
                                </div>

                                <div class="row m-t-5">
                                    <div class="form-group col-md-6">
                                        <h5>Size Type: <span style="color: red"></span></h5>
                                            <input type="text" id="sizetype" name="sizetype" placeholder="Size Type" class="form-control m-t-10"/>
                                    </div>

                                    <div class="form-group col-md-5">
                                        <h5>Class: <span style="color: red"></span></h5>
                                            <input type="text" id="class" name="class" placeholder="Size Type" class="form-control m-t-10"/>
                                    </div>
                                </div>


                                <div class="form-group row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Initial Price: <span style="color: red">*</span></h5>
                                            <input type="number" step="0.01" min="0.01" id="initialprice" name="initialprice" placeholder="Initial Price"class="form-control m-t-10"/>
                                    </div>
                                </div>

                                <!-- WARRANTY -->
                                <div class="row m-t-5">
                                    <div class="col-md-6">
                                        <h5>Warranty (mileage): <span style="color: red"></span></h5>
                                        <p>
                                            <input type="text" id="warranty" name="warranty" placeholder="Warranty" class="form-control m-t-10"/>
                                        </p>
                                    </div>

                                    <div class="col-md-5">
                                        <p class="m-t-25">
                                            <select id="durationmode" name="durationmode" class=" form-control chzn-select m-t-10">
                                                <option disabled selected>Choose Duration Mode</option>
                                                <option value="Day(s)">Day(s)</option>
                                                <option value="Week(s)">Week(s)</option>
                                                <option value="Month(s)">Month(s)</option>
                                                <option value="Year(s)">Year(s)</option>
                                            </select>
                                        </p>
                                    </div>
                                </div>

                                <!--Textfield: Mechanic Skills -->
                                <div class="row m-t-5">
                                <div class="col-md-11">
                                        <h5>Service Skills: <span style="color: red">*</span></h5>
                                        <div class ="m-t-10">
                                        </div>
                                        <div class="form-group">
                                          <select id="skill" name="skill" class=" form-control chzn-select m-t-10" multiple>
                                                @foreach($perskill as $per)
                                                <option value="{{$per->SkillID}}">{{$per->Skill}}</option>
                                                @endforeach
                                            </select>
                                          <span class="form-control-feedback bv-no-label" aria-hidden="true" data-bv-icon-for="skill"></span>
                                      </div>
                                    </div>
                                </div>
                                </div>
>>>>>>> guesshee-backup

</script>

<<<<<<< HEAD
<script type="text/javascript">
   $(document).ready(function() {
    $('#editForm')

    .find('[name="servicecategory"]')
            .chosen()
            .change(function(e) {
                $('#editForm').bootstrapValidator('revalidateField', 'servicecategory');
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
            servicename: {
                message: 'The service name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The service name is required and cannot be empty. '
                    },

                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'The service name only accept alphanumeric values. '
                    },
                    regexp: {
                        regexp: /^[^~`!$@#*_={}()%^&|\;<>,.?]+/,
                        message: 'The service name only accept alphanumeric values. '
                    },
                }
            },
            servicecategory: {
                    feedbackIcons: 'false',
                    trigger: 'focus blur',
                    live: 'enabled',
                    validators: {
                        callback: {
                            message: 'Please choose service category',
                            callback: function(value, validator) {
                                // Get the selected options
                                var options = validator.getFieldElements('servicecategory').val();
                                return (options != null && options.length >= 1);
                            }
                        }
                    },
                     notEmpty: {
                        message: 'The unit is required and cannot be empty. '
                    },
                },
            estimatedtime: {
                message: 'The estimated time is not valid',
                validators: {
                    notEmpty: {
                        message: 'The estimated time is required and cannot be empty. '
                    },
                regexp: {
                        regexp: /^(0|[1-9]\d*)(\.\d+)?$/,
                        message: 'The estimated time only accept numeric values. '
                    },
                }
            },
            initialprice: {
                message: 'The initial price is not valid',
                validators: {
                    notEmpty: {
                        message: 'The initial price is required and cannot be empty. '
                    },
                // regexp: {
                //         regexp:/^(0|[1-9]\d*)(\.\d+)?$/,
                //         message: 'The initial price only accept numeric values. '
                //     },
                }
            },
=======
                            <div class="modal-footer">
                                <div class="examples transitions m-t-5">
                                    <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                                </div>
                                <div class="examples transitions m-t-5">
                                    <div class="examples transitions m-t-5">
                                    <input type="hidden" id="token" value="{{ csrf_token() }}">
                                    <button  type="submit" id='addforms' class="btn btn-success  source success_clr m-l-10 hvr-float-shadow adv_cust_mod_btn" data-dismiss="modal"><i class="fa fa-save text-white"></i>&nbsp; Save
                                    </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                <!--END ADD MODAL -->


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
                                    <input type="hidden" id="token" value="{{ csrf_token() }}">
                                </div>
                            </div>
>>>>>>> guesshee-backup


        }
    })

<<<<<<< HEAD
=======

                            <div class="modal-footer m-t-10">
                                <div class="examples transitions m-t-5">
                                    <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Cancel</button>
                                </div>
                                <div class="examples transitions m-t-5">
                                    <button id="delete" class ='btn btn-danger source confirm m-l-10 adv_cust_mod_btn' data-dismiss='modal'><i class="fa fa-trash"></i>&nbsp;OK </button>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END DELETE MODAL -->
                <!-- END MODAL-->
>>>>>>> guesshee-backup


});

<<<<<<< HEAD
=======

<!-- global scripts sweet alerts-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="vendors/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/components.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="vendors/sweetalert/js/sweetalert2.min.js"></script>
<script type="text/javascript" src="js/pages/sweet_alerts.js"></script>
<script type="text/javascript" src="vendors/snabbt/js/snabbt.min.js"></script>
<script type="text/javascript" src="vendors/wow/js/wow.min.js"></script>
<script>
    new WOW().init();
</script>

<script>

    $("#addforms").on("click", function () {

      var servicename =  $('#servicename').val();
      var servicecategory = $('#servicecategory').val();
      var estimatedtime = $('#estimatedtime').val();
      var sizetype = $('#sizetype').val();
      var classs = $('#class').val();
      var initialprice = $('#initialprice').val();
      var warranty = $('#warranty').val();
      var durationmode = $('#durationmode').val();
      var skill = $('#skill').val();

      $.ajax({
        type:"POST",
        url:"/addservice",
        data:
        {
          servicename:servicename,
          desc:servicecategory,
          item:estimatedtime,
          sizetype:sizetype,
          class:classs,
          iprice:initialprice,
          warr:warranty,
          dm:durationmode,
          skill:skill,
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
          url:"/retservice",
          data:
          {
            id:id,
          },
          success: function(data){
            $(".chzn-select").chosen();
            sskill = [];
            sid = [];

            document.getElementById('did').value = data['ret'][0]['ServiceID'];
            document.getElementById('eservicename').value = data['ret'][0]['ServiceName'];
            document.getElementById('eestimatedtime').value = data['ret'][0]['EstimatedTime'];
            document.getElementById('esizetype').value = data['ret'][0]['SizeType'];
            document.getElementById('eclass').value = data['ret'][0]['Class'];
            document.getElementById('einitialprice').value = data['ret'][0]['InitialPrice'];
            document.getElementById('ewarranty').value = data['ret'][0]['WarrantyDuration'];
            document.getElementById('edurationmode').value = data['ret'][0]['WarrantyDurationMode'];

            $('#eservicecategory').val(data['ret'][0]['ServiceCategoryID']).trigger('chosen:updated');

            $('#edurationmode').val(data['ret'][0]['WarrantyDurationMode']).trigger('chosen:updated');


             for(var x=0;x<data.ski.length;x++)
             {
               sskill.push(data['ski'][x]['SkillID'])
               sid.push(data['ski'][x]['ServiceID'])
             }

            $("#eskill").val(sskill).trigger("chosen:updated");

               // alert(sskill);

        },
              error: function(xhr)
            {
              alert("Error!");
            }

          });

    }

    $("#editform").on("click", function () {

      var servicename =  $('#eservicename').val();
      var servicecategory = $('#eservicecategory').val();
      var estimatedtime = $('#eestimatedtime').val();
      var sizetype = $('#esizetype').val();
      var classs = $('#eclass').val();
      var initialprice = $('#einitialprice').val();
      var warranty = $('#ewarranty').val();
      var durationmode = $('#edurationmode').val();
      var skill = $('#eskill').val();
      var did = $('#did').val();

      $.ajax({
        type:"POST",
        url:"/editservice",
        data:
        {
          servicename:servicename,
          desc:servicecategory,
          item:estimatedtime,
          sizetype:sizetype,
          class:classs,
          iprice:initialprice,
          warr:warranty,
          dm:durationmode,
          skill:skill,
          did:did,
          sid:sid,
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
      // alert(id);

    }

    $("#delete").on("click", function() {

      var del = $('#deleteId').val();

      $.ajax({
        type:"POST",
        url:"/delservice",
        data:
        {
          id:del,
          '_token': $('#token').val()
        },
        success: function(data){

                    location.reload();

                },
         error: function(xhr){

                    alert("Error!");
                }
        });
    });

</script>



<script type="text/javascript" src="vendors/jquery-validation/js/jquery.validate.js"></script>
<script type="text/javascript" src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>



<script type="text/javascript">
   $(document).ready(function() {
    $('#addForm')

    .find('[name="servicecategory"]')
            .chosen()
            .change(function(e) {
                $('#addForm').bootstrapValidator('revalidateField', 'servicecategory');
            })
            .end()
    .find('[name="skill"]')
            .chosen()
            .change(function(e) {
                $('#addForm').bootstrapValidator('revalidateField', 'skill');
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
            servicename: {
                message: 'The service name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The service name is required and cannot be empty. '
                    },

                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'The service name only accept alphanumeric values. '
                    },
                    regexp: {
                        regexp: /^[^~`!$@#*_={}()%^&|\;<>,.?]+/,
                        message: 'The service name only accept alphanumeric values. '
                    },
                }
            },
            servicecategory: {
                    feedbackIcons: 'false',
                    trigger: 'focus blur',
                    live: 'enabled',
                    validators: {
                        callback: {
                            message: 'Please choose service category',
                            callback: function(value, validator) {
                                // Get the selected options
                                var options = validator.getFieldElements('servicecategory').val();
                                return (options != null && options.length >= 1);
                            }
                        }
                    },
                     notEmpty: {
                        message: 'The unit is required and cannot be empty. '
                    },
                },
            estimatedtime: {
                message: 'The estimated time is not valid',
                validators: {
                    notEmpty: {
                        message: 'The estimated time is required and cannot be empty. '
                    },
                regexp: {
                        regexp: /^(0|[1-9]\d*)(\.\d+)?$/,
                        message: 'The estimated time only accept numeric values. '
                    },
                }
            },
            initialprice: {
                // message: 'The initial price is not valid',
                validators: {
                    notEmpty: {
                        message: 'The initial price is required and cannot be empty. '
                    },
                regexp: {
                        regexp:/^(0|[1-9]\d*)(\.\d+)?$/,
                        message: 'The initial price only accept numeric values. '
                    },
                }
            },
            skill: {
                    feedbackIcons: 'false',
                    trigger: 'focus blur',
                    live: 'enabled',
                    validators: {
                        callback: {
                            message: 'Please choose service category',
                            callback: function(value, validator) {
                                // Get the selected options
                                var options = validator.getFieldElements('skill').val();
                                return (options != null && options.length >= 1);
                            }
                        }
                    },
                     notEmpty: {
                        message: 'The unit is required and cannot be empty. '
                    },
                },

        }
    })



});

</script>

<script type="text/javascript">
   $(document).ready(function() {
    $('#editForm')

    .find('[name="servicecategory"]')
            .chosen()
            .change(function(e) {
                $('#editForm').bootstrapValidator('revalidateField', 'servicecategory');
            })
            .end()
    .find('[name="skill"]')
            .chosen()
            .change(function(e) {
                $('#editForm').bootstrapValidator('revalidateField', 'skill');
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
            servicename: {
                message: 'The service name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The service name is required and cannot be empty. '
                    },

                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'The service name only accept alphanumeric values. '
                    },
                    regexp: {
                        regexp: /^[^~`!$@#*_={}()%^&|\;<>,.?]+/,
                        message: 'The service name only accept alphanumeric values. '
                    },
                }
            },
            servicecategory: {
                    feedbackIcons: 'false',
                    trigger: 'focus blur',
                    live: 'enabled',
                    validators: {
                        callback: {
                            message: 'Please choose service category',
                            callback: function(value, validator) {
                                // Get the selected options
                                var options = validator.getFieldElements('servicecategory').val();
                                return (options != null && options.length >= 1);
                            }
                        }
                    },
                     notEmpty: {
                        message: 'The unit is required and cannot be empty. '
                    },
                },
            estimatedtime: {
                message: 'The estimated time is not valid',
                validators: {
                    notEmpty: {
                        message: 'The estimated time is required and cannot be empty. '
                    },
                regexp: {
                        regexp: /^(0|[1-9]\d*)(\.\d+)?$/,
                        message: 'The estimated time only accept numeric values. '
                    },
                }
            },
            initialprice: {
                message: 'The initial price is not valid',
                validators: {
                    notEmpty: {
                        message: 'The initial price is required and cannot be empty. '
                    },
                // regexp: {
                //         regexp:/^(0|[1-9]\d*)(\.\d+)?$/,
                //         message: 'The initial price only accept numeric values. '
                //     },
                }
            },
            skill: {
                    feedbackIcons: 'false',
                    trigger: 'focus blur',
                    live: 'enabled',
                    validators: {
                        callback: {
                            message: 'Please choose skills',
                            callback: function(value, validator) {
                                // Get the selected options
                                var options = validator.getFieldElements('skill').val();
                                return (options != null && options.length >= 1);
                            }
                        }
                    },
                     notEmpty: {
                        message: 'The unit is required and cannot be empty. '
                    },
                },


        }
    })



});

>>>>>>> guesshee-backup
</script>

<!-- global scripts modals-->
<script type="text/javascript" src="js/pages/modals.js"></script>
<!--End of global scripts-->
@stop
