<?php
class vipManager extends Model{
	
	public function getVip($codeRole,$gender){
		
		if($codeRole=='Tout')
		{
			if($gender!=null)
			{
				$rep=$this->executerRequete('SELECT * FROM PHOTOS P, VIP V WHERE civilite=:civilite AND P.numVip=V.numVip ORDER BY prenomVip',
				array(':civilite'=>$gender));
			}
			else
			{
				$rep=$this->executerRequete('SELECT * FROM PHOTOS P, VIP V WHERE P.numVip=V.numVip ORDER BY prenomVip');
			}
			$all=$rep->fetchAll();
			$rep->closeCursor();
			return $all;
			
		}
		if($codeRole=='A' || $codeRole=='R')
		{
			if($gender!=null)
			{
				$rep=$this->executerRequete('SELECT * FROM PHOTOS P, VIP V WHERE (codeRole=:codeRole OR codeRole="AR") AND civilite=:civilite AND P.numVip=V.numVip ORDER BY prenomVip;',
				array(':codeRole'=>$codeRole,':civilite'=>$gender));
			}
			else
			{
				$rep=$this->executerRequete('SELECT * FROM PHOTOS P, VIP V WHERE (codeRole=:codeRole OR codeRole="AR") AND P.numVip=V.numVip ORDER BY prenomVip;',
				array(':codeRole'=>$codeRole));
			}
			
			$all=$rep->fetchAll();
			$rep->closeCursor();
			return $all;
		}
		else
		{
			if($gender!=null)
			{
				$rep=$this->executerRequete('SELECT * FROM PHOTOS P, VIP V WHERE codeRole=:codeRole AND civilite=:civilite AND P.numVip=V.numVip ORDER BY prenomVip;',
				array(':codeRole'=>$codeRole,':civilite'=>$gender));
			}
			else
			{
				$rep=$this->executerRequete('SELECT * FROM PHOTOS P, VIP V WHERE codeRole=:codeRole AND P.numVip=V.numVip ORDER BY prenomVip;',
				array(':codeRole'=>$codeRole));
			}
			$all=$rep->fetchAll();
			$rep->closeCursor();
			return $all;
		}
	}
	
	public function getDetails($numVip){
		$rep=$this->executerRequete('SELECT nomVip, prenomVip, civilite, dateNaissance, lieuNaissance, codeRole, nomNat FROM VIP V, NATIONALITE N WHERE numVip=:numVip AND V.nationalite=N.idNat;',
		array(':numVip'=>$numVip));
		$det=$rep->fetch();
		$rep->closeCursor();
		return $det;
	}

	public function getPhotos($numVip){
		$rep=$this->executerRequete('SELECT idPhoto FROM PHOTOS WHERE numVip=:numVip',
		array(':numVip'=>$numVip));
		$pic=$rep->fetch();
		$rep->closeCursor();
		return $pic;
	}
}
?>