<div class="modal fade" id="cred" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
	<div class="modal-content">
	    <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title" id="exampleModalLabel">Credit compte</h4>
	    </div>
	    <div class="modal-body">
		<form method="post" action="compte/traitement_credit.php">
			<ul>Etudiant : <input type="text" name="id_client" value="" /></ul>
			<ul>Montant : <input type="text" name="montant_cred" value="" /></ul>
			<ul>Date transaction : <input type="date" name="date_cred" value="" /></ul>
			<ul>Type de paiement : 
			    <select name="ulste_type">
				<option value="">Choisissez un type de paiement</option>
				<option value="1">Especes</option>
				<option value="2">Chèque</option>
			    </select>
			</ul>
			<ul><input type="submit" name="valider" value="Valider"></ul> 
	    </div>
	</div>
    </div>
</div>
