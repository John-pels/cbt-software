 <?php
 session_start();
 include ('config.php');
    // $errorMessage = '';
         if(!empty($username) && !empty($password)){
        // if(isset($_POST['adminLogin'])){
          $username = addslashes($con,$_POST['username']);   
          $password = sha1($_POST['password']);
         
         
            $query = mysqli_query($con, "SELECT * FROM admin where Username = '$username' && Password= '$password'") or die (mysqli_error($con));
                $rows = mysqli_num_rows($query);
                $fetch = mysqli_fetch_array($query);
                 $userid = $fetch['id'];
                  $user = $fetch['Username'];

               if ($rows == 1) 
                {
                  $_SESSION['id'] = $userid;
                  $_SESSION['user'] = $userid;

                  echo "1";
                }

                else{
                   echo "2";
                  // header("Location: question_portal.php");
                }
          }
                
            // }
    ?>