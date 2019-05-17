<?php
    include_once ('config.php');
    include_once ('session.php');

    $_SESSION['id'] = array();
    session_destroy();
    unset($_SESSION['id']);
    header("location: ../admin/index.php");
    
    
?>
<<<<<<< HEAD
<?php
    // function AdminLogout($id){
    //     session_destroy();
    //     unset($_SESSION['$id']);
    //     header("location: ../admin/index.php");
    // }

?>
=======
>>>>>>> 99f8246340fe7f8093c51b8fde8c5f4cef565220
