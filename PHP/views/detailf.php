<?php $content=ob_start(); ?>
	
		<div id="detailf">
			<p><img src="assets/img/film/<?php echo $data['idAffiche'];?>" alt="<?php echo $data['titreFilm'];?>"/></a></p>
			<p><b><?php echo $data['titreFilm']; ?></b></p>
			<p>Sortie en <?php echo $data['anneeSortie']; ?></p>
			<p><?php echo $data['libelleGenre']; ?></p>
			<p>Visa d'exploitation <br/>n°<?php echo $data['numVisa']; ?></p>
		</div>
		
		<div id="casting">
			<h1><i class="fa fa-bullhorn" aria-hidden="true"></i> Casting</h1>
		
			<?php foreach($req as $actor){?>
				<div class="vipF">
					<p><a href="index.php?page=vip&amp;profil=<?php echo $actor['numVip'];?>" ><img src="assets/img/vip/<?php echo $actor['idProfil'];?>" alt="<?php echo $actor['nomVip'];?>"/></a></p>
					<p><b><a href="index.php?page=vip&amp;profil=<?php echo $actor['numVip'];?>" ><?php echo $actor['prenomVip'];?> <?php echo $actor['nomVip'];?></a></b></p>
				</div>
			<?php }?>
			
			<?php if($producer['civilite']=='M')
			{
				echo'<h1><i class="fa fa-video-camera" aria-hidden="true"></i> Réalisateur</h1>';
			}
			else
			{
				echo'<h1><i class="fa fa-video-camera" aria-hidden="true"></i> Réalisatrice</h1>';
			}
			?>
			<div class="vipF">
				<p><a href="index.php?page=vip&amp;profil=<?php echo $producer['numVip'];?>" ><img src="assets/img/vip/<?php echo $producer['idProfil'];?>" alt="<?php echo $producer['nomVip'];?>"/></a></p>
				<p><b><a href="index.php?page=vip&amp;profil=<?php echo $producer['numVip'];?>" ><?php echo $producer['prenomVip'];?> <?php echo $producer['nomVip'];?></a></b></p>
			</div>
		</div>
		
<?php $content=ob_get_clean(); ?>
<?php $title=$data['titreFilm']; $content; ?>
<?php include("views/layout.php"); ?>