<?php
	session_start();
	$hostname="127.0.0.1";
	$user="BazESO";
	$pass="root";
	$db="lb_self";
	
	
	$database=@mysqli_connect ("$hostname", "$user", "$pass", "$db");
	//@mysql_select_db ("$db", $database);
	
	$title = "<title>Self Start</title>";
	$link = "http://localhost:3000/www/self_start/";
?>