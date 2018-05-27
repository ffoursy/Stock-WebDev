<?php
  session_start();
  $con=mysqli_connect("localhost","root","","stock_trading");
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
  }
  $AccountC = mysqli_real_escape_string($con, $_POST['accountn_add']);
  $BankAccountC = mysqli_real_escape_string($con, $_POST['bankn_add']);
  $TypeC = mysqli_real_escape_string($con, $_POST['type_add']);
  $PincodeC = mysqli_real_escape_string($con, $_POST['pincode_add']);
  $BrokerC = mysqli_real_escape_string($con, $_POST['broker_add']);
  $sql = mysqli_query($con,"SELECT account_number from user_account_data WHERE account_number = '$AccountC'");
  if(mysqli_num_rows($sql)==0) {
    $_SESSION['AccountC'] = $AccountC;
    $_SESSION['BrokerC'] = $BrokerC;
    $_SESSION['TypeC'] = $TypeC;
    $_SESSION['BankAccountC'] = $BankAccountC;
    $_SESSION['PincodeC'] = $PincodeC;
    header("location: ConfirmAccount.php");
    mysqli_close($con);
  }
  else {
    header("location: AddAccount.php?DuplicateAccount=1&DuplicateError=This account already exists.");
    mysqli_close($con);
  } 
?>