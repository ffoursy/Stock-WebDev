<?php
  session_start();
  function rand_float ($min,$max) {
    return ($min+lcg_value()*(abs($max-$min)));
  }
  $con = mysqli_connect("localhost","root","","stock_trading");
  //check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:".mysqli_connect_errno() ;
  }
  $marketType = $_POST['marketType'];
  $sql2 = "SELECT * FROM stock_market WHERE market_type='$marketType'";
  $result2 = mysqli_query($con,$sql2);
  $row2 = mysqli_fetch_array($result2);
  $timestamp = $_SESSION['timestamp'];
  $marketIndex = rand_float(450,3500);
  $highIndex = rand_float(450,3500);
  $lowIndex = rand_float(450,$highIndex);
  $marketVol = mt_rand(400000,300000000);
  $marketVal = rand_float(500,70000);
  $priorMarket = $row2['prior_market'];
  $changeMarket= $marketIndex-$priorMarket;
  $perChangemar = (($changeMarket)/$priorMarket)*100;
  $marketIn = mt_rand(1000000,10000000);
  $marketEq =mt_rand(1000000,10000000);
  $marketDe = mt_rand(1000000,10000000);
  $sql3 = "UPDATE stock_market SET timestamp='$timestamp',market_index=$marketIndex,high_index=$highIndex,low_index=$lowIndex,market_volume=$marketVol,
    market_value=$marketVal,change_value=$changeMarket,percent_change=$perChangemar,market_increase=$marketIn,market_equal=$marketEq,
    market_decrease=$marketDe WHERE market_type='$marketType'";

  if (mysqli_query($con, $sql3)) {
    echo "Record updated successfully";
  } else {
    echo "Error updating record: " . mysqli_error($con);
  }

  mysqli_close($con);
?>
