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
               <li id="abs_fidel"><a href='#'>Absences Fidélisés</a></li>
               <li id="abs"><a href='#'>Absences</a></li>
               <li id="cred"><a href='#'>Crédits de comptes</a></li>
               <li id="showall"><a href='#'>Tout afficher</a></li>
               <li id="hideall"><a href='#'>Tout cacher</a></li>
            </ul>
         </div>
         
	 <!-- Partie SOLDES -->
	 <div class="divs" id="aff_sold">
            Soldes débiteurs
            <img src="../img/pdf.png">
               <ul><input type="submit" value="Télécharger" name="envoyer"></ul>
            <div class="clear"></div>
         </div>
         
	 <!-- Partie PASSAGES -->
	 <div class="divs" id="aff_pass">
            <form method="post" action="pdfpassage.php">
            Passages
            <img src="../img/pdf.png">
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
	    <ul><input type="submit" value="Télécharger" name="envoyer"></ul>
            <div class="clear"></div>
            </form>
         </div>
         
	 <!-- Partie ABSENCES -->
	 <div class="divs" id="aff_abs_fidel">
            Absences fidélisés
            <img src="../img/pdf.png">
            <ul><input type="text" class="datepicker" name="dateabs_fidel"></ul>
            <ul></ul>
            <ul><input type="submit" value="Télécharger" name="envoyer"></ul>
            <div class="clear"></div>
         </div>
         
         <div class="divs" id="aff_abs">
            Absences
            <img src="../img/pdf.png">
            <ul><input type="text" class="datepicker" name="dateabs"></ul>
            <ul></ul>
            <ul><input type="submit" value="Télécharger" name="envoyer"></ul>
            <div class="clear"></div>
         </div>
         
	 <!-- Partie CREDITS -->
         <div class="divs" id="aff_cred">
	    <form method="post" action="pdfcredit.php">
            Crédits de comptes
            <img src="../img/pdf.png">
            <ul><input type="text" class="datepicker" name="datedcred" placeholder="Du"></ul>
            <ul><input type="text" class="datepicker" name="datefcred" placeholder="Au"></ul>
            <ul><input type="submit" value="Télécharger" name="envoyer"></ul>
            <div class="clear"></div>
	    </form>
         </div>
      </div>
      
      <!-- Toggle (Hide/show) -->
        <script>
                $("#solde").click(function(){
                    $("#aff_sold").toggle(300);
                    $("#aff_pass").hide(600);
                    $("#aff_abs_fidel").hide(600);
                    $("#aff_abs").hide(600);
                    $("#aff_cred").hide(600);
                });
                $("#pass").click(function(){
                    $("#aff_pass").toggle(300);
                    $("#aff_sold").hide(600);
                    $("#aff_abs_fidel").hide(600);
                    $("#aff_abs").hide(600);
                    $("#aff_cred").hide(600);
                });
                $("#abs_fidel").click(function(){
                    $("#aff_abs_fidel").toggle(300);
                    $("#aff_abs").hide(600);
                    $("#aff_sold").hide(600);
                    $("#aff_pass").hide(600);
                    $("#aff_cred").hide(600);
                });
                $("#abs").click(function(){
                    $("#aff_abs").toggle(300);
                    $("#aff_pass").hide(600);
                    $("#aff_abs_fidel").hide(600);
                    $("#aff_sold").hide(600);
                    $("#aff_cred").hide(600);
                });
                $("#cred").click(function(){
                    $("#aff_cred").toggle(300);
                    $("#aff_abs").hide(600);
                    $("#aff_sold").hide(600);
                    $("#aff_pass").hide(600);
                    $("#aff_abs_fidel").hide(600);
                });
                $("#showall").click(function(){
                  $("#aff_sold").show(300);
                  $("#aff_pass").show(300);
                  $("#aff_abs_fidel").show(300);
                  $("#aff_abs").show(300);
                  $("#aff_cred").show(300);
                });
                $("#hideall").click(function(){
                  $("#aff_sold").hide(600);
                  $("#aff_pass").hide(400);
                  $("#aff_abs_fidel").hide(300);
                  $("#aff_abs").hide(200);
                  $("#aff_cred").hide(100);
                });
                
                
        </script>
   </body>
</html>