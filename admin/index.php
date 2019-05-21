<?php
session_start();
include_once '../includes/config.php';
require_once '../includes/add_question.php';
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
                <form action=""  enctype="multipart/form-data" method="POST" id="login-form">
                        <h4 class="form-heading">Login to Continue...</h4>
                        <div class="input-section">
                        <div class="form-input">
                            <?php echo $errorMessage; ?>
                            </div>
                            <div class="form-input">
                            <input type="text" name="username" id="username" placeholder="Your Username">
                            </div>
                            <div class="form-input2">
                            <input type="password" name="password" id="password" placeholder=" Your Password">
                            </div>
                            <center><button type="submit" name="adminLogin">Login</button></center>
                        </div>  
                </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>