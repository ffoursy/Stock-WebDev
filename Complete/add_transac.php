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
    $sql = "INSERT INTO transaction(user_account_id,transaction_amount,transaction_type,transaction_time) SELECT user_account_id,'$AmountT','$TypeT','$TimeStampT'
    FROM user_account_data
    WHERE account_number = '$AccountT';";
    if (!mysqli_query($con,$sql)) {
      die('Error.' .mysqli_error($con));
    }
if (strcasecmp($TypeT,'withdraw')==0) 
  {
    $sql2 = "UPDATE bank_account SET balance = balance - $AmountT WHERE bank_account_number IN (SELECT bank_account_number 
                                                                                                FROM user_account_data
                                                                                                WHERE account_number = '$AccountT');";
    if (!mysqli_query($con,$sql2)) {
      die('Error.' .mysqli_error($con));
    } 
  }
else
  {
    $sql3 = "UPDATE bank_account SET balance = balance + $AmountT WHERE bank_account_number IN (SELECT bank_account_number 
                                                                                                FROM user_account_data
                                                                                                WHERE account_number = '$AccountT');";
    if (!mysqli_query($con,$sql3)) {
      die('Error.' .mysqli_error($con));
    } 
  }                                                                                              
    $sql1 = mysqli_query($con,"SELECT DISTINCT user_name, user_surname FROM user_account_data u INNER JOIN personal_data p ON u.username = p.username 
    WHERE user_account_id = (SELECT user_account_id FROM user_account_data WHERE account_number = '$AccountT');");
    $result1 = mysqli_fetch_array($sql1);
    $_SESSION['FirstnameT'] = $result1['user_name'];
    $_SESSION['SurnameT'] = $result1['user_surname'];
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