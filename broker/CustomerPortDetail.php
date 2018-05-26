<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  <title>CustomerPort</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">
  <script src="sweetalert2/dist/sweetalert2.all.min.js"></script>
  <script src="sweetalert2/dist/sweetalert2.all.js"></script>
  <script src="sweetalert2/dist/sweetalert2.js"></script>
  <script src="https://unpkg.com/promise-polyfill"></script>
  <link rel="stylesheet" typr="text/css" href="sweetalert2/dist/sweetalert2.css">

  <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">

  <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

  <link rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="assets/css/select2.css">
  <link rel="stylesheet" href="assets/css/stylebox.css">
  <link rel="stylesheet" href="assets/css/helpers.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/table.css">
  <link rel="stylesheet" href="assets/css/sidebar.css">

<style>
body{
  background-color: #68838B;
}

div.text{
  font-size:80%;
  color:rgb(160, 160, 160);
  line-height:1.5;
}


/*//////////////////////////////////////////////////////////////////
[ FONT ]*/


@font-face {
  font-family: OpenSans-Regular;
  src: url('../fonts/OpenSans/OpenSans-Regular.ttf'); 
}


/*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/
* {
	margin: 0px; 
	padding: 0px; 
	box-sizing: border-box;
}

body, html {
	height: 100%;
	font-family: sans-serif;
}

/* ------------------------------------ */
a {
	margin: 0px;
	transition: all 0.4s;
	-webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
}

a:focus {
	outline: none !important;
}

a:hover {
	text-decoration: none;
}

/* ------------------------------------ */
h1,h2,h3,h4,h5,h6 {margin: 0px;}

p {margin: 0px;}

ul, li {
	margin: 0px;
	list-style-type: none;
}


/* ------------------------------------ */
input {
  display: block;
	outline: none;
	border: none;
}

textarea {
  display: block;
  outline: none;
}

textarea:focus, input:focus {
  border-color: transparent;
}

/* ------------------------------------ */
button {
	outline: none !important;
	border: none;
	background: transparent;
}

button:hover {
	cursor: pointer;
}

iframe {
	border: none !important;
}


/*//////////////////////////////////////////////////////////////////
[ Table ]*/

.limiter {
  width: 100%;
  margin: 0 auto;
}

.container-table100 {
  width: 100%;
  min-height: 100vh;
  background: #809da7;
  background: -webkit-linear-gradient(45deg, #3c5d63, #809da7);
  background: -o-linear-gradient(45deg, #3c5d63, #809da7);
  background: -moz-linear-gradient(45deg, #3c5d63, #809da7);
  background: linear-gradient(45deg, #3c5d63, #809da7);

  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-wrap: wrap;
  padding: 33px 30px;
}
.wrap-table100 {
  width: 60%;
}

table {
  border-spacing: 1;
  border-collapse: collapse;
  background: white;
  border-radius: 20px;
  overflow: hidden;
  width: 100%;
  margin: 0 auto;
  position: relative;
}
table * {
  position: relative;
}
table td, table th {
  padding-left: 8px;
}
table thead tr {
  height: 60px;
  background: #212325;
}
table tbody tr {
  height: 50px;
}
table tbody tr:last-child {
  border: 0;
}
table td, table th {
  text-align: left;
}
table td.l, table th.l {
  text-align: right;
}
table td.c, table th.c {
  text-align: center;
}
table td.r, table th.r {
  text-align: center;
}


.table100-head th{
  font-family: sans-serif;
  font-size: 18px;
  color: #fff;
  line-height: 1.2;
  font-weight: unset;
}

tbody tr:nth-child(even) {
  background-color: #f5f5f5;
}

tbody tr {
  font-family: sans-serif;
  font-size: 15px;
  color: #808080;
  line-height: 1.2;
  font-weight: unset;
}

tbody tr:hover {
  color: #555555;
  background-color: #f5f5f5;
  cursor: initial;
}

.column1 {
  width: 100px;
  text-align: center;
  padding-left:20px;
}

.column2 {
  width: 120px;
  text-align: center;
}

.column3 {
  width: 120px;
  text-align: center;
  
}

.column4 {
  width: 100px;
  text-align: center;
}

.column5 {
  width: 100px;
  text-align: center;
}

.column6 {
  width: 100px;
  text-align: center;
}
.column7 {
  width: 120px;
  text-align: center;
}
.column8 {
  width: 80px;
  text-align: center;
  padding-right:20px;
}
.column9 {
  width: 100px;
  text-align: center;
}
.column10 {
  width: 150px;
  text-align: center;
}
.column11 {
  width: 100px;
  text-align: center;
}
.column12 {
  width: 100px;
  text-align: center;
}
.column13 {
  width: 120px;
  text-align: center;
  padding-right:20px;
  
}

.confirm { 
      border: 0 !important;
      border-radius: 0.25em;
      background: initial;
      background-color: #3085d6;
      color: #fff;
      font-size: 1.0625em; }

@media screen and (max-width: 992px) {
  table {
    display: block;
  }
  table > *, table tr, table td, table th {
    display: block;
  }
  table thead {
    display: none;
  }
  table tbody tr {
    height: auto;
    padding: 37px 0;
  }
  table tbody tr td {
    padding-left: 40% !important;
    margin-bottom: 24px;
  }
  table tbody tr td:last-child {
    margin-bottom: 0;
  }
  table tbody tr td:before {
    font-family: sans-serif;
    font-size: 14px;
    color: #999999;
    line-height: 1.2;
    font-weight: unset;
    position: absolute;
    width: 40%;
    left: 30px;
    top: 0;
  }
  table tbody tr td:nth-child(1):before {
    content: "Date";
  }
  table tbody tr td:nth-child(2):before {
    content: "Order ID";
  }
  table tbody tr td:nth-child(3):before {
    content: "Name";
  }
  table tbody tr td:nth-child(4):before {
    content: "Price";
  }
  table tbody tr td:nth-child(5):before {
    content: "Quantity";
  }
  table tbody tr td:nth-child(6):before {
    content: "Total";
  }
  table tbody tr td:nth-child(7):before {
    content: "Total";
  }
  table tbody tr td:nth-child(8):before {
    content: "Total";
  }
  table tbody tr td:nth-child(9):before {
    content: "Total";
  }
  table tbody tr td:nth-child(10):before {
    content: "Total";
  }
  table tbody tr td:nth-child(11):before {
    content: "Total";
  }
  table tbody tr td:nth-child(12):before {
    content: "Total";
  }
  table tbody tr td:nth-child(13):before {
    content: "Total";
  }

  .column7,
  .column8,
  .column9,
  .column10,
  .column11,
  .column12,
  .column13
  .column4,
  .column5,
  .column6,
  .column1,
  .column2,
  .column3 {
    width: 100%;
  }

  tbody tr {
    font-size: 14px;
  }
}

@media (max-width: 576px) {
  .container-table100 {
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 15px;
  }


}
</style>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark probootstrap_navbar">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-menu" aria-controls="probootstrap-menu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="trading.php">Super Rich</a>
      <div class="collapse navbar-collapse" id="probootstrap-menu">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="BfTransaction.php">Transaction</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="BfStockOrder.php">Your Order</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="listbox" aria-expanded="true">
              <?php echo $_SESSION['username']; ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="BfAddAccount.php">Add Account</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="logout.php">Log out</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <script>
</script>

<script>
  if (<?php echo $_GET['pin']?> == 1)
    {
    swal({
    type: 'success',
    title: 'Success!<br>',
    showConfirmButton: false,
    timer: 1500
      })
    }
</script>
<script>
if (<?php echo $_GET['bank']?> == 1)
    {
    swal({
    type: 'success',
    title: 'Success!<br>',
    showConfirmButton: false,
    timer: 1500
      })
    }
</script>

<section class="boxeiei overflow-hidden relative" style="color:white; margin-top:0px;">
    <div class="probootstrap-animate">
        <div class="limiter">
		      <div class="container-table100">
			      <div class="wrap-table100">
				      <div class="table100">
					    <table>
              <?php
                /*header("Access-Control-Allow-Origin: *");
                header("Content-Type: application/json; charset=UTF-8");*/

                $con=mysqli_connect("localhost","root","","stock_trading");
                if (mysqli_connect_errno()){
                  echo "Failed to connect to MySQL:" . mysqli_connect_error();
                }
                $accId = mysqli_real_escape_string($con,$_GET['account']);
                $sql = "SELECT stLi.symbol,stLi.available_volume,stLi.actual_volume,std.last_price FROM user_stock_list stLi JOIN user_account_data ud ON stLi.user_account_id=ud.user_account_id
                  JOIN stock_data std ON std.stock_symbol=stLi.symbol
                  WHERE stLi.user_account_id = $accId";
                $result = mysqli_query($con,$sql);
                echo '<table align="center" width="80%">
                  <thead>
                    <tr class="table100-head">
                      <th class="column1">Symbol</th>
                      <th class="column2">Available Volume</th>
                      <th class="column3">Actual Volume</th>
                      <th class="column4">Mkt. Price</th>
                      <th class="column5">Avg. Cost</th>
                      <th class="column6">Amount(Price)</th>
                      <th class="column7">Market Value</th>
                      <th class="column8">History</th>
                    </tr>
                  </thead>
                  <tbody>';
                  $totalAmount=0;
                  $totalMarket=0;
                while($row = mysqli_fetch_array($result))
                {
                  echo '<tr>';
                  echo '<td class="column1">'.$row['symbol'].'</td>';
                  echo '<td class="column2">'.$row['available_volume'].'</td>';
                  echo '<td class="column3">'.$row['actual_volume'].'</td>';
                  echo '<td class="column4">'.$row['last_price'].'</td>';
                  $sql3 = "SELECT * FROM order_history h INNER JOIN stock_order o ON h.order_number = o.order_number WHERE o.symbol = '".$row['symbol']."' AND o.user_account_id = ".$accId." ;";
                  $history = mysqli_query($con,$sql3);
                  $symbol = $row['symbol'];
                  $sql2 = "SELECT order_price FROM stock_order
                    WHERE user_account_id=$accId AND order_type='buy' AND symbol='$symbol' HAVING MAX(order_number)";
                  $result2 = mysqli_query($con,$sql2);
                  $row2 = mysqli_fetch_array($result2);
                  echo '<td class="column5">'.$row2['order_price'].'</td>';
                  echo '<td class="column6">'.$row2['order_price']*$row['actual_volume'].'</td>';
                  echo '<td class="column7">'.$row['last_price']*$row['actual_volume'].'</td>';
                  echo '<td class="column8"><button title="Browse" id="b'.$row['symbol'].'"><img src="https://image.flaticon.com/icons/svg/214/214340.svg" alt="Success" height="25" width="25"></button></td>';
                  $totalAmount = $totalAmount+($row2['order_price']*$row['actual_volume']);
                  $totalMarket = $totalMarket+($row['last_price']*$row['actual_volume']);
                  echo '</tr>';
                  
                  $head = "<tr style="."background-color:#eaeaea;"."><th style="."padding-left:20px;"."><center>Type</center></th><th><center>Time</center></th><th style="."width:60px;"."><center>Price</center></th><th><center>Matched</center></th><th style="."padding-right:15px;"."><center>Cancelled</center></th></tr>";
                  $numrow = 0;
                  while ($row3 = mysqli_fetch_array($history)) 
                    {
                    $data[$numrow] = "<tr style="."background-color:white;><td><b><center>".$row3['order_type']."</center></b></td><td style="."padding-left:20px;".">".$row3['time_stamp']."</td><td><center>".$row3['matched_volume']."</center></td><td><center>".$row3['matched_price']."</center></td><td><center>".$row3['cancelled_volume']."</center></td></tr>";
                    //echo $numrow."isssss";
                    $numrow++;
                    }
                    $AmountOrder = mysqli_num_rows($history);
                    $a = '';
                    if ($numrow==0)
                      {
                      $a = "<tr><td colspan="."5"."><center>No History</center></td><tr>";
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
                    echo "<script>$('#b".$row['symbol']."').click(function(){
                      swal
                      ({
                        title: '<h1><b>Order History</b></h>',
                        html:
                          '<br><b>Symbol</b>: ".$row['symbol']."<br><br>'+
                          '<table>".$head.$a."</table>',
                      })
                    });
                    </script>";
                }
                echo '<tr><td colspan=5 style="text-align:right; font-weight:800;"><b>Total</b></td> <td class="column6">'.$totalAmount.'</td>';
                echo ' <td class="column7">'.$totalMarket.'</td></tr>';
                echo '</tbody></table>';
                //echo "hello";
              //  $output2=array('dataTable' => $output);
              mysqli_close($con);
              ?>
              </table>
				      </div>
			      </div>
		      </div>
        </div>
    </div>
  </div>
</section>

    <script src="assets/js/jquery.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>

    <script src="assets/js/bootstrap-datepicker.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>

    <script src="assets/js/select2.min.js"></script>

    <script src="assets/js/main.js"></script>

    <script src="assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- ============================================================================== -->
    <script src="TableOrder/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="TableOrder/vendor/bootstrap/js/popper.js"></script>
    <script src="TableOrder/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="TableOrder/vendor/select2/select2.min.js"></script>
    <script src="TableOrder/js/main.js"></script>
    <!-- ============================================================================== -->

    
</body>
</html>