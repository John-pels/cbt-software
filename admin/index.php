<?php
session_start();
// include_once '../includes/config.php';
// require_once '../includes/add_question.php';
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrator Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/admin_index.css">
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="/images/tri_icon-02.png" type="image/x-icon">
</head>
<body>
    <div class="grid-container">
    <div class="jumbotron">
        <h1>Administrator Portal</h1>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6  col-md-12 col-sm-12 col-xs-12">
                <div class="aside-bar">
                <!-- <form action=""  enctype="multipart/form-data" method="POST" id="login-form"> -->
                        <h4 class="form-heading">Login to Continue...</h4>
                        <div class="input-section" id="formContainer">
                        <div class="alert alert-info" style="display: none;" id="errorMessage"></div>
                            <div class="form-input">
                            <input type="text" name="username" id="username" placeholder="Your Username">
                            </div>
                            <div class="form-input2">
                            <input type="password" name="password" id="password" placeholder=" Your Password">
                            </div>
                            <center><button type="submit" name="adminLogin" id="adminLogin">Login</button></center>
                        </div>  
                </div>
                <!-- </form> -->
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="../onlineForm/js/jquery-3.2.1.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#username").focusout(function(){
                var username = $("#username").val().length;
                if(username === "" || username < 3){
                    $("#errorMessage").html("Please, Enter a valid Username!");
                    $("#errorMessage").slideDown(500).delay(2000).hide(500);
                }
                else {
                    $("#errorMessage").hide();
                }
               
            });
                $("#password").focusout(function(){
                var password = $("#password").val().length;
                    if(password ==="" || password < 3){
                    $("#errorMessage").html("Please, Enter a valid Password!");
                    $("#errorMessage").slideDown(500).delay(2000).hide(500);
                }
                else {
                    $("#errorMessage").hide();
                }
            });
            $("#adminLogin").click(function(){
                var username = $("#username").val();
                var password = $("#password").val();
                if (username === "" || password === ""){
                    $("#errorMessage").html(" All Fields are required!");
                    $("#errorMessage").slideDown(500).delay(2000).hide(500);
                }
                // else if (password === "" ){
                //     $("#errorMessage").html("Password cannot be empty!");
                //     $("#errorMessage").slideDown(500).delay(2000).hide(500);
                // }
                else {
                    $.ajax({
                    url:"../includes/login.php",
                    type: "POST",
                    data:{username:username,password:password},
                    cache: false,
                    success: function(response){
                        if (response == 1) {
                            window.location = "question_portal.php";
                        }
                        else if (response == 2 ){
                                $("#errorMessage").html("Username or Password is incorrect!");
                                $("#errorMessage").slideDown(500).delay(2000).hide(500);
                        }
                        // else if (response === "empty"){
                        //      $("#errorMessage").html("Username or Password is incorrect!");
                        //         $("#errorMessage").slideDown(500).delay(2000).hide(500);
                        // }
                        else{
                             $("#errorMessage").html("Username or Password is incorrect!");
                                $("#errorMessage").slideDown(500).delay(2000).hide(500);
                        }
                    }
                 
                    
                    
                });
                }
                
            });
        });
    </script>
</body>
</html>