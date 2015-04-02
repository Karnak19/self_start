<div class="modal fade" id="cred" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
	<div class="modal-content">
	    <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title" id="exampleModalLabel">Credit compte</h4>
	    </div>
	    <div class="modal-body" id="cred">
		<form method="post" action="compte/traitement_credit.php">
			<ul>Etudiant : <input type="text" name="id_client" value="" /></ul>
			<ul>Montant : <input type="text" name="montant_cred" value="" /></ul>
			<ul><div class="btn-group" data-toggle="buttons">
				<label class="btn btn-default">
				    <input type="radio" autocomplete="off" name="type" value="1">Espèce
				</label>
				<label class="btn btn-default">
				    <input type="radio" autocomplete="off" name="type" value="2">Chèque
				</label>
			    </div>
			</ul>
	    </div>
	    <div class="modal-footer">
		<button type="button" class="btn btn-warning" data-dismiss="modal">
		    Annuler
		</button>
		<input type="submit" class="btn btn-success" value="Créditer" name="Crediter" >
		</form>
	    </div>
	</div>
    </div>
</div>
