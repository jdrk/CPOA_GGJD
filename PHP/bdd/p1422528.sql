-- phpMyAdmin SQL Dump
-- version 4.0.10.15
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 05 Juin 2016 à 01:02
-- Version du serveur: 5.1.73
-- Version de PHP: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `p1422528`
--

-- --------------------------------------------------------

--
-- Structure de la table `ACTEUR`
--

CREATE TABLE IF NOT EXISTS `ACTEUR` (
  `numVip` varchar(3) NOT NULL DEFAULT '',
  `numVisa` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`numVip`,`numVisa`),
  KEY `fk_acteur_visa` (`numVisa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `ACTEUR`
--

INSERT INTO `ACTEUR` (`numVip`, `numVisa`) VALUES
('001', '104422'),
('002', '104422'),
('002', '113283'),
('010', '113283'),
('009', '113868'),
('004', '114028'),
('005', '114028'),
('009', '114028'),
('009', '119447'),
('014', '124871'),
('007', '126718'),
('012', '126718'),
('006', '131961'),
('011', '131961'),
('044', '140989'),
('013', '143257'),
('016', '143257'),
('008', '143552'),
('003', '90813'),
('037', '90813');

-- --------------------------------------------------------

--
-- Structure de la table `FILM`
--

CREATE TABLE IF NOT EXISTS `FILM` (
  `numVisa` varchar(6) NOT NULL DEFAULT '',
  `titreFilm` varchar(100) NOT NULL DEFAULT '',
  `idGenre` varchar(2) NOT NULL DEFAULT '',
  `anneeSortie` int(4) NOT NULL,
  `idAffiche` varchar(10) NOT NULL DEFAULT '000000.jpg',
  PRIMARY KEY (`numVisa`),
  KEY `fk_genre` (`idGenre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `FILM`
--

INSERT INTO `FILM` (`numVisa`, `titreFilm`, `idGenre`, `anneeSortie`, `idAffiche`) VALUES
('104422', 'OCEAN''S ELEVEN FAITES VOS JEUX', '11', 2002, '104422.jpg'),
('113283', 'MR. & MRS. SMITH', '09', 2005, '113283.jpg'),
('113868', 'LES NOCES FUNÈBRES DE TIM BURTON', '02', 2005, '113868.jpg'),
('114028', 'HARRY POTTER ET LA COUPE DE FEU', '07', 2005, '114028.jpg'),
('119447', 'SWEENEY TODD, LE DIABOLIQUE BARBIER DE FLEET STREET', '06', 2008, '119447.jpg'),
('124871', 'LE BRUIT DES GLAÇONS', '04', 2009, '124871.jpg'),
('126718', 'INCEPTION', '10', 2010, '126718.jpg'),
('131961', 'HUNGER GAMES', '10', 2012, '131961.jpg'),
('140989', 'COMMENT TUER SON BOSS 2', '04', 2014, '140989.jpg'),
('143257', 'À VIF !', '04', 2015, '143257.jpg'),
('143552', 'LA 5ÈME VAGUE', '10', 2016, '143552.jpg'),
('90813', 'LE CINQUIÈME ÉLÉMENT', '10', 1997, '90813.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `GENRE`
--

CREATE TABLE IF NOT EXISTS `GENRE` (
  `idGenre` varchar(2) NOT NULL DEFAULT '',
  `libelleGenre` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idGenre`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `GENRE`
--

INSERT INTO `GENRE` (`idGenre`, `libelleGenre`) VALUES
('01', 'Action'),
('02', 'Animation'),
('03', 'Aventure'),
('04', 'Comédie'),
('05', 'Drame'),
('06', 'Horreur'),
('07', 'Fantastique'),
('08', 'Policier'),
('09', 'Romance'),
('10', 'Science fiction'),
('11', 'Thriller'),
('12', 'Western'),
('13', 'Erotique');

-- --------------------------------------------------------

--
-- Structure de la table `NATIONALITE`
--

CREATE TABLE IF NOT EXISTS `NATIONALITE` (
  `idNat` varchar(2) NOT NULL DEFAULT '',
  `nomNat` varchar(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`idNat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `NATIONALITE`
--

INSERT INTO `NATIONALITE` (`idNat`, `nomNat`) VALUES
('AU', 'australienne'),
('BE', 'belge'),
('CH', 'suisse'),
('CN', 'chinoise'),
('DE', 'allemande'),
('ES', 'espagnole'),
('FR', 'française'),
('HI', 'indienne'),
('IT', 'italienne'),
('MG', 'malgache'),
('PT', 'portugaise'),
('RU', 'russe'),
('UK', 'britannique'),
('US', 'américaine');

-- --------------------------------------------------------

--
-- Structure de la table `NEWEVENT`
--

CREATE TABLE IF NOT EXISTS `NEWEVENT` (
  `numVip` varchar(3) NOT NULL DEFAULT '',
  `dateMariage` date NOT NULL,
  `numVipConjoint` varchar(3) NOT NULL,
  `lieuMariage` varchar(20) DEFAULT NULL,
  `dateDivorce` date DEFAULT '1000-01-01',
  PRIMARY KEY (`numVip`,`dateMariage`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `NEWEVENT`
--

INSERT INTO `NEWEVENT` (`numVip`, `dateMariage`, `numVipConjoint`, `lieuMariage`, `dateDivorce`) VALUES
('001', '1989-12-15', '049', 'Inconnu', '1993-01-01'),
('001', '2014-09-27', '040', 'Venise', '1000-01-01'),
('002', '2000-07-29', '044', 'Malibu', '2005-10-02'),
('002', '2014-08-23', '010', 'Miraval', '1000-01-01'),
('003', '1987-11-21', '046', 'Inconnu', '2000-09-09'),
('003', '2009-03-27', '045', 'Caraïbes', '1000-01-01'),
('010', '1996-03-28', '042', 'Inconnu', '1999-12-17'),
('010', '2000-05-05', '041', 'Inconnu', '2003-06-02'),
('012', '2007-01-01', '047', 'Inconnu', '1000-01-01'),
('013', '2007-07-05', '043', 'Inconnu', '1000-01-01'),
('014', '2009-07-25', '015', 'Anduze', '2013-01-06'),
('016', '2006-12-30', '048', 'Inconnu', '2007-05-14'),
('017', '1980-03-15', '018', 'Inconnu', '1000-01-01'),
('019', '1989-12-02', '021', 'Inconnu', '1994-11-18'),
('019', '2003-05-10', '020', 'Inconnu', '1000-01-01'),
('022', '1985-11-27', '024', 'Inconnu', '1989-08-08'),
('022', '1991-10-02', '023', 'Inconnu', '1000-01-01'),
('025', '1997-04-26', '028', 'Inconnu', '1000-01-01'),
('026', '2009-10-11', '027', 'Inconnu', '1000-01-01'),
('029', '2000-07-12', '030', 'Inconnu', '1000-01-01'),
('034', '2001-02-24', '009', 'Inconnu', '2014-06-07'),
('035', '1986-03-03', '039', 'Inconnu', '1991-10-10'),
('035', '1992-03-17', '038', 'Inconnu', '1997-06-07'),
('035', '1997-12-14', '037', 'Inconnu', '1999-01-30'),
('035', '2004-08-28', '036', 'Inconnu', '1000-01-01'),
('051', '2016-06-09', '052', 'test', '2016-10-12'),
('053', '2015-06-07', '054', 'Inconnu', '2016-06-16'),
('053', '2017-10-10', '054', 'Inconnu', '2018-10-10');

--
-- Déclencheurs `NEWEVENT`
--
DROP TRIGGER IF EXISTS `changeStatutD`;
DELIMITER //
CREATE TRIGGER `changeStatutD` AFTER UPDATE ON `NEWEVENT`
 FOR EACH ROW BEGIN

	IF(NEW.dateDivorce>OLD.dateDivorce) THEN
		UPDATE VIP SET codeStatut='D' WHERE numVip=NEW.numVip;
		UPDATE VIP SET codeStatut='D' WHERE numVip=NEW.numVipConjoint;
	END IF;
END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `changeStatutM`;
DELIMITER //
CREATE TRIGGER `changeStatutM` AFTER INSERT ON `NEWEVENT`
 FOR EACH ROW BEGIN
	UPDATE VIP SET codeStatut='M' WHERE numVip=NEW.numVip;
	UPDATE VIP SET codeStatut='M' WHERE numVip=NEW.numVipConjoint;
END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `checkNewDivorce`;
DELIMITER //
CREATE TRIGGER `checkNewDivorce` BEFORE UPDATE ON `NEWEVENT`
 FOR EACH ROW BEGIN
	DECLARE dateDivorceU_e CONDITION FOR SQLSTATE '45004';
	DECLARE dateM DATE;

	SELECT dateMariage INTO dateM
	FROM NEWEVENT 
	WHERE numVip=NEW.numVip AND dateDivorce='1000-01-01';

	IF(dateM>=NEW.dateDivorce AND NEW.dateDivorce!='1000-01-01') THEN
		CALL dateDivorceU_e;
	END IF;
END
//
DELIMITER ;
DROP TRIGGER IF EXISTS `checkNewMariage`;
DELIMITER //
CREATE TRIGGER `checkNewMariage` BEFORE INSERT ON `NEWEVENT`
 FOR EACH ROW BEGIN
	
	DECLARE codeS1 VARCHAR(1);
	DECLARE codeS2 VARCHAR(1);
	DECLARE dateD1 DATE;
	DECLARE dateD2 DATE;
	DECLARE statutM_e CONDITION FOR SQLSTATE '45001';
	DECLARE vipIdentique_e CONDITION FOR SQLSTATE '45002';
	DECLARE dateDivorceI_e CONDITION FOR SQLSTATE '45003';

	SELECT codeStatut INTO codeS1
	FROM VIP
	WHERE numVip=NEW.numVip;
	
	SELECT codeStatut INTO codeS2
	FROM VIP
	WHERE numVip=NEW.numVipConjoint;

	SELECT MAX(dateDivorce) INTO dateD1
	FROM NEWEVENT
	WHERE numVip=NEW.numVip;
	
	SELECT MAX(dateDivorce) INTO dateD2
	FROM NEWEVENT
	WHERE numVipConjoint=NEW.numVipConjoint;

	IF(NEW.numVip=NEW.numVipConjoint) THEN
		CALL vipIdentique_e;
	END IF;
       
    IF(codeS1='M' OR codeS2='M') THEN
       CALL statutM_e;
    END IF;

    IF(dateD1>=NEW.dateMariage OR dateD2>=NEW.dateMariage) THEN
       CALL dateDivorceI_e;
    END IF;

END
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `PHOTO`
--

CREATE TABLE IF NOT EXISTS `PHOTO` (
  `numVip` varchar(3) NOT NULL DEFAULT '',
  `idPhoto` varchar(10) NOT NULL DEFAULT '',
  `datePhoto` date DEFAULT NULL,
  `lieuPhoto` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`numVip`,`idPhoto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `PHOTO`
--

INSERT INTO `PHOTO` (`numVip`, `idPhoto`, `datePhoto`, `lieuPhoto`) VALUES
('001', 'PH005.jpg', '1000-01-01', ''),
('002', 'PH003.jpg', '1000-01-01', ''),
('002', 'PH005.jpg', '1000-01-01', ''),
('004', 'PH002.jpg', '1000-01-01', ''),
('005', 'PH002.jpg', '1000-01-01', ''),
('006', 'PH001.jpg', '1000-01-01', ''),
('007', 'PH006.jpg', '1000-01-01', ''),
('010', 'PH003.jpg', '1000-01-01', ''),
('011', 'PH001.jpg', '1000-01-01', ''),
('011', 'PH004.jpg', '1000-01-01', ''),
('012', 'PH006.jpg', '1000-01-01', ''),
('014', 'PH007.jpg', '1000-01-01', ''),
('015', 'PH007.jpg', '1000-01-01', ''),
('016', 'PH004.jpg', '1000-01-01', '');

-- --------------------------------------------------------

--
-- Structure de la table `REALISATEUR`
--

CREATE TABLE IF NOT EXISTS `REALISATEUR` (
  `numVip` varchar(3) NOT NULL DEFAULT '',
  `numVisa` varchar(6) NOT NULL DEFAULT '',
  PRIMARY KEY (`numVip`,`numVisa`),
  KEY `fk_realisateur_visa` (`numVisa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `REALISATEUR`
--

INSERT INTO `REALISATEUR` (`numVip`, `numVisa`) VALUES
('019', '104422'),
('033', '113283'),
('034', '113868'),
('017', '114028'),
('034', '119447'),
('036', '124871'),
('025', '126718'),
('029', '131961'),
('031', '140989'),
('050', '143257'),
('032', '143552'),
('012', '534354'),
('035', '90813');

-- --------------------------------------------------------

--
-- Structure de la table `VIP`
--

CREATE TABLE IF NOT EXISTS `VIP` (
  `numVip` varchar(3) NOT NULL DEFAULT '',
  `nomVip` varchar(20) NOT NULL DEFAULT '',
  `prenomVip` varchar(20) NOT NULL DEFAULT '',
  `civilite` varchar(1) NOT NULL DEFAULT '',
  `dateNaissance` date NOT NULL,
  `lieuNaissance` varchar(20) NOT NULL DEFAULT '',
  `codeRole` varchar(2) NOT NULL DEFAULT '',
  `codeStatut` varchar(1) NOT NULL DEFAULT 'C',
  `nationalite` varchar(30) NOT NULL DEFAULT '',
  `idProfil` varchar(10) NOT NULL DEFAULT 'P00.jpg',
  PRIMARY KEY (`numVip`),
  KEY `fk_pays` (`nationalite`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `VIP`
--

INSERT INTO `VIP` (`numVip`, `nomVip`, `prenomVip`, `civilite`, `dateNaissance`, `lieuNaissance`, `codeRole`, `codeStatut`, `nationalite`, `idProfil`) VALUES
('001', 'CLOONEY', 'George', 'M', '1961-05-06', 'Lexington', 'AR', 'M', 'US', 'P01.jpg'),
('002', 'PITT', 'Brad', 'M', '1963-12-18', 'Shawnee', 'AC', 'M', 'US', 'P02.jpg'),
('003', 'WILLIS', 'Bruce', 'M', '1955-03-19', 'Idar-Oberstein', 'AC', 'M', 'US', 'P03.jpg'),
('004', 'WATSON', 'Emma', 'F', '1990-04-15', 'Paris', 'AC', 'C', 'UK', 'P04.jpg'),
('005', 'RADCLIFFE', 'Daniel', 'M', '1989-07-23', 'Londres', 'AC', 'C', 'UK', 'P05.jpg'),
('006', 'HUTCHERSON', 'Josh', 'M', '1992-10-12', 'Union', 'AC', 'C', 'US', 'P06.jpg'),
('007', 'DICAPRIO', 'Leonardo', 'M', '1974-11-11', 'Hollywood', 'AC', 'C', 'US', 'P07.jpg'),
('008', 'MORETZ', 'Chloë', 'F', '1997-02-10', 'Atlanta', 'AC', 'C', 'US', 'P08.jpg'),
('009', 'CARTER', 'Helena', 'F', '1966-05-26', 'Londres', 'AC', 'D', 'UK', 'P09.jpg'),
('010', 'JOLIE', 'Angelina', 'F', '1975-06-04', 'Los Angeles', 'AR', 'M', 'US', 'P10.jpg'),
('011', 'LAWRENCE', 'Jennifer', 'F', '1990-08-15', 'Louisville', 'AR', 'C', 'US', 'P11.jpg'),
('012', 'COTILLARD', 'Marion', 'F', '1975-09-30', 'Paris', 'AR', 'M', 'FR', 'P12.jpg'),
('013', 'SY', 'Omar', 'M', '1978-01-20', 'Trappes', 'AR', 'M', 'FR', 'P13.jpg'),
('014', 'DUJARDIN', 'Jean', 'M', '1972-06-19', 'Rueil-Malmaison', 'AR', 'D', 'FR', 'P14.jpg'),
('015', 'LAMY', 'Alexandra', 'F', '1971-10-14', 'Alès', 'AR', 'D', 'FR', 'P15.jpg'),
('016', 'COOPER', 'Bradley', 'M', '1975-01-05', 'Philadelphie', 'AR', 'D', 'UK', 'P16.jpg'),
('017', 'NEWELL', 'Mike', 'M', '1942-03-28', 'St Albans', 'RE', 'M', 'UK', 'P17.jpg'),
('018', 'STEGERS', 'Bernice', 'F', '1942-03-28', 'St Albans', 'AC', 'M', 'UK', 'P18.jpg'),
('019', 'SODERBERGH', 'Steven', 'M', '1963-01-14', 'Atlanta', 'RE', 'M', 'US', 'P19.jpg'),
('020', 'ASNER', 'Jules', 'F', '1968-02-14', 'Tempe', 'AC', 'M', 'US', 'P20.jpg'),
('021', 'BRANTLEY', 'Betsy', 'F', '1955-09-20', 'Rutherfordton', 'AC', 'D', 'US', 'P21.jpg'),
('022', 'SPIELBERG', 'Steven', 'M', '1946-12-18', 'Cincinnati', 'RE', 'M', 'US', 'P22.jpg'),
('023', 'CAPSHAW', 'Kate', 'F', '1953-11-03', 'Fort Worth', 'AC', 'M', 'US', 'P23.jpg'),
('024', 'IRVING', 'Amy', 'F', '1953-09-10', 'Palo Alto', 'AC', 'D', 'US', 'P24.jpg'),
('025', 'NOLAN', 'Christopher', 'M', '1970-07-30', 'Londres', 'RE', 'M', 'UK', 'P25.jpg'),
('026', 'BLIER', 'Bertrand', 'M', '1939-03-14', 'Paris', 'RE', 'M', 'FR', 'P26.jpg'),
('027', 'RAHOUADJ', 'Farida', 'F', '1965-04-23', 'Salon de Provence', 'AC', 'M', 'FR', 'P27.jpg'),
('028', 'THOMAS', 'Emma', 'F', '1968-01-30', 'Londres', 'AC', 'M', 'UK', 'P28.jpg'),
('029', 'ROSS', 'Gary', 'M', '1956-11-03', 'Los Angeles', 'AR', 'M', 'US', 'P29.jpg'),
('030', 'THOMAS', 'Allison', 'F', '1961-06-05', 'New York', 'AC', 'M', 'US', 'P30.jpg'),
('031', 'ANDERS', 'Sean', 'M', '1969-06-05', 'DeForest', 'AR', 'C', 'US', 'P31.jpg'),
('032', 'BLAKESON', 'Jonathan', 'M', '1977-03-02', 'Harrogate', 'AC', 'C', 'UK', 'P32.jpg'),
('033', 'LIMAN', 'Doug', 'M', '1965-07-24', 'New York City', 'RE', 'C', 'US', 'P33.jpg'),
('034', 'BURTON', 'Tim', 'M', '1958-08-25', 'Burbank', 'AR', 'D', 'US', 'P34.jpg'),
('035', 'BESSON', 'Luc', 'M', '1959-03-18', 'Paris', 'RE', 'M', 'FR', 'P35.jpg'),
('036', 'SILLA', 'Virginie', 'F', '1972-05-12', 'Ottawa', 'RE', 'M', 'FR', 'P36.jpg'),
('037', 'JOVOVICH', 'Milla', 'F', '1975-12-17', 'Kiev', 'AC', 'D', 'US', 'P37.jpg'),
('038', 'LE BESCO', 'Maïwenn', 'F', '1976-04-17', 'Les Lilas', 'AR', 'D', 'FR', 'P38.jpg'),
('039', 'PARILLAUD', 'Anne', 'F', '1960-05-06', 'Paris', 'AC', 'D', 'FR', 'P39.jpg'),
('040', 'ALAMUDDIN', 'Amal', 'F', '1978-02-03', 'Beyrouth', 'AC', 'M', 'US', 'P40.jpg'),
('041', 'THORNTON', 'Billy', 'M', '1955-08-04', 'Hot Springs', 'AR', 'D', 'US', 'P41.jpg'),
('042', 'MILLER', 'Jonny', 'M', '1972-11-15', 'Londres', 'AC', 'D', 'UK', 'P42.jpg'),
('043', 'SY', 'Hélène', 'F', '1979-03-14', 'Paris', 'AC', 'M', 'FR', 'P43.jpg'),
('044', 'ANISTON', 'Jennifer', 'F', '1969-02-11', 'Los Angeles', 'AR', 'D', 'US', 'P44.jpg'),
('045', 'HEMING', 'Emma', 'F', '1978-06-18', 'Malte', 'AC', 'M', 'UK', 'P45.jpg'),
('046', 'MOORE', 'Demi', 'F', '1962-11-11', 'Roswell', 'AR', 'D', 'US', 'P46.jpg'),
('047', 'CANET', 'Guillaume', 'M', '1973-04-10', 'Paris', 'AR', 'M', 'FR', 'P47.jpg'),
('048', 'ESPOSITO', 'Jennifer', 'F', '1973-04-11', 'New York', 'AC', 'D', 'US', 'P48.jpg'),
('049', 'BALSAM', 'Talia', 'F', '1959-03-05', 'New York', 'AC', 'D', 'US', 'P49.jpg'),
('050', 'WELLS', 'John', 'M', '1956-05-28', 'Alexandria', 'RE', 'C', 'US', 'P50.jpg'),
('051', 'A', 'A', 'M', '1999-06-03', 'a', 'AC', 'D', 'FR', 'P00.jpg'),
('052', 'B', 'B', 'M', '2016-06-02', 'b', 'AC', 'D', 'FR', 'P00.jpg'),
('053', 'C', 'C', 'M', '2012-06-16', 'C', 'AC', 'D', 'FR', 'P00.jpg'),
('054', 'D', 'D', 'M', '2012-06-16', 'D', 'AC', 'D', 'IT', 'P00.jpg'),
('056', 'E', 'E', 'M', '2016-06-17', 'ici', 'AC', 'C', 'FR', 'P00.jpg'),
('057', 'E', 'E', 'M', '2016-06-17', 'ici', 'AC', 'C', 'FR', 'P00.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
