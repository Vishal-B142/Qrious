<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="images/favicon.ico" />
<title>Qrious | About us</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="HostSpace template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/about.css">
<link rel="stylesheet" type="text/css" href="styles/about_responsive.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>

<style>
.caption{
text-align: center;
}
.column {
  float: left;
  width: 30%;
  padding: 5px;
}

/* Clear floats after image containers */
.row::after {
  content: "";
  clear: both;
  display: table;
  align="center";
}


</style>
<?php

    session_start();
    include_once 'includes/dbh.inc.php';
    define('TITLE',"About Us | Qrious");

    $companyName = "Franklin's Fine Dining";
    
    function strip_bad_chars( $input ){
        $output = preg_replace( "/[^a-zA-Z0-9_-]/", "", $input);  //pattern, replacement, subject
        return $output;
    }
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }
    
    include 'includes/HTML-head.php';
?> 
<div id="content" style="display: none" >
       
<?php include 'includes/navbar.php'; ?> 
<div class="super_container">

        <div id="content" style="display: none" >
           <?php include 'includes/navbar.php'; ?> 
        </div> 


    <!-- Team -->

    <div class="team">
        <div class="container">
            <div class="row">
                <div class="col text-center magic_fade_in">
                    <div class="section_title"><h2>Meet the Team</h2></div>
                </div>
            </div>
    


            <div class="row">
              <div class="column">
                <img src='img/Shivi.png' style="width:200px height:300px">
                  <center>
                    <caption class="caption">Shivangini Gugalia</caption><br>
                    <caption style="color:black;">Web Developer</caption>
                  </center>
              </div>
              <div class="column">
                <img src="img/Vishal.png" style="width:150px height:200px">
                <center>
                    <caption>Vishal B.</caption><br>
                    <caption>Web Developer</caption>
                </center>
              </div>
              <div class="column">
                <center>
                  <img src="img/Muskan.png" style="width:220px height:300px">
                  <caption>Muskan Kariwala</caption><br>
                  <caption>Web Developer</caption>
                </center>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>

  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="styles/bootstrap-4.1.2/popper.js"></script>
  <script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
  <script src="plugins/greensock/TweenMax.min.js"></script>
  <script src="plugins/greensock/TimelineMax.min.js"></script>
  <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
  <script src="plugins/greensock/animation.gsap.min.js"></script>
  <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
  <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
  <script src="plugins/easing/easing.js"></script>
  <script src="plugins/progressbar/progressbar.min.js"></script>
  <script src="plugins/parallax-js-master/parallax.min.js"></script>
  <script src="plugins/colorbox/jquery.colorbox-min.js"></script>
  <script src="js/about.js"></script>

</body>
</html>