 
<!--
        <nav class="navbar sticky-top navbar-expand-md navbar-light bg-light">
            <a class="navbar-brand" href="index.php">
                <img src="img/200.png" width="40" height="40">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-right" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto mr-1">
                <li class="nav-item px-3">
                    <a class="nav-link" href="index.php">
                        <i class="fa fa-bar-chart fa-2x" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="https://github.com/msaad1999/KLiK--PHP-coded-Social-Media-Website">
                        <i class="fa fa-github fa-2x" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="message.php">
                        <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav-item px-3">
                    <a class="nav-link" href="users-view.php">
                        <i class="fa fa-users fa-2x" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="nav-item dropdown px-3">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-cog fa-2x" aria-hidden="true"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="profile.php">My Profile</a>
                    <a class="dropdown-item" href="edit-profile.php">Edit Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="users-view.php">Find People</a>
                    <a class="dropdown-item" href="contact.php">Contact Us</a>
                  </div>
                </li>
                <li class="nav-item px-3">
                  <a class="nav-link" href="includes/logout.inc.php">
                      <i class="fa fa-sign-out fa-2x" aria-hidden="true"></i>
                  </a>
                </li>
              </ul>
            </div>
        </nav> -->
        
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Qrious | Forum Blog Event Website</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/style.css">

    </head>
    
    <body>
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky" style="background: #3c4049">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.php" class="logo"><em> Qrious</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <!--<?php #echo "<pre>";print_r($_SERVER);echo "</pre>";?>-->
                            <li><a href="index.php" <?php if($_SERVER['REQUEST_URI'] == '/qrious1/index.php') echo "class='active'";?>>Home</a></li>
                            <li><a href="forum.php" <?php if($_SERVER['REQUEST_URI'] == '/qrious1/forum.php') echo "class='active'";?>>Forum</a></li>
                            <li><a href="Blogs.php" <?php if($_SERVER['REQUEST_URI'] == '/qrious1/Blogs.php') echo "class='active'";?>>Blog</a></li>
                            <li><a href="events.php" <?php if($_SERVER['REQUEST_URI'] == '/qrious1/events.php') echo "class='active'";?>>Event</a></li>
                            <li><a href="polls.php" <?php if($_SERVER['REQUEST_URI'] == '/qrious1/polls.php') echo "class='active'";?>>Poll</a></li>
                            <li class="nav-item px-3">
                                <a class="nav-link" href="message.php">
                                <i class="fa fa-envelope align-center fa-2x" aria-hidden="true" ></i> 
                                </a>
                            </li>
                            <!--<li><a href="">About Us</a></li> -->
                            <li>
                                <a href="includes/logout.inc.php">
                                <i class="fa fa-sign-out align-center fa-lg" aria-hidden="true"></i>
                                </a>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->



<script>
   /* $(window).scroll(function(){
  var sticky = $('.header-area header-sticky'),
      scroll = $(window).scrollTop();

  if (scroll >= 100) sticky.addClass('fixed');
  else sticky.removeClass('fixed');
});*/

    $(window).scroll(function(){
    $('nav').toggleClass('scrolled', $(this).scrollTop() > 50);
});
</script>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/mixitup.js"></script> 
    <script src="assets/js/accordions.js"></script>
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
  </body>
  </html>
     

