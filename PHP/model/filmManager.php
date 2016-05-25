<?php
class filmManager extends Model{
	
	public function getFilm($genre)
	{
		if($genre=='Tout')
		{
			$rep=$this->executerRequete('SELECT * FROM FILM F ORDER BY titreFilm');
			$all=$rep->fetchAll();
			$rep->closeCursor();
			return $all;
		}
		else
		{
			$rep=$this->executerRequete('SELECT * FROM FILM F, GENRE G WHERE F.idGenre=G.idGenre AND libelleGenre=:genre',
			array(':genre'=>$genre));
			$all=$rep->fetchAll();
			$rep->closeCursor();
			return $all;
		}
	}
	
	public function getGenre()
	{
		$rep=$this->executerRequete('SELECT * FROM GENRE');
		$tab=$rep->fetchAll();
		$rep->closeCursor();
		return $tab;
	}
	
	public function getDetails($numVisa){
		$rep=$this->executerRequete('SELECT * FROM FILM F, GENRE G WHERE numVisa=:numVisa AND F.idGenre=G.idGenre;',
		array(':numVisa'=>$numVisa));
		$det=$rep->fetch();
		$rep->closeCursor();
		return $det;
	}
	
	public function getCasting($numVisa) {
		$rep=$this->executerRequete('SELECT * FROM ACTEUR A, VIP V WHERE numVisa=:numVisa AND V.numVip=A.numVip',
		array(':numVisa'=>$numVisa));
		$casting=$rep->fetchAll();
		$rep->closeCursor();
		return $casting;
	}
	
	public function getProducer($numVisa) {
		$rep=$this->executerRequete('SELECT * FROM REALISATEUR R, VIP V WHERE numVisa=:numVisa AND V.numVip=R.numVip',
		array(':numVisa'=>$numVisa));
		$producer=$rep->fetch();
		$rep->closeCursor();
		return $producer;
	}
	
}
?>