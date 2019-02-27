<?php include ('includes/header.php'); ?>

<div class="container">




   <div id="loop">
        <div class="list-group">
                <div class="card">
                    <div class="card-header display-5">SUBJECT / ENGLISH <img src="images/Opi51c74d0125fd4.png" alt="steve jobs" class="img-thumbnail float-right rounded-circle" width="50" height="100"></div>
                    
                    <div class="card-body">
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
                        <ul class="pagination justify-content-left">
                            <li class="page-item" id="previous-page"><a class="page-link" href="javascript:void(0)">Previous</a></li>
                            
                        </ul>
                    </nav>
                    </div>
                    <div class="card-footer">
                        <button type="button" onClick="ask()" class="btn btn-danger" >END EXAM</button>
                        <button class="btn btn-info float-right" type="button">TOTAL: <span class="counter">40</span> QUESTIONS</button>
                    </div>
                   
                </div>
               
            </div>
            

                
            <div class="list-group">
                <div class="card">
                    <div class="card-header display-5">SUBJECT / ENGLISH</div>
                    <div class="card-body">
                        <div class="card-title card-title-bold">Question 2 <br>- The following except one is known as an adjectival clause</div>
                        <form action="">
                            <div class="form-group">
                              A  <input type="checkbox" name="firstanswer" id="firstanswer" > <label for="firstanswer">Lorem ipsum dolor sit amet.</label>
                            </div>
                            <div class="form-group">
                              B <input type="checkbox" name="secondanswer" id="secondanswer"> <label for="secondanswer">Lorem ipsum dolor sit amet.</label>
                            </div>
                            <div class="form-group">
                             C  <input type="checkbox" name="thirdanswer" id="thirdanswer"> <label for="thirdanswer">Lorem ipsum dolor sit amet.</label>
                            </div>
                            <div class="form-group">
                             D   <input type="checkbox" name="fourthanswer" id="fourthanswer"> <label for="fourthanswer">Lorem ipsum dolor sit amet.</label>
                            </div>
                        
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">SUBMIT QUESTION</button>
                        <button class="btn btn-info float-right" type="button">TOTAL: <span class="count">40</span> QUESTIONS</button>
                        <span class="ct">40</span>
                    </div>
                    
                   
                </div>
               
            </div>
            
        </div>
        </form>

        <div class="footer mt-3">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item" id="previous-page"><a class="page-link" href="javascript:void(0)">Previous</a></li>
                            
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
// End of sweet alert function for end exam


</script>

