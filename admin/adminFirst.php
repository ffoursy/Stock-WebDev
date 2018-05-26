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
  </head>
  <body>
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
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="listbox" aria-expanded="false">
                <?php echo $_SESSION['username'] ?>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" ar href="#">Add Account</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php">log out</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="probootstrap-cover overflow-hidden relative" >
        <div class="overlay"></div>
          <div class="container">
            <div class="row" style="padding-bottom:1em;">
              <div class="col-md">
                <h2 class="heading mb-2 display-4 font-light probootstrap-animate">Welcome to Super Rich</h2>
                <p class="lead mb-5 probootstrap-animate" style="font-size:30px;">Please choose your action</p>
              </div>
            </div>
            <div class="row" style="padding-top:0em; margin-top:0px;">
              <div class="col-md-3">
                <button type="button" class="btn btn-primary btn-block" onclick="afterClick()" >Personal Data</button>
              </div>
              <div class="col-md-2">
                <button type="button" class="btn btn-primary btn-block" onclick="afterClick2()" >Add stock</button>
              </div>
              <div class="col-md-2">
                <button type="button" class="btn btn-primary btn-block" onclick="afterClick3()" >Add market</button>
              </div>
            </div>
          </div>
      </div>
    <script>
      function afterClick()
      {
        window.location='adminPersonaldata.php';
      }
      function afterClick2()
      {
        window.location='adminStock.php';
      }
      function afterClick3()
      {
        window.location='adminMarket.php';
      }
    </script>
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
