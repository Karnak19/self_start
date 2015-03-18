<html>
	<?php
		include ('inc/configure.inc.php');
		include ('head.php');
	?>
	<body>
		<h1>
			<?php
				echo $_SESSION['type'];
			?>
		</h1>
		<a href="repas/repas.php">Repas</a>
		<a href="passage/passage.php">Passage</a>
		<a href="compte/credit_compte.php">Crédit compte</a>
		<a href="fidelisation/fidelisation.php">Fidélisation</a>
		<a href="stats/stats.php">Statistiques</a>
	</body>
</html>