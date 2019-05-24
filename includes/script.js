
        $(document).ready(function(){
        $("#loginForm #login").click(function(){
        var emptyNotice = $("#empty_notice");
        var errorMsg = $("#error-message");
        var regNumber = $("#loginForm #regNumber").val();                // Getting the email field
                // $(this).attr("disabled", true);
                // Checking the validity and sending the data to the server using ajax
                if (regNumber === "") {
                //     $("#loginFrom #login").attr("disabled", false);
                    emptyNotice.slideDown(500).delay(2000).hide(500);  
                }
                else
                {
                       $.ajax({
                               url: "includes/script.php",
                               type: "post",
                               data: {regNumber:regNumber},
                               cache:false,
                               success:function (response){
                                        var msg = "";
                                        if (response == 1){
                                                window.location="instruction.php";
                                        } else if (response == 2){
                                                errorMsg.slideDown(500).delay(2000).hide(500);
                                                $("#loginForm")[0].reset();
                                        } else if (response == "empty"){
                                                emptyNotice.slideDown(500).delay(4000).hide(500);   
                                                
                                        }
                                          else{
                                                // $("#loginForm")[0].reset();
                                                alert(response);
                                        }
                               },
                        //        return: false
                       })
                }
        });

        });
   
   
    