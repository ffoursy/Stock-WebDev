<?php
  session_start();
  $con = mysqli_connect("localhost","root","","stock_trading");
  //check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:".mysqli_connect_errno() ;
  }
  $output='';
  $sql ="SELECT * FROM stock_data";
  $result = mysqli_query($con,$sql);
  $output .= '<table align="center" width="100%">
    <thead>
      <tr class="table100-head">
        <th class="column1">Symbol</th>
        <th class="column2">Bid</th>
        <th class="column3">Bid Volume</th>
        <th class="column4">Offer</th>
        <th class="column5">Offer Volume</th>
        <th class="column6">Last Price</th>
        <th class="column7">Prior</th>
        <th class="column8">Market Type</th>
        <th class="column9">Action</th>
      </tr>
    </thead>
    <tbody>';
  while ($row = mysqli_fetch_array($result)) {
    $output .= '<tr>';
    $output .= '<td class="column1">'.$row['stock_symbol'].'</td>';
    $output .= '<td class="column2">'.$row['bid_price'].'</td>';
    $output .= '<td class="column3">'.$row['bid_volume'].'</td>';
    $output .= '<td class="column4">'.$row['offer_price'].'</td>';
    $output .= '<td class="column5">'.$row['offer_volume'].'</td>';
    $output .= '<td class="column6">'.$row['last_price'].'</td>';
    $output .= '<td class="column7">'.$row['lastest_close_price'].'</td>';
    $output .= '<td class="column8">'.$row['market_type'].'</td>';
    $output .= '<td class="column9">
                <div class="col-md">
                <button style:"size:10px;" data-target="#deleteModal" data-toggle="modal" type="submit" class="btn btn-danger btn-xs "
                  name="btn_delete" id="btn_delete" value="'.$row['stock_symbol'].'">DELETE</button>
                </div></td></tr>';
  }
  $output .= '</table>';
  mysqli_close($con);
  echo $output;
?>
