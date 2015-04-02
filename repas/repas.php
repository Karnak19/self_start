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

		$sql = "SELECT * FROM lb_repas";
		$req = mysql_query($sql) or die(mysql_error());
	?>
				<table id="table-utilisateurs"> 
						<tr> 
							<th>Nom</th> 
<<<<<<< HEAD
							<th>Tarif</th> 
					
						</tr> 
					<?php
	while ($user = mysql_fetch_assoc($req))
	{
	?>
		<tr>
			<td id="lib_repas-<?php echo $user['id_repas']; ?>"  class="cellule" ondblclick="inlineMod(<?php echo $user['id_repas']; ?>, this, 'lib_repas', 'texte')"><?php echo $user['lib_repas']; ?></td>

			<td id="tarif_repas-<?php echo $user['id_repas']; ?>"  class="cellule" ondblclick="inlineMod(<?php echo $user['id_repas']; ?>, this, 'tarif_repas', 'nombre')"><?php echo $user['tarif_repas']; ?></td>
</tr>
	<?php
	}
	?>
	</table>
				<div class="clear"></div>
=======
							<th>Prix</th> 
							<th>Commandes</th>
						</tr> 
					</thead> 
					<tbody>
						<?php
							for ($i=1; $i<=$id; $i++)
							{
								$repas=new repas ($i, null, null);
								$nom=$repas->nom_repas ($i);
								$tarif=$repas->tarif_repas ($i);
								echo "<tr>
										<td>
											<input type='hidden' name='id' value='$i'>"
											.$nom.
										"</td>
										<td>"
											.$tarif." &#128".
										"</td>
										<td>
											<button onclick='repas_gerer.php?id=".$i."&action=mod'>
												<img src='./img/Edit32.png'>
											</button>
											<br>
											<button onclick='repas_gerer.php?id=".$i."&action=suppr'>
												<img src='./img/Delete32.png'>
											</button>
										</td>
									</tr>";
							}
						?>
					</tbody> 
				</table>
>>>>>>> origin/master
			</div>
		</div>
	</div>
</div>