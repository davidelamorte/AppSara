-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 24, 2018 at 11:21 AM
-- Server version: 5.6.33-log
-- PHP Version: 5.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_engimalert`
--

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` varchar(255) NOT NULL,
  `id_notifica` varchar(255) NOT NULL,
  `textarea` varchar(5000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `time`, `id_notifica`, `textarea`) VALUES
(22, '24-03-2018 | 02:10:33', 'In Pausa', 'prova redirect'),
(24, '24-03-2018 | 10:28:21', 'In Pausa', 'Prova Fabio'),
(23, '24-03-2018 | 02:19:41', 'A Lezione', 'Ciao Fabio, alla fine non ho resistito e appena tornato a casa ho dovuto finire la parte back-end ahah \r\nTi lascio qui le varie password cosi puoi mettere a posto tutto quello che vuoi. La grafica della index ovviamente Ã¨ da rifare completamente e conto sul tuo superbo estro artistico!\r\nPer loggare su Altervista -> Username: engimalert Password: pobvabicve90\r\nLa password per il login su EngimAlert invece Ã¨: Mille-2018\r\nOra posso finalmente dormire in pace ahah'),
(25, '24-03-2018 | 10:53:17', 'A Lezione', 'bella lÃ¬Ã¬Ã¬Ã¬Ã¬Ã¬'),
(26, '24-03-2018 | 10:56:10', 'In Pausa', 'provo a vedere come si comporta il layout quando mettiamo un sacco di log');

-- --------------------------------------------------------

--
-- Table structure for table `notifica`
--

CREATE TABLE IF NOT EXISTS `notifica` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `notifica` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `notifica`
--

INSERT INTO `notifica` (`id`, `notifica`) VALUES
(1, 'In Pausa'),
(2, 'A Lezione');

-- --------------------------------------------------------

--
-- Table structure for table `password`
--

CREATE TABLE IF NOT EXISTS `password` (
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `password`
--

INSERT INTO `password` (`password`) VALUES
('Mille-2018');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
