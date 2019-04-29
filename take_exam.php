<?php require ('includes/config.php'); ?>
<?php require ('includes/session.php'); ?>
<?php include ('includes/header.php'); ?>

<div class="container-fluid">
<div id="loop">
        <div class="list-group">
                <div class="card">
                    <div class="card-header display-5">SUBJECT: ENGLISH LANGUAGE

                     <span id="countdown" class="float-right" style="color: green;">
                                 
                        <?php  
                            // Inserting student information into the timer
                            $takeExam = $_SESSION['id'];
                            $timei = date("h:i:s");
                            $selectTime = mysqli_query($con, "SELECT * FROM timer WHERE student_id ='$takeExam'");
                            $selectTimeRow = mysqli_num_rows($selectTime);
                            $fetchTime = mysqli_fetch_assoc($selectTime);

                            // Checking if the student Id exist in timer table
                            if ( $selectTimeRow > 0 ) {
                                // echo "<script> window.location='instruction.php'; </script>";
                            } 
                            // If it doesn't exist then insert into the timer table
                            else if ( $selectTimeRow <=0 ){
                                $insertTime = mysqli_query ($con, "INSERT INTO timer (student_id,timer) VALUES ('$takeExam', '$timei')");
                            }

                            ?>
                            <?php require ('includes/timer.php'); ?>
                           
                            
                    </span>
                    </div>
                    <div class="row">
                    <div class="col-sm-9">
                    <div class="card">
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
                    </div>
                   
                                
                    </div>
                    </div>
                    <div class="col-sm-3">
                    <div class="card">
                    <div class="card-body">
                    <div class="card-title card-title-bold text-center">Candidate's Bio-Data</div>
					<img src="images/Opi51c74d0125fd4.png" class="card-img-top img-thumbnail" alt="Steve Jobs" style="height:300px;"> 
                    <div class="card-title  badge badge-light" style="width: 100%;"><h4> AJEIGBE JOHN OLUWASEYI</h4></div>
							<p>Phone No.: +2348188974303</p>
							<p>Reg. No.: 71hgfbdg</p>
							<p>Department: Science </p>
							<p>Class: 100L</p>
						
					</div>                   
                    <button type="button" onClick="ask()" class="btn btn-danger float-right" >END EXAM</button>                                
                    </div>
                    </div>
                    </div>
                    
                    </div>
                   
                    <div class="card-footer">
                        <label class="badge badge-info p-3" >40 QUESTIONS</label>
                    </div>
                    
                   
                </div>
               
            </div>
            

           
            

                
            

        <div class="footer mt-3">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item" id="previous-page"></li>
                            
                        </ul>
                    </nav>
                    </div>
   </div>










<?php include ('includes/footer.php'); ?>
<script>
    // Sweetalert function for end exam
 function ask(){
    swal({
title: "Are you sure you want to end Exam?",
text: "Note that your score will be submitted immediately after you end exam",
icon: "warning",
buttons: true,
dangerMode: true,
})
.then((willDelete) => {
if (willDelete) {
swal({
title: "Exam Ended successfully",
text: "Click ok to proceed",
icon: "success",

    
}).then(function(){
    window.location="index.php";
})

} 
}); 


}
// End of sweet alert function for end examination


</script>

