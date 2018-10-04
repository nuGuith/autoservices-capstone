<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>

<div align="center">
    <img src="img/jpr_logo.png" style="width:180px; height:50px; margin-top:5px;">
    <p> Lot 19 Block 136 Mindanao Ave. Ext. Brgy. Greater Lagro, Fairview, QC </p>
    <hr>
        <h2>JOB ORDER REPORT</h2>
    <hr>
</div>
<table width="100%">
    <thead>
        <tr>
            <th> DATE </th>
            <th> JOB ORDER ID </th>
            <th> SERVICE SALES</th>
            <th> PRODUCT SALES </th>
            <th> TOTAL SALES </th>
        </tr>
    </thead>
    <tbody>
        @foreach($joborders as $joborder)
            <tr role="row" class="even">
                <td>
                    <?php
                		$date = date('F d, Y', strtotime($joborder->JODate));
                        echo $date;
                	?>
                </td>
                <td>JO000{{ $joborder->JobOrderID }}</td>
                <td>
                    <!--@foreach($serviceperformed as $service)-->
                        <!--@if($joborder->JobOrderID == $service->JobOrderID)-->
                            <?php
                                $amount = $service->ServiceTotalPrice;
                                    $value = 0.00;
                                    $format = number_format($value, 2, ".", "");

                                    if(($amount)==0)
                                        echo "Php"." ".$format;
                                    else
                                        echo "Php"." ".$amount;
                            ?>
                        <!--@endif-->
                    <!--@endforeach-->        
                </td>
                <td>
                    <!--@foreach($productused as $product)-->
                        <!--@if($joborder->JobOrderID == $product->JobOrderID)-->
                            <?php
                                $amount = $product->ProductTotalPrice;
                                $value = 0.00;
                                $format = number_format($value, 2, ".", "");

                                if(($amount)==0)
                                    echo "Php"." ".$format;
                                elseif(($product->ProductTotalPrice)==null)
                                    echo "Php"." ".$format;
                                else
                                    echo "Php"." ".$amount;
                            ?>
                        <!--@endif-->
                    <!--@endforeach-->
                </td>
                <td id="sales">
                    <?php
                        $amount = $joborder->TotalAmountDue;
                        $value = 0.00;
                        $format = number_format($value, 2, ".", "");

                        if(($amount)==0)
                            echo "Php"." ".$format;
                        else
                            echo "Php"." ".$amount;
                    ?>
                </td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th>
                <ul style="list-style-type:none;">
                    <li>Total Service Sales:</li>
                    <li>Total Product Sales:</li>
                    <li>Total Gross Sales:</li> 
                </ul>
            </th>
            <td>
                <b>
                    <ul style="list-style-type:none;">
	                    <li>
                            @foreach($servicetotal as $totalS)
                                Php {{ $totalS->ServiceTotalPrice }}
                            @endforeach
                        </li>
                        <li>
                            @foreach($producttotal as $totalP)
                                Php {{ $totalP->ProductTotalPrice }}
                            @endforeach
                        </li>
	                    <li>
                            @foreach($totals as $total)
                                Php {{ $total->gross }}
                            @endforeach
                        </li> 
                    </ul>
                </b>
	        </td>
        </tr>
    </tfoot>
</table>