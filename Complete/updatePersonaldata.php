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
  $sql2 = "SELECT user_role,user_name FROM personal_data WHERE username='$username'";
  $result2 = mysqli_query($con,$sql2);
  $row2 = mysqli_fetch_array($result2);
  $role = $row2['user_role'];
  $nameBrok = $row2['user_name'];
  if(strcasecmp($role,'broker')==0){
    $brokerUp= $_POST['edit_symbol_data'];
    $bankUp = $_POST['edit_bank_data'];
    $sql ="UPDATE personal_data SET username='$usernameUp',password='$passwordUp',user_name='$nameUp',user_surname='-',
      email_address='$emailUp',mobile_number='$phoneUp' WHERE username='$username'";
    if (mysqli_query($con, $sql)) {
      $sql3 = "UPDATE broker_list SET broker_symbol='$brokerUp',broker_name='$nameUp',broker_bank_account='$bankUp'
        WHERE broker_name='$nameBrok'";
      if (mysqli_query($con, $sql3)) {
        echo "success";
      }
      else{
        echo "failed";
      }
    } else {
      echo "failed";
    }
  }
  /*else{
    $sql ="UPDATE personal_data SET username='$usernameUp',password='$passwordUp',user_name='$nameUp',user_surname='-',
      email_address='$emailUp',mobile_number='$phoneUp' WHERE username='$username'";
    if (mysqli_query($con, $sql)) {
      echo "success";
    }
    else{
      echo "failed";
    }
  }
*/
  mysqli_close($con);
?>
