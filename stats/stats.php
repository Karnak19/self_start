<html>
   <?php
      include ('../inc/configure.inc.php');
      include ('../head.php');
 
   ?>
   <link rel="stylesheet" href="<?php echo $link; ?>css/cssmenu.css">
   <script src="<?php echo $link; ?>js/cssmenu.js"></script>
   <body>
      <?php
	 include '../header.php';
      ?>
      <div class="content">
         <div id='cssmenu'>
            <ul>
               <li id="solde"><a href='#'>Soldes débiteurs</a></li>
               <li id="pass"><a href='#'>Passages</a></li>
               <li id="abs"><a href='#'>Absences</a></li>
               <li id="cred"><a href='#'>Crédits de comptes</a></li>
               <li id="showall"><a href='#'>Tout afficher</a></li>
               <li id="hideall"><a href='#'>Tout cacher</a></li>
            </ul>
         </div>
         
		 <!-- Partie SOLDES -->
		 <div class="divs" id="aff_sold">
            Soldes débiteurs
            <a href='pdfsoldes.php' target="_blank"><img src="../img/pdf.png"></a>
            <div class="clear"></div>
         </div>
         
		 <!-- Partie PASSAGES -->
		 <div class="divs" id="aff_pass">
            <form method="post" action="pdfpassage.php">
            Passages
            <a  target="_blank"><img src="../img/pdf.png"></a>
            <ul><input type="text" class="datepicker" name="datepass"></ul>
            <ul><div class="btn-group" data-toggle="buttons">
	       <label class="btn btn-default">
		  <input type="radio" autocomplete="off" name="service" value="Matin"> Matin
	       </label>
               <label class="btn btn-default">
		  <input type="radio" autocomplete="off" name="service" value="Midi"> Midi
	       </label>
               <label class="btn btn-default">
                  <input type="radio" autocomplete="off" name="service" value="Soir"> Soir
               </label>
            </div></ul>
			<ul><input type="submit" value="envoyer" name="envoyer"></ul>
            <div class="clear"></div>
            </form>
         </div>
         
		 <!-- Partie ABSENCES -->
		 <div class="divs" id="aff_abs">
            Absences
            <a href='' target="_blank"><img src="../img/pdf.png"></a>
            <ul><input type="text" class="datepicker" name="dateabs"></ul>
            <ul><div class="btn-group" data-toggle="buttons">
	       <label class="btn btn-default">
		  <input type="radio" autocomplete="off" name="regime"> Régime
	       </label>
               <label class="btn btn-default">
		  <input type="radio" autocomplete="off" name="fidelise"> Fidélisé
	       </label>
            </div></ul>
            <div class="clear"></div>
         </div>
         
		 <!-- Partie CREDITS -->
		 <div class="divs" id="aff_cred">
		 <form method="post" action="pdfcredit.php">
            Crédits de comptes
            <a target="_blank"><img src="../img/pdf.png"></a>
            <ul><input type="text" class="datepicker" name="datedcred"></ul>
            <ul><input type="text" class="datepicker" name="datefcred"></ul>
            <div class="clear"></div>
			<ul><input type="submit" value="envoyer" name="envoyer"></ul>
		</form>
         </div>
		 
      </div>
      
      <!-- Toggle (Hide/show) -->
        <script>
                $("#solde").click(function(){
                    $("#aff_sold").toggle(300);
                    $("#aff_pass").hide(600);
                    $("#aff_abs").hide(600);
                    $("#aff_cred").hide(600);
                });
                $("#pass").click(function(){
                    $("#aff_pass").toggle(300);
                    $("#aff_sold").hide(600);
                    $("#aff_abs").hide(600);
                    $("#aff_cred").hide(600);
                });
                $("#abs").click(function(){
                    $("#aff_abs").toggle(300);
                    $("#aff_sold").hide(600);
                    $("#aff_pass").hide(600);
                    $("#aff_cred").hide(600);
                });
                $("#cred").click(function(){
                    $("#aff_cred").toggle(300);
                    $("#aff_sold").hide(600);
                    $("#aff_pass").hide(600);
                    $("#aff_abs").hide(600);
                });
                $("#showall").click(function(){
                  $("#aff_sold").show(300);
                  $("#aff_pass").show(300);
                  $("#aff_abs").show(300);
                  $("#aff_cred").show(300);
                });
                $("#hideall").click(function(){
                  $("#aff_sold").hide(600);
                  $("#aff_pass").hide(400);
                  $("#aff_abs").hide(300);
                  $("#aff_cred").hide(200);
                });
                
                
        </script>
   </body>
</html>