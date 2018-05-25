<?php
  session_start();
  $con = mysqli_connect("localhost","root","","stock_trading");
  //check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:".mysqli_connect_errno() ;
  }
  $output ='';
  $marketType= $_POST['marketType'];
  $sql = "SELECT * FROM stock_market WHERE market_type='$marketType'";
  $result = mysqli_query($con,$sql);
  $row = mysqli_fetch_array($result);
  $output .= '<div class="container">
    <div class="col-md"><div class="row">';
  $output .= '<h1 class="heading mb-2 display-4 font-light" style="font-size:30px; color:white;"><b>'.$row['market_type'].'</b></h1>';
  $output .= '&nbsp&nbsp<p style="font-size:16px;"> <b>index:</b>'.' '.$row['market_index'].'</p>';
  $output .= '&nbsp&nbsp<p style="font-size:16px;"> <b>high index:</b>'.$row['high_index'].'</p>';
  $output .= '&nbsp&nbsp<p style="font-size:16px;"><b>low index:</b>'.$row['low_index'].'</p>';
  $output .= '&nbsp&nbsp<p style="font-size:16px;"><b>volume(000shares):</b>'.$row['market_volume'].'</p>';
  $output .= '&nbsp&nbsp<p style="font-size:16px;"><b>value(million):</b>'.$row['market_value'].'</p>';
  $output .= '</div> <div class="row">';
  $output .= '&nbsp&nbsp<p style="font-size:16px; padding-left:3.5em;"><b>chg:</b>'.$row['change_value'].'</p>';
  $output .= '&nbsp&nbsp<p style="font-size:16px;"><b>%chg:</b>'.$row['percent_change'].'</p>';
  $output .= '&nbsp&nbsp<p style="font-size:16px;"><b>increase:</b>'.$row['market_increase'].'</p>';
  $output .= '&nbsp&nbsp<p style="font-size:16px;"><b>equal:</b>'.$row['market_equal'].'</p>';
  $output .= '&nbsp&nbsp<p style="font-size:16px;"><b>decrease:</b>'.$row['market_decrease'].'</p>';
  $output .= '&nbsp&nbsp<p style="font-size:16px;"><b>prior:</b>'.$row['prior_market'].'</p>';
  $output .= '</div></div></div>';
  echo $output;
?>
