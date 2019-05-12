<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Student registration portal</title>
	<link rel="shortcut icon"  href="images/tri_icon-02.png">
</head>
<body>
	<header>
	<div class="header-banner">
		<h2 class="text-center p-2">Trisight Student registration form</h2>
		</div>
	</header>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 offset-lg-2 col-sm-12">
			<div class="form-container">
				<form action="" method="post" enctype="multipart/form-data" autocomplete="on" >
				<fieldset class="scheduler-border">
				<legend class="scheduler-border ml-5">Personal Information:</legend>
				<div class="form-group">
				Surname: <input type="text" name="Surname" placeholder="Student's Surname" class="form-control" autofocus>
				Other names: <input type="text" name="otherNames" placeholder="Student OtherNames" class="form-control"  >
				Gender: <select name="gender" id="gender" class="form-control select ml-3 ">
					<option selected="selected">Select...</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
				Phone no. : <input type="number" name="phoneNumber" placeholder="Student Telephone " class="form-control ml-4" max="14">
			DOB: <input type="date" name="dateOfBirth" placeholder=" " class="form-control">
				</div>
			</fieldset>
			<fieldset class="scheduler-border">
				<legend class="scheduler-border ml-5">School Information:</legend>
				<div class="form-group">
				Department: <select name="department" id="department" class="form-control select ml-3 ">
					<option selected="selected">Select...</option>
					<option value="Male">Science</option>
					<option value="Art">Art</option>
					<option value="Commercial">Commercial</option>
				</select>
				Level: <select name="level" id="level" class="form-control select ml-3 ">
					<option selected="selected">Select...</option>
					<option value="S.S.S 1">S.S.S 1</option>
					<option value="S.S.S 2">S.S.S 2</option>
					<option value="S.S.S 3">S.S.S 3</option>
				</select>
			<span style="float:left;">Passport:</span> <input type="file" name="passport" placeholder="" class="form-control ml-5" ><span style="color:red;float:left;" class="mt-2">Not more than 150kb</span>
				</div>
			</fieldset>
			<fieldset class="scheduler-border mb-3">
				<legend class="scheduler-border ml-5">Examination Information:</legend>
				<div class="form-group">
				Subject1: <select name="subject1" id="subject1" class="form-control select ml-3 ">
					<option selected="selected">Select...</option>
					
				</select>
				Subject2: <select name="subject2" id="subject1" class="form-control select ml-3 ">
					<option selected="selected">Select...</option>
					
				</select>
				Subject3: <select name="subject3" id="subject1" class="form-control select ml-3 ">
					<option selected="selected">Select...</option>
					
				</select>
				Subject4: <select name="subject4" id="subject1" class="form-control select ml-3 ">
					<option selected="selected">Select...</option>
					
				</select>
				Subject5: <select name="subject5" id="subject1" class="form-control select ml-3 ">
					<option selected="selected">Select...</option>
					
				</select>
				Subject6: <select name="subject6" id="subject1" class="form-control select ml-3 ">
					<option selected="selected">Select...</option>
					
				</select>
				Subject7: <select name="subject7" id="subject1" class="form-control select ml-3 ">
					<option selected="selected">Select...</option>
					
				</select>
				Subject8: <select name="subject8" id="subject1" class="form-control select ml-3 ">
					<option selected="selected">Select...</option>
					
				</select>
				Subject9: <select name="subject9" id="subject1" class="form-control select ml-3 ">
					<option selected="selected">Select...</option>
					
				</select>
				<div class="text-center">
					<button type="submit" name="submitForm" class="mt-3">Submit</button>
				</div>
			</fieldset>
				</form>
			</div>
			</div>

		</div>
		<div class="text-center"><?php echo date("Y");?> &copy;Copyright Trisight Technologies</div>
	</div>
		
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>