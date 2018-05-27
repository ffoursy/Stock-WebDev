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
    $result = mysqli_query($con,"SELECT username,user_role
            FROM personal_data
            WHERE password='$Userpassword' AND username='$Username'") or die("Error: ".mysqli_error($con));
    $row = mysqli_fetch_array($result);
    if(mysqli_num_rows($result)==1)
    {
      if ($row['user_role']=="broker") {
        $_SESSION['username'] = $row['username'];
        $_SESSION['login']=1;
        mysqli_close($con);
        header("location: brokerFirst_select.php");
      }
      elseif ($row['user_role']=="user") {
        $_SESSION['username'] = $row['username'];
        $_SESSION['login']=1;
        mysqli_close($con);
        header("location: trading.php");
      }
      elseif ($row['user_role']== "admin") {
        $_SESSION['username'] = $row['username'];
        $_SESSION['login']=1;
        mysqli_close($con);
        header("location: adminFirst.php");
      }
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
