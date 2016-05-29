<?php
function datef($date){
	setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
	$birth = strftime("%d %B %Y",strtotime($date));
	return $birth;
}
?>