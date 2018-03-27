-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 05, 2012 at 01:40 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bus_rev`
--

-- --------------------------------------------------------

--
-- Table structure for table `1bus`
--

CREATE TABLE IF NOT EXISTS `1bus` (
  `id` int(11) NOT NULL,
  `status` varchar(120) NOT NULL,
  `state` varchar(120) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1bus`
--

INSERT INTO `1bus` (`id`, `status`, `state`) VALUES
(1, 'Available', 'N'),
(2, 'Available', 'W');

-- --------------------------------------------------------

--
-- Table structure for table `2bus`
--

CREATE TABLE IF NOT EXISTS `2bus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(120) NOT NULL,
  `state` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `2bus`
--

INSERT INTO `2bus` (`id`, `status`, `state`) VALUES
(2, 'Available', 'N'),
(3, 'Available', 'W'),
(4, 'Available', 'N'),
(5, 'Available', 'N'),
(6, 'Available', 'W'),
(7, 'Available', 'W');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE IF NOT EXISTS `bus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bus_name` varchar(120) NOT NULL,
  `from_stop` varchar(120) NOT NULL,
  `to_stop` varchar(120) NOT NULL,
  `dept_time` time NOT NULL,
  `arrival_time` time NOT NULL,
  `distance` int(11) NOT NULL,
  `fare` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `bus_name`, `from_stop`, `to_stop`, `dept_time`, `arrival_time`, `distance`, `fare`) VALUES
(2, 'Jaipur Dippo', 'Jaipur', 'Delhi', '06:00:00', '12:00:00', 303, 204);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) NOT NULL,
  `gender` varchar(120) NOT NULL,
  `dob` date NOT NULL,
  `mobile` decimal(10,0) NOT NULL,
  `address` varchar(120) NOT NULL,
  `pin_code` int(11) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `reg_date` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `gender`, `dob`, `mobile`, `address`, `pin_code`, `email`, `password`, `reg_date`) VALUES
(1, 'Narpat', 'Male', '1991-01-01', '9829707528', 'Sanchore', 343041, 'bishnoi29@gmail.com', '123', '2012-07-06'),
(5, 'Raju', 'Male', '1993-07-03', '9636870640', 'Sanchore', 343041, 'raju@gmail.com', '12345', '2012-07-19'),
(3, 'NARPAT', 'Male', '1991-01-01', '9829707528', 'SANCHORE', 343041, 'bishnoinarpat5@gmail.com', '54321', '2012-07-19'),
(6, 'NARPAT BISHNOI', 'Male', '1991-01-01', '9829707528', 'JPR', 302013, 'bishnoi-narpat5@gmail.com', '12345', '2012-07-19'),
(12, '', '', '0000-00-00', '0', '', 0, 'nm', '', '2012-07-25'),
(11, '', '', '0000-00-00', '0', '', 0, '', '', '2012-07-25'),
(13, 'ravi', 'Male', '1989-08-14', '2637163721', '', 0, 'rav@gamil.com', 'ravin', '2012-07-27');

-- --------------------------------------------------------

--
-- Table structure for table `user_history`
--

CREATE TABLE IF NOT EXISTS `user_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `bus_name` varchar(120) NOT NULL,
  `from_stop` varchar(120) NOT NULL,
  `to_stop` varchar(120) NOT NULL,
  `journey_date` date NOT NULL,
  `booking_date` date NOT NULL,
  `seat_no_booked` int(11) NOT NULL,
  `dept_time` time NOT NULL,
  `distance` int(11) NOT NULL,
  `fare` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
