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
					<li><a href="index.php"><i class="fa fa-bolt" aria-hidden="true"></i> SCOOP</a></li>
					<li><a href="index.php?page=listevip"><i class="fa fa-star-o" aria-hidden="true"></i> VIP</a></li>
					<li><a href="index.php?page=listefilm"><i class="fa fa-film" aria-hidden="true"></i> FILMS</a></li>
				</ul>
			</nav>
			
		<div id="space">
			<?php echo $content;?>
		</div>
		
		<footer>
			<p>VIP Story &copy; 2016 - Jackson DEROCK / Guillaume GEBAVI</p>
		</footer>

	</body>
	
</html>