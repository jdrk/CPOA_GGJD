<?php $content=ob_start(); ?>
	
	<div id="bloc">
	<?php
	echo'<p class="compteur">'.$nbPic.' FILMS'.'</p>';
	foreach($req as $data)
	{?>
		<a href="index.php?page=film&amp;affiche=<?php echo $data['numVisa'];?>"><img src="assets/img/film/<?php echo $data['idAffiche'];?>" alt="<?php echo $data['idAffiche'];?>"/></a>
	<?php } ?>
	</div>

	
<?php $content=ob_get_clean(); ?>
<?php $title='Liste FILMS'; $content; ?>
<?php include("views/layout.php"); ?>