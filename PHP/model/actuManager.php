<?php
class actuManager extends Model{
	
	public function getnbVip(){
		$rep=$this->executerRequete('SELECT numVip FROM VIP;');
		$nb=$rep->fetchAll();
		$rep->closeCursor();
		return $nbVip=count($nb);
	}
	
	public function getnbAct(){
		$rep=$this->executerRequete('SELECT * FROM VIP WHERE codeRole="AC" OR codeRole="AR";');
		$nb=$rep->fetchAll();
		$rep->closeCursor();
		return $nbAct=count($nb);
	}
	
	public function getnbRea(){
		$rep=$this->executerRequete('SELECT * FROM VIP WHERE codeRole="RE" OR codeRole="AR";');
		$nb=$rep->fetchAll();
		$rep->closeCursor();
		return $nbRea=count($nb);
	}
	
	public function getBirth($mois){
		$rep=$this->executerRequete('SELECT * FROM VIP WHERE dateNaissance LIKE :mois ORDER BY dateNaissance ASC;',
		array(':mois'=>$mois));
		$birth=$rep->fetchAll();
		$rep->closeCursor();
		return $birth;
	}
	public function getSearchA($rech){
		$rep=$this->executerRequete('SELECT * FROM VIP WHERE nomVip LIKE :rech OR prenomVip LIKE :rech ORDER BY prenomVip',
		array(':rech'=>$rech));
		$search=$rep->fetchAll();
		$rep->closeCursor();
		return $search;
	}
}
?>