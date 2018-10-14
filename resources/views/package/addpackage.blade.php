@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','Add Package') <!-- Page Title -->
@section('content')

    <link type="text/css" rel="stylesheet" href="vendors/sweetalert/css/sweetalert2.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/pages/sweet_alert.css"/>

    <link type="text/css" rel="stylesheet" href="vendors/animate/css/animate.min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/hover/css/hover-min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/wow/css/animate.css"/>

    <!--plugin syles-->
    <link type="text/css" rel="stylesheet" href="vendors/inputlimiter/css/jquery.inputlimiter.css" />
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" />
    <link type="text/css" rel="stylesheet" href="vendors/jquery-tagsinput/css/jquery.tagsinput.css" />
    <link type="text/css" rel="stylesheet" href="vendors/daterangepicker/css/daterangepicker.css" />
    <link type="text/css" rel="stylesheet" href="vendors/datepicker/css/bootstrap-datepicker.min.css" />
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css" />
    <link type="text/css" rel="stylesheet" href="vendors/bootstrap-switch/css/bootstrap-switch.min.css" />
    <link type="text/css" rel="stylesheet" href="vendors/jasny-bootstrap/css/jasny-bootstrap.min.css" />
    <link type="text/css" rel="stylesheet" href="vendors/datetimepicker/css/DateTimePicker.min.css" />
    <link type="text/css" rel="stylesheet" href="vendors/j_timepicker/css/jquery.timepicker.css" />
    <link type="text/css" rel="stylesheet" href="vendors/clockpicker/css/jquery-clockpicker.css" />
    <!-- end of plugin styles -->
    <link type="text/css" rel="stylesheet" href="css/pages/colorpicker_hack.css" />

    <style type="text/css">
        input[type=number]::-webkit-inner-spin-button,
        input[type=number]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
        }
    </style>

    <!-- end of plugin styles -->
    <link type="text/css" rel="stylesheet" href="css/pages/animations.css"/>
    <link type="text/css" rel="stylesheet" href="css/pages/portlet.css"/>
    <!-- <link type="text/css" rel="stylesheet" href="css/pages/advanced_components.css"/> -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CONTENT -->
    <div id="content" class="bg-container">
        <header class="head">
            <div class="main-bar">
                <div class="row" style = "height: 47px;">
                    <div class="col-6">
                        <h4 class="m-t-15">
                            <i class="fa fa-bookmark"></i>
                            Package
                        </h4>
                    </div>
                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right   ">
                            <li class="breadcrumb-item " >
                                <a href="/package">
                                    <i class="fa fa-bookmark" data-pack="default" data-tags=""></i>
                                    Package
                                </a>
                            </li>
                            <li class="active breadcrumb-item">&nbsp;Add Package</li>
                        </ol>
                    </div>
                </div>
            </div>
        </header>
        <div class="outer">
            <div class="inner bg-container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card" >
                            <div class="card-header bg-primary disabled text-white" ><i class= "fa fa-plus-square"></i>&nbsp;&nbsp;Add Package</div>
                                <div class="card-block">
                                    <div class="row m-t-5">
                                        <!--PRODUCT, SERVICE, FREE ITEM TAB-->
                                        <div class="col-lg-6 m-t-10">
                                            <div class="card">
                                                <div class="card-header bg-white">
                                                    <ul class="nav nav-tabs card-header-tabs float-left">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="#tab1" data-toggle="tab">Products</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#tab2" data-toggle="tab">Services</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="card-block">
                                                    <div class="tab-content m-t-15">
                                                        <!--PRODUCT TAB-->
                                                        <div class="tab-pane active" id="tab1">
                                                            <table class="table  table-bordered table-hover dataTable no-footer" id="producttab1" role="grid">
                                                                <thead>
                                                                    <tr style="background-color: #f5f5f5">
                                                                        <th>#</th>
                                                                        <th><b>Product</b></th>
                                                                        <th><b>Description</b></th>
                                                                        <th><b>Price</b></th>
                                                                        <th style="width: 5%;"><b>Select</b></th>
                                                                    </tr>
                                                                </thead>
                                                                @foreach($product as $prod)
                                                                    <tr>
                                                                        <td>{{$prod->ProductID}}</td>
                                                                        <td>{{ $prod->BrandName }} - {{$prod->ProductName}}</td>
                                                                        <td>{{$prod->ProductTypeName}} {{$prod->Size}} - {{$prod->UnitTypeName}}</td>
                                                                        <td>{{$prod->Price}}</td>
                                                                        <td><input type="checkbox" name="prodcheck-tab1"></td>
                                                                    </tr>
                                                                @endforeach
                                                            </table>
                                                            <div class="tab tab-btn">
                                                                <button class="btn btn-info hvr-float-shadow adv_cust_mod_btn m-t-5 tipso_bounceIn" style = "left: 370px;" data-background="#428bca" data-color="white" data-tipso="Move" onclick="prodtab1_To_tab2();"><i class="fa fa-arrow-right text-white" ></i></button>
                                                            </div>
                                                        </div>
                                                        <!--END PRODUCT TAB-->

                                                        <!--SERVICE TAB-->
                                                        <div class="tab-pane" id="tab2">
                                                            <table class="table table-bordered table-hover dataTable no-footer" id="servicetab1" role="grid">
                                                                <thead>
                                                                    <tr style="background-color: #f5f5f5">
                                                                        <th>#</th>
                                                                        <th><b>Service</b></th>
                                                                        <th><b>Category</b></th>
                                                                        <th><b>Price</b></th>
                                                                        <th style="width: 5%;"><b>Select</b></th>
                                                                    </tr>
                                                                </thead>
                                                                @foreach($service as $serv)
                                                                    <tr>
                                                                        <td>{{$serv->ServiceID}}</td>
                                                                        <td>{{$serv->ServiceName}}</td>
                                                                        <td>{{$serv->ServiceCategoryName}}</td>
                                                                        <td>{{$serv->InitialPrice}}</td>
                                                                        <td><input type="checkbox" name="servicecheck-tab1"></td>
                                                                    </tr>
                                                                @endforeach
                                                            </table>
                                                            <!--DELETE BUTTON-->
                                                            <div class="tab tab-btn">
                                                                <button class="btn btn-info hvr-float-shadow adv_cust_mod_btn m-t-5 tipso_bounceIn" style = "left: 370px;" data-background="#428bca" data-color="white" data-tipso="Move" onclick="servicetab1_To_tab2();"><i class="fa fa-arrow-right text-white " ></i></button>
                                                            </div>
                                                        </div>
                                                        <!--END SERVICE TAB-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--Package DETAILS-->
                                        <div class="col-lg-6 m-t-10">
                                            <form id="packForm">
                                                <div class="card">
                                                    <div class="card-header bg-black">Package Details</div>
                                                        <div class="card-block">
                                                            <div class="tab">
                                                                <div class="row">
                                                                    <div class="col-md-7 m-t-15">
                                                                        <div class="form-group">
                                                                            <h5 style = "">Package:</h5>
                                                                            <input id="packageName" name="packagename" type="text" placeholder="Package Name" class="form-control m-t-5"  >
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5 m-t-15">
                                                                        <div class="form-group">
                                                                            <h5 style = "">Computed Price:</h5>
                                                                            <div class="input-group m-t-5">
                                                                                <input type="number" class="form-control" disabled="disabled" placeholder ="Php." id="computePrice">
                                                                                <!-- <span class="input-group-addon">.00</span> -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--Package Details Product Table-->
                                                            <div class ="m-t-15">
                                                                <table class="table  table-striped table-bordered table-hover  dataTable no-footer" id="producttab2" role="grid">
                                                                    <thead>
                                                                        <tr style="background-color: #f5f5f5">
                                                                            <th>#</th>
                                                                            <th>Product</th>
                                                                            <th>Description</th>
                                                                            <th>Price</th>
                                                                            <th>Quantity</th>
                                                                            <th style="width: 5%;">Select</th>
                                                                        </tr>
                                                                    </thead>
                                                                </table>
                                                                <div class="tab tab-btn">
                                                                    <button class="btn btn-warning hvr-float-shadow adv_cust_mod_btn m-t-5 tipso_bounceIn" style = "left: 370px;" data-background="#ffbb33" data-color="white" data-tipso="Move" onclick="prodtab2_To_tab1();"><i class="fa fa-arrow-left text-white" ></i></button>
                                                                </div>
                                                            </div>
                                                            <!--End Package Details Product Table-->
                                                            <!--Package Details Service Table-->
                                                            <div class ="m-t-15">
                                                                <table class="table table-bordered table-hover dataTable no-footer" id="servicetab2" role="grid">
                                                                    <thead>
                                                                        <tr style="background-color: #f5f5f5">
                                                                            <th>#</th>
                                                                            <th>Service</th>
                                                                            <th>Category</th>
                                                                            <th>Price</th>
                                                                            <th style="width: 5%;">Select</th>
                                                                        </tr>
                                                                    </thead>
                                                                </table>
                                                                <div class="tab tab-btn">
                                                                    <button class="btn btn-warning hvr-float-shadow adv_cust_mod_btn m-t-5 tipso_bounceIn" style = "left: 370px;" data-background="#ffbb33" data-color="white" data-tipso="Move" onclick="servicetab2_To_tab1();"><i class="fa fa-arrow-left text-white" ></i></button>
                                                                </div>
                                                            </div><br><br>
                                                            <!--End Package Details Service Table-->
                                                            <div class="row">
                                                                <div class="col-md-7">
                                                                    <h5>Warranty: <span style="color: red"></span></h5>
                                                                    <div class="form-group">
                                                                        <input type="number" min="1" id="warranty" name="warranty" placeholder="Warranty" class="form-control m-t-10"/>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-5">
                                                                    <div class="m-t-25"></div>
                                                                    <div class="form-group">
                                                                        <select id="durationmode" name="durationmode" class=" form-control chzn-select m-t-10">
                                                                            <option disabled selected>Please choose</option>
                                                                            <option value="Day">Day(s)</option>
                                                                            <option value="Week">Week(s)</option>
                                                                            <option value="Month">Month(s)</option>
                                                                            <option value="Year">Year(s)</option>
                                                                        </select>
                                                                        <span class="form-control-feedback bv-no-label" aria-hidden="true" data-bv-icon-for="durationmode"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-7 m-t-10">
                                                                    <h5>Warranty(mileage): <span style="color: red"></span></h5>
                                                                    <input type="number" id="warrantymileage" name="warrantymileage" placeholder="Mileage" class="form-control m-t-10"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer bg-black">
                                                            <div class="input-group">
                                                                <div class="col-md-8 m-t-5">
                                                                    <div class="input-group" >
                                                                        <h5 style = "width: 190px;"class="m-t-10">Package Price:</h5>
                                                                        <div class="form-group"> 
                                                                            <input type="number" min="1" step="0.01" class="form-control" style = "width: 130px;" id="packagePrice" name="price" placeholder ="Php";>
                                                                            <!-- <span class="input-group-addon">.00</span> -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 m-t-5">
                                                                    <div class="input-group examples transitions" >
                                                                        <button type="submit" class="btn btn-success source success_clr m-l-0 hvr-float-shadow" style ="width: 160px; left: 35px;" id="submitForm"><i class="fa fa-save text-white" ></i>&nbsp; Save</button>
                                                                    </div>
                                                                </div>
                                                                <!--btn btn-success  source success_clr m-l-0 hvr-float-shadow adv_cust_mod_btn  -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <!--END Package DETAILS-->
                                        </div>
                                    </div>
                                    <div class="card-footer bg-black disabled"></div>
                                </div>
                            </div>
                        </div>
                    </div>
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


<!-- global scripts date picker-->
<script type="text/javascript" src="vendors/jquery.uniform/js/jquery.uniform.js"></script>
<script type="text/javascript" src="vendors/inputlimiter/js/jquery.inputlimiter.js"></script>
<script type="text/javascript" src="vendors/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<script type="text/javascript" src="vendors/jquery-tagsinput/js/jquery.tagsinput.js"></script>
<script type="text/javascript" src="vendors/validval/js/jquery.validVal.min.js"></script>
<script type="text/javascript" src="vendors/inputmask/js/jquery.inputmask.bundle.js"></script>
<script type="text/javascript" src="vendors/moment/js/moment.min.js"></script>
<script type="text/javascript" src="vendors/daterangepicker/js/daterangepicker.js"></script>
<script type="text/javascript" src="vendors/datepicker/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="vendors/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="vendors/autosize/js/jquery.autosize.min.js"></script>
<script type="text/javascript" src="vendors/jasny-bootstrap/js/jasny-bootstrap.min.js"></script>
<script type="text/javascript" src="vendors/jasny-bootstrap/js/inputmask.js"></script>
<script type="text/javascript" src="vendors/datetimepicker/js/DateTimePicker.min.js"></script>
<script type="text/javascript" src="vendors/j_timepicker/js/jquery.timepicker.min.js"></script>
<script type="text/javascript" src="vendors/clockpicker/js/jquery-clockpicker.min.js"></script>
<!--end of plugin scripts-->
<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript" src="js/pages/datetime_piker.js"></script>

<!-- Save -->
<script>
$(document).ready(function(){

  $("#submitForm").click(function(){
    var submitProdIdVal = []
    var submitServiceIdVal = []
    var qtyArr = []
    var temporary
    servicetab2 = document.getElementById("servicetab2")
    producttab2 = document.getElementById("producttab2")

    for (var i = 1; i < producttab2.rows.length; i++) {
      submitProdIdVal.push(producttab2.rows[i].cells[0].innerHTML)
      temporary = producttab2.rows[i].cells[1].innerHTML
      temporary = temporary.replace(/'/g,'').replace(/ /g,'')
      qtyArr[i-1] = $("#qty"+temporary).val()
    }
    for (var i = 1; i < servicetab2.rows.length; i++) {
      submitServiceIdVal.push(servicetab2.rows[i].cells[0].innerHTML)
    }
    $.ajax({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: '/savePackage',
        type: 'POST',
        data: {
          packageName : $('#packageName').val(),
          price : $('#packagePrice').val(),
          warranty : $('#warranty').val(),
          mileage : $('#warrantymileage').val(),
          durationMode : $('#durationmode').val(),
          productId : submitProdIdVal,
          serviceId : submitServiceIdVal,
          qty : qtyArr
        },
        success: function()
        {
            window.location.href = "package";
                   },
                         error: function(xhr)
                       {
                         //alert("Error!");
                         window.location.href = "package";
                       }
    });
  });
});
</script>
<!-- End Save -->

<!--Product table 1 to Product Table 2-->
<script>
            function prodtab1_To_tab2()
            {

                var producttab1 = document.getElementById("producttab1"),
                    producttab2 = document.getElementById("producttab2"),
                    checkboxes = document.getElementsByName("prodcheck-tab1");
            console.log("Val1 = " + checkboxes.length);
                 for(var i = 0; i < checkboxes.length; i++)
                     if(checkboxes[i].checked)
                        {
                           // create new row and cells
                            var newRow = producttab2.insertRow(producttab2.length),
                                cell1 = newRow.insertCell(0),
                                cell2 = newRow.insertCell(1),
                                cell3 = newRow.insertCell(2);
                                cell4 = newRow.insertCell(3);
                                cell5 = newRow.insertCell(4);
                                cell6 = newRow.insertCell(5);

                            //compute on add
                                var compTempPrice = $("#computePrice").val()
                            if (compTempPrice == '') {
                               compTempPrice = 0
                            }
                            else {
                              compTempPrice = parseFloat(compTempPrice)
                            }
                            var tempPrice = parseFloat(producttab1.rows[i+1].cells[3].innerHTML)
                            var totalTempPrice = tempPrice + compTempPrice * 1

                            // add values to the cells
                            cell1.innerHTML = producttab1.rows[i+1].cells[0].innerHTML;
                            cell2.innerHTML = producttab1.rows[i+1].cells[1].innerHTML;
                            cell3.innerHTML = producttab1.rows[i+1].cells[2].innerHTML+' '+'<input type="number" hidden style="width:2cm;" id="hidTotal'+producttab1.rows[i+1].cells[1].innerHTML.replace(/'/g, '').replace(/ /g,'')+'" value="0">';
                            cell4.innerHTML = producttab1.rows[i+1].cells[3].innerHTML+' '+'<input type="number" hidden style="width:2cm;" id="hidprice'+producttab1.rows[i+1].cells[1].innerHTML.replace(/'/g, '').replace(/ /g,'')+'" value="'+producttab1.rows[i+1].cells[3].innerHTML+'">';
                            $("#computePrice").val(parseFloat(totalTempPrice))
                            cell5.innerHTML = '<input type="number" onchange="computeQty(this.id)" id="qty'+producttab1.rows[i+1].cells[1].innerHTML.replace(/'/g, '').replace(/ /g,'')+'" class="form-control" style="width: 20px;" value="1">'
                            cell6.innerHTML = "<input type='checkbox' name='prodcheck-tab2'>";

                            // remove the transfered rows from the first table [producttab1]
                            var index = producttab1.rows[i+1].rowIndex;
                            producttab1.deleteRow(index);
                            // we have deleted some rows so the checkboxes.length have changed
                            // so we have to decrement the value of i
                            i--;
                           console.log(checkboxes.length);
                        }
            }

            // compute price with qty
            function computeQty(id){
              var hidPriceId = id.replace('qty','hidprice')
              var hidTotalId = id.replace('qty','hidTotal')
              var compPrice = $("#computePrice").val()
              var pricee = $('#'+hidPriceId).val()
              var qtyVal = $('#'+id).val()
              var multiplyQty = qtyVal * pricee
              $('#'+hidTotalId).val(multiplyQty)
              var totalMultiplyPrice = $('#'+hidTotalId).val()
              var newPrice = compPrice - pricee
              var finalPrice = parseInt(newPrice) + parseInt(totalMultiplyPrice)
              $("#computePrice").val(finalPrice)
            }

            function prodtab2_To_tab1()
            {
                var producttab1 = document.getElementById("producttab1"),
                    producttab2 = document.getElementById("producttab2"),
                    checkboxes = document.getElementsByName("prodcheck-tab2");
            console.log("Val1 = " + checkboxes.length);
                 for(var i = 0; i < checkboxes.length; i++)
                     if(checkboxes[i].checked)
                        {
                            // create new row and cells
                            var newRow = producttab1.insertRow(producttab1.length),
                                cell1 = newRow.insertCell(0),
                                cell2 = newRow.insertCell(1),
                                cell3 = newRow.insertCell(2);
                                cell4 = newRow.insertCell(3);
                                cell5 = newRow.insertCell(4);

                                //subtract
                                var compTempPrice = $("#computePrice").val()
                                if (compTempPrice == '') {
                                   compTempPrice = 0
                                }
                                else {
                                  compTempPrice = parseInt(compTempPrice)
                                }
                                var tempPrice = parseInt(producttab2.rows[i+1].cells[3].innerHTML)
                                var cond = $("#hidTotal"+producttab1.rows[i+1].cells[1].innerHTML.replace(/'/g, '').replace(/ /g,'')).val()
                                var totalTempPrice
                                if (cond == 0) {
                                  totalTempPrice = parseInt(compTempPrice) - parseInt(tempPrice) * 1
                                }
                                else {
                                  totalTempPrice = parseInt(compTempPrice) - parseInt(cond) * 1
                                }
                                var subtractPrice = parseInt(totalTempPrice)

                            // add values to the cells
                            cell1.innerHTML = producttab2.rows[i+1].cells[0].innerHTML;
                            cell2.innerHTML = producttab2.rows[i+1].cells[1].innerHTML;
                            cell3.innerHTML = producttab2.rows[i+1].cells[2].innerHTML;
                            cell4.innerHTML = producttab2.rows[i+1].cells[3].innerHTML;
                            cell5.innerHTML = "<input type='checkbox' name='prodcheck-tab1'>";
                            $("#computePrice").val(subtractPrice)
                            // remove the transfered rows from the second table [producttab2]
                            var index = producttab2.rows[i+1].rowIndex;
                            producttab2.deleteRow(index);
                            // we have deleted some rows so the checkboxes.length have changed
                            // so we have to decrement the value of i
                            i--;
                           console.log(checkboxes.length);
                        }
            }

</script>
<!--End Product Table 1 to Product Table 2-->

<!--Service table 1 to Service Table 2-->
<script>

            function servicetab1_To_tab2()
            {
                var servicetab1 = document.getElementById("servicetab1"),
                    servicetab2 = document.getElementById("servicetab2"),
                    checkboxes = document.getElementsByName("servicecheck-tab1");
            console.log("Val1 = " + checkboxes.length);
                 for(var i = 0; i < checkboxes.length; i++)
                     if(checkboxes[i].checked)
                        {
                            // create new row and cells
                            var newRow = servicetab2.insertRow(servicetab2.length),
                                cell1 = newRow.insertCell(0),
                                cell2 = newRow.insertCell(1),
                                cell3 = newRow.insertCell(2);
                                cell4 = newRow.insertCell(3);
                                cell5 = newRow.insertCell(4);

                                //compute on price
                                var compTempPrice = $("#computePrice").val()
                                if (compTempPrice == '') {
                                   compTempPrice = 0
                                }
                                else {
                                  compTempPrice = parseFloat(compTempPrice)
                                }
                                var tempPrice = parseFloat(servicetab1.rows[i+1].cells[3].innerHTML)
                                var totalTempPrice = compTempPrice + tempPrice * 1

                            // add values to the cells
                            cell1.innerHTML = servicetab1.rows[i+1].cells[0].innerHTML;
                            cell2.innerHTML = servicetab1.rows[i+1].cells[1].innerHTML;
                            cell3.innerHTML = servicetab1.rows[i+1].cells[2].innerHTML;
                            cell4.innerHTML = servicetab1.rows[i+1].cells[3].innerHTML;
                            $("#computePrice").val(parseFloat(totalTempPrice))
                            cell5.innerHTML = "<input type='checkbox' name='servicecheck-tab2'>";

                            // remove the transfered rows from the first table [servicetab1]
                            var index = servicetab1.rows[i+1].rowIndex;
                            servicetab1.deleteRow(index);
                            // we have deleted some rows so the checkboxes.length have changed
                            // so we have to decrement the value of i
                            i--;
                           console.log(checkboxes.length);
                        }
            }


            function servicetab2_To_tab1()
            {
                var servicetab1 = document.getElementById("servicetab1"),
                    servicetab2 = document.getElementById("servicetab2"),
                    checkboxes = document.getElementsByName("servicecheck-tab2");
            console.log("Val1 = " + checkboxes.length);
                 for(var i = 0; i < checkboxes.length; i++)
                     if(checkboxes[i].checked)
                        {
                            // create new row and cells
                            var newRow = servicetab1.insertRow(servicetab1.length),
                                cell1 = newRow.insertCell(0),
                                cell2 = newRow.insertCell(1),
                                cell3 = newRow.insertCell(2);
                                cell4 = newRow.insertCell(3);
                                cell5 = newRow.insertCell(4);

                                //compute on price
                                var compTempPrice = $("#computePrice").val()
                                if (compTempPrice == '') {
                                   compTempPrice = 0
                                }
                                else {
                                  compTempPrice = parseFloat(compTempPrice)
                                }
                                var tempPrice = parseFloat(servicetab2.rows[i+1].cells[3].innerHTML)
                                var totalTempPrice = compTempPrice - tempPrice * 1

                            // add values to the cells
                            cell1.innerHTML = servicetab2.rows[i+1].cells[0].innerHTML;
                            cell2.innerHTML = servicetab2.rows[i+1].cells[1].innerHTML;
                            cell3.innerHTML = servicetab2.rows[i+1].cells[2].innerHTML;
                            cell4.innerHTML = servicetab2.rows[i+1].cells[3].innerHTML;
                            $("#computePrice").val(parseFloat(totalTempPrice))
                            cell5.innerHTML = "<input type='checkbox' name='servicecheck-tab1'>";

                            // remove the transfered rows from the second table [servicetab2]
                            var index = servicetab2.rows[i+1].rowIndex;
                            servicetab2.deleteRow(index);
                            // we have deleted some rows so the checkboxes.length have changed
                            // so we have to decrement the value of i
                            i--;
                           console.log(checkboxes.length);
                        }
            }

</script>
<!--End Service table 1 to Service Table 2-->



<script type="text/javascript" src="vendors/jquery-validation/js/jquery.validate.js"></script>
<script type="text/javascript" src="vendors/bootstrapvalidator/js/bootstrapValidator.min.js"></script>


<script type="text/javascript">
   $(document).ready(function() {

    $('#packForm')
    .find('[name="durationmode"]')
            .chosen()
            // Revalidate the color when it is changed
            .change(function(e) {
                $('#packForm').bootstrapValidator('revalidateField', 'durationmode');
            })           
            .end()
    .find('[name="brand"]')
            .chosen()
            // Revalidate the color when it is changed
            .change(function(e) {
                $('#addprod').bootstrapValidator('revalidateField', 'brand');
            })           
            .end()
    .find('[name="unit"]')
            .chosen()
            // Revalidate the color when it is changed
            .change(function(e) {
                $('#addprod').bootstrapValidator('revalidateField', 'unit');
            })           
            .end()

    .bootstrapValidator({
        message: 'This value is not valid', 
        excluded: ':disabled',
        feedbackIcons: {
            required: 'fa fa-asterisk',
            valid: 'fa fa-check',
            invalid: 'fa fa-times',
            validating: 'fa fa-refresh',
            },
        trigger: 'blur',
        submitButtons: 'button[type="submit"]',
        fields: {
            feedbackIcons: 'true',
            packagename: {
                message: 'The package name is not valid',
                validators: {
                    notEmpty: {
                        message: 'The package name is required and cannot be empty. '
                    },
                    
                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'The package name only accepts of alphanumeric values. '
                    },
                    regexp: {
                        regexp: /^[^~`!$@#*_={}()|\;<>,.?%^&]+/,
                        message: 'The package name only accept alphanumeric values. '
                    },
                }
            },
            price: {
                message: 'The price is not valid',
                validators: {
                    notEmpty: {
                        message: 'The price is required and cannot be empty. '
                    },
                regexp: {
                        regexp: /^(0|[1-9]\d*)(\.\d+)?$/,
                        message: 'The price only accept numeric values. '
                    },
                }
            },
           
        }
    });


});

</script>


@stop
