<?php
  session_start();
  $con = mysqli_connect("localhost","root","","stock_trading");
  //check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:".mysqli_connect_errno() ;
  }
  $stockSym = $_POST['stockSym'];
  $marketType = $_POST['marketType'];
  $sql="SELECT * FROM stock_data WHERE stock_symbol='$stockSym' AND market_type='$marketType'";
  $result = mysqli_query($con,$sql);
  $row = mysqli_fetch_array($result);

  echo json_encode($row);
?>
