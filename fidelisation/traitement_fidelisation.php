<?php
	$client=new client();
	switch ($fidelise)
	{
		case "Lundi": $client->set_lundi ($id);
		break;
		case "Mardi": $client->set_mardi ($id);
		break;
		case "Mercredi": $client->set_mercredi ($id);
		break;
		case "Jeudi": $client->set_jeudi ($id);
		break;
		case "Vendredi": $client->set_vendredi ($id);
		break;
	}
?>