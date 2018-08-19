@extends('layout.master') <!-- Include Master Page -->
@section('Title','Product') <!-- Page Title -->
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
                        <h4 class="m-t-15">
                        <i class="fa fa-pencil-square-o"></i>
                        Product</h4>
                    </div>
                    <div class="col-sm-6 col-12"  >
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">
                                <a href="{{ url('/dashboard') }}">
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
                                <a href="{{ url('/product') }}">
                                    Product
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
                                    &nbsp;  Add Product                                   
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
                            <table class="table  table-striped table-bordered table-hover table-advance dataTable no-footer" id="editable_table" role="grid">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 20%;">
                                            <b>Product ID</b>
                                        </th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 25%;">
                                            <b>Product Name</b>
                                        </th>
                                        <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 25%;">
                                            <b>Actions</b>
                                        </th>    
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr role="row" class="even"> 
                                        <td>{!! $product->ProductID !!}</td>
                                        <td class="center">{!! $product->ProductName !!}</td>
                                        <td>
                                        <!--SHOW BUTTON-->
                                        <button class="btn btn-warning" data-toggle="modal" data-href="#responsive" href="showModal"><i class="fa fa-eye"></i>
                                        &nbsp; Show
                                        </button>
                                        <!--EDIT BUTTON-->
                                        <button class="btn btn-success hvr-float-shadow adv_cust_mod_btn" id="editBtn" data-toggle="modal" data-href="#responsive" type="button"><i class="fa fa-pencil text-white"></i>&nbsp; Edit
                                        </button>
                                       <!--DELETE BUTTON-->
                                        <button class="btn btn-danger source warning confirm hvr-float-shadow" onclick="deleteModal({!!$product->ProductID!!})" style="width: 70px"><i class="fa fa-trash text-white"></i> &nbsp; Delete 
                                        </button>
                                        </td>
                                    </tr>
                                @endforeach 
                                </tbody>
                            </table>
                        </div>
                    </div>
                                <!-- END EXAMPLE TABLE PORTLET-->

                        <!-- EDIT PRODUCT-->
                    {!! Form::open(array('id' => 'editForm', 'url' => 'product', 'action' => 'ProductController@update', 'method' => 'PUT')) !!}
                    <div class="modal fade in " id="editModal" tabindex="-1" role="dialog" aria-hidden="false">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <h4 class="modal-title text-white"><i class="fa fa-pencil"></i>
                                    &nbsp;&nbsp;Edit Product</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-5"><br>
                                            <h4 style="font-weight:bold">Product Information</h4><br>
                                            <h4>Type</h4>
                                            <select id="type" name="type" class="form-control" style="width:225px" required>
                                                @foreach($products as $product)
                                                    <option value="{{$product->ProductTypeID}}">{{ $product->ProductTypeName }}</option>
                                                @endforeach
                                            </select><br>
                                            <h4>Brand</h4>
                                            <select id="brand" name="brand" class="form-control" style="width:225px" required>
                                                @foreach($products as $product)
                                                    <option value="{{$product->ProductBrandID}}">{{ $product->BrandName }}</option>
                                                @endforeach
                                            </select><br>
                                            <table>
                                                <tr>
                                                    <td><h4>Warranty Detail</h4></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" class="form-control" name="duration" id="duration" placeholder="0" style="width:125px; height:37px">
                                                    </td>
                                                    <td>
                                                        <select id="durationmode" name="durationmode" class="form-control" style="width:100px; length:50px">
                                                            <option value="day">Days</option>
                                                            <option value="week">Weeks</option>
                                                            <option value="month">Months</option>
                                                            <option value="year">Years</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </table>       
                                        </div>
                                        <div class="col-md-4"><br><br><br>
                                            <table>
                                                <tr>
                                                    <td><h4>Size</h4></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" class="form-control" name="size" id="size" placeholder="0" style="width:165px; height:37px" required>
                                                    </td>
                                                    <td>
                                                        <select id="unit" name="unit" class="form-control" style="width:80px" required>
                                                            @foreach($products as $product)
                                                            <option value="{{$product->ProductUnitTypeID}}">{{ $product->Unit }}</option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                </tr>
                                            </table><br>
                                            <h4>Product</h4>
                                            <input type="text" class="form-control" name="productname" id="productname" placeholder="Name" style="width:250px; height:37px" required><br>
                                            <h4>Price</h4>
                                            <div class="input-group input_top_align" style="width:250px; height:37px" required>
                                                <span class="input-group-addon">₱</span>
                                                <input type="text" class="form-control" name="price" id="price">
                                                <span class="input-group-addon">.00</span>
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="card-footer bg-black disabled">
                                        <div class="examples transitions m-t-5 pull-right">
                                            <button onclick="window.location='{{ url("/product") }}'" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn" href="/product">Back</button>    {{ Form::button('<i class="fa fa-save text-white"></i>&nbsp; Save Changes', [
                                                'type' => 'submit',
                                                'class' => 'btn btn-success warning source cancel_add m-l-10 adv_cust_mod_btn',
                                                'data-dismiss' => 'modal',
                                                'style' => 'width:150px'
                                                ])
                                            }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END modal-->

                    <!-- ADD PRODUCT-->
                    {!! Form::open(array('id' => 'addForm', 'url' => 'product', 'action' => 'ProductController@store', 'method' => 'GET')) !!}
                    <div class="modal fade in " id="addModal" tabindex="-1" role="dialog" aria-hidden="false">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title text-white">
                                    <i class="fa fa-pencil"></i>
                                    &nbsp;&nbsp;Add Product</h4>
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-md-5"><br>
                                            <h4 style="font-weight:bold">Product Information</h4><br>
                                            <h4>Type</h4>
                                            {{
                                                Form::select('producttypeid', $types, null, array(
                                                    'class' => 'form-control',
                                                    'id' => 'producttypeid',
                                                    'name' => 'producttypeid')
                                                ) 
                                            }}<br>
                                            <h4>Brand</h4>
                                            {{
                                                Form::select('productbrandid', $brands, null, array(
                                                    'class' => 'form-control',
                                                    'id' => 'productbrandid',
                                                    'name' => 'productbrandid')
                                                ) 
                                            }}<br>
                                            <h4>Description</h4>
                                            {{
                                                Form::input('description', 'text', Input::old('description'),[
                                                    'id' => 'description',
                                                    'name' => 'description',
                                                    'class' => 'form-control',
                                                    'type' => 'text',
                                                    'placeholder' => 'Description',
                                                    'style' => 'width:225px'
                                                ])
                                            }}
                                            <table>
                                                <tr>
                                                    <td><h4>Warranty Detail</h4></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                    {{ 
                                                        Form::input('duration', 'text', Input::old('duration'), [
                                                            'id' => 'duration',
                                                            'name' => 'duration',
                                                            'class' => 'form-control',
                                                            'type' => 'text',
                                                            'placeholder' => '0',
                                                            'style' => 'width:125px; height:37px',
                                                            'required'
                                                        ])
                                                    }}
                                                    </td>
                                                    <td>
                                                        <select id="durationmode" name="durationmode" class="form-control" style="width:100px; length:50px">
                                                            <option value="day">Days</option>
                                                            <option value="week">Weeks</option>
                                                            <option value="month">Months</option>
                                                            <option value="year">Years</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </table>       
                                        </div>
                                        <div class="col-md-4"><br><br><br>
                                            <table>
                                                <tr>
                                                    <td><h4>Size</h4></td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        {{ 
                                                            Form::input('size', 'text', Input::old('size'), [
                                                                'id' => 'size',
                                                                'name' => 'size',
                                                                'class' => 'form-control',
                                                                'type' => 'text',
                                                                'placeholder' => '0',
                                                                'style' => 'width:165px; height:37px',
                                                                'required'
                                                            ])
                                                        }}
                                                    </td>
                                                    <td>
                                                    {{
                                                        Form::select('productunittypeid', $unittypes, null, array(
                                                            'class' => 'form-control',
                                                            'id' => 'productunittypeid',
                                                            'name' => 'productunittypeid')
                                                        ) 
                                                    }}
                                                    </td>
                                                </tr>
                                            </table><br>
                                            <h4>Product</h4>
                                            {{ 
                                                Form::input('productname', 'text', Input::old('productname'), [
                                                    'id' => 'productname',
                                                    'name' => 'productname',
                                                    'class' => 'form-control',
                                                    'type' => 'text',
                                                    'placeholder' => 'Name',
                                                    'style' => 'width:250px; height:37px',
                                                    'required'
                                                ])
                                            }}<br>
                                            <h4>Price</h4>
                                            <div class="input-group input_top_align" style="width:250px; height:37px" required>
                                                <span class="input-group-addon">₱</span>
                                                {{ 
                                                    Form::input('price', 'text', Input::old('price'), [
                                                        'id' => 'price',
                                                        'name' => 'price',
                                                        'class' => 'form-control',
                                                        'type' => 'text',
                                                        'required'
                                                    ])
                                                }}
                                                <span class="input-group-addon">.00</span>
                                            </div>
                                        </div>
                                    </div><br>
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
                    </div>    
                <!-- END MODAL-->

                <!-- SHOW MODAL -->
                {!! Form::open(array('id' => 'showForm', 'method' => 'GET', 'url' => 'product', 'action' => 'ProductController@show')) !!}
                    <div class="modal fade in " id="showModal" tabindex="-3" role="dialog" aria-hidden="false">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header bg-primary">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title text-white"><i class="fa fa-pencil"></i>
                                        &nbsp;&nbsp;Product Information</h4>
                                </div>
                                <div class="modal-body">
                                    <center>
                                        <table>
                                            @foreach($products as $product)
                                                <tr>
                                                    <td><h5>Product ID:</h5></td>
                                                    <td><h5>{{ $product->ProductID }}</h5></td>
                                                </tr>
                                                <tr>
                                                    <td><h5>Product Name:</h5></td>
                                                    <td><h5>{{ $product->ProductName }}</h5></td>
                                                </tr>
                                                <tr>
                                                    <td><h4></h4></td>
                                                    <td><h4></h4></td>
                                                </tr>
                                                
                                                <tr>
                                                    <td><h5>Product Type:</h5></td>
                                                    <td><h5>{{ $product->ProductTypeName }}</h5></td>
                                                </tr>
                                                <tr>
                                                    <td><h5>Product Brand:</h5></td>
                                                    <td><h5>{{ $product->BrandName }}</h5></td>
                                                </tr>
                                                <tr>
                                                    <td><h5>Product Unit:</h5></td>
                                                    <td><h5>{{ $product->Size }} {{ $product->Unit }}</h5></td>
                                                </tr>
                                                <tr>
                                                    <td><h5>Description:</h5></td>
                                                    <td><h5>{{ $product->Description }}</h5></td>
                                                </tr>

                                                <tr>
                                                    <td><h5>Price:</h5></td>
                                                    <td><h5>{{ $product->Price }}</h5></td>
                                                </tr>
                                                @foreach($prodwarranties as $warranty)    
                                                    <tr>
                                                        <td><h5>Warranty:</h5></td>
                                                        <td><h5>{{ $warranty->Duration }} {{ $warranty->DurationMode }}</h5></td>
                                                    </tr>
                                                @endforeach
                                            @endforeach
                                        </table>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                <!-- END modal-->

                <!-- START DELETE MODAL -->
                    {!! Form::open(array('id' => 'deleteForm', 'method' => 'PATCH', 'url' => 'product', 'action' => 'ProductController@delete')) !!}
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
    function setSelected(id){
        var btn = "editBtn" + id;
        alert(document.getElementById("#tbl").rows[0].cols[1].innerHTML);
        document.getElementById("#productcategoryid").value = $(this).data("categoryname");
    }
     function editModal(id){
            $.ajax({
                type: "GET",
                url: "/product/"+id+"/edit",
                dataType: "JSON",
                success:function(data){
                    $("#producttypeid").val(data.type.ProductTypeID);
                    $("#productbrandid").val(data.type.ProductBrandID);
                    $("#productunittypeid").val(data.type.ProductUnitTypeID);
                    $("#productname").val(data.type.ProductName);
                    $("#description").val(data.type.Description);
                    $("#price").val(data.type.Price);
                    $("#size").val(data.type.Size);
                    $("#duration").val(data.type.Duration);
                    $("#durationmode").val(data.type.DurationMode);
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
@endsection