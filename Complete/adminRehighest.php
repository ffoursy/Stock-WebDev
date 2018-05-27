<?php
  session_start();
  $con = mysqli_connect("localhost","root","","stock_trading");
  //check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:".mysqli_connect_errno() ;
  }
  $sql = "SELECT stock_symbol,total_value FROM stock_data WHERE timestamp LIKE '%17:00:00.000000'";
  $result=mysqli_query($con,$sql);
  $symbol2=array();
  while ($row=mysqli_fetch_array($result)) {
    $symbol=$row['stock_symbol'];
    $totalVal=$row['total_value'];
    $sql4 = "SELECT * FROM stock_highest";
    $result4=mysqli_query($con,$sql4);
    while ($row4=mysqli_fetch_array($result4)) {
      $symbol2[]=$row4['stock_symbol'];
    }
    if(mysqli_num_rows($result4)!= mysqli_num_rows($result)){
      if(in_array($symbol,$symbol2))
      {
        $sql2 = "UPDATE stock_highest SET total_value=$totalVal WHERE stock_symbol='$symbol'";
        if (mysqli_query($con, $sql2)) {
          echo "success";
        }
        else{
          echo "error";
          //echo "Error updating record: " . mysqli_error($con);
        }
      }
      else{
        $sql2 = "INSERT INTO stock_highest(stock_symbol,total_value) VALUES('$symbol',$totalVal)";
        if (mysqli_query($con, $sql2)) {
          echo "success";
        }
        else{
          //echo "Error updating record: " . mysqli_error($con);
          echo "error";
        }
      }


  }
  else{
    $sql2 = "UPDATE stock_highest SET total_value=$totalVal WHERE stock_symbol='$symbol'";
    if (mysqli_query($con, $sql2)) {
      echo "success";
    }
    else{
      echo "error";
      //echo "Error updating record: " . mysqli_error($con);
    }
  }
}
mysqli_close($con);
?>
