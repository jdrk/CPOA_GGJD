<?php $content=ob_start();?>
<?php require_once("functions/age.php");?>
<?php require_once("functions/date.php");?>

	
	<table class="detailv">	
		<tr>
			<td rowspan="4"><img src="assets/img/vip/<?php echo $data['idProfil'];?>" alt="<?php echo $data['nomVip']; ?>"></td>
			<td><b><?php echo $data['prenomVip'];?> <?php echo $data['nomVip'];?></b> &mdash; <?php echo age($data['dateNaissance']);?> ans</td>
		</tr>
		
		<tr>
			<td><?php 
			if($data['civilite']=='M'){echo "Né le ";}else{echo "Née le ";} echo datef($data['dateNaissance']);?> (<?php echo $data['lieuNaissance'];?>)</td>
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
			
			if($data['codeRole']=='AC' ){
				if($data['civilite']=='M'){
					echo "<td>Acteur</td>";
				}else{
					echo "<td>Actrice</td>";
				}
			}
			
			if($data['codeRole']=='RE' ){
				if($data['civilite']=='M'){
					echo "<td>Réalisateur</td>";
				}else{
					echo "<td>Réalisatrice</td>";
				}
			}
	?>
		</tr>
	</table>
	
	
	<?php if((isset($nbaff)&&$nbaff!=0)OR(isset($nbaff2)&&$nbaff2!=0)){ ?>
		<div id="filmo">
		<h1><i class="fa fa-film" aria-hidden="true"></i> Filmographie</h1>
		<?php foreach($req as $aff){?>	
			<a href="index.php?page=film&amp;visa=<?php echo $aff['numVisa'];?>"><img src="assets/img/film/<?php echo $aff['idAffiche'];?>" alt="<?php echo $aff['numVisa'];?>"/></a>
		<?php } 
	
		foreach($req2 as $aff2){?>	
			<a href="index.php?page=film&amp;visa=<?php echo $aff2['numVisa'];?>"><img src="assets/img/film/<?php echo $aff2['idAffiche'];?>" alt="<?php echo $aff2['numVisa'];?>"/></a>
		<?php } 
		echo'</div>';
	} ?>

	<div class="statut">
		<?php
		if($data['codeStatut']=='D'){
			if($data['civilite']=='M'){
				echo'<h1><i class="fa fa-gratipay" aria-hidden="true"></i> Divorcé</h1>';
			}else{
				echo'<h1><i class="fa fa-gratipay" aria-hidden="true"></i> Divorcée</h1>';
			}
		}
		elseif($data['codeStatut']=='M'){
			if($data['civilite']=='M'){
				echo'<h1><i class="fa fa-gratipay" aria-hidden="true"></i> Marié</h1>';
			}else{
				echo'<h1><i class="fa fa-gratipay" aria-hidden="true"></i> Mariée</h1>';
			}
		}else{
			echo'<h1><i class="fa fa-gratipay" aria-hidden="true"></i> Célibataire</h1>';
		}
		if($cnj['codeStatut']=='M'){ ?>
		<div class="vipM">

				<p><a href="index.php?page=vip&amp;profil=<?php echo $cnj['numVip'];?>" ><img src="assets/img/vip/<?php echo $cnj['idProfil'];?>" alt="<?php echo $cnj['nomVip'];?>"/></a></p>
				<p><b><a href="index.php?page=vip&amp;profil=<?php echo $cnj['numVip'];?>" ><?php echo $cnj['prenomVip'];?> <?php echo $cnj['nomVip'];?></a></b></p>
				<p><?php echo $event['lieuMariage'];?> - <?php echo datef($event['dateMariage']);?></p>
		</div>
		<?php }?>
	</div>
	
	<?php if(isset($nbaff4)&&$nbaff4!=0){?>
	<div class="statut">
		<h1><i class="fa fa-chain-broken" aria-hidden="true"></i> Les ex-conjoints</h1>
		<?php foreach($recap as $list){ ?>
			<p><b><a href="index.php?page=vip&amp;profil=<?php echo $list['numVip'];?>" ><?php echo $list['prenomVip'];?> <?php echo $list['nomVip'];?></a></b> - 
			<?php echo datef($list['dateMariage']);?> / <?php echo datef($list['dateDivorce']);?> - <?php echo $list['lieuMariage'];?></p>
		<?php }?>
	</div>
	<?php }?>
	
	<?php if(isset($nbaff3)&&$nbaff3!=0){?>
	<div id="photo">
		<h1><i class="fa fa-camera" aria-hidden="true"></i> Galeries</h1>
		<?php foreach($pic as $picture){?>	
			<img src="assets/img/photo/<?php echo $picture['idPhoto'];?>" alt="<?php echo $picture['idPhoto'];?>"/>
		<?php } ?>
	</div>
	<?php } ?>

<?php $content=ob_get_clean(); ?>
<?php $title=$data['prenomVip'].' '.$data['nomVip']; $rechpage='index.php?page=listevip';  $placeholder='nom, prénom ...'; $content; ?>
<?php include("views/layout.php"); ?>