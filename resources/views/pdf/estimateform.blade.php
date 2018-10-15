<style>
.column {
    float: left;
    width: 20%;
}
.col-complaints{
    float: left;
    width: 50%;
}
.signature{
    float: left;
    width: 50%;
}
#col-foot{
    float: left;
    width: 50%;
}
#problem{
    word-wrap:break-word;
    width:35%;
}
#complaint{
    word-wrap:break-word;
    width:35%;
    padding-left:5%;
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
  <h2>COST ESTIMATE FORM</h2>
  <hr>
</div>

<!-- START CUSTOMER INFORMATION -->
<h3 align="center">CUSTOMER INFORMATION</h3>
<table width="100%">
<col width="150">
<col width="150">
    <tr>
      <td colspan="2">Customer Name:&nbsp;{{ $customer->FullName }}</td>
      <td>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $customer->EmailAddress }}</td>
    </tr>
    <tr>
      <td colspan="2">Contact Number:&nbsp;{{ $customer->ContactNo }}</td>
      <td>Senior/PWD Number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $customer->PWD_SC_No }}</td>
    </tr>
    <tr>
      <td colspan="4">Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $customer->CompleteAddress }}</td>
    </tr>
</table>
<!-- END CUSTOMER INFORMATION -->

<!-- START CUSTOMER INFORMATION -->
<h3 align="center">VEHICLE AND ESTIMATE INFORMATION</h3>
<table width="100%">
<col width="150">
<col width="150">
    <tr>
      <td colspan="2">Plate No.:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $automobile->PlateNo }}</td>
      <td>Chassis No.:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $automobile->ChassisNo }}</td>
    </tr>
    <tr>
      <td colspan="2">Model:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $automobile->Model }} {{ $automobile->Year }}</td>
      <td>Mileage:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $automobile->Mileage }} km</td>
    </tr>
    <tr>
      <td colspan="2">Color:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $automobile->Color }}</td>
      <td>Transmission:&nbsp;&nbsp;&nbsp;&nbsp;{{ $automobile->Transmission }}</td>
    </tr>
    <tr>
      <td colspan="2">Estimated by:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $personnel->FullName }}</td>
      <td>Service Bay:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $servicebay->ServiceBayName }}</td>
    </tr>
</table>
<!-- END CUSTOMER INFORMATION -->
<br>
<h3 align="center">ESTIMATE DETAILS</h3>
<p align="center"></p>
<hr>

<div class="row">
    <div class="col-complaints">
        <h3>Complaints</h3>
        <span id="problem">@if(!(is_null($complaint))) {{ $complaint->Problem }} @endif</span>
    </div>
    <div class="col-complaints">
        <h3 style="padding-left:5%">Diagnosis</h3>
        <span id="complaint">@if(!(is_null($complaint))) {{ $complaint->Diagnosis }} @endif</span>
    </div>
</div><br><br><br>

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
    @endforeach
</table>
<hr>
<div id="row">
    <div id="col-foot">
        <span>ESTIMATED TIME:</span>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <span id="estimated">Approx.&nbsp;{{ $hours }}</span>
    </div>
    <div id="col-foot">
        <span>TOTAL LABOR COST:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Php&nbsp;{{ $laborcost->Labor }}<br>
        <span>TOTAL PRODUCT COST:&nbsp;&nbsp;&nbsp;&nbsp;Php&nbsp;{{ $product->ProductCost }}</span><br>
        <span>TOTAL COST ESTIMATE:</span>&nbsp;&nbsp;&nbsp;Php&nbsp;{{ $estimate->TotalCost }}</span>
    </div>
</div><br><br><br><br>

<div>
    <p><i> Note: Estimates are an approximation of charges to you, and they are based on the anticipated details of the work to be done. It is possible for unexpected complications to cause some deviation from the estimate. If additional parts or labor are required you will be contacted immediately. </i></p>
</div><br><br><br><br><br>

<div class="row">
    <div class="signature">
        <hr style="width:250px">
        <span style="padding-left:135px">Estimated by:</span>
    </div>
    <div class="signature">
        <hr style="width:250px">
        <span style="padding-left:91px">Signature over printed name</span>
    </div>
</div>