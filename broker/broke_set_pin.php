<?php
  session_start();
  $con=mysqli_connect("localhost","root","","stock_trading");
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
  }
  //$AccountC = mysqli_real_escape_string($con,$_POST['accountNum']);
  $NumberP = mysqli_real_escape_string($con,$_POST['accountNum']);
  $PinP = mysqli_real_escape_string($con,$_POST['pin']);
  $SetPin = "UPDATE user_account_data SET pincode = '$PinP' WHERE account_number = '$NumberP';";
  if (!mysqli_query($con,$SetPin)) {
    die('Error.' .mysqli_error($con));
  }
  echo "Set Pin Success!";
  header("location:setCustomerPin.php?pin=1&bank=0");
  mysqli_close($con);
?>