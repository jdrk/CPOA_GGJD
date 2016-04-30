<?php
//fonction qui permet de garder la sélection d'une catégorie dans le formulaire après exécution de la requête
function keepSelected($value) 
{
	if (isset ($_POST['metier']))
		if($_POST['metier']==$value)
			return 'selected = "selected"';
}
?>