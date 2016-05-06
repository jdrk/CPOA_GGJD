<?php
class filmManager extends Model{
	
	public function getFilm($genre)
	{
		if($genre='Tout')
		{
			$rep=$this->executerRequete('SELECT * FROM AFFICHE A, FILM F WHERE A.numVisa=F.numVisa ORDER BY titreFilm');
			$all=$rep->fetchAll();
			$rep->closeCursor();
			return $all;
		}
		else
		{
			$rep=$this->executerRequete('SELECT * FROM FILM WHERE idGenre=:genre',
			array(':genre'=>$genre));
			$all=$rep->fetch();
			$rep->closeCursor();
			return $all;
		}
	}
	
	public function getDetails($numVisa){
		$rep=$this->executerRequete('SELECT * FROM FILM F, GENRE G WHERE numVisa=:numVisa AND F.idGenre=G.idGenre;',
		array(':numVisa'=>$numVisa));
		$det=$rep->fetch();
		$rep->closeCursor();
		return $det;
	}
	
	public function getAffiche($numVisa){
		$rep=$this->executerRequete('SELECT idAffiche FROM AFFICHE WHERE numVisa=:numVisa',
		array(':numVisa'=>$numVisa));
		$pic=$rep->fetch();
		$rep->closeCursor();
		return $pic;
	}
	
	public function getCasting($numVisa) {
		$rep=$this->executerRequete('SELECT * FROM ACTEUR A, VIP V, PROFIL P WHERE numVisa=:numVisa AND V.numVip=A.numVip AND V.numVip=P.numVip ',
		array(':numVisa'=>$numVisa));
		$casting=$rep->fetchAll();
		$rep->closeCursor();
		return $casting;
	}
	
	public function getProducer($numVisa) {
		$rep=$this->executerRequete('SELECT * FROM REALISATEUR R, VIP V, PROFIL P WHERE numVisa=:numVisa AND V.numVip=R.numVip AND V.numVip=P.numVip ',
		array(':numVisa'=>$numVisa));
		$producer=$rep->fetchAll();
		$rep->closeCursor();
		return $producer;
	}
	
}
?>