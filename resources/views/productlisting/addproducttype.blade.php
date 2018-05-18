@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','Add Product Type') <!-- Page Title -->
@section('content')

    <link type="text/css" rel="stylesheet" href="{{asset('assets/vendors/jquery-tagsinput/css/jquery.tagsinput.css')}}"/>

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
                    <div class="row">
                        <div class="col-6">
                            <h4 class="m-t-5">
                            <i class="fa fa-pencil-square-o"></i>
                            Product Type 
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
                                <div class="card-header bg-primary disabled text-white" >
                                    <i class="fa fa-plus"></i>&nbsp;&nbsp;Add Product Type
                                </div>
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-md-5"><br>
                                                <h4 style="font-weight:bold">Product Type Information</h4><br>
                                                <h4>Product Type</h4>
                                                <p><input id="name" name="type" type="text" placeholder="Type"
                                                   class="form-control"></p>
                                                   <h4>Product Category</h4>
                                                <p><input id="category" name="category" type="text" placeholder="Category"
                                                   class="form-control"></p>
                                            </div>
                                            <div class="col-md-6"><br><br>
                                                <table id="myTable" class=" table order-list" >
                                                    <thead><br>
                                                        <tr>
                                                            <td><h4>Brand(s)</h4></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <input type="text" name="name" placeholder="Brand" class="form-control"/>
                                                            </td>
                                                            <td>
                                                                <i class="deleteRow "></i>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr role= "row">
                                                            <td colspan="5" style="text-align: right;">
                                                                <div class="examples transitions m-t-5">
                                                                    <button type="button" id="addrow" value="Add Row" class="btn btn-warning hvr-float-shadow" ><i class="fa fa-plus text-white"></i>&nbsp; Add Row </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card-footer bg-black disabled">
                                        <div class="examples transitions m-t-5 pull-right">
                                            <button onclick="window.location='{{ url("/producttype") }}'" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn"  href="/producttype">Back</button>                
                                            <button class="btn btn-success  source success_clr m-l-0 hvr-float-shadow adv_cust_mod_btn" style ="width: 80px;"  ><i class="fa fa-save text-white" ></i>&nbsp; Save</button>
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

<script type="text/javascript" src="{{asset('assets/vendors/jquery-tagsinput/js/jquery.tagsinput.js')}}"></script>

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


<!--script for table add brand-->
<script> 
$(document).ready(function () {
    var counter = 0;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" class="form-control" name="brand" placeholder="Brand"' + counter + '"/></td>';
        cols += '<td><input type="button" class="ibtnDel btn  btn-danger btn-md" value ="X"></td>';

        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    });



    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});


function calculateRow(row) {
    var price = +row.find('input[name^="price"]').val();
}

function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.order-list").find('input[name^="price"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
}
</script>

<!--end script of table add brand-->


@stop