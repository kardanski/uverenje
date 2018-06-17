-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 04, 2017 at 05:58 PM
-- Server version: 5.5.54-cll
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stiropor_proba`
--

-- --------------------------------------------------------

--
-- Table structure for table `e41`
--

CREATE TABLE `e41` (
  `id` int(11) NOT NULL,
  `ime` varchar(30) COLLATE utf8_bin NOT NULL,
  `prezime` varchar(30) COLLATE utf8_bin NOT NULL,
  `brmk` varchar(30) COLLATE utf8_bin NOT NULL,
  `imeroditelja` varchar(30) COLLATE utf8_bin NOT NULL,
  `datumrodjenja` varchar(30) COLLATE utf8_bin NOT NULL,
  `godinarodjenja` varchar(30) COLLATE utf8_bin NOT NULL,
  `mestorodjenja` varchar(30) COLLATE utf8_bin NOT NULL,
  `opstinarodjenja` varchar(30) COLLATE utf8_bin NOT NULL,
  `drzavarodjenja` varchar(30) COLLATE utf8_bin NOT NULL,
  `delovodnibridatdiplome` varchar(30) COLLATE utf8_bin NOT NULL,
  `uspeh1` float NOT NULL,
  `uspeh2` float NOT NULL,
  `uspeh3` float NOT NULL,
  `uspeh4` float NOT NULL,
  `ocenapredmet1drugirazred` varchar(30) COLLATE utf8_bin NOT NULL,
  `ocenapredmet1trecirazred` varchar(30) COLLATE utf8_bin NOT NULL,
  `ocenapredmet2drugirazred` varchar(30) COLLATE utf8_bin NOT NULL,
  `ocenapredmet2trecirazred` varchar(30) COLLATE utf8_bin NOT NULL,
  `ocenapredmet2cetvrtirazred` varchar(30) COLLATE utf8_bin NOT NULL,
  `zadatak1` varchar(30) COLLATE utf8_bin NOT NULL,
  `zadatak2` varchar(30) COLLATE utf8_bin NOT NULL,
  `zadatak3` varchar(30) COLLATE utf8_bin NOT NULL,
  `brojbodova1` int(11) NOT NULL,
  `brojbodova2` int(11) NOT NULL,
  `brojbodova3` int(11) NOT NULL,
  `brojbodovatest` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `e42`
--

CREATE TABLE `e42` (
  `id` int(11) NOT NULL,
  `ime` varchar(30) COLLATE utf8_bin NOT NULL,
  `prezime` varchar(30) COLLATE utf8_bin NOT NULL,
  `brmk` varchar(30) COLLATE utf8_bin NOT NULL,
  `imeroditelja` varchar(30) COLLATE utf8_bin NOT NULL,
  `datumrodjenja` varchar(30) COLLATE utf8_bin NOT NULL,
  `godinarodjenja` varchar(30) COLLATE utf8_bin NOT NULL,
  `mestorodjenja` varchar(30) COLLATE utf8_bin NOT NULL,
  `opstinarodjenja` varchar(30) COLLATE utf8_bin NOT NULL,
  `drzavarodjenja` varchar(30) COLLATE utf8_bin NOT NULL,
  `delovodnibridatdiplome` varchar(30) COLLATE utf8_bin NOT NULL,
  `uspeh1` float NOT NULL,
  `uspeh2` float NOT NULL,
  `uspeh3` float NOT NULL,
  `uspeh4` float NOT NULL,
  `ocenapredmet1drugirazred` varchar(30) COLLATE utf8_bin NOT NULL,
  `ocenapredmet1trecirazred` varchar(30) COLLATE utf8_bin NOT NULL,
  `ocenapredmet2drugirazred` varchar(30) COLLATE utf8_bin NOT NULL,
  `ocenapredmet2trecirazred` varchar(30) COLLATE utf8_bin NOT NULL,
  `ocenapredmet2cetvrtirazred` varchar(30) COLLATE utf8_bin NOT NULL,
  `zadatak1` varchar(30) COLLATE utf8_bin NOT NULL,
  `zadatak2` varchar(30) COLLATE utf8_bin NOT NULL,
  `zadatak3` varchar(30) COLLATE utf8_bin NOT NULL,
  `brojbodova1` int(11) NOT NULL,
  `brojbodova2` int(11) NOT NULL,
  `brojbodova3` int(11) NOT NULL,
  `brojbodovatest` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `e41`
--
ALTER TABLE `e41`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `e42`
--
ALTER TABLE `e42`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `e41`
--
ALTER TABLE `e41`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `e42`
--
ALTER TABLE `e42`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
