<?php
  session_start();
  $con = mysqli_connect("localhost","root","","stock_trading");
  //check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:".mysqli_connect_errno() ;
  }
  $output='';
  $i=1;
  $sql ="SELECT * FROM stock_highest ORDER BY total_value DESC";
  $result = mysqli_query($con,$sql);
  $output .= '<table align="center" width="100%">
    <thead>
      <tr class="table100-head">
        <th class="column1">Rank</th>
        <th class="column2">Symbol</th>
        <th class="column3">Total Value</th>
      </tr>
    </thead>
    <tbody>';
  while (($row = mysqli_fetch_array($result))&&($i!=11)) {
    $output .= '<tr>';
    $output .= '<td class="column1">'.$i.'</td>';
    $output .= '<td class="column2">'.$row['stock_symbol'].'</td>';
    $output .= '<td class="column3">'.$row['total_value'].'</td>';
    $output .= '</tr>';
    $i++;
  }
  $output .= '</table>';
  mysqli_close($con);
  echo $output;
?>
