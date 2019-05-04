<?php session_start(); ?>
<?php include ('includes/header.php'); ?>
<?php if (isset($_SESSION['id'])) {
        header("location: instruction.php");
} ?>
<?php include_once ('includes/display_error.php'); ?>
<title>Exam Login page</title>
<link rel="stylesheet" href="css/indexstyle.css">
<body>
        
    <div class="container-page">
<?php include_once ('includes/script.php'); ?>
                    <div class="container">
                        <div class="row">
                        <div class="col-lg-6 offset-lg-5 col-md-6  offset-md-4 col-sm-4 offset-sm-3">
                                    <div class="content-header">
                                            
                                                     <img src="images/tri_icon-02.png" alt="Brand" class="img-fluid" width="150" height="200" >
                                
                                    </div>
                                    </div> 
                                </div>
                                <div class="row">
                        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-11 col-xs-12">
                                <div class="wrap-content">
                                        <form action="" id= "loginForm" method="post" enctype="multipart/form-data">
                                        <br/>
                                        
                                        <center><h3>Login to Examination Portal</h3> </center>
                                                                <div class="input-group mb-3 mt-3" >
                        <div class="input-group-prepend" >
                        <span class="input-group-text" id="basic-addon1" style="background-color: #94CDC5;"><i class="fa fa-user" style="color: #8A82A8;"></i></span>
                        </div>
                        <input type="text" name="regNumber"  id="regNumber"  class="form-control" placeholder="e-Mail Address/Registration/Matric Number" required="required">
                        </div>
                                        <center>
                                        <button type="submit" name="login" class="btn btn-success btn-submit" id="login">LOGIN</button>
                                        </center>
                                        </form>
                                        </div>      
                                        </div>  
                                </div>
                <div class="row">
                        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-11 col-xs-12">
                        
                          <center><p> <?php echo date("Y");?> &copy;Copyright Trisight Technology</p></center>
                        </div>                    
                </div>
                                                         
                        </div>
    </div>


    <!-- <script>
    $(document).ready(function(){
            $('#loginForm').submit(function(e){
                    e.preventDefault();
                    $.ajax({
                        type: "POST",
                        url: "/includes/script.php";
                        data: $(this).serialize(),
                        success: function(data)
                        {
                                if(data === 'Login'){
                                        window.location = '/instruction.php';
                                }
                                else {
                                        alert("Invalid Credentials");
                                }
                        }
                    });
            });

    });
   
    </script> -->
<!-- 
    <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery-3.2.1.min.js"></script> -->
        <?php include ('includes/footer.php'); ?>
        </body>
</html>
