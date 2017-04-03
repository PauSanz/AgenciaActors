<<<<<<< HEAD
-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Temps de generació: 03-04-2017 a les 01:05:21
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
('23422458V', 'Adrien', 'Brody', 'home', '/images/actor/Adrien_Brody.jpg'),
('29043876M', 'Brie', 'Larson', 'dona', '/images/actor/Brie_Larson.jpg'),
('32911228E', 'Thomas', 'Kretschmann', 'home', '/images/actor/Thomas_Kretschmann.jpg'),
('34605709R', 'Eddie', 'Redmayne', 'home', '/images/actor/Eddie_Redmayne.jpg'),
('34768340E', 'Leonardo', 'DiCaprio', 'home', '/images/actor/Leonardo_Dicaprio.jpg'),
('35662325C', 'Channing', 'Tatum', 'home', '/images/actor/Channing_Tatum.jpg'),
('55831485C', 'Sean', 'Conery', 'home', '/images/actor/Sean_Connery.jpg'),
('61201092R', 'Will', 'Smith', 'home', '/images/actor/Will_Smith.jpg'),
('65854467Q', 'Benedict', 'Cumberbatch', 'home', '/images/actor/Benedict_Cumberbatch.jpg'),
('66684102H', 'Harrison', 'Ford', 'home', '/images/actor/Harrison_Ford.jpg');

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
('06093398P', 'Lenny', 'Abrahamson', 'images/director/Lenny_Abrahamson.jpg'),
('06765170L', 'George', 'Lucas', 'images/director/George_Lucas.jpg'),
('10745146Y', 'Morten', 'Tyldum', 'images/director/Morten_Tyldum.jpg'),
('11304444J', 'Stephen', 'Norrington', 'images/director/Stephen_Norrington.jpg'),
('16995132H', 'Michael', 'Sucsy', 'images/director/Michael_Sucsy.jpg'),
('28469498Y', 'Gabriele', 'Muccino', 'images/director/Gabriele_Muccino.jpg'),
('36528016Z', 'James', 'Cameron', 'images/director/James_Cameron.jpg'),
('46484640F', 'Tom', 'Hooper', 'images/director/Tom_Hooper.jpg'),
('86194175L', 'Francis', 'Lawrence', 'images/director/Francis_Lawrence.jpg'),
('87051212F', 'Roman', 'Polanski', 'images/director/Roman_Polanski.jpg');

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
(8, 'Dr Robert Neville', '61201092R', 36),
(9, 'Allan Quater', '55831485C', 38),
(10, 'Indiana Jones', '66684102H', 39),
(11, 'Wladyslaw Szpilman', '23422458V', 40),
(12, 'Ma', '29043876M', 41),
(13, 'Einar Wegene', '34605709R', 42),
(14, 'Jack Dawson', '34768340E', 43),
(15, 'Alan Turning', '65854467Q', 44),
(16, 'Leo', '35662325C', 45),
(17, 'Wilm Hosenfeld', '32911228E', 40),
(18, 'Chris Gardner', '61201092R', 46);

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
(36, 'Soy Leyendafd', 'Un cientÃ­fico militar llamado Robert Neville, interpretado por Will Smith, es el Ãºnico hombre con vida tras la inevitable expansiÃ³n de un terrorÃ­fico virus. Neville se ha salvado debido a su desconocida inmunidad al virus, pero no estÃ¡ solo. Hay personas que se infectaron por el virus y son ahora peligrosas criaturas mutantes que habitan en la noche. El cientÃ­fico huirÃ¡ de ellos al ponerse el dÃ­a, mientras que en las horas de sol los buscarÃ¡ para acabar con ellos durante sus horas de su', 'Drama', '2006-06-15', '2007-06-13', 3, 'images/pelicula/Soy_Leyenda.jpg', '86194175L'),
(38, 'La Liga de los hombres extraordinarios', 'El aventurero Allan Quatermain (Sean Connery) comanda la Liga de los Hombres Extraordinarios, una asociaciÃ³n de siete superhÃ©roes legendarios, compuesta por el misterioso CapitÃ¡n Nemo, la vampira Mina Harker, el invisible Rodney Skinner, el joven e intrÃ©pido agente secreto americano Tom Sawyer, el inalterable Dorian Gray y el inquietante dÃºo Jeckyll/Hyde. Procedentes de universos muy diferentes, los miembros de la Liga son contumaces individualistas, marginados con un pasado tenebroso y con', 'AcciÃ³n', '2002-05-22', '2003-06-03', 4, 'images/pelicula/La_liga_de_los_hombres_extraordinarios.jpg', '11304444J'),
(39, 'Indiana Jones y el templo maldito', 'El arqueÃ³logo y aventurero Indiana Jones estÃ¡ de vuelta. Persigue a una terrible secta que ha robado una joya sagrada dotada de poderes fabulosos. Una cantante de cabaret y un muchacho distraÃ­do le ayudarÃ¡n a enfrentarse a los peligros mÃ¡s increÃ­bles', 'AcciÃ³n', '1983-06-08', '1984-09-13', 5, 'images/pelicula/Indiana_Jones_y_el_templo_maldito.jpg', '06765170L'),
(40, 'El pianista', 'Durante la Segunda Guerra Mundial, Wladyslaw Szpilman, un cÃ©lebre pianista judÃ­o de origen polaco, escapa a la deportaciÃ³n, pero se encuentra hacinado en el gueto de Varsovia, donde comparte con los demÃ¡s sufrimientos, humillaciones y luchas heroicas. Cuando por fin logra huir de allÃ­, se refugia en las ruinas de la capital. Un oficial alemÃ¡n, que aprecia su mÃºsica, le ayudarÃ¡ a sobrevivir.', 'BiografÃ­a', '2001-02-15', '2002-06-12', 4, 'images/pelicula/El_Pianista.jpg', '87051212F'),
(41, 'La habitaciÃ³n', 'Como cualquier madre, Joey (Brie Larson) se dedica enteramente al cuidado de su hijo Jack (Jacob Tremblay), un niÃ±o de cinco aÃ±os, al que crÃ­a para que sea feliz y estÃ© seguro, haciendo las cosas tÃ­picas como jugar o contar historias. Su vida, sin embargo, es cualquier cosa menos tÃ­pica: ambos estÃ¡n atrapados, confinados en un reducido cubÃ­culo sin ventanas, un dormitorio con cocina, retrete, baÃ±era y una claraboya en el techo, al que Ma ha llamado eufemÃ­sticamente ''La habitaciÃ³n''. Po', 'Drama', '2014-12-26', '2015-01-21', 4, 'images/pelicula/La_Habitacion.jpg', '06093398P'),
(42, 'La chica danesa', 'Dinamarca, aÃ±os 20. La pareja de pintores formada por Einar (Eddie Redmayne) y Gerda Wegener (Alicia Vikander) disfruta de su Ã©xito. Un dÃ­a, por casualidad, la modelo a la que ella ha contratado para retratar en sus cuadros ha tenido que cancelar la cita y necesita terminar esas pinturas a tiempo. Para que ella pueda finalizar su trabajo, la pintora le pregunta a su marido si no le importarÃ­a ponerse medias y zapatos de mujer por unos instantes, a lo que Ã©l accederÃ¡ sin problema. Esta reve', 'BiografÃ­a', '2014-02-12', '2015-06-16', 4, 'images/pelicula/La_Chica_Danesa.jpg', '46484640F'),
(43, 'Titanic', 'Jack (Leonardo DiCaprio, ''El gran Gatsby''), un humilde y joven artista, y Rose (Kate Winslet, ''Un Dios salvaje''), una chica de clase acomodada, se conocerÃ¡n a bordo del Titanic, el barco mÃ¡s espectacular que jamÃ¡s haya surcado los siete mares.\r\n\r\nJack ha ganado el billete en una timba, y sus aposentos en el barco no son precisamete confortables. Por su parte, Rose, no estÃ¡ contenta con su suerte, pues estÃ¡ comprometida con un hombre al que no ama, Caledon (Billy Zane), que la trata como si ', 'Drama', '1996-05-15', '1997-07-18', 3, 'images/pelicula/Titanic.jpg', '36528016Z'),
(44, 'Descifrando Enigma', 'Basada en ''Alan Turing: The Enigma'', la biografÃ­a escrita por el lÃ­der del movimiento gay, Andrew Hodges, sobre la vida del britÃ¡nico criptÃ³grado Alan Turing. En la pelÃ­cula se desvela la realidad que rodeÃ³ a una de las personas que hicieron posible la derrota del ejÃ©rcito nazi en la Segunda Guerra Mundial.\r\n\r\nTuring, quien pasÃ³ a la historia por -en teorÃ­a- ser la persona responsable de descifrar los cÃ³digos secretos del ejÃ©rcito alemÃ¡n transmitidos por la mÃ¡quina Enigma, no fue tr', 'BiografÃ­a', '2013-11-14', '2014-06-18', 3, 'images/pelicula/Descifrando_Enigma.jpg', '10745146Y'),
(45, 'Todos los dÃ­as de mi vida', 'Paige (Rachel McAdams, ''Midnight in Paris'') y Leo (Channing Tatum, ''Querido John'') son una joven pareja que vive feliz y sin problemas. Sin embargo, un dÃ­a sufren un grave accidente de coche y Paige entra en coma. \r\n\r\nDebido al potente impacto, cuando recupera la conciencia, se da cuenta de que no recuerda nada de su vida reciente. Todos sus recuerdos junto a su marido Leo se han perdido para siempre, hasta el punto de que ni siquiera lo reconoce. Sin embargo, Paige sÃ­ recordarÃ¡ su vida pasad', 'Drama', '2011-10-12', '2012-11-10', 2, 'images/pelicula/Todos_los_dias_de_mi_vida.jpg', '16995132H'),
(46, 'En busca de la felicidad', 'Chris Gardner, un joven padre de familia, estÃ¡ tratando de ganarse la vida. Nunca ha tenido un trabajo estable y se pasa los dÃ­as haciendo malabares. Su mujer en cambio, va en contra de la forma que tiene para salir adelante. Un dÃ­a, harta de todo, decide abandonar a Chris y a su hijo de cinco aÃ±os, Christopher. En ese momento, la vida de ambos cambiarÃ¡ para siempre cuando todo se complique y tengan que vivir momentos difÃ­ciles, como el embargo de su casa o el esfuerzo en vano por buscar u', 'BiografÃ­a', '2005-09-30', '2006-06-05', 3, 'images/pelicula/En_busca_de_la_felicidad.jpg', '28469498Y');

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
  MODIFY `idPaper` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT per la taula `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `idPelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT per la taula `user`
--
ALTER TABLE `user`
  MODIFY `idUsuari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
=======
-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Temps de generació: 03-04-2017 a les 01:05:21
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
('23422458V', 'Adrien', 'Brody', 'home', '/images/actor/Adrien_Brody.jpg'),
('29043876M', 'Brie', 'Larson', 'dona', '/images/actor/Brie_Larson.jpg'),
('32911228E', 'Thomas', 'Kretschmann', 'home', '/images/actor/Thomas_Kretschmann.jpg'),
('34605709R', 'Eddie', 'Redmayne', 'home', '/images/actor/Eddie_Redmayne.jpg'),
('34768340E', 'Leonardo', 'DiCaprio', 'home', '/images/actor/Leonardo_Dicaprio.jpg'),
('35662325C', 'Channing', 'Tatum', 'home', '/images/actor/Channing_Tatum.jpg'),
('55831485C', 'Sean', 'Conery', 'home', '/images/actor/Sean_Connery.jpg'),
('61201092R', 'Will', 'Smith', 'home', '/images/actor/Will_Smith.jpg'),
('65854467Q', 'Benedict', 'Cumberbatch', 'home', '/images/actor/Benedict_Cumberbatch.jpg'),
('66684102H', 'Harrison', 'Ford', 'home', '/images/actor/Harrison_Ford.jpg');

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
('06093398P', 'Lenny', 'Abrahamson', 'images/director/Lenny_Abrahamson.jpg'),
('06765170L', 'George', 'Lucas', 'images/director/George_Lucas.jpg'),
('10745146Y', 'Morten', 'Tyldum', 'images/director/Morten_Tyldum.jpg'),
('11304444J', 'Stephen', 'Norrington', 'images/director/Stephen_Norrington.jpg'),
('16995132H', 'Michael', 'Sucsy', 'images/director/Michael_Sucsy.jpg'),
('28469498Y', 'Gabriele', 'Muccino', 'images/director/Gabriele_Muccino.jpg'),
('36528016Z', 'James', 'Cameron', 'images/director/James_Cameron.jpg'),
('46484640F', 'Tom', 'Hooper', 'images/director/Tom_Hooper.jpg'),
('86194175L', 'Francis', 'Lawrence', 'images/director/Francis_Lawrence.jpg'),
('87051212F', 'Roman', 'Polanski', 'images/director/Roman_Polanski.jpg');

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
(8, 'Dr Robert Neville', '61201092R', 36),
(9, 'Allan Quater', '55831485C', 38),
(10, 'Indiana Jones', '66684102H', 39),
(11, 'Wladyslaw Szpilman', '23422458V', 40),
(12, 'Ma', '29043876M', 41),
(13, 'Einar Wegene', '34605709R', 42),
(14, 'Jack Dawson', '34768340E', 43),
(15, 'Alan Turning', '65854467Q', 44),
(16, 'Leo', '35662325C', 45),
(17, 'Wilm Hosenfeld', '32911228E', 40),
(18, 'Chris Gardner', '61201092R', 46);

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
(36, 'Soy Leyendafd', 'Un cientÃ­fico militar llamado Robert Neville, interpretado por Will Smith, es el Ãºnico hombre con vida tras la inevitable expansiÃ³n de un terrorÃ­fico virus. Neville se ha salvado debido a su desconocida inmunidad al virus, pero no estÃ¡ solo. Hay personas que se infectaron por el virus y son ahora peligrosas criaturas mutantes que habitan en la noche. El cientÃ­fico huirÃ¡ de ellos al ponerse el dÃ­a, mientras que en las horas de sol los buscarÃ¡ para acabar con ellos durante sus horas de su', 'Drama', '2006-06-15', '2007-06-13', 3, 'images/pelicula/Soy_Leyenda.jpg', '86194175L'),
(38, 'La Liga de los hombres extraordinarios', 'El aventurero Allan Quatermain (Sean Connery) comanda la Liga de los Hombres Extraordinarios, una asociaciÃ³n de siete superhÃ©roes legendarios, compuesta por el misterioso CapitÃ¡n Nemo, la vampira Mina Harker, el invisible Rodney Skinner, el joven e intrÃ©pido agente secreto americano Tom Sawyer, el inalterable Dorian Gray y el inquietante dÃºo Jeckyll/Hyde. Procedentes de universos muy diferentes, los miembros de la Liga son contumaces individualistas, marginados con un pasado tenebroso y con', 'AcciÃ³n', '2002-05-22', '2003-06-03', 4, 'images/pelicula/La_liga_de_los_hombres_extraordinarios.jpg', '11304444J'),
(39, 'Indiana Jones y el templo maldito', 'El arqueÃ³logo y aventurero Indiana Jones estÃ¡ de vuelta. Persigue a una terrible secta que ha robado una joya sagrada dotada de poderes fabulosos. Una cantante de cabaret y un muchacho distraÃ­do le ayudarÃ¡n a enfrentarse a los peligros mÃ¡s increÃ­bles', 'AcciÃ³n', '1983-06-08', '1984-09-13', 5, 'images/pelicula/Indiana_Jones_y_el_templo_maldito.jpg', '06765170L'),
(40, 'El pianista', 'Durante la Segunda Guerra Mundial, Wladyslaw Szpilman, un cÃ©lebre pianista judÃ­o de origen polaco, escapa a la deportaciÃ³n, pero se encuentra hacinado en el gueto de Varsovia, donde comparte con los demÃ¡s sufrimientos, humillaciones y luchas heroicas. Cuando por fin logra huir de allÃ­, se refugia en las ruinas de la capital. Un oficial alemÃ¡n, que aprecia su mÃºsica, le ayudarÃ¡ a sobrevivir.', 'BiografÃ­a', '2001-02-15', '2002-06-12', 4, 'images/pelicula/El_Pianista.jpg', '87051212F'),
(41, 'La habitaciÃ³n', 'Como cualquier madre, Joey (Brie Larson) se dedica enteramente al cuidado de su hijo Jack (Jacob Tremblay), un niÃ±o de cinco aÃ±os, al que crÃ­a para que sea feliz y estÃ© seguro, haciendo las cosas tÃ­picas como jugar o contar historias. Su vida, sin embargo, es cualquier cosa menos tÃ­pica: ambos estÃ¡n atrapados, confinados en un reducido cubÃ­culo sin ventanas, un dormitorio con cocina, retrete, baÃ±era y una claraboya en el techo, al que Ma ha llamado eufemÃ­sticamente ''La habitaciÃ³n''. Po', 'Drama', '2014-12-26', '2015-01-21', 4, 'images/pelicula/La_Habitacion.jpg', '06093398P'),
(42, 'La chica danesa', 'Dinamarca, aÃ±os 20. La pareja de pintores formada por Einar (Eddie Redmayne) y Gerda Wegener (Alicia Vikander) disfruta de su Ã©xito. Un dÃ­a, por casualidad, la modelo a la que ella ha contratado para retratar en sus cuadros ha tenido que cancelar la cita y necesita terminar esas pinturas a tiempo. Para que ella pueda finalizar su trabajo, la pintora le pregunta a su marido si no le importarÃ­a ponerse medias y zapatos de mujer por unos instantes, a lo que Ã©l accederÃ¡ sin problema. Esta reve', 'BiografÃ­a', '2014-02-12', '2015-06-16', 4, 'images/pelicula/La_Chica_Danesa.jpg', '46484640F'),
(43, 'Titanic', 'Jack (Leonardo DiCaprio, ''El gran Gatsby''), un humilde y joven artista, y Rose (Kate Winslet, ''Un Dios salvaje''), una chica de clase acomodada, se conocerÃ¡n a bordo del Titanic, el barco mÃ¡s espectacular que jamÃ¡s haya surcado los siete mares.\r\n\r\nJack ha ganado el billete en una timba, y sus aposentos en el barco no son precisamete confortables. Por su parte, Rose, no estÃ¡ contenta con su suerte, pues estÃ¡ comprometida con un hombre al que no ama, Caledon (Billy Zane), que la trata como si ', 'Drama', '1996-05-15', '1997-07-18', 3, 'images/pelicula/Titanic.jpg', '36528016Z'),
(44, 'Descifrando Enigma', 'Basada en ''Alan Turing: The Enigma'', la biografÃ­a escrita por el lÃ­der del movimiento gay, Andrew Hodges, sobre la vida del britÃ¡nico criptÃ³grado Alan Turing. En la pelÃ­cula se desvela la realidad que rodeÃ³ a una de las personas que hicieron posible la derrota del ejÃ©rcito nazi en la Segunda Guerra Mundial.\r\n\r\nTuring, quien pasÃ³ a la historia por -en teorÃ­a- ser la persona responsable de descifrar los cÃ³digos secretos del ejÃ©rcito alemÃ¡n transmitidos por la mÃ¡quina Enigma, no fue tr', 'BiografÃ­a', '2013-11-14', '2014-06-18', 3, 'images/pelicula/Descifrando_Enigma.jpg', '10745146Y'),
(45, 'Todos los dÃ­as de mi vida', 'Paige (Rachel McAdams, ''Midnight in Paris'') y Leo (Channing Tatum, ''Querido John'') son una joven pareja que vive feliz y sin problemas. Sin embargo, un dÃ­a sufren un grave accidente de coche y Paige entra en coma. \r\n\r\nDebido al potente impacto, cuando recupera la conciencia, se da cuenta de que no recuerda nada de su vida reciente. Todos sus recuerdos junto a su marido Leo se han perdido para siempre, hasta el punto de que ni siquiera lo reconoce. Sin embargo, Paige sÃ­ recordarÃ¡ su vida pasad', 'Drama', '2011-10-12', '2012-11-10', 2, 'images/pelicula/Todos_los_dias_de_mi_vida.jpg', '16995132H'),
(46, 'En busca de la felicidad', 'Chris Gardner, un joven padre de familia, estÃ¡ tratando de ganarse la vida. Nunca ha tenido un trabajo estable y se pasa los dÃ­as haciendo malabares. Su mujer en cambio, va en contra de la forma que tiene para salir adelante. Un dÃ­a, harta de todo, decide abandonar a Chris y a su hijo de cinco aÃ±os, Christopher. En ese momento, la vida de ambos cambiarÃ¡ para siempre cuando todo se complique y tengan que vivir momentos difÃ­ciles, como el embargo de su casa o el esfuerzo en vano por buscar u', 'BiografÃ­a', '2005-09-30', '2006-06-05', 3, 'images/pelicula/En_busca_de_la_felicidad.jpg', '28469498Y');

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
  MODIFY `idPaper` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT per la taula `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `idPelicula` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT per la taula `user`
--
ALTER TABLE `user`
  MODIFY `idUsuari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
>>>>>>> master
