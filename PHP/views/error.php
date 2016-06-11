<?php $content=ob_start(); ?>
	<div id="error">
		<h1><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Erreur 404</h1>
		<p>La page demandée est introuvable !</p>
		<p>Il est possible que cette page n'existe pas ou qu'une erreur se soit glissée sur le site.</p>
		<p><b>Vous allez être redirigé vers l'accueil dans quelques instants <img class="loader" src="assets/img/loader.gif" alt="loader" /></b></p>
	</div>
<?php $content=ob_get_clean(); ?>
<?php $title='Page introuvable !'; $content; $rechpage='error'; $placeholder=''; ?>
<?php include("views/layout.php"); ?>