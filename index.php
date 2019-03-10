<?php include ('includes/header.php'); ?>
<title>Exam Login page</title>
<link rel="stylesheet" href="css/indexstyle.css">
<body>
    <div class="container-page">
                    <div class="container">
                        <div class="row">
                        <div class="col-lg-6 offset-lg-5 col-md-6  offset-md-4 col-sm-4 offset-sm-3">
                                    <div class="content-header">
                                            
                                                     <img src="images/tri_icon-02.png" alt="Brand" class="img-fluid" >
                                
                                    </div>
                                    </div> 
                                </div>
                                <div class="row">
                        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-11 col-xs-12">
                                <div class="wrap-content">
                                        <form action="" method="post" enctype="multipart/form-data">
                                        <br/>
                                        
                                        <h3>Login to Examination Portal</h3>
                                        <div class="form-input">
                                        <input type="text" name="regNumber"  id="regNumber"  placeholder="e-Mail Address/Registration/Matric Number">
                                        </div>
                                        <center>
                                        <button type="submit" class="btn btn-success btn-submit">LOGIN</button>
                                        </center>
                                        </form>
                                        </div>      
                                        </div>  
                                </div>
                <div class="row">
                        <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-11 col-xs-12">
                        
                          <p> <?php echo date("Y");?> &copy;Copyright Trisight Technology</p> 
                                            </div>                    
                </div>
                                                         
                        </div>
    </div>
<!-- 
    <script src="../bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery-3.2.1.min.js"></script> -->
        </body>
</html>