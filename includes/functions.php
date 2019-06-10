
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

    //Getting department that corresponds with number
    function getDepartment($value){
        switch ($value) {
            case '1':
                echo "Science";
                break;
            case '2':
                echo "Arts";
                break;
            case '3':
                echo "Commercial";
        }
    }

      # Creating a switch statement that determines the duration and the subject ID
      function getSubjectId($value){
        switch ($value) {
            case 'Physics':
                echo "1";
                break;
            case 'Chemistry':
                echo "2";
                break;
            case 'Biology':
                echo "3";
            break;
            case 'Mathematics':
            echo "4";
            break;
            case 'Further Mathematics':
            echo "5";
            break;
            case 'Use of English ':
            echo "6";
            break;
            case 'Agricultural Science':
            echo "7";
            break;
            case 'Geography':
            echo "8";
            break;
            case 'Economics':
            echo "9";
            break;
            case 'Government':
            echo "10";
            break;
            case 'I.R.S':
                echo "11";
            break;
            case 'C.R.S':
            echo "12";
            break;
            case 'Literature in English':
            echo "13";
            break;
            case 'Use of English':
            echo "14";
            break;
            case 'Mathematics':
            echo "15";
            break;
            case 'Account':
            echo "17";
            break;
            case 'Commerce':
            echo "18";
            break;
            case 'Government':
            echo "19";
            break;
            case 'Economics':
            echo "20";
            break;
            case 'Computer Studies':
            echo "23";
            break;
            case 'French Language':
            echo "26";
            break;
            case 'History':
            echo "27";
            break;
            case 'Fine and Applied Arts':
            echo "28";
            break;
            case 'Yoruba Language':
            echo "29";
            break;
            case 'Igbo Language':
            echo "32";
            break;
        }
    }

?>