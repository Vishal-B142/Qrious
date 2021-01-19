<?php

    session_start();
    require 'includes/dbh.inc.php';
    
    define('TITLE',"Blog | Qrious");

    if(isset($_SESSION['views'])) 
      $_SESSION['views'] = $_SESSION['views']+1; 
    else
      $_SESSION['views']=1; 
      
 
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }
    
    if(isset($_GET['id']))
    {
        $blogId = $_GET['id'];
    }
    else
    {
        header("Location: index.php");
        exit();
    }
    
    include 'includes/HTML-head.php'; 
?> 
    </head>
    <body>

    <?php include 'includes/navbar.php'; ?>
      <div class="container main">
        <div class="row">
          <div class="col-sm-3">
            
              <?php include 'includes/profile-card.php'; ?>
              
          </div>
            
            
          <div class="col-sm-9" id="user-section">
              
                <?php

                    $sql = "select * from blogs, users 
                            where blog_id = ? 
                            and blogs.blog_by = users.idUsers";

                    $stmt = mysqli_stmt_init($conn);    

                    if (!mysqli_stmt_prepare($stmt, $sql))
                    {
                        die('SQL error');
                    }
                    else
                    {
                        mysqli_stmt_bind_param($stmt, "s", $blogId);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);

                        $row = mysqli_fetch_assoc($result);
                    }
                ?>
              
              <img class="blog-cover" src="uploads/<?php echo $row['blog_img']; ?>">
              
              <img class="blog-author main" src="uploads/<?php echo $row['userImg']; ?>">
              
              <div class="px-5">
                  
                  <br><br><br>
                  <h1><?php echo ucwords($row['blog_title']) ?></h1>
                  <br><br><br>

                  <!--<pre>-->
                    <p class="text-justify"><?php echo $row['blog_content'] ?></p>


                  <div class="blog-likes pr-1 pt-5">
                        <div class="container">
        <div class="row">
            <div class="col-sm">
                    <h3>
                    <img class="mr-3" src="img/view.png" alt="" width="60" height="60" >
                    <?php echo $_SESSION['views']; ?>
                    </h3>
</div>
              <div class="col-sm">
                <h3>
                            <a href="includes/blog-vote.inc.php?blog=<?php echo $row['blog_id']; ?>" >
                                <i class="fa fa-thumbs-up fa-2x" aria-hidden="true" ></i>
                            </a>  
                            <?php echo $row['blog_votes']; ?>
                      </h3>
                    </div>
                      <br>
                      <p class="text-muted">Author: <?php echo ucwords($row['uidUsers']); ?></p>
                  </div>
                </div>


                     <small class="d-block text-right mt-3">
                    <a href="blogs.php" class="btn btn-primary">Back</a>
                    </small>
            
                  
              </div>
              <!--</pre>-->
              
              
          </div>
            
        </div>
     


      </div> <!-- /container -->



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


