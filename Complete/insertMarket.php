<?php
  session_start();
  $con = mysqli_connect("localhost","root","","stock_trading");
  //check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:".mysqli_connect_errno() ;
  }
  $symbol=$_POST['symbol_data'];
  $timestamp=$_SESSION['timestamp'];
  $last=$_POST['lastprice_data'];
  $high=$_POST['highprice_data'];
  $low=$_POST['lowprice_data'];
  $marketVol=$_POST['marketvol_data'];
  $marketVal=$_POST['marketval_data'];
  $increase=$_POST['increase_data'];
  $equal=$_POST['equal_data'];
  $decrease=$_POST['decrease_data'];
  $status=$_POST['status_data'];
  $prior=$_POST['prior_data'];
  $change=$last-$prior;
  $perChange = (($change)/$prior)*100;
  $sql="INSERT INTO stock_market VALUES ('$symbol','$timestamp',$last,$high,$low,$marketVol,$marketVal
    ,$change,$perChange,$increase,$equal,$decrease,'$status',$prior)";
  if (mysqli_query($con, $sql)) {
    echo "success";
  }
  else{
    echo "failed";
  }
?>
