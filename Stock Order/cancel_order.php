<?php
  session_start();
  $con=mysqli_connect("localhost","root","","stock_trading");
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
  }
  $NumberC = mysqli_real_escape_string($con,$_POST['cancelNumber']);
  $VolumeC = mysqli_real_escape_string($con,$_POST['cancelVolume']);
  $CancelOrder = "UPDATE stock_order SET order_status = 'Cancelled' WHERE order_number = $NumberC;";
  if (!mysqli_query($con,$CancelOrder)) {
    die('Error.' .mysqli_error($con));
  }
  echo "Cancel Success!";
  date_default_timezone_set("Asia/Bangkok");
  $TimeStamp = date("Y-m-d h:i:sa");
  echo $TimeStamp;
  $CancelOrder2 = "INSERT INTO order_history VALUES($NumberC,'$TimeStamp',0,$VolumeC,0);";
  if (!mysqli_query($con,$CancelOrder2)) {
    die('Error.' .mysqli_error($con));
  }
  header("location:StockOrder.php?update=0&cancel=1");
  mysqli_close($con);
?>