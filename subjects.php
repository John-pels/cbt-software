<?php require ('includes/session.php'); ?>
<?php include ('includes/header.php'); ?>
<?php include ('includes/config.php'); ?>

<body class="index_body">
	<div class="container ">
		<div class="row">
			<div class="col-lg-12 col-sm-12 take-in"> 
				
			<div class="custom mt-5 show">
					<h1 class="text-center mb-4" id="list-subject">LIST OF SUBJECTS</h1>
					<table class="table rounded-circle">
  <thead class="thead-light rounded">
    <tr>
      <th scope="col">#</th>
      <th scope="col">SUBJECT</th>
      <th scope="col">DURATION</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
      <?php 

      #get User ID
      $userid = $_SESSION['id'];
      #cid = Class ID
      $getClassId = $_GET['cid'];
      // echo $getClassId;
      // $sql = "SELECT * FROM register WHERE id=$getClassId";
      $selectDept = mysqli_query($con,"SELECT * FROM register WHERE id=$getClassId");
      $fetchData = mysqli_fetch_array($selectDept);
      $department = $fetchData['department'];
      #Determine what type of data to select from using the class and the departmental ID
      $selectid_Class = mysqli_query($con,"SELECT * FROM register JOIN subject ON register.department = subject.class_id WHERE id=$userid && status='Disabled'");
      $count = 0;
      $fetchIdANDClass = mysqli_fetch_array($selectid_Class);
        $subjectId = $fetchIdANDClass['id'];
        $subjectName = $fetchIdANDClass['sub_name'];
        // $subjectHour = $fetchIdANDClass['sub_hour'];
        $class_id = $fetchIdANDClass['class_id'];
        $sub_id = $fetchIdANDClass['sub_id'];
        $status = strtolower($fetchIdANDClass['status']);
        
      ?>

      <?php  
       # Creating a switch statement that determines the duration and the subject ID
       function getSubjectId($value){
        switch ($value) {
            case 'Physics':
                echo "1";
                break;
            case 'Chemistry':
                echo "2";
                break;
            case 'Biology':
                echo "3";
            break;
            case 'Mathematics':
            echo "4";
            break;
            case 'Further Mathematics':
            echo "5";
            break;
            case 'Use of English ':
            echo "6";
            break;
            case 'Agricultural Science':
            echo "7";
            break;
            case 'Geography':
            echo "8";
            break;
            case 'Economics':
            echo "9";
            break;
            case 'Government':
            echo "10";
            break;
            case 'I.R.S':
                echo "11";
            break;
            case 'C.R.S':
            echo "12";
            break;
            case 'Literature in English':
            echo "13";
            break;
            case 'Use of English':
            echo "14";
            break;
            case 'Mathematics':
            echo "15";
            break;
            case 'Account':
            echo "17";
            break;
            case 'Commerce':
            echo "18";
            break;
            case 'Government':
            echo "19";
            break;
            case 'Economics':
            echo "20";
            break;
            case 'Computer Studies':
            echo "23";
            break;
            case 'French Language':
            echo "26";
            break;
            case 'History':
            echo "27";
            break;
            case 'Fine and Applied Arts':
            echo "28";
            break;
            case 'Yoruba Language':
            echo "29";
            break;
            case 'Igbo Language':
            echo "32";
            break;
        }
    }


?>


    <tr>
      <th scope="row"><?php echo $count += 1; ?></th>
      <td><?php echo $fetchIdANDClass['subject1']; ?></td>
      <td><?php #echo $subjectHour; ?></td>
    
      <td>
      <a href="take_exam.php?userid=<?php echo $userid; ?>&amp;cID=<?php echo $class_id; ?>&amp;sID=<?php getSubjectId($fetchIdANDClass['subject1']);?>"  class="btn btn-success" id="disabled" >START</a>
      </td>
    </tr>
    <tr>
      <th scope="row"><?php echo $count += 1; ?></th>
      <td><?php echo $fetchIdANDClass['subject2']; ?></td>
      <td><?php #echo $subjectHour; ?></td>
    
      <td>
      <a href="take_exam.php?userid=<?php echo $userid; ?>&amp;cID=<?php echo $class_id; ?>&amp;sID=<?php getSubjectId($fetchIdANDClass['subject2']);?>"  class="btn btn-success" id="disabled" >START</a>
      </td>
    </tr>

    <tr>
      <th scope="row"><?php echo $count += 1; ?></th>
      <td><?php echo $fetchIdANDClass['subject3']; ?></td>
      <td><?php #echo $subjectHour; ?></td>
    
      <td>
      <a href="take_exam.php?userid=<?php echo $userid; ?>&amp;cID=<?php echo $class_id; ?>&amp;sID=<?php getSubjectId($fetchIdANDClass['subject3']);?>"  class="btn btn-success" id="disabled" >START</a>
      </td>
    </tr>

    <tr>
      <th scope="row"><?php echo $count += 1; ?></th>
      <td><?php echo $fetchIdANDClass['subject4']; ?></td>
      <td><?php #echo $subjectHour; ?></td>
    
      <td>
      <a href="take_exam.php?userid=<?php echo $userid; ?>&amp;cID=<?php echo $class_id; ?>&amp;sID=<?php getSubjectId($fetchIdANDClass['subject4']);?>"  class="btn btn-success" id="disabled" >START</a>
      </td>
    </tr>

    <tr>
      <th scope="row"><?php echo $count += 1; ?></th>
      <td><?php echo $fetchIdANDClass['subject5']; ?></td>
      <td><?php #echo $subjectHour; ?></td>
    
      <td>
      <a href="take_exam.php?userid=<?php echo $userid; ?>&amp;cID=<?php echo $class_id; ?>&amp;sID=<?php getSubjectId($fetchIdANDClass['subject5']);?>"  class="btn btn-success" id="disabled" >START</a>
      </td>
    </tr>

    <tr>
      <th scope="row"><?php echo $count += 1; ?></th>
      <td><?php echo $fetchIdANDClass['subject6']; ?></td>
      <td><?php #echo $subjectHour; ?></td>
    
      <td>
      <a href="take_exam.php?userid=<?php echo $userid; ?>&amp;cID=<?php echo $class_id; ?>&amp;sID=<?php getSubjectId($fetchIdANDClass['subject6']);?>"  class="btn btn-success" id="disabled" >START</a>
      </td>
    </tr>

    <tr>
      <th scope="row"><?php echo $count += 1; ?></th>
      <td><?php echo $fetchIdANDClass['subject7']; ?></td>
      <td><?php #echo $subjectHour; ?></td>
    
      <td>
      <a href="take_exam.php?userid=<?php echo $userid; ?>&amp;cID=<?php echo $class_id; ?>&amp;sID=<?php getSubjectId($fetchIdANDClass['subject7']);?>"  class="btn btn-success" id="disabled" >START</a>
      </td>
    </tr>

    <tr>
      <th scope="row"><?php echo $count += 1; ?></th>
      <td><?php echo $fetchIdANDClass['subject8']; ?></td>
      <td><?php #echo $subjectHour; ?></td>
    
      <td>
      <a href="take_exam.php?userid=<?php echo $userid; ?>&amp;cID=<?php echo $class_id; ?>&amp;sID=<?php getSubjectId($fetchIdANDClass['subject8']);?>"  class="btn btn-success" id="disabled" >START</a>
      </td>
    </tr>

    <tr>
      <th scope="row"><?php echo $count += 1; ?></th>
      <td><?php echo $fetchIdANDClass['subject9']; ?></td>
      <td><?php #echo $subjectHour; ?></td>
    
      <td>
      <a href="take_exam.php?userid=<?php echo $userid; ?>&amp;cID=<?php echo $class_id; ?>&amp;sID=<?php getSubjectId($fetchIdANDClass['subject9']);?>"  class="btn btn-success" id="disabled" >START</a>
      </td>
    </tr>
      
  </tbody>
  <tfoot class="thead-light">
  <tr>
      <th scope="col">#</th>
      <th scope="col">SUBJECT</th>
      <th scope="col">DURATION</th>
      <th scope="col">ACTION</th>
    </tr>
  </tfoot>
</table>
<button class="btn btn-danger" onclick="quitExam();">QUIT EXAM</button>


					
			
			
			</div>
		</div>
	</div>



<?php include ('includes/footer.php'); ?>
<script src="includes/quitExam.js"></script>
<script>  
  $("#disabled").click(function(){
      $(this).addClass("btn btn-danger");
  });
</script>

