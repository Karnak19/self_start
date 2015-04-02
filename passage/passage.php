<html>
   <?php
      include ('../inc/configure.inc.php');
      include ('../head.php');
      
      $service = new passage(null, null, null, null, null);

   ?>
   <body>
      <?php
	 include '../header.php';
      ?>
      <div class="content">
         <div class="divg">
            <?php
               setlocale (LC_TIME, 'fr_FR','fra'); echo (strftime("%A %d %B %Y"));
               echo "<br>Service : ". $service->service();
            ?>
            <div class="input_container">
	       <input type="text" id="nom_pass" onkeyup="autocompletpass()">
	       <ul id="list_nom_pass"></ul>
	    </div>
            <div class="btn-group" data-toggle="buttons">
               <?php
                  if ($service == "matin")
                  {
                     echo '<label class="btn btn-default">
                        <input type="radio" autocomplete="off" name="type" value="2">Petit Déjeuner
                  </label>';
                  }
                  else
                  {
                     echo '<label class="btn btn-default">
                        <input type="radio" autocomplete="off" name="type" value="1">Repas Complet
                     </label>';
                  }
               ?>
               <label class="btn btn-default">
                  <input type="radio" autocomplete="off" name="type" value="3">Café
               </label>
	    </div>
            <input type="submit" class="btn btn-success" value="Passer" name="Passer" >
         </div>
      </div>
   </body>
</html>