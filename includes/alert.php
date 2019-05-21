<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		
		/*For Custom Alert box*/
#dialogoverlay {
	display: none;
	opacity: .8;
	position: fixed;
	top: 0px;
	left: 0px;
	background: #FFF;
	width: 100%;
	z-index: 10;
}
#dialogbox {
	display: none;
	position: fixed;
	background: #000;
	border-radius: 7px;
	width: 550px;
	z-index: 10;
}
#dialogbox > div{background: #FFF; margin: 8px;}
#dialogbox > div > #dialogboxhead {background: #243665; font-size: 19px; padding: 10px; color: #CCC;}
#dialogbox > div > #dialogboxbody {background: #57565665;  padding: 20px; color: #FFF;text-align: center;}
#dialogbox > div > #dialogboxfoot {background: #243665;  padding: 10px; text-align: right;}

	</style>
	<title></title>
</head>

<body>
<div id="dialogoverlay"></div>
<div id="dialogbox">
<div>
	<div id="dialogboxhead"></div>
	<div id="dialogboxbody"></div>
	<div id="dialogboxfoot"></div>
</div>
</div>



<script type="text/javascript">
	  
    	 function CustomAlert () {
    	  	this.render = function (dialog){
    	  			var winW = window.innerWidth;
    	  			var winH = window.innerHeight;
    	  			var dialogoverlay = document.getElementById('dialogoverlay');
    	  			var dialogbox = document.getElementById('dialogbox');
    	  			dialogoverlay.style.display ="block";
    	  			dialogoverlay.style.height = winH+"px"; 
    	  			dialogbox.style.left = (winW/2) - (550 * .5) +"px";
    	  			dialogbox.style.top = "200px";
    	  			dialogbox.style.display = "block";
    	  			document.getElementById('dialogboxhead').innerHTML = "Confirmation message";
    	  			document.getElementById('dialogboxbody').innerHTML = dialog;
    	  	document.getElementById('dialogboxfoot').innerHTML = '<button onclick="alert.ok()">OK</button>';
    	  	}
    	  	this.ok = function (){
    	  		document.getElementById('dialogbox').style.display = "none";
    	  		document.getElementById('dialogoverlay').style.display = "none";

    	  	}

    	  }
    	  var alert = new CustomAlert ();
</script>
</body>
</html>