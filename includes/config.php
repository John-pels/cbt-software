<?php 
    //Defining the constants
    define("servername", "localhost");    
    define("username", "root");    
    define("password", "");    
    define("dbname", "tri-exam");   
    
    $con = mysqli_connect(servername,username,password,dbname);
    if($con){
        // echo "Connection to the database is successful";
    } else{
        // echo "Error connecting to the database";
    }

?>
