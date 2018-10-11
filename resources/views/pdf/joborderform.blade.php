<style>
.column {
    float: left;
    width: 20%;
}
.col-complaints {
    float: left;
    width: 50%;
}
.col-quantity{
    float: left;
    width: 10%;
}
.col-total{
    float: left;
    width: 15%;
}
/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}


input{
    font-family: "times new roman";
    border:0px;
    text-align: left;
}
</style>

<div align="center">
  <img src="img/jpr_logo.png" style="width:180px; height:50px; margin-top:5px;">
  <p> Lot 19 Block 136 Mindanao Ave. Ext. Brgy. Greater Lagro, Fairview, QC </p>
  <hr>
  <h2>JOB ORDER FORM</h2>
  <hr>
</div>

<!-- START CUSTOMER INFORMATION -->
<h3 align="center">CUSTOMER INFORMATION</h3>
<table width="100%">
<col width="150">
<col width="150">
    <tr>
      <td colspan="2">Customer Name:&nbsp;&nbsp;&nbsp;{{ $customer->FullName }}</td>
      <td>Email Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $customer->EmailAddress }}</td>
    </tr>
    <tr>
      <td colspan="2">Contact Number:&nbsp;&nbsp;&nbsp;{{ $customer->ContactNo }}</td>
      <td>Senior/PWD Number:&nbsp;&nbsp;&nbsp;{{ $customer->PWD_SC_No }}</td>
    </tr>
    <tr>
      <td colspan="4">Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $customer->CompleteAddress }}</td>
    </tr>
</table>
<!-- END CUSTOMER INFORMATION -->

<!-- START CUSTOMER INFORMATION -->
<h3 align="center">VEHICLE AND JOB ORDER INFORMATION</h3>
<table width="100%">
<col width="150">
<col width="150">
    <tr>
      <td colspan="2"><b>Job Order ID:&nbsp;&nbsp;&nbsp;JO000{{ $joborder->JobOrderID }}</b></td>
      <td>Service Bay:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $servicebay->ServiceBayName }}</td>
    </tr>
    <tr>
      <td colspan="2">Plate No.:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $automobile->PlateNo }}</td>
      <td>Chassis No.:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $automobile->ChassisNo }}</td>
    </tr>
    <tr>
      <td colspan="2">Model:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $automobile->Model }} {{ $automobile->Year }}</td>
      <td>Mileage:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $automobile->Mileage }}</td>
    </tr>
    <tr>
      <td colspan="2">Color:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $automobile->Color }}</td>
      <td>Transmission:&nbsp;&nbsp;&nbsp;&nbsp;{{ $automobile->Transmission }}</td>
    </tr>
</table>
<!-- END CUSTOMER INFORMATION -->
<br>
<h3 align="center">JOB ORDER DETAILS</h3>
<hr>

<table style="width:100%;">
    <tr>
        <th>Service</th>
        <th>Product</th>
        <th>Quantity</th>
        <th>Unit Price</th>
        <th>Total Price</th>
        <th>Labor</th>
    </tr>
    @foreach($serviceperformed as $sp)
        <tr>
            <td width="75%">
                {{ $sp->ServiceName }}
            </td>
            <td width="75%"><button type="button" id="svc" name="{!!$sp->EstimatedTime!!}"  class="btnDel btn btn-danger hvr-float-shadow" style="display:none;"></button></td>
            <td width="40%">
                <input type="hidden" style="width:55px;" id="quantity" name="quantity" placeholder="" value="1" readonly class="form-control hidden">
            </td>
            <td width="50%">
                <input type="hidden" style="width:50px;" id="unitprice" name="unitprice" placeholder="" class="form-control" value="{!!$sp->LaborCost!!}">
            </td>
            <td width="50%">
                <input type="text" readonly style="width:80px;"  id="totalprice" name="price" placeholder=".00" class="form-control" value="{!!$sp->LaborCost!!}">
            </td>
            <td width="50%">
                <input type="text" style="width:80px;" name="labor" placeholder="Labor" class="form-control" value="{!!$sp->LaborCost!!}" readonly>
            </td>
        </tr>
        @foreach($productused as $pu)
            @if($sp->ServicePerformedID == $pu->ServicePerformedID)
                <tr>
                    <td width="75%"></td>
                    <td width="75%">{{ $pu->ProductName }}</td>
                    <td width="40%">
                        <input type="text" style="width:50px; text-align:center" id="quantity" name="quantity" placeholder="Quantity" value="{!!$pu->Quantity!!}" class="form-control" readonly>
                    </td>
                    <td width="50%">
                        <input type="text" readonly style="width:60px; text-align:center" id="unitprice" name="unitprice" readonly placeholder=".00" value="{!!$pu->Price!!}" class="form-control"></td>
                    <td width="50%">
                        <input type="text" readonly style="width:80px" id="totalprice" name="totalprice" placeholder=".00" class="form-control" value="{!!$pu->Price!!}">
                    </td>
                    <td width="50%"></td>
                </tr>
                @endif
            @endforeach
        </tr>
    @endforeach
</table>
<hr>
<div style="margin-left: 400px;">
    <span>TOTAL LABOR:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Php&nbsp;{{ $laborcost->Labor }}</span><br>
    <span>TOTAL PRODUCT COST:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Php&nbsp;{{ $product->ProductCost }}</span><br>
    <span>LESS *% of disc* DISCOUNT:</span><br>
    <span>TOTAL AMOUNT DUE:</span>
</div>
<br>

<table style="width:100%;">
    <tbody>
        <tr>
            <td>
                <ins>
                    
                </ins>
            </td>
            <td><ins>Guesshee Almario</ins></td>
            <td><ins>Guesshee Almario<ins></td>
            <td><ins>Guesshee Almario<ins></td>
        </tr>
        <tr>
            <td><b>Service Advisor</b></td>
            <td><b>Quality Analyst</b></td>
            <td><b>Inventory</b></td>
            <td><b>Mechanic</b></td>
        </tr>
    </tbody>
</table>

<div>
    <p><i> I hereby and agree to pay for the above repair work done on my vehicle, including all parts and materials necessary to perform the services. In the event that the costs of the repair are not paid within (60) sixty days from the date of the notice of completion hereof. I hereby authorize JPR AUTOPRECISION SERVICES to sell my vehicle at public auction and apply the proceeds or part thereof to the cost of the repairs and products, and the excess, if any, shall be turned over to me. </i></p>

    <p> RECEIVED THE ABOVE VEHICLE IN GOOD ORDER AND CONDITION AND THAT THE REPAIRS HAVE BEEN MADE TO MY ENTIRE SATISFACTION.<p>
</div>

<div class="row">
    <div class="col-complaints">
        &nbsp;
        <hr style="width:250px">
        <span style="padding-left:90px"> Signature over printed name <span>
    </div>
    <div class="col-complaints">
        <span style="align:center; padding-left:100px">{{ $joborder->Release_Timestamp }}</span>
        <hr style="width:250px">
        <span style="padding-left:100px">Date and Time of Release<span>
    </div>
</div>