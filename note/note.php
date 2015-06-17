<html>
   <?php
      include ('../inc/configure.inc.php');
      include ('../head.php');
   ?>
   <body>
      <?php
	 include '../header.php';
      ?>
      <div class="content">
         <form method="post" action="note_traite.php">
            <input type="text" id="id_cli" name="id_cli" placeholder="ID Client">
            <input type="text" class="datepicker" name="date_pass" placeholder="Date">
            <input type="number" id="note" name="note" placeholder="Note" min="0" max="20"> sur 20.
            <input type="submit" class="btn btn-success" value="noter">
         </form>
      </div>
   </body>