-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 16 Octobre 2014 à 03:10
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `ft_database`
--

-- --------------------------------------------------------

--
-- Structure de la table `jeu`
--

CREATE TABLE IF NOT EXISTS `jeu` (
  `id_jeu` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `url_image` varchar(255) NOT NULL,
  `studio_developpement` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `avis_ft` varchar(255) NOT NULL,
  `site_web` varchar(255) NOT NULL,
  PRIMARY KEY (`id_jeu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id_news` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `synopsis` varchar(500) NOT NULL,
  `redacteur` int(11) NOT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id_news`, `titre`, `image`, `synopsis`, `redacteur`) VALUES
(1, 'L\'étoile serait en fait cancérigène, une découverte macabre pour Luigi...', 'news1.jpg', '"Putain de merde !" s\'exclame le pauvre Luigi en lisant le journal la veille au matin. Les étoiles sont cancérigènes ? Il en a mangé toute sa vie sans se méfier ! Le jeune homosexuel italien se rue donc rapidement vers l\'hôpital le plus proche, la moustache au vent. A peine arrivé, il agresse un médecin pour qu\'on lui fasse des analyses. Le lendemain, les résultats tombent. Luigi est condamné. à rester le j2. Pour le reste, ça va. C\'est Mario qui bouffe les étoiles. Bien fait pour sa gueule !', 1),
(2, 'Un réseau de drogues démantelé au royaume champignon !!!', 'news2.jpg', 'Envie d\'un petit champignon ? Besoin d\'un petit pétard ? Hé bien avant hier, il vous fallait contacter un certain "It\'s-a-me !" Mario. Mais dorénavant, vous pouvez vous assoir dessus ! Ce criminel a été arrêté par les forces de l\'ordre. Le brigadier Bowser raconte : \"on a eu un tuyau de son entourage, quelqu\'un de proche, vous savez ?". A ce moment même, on aperçoit la princesse Peach en tenue de cuir qui sort de la chambre du brigadier. "Attend pupuce, j\'arrive..."', 1),
(3, 'Bob l\'éponge trouvé ivre mort dans une orgie d\'un carrefour parisien...' , 'news3.png', 'C\est avec étonnement que Joséphine, caissière depuis maintenant 56 ans à carrefour, découvre en arrivant au travail un Bob l\'éponge ivre mort : "Je n\ai pas compris tout de suite ce qu\'il se passait... Il était là, par terre, imbibé d\'alcool, entourée d\'une vingtaine d\'autres éponges, complètement nues. Il y avait du produit vaisselle partout !". La caissière, traumatisée à vie, ainsi que son employeur, ont décidé de porter plainte. Le tribunal aura lieu à Bikini Bottom.', 1),
(4, 'Ceci est le titre de la news 4 donc tranquille pète un coup', 'news4.jpg', '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."', 1),
(5, 'Ceci est le titre de la news 5 donc tranquille pète un coup', 'news5.jpg', '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."', 1);

-- --------------------------------------------------------

--
-- Structure de la table `personnage`
--

CREATE TABLE IF NOT EXISTS `personnage` (
  `id_personnage` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `niveau` varchar(255) NOT NULL,
  `id_serveur` varchar(255) NOT NULL,
  PRIMARY KEY (`id_personnage`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `motdepasse` varchar(20) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id_user`, `mail`, `nom`, `prenom`, `pseudo`, `motdepasse`) VALUES
(1, 'florian.chassot@gmail.com', 'Chassot', 'Florian', 'Millambeur', '123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
