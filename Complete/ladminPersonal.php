<?php
  session_start();
  $con = mysqli_connect("localhost","root","","stock_trading");
  //check connection
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL:".mysqli_connect_errno() ;
  }
  $output='';
  $sql ="SELECT * FROM personal_data ORDER BY user_name ASC";
  $result = mysqli_query($con,$sql);
  $output .= '<table align="center" width="100%">
    <thead>
      <tr class="table100-head">
        <th class="column1">Name</th>
        <th class="column2">Surname</th>
        <th class="column3">E-mail</th>
        <th class="column4">Telephone no.</th>
        <th class="column5">Username</th>
        <th class="column6">Password</th>
        <th class="column7">User role</th>
        <th class="column8">Action</th>
      </tr>
    </thead>
    <tbody>';
  while ($row = mysqli_fetch_array($result)) {
    $output .= '<tr>';
    $output .= '<td class="column1">'.$row['user_name'].'</td>';
    $output .= '<td class="column2">'.$row['user_surname'].'</td>';
    $output .= '<td class="column3">'.$row['email_address'].'</td>';
    $output .= '<td class="column4">'.$row['mobile_number'].'</td>';
    $output .= '<td class="column5">'.$row['username'].'</td>';
    $output .= '<td class="column6">'.$row['password'].'</td>';
    $output .= '<td class="column7">'.$row['user_role'].'</td>';
    $output .= '<td class="column8">';
    if($row['user_role']=="user"){
      $output .='<div class="col-md" style="text-align:right;"><button style:"size:10px; padding-right:95px;" data-target="#deleteModal" data-toggle="modal" type="submit" class="btn btn-danger btn-xs col-md-4"
        name="btn_delete" id="btn_delete" value="'.$row['username'].'">DELETE</button>&emsp;&emsp;&emsp;&nbsp;&nbsp;
      </div></td></tr>';
    }
    else {
      $output .='<div class="col-md"><button style"size:10px;" data-target="#editModal" data-toggle="modal" type="submit" class="btn btn-warning btn-xs col-md-4"
        name="btn_edit" id="btn_edit" value="'.$row['username'].'">EDIT</button>
      <button style:"size:10px;" data-target="#deleteModal" data-toggle="modal" type="submit" class="btn btn-danger btn-xs col-md-4"
        name="btn_delete" id="btn_delete" value="'.$row['username'].'">DELETE</button>
      </div></td></tr>';
    }

  }
  $output .= '</table>';
  mysqli_close($con);
  echo $output;
?>
