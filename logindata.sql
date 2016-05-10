-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 26, 2013 at 08:00 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `logindata`
--
CREATE DATABASE IF NOT EXISTS `logindata` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `logindata`;

-- --------------------------------------------------------

--
-- Table structure for table `usrdata`
--

CREATE TABLE IF NOT EXISTS `usrdata` (
  `userName` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  UNIQUE KEY `password` (`password`),
  KEY `userName` (`userName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usrdata`
--

INSERT INTO `usrdata` (`userName`, `password`) VALUES
('bob', '234'),
('homer', '12345'),
('john', 'foo'),
('rusty', 'moot'),
('user', 'password');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
