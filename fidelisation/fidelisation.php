<div class="modal fade" id="fidel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">
						&times;
					</span>
				</button>
				<h4 class="modal-title" id="exampleModalLabel">
					Fidélisation
				</h4>
			</div>
			<form method="post" action="fidelisation/traitement_fidelisation.php">
				<div class="modal-body">
					<div class="form-group">
                                                <div class="input_container">
                                                   <input type="text" id="nom_fid" name="nom_fid" onkeyup="autocompletfid()" required>
                                                   <input type="hidden" id="id_fid" name="id_fid">
                                                   <ul id="list_nom_fid"></ul>
                                                </div>
					</div>
					<div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default">
							<input type="checkbox" autocomplete="off" name="lundi"> Lundi
						</label>
						<label class="btn btn-default">
							<input type="checkbox" autocomplete="off" name="mardi"> Mardi
						</label>
						<label class="btn btn-default">
							<input type="checkbox" autocomplete="off" name="mercredi"> Mercredi
					   </label>
					   <label class="btn btn-default">
							<input type="checkbox" autocomplete="off" name="jeudi"> Jeudi
					   </label>
					   <label class="btn btn-default">
							<input type="checkbox" autocomplete="off" name="vendredi"> Vendredi
					   </label>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-warning" data-dismiss="modal">
						Annuler
					</button>
					<input type="submit" class="btn btn-success" value="Fidéliser">
				</div>
			</form>
		</div>
	</div>
</div>