<?php
   include ('../inc/configure.inc.php');
   include ('../head.php');
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
$(function() {
var circle = $( "#photo" );

$( "#etu" ).selectmenu({
change: function( event, data ) {
circle.css( "background", data.item.value );
}
});
});
</script>
<style>
label {
display: block;
margin: 20px 0 0 0;
}
select {
width: 200px;
}
#photo {
border: 1px;
float: left;
background: #FFF;
background-size: 150px;
width: 150px;
height: 150px;
}

</style>
   <body>
      <div class="demo">
         <form action="#">
            <div id="photo"></div>
               <label for="etu">Etudiant</label>
               <select name="etu" id="etu">
                  <option value="" selected="selected">Choisissez un étudiant</option>
                  <?php
		     $sql= "SELECT * FROM lb_clients";
		     $req= mysql_query($sql);
                     while ($res= mysql_fetch_array($req))
		     {
                        $id=$res['id_cli'];
                        $nom=$res['nom_cli'];
                        $prenom=$res['prenom_cli'];
                        echo "<option value='url(../img/client/".$id.".jpg)'>".$nom." ".$prenom."</option>";
                     }
		  ?>
               </select>
         </form>
      </div>
   </body>
</html>