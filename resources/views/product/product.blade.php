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
                            <table class="table table-bordered table-hover table-advance dataTable no-footer" id="editable_table" role="grid">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting wid-25" style="width: 25px;">
                                            <b>Product Name</b>
                                        </th>
                                        <th class="sorting wid-20" style="width: 25px;">
                                            <b>Product Type</b>
                                        </th>
                                        <th class="sorting wid-20" style="width: 25px;">
                                            <b>Product Brand</b>
                                        </th>
                                        <th class="sorting wid-20" style="width: 25px;">
                                            <b>Size</b>
                                        </th>
                                        <th class="sorting wid-10"  style="width: 15px;">
                                            <b>Price</b>
                                        </th>
                                        <th class="sorting "  style="width: 15px;">
                                            <b>Warranty</b>
                                        </th>
                                        <th class="sorting wid-10"  style="width: 15px;">
                                            <b>Actions</b>
                                        </th>    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr> 
                                    @foreach($product as $product)
                                        <td>{{$product->ProductName}}</td>
                                        <td class="center">{{$product->ProductTypeName}}</td>
                                        <td>{{$product->BrandName}}</td>
                                        <td>{{$product->Size}}</td>
                                        <td>{{$product->Price}}</td>
                                        <td></td>
                                        <td>



                                        <!--EDIT BUTTON-->
                                        <button class="btn btn-success hvr-float-shadow adv_cust_mod_btn tipso_bounceIn" data-background="#3CB371" data-color="white" data-tipso="Edit" data-toggle="modal" data-href="#responsive" href="#editModal" onclick="updateProductGet(this.name);" name="{{$product->ProductID}}"><i class="fa fa-pencil text-white"></i>
                                        </button>
                                              
                                        <!--DELETE BUTTON-->
                                        <button class="btn btn-danger hvr-float-shadow warning confirm tipso_bounceIn"  data-background="#FA8072" data-color="white" data-tipso="Delete" data-toggle="modal" data-href="#responsive" href="#deleteModal"  onclick="deleteProductGet(this.name);" name="{{$product->ProductID}}"><i class="fa fa-trash text-white"></i>
                                        </button>

                                        </td>
                                    </tr> 
                                </tbody>
                                    @endforeach
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->

            <!--EDIT MODAL -->
            <form method = "POST" action = "/addproduct" id="addprod">
                {!! csrf_field() !!}
            <div class="modal fade in " id="addModal" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-info">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-plus"></i>
                                            &nbsp;Add Product</h4>
                            </div>

                            <div class="modal-body" style="padding-left: 47px;">
                                <div class="row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Product Name: <span style="color: red">*</span></h5>
                                        <p>
                                            <input id="productname" name="productname" type="text" placeholder="Product Name" maxlength="255" class="form-control m-t-10">
                                        </p>
                                    </div>
                                </div>

                                <div class="row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Product Type: <span style="color: red">*</span></h5>
                                        <p class="m-t-10">
                                            <select id="producttype" name="producttype" class=" form-control chzn-select m-t-10">
                                                <option disabled selected>Choose Product Type</option>
                                                @foreach($prodtype as $prodtype)
                                                {
                                                <option value="{{$prodtype->ProductTypeID}}">{{$prodtype->ProductTypeName}}</option>
                                                }
                                                @endforeach
    
                                                    

                                            </select>
                                        </p>
                                    </div>
                                </div>

                                <div class="row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Brand: <span style="color: red">*</span></h5>
                                        <p class="m-t-10">
                                            <select id="brand" name="brand" class=" form-control chzn-select m-t-10">
                                                <option disabled selected>Choose Brand</option>
                                                @foreach($prodbrand as $prodbrand)
                                                {
                                                <option value="{{$prodbrand->ProductBrandID}}">{{$prodbrand->BrandName}}</option>
                                                }
                                                @endforeach
                                            </select>
                                        </p>
                                    </div>
                                </div>

                                <div class="row m-t-5">
                                    <div class="col-md-6">
                                        <h5>Size: <span style="color: red">*</span></h5>
                                        <p>
                                            <input type="text" id="size" name="size" placeholder="Size" class="form-control m-t-10"/>
                                        </p>
                                    </div>

                                    <div class="col-md-5">
                                        <h5>Unit: <span style="color: red">*</span></h5>
                                        <p class="m-t-10">
                                            <select id="unit" name="unit" class=" form-control chzn-select m-t-10">
                                                <option disabled selected>Choose Product Unit</option>
                                                @foreach($produnittype as $produnittype)
                                                {
                                                <option value="{{$produnittype->ProductUnitTypeID}}">{{$produnittype->UnitTypeName}}</option>
                                                }
                                                @endforeach
                                            </select>
                                        </p>
                                    </div>
                                </div>


                                <div class="row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Price: <span style="color: red">*</span></h5>
                                        <p>
                                            <input type="text" id="price" name="price" placeholder="Price"class="form-control m-t-10"/>
                                        </p>
                                    </div>
                                </div>

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

                                <div class="row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Description: <span style="color: red"></span></h5>
                                        <p>
                                            <input type="text" id="description" name="description" placeholder="Description"class="form-control m-t-10"/>
                                        </p>
                                       <!--  <input id="serviceid" name="serviceid" type="hidden" value=null> -->
                                    </div>
                                </div>

                                <br>

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



                            <!--Button: Close and Save -->
                            <div class="modal-footer">
                              <div class="examples transitions m-t-5">
                                <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                              </div>
                                <div class="examples transitions m-t-5">
                                    <button type="submit" form ="addprod" class="btn btn-success  source success_clr m-l-10 hvr-float-shadow adv_cust_mod_btn" ><i class="fa fa-save text-white"></i>&nbsp; Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
                <!-- END EDIT MODAL -->

                    <!-- ADD PRODUCT-->
                    <!--EDIT MODAL -->

            <form method = "POST" action = "/updateproduct" id="updateprod">
                {!! csrf_field() !!}
            <div class="modal fade in " id="editModal" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-pencil"></i>
                                            &nbsp;Edit Product</h4>
                            </div>
                            <input type = "text" name="ProductIDedit" id ="ProductIDedit"> </input>
                            <div class="modal-body" style="padding-left: 47px;">
                                <div class="row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Product Name: <span style="color: red">*</span></h5>
                                        <p>
                                            <input id="productnameedit" name="productnameedit" type="text" placeholder="Product Name" maxlength="255" class="form-control m-t-10">
                                        </p>
                                    </div>
                                </div>

                                <div class="row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Product Type: <span style="color: red">*</span></h5>
                                        <p class="m-t-10">
                                            <select id="producttypeedit" name="producttypeedit" class=" form-control chzn-select m-t-10">
                                                <option >Choose Product Type</option>
                                                @foreach($prodtype2 as $prodtype2)
                                                {
                                                <option value="{{$prodtype->ProductTypeID}}">{{$prodtype2->ProductTypeName}}</option>
                                                }
                                                @endforeach
    
                                                    

                                            </select>
                                        </p>
                                    </div>
                                </div>

                                <div class="row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Brand: <span style="color: red">*</span></h5>
                                        <p class="m-t-10">
                                            <select id="brandedit" name="brandedit" class=" form-control chzn-select m-t-10">
                                                <option>Choose Brand</option>
                                                @foreach($prodbrand2 as $prodbrand2)
                                                {
                                                <option value="{{$prodbrand->ProductBrandID}}">{{$prodbrand2->BrandName}}</option>
                                                }
                                                @endforeach
                                            </select>
                                        </p>
                                    </div>
                                </div>
                                <div class="row m-t-5">
                                    <div class="col-md-6">
                                        <h5>Size: <span style="color: red">*</span></h5>
                                        <p>
                                            <input type="text" id="sizeedit" name="sizeedit" placeholder="Size" class="form-control m-t-10"/>
                                        </p>
                                    </div>

                                    <div class="col-md-5">
                                        <h5>Unit: <span style="color: red">*</span></h5>
                                        <p class="m-t-10">
                                            <select id="unitedit" name="unitedit" class=" form-control chzn-select m-t-10">
                                                <option>Choose Product Unit</option>
                                                @foreach($produnittype2 as $produnittype2)
                                                {
                                                <option value="{{$produnittype2->ProductUnitTypeID}}">{{$produnittype2->UnitTypeName}}</option>
                                                }
                                                @endforeach
                                            </select>
                                        </p>
                                    </div>
                                </div>


                                <div class="row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Price: <span style="color: red">*</span></h5>
                                        <p>
                                            <input type="text" id="priceedit" name="priceedit" placeholder="Price"class="form-control m-t-10"/>
                                        </p>
                                    </div>
                                </div>

                                <div class="row m-t-5">
                                    <div class="col-md-6">
                                        <h5>Warranty: <span style="color: red"></span></h5>
                                        <p>
                                            <input type="text" id="warrantyedit" name="warrantyedit" placeholder="Warranty" class="form-control m-t-10"/>
                                        </p>
                                    </div>

                                    <div class="col-md-5">
                                        <p class="m-t-25">
                                            <select id="durationmodeedit" name="durationmodeedit" class=" form-control chzn-select m-t-10">
                                                <option value="Days">Day(s)</option>
                                                <option value="Weeks">Week(s)</option>
                                                <option value="Months">Month(s)</option>
                                                <option value="Years">Year(s)</option>
                                            </select>
                                        </p>
                                    </div>
                                </div>

                                <div class="row m-t-5">
                                    <div class="col-md-11">
                                        <h5>Description: <span style="color: red"></span></h5>
                                        <p>
                                            <input type="text" id="descriptionedit" name="descriptionedit" placeholder="Description"class="form-control m-t-10"/>
                                        </p>
                                       <!--  <input id="serviceid" name="serviceid" type="hidden" value=null> -->
                                    </div>
                                </div>

                                <br>

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



                            <!--Button: Close and Save -->
                            <div class="modal-footer">
                              <div class="examples transitions m-t-5">
                                <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                              </div>
                                <div class="examples transitions m-t-5">
                                    <button type="submit" form ="updateprod" class="btn btn-success  source success_clr m-l-10 hvr-float-shadow adv_cust_mod_btn" ><i class="fa fa-save text-white"></i>&nbsp; Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
               
                <!-- END EDIT MODAL -->

               

                <!-- START DELETE MODAL -->
                <form method = "POST" action = "/deleteproduct" id="deleteprod">
                {!! csrf_field() !!}
                    <div class="modal fade in " id="deleteModal" tabindex="-3" role="dialog" aria-hidden="false">
                        <div class="modal-dialog modal-md">
                            <div class="modal-content">
                                <div class="modal-header bg-danger">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    <h4 class="modal-title text-white"><i class="fa fa-pencil"></i>
                                        &nbsp;&nbsp;Delete this record?</h4>
                                </div>
                                <div class="modal-body">
                                <div class="col m-t-15">
                                    <h5>Are you sure do you want to delete this record?</h5>
                                    <input id="deleteId" name="deleteId" type="hidden" value=null>
                                </div>
                            </div>
                                <!--Button: Close and Save -->
                            <div class="modal-footer">
                              <div class="examples transitions m-t-5">
                                <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                              </div>
                                <div class="examples transitions m-t-5">
                                    <button type="submit" form ="deleteprod" class="btn btn-success  source success_clr m-l-10 hvr-float-shadow adv_cust_mod_btn" ><i class="fa fa-save text-white"></i>&nbsp; OK
                                    </button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </form>
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



<script type="text/javascript">
    function deleteProductGet(id){
$("#deleteId").val(id);
}
function updateProductGet(id){
  $.ajax({
    type: "GET",
    url:  "/RetrieveProduct",
    data:
    {
      ProductIDedit: id
    },

    success: function(data){
      // alert("Tama");
      $('#ProductIDedit').val(data['product'][0]['ProductID']);
      $('#productnameedit').val(data['product'][0]['ProductName']);
      $('#sizeedit').val(data['product'][0]['Size']);
      $('#priceedit').val(data['product'][0]['Price']);
      $('#descriptionedit').val(data['product'][0]['Description']);
      

      var prodtype = document.getElementById('producttypeedit').options;
      for(var i =0; i<prodtype.length; i++){
            if(prodtype[i].value==data['product'][0]['ProductTypeID']){
            $('#producttypeedit').val(data['product'][0]['ProductTypeID']) ;
            break;
          }} 

    

      var brand = document.getElementById('brandedit').options;
      for(var i =0; i<brand.length; i++){
            if(brand[i].value==data['product'][0]['ProductBrandID']){
            $('#brandedit').val(data['product'][0]['ProductBrandID']) ;
            break;
          }}

      var unittype = document.getElementById('unitedit').options;
      for(var i =0; i<unittype.length; i++){
            if(unittype[i].value==data['product'][0]['ProductUnitTypeID']){
            $('#unitedit').val(data['product'][0]['ProductUnitTypeID']) ;
            break;
          }} 

    },
    error: function(xhr)
    {
      alert("Error");
      alert($.parseJSON(xhr.responseText)['error']['message']);
    }
  });
}


</script>

<!-- global scripts modals-->
<script type="text/javascript" src="js/pages/modals.js"></script>
<!--End of global scripts-->
@endsection