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
          height:768px;
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
          width: 150px;
          text-align: center;
        }
        .column8 {
          width: 150px;
          text-align: center;
        }
        .column9{
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

          .column7,
          .column8,
          .column9,
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
        <a class="navbar-brand" href="adminFirst.php">Super Rich</a>
        <div class="collapse navbar-collapse" id="probootstrap-menu">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="adminFirst.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="listbox" aria-expanded="false">
                <?php echo $_SESSION['username'] ?>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" ar style="cursor:pointer; font-weight:200; "onclick="updateHigh()">Update Highest Stock's Value</a>
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
                    <div class="col-md-6">
                      <h2 style="font-size:40px;"><b>Market</b></h2>
                    </div>
                  </div>
                  <div class="row">
                    <div class="ml-auto">
                      <a id="btn_add" data-target="#addMarketModal" data-toggle="modal" style="text-align:right; font-size:22px; color:white; padding-right: 1em;cursor:pointer;">
                        <i class="fa fa-plus-circle" style="font-size:22px"></i> <b>ADD</b>
                      </a>
                    </div>
                  </div>
                  <div class="table100" id = "marketData">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--add form-->
            <div class="modal fade" role="dialog" id="addMarketModal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h3 class="modal-title">Add Market Data</h3>
                    <button type="button" class="close" data-dismiss = "modal">&times</button>
                  </div>
                  <div class="modal-body">
                    <form id="addMarket_form" method="post">
                      <div class="col-md">
                        <div class="form-group">
                          <label for="Symbol" class="col-sm-6 col-form-label"><b>Symbol: </b></label>
                          <input type="text" name="symbol_data" class="form-control" id="symbol_data" >

                          <label for="Last" class="col-sm-6 col-form-label" ><b>Last: </b></label>
                          <input type="text" name="lastprice_data" class="form-control" id="lastprice_data">

                          <label for="High" class="col-sm-6 col-form-label"><b>High Index: </b></label>
                          <input type="text" name="highprice_data" class="form-control" id="highprice_data" >

                          <label for="Low" class="col-sm-6 col-form-label"><b>Low Index: </b></label>
                          <input type="text" name="lowprice_data" class="form-control" id="lowprice_data" >

                          <label for="MarketVol" class="col-sm-6 col-form-label"><b>Market Volume: </b></label>
                          <input type="text" name="marketvol_data" class="form-control" id="marketvol_data" >

                          <label for="MarketVal" class="col-sm-6 col-form-label"><b>Market Value: </b></label>
                          <input type="text" name="marketval_data" class="form-control" id="marketval_data" >

                          <label for="marketIncrease" class="col-sm-6 col-form-label"><b>Market Increase: </b></label>
                          <input type="text" name="increase_data" class="form-control" id="increase_data" >

                          <label for="marketEqual" class="col-sm-6 col-form-label" ><b>Market Equal: </b></label>
                          <input type="text" name="equal_data" class="form-control" id="equal_data" >

                          <label for="marketDecrease" class="col-sm-6 col-form-label" ><b>Market Decrease: </b></label>
                          <input type="text" name="decrease_data" class="form-control" id="decrease_data" >

                          <label for="prior" class="col-sm-6 col-form-label" ><b>Prior: </b></label>
                          <input type="text" name="prior_data" class="form-control" id="prior_data" >

                          <label for="status" class="col-sm-6 col-form-label" ><b>Status: </b></label>
                          <input type="text" name="status_data" class="form-control" id="status_data" >
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
          <!--end form-->
          <!--delete popup-->
          <div class="modal fade" role="dialog" id="deleteModal">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title">Delete</h3>
                  <button type="button" class="close" data-dismiss = "modal">&times</button>
                </div>
                <div class="modal-body">
                  <h3 for="direction" class="col-sm-12 col-form-label" style="text-align:center; font-size:26px;"><b>Are you sure you want to delete data?</b></h3>
                  <div class="col-md" style="text-align:center;">
                    <button type="submit" id="yes_btn" name="yes_btn" class="btn btn-primary btn-sm col-md-5" > YES </button>
                    <button type="submit" id="no_btn" name="no_btn" class="btn btn-danger btn-sm col-md-5" > NO </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--end popup-->
        </div>
        <?php
          date_default_timezone_set("Asia/Bangkok");
          $timestamp = date("Y-m-d h:i:sa");
          $_SESSION['timestamp']=$timestamp;
        ?>
        <script>
          var marketSym;
          $(document).on('click','#btn_delete',function(){
              marketSym=$(this).val();
            });
          $(document).on('click','#no_btn',function(){
            $('#deleteModal').hide();
            location.reload();
          });
          $(document).on('click','#yes_btn',function(){
            $.ajax({
              url:"deleteadminMarket.php?marketSym="+marketSym,
              method:"POST",
              success:function(data){
                if(data=="failed"){
                  alert("failed to delete data");
                }
                else {
                  $('#deleteModal').hide();
                  location.reload();
                }
              }
            });
          });
          $(document).ready(function(){
              $.ajax({
                url: "ladminMarket.php",
                method: "POST",
                success:function(data){
                  $('#marketData').html(data);
                }
              });
              $('#addMarket_form').on('submit',function(event){
                 event.preventDefault();
                 if($('#symbol_data').val()=="")
                 {
                   alert("Please fill in the form");
                 }
                 else if ($('#lastprice_data').val()=="") {
                   alert("Please fill in the form");
                 }
                 else if ($('#highprice_data').val()=="") {
                   alert("Please fill in the form");
                 }
                 else if ($('#lowprice_data').val()=="") {
                   alert("Please fill in the form");
                 }
                 else if ($('#marketvol_data').val()=="") {
                   alert("Please fill in the form");
                 }
                 else if ($('#marketval_data').val()=="") {
                   alert("Please fill in the form");
                 }
                 else if ($('#increase_data').val()=="") {
                   alert("Please fill in the form");
                 }
                 else if ($('#equal_data').val()=="") {
                   alert("Please fill in the form");
                 }
                 else if ($('#decrease_data').val()=="") {
                   alert("Please fill in the form");
                 }
                 else if ($('#prior_data').val()=="") {
                   alert("Please fill in the form");
                 }
                 else if ($('#status_data').val()=="") {
                   alert("Please fill in the form");
                 }
                 else {
                   $.ajax({
                     url:"insertMarket.php",
                     method:"POST",
                     data:$('#addMarket_form').serialize(),
                     success:function(data){
                        if(data=="failed"){
                          alert(data);
                          //alert("failed to insert data");
                        }
                        else {
                          alert(data);
                          $('#addStockModal').hide();
                          location.reload();
                        }
                      }
                    });
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
