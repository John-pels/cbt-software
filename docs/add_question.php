 <?php
include_once 'config.php';
include 'alert.php';
 ?>
 <?php
if (isset($_POST['btn-submit'])) {
	$classGroup = $_POST['classGroup'];
	$classSubject = $_POST['classSubject'];
        $questionDescription = strip_tags(htmlspecialchars($_POST['questionDescription']));
        $option1 = strip_tags(htmlspecialchars($_POST['option1']));
        $option2 = strip_tags(htmlspecialchars($_POST['option2']));
            $option3 = strip_tags(htmlspecialchars($_POST['option3']));
            $option4 = strip_tags(htmlspecialchars($_POST['option4']));
            $trueAnswer = strip_tags(htmlspecialchars($_POST['trueAnswer']));

	$query = mysqli_query($con,"INSERT into question (class_id,subject_id,question_desc,option1,option2,option3,option4,
    true_answer) VALUES ('$classGroup','$classSubject','$questionDescription','$option1','$option2','$option3','$option4','$trueAnswer')")
     or die(mysqli_error($con));
            if($query)
             {
                   	printf ('<script>alert.render("Question Uploaded!");
 					window.location = "../admin/question_portal.php";
 					</script>');
  }
  else
  {
    prinf ('<script>alert.render("Error in Uploading!");
 					window.location = "../admin/question_portal.php";
 					</script>');
  }
}
?>

<!-- For Adding of Administrator -->

<?php

if(isset($_POST['addAdmin'])){
  $username = addslashes($_POST['username']);
  $password = sha1($_POST['password']);
      $check = mysqli_query($con, " SELECT Username FROM admin");
      $row = mysqli_num_rows($check);
      while($verify = mysqli_fetch_array($check)){
      $existingUser = $verify['Username'];
      }
          if($existingUser === $username){
            echo ('<script>alert.render("Username already Exist!");
            window.location = "../admin/question_portal.php";
            </script>');
          }
          else {
            $insert_data = mysqli_query($con, "INSERT INTO admin (Username, Password) VALUES ('$username','$password')") or die(mysqli_error($con));
          if($insert_data){
            echo ('<script> alert.render("An admin added!");
            window.location = "../admin/question_portal.php";
            </script>');
          }
          else {
            echo ('<script> alert.render("Something went wrong, try again!");
            window.location = "../admin/question_portal.php";
            </script>');
          }
}
}
?>

<!-- For Administrator  Login-->
    <?php
    $errorMessage = '';

        if(isset($_POST['adminLogin'])){
          $username = addslashes($_POST['username']);   
          $password = sha1($_POST['password']);
                $query = mysqli_query($con, "SELECT * FROM admin where Username = '$username' && password= '$password'");
                $rows = mysqli_num_rows($query);
                $fetch = mysqli_fetch_array($query);
                if($rows === 1){
                  $_SESSION['id'] = $fetch['id'];
                  $_SESSION['username'] = $fetch['Username'];
                  header("Location: question_portal.php");
                }
                else {
                 $errorMessage =  "<div class='alert alert-danger'>Invalid Username or Password</div>";
                }
            }
    ?>