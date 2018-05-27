<?php
  session_start();
  $con = mysqli_connect("localhost","root","","stock_trading");
  //check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:".mysqli_connect_errno() ;
  }
  $symbol=$_POST['symbol_data'];
  $timestamp=$_SESSION['timestamp'];
  $company=$_POST['company_data'];
  $bidPrice=$_POST['bidprice_data'];
  $bidVol=$_POST['bidvol_data'];
  $offerPrice=$_POST['offerprice_data'];
  $offerVol=$_POST['offervol_data'];
  $lastPrice=$_POST['lastprice_data'];
  $prior=$_POST['priorprice_data'];
  $ceilingPrice=$_POST['ceiling_data'];
  $flooringPrice=$_POST['flooring_data'];
  $high=$_POST['high_data'];
  $low=$_POST['low_data'];
  $totalVol=$_POST['totalvol_data'];
  $totalVal=$_POST['totalval_data'];
  $market=$_POST['market_data'];
  $change=$lastPrice-$prior;
  $perChange = (($change)/$prior)*100;
  $sql="INSERT INTO stock_data VALUES ('$symbol','$timestamp','$company',$bidPrice,$bidVol,$offerPrice,$offerVol
    ,$lastPrice,$change,$perChange,$prior,$ceilingPrice,$flooringPrice,$high,$low,$totalVol,$totalVal,'$market')";
  if (mysqli_query($con, $sql)) {
    echo "success";
  }
  else{
    echo "failed";
  }
?>
