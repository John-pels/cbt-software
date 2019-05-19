<?php require ('includes/config.php'); ?>
<?php require ('includes/session.php'); ?>
<?php require ('includes/functions.php'); ?>
<?php //require ('includes/loadQuestions.php'); ?>
<?php require ('includes/processQuestions.php'); ?>
<?php include ('includes/header.php'); ?>

<div class="container-fluid">
            
                <div class="row">
                     <div class="col-sm-9">
                     <div id="loop">
                             <div class="card list-group">
                        <div class="card-header display-5">SUBJECT: ENGLISH LANGUAGE

                     <span id="countdown" class="float-right" style="color: green;">
                                 
                            <?php require ('includes/getUserTime.php'); ?>
                            <?php require ('includes/timer.php'); ?>    
                    </span>
                     </div>

                    <div class="card-body p-5">
                        <div class="card-title card-title-bold">Question 1 <br>- What is the name of the Current Nigerian President?</div>
                        <form action="">
                            <div class="form-group">
                              A  <input type="checkbox" name="firstanswer" id="firstanswer" class="ans"> <label for="firstanswer">President Yaradua</label>
                            </div>
                            <div class="form-group">
                              B <input type="checkbox" name="secondanswer" id="secondanswer" class="ans" > <label for="secondanswer">President Muhammadu Buhari</label>
                            </div>
                            <div class="form-group">
                             C  <input type="checkbox" name="thirdanswer" id="thirdanswer" class="ans" > <label for="thirdanswer">President Goodluck Johnathan</label>
                            </div>
                            <div class="form-group">
                             D   <input type="checkbox" name="fourthanswer" id="fourthanswer" class="ans" > <label for="fourthanswer">President Olusegun Obasanjo</label>
                            </div>
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
                                $getQuestionNumber = mysqli_query($con, "SELECT * FROM register where reg_id='$takeExam'") or die(mysqli_error($con));
                                $countQuestionNumber = mysqli_num_rows($getQuestionNumber);                        
                            ?>
                                    <label class="badge badge-info p-3" ><?php output($countQuestionNumber. "  Available Questions"); ?></label>
                                    <button class="btn btn-success float-right" type="submit" onclick="submitAnswer();" >SUBMIT ANSWER</button>
                     </div>
                    
                </div>
                    
                         
                </div>


                 </div>

                   
            
                  <div class="col-sm-3">
                    <div class="card m-3">
                    <div class="card-body">
                    <?php include ('includes/fetchUserData.php'); ?>
                    <div class="card-title card-title-light text-center">Candidate's Bio-Data</div>
                    <img src="<?php output($fetchUserId['image']); ?>" class="card-img-top img-thumbnail ml-4" alt="<?php output($fetchUserId['first']. " " . $fetchUserId['last']); ?>" style="height:150px;width: 80% !important;"> 
                    <div class="card-title   badge-light" style="color: green;"><h4 class="text-center"><?php output($fetchUserId['first']. " " . $fetchUserId['last']); ?></h4></div>
                            <p style="color: gray;"> Phone Number<span  style="color: green; font-weight: bold; font-size: 0.8rem;">+2348188974303</span>   <br>
                            Reg. No: <span style="color: green; font-weight: bold; font-size: 0.8rem;"><?php output($regno); ?> </span>  <br>
                            Department: <span style="color: green; font-weight: bold; font-size: 0.8rem;"><?php output($dept); ?></span>  <br>
                            Class: <span style="color: green; font-weight: bold; font-size: 0.8rem;"><?php output($level); ?> </span>  <br>
                              </p>
                    </div>                   
                    <button type="button" onClick="ask()" class="btn btn-danger float-right" >END EXAM</button>                                
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