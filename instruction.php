<?php require ('includes/session.php'); ?>
<?php require ('includes/config.php'); ?>
<?php require ('includes/functions.php'); ?>
<?php include ('includes/header.php'); ?>

<body class="index_body">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="card mt-5" style="padding: 0px;" >
				<?php 
					$userid = $_SESSION['id'];
					$selectuserquery = mysqli_query($con, "SELECT * FROM register WHERE id=$userid");
					$fetch = mysqli_fetch_array($selectuserquery);
					$first = $fetch['surname'];
					$other = $fetch['otherNames'];
					$phone = $fetch['phoneNumber'];
					$examNumber = $fetch['examNumber'];
					$dept = $fetch['department'];
					
					
					$level = $fetch['level'];
					$image = $fetch['passport'];
					?>
				
					<img src="<?php output(str_replace('../', 'onlineForm/', $image)); ?>" class="card-img-top" alt="<?php output( $first.$other ); ?>">
					<div class="card-body">
						<div class="card-title text-center p-2 text-dark" ><h6><?php outputTwo($first,$other); ?></h6></div>
							<p>Phone No: <?php output($phone); ?> </p>
							<p>Reg No: <?php output($examNumber); ?></p>
							<p>Dept: <?php getDepartment($dept); ?></p>
							<p>Level: <?php output($level); ?></p>
						
					</div>
					<div class="card-footer">
						<button type="button" class="btn btn-grey" id="logout"> LOG OUT   <i class="fa fa-sign-out"></i></button>
					</div>
				</div>
				<?php

				?>
			</div>
			<div class="col-lg-9 col-sm-12 take-in"> 
				<div class="custom mt-5 hide">
				
					<h3 class="" id="list-subject" >Please follow the Instructions Giving below before proceeding.</h3>
					<hr>
					<?php 
					$getinstruction = getAllInstruction();
					while(fetchData($data,$getinstruction)): 
					?>
					<ul class="mt-5 p-0">
						<li style="font-size: 1rem;"><?php output($data['text']); ?></li>
					</ul>
					<?php endwhile; ?>
					<?php 
						$selectClass = mysqli_query($con, "SELECT department FROM register WHERE id=$userid");
						$fetchClass = mysqli_fetch_array($selectClass);
					?>
					<a href="subjects.php?userid=<?php echo $userid; ?>&amp;cid=<?php echo $fetchClass['department']; ?>"><button class="btn btn-info" style="width: 100%;">PROCEED &nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></button></a>
					
				</div>
			</div>
		</div>
	</div>



<?php include ('includes/footer.php'); ?>

