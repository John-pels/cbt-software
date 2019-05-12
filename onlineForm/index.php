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
				<fieldset>
				<legend class="ml-5 mb-3 ">Personal Information:</legend>
				<div class="form-group">
				Surname: <input type="text" name="Surname" placeholder="Student's Surname" class="form-control" autofocus>
				Other names: <input type="text" name="Surname" placeholder="Student OtherNames" class="form-control"  >
				Gender: <select name="gender" id="gender" class="form-control select ml-3 ">
					<option selected="selected">Select...</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
				Phone no. : <input type="number" name="Surname" placeholder="Student Telephone " class="form-control ml-4" max="14">
				</div>
			</fieldset>
				</form>
			</div>
			</div>
		</div>
	</div>
		
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>