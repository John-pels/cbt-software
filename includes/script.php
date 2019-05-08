<?php 
session_start();
include_once ('config.php');
include_once ('functions.php');
    
    // if(isset($_POST['login'])){
        $regNumber = mysqli_real_escape_string($con, addslashes($_POST['regNumber']));
        if (empty($regNumber)){
            echo "empty";

        } else{
            $sql = "SELECT * FROM register WHERE reg_no='$regNumber'";
             $query = mysqli_query($con, $sql) or die(mysqli_error($con));
             $countrow = mysqli_num_rows($query);
             $fetch = mysqli_fetch_array($query);
             $userid = $fetch['reg_id'];
                if ($countrow == 1){
                    $_SESSION['id'] = $userid;
                    // header("location: ./instruction.php");
                    echo "1";
        } else{
            echo "2";
            // header("location: ../index.php");
        }
        }

        
    // }
    
        
    

?>