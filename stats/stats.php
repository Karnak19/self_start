<html>
   <?php
      include ('../inc/configure.inc.php');
      include ('../head.php');
 
   ?>
   <link rel="stylesheet" href="<?php echo $link; ?>css/stats.css">
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
            </ul>
         </div>
         <div class="divg" id="aff_sold" style="display: none;">
            <a href='pdfsoldes.php'><img src="../img/pdf.png"> Soldes débiteurs</a>
         </div>
         <div class="divg" id="aff_pass" style="display: none;">
            <a href='pdfpassage.php'><img src="../img/pdf.png"> Passages</a>
            <ul><input type="text" id="datepicker" name="date"></ul>
         </div>
         <div class="divg" id="aff_abs" style="display: none;">
             <a href='pdfabsents.php'><img src="../img/pdf.png"> Absences</a>
            <ul><input type="text" id="datepicker"></ul>
         </div>
         <div class="divg" id="aff_cred" style="display: none;">
             <a href='pdfcredit.php'><img src="../img/pdf.png"> Crédits de comptes</a>
            <ul><input type="text" id="datepicker"></ul>
         </div>
         <!--<table>
            <tr>
               <td>
                  <img src="../img/pdf.png">
               </td>
               <td>
                  Soldes débitteurs
               </td>
            </tr>
            <tr>
               <td>
                  <img src="../img/pdf.png">
               </td>
               <td>
                  Passages
               </td>
               <td>
                  <input type="text" id="datepicker">
               </td>
               <td>
                  <div class="btn-group" data-toggle="buttons">
                     <label class="btn btn-default">
                        <input type="radio" autocomplete="off" name="matin"> Matin
                     </label>
                     <label class="btn btn-default">
                        <input type="radio" autocomplete="off" name="midi"> Midi
                     </label>
                     <label class="btn btn-default">
                        <input type="radio" autocomplete="off" name="soir"> Soir
                     </label>
                  </div>
               </td>
            </tr>
            <tr>
               <td>
                  <img src="../img/pdf.png">
               </td>
               <td>
                  Absences
               </td>
               <td>
                  <input type="text" id="datepicker">
               </td>
               <td>
                  <div class="btn-group" data-toggle="buttons">
                     <label class="btn btn-default">
                        <input type="radio" autocomplete="off" name="matin"> Matin
                     </label>
                     <label class="btn btn-default">
                        <input type="radio" autocomplete="off" name="midi"> Midi
                     </label>
                     <label class="btn btn-default">
                        <input type="radio" autocomplete="off" name="soir"> Soir
                     </label>
                  </div>
               </td>
               <td>
                  <div class="btn-group" data-toggle="buttons">
                     <label class="btn btn-default">
                        <input type="radio" autocomplete="off" name="regime"> Interne/DP
                     </label>
                     <label class="btn btn-default">
                        <input type="radio" autocomplete="off" name="fidel"> Fidélisé
                     </label>
                  </div>
               </td>
            </tr>
            <tr>
               <td>
                  <img src="../img/pdf.png">
               </td>
               <td>
                  Crédits de comptes
               </td>
               <td>
                  <input type="text" id="datepicker">
               </td>
               <td>
                  <input type="text" id="datepicker">
               </td>
            </tr>
         </table>-->
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
        </script>
   </body>
</html>