
<?php
session_start();
		try {
					$connection = new PDO("mysql:host=localhost;dbname=tri-exam",'root','');
				$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				$surname = $_POST['surname'];
				$otherNames = $_POST['otherNames'];
				$gender = $_POST['gender'];
				$phoneNumber = $_POST['phoneNumber'];
				$department = $_POST['department'];
				$dateOfBirth = $_POST['dateOfBirth'];
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
				$data =  "INSERT INTO register(surname,otherNames,gender,phoneNumber,DateOfBirth,department,level,subject1,subject2,subject3,
				subject4,subject5,subject6,subject7,subject8,subject9,examNumber)VALUES('$surname','$otherNames','$gender','$phoneNumber','$dateOfBirth','$department','$level'
				,'$subject1','$subject2','$subject3','$subject4','$subject5','$subject6','$subject7','$subject8','$subject9','$examNumber')";
				$connection->exec($data);
				$id = '';	
				if($data){
					echo 'Form Submitted Successfully, Please proceed to complete the registration!';
				}	
				else{
					echo 'Error in Submission!';
				}
				$select = "SELECT * FROM register WHERE surname = '$surname'";
				$query = $connection->prepare($select);
				$query->execute();
				$result = $query->fetchAll(PDO::FETCH_ASSOC);
				foreach($result as $row){
					$id = $row['id'];
					$_SESSION['id'] = $id; 
				}	
		
		}

		catch(PDOException $e){
			echo $e->getMessage();
		}
		$connection = null;

?>
