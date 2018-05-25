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
  $sql1 = "SELECT lastest_close_price,stock_symbol FROM stock_data WHERE market_type='$marketType'";
  $result1 = mysqli_query($con,$sql1);
  while ($row = mysqli_fetch_array($result1)) {
    $symbol = $row['stock_symbol'];
    $bid = rand_float(1,400);
    $bidVol = mt_rand(10000,3000000);
    $offer = rand_float(1,400);
    $offerVol = mt_rand(10000,70000000);
    $checkLast = mt_rand(0,1);
    if($checkLast == 0)
    {
      $last = $bid;
    }
    else {
      $last = $offer;
    }
    $prior = $row['lastest_close_price'];
    $change = $last-$prior;
    $perChange = (($change)/$prior)*100;
    /*$prior = mysqli_real_escape_string($con,$_POST['account']);*/
    $ceiling = $prior+($prior*0.3);
    $flooring = $prior-($prior*0.3);
    $high = rand_float($ceiling,$flooring);
    $low = rand_float($high,$flooring,100);
    $allVol = mt_rand(20000000,500000000);
    $allVal = rand_float(200000,50000000);
    $timestamp = $_SESSION['timestamp'];
    $sql = "UPDATE stock_data SET timestamp= '$timestamp',bid_price=$bid,bid_volume=$bidVol,offer_price=$offer,offer_volume=$offerVol,last_price=$last,change_value=$change,percent_change=$perChange,
      ceiling_price=$ceiling,flooring_price=$flooring,high_price=$high,low_price=$low,total_value=$allVal,total_volume=$allVol WHERE stock_symbol ='$symbol' AND market_type='$marketType'";

    if (mysqli_query($con, $sql)) {
      echo "Record updated successfully";
    } else {
      echo "Error updating record: " . mysqli_error($con);
    }
  }

  mysqli_close($con);
?>
