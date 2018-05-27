<?php
  session_start();
  $con = mysqli_connect("localhost","root","","stock_trading");
  //check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:".mysqli_connect_errno() ;
  }
  //escape variables for security
  $Username=$_SESSION['username'];
  $account = mysqli_real_escape_string($con,$_POST['account']);
  $orderType = mysqli_real_escape_string($con,$_POST['optradio']);
  $symbol = mysqli_real_escape_string($con,$_POST['stockSymbol']);
  $price = mysqli_real_escape_string($con,$_POST['price']);
  $volume = mysqli_real_escape_string($con,$_POST['volume']);
  $pincode = mysqli_real_escape_string($con,$_POST['pincode']);
  $timestamp = $_SESSION['timestamp'];
  $result = mysqli_query($con,"SELECT *
    FROM personal_data p JOIN user_account_data ud ON ud.username= p.username
    WHERE p.username='$Username'AND ud.account_number='$account'") or die("Error: ".mysqli_error($con));
  $row = mysqli_fetch_array($result);
  $id = $row['user_account_id'];

  if ($pincode==$row['pincode']) {
  /*  $sql = "INSERT INTO stock_order(symbol,order_time,order_type,order_volume,order_price,total_amount,user_account_id)
      VALUES ('$symbol','$timestamp','$orderType',$volume,$price,$price*$volume,'$id')";
    if (!mysqli_query($con,$sql)) {
      die('Error:'.mysqli_error($con));
    }
    echo "success";*/
    $sql2="SELECT * FROM user_stock_list WHERE symbol='$symbol' AND user_account_id=$id";
    $result2 = mysqli_query($con,$sql2);
    $row_cnt = mysqli_num_rows($result2);
    //echo $row_cnt;
    if(mysqli_num_rows($result2)>0)
    {
      $row2 = mysqli_fetch_array($result2);
      $availVol = $row2['available_volume'];
      if($orderType=="buy")
      {
        $sql = "INSERT INTO stock_order(symbol,order_time,order_type,order_volume,order_price,total_amount,user_account_id)
          VALUES ('$symbol','$timestamp','$orderType',$volume,$price,$price*$volume,'$id')";
        if (!mysqli_query($con,$sql)) {
          die('Error:'.mysqli_error($con));
        }
        $sql3 ="UPDATE user_stock_list SET available_volume=$availVol+$volume,actual_volume=$availVol+$volume
          WHERE symbol='$symbol' AND user_account_id=$id";
          if (mysqli_query($con, $sql3)) {
            //echo "Record updated successfully";
            echo 'success';
          } else {
            echo "Error updating record: " . mysqli_error($con);
          }
      }
      else {
        if($availVol-$volume > 0)
        {
          $sql = "INSERT INTO stock_order(symbol,order_time,order_type,order_volume,order_price,total_amount,user_account_id)
            VALUES ('$symbol','$timestamp','$orderType',$volume,$price,$price*$volume,'$id')";
          if (!mysqli_query($con,$sql)) {
            die('Error:'.mysqli_error($con));
          }
          $sql3 ="UPDATE user_stock_list SET available_volume=$availVol-$volume,actual_volume=$availVol-$volume
            WHERE symbol='$symbol' AND user_account_id=$id";
            if (mysqli_query($con, $sql3)) {
              //echo "Record updated successfully";
              echo 'success';
            } else {
              echo "Error updating record: " . mysqli_error($con);
            }
        }
        else {
          echo "failedMinus";
        }
      }
    }
    else{
      if($orderType=="buy")
      {
        $sql = "INSERT INTO stock_order(symbol,order_time,order_type,order_volume,order_price,total_amount,user_account_id)
          VALUES ('$symbol','$timestamp','$orderType',$volume,$price,$price*$volume,'$id')";
        if (!mysqli_query($con,$sql)) {
          die('Error:'.mysqli_error($con));
        }

        $sql4 = "INSERT INTO user_stock_list(symbol,user_account_id,available_volume,actual_volume)
         VALUES ('$symbol',$id,$volume,$volume)";
         if (!mysqli_query($con,$sql4)) {
           die('Error:'.mysqli_error($con));
         }
         echo 'success';
      }
      else {
        echo 'failedSell';
      }
    }

  }
  else {
    echo 'failed';
  }
  mysqli_close($con);
?>
