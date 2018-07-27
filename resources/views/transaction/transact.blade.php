@extends('layout.master') <!-- Include Master Page -->
@section('Title','Transaction') <!-- Page Title -->
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
    <!--Plugin styles-->
    <link type="text/css" rel="stylesheet" href="vendors/bootstrapvalidator/css/bootstrapValidator.min.css"/>
<!--page level styles-->
    <link type="text/css" rel="stylesheet" href="css/pages/wizards.css"/>
    <!-- <link type="text/css" rel="stylesheet" href="css/pages/advanced_components.css"/> -->
    <style type="text/css">
        #fb-rendered-form {
          clear:both;
          display:none;
          button{
            float:right;
          }
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
                            Transaction | Inspection
                        </h4>
                    </div>
                    </div>
                </div>
            </header>
                <div class="outer">
                    <div class="inner bg-container">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card m-t-35">
                                <div class="card-header bg-white">
                                    <i class="fa fa-file-text-o"></i>
                                    New Inspection Checklist
                                </div>
                                <div class="card-block m-t-20">
                                    <!--main content--> 
                                    <div id="fb-editor"></div>
                                    <div id="fb-rendered-form">
                                      <form action="#"></form>
                                      <button class="btn btn-default edit-form">Edit</button>
                                    </div>
                                    <!--main content end-->
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.inner -->
        </div>
        <!-- /.outer -->
    <!--END CONTENT -->


<!-- scripts-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="vendors/datatables/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/components.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="vendors/sweetalert/js/sweetalert2.min.js"></script>
<script type="text/javascript" src="js/pages/sweet_alerts.js"></script>
<script type="text/javascript" src="vendors/snabbt/js/snabbt.min.js"></script>
<script type="text/javascript" src="vendors/wow/js/wow.min.js"></script>
<!--Plugin scripts-->
<script type="text/javascript" src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
<script type="text/javascript" src="vendors/twitter-bootstrap-wizard/js/jquery.bootstrap.wizard.min.js"></script>
<!--End of plugin scripts-->
<!--Page level scripts-->
<script type="text/javascript" src="js/pages/wizard.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="http://formbuilder.online/assets/js/form-builder.min.js"></script>

<!-- end page level scripts -->

<script>
    jQuery(function($) {
        $(document.getElementById('fb-editor')).formBuilder();
    });
</script>
<script>
    new WOW().init();
</script>
<script>
     function editModal(id){
            $.ajax({
                type: "GET",
                url: "/servicecategory/"+id+"/edit",
                dataType: "JSON",
                success:function(data){
                    $("#servicecategoryname").val(data.category.ServiceCategoryName);
                    $("#description").val(data.category.Description);
                    $("#servicecategoryid").val(data.category.ServiceCategoryID);
                }
            });
            $('#editModal').modal('show');
        }
</script>

<script type="text/javascript" src="js/pages/modals.js"></script>
<!--End of global scripts-->
@stop