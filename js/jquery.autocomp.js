// autocomplet : this function will be executed every time we change the text
function autocomplet() {
	var min_length = 1; // min caracters to display the autocomplete
	var keyword = $('#nom_cli').val();
	if (keyword.length >= min_length) {
		$.ajax({
			url: 'ajax_refresh.php',
			type: 'POST',
			data: {keyword:keyword},
			success:function(data){
				$('#list_nom_cli').show();
				$('#list_nom_cli').html(data);
			}
		});
	} else {
		$('#list_nom_cli').hide();
	}
}

// set_item : this function will be executed when we select an item
function set_item(item) {
	// change input value
	$('#nom_cli').val(item);
	// hide proposition list
	$('#list_nom_cli').hide();
}