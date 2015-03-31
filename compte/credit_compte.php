<div class="modal fade" id="cred" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
		<div class="modal-content">
           <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="exampleModalLabel">Credit compte</h4>
            </div>

            <div class="modal-body">
   <form method="post" action="traitement_credit.php">
   <body>
		<h1><title> Credit compte </title></h1>
       
	   <br><h1 style= "text-align:center;">CREDIT COMPTE</h1><br><br>
	
	   <br>
	   <label>Etudiant : </label>
       <input type="text" name="etudiant" value="" /><br>
	   
       
       <label>Montant :</label>
       <input type="text" name="montant_cred" value="" /><br>
		
		<label> Date transaction : </label> 
		<input type="date" name="date_cred" value="" /><br>
		<label> Type de paiement : </label> 
		<select name="liste_type">
		<option value=""> Choisissez un type de paiement </option>
		<option value="1"> Especes </option>
		<option value="2">Cheque</option>
		</select><br><br>
		
		<input type="submit" name="valider" value="Valider">
          </div>
            </div>
         </div>
      </div>
