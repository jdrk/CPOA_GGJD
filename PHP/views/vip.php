<?php $content=ob_start(); ?>

<?php require_once("functions/selection.php"); ?>
	
	<form id="metier" method="POST" action="index.php?page=listevip">
		<select name="metier">
			<option selected="selected">Tout</option>
			<?php
			echo'<option value="Acteur"'.keepSelected('A').'>Acteur</option>';
			echo'<option value="Réalisateur"'.keepSelected('R').'>Réalisateur</option>';
			echo'<option value="Acteur et Réalisateur"'.keepSelected('AR').'>Acteur et Réalisateur</option>';
			?>
		</select>
		<button type="submit">FILTRER</button>
	</form>
	
	<?php
	echo'<p class="compteur">'.$nbPic.' VIP'.'</p>';
	foreach($req as $data)
	{
		echo'<div class="bloc"><a href="index.php?page=vip&amp;photo='.$data['numVip'].'"><img src="assets/img/'.$data['idPhoto'].'" alt="vip"/></a></div>';
	}
	?>
<?php $content=ob_get_clean(); ?>
<?php $title='Liste VIP'; $content; ?>
<?php include("views/layout.php"); ?>