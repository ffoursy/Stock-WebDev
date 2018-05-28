<?php
  $con=mysqli_connect("localhost","root","","stock_trading");
    if (mysqli_connect_errno()){
      echo "Failed to connect to MySQL:" . mysqli_connect_error();
    }
  $account_num = $_POST['account'];
  //echo $account_num;
  $getaccountid = mysqli_query($con,"SELECT user_account_id FROM user_account_data WHERE account_number = '$account_num';");
  $accountid = mysqli_fetch_array($getaccountid);
  $id = $accountid['user_account_id'];
  //echo $accountid['user_account_id'];
  $result = mysqli_query($con,"SELECT * FROM stock_order WHERE user_account_id = $id ;");
  $output = '';
  $output .= '<table>
  <thead>
    <tr class="table100-head">
      <th class="column1">Order No</th>
      <th class="column2">Symbol</th>
      <th class="column3">Time</th>
      <th class="column4">Type</th>
      <th class="column5">Volume</th>
      <th class="column6">Price</th>
      <th class="column7">Matched</th>
      <th class="column8">Balanced</th>
      <th class="column9">Cancelled</th>
      <th class="column10">Status</th>
      <th class="column11">Edit</th>
      <th class="column12">History</th>
      <th class="column13">Cancel</th>
    </tr>
  </thead>';
  $i = 1;
  while ($row = mysqli_fetch_array($result)) {
    $sqlcancel = "SELECT SUM(cancelled_volume) as 'TotalCancel' FROM order_history WHERE order_number = ".$row['order_number'].";";
    $resultcancel = mysqli_query($con,$sqlcancel);
    $cancelled = mysqli_fetch_array($resultcancel);
    $sql = "SELECT * FROM order_history WHERE order_number = ".$row['order_number'].";";
    $history = mysqli_query($con,$sql);
    $Numhis = mysqli_num_rows($history);

    $sql2 = "SELECT SUM(matched_volume) AS matched FROM order_history WHERE order_number = ".$row['order_number'].";";
    $result2 = mysqli_query($con,$sql2);
    $roww = mysqli_fetch_array($result2);
    if ($roww['matched']==NULL) {
      $roww['matched'] = 0;
    }

    $balanced = $row['order_volume']-$roww['matched']-$cancelled['TotalCancel'];
    if ($row['order_volume']==$roww['matched'])
      {
    $row['order_status'] = "Completed";
    $sql3 = "UPDATE stock_order SET order_status = 'Completed' WHERE order_number = ".$row['order_number'].";";
     $result3 = mysqli_query($con,$sql3);
      }
    $output .= "<tbody>";
    $output .= '<tr>
            <td class="column1">'.$row['order_number'].'</td>
            <td class="column2">'.$row['symbol'].'</td>
            <td class="column3">'.$row['order_time'].'</td>
            <td class="column4">'.$row['order_type'].'</td>
            <td class="column5">'.$row['order_volume'].'</td>
            <td class="column6">'.$row['order_price'].'</td>
            <td class="column7">'.$roww['matched'].'</td>
            <td class="column8">'.$balanced.'</td>';
            if ($Numhis==0) {
$output .= '<td class="column9">0</td>';}
            else {
$output .= '<td class="column9">'.$cancelled['TotalCancel'].'</td>';}
$output .= '<td class="column10">'.$row['order_status'].'</td>
            <td class="column11"><button title="Edit" id="e'.$i.'"><img src="https://image.flaticon.com/icons/svg/148/148987.svg" alt="Success" height="25" width="25"></button></td>
            <td class="column12"><button title="Browse" id="b'.$i.'"><img src="https://image.flaticon.com/icons/svg/214/214340.svg" alt="Success" height="25" width="25"></button></td>
            <td class="column13"><button title="Cancel" id="c'.$i.'"><img src="https://image.flaticon.com/icons/svg/148/148766.svg" alt="Success" height="25" width="25"></button></td>
          </tr>';
    if (strcasecmp($row['order_status'],'On process')==0) {
    $output .= "<script>$('#e".$i."').click(function(){swal({
            title: '<h1><b>Edit Order</b></h>',
            html:
              '<br><b>Symbol</b>: ".$row['symbol']."<br><br>'+
              '<b>Type</b>: ".$row['order_type']."<br><br>'+
              '<form action="."edit_order.php"." method="."post".">'+
              '<input type="."hidden"." name="."accountNum"." value=".$account_num."><br>'+
              '<input type="."hidden"." name="."editedNumber"." value=".$row['order_number']."><br>'+
              'Volume: <br>'+
              '<input type="."text"." class="."swal2-input"." pattern="."^[1-9][0-9]*$"." name="."editedVolume"." required><br>'+
              'Price: <br>'+
              '<input type="."text"." class="."swal2-input"." pattern="."^[1-9][0-9.]*$"." name="."editedPrice"." required><br>'+
              '<button style="."background-color:#3085d6;"." class="."btn btn-primary btn-block"."type="."submit"." id="."result".">GO</button></form><br>',
              showConfirmButton: false,
            })});
          </script>";
          }
   // echo "HAVE ".mysqli_num_rows($hisory)."ORDER";
    $head = "<tr style="."background-color:#eaeaea;"."><th style="."padding-left:20px;"."><center>Time</center></th><th><center>Matched</center></th><th><center>Price</center></th><th style="."padding-right:20px;"."><center>Cancelled</center></th></tr>";
    $numrow = 0;
    $empty = 0;
    while ($row2 = mysqli_fetch_array($history))
      {
      if ( ($row2['matched_volume']==0) && ($row2['matched_price']==0) && ($row2['cancelled_volume']==0) )
        {
          $data[$numrow] = "";
          if (mysqli_num_rows($history)==1)
            {
              $empty = 1;
            }
        }
      else
        {
        $data[$numrow] = "<tr style="."background-color:white;"."><td style="."padding-left:30px;".">".$row2['time_stamp']."</td><td><center>".$row2['matched_volume']."</center></td><td><center>".$row2['matched_price']."</center></td><td><center>".$row2['cancelled_volume']."</center></td></tr>";
        //echo $numrow."isssss";
        }
        $numrow++;
      }
      $AmountOrder = mysqli_num_rows($history);
      $a = '';
      if (($numrow==0) || ($empty==1))
        {
        $a = "<tr><td colspan="."4"."><center>No History</center></td><tr>";
        }
      else if ($numrow==1)
        {
        $a .= $data[0];
        }
      else
        {
        $a .= $data[0];
        //echo "Total".$AmountOrder."<br>";
        for($x=1; $x!=$AmountOrder; $x++)
          {
          //echo "x is".$x."<br>";
          //echo "Hi<br>";
          $a .= $data[$x];
          }


        }
      $output .= "<script>$('#b".$i."').click(function(){
        swal
        ({
          title: '<h1><b>Order History</b></h>',
          html:
            '<br><b>Symbol</b>: ".$row['symbol']."&emsp;&emsp;&emsp;'+
            '<b>Type</b>: ".$row['order_type']."<br><br>'+
            '<table>".$head.$a."</table>',
        })
      });
      </script>";
      if (strcasecmp($row['order_status'],'On process')==0) {
      $output .= "<script>$('#c".$i."').click(function(){swal({
        title: 'Are you sure?',
        text: 'You will not be able to revert this!',
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, cancel it!'
        }).then((result) => {
          if (result.value) {
            swal({
              html:
              '<form action="."cancel_order.php"." method="."post".">'+
              '<input type="."hidden"." name="."accountNum"." value=".$account_num."><br>'+
              '<input type="."hidden"." name="."cancelNumber"." value=".$row['order_number'].">'+
              '<input type="."hidden"." name="."cancelVolume"." value=".$balanced.">'+
              '<input type="."hidden"." name="."cancelStatus"." value=".$row['order_status'].">'+
              '<button style="."background-color:#3085d6;"." class="."btn btn-primary btn-block"."type="."submit"." id="."result".">CANCEL</button></form>',
              showConfirmButton: false,
            })
          }
        })
      });
      </script>";
      }

    $i += 1;
  }
  $output .= "</tbody>";
  echo $output;
?>
