<?php

    session_start();
    require 'includes/dbh.inc.php';
    
    define('TITLE',"Events | Qrious");
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }
    
    include 'includes/HTML-head.php';
?>  

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
  align: "center";
  height: 20px;
}

</style>
  <link rel="stylesheet" type="text/css" href="css/list-page.css">
    </head>



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/list-page.css">
    </head>
    
    <body style="background: #fff">

    <?php include 'includes/navbar.php'; ?>
   

    <main role="main" class="container">

  <div class="container p-3 my-3 main">
    <br>


<!-- The Team-->
<div class="team main"  style=" background-color: #fff">
        <div class="container">
            <div class="row">
                <div class="col text-center magic_fade_in">
                    <div class="section_title"><h2>Meet the Team</h2></div>
                </div>
            </div>
    


            <div class="row">
              <div class="column">
                <img src='img/Shivi1.png'  width="300" height="400">
                  <center>
                    <caption>Shivangini Gugalia</caption><br>
                    <!--<caption>Web Developer</caption>-->
                  </center>
              </div>
              <div class="column">
                <img src="img/Vishal1.jpg"  width="300" height="400">
                <center>
                    <caption>Vishal B.</caption><br>
                    <!--<caption>Web Developer</caption>-->
                </center>
              </div>
              <div class="column">
                <center>
                  <img src="img/Muskan1.png"  width="300" height="400">
                  <caption>Muskan Kariwala</caption><br>
                  <!--<caption>Web Developer</caption>-->
                </center>
              </div>
            </div> 
          </div>
        </div> 

            
    </main>
        
    <footer id="myFooter">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <a href= "" >Home</a>
            </div>
            <div class="col-sm">
                <a href= "" >About Us</a>
            </div>
            <div class="col-sm">
                <a href=""> Contact Us</a>
            </div>
        </div>
    </div>
</footer>
        
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    </body>
</html>


     <!-- Team -->

 <!--   <div class="team">
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
    </div> -->