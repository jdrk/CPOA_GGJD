<?php
class vipManager extends Model{
	
	public function getVip($codeRole,$gender){
		
		if($codeRole=='Tout')
		{
			if($gender!="MF")
			{
				$rep=$this->executerRequete('SELECT * FROM VIP WHERE civilite=:civilite ORDER BY prenomVip',
				array(':civilite'=>$gender));
			}
			else
			{
				$rep=$this->executerRequete('SELECT * FROM VIP ORDER BY prenomVip');
			}
			$all=$rep->fetchAll();
			$rep->closeCursor();
			return $all;
			
		}
		if($codeRole=='AC' || $codeRole=='RE')
		{
			if($gender!="MF")
			{
				$rep=$this->executerRequete('SELECT * FROM  VIP WHERE (codeRole=:codeRole OR codeRole="AR") AND civilite=:civilite ORDER BY prenomVip;',
				array(':codeRole'=>$codeRole,':civilite'=>$gender));
			}
			else
			{
				$rep=$this->executerRequete('SELECT * FROM VIP WHERE (codeRole=:codeRole OR codeRole="AR") ORDER BY prenomVip;',
				array(':codeRole'=>$codeRole));
			}
			
			$all=$rep->fetchAll();
			$rep->closeCursor();
			return $all;
		}
		else
		{
			if($gender!="MF")
			{
				$rep=$this->executerRequete('SELECT * FROM VIP WHERE codeRole=:codeRole AND civilite=:civilite ORDER BY prenomVip;',
				array(':codeRole'=>$codeRole,':civilite'=>$gender));
			}
			else
			{
				$rep=$this->executerRequete('SELECT * FROM VIP WHERE codeRole=:codeRole ORDER BY prenomVip;',
				array(':codeRole'=>$codeRole));
			}
			$all=$rep->fetchAll();
			$rep->closeCursor();
			return $all;
		}
	}

	public function getDetails($numVip){
		$rep=$this->executerRequete('SELECT * FROM VIP V, NATIONALITE N WHERE numVip=:numVip AND V.nationalite=N.idNat;',
		array(':numVip'=>$numVip));
		$det=$rep->fetch();
		$rep->closeCursor();
		return $det;
	}

	public function getPresentA($numVip){
		$rep=$this->executerRequete('SELECT * FROM ACTEUR A, FILM F WHERE A.numVisa=F.numVisa AND numVip=:numVip',
		array(':numVip'=>$numVip));
		$aff=$rep->fetchAll();
		$rep->closeCursor();
		return $aff;
	}
	
	public function getPresentR($numVip){
		$rep=$this->executerRequete('SELECT * FROM REALISATEUR R, FILM F WHERE R.numVisa=F.numVisa AND numVip=:numVip',
		array(':numVip'=>$numVip));
		$aff=$rep->fetchAll();
		$rep->closeCursor();
		return $aff;
	}
	
	public function getPhoto($numVip){
		$rep=$this->executerRequete('SELECT * FROM PHOTO WHERE numVip=:numVip',
		array(':numVip'=>$numVip));
		$aff=$rep->fetchAll();
		$rep->closeCursor();
		return $aff;
	}
	
	public function getEvent($numVip){
		$rep=$this->executerRequete('SELECT * FROM NEWEVENT N, VIP V WHERE (N.numVip=:numVip OR N.numVipConjoint=:numVip) AND V.numVip=N.numVip ',
		array(':numVip'=>$numVip));
		$aff=$rep->fetch();
		$rep->closeCursor();
		return $aff;
	}
	
	
}
?>