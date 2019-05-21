<?php
require_once ('config.php');
?>
<?php
			
			if (isset($_POST['submitForm'])) {
				$surname = $_POST['surname'];
			$otherNames = $_POST['otherNames'];
			$gender = $_POST['gender'];
			$phoneNumber = $_POST['phoneNumber'];
			$department = $_POST['department'];
			$level = $_POST['level'];
			$subject1 = $_POST['subject1'];
			$subject2 = $_POST['subject2'];
			$subject3 = $_POST['subject3'];
			$subject4 = $_POST['subject4'];
			$subject5 = $_POST['subject5'];
			$subject6 = $_POST['subject6'];
			$subject7 = $_POST['subject7'];
			$subject8 = $_POST['subject8'];
			$subject9 = $_POST['subject9'];
			$string = "TECH";
			$rand = mt_rand(9999999,100000000);
			$examNumber = $rand.$string;
				if((!empty($surname))&&(!empty($otherNames))&&(!empty($gender))&&(!empty($phoneNumber))
				&&(!empty($department))&&(!empty($level))&&(!empty($subject1))&&(!empty($subject2))&&(!empty($subject3))&&(!empty($subject4))&&
				(!empty($subject5))&&(!empty($subject6))&&(!empty($subject7))&&(!empty($subject8))&&(!empty($subject9))){
					$passport = $_FILES['passport'];
						$fileName = addslashes($_FILES['passport']['name']);
						$fileTmpName = $_FILES['passport']['Tmp_name'];
						$fileSize = $_FILES['passport']['size'];
						$fileError = $_FILES['passport']['error'];
						$fileType = $_FILES['passport']['type'];
						$fileExt = explode('.',$fileName);
						$fileActualExt = strtolower(end($fileExt));
						$allowed = array('jpg','jpeg','png');
						if(in_array($fileActualExt, $allowed)){
								if ($fileError ===0) {
									if ($fileSize <= 150000) {
											$fileNewName = $surname.".".$fileActualExt;
											$fileDestination = '../images/Students_Images'.$fileNewName;
											move_uploaded_file($fileTmpName,$fileDestination);
										$data = mysqli_query($con, "INSERT INTO register(surname,otherNames,gender,phoneNumber,DateOfBirth,department,level,passport,subject1,subject2,subject3,subject4,subject5,subject6,subject7,subject8,subject9,examNumber)VALUES('$surname','$otherNames','$gender','$phoneNumber','$department','$level','$fileDestination','$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$examNumber')");
										if ($data) {
											printf('<script>alert("Submitted!");
                                     
                                        </script>');
										}
										else{
											printf('<script>alert("Error!");
                                     
                                        </script>');
										}

									}else{
										printf('<script>alert("The Book Size is too large to Upload!");
                                     
                                        </script>');
									}
								}else{
									printf('<script>alert("There was an Error Uploading the Book!");
 				
 					</script>');
								}
						}else{
							  printf('<script>alert("You cannot Upload Ebooks of this Type!");
 				
					 </script>');
					}

				}

			}


?>