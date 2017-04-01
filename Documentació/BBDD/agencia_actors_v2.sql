-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-03-2017 a las 15:51:10
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agencia_actors`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actor`
--

CREATE TABLE `actor` (
  `nif` varchar(15) NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `cognom` varchar(30) DEFAULT NULL,
  `genere` varchar(30) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `director`
--

CREATE TABLE `director` (
  `Nif` varchar(15) NOT NULL,
  `Nom` varchar(30) DEFAULT NULL,
  `Cognom` varchar(30) DEFAULT NULL,
  `Foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `director`
--

INSERT INTO `director` (`Nif`, `Nom`, `Cognom`, `Foto`) VALUES
('00000000T', 'Pau', 'Sanz', 'images/director/Spielberg.jpg'),
('11111111T', 'Oriol', 'Llovera', 'images/director/Spielberg.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paper`
--

CREATE TABLE `paper` (
  `idPaper` int(11) NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `idActor` varchar(15) DEFAULT NULL,
  `idPelicula` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
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
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`idPelicula`, `nom`, `descripcio`, `tipus`, `dataInici`, `dataFi`, `valoracio`, `foto`, `idDirector`) VALUES
(1, 'fthtfh', 'fthtfhtf', 'fthft', '2017-03-25', '2017-03-16', 3, 'Ãrea de trabajo 1_012.png', '0'),
(2, 'rdsghrdh', 'dfhdfhdf', 'dfhdf', '2017-03-15', '2017-03-15', 2, 'image/pelicula/Ãrea de trabajo 1_013.png', '0'),
(3, 'rdsghrdh', 'dfhdfhdf', 'dfhdf', '2017-03-15', '2017-03-15', 2, 'images/pelicula/Ãrea de trabajo 1_013.png', '0'),
(4, 'afasfa', 'drghdrthdtrh', 'dfhfdg', '0000-00-00', '0000-00-00', 4, 'images/pelicula/', '0'),
(5, 'Programation', 'dthfghgfh', 'asdf', '0000-00-00', '0000-00-00', 4, 'images/pelicula/', '0'),
(6, 'asdf', 'rdgdrg', 'asfasf', '0000-00-00', '0000-00-00', 4, 'images/pelicula/', '0'),
(7, 'afasfa', 'dsfsdfds', 'asfasfs', '0000-00-00', '0000-00-00', 4, 'images/pelicula/', '0'),
(8, 'cfhfcg', 'dfbfd', 'asdf', '0000-00-00', '0000-00-00', 4, 'images/pelicula/', '0'),
(9, 'cfhfcg', 'dfbfd', 'asdf', '0000-00-00', '0000-00-00', 4, 'images/pelicula/', '0'),
(10, 'cfhfcg', 'efsfs', 'dfhfdg', '0000-00-00', '0000-00-00', 4, 'images/pelicula/', '0'),
(11, 'cfhfcg', 'efsfs', 'dfhfdg', '0000-00-00', '0000-00-00', 4, 'images/pelicula/', '0'),
(12, 'afasfa', 'cghfghgf', 'asfasf', '0000-00-00', '0000-00-00', 3, 'images/pelicula/', '0'),
(13, 'afasfa', 'cghfghgf', 'asfasf', '0000-00-00', '0000-00-00', 3, 'images/pelicula/', '0'),
(14, 'sdfsdf', 'dfdsfsd', 'asfasf', '0000-00-00', '0000-00-00', 4, 'images/pelicula/', '0'),
(15, 'sdfsdf', 'dfdsfsd', 'asfasf', '0000-00-00', '0000-00-00', 4, 'images/pelicula/', '0'),
(16, 'sdfsdf', 'dfdsfsd', 'asfasf', '0000-00-00', '0000-00-00', 4, 'images/pelicula/', '0'),
(17, 'sdfsdf', 'dfdsfsd', 'asfasf', '0000-00-00', '0000-00-00', 4, 'images/pelicula/', '0'),
(18, 'sdfsdf', 'dfdsfsd', 'asfasf', '0000-00-00', '0000-00-00', 4, 'images/pelicula/', '0'),
(19, 'sdfsdf', 'dfdsfsd', 'asfasf', '0000-00-00', '0000-00-00', 4, 'images/pelicula/', '0'),
(20, 'cfhfcg', 'fthf', 'asfasfs', '0000-00-00', '0000-00-00', 5, 'images/pelicula/', '0'),
(21, 'cfhfcg', 'fthf', 'asfasfs', '0000-00-00', '0000-00-00', 5, 'images/pelicula/', '0'),
(22, 'cfhfcg', 'fthf', 'asfasfs', '0000-00-00', '0000-00-00', 5, 'images/pelicula/bo.png', '0'),
(23, 'cfhfcg', 'fthf', 'asfasfs', '0000-00-00', '0000-00-00', 5, 'images/pelicula/bo.png', '0'),
(24, 'cfhfcg', 'fthf', 'asfasfs', '0000-00-00', '0000-00-00', 5, 'images/pelicula/bo.png', '0'),
(25, 'asdf', 'fhfhf', 'asfasfs', '0000-00-00', '0000-00-00', 3, 'images/pelicula/Ãrea de trabajo 1_016.png', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `idUsuari` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`idUsuari`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'pau', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`nif`);

--
-- Indices de la tabla `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`Nif`);

--
-- Indices de la tabla `paper`
--
ALTER TABLE `paper`
  ADD PRIMARY KEY (`idPaper`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`idPelicula`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUsuari`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `paper`
--
ALTER TABLE `paper`
  MODIFY `idPaper` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `idPelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `idUsuari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
