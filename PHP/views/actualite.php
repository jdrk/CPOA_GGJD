<?php $content=ob_start(); ?>
<?php require_once("functions/age.php");?>
<?php require_once("functions/date.php");?>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>jQuery(document).ready(function( $ ) {$('.counter').counterUp({delay: 10,time: 3000});});</script>
	
	<div id="panel">
		<div id="nbvip">
			<h1><span class="counter"><?php echo $nbVip; ?></span> VIP</h1>
			<h1><i class="fa fa-users" aria-hidden="true"></i></h1>
		</div>
		
		<div id="nbact">
			<h1><span class="counter"><?php echo $nbAct; ?></span> ACTEURS</h1>
			<h1><i class="fa fa-bullhorn" aria-hidden="true"></i></h1>
		</div>
		
		<div id="nbrea">
			<h1><span class="counter"><?php echo $nbRea; ?></span> REALISATEURS</h1>
			<h1><i class="fa fa-video-camera" aria-hidden="true"></i></h1>
		</div>
		
		<div id="nbrea">
			<h1><span class="counter"><?php echo $nbFilm; ?></span> FILMS</h1>
			<h1><i class="fa fa-film" aria-hidden="true"></i></h1>
		</div>
	</div>
	
	<div id="birthday">
		<h1><i class="fa fa-gift" aria-hidden="true"></i> Les anniversaires du mois </h1>
		
		<?php foreach($birth as $bir){ ?>
			<div class="vipB">
				<a href="index.php?page=vip&amp;profil=<?php echo $bir['numVip'];?>" ><img <?php if($testD=date("Y-m-d")-$bir['dateNaissance']==age($bir['dateNaissance'])){echo 'class="grey"';}?> src="assets/img/vip/<?php echo $bir['idProfil'];?>" alt="<?php echo $bir['nomVip'];?>"/></a>
				<p><a href="index.php?page=vip&amp;profil=<?php echo $bir['numVip'];?>" ><?php echo $bir['prenomVip'];?> <?php echo $bir['nomVip'];?></a></p>
				<?php 
				$jourbirth=dateb($bir['dateNaissance']);
				if($jourbirth==0){echo '<p class="jourj">C\'est son anniversaire <i class="fa fa-birthday-cake" aria-hidden="true"></i></p>';}
				elseif($jourbirth<0){echo '<p class="jourp">Terminé <i class="fa fa-check-circle" aria-hidden="true"></i></p>';}
				elseif($jourbirth==1){echo '<p class="joura">1 jour <i class="fa fa-dot-circle-o" aria-hidden="true"></i></p>';}
				else{echo '<p class="joura">'.$jourbirth.' jours <i class="fa fa-dot-circle-o" aria-hidden="true"></i></p>';}
				?>	
			</div><?php } ?>
	</div>

<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<?php $content=ob_get_clean(); ?>
<?php $title='ACTU'; $rechpage='index.php?page=listevip'; $placeholder='nom ou prénom du vip ... '; $content; ?>
<?php include("views/layout.php"); ?>