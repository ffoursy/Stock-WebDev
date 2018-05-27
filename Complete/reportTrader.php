<?php
   $con=mysqli_connect("localhost","root","","stock_trading");
   if (mysqli_connect_errno()){
     echo "Failed to connect to MySQL:" . mysqli_connect_error();
   }
   //echo $_SESSION['accId'];
   $output ='';
   $sql = "SELECT COUNT(stock_symbol) AS numTrader,d.market_type FROM stock_order o JOIN stock_data d ON o.symbol=d.stock_symbol
    GROUP BY d.market_type";
   $result = mysqli_query($con,$sql);


  // Set a callback to run when the Google Visualization API is loaded.
  $output.= "<script>google.charts.setOnLoadCallback(drawChart);";

  // Callback that creates and populates a data table,
  // instantiates the pie chart, passes in the data and
  // draws it.
  $output .= "function drawChart() {

  var data = new google.visualization.arrayToDataTable([
    ['Market','Trader',{role:'style'}],";

       while($row = mysqli_fetch_array($result))
       {
         $output .= "['".$row['market_type']."',".$row['numTrader'].",'#ff9999'],";
       }


  $output .="]);";
  $output.="var options = {'title':'Number of Traders in each market',
                 'titleTextStyle': {
                   color: 'black',
                   fontName: 'Work Sans',
                   fontSize: 20,
                 },
                 'width':800,
                 'height':400,
                 'backgroundColor': 'white',
                 'legend':{position:'none'},
                 'hAxis':{title:'Traders','titleTextStyle': {
                   color: 'black',
                   fontName: 'Work Sans',
                   fontSize: 16,
                 }}
               };
  var chart = new google.visualization.ColumnChart(document.getElementById('pieSum2'));
  chart.draw(data, options);
}</script>";
mysqli_close($con);
echo $output;
?>
