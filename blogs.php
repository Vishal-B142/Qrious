
<?php

    session_start();
    require 'includes/dbh.inc.php';
    
    define('TITLE',"Blogs | Qrious");
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }
    
    include 'includes/HTML-head.php';
    
?>  


         <!-- *** Blog Picture ***-->
    <section class="section section-bg main" id="call-to-action" style="background-image: url(assets/images/blog-image-1-940x460.jpg) ">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Express through<em> Blog</em> </h2>
                        <p>Let the thoughts flow</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


        <link rel="stylesheet" type="text/css" href="css/list-page.css">
    </head>

    <body style="background: #f1f1f1">

        <?php include 'includes/navbar.php'; ?>
        
        <main role="main" class="container">
            
      <main role="main" class="container">
      <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm" style="background: #3c4049">
          <img class="mr-3" src="img/whitef1.png" alt="" width="130" height="80">
        <div class="lh-100">
          <h1 class="mb-0 text-white lh-100">Qrious Blogs</h1>
          <small>For Inquisitive Minds</small>
        </div>
      </div>

     <!--  <div class="row mb-2"> -->
        <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h5 class="border-bottom border-gray pb-2 mb-0">All Blogs</h5>
          
                <?php
                    $sql = "select * from Blogs, users 
                            where blogs.blog_by = users.idUsers";
                    $stmt = mysqli_stmt_init($conn);    

                    if (!mysqli_stmt_prepare($stmt, $sql))
                    {
                        die('SQL error');
                    }
                    else
                    {
                        @mysqli_stmt_bind_param($stmt, "s", $userid);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);
                        
                         // src="uploads/'.$row['blog_img'].'" alt="Card image cap">                 
                        
                        while ($row = mysqli_fetch_assoc($result))
                        {
                            echo '<div class="col-md-6">
                                    <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                                      <div class="card-body d-flex flex-column align-items-start">
                                        <strong class="d-inline-block mb-2 text-primary">
                                            <i class="fa fa-thumbs-up" aria-hidden="true"></i> '.$row['blog_votes'].'
                                        </strong>
                                        <h3 class="mb-0">
                                          <a class="text-dark" href="blog-page.php?id='.$row['blog_id'].'">'.substr($row['blog_title'],0,10).'...</a>
                                        </h3>
                                        <div class="mb-1 text-muted">'.date("F jS, Y", strtotime($row['blog_date'])).'</div>
                                        <p class="card-text mb-auto">'.substr($row['blog_content'],0,70).'...</p>
                                        <a href="blog-page.php?id='.$row['blog_id'].'">Continue reading</a>
                                      </div>
                                      <img class="card-img-right flex-auto d-none d-lg-block bloglist-cover" 
                                       src="uploads/'.$row['blog_img'].'" alt="Card image cap">
                                    </div>
                                  </div>';
                        }

                    }
                ?>        
          
            <small class="d-block text-right mt-3">
                <a href="create-blog.php" class="btn btn-primary">Create a Blog</a>
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
