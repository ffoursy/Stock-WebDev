<?php
   $con=mysqli_connect("localhost","root","","stock_trading");
   if (mysqli_connect_errno()){
     echo "Failed to connect to MySQL:" . mysqli_connect_error();
   }

   $output ='';
   $sql = "SELECT broker_symbol,COUNT(user_account_id) AS countUser FROM user_account_data WHERE username NOT LIKE 'broker%'
    GROUP BY broker_symbol";
   $result = mysqli_query($con,$sql);


// Set a callback to run when the Google Visualization API is loaded.
$output.= "<script>google.charts.setOnLoadCallback(drawChart);";

// Callback that creates and populates a data table,
// instantiates the pie chart, passes in the data and
// draws it.
$output .= "function drawChart() {

  var data = new google.visualization.arrayToDataTable([
    ['Broker','Customers'],";

       while($row = mysqli_fetch_array($result))
       {
         $output .= "['".$row['broker_symbol']."',".$row['countUser']."],";
       }


  $output .="]);";
  $output.="var options = {'title':'Proportion of Customer in each broker',
                 'titleTextStyle': {
                   color: 'white',
                   fontName: 'Work Sans',
                   fontSize: 20,
                 },
                 'width':800,
                 'height':400,
                 'backgroundColor': 'none',
                 'pieHole':0.4,
                 'legend.alignment':'center',
                 'sliceVisibilityThreshold': .2,
                 'legend':{textStyle: {color: 'white', fontSize: 16,fontName:'Work Sans'},alignment:'center'}
               };
  var chart = new google.visualization.PieChart(document.getElementById('pieSum'));
  chart.draw(data, options);
}</script>";
mysqli_close($con);
echo $output;
?>
