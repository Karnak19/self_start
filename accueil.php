<html>
	<?php
		include ('inc/configure.inc.php');
		include ('head.php');
	?>
	<body>
		<div class="cornerlog">
			<img src="img/logout13.png">
		</div>
		<h1>
			<?php
				echo $_SESSION['type'];
			?>
		</h1>
		
		<center>
			<div class="menu">
				<a href="repas/repas.php"><img src="img/gear31.png"></a>
				<a href="passage/passage.php"><img src="img/shopping206.png"></a>
				<a href="compte/credit_compte.php"><img src="img/dollar41.png"></a>
				<a href="fidelisation/fidelisation.php"><img src="img/calendar147.png"></a>
				<a href="stats/stats.php"><img src="img/business24.png"></a>
			</div>
		</center>
	</body>
</html>