<?php
   $con=mysqli_connect("localhost","root","","stock_trading");
   if (mysqli_connect_errno()){
     echo "Failed to connect to MySQL:" . mysqli_connect_error();
   }
   //echo $_SESSION['accId'];
   $accId=$_POST['accId'];
   $output ='';
   $sql = "SELECT stLi.symbol,stLi.available_volume,stLi.actual_volume,std.last_price FROM user_stock_list stLi JOIN user_account_data ud ON stLi.user_account_id=ud.user_account_id
     JOIN stock_data std ON std.stock_symbol=stLi.symbol
     WHERE stLi.user_account_id =$accId";
   $result = mysqli_query($con,$sql);


// Set a callback to run when the Google Visualization API is loaded.
$output.= "<script>google.charts.setOnLoadCallback(drawChart);";

// Callback that creates and populates a data table,
// instantiates the pie chart, passes in the data and
// draws it.
$output .= "function drawChart() {

  var data = new google.visualization.arrayToDataTable([
    ['Symbol','Amount'],";

       while($row = mysqli_fetch_array($result))
       {
         $symbol=$row['symbol'];
         $sql2 = "SELECT order_price FROM stock_order
           WHERE user_account_id=$accId AND order_type='buy' AND symbol='$symbol' HAVING MAX(order_number)";
         $result2 = mysqli_query($con,$sql2);
         $row2 = mysqli_fetch_array($result2);
         $output .= "['".$row['symbol']."',".$row2['order_price']*$row['actual_volume']."],";
       }


  $output .="]);";
  $output.="var options = {'title':'Market Value Chart',
                 'titleTextStyle': {
                   color: 'white',
                   fontName: 'Work Sans',
                   fontSize: 26,
                 },
                 'width':800,
                 'height':400,
                 'backgroundColor': 'none',
                 'pieHole':0.4,
                 'legend.alignment':'center',
                 'sliceVisibilityThreshold': .2,
                 'legend':{textStyle: {color: 'white', fontSize: 20,fontName:'Work Sans'},alignment:'center'}
               };
  var chart = new google.visualization.PieChart(document.getElementById('pieSum'));
  chart.draw(data, options);
}</script>";
mysqli_close($con);
echo $output;
?>
