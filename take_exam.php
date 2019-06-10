<?php require ('includes/config.php'); ?>
<?php require ('includes/session.php'); ?>
<?php require ('includes/functions.php'); ?>
<?php //require ('includes/loadQuestions.php'); ?>
<?php require ('includes/processQuestions.php'); ?>
<?php include ('includes/header.php'); ?>
                                                            
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

?>

<?php  
    $selectDuration = mysqli_query($con, "SELECT sub_duration FROM subject WHERE sub_id =$sesGetSubjectId  && class_id =$sesGetClassId");
    $fetchDuration = mysqli_fetch_assoc($selectDuration);
    $myDuration = $fetchDuration['sub_duration'];

?>

<?php
    # WORKING WITH TIME AND CHECKING IF THE USER HAS DONE A PARTICULAR SUBJECT BEFORE

    $takeExam = $_SESSION['id'];
    $timei = date("g:ia");
    $selectTime = mysqli_query($con, "SELECT * FROM dosubject WHERE dostd_id = $takeExam && doclass_id = $sesGetClassId && dosub_id = $sesGetSubjectId ");
    $selectTimeRow = mysqli_num_rows($selectTime);
    $fetchTime = mysqli_fetch_assoc($selectTime);

   // Checking if the student Id exist in timer table
    // if ( $selectTimeRow > 0 ) { // || $myDuration <=0
    //     // header("location: subjects.php?cid=$takeExam");
    //     echo "
    //             <script>  
    //             alert('You have taken this exam before and cannot take it again');
    //             window.location='subjects.php?cid='+$takeExam;
    //             </script>
    //     ";
        
    // }

    // // If it doesn't exist then insert into the timer table
    // else if ( $selectTimeRow <=0 ){
    //     $insertTime = mysqli_query ($con, "INSERT INTO dosubject (dostd_id, doclass_id, dosub_id, time, duration, istaken) VALUES ('$takeExam', '$sesGetClassId', '$sesGetSubjectId', CURRENT_TIMESTAMP, '$myDuration', '0')");
    // }

?>
<?php 
    #SELECTING TIMESTAMP FROM THE TIMER PAGE;
require ('includes/timer.php');
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
                        <form action="result.php" method="POST">
                            <div class="form-group">
                              A  <input type="radio" name="que_<?php echo $fetchquery['id']; ?>" id="firstanswer" class="ans" value="<?php echo $option1; ?>"> <label for="firstanswer"><?php echo $option1; ?></label>
                            </div>
                            <div class="form-group">
                              B <input type="radio" name="que_<?php echo $fetchquery['id']; ?>" id="secondanswer" class="ans" value="<?php echo $option2; ?>"> <label for="secondanswer"><?php echo $option2; ?></label>
                            </div>
                            <div class="form-group">
                             C  <input type="radio" name="que_<?php echo $fetchquery['id']; ?>" id="thirdanswer" class="ans" value="<?php echo $option3; ?>"> <label for="thirdanswer"><?php echo $option3; ?></label>
                            </div>
                            <div class="form-group">
                             D   <input type="radio" name="que_<?php echo $fetchquery['id']; ?>" id="fourthanswer" class="ans" value="<?php echo $option4; ?>"> <label for="fourthanswer"><?php echo $option4; ?></label>
                            </div>
                            
                            <input type="text" name="truanswer[]" id="truanswer" class="ans" value="<?php echo $TrueAnswer; ?>"> 
                            <input type="hidden" name="questionId[]" id="questionId" class="que" value="<?php echo $fetchquery['id']; ?>"> 
                            
                            
                            <nav aria-label="Page navigation example">
                                <ul class="paginate">
                                    <li title="Click to go to the previous page"><span class="previous"> <i class="fa fa-angle-left"></i></span></li>
                                    <li title="Click to go to the next page"><span class="next"><i class="fa fa-angle-right"></i></span></li>
                                </ul>
                                </nav>
                            
                    </div>
                   


                   
                                
                    <div class="card-footer">
                            <?php  
                                // Getting the number of question that the student is going to work on
                                $countQuestionNumber = mysqli_num_rows($selectquery);                     
                            ?>
                                    <label class="badge badge-info p-3" ><?php output($countQuestionNumber. " Questions"); ?></label>
                                    <!-- <button class="btn btn-success float-right" type="submit"  name="btn-result">SUBMIT ANSWER</button> -->
                     </div>
                </div>
                
                             <?php  endwhile; ?>  
                             <button class="btn btn-success float-right" type="submit"  name="btn-result">SUBMIT ANSWER</button> 
                             </form>
                </div>
                 </div>

                   
                            
                  <div class="col-sm-3">
                  <span class="" style="color: green;">TIME REMAINING: </span> <span id="countdown" class="display-5" style="color: green;"></span>
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

