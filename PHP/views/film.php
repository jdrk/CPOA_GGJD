<?php $content=ob_start(); ?>
<?php require_once("functions/selection.php"); ?>

	<form id="form" method="POST" action="index.php?page=listefilm ">
		<select name="genref">
			<option selected="selected">Tout</option>
			<?php
			foreach($req2 as $genre)
			{		
				echo'<option value="'.$genre['libelleGenre'].'"'.keepSelected($genre['libelleGenre'],$libelle).'>'.$genre['libelleGenre'].'</option>'; 
			}
			?>
		</select>
		<button type="submit">FILTRER</button>
	</form>
	
	<div id="bloc">
	<?php
	if($nbPic==0 && isset($libelle))
	{
		echo'<p class="compteur">Aucun film de genre "'.$libelle.'" trouvé</p>';
	}
	elseif($nbPic==1)
	{
		echo'<p class="compteur">'.$nbPic.' FILM DISPONIBLE'.'</p>';
	}
	else
	{
		echo'<p class="compteur">'.$nbPic.' FILMS DISPONIBLES'.'</p>';
	}
	foreach($req as $data)
	{?>
		<a href="index.php?page=film&amp;visa=<?php echo $data['numVisa'];?>"><img src="assets/img/film/<?php echo $data['idAffiche'];?>" alt="<?php echo $data['titreFilm'];?>"/></a>
	<?php } ?>
	</div>

	
<?php $content=ob_get_clean(); ?>
<?php $title='Liste FILMS'; $content; ?>
<?php include("views/layout.php"); ?>