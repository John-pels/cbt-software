<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/output.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon"  href="images/tri_icon-02.png">
    <title>Student Photocard</title>
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
				<fieldset class="scheduler-border p-3">
					<legend class="scheduler-border">Personal Information:</legend>
					<div class="personal-info">
					<p class="data">Surname: <span> Ajeigbe</span><br>
						Other Names: <span>John Oluwaseyi</span><br>
						Phone no: <span>08188974303</span><br>
						Gender: <span>Male</span><br>
						Exam no: <span>985636727GH</span><br>
						Date of Birth: <span>13/04/2000</span><br>
				</p>
					</div>
					<div class="photograph">
						<img src="images/dan5276bb68cda93.png" alt="Student's Passport" class="img-thumbnail">
					</div>
					
				</fieldset>
				<fieldset class="scheduler-border">
					<legend class="scheduler-border">School Information:</legend>
					<p class="data">Department: <span> Science</span><br>
						Level: <span>S.S.S 1</span><br>
				</fieldset>
				<fieldset class="scheduler-border">
					<legend class="scheduler-border">Examination Information:</legend>
					<div class="col1">
					<p class="data">Subject1: <span> Use of English</span><br>
						Subject2: <span>Mathematics</span><br>
						Subject3: <span>Chemistry</span><br>
					</div>
					<div class="col2">
					<p class="data">Subject1: <span> Use of English</span><br>
						Subject2: <span>Mathematics</span><br>
						Subject3: <span>Chemistry</span><br>
					</div>
					<div class="col3">
					<p class="data">Subject1: <span> Use of English</span><br>
						Subject2: <span>Mathematics</span><br>
						Subject3: <span>Chemistry</span><br>
					</div>
				</fieldset>
			<p><strong>Note:</strong> Please make copies of this photocard and keep the original as it will be your entrance access to the examination hall.</p>
			</div>
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