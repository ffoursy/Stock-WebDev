<?php
  session_start();
  $con = mysqli_connect("localhost","root","","stock_trading");
  //check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:".mysqli_connect_errno() ;
  }
  $usernameIn = $_POST['add_username_data'];
  $passwordIn = $_POST['add_password_data'];
  $nameIn = $_POST['add_name_data'];
  $surnameIn = $_POST['add_surname_data'];
  $emailIn = $_POST['add_email_data'];
  $phoneIn = $_POST['add_phone_data'];
  $roleIn = $_POST['role'];

  if($roleIn=="broker")
  {
    $sql ="INSERT INTO personal_data VALUES ('$usernameIn','$passwordIn','$nameIn','-','$emailIn','$phoneIn','$roleIn')";
    if (mysqli_query($con, $sql)){
      $symbolIn = $_POST['add_symbol_data'];
      $bankIn = $_POST['add_bank_data'];
      $sql2 = "INSERT INTO broker_list VALUES('$symbolIn','$nameIn','$bankIn')";
      if (mysqli_query($con, $sql2)) {
        echo "success";
      }
      else {
        echo "failed";
      }
    }
    else{
      echo "failed";
    }

  }
  else {
    $sql ="INSERT INTO personal_data VALUES ('$usernameIn','$passwordIn','$nameIn','$surnameIn','$emailIn','$phoneIn','$roleIn')";
    if (mysqli_query($con, $sql)) {
      echo "success";
    }
    else {
      echo "failed";
    }
  }

  mysqli_close($con);
?>
