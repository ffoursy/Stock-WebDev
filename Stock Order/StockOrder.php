<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Order</title>
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
  width: 90%;
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
  width: 120px;
  text-align: center;
  padding-left:20px;
}

.column2 {
  width: 100px;
  text-align: center;
}

.column3 {
  width: 200px;
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
  width: 150px;
  text-align: center;
}
.column7 {
  width: 100px;
  text-align: center;
}
.column8 {
  width: 100px;
  text-align: center;
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
      <a class="navbar-brand"style="font-size:20px; color: white;cursor:pointer" onclick="openNav()">&#9776;</a>
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
<div id="mySidenav" class="sidenav ">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <!--<a href="#" style="font-size: 20px;">Dashboard</a>-->
      <!--<a class="nav-link collapsed" href="#submenu1" data-toggle="collapse" data-target="#submenu1">Dashboard</a>
        <div class="collapse" id="submenu1" aria-expanded="false">
          <ul class="flex-column pl-2 nav">
            <li class="nav-item"><a class="nav-link py-0" href="#">Orders</a></li>
          </ul>
        </div>
      </a>-->
      <a class="dropdown2-btn" style="cursor:pointer;">Your Account
        <i class="fa fa-caret-down"></i>
      </a>
      <div class="dropdown2-container">
        <?php
          $con=mysqli_connect("localhost","root","","stock_trading");
          if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL:" . mysqli_connect_error();
          }
          $Username = $_SESSION['username'];
          $result = mysqli_query($con,"SELECT ud.account_number
                  FROM personal_data p JOIN user_account_data ud ON p.username=ud.username
                  WHERE ud.username='$Username'") or die("Error: ".mysqli_error($con));
          $i=0;
          while ($row = mysqli_fetch_array($result)) {
            echo '<button type="button" class="btn-submenu" style="background-color: #262626; cursor:pointer;" id="account_btn'.$i.'" value="'.$row[0]. '">'.$row[0].'</button>';
            $i++;
          }
          mysqli_close($con);
        ?>
      </div>
      <a class="dropdown2-btn" style="cursor:pointer;">Your Order
        <i class="fa fa-caret-down"></i>
      </a>
      <div class="dropdown2-container">
        <?php
          $con=mysqli_connect("localhost","root","","stock_trading");
          if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL:" . mysqli_connect_error();
          }
          $Username = $_SESSION['username'];
          $result = mysqli_query($con,"SELECT ud.account_number
                  FROM personal_data p JOIN user_account_data ud ON p.username=ud.username
                  WHERE ud.username='$Username'") or die("Error: ".mysqli_error($con));
          $i=0;
          while ($row = mysqli_fetch_array($result)) {
            echo '<button type="button" class="btn-submenu2" style="background-color: #262626; cursor:pointer;" id="account_btn'.$i.'" value="'.$row[0]. '">'.$row[0].'</button>';
            $i++;
          }
          mysqli_close($con);
        ?>
      </div>
      <a href="#" style="font-size: 20px;">Services</a>
      <a href="#" style="font-size: 20px;">Contact</a>
    </div>
    <script>
      function openNav() {
        document.getElementById("mySidenav").style.width = "200px";
      }

      function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
      }
    
    </script>
    <script>
      /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
      var dropdown = document.getElementsByClassName("dropdown2-btn");
      var i;

      for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var dropdownContent = this.nextElementSibling;
          if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
          }
          else {
            dropdownContent.style.display = "block";
          }
        });
      }
      $(document).ready(function(){
         $('.btn-submenu2').click(function(){
           var photo_id = $(this).attr("id");
           var account = $(this).val();
           //$('#id01').html(testja);
        //for ( i = 0; i < $('.btn-submenu').length; i++) {
          //$('#account_btn'+i).click(function(){
            //  $('#id01').html(i);
            //$('#id01').html($('#account_btn'+i).val());
             //$('#id01').text('Japan');
             //var account = $('#account_btn'+i).val();
             //$('#id01').text('JA');

             $.ajax({
              url: "BfStockOrder.php?account="+account,
              method:"POST",
              data:{account:account},
              success:function(data)
              {
                $('#id01').html(data.Name);
                //$('#id01').text('Japan');
              }
            });
          });
        //}

      });
    </script>
    <!-- <script>
      /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
      var dropdown = document.getElementsByClassName("dropdown2-btn");
      var i;

      for (i = 0; i < dropdown.length; i++) {
        dropdown[i].addEventListener("click", function() {
          this.classList.toggle("active");
          var dropdownContent = this.nextElementSibling;
          if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
          }
          else {
            dropdownContent.style.display = "block";
          }
        });
      }
  </script> -->
<script>
  if (<?php echo $_GET['update']?> == 1)
    {
    swal('Update!','Your order has been updated.','success')
    }
</script>
<script>
if (<?php echo $_GET['cancel']?> == 1)
    {
    swal('Cancel!','Your order has been cancelled.','success')
    }
</script>
<section class="boxeiei overflow-hidden relative" style="margin-top:0px;">
    <div class="probootstrap-animate">
        <div class="limiter">
		      <div class="container-table100">
			      <div class="wrap-table100">
				      <div class="table100">
					    <table>
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
              </thead>
              <?php
              $con=mysqli_connect("localhost","root","","stock_trading");
                if (mysqli_connect_errno()){
                  echo "Failed to connect to MySQL:" . mysqli_connect_error();
                }
              
              $account_num = $_GET['account'];
              //echo $account_num;
              $getaccountid = mysqli_query($con,"SELECT user_account_id FROM user_account_data WHERE account_number = '$account_num';");
              $accountid = mysqli_fetch_array($getaccountid);
              //echo $accountid['user_account_id'];
              $result = mysqli_query($con,"SELECT * FROM stock_order WHERE user_account_id = ".$accountid['user_account_id'].";"); 
              $i = 1;
              while ($row = mysqli_fetch_array($result)) {
                $sqlcancel = "SELECT SUM(cancelled_volume) as 'TotalCancel' FROM order_history WHERE order_number = ".$row['order_number'].";";
                $resultcancel = mysqli_query($con,$sqlcancel);
                $cancelled = mysqli_fetch_array($resultcancel);
                $balanced = $row['order_volume']-$row['matched_volume']-$cancelled['TotalCancel'];
                echo "<tbody>";
                echo '<tr>
                        <td class="column1">'.$row['order_number'].'</td>
                        <td class="column2">'.$row['symbol'].'</td>
                        <td class="column3">'.$row['order_time'].'</td>
                        <td class="column4">'.$row['order_type'].'</td>
                        <td class="column5">'.$row['order_volume'].'</td>
                        <td class="column6">'.$row['order_price'].'</td>
                        <td class="column7">'.$row['matched_volume'].'</td>
                        <td class="column8">'.$balanced.'</td>
                        <td class="column9">'.$cancelled['TotalCancel'].'</td>
                        <td class="column10">'.$row['order_status'].'</td>
                        <td class="column11"><button title="Edit" id="e'.$i.'"><img src="https://image.flaticon.com/icons/svg/148/148987.svg" alt="Success" height="25" width="25"></button></td>
                        <td class="column12"><button title="Browse" id="b'.$i.'"><img src="https://image.flaticon.com/icons/svg/214/214340.svg" alt="Success" height="25" width="25"></button></td>
                        <td class="column13"><button title="Cancel" id="c'.$i.'"><img src="https://image.flaticon.com/icons/svg/148/148766.svg" alt="Success" height="25" width="25"></button></td>
                      </tr>';
                echo "<script>$('#e".$i."').click(function(){swal({
                        title: '<h1><b>Edit Order</b></h>',
                        html:
                          '<br><b>Symbol</b>: ".$row['symbol']."<br><br>'+
                          '<b>Type</b>: ".$row['order_type']."<br><br>'+
                          '<form action=","edit_order.php"." method="."post".">'+
                          '<input type="."hidden"." name="."editedNumber"." value=".$row['order_number']."><br>'+
                          'Volume: <br>'+
                          '<input type="."text"." class="."swal2-input"." pattern="."^[1-9][0-9]*$"." name="."editedVolume"." required><br>'+
                          'Price: <br>'+
                          '<input type="."text"." class="."swal2-input"." pattern="."^[1-9][0-9.]*$"." name="."editedPrice"." required><br>'+
                          '<button style="."background-color:#3085d6;"." class="."btn btn-primary btn-block"."type="."submit"." id="."result".">GO</button></form><br>',
                          showConfirmButton: false,
                        })});
                      </script>";

                $sql = "SELECT * FROM order_history WHERE order_number = ".$row['order_number'].";";
                $history = mysqli_query($con,$sql);
                $head = "<tr style="."background-color:#eaeaea;"."><th><center>Time</center></th><th><center>Price</center></th><th><center>Matched</center></th><th><center>Cancelled</center></th></tr>";
                $numrow = 0;
                while ($row2 = mysqli_fetch_array($history)) 
                  {
                  $data[$numrow] = "<tr style="."background-color:white;"."><td><center>".$row2['time_stamp']."</center></td><td><center>".$row2['matched_volume']."</center></td><td><center>".$row2['matched_price']."</center></td><td><center>".$row2['cancelled_volume']."</center></td></tr>";
                  //echo $numrow."isssss";
                  $numrow++;
                  }
                  //echo "row".$numrow;
                  $a = '';
                  $x=0;
                  if ($numrow==1)
                    {
                    $a = $data[0];
                    }
                  else 
                    {
                      while($x!=$numrow-1)
                      { 
                      $a = $data[$x].$data[$x+1];
                      $data[$x+1] = $a;
                      $x++;
                      }
                    }
                  echo "<script>$('#b".$i."').click(function(){
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
                  if (strcasecmp($row['order_status'],'Cancelled')!=0) {
                  echo "<script>$('#c".$i."').click(function(){swal({
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
                echo "</tbody>";
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