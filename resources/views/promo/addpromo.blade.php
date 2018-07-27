@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','Add Promo') <!-- Page Title -->
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
                             <i class="fa fa-bookmark"></i>
                            Promo
                        </h4>
                    </div>

                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right   ">
                            <li class="breadcrumb-item " >
                                <a href="/promo">
                                    <i class="fa fa-bookmark" data-pack="default" data-tags=""></i>
                                    Promo
                                </a>
                            </li>
                            <li class="active breadcrumb-item">&nbsp;Add Promo</li>
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

                                    
                            <div class="card-header bg-primary disabled text-white" ><i class= "fa fa-plus-square"></i>&nbsp;&nbsp;Add Promo</div>
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
                                        <li class="nav-item">
                                            <a class="nav-link" href="#tab3" data-toggle="tab">Free Items</a>
                                        </li>                   
                                    </ul>
                                </div>
    
    <div class="card-block">
    <div class="tab-content m-t-15">

        <!--PRODUCT TAB-->  
        <div class="tab-pane active" id="tab1">

            <table class="table  table-striped table-bordered table-hover table-advance dataTable no-footer" id="producttab1" role="grid">                                       
                    <tr>
                        <th>Product</th>
                        <th>Description</th>
                        <th style="width: 5%;">Select</th>
                    </tr>
                    <tr>
                        <td>Petron Ultron</td>
                        <td>
                            <ul>
                                <li>Oil</li>
                                <li>500 mL</li>
                            </ul>
                        </td>
                        <td><input type="checkbox" name="prodcheck-tab1"></td>
                    </tr>
                    <tr>
                        <td>Motolite- 4500</td>
                        <td>
                            <ul>
                                <li>Batteries</li>
                                <li>4500 watts</li>
                            </ul>
                        </td>
                        <td><input type="checkbox" name="prodcheck-tab1"></td>
                    </tr>
            </table>

             <div class="tab tab-btn">
                 <button class="btn btn-info hvr-float-shadow adv_cust_mod_btn m-t-5" style = "width: 80px; left: 330px;" onclick="prodtab1_To_tab2();">Move&nbsp;&nbsp;<i class="fa fa-arrow-right" ></i></button>
            </div>
        </div>
        <!--END PRODUCT TAB--> 
                                                        

        <!--SERVICE TAB--> 
        <div class="tab-pane" id="tab2">

            <table class="table  table-striped table-bordered table-hover table-advance dataTable no-footer" id="servicetab1" role="grid">                         
                    <tr>
                        <th>Service</th>
                        <th>Category</th>
                        <th style="width: 5%;">Select</th>
                    </tr>
                    <tr>
                        <td>Replace Bell Crank - Sedan</td>
                        <td>
                            Suspension
                        </td>
                        <td><input type="checkbox" name="servicecheck-tab1"></td>
                    </tr>
                    <tr>
                        <td>Change Oil - Large</td>
                        <td>
                            Maintenance
                        </td>
                        <td><input type="checkbox" name="servicecheck-tab1"></td>
                    </tr>

            </table>
 
            <div class="tab tab-btn">
                <button class="btn btn-info hvr-float-shadow adv_cust_mod_btn m-t-5" style = "width: 80px; left: 330px;" onclick="servicetab1_To_tab2();">Move&nbsp;&nbsp;<i class="fa fa-arrow-right" ></i></button>
            </div>
        </div>
        <!--END SERVICE TAB--> 
        

        <!--FREE ITEM TAB--> 
        <div class="tab-pane" id="tab3">

            <table class="table  table-striped table-bordered table-hover table-advance dataTable no-footer" id="itemtab1" role="grid">                         
                    <tr>
                        <th>Free Items</th>
                        <th>Description</th>
                        <th style="width: 5%;">Select</th>
                    </tr>
                    <tr>
                        <td>Petron Ultron</td>
                        <td>
                            <ul>
                                <li>Oil</li>
                                <li>500 mL</li>
                            </ul>
                        </td>
                        <td><input type="checkbox" name="itemcheck-tab1"></td>
                    </tr>
                    <tr>
                        <td>Replace Compressor-Sedan</td>
                        <td>
                            Aircon
                        </td>
                        <td><input type="checkbox" name="itemcheck-tab1"></td>
                    </tr>

            </table>
 
            <div class="tab tab-btn">
                <button class="btn btn-info hvr-float-shadow adv_cust_mod_btn m-t-5" style = "width: 80px; left: 330px;" onclick="itemtab1_To_tab2();">Move&nbsp;&nbsp;<i class="fa fa-arrow-right" ></i></button>
            </div>
        </div>
        <!--END FREE ITEM TAB--> 
                                                       
    
                </div>
            </div>
        </div>
    </div>
                      

    <!--PROMO DETAILS-->
    <div class="col-lg-6 m-t-10">
        <div class="card">
            <div class="card-header bg-black">
                Promo Details
            </div>
        
            <div class="card-block">
            <div class="tab">
                
                <div class="input-group">
                    <div class="col-md-7 m-t-15">
                        <h5 style = "">Promo:</h5>
                        <p>
                            <input id="name" name="promoname" type="text" placeholder="Promo Name" class="form-control  m-t-5" style = "width: 210px;" >
                        </p>
                    </div>


                    <div class="col-md-5 m-t-15">
                        <h5 style = "">Computed Price:</h5>
                        <div class="input-group m-t-5" style = "width: 139px;" >
                            <input type="text" class="form-control" disabled="disabled" placeholder ="Php.">
                            <span class="input-group-addon">.00</span>
                        </div>
                    </div>
                </div>



                <div class="input-group lter form_elements_datepicker" id="dateRangePickerBlock">
                    <div class="col-md-7 m-t-5">
                        <h5 style = "">Date Range:</h5>
                    <form>
                         <div class="input-group">
                            <span class="input-group-addon m-t-5">
                                <i class="fa fa-calendar"></i>
                            </span>
                             <input type="text" class="form-control m-t-5" id="reportrange" placeholder="dd/mm/yyyy-dd/mm/yyyy">
                        </div>
                    </form>
                    </div>


                    <div class="col-md-5 m-t-5">
                    <h5 style = "">Stock Range:</h5>
                        <div class="input-group m-t-5" style = "width: 139px;">
                            <span class="input-group-addon"><i class="fa fa-bar-chart-o"></i></i></span>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
            </div>


            <!--Promo Details Product Table-->
            <div class ="m-t-15">
                <table class="table  table-striped table-bordered table-hover table-advance dataTable no-footer" id="producttab2" role="grid">   
                    <tr>
                        <th>Product</th>
                        <th>Description</th>
                        <th style="width: 5%;">Select</th>
                    </tr>
                </table>   

                <div class="tab tab-btn">
                    <button class="btn btn-warning hvr-float-shadow adv_cust_mod_btn m-t-5" style = "width: 80px; left: 330px;" onclick="prodtab2_To_tab1();">Move&nbsp;&nbsp;<i class="fa fa-arrow-left" ></i></button>
                </div>
            </div>
            <!--End Promo Details Product Table-->
            

            <!--Promo Details Service Table-->
            <div class ="m-t-15">
                <table class="table  table-striped table-bordered table-hover table-advance dataTable no-footer" id="servicetab2" role="grid">   
                    <tr>
                        <th>Service</th>
                        <th>Category</th>
                        <th style="width: 5%;">Select</th>
                    </tr>
                </table>   

                <div class="tab tab-btn">
                    <button class="btn btn-warning hvr-float-shadow adv_cust_mod_btn m-t-5" style = "width: 80px; left: 330px;" onclick="servicetab2_To_tab1();">Move&nbsp;&nbsp;<i class="fa fa-arrow-left" ></i></button>
                </div>
            </div>
            <!--End Promo Details Service Table-->


            <!--Promo Details Free Item Table-->
            <div class ="m-t-15">
                <table class="table  table-striped table-bordered table-hover table-advance dataTable no-footer" id="itemtab2" role="grid">   
                    <tr>
                        <th>Free Items</th>
                        <th>Description</th>
                        <th style="width: 5%;">Select</th>
                    </tr>
                </table>   

                <div class="tab tab-btn">
                    <button class="btn btn-warning hvr-float-shadow adv_cust_mod_btn m-t-5" style = "width: 80px; left: 330px;" onclick="itemtab2_To_tab1();">Move&nbsp;&nbsp;<i class="fa fa-arrow-left" ></i></button>
                </div>
            </div>
             <!--End Promo Details Free Item Table-->

        </div>
                                 
            <div class="card-footer bg-black">
                <div class="input-group">

                    <div class="col-md-8 m-t-5">
                    
                        <div class="input-group" >
                            <h5 style = "width: 90px;"class="m-t-10">Promo Price:</h5>
                            <input type="text" class="form-control" style = "width: 100px;" placeholder ="Php";>
                            <span class="input-group-addon">.00</span>
                        </div>
                    </div>

                    <div class="col-md-2 m-t-5">
                        <div class="input-group examples transitions" >
                            <button class="btn btn-success  source success_clr m-l-0 hvr-float-shadow adv_cust_mod_btn " style ="width: 150px; left: 35px;"  ><i class="fa fa-save text-white" ></i>&nbsp; Save</button>
                        </div>
                    </div>
                    
                </div>
            </div>
                             
        </div>
     </div>
    <!--END PROMO DETAILS-->


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
                            // add values to the cells
                            cell1.innerHTML = producttab1.rows[i+1].cells[0].innerHTML;
                            cell2.innerHTML = producttab1.rows[i+1].cells[1].innerHTML;
                            cell3.innerHTML = "<input type='checkbox' name='prodcheck-tab2'>";
                           
                            // remove the transfered rows from the first table [producttab1]
                            var index = producttab1.rows[i+1].rowIndex;
                            producttab1.deleteRow(index);
                            // we have deleted some rows so the checkboxes.length have changed
                            // so we have to decrement the value of i
                            i--;
                           console.log(checkboxes.length);
                        }
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
                            // add values to the cells
                            cell1.innerHTML = producttab2.rows[i+1].cells[0].innerHTML;
                            cell2.innerHTML = producttab2.rows[i+1].cells[1].innerHTML;
                            cell3.innerHTML = "<input type='checkbox' name='prodcheck-tab1'>";
                           
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
                            // add values to the cells
                            cell1.innerHTML = servicetab1.rows[i+1].cells[0].innerHTML;
                            cell2.innerHTML = servicetab1.rows[i+1].cells[1].innerHTML;
                            cell3.innerHTML = "<input type='checkbox' name='servicecheck-tab2'>";
                           
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
                            // add values to the cells
                            cell1.innerHTML = servicetab2.rows[i+1].cells[0].innerHTML;
                            cell2.innerHTML = servicetab2.rows[i+1].cells[1].innerHTML;
                            cell3.innerHTML = "<input type='checkbox' name='servicecheck-tab1'>";
                           
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

<!--Free Item table 1 to Free Item Table 2-->
    <script>
            
            function itemtab1_To_tab2()
            {
                var itemtab1 = document.getElementById("itemtab1"),
                    itemtab2 = document.getElementById("itemtab2"),
                    checkboxes = document.getElementsByName("itemcheck-tab1");
            console.log("Val1 = " + checkboxes.length);
                 for(var i = 0; i < checkboxes.length; i++)
                     if(checkboxes[i].checked)
                        {
                            // create new row and cells
                            var newRow = itemtab2.insertRow(itemtab2.length),
                                cell1 = newRow.insertCell(0),
                                cell2 = newRow.insertCell(1),
                                cell3 = newRow.insertCell(2);
                            // add values to the cells
                            cell1.innerHTML = itemtab1.rows[i+1].cells[0].innerHTML;
                            cell2.innerHTML = itemtab1.rows[i+1].cells[1].innerHTML;
                            cell3.innerHTML = "<input type='checkbox' name='itemcheck-tab2'>";
                           
                            // remove the transfered rows from the first table [itemtab1]
                            var index = itemtab1.rows[i+1].rowIndex;
                            itemtab1.deleteRow(index);
                            // we have deleted some rows so the checkboxes.length have changed
                            // so we have to decrement the value of i
                            i--;
                           console.log(checkboxes.length);
                        }
            }
            
            
            function itemtab2_To_tab1()
            {   
                var itemtab1 = document.getElementById("itemtab1"),
                    itemtab2 = document.getElementById("itemtab2"),
                    checkboxes = document.getElementsByName("itemcheck-tab2");
            console.log("Val1 = " + checkboxes.length);
                 for(var i = 0; i < checkboxes.length; i++)
                     if(checkboxes[i].checked)
                        {
                            // create new row and cells
                            var newRow = itemtab1.insertRow(itemtab1.length),
                                cell1 = newRow.insertCell(0),
                                cell2 = newRow.insertCell(1),
                                cell3 = newRow.insertCell(2);
                            // add values to the cells
                            cell1.innerHTML = itemtab2.rows[i+1].cells[0].innerHTML;
                            cell2.innerHTML = itemtab2.rows[i+1].cells[1].innerHTML;
                            cell3.innerHTML = "<input type='checkbox' name='itemcheck-tab1'>";
                           
                            // remove the transfered rows from the second table [itemtab2]
                            var index = itemtab2.rows[i+1].rowIndex;
                            itemtab2.deleteRow(index);
                            // we have deleted some rows so the checkboxes.length have changed
                            // so we have to decrement the value of i
                            i--;
                           console.log(checkboxes.length);
                        }
            }
            
</script> 
<!--End Free Item table 1 to Free Item Table 2-->

@stop