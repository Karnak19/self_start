<div class="modal fade" id="repas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">
						&times;
					</span>
				</button>
			<script language="javascript">
			function openvalider (idrepas,valrepas,servrepas)
			{

						location.href="repas/repas_gerer.php?idrepas="+idrepas+"&valrepas="+valrepas+"&servrepas="+servrepas;
			}
			</script>
				<h4 class="modal-title" id="exampleModalLabel">
					Repas
				</h4>
			</div>
			<div class="modal-body">

							<!--- Tableau -->
			<?php
				$sqlsoir = "SELECT * FROM lb_repas WHERE valide_repas='oui' ";
				$reqsoir = mysql_query($sqlsoir) or die(mysql_error());
			?>		

				<table id="table-utilisateurs"> 
						<tr> 
							<th>Nom</th> 
							<th>Tarif</th> 
							<th>Matin</th> 
							<th>Midi</th> 
							<th>Soir</th> 
							<th width="50px"></th> 
						</tr> 
					<?php
					while ($soir = mysql_fetch_assoc($reqsoir))
					{
						?>
						<tr>
							<td id="lib_repas-<?php echo $soir['id_repas']; ?>"  class="cellule" ondblclick="inlineMod(<?php echo $soir['id_repas']; ?>, this, 'lib_repas', 'texte')"><?php echo $soir['lib_repas']; ?></td>
							<td id="tarif_repas-<?php echo $soir['id_repas']; ?>"  class="cellule" ondblclick="inlineMod(<?php echo $soir['id_repas']; ?>, this, 'tarif_repas', 'nombre')"><?php echo $soir['tarif_repas']; ?></td>
							<td><input type="checkbox" style="width:40px"<?php if ($soir['matin_repas'] =='1' ){ ?> checked="checked" <?php } ?>   value="<?php echo $soir['id_repas']?>" onclick="openvalider('<?php echo $soir['id_repas']?>','<?php echo $soir['matin_repas'] ?>','matin_repas')" /></td>
							<td><input type="checkbox" style="width:40px"<?php if ($soir['midi_repas'] =='1' ){ ?> checked="checked" <?php } ?>  value="<?php echo $soir['id_repas']?>" onclick="openvalider('<?php echo $soir['id_repas']?>','<?php echo $soir['midi_repas'] ?>','midi_repas')" /></td>
							<td><input type="checkbox" style="width:40px"<?php if ($soir['soir_repas'] =='1' ){ ?> checked="checked" <?php } ?>   value="<?php echo $soir['id_repas']?>" onclick="openvalider('<?php echo $soir['id_repas']?>','<?php echo $soir['soir_repas'] ?>','soir_repas')" /></td>
							<td><a href="repas/repas_gerer.php?id=<?php echo $soir['id_repas']; ?>"><img src="img/Delete32.png"></a></td>
						</tr>
						<?php
					}
					?>
				</table>
				<br>
				<!---/////////////////////////////////////////////////////////Ajout d'un repas -->
				<form method="post" action="repas/repas_gerer.php">
					<input type="text" name="namerepas" value="" placeholder="Nom" required />
					<input type="text" name="tarifrepas" value="" placeholder="Tarif" required />
						<div class="btn-group" data-toggle="buttons">
						<label class="btn btn-default">
							<input type="checkbox" autocomplete="off" name="Matin"> Matin
						</label>
						<label class="btn btn-default">
							<input type="checkbox" autocomplete="off" name="Midi"> Midi
						</label>
						<label class="btn btn-default">
							<input type="checkbox" autocomplete="off" name="Soir"> Soir
					   </label>

					</div>
					<input type="submit" class="btn btn-success" value="Ajouter" name="Ajouter" >
				</form>
				<div class="clear"></div>
			</div>
		</div> 
	</div>
</div> 
