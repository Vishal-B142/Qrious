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

<?php

    session_start();
    include_once 'includes/dbh.inc.php';
    define('TITLE',"Dashboard| Qrious");

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
        <link href="css/list-page.css" rel="stylesheet">
        <link href="css/loader.css" rel="stylesheet">
    </head>
    
    <body onload="pageLoad()">
        
        <div id="loader-wrapper" class="js-preloader" style="background: black">
        <div class="preloader-inner" style="background: black">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>

        <!--<div id="loader-wrapper">
        <img src='img/QriousLogo.png' id='loader-logo'>
            <div class="loader">
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__bar"></div>
                <div class="loader__ball"></div>
            </div>
        </div> -->  <!-- loading ball  -->
        


        <div id="content" style="display: none" >
            
            <?php include 'includes/navbar.php'; ?> 

            <!-- ***** Main Banner Area Start ***** -->
            <div class="main-banner" id="top">
                <video autoplay muted loop id="bg-video">
                   <source src="assets/images/video.mp4" type="video/mp4" />
                </video>

                <div class="video-overlay header-text">
                    <div class="caption">
                    <h6>Share Your Thoughts</h6>
                    <h2>Forum<em> Blog </em>Events</h2>
                <!--<div class="main-button">
                    <a href="contact.html">Contact Us</a>
                </div>-->
                    </div>
                </div>
            </div>

    <!-- ***** Main Banner Area End ***** -->
            
            <div class="container-fluid" >
                <div class="row">
                    <div class="col-sm-3" >

                        <?php include 'includes/profile-card.php'; ?>

                    </div>  <!-- Profile Card -->

                    <div class="col-sm-9">

                        <div class="text-center p-3">
                            <!--<img src="img/QriousLogo2.png">-->
                            <h2 class='text-muted'>DASHBOARD</h2>
                            <br>
                        </div>


                        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist" >
                            <li class="nav-item">
                              <a class="nav-link active" id="forum-tab" data-toggle="tab" href="#forum" role="tab" 
                                 aria-controls="forum" aria-selected="true">Recent Forums</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="blog-tab" data-toggle="tab" href="#blog" role="tab" 
                                 aria-controls="blog" aria-selected="false">Recent Blogs</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="poll-tab" data-toggle="tab" href="#poll" role="tab" 
                                 aria-controls="poll" aria-selected="false">Recent Polls</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="event-tab" data-toggle="tab" href="#event" role="tab" 
                                 aria-controls="event" aria-selected="false">Recent Events</a>
                            </li>
                        </ul>
                        <br>

                        <div class="tab-content" id="myTabContent">

                            <div class="tab-pane fade show active" id="forum" role="tabpanel" aria-labelledby="forum-tab" >

                                <div class="d-flex align-items-center p-1 my-1 text-white-50 bg-purple rounded shadow-sm" style="background: #3c4049">
                                    <img class="mr-1" src="img/whitef1.png" alt="" width="130" height="80">
                                  <div class="lh-100">
                                    <h1 class="mb-0 text-white lh-100" >Latest Forums</h1>
                                  </div>
                                </div>  

                                    <div class="row mb-2">

                                    <?php
                                        $sql = "select topic_id, topic_subject, topic_date, topic_cat, topic_by, userImg, idUsers, uidUsers, cat_name, (
                                                    select sum(post_votes)
                                                    from posts
                                                    where post_topic = topic_id
                                                    ) as upvotes
                                                from topics, users, categories 
                                                where topics.topic_by = users.idUsers
                                                and topics.topic_cat = categories.cat_id
                                                order by topic_id desc, upvotes asc 
                                                LIMIT 6";
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
                                                echo '<div class="col-md-6">
                                                        <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                                                        <a href="posts.php?topic='.$row['topic_id'].'">
                                                        <img class="card-img-left flex-auto d-none d-lg-block blogindex-cover" 
                                                                src="img/forum-cover3.png" alt="Card image cap">
                                                                </a>
                                                          <div class="card-body d-flex flex-column align-items-start">
                                                            
                                                            <h6 class="mb-0">
                                                              <a class="text-dark" href="posts.php?topic='.$row['topic_id'].'">'
                                                                .substr(ucwords($row['topic_subject']),0,15).'...</a>
                                                            </h6>
                                                            <small class="mb-1 text-muted">'.date("F jS, Y", strtotime($row['topic_date'])).'</small>
                                                            <small class="card-text mb-auto">Created By: '.ucwords($row['uidUsers']).'</small>
                                                            <a href="posts.php?topic='.$row['topic_id'].'">Go To Forum</a>
                                                          </div>

                                                        </div>
                                                      </div>';
                                            }
                                        }
                                    ?>        


                                </div>

                            </div>

                             

<!--******** Recent Blogs ********-------->

<div class="tab-pane fade" id="blog" role="blog" aria-labelledby="blog-tab">

                                <div class="d-flex align-items-center p-1 my-1 text-white-50 bg-purple rounded shadow-sm" style="background: #3c4049">
                                    <img class="mr-1" src="img/whitef1.png" alt="" width="130" height="80">
                                  <div class="lh-100">
                                    <h1 class="mb-0 text-white lh-100">Latest Blogs</h1>
                                  </div>
                                </div>  

                                <div class="row mb-2">

                                    <?php
                                        $sql = "select * from Blogs, users 
                                                where blogs.blog_by = users.idUsers
                                                order by blog_id desc, blog_votes asc
                                                LIMIT 6";
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
                                                echo '<div class="col-md-6">
                                                        <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                                                          <div class="card-body d-flex flex-column align-items-start">
                                                            <strong class="d-inline-block mb-2 text-primary">
                                                                <i class="fa fa-thumbs-up" aria-hidden="true"></i> '.$row['blog_votes'].'
                                                            </strong>
                                                            <h6 class="mb-0">
                                                              <a class="text-dark" href="blog-page.php?id='.$row['blog_id'].'">'.substr($row['blog_title'],0,10).'...</a>
                                                            </h6>
                                                            <small class="mb-1 text-muted">'.date("F jS, Y", strtotime($row['blog_date'])).'</small>
                                                            <small class="card-text mb-auto">'.substr($row['blog_content'],0,40).'...</small>
                                                            <a href="blog-page.php?id='.$row['blog_id'].'">Continue reading</a>
                                                          </div>
                                                          <a href="blog-page.php?id='.$row['blog_id'].'">
                                                          <img class="card-img-right flex-auto d-none d-lg-block blogindex-cover" 
                                                                src="uploads/'.$row['blog_img'].'" alt="Card image cap">
                                                                    </a>
                                                        </div>
                                                      </div>';
                                            }
                                        }
                                    ?>        


                                </div>

                            </div>

                            <div class="tab-pane fade" id="poll" role="poll" aria-labelledby="poll-tab">

                                <div class="d-flex align-items-center p-1 my-1 text-white-50 bg-purple rounded shadow-sm" style="background: #3c4049">
                                    <img class="mr-1" src="img/whitef1.png" alt="" width="130" height="80">
                                  <div class="lh-100">
                                    <h1 class="mb-0 text-white lh-100">Latest Polls</h1>
                                  </div>
                                </div>  

                                <div class="my-3 p-3 bg-white rounded shadow-sm">

                                  <?php

                                    $sql = "select p.id, p.subject, p.created, p.poll_desc, p.locked, (
                                                select count(*) 
                                                from poll_votes v
                                                where v.poll_id = p.id
                                                ) as votes
                                            from polls p 
                                            order by votes desc
                                            LIMIT 5";

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

                                            echo '<a href="poll.php?poll='.$row['id'].'">
                                                <div class="media text-muted pt-3">
                                                    <img src="img/poll-cover.jpg" alt="" class="mr-2 rounded div-img poll-img">
                                                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray ">
                                                      <strong class="d-block text-gray-dark">'.ucwords($row['subject']).'</strong></a>
                                                          '.date("F jS, Y", strtotime($row['created'])).'
                                                           <br><br>
                                                           <span class="text-primary" >
                                                                '.$row['votes'].' User(s) have voted
                                                           </span>
                                                    </p>
                                                    <span class="text-right">';

                                            

                                            echo '</span>
                                                    </div>';
                                        }
                                   }
                                ?>

                                </div>    

                            </div>

                            <div class="tab-pane fade" id="event" role="event" aria-labelledby="event-tab">

                                <div class="d-flex align-items-center p-1 my-1 text-white-50 bg-purple rounded shadow-sm" style="background: #3c4049">
                                    <img class="mr-1" src="img/whitef1.png" alt="" width="130" height="80">
                                  <div class="lh-100">
                                    <h1 class="mb-0 text-white lh-100">Upcoming Events</h1>
                                  </div>
                                </div>  

                                <div class="my-3 p-3 bg-white rounded shadow-sm">

                                  <?php

                                    $sql = "select event_id, event_by, title, event_date, event_image
                                            from events
                                            where event_date > now()
                                            order by event_date asc
                                            LIMIT 5";
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
                                            $earlier = new DateTime(date("Y-m-d"));
                                            $later = new DateTime($row['event_date']);
                                            $diff = $later->diff($earlier)->format("%a");

                                            echo '<a href="event-page.php?id='.$row['event_id'].'">
                                                <div class="media text-muted pt-3">
                                                    <img src="uploads/'.$row['event_image'].'" alt="" class="mr-2 rounded div-img poll-img">
                                                    <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                                      <strong class="d-block text-gray-dark">'.ucwords($row['title']).'</strong></a>
                                                      '.date("F jS, Y", strtotime($row['event_date'])).'<br><br>
                                                      <span class="text-primary" >'.$diff.' days remaining </span>
                                                    </p>
                                                    <span class="text-primary text-right">';

                                            
                                            echo '</span>
                                                    </div>';
                                        }
                                   }
                                ?>

                                </div>    

                            </div>

                        </div>

                    </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<?php //include 'includes/footer.php'; ?>-->
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

</div>
        

        
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js" ></script>

<script>
    var myVar;
    function pageLoad() 
    {
        myVar = setTimeout(showPage, 4000);
    }
    function showPage() 
    {
        document.getElementById("loader-wrapper").style.display = "none";
        document.getElementById("content").style.display = "block";
    }

    
</script>  
        
</body>
</html>