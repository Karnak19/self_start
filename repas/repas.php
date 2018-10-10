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
							
						</tr> 
					<?php
					while ($soir = mysql_fetch_assoc($reqsoir))
					{
						?>
						<tr>
							<td id="lib_repas-<?php echo $soir['id_repas']; ?>"  class="cellule" ondblclick="inlineMod(<?php echo $soir['id_repas']; ?>, this, 'lib_repas', 'texte')"><?php echo $soir['lib_repas']; ?></td>
							<td id="tarif_repas-<?php echo $soir['id_repas']; ?>"  class="cellule" ondblclick="inlineMod(<?php echo $soir['id_repas']; ?>, this, 'tarif_repas', 'nombre')"><?php echo $soir['tarif_repas']; ?></td>

						</tr>
						<?php
					}
					?>
				</table>
				<br>

				<div class="clear"></div>
			</div>
		</div> 
	</div>
</div> 
