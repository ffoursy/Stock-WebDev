<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
  <title>Add Account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700" rel="stylesheet">
  <script src="/Users/symp/Desktop/sweetalert-test/node_modules/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="/Users/symp/Desktop/sweetalert-test/node_modules/sweetalert/dist/sweetalert.css">

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

    <style>
      body{
        background-color: #68838B;
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

<?php
  if ($_SESSION['login']==0)
  header("location: first.php?wrongValue=0&wrongText=");
?>

    <section class="boxja overflow-hidden relative" style="margin-top:-70px;">
        <div class="container">
          <div class="row">
            <div class="col-md">
              <h1 class="heading mb-2 display-4 font-light probootstrap-animate" style="color: white;"><b>Add New Account</b></h1>
            </div>
          </div>
          <div class="box">
            <div class="row align-items-center" style="padding:0;">
            <div class="col-md probootstrap-animate">
              <form action="confirm_account.php" method="post" class="probootstrap-form" style="margin-top:-85px">
                <div class="form-group">
                  <div class="row mb-3">
                    <div class="col-sm">
                      <center><a style=" color:rgb(160, 160, 160)">Please fill in your account information.</style></center><br>
                      <label for="accountn_label" class="col-sm-8 col-form-label"><b>Account Number: </b></label>
                      <div class="col-md-12">
                        <input type="accountn" class="form-control" pattern="[A-Z0-9]{8}" id="accountn_label" placeholder="ex. 1234ABCD" name="accountn_add" required>
                      </div>
                      <?php
                      if ($_GET['DuplicateAccount']==1) {
                        echo '<div class="col-md-8 error">'.$_GET['DuplicateError'].'</div>';
                      }
                      ?>
                      <label for="bankid_label" class="col-sm-8 col-form-label"><b>Bank Account Number: </b></label>
                      <div class="col-md-12">
                        <input type="bankn" class="form-control" pattern="[0-9]{10}" id="bankn_label" placeholder="XXX-X-XXXXX-X" name="bankn_add" required>
                      </div>
                      <label for="type_label" class="col-sm-8 col-form-label"><b>Account Type: </b></label>
                      <div class="col-sm-2">
                      <form name="type_add" required>
                        <select name="type_add">
                          <option value="balance">Cash Balance</option>
                          <option value="credit">Cash Credit</option>
                        </select>
                      </form>
                      </div>
                    <label for="pincode_label" class="col-md-10 col-form-label"><b>Broker:&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;Pincode:</b></label>
                    <div class="col-md-10 form-inline">
                      <input type="broker" class="form-control" pattern="[A-Z]{1,}" id="broker_label" placeholder="ex. ABC" style="width:90px; text-align: center" name="broker_add" required>  
                      &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;
                      <input type="pincode" class="form-control" pattern="[0-9]{4}"id="pincode_label" placeholder="XXXX" style="width:90px; text-align: center" name="pincode_add" required>
                    </div>
                    </div>
                  </div>
                    <div class="row">
                      <div class="col-md-6 ml-auto mr-auto">
                        <br><button type="submit" class="btn btn-primary btn-block" >SUBMIT</button>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
