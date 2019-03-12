<?php  
    // Creating a secure login for the user by adding the escape string function and then adding the addslashes
    
    function log_secure($post){
         $con = mysqli_connect('localhost', "root", "", "tri-exam");
        mysqli_real_escape_string($con, addslashes($_POST[$post]));
    }
?>