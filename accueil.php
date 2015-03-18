<?php
	include 'inc/configure.inc.php';
	
	if(isset($_SESSION['type']))
	{
?>
<html>
	<?php
		//inclusion du head
		include ('head.php');
	?>
	<body>
		<div class="cornerlog">
			<a href="close.php"><img src="img/logout13.png"></a>
		</div>
		<div class="content">
			<h1>
				<?php
					echo $_SESSION['type'];
				?>
			</h1>
			
			<center>
				<div class="menu">
					<?php
						if($_SESSION['type'] == 'comptabilite' || $_SESSION['type'] == 'superadmin')
			                        {	//Affichage des boutons pour la compta et l'admin
					?>
							<a href="repas/repas.php"><img src="img/gear31.png"></a>
							<a href="compte/credit_compte.php"><img src="img/dollar41.png"></a>
					<?php
						}
					?>
					<a href="stats/stats.php"><img src="img/business24.png"></a>
					<a href="passage/passage.php"><img src="img/shopping206.png"></a>
					<a href="fidelisation/fidelisation.php"><img src="img/calendar147.png"></a>
				</div>
			</center>
		</div>
	</body>
</html>
<?php
	}
	else
	{	//Si il n'y a pas de session, redirection vers l'index de connexion
		header('location:index.php');
	}
?>