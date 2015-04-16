<div class="modal fade" id="repas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">
						&times;
					</span>
				</button>
				<h4 class="modal-title" id="exampleModalLabel">
					Repas
				</h4>
			</div>
			<div class="modal-body">
				<?php
				$sql = "SELECT * FROM lb_repas WHERE valide='oui'";
				$req = mysql_query($sql) or die(mysql_error());
				?>
				<table id="table-utilisateurs"> 
						<tr> 
							<th>Nom</th> 
							<th>Tarif</th> 
							<th width="50px"></th> 
						</tr> 
					<?php
					while ($user = mysql_fetch_assoc($req))
					{
						?>
						<tr>
							<td id="lib_repas-<?php echo $user['id_repas']; ?>"  class="cellule" ondblclick="inlineMod(<?php echo $user['id_repas']; ?>, this, 'lib_repas', 'texte')"><?php echo $user['lib_repas']; ?></td>
							<td id="tarif_repas-<?php echo $user['id_repas']; ?>"  class="cellule" ondblclick="inlineMod(<?php echo $user['id_repas']; ?>, this, 'tarif_repas', 'nombre')"><?php echo $user['tarif_repas']; ?></td>
							<td><a href="repas/repas_gerer.php?id=<?php echo $user['id_repas']; ?>"><img src="img/Delete32.png"></a></td>
						</tr>
						<?php
					}
					?>
				</table>
				<br>
				<!---Ajout d'un repas -->
				<form method="post" action="repas/repas_gerer.php">
					<input type="text" name="namerepas" value="" placeholder="Nom" required />
					<input type="text" name="tarifrepas" value="" placeholder="Tarif" required />
					<input type="submit" class="btn btn-success" value="Ajouter" name="Ajouter" >
				</form>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</div>