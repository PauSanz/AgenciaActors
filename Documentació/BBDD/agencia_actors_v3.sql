-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Temps de generació: 01-04-2017 a les 18:47:25
-- Versió del servidor: 10.1.16-MariaDB
-- Versió de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `agencia_actors`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `actor`
--

CREATE TABLE `actor` (
  `nif` varchar(15) NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `cognom` varchar(30) DEFAULT NULL,
  `genere` varchar(30) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Bolcant dades de la taula `actor`
--

INSERT INTO `actor` (`nif`, `nom`, `cognom`, `genere`, `foto`) VALUES
('47918024P', 'Leonardo', 'DiCaprio', 'home', '/images/actor/LeonardoDicaprio.jpg');

-- --------------------------------------------------------

--
-- Estructura de la taula `director`
--

CREATE TABLE `director` (
  `Nif` varchar(15) NOT NULL,
  `Nom` varchar(30) DEFAULT NULL,
  `Cognom` varchar(30) DEFAULT NULL,
  `Foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Bolcant dades de la taula `director`
--

INSERT INTO `director` (`Nif`, `Nom`, `Cognom`, `Foto`) VALUES
('00000000T', 'Pau', 'Sanz', 'images/director/Spielberg.jpg');

-- --------------------------------------------------------

--
-- Estructura de la taula `paper`
--

CREATE TABLE `paper` (
  `idPaper` int(11) NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `idActor` varchar(15) DEFAULT NULL,
  `idPelicula` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Bolcant dades de la taula `paper`
--

INSERT INTO `paper` (`idPaper`, `nom`, `idActor`, `idPelicula`) VALUES
(3, 'Ron Weasly', '47918024P', 33);

-- --------------------------------------------------------

--
-- Estructura de la taula `pelicula`
--

CREATE TABLE `pelicula` (
  `idPelicula` int(11) NOT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `descripcio` varchar(500) DEFAULT NULL,
  `tipus` varchar(20) DEFAULT NULL,
  `dataInici` date DEFAULT NULL,
  `dataFi` date DEFAULT NULL,
  `valoracio` int(11) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `idDirector` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Bolcant dades de la taula `pelicula`
--

INSERT INTO `pelicula` (`idPelicula`, `nom`, `descripcio`, `tipus`, `dataInici`, `dataFi`, `valoracio`, `foto`, `idDirector`) VALUES
(22, 'cfhfcg', 'fthf', 'asfasfs', '0000-00-00', '0000-00-00', 5, 'images/pelicula/bo.png', '0'),
(23, 'cfhfcg', 'fthf', 'asfasfs', '0000-00-00', '0000-00-00', 5, 'images/pelicula/bo.png', '0'),
(24, 'cfhfcg', 'fthf', 'asfasfs', '0000-00-00', '0000-00-00', 5, 'images/pelicula/bo.png', '0'),
(33, 'Harry Potter i la pedra filosofal', 'Harry Potter es un niÃ±o huÃ©rfano criado por su tÃ­o Vernon y su tÃ­a Petunia que lo odian. Desde que era pequeÃ±o, estos siempre le han contado que sus padres murieron en un accidente de coche.\r\nEl dÃ­a de su decimoprimer cumpleaÃ±os, Harry recibe la inesperada visita de un hombre gigantesco de nombre Rubeus Hagrid. Este le revela que es, de hecho, hijo de dos poderosos magos y que Ã©l tambiÃ©n posee extraordinarios poderes.\r\nLleno de alegrÃ­a, el chico acepta ir a estudiar a Hogwarts, el famo', 'Fantasia', '2017-01-01', '2028-07-16', 4, 'images/pelicula/harry-potter-y-la-piedra-filosofal-poster.jpg', '00000000T');

-- --------------------------------------------------------

--
-- Estructura de la taula `user`
--

CREATE TABLE `user` (
  `idUsuari` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Bolcant dades de la taula `user`
--

INSERT INTO `user` (`idUsuari`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'pau', '1234');

--
-- Indexos per taules bolcades
--

--
-- Index de la taula `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`nif`);

--
-- Index de la taula `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`Nif`);

--
-- Index de la taula `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`idPaper`);

--
-- Index de la taula `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`idPelicula`);

--
-- Index de la taula `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUsuari`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `paper`
--
ALTER TABLE `paper`
  MODIFY `idPaper` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT per la taula `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `idPelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT per la taula `user`
--
ALTER TABLE `user`
  MODIFY `idUsuari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
