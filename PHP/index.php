<?php
	
	require_once('model/model.php');
	require_once('model/vipManager.php');
	require_once('model/filmManager.php');
	
	if(isset($_GET['page']))	
	{
		if($_GET['page']=='listevip')
		{
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
			else
			{
				$obj=new vipManager();
				$req=$obj->getVip('Tout',"MF");
				$gender="MF";
				$nbPic = count($req);
			}
			include('views/vip.php');
		}
		elseif($_GET['page']=='vip')
		{	
			$detail=new vipManager();
			$data=$detail->getDetails($_GET['profil']);
			$affiche=new vipManager();
			$req=$affiche->getPresentA($_GET['profil']);
			$nbaff = count($req);
			$affiche2=new vipManager();
			$req2=$affiche2->getPresentR($_GET['profil']);
			$nbaff2 = count($req2);
			
			if(count($data)<2)
			{
				include('views/error.php');
				header ("Refresh: 3;url=index.php"); 
			}
			else
			{
				include('views/detailv.php');
			}
		}
		elseif($_GET['page']=='listefilm')
		{
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
			else
			{
				$affiche= new filmManager();
				$req=$affiche->getFilm('Tout');
				$nbPic = count($req);
				
			}
			include('views/film.php');
		}
		elseif($_GET['page']=='film')
		{	
			$detail=new filmManager();
			$data=$detail->getDetails($_GET['visa']);
			$casting=new filmManager();
			$req=$casting->getCasting($_GET['visa']);
			$producer=new filmManager();
			$req2=$producer->getProducer($_GET['visa']);
			if(count($data)<2)
			{
				include('views/error.php');
			}
			else
			{
				include('views/detailf.php');
			}
		}
		else
		{
			include('views/error.php');
			header ("Refresh: 10;url=index.php"); 
		}
	}
	else
	{
		include("views/scoop.php");
	}
	
?>