
<?php  
    // Creating a secure login for the user by adding the escape string function and then adding the addslashes
    GLOBAL $con;
    GLOBAL $data;
    $con = mysqli_connect('localhost', "root", "", "tri-exam");
    function log_secure($post){
        mysqli_real_escape_string($con, addslashes($_POST[$post]));
    }

    //Print function
    function output($value){
        echo $value."  ";
    }
    function outputTwo($val1,$val2){
        echo $val1 . "  ". $val2;
    }

    //Getting Text from Instruction table
    function getAllInstruction(){
        GLOBAL $con;
        $con = mysqli_connect('localhost', "root", "", "tri-exam");
        return mysqli_query($con, "SELECT * FROM instruction ORDER BY id ASC");
    }
    

    //Fetching data
    function fetchData($data,$value){
        GLOBAL $data;
        return $data = mysqli_fetch_array($value);
    }
?>