<?php
  session_start();
?>
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
  <style>
    .test{
      opacity:0.7;
      width:100%;
      height:1500px;
      /*background-image: url(images/first_page.jpg) */
    }
  </style>
</head>

<body >
    <section class="probootstrap-cover overflow-hidden relative"  style="background-image: url('images/first_page.jpg');" data-stellar-background-ratio="0.5"  >
      <div class="overlay"></div>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md">
              <h2 class="heading mb-2 display-4 font-light probootstrap-animate">Welcome to<br> Super Rich</h2>
              <p class="lead mb-5 probootstrap-animate">Hope u like it! </p>
              <p class="probootstrap-animate">
                <a href="register.php" role="button" class="btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3">JOIN US</a>
              </p>
            </div>
            <div class="col-md probootstrap-animate">
              <form action="login.php" method="post" class="probootstrap-form">
                <?php
                  if ($_GET['wrongValue']==1) {
                    echo '<label style="color:red;">'.$_GET['wrongText'].'</label>';
                  }
                ?>
                <div class="form-group">
                  <div class="row mb-4">
                    <div class="col-sm">
                      <label for="username_label" class="col-sm-2 col-form-label"><b>Username: </b></label>
                      <div class="col-sm-10">
                        <input type="username" class="form-control" id="username_label" placeholder="username" name="username_log" required>
                      </div>
                      <label for="password_label" class="col-sm-2 col-form-label"><b>Password: </b></label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" pattern=".{8,12}" title="8 to 12 characters" id="password_label" placeholder="password" name="password_log" required>
                      </div>
                    </div>
                  </div>
                    <div class="row">
                      <div class="col-md-5 ml-auto">
                        <button type="submit" class="btn btn-primary btn-block" >LOG IN</button>
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
