<html>
<!--   <?php
      include ('../inc/configure.inc.php');
      include ('../head.php');
   ?> -->
   <body>
      <div class="modal fade" id="fidel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="exampleModalLabel">Fidélisation</h4>
               </div>
               <div class="modal-body">
                  <form>
                     <div class="form-group">
                        <select id="client" name="client">
                        <?php
                           $sql= "SELECT * FROM lb_clients";
                           $req= mysql_query($sql);
                           while ($res= mysql_fetch_array($req))
                           {
                               $id=$res['id_cli'];
                               $nom=$res['nom_cli'];
                               $prenom=$res['prenom_cli'];
                               echo "<option value='".$id."'>".$nom." ".$prenom."</option>";
                           }
                        ?>
                        </select>
                     </div>
                     <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-default">
                           <input type="checkbox" autocomplete="off"> Lundi
                        </label>
                        <label class="btn btn-default">
                           <input type="checkbox" autocomplete="off"> Mardi
                        </label>
                        <label class="btn btn-default">
                           <input type="checkbox" autocomplete="off"> Mercredi
                        </label>
                        <label class="btn btn-default">
                           <input type="checkbox" autocomplete="off"> Jeudi
                        </label>
                        <label class="btn btn-default">
                           <input type="checkbox" autocomplete="off"> Vendredi
                        </label>
                     </div>
                  </form>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-warning" data-dismiss="modal">Annuler</button>
                  <button type="button" class="btn btn-success">Fidéliser</button>
				  <?php
					$client=new client();
					switch ($fidelise)
					{
					case "Lundi": $client->set_lundi ($id);
					break;
					case "Mardi": $client->set_mardi ($id);
					break;
					case "Mercredi": $client->set_mercredi ($id);
					break;
					case "Jeudi": $client->set_jeudi ($id);
					break;
					case "Vendredi": $client->set_vendredi ($id);
					break;
					}
					?>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>