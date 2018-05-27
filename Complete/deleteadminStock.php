<?php
  session_start();
  $con = mysqli_connect("localhost","root","","stock_trading");
  //check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:".mysqli_connect_errno() ;
  }
  $symbol=$_GET['symbol'];
  $sql="DELETE FROM stock_data WHERE stock_symbol='$symbol'";
  if (mysqli_query($con, $sql)) {
    echo "success";
  }
  else {
    echo "failed";
  }
  mysqli_close($con);
?>
