<?php
  session_start();
  $con = mysqli_connect("localhost","root","","stock_trading");
  //check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:".mysqli_connect_errno() ;
  }
  $username=$_GET['username'];
  $usernameUp = $_POST['username_data'];
  $passwordUp = $_POST['password_data'];
  $nameUp = $_POST['name_data'];
  $surnameUp = $_POST['surname_data'];
  $emailUp = $_POST['email_data'];
  $phoneUp = $_POST['phone_data'];
  $sql ="UPDATE personal_data SET username='$usernameUp',password='$passwordUp',user_name='$nameUp',user_surname='$surnameUp',
    email_address='$emailUp',mobile_number='$phoneUp' WHERE username='$username'";
  if (mysqli_query($con, $sql)) {
    //echo "Record updated successfully";
    echo "success";
  } else {
    echo "failed";
    //echo "Error updating record: " . mysqli_error($con);
  }

  mysqli_close($con);
?>
