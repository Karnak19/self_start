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
         <div class="divs" id="aff_sold">
            Soldes débiteurs
            <a href='pdfsoldes.php' target="_blank"><img src="../img/pdf.png"></a>
            <div class="clear"></div>
         </div>
         <div class="divs" id="aff_pass">
            Passages
            <a href='pdfpassage.php' target="_blank"><img src="../img/pdf.png"></a>
            <ul><input type="text" class="datepicker" name="datepass"></ul>
            <div class="clear"></div>
         </div>
         <div class="divs" id="aff_abs">
            Absences
            <a href='pdfabsents.php' target="_blank"><img src="../img/pdf.png"></a>
            <ul><input type="text" class="datepicker" name="dateabs"></ul>
            <div class="clear"></div>
         </div>
         <div class="divs" id="aff_cred">
            Crédits de comptes
            <a href='pdfcredit.php' target="_blank"><img src="../img/pdf.png"></a>
            <ul><input type="text" class="datepicker" name="datecred"></ul>
            <div class="clear"></div>
         </div>
      </div>
      
      <!-- Toggle (Hide/show) -->
        <script>
                $("#solde").click(function(){
                    $("#aff_sold").toggle(300);
                    $("#aff_pass").hide();
                    $("#aff_abs").hide();
                    $("#aff_cred").hide();
                });
                $("#pass").click(function(){
                    $("#aff_pass").toggle(300);
                    $("#aff_sold").hide();
                    $("#aff_abs").hide();
                    $("#aff_cred").hide();
                });
                $("#abs").click(function(){
                    $("#aff_abs").toggle(300);
                    $("#aff_sold").hide();
                    $("#aff_pass").hide();
                    $("#aff_cred").hide();
                });
                $("#cred").click(function(){
                    $("#aff_cred").toggle(300);
                    $("#aff_sold").hide();
                    $("#aff_pass").hide();
                    $("#aff_abs").hide();
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