-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 06, 2019 at 11:26 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `html`
--

-- --------------------------------------------------------

--
-- Table structure for table `bodycouleur`
--

DROP TABLE IF EXISTS `bodycouleur`;
CREATE TABLE IF NOT EXISTS `bodycouleur` (
  `titrebody` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fondtitrebody` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `textebody` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fondtextebody` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `idcbody` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idcbody`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

DROP TABLE IF EXISTS `file`;
CREATE TABLE IF NOT EXISTS `file` (
  `nomfichier` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idfichier` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idfichier`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footcouleur`
--

DROP TABLE IF EXISTS `footcouleur`;
CREATE TABLE IF NOT EXISTS `footcouleur` (
  `textegfoot` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fondgfoot` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `textetitre1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fondtitre1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fondtextetitre1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `textetitre2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fondtitre2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fondtextetitre2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `textetitre3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fondtitre3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fondtextetitre3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `idcfoot` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idcfoot`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

DROP TABLE IF EXISTS `footer`;
CREATE TABLE IF NOT EXISTS `footer` (
  `IDfooter` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titrefooter` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `liste1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `liste2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `liste3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `liste4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`IDfooter`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='TABLE FOOTER';

-- --------------------------------------------------------

--
-- Table structure for table `html`
--

DROP TABLE IF EXISTS `html`;
CREATE TABLE IF NOT EXISTS `html` (
  `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `navbar_toggle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `navelem1` longtext COLLATE utf8_unicode_ci NOT NULL,
  `navelem2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `navelem3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `nav2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

DROP TABLE IF EXISTS `info`;
CREATE TABLE IF NOT EXISTS `info` (
  `idutilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_inscription` datetime DEFAULT NULL,
  PRIMARY KEY (`idutilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`idutilisateur`, `login`, `password`, `date_inscription`) VALUES
(17, 'biere', 'a25bc45c086b03369a763029165f989d7975eb08', NULL),
(3, 'mike', '406249b1206449c2dbe193e74ba5a69f3029ffbc', NULL),
(13, 'alex', '442bd7f6af3ccccb5e376cc0b91c659af64d225d', NULL),
(18, 'kanty', 'dcd7c6ef54d01e3e3a4cc96508ff0bca57a3b771', NULL),
(19, 'bebe', 'b6204a75b33ab44405d3c00d38a1fd3f67ac2706', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `navcouleur`
--

DROP TABLE IF EXISTS `navcouleur`;
CREATE TABLE IF NOT EXISTS `navcouleur` (
  `texte` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fond` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `idcnav` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idcnav`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sectionbody`
--

DROP TABLE IF EXISTS `sectionbody`;
CREATE TABLE IF NOT EXISTS `sectionbody` (
  `IDbody` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `titrephoto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `elemphoto1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `elemphoto2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `elemphoto3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `elemphoto4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `elemphoto5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`IDbody`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='la table du body pour un article';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
