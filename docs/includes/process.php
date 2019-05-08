<?php 
// session_start();
	// include "includes/config.php";

	// $score = 0;
	// $total = $totalScore; //Total number of question
	// $points = 1; //Points per correct answer
	// $highest = $total * $points;
	// $from_time1 = date('Y-m-d H:i:s');
	// $to_time1 = $_SESSION['end_time'];


	// $timeFirst = strtotime($from_time1);
	// $timeLast = strtotime($to_time1);

	// $diffInSeconds = $timeLast - $timeFirst;

    // $finalTime = gmdate("H:i:s",  $diffInSeconds);

	// echo "<i class=\"fa fa-clock-o\" style=\"color:green;\"></i>"."   ".$finalTime;

 ?>
<?php
$dateFormat = "d F Y -- g:i a";
$targetDate = time() + (25*60);//Change the 25 to however many minutes you want to countdown
$actualDate = time();
$secondsDiff = $targetDate - $actualDate;
$remainingDay     = floor($secondsDiff/60/60/24);
$remainingHour    = floor(($secondsDiff-($remainingDay*60*60*24))/60/60);
$remainingMinutes = floor(($secondsDiff-($remainingDay*60*60*24)-($remainingHour*60*60))/60);
$remainingSeconds = floor(($secondsDiff-($remainingDay*60*60*24)-($remainingHour*60*60))-($remainingMinutes*60));
$actualDateDisplay = date($dateFormat,$actualDate);
$targetDateDisplay = date($dateFormat,$targetDate);


?>
<input type="text" value="<?php echo $remainingDay; ?>" id="remainingDay">
<input type="text" value="<?php echo $remainingHour; ?>" id="remainingHour">
<input type="text" value="<?php echo $remainingMinutes; ?> " id="remainingMinutes">
<input type="text" value="<?php echo $remainingSeconds; ?>" id="remainingSeconds">
<div id="remain">	</div>
<script src="../assets/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
  var days = $("#remainingDay").val();

  var hours = $("#remainingHour").val();

  var minutes = $("#remainingMinutes").val();
 
  var seconds =  $("#remainingSeconds").val();
function setCountDown ()
{
  seconds--;
  if (seconds < 0){
      minutes--;
      seconds = 59
  }
  if (minutes < 0){
      hours--;
      minutes = 59
  }
  if (hours < 0){
      days--;
      hours = 23
  }
  $("#remain").html(days+" days, "+hours+" hours, "+minutes+" minutes, "+seconds+" seconds");
 	
  if (minutes == '00' && seconds == '00') {
  		 seconds = "00"; 
  		 clearInterval(SD);
   		//window.alert("Time is up. Press OK to continue."); // change timeout message as required
  		window.location = "timer.php" // Add your redirect url
 	} 

}
setCountDown;
var SD=setInterval( setCountDown, 1000 );


</script>
