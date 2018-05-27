<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Super Rich</title>
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

      <link rel="stylesheet" href="assets/css/helpers.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/sidebar.css">
      <style>
        body {
          background: linear-gradient(45deg, #3eaaf7a1, #ffffff);
          height: 768px;
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

      <section class="probootstrap-cover overflow-hidden relative" id="section-contact">
        <div class="overlay"></div>
        <div class="container">
          <div class="row align-items-center text-center">
              <div class="col-md-12 ">
              <h2 class="heading mb-2 display-4 font-light probootstrap-animate fadeInUp probootstrap-animated">Super Rich</h1>
              <p class="lead mb-5 probootstrap-animate fadeInUp probootstrap-animated">Get Wealth with Super Rich!</p>

              <div class="row justify-content-md-center">
                <div class="col-md-auto">
                  <ul class="probootstrap-contact-details">
                    <li style="color:white;">
                      <span class="text-uppercase" style="color:white;"><span class="ion-paper-airplane"></span> Email</span>
                      superRich.company@gmail.com
                    </li>
                    <li style="color:white;">
                      <span class="text-uppercase" style="color:white;"><span class="ion-ios-telephone"></span> Phone</span>
                      +66 2563 2104
                    </li>
                  </ul>
                </div>
                <div class="col-md-auto">
                  <ul class="probootstrap-contact-details">
                    <li style="color:white;">
                      <span class="text-uppercase" style="color:white;"><span class="ion-ios-telephone"></span> Fax</span>
                      +66 2563 2105
                    </li>
                    <li style="color:white;">
                      <span class="text-uppercase" style="color:white;"><span class="ion-location"></span> Address</span>
                      CPE, KMUTT <br>
                      10th Floor Red Building  <br>
                      Bangkok ,Thailand
                    </li>
                  </ul>
                </div>
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
        </section>
  </body>
</html>
