<html>
	<?php
		include 'inc/configure.inc.php';
	
		if(isset($_SESSION['type']))
		{
		//inclusion du head
		include ('head.php');
	?>
	<body>
		<?php
			include 'header.php';
		?>
		<div class="content">
			<center>
				<div class="menu">
					<?php
						if($_SESSION['type'] == 'comptabilite' || $_SESSION['type'] == 'superadmin')
			                        {	//Affichage des boutons pour la compta et l'admin
					?>
							<a href="repas/repas.php"><img src="img/gear31.png"></a>
							<a href="compte/credit_compte.php" data-toggle="modal" data-target="#cred"><img src="img/dollar159.png"></a>
					<?php
						}
					?>
					<a href="stats/stats.php"><img src="img/statistics8.png"></a>
					<a href="passage/passage.php"><img src="img/shopping206.png"></a>
					<a type="button" data-toggle="modal" data-target="#fidel"><img src="img/calendar147.png"></a>
				</div>
			</center>
		</div>
		<?php
			//Include des Modal Bootstrap
			include 'fidelisation/fidelisation.php'; //Fidélisation
		?>
	</body>
</html>
<?php
		}
		else
		{	//Si il n'y a pas de session, redirection vers l'index de connexion
			header('location:index.php');
		}
?>