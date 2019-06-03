    // Sweetalert function for end exam
 function ask(id){
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
    window.location="subjects.php?cid="+id;
})

} 
}); 


}
// End of sweet alert function for end examination



