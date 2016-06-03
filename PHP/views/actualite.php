<?php $content=ob_start(); ?>
<?php require_once("functions/age.php");?>
<?php require_once("functions/date.php");?>
	<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>
	jQuery(document).ready(function( $ ) {
                       $('.counter').counterUp({
                                               delay: 10,
                                               time: 3000
                                               });
                       });
	</script>
	
	<div id="nbvip">
		<h2><span class="counter"><?php echo $nbVip; ?></span> VIP</h2>
		<h2><i class="fa fa-users" aria-hidden="true"></i></h2>
	</div>
	
	<div id="nbact">
		<h2><span class="counter"><?php echo $nbAct; ?></span> ACTEURS</h2>
		<h2><i class="fa fa-bullhorn" aria-hidden="true"></i></h2>
	</div>
	
	<div id="nbrea">
		<h2><span class="counter"><?php echo $nbRea; ?></span> REALISATEURS</h2>
		<h2><i class="fa fa-video-camera" aria-hidden="true"></i></h2>
	</div>
	
	<div id="birthday">
		<h2><i class="fa fa-gift" aria-hidden="true"></i> Les anniversaires du mois </h2>
		
		<?php foreach($birth as $bir){ ?>
			<div class="vipB">
				<a href="index.php?page=vip&amp;profil=<?php echo $bir['numVip'];?>" ><img <?php if($testD=date("Y-m-d")-$bir['dateNaissance']==age($bir['dateNaissance'])){echo 'class="greyD"';}?> src="assets/img/vip/<?php echo $bir['idProfil'];?>" alt="<?php echo $bir['nomVip'];?>"/></a>
				<p><a href="index.php?page=vip&amp;profil=<?php echo $bir['numVip'];?>" ><?php echo $bir['prenomVip'];?>
				<?php echo $bir['nomVip'];?></a></p>
				<p>
				<?php 
				$jourbirth=dateb($bir['dateNaissance']);
				if($jourbirth==0){echo "C'est son anniversaire !";}
				elseif($jourbirth<0){echo "Anniversaire déjà passé ...";}
				elseif($jourbirth==1){echo "Reste 1 jour";}
				else{echo "Reste ".$jourbirth." jours";}
				?></p>	
			</div>
		<?php } ?>
	</div>
	
	

<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<?php $content=ob_get_clean(); ?>
<?php $title='Actualité'; $content; ?>
<?php include("views/layout.php"); ?>