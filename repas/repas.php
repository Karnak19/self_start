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
					$SQL_1="SELECT MAX(id_repas) AS id_repas FROM lb_repas";
					$req_1=mysql_query ($SQL_1) or die (mysql_error ());
					$res_1=mysql_fetch_array ($req_1);
					$id=$res_1 ["id_repas"];
				?>
				<table id="tblData">
					<thead> 
						<tr> 
							<th>nom</th> 
							<th>prix</th> 
							<th>commandes</th>
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
											<button onclick='repas_gerer.php?id='".$i."'&action=mod'>
												<img src='./img/Edit32.png'>
											</button>
											<br>
											<button onclick='repas_gerer.php?id='".$i."'&action=suppr'>
												<img src='./img/Delete32.png'>
											</button>
										</td>
									</tr>";
							}
						?>
					</tbody> 
				</table>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</div>