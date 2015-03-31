<?php
	require_once ("../classes/repas.class.inc.php");

	$id=$_GET ["id"];
	$repas=new repas ($id, $nom, $prix);
	$nom=$repas->nom_repas ($id);
	$prix=$repas->tarif_repas ($id);
	$action=$_GET ["action"];

	if ($action=="mod")
	{
		echo "<div class='modal fade' id='repas' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
				<div class='modal-dialog'>
					<div class='modal-content'>
						<div class='modal-header'>
							<button type='button' class='close' data-dismiss='modal' aria-label='Close'>
								<span aria-hidden='true'>
									&times;
								</span>
							</button>
							<h4 class='modal-title' id='exampleModalLabel'>
								Repas
							</h4>
						</div>
						<div class='modal-body'>
							<label>
								montant actuel :
							</label>
							<input type='number' readonly>
							<br>
							<br>
							<label>
								nouveau montant :
							</label>
							<input type='number' required>
							&#129
							<input type='button' onclick='".$repas->mod_repas ($id, $tarif)."; location.href=\"accueil.php\";'>
						</div>
					</div>
				</div>";
	}
	else
	{
		if ($action=="suppr")
		{
			$repas->suppr_repas ($id);
		}
		else
		{
			header ("Location: accueil.php");
		}
	}
?>