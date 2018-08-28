@extends('layout.master') <!-- Include Master Page -->
@section('Title','Service Price') <!-- Page Title -->
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
                    <div class="row" style = "height: 47px;">
                    <div class="col-6">
                        <h4 class="m-t-15">
                            <i class="fa fa-wrench"></i>
                            Service Price
                        </h4>
                    </div>

                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right   ">
                            <li class="breadcrumb-item " >
                                <a href="/serviceprice">
                                    <i class="fa fa-wrench" data-pack="default" data-tags=""></i>
                                    Service Price
                                </a>
                            </li>
                            <!-- <li class="active breadcrumb-item">Calendar</li> -->
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
                                            &nbsp;  Add Service Price                                   
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

                        <!--Table: Service Price-->
                        <table class="table  table-bordered table-hover table-advance dataTable no-footer" id="editable_table" role="grid">
                            <thead>
                                <tr role="row">
                                    
                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 25%;"><b>Service Name</b></th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 30%;"><b>Vehicle Model</b></th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 25%;"><b>Price</b></th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1"><b>Actions</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach($sname as $sr)
                                   
                                <tr role="row" class="even">
                                   
                                    <td>
                                        {{$sr->ServiceName}}
                                    </td>

                                    <td class="center">
                                        <ul style="padding-left: 1.7em;">

                                    @foreach($view as $vw)
                                    @if($vw->ServiceID == $sr->ServiceID)

                                    <li>{{$vw->Make}} {{$vw->Model}} {{$vw->Year}} {{$vw->Transmission}}</li>

                                    @endif

                                    @endforeach

                                           

                                    </td>
                                    <td class="center">
                                        {{$sr->Price}}
                                    </td>
                                    <td class="examples transitions">

                                        <!--EDIT BUTTON-->
                                        <button name ="{{$sr->ServiceID}}" onclick = "edit(this.name)"class="btn btn-success hvr-float-shadow adv_cust_mod_btn tipso_bounceIn" data-background="#3CB371" data-color="white" data-tipso="Edit" data-toggle="modal" data-href="#responsive" href="#editModal"><i class="fa fa-pencil text-white"></i>
                                        </button>
                                        
                                        
                                        <!--DELETE BUTTON-->
                                        <button name="{{$sr->ServiceID}}" onclick='del(this.name)'class="btn btn-danger hvr-float-shadow warning confirm tipso_bounceIn" data-background="#FA8072" data-color="white" data-tipso="Delete"><i class="fa fa-trash text-white"></i>
                                        </button>
                                       
                                    </td>
                                 </tr> 
                                @endforeach

                               
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->



                <!--ADD MODAL -->
                 <div class="modal fade in " id="addModal" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-plus"></i>
                                            &nbsp;&nbsp;Add Service Price</h4>
                            </div>
                            <div class="modal-body" style="padding-left: 55px;">
                                
                                <!--Search Select: Service Name-->
                                 <div class="row m-t-5">  
                                    <div class="col-md-11 ">
                                        <h5>Service Name: <span style="color: red">*</span></h5>
                                        <p class ="m-t-10">
                                            <select class="form-control  chzn-select" id= 'service' tabindex="4">
                                                <option disabled selected>Choose Service</option>
                                                @foreach($service as $ser)

                                                <option value="{{$ser->ServiceID}}">{{$ser->ServiceName}}</option>

                                                @endforeach
                                            </select>
                                        </p>
                                    </div>
                                 </div>

                                 <!--Multi Search Select: Vehicle Model -->
                                 <div class="row m-t-5">  
                                    <div class="col-md-11 ">
                                        <h5>Vehicle Model: <span style="color: red">*</span></h5>
                                        <p class ="m-t-10">
                                        <select size="9" multiple class="form-control chzn-select " id="vehicle" name="test_me_form" tabindex="8" placeholder="Choose Model">
                                            <div>
                                                @foreach($vehicle as $veh)

                                                <option value = "{{$veh->ModelID}}">{{$veh->Make}} {{$veh->Model}} {{$veh->Year}} {{$veh->Transmission}}</option>
                                               
                                                @endforeach
                                            </div>
                                        </select>
                                    </div>
                                 </div>
                                
                                <!--Textfield: Price -->
                                <div class="row m-t-5">  
                                    <div class="col-md-11 ">
                                        <h5>Price: <span style="color: red">*</span></h5>
                                            <p class ="m-t-10">
                                                <input id="price" name="price" type="text" placeholder="Price"class="form-control">
                                            </p>
                                    </div>
                                 </div>
                                 
                            </div>


                            <!--Button: Close, Save -->
                            <div class="modal-footer">
                              <div class="examples transitions m-t-5">
                                <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                              </div>
                                <div class="examples transitions m-t-5">
                                     <input type="hidden" id="token" value="{{ csrf_token() }}">
                                    <button class="btn btn-success  source success_clr m-l-10 hvr-float-shadow adv_cust_mod_btn" data-dismiss="modal" id ="addform"><i class="fa fa-save text-white"></i>&nbsp; Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END OF ADD MODAL-->


            <!--EDIT MODAL -->
            <div class="modal fade in " id="editModal" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-pencil"></i>
                                            &nbsp;&nbsp;Edit Service Price</h4>                  
                            </div>


                        <div class="modal-body" style="padding-left: 55px;">
                                

                                 <!--Search Select: Service Name-->
                                 <div class="row m-t-5">  
                                    <div class="col-md-11 ">
                                        <h5>Service Name: <span style="color: red">*</span></h5>
                                        <p class ="m-t-10">
                                            <input type='text' id='eser' hidden>
                                            <select id="eservice" class="form-control  chzn-select" tabindex="4">
                                                @foreach($service as $eser)

                                                <option value="{{$eser->ServiceID}}">{{$eser->ServiceName}}</option>

                                                @endforeach
                                            </select>
                                        </p>
                                    </div>
                                 </div>

                                 <!--Multi Search Select: Vehicle Model -->
                                 <div class="row m-t-5">  
                                    <div class="col-md-11 ">
                                        <h5>Vehicle Model: <span style="color: red">*</span></h5>
                                        <p class ="m-t-10">
                                        <select size="9" multiple class="form-control chzn-select " id="evehicle" onchange="change()"name="test_me_form" tabindex="8" placeholder="Choose Model">
                                            <div>
                                                  @foreach($vehicle as $eveh)

                                                <option value = "{{$eveh->ModelID}}">{{$eveh->Make}} {{$eveh->Model}} {{$eveh->Year}} {{$eveh->Transmission}}</option>
                                               
                                                @endforeach
                                            </div>
                                        </select>
                                    </div>
                                 </div>
                                
                                <!--Textfield: Price -->
                                <div class="row m-t-5">  
                                    <div class="col-md-11 ">
                                        <h5>Price: <span style="color: red">*</span></h5>
                                            <p class ="m-t-10">
                                                <input id="eprice" name="eprice" type="text" placeholder="Price"class="form-control">
                                            </p>
                                    </div>
                                 </div>
                                 
                            </div>

                            <!--Button: Close, Save Changes -->
                            <div class="modal-footer">
                              <div class="examples transitions m-t-5">
                                <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                              </div>
                                <div class="examples transitions m-t-5">
                                    <button id ='editform'class="btn btn-success  source success_clr m-l-10 hvr-float-shadow adv_cust_mod_btn" data-dismiss="modal"><i class="fa fa-save text-white"></i>&nbsp; Save Changes
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END OF EDIT MODAL-->              
            

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
$("#addform").on("click", function () {

           var veh = $('#vehicle').val();
           var ser =  $('#service').val();
           var pr = $('#price').val();




           $.ajax({
             type:"POST",
             url:"/addsprice",
             data:
             {
               veh:veh,
               ser:ser,
               pr:pr,
               '_token': $('#token').val()
             },
             success: function(data){
                             location.reload();

                       },
                             error: function(xhr)
                           {
                                alert("Error!");
                             // location.reload();

                           }

                         });



         });

function edit(id){
    $.ajax({
  type: "GET",
  url:  "/RetrieveSP",
  data:
  {
  id: id,
  },
  success: function(data){

  var sid = data['ty'][0]['ServiceID'];
  var eprice = data['ty'][0]['Price'];
  modarr = []
  mdcount = 0
  idarr = []

  // document.getElementById('eservice').value = sid;

  $('#eservice').val(sid).trigger('chosen:updated');
  $('#eprice').val(eprice);
  $('#eser').val(sid);



  for(var i=0;i<data.ty.length;i++){
    model=data['ty'][i]['ModelID'];
    mid = data['ty'][i]['ServicePriceID'];
    modarr.push(model);
    idarr.push(mid);
    mdcount += 1;
  }

  $('#evehicle').val(modarr).trigger('chosen:updated');

  
  },
  error: function(xhr)
  {
  alert("Error");
  alert($.parseJSON(xhr.responseText)['error']['message']);
  }
  });
}

$("#editform").on("click", function () {

           var eveh = $('#evehicle').val();
           var eser =  $('#eservice').val();
           var epr = $('#eprice').val();

           



              $.ajax({
               type:"POST",
               url:"/editsprice",
               data:
               {
                 
                 eveh:eveh,
                 eser:eser,
                 epr:epr,
                 idarr:idarr,
                 arr:arr,
                 darr:darr,
                 cnt:mdcount,
                 '_token': $('#token').val()
               },
               success: function(data){
                               location.reload();

                         },
                               error: function(xhr)
                             {
                                  alert("Error!");
                               location.reload();

                             }

                           });



         });

function change(){

    var cnt = $('#evehicle').val();
    darr = [];
     arr = [];

     if(cnt.length > mdcount)
             {
                
              for(var x=mdcount;x<cnt.length;x++)
               {
                 arr.push(cnt[x])
               }

               // alert(arr)
             }

     else if (cnt.length < mdcount) {

                
               for(var i=cnt.length;i<mdcount;i++)
                {
                  
                  darr.push(idarr[i])
                }

                alert(darr);
                

             }

}

function del(id){

     $.ajax({
               type:"POST",
               url:"/delsprice",
               data:
               {
                 
               id:id,
                 '_token': $('#token').val()
               },
               success: function(data){
                               location.reload();

                         },
                               error: function(xhr)
                             {
                                  alert("Error!");
                               location.reload();

                             }

                           });

}



</script>


<!-- global scripts modals-->
<script type="text/javascript" src="js/pages/modals.js"></script>
<!--End of global scripts-->


@stop