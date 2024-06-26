<?php
    require_once 'dbcon.php';

    $userid = $_GET['id'];

    $qry = "DELETE FROM tbluser WHERE UserID =".$userid;

    $rel = $con->query($qry);

    if(!$rel){
        die("Not Deleted");
    }
    else{
        header("Location: view.php?msg=123");
    }
?>