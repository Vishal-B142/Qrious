<?php

    session_start();
    require 'includes/dbh.inc.php';
    
    define('TITLE',"Categories | Qrious");
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }
    
    include 'includes/HTML-head.php';
?>  

        
        <link rel="stylesheet" type="text/css" href="css/list-page.css">
    </head>
    
    <body style="background: #f1f1f1">

        <?php include 'includes/navbar.php'; ?>

    <section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x500.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Connect through <em>Forum</em></h2>
                        <p>Post or answer the questions</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

     

        <main role="main" class="container">
      <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm" style="background: #3c4049">
         <!--<img class="mr-3" src="img/QriousLogo3.png" alt="" width="48" height="48">-->
         
        <img class="mr-1" src="img/whitef1.png" alt="" width="130" height="80">
        <div class="lh-100">
          <h1 class="mb-0 text-white lh-100">Qrious Forums</h1>
          <p>For Inquistive Minds</p>
        </div>
      </div>

      <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h5 class="border-bottom border-gray pb-2 mb-0">All Categories</h5>
        
        
        <?php

            $sql = "select cat_id, cat_name, cat_description, (
                        select count(*) from topics
                        where topics.topic_cat = cat_id
                        ) as forums
                    from categories
                    order by cat_id asc";
            
            $stmt = mysqli_stmt_init($conn);    

            if (!mysqli_stmt_prepare($stmt, $sql))
            {
                die('SQL error');
            }
            else
            {
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);

                while ($row = mysqli_fetch_assoc($result))
                {
                    
                    echo '<a href="topics.php?cat='.$row['cat_id'].'">
                        <div class="media text-muted pt-3">
                            <img src="img/forum-cover3.png" alt="" class="mr-2 rounded div-img ">
                            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray ">
                              <strong class="d-block text-gray-dark">'.ucwords($row['cat_name']).'</strong></a>
                                  <br>'.$row['cat_description'].'
                            </p>
                            <span class="text-right text-primary"> 
                                Forums: '.$row['forums'].' <i class="fa fa-book" aria-hidden="true"></i><br>';
                    
                    if ($_SESSION['userLevel'] == 1)
                    {
                        echo '<a href="includes/delete-category.php?id='.$row['cat_id'].'&page=categories" >
                                <i class="fa fa-trash" aria-hidden="true" style="color: red;"></i>
                              </a>
                            </span>';
                    }
                    else
                    {
                        echo '</span>';
                    }
                    
                    echo '</div>';
                }
           }
           
           
            if ($_SESSION['userLevel'] == 1)
            {
                echo '<small class="d-block text-right mt-3">
                        <a href="create-category.php" class="btn btn-primary">Create Category</a>';
            }
            else
            {
                echo '<small class="d-block text-right mt-3">';
            }
        ?>
        
        
        </small>
        <small class="d-block text-center mt-3" >
            <a href="forum.php" class="btn btn-primary">Back</a>
        </small>
        
      </div>
    </main>

<footer id="myFooter">
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <a href= "index.php" >Home</a>
            </div>
            <div class="col-sm">
                <a href= "AboutUs.php" >About Us</a>
            </div>
        </div>
    </div>
</footer>
       
        
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>















<!-- ********************** -->

