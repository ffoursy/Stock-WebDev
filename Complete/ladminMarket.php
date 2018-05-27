<?php
  session_start();
  $con = mysqli_connect("localhost","root","","stock_trading");
  //check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:".mysqli_connect_errno() ;
  }
  $output='';
  $sql ="SELECT * FROM stock_market";
  $result = mysqli_query($con,$sql);
  $output .= '<table align="center" width="100%">
    <thead>
      <tr class="table100-head">
        <th class="column1">Symbol</th>
        <th class="column2">Last</th>
        <th class="column3">Market Volume</th>
        <th class="column4">Market Value</th>
        <th class="column5">Change</th>
        <th class="column6">Market Increase</th>
        <th class="column7">Market Equal</th>
        <th class="column8">Market Decrease</th>
        <th class="column9">Action</th>
      </tr>
    </thead>
    <tbody>';
  while ($row = mysqli_fetch_array($result)) {
    $output .= '<tr>';
    $output .= '<td class="column1">'.$row['market_type'].'</td>';
    $output .= '<td class="column2">'.$row['market_index'].'</td>';
    $output .= '<td class="column3">'.$row['market_volume'].'</td>';
    $output .= '<td class="column4">'.$row['market_value'].'</td>';
    $output .= '<td class="column5">'.$row['change_value'].'</td>';
    $output .= '<td class="column6">'.$row['market_increase'].'</td>';
    $output .= '<td class="column7">'.$row['market_equal'].'</td>';
    $output .= '<td class="column8">'.$row['market_decrease'].'</td>';
    $output .= '<td class="column9">
                <div class="col-md">
                <button style:"size:10px;" data-target="#deleteModal" data-toggle="modal" type="submit" class="btn btn-danger btn-xs "
                  name="btn_delete" id="btn_delete" value="'.$row['market_type'].'">DELETE</button>
                </div></td></tr>';
  }
  $output .= '</table>';
  mysqli_close($con);
  echo $output;
?>
