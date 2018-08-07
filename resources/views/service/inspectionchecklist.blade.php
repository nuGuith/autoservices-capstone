@extends('layout.master') <!-- Include Master Page -->
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
    <!-- <link type="text/css" rel="stylesheet" href="css/pages/advanced_components.css"/> -->

        <!-- CONTENT -->
        <div id="content" class="bg-container">

            <header class="head">
                <div class="main-bar">
                    <div class="row" style="height: 47px;">
                    <div class="col-6">
                        <h4 class="m-t-5" style="margin-top: 2.5%;">
                            <i class="fa fa-wrench"></i>
                            Inspection Checklist
                        </h4>
                    </div>
                    <div class="col-sm-6 col-12"  >
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">
                                <a href="#">
                                    <i class="fa fa-wrench"></i>
                                        Service
                                </a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="inspectionchecklist">
                                        Inspection Checklist
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
                                            &nbsp;Add Inspection Items                                  
                                         </a>
                                    </div>
                             </div>


                            <div class="card-block m-t-35" id="user_body">
                                <div class="table-toolbar">
                                    <div class="btn-group">
                                    <div class="btn-group float-right users_grid_tools">
                                        <div class="tools"></div>
                                    </div>
                                    </div>
                                </div>
                            <div>
                                        <table class="table table-bordered table-hover table-advance dataTable no-footer" style="border-radius: 10px;" id="editable_table" role="grid">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 20%;"><b>Inspection</b></th>
                                                    <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1" style="width: 20%;"><b>Inspection Items</b></th>
                                                    <th class="sorting wid-15" tabindex="0" rowspan="1" colspan="1" style="width: 15%;"><b>Actions</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>             
                                                <tr>
                                                    <td></td>
                                                    <td>
                                                        <ul style="padding-left: 1.2em;">

                                                        </ul>
                                                    </td>
                                                    <td>
                                                        <!--EDIT BUTTON-->
                                                        <button class="btn btn-success hvr-float-shadow adv_cust_mod_btn tipso_bounceIn" onclick="editMod()" data-background="#3CB371" data-color="white" data-tipso="Edit" data-toggle="modal" data-href="#responsive" href="#editModal"><i class="fa fa-pencil text-white"></i>
                                                        </button>
                                                              
                                                        <!--DELETE BUTTON-->
                                                        <button class="btn btn-danger hvr-float-shadow tipso_bounceIn" onclick="deleteModal()" data-background="#FA8072" data-color="white" data-tipso="Delete"><i class="fa fa-trash text-white"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- END TABLE -->
            <!-- START EDIT MODAL -->
            {!! Form::open(array('id' => 'editForm', 'url' => 'inspectionchecklist', 'action' => 'InspectionChecklistController@update', 'method' => 'PUT')) !!}
                <!-- {!! csrf_field() !!} -->
                <div class="modal fade in" id="editModal" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-pencil"></i>
                                            &nbsp;Edit Inspection Checklist</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row m-r-10">
                                    <div class="col-md-11 m-t-10" style="padding-left: 40px;">
                                        <h5>Inspection Name: <span style="color: red">*</span></h5>
                                        <p>
                                            {!!
                                                Form::input ('name','text', Input::old('inspectionname'), [
                                                'id'=>'inspectionname',
                                                'name'=>'inspectionname',
                                                'type'=>'text',
                                                'placeholder'=>'Inspection Name',
                                                'class'=>'form-control m-t-10',
                                                'maxlength'=>'100',
                                                'required'
                                                ])
                                            !!}
                                        </p>
                                    </div>
                                </div>
                                
                                <!--Table: edit-order-list -->
                                    <div class="col-md-12">
                                        <table id="myTable" class="table edit-order-list" style="border-color: white" rules="rows">
                                            <thead>
                                                <tr>
                                                    <td><h5>Inspection Items <span style="color: red">*</span></h5>
                                                    </td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                            <!--Seach Select: Product-->
                                            <td  style="width:500px;">
                                                <input type="text" name="item" placeholder="Item" class="form-control"/>                                   
                                            </td>
                                             
                                            <!--ADD ROW FOR EDIT MODAL-->                          
                                            <td style="border-color: white" rules="rows">
                                                <div class="examples transitions m-t-0">
                                                <button type="button" id="editrow" value="Add Row" class="btn btn-warning hvr-float-shadow" ><i class="fa fa-plus text-white" ></i></button>
                                             </div>
                                            </td>
                                            <td style="border-color: white" rules="rows"><i class="deleteeditRow "></i>
                                            </td>
                                            </tr>
                                        </tbody>
                                    <tfoot>
                                     </tfoot>
                                    </table>
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



                            <div class="modal-footer">
                                <div class="examples transitions m-t-5">
                                    <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                                </div>
                                <div class="examples transitions m-t-5">
                                    {!!  Form::button('<i class="fa fa-save text-white"></i>&nbsp; Save Changes', [
                                        'type'=>'submit',
                                        'class'=>'btn btn-success warning source cancel_edit m-l-10 hvr-float-shadow adv_cust_mod_btn',
                                        'data-dismiss'=>'modal'
                                    ])
                                    !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
                <!-- END EDIT MODAL -->

                <!-- START ADD MODAL -->
                {!! Form::open(array('id' => 'addForm', 'url' => 'inspectionchecklist', 'action' => 'InspectionChecklistController@store', 'method' => 'POST')) !!}
                <!-- {!! csrf_field() !!} -->
                <div class="modal fade in " id="addModal" tabindex="-2" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-plus"></i>
                                            &nbsp;Add Inspection Items</h4>
                            </div>

                        <div class="modal-body">
                            <div class="row m-t-10">
                                    <div class="col-md-11 m-t-10" style="padding-left: 40px;">
                                        <h5>Inspection Name: <span style="color: red">*</span></h5>
                                        <p>
                                            {!!
                                                Form::input ('name','text', Input::old('inspectionname'), [
                                                'id'=>'inspectionname',
                                                'name'=>'inspectionname',
                                                'type'=>'text',
                                                'placeholder'=>'Inspection Name',
                                                'class'=>'form-control m-t-10',
                                                'maxlength'=>'100',
                                                'required'
                                                ])
                                            !!}
                                        </p>
                                    </div>
                                </div>
                                
                                <!--Table: edit-order-list -->
                                    <div class="col-md-12">
                                        <table id="myTable" class="table order-list" style="border-color: white" rules="rows">
                                            <thead>
                                                <tr>
                                                    <td><h5>Inspection Items <span style="color: red">*</span></h5>
                                                    </td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                            <!--Seach Select: Product-->
                                            <td  style="width:500px;">
                                                <input type="text" name="item" placeholder="Item" class="form-control"/>                                   
                                            </td>
                                             
                                            <!--ADD ROW FOR EDIT MODAL-->                          
                                            <td style="border-color: white" rules="rows">
                                                <div class="examples transitions m-t-0">
                                                <button type="button" id="addrow" value="Add Row" class="btn btn-warning hvr-float-shadow" ><i class="fa fa-plus text-white" ></i></button>
                                             </div>
                                            </td>
                                            <td style="border-color: white" rules="rows"><i class="deleteeditRow "></i>
                                            </td>
                                            </tr>
                                        </tbody>
                                    <tfoot>
                                     </tfoot>
                                    </table>
                                </div>
                                    <br>
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
                {!! Form::close() !!}
                <!-- END ADD MODAL -->

                <!-- START DELETE MODAL -->
                {!! Form::open(array('id' => 'deleteForm', 'url' => 'inspectionchecklist', 'action' => 'InspectionChecklistController@delete', 'method' => 'PATCH')) !!}
                <!-- {!! csrf_field() !!} -->
                <div class="modal fade in " id="deleteModal" tabindex="-3" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-danger">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-trash"></i>
                                            &nbsp;Delete Record</h4>
                            </div>
                           <div class="modal-body">
                                <div class="col m-t-15">
                                    <h5>Are you sure do you want to delete this record?</h5>
                                    <input id="deleteId" name="deleteId" type="hidden" value=null>
                                </div>
                            </div>




                            <div class="modal-footer m-t-10">
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
                <!-- END DELETE MODAL -->
                <!-- END MODAL-->

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
<!-- end of plugin scripts -->

<!-- global scripts animation-->
<script type="text/javascript" src="vendors/snabbt/js/snabbt.min.js"></script>
<script type="text/javascript" src="vendors/wow/js/wow.min.js"></script>
<!-- end of plugin scripts -->
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
     function editModal(id){
            $.ajax({
                type: "GET",
                url: "/inspectionchecklist/"+id+"/edit",
                dataType: "JSON",
                success:function(data){
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
<script> 
$(document).ready(function () {
    var counter = 0;

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";

        cols += '<td><input type="text" class="form-control" name="item" placeholder="Item"' + counter + '"/></td>';
        cols += '<td><input type="button" class="ibtnDel btn  btn-danger btn-md hvr-float-shadow" value ="X"></td>';

        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    });



    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });

});

</script>

<!--script for table edit brand-->
<script> 
$(document).ready(function () {
    var counter = 0;


    $("#editrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";


        cols += '<td><input type="text" class="form-control" name="item" placeholder="Item"' + counter + '"/></td>';
        cols += '<td><input type="button" class="ibtneDel btn  btn-danger btn-md hvr-float-shadow" value ="X"></td>';

        newRow.append(cols);
        $("table.edit-order-list").append(newRow);
        counter++;
    });


    $("table.edit-order-list").on("click", ".ibtneDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});
</script>

@stop