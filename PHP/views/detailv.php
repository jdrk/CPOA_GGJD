<?php $content=ob_start();?>

	<?php if(isset($data)){
		//formatage de la date :
		$date=$data['dateNaissance'];
		setlocale(LC_TIME, 'fr_FR.utf8', 'fra');
		$birth = strftime("%d %B %Y",strtotime($date));
		
		//calcul age :
		$today=date("Y-d-m");
		$age=$today-$date;
	?>
	<table class="detailv">	
		<tr>
			<td rowspan="4"><img src="assets/img/vip/<?php echo $pic['idProfil'];?>" alt="<?php echo $pic['idProfil']; ?>"></td>
			<td><b><?php echo $data['prenomVip'];?> <?php echo $data['nomVip'];?></b> - <?php echo $age; ?> ans</td>
		</tr>
		
		<tr>
			<td><?php 
			if($data['civilite']=='M'){echo "Né le ";}else{echo "Née le ";} echo $birth?> (<?php echo $data['lieuNaissance'];?>)</td>
		</tr>
		<tr>
			<td>Nationalité <?php echo $data['nomNat'];?></td>
		</tr>
		<tr>
			<?php
			if($data['codeRole']=='AR' ){
				if($data['civilite']=='M'){
					echo "<td>Acteur et réalisateur</td>";
				}else{
					echo "<td>Actrice et réalisatrice</td>";
				}
			}
			
			if($data['codeRole']=='A' ){
				if($data['civilite']=='M'){
					echo "<td>Acteur</td>";
				}else{
					echo "<td>Actrice</td>";
				}
			}
			
			if($data['codeRole']=='R' ){
				if($data['civilite']=='M'){
					echo "<td>Réalisateur</td>";
				}else{
					echo "<td>Réalisatrice</td>";
				}
			}
			?>
		</tr>
		
	</table>
<?php } $content=ob_get_clean(); ?>
<?php $title=$data['prenomVip'].' '.$data['nomVip']; $content; ?>
<?php include("views/layout.php"); ?>