<?php $content=ob_start(); ?>

<?php require_once("functions/selection.php"); ?>
	
	<form id="metier" method="POST" action="index.php?page=listevip">
		<select name="metier">
			<option>Tout</option>
			<option>A</option>
			<option>R</option>
			<option>AR</option>
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