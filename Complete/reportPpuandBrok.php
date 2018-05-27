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
      <!--Load the AJAX API-->
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
      <style>
        body {
          overflow-y:hidden !important;
          padding-right: 0px !important;
          /*background-color: #68838B;*/
          /*background-position: center  !important;*/
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
          align: center;
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
          /*border-radius: 20px;*/
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

        .column3{
          width:200px;
          text-align: center;
          align-items: center;
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
          <div class="col-md">
            <div class="limiter">
              <div class="container-table100">
                <div class="wrap-table100">
                  <div class="row">
                    <div class="col-md-12">
                      <h2 style="font-size:40px;"><b>Top 10 Most Expensive Avg. Price per unit</b></h2>
                    </div>
                  </div>
                  <br>
                  <div class="table100" id = "stockData">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="pieSum">
          </div>
        </div>
        <script type="text/javascript">

         // Load the Visualization API and the corechart package.
         google.charts.load('current', {'packages':['corechart']});

        </script>
        <script>
          $(document).ready(function(){
            $.ajax({
              url:"lreportPriceperunit.php",
              method:"POST",
              success:function(data){
                $('#stockData').html(data);
              }
            });

            $.ajax({
              url: "lreportBrok.php",
              method:"POST",
              success:function(data){
                $('#pieSum').html(data);
              }
            });
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
