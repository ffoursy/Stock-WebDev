<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
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
      <a class="navbar-brand" href="trading.php">Super Rich</a>
      <div class="collapse navbar-collapse" id="probootstrap-menu">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="beforeFirst.php">Home <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>


    <section class="probootstrap-cover overflow-hidden relative" style="margin-top:-70px;">
        <div class="container">
          <div class="row">
            <div class="col-md">
              <h1 class="heading mb-2 display-4 font-light probootstrap-animate" style="color: white;"><b>Register Form</b></h1>
            </div>
          </div>
            <div class="row align-items-center" style="padding:0;">
            <div class="col-md probootstrap-animate">
              <form action="insert_register.php" method="post" class="probootstrap-form" style="margin-top:-85px">
                <div class="form-group">
                  <div class="row mb-3">
                    <div class="col-sm">
                      <label for="name_label" class="col-sm-2 col-form-label"><b>Name: </b></label>
                      <div class="col-sm-10">
                        <input type="name" class="form-control" id="name_label" placeholder="name" name="name_regist" required>
                      </div>
                      <label for="surname_label" class="col-sm-2 col-form-label"><b>Surname: </b></label>
                      <div class="col-sm-10">
                        <input type="surname" class="form-control" id="surname_label" placeholder="surname" name="surname_regist" required>
                      </div>
                      <label for="username_label" class="col-sm-2 col-form-label"><b>Username: </b></label>
                      <div class="col-sm-10">
                        <input type="username" class="form-control" id="username_label" placeholder="username" name="username_regist" required>
                      </div>
                      <label for="password_label" class="col-sm-2 col-form-label"><b>Password: </b></label>
                      <div class="col-sm-10">
                        <input type="password" pattern=".{8,12}" title="8 to 12 characters" class="form-control" id="password_label" placeholder="password" name="password_regist" required>
                        <div class="text ">Please set password 8 to 12 characters</div>
                      </div>
                      <label for="email_label" class="col-sm-2 col-form-label"><b>E-mail: </b></label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="email_label" placeholder="email" name="email_regist" required>
                      </div>
                      <label for="phone_label" class="col-sm-10 col-form-label"><b>Phone number: </b></label>
                      <div class="col-sm-10">
                        <input type="phone no." class="form-control" id="phone_label" placeholder="phone no." name="phone_regist" required>
                      </div>
                    </div>
                  </div>
                    <div class="row">
                      <div class="col-md-3 ml-auto">
                        <button type="submit" class="btn btn-primary btn-block" >REGISTER</button>
                      </div>
                    </div>
                </div>
              </form>
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
