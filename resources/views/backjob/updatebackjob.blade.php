@extends('layout.master') <!-- Include MAster PAge -->
@section('Title','Edit Back Job and Warranty') <!-- Page Title -->
@section('content')

    <link type="text/css" rel="stylesheet" href="vendors/sweetalert/css/sweetalert2.min.css"/>
    <link type="text/css" rel="stylesheet" href="css/pages/sweet_alert.css"/>

    <link type="text/css" rel="stylesheet" href="vendors/animate/css/animate.min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/hover/css/hover-min.css"/>
    <link type="text/css" rel="stylesheet" href="vendors/wow/css/animate.css"/>

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
                            <i class="fa fa-rotate-left"></i>
                            &nbsp;Back Job and Warranty
                        </h4>
                    </div>

                    <div class="col-sm-6 col-12"  >
                        <ol  class="breadcrumb float-right">
                            <li class="breadcrumb-item " >
                                <a href="/backjob">
                                    <i class="fa fa-rotate-left" data-pack="default" data-tags=""></i>
                                    &nbsp;Back Job and Warranty
                                </a>
                            </li>
                            <li class="active breadcrumb-item">&nbsp;Edit Back Job and Warranty</li>
                        </ol>
                    </div>

                    </div>
                </div>
            </header>
                <div class="outer">
                    <div class="inner bg-container">
                        <div class="card">
                            <div class="card-block m-t-25" id="user_body">
                            
                            <div class="row m-t-15">
                                <div class="col-lg-5">

                                    <div class="card">
                                        <div class="card-block m-t-20" id="user_body">
                                        <!--START CUSTOMER INFORMATION-->
                                        <h4>Customer Information</h2>
                                        <hr style="margin-top: 10px; border: 2px solid #a7dfcd">

                                        <!--Label: Customer Name,  Contact No. Email, Adress, Senior Citizen /PWD ID-->
                                        <div class="row m-t-15">
                                                <div class="col-lg-12">
                                                        <h5><span style="color:gray">Customer Name:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Xavier Tanguilan Eugenio</h5>                    
                                                </div>  
                                                <div class="col-lg-12 m-t-10">
                                                        <h5><span style="color:gray">Contact No.:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(999)9999-999</h5>               
                                                </div>
                                                <div class="col-lg-12 m-t-10">
                                                        <h5><span style="color:gray">Email Address:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;xavier@handsome.com</h5>
                                                </div>
                                                <div class="col-lg-12 m-t-10">
                                                        <h5><span style="color:gray">Address:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Valenzuella City</h5>
                                                </div>
                                                <div class="col-lg-12 m-t-10">
                                                        <h5><span style="color:gray">Senior Citizen/ PWD ID:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;N/A</h5>
                                                </div>                    
                                            </div> 
                                        </div> 
                                    </div>
                                </div>


                
                        <div class="col-lg-7">
                            <div class="card">
                                <div class="card-block m-t-20 m-b-20" id="user_body">
                                
                                <h4 class ="">Vehicle Information</h2>
                                <hr style="margin-top: 10px; border: 2px solid #6699cc"> 

                                <div class="row m-t-15">
                                        <div class="col-lg-6 m-t-5">
                                                <h5><span style="color:gray">Plate No.:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;XTE 0202</h5>                    
                                        </div>  
                                        <div class="col-lg-6 m-t-5">
                                                <h5><span style="color:gray">Make:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Ford</h5>               
                                        </div>
                                        <div class="col-lg-6 m-t-10">
                                                <h5><span style="color:gray">Chassis No.:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;020217</h5>
                                        </div>
                                        <div class="col-lg-6 m-t-10">
                                                <h5><span style="color:gray">Model:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mustang</h5>
                                        </div>
                                        <div class="col-lg-6 m-t-10">
                                                <h5><span style="color:gray">Mileage:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;200 miles </h5>
                                        </div> 
                                        <div class="col-lg-6 m-t-10">
                                                <h5><span style="color:gray">Transmission:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AT</h5>
                                        </div>
                                        <div class="col-lg-6 m-t-10">
                                                <h5><span style="color:gray">Color:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rainbow </h5>
                                        </div>             
                                    </div>
                                </div>                       
                            </div> 
                        </div>                       
                    </div> 
 

                        <!--START OF ESTIMATE DETAILS -->
                        <h4 class="m-t-25">Back Job and Warranty<small class="m-l-10">- J0001</small></small></h2>

                        <hr style="margin-top: 10px; border: 2px solid #ffb74d  ">

                            <div class="row m-t-10">
                                <div class="m-l-20">
                                    <h5 class="m-t-0 " style = "padding-bottom: 10px; width: 897px;">Remarks:  <span style="color: " font-size="5px;">The quick brown fox jump over the lazy dog.</small></span></h5>

                                            
                                </div>                               
                            </div>
                        
                            <div class="row m-t-5">
                                
                             <!--PRODUCT, SERVICE, FREE ITEM TAB-->     
                             <div class="col-lg-12 m-t-10">
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
                                <div class="tab-content m-t-15 ">
                                    <h5><small class="m-t-10";>Notes: <a style="color: red;">The  text in red is out of warranty.</a></small> </h5>  
                                    <!--PRODUCT TAB-->  
                                    <div class="tab-pane active" id="tab1">

                                        <table class="table table-bordered table-hover dataTable no-footer" id="producttab1" role="grid">  
                                            <thead>                                  
                                                <tr style="background-color: #f5f5f5">
                                                    <th><b>Product</b></th>
                                                    <th><b>Description</b></th>
                                                    <th style="width: 5%;"><b>Select</b></th>
                                                </tr>
                                            </thead>   
                                                <tr style="color:red">
                                                    <td>Petron Ultron</td>
                                                    <td>
                                                        Oil - 500 mL - 3 pcs
                                                    </td>
                                                    <td><input type="checkbox" name="prodcheck-tab1" disabled=""></td>
                                                </tr>
                                                <tr>
                                                    <td>Motolite</td>
                                                    <td>
                                                        Batteries - 4500 watts - 1 pc
                                                    </td>
                                                    <td><input type="checkbox" name="prodcheck-tab1"></td>
                                                </tr>
                                        </table>

                                        

                                         <div class="tab tab-btn">
                                             <button class="btn btn-info hvr-float-shadow adv_cust_mod_btn m-t-5 tipso_bounceIn pull-right"  data-background="#428bca" data-color="white" data-tipso="Move" onclick="prodtab1_To_tab2();"><i class="fa fa-arrow-right text-white" ></i></button>
                                        </div>
                                    </div>
                                    <!--END PRODUCT TAB--> 
                                                                                    

                                    <!--SERVICE TAB--> 
                                    <div class="tab-pane" id="tab2">

                                        <table class="table table-bordered table-hover dataTable no-footer" id="servicetab1" role="grid">  
                                            <thead>                       
                                                <tr style="background-color: #f5f5f5">
                                                    <th><b>Service</b></th>
                                                    <th><b>Category</b></th>
                                                    <th style="width: 5%;"><b>Select</b></th>
                                                </tr>
                                            </thead>
                                                <tr>
                                                    <td>Replace Bell Crank</td>
                                                    <td>
                                                        Suspension
                                                    </td>
                                                    <td><input type="checkbox" name="servicecheck-tab1"></td>
                                                </tr>
                                                <tr style="color: red">
                                                    <td>Change Oil</td>
                                                    <td>
                                                        Maintenance
                                                    </td>
                                                    <td><input type="checkbox" name="servicecheck-tab1" disabled=""></td>
                                                </tr>

                                        </table>
                                        <!--DELETE BUTTON-->

                             
                                        <div class="tab tab-btn">
                                            <button class="btn btn-info hvr-float-shadow adv_cust_mod_btn m-t-5 tipso_bounceIn pull-right" data-background="#428bca" data-color="white" data-tipso="Move" onclick="servicetab1_To_tab2();"><i class="fa fa-arrow-right text-white " ></i></button>
                                        </div>
                                    </div>
                                    <!--END SERVICE TAB--> 

                                    <br>
                                    <br>
                                    <!--Package Details Product Table-->
                                        <div class ="m-t-20">
                                            <table class="table  table-striped table-bordered table-hover  dataTable no-footer m-t-20" id="producttab2" role="grid">   
                                            <thead>
                                                <tr style="background-color: #f5f5f5">
                                                    <th style="width: 15%;">Product / Service</th>
                                                    <th style="width: 25%;">Description</th>
                                                    <th>Labor</th>
                                                    <th>Mechanic</th>
                                                    <th>Quantity</th>
                                                    <th>Unit Price</th>
                                                    <th>Total Price</th>
                                                    <th style="width: 5%;">Select</th>
                                                </tr>
                                            </thead>
                                            </table>   

                                             <div class="row m-t-0">
                                                <div class="col-md-8">
                                                    <h5 class="m-t-0 " style = "padding-bottom: 10px; width: 897px;">Estimated Time: <span style="color: red"> 4 days</span></h5>
                                                    
                                                </div>  

                                                <div class="col-md-4">
                                                    <h5 class="m-t-0 m-l-20" style = "padding-bottom: 10px; width: 897px;">Grand Total: <span class="m-l-20" style="color: red"> 5000.00</span></h5>
                                                    
                                                </div>                               
                                            </div>


                                            <div class="tab tab-btn">
                                                <button class="btn btn-warning hvr-float-shadow adv_cust_mod_btn m-t-5 tipso_bounceIn pull-right m-b-20"  data-background="#ffbb33" data-color="white" data-tipso="Move" onclick="prodtab2_To_tab1();"><i class="fa fa-arrow-left text-white" ></i></button>
                                            </div>
                                        </div>
                                        <!--End Package Details Product Table-->                                          
                                
                                            </div>

                                <!--Textfield: Remarks -->
                                <div class="row m-t-35">
                                                               
                                </div>


                                 <!-- Assigning of SA, QA, IM, Mechanic -->
                            <div class="row m-t-35">
                                <div class="col-lg-3">
                                    <h5>Service Bay:</h5>
                                        <p>
                                            <p class="m-t-10">
                                                <select class="form-control chzn-select" style="width:120px;" value="Choose Service Advisor">
                                                    <option selected>Choose Service Bay</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                </select>
                                            </p>
                                        </p>
                                </div>
                                <div class="col-lg-3">
                                    <h5>Service Advisor:</h5>
                                        <p>
                                            <p class="m-t-10">
                                                <select class="form-control chzn-select" multiple style="width:120px;" value="Choose Mechanic">
                                                    <option disabled>Choose Mechanic</option>
                                                    <optgroup label="Maintenance">
                                                        <option>Juan Dela Cruz</option>
                                                        <option>Pedro Penduko</option>
                                                    </optgroup>
                                                </select>
                                            </p>
                                        </p>
                                </div>
                                <div class="col-lg-3">
                                    <h5>Quality Analyst:</h5>
                                        <p>
                                            <p class="m-t-10">
                                                <select class="form-control chzn-select" multiple style="width:120px;" value="Choose Quality Analyst">
                                                    <option disabled>Choose Quality Analyst</option>
                                                    <optgroup label="Quality Analyst">
                                                        <option>Juan Dela Cruz</option>
                                                        <option>Pedro Penduko</option>
                                                    </optgroup>
                                                </select>
                                            </p>
                                        </p>
                                </div>
                                <div class="col-lg-3">
                                    <h5>Inventory Manager:</h5>
                                        <p>
                                            <p class="m-t-10">
                                                <select class="form-control chzn-select" multiple style="width:120px;" value="Inventory Manager">
                                                    <option disabled>Choose Inventory Manager</option>
                                                    <optgroup label="Maintenace">
                                                        <option>Juan Dela Cruz</option>
                                                        <option>Pedro Penduko</option>
                                                    </optgroup>
                                                </select>
                                            </p>
                                        </p>
                                </div>
                            </div>

                            
                       
                           

                            <!--Textfield: Remarks -->
                                <div class="row m-t-15">
                                    <div class="col-lg-12">
                                            <h5 style = "padding-bottom: 10px;">Remarks: <span style="color: red"></span></h5>
                                                <textarea id="remark3" class="form-control" cols="30" rows="2"></textarea>
                                        </div>                               
                                </div>

                             


                                        </div>


                                    </div>


                                </div>

                    </div>


                        



  
                            </div>
                           
                                <!--Button: Back, Save-->
                             <div class="card-footer bg-black disabled">
                               <div class="examples transitions m-t-5 pull-right">
                                    <button onclick="window.location='{{ url("/backjob") }}'" class="btn btn-secondary hvr-float-shadow adv_cust_mod_btn gray"  href="/estimates"><i class="fa fa-arrow-left" >
                                    </i>&nbsp;Back</button>  
                                                  
                                    <button class="btn btn-info source success_clr m-l-0 hvr-float-shadow adv_cust_mod_btn" style ="width: 80px;"  ><i class="fa fa-save text-white" ></i>&nbsp; Save</button>
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
                                cell3 = newRow.insertCell(2).style.display="";
                                cell4 = newRow.insertCell(3).style.display="";
                                cell5 = newRow.insertCell(4);
                                cell6 = newRow.insertCell(5),
                                cell7 = newRow.insertCell(6),
                                cell8 = newRow.insertCell(7);

                            // add values to the cells
                            cell1.innerHTML = producttab1.rows[i+1].cells[0].innerHTML;
                            cell2.innerHTML = producttab1.rows[i+1].cells[1].innerHTML;
                            cell3.innerHTML = producttab1.rows[i+1].cells[0].innerHTML;
                            cell4.innerHTML = producttab1.rows[i+1].cells[0].innerHTML;
                            cell5.innerHTML = "<input type='text' name='quantity' class='form-control' placeholder='' style='width: 50px;';>"
                            cell6.innerHTML = "<input type='text' name='unitprice' class='form-control' placeholder='' style='width: 50px;' disabled>"
                            cell7.innerHTML = "<input type='text' name='totalprice' class='form-control' placeholder='' style='width: 50px;' disabled>"
                            cell8.innerHTML = "<input type='checkbox' name='prodcheck-tab2'>";
                           
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


                    var servicetab1 = document.getElementById("servicetab1"),
                    servicetab2 = document.getElementById("producttab2"),
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
<!--End Product Table 1 to Product Table 2-->

<!--Service table 1 to Service Table 2-->
<script>
            
            function servicetab1_To_tab2()
            {
                
                
                var servicetab1 = document.getElementById("servicetab1"),
                    servicetab2 = document.getElementById("producttab2"),
                    checkboxes = document.getElementsByName("servicecheck-tab1");
            console.log("Val1 = " + checkboxes.length);
                 for(var i = 0; i < checkboxes.length; i++)
                     if(checkboxes[i].checked)
                        {   

                            $('.chzn-select').chosen();
                            // create new row and cells
                            var newRow = servicetab2.insertRow(servicetab2.length),
                                cell1 = newRow.insertCell(0),
                                cell2 = newRow.insertCell(1),
                                cell3 = newRow.insertCell(2);
                                cell4 = newRow.insertCell(3),
                                cell5 = newRow.insertCell(4).style.display="",
                                cell6 = newRow.insertCell(5);
                                cell7 = newRow.insertCell(6);
                                cell8 = newRow.insertCell(7);
                            // add values to the cells
                            cell1.innerHTML = servicetab1.rows[i+1].cells[0].innerHTML;
                            cell2.innerHTML = servicetab1.rows[i+1].cells[1].innerHTML;
                            cell3.innerHTML = "<input type='text' name='quantity' class='form-control' placeholder='' style='width: 50px;' disabled>"
                             cell4.innerHTML = "<select class='form-control' style='width:120px; height: 20px' ><option>Juan Dela Cruz</option><option>Pedro Penduko</option></optgroup></select>"
                            cell5.innerHTML = servicetab1.rows[i+1].cells[0].innerHTML;
                            cell6.innerHTML = "<input type='text' name='unitprice' class='form-control' placeholder='' style='width: 50px;' disabled>"
                            cell7.innerHTML = "<input type='text' name='totalprice' class='form-control' placeholder='' style='width: 50px;' disabled>"

                            cell8.innerHTML = "<input type='checkbox' name='servicecheck-tab2'>";
                           
                            // remove the transfered rows from the first table [servicetab1]
                            var index = servicetab1.rows[i+1].rowIndex;
                            servicetab1.deleteRow(index);
                            // we have deleted some rows so the checkboxes.length have changed
                            // so we have to decrement the value of i
                            i--;
                           console.log(checkboxes.length);
                        }
            }
            
            
</script> 
<!--End Service table 1 to Service Table 2-->

@stop