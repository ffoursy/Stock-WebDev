<?php
  session_start();
  $con = mysqli_connect("localhost","root","","stock_trading");
  //check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:".mysqli_connect_errno() ;
  }
  $username=$_GET['username'];
  $sql3 ="SELECT user_role FROM personal_data WHERE username='$username'";
  $result3 = mysqli_query($con,$sql3);
  $row3 = mysqli_fetch_array($result3);
  $check=$row3['user_role'];
  //echo $check;
    //echo "Record updated successfully";
  if(strcasecmp($check,'broker')==0){
    $sql2="SELECT broker_symbol FROM broker_list b JOIN personal_data p ON p.user_name=b.broker_name WHERE username='$username'";
    $result2 = mysqli_query($con,$sql2);
    $row2 = mysqli_fetch_array($result2);
    $brokerSym = $row2['broker_symbol'];
    //echo $brokerSym;
    $sql3="DELETE FROM broker_list WHERE broker_symbol='$brokerSym'";
    if (mysqli_query($con, $sql3)) {
      $sql ="DELETE FROM personal_data WHERE username='$username'";
      if (mysqli_query($con, $sql)) {
        echo "success";
      }
      else {
        echo "failed";
      }
    }
    else {
      echo "failed";
    }
  }
  else{
      $sql ="DELETE FROM personal_data WHERE username='$username'";
      if (mysqli_query($con, $sql)) {
        echo "success";
      }
      else {
        echo "failed";
      }
    }


  mysqli_close($con);
?>
