
const examNumbers = $("#loop .list-group").length;
const limitPerPage = 1;
// gt - It works mostly with figures, GT passed here is used to determine the number of figures to display
$("#loop .list-group:gt("+  (limitPerPage - 1) + ")").hide();

// Dividing the TOTAL NUMBER OF ITEMS / the LIMIT SET
const totalPages = Math.round(examNumbers / limitPerPage);
$(".pagination").append("<li class='page-item current-page active'><a class='page-link' href='javascript:void(0)'>"+ 1 +"</a></li>");

for(let i = 2; i <= totalPages; i++){
    $(".pagination").append("<li class='page-item current-page'><a class='page-link' href='javascript:void(0)'>"+ i +"</a></li>");

}
$(".pagination").append("<li class='page-item' id='next-page'></li>");

// Adding functionalities to the pages on click
$(".pagination li.current-page").on("click", function() {
        //Checking if the list item has the active class - 
        //if it has then don't perform the function else
        // perform the functions
        if($(this).hasClass("active")){
            return false;
        } else{
            const currentPage = $(this).index();
            $(".pagination li").removeClass("active");
            $(this).addClass("active");
            $("#loop .list-group").hide();

           //     1         2         3           4
           // 0 1 2 3 | 4 5 6 7 | 8 9 10 11 | 12 13 14 15 
           //Performing some maths below to determine the number of pages to show per user click
           const grandTotal = limitPerPage * currentPage;
                        //8 - 4 = 4
           for(let i = grandTotal - limitPerPage; i < grandTotal; i++){
               $("#loop .list-group:eq(" + i + ")").show();
           }
        }

   });

//    Adding functions to the nextpage button
   $("#next-page").on("click", function (){
        let currentPage = $(".pagination li.active").index();
        if(currentPage === totalPages){
            return false;
        } else{
            currentPage++; //Increment the pages by one when it is clicked
            $(".pagination li").removeClass("active");
            $("#loop .list-group").hide();

            const grandTotal = limitPerPage * currentPage;
           for(let i = grandTotal - limitPerPage; i < grandTotal; i++){
               $("#loop .list-group:eq(" + i + ")").show();
           }
           $(".pagination li.current-page:eq(" + (currentPage - 1) +")").addClass("active");

        }
   });
//    End of nextpage buton functionalities


//    Adding functions to the previouspage button
$("#previous-page").on("click", function (){
    let currentPage = $(".pagination li.active").index();
    if(currentPage === 1){
        return false;
    } else{
        currentPage--; //Increment the pages by one when it is clicked
        $(".pagination li").removeClass("active");
        $("#loop .list-group").hide();

        const grandTotal = limitPerPage * currentPage;
       for(let i = grandTotal - limitPerPage; i < grandTotal; i++){
           $("#loop .list-group:eq(" + i + ")").show();
       }
       $(".pagination li.current-page:eq(" + (currentPage - 1) +")").addClass("active");

    }
});
//    End of previouspage buton functionalities

//Adding functionalities to the next and previous button in the container
//The next button
$(".next").on("click", function (){
    let currentPage = $(".pagination li.active").index();
    if(currentPage === totalPages){
        return false;
    } else{
        currentPage++; //Increment the pages by one when it is clicked
        $(".pagination li").removeClass("active");
        $("#loop .list-group").hide();

        const grandTotal = limitPerPage * currentPage;
       for(let i = grandTotal - limitPerPage; i < grandTotal; i++){
           $("#loop .list-group:eq(" + i + ")").show();
       }
       $(".pagination li.current-page:eq(" + (currentPage - 1) +")").addClass("active");

    }
});
//End of the next button
    // The Previous button
    $(".previous").on("click", function (){
        let currentPage = $(".pagination li.active").index();
        if(currentPage === 1){
            return false;
        } else{
            currentPage--; //Increment the pages by one when it is clicked
            $(".pagination li").removeClass("active");
            $("#loop .list-group").hide();
    
            const grandTotal = limitPerPage * currentPage;
           for(let i = grandTotal - limitPerPage; i < grandTotal; i++){
               $("#loop .list-group:eq(" + i + ")").show();
           }
           $(".pagination li.current-page:eq(" + (currentPage - 1) +")").addClass("active");
    
        }
    });

    //End of the previous button


//End of adding functionalities to the container

$("#list-subject").hide().show(1000);
$("#index_proceed").on("click", function(){
    $(".hide").fadeOut();
    $(".take-in").append("<h2 class='display-4'><img src='assets/js/load.gif' alt='Loader' style='width:50px;'>Please Wait, While Subjects are being loaded</h2>");
    setTimeout(()=>{
        window.location="subjects.php";
    },1500);
    
}); 

// Disabling other checkboxes on click of one checkbox
 $(function(){
     $("#firstanswer").click(function(){
         $("#secondanswer").prop("checked", false);
         $("#thirdanswer").prop("checked", false);
         $("#fourthanswer").prop("checked", false);
     });

     $("#secondanswer").click(function(){
        $("#firstanswer").prop("checked", false);
        $("#thirdanswer").prop("checked", false);
        $("#fourthanswer").prop("checked", false);
    });

    $("#thirdanswer").click(function(){
        $("#secondanswer").prop("checked", false);
        $("#firstanswer").prop("checked", false);
        $("#fourthanswer").prop("checked", false);
    });

    $("#fourthanswer").click(function(){
        $("#secondanswer").prop("checked", false);
        $("#thirdanswer").prop("checked", false);
        $("#firstanswer").prop("checked", false);
    });
 });

 //End of code

   // Working with the logout button click
    $("#logout").click(function ()  {
        $(this).html('LOGGING OUT...');
        const delay = 3000;
        setTimeout(() => {
            window.location = "./includes/logout.php";
        }, delay);
    });

   //End of logout button click