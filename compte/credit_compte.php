<div class="modal fade" id="cred" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
	<div class="modal-content">
	    <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title" id="exampleModalLabel">Credit compte</h4>
	    </div>
	    <form method="post" action="compte/traitement_credit.php">
	    <div class="modal-body" id="cred">
		<div class="form-group">
		    <div class="input_container">
<<<<<<< HEAD
			<input type="text" id="nom_cred" onkeyup="autocompletcred()" required>
=======
			<input type="text" id="nom_cred" onkeyup="autocompletcred()" autocomplete="off">
>>>>>>> origin/master
			    <input type="hidden" id="id_cred" name="id_cred">
			<ul id="list_nom_cred"></ul>
		    </div>
		</div>
		<input type="text" name="montant_cred" value="" placeholder="Montant €" required />
		<div class="btn-group" data-toggle="buttons">
		    <label class="btn btn-default">
			<input type="radio" autocomplete="off" name="type" value="1">Espèce
		    </label>
		    <label class="btn btn-default">
			<input type="radio" autocomplete="off" name="type" value="2">Chèque
		    </label>
		</div>
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
