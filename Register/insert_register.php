<?php
  $con = mysqli_connect("localhost","root","","stock_trading");
  //check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:".mysqli_connect_errno() ;
  }
  //escape variables for security
  $name = mysqli_real_escape_string($con,$_POST['name_regist']);
  $surname = mysqli_real_escape_string($con,$_POST['surname_regist']);
  $email = mysqli_real_escape_string($con,$_POST['email_regist']);
  $mobile = mysqli_real_escape_string($con,$_POST['phone_regist']);
  $username= mysqli_real_escape_string($con,$_POST['username_regist']);
  $password = mysqli_real_escape_string($con,$_POST['password_regist']);

  $sql = "INSERT INTO personal_data VALUES ('$username','$password','$name','$surname','$email','$mobile')";
  if (!mysqli_query($con,$sql)) {
    die('Error:'.mysqli_error($con));
  }
  echo "1 record added";
  mysqli_close($con);
?>
