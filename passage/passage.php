<html>
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

$( "#color" ).selectmenu({
change: function( event, data ) {
circle.css( "background", data.item.value );
}
});
});
</script>
<style>
fieldset {
border: 0;
margin-left: 300px;
}
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
            <fieldset>
               <label for="color">Circle color</label>
               <select name="color" id="color">
                  <option value="black">Black</option>
                  <option value="url('../img/client/411002.jpg')">Red</option>
                  <option value="url('../img/client/411001.jpg')">Yellow</option>
                  <option value="blue">Blue</option>
                  <option value="green">Green</option>
               </select>
            </fieldset>
         </form>
      </div>
   </body>
</html>