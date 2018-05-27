<?php
  session_start();
  header("Access-Control-Allow-Origin: *");
  header("Content-Type: application/json; charset=UTF-8");
  $con=mysqli_connect("localhost","root","","stock_trading");
  if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL:" . mysqli_connect_error();
  }
  $Username = $_SESSION['username'];
  $account = mysqli_real_escape_string($con,$_POST['account']);
  $result = mysqli_query($con,"SELECT p.username,p.user_name,p.user_surname,p.email_address,p.mobile_number,
    ud.account_number,ud.total_port_balance,ud.broker_symbol,ud.user_account_id
    FROM personal_data p JOIN user_account_data ud ON p.username=ud.username
    WHERE ud.username='$Username' AND ud.account_number='$account';") or die("Error: ".mysqli_error($con));

    /*echo "<table>
  <tr>
  <th>Name</th>
  <th>Lastname</th>
  <th>Email</th>
  <th>Mobile number</th>
  <th>Account Number</th>
  <th>Total port balance</th>
  <th>broker</th>
  </tr>";*/
  $rs = mysqli_fetch_array($result);
  $outp = array('Name' => $rs['user_name'],'Surname' => $rs['user_surname'],'accountNum'=>$rs['account_number'],
    'accID'=>$rs['user_account_id']);
  //$outp = "[";
//  while($rs = mysqli_fetch_array($result)) {
    //echo '<label>'.$row['username'].'</label>';
    /*echo "<tr>";
  echo "<td>" . $row['user_name'] . "</td>";
  echo "<td>" . $row['user_surname'] . "</td>";
  echo "<td>" . $row['email_address'] . "</td>";
  echo "<td>" . $row['mobile_number'] . "</td>";
  echo "<td>" . $row['account_number'] . "</td>";
  echo "<td>" . $row['total_port_balance'] . "</td>";
  echo "<td>" . $row['broker_symbol'] . "</td>";
  echo "</tr>";*/
    /*  if ($outp != "[") {$outp .= ",";}
      $outp .= '{"Name":"'  . $rs["user_name"] . '",';
      $outp .= '"Surname":"'   . $rs["user_surname"]        . '",';
      $outp .= '"Email":"'   . $rs["email_address"]        . '",';
      $outp .= '"MobileNumber":"'. $rs["mobile_number"]     . '",';
      $outp .= '"AccountNumber":"'. $rs["account_number"]     . '",';
      $outp .= '"total_port_balance":"'. $rs["total_port_balance"]     . '",';
      $outp .= '"Broker":"'. $rs["broker_symbol"]     . '",';
      $outp .= '"Username":"'.$rs["username"].'"}';
    }
  $outp .="]";*/
  //echo "</table>";
  mysqli_close($con);
  echo json_encode($outp);
?>
