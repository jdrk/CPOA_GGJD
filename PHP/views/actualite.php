<?php $content=ob_start(); ?>
<?php require_once("functions/age.php");?>
<?php require_once("functions/date.php");?>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>jQuery(document).ready(function( $ ) {$('.counterV').counterUp({delay: 5,time: 3000});});</script>
<script>jQuery(document).ready(function( $ ) {$('.counterA').counterUp({delay: 5,time: 2500});});</script>
<script>jQuery(document).ready(function( $ ) {$('.counterR').counterUp({delay: 5,time: 1500});});</script>
<script>jQuery(document).ready(function( $ ) {$('.counterF').counterUp({delay: 5,time: 1000});});</script>
	
	<div id="panel">
		<div id="nbvip">
			<h1><span class="counterV"><?php echo $nbVip; ?></span> VIP<br/>
			<i class="fa fa-users" aria-hidden="true"></i></h1>
		</div>
		
		<div id="nbact">
			<h1><span class="counterA"><?php echo $nbAct; ?></span> ACTEURS<br/>
			<i class="fa fa-bullhorn" aria-hidden="true"></i></h1>
		</div>
		
		<div id="nbrea">
			<h1><span class="counterR"><?php echo $nbRea; ?></span> REALISATEURS<br/>
			<i class="fa fa-video-camera" aria-hidden="true"></i></h1>
		</div>
		
		<div id="nbfilm">
			<h1><span class="counterF "><?php echo $nbFilm; ?></span> FILMS<br/>
			<i class="fa fa-film" aria-hidden="true"></i></h1>
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
<?php $title='ACTU'; $rechpage='index.php?page=listevip'; $placeholder='nom, prénom ...'; $content; ?>
<?php include("views/layout.php"); ?>