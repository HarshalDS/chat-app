<?php

    include("db.php");

    ?>
    
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Chat App</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    html, body {
      height: 100%;
      margin: 0;
      display: flex;
      flex-direction: column;
    }

    .content {
      flex: 1;
      background: url('ooppp.png') no-repeat center center;
      background-size: cover;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      text-align: center;
    }

    #footer {
      background: #a187a8;
      color: white;
      text-align: center;
      padding: 10px 0;
      position: fixed;
      width: 100%;
      bottom: 0;
    }

    #footer a {
      color: #ffffff;
      text-decoration: none !important;
    }

    #footer ul.social li {
      padding: 3px 0;
      display: inline;
    }

    #footer ul.social li a i {
      margin-right: 5px;
      font-size: 25px;
      transition: .5s all ease;
    }

    #footer ul.social li:hover a i {
      font-size: 30px;
      margin-top: -10px;
    }

    .navbar-fixed-top {
      z-index: 1000;
    }

    .navbar-brand, .navbar-nav li a {
      line-height: 20px;
      height: 50px;
      padding-top: 15px;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">ChatApp</a>
      </div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="chat.html">Chat section</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="help.html">Help</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="registration.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="loginpage.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </nav>

  <div class="content">
    <img src="ooppp.png" alt="">
  </div>

  <section id="footer">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
          <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
          <p class="h6">2021 &copy; All Rights Reserved. <a class="text-green ml-2" href="#" target="_blank">ChatApp</a></p>
        </div>
      </div>
    </div>
  </section>
 
</body>

</html>
