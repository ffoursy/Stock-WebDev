<?php
  session_start();
  /*header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");*/

  $con=mysqli_connect("localhost","root","","stock_trading");
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
  }
  $output = '';
  $accId = $_POST['accId'];
  $_SESSION['accId']=$accId;
  $sql = "SELECT stLi.symbol,stLi.available_volume,stLi.actual_volume,std.last_price FROM user_stock_list stLi JOIN user_account_data ud ON stLi.user_account_id=ud.user_account_id
    JOIN stock_data std ON std.stock_symbol=stLi.symbol
    WHERE stLi.user_account_id = $accId";
  $result = mysqli_query($con,$sql);
  $output .= '<table align="center" width="100%">
    <thead>
      <tr class="table100-head">
        <th class="column1">Symbol</th>
        <th class="column2">Available Volume</th>
        <th class="column3">Actual Volume</th>
        <th class="column4">Mkt. Price</th>
        <th class="column5">Avg. Cost</th>
        <th class="column6">Amount(Price)</th>
        <th class="column7">Market Value</th>
      </tr>
    </thead>
    <tbody>';
    $totalAmount=0;
    $totalMarket=0;
  while($row = mysqli_fetch_array($result))
  {
    $output .= '<tr>';
    $output .= '<td class="column1">'.$row['symbol'].'</td>';
    $output .= '<td class="column2">'.$row['available_volume'].'</td>';
    $output .= '<td class="column3">'.$row['actual_volume'].'</td>';
    $output .= '<td class="column4">'.$row['last_price'].'</td>';
    $symbol = $row['symbol'];
    $sql2 = "SELECT order_price FROM stock_order
      WHERE user_account_id=$accId AND order_type='buy' AND symbol='$symbol' HAVING MAX(order_number)";
    $result2 = mysqli_query($con,$sql2);
    $row2 = mysqli_fetch_array($result2);
    $output .= '<td class="column5">'.$row2['order_price'].'</td>';
    $output .= '<td class="column6">'.$row2['order_price']*$row['actual_volume'].'</td>';
    $output .= '<td class="column7">'.$row['last_price']*$row['actual_volume'].'</td>';
    $totalAmount = $totalAmount+($row2['order_price']*$row['actual_volume']);
    $totalMarket = $totalMarket+($row['last_price']*$row['actual_volume']);
    $output .= '</tr>';
  }
  $output .= '<tr><td colspan=5 style="text-align:right;"><b>Total >> </b></td> <td class="column6">'.$totalAmount.'</td>';
  $output.= ' <td class="column7">'.$totalMarket.'</td></tr>';
  $output .='</tbody></table>';
  //echo "hello";
//  $output2=array('dataTable' => $output);
mysqli_close($con);
  echo $output;
?>
