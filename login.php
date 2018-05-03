<?php
  session_start();
  $con=mysqli_connect("localhost","root","","stock_trading");
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
  }
  if(isset($_POST['username_log']))
  {
    $Username = mysqli_real_escape_string($con,$_POST['username_log']);
    $Userpassword = mysqli_real_escape_string($con,$_POST['password_log']);
    $result = mysqli_query($con,"SELECT username
            FROM personal_data
            WHERE password = $Userpassword AND username = '$Username'") or die("Error: ".mysqli_error($con));
    $row = mysqli_fetch_array($result);
    if(mysqli_num_rows($result)==1)
    {
      $_SESSION['username'] = $row['username'];
      mysqli_close($con);
      header("location: trading.php");
    }
    else {
      header("location: first.php?wrongValue=1&wrongText=Your username or password is wrong");
    }
  }
  else {
    mysqli_close($con);
    header("location: first.php?wrongValue=1&wrongText=Please insert username");
  }

?>
