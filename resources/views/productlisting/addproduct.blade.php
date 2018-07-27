@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','Add Product') <!-- Page Title -->
@section('content')

    <link type="text/css" rel="stylesheet" href="vendors/sweetalert/css/sweetalert2.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/pages/sweet_alert.css"/>

    <link type="text/css" rel="stylesheet" href="vendors/animate/css/animate.min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/hover/css/hover-min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/wow/css/animate.css"/>

    <link type="text/css" rel="stylesheet" href="vendors/modal/css/component.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-tagsinput/css/bootstrap-tagsinput.css"/>
    <link rel="stylesheet" type="text/css" href="vendors/animate/css/animate.min.css" />

    <link type="text/css" rel="stylesheet" href="vendors/checkbox_css/css/checkbox.min.css" />
    <!-- end of plugin styles -->
    <link type="text/css" rel="stylesheet" href="css/pages/animations.css"/>

    <link type="text/css" rel="stylesheet" href="css/pages/portlet.css"/>
    <!-- <link type="text/css" rel="stylesheet" href="css/pages/advanced_components.css"/> -->

        <!-- CONTENT -->
    <div id="content" class="bg-container">
        <header class="head">
            <div class="main-bar">
                <div class="row">
                    <div class="col-6">
                        <h4 class="m-t-5">
                        <i class="fa fa-pencil-square-o"></i>
                        Product 
                        </h4>
                    </div>
                </div>
            </div>
        </header>
        <div class="outer">
            <div class="inner bg-container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-primary disabled text-white" ><i class="fa fa-plus"></i>&nbsp;&nbsp;Add Product</div>
                                <div class="card-block">
                                    <div class="row" >
                                        <div class="col-md-5"><br>
                                            <h4 style="font-weight:bold">Product Information</h4><br>
                                            <h4>Type</h4>
                                            <select class="form-control">
                                                <option>Oil</option>
                                                <option>Tires</option>
                                            </select><br>
                                            <h4>Category</h4>
                                            <select class="form-control">
                                                <option>Mechanical</option>
                                                <option>Electrical</option>
                                            </select><br>
                                            <h4>Brand</h4>
                                            <select class="form-control">
                                                <option>Shell</option>
                                                <option>Petron</option>
                                            </select><br><br>                                            
                                            <form>
                                                <h4>Warranty Detail</h4>
                                                <fieldset>
                                            <!-- Name input-->
                                                    <div class="form-group row form_inline_inputs_bot">
                                                        <div class="col-lg-1">
                                                        </div>                                                        
                                                            <div class="col-lg-4">
                                                                <div class="input-group m-t-35">
                                                                    <input type="text" class="form-control" name="user">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="input-group m-t-35">
                                                                    <select class="form-control" style="width:100px">
                                                                        <option>Days</option>
                                                                        <option>Weeks</option>
                                                                        <option>Months</option>
                                                                        <option>Years</option>
                                                                    </select>
                                                            </div>
                                                        </div>                                                
                                                    </div>
                                                </fieldset>
                                            </form>                                
                                        </div>
                                        <div class="col-md-5"><br><br><br>
                                            <h4>Variance</h4>
                                            <select class="form-control">
                                                <option>500 ml</option>
                                                <option>1 L</option>
                                            </select><br>
                                            <h4>Product</h4>
                                            <input type="text" name="product" placeholder="Name" class="form-control"><br>
                                            <h4>Price</h4>
                                            <div class="input-group input_top_align">
                                                <span class="input-group-addon">₱</span>
                                                <input type="text" class="form-control">
                                                <span class="input-group-addon">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                <div class="card-footer bg-black disabled">
                                    <div class="examples transitions m-t-5 pull-right">
                                        <button onclick="window.location='{{ url("/product") }}'" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn" href="/product">Back</button>    <button class="btn btn-success  source success_clr m-l-0 hvr-float-shadow adv_cust_mod_btn" style ="width: 80px;" >
                                        <i class="fa fa-save text-white" ></i>
                                        &nbsp; Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                   
<!-- /.outer -->
        <!--END CONTENT -->


<!-- global scripts sweet alerts-->
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
</script>

<!-- global scripts modals-->
<script type="text/javascript" src="js/components.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/pages/modals.js"></script>
<!--End of global scripts-->


@stop