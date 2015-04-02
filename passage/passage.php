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
         <div>
            <div class="input_container">
	       <input type="text" id="nom_pass" onkeyup="autocompletpass()">
	       <ul id="list_nom_pass"></ul>
	    </div>
         </div>
      </div>
   </body>
</html>