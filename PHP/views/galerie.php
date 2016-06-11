<?php $content=ob_start(); ?>
<?php require_once("functions/date.php");?>
	<?php if(isset($gal)&& $nbPic>0){
	if($nbPic==1)
	{
		echo'<p class="compteur"><i class="fa fa-camera" aria-hidden="true"></i> '.$nbPic.' PHOTO '.'</p>';
	}
	else{
		echo'<p class="compteur"><i class="fa fa-camera" aria-hidden="true"></i> '.$nbPic.' PHOTOS '.'</p>';
	}?>
	<div id="galerie">
		<?php
		foreach($gal as $gale) {?>
	
		<div class="picture">
			<p><img src="assets/img/photo/<?php echo $gale['idPhoto']?>" alt="<?php echo $gale['idPhoto']?>"/></p>
			<p><?php echo datef($gale['datePhoto']); ?> - <?php echo $gale['lieuPhoto'];?></p>
		</div>
		<?php } ?>
	</div>
	<?php }else{
		echo'<p class="compteur"><i class="fa fa-camera" aria-hidden="true"></i> '.$nbPic.' PHOTO '.'</p>';
	}?>
	
<?php $content=ob_get_clean(); ?>
<?php $title='GALERIE'; $rechpage='index.php?page=galerie'; $placeholder='année, lieu ...'; $content; ?>
<?php include("views/layout.php"); ?>