function showSubject1(val){
	$.ajax({
		type:"POST",
		url:"includes/subject1.php",
		data: 'subject1='+val,
		success: function(data){
			$("#subject1").html(data);
		}
	});
}

function showSubject2(val){
	$.ajax({
		type:"POST",
		url:"includes/subject2.php",
		data: 'subject2='+val,
		success: function(data){
			$("#subject2").html(data);
		}
	});
}

function showSubject3(val){
	$.ajax({
		type:"POST",
		url:"includes/subject3.php",
		data: 'subject3='+val,
		success: function(data){
			$("#subject3").html(data);
		}
	});
}

function showSubject4(val){
	$.ajax({
		type:"POST",
		url:"includes/subject4.php",
		data: 'subject4='+val,
		success: function(data){
			$("#subject4").html(data);
		}
	});
}

function showSubject5(val){
	$.ajax({
		type:"POST",
		url:"includes/subject5.php",
		data: 'subject5='+val,
		success: function(data){
			$("#subject5").html(data);
		}
	});
}
function showSubject6(val){
	$.ajax({
		type:"POST",
		url:"includes/subject6.php",
		data: 'subject6='+val,
		success: function(data){
			$("#subject6").html(data);
		}
	});
}function showSubject7(val){
	$.ajax({
		type:"POST",
		url:"includes/subject7.php",
		data: 'subject7='+val,
		success: function(data){
			$("#subject7").html(data);
		}
	});
}function showSubject8(val){
	$.ajax({
		type:"POST",
		url:"includes/subject8.php",
		data: 'subject8='+val,
		success: function(data){
			$("#subject8").html(data);
		}
	});
}function showSubject9(val){
	$.ajax({
		type:"POST",
		url:"includes/subject9.php",
		data: 'subject9='+val,
		success: function(data){
			$("#subject9").html(data);
		}
	});
}


