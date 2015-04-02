<<<<<<< HEAD
<div class="modal fade" id="passa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="exampleModalLabel">Passage</h4>
         </div>
         <div class="modal-body" id="pass">
            <form>
                     <?php $datenow=date ("Y-m-d");?>
                          <ul>Jour : <?php echo us_to_fr($datenow);?></ul>

                  <ul><div class="btn-group" data-toggle="buttons">
				<label class="btn btn-default">
				    <input type="radio" autocomplete="off" name="1">Matin
				</label>
				<label class="btn btn-default">
				    <input type="radio" autocomplete="off" name="2">Midi
				</label>
                                <label class="btn btn-default">
				    <input type="radio" autocomplete="off" name="1">Soir
				</label>
			    </div>
			</ul>
                          <ul>Code Client : <input type="text" name="codecli" value=" " required/></ul>
         </div>
         <div class="modal-footer">
	    <button type="button" class="btn btn-warning" data-dismiss="modal">
	       Annuler
	    </button>
	    <input type="submit" class="btn btn-success" value="Valider">
               </form>
	 </div>
      </div>
   </div>
</div>
=======
<html>
   <?php
      include ('../inc/configure.inc.php');
      include ('../head.php');
   ?>
   <body>
   </body>
</html>
>>>>>>> parent of 3bcabf3... photo dans passage
