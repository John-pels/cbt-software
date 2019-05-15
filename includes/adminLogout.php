<?php
    include_once ('config.php');
    include_once ('session.php');

    $_SESSION['id'] = array();
    session_destroy();
    unset($_SESSION['id']);
    header("location: ../admin/index.php");
    
    
?>
