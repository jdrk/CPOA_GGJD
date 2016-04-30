<?php
	
	require_once('model/model.php');
	require_once('model/vipManager.php');

	if(isset($_GET['page']))	
	{
		if($_GET['page']=='vip')
		{	
			$detail=new vipManager();
			$data=$detail->getDetails($_GET['photo']);
			$picture=new vipManager();
			$pic=$picture->getPhotos($_GET['photo']);
			include('views/detailv.php');
		}
		
		if($_GET['page']=='listevip')
		{
			if(isset($_POST['metier']))
			{
				$obj=new vipManager();
				
				if($_POST['metier']=='Tout')
				{
					$req=$obj->getVip('Tout');
				}
				else
				{
					$req=$obj->getVip($_POST['metier']);
				}
				$nbPic = count($req);
			}
			else
			{
				$obj=new vipManager();
				$req=$obj->getVip('Tout');
				$nbPic = count($req);
			}
			include('views/vip.php');	
		}
		
		if($_GET['page']=='listefilm')
		{
			include("views/film.php");
		}
	}
	else
	{
		include("views/scoop.php");
	}
	
?>