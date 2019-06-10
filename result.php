<?php  
    #Calculating result here.........
    require_once('includes/config.php');
    require ('includes/session.php');
    // foreach($_POST['truanswer'] as $truanswer){
    //     echo $truanswer;
    // }
    $takeExam = $_SESSION['id'];
     // Getting student info
 
     $sql = "SELECT * FROM register
     INNER JOIN question ON question.class_id = register.department
     INNER JOIN subject ON subject.sub_id = question.subject_id
     WHERE register.id = $takeExam  
";
$selectquery = mysqli_query($con, $sql);
$fetchquery = mysqli_fetch_array($selectquery);


echo "Student id = ".$takeExam."<br>";
echo "Subject id = ".$fetchquery['subject_id']."<br>";
echo "Class id = ".$fetchquery['class_id']."<br>";

    
    
    $total = 0;
    $estimatedMark = 20;
    $checkstdResult = mysqli_query($con,"SELECT * FROM std_result WHERE id=$takeExam");
       $fetchstdResult = mysqli_fetch_array($checkstdResult);
    //    if( $fetchstdResult['student_id'] < 1){
        $insertquery = mysqli_query($con, "INSERT INTO std_result (student_id) VALUES('".$takeExam."')");    
    //    }
       
    if (is_object($_POST['questionId']) || is_array($_POST['questionId'])){
        foreach($_POST['questionId'] as $questionId){
            $option = $_POST['que_'.$questionId];
            $truAnswer = mysqli_query($con, "SELECT option1,option2,option3,option4,true_answer FROM question WHERE id = $questionId");
            $fetch = mysqli_fetch_array($truAnswer);
            // echo $fetch['option1']."<br>";
            // echo $fetch['option2']."<br>";
            // echo $fetch['option3']."<br>";
            // echo $fetch['option4']."<br>";
            // echo $fetch['true_answer']."<br>";
            $correctAnswer = $fetch['true_answer'];
            if($correctAnswer == $_POST['que_'.$questionId]){
                $total += $estimatedMark;
            }
        }
       # INSERT INTO STUDENT RESULT 
       $getSubjectDone = mysqli_query($con, "SELECT * FROM register WHERE id = $takeExam");
       $listAllSubjects = mysqli_fetch_array($getSubjectDone);
           $subject1 = $listAllSubjects['subject1'];
            $subject2 = $listAllSubjects['subject2'];
           $subject3 = $listAllSubjects['subject3'];
           $subject4 = $listAllSubjects['subject4'];
           $subject5 = $listAllSubjects['subject5'];
           $subject6 = $listAllSubjects['subject6'];
           $subject7 = $listAllSubjects['subject7'];
           $subject8 = $listAllSubjects['subject8'];
           $subject9 = $listAllSubjects['subject9'];
        echo $subject1 ."<br>";
        echo $subject2 ."<br>";
        echo $subject3 ."<br>";
        echo $subject4 ."<br>";
        echo $subject5 ."<br>";
        echo $subject6 ."<br>";
        echo $subject7 ."<br>";
        echo $subject8 ."<br>";
        echo $subject9 ."<br>";
           $selectSub = mysqli_query($con, "SELECT * FROM subject WHERE class_id = '".$fetchquery['class_id']."' AND sub_id = '".$fetchquery['sub_id']."'");
           $getExactSub = mysqli_fetch_array($selectSub);
           $exactSubName = $getExactSub['sub_name'];
        //    To place the subject score and name in the appropriate field in the database
           if($subject1 == $exactSubName){
            $updateScore = mysqli_query($con, "UPDATE std_result SET subject1 = '$exactSubName', subject1_score = '$total' WHERE student_id = '$takeExam' AND id > 0");
           }
           elseif ($subject2 == $exactSubName){
            $updateScore = mysqli_query($con, "UPDATE std_result SET subject2 = '$exactSubName', subject2_score = '$total' WHERE student_id ='$takeExam' AND id > 0 ");
           }
           else if ($subject3 == $exactSubName){
            $updateScore = mysqli_query($con, "UPDATE std_result SET subject3 = '$exactSubName', subject3_score = '$total' WHERE student_id ='$takeExam' AND id > 0 ");
           }
           else if ($subject4 == $exactSubName){
            $updateScore = mysqli_query($con, "UPDATE std_result SET subject4 = '$exactSubName', subject4_score = '$total' WHERE student_id ='$takeExam' AND id > 0 ");
           }
           else if ($subject5 == $exactSubName){
            $updateScore = mysqli_query($con, "UPDATE std_result SET subject5 = '$exactSubName', subject5_score = '$total' WHERE student_id ='$takeExam' AND id > 0 ");
           }
           else if ($subject6 == $exactSubName){
            $updateScore = mysqli_query($con, "UPDATE std_result SET subject6 = '$exactSubName', subject6_score = '$total' WHERE student_id ='$takeExam' AND id > 0 ");
           }
           else if ($subject7 == $exactSubName){
            $updateScore = mysqli_query($con, "UPDATE std_result SET subject7 = '$exactSubName', subject7_score = '$total' WHERE student_id ='$takeExam' AND id > 0 ");
           }
           else if ($subject8 == $exactSubName){
            $updateScore = mysqli_query($con, "UPDATE std_result SET subject8 = '$exactSubName', subject8_score = '$total' WHERE student_id ='$takeExam' AND id > 0 ");
           }
           else if ($subject9 == $exactSubName){
            $updateScore = mysqli_query($con, "UPDATE std_result SET subject9 = '$exactSubName', subject9_score = '$total' WHERE student_id ='$takeExam' AND id > 0 ");
           }
           else{
               return false;
           }
        
    }

   
  
























    // function getResult($question, $answer){
    //     foreach($_POST['questionId'] as $questionId){
    //         echo $_POST['que_'.$questionId]."<br>";
    //     }
    // }
    // foreach($_POST['questionId'] as $questionId){
    //     echo $_POST['que_'.$questionId];
    // }
    // foreach($_POST['truanswer'] as $truanswer){
    //     $truAnswer = mysqli_query($con, "SELECT * FROM question WHERE true_answer = $truanswer");
    //     // $fetchTruAnswer = mysqli_fetch_array($truAnswer);
    //     // echo $fetchTruAnswer['true_answer'];
    //     echo $truanswer;
    // }

    // foreach($_POST['questionId'] as $questionId){
        
           
    //         $FindAnswerQuery = mysqli_query($con, "SELECT * FROM question WHERE true_answer = $truanswer AND id = $questionId");
    //         $answer = mysqli_fetch_array($FindAnswerQuery);
    //         echo $answer['true_answer'];
    //         echo $_POST['que_'.$questionId];
    //             if($answer['true_answer'] == $_POST['que_'.$questionId]){
    //                 $score += $total;
    //             }
      
    // }

?>
<h1><?php echo $total; ?></h1>