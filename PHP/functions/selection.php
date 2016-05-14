<?php
//fonction qui permet de garder la sélection d'une catégorie dans le formulaire après exécution de la requête
function keepSelected($value,$libelle) 
{
	if (isset ($libelle))
		if($libelle==$value)
			return 'selected = "selected"';
}
?>