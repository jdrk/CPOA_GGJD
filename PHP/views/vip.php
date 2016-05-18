<?php $content=ob_start(); ?>

<?php require_once("functions/selection.php");?>
<?php require_once("functions/age.php");?>
	
	<form id="form" method="POST" action="index.php?page=listevip">
		<select name="metier">
			<option selected="selected">Tout</option>
			<?php
			echo'<option value="Acteur"'.keepSelected('AC',$libelle).'>Acteur</option>';
			echo'<option value="Réalisateur"'.keepSelected('RE',$libelle).'>Réalisateur</option>';
			echo'<option value="Acteur et Réalisateur"'.keepSelected('AR',$libelle).'>Acteur et Réalisateur</option>';
			?>
		</select>
		<input type="radio" name="gender"<?php if (isset($gender) && ($gender=="M")) echo "checked";?> value="M"><i class="fa fa-mars" aria-hidden="true"></i>
		<input type="radio" name="gender"<?php if (isset($gender) && ($gender=="F")) echo "checked";?> value="F"><i class="fa fa-venus" aria-hidden="true"></i>
		<input type="radio" name="gender"<?php if (isset($gender) && ($gender=="MF")) echo "checked";?> value="MF"><i class="fa fa-venus-mars" aria-hidden="true"></i>
		<button type="submit">FILTRER</button>
	</form>
	
	<?php
	echo'<p class="compteur">'.$nbPic.' VIP'.'</p>';
	foreach($req as $data)
	{?>
	<table class=vip>
		<tr>
			<td><a href="index.php?page=vip&amp;profil=<?php echo $data['numVip'];?>"><img src="assets/img/vip/<?php echo $data['idProfil'];?>" alt="<?php echo $data['idProfil'];?>"/></a></td>
			<td><a href="index.php?page=vip&amp;profil=<?php echo $data['numVip'];?>"><?php echo $data['prenomVip'];?> <?php echo $data['nomVip'];?></a></td>
			<td><?php echo age($data['dateNaissance']);?> ans</td>
			
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
				}?>
			
		</tr>
	</table>
<?php }$content=ob_get_clean(); ?>
<?php $title='Liste VIP'; $content; ?>
<?php include("views/layout.php"); ?>