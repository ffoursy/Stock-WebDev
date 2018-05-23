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
	border: none !important;
}

textarea {
  display: block;
  outline: none;
}

textarea:focus, input:focus {
  border-color: transparent !important;
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
[ Utiliti ]*/






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
  }
}

    </style>
</head>
<body >
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
                  <th class="column2">BTS</th>
                  <th class="column3">Time</th>
                  <th class="column4">Type</th>
                  <th class="column5">Volume</th>
                  <th class="column6">Price</th>
                  <th class="column7">Matched</th>
                  <th class="column8">Balanced</th>
                  <th class="column9">Cancelled</th>
                  <th class="column10">Status</th>
                  <th class="column11">Change</th>
                  <th class="column12">Detail</th>
                  <th class="column13">Cancel</th>
                </tr>
              </thead>
              <?php
              $con=mysqli_connect("localhost","root","","stock_trading");
                if (mysqli_connect_errno()){
                  echo "Failed to connect to MySQL:" . mysqli_connect_error();
                }
              $result = mysqli_query($con,"SELECT * FROM stock_order;");
              while ($row = mysqli_fetch_array($result)) {
                $balanced = $row['order_volume']-$row['temp_match'];
                echo "<tbody>";
                echo '<tr>
                        <td class="column1">'.$row['order_number'].'</td>
                        <td class="column2">'.$row['symbol'].'</td>
                        <td class="column3">'.$row['order_time'].'</td>
                        <td class="column4">'.$row['order_type'].'</td>
                        <td class="column5">'.$row['order_volume'].'</td>
                        <td class="column6">'.$row['order_price'].'</td>
                        <td class="column7">3'.$row['temp_match'].'</td>
                        <td class="column8">'.$balanced.'</td>
                        <td class="column9">none</td>
                        <td class="column10">'.$row['order_status'].'</td>
                        <td class="column11"><button><img src="https://image.flaticon.com/icons/svg/148/148987.svg" alt="Success" height="25" width="25"></button></td>
                        <td class="column12"><button><img src="https://image.flaticon.com/icons/svg/148/148928.svg" alt="Success" height="25" width="25"></button></td>
                        <td class="column13"><button><img src="https://image.flaticon.com/icons/svg/148/148766.svg" alt="Success" height="25" width="25"></button></td>
                      </tr>';
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
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