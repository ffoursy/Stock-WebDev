<?php
  session_start();
  $con=mysqli_connect("localhost","root","","stock_trading");
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
  }
  $UsernameA = $_SESSION['username'];
  $AccountA = $_SESSION['AccountC'];
  $BrokerA = $_SESSION['BrokerC'];
  $TypeA = $_SESSION['TypeC'];
  $BankAccountA = $_SESSION['BankAccountC'];
  $PincodeA = $_SESSION['PincodeC'];
  header("location: AfAddAccount.php");
  $insertAccount = "INSERT INTO user_account_data(Username,account_number,bank_account_number,pincode,broker_symbol)
                    VALUES('$UsernameA','$AccountA','$BankAccountA','$PincodeA','$BrokerA')";
  if (!mysqli_query($con,$insertAccount)) {
    die('Error.' .mysqli_error($con));
  }
  echo "Success!";
  mysqli_close($con);
  //header("location: AddAccount.php?DuplicateAccount=1&DuplicateError=This account already exists.");
?>