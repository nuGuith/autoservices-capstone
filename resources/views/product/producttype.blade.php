@extends('layout.master') <!-- Include Master Page -->
@section('Title','Product Type') <!-- Page Title -->
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

<!-- <style type="text/css">
#addForm.chosen-choices {
    border: 1px solid #ccc;
    border-radius: 4px;
    min-height: 34px;
    padding: 6px 12px;
}
#addForm .form-control-feedback:{
    /* To make the feedback icon visible */
    /*z-index: 100;*/
    /*float: bottom;*/
 }
<<<<<<< HEAD
=======

</style> -->
        <!-- CONTENT -->
        <div id="content" class="bg-container">
>>>>>>> guesshee-backup

</style> -->
    <!-- CONTENT -->
    <div id="content" class="bg-container">
        <header class="head">
            <div class="main-bar">
                <div class="row" style="height: 47px;">
                    <div class="col-6">
                        <h4 class="m-t-5" style="margin-top: 2.5%;">
                            <i class="fa fa-pencil-square-o"></i>
                            Product Type
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
                                <a href="/producttype">
                                    Product Type
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
                                &nbsp;  Add Product Type                                 
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
<<<<<<< HEAD
                        <div>
                            <table class="table table-bordered table-hover table-advance dataTable no-footer" id="editable_table" role="grid" id="tbl">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 25%;"><b>Product Type</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 25%;"><b>Product Category</b></th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width:20%"><b>Actions</b></th>  
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($producttypes as $producttype)
                                        <tr role="row" class="even">                  
                                            <td>{!! $producttype->ProductTypeName !!}</td>
                                            <td>{!! $producttype->CategoryName !!}</td>
                                            <td>
                                                <!--EDIT BUTTON-->
                                                <button class="btn btn-success hvr-float-shadow adv_cust_mod_btn tipso_bounceIn" data-background="#3CB371" data-color="white" data-tipso="Edit" data-toggle="modal" data-href="#responsive" id="editBtn{!!$producttype->ProductTypeID!!}" onclick="editModal({!!$producttype->ProductTypeID!!})"><i class="fa fa-pencil text-white"></i>
                                                </button>
                                                <!--DELETE BUTTON-->
                                                <button class="btn btn-danger hvr-float-shadow warning confirm tipso_bounceIn" onclick="deleteModal({!!$producttype->ProductTypeID!!})"  data-background="#FA8072" data-color="white" data-tipso="Delete"><i class="fa fa-trash text-white"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
=======
                        <div class="col-sm-6 col-12"  >
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item">
                                    <a href="#">
                                        <i class="fa fa-pencil-square-o"></i>
                                        Product Listing
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="/producttype">
                                        Product Type
                                    </a>
                                </li>
                            </ol>
>>>>>>> guesshee-backup
                        </div>
                    </div>
                    <!-- END TABLE -->

                    <form id="chosenForm" method="post" class="form-horizontal"></form>

                    <!-- START EDIT MODAL -->
                    {!! Form::open(array('id' => 'editForm', 'url' => 'producttype', 'action' => 'ProductTypeController@update', 'method' => 'PUT')) !!}
                    <div class="modal fade in " id="editModal" tabindex="-1" role="dialog" aria-hidden="false">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title text-white">
                                        <i class="fa fa-pencil"></i>
                                        &nbsp;Edit Product Type
                                    </h4>
                                </div>
<<<<<<< HEAD
                                <div class="modal-body" style="padding-left: 47px;">
                                    <div class="form-group row m-t-5">
                                        <div class="col-md-11">
                                            <h5>Product Type: <span style="color: red">*</span></h5>
=======
                            <div>
                                        <table class="table table-bordered table-hover table-advance dataTable no-footer" id="editable_table" role="grid" id="tbl">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 25%;"><b>Product Type</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 25%;"><b>Product Category</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width:20%"><b>Actions</b></th>  
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($producttypes as $producttype)
                                                <tr role="row" class="even">                  
                                                    <td>{!! $producttype->ProductTypeName !!}</td>
                                                    <td>{!! $producttype->CategoryName !!}</td>
                                                    <td>
                                                        <!--EDIT BUTTON-->
                                                        <button class="btn btn-success hvr-float-shadow adv_cust_mod_btn tipso_bounceIn" data-background="#3CB371" data-color="white" data-tipso="Edit" data-toggle="modal" data-href="#responsive" id="editBtn{!!$producttype->ProductTypeID!!}" onclick="editModal({!!$producttype->ProductTypeID!!})"><i class="fa fa-pencil text-white"></i>
                                                        </button>
                                                        
                                                        
                                                        <!--DELETE BUTTON-->
                                                        <button class="btn btn-danger hvr-float-shadow warning confirm tipso_bounceIn" onclick="deleteModal({!!$producttype->ProductTypeID!!})"  data-background="#FA8072" data-color="white" data-tipso="Delete"><i class="fa fa-trash text-white"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END TABLE -->



<form id="chosenForm" method="post" class="form-horizontal">
    
    
</form>

             <!-- START EDIT MODAL -->
           {!! Form::open(array('id' => 'editForm', 'url' => 'producttype', 'action' => 'ProductTypeController@update', 'method' => 'PUT')) !!}
            <div class="modal fade in " id="editModal" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white">
                                <i class="fa fa-pencil"></i>
                                    &nbsp;Edit Product Type
                                </h4>
                            </div>
                            <div class="modal-body" style="padding-left: 47px;">
                                
                                <div class="form-group row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Product Type: <span style="color: red">*</span></h5>
>>>>>>> guesshee-backup
                                            {{ Form::input('producttypename', 'text', Input::old('productypename'), [
                                                'id' => 'producttypename',
                                                'name' => 'producttypename',
                                                'class' => 'form-control m-t-10',
                                                'type' => 'text',
                                                'placeholder' => 'Product Type',
                                                'required'
                                                ])
                                            }}
<<<<<<< HEAD
                                            <input id="productcategoryid" name="" type="hidden" value=null>
                                        </div>
=======
                                        <input id="productcategoryid" name="" type="hidden" value=null>
                                    </div>
                                </div>

                                <div class="row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Product Category: <span style="color: red">*</span></h5>
                                            <p class="m-t-10">
                                            </p>
                                            <div class="form-group">
                                                {{ Form::select('productcategoryid', $categories, null, array(
                                                    'class' => 'form-control',
                                                    'id' => 'categoryid',
                                                    'name' => 'productcategoryid',
                                                    )
                                                    ) 
                                                }}
                                            <span class="form-control-feedback bv-no-label" aria-hidden="true" data-bv-icon-for="productcategoryid"></span>
                                        </div>
                                            
                                        <input id="producttypeid" name="producttypeid" type="hidden" value=null>
>>>>>>> guesshee-backup
                                    </div>
                                    <div class="row m-t-5">
                                        <div class="col-md-11">
                                            <h5>Product Category: <span style="color: red">*</span></h5>
                                                <p class="m-t-10"></p>
                                                <div class="form-group">
                                                    {{ Form::select('productcategoryid', $categories, null, array(
                                                        'class' => 'form-control',
                                                        'id' => 'categoryid',
                                                        'name' => 'productcategoryid',
                                                        )
                                                        ) 
                                                    }}
                                                <span class="form-control-feedback bv-no-label" aria-hidden="true" data-bv-icon-for="productcategoryid"></span>
                                            </div>
                                            <input id="producttypeid" name="producttypeid" type="hidden" value=null>
                                        </div>
                                    </div><br>
                                    <div id="show-errors">
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
<<<<<<< HEAD
                    {!! Form::close() !!}
                    <!-- END EDIT MODAL -->

                    <!-- START ADD MODAL -->
                    {!! Form::open(array('id' => 'addForm', 'url' => 'producttype', 'action' => 'ProductTypeController@store', 'method' => 'POST')) !!}
                    <div class="modal fade in " id="addModal" tabindex="-2" role="dialog" aria-hidden="false">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header bg-info">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title text-white">
                                        <i class="fa fa-plus"></i>
                                        &nbsp;Add Product Type
                                    </h4>
                                </div>
                                <div class="modal-body" style="padding-left: 47px;">
                                    <div class="row m-t-5">
                                        <div class="col-md-11">
                                            <h5>Product Category: <span style="color: red">*</span></h5>
                                            <p class="m-t-10"></p>
                                            <div class="form-group"> 
                                                {{ Form::select('productcategoryid', $categories, null, array(
                                                    'class' => 'chzn-select form-control',
                                                    'id' => 'categoryid',
                                                    'name' => 'productcategoryid',
                                                    'placeholder'=>'Please select a category', )
                                                    ) 
                                                }}
                                                <span class="form-control-feedback bv-no-label" aria-hidden="true" data-bv-icon-for="productcategoryid"></span>
                                            </div>  
                                        </div>
                                    </div>
                                    <div class="form-group row m-t-5">
                                        <div class="col-md-11">
                                            <h5>Product Type: <span style="color: red">*</span></h5>
=======
                </div>
                {!! Form::close() !!}
                <!-- START ADD MODAL -->
                {!! Form::open(array('id' => 'addForm', 'url' => 'producttype', 'action' => 'ProductTypeController@store', 'method' => 'POST')) !!}
                <div class="modal fade in " id="addModal" tabindex="-2" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-info">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-plus"></i>
                                            &nbsp;Add Product Type
                                </h4>
                            </div>
                            <div class="modal-body" style="padding-left: 47px;">
                            

                                <div class="row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Product Category: <span style="color: red">*</span></h5>
                                            <p class="m-t-10">
                                            </p>
                                            <div class="form-group"> 
                                                {{ Form::select('productcategoryid', $categories, null, array(
                                                'class' => 'chzn-select form-control',
                                                'id' => 'categoryid',
                                                'name' => 'productcategoryid',
                                                'placeholder'=>'Please select a category', )
                                                ) 
                                                }}
                                                <span class="form-control-feedback bv-no-label" aria-hidden="true" data-bv-icon-for="productcategoryid"></span>
                                            </div>  
                                    </div>
                                </div>

                                <div class="form-group row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Product Type: <span style="color: red">*</span></h5>
>>>>>>> guesshee-backup
                                            {{ 
                                                Form::input('producttypename', 'text', Input::old('producttypename'), [
                                                    'id' => 'producttypename',
                                                    'name' => 'producttypename',
                                                    'class' => 'form-control m-t-10',
                                                    'type' => 'text',
                                                    'placeholder' => 'Product Type',
                                                    'required'
                                                ])
                                            }}
<<<<<<< HEAD
                                        </div>
                                    </div>
                                    <!-- <div class="form-group ">
                                        <label class="col-sm-3 control-label">Favorite color</label>
                                        <div class="col-sm-5">
                                            <select class="form-control chosen-select" name="colors" multiple data-placeholder="Choose 2-4 colors" data-bv-trigger="blur">
                                                <option value="black">Black</option>
                                                <option value="blue">Blue</option>
                                                <option value="green">Green</option>
                                                <option value="orange">Orange</option>
                                                <option value="red">Red</option>
                                                <option value="yellow">Yellow</option>
                                                <option value="white">White</option>
                                            </select>
                                        </div>
                                    </div> --><br>
=======
                                    </div>
                                </div>

                                <!-- <div class="form-group ">
                                    <label class="col-sm-3 control-label">Favorite color</label>
                                    <div class="col-sm-5">
                                        <select class="form-control chosen-select" name="colors" multiple data-placeholder="Choose 2-4 colors" data-bv-trigger="blur">
                                            <option value="black">Black</option>
                                            <option value="blue">Blue</option>
                                            <option value="green">Green</option>
                                            <option value="orange">Orange</option>
                                            <option value="red">Red</option>
                                            <option value="yellow">Yellow</option>
                                            <option value="white">White</option>
                                        </select>
                                    </div>
                                </div> -->

                                    <br>
>>>>>>> guesshee-backup
                                    <div id="show-errors">
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
<<<<<<< HEAD
                                <div class="modal-footer">
                                    <div class="examples transitions m-t-5">
                                        <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                                    </div>
                                    <div class="form-group examples transitions m-t-5">
                                        {!! Form::button('<i class="fa fa-save text-white"></i>&nbsp;Save', [
                                            'type'=>'submit',
                                            'class'=>'btn btn-success warning source cancel_add m-l-10 adv_cust_mod_btn',
                                            'data-dismiss'=>'modal',
                                        ]) !!}
                                    </div>
=======
 


                            <div class="modal-footer">
                                <div class="examples transitions m-t-5">
                                    <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                                </div>
                                <div class="form-group examples transitions m-t-5">
                                    {!! Form::button('<i class="fa fa-save text-white"></i>&nbsp;Save', [
                                        'type'=>'submit',
                                        'class'=>'btn btn-success warning source cancel_add m-l-10 adv_cust_mod_btn',
                                        'data-dismiss'=>'modal',
                                    ]) !!}
>>>>>>> guesshee-backup
                                </div>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                    <!--END ADD MODAL -->

                    <!-- START DELETE MODAL -->
                    {!! Form::open(array('id' => 'deleteForm', 'url' => 'producttype', 'action' => 'ProductTypeController@delete', 'method' => 'PATCH')) !!}
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
<<<<<<< HEAD
                                <div class="modal-footer m-t-10">
                                    <div class="examples transitions m-t-5">
                                        <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Cancel</button>
                                    </div>
                                    <div class="form-group examples transitions m-t-5">
                                        {!! Form::button('<i class="fa fa-save text-white"></i>&nbsp;OK', [
                                            'type'=>'submit',
                                            'class'=>'btn btn-success warning source confirm m-l-10 adv_cust_mod_btn',
                                            'data-dismiss'=>'modal',
                                        ]) !!}
                                    </div>
=======
                                <div class="form-group examples transitions m-t-5">
                                    {!! Form::button('<i class="fa fa-save text-white"></i>&nbsp;OK', [
                                        'type'=>'submit',
                                        'class'=>'btn btn-success warning source confirm m-l-10 adv_cust_mod_btn',
                                        'data-dismiss'=>'modal',
                                    ]) !!}
>>>>>>> guesshee-backup
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
    /*function setSelected(id){
        var btn = "editBtn" + id;
        alert(document.getElementById("#tbl").rows[0].cols[1].innerHTML);
        document.getElementById("#productcategoryid").value = $(this).data("categoryname");
    }*/
     function editModal(id){
            $.ajax({
                type: "GET",
                url: "/producttype/"+id+"/edit",
                dataType: "JSON",
                success:function(data){
                    $("#producttypename").val(data.type.ProductTypeName);
                    $("#categoryid").val(data.type.ProductCategoryID).trigger('chosen:updated');
                    $("#producttypeid").val(data.type.ProductTypeID);
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

<<<<<<< HEAD
=======


>>>>>>> guesshee-backup
<script type="text/javascript">
    $(document).ready(function() {
    $('#addForm')
        .find('[name="productcategoryid"]')
            .chosen()
            // Revalidate the color when it is changed
            .change(function(e) {
                $('#addForm').bootstrapValidator('revalidateField', 'productcategoryid');
            })           
            .end()

<<<<<<< HEAD
=======

>>>>>>> guesshee-backup
        .find('[name="colors"]')
            .chosen()
            // Revalidate the color when it is changed
            .change(function(e) {
                $('#addForm').bootstrapValidator('revalidateField', 'colors');
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
        // excluded: [':disabled', ':hidden', ':not(:visible)'],    
        fields: {
            feedbackIcons: 'true',
                producttypename: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The category name is required and cannot be empty. '
                    },
                    
                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'The category name only accept alphanumeric values. '
                    },
                    regexp: {
                        regexp: /^[^~`!$@#*_={}()|\;<>,.?%^&]+/,
                        message: 'The service category name only accept alphanumeric values. '
                    },
                }
            },
                productcategoryid: {
                    feedbackIcons: 'false',
                    trigger: 'focus blur',
                    live: 'enabled',
                    validators: {
                        callback: {
                            message: 'Please choose a category',
                            callback: function(value, validator) {
                                // Get the selected options
                                var options = validator.getFieldElements('productcategoryid').val();
                                return (options != null && options.length >= 1);
                                // var options = validator.getFieldElements('productcategoryid').val();
                                // return (options != null && options.length >= 1 && options.length <= 4);
                            }
                        }
                    }
                },
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
                },
            }
        });
});
</script>



<script type="text/javascript">
   $(document).ready(function() {
    $('#editForm')
        .find('[name="productcategoryid"]')
            .chosen()
            // Revalidate the color when it is changed
            .change(function(e) {
                $('#editForm').bootstrapValidator('revalidateField', 'productcategoryid');
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
        // excluded: [':disabled', ':hidden', ':not(:visible)'],      
        fields: {
            producttypename: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The product type name is required and cannot be empty. '
                    },
                    
                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'The category name only accept alphanumeric values. '
                    },
                    regexp: {
                        regexp: /^[^~`!$@#*_={}()|\;<>,.?%^&]+/,
                        message: 'The service category name only accept alphanumeric values. '
                    },
                }
            },
            productcategoryid: {
                    feedbackIcons: 'false',
                    trigger: 'focus blur',
                    live: 'enabled',
                    validators: {
                        callback: {
                            message: 'Please choose a category',
                            callback: function(value, validator) {
                                // Get the selected options
                                var options = validator.getFieldElements('productcategoryid').val();
                                return (options != null && options.length >= 1);
                            }
                        }
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