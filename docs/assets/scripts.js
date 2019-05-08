$(document).ready(function(){
	$("#login").click(function(){
		
		$("#login").html('<img src="assets/images/load.gif" alt="">');
		
			setTimeout(function(){
				
				var user = $('#user').val();
				var pass = $('#pass').val();
			
			// alert('Name or username must be filled up');
			// swal('SUCCESS', 'You have successfully logged in', 'success');
			if (user == '' || pass == '') {
				$("#login").html('LOGIN');
				swal('OOPS!', 'Please check your username or password!', 'warning');

			}
			else{
				$.ajax({
				url:"script.php",
				method:"POST",
				data: {user:user,pass:pass},
				success:function(data){
					alert(data);
					if (data =='success') {
						swal('SUCCESS', 'You have successfully logged in', 'success');
						setTimeout(function(){
							window.location='home.php';
						},2000);
					} else{
						swal('OOPS!', 'Please check your username or password!', 'warning');
					}
				}

			});
			}
			
			
			
			
		},3000);

			 
		
	});


			$("#reg_in").click(function(){
				$(".log_form").fadeOut(1000);
				setTimeout(function(){
					$(".login").load("register.php");
				},1000);
				
			});

			
});
