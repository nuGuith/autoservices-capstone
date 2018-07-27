@extends('layout.master') <!-- Include Master PAge -->
@section('Title','Customer') <!-- Page Title -->
@section('content')

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
                    <i class="fa fa-users"></i>
                        Customer 
                    </h4>
                </div>
            </div>
        </div>
    </header>
        <div class="outer">
            <div class="inner bg-container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" >
                            <div class="card-header bg-primary text-white" ></i>&nbsp;&nbsp;Customer Information</div>
                                <div class="card-block">
                                    <div class="row" >

                                        <!-- first name -->
                                        <div class="col-md-4">
                                        <br>
                                        <h5 for="First Name" class="form-group-horizontal">
                                            First Name
                                        </h5>
                                        <p>
                                            <input id="name" name="firstname" type="text" placeholder="First Name"
                                            class="form-control" disabled="disabled"></p>
                                        </div>
                                        <!-- middle name -->
                                        <div class="col-md-4">
                                        <br>
                                        <h5 for="Middle Name" class="form-group-horizontal">
                                            Middle Name
                                        </h5>
                                        <p>
                                            <input id="name" name="middlename" type="text" placeholder="Middle Name"
                                            class="form-control" disabled="disabled"></p>
                                        </div>
                                        <!-- last name -->
                                        <div class="col-md-4">
                                        <br>
                                        <h5 for="Last Name" class="form-group-horizontal">
                                            Last Name
                                        </h5>
                                        <p>
                                            <input id="name" name="lastname" type="text" placeholder="Last Name"
                                            class="form-control" disabled="disabled"></p>
                                        </div>
                                        <!-- contact number -->
                                        <div class="col-lg-4 form_input_fields">
                                        <h5>Contact No.</h5>
                                            <div class="input-group">
                                                <input id="phones" class="form-control" type="text" name="contactnumber"
                                                disabled="disabled">
                                            </div>
                                        </div>
                                        <!-- email -->
                                        <div class="col-lg-4">
                                        <h5 for="email" class="form-group-horizontal">
                                            Email
                                        </h5>
                                        <p>
                                            <input id="name" name="email" type="text" placeholder="Email"
                                            class="form-control" disabled="disabled"></p>
                                        </div>
                                        <!-- Senior Citizen/PWD ID -->
                                        <div class="col-lg-4">
                                        <h5 for="sc/pwd" class="form-group-horizontal">
                                            Senior Citizen/PWD ID
                                        </h5>
                                        <p>
                                            <input id="name" name="sc/pwd" type="text" placeholder="Senior Citizen/PWD ID"
                                            class="form-control" disabled="disabled"></p>
                                        </div>
                                        <!-- Street -->
                                        <div class="col-lg-4">
                                        <h5 for="street" class="form-group-horizontal">
                                            No. & St./Bldg.
                                        </h5>
                                        <p>
                                            <input id="name" name="street" type="text" placeholder="No. & St./Bldg."
                                            class="form-control" disabled="disabled"></p>
                                        </div>
                                        <!-- Barangay -->
                                        <div class="col-lg-4">
                                        <h5 for="brgy" class="form-group-horizontal">
                                            Brgy./Subd.
                                        </h5>
                                        <p>
                                            <input id="name" name="brgy" type="text" placeholder="Brgy./Subd."
                                            class="form-control" disabled="disabled"></p>
                                        </div>
                                        <!-- City -->
                                        <div class="col-lg-4">
                                        <h5 for="city" class="form-group-horizontal">
                                            City/Municipality
                                        </h5>
                                        <p>
                                            <input id="name" name="city" type="text" placeholder="City/Municipality"
                                            class="form-control" disabled="disabled"></p>
                                        </div>
                                    <div class="col-md-8">
                                </div>
                            </div>
                        </div>

            <!-- CARD FOOTER -->
                <div class="card-footer bg-black disabled">
                   <div class="examples transitions m-t-5 pull-right">
                        <button onclick="window.location='{{ url("/customer") }}'" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn"  href="/customer">Back</button>
                        <!-- EDIT BUTTON FOR CUSTOMER CHANGES -->                
                        <button class="btn btn-primary m-l-0 hvr-float-shadow adv_cust_mod_btn" style ="width: 80px;"  ><i class="fa fa-pencil text-white" ></i>&nbsp; Edit</button>
                    </div>
                </div>
            <!-- END OF CARD FOOTER -->
                </div>
            </div>


        <!-- START OF VEHICLE HISTORY -->
        <div class="outer">
            <div class="inner bg-container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" >
                            <div class="card-header bg-primary text-white" ></i>&nbsp;&nbsp;Vehicle History</div>
                                <div class="card-block">

                                        <br>
                                        <table class="table  table-striped table-bordered table-hover table-advance dataTable no-footer" id="editable_table" role="grid">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 35%;"><b>Job Order ID</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 35%;"><b>Details</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1"><b>Actions</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row" class="even">
                                                    
                                                    <td>
                                                        Danice Joy Tanguilan
                                                    </td>
                                                    <td class="center">
                                                        <ul>
                                                            <li>Eating</li>
                                                            <li>Drinking</li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <!--VIEW BUTTON-->
                                                        <div class="btn-group">
                                                        <a class="btn btn-success hvr-float-shadow adv_cust_mod_btn" href="/viewjoborder">
                                                        <i class="fa fa-eye"></i>&nbsp; View
                                                        </a>

                                                        <!-- REMOVE BUTTON -->
                                                        <button class="btn btn-danger hvr-float-shadow adv_cust_mod_btn">
                                                        <i class="fa fa-trash"></i>&nbsp; Remove
                                                        </button>
                                                        </div>
                                                    </td>
                                                </tr>   
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- END OF VEHICLE HISTORY -->


        <!-- START OF JOB ORDER HISTORY -->
        <div class="outer">
            <div class="inner bg-container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" >
                            <div class="card-header bg-primary text-white" ></i>&nbsp;&nbsp;Vehicle History</div>
                                <div class="card-block m-t-35">
                                    <br>
                                    <table class="table  table-striped table-bordered table-hover table-advance dataTable no-footer" id="editable_table" role="grid">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 35%;"><b>Job Order ID</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 35%;"><b>Details</b></th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1"><b>Actions</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row" class="even">
                                                    
                                                    <td>
                                                        Danice Joy Tanguilan
                                                    </td>
                                                    <td class="center">
                                                        <ul>
                                                            <li>Eating</li>
                                                            <li>Drinking</li>
                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <!--VIEW BUTTON-->
                                                        <div class="btn-group">
                                                        <a class="btn btn-success hvr-float-shadow adv_cust_mod_btn" href="/viewjoborder">
                                                        <i class="fa fa-eye"></i>&nbsp; View
                                                        </a>

                                                        <!-- REMOVE BUTTON -->
                                                        <button class="btn btn-danger hvr-float-shadow adv_cust_mod_btn">
                                                        <i class="fa fa-trash"></i>&nbsp; Remove
                                                        </button>
                                                        </div>
                                                </td>
                                            </tr>   
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF JOB ORDER HISTORY -->
            </div>
        </div>
    </div>
</div>
    <!-- /.outer -->
<!--END CONTENT -->


<!-- global scripts sweet alerts-->
<script type="text/javascript" src="js/components.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/components.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
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


<!--functions-->
<script> 
</script>

<!--functions-->

@stop