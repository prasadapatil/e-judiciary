-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Feb 10, 2021 at 07:27 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `judiciary`
--

-- --------------------------------------------------------

--
-- Table structure for table `fir`
--

DROP TABLE IF EXISTS `fir`;
CREATE TABLE IF NOT EXISTS `fir` (
  `fno` int(11) NOT NULL,
  `fsdpo` varchar(30) NOT NULL,
  `fcourt` varchar(20) NOT NULL,
  `fstation` varchar(20) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `fmob` varchar(10) NOT NULL,
  `fpalce` varchar(50) NOT NULL,
  `fdist` varchar(10) NOT NULL,
  `ftime` time NOT NULL,
  `fdate` date NOT NULL,
  `fcrime` varchar(30) NOT NULL,
  `fsection` int(50) NOT NULL,
  `fdesc` varchar(500) DEFAULT NULL,
  `frespondent` varchar(100) DEFAULT NULL,
  `puname` varchar(20) NOT NULL,
  `frtime` time(6) NOT NULL,
  PRIMARY KEY (`fno`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fir`
--

INSERT INTO `fir` (`fno`, `fsdpo`, `fcourt`, `fstation`, `fname`, `fmob`, `fpalce`, `fdist`, `ftime`, `fdate`, `fcrime`, `fsection`, `fdesc`, `frespondent`, `puname`, `frtime`) VALUES
(11, 'MALEGON RURAL', 'MALEGON TALUKA', 'MALEGON TALUKA', 'PRASAD PATIL', '9420693397', 'satana', '1km', '12:59:00', '2020-12-31', 'HALF MURDER', 307, 'THE ACCUSED IS ATTKED BY THE SHARPE WEAPON ON TODAYS MORNING BY SOME PEOPLES OF NATIVE TOWN', 'KUNAL KHAIRNAR', 'bhavna123', '05:46:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `missing`
--

DROP TABLE IF EXISTS `missing`;
CREATE TABLE IF NOT EXISTS `missing` (
  `mp` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `mage` varchar(5) NOT NULL,
  `mcolor` varchar(10) NOT NULL,
  `mheight` varchar(5) NOT NULL,
  `mbgrp` varchar(5) NOT NULL,
  `mllocation` varchar(50) NOT NULL,
  `maddrs` varchar(50) NOT NULL,
  `mcon` varchar(20) NOT NULL,
  UNIQUE KEY `mcon` (`mcon`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `missing`
--

INSERT INTO `missing` (`mp`, `mname`, `mage`, `mcolor`, `mheight`, `mbgrp`, `mllocation`, `maddrs`, `mcon`) VALUES
('yograj.jpg', 'YOGRAJ DEVIDAS SHIRSATH', '10', 'FAIR', '5.7', 'o+', 'SATANA', 'SATANA', '9420693397'),
('yogesh.jpg', '', '22', 'black', '5.2', 'AB+', 'SATANA', 'AT.PO.VATAR', '9455288556');

-- --------------------------------------------------------

--
-- Table structure for table `police`
--

DROP TABLE IF EXISTS `police`;
CREATE TABLE IF NOT EXISTS `police` (
  `pid` int(10) NOT NULL,
  `puid` varchar(13) NOT NULL,
  `pfname` varchar(20) NOT NULL,
  `pmname` varchar(20) NOT NULL,
  `plname` varchar(20) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `paddress` varchar(100) NOT NULL,
  `pstation` varchar(20) NOT NULL,
  `sdpo` varchar(20) NOT NULL,
  `pdistrict` varchar(20) NOT NULL,
  `pstate` varchar(20) NOT NULL,
  `pdesig` varchar(20) NOT NULL,
  `pmob` varchar(11) NOT NULL,
  `pemail` varchar(25) NOT NULL,
  `pimg` varchar(50) NOT NULL,
  `puname` varchar(15) NOT NULL,
  `ppass` varchar(20) NOT NULL,
  PRIMARY KEY (`pid`),
  UNIQUE KEY `pemail` (`pemail`),
  UNIQUE KEY `pmob` (`pmob`),
  UNIQUE KEY `puid` (`puid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police`
--

INSERT INTO `police` (`pid`, `puid`, `pfname`, `pmname`, `plname`, `gender`, `paddress`, `pstation`, `sdpo`, `pdistrict`, `pstate`, `pdesig`, `pmob`, `pemail`, `pimg`, `puname`, `ppass`) VALUES
(411, '35246845210', 'SANDESH', 'ATMARAM', 'SHINDE', 'm', 'at.po.satana', 'SATANA', 'MALEGON RURAL', 'NASHIK', 'MAHARASHTRA', 'CONSTABLE', '9420693397', 'sandeshashinde@gmail.com', 'constable1.jpg', 'sandesh123', 'ROOT'),
(412, '35204326', 'bhavna', 'tukaram', 'patil', 'f', 'at.po.deola', 'SATANA', 'MALEGON RURAL', 'NASHIK', 'MAHARASHTRA', 'INSPECTOR', '9420693398', 'bhavanpatil@gmail.com', 'ladies.jpg', 'bhavna123', 'ROOT');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(40) NOT NULL,
  `gender` char(1) NOT NULL,
  `address` varchar(50) NOT NULL,
  `state` varchar(20) NOT NULL,
  `dist` varchar(20) NOT NULL,
  `mob` varchar(12) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `gender`, `address`, `state`, `dist`, `mob`, `uname`, `pass`) VALUES
('KUNAL KHAIRNAR', 'm', '60ft Road satana', 'MAHARASHTRA', 'NASHIK', '7028459574', 'kunal', 'ROOT');

-- --------------------------------------------------------

--
-- Table structure for table `usercomplain`
--

DROP TABLE IF EXISTS `usercomplain`;
CREATE TABLE IF NOT EXISTS `usercomplain` (
  `capp` varchar(50) NOT NULL,
  `cresp` varchar(50) NOT NULL,
  `cdesc` varchar(500) NOT NULL,
  `caddrs` varchar(100) NOT NULL,
  `cpstation` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usernoc`
--

DROP TABLE IF EXISTS `usernoc`;
CREATE TABLE IF NOT EXISTS `usernoc` (
  `nocapp` varchar(30) DEFAULT NULL,
  `nocuid` varchar(20) NOT NULL,
  `nocpur` varchar(15) NOT NULL,
  `nocaddrs` varchar(50) NOT NULL,
  `nocstation` varchar(20) NOT NULL,
  UNIQUE KEY `nocapp` (`nocapp`),
  KEY `nocid_2` (`nocstation`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usernoc`
--

INSERT INTO `usernoc` (`nocapp`, `nocuid`, `nocpur`, `nocaddrs`, `nocstation`) VALUES
('Sanket Ahire', '169925718565', 'PASSPORT', 'AT.PO. NASHIK', 'satpur P.O.'),
('AMIT SHAH', '1236458796521', 'GOVT. JOB', 'MUMBAI ', 'ANDHERi EAST');

-- --------------------------------------------------------

--
-- Table structure for table `vehical`
--

DROP TABLE IF EXISTS `vehical`;
CREATE TABLE IF NOT EXISTS `vehical` (
  `oname` varchar(40) NOT NULL,
  `vmodel` varchar(20) NOT NULL,
  `vnum` varchar(10) NOT NULL,
  `vcnum` varchar(20) NOT NULL,
  `vstation` varchar(20) NOT NULL,
  UNIQUE KEY `vnum` (`vnum`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehical`
--

INSERT INTO `vehical` (`oname`, `vmodel`, `vnum`, `vcnum`, `vstation`) VALUES
('PRASAD PATIL', 'TATA TICSON', 'MH41PP3233', 'GNFMDS2142', 'satana'),
('PRASAD PATIL', 'TATA NANO', 'MH21PS1222', 'DNACA4521', 'SATANA'),
('KUNAL KHAIRNAR', 'HERO SPLENDER', 'MH41KK3588', 'HFSGA2212', 'DEOLA');

-- --------------------------------------------------------

--
-- Table structure for table `warrent`
--

DROP TABLE IF EXISTS `warrent`;
CREATE TABLE IF NOT EXISTS `warrent` (
  `fid` int(20) NOT NULL,
  `wsdpo` varchar(30) NOT NULL,
  `wstation` varchar(20) NOT NULL,
  `wcourt` varchar(20) NOT NULL,
  `accusedname` varchar(20) NOT NULL,
  `puname` varchar(20) NOT NULL,
  `wtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`fid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warrent`
--

INSERT INTO `warrent` (`fid`, `wsdpo`, `wstation`, `wcourt`, `accusedname`, `puname`, `wtime`) VALUES
(11, 'MALEGON RURAL', 'SATANA', 'SATANA', 'KUNAL KHAIRNAR', '', '2020-02-07 18:30:00'),
(12, 'NASHIK RURAL', 'MALEGON TALUKA', 'MALEGON TALUKA', 'SANKET AHIRE', '', '2020-02-07 18:30:00'),
(22, 'NASHIK RURAL', 'MALEGON TALUKA', 'MALEGON TALUKA', 'PRASAD', '', '2020-03-15 18:30:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
