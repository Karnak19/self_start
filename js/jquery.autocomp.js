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
	// hide proposition list
	$('#list_nom_cred').hide();
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
	// hide proposition list
	$('#list_nom_fid').hide();
}

//___________________________________________________________________________________________________________________________


function autocompletpass() {
	var min_length = 1; // min caracters to display the autocomplete
	var keyword = $('#nom_pass').val();
	if (keyword.length >= min_length) {
		$.ajax({
			url: 'ajax_refresh_pass.php',
			type: 'POST',
			data: {keyword:keyword},
			success:function(data){
				$('#list_nom_pass').show();
				$('#list_nom_pass').html(data);
			}
		});
	} else {
		$('#list_nom_pass').hide();
	}
}

function set_item_pass(item) {
	// change input value
	$('#nom_pass').val(item);
	// hide proposition list
	$('#list_nom_pass').hide();
}