<?php
$con=mysqli_connect("localhost","root","","stock_trading");
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
  }  
  $output = ''; 
  date_default_timezone_set("Asia/Bangkok");
  $TimeStamp = date("Y-m-d"); 
  $date1 = $TimeStamp;
  $date2 = strtotime ('-1 day' , strtotime ($date1)) ;
  $date3 = strtotime ('-2 day' , strtotime ($date1)) ;
  $date4 = strtotime ('-3 day' , strtotime ($date1)) ;
  $date5 = strtotime ('-4 day' , strtotime ($date1)) ;
  $newdate2 = date ('Y-m-j',$date2); 
  $newdate3 = date ('Y-m-j',$date3); 
  $newdate4 = date ('Y-m-j',$date4); 
  $newdate5 = date ('Y-m-j',$date5);  
	
  ///////////////////////////////////////////////// date1 ////////////////////////////////////////////////////////
  $get1time1 = mysqli_query($con,"SELECT SUM(h.matched_volume*h.matched_price) AS total
  FROM order_history h INNER JOIN stock_order o ON h.order_number = o.order_number 
  WHERE o.order_type = 'Buy' AND h.time_stamp BETWEEN '".$date1." 10:00:00' AND '".$date1." 11:44:59';");
  $total11 = mysqli_fetch_array($get1time1);
  if ($total11['total'] ==  NULL)
    {
      $total11['total'] = 0;
    }

  $get1time2 = mysqli_query($con,"SELECT SUM(h.matched_volume*h.matched_price) AS total
  FROM order_history h INNER JOIN stock_order o ON h.order_number = o.order_number 
  WHERE o.order_type = 'Buy' AND h.time_stamp BETWEEN '".$date1." 11:45:00' AND '".$date1." 12:30:00';");
  $total12 = mysqli_fetch_array($get1time2);
  if ($total12['total'] ==  NULL)
    {
      $total12['total'] = 0;
    }

  $get1time3 = mysqli_query($con,"SELECT SUM(h.matched_volume*h.matched_price) AS total
  FROM order_history h INNER JOIN stock_order o ON h.order_number = o.order_number 
  WHERE o.order_type = 'Buy' AND h.time_stamp BETWEEN '".$date1." 14:25:00' AND '".$date1." 15:04:59';");
  $total13 = mysqli_fetch_array($get1time3);
  if ($total13['total'] ==  NULL)
    {
      $total13['total'] = 0;
    }

  $get1time4 = mysqli_query($con,"SELECT SUM(h.matched_volume*h.matched_price) AS total
  FROM order_history h INNER JOIN stock_order o ON h.order_number = o.order_number 
  WHERE o.order_type = 'Buy' AND h.time_stamp BETWEEN '".$date1." 15:05:00' AND '".$date1." 15:49:59';");
  $total14 = mysqli_fetch_array($get1time4);
  if ($total14['total'] ==  NULL)
    {
      $total14['total'] = 0;
    }

  $get1time5 = mysqli_query($con,"SELECT SUM(h.matched_volume*h.matched_price) AS total
  FROM order_history h INNER JOIN stock_order o ON h.order_number = o.order_number 
  WHERE o.order_type = 'Buy' AND h.time_stamp BETWEEN '".$date1." 15:50:00' AND '".$date1." 16:35:00';");
  $total15 = mysqli_fetch_array($get1time5);
  if ($total15['total'] ==  NULL)
    {
      $total15['total'] = 0;
    }
  

  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  ///////////////////////////////////////////////// date1 ////////////////////////////////////////////////////////
  $get2time1 = mysqli_query($con,"SELECT SUM(h.matched_volume*h.matched_price) AS total
  FROM order_history h INNER JOIN stock_order o ON h.order_number = o.order_number 
  WHERE o.order_type = 'Buy' AND h.time_stamp BETWEEN '".$newdate2." 10:00:00' AND '".$newdate2." 11:44:59';");
  $total21 = mysqli_fetch_array($get2time1);
  if ($total21['total'] ==  NULL)
    {
      $total21['total'] = 0;
    }

  $get2time2 = mysqli_query($con,"SELECT SUM(h.matched_volume*h.matched_price) AS total
  FROM order_history h INNER JOIN stock_order o ON h.order_number = o.order_number 
  WHERE o.order_type = 'Buy' AND h.time_stamp BETWEEN '".$newdate2." 11:45:00' AND '".$newdate2." 12:30:00';");
  $total22 = mysqli_fetch_array($get2time2);
  if ($total22['total'] ==  NULL)
    {
      $total22['total'] = 0;
    }

  $get2time3 = mysqli_query($con,"SELECT SUM(h.matched_volume*h.matched_price) AS total
  FROM order_history h INNER JOIN stock_order o ON h.order_number = o.order_number 
  WHERE o.order_type = 'Buy' AND h.time_stamp BETWEEN '".$newdate2." 14:25:00' AND '".$newdate2." 15:04:59';");
  $total23 = mysqli_fetch_array($get2time3);
  if ($total23['total'] ==  NULL)
    {
      $total23['total'] = 0;
    }

  $get2time4 = mysqli_query($con,"SELECT SUM(h.matched_volume*h.matched_price) AS total
  FROM order_history h INNER JOIN stock_order o ON h.order_number = o.order_number 
  WHERE o.order_type = 'Buy' AND h.time_stamp BETWEEN '".$newdate2." 15:05:00' AND '".$newdate2." 15:49:59';");
  $total24 = mysqli_fetch_array($get2time4);
  if ($total24['total'] ==  NULL)
    {
      $total24['total'] = 0;
    }

  $get2time5 = mysqli_query($con,"SELECT SUM(h.matched_volume*h.matched_price) AS total
  FROM order_history h INNER JOIN stock_order o ON h.order_number = o.order_number 
  WHERE o.order_type = 'Buy' AND h.time_stamp BETWEEN '".$newdate2." 15:50:00' AND '".$newdate2." 16:35:00';");
  $total25 = mysqli_fetch_array($get2time5);
  if ($total25['total'] ==  NULL)
    {
      $total25['total'] = 0;
    }

  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  ///////////////////////////////////////////////// date1 ////////////////////////////////////////////////////////
  $get3time1 = mysqli_query($con,"SELECT SUM(h.matched_volume*h.matched_price) AS total
  FROM order_history h INNER JOIN stock_order o ON h.order_number = o.order_number 
  WHERE o.order_type = 'Buy' AND h.time_stamp BETWEEN '".$newdate3." 10:00:00' AND '".$newdate3." 11:44:59';");
  $total31 = mysqli_fetch_array($get3time1);
  if ($total31['total'] ==  NULL)
    {
      $total31['total'] = 0;
    }

  $get3time2 = mysqli_query($con,"SELECT SUM(h.matched_volume*h.matched_price) AS total
  FROM order_history h INNER JOIN stock_order o ON h.order_number = o.order_number 
  WHERE o.order_type = 'Buy' AND h.time_stamp BETWEEN '".$newdate3." 11:45:00' AND '".$newdate3." 12:30:00';");
  $total32 = mysqli_fetch_array($get3time2);
  if ($total32['total'] ==  NULL)
    {
      $total32['total'] = 0;
    }

  $get3time3 = mysqli_query($con,"SELECT SUM(h.matched_volume*h.matched_price) AS total
  FROM order_history h INNER JOIN stock_order o ON h.order_number = o.order_number 
  WHERE o.order_type = 'Buy' AND h.time_stamp BETWEEN '".$newdate3." 14:25:00' AND '".$newdate3." 15:04:59';");
  $total33 = mysqli_fetch_array($get3time3);
  if ($total33['total'] ==  NULL)
    {
      $total33
      ['total'] = 0;
    }

  $get3time4 = mysqli_query($con,"SELECT SUM(h.matched_volume*h.matched_price) AS total
  FROM order_history h INNER JOIN stock_order o ON h.order_number = o.order_number 
  WHERE o.order_type = 'Buy' AND h.time_stamp BETWEEN '".$newdate3." 15:05:00' AND '".$newdate3." 15:49:59';");
  $total34 = mysqli_fetch_array($get3time4);
  if ($total34['total'] ==  NULL)
    {
      $total34['total'] = 0;
    }

  $get3time5 = mysqli_query($con,"SELECT SUM(h.matched_volume*h.matched_price) AS total
  FROM order_history h INNER JOIN stock_order o ON h.order_number = o.order_number 
  WHERE o.order_type = 'Buy' AND h.time_stamp BETWEEN '".$newdate3." 15:50:00' AND '".$newdate3." 16:35:00';");
  $total35 = mysqli_fetch_array($get3time5);
  if ($total35['total'] ==  NULL)
    {
      $total35['total'] = 0;
    }


  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  ///////////////////////////////////////////////// date1 ////////////////////////////////////////////////////////
  $get4time1 = mysqli_query($con,"SELECT SUM(h.matched_volume*h.matched_price) AS total
  FROM order_history h INNER JOIN stock_order o ON h.order_number = o.order_number 
  WHERE o.order_type = 'Buy' AND h.time_stamp BETWEEN '".$newdate4." 10:00:00' AND '".$newdate4." 11:44:59';");
  $total41 = mysqli_fetch_array($get4time1);
  if ($total41['total'] ==  NULL)
    {
      $total41['total'] = 0;
    }

  $get4time2 = mysqli_query($con,"SELECT SUM(h.matched_volume*h.matched_price) AS total
  FROM order_history h INNER JOIN stock_order o ON h.order_number = o.order_number 
  WHERE o.order_type = 'Buy' AND h.time_stamp BETWEEN '".$newdate4." 11:45:00' AND '".$newdate4." 12:30:00';");
  $total42 = mysqli_fetch_array($get4time2);
  if ($total42['total'] ==  NULL)
    {
      $total42['total'] = 0;
    }

  $get4time3 = mysqli_query($con,"SELECT SUM(h.matched_volume*h.matched_price) AS total
  FROM order_history h INNER JOIN stock_order o ON h.order_number = o.order_number 
  WHERE o.order_type = 'Buy' AND h.time_stamp BETWEEN '".$newdate4." 14:25:00' AND '".$newdate4." 15:04:59';");
  $total43 = mysqli_fetch_array($get4time3);
  if ($total43['total'] ==  NULL)
    {
      $total43['total'] = 0;
    }

  $get4time4 = mysqli_query($con,"SELECT SUM(h.matched_volume*h.matched_price) AS total
  FROM order_history h INNER JOIN stock_order o ON h.order_number = o.order_number 
  WHERE o.order_type = 'Buy' AND h.time_stamp BETWEEN '".$newdate4." 15:05:00' AND '".$newdate4." 15:49:59';");
  $total44 = mysqli_fetch_array($get4time4);
  if ($total44['total'] ==  NULL)
    {
      $total44['total'] = 0;
    }

  $get4time5 = mysqli_query($con,"SELECT SUM(h.matched_volume*h.matched_price) AS total
  FROM order_history h INNER JOIN stock_order o ON h.order_number = o.order_number 
  WHERE o.order_type = 'Buy' AND h.time_stamp BETWEEN '".$newdate4." 15:50:00' AND '".$newdate4." 16:35:00';");
  $total45 = mysqli_fetch_array($get4time5);
  if ($total45['total'] ==  NULL)
    {
      $total45['total'] = 0;
    }


  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////

  ///////////////////////////////////////////////// date1 ////////////////////////////////////////////////////////
  $get5time1 = mysqli_query($con,"SELECT SUM(h.matched_volume*h.matched_price) AS total
  FROM order_history h INNER JOIN stock_order o ON h.order_number = o.order_number 
  WHERE o.order_type = 'Buy' AND h.time_stamp BETWEEN '".$newdate5." 10:00:00' AND '".$newdate5." 11:44:59';");
  $total51 = mysqli_fetch_array($get5time1);
  if ($total51['total'] ==  NULL)
    {
      $total51['total'] = 0;
    }

  $get5time2 = mysqli_query($con,"SELECT SUM(h.matched_volume*h.matched_price) AS total
  FROM order_history h INNER JOIN stock_order o ON h.order_number = o.order_number 
  WHERE o.order_type = 'Buy' AND h.time_stamp BETWEEN '".$newdate5." 11:45:00' AND '".$newdate5." 12:30:00';");
  $total52 = mysqli_fetch_array($get5time2);
  if ($total52['total'] ==  NULL)
    {
      $total52['total'] = 0;
    }

  $get5time3 = mysqli_query($con,"SELECT SUM(h.matched_volume*h.matched_price) AS total
  FROM order_history h INNER JOIN stock_order o ON h.order_number = o.order_number 
  WHERE o.order_type = 'Buy' AND h.time_stamp BETWEEN '".$newdate5." 14:25:00' AND '".$newdate5." 15:04:59';");
  $total53 = mysqli_fetch_array($get5time3);
  if ($total53['total'] ==  NULL)
    {
      $total53['total'] = 0;
    }

  $get5time4 = mysqli_query($con,"SELECT SUM(h.matched_volume*h.matched_price) AS total
  FROM order_history h INNER JOIN stock_order o ON h.order_number = o.order_number 
  WHERE o.order_type = 'Buy' AND h.time_stamp BETWEEN '".$newdate5." 15:05:00' AND '".$newdate5." 15:49:59';");
  $total54 = mysqli_fetch_array($get5time4);
  if ($total54['total'] ==  NULL)
    {
    $total54['total'] = 0;
    }
  $get5time5 = mysqli_query($con,"SELECT SUM(h.matched_volume*h.matched_price) AS total
  FROM order_history h INNER JOIN stock_order o ON h.order_number = o.order_number 
  WHERE o.order_type = 'Buy' AND h.time_stamp BETWEEN '".$newdate5." 15:50:00' AND '".$newdate5." 16:35:00';");
  $total55 = mysqli_fetch_array($get5time5);
  if ($total55['total'] ==  NULL)
    {
      $total55['total'] = 0;
    }

  
  /////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  
  $totalAll1 = $total51['total']+$total41['total']+$total31['total']+$total21['total']+$total11['total'];
  $totalAll2 = $total52['total']+$total42['total']+$total32['total']+$total22['total']+$total12['total'];
  $totalAll3 = $total53['total']+$total43['total']+$total33['total']+$total23['total']+$total13['total'];
  $totalAll4 = $total54['total']+$total44['total']+$total34['total']+$total24['total']+$total14['total'];
  $totalAll5 = $total55['total']+$total45['total']+$total35['total']+$total25['total']+$total15['total'];

  
  $i = 0;
  //$output = '';
  $output .= '<table>
  <thead>
    <tr class="table100-head">
      <th class="column1">Time</th>
      <th class="column2">'.$newdate5.'</th>
      <th class="column3">'.$newdate4.'</th>
      <th class="column4">'.$newdate3.'</th>
      <th class="column5">'.$newdate2.'</th>
      <th class="column6">'.$date1.'</th>
      <th class="column7">Total</th>
    </tr>
  </thead>';
  //$i = 1;
  //while ($row = mysqli_fetch_array($result)) {
    //$sqlcancel = "SELECT SUM(cancelled_volume) as 'TotalCancel' FROM order_history WHERE order_number = ".$row['order_number'].";";
    // $resultcancel = mysqli_query($con,$sqlcancel);
    //$cancelled = mysqli_fetch_array($resultcancel);
    //$sql = "SELECT * FROM order_history WHERE order_number = ".$row['order_number'].";";
    //$history = mysqli_query($con,$sql);
    //$Numhis = mysqli_num_rows($history);
    //$balanced = $row['order_volume']-$row['matched_volume']-$cancelled['TotalCancel'];
    $output .= "<tbody>";    
    $output .= '<tr>
            <td class="column1" style="color:green; font-weight:800;">10.00 - 11.45</td>
            <td class="column2">'.$total51['total'].'</td>
            <td class="column3">'.$total41['total'].'</td>
            <td class="column4">'.$total31['total'].'</td>
            <td class="column5">'.$total21['total'].'</td>
            <td class="column6">'.$total11['total'].'</td>
            <td class="column7" style="color:red;">'.$totalAll1.'</td></tr>';
    $output .= '<tr>
            <td class="column1" style="color:green; font-weight:800;">11.45 - 12.30</td>
            <td class="column2">'.$total52['total'].'</td>
            <td class="column3">'.$total42['total'].'</td>
            <td class="column4">'.$total32['total'].'</td>
            <td class="column5">'.$total22['total'].'</td>
            <td class="column6">'.$total12['total'].'</td>
            <td class="column7" style="color:red;">'.$totalAll2.'</td></tr>';
    $output .= '<tr>
            <td colspan=7 class="column1" style="font-weight:800;"><i>Break Time</i></td></tr>';
    $output .= '<tr>
            <td class="column1" style="color:green; font-weight:800;">14.25 - 15.05</td>
            <td class="column2">'.$total53['total'].'</td>
            <td class="column3">'.$total43['total'].'</td>
            <td class="column4">'.$total33['total'].'</td>
            <td class="column5">'.$total23['total'].'</td>
            <td class="column6">'.$total13['total'].'</td>
            <td class="column7" style="color:red;">'.$totalAll3.'</td></tr>';
    $output .= '<tr>
            <td class="column1" style="color:green; font-weight:800;">15.05 - 15.50</td>
            <td class="column2">'.$total54['total'].'</td>
            <td class="column3">'.$total44['total'].'</td>
            <td class="column4">'.$total34['total'].'</td>
            <td class="column5">'.$total24['total'].'</td>
            <td class="column6">'.$total14['total'].'</td>
            <td class="column7" style="color:red;">'.$totalAll4.'</td></tr>';
    $output .= '<tr>
            <td class="column1" style="color:green; font-weight:800;">15.50 - 16.35</td>
            <td class="column2">'.$total55['total'].'</td>
            <td class="column3">'.$total45['total'].'</td>
            <td class="column4">'.$total35['total'].'</td>
            <td class="column5">'.$total25['total'].'</td>
            <td class="column6">'.$total15['total'].'</td>
            <td class="column7" style="color:red;">'.$totalAll5.'</td></tr>';

  $output .= "</tbody>";
  echo $output;
?>