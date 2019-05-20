<?php
require_once ('includes/config.php');
include ('includes/session.php');
 $id = $_SESSION['id'];
$select = mysqli_query($con,"SELECT * FROM register WHERE id = '$id'");
$rows = mysqli_num_rows($select);
$fetch  = mysqli_fetch_array($select);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/output.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon"  href="images/tri_icon-02.png">
    <title><?php echo $fetch['surname'].' '.$fetch['otherNames'];?></title>
</head>
<body>

	<div class="container p-5 mt-3">
		<div class="row">
		<header>
	<div class="card-head">
			<img src="images/tri_icon-02.png" alt="School Logo" class="img-responsive">
			<h1 class="">Periscope International  College <br> <span class="ml-5">Student Examination Photocard</span></h1>
<h3></h3>
		</div>	
    </header>
		</div>
			<div class="row">
			<div class=" col-sm-12">
			<div class="content p-3">
						<div class="alert alert-info" style="font-size: 1.5rem;" id="alert">Please Upload your Passport to complete the registration</div>
				<fieldset class="scheduler-border p-3">
					<legend class="scheduler-border">Personal Information:</legend>
					<div class="personal-info">
					<p class="data"> Surname: <span> <?php echo $fetch['surname'];?></span><br>
						Other Names: <span><?php echo $fetch['otherNames'];?></span><br>
						Phone no: <span><?php echo $fetch['phoneNumber'];?></span><br>
						Gender: <span><?php echo $fetch['gender'];?></span><br>
						Exam no: <span><?php echo $fetch['examNumber'];?></span><br>
						Date of Birth: <span><?php echo $fetch['DateOfBirth'];?></span><br>
				</p>
					</div>
					<div class="photograph">
						<img src="images/dan5276bb68cda93.png" alt="Student's Passport" class="img-thumbnail">
						<div id="uploadButton">
							<label>Upload Passport:</label>
						<input type="file" name="passport">
						</div>
					</div>
				</fieldset>
				<fieldset class="scheduler-border">
					<legend class="scheduler-border">School Information:</legend>
					<p class="data">Department: <span> <?php echo $fetch['department'];?></span><br>
						Level: <span><?php echo $fetch['level'];?></span><br>
				</fieldset>
				<fieldset class="scheduler-border">
					<legend class="scheduler-border">Examination Information:</legend>
					<div class="col1">
					<p class="data">Subject1: <span> <?php echo $fetch['subject1'];?></span><br>
						Subject2: <span><?php echo $fetch['subject2'];?></span><br>
						Subject3: <span><?php echo $fetch['subject3'];?></span><br>
					</div>
					<div class="col2">
					<p class="data">Subject4: <span> <?php echo $fetch['subject4'];?></span><br>
						Subject5: <span><?php echo $fetch['subject5'];?></span><br>
						Subject6: <span><?php echo $fetch['subject6'];?></span><br>
					</div>
					<div class="col3">
					<p class="data">Subject7: <span> <?php echo $fetch['subject7'];?></span><br>
						Subject8: <span><?php echo $fetch['subject8'];?></span><br>
						Subject9: <span><?php echo $fetch['subject9'];?></span><br>
					</div>
				</fieldset>
			<p><strong>Note:</strong> Please make copies of this photocard and keep the original as it will be your entrance access to the examination hall.</p>
			</div>
			<a href="index.php">Close</a>
			<a href="#" onclick="printCard()" style="text-decoration:none; cursor:pointer; float:right;">Print</a>
	</div>
</div>
	</div>

	<script>
		function printCard(){
			window.print();
		}
	</script>
</body>
</html>