<?php
  session_start();
  function rand_float($st_num,$end_num,$mul=100)
  {
    if ($st_num>$end_num) return false;
    return mt_rand($st_num*$mul,$end_num*$mul)/$mul;
  }
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
      body {
        overflow-y:hidden !important;
        padding-right: 0px !important;
        /*background-color: #68838B;*/
        background-position: center  !important;
        background-repeat: repeat-y;
      }
      div.text{
        font-size:80%;
        color:rgb(160, 160, 160);
        line-height:1.5;
      }
      .footer{
        background:black;
        color:white;
        position:fixed;
        left:0;
        bottom:0;
        width:100%;
        text-align:center;
      }
      /*//////////////////////////////////////////////////////////////////
      [ FONT ]*/

      /*@font-face {
        font-family: OpenSans-Regular;
        src: url('../fonts/OpenSans/OpenSans-Regular.ttf');
      }*/

      /*//////////////////////////////////////////////////////////////////
      [ RESTYLE TAG ]*/
      * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
      }
      /*body, html {
        height: 100%;
        font-family: sans-serif;
      }*/

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
        border: none ;
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
      [ Table ]*/

      .limiter {
        width: 100%;
        margin: 0px auto;
        align-items: center;
      }

      .container-table100 {
        width: 100%;
        min-height: 50vh;
        /*background: #809da7;
        background: -webkit-linear-gradient(45deg, #3c5d63, #809da7);
        background: -o-linear-gradient(45deg, #3c5d63, #809da7);
        background: -moz-linear-gradient(45deg, #3c5d63, #809da7);*/
        /*background: linear-gradient(45deg, #3c5d63, #809da7);*/

        /*display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;*/
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
        margin:auto;
        position: relative;
        table-layout: auto;
      }

      table * {
        position: relative;
      }
      table td, table th {
        padding-left: 10px;
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
        font-size: 16px;
        color: #fff;
        line-height: 1.2;
        font-weight: unset;
      }

      tbody tr:nth-child(even) {
        background-color: #f5f5f5;
      }

      tbody tr {
        font-family: sans-serif;
        font-size: 14px;
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
        width: 100px;
        text-align: center;
      }
      .column14 {
        width: 100px;
        text-align: center;
      }
      .column15 {
        width: 120px;
        text-align: center;
        padding-right:20px;

      }

      @media screen and (max-width: 1080px) {
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
          /*font-family: sans-serif;*/
          font-size: 14px;
          color: #999999;
          line-height: 1.2;
          font-weight: unset;
          position: absolute;
          width: 40%;
          left: 30px;
          top: 0;
        }

        .column7,
        .column8,
        .column9,
        .column10,
        .column11,
        .column12,
        .column13,
        .column14,
        .column15,
        .column4,
        .column5,
        .column6,
        .column1,
        .column2,
        .column3 {
          width: 100%;
        }

        tbody tr {
          font-size: 13px;
        }
      }
    </style>
</head>

<body>
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
          <li class="nav-item">
              <a class="nav-link" data-target="#loginModal" data-toggle="modal" role="button" style="cursor:pointer;" >BUY/SELL</a>
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

    <?php
      date_default_timezone_set("Asia/Bangkok");
      $timestamp = date("Y-m-d h:i:sa");
      $_SESSION['timestamp']=$timestamp;
      if ($_SESSION['login']==0)
      header("location: first.php?wrongValue=0&wrongText=");
    ?>
    <section class="probootstrap-cover overflow-hidden static" >
      <div class="overlay"></div>
        <div class="container">
          <div class="col-md">
            <h2 class="heading mb-2 display-4 font-light" style="font-size:30px;"><b>Choose the market</b></h2>
          </div>
            <form class="form-inline" style="color:white; font-size:20px;">
              <div class="col-md-2">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="marketType" value="SET" onclick="fetchUser(this.value)" checked>SET</label>
              </div>
              <div class="col-md-2">
                <label class="form-check-label"><input class="form-check-input" type="radio" name="marketType" onclick="fetchUser(this.value)" value="MAI">mai</label>
              </div>
            </form>
            <!--<a data-target="#loginModal" data-toggle="modal" role="button" class="btn btn-primary p-3 mr-3 pl-5 pr-5 text-uppercase d-lg-inline d-md-inline d-sm-block d-block mb-3" style="color:white;">
              Show Popup Form
            </a>-->
            <p id="test">
            </p>

        </div>
        <!--<script>
          $(document).ready(function(){
            if($('input[name="marketType"]').is(':checked'))
            {
              var marketType = $('input[name="marketType"]:checked').val();
              //document.getElementById("marketType").value = marketType;
            }
            else {

            }
          });
        </script>-->
        <!--<input type="hidden" id="marketType">-->
        <!--<div class="probootstrap-animate">-->
        <div class="limiter">
          <div class="container-table100">
              <div class="wrap-table100">
                <div class="table100" id = "result">
                </div>
              </div>
            </div>
        </div>
        <div class="footer" id="marketData">

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
      </div>
      </section>

      <script>
        $(document).ready(function(){

          var marketType = $('input[name="marketType"]:checked').val();
          $.ajax({
            url:"loadData.php",
            method:"POST",
            data:{marketType:marketType},
            success:function(data){
                $('#result').html(data);
              }
            });
            $.ajax({
              url:"loadMarket.php",
              method:"POST",
              data:{marketType:marketType},
              success:function(data){
                  $('#marketData').html(data);
                }
              });
            setInterval(function(){
                var marketType = $('input[name="marketType"]:checked').val();
                $.ajax({
                  url:"updateStockdata.php",
                  method:"POST",
                  data:{marketType:marketType},
                  dataType: "text",
                  success:function(strMessage){
                    //document.getElementById("test").innerHTML = "hi";
                    //showtext();
                    //$('#test').text(strMessage);
                    //document.getElementById("test").innerHTML = stockArr[i];
                  }
                });
            },2000);
            setInterval(function(){
              var marketType = $('input[name="marketType"]:checked').val();
              $.ajax({
                url:"updateMarket.php",
                method:"POST",
                data:{marketType:marketType},
                dataType: "text",
                success:function(strMessage){
                  //document.getElementById("test").innerHTML = "hi";
                  //showtext();
                  //$('#test').text(strMessage);
                  //document.getElementById("test").innerHTML = stockArr[i];
                }
              });
            },2000);
            setInterval(function(){
              var marketType = $('input[name="marketType"]:checked').val();
              $.ajax({
                url:"loadData.php",
                method:"POST",
                data:{marketType:marketType},
                success:function(data){
                    $('#result').html(data);
                  }
                });
            },3000);
            setInterval(function(){
              var marketType = $('input[name="marketType"]:checked').val();
              $.ajax({
                url:"loadMarket.php",
                method:"POST",
                data:{marketType:marketType},
                success:function(data){
                    $('#marketData').html(data);
                  }
                });
            },3000);

        });
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
