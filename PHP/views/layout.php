<!DOCTYPE html>
<html lang="fr">
	<head>
		<title><?php echo $title;?></title>
		<meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="./assets/style.css"/>
		<link rel="icon" type="image/png" href="./assets/img/logo.png" />
		<link href='https://fonts.googleapis.com/css?family=Philosopher:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
	</head>
	
	<body>
	
		<header>Voicela</header>
			<nav>
				<ul>
					<li><a class="<?php if(isset($selection1))echo $selection1;?>" href="index.php"><i class="fa fa-bolt" aria-hidden="true"></i> ACTU</a></li>
					<li><a class="<?php if(isset($selection2))echo $selection2;?>" href="index.php?page=listevip"><i class="fa fa-star-o" aria-hidden="true"></i> VIP</a></li>
					<li><a class="<?php if(isset($selection3))echo $selection3;?>" href="index.php?page=listefilm"><i class="fa fa-film" aria-hidden="true"></i> FILMS</a></li>
					<form id="recherche" method="POST" action="<?php echo $rechpage;?>">
					<input type="text" placeholder="<?php echo $placeholder;?>" name="recherche" />  <i class="fa fa-search" aria-hidden="false"></i>
					</form>
				</ul>
				
				
				
			</nav>
			
		<div id="space">
			<?php echo $content;?>
		</div>
		
		<footer>
			<p>Voicela &copy; 2016 &mdash; Jackson DEROCK &bull; Guillaume GEBAVI</p>
		</footer>

	</body>
	
</html>