<?php
  $con=mysqli_connect("localhost","root","","stock_trading");
    if (mysqli_connect_errno()){
      echo "Failed to connect to MySQL:" . mysqli_connect_error();
    }  
  date_default_timezone_set("Asia/Bangkok");
  $ThisYear = date("Y"); 
  $account_num = $_POST['account'];
  //echo $account_num;
  $getstatem = mysqli_query($con,"SELECT * FROM transaction t INNER JOIN user_account_data a ON t.user_account_id = a.user_account_id
                                     WHERE account_number = '$account_num' 
                                     AND t.transaction_time BETWEEN '".$ThisYear."-01-01' AND '".$ThisYear."-12-31'
                                     ORDER BY t.transaction_time ASC;");
  $getbalance = mysqli_query($con,"SELECT b.brought_forwards FROM bank_account b INNER JOIN user_account_data a ON b.bank_account_number = a.bank_account_number
                                   WHERE account_number = '".$account_num."';");
  $balance = mysqli_fetch_array($getbalance);                                 
  $output = '';
  $output .= '<table>
  <thead>
    <tr class="table100-head">
      <th class="column1">YY-MM-DD</th>
      <th class="column2">Record</th>
      <th class="column3">Withdraw</th>
      <th class="column4">Deposit</th>
      <th class="column5">Balance</th>
    </tr>
  </thead>';
  $output .= '<td class="column1"><b>Brought forwards</b></td>
            <td class="column2">-</td>
            <td class="column3">-</td>
            <td class="column4">-</td>
            <td class="column5">'.$balance['brought_forwards'].'</td>';
  while ($statement = mysqli_fetch_array($getstatem)) {
    $output .= "<tbody>";
    $output .= '<tr>
            <td class="column1">'.$statement['transaction_time'].'</td>';
    if (strcasecmp($statement['transaction_type'],'withdraw')==0)
      {
    $balanceW = $balance['brought_forwards'] - $statement['transaction_amount'];
    $output .= '<td class="column2" style="color:red;">Withdraw</td>
            <td class="column3">'.$statement['transaction_amount'].'</td>
            <td class="column4">-</td>
            <td class="column5">'.$balanceW.'</td>';
    $balance['brought_forwards'] = $balanceW;
      }
    else {
    $balanceD = $balance['brought_forwards'] + $statement['transaction_amount'];
    $output .= '<td class="column2" style="color:green;">Deposit</td>
          <td class="column3">-</td>
          <td class="column4">'.$statement['transaction_amount'].'</td>
          <td class="column5">'.$balanceD.'</td>';
    $balance['brought_forwards'] = $balanceD;

    }
  }
  $output .= "</tbody>";
  echo $output;
?>