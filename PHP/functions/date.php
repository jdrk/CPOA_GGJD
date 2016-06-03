<?php
function datef($date){
	setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
	$birth = strftime("%d %B %Y",strtotime($date));
	return $birth;
}
function dateb($date){
	$datenow=date("Y-m-d");
	list($year, $month, $day) = split('[-./]', $date);
	list($yearn, $monthn, $dayn) = split('[-./]', $datenow);
	return $jourbirth=$day-$dayn;
}
?>

