<?php 
	session_start();
	if (!isset($_SESSION['id'])) {
        echo "<script> alert('You have to login in order to access this page'); 
                window.location=\"index.php\";
        </script>";
	}
 ?>
