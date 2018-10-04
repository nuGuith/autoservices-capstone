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
            <th> TOTAL AMOUNT </th>
        </tr>
    </thead>
    <tbody>
        @foreach($sales as $sale)
            <tr role="row" class="even">
                <td>
                    <?php
                		$date = date('F d, Y', strtotime($sale->JODate));
                        echo $date;
                	?>
                </td>
                <td>JO000{{ $sale->JobOrderID }}</td>
                <td id="sales">
                    <?php
                        $amount = $sale->DiscountedAmount;
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
            <th>
                <ul style="list-style-type:none;">
                    <li>Total Net Sales:</li> 
                </ul>
            </th>
            <td>
                <b>
                    <ul style="list-style-type:none;">
	                    <li></li>
	                    <li>
                            @foreach($totalsales as $total)
                                Php {{ $total->net }}
                            @endforeach
                        </li> 
                    </ul>
                </b>
	        </td>
        </tr>
    </tfoot>
</table>