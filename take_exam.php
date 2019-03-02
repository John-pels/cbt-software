<?php include ('includes/header.php'); ?>

<div class="container">
<div id="loop">
        <div class="list-group">
                <div class="card">
                    <div class="card-header display-5">SUBJECT / ENGLISH 
                    <i class="fa fa-clock-o"></i> <span class="countdown">10</span>
                    <img src="images/Opi51c74d0125fd4.png" alt="steve jobs" class="img-thumbnail float-right rounded-circle" width="50" height="100"> </div>
                    
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
                                <ul class="paginate">
                                    <li title="Click to go to the previous page"><span class="previous"> <i class="fa fa-arrow-left"></i></span></li>
                                    <li title="Click to go to the next page"><span class="next"><i class="fa fa-arrow-right"></i></span></li>
                                </ul>
                                </nav>
                    </div>
                    <div class="card-footer">
                        <label class="badge badge-info p-3" >1 of 40 QUESTIONS</label>
                        <button type="button" onClick="ask()" class="btn btn-danger float-right" >END EXAM</button>
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

