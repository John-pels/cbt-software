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
      while ($fetchIdANDClass = mysqli_fetch_array($selectid_Class)):
        $subjectId = $fetchIdANDClass['id'];
        $subjectName = $fetchIdANDClass['sub_name'];
        // $subjectHour = $fetchIdANDClass['sub_hour'];
        $class_id = $fetchIdANDClass['class_id'];
        $sub_id = $fetchIdANDClass['sub_id'];
        $status = strtolower($fetchIdANDClass['status']);
        
      ?>
    <tr>
      <th scope="row"><?php echo $count += 1; ?></th>
      <td><?php echo $subjectName; ?></td>
      <td><?php #echo $subjectHour; ?></td>
    
      <td>
      <a href="take_exam.php?userid=<?php echo $userid; ?>&amp;cID=<?php echo $class_id; ?>&amp;sID=<?php echo $sub_id;?>"  class="btn btn-success" id="disabled" >START</a>
      </td>
    </tr>
      <?php endwhile; ?>
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

