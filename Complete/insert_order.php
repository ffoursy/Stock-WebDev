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
  $volumeOriginal = $volume;
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
          } 
        else {
          echo "Error updating record: " . mysqli_error($con);
          }
        $sql888 = "SELECT order_number FROM stock_order WHERE order_type = '$orderType' AND symbol = '$symbol' AND order_price = $price AND order_volume = $volumeOriginal AND user_account_id = $id";
        $result888 = mysqli_query($con,$sql888);
        $Order888 = mysqli_fetch_array($result888);
        $sql999 = "INSERT INTO order_history VALUES (".$Order888['order_number'].",'$timestamp',0,0,0)";
        if (!mysqli_query($con,$sql999)) {
          die('Error:'.mysqli_error($con));
          }

        $sql5 = "SELECT o.order_number, o.order_volume FROM order_history h INNER JOIN stock_order o ON h.order_number = o.order_number WHERE o.symbol = '$symbol' AND o.order_type = 'sell' AND o.order_price = $price AND o.order_status = 'On process'";
        $result5 = mysqli_query($con, $sql5);
        $i = 1;
        while ($matchSymbol = mysqli_fetch_array($result5))
          { 
            $matchNum = $matchSymbol['order_number'];
            $sql6 = "SELECT SUM(matched_volume) AS matched FROM order_history WHERE order_number = '$matchNum'";
            $result6 = mysqli_query($con,$sql6);
            $row6 = mysqli_fetch_array($result6); 
            $balanceMatch = $matchSymbol['order_volume'] - $row6['matched'];
            if ($balanceMatch <= $volume)
              { 
                $sql7 = "INSERT INTO order_history(order_number,time_stamp,matched_volume,matched_price) VALUES($matchNum, '$timestamp', $balanceMatch, $price)";
                $insert = mysqli_query($con,$sql7);

                date_default_timezone_set("Asia/Bangkok");
                $Time1 = date("Y-m-d h:i:sa", strtotime("+$i second")); 

                $sql8 = "SELECT order_number FROM stock_order WHERE order_type = '$orderType' AND symbol = '$symbol' AND order_price = $price AND order_volume = $volumeOriginal AND user_account_id = $id";
                $result8 = mysqli_query($con,$sql8);
                $row8 = mysqli_fetch_array($result8);
                $sql9 = "INSERT INTO order_history(order_number,time_stamp,matched_volume,matched_price) VALUES(".$row8['order_number'].",'$Time1', $balanceMatch, $price)";
                $result9 = mysqli_query($con,$sql9);

                $volume = $volume - $balanceMatch;
                $i++;
              } 
            else if ($balanceMatch > $volume)
              {
                $sql7 = "INSERT INTO order_history(order_number,time_stamp,matched_volume,matched_price) VALUES($matchNum, '$timestamp', $volume, $price)";
                $insert = mysqli_query($con,$sql7);

                $sql8 = "SELECT order_number FROM stock_order WHERE order_type = '$orderType' AND symbol = '$symbol' AND order_price = $price AND order_volume = $volumeOriginal AND user_account_id = $id";
                $result8 = mysqli_query($con,$sql88);
                $row8 = mysqli_fetch_array($result88);
                $test = $row8['order_number'];

                date_default_timezone_set("Asia/Bangkok");
                $Time2 = date("Y-m-d h:i:sa", strtotime("+$i second")); 

                $sql9 = "INSERT INTO order_history(order_number,time_stamp,matched_volume,matched_price) VALUES($test,'$Time2', $volume, $price)";
                $result9 = mysqli_query($con,$sql100);
                $i++;

                break;
              }
          }
      }
      else if ($orderType == "sell"){
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

            $sql111 = "SELECT order_number FROM stock_order WHERE order_type = '$orderType' AND symbol = '$symbol' AND order_price = $price AND order_volume = $volumeOriginal AND user_account_id = $id";
            $result111 = mysqli_query($con,$sql111);
            $Order111 = mysqli_fetch_array($result111);
            $sql222 = "INSERT INTO order_history VALUES (".$Order111['order_number'].",'$timestamp',0,0,0)";
            if (!mysqli_query($con,$sql222)) {
              die('Error:'.mysqli_error($con));
              }

            $sql5 = "SELECT o.order_number, o.order_volume FROM order_history h INNER JOIN stock_order o ON h.order_number = o.order_number WHERE o.symbol = '$symbol' AND o.order_type = 'buy' AND o.order_price = $price AND o.order_status = 'On process'";
            $result5 = mysqli_query($con, $sql5);
            $i = 1;
            while ($matchSymbol = mysqli_fetch_array($result5))
              { 
                $matchNum = $matchSymbol['order_number'];
                $sql6 = "SELECT SUM(matched_volume) AS matched FROM order_history WHERE order_number = '$matchNum'";
                $result6 = mysqli_query($con,$sql6);
                $row6 = mysqli_fetch_array($result6); 
                $balanceMatch = $matchSymbol['order_volume'] - $row6['matched'];
                if ($balanceMatch < $volume)
                  { 
                    $sql7 = "INSERT INTO order_history(order_number,time_stamp,matched_volume,matched_price) VALUES($matchNum, '$timestamp', $balanceMatch, $price)";
                    $insert = mysqli_query($con,$sql7);

                    date_default_timezone_set("Asia/Bangkok");
                    $Time1 = date("Y-m-d h:i:sa", strtotime("+$i second")); 

                    $sql8 = "SELECT order_number FROM stock_order WHERE order_type = '$orderType' AND symbol = '$symbol' AND order_price = $price AND order_volume = $volumeOriginal AND user_account_id = $id";
                    $result8 = mysqli_query($con,$sql8);
                    $row8 = mysqli_fetch_array($result8);
                    $sql9 = "INSERT INTO order_history(order_number,time_stamp,matched_volume,matched_price) VALUES(".$row8['order_number'].",'$Time1', $balanceMatch, $price)";
                    $result9 = mysqli_query($con,$sql9);

                    $volume = $volume - $balanceMatch;
                    $i++;
                  } 
                else if ($balanceMatch > $volume)
                  {
                    $sql7 = "INSERT INTO order_history(order_number,time_stamp,matched_volume,matched_price) VALUES($matchNum, '$timestamp', $volume, $price)";
                    $insert = mysqli_query($con,$sql7);

                    $sql8 = "SELECT order_number FROM stock_order WHERE order_type = '$orderType' AND symbol = '$symbol' AND order_price = $price AND order_volume = $volumeOriginal AND user_account_id = $id";
                    $result8 = mysqli_query($con,$sql88);
                    $row8 = mysqli_fetch_array($result88);
                    $test = $row8['order_number'];

                    date_default_timezone_set("Asia/Bangkok");
                    $Time2 = date("Y-m-d h:i:sa", strtotime("+$i second")); 

                    $sql9 = "INSERT INTO order_history(order_number,time_stamp,matched_volume,matched_price) VALUES($test,'$Time2', $volume, $price)";
                    $result9 = mysqli_query($con,$sql100);
                    $i++;

                    break;
                  }
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
         
        $sql444 = "SELECT order_number FROM stock_order WHERE order_type = '$orderType' AND symbol = '$symbol' AND order_price = $price AND order_volume = $volumeOriginal AND user_account_id = $id";
        $result444 = mysqli_query($con,$sql444);
        $Order444 = mysqli_fetch_array($result444);
        $sql555 = "INSERT INTO order_history VALUES (".$Order444['order_number'].",'$timestamp',0,0,0)";
        if (!mysqli_query($con,$sql555)) {
          die('Error:'.mysqli_error($con));
          }

         $sql5 = "SELECT o.order_number, o.order_volume FROM order_history h INNER JOIN stock_order o ON h.order_number = o.order_number WHERE o.symbol = '$symbol' AND o.order_type = 'sell' AND o.order_price = $price AND o.order_status = 'On process'";
         $result5 = mysqli_query($con, $sql5);
         $i = 1;
        while ($matchSymbol = mysqli_fetch_array($result5))
          { 
            $matchNum = $matchSymbol['order_number'];
            $sql6 = "SELECT SUM(matched_volume) AS matched FROM order_history WHERE order_number = $matchNum";
            $result6 = mysqli_query($con,$sql6);
            $row6 = mysqli_fetch_array($result6); 
            $balanceMatch = $matchSymbol['order_volume'] - $row6['matched'];
            if ($balanceMatch <= $volume)
              { 
                $sql7 = "INSERT INTO order_history(order_number,time_stamp,matched_volume,matched_price) VALUES($matchNum, '$timestamp', $balanceMatch, $price)";
                $insert = mysqli_query($con,$sql7);

                date_default_timezone_set("Asia/Bangkok");
                $Time1 = date("Y-m-d h:i:sa", strtotime("+$i second")); 

                $sql8 = "SELECT order_number FROM stock_order WHERE order_type = '$orderType' AND symbol = '$symbol' AND order_price = $price AND order_volume = $volumeOriginal AND user_account_id = $id";
                $result8 = mysqli_query($con,$sql8);
                $row8 = mysqli_fetch_array($result8);
                $sql9 = "INSERT INTO order_history(order_number,time_stamp,matched_volume,matched_price) VALUES(".$row8['order_number'].",'$Time1', $balanceMatch, $price)";
                $result9 = mysqli_query($con,$sql9);

                $volume = $volume - $balanceMatch;
                $i++;
              } 
            else
              {
                $sql7 = "INSERT INTO order_history(order_number,time_stamp,matched_volume,matched_price) VALUES($matchNum, '$timestamp', $volume, $price)";
                $insert = mysqli_query($con,$sql7);

                $sql8 = "SELECT order_number FROM stock_order WHERE order_type = '$orderType' AND symbol = '$symbol' AND order_price = $price AND order_volume = $volumeOriginal AND user_account_id = $id";
                $result8 = mysqli_query($con,$sql88);
                $row8 = mysqli_fetch_array($result88);
                $test = $row8['order_number'];

                date_default_timezone_set("Asia/Bangkok");
                $Time2 = date("Y-m-d h:i:sa", strtotime("+$i second")); 

                $sql9 = "INSERT INTO order_history(order_number,time_stamp,matched_volume,matched_price) VALUES($test,'$Time2', $volume, $price)";
                $result9 = mysqli_query($con,$sql100);
                $i++;

                break;
              }
          }
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
