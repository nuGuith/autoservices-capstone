@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','Service Product') <!-- Page Title -->
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
                            Service Product
                        </h4>
                    </div>

                    <div class="col-sm-6 col-12">
                        <ol  class="breadcrumb float-right   ">
                            <li class="breadcrumb-item " >
                                <a href="/serviceproduct">
                                    <i class="fa fa-wrench" data-pack="default" data-tags=""></i>
                                    Service
                                </a>
                            </li>
                            <li class="active breadcrumb-item">Service Product</li>
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
                                            &nbsp;  Add Service Product                                  
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

                        <!--Table: Service Product-->
                        <table class="table table-bordered table-hover table-advance dataTable no-footer" id="editable_table" role="grid">
                            <thead>
                                <tr role="row">
                                    
                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1" style="width: 35%;"><b>Service Name </b></th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1" style="width: 35%;"><b>Products </b></th>
                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1"><b>Actions</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cnt as $count)
                                <tr role="row" class="even">
                                    <td>
                                        {{$count->ServiceName}}
                                    </td>
                                    <td class="center">
                                        <ul style="padding-left: 1.7em;">
                                            @foreach($view as $vw)
                                                @if($count->ServiceID == $vw->ServiceID)
                                                    <li>{{$vw->ProductName}} - {{$vw->Size}}{{$vw->Unit }}</li>
                                                    
                                                @endif
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td class="examples transitions">

                                        <!--EDIT BUTTON-->
                                        <button name="{{$count->ServiceID}}" onclick="ret(this.name)"class="btn btn-success hvr-float-shadow adv_cust_mod_btn tipso_bounceIn" data-background="#3CB371" data-color="white" data-tipso="Edit" data-toggle="modal" data-href="#responsive" href="#editModal"><i class="fa fa-pencil text-white"></i>
                                        </button>
                                        
                                        
                                        <!--DELETE BUTTON-->
                                        <button name="{{$count->ServiceID}}" onclick="del(this.name)" class="btn btn-danger hvr-float-shadow warning confirm tipso_bounceIn" data-background="#FA8072" data-color="white" data-tipso="Delete"><i class="fa fa-trash text-white"></i>
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
                                            &nbsp;&nbsp;Add Service Product</h4>
                            </div>
                            <div class="modal-body">
                                <div class="row m-r-10">
                                    
                                    <!--Search Select: Service Name -->
                                    <div class="col-md-11 m-t-10 m-l-20">
                                        <h5>Service Name: <span style="color: red">*</span>
                                        <p class ="m-t-10">
                                            <select id="service" class="form-control  chzn-select" tabindex="2">
                                                <option disabled selected>Choose Service Name</option>
                                                @foreach($service as $ser)

                                                <option value="{{$ser->ServiceID}}">{{$ser->ServiceName}}</option>

                                                @endforeach
                                            </select>
                                    </div>

                                    <div class="col-md-11 m-t-10 m-l-20">
                                        <h5>Product Name: <span style="color: red">*</span>
                                        <p class ="m-t-10">
                                            <select class="form-control chzn-select" id="product" name="product"  tabindex="3" multiple="">
                                                    <option disabled>Choose Product</option>
                                                    @foreach($product as $prod)
                                                    <option value="{{$prod->ProductID}}">{{$prod->ProductName}} - {{$prod->Size}}{{$prod->Unit}}</option>
                                                    @endforeach
                                                    
                                                </select>
                                        </p>
                                    </div>

                             </div>
                        </div>


                            <!--Button: Close and Save -->
                            <div class="modal-footer">
                              <div class="examples transitions m-t-5">
                                <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                              </div>

                                <div class="examples transitions m-t-5">
                                    <input type="hidden" id="token" value="{{ csrf_token() }}">
                                    <button id="addform"class="btn btn-success  source success_clr m-l-10 hvr-float-shadow adv_cust_mod_btn" data-dismiss="modal"><i class="fa fa-save text-white"></i>&nbsp; Save
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END OF ADD MODAL-->


                <!-- EDIT MODAL-->
                <div class="modal fade in " id="editModal" tabindex="-1" role="dialog" aria-hidden="false">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-white"><i class="fa fa-pencil"></i>
                                            &nbsp;&nbsp;Edit Service Product</h4>                  
                            </div>


                            <div class="modal-body">
                                <div class="row">                                   
                                    
                                    <!--Search Select: Service Name -->
                                    <div class="col-md-11 m-t-10 m-l-20">
                                        <h5>Service Name: <span style="color: red">*</span>
                                        <p class ="m-t-10">
                                            <select id="eservice"class="form-control  chzn-select" tabindex="2">
                                                <option disabled selected>Choose Service Name</option>
                                                @foreach($service as $sr)
                                                    <option value="{{$sr->ServiceID}}">{{$sr->ServiceName}}      </option>
                                                @endforeach
                                            </select>
                                        </p>
                                    </div>

                                    <div class="col-md-11 m-t-10 m-l-20">
                                        <h5>Product Name: <span style="color: red">*</span>
                                        <p class ="m-t-10">
                                            <select class="form-control chzn-select" id="eproduct" name="eproduct"  tabindex="3" multiple="">
                                                    <option disabled>Choose Product</option>
                                                    @foreach($product as $pr)
                                                    <option value="{{$pr->ProductID}}">{{$pr->ProductName}} - {{$pr->Size}}{{$pr->Unit}}</option>
                                                    @endforeach
                                                </select>
                                        </p>
                                    </div>


                             </div>
                        </div>


                            <!--Button: Close and Save Cahnges -->
                            <div class="modal-footer">
                              <div class="examples transitions m-t-5">
                                <button type="button" data-dismiss="modal" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn">Close</button>
                              </div>
                                <div class="examples transitions m-t-5">
                                    <button id="editform" class="btn btn-success  source success_clr m-l-10 hvr-float-shadow adv_cust_mod_btn" data-dismiss="modal"><i class="fa fa-save text-white"></i>&nbsp; Save Changes
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

      var ser = $('#service').val();
      var prod = $('#product').val();
        
        // alert(prod)




      $.ajax({
        url: "/addsproduct",
        type: "POST",
        data:{

        ser:ser,
        prod:prod,

        '_token': $('#token').val()
      },
      success: function(data){
                            // alert("Success");
                      location.reload();
                            },
                        error: function(xhr)
                        {
                          location.reload();
                        }




      });

});

function ret(id){

  $.ajax({
  type: "GET",
  url:  "/retSP",
  data:
  {
  id: id,
  },
  success: function(data){
  
  arr =[];
  aid=[];
  pscnt=0;
  
  $('#eservice').val(data['ret'][0]['ServiceID']).trigger('chosen:updated');

  
  for (var i=0;i<data.ret.length;i++){
    arr.push(data['ret'][i]['ProductID']);
    aid.push(data['ret'][i]['ProductServiceID'])
    pscnt += 1;
   

  }
  // alert(pscnt)

  $('#eproduct').val(arr).trigger('chosen:updated');

  },
  error: function(xhr)
  {
  alert("Error");
  alert($.parseJSON(xhr.responseText)['error']['message']);
  }
  });



}

$("#editform").on("click", function () {

      var darr = [];
      var eser = $('#eservice').val();
      var eprod = $('#eproduct').val();
      var ecnt = eprod.length;
        
    if(eprod.length < pscnt){

        for(var x=eprod.length;x<pscnt;x++){
            darr.push(aid[x]);
        }

        // alert(darr);
    }




      $.ajax({
        url: "/editSP",
        type: "POST",
        data:{

        ser:eser,
        prod:eprod,
        id:aid,
        darr:darr,
        pscnt:ecnt,


        '_token': $('#token').val()
      },
      success: function(data){
                            // alert("Success");
                      location.reload();
                            },
                        error: function(xhr)
                        {
                            // alert("Error");
                          location.reload();
                        }




      });

});

function del(id){

$.ajax({
        url: "/delSP",
        type: "POST",
        data:{

        
        id:id,


        '_token': $('#token').val()
      },
      success: function(data){
                            // alert("Success");
                      location.reload();
                            },
                        error: function(xhr)
                        {
                            alert("Error");
                          // location.reload();
                        }




      });




}





</script>


<!-- global scripts modals-->
<script type="text/javascript" src="js/pages/modals.js"></script>
<!--End of global scripts-->

@stop