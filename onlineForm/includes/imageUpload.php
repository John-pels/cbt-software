<?php 
include_once ('config.php');
include_once ('session.php');
$id = $_SESSION['id'];
	$select = mysqli_query($con, "SELECT * FROM register WHERE id = '$id'");
	$rows = mysqli_num_rows($select);
	$fetch = mysqli_fetch_array($select);
	$surname = $fetch['surname'];
	$otherNames = $fetch['otherNames'];
	?>
<?php 

$userPassport = $_FILES['userPassport'];
	$imageName = $_FILES['userPassport']['name'];
	$imageTmpName = $_FILES['userPassport']['tmp_name'];
	$imageError = $_FILES['userPassport']['error'];
	$imageSize = $_FILES['userPassport']['size'];
	$imageType = $_FILES['userPassport']['type'];
	$imageExt = explode('.', $imageName);
	$imageActualExt = strtolower(end($imageExt));
	$allowedExt = array("jpg","jpeg","png");
		if (in_array($imageActualExt, $allowedExt)) {
			if ($imageError === 0) {
				if ($imageSize <= 150000) {
					$imageNewName = $surname.' '.$otherNames.".".$imageActualExt;
					$imageDestination = '../images/Student_Images/'. $imageNewName;
					move_uploaded_file($imageTmpName, $imageDestination);
					$updateImage = mysqli_query($con,"UPDATE register SET passport = '$imageDestination' WHERE id ='$id'");
					$imageSelect = mysqli_query($con, "SELECT passport FROM register WHERE id = '$id'");
					$imageRows = mysqli_num_rows($imageSelect);
					$imageFetch = mysqli_fetch_array($imageSelect);
					
?>
			<img class="img-thumbnail image-preview" src="<?php echo str_replace("../", "", $imageFetch['passport']); ?>"/>
<?php
				}
				else{
					echo "Image too large to save!";
				}
			}
			else{
				echo "Error in Uploading!";
			}
		}
		else{
			echo "You cannot upload book of this type";
		}
		
 ?>