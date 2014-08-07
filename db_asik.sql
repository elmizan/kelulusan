-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2014 at 05:31 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hubungi`
--

CREATE TABLE IF NOT EXISTS `tbl_hubungi` (
  `id_hubungi` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `pesan` text NOT NULL,
  PRIMARY KEY (`id_hubungi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_hubungi`
--

INSERT INTO `tbl_hubungi` (`id_hubungi`, `nama`, `email`, `pesan`) VALUES
(3, 'adi kiswanto', 'adikiswanto@gmail.com', 'halo halo'),
(15, 'paijo', 'mtsaddarain@gmail.com', 'halo halo bandung');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `pass`, `nama`) VALUES
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'adi kiswanto'),
(10, 'paijo', '44529fdc8afb86d58c6c02cd00c02e43', 'paijo cool');

-- --------------------------------------------------------

--
-- Table structure for table `tb_student`
--

CREATE TABLE IF NOT EXISTS `tb_student` (
  `no` varchar(200) NOT NULL,
  `noujian` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `tgllhr` varchar(200) NOT NULL,
  `addresse` varchar(200) NOT NULL,
  `sekolah` varchar(200) NOT NULL,
  `indo` varchar(200) NOT NULL,
  `mat` varchar(200) NOT NULL,
  `inggris` varchar(200) NOT NULL,
  `ipa` varchar(200) NOT NULL,
  `nsindo` varchar(200) NOT NULL,
  `nsinggris` varchar(200) NOT NULL,
  `nsmat` varchar(200) NOT NULL,
  `nsipa` varchar(200) NOT NULL,
  `naindo` varchar(200) NOT NULL,
  `nainggris` varchar(200) NOT NULL,
  `namat` varchar(200) NOT NULL,
  `naipa` varchar(200) NOT NULL,
  `rataun` varchar(200) NOT NULL,
  `ratans` varchar(200) NOT NULL,
  `ratana` varchar(200) NOT NULL,
  `ket` varchar(200) NOT NULL,
  `ketgambar` varchar(200) NOT NULL,
  PRIMARY KEY (`no`),
  KEY `no` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_student`
--

INSERT INTO `tb_student` (`no`, `noujian`, `name`, `tgllhr`, `addresse`, `sekolah`, `indo`, `mat`, `inggris`, `ipa`, `nsindo`, `nsinggris`, `nsmat`, `nsipa`, `naindo`, `nainggris`, `namat`, `naipa`, `rataun`, `ratans`, `ratana`, `ket`, `ketgambar`) VALUES
('1', '27-807-001-8', 'Adi Kiswanto', '16 Oktober 1998', 'demak', 'MTs Addarain', '70', '80', '78', '79', '80', '81', '67', '66', '55', '67', '55', '75', '76.75', '73.5', '63', 'lulus', 'lulus'),
('2', '27-807-002-7', 'Ada', '17 October 1998', 'demak', 'smp 2', '80', '78', '80', '76', '70', '89', '78', '77', '66', '88', '66', '76', '78.5', '78.5', '74', 'lulus', 'lulus'),
('3', '27-807-003-6', 'Adu', '18 October 1998', 'demak', 'smp 3', '67', '56', '56', '56', '70', '57', '79', '88', '55', '77', '77', '65', '58.75', '73.5', '68.5', 'lulus', 'lulus'),
('4', '27-807-004-5', 'Ida', '19 October 1998', 'demak', 'smp 4', '56', '45', '45', '45', '80', '76', '67', '77', '77', '66', '66', '55', '47.75', '75', '66', 'tidak lulus', 'tidaklulus'),
('5', '27-807-005-4', 'Ani', '20 October 1998', 'demak', 'smp 5', '56', '65', '65', '65', '70', '75', '70', '66', '88', '77', '55', '65', '62.75', '70.25', '71.25', 'tidak lulus', 'tidaklulus');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
