<?php
  session_start();
  $con=mysqli_connect("localhost","root","","stock_trading");
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
  }
  $Username = $_SESSION['username'];
  $result = mysqli_query($con,"SELECT *
          FROM personal_data p JOIN user_account_data ud ON p.username = ud.username
          JOIN broker_list b ON b.broker_symbol = ud.broker_symbol
          WHERE p.username='$Username'") or die("Error: ".mysqli_error($con));
  $row = mysqli_fetch_array($result);
  $_SESSION['broker'] = $row['broker_symbol'];
  header("location: brokerFirst.php");
?>
