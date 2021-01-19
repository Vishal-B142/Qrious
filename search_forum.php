<?php

    session_start();
    require 'includes/dbh.inc.php';
    
    define('TITLE',"Forum Search | Qrious");
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }
    
    include 'includes/HTML-head.php';
?> 

    <link rel="stylesheet" type="text/css" href="css/list-page.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/list-page.css">
    </head>

<!-- *** Forum Picture ***-->
    <section class="section section-bg main" id="call-to-action"  style="background-image: url(assets/images/banner-image-1-1920x500.jpg) ">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Connect through <em>Forum</em></h2>
                        <p>Post and answer the questions</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <body style="background: #f1f1f1">

    <?php include 'includes/navbar.php'; ?>
  

 

<main role="main" class="container">

  <div class="container p-3 my-3 main">
    <br>

      <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm" style="background: #3c4049">
          <img class="mr-3" src="img/whitef1.png" alt="" width="130" height="80">
        <div class="lh-100">
          <h1 class="mb-0 text-white lh-100">Qrious Forums</h1>
          <small>For Inquisitive Minds</small>
        </div>
      </div>

    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h5 class="border-bottom border-gray pb-2 mb-0">Searched Forums</h5>
    
<?php

if (isset($_POST['s_name']) && isset($_SESSION['userId']))
{
    $s_name = $_POST['s_name'];
    
    //$sql = "Select * from events where title like '%{$title}%'";
    //$stmt = mysqli_stmt_init($conn);
    //<div class="my-3 p-3 bg-white rounded shadow-sm">
    //<h5 class="border-bottom border-gray pb-2 mb-0">All Events</h5>

 $sql = "select topic_id, topic_subject, topic_date, topic_cat, topic_by, userImg, idUsers, uidUsers, cat_name, (
                            select sum(post_votes)
                        from posts
                        where post_topic = topic_id
                        ) as upvotes
                    from topics, users, categories 
                    where topics.topic_by = users.idUsers
                    and topics.topic_cat = categories.cat_id
                    and topic_subject like '%{$s_name}%' 
                    order by upvotes desc, topic_id asc 
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
                    
                    echo '<a href="posts.php?topic='.$row['topic_id'].'">
                        <div class="media text-muted pt-3">
                            <img src="uploads/'.$row['userImg'].'" alt="" class="mr-2 rounded div-img">
                            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                              <strong class="d-block text-gray-dark">'.ucwords($row['topic_subject']).'</strong></a>
                              <span class="text-warning">'.ucwords($row['uidUsers']).'</span><br>
                              '.date("F jS, Y", strtotime($row['topic_date'])).'
                            </p>
                            <span class="text-primary text-center">
                                <i class="fa fa-chevron-up" aria-hidden="true"></i><br>
                                    '.$row['upvotes'].'<br>';
                    
                    if ($_SESSION['userLevel'] == 1 || $_SESSION['userId'] == $row['idUsers'])
                    {
                        echo '<a href="includes/delete-forum.php?id='.$row['topic_id'].'&page=forum" >
                                <i class="fa fa-trash" aria-hidden="true" style="color: red;"></i>
                              </a>
                            </span>';
                    }
                    else
                    {
                        echo '</span>';
                    }
                    echo '</span>
                            </div>';
                }
            }
           }
        ?>
        

        <small class="d-block text-right mt-3">
            <a href="forum.php" class="btn btn-primary">Back</a>
        </small>
      </div>
      </div>          
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


</main>



</body>
</html>