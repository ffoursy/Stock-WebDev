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
        overflow-y:hidden !important;
        padding-right: 0px !important;
      }
    </style>

</head>

<body >
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark probootstrap_navbar">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-menu" aria-controls="probootstrap-menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand"style="font-size:20px; color: white;cursor:pointer" onclick="openNav()">&#9776;</a>
      <a class="navbar-brand" href="#">Super Rich</a>
      <div class="collapse navbar-collapse" id="probootstrap-menu">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="BfTransaction.php">Transaction</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="listbox" aria-expanded="false">
              <?php echo $_SESSION['username'] ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" ar href="BfAddAccount.php">Add Account</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="logout.php">log out</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>

    <div class="probootstrap-cover overflow-hidden relative" >
      <div class="container">
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
          <a href="#" style="font-size: 20px;">Services</a>
          <a href="#" style="font-size: 20px;">Contact</a>
        </div>
        <div class="overlay"></div>
        <h2>Animated Sidenav Example</h2>
        <p>Click on the element below to open the side navigation menu.</p>
        <p id="id01" style="color:white;"></p>

      </div>
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
         $('.btn-submenu').click(function(){
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
              url: "getProfile.php?account="+account,
              method:"POST",
              data:{account:account},
              dataType:"JSON",
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


  <!--<script src="assets/js/script.js"></script>-->
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
