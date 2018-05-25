<?php
  session_start();
  $con=mysqli_connect("localhost","root","","stock_trading");
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
  }
  $marketType = $_POST['marketType'];
  $output ='';
  $sql = "SELECT * FROM stock_data WHERE market_type='$marketType'";
  $result = mysqli_query($con,$sql);
  $i=0;
  $output .= '<table align="center" width="100%" id="stockTable">
    <thead>
      <tr class="table100-head">
        <th class="column1">Symbol</th>
        <th class="column2">Bid</th>
        <th class="column3">Volume Bid</th>
        <th class="column4">Offer</th>
        <th class="column5">Volume Offer</th>
        <th class="column6">Last trade</th>
        <th class="column7">Change</th>
        <th class="column8">%Change</th>
        <th class="column9">Prior</th>
        <th class="column10">Ceiling</th>
        <th class="column11">Flooring</th>
        <th class="column12">High</th>
        <th class="column13">Low</th>
        <th class="column14">Volumes(shares)</th>
        <th class="column15" >Values(K)</th>
      </tr>
    </thead>
    <tbody>';
  while ($row = mysqli_fetch_array($result)) {
    $output .= '<tr>';
    $output .= '<td class="column1" data-target=data1>'.$row['stock_symbol'].'</td>';
    $output .= '<td class="column2" data-target=data2>'.$row['bid_price'].'</td>';
    $output .= '<td class="column3" data-target=data3>'.$row['bid_volume'].'</td>';
    $output .= '<td class="column4" data-target=data4>'.$row['offer_price'].'</td>';
    $output .= '<td class="column5" data-target=data5>'.$row['offer_volume'].'</td>';
    $output .= '<td class="column6" data-target=data6>'.$row['last_price'].'</td>';
    $output .= '<td class="column7" data-target=data7>'.$row['change_value'].'</td>';
    $output .= '<td class="column8" data-target=data8>'.$row['percent_change'].'</td>';
    $output .= '<td class="column9" data-target=data9>'.$row['lastest_close_price'].'</td>';
    $output .= '<td class="column10" data-target=data10>'.$row['ceiling_price'].'</td>';
    $output .= '<td class="column11" data-target=data11>'.$row['flooring_price'].'</td>';
    $output .= '<td class="column12" data-target=data12>'.$row['high_price'].'</td>';
    $output .= '<td class="column13" data-target=data13>'.$row['low_price'].'</td>';
    $output .= '<td class="column14" data-target=data14>'.$row['total_volume'].'</td>';
    $output .= '<td class="column15" data-target=data15>'.$row['total_value'].'</td>';
    $output .= '</tr>';
  }
  $output .='</tbody>
</table>';
echo $output;
?>
