<?php
//fonction qui permet de formater la date
function datef($date){
	setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
	$birth = strftime("%d %B %Y",strtotime($date));
	return $birth;
}

//fonction qui renvoie l'âge dans l'année en cours
function dateb($date){
	$datenow=date("Y-m-d");
	list($year, $month, $day) = split('[-./]', $date);
	list($yearn, $monthn, $dayn) = split('[-./]', $datenow);
	return $jourbirth=$day-$dayn;
}
?>

