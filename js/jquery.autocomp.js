// autocomplet : this function will be executed every time we change the text
function autocompletcred() {
	var min_length = 1; // min caracters to display the autocomplete
	var keyword = $('#nom_cred').val();
	if (keyword.length >= min_length) {
		$.ajax({
			url: 'ajax_refresh_cred.php',
			type: 'POST',
			data: {keyword:keyword},
			success:function(data){
				$('#list_nom_cred').show();
				$('#list_nom_cred').html(data);
			}
		});
	} else {
		$('#list_nom_cred').hide();
	}
}

function set_item_cred(item) {
	// change input value
	$('#nom_cred').val(item);
	var id = item.split(" ");
	$('#id_cred').val(id[2]);
	// hide proposition list
	$('#list_nom_cred').hide();
	//Requête pour afficher le client à droite
	$.ajax({
			url: './ajax_refresh/ajax_refresh_cred_img.php',
			type: 'POST',
			data: {keyword:item},
			success:function(data){
				$('#cred_img').show();
				$('#cred_img').html(data);
			}
		});
}

//___________________________________________________________________________________________________________________________


function autocompletfid() {
	var min_length = 1; // min caracters to display the autocomplete
	var keyword = $('#nom_fid').val();
	if (keyword.length >= min_length) {
		$.ajax({
			url: 'ajax_refresh_fid.php',
			type: 'POST',
			data: {keyword:keyword},
			success:function(data){
				$('#list_nom_fid').show();
				$('#list_nom_fid').html(data);
			}
		});
	} else {
		$('#list_nom_fid').hide();
	}
}

function set_item_fid(item) {
	// change input value
	$('#nom_fid').val(item);
	var id = item.split(" ");
	$('#id_fid').val(id[2]);
	// hide proposition list
	$('#list_nom_fid').hide();
	//Requête pour afficher le client à droite
	$.ajax({
			url: './ajax_refresh/ajax_refresh_fid_img.php',
			type: 'POST',
			data: {keyword:item},
			success:function(data){
				$('#fid_img').show();
				$('#fid_img').html(data);
			}
		});
}

//___________________________________________________________________________________________________________________________


function autocompletpass() {
	var min_length = 1; // Nombre de caractère minimum pour afficher la liste
	var keyword = $('#nom_pass').val();
	if (keyword.length >= min_length) { //Si le nombre saisi est supérieur
		$.ajax({
			url: '../ajax_refresh_pass.php',
			type: 'POST',
			data: {keyword:keyword},
			success:function(data){
				$('#list_nom_pass').show();
				$('#list_nom_pass').html(data);
			}
		});
	} else {
		$('#list_nom_pass').hide();
		$('.divd').hide();
	}
}

function set_item_pass(item) {
	// change input value
	$('#nom_pass').val(item);
	$('.divd').val(item);
	var id = item.split(" ");
	$('#id_pass').val(id[2]);
	// hide proposition list
	$('#list_nom_pass').hide();
	//Requête pour afficher le client à droite
	$.ajax({
			url: '../ajax_refresh_pass_img.php',
			type: 'POST',
			data: {keyword:item},
			success:function(data){
				$('.divd').show();
				$('.divd').html(data);
			}
		});
	
}