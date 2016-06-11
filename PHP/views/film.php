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
	
	
		<?php
		if($nbPic==0 && isset($libelle)){
			echo'<p class="compteur">Aucun film de genre "'.$libelle.'" trouvé</p>';
		}elseif($nbPic==1 || $nbPic==0){
			echo'<p class="compteur"><i class="fa fa-film" aria-hidden="true"></i> '.$nbPic.' FILM'.'</p>';
		}else{
			echo'<p class="compteur"><i class="fa fa-film" aria-hidden="true"></i> '.$nbPic.' FILMS'.'</p>';
		}
		foreach($req as $data){?>
		<div class="listefilm">
			<p><a href="index.php?page=film&amp;visa=<?php echo $data['numVisa'];?>">
			<img src="assets/img/film/<?php echo $data['idAffiche'];?>" alt="<?php echo $data['titreFilm'];?>"/></a></p>
			<p><a href="index.php?page=film&amp;visa=<?php echo $data['numVisa'];?>"><?php echo $data['titreFilm']; ?></a></p>
		</div>
		<?php } ?>

	
<?php $content=ob_get_clean(); ?>
<?php $title='FILMS'; $rechpage='index.php?page=listefilm'; $placeholder='titre, numéro visa, année ...'; $content; ?>
<?php include("views/layout.php"); ?>