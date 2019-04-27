 <?php
include_once '../includes/config.php';
include_once '../includes/session.php';
include '../includes/add_question.php';
 ?>

 <!DOCTYPE html>
 <html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administrator &mdash;Questions Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="../css/admin.css">
    <link rel="stylesheet" href="../dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" href="../images/tri_icon-02.png" type="image/x-icon">
        <script src="../ckeditor/ckeditor.js" type="text/javascript"></script>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav-demo" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand"><span><img src="../images/tri_icon-02.png" alt="" style="height:40px;"></span> Trisight Technology</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-nav-demo">
			
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Questions Management Portal</a></li>
				<li><a href="javascript:void(0);"  data-target ="#addAdmin" data-toggle ="modal">Add Admin <i class="fa fa-user"></i></a></li>
				<li><a href="javascript:void(0);"  onclick="ask();">Logout <i class="fa fa-sign-out"></i></a></li>
			</ul>
			</div>
		
			</div>
        </nav>
        <div class="container-fluid">
            <div class="jumbotron" style="height: 130px !important; color:#449D44;">
                <h1 style="font-size: 4rem;">Welcome! <?php echo $_SESSION['username'];?></h1>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-4 col-sm-12 col-xs-12">
                    <div class="aside-instruction">
                        <p class="inst-heading">Guidlines for Uploading of Question(s)</p>
                        <ol type="1" id="isnt-list">
                            <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.</li>
                   <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua.</li>
                   <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</li>
                        </ul>
                </div>
                </div>
                      <div class="col-lg-7 col-md-8 col-sm-12 col-xs-12">
                <div class="aside-question">
                        <p class="quest-heading"> Uploading of Question(s)</p>
                        <div class="quest-upload">
                            <form action="" method="post" enctype="multipart/form-data">
                              <select name="classGroup" id="classGroup" class="form-control" style="margin-bottom:10px;" onchange="showSubject(this.value)" required>
                                <option value="select" >Select  Class</option>
                                <?php
                                    $query = mysqli_query($con, "SELECT * FROM class");
                                    $count = mysqli_num_rows($query);
                                     for ($i = 1; $i <= $count; $i++)
                                     {
                                         $fetch = mysqli_fetch_array($query);
                                         $countid = $fetch['id'];
                                         ?>
                                         <option value="<?php echo $countid; ?>"> <?php echo $fetch['class'];?></option>
                                         <?php
                                     }
                                ?>
                            </select>  
                            <select name="classSubject" id="classSubject" class="form-control" style="margin-bottom:10px; margin-top:10px;" required>
                                <option value="select" >Select  Subject</option>
                            </select>
                            <textarea name="questionDescription" id="questionDescription"  rows="5" class="form-control" 
                            placeholder="Question Descrtion goes here..."  style="margin-bottom:10px;" required>Question Description goes here...</textarea>
                            <script type="text/javascript">
                            CKEDITOR.replace('questionDescription');
                            </script>
                          
                            <input type="text" name="option1" id="option1" class="form-control" placeholder="Option 1 (A)" style="margin-bottom:10px;
                            margin-top:10px;" required>
                            <input type="text" name="option2" id="option2" class="form-control" placeholder="Option 2 (B)" style="margin-bottom:10px;" required>
                            <input type="text" name="option3" id="option3" class="form-control" placeholder="Option 3 (C)" style="margin-bottom:10px;" required>
                            <input type="text" name="option4" id="option4" class="form-control" placeholder="Option 4 (D)" style="margin-bottom:10px;" required>
                            <input type="text" name="trueAnswer" id="trueAnswer" class="form-control" 
                            placeholder="True Answer goes here.." style="margin-bottom:10px;" required>
                            <center><button type="submit" class="btn btn-success btn-lg" id="btn-submit" name="btn-submit">Upload to Database</button>
                            </center>
                        </form>
                        </div>

                </div>
                </div>
                 
            </div>
                         <center><span><?php echo date("Y");?> &copy;Copyright Trisight Technology</span></center> 
                                                              
                </div>
        </div>
        
        <script>
    // Sweetalert function for end exam
 function ask(){
    swal({
title: "Are you sure you want to Logout?",
text: "You will have to Login again",
icon: "warning",
buttons: true,
dangerMode: true,
})
.then((willDelete) => {
if (willDelete) {
swal({
title: "Session terminated",
text: "Click OK to proceed",
icon: "success",

    
}).then(function(){
    window.location="../includes/logout.php";
})

} 
}); 


}
// End of sweet alert function for end examination


</script>

        <script>
        function showSubject(val){
            $.ajax({
                type: "POST",
                url: "../includes/subjects.php",
                data: 'classSubject='+val,
                success: function(data){
                    $("#classSubject").html(data);
                }
            });
        }
        
        </script>
           <script src="../assets/js/jquery-3.2.1.min.js"></script>
        <script src="../assets/sweetalert.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
</body>
</html>
<!--For Addition of Administrator-->
<div class="modal fade" id="addAdmin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #243665; color:#FFF;">
        <h5 class="modal-title" id="exampleModalLabel" style="font-size:25px; line-height:15px;">Add an Administrator</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color:#FFF;">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleInputname">Username</label>
          <input type="text" class="form-control" id="username" name="username" aria-describedby="username" placeholder="Username" required="">
		</div>
		   <div class="form-group">
          <label for="exampleInputname">Password</label>
          <input type="text" class="form-control" id="password" name="password" aria-describedby="password" placeholder="Password" required="">
        </div>
        
        <button type="submit" class="btn btn-success" name="addAdmin" style="width: 100%;">Add</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>