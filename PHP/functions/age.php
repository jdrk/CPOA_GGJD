<?php 

function age($valeur){
	$am = explode('-',$valeur);
	$an = explode('-',date('Y-m-d'));
			
	if((($am[1] < $an[1]) || (($am[1] == $an[1]) && ($am[0] <= $an[0]))) && ($am[2] <= $an[2]))
		return $an[0] - $am[0];
	else
		return $an[0] - $am[0] - 1;
}

?>
