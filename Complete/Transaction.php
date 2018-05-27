<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Transaction</title>
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
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <style>
      body{
        background: linear-gradient(45deg, #3eaaf7a1, #ffffff);
        height:1000px;
      }

      div.text{
        font-size:80%;
        color:rgb(160, 160, 160);
        line-height:1.5;
      }

      div.error{
        font-size:80%;
        color:red;
        line-height:1.5;
      }

    </style>
</head>
<body >
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark probootstrap_navbar">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-menu" aria-controls="probootstrap-menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand"style="font-size:20px; color: white;cursor:pointer" onclick="openNav()">&#9776;</a>
      <a class="navbar-brand" href="trading.php">Super Rich</a>
      <div class="collapse navbar-collapse" id="probootstrap-menu">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="trading.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="BfAddAccount.php">Add Account</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="BfTransaction.php">Transaction</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" data-target="#loginModal" data-toggle="modal" role="button" style="cursor:pointer;" >BUY/SELL</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="contact.php" >Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="listbox" aria-expanded="true">
              <?php echo $_SESSION['username']; ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="logout.php">Log out</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

<?php
  if ($_SESSION['login']==0)
  header("location: first.php?wrongValue=0&wrongText=");
?>

    <section class="probootstrap-cover overflow-hidden relative" style="margin-top:-70px;">
      <div class="overlay"></div>
      <div class="boxja" style="padding-top:0em;">
        <div class="container">
          <div class="row">
            <div class="col-md">
              <h1 class="heading mb-2 display-4 font-light probootstrap-animate" style="color: white;"><b>Transaction</b></h1>
            </div>
          </div>
          <div class="box">
            <div class="row align-items-center" style="padding:0;">
            <div class="col-md probootstrap-animate">
              <form action="add_transac.php" method="post" class="probootstrap-form" style="margin-top:-85px">
                <div class="form-group">
                  <div class="row mb-3">
                    <div class="col-sm">
                      <label for="accountn_label" class="col-sm-8 col-form-label"><b>Account of Transaction: </b></label>
                      <div class="col-sm-10">
                        <?php
                          $con=mysqli_connect("localhost","root","","stock_trading");
                          if (mysqli_connect_errno()){
                            echo "Failed to connect to MySQL:" . mysqli_connect_error();
                          }
                          $UserName = $_SESSION['username'];
                          $result = mysqli_query($con,"SELECT account_number FROM user_account_data WHERE Username = '$UserName'; /*WHERE Username = '*****Username******'*/"); // Run your query
                          echo '<form name="accountn_tran" required>';
                          echo '<select name="accountn_tran">';
                          while ($row = mysqli_fetch_array($result)) {
                            echo '<option value="'.$row['account_number'].'">'.$row['account_number'].'</option>';
                          }
                          echo '</select>';
                          echo '</form>';
                        ?>
                        </div>
                      <label for="transacType_label" class="col-sm-8 col-form-label"><b>Transaction Type: </b></label>
                      <div class="col-sm-10 form-inline">
                          <input type="radio" name="type_tran" value="deposit" checked>&nbsp;Deposit&emsp;&emsp;<br>
                          <input type="radio" name="type_tran" value="withdraw">&nbsp;Withdraw<br>
                        </div>
                      <label for="amount_label" class="col-sm-4 col-form-label"><b>Amount:</b></label>
                      <div class="col-md-5">
                        <input type="amount" class="form-control" pattern="[1-9]\d*" id="amount_label" placeholder="Amount" name="amount_tran" required>
                      </div>
                      <br><br>
                      <div class="col-md-8 text">Please enter your pincode of the account <br>in order to comfirm this transaction.</div>
                      <label for="pincode_label" class="col-sm-4 col-form-label"><b>Pincode:</b></label>
                      <div class="col-md-3">
                      <input type="password" class="form-control" pattern="[0-9]{4}" id="pincode_label" placeholder="XXXX" style="text-align: center" name="pincode_tran" required>
                      </div>
                      <?php
                      if ($_GET['wrongPin']==1) {
                        echo '<div class="col-md-8 error">'.$_GET['wrongPinError'].'</div>';
                      }
                      date_default_timezone_set("Asia/Bangkok");
                      $TimeStamp = date("Y-m-d h:i:sa");
                      ?>
                      <input type="hidden" id="timestamp_label" value="<?php echo $TimeStamp?>" name="timestamp_tran">
                      <input type="hidden" id="username_label" value="<?php echo $_SESSION['username']?>" name="username_tran">
                    </div>
                  </div>
                    <div class="row">
                      <div class="col-md-6 ml-auto mr-auto">
                        <br><button type="submit" style="width:230px; height:49px;"class="btn btn-primary btn-block" >CONFIRM</button>
                      </div>
                    </div>
                </div>
              </form>
          </div>
        </div>
      </div>
      <!--</div>-->
        <div class="modal fade" role="dialog" id="loginModal" >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title">Please fill in the form</h3>
                <button type="button" class="close" data-dismiss = "modal">&times</button>
              </div>
              <div class="modal-body">
                <form id="insert_form" method="post">
                  <label class="col-form-label" style="margin-left:30px;"><b>Account No. :
                    <?php
                      $con=mysqli_connect("localhost","root","","stock_trading");
                      if (mysqli_connect_errno()){
                        echo "Failed to connect to MySQL:" . mysqli_connect_error();
                      }
                      $Username = $_SESSION['username'];
                      $result = mysqli_query($con,"SELECT *
                        FROM personal_data p JOIN user_account_data ud ON ud.username= p.username
                        WHERE p.username='$Username'") or die("Error: ".mysqli_error($con));
                      echo '<select name="account" id="account">';
                      while ($row = mysqli_fetch_array($result)) {
                        echo '<option value="'.$row['account_number'].'">'.$row['account_number'].'</option>' ;
                      }
                      echo '</select>';
                    ?>
                  </b></label>
                  <br>
                  <div class="col-sm">
                    <label class="col-form-label" style="margin-left:12px;"><b>TYPE
                      <select name="optradio" id="optradio">
                        <option value="buy">BUY</option>
                        <option value="sell">SELL</option>
                      </select>
                    </b></label>
                  </div>
                  <div class="col-sm">
                    <div class="form-group">
                      <label for="stockSymbol" class="col-sm-6 col-form-label"><b>Stock symbol: </b></label>
                      <input type="text" name="stockSymbol" class="form-control" id="stockSymbol" placeholder="symbol">
                    </div>
                    <div class="form-group">
                      <label for="price" class="col-sm-6 col-form-label"><b>Price: </b></label>
                      <input type="text" name="price" class="form-control" id="price" placeholder="price">
                    </div>
                    <div class="form-group">
                      <label for="volume" class="col-sm-6 col-form-label"><b>Volume: </b></label>
                      <input type="text" name="volume" class="form-control" id="volume" placeholder="volume">
                    </div>
                    <div class="form-group">
                      <label for="pincode" class="col-sm-6 col-form-label"><b>PINCODE: </b></label>
                      <input type="password" name="pincode" class="form-control" id="pincode" pattern=".{4}" title="8 to 12 characters" placeholder="XXXX">
                      <span class="col-sm-10 col-form-label" id="submit_message" style="color:red;"></span>
                    </div>
                  </div>
                </div>
              <div class="modal-footer">
                <button type="submit" id="submit_btn" name="submit_btn" class="btn btn-primary" >Submit</button>
              </div>
            </form>
          </div>
        </div>
        </div>
        <!--end modal-->
    </div>
    </div>
      </section>


      <script src="assets/js/script.js"></script>
      <script src="assets/js/jquery.min.js"></script>

      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/owl.carousel.min.js"></script>

      <script src="assets/js/bootstrap-datepicker.js"></script>
      <script src="assets/js/jquery.waypoints.min.js"></script>
      <script src="assets/js/jquery.easing.1.3.js"></script>

      <script src="assets/js/select2.min.js"></script>

      <script src="assets/js/main.js"></script>
      <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
      <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
