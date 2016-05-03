<?php $content=ob_start(); ?>

<?php require_once("functions/selection.php"); ?>
	
	<form id="metier" method="POST" action="index.php?page=listevip">
		<select name="metier">
			<option selected="selected">Tout</option>
			<?php
			echo'<option value="Acteur"'.keepSelected('A').'>Acteur</option>';
			echo'<option value="Réalisateur"'.keepSelected('R').'>Réalisateur</option>';
			echo'<option value="Acteur et Réalisateur"'.keepSelected('AR').'>Acteur et Réalisateur</option>';
			?>
		</select>
		<input type="radio" name="gender"<?php if (isset($gender) && ($gender=="M")) echo "checked";?> value="M">Masculin
		<input type="radio" name="gender"<?php if (isset($gender) && ($gender=="F")) echo "checked";?> value="F">Féminin
		<input type="radio" name="gender"<?php if (isset($gender) && ($gender=="MF")) echo "checked";?> value="MF">Indifférent
		<button type="submit">FILTRER</button>
	</form>
	
	<?php
	echo'<p class="compteur">'.$nbPic.' VIP'.'</p>';
	foreach($req as $data)
	{?>
	<table class=vip>
		<tr>
			<td><a href="index.php?page=vip&amp;photo=<?php echo $data['numVip'];?>"><img src="assets/img/<?php echo $data['idPhoto'];?>" alt="vip"/></a></td>
			<td><a href="index.php?page=vip&amp;photo=<?php echo $data['numVip'];?>"><?php echo $data['prenomVip'];?> <?php echo $data['nomVip'];?></a></td>
			<td>
			<?php 
				//calcul age :
				$today=date("Y-d-m");
				echo $age=$today-$data['dateNaissance'];
			?>
			 ans
			</td>
			
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
				}?>
			
		</tr>
	</table>
<?php }$content=ob_get_clean(); ?>
<?php $title='Liste VIP'; $content; ?>
<?php include("views/layout.php"); ?>