@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','Inspection Checklist') <!-- Page Title -->
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
    <link type="text/css" rel="stylesheet" href="css/pages/advanced_components.css"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!--<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"> -->

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


                            <div class="card-block m-t-35" id="user_body">
                                <!-- <div class="table-toolbar">
                                    <div class="btn-group">
                                    <div class="btn-group float-right users_grid_tools">
                                        <div class="tools"></div>
                                    </div>
                                    </div>
                                </div> -->
                                
                            </div>
                                <!-- END EXAMPLE TABLE PORTLET-->
                                <!-- Content Section START -->
                                <div>
                                    <div class="panel-group" id="accordion">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#item1">
                                                    OPEN DOOR
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="item1" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <div class="card m-t-35">
                                                        <div class="card-header bg-white">
                                                            These are the inspection items for this group of Inspection Checklist
                                                        </div>
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item">A. Weather Strip</li>
                                                            <li class="list-group-item">B. Door Lining - FR LH</li>
                                                            <li class="list-group-item">C. Control Switch</li>
                                                            <li class="list-group-item">D. Step Garnish</li>
                                                            <li class="list-group-item">E. Seat - FR LH</li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#item2">
                                                    INSTRUMENT PANEL</a>
                                                </h4>
                                            </div>
                                            <div id="item2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="card m-t-35">
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item">A. Horn</li>
                                                            <li class="list-group-item">B. Console Box</li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#item3">
                                                    CLOSE DOOR THEN OPEN NEXT DOOR</a>
                                                </h4>
                                            </div>
                                            <div id="item3" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <div class="card m-t-35">
                                                        <ul class="list-group list-group-flush">
                                                            <li class="list-group-item">A. Door Panel</li>
                                                            <li class="list-group-item">B. Dashboard</li>
                                                            <li class="list-group-item">C. Stereo Unit</li>
                                                        </ul>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>    
                                </div>
                                <!-- Content Section END -->
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


<!--scripts for collapsible group
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!--End of scripts for collapsible group -->
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

@stop