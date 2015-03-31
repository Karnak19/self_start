<?php
include 'classes/date.class.inc.php';
?>
      <div class="modal fade" id="passa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="exampleModalLabel">Passage</h4>
               </div>

               <div class="modal-body">
			   <?php $datenow=date ("Y-m-d");?>
				<ul><label>Jour : </label> <input type="text" name="day" value="<?php echo us_to_fr($datenow);?>" required /></ul>
				<ul><label>Service : </label> <input type="text" name="serv" value=" " required/></ul>
				<ul><label>Code Client : </label> <input type="text" name="codecli" value=" " required/></ul>
             <input type="submit" class="bouton" value="Valider" name="Valider"></ul>	
          </div>
            </div>
         </div>
      </div>