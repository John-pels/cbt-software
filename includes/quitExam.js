
    // Sweetalert function for end exam
 function quitExam(){
    swal({
title: "Are you sure you want to quit the Exam?",
text: "Note that every unsaved data will be lost",
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
    window.location="includes/logout.php";
})

} 
}); 


}
// End of sweet alert function for end examination




