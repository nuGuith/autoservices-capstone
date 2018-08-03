@extends('layout.master') <!-- Include Master PAge -->
@section('Title','Product Type') <!-- Page Title -->
@section('content')

    <link type="text/css" rel="stylesheet" href="{{ url('/vendors/sweetalert/css/sweetalert2.min.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ url('/css/pages/sweet_alert.css') }}"/>

    <link type="text/css" rel="stylesheet" href="{{ url('/vendors/animate/css/animate.min.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ url('/vendors/hover/css/hover-min.css')}}"/>
    <link type="text/css" rel="stylesheet" href="{{ url('/vendors/wow/css/animate.css') }}"/>

    <link type="text/css" rel="stylesheet" href="{{ url('/vendors/modal/css/component.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ url('/vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{ url('/vendors/animate/css/animate.min.css')}}" />

    <link type="text/css" rel="stylesheet" href="{{ url('/css/pages/animations.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ url('/css/pages/portlet.css') }}"/>
    <link type="text/css" rel="stylesheet" href="{{ url('/css/pages/advanced_components.css') }}"/>

    <!-- CONTENT -->
    <div id="content" class="bg-container">
        <header class="head">
            <div class="main-bar">
                <div class="row" style="height: 47px;">
                    <div class="col-6">
                        <h4 class="m-t-15">
                        <i class="fa fa-pencil-square-o"></i>
                            Product Type
                        </h4>
                    </div>
                    <div class="col-sm-6 col-12"  >
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/') }}">
                                    <i class="fa fa-home"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="#">
                                    <i class="fa fa-pencil-square-o"></i>
                                    Product Listing
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ url('/type') }}">
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
                                    <div class="tools">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <table class="table table-striped table-bordered table-hover table-advance dataTable no-footer" id="editable_table" role="grid">
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
                                            <button class="btn btn-success hvr-float-shadow adv_cust_mod_btn" data-toggle="modal" data-href="#responsive" href="#editModal"><i class="fa fa-pencil text-white"></i>
                                            &nbsp; Edit
                                            </button>
                                            <!--DELETE BUTTON-->
                                            <button class="btn btn-danger source warning confirm hvr-float-shadow" style = "width: 70px "><i class="fa fa-trash text-white"></i>
                                            &nbsp; Delete
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->

                    <!-- EDIT PRODUCT TYPE-->
                    {!! Form::open(array('id' => 'editForm', 'url' => 'type', 'action' => 'ProductTypeController@update', 'method' => 'PUT')) !!}
                    <div class="modal fade in " id="editModal" tabindex="-1" role="dialog" aria-hidden="false">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title text-white">
                                    <i class="fa fa-pencil"></i>
                                        &nbsp;&nbsp;Edit Product Type</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12"><br>
                                            <h4 style="font-weight:bold">Product Type Information</h4><br>
                                            <h4>Product Type</h4>
                                            {{ Form::input('producttypename', 'text', null, [
                                                    'id' => 'producttypename',
                                                    'name' => 'producttypename',
                                                    'class' => 'form-control',
                                                    'type' => 'text',
                                                    'style' => 'text-align:right; width:200px',
                                                    'placeholder' => 'Product Type',
                                                    'required'
                                                ])
                                            }}
                                            <br>
                                            <h4>Product Category</h4>
                                            {{ Form::select('producttypeid', $producttypes, null, array(
                                                'class' => 'form-control',
                                                'id' => 'producttypeid',
                                                'name' => 'producttypeid')
                                                ) 
                                            }}
                                            <br>
                                            <div id="show-errors">
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                            </div>
                                            <br>
                                        </div>    
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="examples transitions m-t-5">
                                        <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                                    </div>
                                    <div class="examples transitions m-t-5">
                                    {{ Form::button('<i class="fa fa-save text-white"></i>&nbsp; Save Changes', [
                                        'type' => 'submit',
                                        'class' => 'btn btn-success warning source cancel_add m-l-10 adv_cust_mod_btn',
                                        'data-dismiss' => 'modal'
                                        ])
                                    }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ADD PRODUCT TYPE-->
                    {!! Form::open(array('id' => 'addForm', 'url' => 'type', 'action' => 'ProductTypeController@store', 'method' => 'POST')) !!}
                    <div class="modal fade in " id="addModal" tabindex="-1" role="dialog" aria-hidden="false">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title text-white"><i class="fa fa-pencil"></i>
                                        &nbsp;&nbsp;Add Product Type</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12"><br>
                                            <h4 style="font-weight:bold">Product Type Information</h4><br>
                                            <h4>Product Type</h4>
                                            {{ Form::input('producttypename', 'text', Input::old('producttypename'), [
                                                    'id' => 'producttypename',
                                                    'name' => 'producttypename',
                                                    'class' => 'form-control',
                                                    'type' => 'text',
                                                    'style' => 'text-align:right; width:200px',
                                                    'placeholder' => 'Product Type',
                                                    'required'
                                                ])
                                            }}<br>
                                            <h4>Product Category</h4>
                                            {{ Form::select('productcategoryid', $producttypes, null, array(
                                                'class' => 'form-control',
                                                'id' => 'productcategoryid',
                                                'name' => 'productcategoryid')
                                                ) 
                                            }}
                                            <br>
                                            <div id="show-errors">
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                            </div>
                                            <br>
                                        </div>    
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <div class="examples transitions m-t-5">
                                        <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                                    </div>
                                    <div class="examples transitions m-t-5">
                                    {{ Form::button('<i class="fa fa-save text-white"></i>&nbsp; Save Changes', [
                                        'type' => 'submit',
                                        'class' => 'btn btn-success warning source cancel_add m-l-10 adv_cust_mod_btn',
                                        'data-dismiss' => 'modal'
                                        ])
                                    }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                        <!-- START DELETE MODAL -->
                    {!! Form::open(array('id' => 'deleteForm', 'method' => 'PATCH', 'url' => 'type', 'action' => 'ProductTypeController@delete')) !!}
                    <div class="modal fade in " id="deleteModal" tabindex="-3" role="dialog" aria-hidden="false">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title text-white"><i class="fa fa-pencil"></i>
                                        &nbsp;&nbsp;Delete this record?</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="col">
                                        <div class="col-xl-12" style="padding-right:25px;">
                                            <br>
                                            <p>Are you sure you want to delete this record?</p>
                                        </div>
                                        <div class="col-xl-12">
                                            <table id="myTable" class="table order-list" >
                                                <tbody>
                                                    <tr>
                                                        <td><input id="deleteId" name="deleteId" type="hidden" value=null></td>
                                                    </tr>
                                                </tbody>
                                            </table>                                        
                                        </div>
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
                <!-- END modal-->
                </div>
            </div>
        </div>
      <!-- /.inner -->
    </div>
      <!-- /.outer -->
<!--END CONTENT -->
@endsection

<!-- scripts -->
<script type="text/javascript" src="{{ url('/vendors/datatables/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ url('/js/components.js') }}"></script>
<script type="text/javascript" src="{{ url('/js/custom.js') }}"></script>
<script type="text/javascript" src="{{ url('/vendors/sweetalert/js/sweetalert2.min.js') }}"></script>
<script type="text/javascript" src="{{ url('/js/pages/sweet_alerts.js') }}"></script>
<script type="text/javascript" src="{{ url('/vendors/snabbt/js/snabbt.min.js') }}"></script>
<script type="text/javascript" src="{{ url('/vendors/wow/js/wow.min.js') }}"></script>

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
                url: "/type/"+id+"/edit",
                dataType: "JSON",
                success:function(data){
                    $("#producttypename").val(data.type.ProductTypeName);
                    $("#productcategoryid").val(data.type.ProductCategoryID);
                }
            });
            $('#editModal').modal('show');
        }
        function deleteModal(id){
            document.getElementById("deleteId").value = id;
            $('#deleteModal').modal('show');
        }
</script>
<script type="text/javascript" src="{{ url('/js/pages/modals.js') }}"></script>
<!--end script-->