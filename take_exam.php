<?php require ('includes/config.php'); ?>
<?php require ('includes/session.php'); ?>
<?php require ('includes/functions.php'); ?>
<?php //require ('includes/loadQuestions.php'); ?>
<?php require ('includes/processQuestions.php'); ?>
<?php include ('includes/header.php'); ?>


    <?php


    ?>
<?php 

    $takeExam = $_SESSION['id'];
    // Getting the class ID and the subject ID
    $getClassId = $_GET['cID'];
    $getSubjectId = $_GET['sID'];

    // Storing the GET ID in a session variable
    $_SESSION['getClassId'] = $getClassId;
    $_SESSION['getSubjectId'] = $getSubjectId;

    $sesGetClassId = $_SESSION['getClassId'];
    $sesGetSubjectId = $_SESSION['getSubjectId'];

    echo $sesGetClassId;
    echo $sesGetSubjectId;
    echo $takeExam;
?>
<?php require ('includes/timer.php'); ?>  
<?php
    # WORKING WITH TIME AND CHECKING IF THE USER HAS DONE A PARTICULAR SUBJECT BEFORE

    $takeExam = $_SESSION['id'];
    $timei = date("g:ia");
    $selectTime = mysqli_query($con, "SELECT * FROM dosubject WHERE std_id = $takeExam && class_id = $sesGetClassId && sub_id = $sesGetSubjectId ");
    $selectTimeRow = mysqli_num_rows($selectTime);
    $fetchTime = mysqli_fetch_assoc($selectTime);

    // Checking if the student Id exist in timer table
    if ( $selectTimeRow > 0 ) {
        header("location: subjects.php?cid=$takeExam");
        
    } 
    // If it doesn't exist then insert into the timer table
    else if ( $selectTimeRow <=0 ){
        $insertTime = mysqli_query ($con, "INSERT INTO dosubject (std_id, class_id, sub_id, time, sub_duration, istaken, status) VALUES ('$takeExam', '$sesGetClassId', '$sesGetSubjectId', CURRENT_TIMESTAMP, '$duration', '0', 'undone');");
    }

?>

<div class="container-fluid">
            
                <div class="row">
                     <div class="col-sm-9">
                     <div id="loop">
                            <?php
                            # SELECT FROM SUBJECT TABLE
                            $selectSubject = mysqli_query($con, "SELECT sub_name FROM subject WHERE sub_id=$sesGetSubjectId");
                            $fetchSubject = mysqli_fetch_array($selectSubject);
                            $subTitle = $fetchSubject['sub_name'];
                            $selectquery = mysqli_query($con, "SELECT * FROM question WHERE class_id=$sesGetClassId AND subject_id=$sesGetSubjectId") or die(mysqli_error());
                            $countNumber = 0;
                             while ($fetchquery = mysqli_fetch_array($selectquery)): 
                                $subjectId = $fetchquery['subject_id'];
                                # GETTING ALL THE QUESTIONS AND ANSWER FROM THE TABLE 
                                $QueTitle = $fetchquery['question_desc'];
                                $option1 = $fetchquery['option1'];
                                $option2 = $fetchquery['option2'];
                                $option3 = $fetchquery['option3'];
                                $option4 = $fetchquery['option4'];
                                $TrueAnswer = $fetchquery['true_answer'];
                                
                                ?>
                                    
                                     <div class="card list-group">
                        <div class="card-header display-5">SUBJECT: <?php output($subTitle);  ?>

                    
                     </div>

                    <div class="card-body  pl-5">
                        <div class="card-title card-title-bold">Question <?php echo $countNumber = $countNumber + 1; ?> <br> <?php echo $QueTitle; ?></div>
                        <form action="">
                            <div class="form-group">
                              A  <input type="checkbox" name="firstanswer" id="firstanswer" class="ans"> <label for="firstanswer"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-group">
                              B <input type="checkbox" name="secondanswer" id="secondanswer" class="ans" > <label for="secondanswer"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-group">
                             C  <input type="checkbox" name="thirdanswer" id="thirdanswer" class="ans" > <label for="thirdanswer"><?php echo $option3; ?></label>
                            </div>
                            <div class="form-group">
                             D   <input type="checkbox" name="fourthanswer" id="fourthanswer" class="ans" > <label for="fourthanswer"><?php echo $option4; ?></label>
                            </div>
                            <!-- <div class="form-group">
                            <input type="hidden" name="<?php echo $TrueAnswer; ?>" id="trueAnswer" value="<?php echo $TrueAnswer; ?>" > 
                            </div> -->
                            <nav aria-label="Page navigation example">
                                <ul class="paginate">
                                    <li title="Click to go to the previous page"><span class="previous"> <i class="fa fa-angle-left"></i></span></li>
                                    <li title="Click to go to the next page"><span class="next"><i class="fa fa-angle-right"></i></span></li>
                                </ul>
                                </nav>
                            </form>
                    </div>
                   


                   
                                
                    <div class="card-footer">
                            <?php  
                                // Getting the number of question that the student is going to work on
                                $countQuestionNumber = mysqli_num_rows($selectquery);                     
                            ?>
                                    <label class="badge badge-info p-3" ><?php output($countQuestionNumber. " Questions"); ?></label>
                                    <button class="btn btn-success float-right" type="submit" onclick="submitAnswer();" >SUBMIT ANSWER</button>
                     </div>
                    
                </div>


                             <?php  endwhile; ?>
                    
                    
                         
                </div>




                 </div>

                   
                            
                  <div class="col-sm-3">
                  <span class="" style="color: green;">TIME SPENT: </span> <span id="countdown" class="display-5" style="color: green;"></span>
                    <div class="card m-3">
                    <div class="card-body">
                    
                    <?php include ('includes/fetchUserData.php'); ?>
                    <div class="card-title card-title-light text-center">Candidate's Bio-Data</div>
                    <img src="<?php echo str_replace('../', 'onlineForm/',$image); ?>" class="card-img-top img-thumbnail ml-4" alt="<?php output($fetchUserId['surname']. " " . $fetchUserId['otherNames']); ?>" style="height:150px;width: 80% !important;"> 
                    <div class="card-title   badge-light" style="color: green;"><h6 class="text-center"><?php output($fetchUserId['surname']. " " . $fetchUserId['otherNames']); ?></h6></div>
                            <p style="color: gray;"> Phone No.<span  style="color: green; font-weight: bold; font-size: 0.8rem;">+2348188974303</span>   <br>
                            Reg. No: <span style="color: green; font-weight: bold; font-size: 0.8rem;"><?php output($regno); ?> </span>  <br>
                            Department: <span style="color: green; font-weight: bold; font-size: 0.8rem;"><?php getDepartment($dept); ?></span>  <br>
                            Class: <span style="color: green; font-weight: bold; font-size: 0.8rem;"><?php output($level); ?> </span>  <br>
                              </p>
                    </div>    
                    <input type="hidden" name="<?php echo $takeExam; ?>" id="takeExam" value="<?php echo $takeExam; ?>">
                    <button type="button" onClick="ask($takeExam)" class="btn btn-danger float-right" >END EXAM</button>                                
                    </div>
                    </div>
                </div>
            
            

           
            

                
            

        <div class="footer mt-3 d-flex col-sm-9 pt-10" style="overflow-x:scroll;">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item" id="previous-page"></li>
                            
                        </ul>
                    </nav>
                    </div>
   </div>










<?php include ('includes/footer.php'); ?>
<script src="includes/endExam.js"></script>
<script>
    $takeExam = $("#takeExam").val();
</script>