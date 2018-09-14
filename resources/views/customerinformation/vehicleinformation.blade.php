@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','Customer Information') <!-- Page Title -->
@section('content')

    <link type="text/css" rel="stylesheet" href="vendors/sweetalert/css/sweetalert2.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/pages/sweet_alert.css"/>

    <link type="text/css" rel="stylesheet" href="vendors/animate/css/animate.min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/hover/css/hover-min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/wow/css/animate.css"/>

    <link type="text/css" rel="stylesheet" href="vendors/themify/css/themify-icons.css" />

    <link type="text/css" rel="stylesheet" href="vendors/tooltipster/css/tooltipster.bundle.min.css">
    <link type="text/css" rel="stylesheet" href="vendors/tipso/css/tipso.min.css">

    <!-- end of plugin styles -->
    <link type="text/css" rel="stylesheet" href="css/pages/animations.css"/>

    <link type="text/css" rel="stylesheet" href="css/pages/portlet.css"/>

        <!-- CONTENT -->
        <div id="content" class="bg-container">

            <header class="head">
                <div class="main-bar">
                    <div class="row" style = "height: 47px;">
                    <div class="col-6">
                        <h4 class="m-t-15">
                            <i class="fa fa-info"></i>&nbsp;
                            Customer Information
                        </h4>
                    </div>

                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right">
                            <li class="breadcrumb-item " >
                                <a href="/vehicleinformation">
                                    <i class="fa fa-info" data-pack="default" data-tags=""></i>
                                    &nbsp;Customer Information
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
                                    <h4 class="m-t-5">
                                    <i class="fa fa-info"></i>
                                    &nbsp;Customer Information</h4>
                                    </div>
                             </div>


                            <div class="card-block m-t-0">
                                <div class="table-toolbar">
                                    <div class="btn-group">
                                    <div class="btn-group float-right users_grid_tools">
                                        <div class="tools"></div>
                                    </div>
                                    </div>
                                </div>
                            <div>


                        <table class="table table-bordered table-hover table-advance dataTable no-footer" id="example2" role="grid">
                            <thead>
                                <tr role="row">
                                    
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 50%;"><b>Customer</b></th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 50%;"><b>Actions</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="even">
                                    
                                    <td class="center">
                                     <ul style="padding-left: 1.2em;">
                                        <li>Name: </li>
                                        <li>Contact No: </li>
                                        <li>Address: </li>
                                     </ul>
                                    </td>
                                    <td>
                                        
                                    <div class="examples transitions m-t-5">
                                        <!--VIEW BUTTON-->
                                        <button class="btn btn-primary hvr-float-shadow tipso_bounceIn" data-background=" #6495ED" data-color="white" data-tipso="View" onclick="window.location='  {{ url("/viewvehiclehistory") }}'" ><i class="fa fa-eye text-white"></i></button>

                                         <!--EDIT BUTTON-->
                                        <button name = '' class="btn btn-success hvr-float-shadow adv_cust_mod_btn tipso_bounceIn" data-background="#3CB371" data-color="white" data-tipso="Edit" data-toggle="modal" data-href="#responsive" href="#editModal"><i class="fa fa-pencil text-white"></i>
                                        </button>


                                    </div>
                                       
                                       
                                    </div>
                                    </td>
                                </tr>

                               
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->

                <!-- START EDIT MODAL -->
        <div class="modal fade in " id="editModal" tabindex="-3" role="dialog" aria-hidden="false">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header bg-primary">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title text-white"><i class="fa fa-pencil"></i>
                                    &nbsp;Edit  Information</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-lg-12">
                                <!--Textfield: Plate No, Model, Chassis No, Mileage -->
                                <div class="row m-t-10 m-l-10" style="padding-right: 30px;">

                                    <div class="col-lg-12">
                                            <h5>First Name: <span style="color:red">*</span></h5>
                                            <p>
                                                <input id="fname" name="fname" type="text" placeholder="First Name" class="form-control m-t-10">
                                            </p>
                                        </div>
                                        <div class="col-lg-12">
                                            <h5>Middle Name: <span style="color:red">*</span></h5>
                                            <p>
                                                <input id="mname" name="mname" type="text" placeholder="Middle Name" class="form-control m-t-10">
                                            </p>
                                        </div>
                                        <div class="col-lg-12">
                                            <h5>Last Name: <span style="color: red">*</span></h5>
                                            <p>
                                                <input id="lname" name="lname" type="text" placeholder="Last Name" class="form-control m-t-10">
                                            </p>
                                        </div>
                                        <div class="col-lg-12 ">
                                            <h5>Contact No: <span style="color:red">*</span></h5>
                                            <p>
                                                <input id="phones" name="contact" placeholder="(999) 999-9999"" class="form-control m-t-10" type="text" data-inputmask='"mask": "(999) 999-9999"' data-mask">
                                            </p>
                                        </div>
                                        <div class="col-lg-12 ">
                                            <h5>Address: <span style="color:red">*</span></h5>
                                            <p>
                                               <input id="address" name="address" type="text" placeholder="Address" class=" form-control m-t-10">
                                            </p>
                                        </div>
                                        <div class="col-lg-12">
                                            <h5>Email: <span style="color:red"></span></h5>
                                            <p>
                                                <input id="email" name="email" type="text" placeholder="john@gmail.com" class="date_mask form-control m-t-10" data-inputmask="'alias': 'email'">
                                            </p>
                                        </div>
                                        <div class="col-lg-12">
                                            <h5>Senior Citizen/PWD ID: <span style="color: red"></span></h5>
                                            <p>
                                                <input id="id" name="id" type="text" placeholder="Senior Citizen/PWD ID" class="form-control m-t-10">
                                            </p>
                                        </div>
                                                        
                                </div>
                            </div>
                    
                        </div>
                    </div>

                    <div class="modal-footer m-t-10">
                        <div class="examples transitions m-t-5">
                            <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Cancel</button>
                        </div>
                        <div class="examples transitions m-t-5">
                        <button class="btn btn-success source success_clr m-l-0 hvr-float-shadow adv_cust_mod_btn" style ="width: 80px;"  ><i class="fa fa-save text-white" ></i>&nbsp; Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>        



            </div>
        </div>
    </div>
    <!-- /.inner -->
</div>
<!-- /.outer -->
<!--END CONTENT -->


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

<script type="text/javascript" src="vendors/tooltipster/js/tooltipster.bundle.min.js"></script>
<script type="text/javascript" src="vendors/tipso/js/tipso.min.js"></script>
<script type="text/javascript" src="js/pages/tooltips.js"></script>


<!-- global scripts modals-->
<script type="text/javascript" src="js/pages/modals.js"></script>
<!--End of global scripts-->

<script>
    $(document).ready(function() {
    $('#example2').DataTable( {
        
    } );    
} );

</script>


@stop