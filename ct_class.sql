-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 01, 2015 at 10:50 AM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ct_class`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name`, `email`, `password`) VALUES
(1, 'Rajesh', 'rajesh@coderstrust.com', '11234'),
(2, 'Test', 'test@gmail.com', '1234'),
(3, 'Rajesh', 'rajesh@gmail.com', '1234'),
(4, 'Rajesh', 'rajesh@yahoo.com', '1234'),
(5, 'aminul', 'aminul@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `cell` varchar(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `active` varchar(3) NOT NULL,
  `DateOfBirth` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `Name`, `age`, `cell`, `status`, `active`, `DateOfBirth`) VALUES
(1, 'A', 30, '0171', 'P', 'Y', NULL),
(2, 'B', 62, '0161', 'G', 'N', NULL),
(3, 'C', 27, '0191', 'S', 'Y', NULL),
(4, 'E', 29, '0181', 'P', 'N', NULL),
(5, 'K', 41, '0151', 'S', 'Y', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `age` varchar(3) NOT NULL,
  `address` varchar(50) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `salary` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `age`, `address`, `designation`, `salary`, `email`, `password`) VALUES
(1, 'sarowar', '22', 'Govt. TTC', 'programer', 20000, 'asarowar10@gmail.com', '017453938034'),
(2, 'rubel', '24', 'gazipur', 'enginear', 22000, 'rubedk@gmail.com', '5645645'),
(3, 'rofiq', '26', 'dhaka', 'doctor', 24000, 'rafiq@gmail.com', '12345'),
(4, 'rana', '26', 'kaligong', 'farmer', 26000, 'rana@gmail.com', '123456'),
(5, 'Rajesh', '26', 'Dhaka dhaka', 'Mentor', 2500, 'admin@gmail.com', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
