
<?php
require ('includes/config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
			<div class="form-container" id="container">
				<!-- <form action="" method="post" enctype="multipart/form-data" autocomplete="on" > -->
				<fieldset class="scheduler-border">
				<legend class="scheduler-border ml-5">Personal Information:</legend>
				<div class="form-group">
				Surname: <input type="text" name="surname" id="surname" placeholder="" class="form-control" autofocus>
				Other names: <input type="text" name="otherNames" id="otherNames" placeholder="" class="form-control"  >
				Gender: <select name="gender" id="gender" class="form-control select ml-3 ">
					<option selected="selected" required>Select...</option>
					<option value="Male">Male</option>
					<option value="Female">Female</option>
				</select>
				Phone no. : <input type="number" name="phoneNumber" id="phoneNumber" placeholder="+2348188974303 " class="form-control ml-4" >

			DOB: <input type="date" name="dateOfBirth" placeholder=" " id="dateOfBirth" class="form-control">

				</div>
			</fieldset>
			<fieldset class="scheduler-border">
				<legend class="scheduler-border ml-5">School Information:</legend>
				<div class="form-group">
				Department: <select name="department" id="department" class="form-control select ml-3 " onchange="showSubject1(this.value);showSubject2(this.value);showSubject3(this.value);showSubject4(this.value);showSubject5(this.value);showSubject6(this.value);showSubject7(this.value);showSubject8(this.value);showSubject9(this.value);" required>
					<option selected="selected">Select...</option>
					<?php
					$query = mysqli_query($con,"SELECT * FROM class");
					$row = mysqli_num_rows($query);
						for ($i=1; $i <= $row; $i ++) {
							$fetch = mysqli_fetch_array($query);
							$id = $fetch['id'];
					?>
					<option value="<?php echo $id;?>"><?php echo $fetch['class'];?></option>
					<?php
				}
				?>
					
				</select>
				Level: <select name="level" id="level" class="form-control select ml-3 " required>
					<option selected="selected">Select...</option>
					<option value="S.S.S 1">S.S.S 1</option>
					<option value="S.S.S 2">S.S.S 2</option>
					<option value="S.S.S 3">S.S.S 3</option>
				</select>

			<!-- <span style="float:left;">Passport:</span> <input type="file" name="passport" id="passport" placeholder="" class="form-control ml-5" ><span style="color:red;float:left;" class="mt-2">Not more than 150kb</span> -->
				</div>

			</fieldset>
			<fieldset class="scheduler-border mb-3">
				<legend class="scheduler-border ml-5">Examination Information:</legend>
				<div class="form-group">
				Subject1: <select name="subject1" id="subject1" class="form-control select ml-3 " required>
					<!-- <option selected="selected">Select...</option> -->
					
				</select>
				Subject2: <select name="subject2" id="subject2" class="form-control select ml-3 " required>
				
					
				</select>
				Subject3: <select name="subject3" id="subject3" class="form-control select ml-3 " required>
				
					
				</select>
				Subject4: <select name="subject4" id="subject4" class="form-control select ml-3 " required>
					
					
				</select>
				Subject5: <select name="subject5" id="subject5" class="form-control select ml-3 " required>
				
					
				</select>
				Subject6: <select name="subject6" id="subject6" class="form-control select ml-3 " required>
					
					
				</select>
				Subject7: <select name="subject7" id="subject7" class="form-control select ml-3 " required>
					
					
				</select>
				Subject8: <select name="subject8" id="subject8" class="form-control select ml-3 " required>
					
					
				</select>
				Subject9: <select name="subject9" id="subject9" class="form-control select ml-3 " required>
					
					
				</select>
				<div class="text-center">

					<button type="submit" name="submitForm" id="submitForm" class="mt-3">Proceed</button>
			

				</div>
			</fieldset>
				<!-- </form> -->
			</div>
			</div>

		</div>
		<div class="text-center"><?php echo date("Y");?> &copy;Copyright Trisight Technologies</div>
	</div>
		

		
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/script.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$("#submitForm").click(function(){
				var surname = $("#surname").val(),
					otherNames = $("#otherNames").val(),
					gender = $("#gender").val(),
					dateOfBirth = $("#dateOfBirth").val(),
					phoneNumber = $("#phoneNumber").val(),
					department = $("#department").val(),
					level = $("#level").val(),
					subject1 = $("#subject1").val(),
					subject2 = $("#subject2").val(),
					subject3 = $("#subject3").val(),
					subject4 = $("#subject4").val(),
					subject5 = $("#subject5").val(),
					subject6 = $("#subject6").val(),
					subject7 = $("#subject7").val(),
					subject8 = $("#subject8").val(),
					subject9 = $("#subject9").val();

					// if ( surname === '' || otherNames === '' || gender === 'Select...' || phoneNumber === '' || department === '' || level === '' || subject1 === 'Select Subjects' || subject2 === 'Select Subjects' || subject3 === 'Select Subjects' || subject4 === 'Select Subjects' || subject5 === 'Select Subjects' ||  subject6 === 'Select Subjects' || subject7 === 'Select Subjects' || subject8 === 'Select Subjects' || subject9 === 'Select Subjects') {
					// 	alert('Input field cannot be left empty please fill up the required datas');
					// }

					if ( surname === '') {
						alert('Please,Input the Surname');
					}
					else if(otherNames ===''){
						alert('Please,Input the Other Names');
					}
					else if(gender ==='Select...'){
						alert('Please,Select your Gender');
					}
					
					
					else if(phoneNumber ===''){
						alert('Please,Input the Phone Number');
					}
					else if(dateOfBirth ===''){
						alert('Please,Enter the Date of Birth');
					}
					else if(department ==='Select...'){
						alert('Please,Select the Department');
					}
					
					else if(level ==='Select...'){
						alert('Please,Select the Level');
					}
					else if(subject1 ==='Select Subjects'){
						alert('Please,Select the First Subject');
					}
					else if(subject2 ==='Select Subjects'){
						alert('Please,Select the Second Subject');
					}
					else if(subject3 ==='Select Subjects'){
						alert('Please,Select the Third Subject');
					}
					else if(subject4 ==='Select Subjects'){
						alert('Please,Select the Fourth Subject');
					}
					else if(subject5 ==='Select Subjects'){
						alert('Please,Select the Fifth Subject');
					}
					else if(subject6 ==='Select Subjects'){
						alert('Please,Select the Sixth Subject');
					}
					else if(subject7 ==='Select Subjects'){
						alert('Please,Select the Seventh Subject');
					}
					else if(subject8 ==='Select Subjects'){
						alert('Please,Select the Eight Subject');
					}
					else if(subject9 ==='Select Subjects'){
						alert('Please,Select the Last Subject');
					}

					
					else{
						$.ajax({
							url: "includes/insertData.php",
							method: "POST",
							data:{surname:surname,otherNames:otherNames,gender:gender,dateOfBirth:dateOfBirth,phoneNumber:phoneNumber,department:department,level:level,subject1:subject1,subject2:subject2,subject3:subject3,subject4:subject4,subject5:subject5,subject6:subject6,subject7:subject7,subject8:subject8,subject9:subject9},
							dataType: "text",
							success:function(php_script_response){
								alert(php_script_response);
								window.location = "output.php";
							},
							error: function(){
								alert("Error in Submission, Please try again");
							}
						});


					}
						
		});
	});
</script>
</body>
</html>