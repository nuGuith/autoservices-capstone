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
    <tr>
        <th> DATE </th>
        <th> JOB ORDER ID </th>
        <th> CUSTOMER NAME</th>
        <th> TOTAL SALES</th>

    </tr>
    @foreach($jos as $jo)
        <tr>
            <td>
                <?php
                    $date = date('F d, Y', strtotime($jo->JODate));
                    echo $date;
                ?>
            </td>
            <td>JO000{{ $jo->JobOrderID }}</td>
            <td>{{ $jo->FirstName }} {{ $jo->LastName }}</td>
            <td>Php {{ $jo->TotalAmountDue }}</td>
        </tr>
    @endforeach
</table>