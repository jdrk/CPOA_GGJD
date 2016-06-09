<?php
class actuManager extends Model{
	
	public function getnbVip(){
		$rep=$this->executerRequete('SELECT numVip FROM VIP;');
		$nb=$rep->fetchAll();
		$rep->closeCursor();
		return $nbVip=count($nb);
	}
	
	public function getnbAct(){
		$rep=$this->executerRequete('SELECT numVip FROM VIP WHERE codeRole="AC" OR codeRole="AR";');
		$nb=$rep->fetchAll();
		$rep->closeCursor();
		return $nbAct=count($nb);
	}
	
	public function getnbRea(){
		$rep=$this->executerRequete('SELECT numVip FROM VIP WHERE codeRole="RE" OR codeRole="AR";');
		$nb=$rep->fetchAll();
		$rep->closeCursor();
		return $nbRea=count($nb);
	}
	
	public function getnbFilm(){
		$rep=$this->executerRequete('SELECT numVisa FROM FILM');
		$nb=$rep->fetchAll();
		$rep->closeCursor();
		return $nbFilm=count($nb);
	}
	
	public function getBirth($mois){
		$rep=$this->executerRequete('SELECT numVip, prenomVip, nomVip, dateNaissance, idProfil FROM VIP WHERE dateNaissance LIKE :mois ORDER BY dateNaissance ASC;',
		array(':mois'=>$mois));
		$birth=$rep->fetchAll();
		$rep->closeCursor();
		return $birth;
	}
	public function getSearchA($rech){
		$rep=$this->executerRequete('SELECT * FROM VIP WHERE nomVip LIKE :rech OR prenomVip LIKE :rech OR CONCAT(prenomVip," ",nomVip) LIKE :rech OR CONCAT(nomVip," ",prenomVip) LIKE :rech ORDER BY prenomVip',
		array(':rech'=>$rech));
		$search=$rep->fetchAll();
		$rep->closeCursor();
		return $search;
	}
	
	public function getGalerie(){
		$rep=$this->executerRequete('SELECT * FROM PHOTO GROUP BY idPhoto ORDER BY datePhoto DESC ;');
		$galerie=$rep->fetchAll();
		$rep->closeCursor();
		return $galerie;
	}
	
	public function getSearchG($rech){
		$rep=$this->executerRequete('SELECT * FROM PHOTO WHERE datePhoto LIKE :rech OR lieuPhoto LIKE :rech GROUP BY idPhoto ORDER BY datePhoto DESC;',
		array(':rech'=>$rech));
		$search=$rep->fetchAll();
		$rep->closeCursor();
		return $search;
	}
}
?>