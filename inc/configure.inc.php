<?php
	session_start();
	$hostname="127.0.0.1";
	$user="root";
	$pass="";
	$db="lb_self";
	$database=@mysql_connect ("$hostname", "$user", "$pass");
	@mysql_select_db ("$db", $database);
	
	$title = "<title>Self Start</title>";
?>