<?php $content=ob_start(); ?>
	
		<div id="detailf">
			<p><img src="assets/img/film/<?php echo $pic['idAffiche'];?>" alt="<?php echo $pic['idAffiche'];?>"/></a></p>
			<p><b><?php echo $data['titreFilm']; ?></b></p>
			<p>Sortie en <?php echo $data['anneeSortie']; ?></p>
			<p>Genre <?php echo $data['libelleGenre']; ?></p>
			<p>Visa d'exploitation n°<?php echo $data['numVisa']; ?></p>
		</div>
		
		<div id="casting">
			<h1>Casting</h1>
		
			<?php foreach($req as $actor){?>
				<div class="vipF">
					<p><a href="index.php?page=vip&amp;profil=<?php echo $actor['numVip'];?>"><img src="assets/img/vip/<?php echo $actor['idProfil'];?>" alt="<?php echo $actor['idProfil'];?>"/></a></p>
					<p><b><a href="index.php?page=vip&amp;profil=<?php echo $actor['numVip'];?>"><?php echo $actor['prenomVip'];?> <?php echo $actor['nomVip'];?></a></b></p>
				</div>
			<?php }?>
			
			
			<h1>Réalisateur</h1>
			
			<?php foreach($req2 as $producer){?>
				<div class="vipF">
					<p><a href="index.php?page=vip&amp;profil=<?php echo $producer['numVip'];?>"><img src="assets/img/vip/<?php echo $producer['idProfil'];?>" alt="<?php echo $producer['idProfil'];?>"/></a></p>
					<p><b><a href="index.php?page=vip&amp;profil=<?php echo $producer['numVip'];?>"><?php echo $producer['prenomVip'];?> <?php echo $producer['nomVip'];?></a></b></p>
				</div>
			<?php }?>
			
		</div>
		
<?php $content=ob_get_clean(); ?>
<?php $title='Liste FILMS'; $content; ?>
<?php include("views/layout.php"); ?>