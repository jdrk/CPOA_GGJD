<?php
class vipManager extends Model{
	
	public function getVip($codeRole){
		
		if($codeRole=='Tout')
		{
			$rep=$this->executerRequete('SELECT * FROM PHOTOS');
			$all=$rep->fetchAll();
			$rep->closeCursor();
			return $all;
		}
		else
		{
			$rep=$this->executerRequete('SELECT * FROM PHOTOS P, VIP V WHERE codeRole=:codeRole AND P.numVip=V.numVip;',
			array(':codeRole'=>$codeRole));
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