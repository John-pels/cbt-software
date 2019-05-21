<?php
	define("servername", "localhost");
	define("username", "root");
	define("password", "");
	define("dbname", "tri-exam");

		 GLOBAL $con;
		 $con = mysqli_connect(servername,username,password,dbname);
		 if(!$con){
		 	echo 'Connection error!';
		 }

?>