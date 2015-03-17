<head>
		
	<!-- include jQuery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
		
	<!-- Include Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		
	<!-- Include FontAwesome -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

		
	<?php
	echo $title;
		
	/*require_once 'inc/Mobile_Detect.php';
    
	$detect = new Mobile_Detect();
	
	// Check for any mobile device.
	if ($detect->isMobile())
	{
		echo '<link rel="stylesheet" href="stylesheets/style_mob.css" type="text/css">';
		echo '<link rel="stylesheet" href="stylesheets/bouton_mob.css" type="text/css">';
	}
	else
	{*/
		echo '<link rel="stylesheet" href="css/style.css" type="text/css">';
		echo '<link rel="stylesheet" href="css/bouton.css" type="text/css">';
	//}
	?>
	<!--<link rel="icon" type="image/x-icon" href="img/AAB.ico">-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>