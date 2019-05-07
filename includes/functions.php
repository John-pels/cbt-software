<?php  
    // Creating a secure login for the user by adding the escape string function and then adding the addslashes
    
    function log_secure($post){
         $con = mysqli_connect('localhost', "root", "", "tri-exam");
        mysqli_real_escape_string($con, addslashes($_POST[$post]));
    }

    //Print function
    function output($value){
        echo $value."  ";
    }
    function outputTwo($val1,$val2){
        echo $val1 . "  ". $val2;
    }
?>