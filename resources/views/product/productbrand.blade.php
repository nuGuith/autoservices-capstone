@extends('layout.master') <!-- Include Master Page -->
@section('Title','Product Brand') <!-- Page Title -->
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
                                <i class="fa fa-pencil-square-o"></i>
                                Product Brand
                            </h4>
                        </div>
                        <div class="col-sm-6 col-12"  >
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">
                                    <a href="#">
                                        <i class="fa fa-pencil-square-o"></i>
                                        Product Listing
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="/productbrand">
                                        Product Brand
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
                                            &nbsp;  Add Product Brand                               
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
                                                    <!-- <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 15%;"><b>Product Brand ID</b></th> -->
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 25%;"><b>Product Brand</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width:20%"><b>Actions</b></th>  
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach($productbrands as $productbrand)
                                                <tr style="padding-left: 1.2em;">
                                                    
                                                   <!--  <td>{!! $productbrand->ProductBrandID !!}</td> -->
                                                    <td>{!! $productbrand->BrandName !!}</td>
                                                    <td>
                                                        <!--EDIT BUTTON-->
                                                        <button class="btn btn-success hvr-float-shadow adv_cust_mod_btn tipso_bounceIn"onclick="editModal({!!$productbrand->ProductBrandID!!})"data-background="#3CB371" data-color="white" data-tipso="Edit" data-toggle="modal" data-href="#responsive" href="#editModal"><i class="fa fa-pencil text-white"></i>
                                                        </button>
                                                              
                                               

                                                        <!--DELETE BUTTON-->
                                                        <button class="btn btn-danger hvr-float-shadow tipso_bounceIn" onclick="deleteModal({!!$productbrand->ProductBrandID!!})" data-background="#FA8072" data-color="white" data-tipso="Delete"><i class="fa fa-trash text-white"></i>
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
            {!! Form::open(array('id' => 'editForm', 'url' => 'productbrand', 'action' => 'ProductBrandController@update', 'method' => 'PUT')) !!}
            <div class="modal fade in " id="editModal" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-pencil"></i>
                                            &nbsp;Edit Product Brand</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row m-t-10">
                                    <div class="col-md-11 m-l-20">
                                        <h5>Brand Name: <span style="color: red">*</span></h5>
                                            {!! 
                                                Form::input ('brandname','text', Input::old('brandname'), [
                                                'id'=>'brandname',
                                                'name'=>'brandname',
                                                'type'=>'text',
                                                'placeholder'=>'Brand Name',
                                                'class'=>'form-control m-t-10',
                                                'maxlength'=>'50',
                                                'required'
                                                ])
                                            !!}
                                        <input id="productbrandid" name="productbrandid" type="hidden" value=null>
                                    </div>
                                </div>
                                    <br>
                                    <div id="show-errors" style="margin-right: 43px;">
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
                {!! Form::open(array('id' => 'addForm', 'url' => 'productbrand', 'action' => 'ProductBrandController@store', 'method' => 'POST')) !!}
                <div class="modal fade in " id="addModal" tabindex="-2" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-info">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-plus"></i>
                                            &nbsp;Add Product Brand</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form-group row m-t-10">
                                    <div class="col-md-11 m-l-20">
                                        <h5>Brand Name: <span style="color: red">*</span></h5>
                                            {!! 
                                                Form::input ('brandname','text', Input::old('brandname'), [
                                                'id'=>'brandname',
                                                'name'=>'brandname',
                                                'type'=>'text',
                                                'placeholder'=>'Brand Name',
                                                'class'=>'form-control m-t-10',
                                                'maxlength'=>'50',
                                                'required'
                                                ])
                                            !!}
                                    </div>
                                </div>
                                    <br>
                                    <div id="show-errors" style="right: 45px;">
                                        @if ($errors->add->any())
                                            <div class="alert alert-danger" >
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
                {!! Form::open(array('id' => 'deleteForm', 'url' => 'productbrand', 'action' => 'ProductBrandController@delete', 'method' => 'PATCH')) !!}
                <!-- {!! csrf_field() !!} -->
                <div class="modal fade in " id="deleteModal" tabindex="-3" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-danger">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-trash"></i>
                                            &nbsp;Delete record?</h4>
                            </div>
                            <div class="modal-body">
                                <div class="col m-t-15">
                                    <h5>Are you sure do you want to delete this record?</h5>
                                    <input id="deleteId" name="deleteId" type="hidden" value=null>
                                </div>
                            </div>


                            <div class="modal-footer">
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
                url: "/productbrand/"+id+"/edit",
                dataType: "JSON",
                success:function(data){
                    $("#brandname").val(data.brand.BrandName);
                    $("#productbrandid").val(data.brand.ProductBrandID);
                }
            });
            $('#editModal').modal('show');
        }
    function deleteModal(id){
            document.getElementById("deleteId").value = id;
            $('#deleteModal').modal('show');
        }
</script>

<script type="text/javascript" src="vendors/jquery-validation/js/jquery.validate.js"></script>
<script type="text/javascript" src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>


<script type="text/javascript">
   $(document).ready(function() {

    $('#addForm').bootstrapValidator({
        message: 'This value is not valid', 
        // excluded: ':disabled',
        feedbackIcons: {
            required: 'fa fa-asterisk',
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh',
            },
        trigger: 'blur',
        submitButtons: 'button[type="submit"]',  
        excluded: [':disabled', ':hidden', ':not(:visible)'],    
        fields: {
            feedbackIcons: 'true',
            brandname: {
                message: 'The brand name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The brand name is required and cannot be empty. '
                    },
                    
                    regexp: {
                        regexp: /^[a-zA-Z]+$/,
                        message: 'The brand name only accept alphabet values. '
                    },
                    regexp: {
                        regexp: /^[^~`!$@#*_={}()|\;<>,.?%^&]+/,
                        message: 'The brand name only accept alphanumeric values. '
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

    .bootstrapValidator({
        message: 'This brand name is not valid',
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
            brandname: {
                message: 'The brand name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The brand name is required and cannot be empty. '
                    },
                    
                    regexp: {
                        regexp: /^[a-z A-Z]+$/,
                        message: 'The brand name only accept alphabet values. '
                    },
                    regexp: {
                        regexp: /^[^~`!$@#*_={}()|\;<>,.?%^&]+/,
                        message: 'The brand name only accept alphanumeric values. '
                    },
                }
            },
        }
    });

    
});
</script>





<!-- global scripts modals-->
<script type="text/javascript" src="js/pages/modals.js"></script>
<!--End of global scripts-->
@stop