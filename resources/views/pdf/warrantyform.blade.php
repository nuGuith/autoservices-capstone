<html>
<head>
    <title> Warranty </title>

<style>
    .p {
        margin-left: 50px;
    }

    .page-break{
        page-break-after:always;
    }

    .warranty th{
    border: 1px solid black;
    border-collapse: collapse;
    }

    .warranty td{
    border: 1px solid black;
    border-collapse: collapse;
    }

</style>
</head>

<div align="center">
  <img src="img/jpr_logo.png" style="width:180px; height:50px; margin-top:5px;">
    <p> Lot 19 Block 136 Mindanao Ave. Ext. Brgy. Greater Lagro, Fairview, QC </p>
  <hr>
  <h3>Terms and Conditions</h3>
  <hr>
</div>

    <h3>Coverage</h3>
    <p class="p">
        JPR AUTOPRECISION (hereinafter “Repair Facility”) warrants the above-referenced vehicle repairs will be free from defects in materials and workmanship for a period of 12 months or 12,000 miles or as indicated in the given warranty form, whichever comes first, measured from date of repair completion or mileage shown on the referenced job order form. This limited warranty is conditioned on the vehicle being subjected only to normal, non-commercial use. Repairs required by customer misuse, accident, neglect or alteration maintenance and wear items are excluded. This warranty is also conditioned on the vehicle being regularly maintained in accordance with the manufacturer’s recommendation service schedule, for which the owner agrees to provide evidence of, if necessary. Warranty repairs shall in no case exceed the cost of the original repair. The vehicle repair and/or parts may also be covered by an unexpired manufacturer’s warranty or recall policy. Repair Facility has the right to seek repair or replacement under any such coverage, at no cost to owner, and owner agrees to cooperate in making any such claim.
    </p>

    <h3>Obtaining Warranty Service</h3>
    <p class="p">
         If repairs are required during the covered period, then the vehicle must be returned, at owner’s cost and expense, to Repair Facility’s business premises for purposes of effecting repairs or replacement. Repair Facility’s obligation does not extend to bills contracted for by the owner elsewhere. To arrange for or call regarding warranty coverage contact Repair Facility’s General Manager. You must present not only this limited warranty document, but also a copy of the referenced invoice when seeking warranty coverage.
    </p>

    <h3>Other Important Terms</h3>
    <p class="p">
         LOSS OF USE OF THE VEHICLE, TOWING CHARGES, RENTAL CAR, LOSS OF TIME, INCONVENIENCE, COMMERCIAL LOSS OR CONSEQUENTIAL DAMAGES ARE EXCLUDED. Some states do not allow the exclusion or limitation of incidental or consequential damages, so above limitations or exclusions may not apply to you. No other warranties, representations, or agreements have been made to the owner and owner has not specified that the vehicle shall be fit for any specific or intended purpose. Any implied warranty is limited to the minimum period permitted by the law. This warranty is limited to the original named owner and is not transferable. This warranty gives you specific legal rights, and you may also have other rights, which varies.
    </p>

<div class="page-break"></div>

<!-- START OF WARRANTY -->

<div align="center">
  <img src="img/jpr_logo.png" style="width:180px; height:50px; margin-top:5px;">
    <p> Lot 19 Block 136 Mindanao Ave. Ext. Brgy. Greater Lagro, Fairview, QC </p>
  <hr>
  <h3>WARRANTY</h3>
  <hr>
</div>

<!-- <p><i> Start of warranty is the end date indicated in the job order form </i></p> -->

<!-- START OF CUSTOMER AND JOB ORDER INFORMATION -->
<table width="100%">
<col width="150">
<col width="150">
    <tr>
      <td colspan="2"><b>JOB ORDER ID:JO000{{ $joborder->JobOrderID }}</b></td>
      <td colspan="2"><b>Job Order End Date:</b></td>
    </tr>

    <tr>
      <td colspan="2">Customer Name:{{ $customer->FullName }}</td>
      <td colspan="2">Plate No.:{{ $automobile->PlateNo }}</td>
    </tr>
</table>
<br>
<br>
<!-- END OF CUSTOMER AND JOB ORDER INFORMATION -->
<table class="warranty" width="100%">
    <tr>
      <th colspan="3" align="center">Service/Product</th>
      <th colspan="3" align="center">Warranty</th>
    </tr>
    <tr>
        <td colspan="3"> Service
            <ol>
                @foreach($serviceperformed as $sp)
                    <li>{{ $sp->ServiceName }}</li>
                @endforeach
            </ol>
        </td>
        <td colspan="3"><i> Start of warranty is based on the end date of the job order </i>
            <ol>
                @foreach($serviceperformed as $sp)
                    <li>
                        <?php
                            $duration = $sp->WarrantyDuration;

                            if($duration == 0 || $duration == null)
                                echo("N/A");
                            else
                                echo $sp->WarrantyDuration . " " . $sp->WarrantyDurationMode;
                        ?>
                    </li>
                @endforeach
            </ol>
        </td>
    </tr>

    <tr>
        <td colspan="3"> Product
            <ol>
                @foreach($productused as $pu)
                    @foreach($serviceperformed as $sp)
                        @if($pu->ServicePerformedID == $sp->ServicePerformedID)
                            <li>{{ $pu->ProductName }}</li>
                        @endif
                    @endforeach
                @endforeach
            </ol>
        </td>
        <td colspan="3"><i> Start of warranty is based on the end date of the job order </i>
            <ol>
                @foreach($productused as $pu)
                    @foreach($serviceperformed as $sp)
                        @if($pu->ServicePerformedID == $sp->ServicePerformedID)
                            <li>
                                <?php
                                    $duration = $pu->WarrantyDuration;
                                    
                                    if($duration == 0 || $duration == null)
                                        echo("N/A");
                                    else
                                        echo $pu->WarrantyDuration . " " . $pu->WarrantyDurationMode;
                                ?>
                            </li>
                        @endif
                    @endforeach
                @endforeach
            </ol>
        </td>
    </tr>

<!-- END OF WARRANTY -->
</html>