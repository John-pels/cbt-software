 <?php
 session_start();
 include ('config.php');
    // $errorMessage = '';
         if($_SERVER['REQUEST_METHOD'] == "POST"){
        // if(isset($_POST['adminLogin'])){
          $username = addslashes($_POST['username']);   
          $password = sha1($_POST['password']);
         
         
            $query = mysqli_query($con, "SELECT * FROM admin where Username = '$username' && Password= '$password'") or die (mysqli_error($con));
                $rows = mysqli_num_rows($query);
                $fetch = mysqli_fetch_array($query);
                 $userid = $fetch['id'];
                  $user = $fetch['Username'];

               if ($rows == 1) 
                {
                  $_SESSION['id'] = $userid;
                  $_SESSION['username'] = $user;

                  echo "success";
                }

                else{
                   echo "error";
                  // header("Location: question_portal.php");
                }
          }
                
            // }
    ?>