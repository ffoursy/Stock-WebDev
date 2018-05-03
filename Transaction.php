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

    <style>
      body{
        background-color: #68838B;
      }

      div.text{
        font-size:80%;
        color:rgb(160, 160, 160);
        line-height:1.5;

      }

    </style>
</head>
<body >
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark probootstrap_navbar">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-menu" aria-controls="probootstrap-menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Super Rich</a>
      <div class="collapse navbar-collapse" id="probootstrap-menu">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#">Dashboard</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="listbox" aria-expanded="false">
              <?php echo $_SESSION['username'] ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" ar href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="logout.php">log out</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <section class="boxja overflow-hidden relative" style="margin-top:-70px;">
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
                          $result = mysqli_query($con,"SELECT account_number FROM user_account_data /*WHERE Username = '*****Username******'*/"); // Run your query
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
                        <input type="amount" class="form-control" id="amount_label" placeholder="Amount" name="amount_tran" required>
                      </div>
                      <br><br>
                      <div class="col-md-8 text">Please enter your pincode of the account <br>in order to comfirm this transaction.</div>
                      <label for="pincode_label" class="col-sm-4 col-form-label"><b>Pincode:</b></label>
                      <div class="col-md-3">
                        <input type="pincode" class="form-control" id="pincode_label" placeholder="XXXX" style="text-align: center" name="pincode_tran" required>
                      </div>

                      <div class="col-md-8 text">Please enter your pincode of the account <br>in order to comfirm this transaction.</div>
                      <label for="username_label" class="col-sm-4 col-form-label"><b>Username:</b></label>
                      <div class="col-md-6">
                        <input type="username" class="form-control" id="username_label" placeholder="Username" name="username_tran" required>
                      </div>


                    </div>
                  </div>
                    <div class="row">
                      <div class="col-md-6 ml-auto mr-auto">
                        <br><button type="submit" class="btn btn-primary btn-block" >CONFIRM</button>
                      </div>
                    </div>
                </div>
              </form>
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

</body>
</html>
