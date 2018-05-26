<?php
  session_start();
  $con=mysqli_connect("localhost","root","","stock_trading");
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
  }
  //$AccountC = mysqli_real_escape_string($con,$_POST['accountNum']);
  $NumberB = mysqli_real_escape_string($con,$_POST['accountNum']);
  $BankB = mysqli_real_escape_string($con,$_POST['editBank']);
  $SetPin = "UPDATE user_account_data SET bank_account_number = '$BankB' WHERE account_number = '$NumberB';";
  if (!mysqli_query($con,$SetPin)) {
    die('Error.' .mysqli_error($con));
  }
  echo "Update Bank Account Number Success!";
  header("location:setCustomerPin.php?pin=0&bank=1");
  mysqli_close($con);
?>