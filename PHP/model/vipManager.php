<?php
class vipManager extends Model{
	
	public function getVip($codeRole,$gender){
		
		if($codeRole=='Tout'){
			if($gender!="MF")
			{
				$rep=$this->executerRequete('SELECT numVip, codeRole, civilite, prenomVip, nomVip, idProfil, dateNaissance FROM VIP WHERE civilite=:civilite ORDER BY prenomVip',
				array(':civilite'=>$gender));
			}
			else
			{
				$rep=$this->executerRequete('SELECT numVip, codeRole, civilite, prenomVip, nomVip, idProfil, dateNaissance FROM VIP ORDER BY prenomVip');
			}
			$all=$rep->fetchAll();
			$rep->closeCursor();
			return $all;
			
		}
		if($codeRole=='AC' || $codeRole=='RE'){
			if($gender!="MF"){
				$rep=$this->executerRequete('SELECT numVip, codeRole, civilite, prenomVip, nomVip, idProfil, dateNaissance FROM  VIP WHERE (codeRole=:codeRole OR codeRole="AR") AND civilite=:civilite ORDER BY prenomVip;',
				array(':codeRole'=>$codeRole,':civilite'=>$gender));
			}
			else{
				$rep=$this->executerRequete('SELECT numVip, codeRole, civilite, prenomVip, nomVip, idProfil, dateNaissance FROM VIP WHERE (codeRole=:codeRole OR codeRole="AR") ORDER BY prenomVip;',
				array(':codeRole'=>$codeRole));
			}
			
			$all=$rep->fetchAll();
			$rep->closeCursor();
			return $all;
		}
		else
		{
			if($gender!="MF"){
				$rep=$this->executerRequete('SELECT * FROM VIP WHERE codeRole=:codeRole AND civilite=:civilite ORDER BY prenomVip;',
				array(':codeRole'=>$codeRole,':civilite'=>$gender));
			}
			else{
				$rep=$this->executerRequete('SELECT * FROM VIP WHERE codeRole=:codeRole ORDER BY prenomVip;',
				array(':codeRole'=>$codeRole));
			}
			$all=$rep->fetchAll();
			$rep->closeCursor();
			return $all;
		}
	}

	public function getDetails($numVip){
		$rep=$this->executerRequete('SELECT numVip, nomVip, prenomVip, dateNaissance, civilite, lieuNaissance, nomNat, codeStatut, idProfil, codeRole FROM VIP V, NATIONALITE N WHERE numVip=:numVip AND V.nationalite=N.idNat;',
		array(':numVip'=>$numVip));
		$det=$rep->fetch();
		$rep->closeCursor();
		return $det;
	}

	public function getPresentA($numVip){
		$rep=$this->executerRequete('SELECT A.numVip, F.numVisa, idAffiche FROM ACTEUR A, FILM F WHERE A.numVisa=F.numVisa AND numVip=:numVip',
		array(':numVip'=>$numVip));
		$aff=$rep->fetchAll();
		$rep->closeCursor();
		return $aff;
	}
	
	public function getPresentR($numVip){
		$rep=$this->executerRequete('SELECT R.numVip, F.numVisa, idAffiche FROM REALISATEUR R, FILM F WHERE R.numVisa=F.numVisa AND numVip=:numVip',
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
		$rep=$this->executerRequete('SELECT * FROM NEWEVENT N, VIP V WHERE (N.numVip=:numVip OR N.numVipConjoint=:numVip) AND V.numVip=N.numVip AND dateDivorce="1000-01-01" ORDER BY dateMariage DESC',
		array(':numVip'=>$numVip));
		$aff=$rep->fetch();
		$rep->closeCursor();
		return $aff;
	}
	
	public function getRecap($numVip){
		$rep=$this->executerRequete('SELECT * FROM NEWEVENT N, VIP V WHERE N.numVipConjoint=:numVip AND N.numVip=V.numVip AND dateDivorce!="1000-01-01" UNION ALL SELECT * FROM NEWEVENT N2, VIP V2 WHERE N2.numVip=:numVip AND N2.numVipConjoint=V2.numVip AND dateDivorce!="1000-01-01" ORDER BY dateMariage DESC;',
		array(':numVip'=>$numVip));
		$aff=$rep->fetchAll();
		$rep->closeCursor();
		return $aff;
	}
	
	public function getSearchV($rech){
		$rep=$this->executerRequete('SELECT * FROM VIP WHERE nomVip LIKE :rech OR prenomVip LIKE :rech OR CONCAT(prenomVip," ",nomVip) LIKE :rech OR CONCAT(nomVip," ",prenomVip) LIKE :rech ORDER BY prenomVip',
		array(':rech'=>$rech));
		$search=$rep->fetchAll();
		$rep->closeCursor();
		return $search;
	}
}
?>