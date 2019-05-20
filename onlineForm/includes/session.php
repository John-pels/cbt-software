<?php 
	session_start();
	if (!isset($_SESSION['id'])) {
        echo "<script> alert('You cannot access this page!'); 
                window.location=\"index.php\";
        </script>";
	}
 ?>
