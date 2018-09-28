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
  <h2>ESTIMATE REPORT</h2>
  <hr>
</div>
<table width="100%">
    <thead>
        <tr>
            <th> DATE </th>
            <th> ESTIMATE ID </th>
            <th> PLATE NO.</th>
            <th> CUSTOMER NAME</th>
        </tr>
    </thead>
    <tbody>
        @foreach($estimates as $estimate)
            <tr>
                <td>
                    <?php
                        $date = DATE("F d, Y", strtotime($estimate->EDate));
                        echo $date;
                    ?>
                </td>
                <td>ES000{{ $estimate->EstimateID }}</td>
                <td>{{ $estimate->PlateNo }}</td>
                <td>{{ $estimate->FirstName }} {{ $estimate->LastName }}</td>
            
            </tr>
        @endforeach
    </tbody>
</table>