<?php
  session_start();
  $con = mysqli_connect("localhost","root","","stock_trading");
  //check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:".mysqli_connect_errno() ;
  }
  $username=$_GET['username'];
  $sql ="DELETE FROM personal_data WHERE username='$username'";
  if (mysqli_query($con, $sql)) {
    //echo "Record updated successfully";
    echo "success";
  } else {
    echo "failed";
    //echo "Error updating record: " . mysqli_error($con);
  }
  mysqli_close($con);
?>
