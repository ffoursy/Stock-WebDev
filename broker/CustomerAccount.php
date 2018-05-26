<?php
  $con=mysqli_connect("localhost","root","","stock_trading");
    if (mysqli_connect_errno()){
      echo "Failed to connect to MySQL:" . mysqli_connect_error();
    }  
  $output = '';  
  $broker_name = $_POST['broker'];
  //$output .= $broker_name;
  //echo $account_num;	
  $getcustomer = mysqli_query($con,"SELECT a.account_number, a.bank_account_number, a.pincode, p.user_name, p.user_surname, p.email_address, p.mobile_number 
  FROM user_account_data a INNER JOIN personal_data p ON a.username = p.username WHERE broker_symbol = '$broker_name';");
  $i = 0;
  $output = '';
  $output .= '<table>
  <thead>
    <tr class="table100-head">
      <th class="column1">Account No.</th>
      <th class="column2">Name</th>
      <th class="column3">Surname</th>
      <th class="column4">Email</th>
      <th class="column5">Mobile No.</th>
      <th class="column6">Bank Account</th>
      <th class="column7">Pincode</th>
      <th class="column8">Set</th>
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
  while ($result = mysqli_fetch_array($getcustomer))
    {    
    $output .= '<tr>
            <td class="column1">'.$result['account_number'].'</td>
            <td class="column2">'.$result['user_name'].'</td>
            <td class="column3">'.$result['user_surname'].'</td>
            <td class="column4">'.$result['email_address'].'</td>
            <td class="column5">'.$result['mobile_number'].'</td>
            <td class="column6">'.$result['bank_account_number'].'</td>';
    if ($result['pincode']==NULL) {
$output .= '<td class="column7" style="color:red">Empty</td>'; }
    else {
$output .= '<td class="column7">'.$result['pincode'].'</td>';}
$output .= '<td class="column8"><button title="Edit" id="set'.$i.'"><img src="https://image.flaticon.com/icons/svg/148/148987.svg" alt="Success" height="25" width="25"></button></td></tr>';
$output .= "<script>$('#set".$i."').click(function(){swal({
            title: '<h1><b>Edit Order</b></h>',
            })});
          </script>";
    $i += 1;
  }
  $output .= "</tbody>";
  echo $output;
?>