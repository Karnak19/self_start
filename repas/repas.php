
      <div class="modal fade" id="repas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="exampleModalLabel">Repas</h4>
               </div>

               <div class="modal-body">

                  <form>
                    	<table border="1"  cellpadding="" width="90%" >
				<tr>
					<th >Repas</th><!-- nom repas -->
					<th >Tarif</th><!-- tarif repas -->
					<th>Option</th><!-- modif/supp-->
				</tr>
				<!--//////////////Requete d'affichage du tableau selon les champs de recherche valider/////////////// -->	
				<?php
				
				//on cree deux requete par rapport a la recherche effectue une pour le tableau et l'autre pour l'affichage de l'intervention totale
				$sqltab = "SELECT * FROM lb_repas
										ORDER BY  lib_repas DESC";
				
				$verif = mysql_query($sqltab)or die(mysql_error());
				while($tab = mysql_fetch_array($verif))	//affiche les valeurs recupere par la recherche ou sans dans le tableau 
				{					
					/* Si un interval est de plus de 24h genre( 1jours et 3h) il affichera juste 3h mais les 27h sont prix en compte dans l'interval total en bas*/
					echo "<tr>
					<td>".$tab['lib_repas']."</td>
					<td>".$tab['tarif_repas']."</td>
					<td></td>
					<tr>";
					}
					?>
               </div>
            </div>
         </div>
      </div>


