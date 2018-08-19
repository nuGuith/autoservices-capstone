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
                                                <tr role="row">
                                                    
                                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 25%;"><b>Service Name</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 20%;"><b>Service Category</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 15%;"><b>Estimated Time</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 15%;"><b>Initial Price</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 10%;"><b>Actions</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($services as $service)
                                                <tr>
                                                    
                                                    <td>{!!$service->ServiceName!!}</td>
                                                    <td>{!!$service->ServiceCategoryName!!}</td>
                                                    <td>{!!$service->EstimatedTime!!}mins</td>
                                                    <td>Php {!!$service->InitialPrice!!}</td>
                                                    <td>

                                                        <!--EDIT BUTTON-->
                                                        <button id="editBtn({!!$service->ServiceID!!})"class="btn btn-success hvr-float-shadow adv_cust_mod_btn tipso_bounceIn" onclick="editModal({!!$service->ServiceID!!})" data-background="#3CB371" data-color="white" data-tipso="Edit" data-toggle="modal" data-href="#responsive" href="#editModal"><i class="fa fa-pencil text-white"></i>
                                                        </button>
                                                              
                                                        <!--DELETE BUTTON-->
                                                        <button class="btn btn-danger hvr-float-shadow tipso_bounceIn" onclick="deleteModal({!!$service->ServiceID!!})"data-background="#FA8072" data-color="white" data-tipso="Delete"><i class="fa fa-trash text-white"></i>
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
            {!! Form::open(array('id' => 'editForm', 'url' => 'service', 'action' => 'ServiceController@update', 'method' => 'PUT')) !!}
            <div class="modal fade in " id="editModal" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-pencil"></i>
                                            &nbsp;Edit Service</h4>
                            </div>
                            <div class="modal-body" style="padding-left: 47px;">
                                <div class="row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Service Name: <span style="color: red">*</span></h5>
                                        <p>
                                            <input id="servicename" name="servicename" type="text" placeholder="Service Name" maxlength="255" required="required" class="form-control m-t-10">
                                        </p>
                                    </div>
                                </div>

                                <div class="row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Service Category: <span style="color: red">*</span></h5>
                                        <p class="m-t-10">
                                            {{ Form::select(
                                            'servicecategoryid',
                                            $categories,
                                            null,
                                            array(
                                            'class' => 'form-control chzn-select',
                                            'id' => 'servicecategoryid',
                                            'name' => 'servicecategoryid')
                                            ) 
                                            }}
                                        </p>
                                    </div>
                                </div>

                                <div class="row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Estimated Time: <span style="color: red">*</span></h5>
                                        <p>
                                            <input type="text" id="estimatedtime" name="estimatedtime" placeholder="minutes" class="form-control m-t-10"/>
                                        </p>
                                    </div>
                                </div>

                                <div class="row m-t-5">
                                    <div class="col-md-6">
                                        <h5>Size Type: <span style="color: red"></span></h5>
                                        <p>
                                            <input type="text" id="sizetype" name="sizetype" placeholder="Size Type" class="form-control m-t-10"/>
                                        </p>
                                    </div>

                                    <div class="col-md-5">
                                        <h5>Class: <span style="color: red"></span></h5>
                                        <p>
                                            <input type="text" id="sizetype" name="sizetype" placeholder="Size Type" class="form-control m-t-10"/>
                                        </p>
                                    </div>
                                </div>


                                <div class="row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Initial Price: <span style="color: red">*</span></h5>
                                        <p>
                                            <input type="text" id="initialprice" name="initialprice" placeholder="Initial Price"class="form-control m-t-10"/>
                                        </p>
                                        <input id="serviceid" name="serviceid" type="hidden" value=null>
                                    </div>
                                </div>

                                <!-- WARRANTY -->
                                <div class="row m-t-5">
                                    <div class="col-md-6">
                                        <h5>Warranty: <span style="color: red"></span></h5>
                                        <p>
                                            <input type="text" id="warranty" name="warranty" placeholder="Warranty" class="form-control m-t-10"/>
                                        </p>
                                    </div>

                                    <div class="col-md-5">
                                        <p class="m-t-25">
                                            <select id="durationmode" name="durationmode" class=" form-control chzn-select m-t-10">
                                                <option value="Days">Day(s)</option>
                                                <option value="Weeks">Week(s)</option>
                                                <option value="Months">Month(s)</option>
                                                <option value="Years">Year(s)</option>
                                            </select>
                                        </p>
                                    </div>
                                </div>

                                <!--Textfield: Steps -->
                                <div class="row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Steps: <span style="color: red"></span></h5>
                                        <textarea id="remark3" class="form-control m-t-10" cols="30" rows="2"></textarea>
                                    </div>                               
                                </div>

                                <br>

                                <div id="show-errors" style ="margin-right: 40px;">
                                    @if ($errors->update->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->update->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <br>
                                    @endif
                                </div>
                        </div>



                            <div class="modal-footer">
                                <div class="examples transitions m-t-5">
                                    <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                                </div>
                                <div class="examples transitions m-t-5">
                                    {!!  Form::button('<i class="fa fa-save text-white"></i>&nbsp; Save Changes', [
                                        'type'=>'submit',
                                        'class'=>'btn btn-success warning source cancel_edit m-l-10 hvr-float-shadow adv_cust_mod_btn',
                                        'data-dismiss'=>'modal'
                                    ])
                                    !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
                <!-- END EDIT MODAL -->
                <!-- START ADD MODAL -->
                {!! Form::open(array('id' => 'addForm', 'url' => 'service', 'action' => 'ServiceController@store', 'method' => 'POST')) !!}
                <div class="modal fade in " id="addModal" tabindex="-2" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-info">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-plus"></i>
                                            &nbsp;Add Service</h4>
                            </div>
                            <div class="modal-body" style="padding-left: 47px;">
                                <div class="row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Service Name: <span style="color:red;">*</span></h5>
                                        <p>
                                            {!! 
                                                Form::input ('servicename','text', Input::old('servicename'), [
                                                'id'=>'servicename',
                                                'name'=>'servicename',
                                                'type'=>'text',
                                                'placeholder'=>'Service Name',
                                                'class'=>'validate[required] form-control m-t-10',
                                                'maxlength'=>'255',
                                                'required'
                                                ])
                                            !!}
                                        </p>
                                    </div>
                                </div>

                                <div class="row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Service Category: <span style="color:red;">*</span></h5>
                                        <p class="m-t-10">
                                            {{ Form::select(
                                            'servicecategoryid',
                                            $categories,
                                            null,
                                            array(
                                            'class' => 'form-control chzn-select',
                                            'id' => 'servicecategoryid',
                                            'name' => 'servicecategoryid')
                                            ) 
                                            }}
                                        </p>
                                    </div>
                                </div>

                                <div class="row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Estimated Time: <span style="color:red;">*</span></h5>
                                        <p>
                                            {!! 
                                            Form::input ('estimatedtime','text', Input::old('estimatedtime'), [
                                            'id'=>'estimatedtime',
                                            'name'=>'estimatedtime',
                                            'type'=>'text',
                                            'placeholder'=>'minutes',
                                            'class'=>'form-control m-t-10',
                                            'maxlength'=>'3',
                                            'required'
                                            ])
                                            !!}
                                        </p>
                                    </div>
                                </div>


                                <div class="row m-t-5">
                                    <div class="col-md-6">
                                        <h5>Size Type: <span style="color:red;"></span></h5>
                                        <p>
                                            <input type="text" id="sizetype" name="sizetype" placeholder="Size Type" class="form-control m-t-10"/>
                                        </p>
                                    </div>

                                    <div class="col-md-5">
                                        <h5>Class: <span style="color:red;"></span></h5>
                                        <p>
                                            <input type="text" id="class" name="class" placeholder="Class" class="form-control m-t-10"/>
                                        </p>
                                    </div>
                                </div>

                                <div class="row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Initial Price: <span style="color:red;">*</span></h5>
                                        <p>
                                            {!! 
                                                Form::input ('initialprice','text', Input::old('initialprice'), [
                                                'id'=>'initialprice',
                                                'name'=>'initialprice',
                                                'type'=>'text',
                                                'placeholder'=>'Initial Price',
                                                'class'=>'form-control m-t-10',
                                                'required'
                                                ])
                                            !!}
                                        </p>
                                    </div>
                                </div>

                                <!-- WARRANTY -->
                                <div class="row m-t-5">
                                    <div class="col-md-6">
                                        <h5>Warranty: <span style="color: red"></span></h5>
                                        <p>
                                            <input type="text" id="warranty" name="warranty" placeholder="Warranty" class="form-control m-t-10"/>
                                        </p>
                                    </div>

                                    <div class="col-md-5">
                                        <p class="m-t-25">
                                            <select id="durationmode" name="durationmode" class=" form-control chzn-select m-t-10">
                                                <option value="Days">Day(s)</option>
                                                <option value="Weeks">Week(s)</option>
                                                <option value="Months">Month(s)</option>
                                                <option value="Years">Year(s)</option>
                                            </select>
                                        </p>
                                    </div>
                                </div>


                                <!--Textfield: Steps -->
                                <div class="row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Steps: <span style="color: red"></span></h5>
                                        <textarea id="remark3" class="form-control m-t-10" cols="30" rows="2"></textarea>
                                    </div>                               
                                </div>

                            
                                    <br>
                                    <div id="show-errors" style ="margin-right: 43px;">
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
                                    </div>
                                </div>


                            <div class="modal-footer">
                                <div class="examples transitions m-t-5">
                                    <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                                </div>
                                <div class="examples transitions m-t-5">
                                    {!! Form::button('<i class="fa fa-save text-white"></i>&nbsp;Save', [
                                        'type'=>'submit',
                                        'class'=>'btn btn-success warning source cancel_add m-l-10 adv_cust_mod_btn',
                                        'data-dismiss'=>'modal',
                                    ]) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
                <!--END ADD MODAL -->

                <!-- START DELETE MODAL -->
                {!! Form::open(array('id' => 'deleteForm', 'url' => 'service', 'action' => 'ServiceController@delete', 'method' => 'PATCH')) !!}
                <!-- {!! csrf_field() !!} -->
                <div class="modal fade in " id="deleteModal" tabindex="-3" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-danger">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-trash"></i>
                                            &nbsp;Delete Record</h4>
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
                                    {!! Form::button('<i class="fa fa-save text-white"></i>&nbsp;OK', [
                                        'type'=>'submit',
                                        'class'=>'btn btn-success warning source confirm m-l-10 adv_cust_mod_btn',
                                        'data-dismiss'=>'modal',
                                    ]) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
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
                url: "/service/"+id+"/edit",
                dataType: "JSON",
                success:function(data){
                    $("#servicename").val(data.service.ServiceName);
                    $("#servicecategoryid").val(data.service.ServiceCategoryID).trigger("chosen:updated");
                    $("#estimatedtime").val(data.service.EstimatedTime);
                    $("#sizetype").val(data.service.SizeType);
                    $("#class").val(data.service.Class);
                    $("#initialprice").val(data.service.InitialPrice);
                    $("#serviceid").val(data.service.ServiceID);
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
@stop