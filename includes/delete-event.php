<?php

session_start();

if (isset($_GET['id']) && isset($_SESSION['userId']))
{
    
    require 'dbh.inc.php';
    
    $event = $_GET['id'];
    
    $sql = "delete from event_info where event_id=?";
    $sql1 = "delete from events where event_id=?";
    $stmt = mysqli_stmt_init($conn);
    $stmt1 = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql) || !mysqli_stmt_prepare($stmt1, $sql1))
    {
        header("Location: ../events.php?error=sqlerror");
        exit();
    }
    else
    {
        mysqli_stmt_bind_param($stmt, 's', $event);
        mysqli_stmt_bind_param($stmt1, 's', $event);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_execute($stmt1);
        header("Location: ../events.php");
        exit();
    }
    
    
    mysqli_stmt_close($stmt);
    mysqli_stmt_close($stmt1);
    mysqli_close($conn);
    
}
else
{
    header("Location: ../".$page.".php");
    exit();
}