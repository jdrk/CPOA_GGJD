<?php 

function age($date_naissance)
{
	$date_naissance = date("d-m-Y", strtotime($date_naissance)); 
    $arr1 = explode('-', $date_naissance);
    $arr2 = explode('-', date('d-m-Y'));
		
    if(($arr1[1] < $arr2[1]) || (($arr1[1] == $arr2[1]) && ($arr1[0] <= $arr2[0])))
    return $arr2[2] - $arr1[2];

    return $arr2[2] - $arr1[2] - 1;
}

?>
