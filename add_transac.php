<?php
  session_start();
  $con=mysqli_connect("localhost","root","","stock_trading");
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
  }

  $AccountT = mysqli_real_escape_string($con, $_POST['accountn_tran']);
  $TypeT = mysqli_real_escape_string($con, $_POST['type_tran']);
  $AmountT = mysqli_real_escape_string($con, $_POST['amount_tran']);
  $PincodeT = mysqli_real_escape_string($con, $_POST['pincode_tran']);
  $UserT = mysqli_real_escape_string($con, $_POST['username_tran']);
  $TimeStampT = mysqli_real_escape_string($con, $_POST['timestamp_tran']);
  $result= mysqli_query($con,"SELECT pincode FROM user_account_data WHERE account_number = '$AccountT';");
  $PinOfAccount= mysqli_fetch_array($result);
  if($PincodeT==$PinOfAccount[0]) {
    echo $PincodeT;
    echo $PinOfAccount[0];
    $sql = "INSERT INTO transaction(user_account_id,transaction_amount,transaction_type) SELECT user_account_id,'$AmountT','$TypeT'
    FROM user_account_data
    WHERE account_number = '$AccountT';";
    if (!mysqli_query($con,$sql)) {
      die('Error.' .mysqli_error($con));
    }
    $_SESSION['AccountnT'] = $AccountT;
    $_SESSION['TypeT'] = $TypeT;
    $_SESSION['AmountT'] = $AmountT;
    $_SESSION['TimeStampT'] = $TimeStampT;
    header("location: ReceiptTransac.php");
    mysqli_close($con);
  }
  else {
    mysqli_close($con);
    header("location: Transaction.php?wrongPin=1&wrongPinError=Pincode is wrong! please try again.");
  } 
?>