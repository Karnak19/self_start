<?php
////////////////convertisseur de date et heure en format francais ou americain//////////////////////
	//français vers americain
	function fr_to_us ($datefr)
	{
		$a=substr($datefr,6,4);
		$m=substr($datefr,3,2);
		$j=substr($datefr,0,2);
		$h=substr($datefr,11,2);
		$min=substr($datefr,14,2);
		$s=substr($datefr,17,2);

		$dateus=$a.'-'.$m.'-'.$j.' '.$h.':'.$min.':'.$s;
		return $dateus ;
	}
	//americain vers français
	function us_to_fr ($dateus)
	{
		$a=substr($dateus,0,4);
		$m=substr($dateus,5,2);
		$j=substr($dateus,8,2);

		
		$datefr=$j.'-'.$m.'-'.$a;
		return $datefr ;
	}
	//français vers americain pour juste la date  
		function date_fr_to_us ($datefr)
	{
		$a=substr($datefr,6,4);
		$m=substr($datefr,3,2);
		$j=substr($datefr,0,2);

		$dateus=$a.'-'.$m.'-'.$j;
		return $dateus ;
	}


?>
