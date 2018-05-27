<?php
  session_start();
  $con=mysqli_connect("localhost","root","","stock_trading");
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
  }
  $NumborE = mysqli_real_escape_string($con,$_POST['editedNumber']);
  $VolumeE = mysqli_real_escape_string($con,$_POST['editedVolume']);
  $PriceE = mysqli_real_escape_string($con,$_POST['editedPrice']);
  echo $VolumeE." ".$PriceE." ".$NumborE;
  $UpdateOrder = "UPDATE stock_order SET order_volume = $VolumeE, order_price = $PriceE WHERE order_number = $NumborE;";
  if (!mysqli_query($con,$UpdateOrder)) {
    die('Error.' .mysqli_error($con));
  }
  echo "Update Success!";
  $_SESSION['update'] = 1;
  $_SESSION['cancel'] = 0;
  header("location:trading.php");
  mysqli_close($con);
?>
