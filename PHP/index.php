<?php
	require_once('model/model.php');
	require_once('model/actuManager.php');
	require_once('model/vipManager.php');
	require_once('model/filmManager.php');
	
	if(isset($_GET['page']))	
	{
		//Si page=listevip
		if($_GET['page']=='listevip')
		{
			$selection2='selection';
			$libelle=null;
			if(isset($_POST['metier']))
			{
				$obj=new vipManager();

				if($_POST['metier']=='Tout'&& isset($_POST['gender']))
				{
					$req=$obj->getVip('Tout',$_POST['gender']);
					$gender=$_POST['gender'];
				}
				else
				{
					if($_POST['metier']=='Acteur')
					{	
						$_POST['metier']='AC';
					}
					if($_POST['metier']=='Réalisateur')
					{	
						$_POST['metier']='RE';
					}
					if($_POST['metier']=='Acteur et Réalisateur')
					{	
						$_POST['metier']='AR';
					}
					if(isset($_POST['gender']))
					{
						$libelle=$_POST['metier'];
						$req=$obj->getVip($_POST['metier'],$_POST['gender']);
						$gender=$_POST['gender'];
					}
					else
					{
						$req=$obj->getVip($_POST['metier'],"MF");
						$gender="MF";
					}
				}
				$nbPic = count($req);
			}
			elseif(isset($_POST['recherche']))
			{
				$src='%'.$_POST['recherche'].'%';
				$rech=new vipManager;
				$req=$rech->getSearchV($src);
				$nbPic = count($req);
			}
			else
			{
				$obj=new vipManager();
				$req=$obj->getVip('Tout',"MF");
				$gender="MF";
				$nbPic = count($req);
			}
			include('views/vip.php');
		}
		//si page=vip
		elseif($_GET['page']=='vip')
		{	
			$selection2='selection';
			
			$detail=new vipManager();
			$data=$detail->getDetails($_GET['profil']);
			
			$affiche=new vipManager();
			$req=$affiche->getPresentA($_GET['profil']);
			$nbaff = count($req);
			
			$affiche2=new vipManager();
			$req2=$affiche2->getPresentR($_GET['profil']);
			$nbaff2 = count($req2);
			
			$photo=new vipManager();
			$pic=$photo->getPhoto($_GET['profil']);
			$nbaff3 = count($pic);
			
			$evenement=new vipManager();
			$event=$evenement->getEvent($_GET['profil']);
			
			$recapitulatif=new vipManager();
			$recap=$recapitulatif->getRecap($_GET['profil']);
			$nbaff4=count($recap);
			
			if($event['numVip']==$_GET['profil'])
			{
				$cj=$event['numVipConjoint'];
				$cnj=$detail->getDetails($cj);
			}
			else
			{
				$cj=$event['numVip'];
				$cnj=$detail->getDetails($cj);
			}
			
			if(count($data)<2)
			{
				include('views/error.php');
				header ("Refresh: 8;url=index.php"); 
			}
			else
			{
				include('views/detailv.php');
			}
			
			if(isset($_POST['recherche']))
			{
				$src=$_POST['recherche'].'%';
				$rech=new vipManager;
				$req=$rech->getSearchV($src);
				$nbPic = count($req);
			}
		}
		
		//si page=listefilm
		elseif($_GET['page']=='listefilm')
		{
			$selection3='selection';
			$libelle=null;
			$genre= new filmManager();
			$req2=$genre->getGenre();
			
			if(isset($_POST['genref']))
			{
				$affiche= new filmManager();
				
				if($_POST['genref']=='Tout')
				{
					$req=$affiche->getFilm('Tout');
				}
				else
				{
					$libelle=$_POST['genref'];
					$req=$affiche->getFilm($_POST['genref']);
				}
				$nbPic = count($req);
			}
			elseif(isset($_POST['recherche']))
			{
				$src='%'.$_POST['recherche'].'%';
				$rech=new filmManager;
				$req=$rech->getSearchF($src);
				$nbPic = count($req);
			}
			else
			{
				$affiche= new filmManager();
				$req=$affiche->getFilm('Tout');
				$nbPic = count($req);
				
			}
			include('views/film.php');
		}
		//si page=film
		elseif($_GET['page']=='film')
		{	
			$selection3='selection';
			$detail=new filmManager();
			$data=$detail->getDetails($_GET['visa']);
			$casting=new filmManager();
			$req=$casting->getCasting($_GET['visa']);
			$nbCast=count($req);
			$prod=new filmManager();
			$producer=$prod->getProducer($_GET['visa']);
			$nbProd=count($producer);
			
			if(count($data)<2)
			{
				include('views/error.php');
				header ("Refresh: 8;url=index.php"); 
			}
			else
			{
				include('views/detailf.php');
			}
			
			if(isset($_POST['recherche']))
			{
				$src='%'.$_POST['recherche'].'%';
				$rech=new filmManager;
				$req=$rech->getSearchF($src);
				$nbPic = count($req);
			}
		}
		//si page=galerie
		elseif($_GET['page']=='galerie')
		{
			$selection4='selection';
			$galerie=new actuManager();
			$gal=$galerie->getGalerie();
			$nbPic = count($gal);
			
			if(isset($_POST['recherche']))
			{
				$src='%'.$_POST['recherche'].'%';
				$rech=new actuManager;
				$gal=$rech->getSearchG($src);
				$nbPic = count($gal);
			}
			
			include('views/galerie.php');
			
		}
		//sinon renvoie la page d'erreur
		else
		{
			include('views/error.php');
			header ("Refresh: 8;url=index.php"); 
		}
	}
	//par défaut actu
	else
	{
		$selection1='selection';
		$nb=new actuManager();
		$nbVip=$nb->getnbVip();
		$nbAct=$nb->getnbAct();
		$nbRea=$nb->getnbRea();
		$nbFilm=$nb->getnbFilm();
		$m=date('m');
		$mois='%-'.$m.'-%';
		$birth=$nb->getBirth($mois);
		
		if(isset($_POST['recherche']))
		{
			$src='%'.$_POST['recherche'].'%';
			$rech=new vipManager;
			$req=$rech->getSearchV($src);
			$nbPic = count($req);
		}
		
		include("views/actualite.php");
	}
	
?>