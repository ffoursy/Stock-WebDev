<?php
  $con=mysqli_connect("localhost","root","","stock_trading");
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
  }

  $AccountT = mysqli_real_escape_string($con, $_POST['accountn_tran']);
  $TypeT = mysqli_real_escape_string($con, $_POST['type_tran']);
  $AmountT = mysqli_real_escape_string($con, $_POST['amount_tran']);
  $PincodeT = mysqli_real_escape_string($con, $_POST['pincode_tran']);
  $UserT = mysqli_real_escape_string($con, $_POST['username_tran']);
  $sql = "INSERT INTO transaction(user_account_id,transaction_amount,transaction_type) SELECT user_account_id,'$AmountT','$TypeT'
  FROM user_account_data
  WHERE Username = '$UserT';";
  if (!mysqli_query($con,$sql)) {
    die('Error.' .mysqli_error($con));
  }
  echo "1 record added";
  mysqli_close($con);
?>