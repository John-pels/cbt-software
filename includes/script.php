<?php 
// session_start();
include_once ('config.php');
    
    if(isset($_POST['login'])){
        $regNumber = mysqli_real_escape_string($con, addslashes($_POST['regNumber']));
        if (empty($regNumber)){
            $_SESSION['msg'] = "Input cannot be left empty";
            $_SESSION['msg_type'] = "danger";

        } else{
            $sql = "SELECT * FROM register WHERE reg_no='$regNumber'";
             $query = mysqli_query($con, $sql) or die(mysqli_error($con));
             $countrow = mysqli_num_rows($query);
             $fetch = mysqli_fetch_array($query);
             $userid = $fetch['reg_id'];
                if ($countrow == 1){
                    $_SESSION['id'] = $userid;
                    header("location: ./instruction.php");
        } else{
            $_SESSION['msg'] = "Invalid Email, Reg Number or matric number";
            $_SESSION['msg_type'] = "danger";
            header("location: ./index.php");
        }
        }

        
    }
    
        
    

?>