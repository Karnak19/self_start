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
                  <h4 class="modal-title" id="exampleModalLabel">New message</h4>
               </div>
               <div class="modal-body">
                  <form>
                     <div class="form-group">
                        <label for="recipient-name" class="control-label">Recipient:</label>
                        <input type="text" class="form-control" id="recipient-name">
                     </div>
                     <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-primary">
                           <input type="checkbox" autocomplete="off"> Lundi
                        </label>
                        <label class="btn btn-primary">
                           <input type="checkbox" autocomplete="off"> Mardi
                        </label>
                        <label class="btn btn-primary">
                           <input type="checkbox" autocomplete="off"> Mercredi
                        </label>
                        <label class="btn btn-primary">
                           <input type="checkbox" autocomplete="off"> Jeudi
                        </label>
                        <label class="btn btn-primary">
                           <input type="checkbox" autocomplete="off"> Vendredi
                        </label>
                     </div>
                  </form>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                  <button type="button" class="btn btn-primary">Fidéliser</button>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>