<?php

    session_start();
    require 'includes/dbh.inc.php';
    
    define('TITLE',"Event Search | Qrious");
    
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }
    
    include 'includes/HTML-head.php';
?> 

	<link rel="stylesheet" type="text/css" href="css/list-page.css">
    <head>

    <!-- *** Event Picture ***-->
    <section class="section section-bg main" id="call-to-action" style="background-image: url(assets/images/banner-image-1-1920x300.jpg) ">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>Socialize through <em>Event</em> </h2>
                        <p>Make any occasion unforgettable</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Warning: Use of undefined constant absolute - assumed 'absolute' (this will throw an Error in a future version of PHP) in C:\xampp\htdocs\Qrious1\event-page.php on line 69-->



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/list-page.css">
    </head>
    
    <body style="background: #f1f1f1">

    <?php include 'includes/navbar.php'; ?>
   

    <main role="main" class="container">

  <div class="container p-3 my-3 main">
    <br>

      <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm" style="background: #3c4049">
          <img class="mr-3" src="img/whitef1.png" alt="" width="130" height="80">
        <div class="lh-100">
          <h1 class="mb-0 text-white lh-100">Qrious Events</h1>
          <small>For Inquisitive Minds</small>
        </div>
      </div>

      <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h5 class="border-bottom border-gray pb-2 mb-0">Searched Events</h5>

<?php

if (isset($_POST['s_name']) && isset($_SESSION['userId']))
{
    $s_name = $_POST['s_name'];
    
    //$sql = "Select * from events where title like '%{$title}%'";
    //$stmt = mysqli_stmt_init($conn);
    //<div class="my-3 p-3 bg-white rounded shadow-sm">
    //<h5 class="border-bottom border-gray pb-2 mb-0">All Events</h5>

            $sql = "select event_id, event_by, title, event_date, event_image
                    from events where title like '%{$s_name}%' 
                    order by event_date desc";
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
                    if($earlier > $later)
                    {
                        $diff = '<span class="text-danger">Event Completed</span>';
                    }
                    else
                    {
                        $diff = $later->diff($earlier)->format("%a").' days remaining';
                    }
                    
                    echo '<a href="event-page.php?id='.$row['event_id'].'">
                        <div class="media text-muted pt-3">
                            <img src="uploads/'.$row['event_image'].'" alt="" class="mr-2 rounded div-img">
                            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                              <strong class="d-block text-gray-dark">'.ucwords($row['title']).'</strong></a>
                              '.date("F jS, Y", strtotime($row['event_date'])).'<br>
                              <span class="text-primary" >'.$diff.'</span>
                            </p>
                            <span class="text-primary text-right">';
                    
                    
                    echo '</span>
                            </div>';
                }
           }
       }
        ?>


        <small class="d-block text-right mt-3">
            <a href="events.php" class="btn btn-primary">Back</a>
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