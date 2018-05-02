<?php
  $con=mysqli_connect("localhost","root","","stock_trading");
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
  }
  $Username = mysqli_real_escape_string($con,$_POST['username_log']);
  $Userpassword = mysqli_real_escape_string($con,$_POST['password_log']);
  $result = mysqli_query($con,"SELECT username
            FROM personal_data
            WHERE password = $Userpassword AND username = '$Username'") or die("Error: ".mysqli_error($con));
  while ($row = mysqli_fetch_array($result)) {
    echo "Username:"." ".$row['username'];
  }
  mysqli_close($con);
?>
