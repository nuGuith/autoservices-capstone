@extends('layout.master') <!-- Include Master PAge -->
@section('Title','Queries') <!-- Page Title -->
@section('content')

    <link type="text/css" rel="stylesheet" href="vendors/datatables/css/dataTables.bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="css/pages/dataTables.bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="vendors/select2/css/select2.min.css" />

<style>
    #query_table{
        display:none;
    }
</style>

<div id="content" class="bg-container">
	<header class="head">
        <div class="main-bar">
            <div class="row" style = "height: 47px;">
                <div class="col-6">
                    <h4 class="m-t-15">
                        <i class="fa fa-home"></i>
                            Queries
                    </h4>
                </div>
                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right   ">
                            <li class="breadcrumb-item " >
                                <a href="/">
                                    <i class="fa fa-home" data-pack="default" data-tags=""></i>
                                    Queries
                                </a>
                            </li>
                        </ol>
                    </div>
            </div>
        </div>
    </header>

    <div class="outer">
        <div class="inner bg-light lter bg-container cal_btn_hov">
            <div class="col-lg-12">
                <div class="row"> 
            <!-- Choose Query -->
            <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6 col-12 m-t-10">
                <div class="dropdown">
                    <button class="btn btn-info dropdown-toggle" type="button" id="about-us2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Choose Query
                    </button>
                    <div class="dropdown-menu" aria-labelledby="about-us2">
                        <a class="dropdown-item" href="#" onclick="event.preventDefault(); loadService();">List of most availed services</a>
                        <a class="dropdown-item" href="#" onclick="event.preventDefault(); loadProduct();">List of most availed products</a>
                    </div>
                </div>
            </div>
           <!-- /. Choose Query -->               
            <div class="col-lg-12 m-t-15">
                <div class="card">
                    <div class="card-header bg-dark">
                        <div align="center">
                            <h3 id="queryName">Query Name</h3>
                        </div>
                    </div>
                    
                    <div class="card-block m-t-20">

                    <!-- TABLE -->
                        <div id="query_table">
                            <table class="table table-bordered table-hover table-advance dataTable no-footer display" id="tblquery" role="grid">
                                <thead>
                                    <tr role="row">
                                        <th id="id"class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 20%;"><b></b></th>
                                        <th id="category"class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 40%;"><b></b></th>
                                        <th id="name" class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 50%;"><b></b></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    <!-- END OF TABLE -->                  
                    </div>
                </div>
            </div>
            <!-- /.inner -->
        </div>
        <!-- /.outer -->
    </div>
 <!-- /#content -->
</div>


<script type="text/javascript" src="js/components.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="vendors/datatables/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="js/pages/simple_datatables.js"></script>
<!-- end of global scripts-->

<script type="text/javascript">
$(document).ready(function()
{
    $('#tblquery').DataTable();

});

function loadService()
{
    $('#queryName').text("List of most availed services");
    $('#query_table').show();

    document.getElementById("id").innerHTML="Service ID";
    document.getElementById("category").innerHTML="Service Category";
    document.getElementById("name").innerHTML="Service Name";
}

function loadProduct()
{
    $('#queryName').text("List of most availed products");
    $('#query_table').show();

    document.getElementById("id").innerHTML="Product ID";
    document.getElementById("category").innerHTML="Product Category";
    document.getElementById("name").innerHTML="Product Name";
}
</script>


@stop