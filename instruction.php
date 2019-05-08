<?php require ('includes/session.php'); ?>
<?php require ('includes/config.php'); ?>
<?php require ('includes/functions.php'); ?>
<?php include ('includes/header.php'); ?>

<body class="index_body">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="card mt-5" >
				<?php 
					$userid = $_SESSION['id'];
					$selectuserquery = mysqli_query($con, "SELECT * FROM register WHERE reg_id=$userid");
					$fetch = mysqli_fetch_array($selectuserquery);
					$first = $fetch['first'];
					$middle = $fetch['middle'];
					$last = $fetch['last'];
					$phone = $fetch['phone'];
					$regno = $fetch['reg_no'];
					$dept = $fetch['dept'];
					$level = $fetch['level'];
					$image = $fetch['image'];
					?>
				
					<img src="<?php output($image); ?>" class="card-img-top" alt="<?php output( $first.$middle.$last ); ?>">
					<div class="card-body">
						<div class="card-title text-center text-muted badge badge-light" ><h4><?php outputTwo($first,$last); ?></h4></div>
							<p>Phone No: <?php output($phone); ?> </p>
							<p>Reg No: <?php output($regno); ?></p>
							<p>Dept: <?php output($dept); ?></p>
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
				
					<h2 class="" id="list-subject">Please follow the Instructions Giving below before proceeding.....</h2>
					<hr>
					<?php 
					$getinstruction = getAllInstruction();
					while(fetchData($data,$getinstruction)): 
					?>
					<ul class="mt-5 ">
						<li><?php output($data['text']); ?></li>
					</ul>
					<?php endwhile ?>
					<a href="subject.php?sid=<?php output($_SESSION['id']); amp; sname=<? ?>"><button class="btn btn-info" style="width: 100%;">PROCEED &nbsp;&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></button></a>
					
				</div>
			</div>
		</div>
	</div>



<?php include ('includes/footer.php'); ?>

