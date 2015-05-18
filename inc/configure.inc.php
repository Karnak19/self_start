<?php
	session_start();
	$hostname="mysql.hostinger.fr";
	$user="u481883468_root";
	$pass="celxrdnoza";
	$db="u481883468_self";
	$database=@mysql_connect ("$hostname", "$user", "$pass");
	@mysql_select_db ("$db", $database);
	
	$title = "<title>Self Start</title>";
	$link = "http://localhost/self_start/";
?>