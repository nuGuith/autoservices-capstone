 <!-- Include MAster PAge -->
<?php $__env->startSection('Title','Inspection Checklist'); ?> <!-- Page Title -->
<?php $__env->startSection('content'); ?>

    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
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

    <style type="text/css">
        tr.row {
            padding: -15px;
            margin: -15px;
        }
        div.actionrow, tr.trrow, div.checkboxmin {
            padding: -10px;
            margin: -3px;
            margin-left: 15px;
        }
        button.btn {
            height: 15px;
        }
    </style>
        <!-- CONTENT -->
        <div id="content" class="bg-container">

            <header class="head">
                <div class="main-bar">
                    <div class="row">
                    <div class="col-6">
                        <h4 class="m-t-5">
                            <i class="fa fa-wrench"></i>
                            Inspection Checklist
                        </h4>
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
                                        <a  id="editable_table_new" class=" btn btn-raised btn-default hvr-pulse-grow adv_cust_mod_btn" 
                                                    href="#">
                                        <i class="fa fa-plus"></i>
                                            &nbsp;  Add Inspection Item                                   
                                         </a>
                                    </div>
                             </div>


                            <div id="user_body" style="padding:20px 15px 700px;">
                                <h4 style="padding-bottom:10px;"> Inspection Checklist Items </h4>
                                <div class="panel-group" style="display: inline-block; width: 100%;" id="accordion">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                    <button data-toggle="collapse" data-parent="#accordion" href="#item1" style="width:100%; padding:-5px; margin:-5px; background-color:transparent;outline: none; border:none;">
                                                    <h4 class="panel-title" style="text-align: left;">OPEN DOOR</h4>
                                                    </button>
                                            </div>
                                            <div id="item1" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <div class="card-block p-t-10">
                                                        <div class=" m-t-25">
                                                            <div id="sample_6_wrapper" class="dataTables_wrapper dt-bootstrap no-footer">
                                                                <div class="row">
                                                                    <div class="col-md-5 col-12">
                                                                    </div>
                                                                    <div class="col-md-7 col-12">
                                                                        <div id="sample_6_filter" class="dataTables_filter">
                                                                            <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="sample_6">
                                                                                </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped table-bordered table-hover  dataTable no-footer" id="sample_6" role="grid" aria-describedby="sample_6_info">
                                                                        <thead>
                                                                            <tr role="row">
                                                                                <th class="sorting_asc" tabindex="0" aria-controls="sample_6" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" data-column-index="0" style="width: 55%">Inspection Items</th>
                                                                                <th class="sorting" tabindex="0" aria-controls="sample_6" rowspan="1" colspan="3" aria-label="Age: activate to sort column ascending" data-column-index="1" style="width: 10%;">INSPECT:</th>
                                                                                <!-- <th class="hidden-xs sorting" tabindex="0" aria-controls="sample_6" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" data-column-index="2" style="width: 5%;">Function</th>
                                                                                <th class="hidden-xs sorting" tabindex="0" aria-controls="sample_6" rowspan="1" colspan="1" aria-label="Account type: activate to sort column ascending" data-column-index="3" style="width: 5%;">Inventory</th> -->
                                                                                <th class="hidden-xs sorting" tabindex="0" aria-controls="sample_6" rowspan="1" colspan="1" aria-label="Location: activate to sort column ascending" data-column-index="4" style="width: 30%;">Action</th>
                                                                            </tr>
                                                                            <tr class="trrow">
                                                                                <th></th>
                                                                                <th>Condition</th>
                                                                                <th>Function</th>
                                                                                <th>Inventory</th>
                                                                                <th></th>
                                                                            </tr>
                                                                        </thead>
                                                                            <tbody>
                                                                                <tr role="row" class="odd">
                                                                                    <td class="sorting_1">Weather Strip</td>
                                                                                    <td>
                                                                                        <div class="checkboxmin box radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="checkboxmin box radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="checkboxmin box radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="actionrow">
                                                                                            <button class="btn btn-success" data-toggle="modal" data-href="#responsive" href="#editservicebay"><i class="fa fa-pencil text-white"></i>&nbsp; Edit
                                                                                            </button>
                                                                                            <button class="btn btn-danger source warning confirm" style = "width: 60px "><i class="fa fa-trash text-white"></i> &nbsp; Delete
                                                                                            </button>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr role="row" class="even">
                                                                                    <td class="sorting_1">Door Lining - FR LH</td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="actionrow">
                                                                                            <button class="btn btn-success " data-toggle="modal" data-href="#responsive" href="#editservicebay"><i class="fa fa-pencil text-white"></i>&nbsp; Edit
                                                                                            </button>
                                                                                           <button class="btn btn-danger source warning confirm" style = "width: 60px "><i class="fa fa-trash text-white"></i> &nbsp; Delete
                                                                                            </button>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr role="row" class="odd">
                                                                                    <td class="sorting_1">Control Switch</td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="actionrow">
                                                                                            <button class="btn btn-success" data-toggle="modal" data-href="#responsive" href="#editservicebay"><i class="fa fa-pencil text-white"></i>&nbsp; Edit
                                                                                            </button>
                                                                                           <button class="btn btn-danger source warning confirm" style = "width: 60px "><i class="fa fa-trash text-white"></i> &nbsp; Delete
                                                                                            </button>
                                                                                        </div>
                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr role="row" class="even">
                                                                                    <td class="sorting_1">Step Garnish</td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="actionrow">
                                                                                            <button class="btn btn-success " data-toggle="modal" data-href="#responsive" href="#editservicebay"><i class="fa fa-pencil text-white"></i>&nbsp; Edit
                                                                                            </button>
                                                                                           <button class="btn btn-danger source warning confirm" style = "width: 60px "><i class="fa fa-trash text-white"></i> &nbsp; Delete
                                                                                            </button>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr role="row" class="odd">
                                                                                    <td class="sorting_1">Seat - FR LH</td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="actionrow">
                                                                                            <button class="btn btn-success " data-toggle="modal" data-href="#responsive" href="#editservicebay"><i class="fa fa-pencil text-white"></i>&nbsp; Edit
                                                                                            </button>
                                                                                           <button class="btn btn-danger source warning confirm" style = "width: 60px "><i class="fa fa-trash text-white"></i> &nbsp; Delete
                                                                                            </button>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-5 col-12">
                                                                            <div class="dataTables_info" id="sample_6_info" role="status" aria-live="polite">Showing 1 to 5 of 50 entries
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-7 col-12">
                                                                            <div class="dataTables_paginate paging_simple_number" id="sample_6_paginate">
                                                                                <ul class="pagination float-right">
                                                                                    <li class="paginate_button previous disabled" id="sample_6_previous">
                                                                                        <a href="#" aria-controls="sample_6" data-dt-idx="0" tabindex="0">Previous</a>
                                                                                    </li>
                                                                                    <li class="paginate_button active">
                                                                                        <a href="#" aria-controls="sample_6" data-dt-idx="1" tabindex="0">1</a>
                                                                                    </li>
                                                                                    <li class="paginate_button ">
                                                                                        <a href="#" aria-controls="sample_6" data-dt-idx="2" tabindex="0">2</a>
                                                                                    </li>
                                                                                    <li class="paginate_button ">
                                                                                        <a href="#" aria-controls="sample_6" data-dt-idx="3" tabindex="0">3</a>
                                                                                    </li>
                                                                                    <li class="paginate_button ">
                                                                                        <a href="#" aria-controls="sample_6" data-dt-idx="4" tabindex="0">4</a>
                                                                                    </li>
                                                                                    <li class="paginate_button ">
                                                                                        <a href="#" aria-controls="sample_6" data-dt-idx="5" tabindex="0">5</a>
                                                                                    </li>
                                                                                    <li class="paginate_button disabled" id="sample_6_ellipsis">
                                                                                        <a href="#" aria-controls="sample_6" data-dt-idx="6" tabindex="0">…</a>
                                                                                    </li>
                                                                                    <li class="paginate_button ">
                                                                                        <a href="#" aria-controls="sample_6" data-dt-idx="7" tabindex="0">10</a>
                                                                                    </li>
                                                                                    <li class="paginate_button next" id="sample_6_next">
                                                                                        <a href="#" aria-controls="sample_6" data-dt-idx="8" tabindex="0">Next</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <button data-toggle="collapse" data-parent="#accordion" href="#item2" style="width:100%; padding:-5px; margin:-5px; background-color:transparent;outline: none; border:none;">
                                                    <h4 class="panel-title" style="text-align: left;">INSTRUMENT PANEL</h4>
                                                </button>
                                            </div>
                                            <div id="item2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="card-block p-t-10">
                                                        <div class=" m-t-25">
                                                            <div id="sample_6_wrapper" class="dataTables_wrapper dt-bootstrap no-footer">
                                                                <div class="row">
                                                                    <div class="col-md-5 col-12">
                                                                        </div>
                                                                        <div class="col-md-7 col-12">
                                                                            <div id="sample_6_filter" class="dataTables_filter">
                                                                                <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="sample_6">
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped table-bordered table-hover  dataTable no-footer" id="sample_6" role="grid" aria-describedby="sample_6_info">
                                                                        <thead>
                                                                            <tr role="row">
                                                                                <th class="sorting_asc" tabindex="0" aria-controls="sample_6" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" data-column-index="0" style="width: 55%">Inspection Items</th>
                                                                                <th class="sorting" tabindex="0" aria-controls="sample_6" rowspan="1" colspan="3" aria-label="Age: activate to sort column ascending" data-column-index="1" style="width: 10%;">INSPECT:</th>
                                                                                <!-- <th class="hidden-xs sorting" tabindex="0" aria-controls="sample_6" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" data-column-index="2" style="width: 5%;">Function</th>
                                                                                <th class="hidden-xs sorting" tabindex="0" aria-controls="sample_6" rowspan="1" colspan="1" aria-label="Account type: activate to sort column ascending" data-column-index="3" style="width: 5%;">Inventory</th> -->
                                                                                <th class="hidden-xs sorting" tabindex="0" aria-controls="sample_6" rowspan="1" colspan="1" aria-label="Location: activate to sort column ascending" data-column-index="4" style="width: 30%;">Action</th>
                                                                            </tr>
                                                                            <tr class="trrow">
                                                                                <th></th>
                                                                                <th>Condition</th>
                                                                                <th>Function</th>
                                                                                <th>Inventory</th>
                                                                                <th></th>
                                                                            </tr>
                                                                        </thead>
                                                                            <tbody>
                                                                                <tr role="row" class="odd">
                                                                                    <td class="sorting_1">Weather Strip</td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="actionrow">
                                                                                            <button class="btn btn-success" data-toggle="modal" data-href="#responsive" href="#editservicebay"><i class="fa fa-pencil text-white"></i>&nbsp; Edit
                                                                                            </button>
                                                                                            <button class="btn btn-danger source warning confirm" style = "width: 60px "><i class="fa fa-trash text-white"></i> &nbsp; Delete
                                                                                            </button>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr role="row" class="even">
                                                                                    <td class="sorting_1">Door Lining - FR LH</td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="actionrow">
                                                                                            <button class="btn btn-success " data-toggle="modal" data-href="#responsive" href="#editservicebay"><i class="fa fa-pencil text-white"></i>&nbsp; Edit
                                                                                            </button>
                                                                                           <button class="btn btn-danger source warning confirm" style = "width: 60px "><i class="fa fa-trash text-white"></i> &nbsp; Delete
                                                                                            </button>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr role="row" class="odd">
                                                                                    <td class="sorting_1">Control Switch</td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="actionrow">
                                                                                            <button class="btn btn-success" data-toggle="modal" data-href="#responsive" href="#editservicebay"><i class="fa fa-pencil text-white"></i>&nbsp; Edit
                                                                                            </button>
                                                                                           <button class="btn btn-danger source warning confirm" style = "width: 60px "><i class="fa fa-trash text-white"></i> &nbsp; Delete
                                                                                            </button>
                                                                                        </div>
                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr role="row" class="even">
                                                                                    <td class="sorting_1">Step Garnish</td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="actionrow">
                                                                                            <button class="btn btn-success " data-toggle="modal" data-href="#responsive" href="#editservicebay"><i class="fa fa-pencil text-white"></i>&nbsp; Edit
                                                                                            </button>
                                                                                           <button class="btn btn-danger source warning confirm" style = "width: 60px "><i class="fa fa-trash text-white"></i> &nbsp; Delete
                                                                                            </button>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr role="row" class="odd">
                                                                                    <td class="sorting_1">Seat - FR LH</td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="actionrow">
                                                                                            <button class="btn btn-success " data-toggle="modal" data-href="#responsive" href="#editservicebay"><i class="fa fa-pencil text-white"></i>&nbsp; Edit
                                                                                            </button>
                                                                                           <button class="btn btn-danger source warning confirm" style = "width: 60px "><i class="fa fa-trash text-white"></i> &nbsp; Delete
                                                                                            </button>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-5 col-12">
                                                                            <div class="dataTables_info" id="sample_6_info" role="status" aria-live="polite">Showing 1 to 5 of 50 entries
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-7 col-12">
                                                                            <div class="dataTables_paginate paging_simple_numbers" id="sample_6_paginate">
                                                                                <ul class="pagination float-right">
                                                                                    <li class="paginate_button previous disabled" id="sample_6_previous">
                                                                                        <a href="#" aria-controls="sample_6" data-dt-idx="0" tabindex="0">Previous</a>
                                                                                    </li>
                                                                                    <li class="paginate_button active">
                                                                                        <a href="#" aria-controls="sample_6" data-dt-idx="1" tabindex="0">1</a>
                                                                                    </li>
                                                                                    <li class="paginate_button ">
                                                                                        <a href="#" aria-controls="sample_6" data-dt-idx="2" tabindex="0">2</a>
                                                                                    </li>
                                                                                    <li class="paginate_button ">
                                                                                        <a href="#" aria-controls="sample_6" data-dt-idx="3" tabindex="0">3</a>
                                                                                    </li>
                                                                                    <li class="paginate_button ">
                                                                                        <a href="#" aria-controls="sample_6" data-dt-idx="4" tabindex="0">4</a>
                                                                                    </li>
                                                                                    <li class="paginate_button ">
                                                                                        <a href="#" aria-controls="sample_6" data-dt-idx="5" tabindex="0">5</a>
                                                                                    </li>
                                                                                    <li class="paginate_button disabled" id="sample_6_ellipsis">
                                                                                        <a href="#" aria-controls="sample_6" data-dt-idx="6" tabindex="0">…</a>
                                                                                    </li>
                                                                                    <li class="paginate_button ">
                                                                                        <a href="#" aria-controls="sample_6" data-dt-idx="7" tabindex="0">10</a>
                                                                                    </li>
                                                                                    <li class="paginate_button next" id="sample_6_next">
                                                                                        <a href="#" aria-controls="sample_6" data-dt-idx="8" tabindex="0">Next</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <button data-toggle="collapse" data-parent="#accordion" href="#item3" style="width:100%; padding:-5px; margin:-5px; background-color:transparent;outline: none; border:none;">
                                                    <h4 class="panel-title" style="text-align: left;">CLOSE DOOR THEN OPEN NEXT DOOR</h4>
                                                </button>
                                            </div>
                                            <div id="item3" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="card-block p-t-10">
                                                        <div class=" m-t-25">
                                                            <div id="sample_6_wrapper" class="dataTables_wrapper dt-bootstrap no-footer">
                                                                <div class="row">
                                                                    <div class="col-md-5 col-12">
                                                                        </div>
                                                                        <div class="col-md-7 col-12">
                                                                            <div id="sample_6_filter" class="dataTables_filter">
                                                                                <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="sample_6">
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="table-responsive">
                                                                        <table class="table table-striped table-bordered table-hover  dataTable no-footer" id="sample_6" role="grid" aria-describedby="sample_6_info">
                                                                        <thead>
                                                                            <tr role="row">
                                                                                <th class="sorting_asc" tabindex="0" aria-controls="sample_6" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" data-column-index="0" style="width: 55%">Inspection Items</th>
                                                                                <th class="sorting" tabindex="0" aria-controls="sample_6" rowspan="1" colspan="3" aria-label="Age: activate to sort column ascending" data-column-index="1" style="width: 10%;">INSPECT:</th>
                                                                                <!-- <th class="hidden-xs sorting" tabindex="0" aria-controls="sample_6" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" data-column-index="2" style="width: 5%;">Function</th>
                                                                                <th class="hidden-xs sorting" tabindex="0" aria-controls="sample_6" rowspan="1" colspan="1" aria-label="Account type: activate to sort column ascending" data-column-index="3" style="width: 5%;">Inventory</th> -->
                                                                                <th class="hidden-xs sorting" tabindex="0" aria-controls="sample_6" rowspan="1" colspan="1" aria-label="Location: activate to sort column ascending" data-column-index="4" style="width: 30%;">Action</th>
                                                                            </tr>
                                                                            <tr class="trrow">
                                                                                <th></th>
                                                                                <th>Condition</th>
                                                                                <th>Function</th>
                                                                                <th>Inventory</th>
                                                                                <th></th>
                                                                            </tr>
                                                                        </thead>
                                                                            <tbody>
                                                                                <tr role="row" class="odd">
                                                                                    <td class="sorting_1">Weather Strip</td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="actionrow">
                                                                                            <button class="btn btn-success" data-toggle="modal" data-href="#responsive" href="#editservicebay"><i class="fa fa-pencil text-white"></i>&nbsp; Edit
                                                                                            </button>
                                                                                            <button class="btn btn-danger source warning confirm" style = "width: 60px "><i class="fa fa-trash text-white"></i> &nbsp; Delete
                                                                                            </button>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr role="row" class="even">
                                                                                    <td class="sorting_1">Door Lining - FR LH</td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="actionrow">
                                                                                            <button class="btn btn-success " data-toggle="modal" data-href="#responsive" href="#editservicebay"><i class="fa fa-pencil text-white"></i>&nbsp; Edit
                                                                                            </button>
                                                                                           <button class="btn btn-danger source warning confirm" style = "width: 60px "><i class="fa fa-trash text-white"></i> &nbsp; Delete
                                                                                            </button>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr role="row" class="odd">
                                                                                    <td class="sorting_1">Control Switch</td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="actionrow">
                                                                                            <button class="btn btn-success" data-toggle="modal" data-href="#responsive" href="#editservicebay"><i class="fa fa-pencil text-white"></i>&nbsp; Edit
                                                                                            </button>
                                                                                           <button class="btn btn-danger source warning confirm" style = "width: 60px "><i class="fa fa-trash text-white"></i> &nbsp; Delete
                                                                                            </button>
                                                                                        </div>
                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr role="row" class="even">
                                                                                    <td class="sorting_1">Step Garnish</td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="actionrow">
                                                                                            <button class="btn btn-success " data-toggle="modal" data-href="#responsive" href="#editservicebay"><i class="fa fa-pencil text-white"></i>&nbsp; Edit
                                                                                            </button>
                                                                                           <button class="btn btn-danger source warning confirm" style = "width: 60px "><i class="fa fa-trash text-white"></i> &nbsp; Delete
                                                                                            </button>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                                <tr role="row" class="odd">
                                                                                    <td class="sorting_1">Seat - FR LH</td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="checkboxmin checkbox radio_Checkbox_size4">
                                                                                        <label>
                                                                                            <input type="checkbox">
                                                                                        </label>
                                                                                        </div>
                                                                                    </td>
                                                                                    <td>
                                                                                        <div class="actionrow">
                                                                                            <button class="btn btn-success " data-toggle="modal" data-href="#responsive" href="#editservicebay"><i class="fa fa-pencil text-white"></i>&nbsp; Edit
                                                                                            </button>
                                                                                           <button class="btn btn-danger source warning confirm" style = "width: 60px "><i class="fa fa-trash text-white"></i> &nbsp; Delete
                                                                                            </button>
                                                                                        </div>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-5 col-12">
                                                                            <div class="dataTables_info" id="sample_6_info" role="status" aria-live="polite">Showing 1 to 5 of 50 entries
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-7 col-12">
                                                                            <div class="dataTables_paginate paging_simple_numbers" id="sample_6_paginate">
                                                                                <ul class="pagination float-right">
                                                                                    <li class="paginate_button previous disabled" id="sample_6_previous">
                                                                                        <a href="#" aria-controls="sample_6" data-dt-idx="0" tabindex="0">Previous</a>
                                                                                    </li>
                                                                                    <li class="paginate_button active">
                                                                                        <a href="#" aria-controls="sample_6" data-dt-idx="1" tabindex="0">1</a>
                                                                                    </li>
                                                                                    <li class="paginate_button ">
                                                                                        <a href="#" aria-controls="sample_6" data-dt-idx="2" tabindex="0">2</a>
                                                                                    </li>
                                                                                    <li class="paginate_button ">
                                                                                        <a href="#" aria-controls="sample_6" data-dt-idx="3" tabindex="0">3</a>
                                                                                    </li>
                                                                                    <li class="paginate_button ">
                                                                                        <a href="#" aria-controls="sample_6" data-dt-idx="4" tabindex="0">4</a>
                                                                                    </li>
                                                                                    <li class="paginate_button ">
                                                                                        <a href="#" aria-controls="sample_6" data-dt-idx="5" tabindex="0">5</a>
                                                                                    </li>
                                                                                    <li class="paginate_button disabled" id="sample_6_ellipsis">
                                                                                        <a href="#" aria-controls="sample_6" data-dt-idx="6" tabindex="0">…</a>
                                                                                    </li>
                                                                                    <li class="paginate_button ">
                                                                                        <a href="#" aria-controls="sample_6" data-dt-idx="7" tabindex="0">10</a>
                                                                                    </li>
                                                                                    <li class="paginate_button next" id="sample_6_next">
                                                                                        <a href="#" aria-controls="sample_6" data-dt-idx="8" tabindex="0">Next</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            
                                </div>
                                <!-- END EXAMPLE TABLE PORTLET-->

            <div class="modal fade in " id="editservice" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <h4 class="modal-title text-white"><i class="fa fa-pencil"></i>
                                            &nbsp;&nbsp;Edit Service</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h4>Service Name</h4>
                                        <p>
                                            <input id="name" name="service" type="text" placeholder="Service Name"
                                                   class="form-control"></p>
                                    </div>
                                    <div class="col-md-8">
                                        <table id="myTable" class=" table order-list" >
                                            <thead>
                                                <tr>
                                                <td><h5>Service Type</h5></td>
                                                <td><h5>Estimated Time</h5></td>
                                                <td><h5>Initial Price</h5></td>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                            <td>
                                                <input type="text" name="servicetype" placeholder="Service Type" class="form-control"/>
                                            </td>
                                            <td>
                                                <input type="text" name="estimatedtime" placeholder="Estimated Time" class="form-control"/>
                                            </td>
                                            <td>
                                                <input type="text" name="initialprice" placeholder="Initial Price" class="form-control"/>
                                            </td>
                                            </tr>
                                        </tbody>
                                    <!-- <tfoot>
                                        <tr role= "row">
                                        <td colspan="5" style="text-align: right;">
                                            <div class="examples transitions m-t-5">
                                                <button type="button" id="addrow" value="Add Row" class="btn btn-warning hvr-float-shadow" ><i class="fa fa-plus text-white"></i>&nbsp; Add Row </button>
                                             </div>
                                        </td>
                                        </tr>
                                     </tfoot> -->
                                    </table>
                                </div>

                             </div>
                        </div>



                            <div class="modal-footer">
                              <div class="examples transitions m-t-5">
                                <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                              </div>
                                <div class="examples transitions m-t-5">
                                    <button class="btn btn-success  source success_clr m-l-10 hvr-float-shadow adv_cust_mod_btn" data-dismiss="modal"><i class="fa fa-save text-white"></i>&nbsp; Save Changes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END modal-->

                            </div>
                        </div>
                    </div>
                    <!-- /.inner -->
                                    
                </div>
                <!-- /.outer -->
        <!--END CONTENT -->


<!--scripts for collapsible group -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.v3.min.js"></script>
<!-- End of scripts for collapsible group -->
<!-- global scripts sweet alerts-->
<script type="text/javascript" src="js/components.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="vendors/sweetalert/js/sweetalert2.min.js"></script>
<script type="text/javascript" src="js/pages/sweet_alerts.js"></script>
<!-- end of plugin scripts -->

<!-- global scripts animation-->
<script type="text/javascript" src="vendors/snabbt/js/snabbt.min.js"></script>
<script type="text/javascript" src="vendors/wow/js/wow.min.js"></script>
<!-- end of plugin scripts -->
<script>
    new WOW().init();
</script>


<!-- global scripts modals-->
<script type="text/javascript" src="js/pages/modals.js"></script>
<!--End of global scripts-->


<!--script for table edit brand-->
<script> 
$(document).ready(function () {
    var counter = 0;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" class="form-control" name="brand" placeholder="Brand"' + counter + '"/></td>';
        cols += '<td><input type="checkbox" class="form-control" name="automatic"' + counter + '"/><label for="automatic">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Automatic</label></td>';
        cols += '<td><input type="checkbox" class="form-control" name="manual"' + counter + '"/><label for="manual">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Manual</label></td>';
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

<!--end script of table edit brand-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>