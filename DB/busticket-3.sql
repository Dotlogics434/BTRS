-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2015 at 09:22 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `busticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iso` char(2) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1000000 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `iso`, `name`) VALUES
(1, 'LH', 'Lahore'),
(2, 'Kc', 'Karachi'),
(3, 'Is', 'Islamabad'),
(4, 'fd', 'Faislabad'),
(5, 'pr', 'Peshawar'),
(999999, '', 'Other...');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE IF NOT EXISTS `reservations` (
  `userid` varchar(50) NOT NULL,
  `busid` varchar(50) NOT NULL,
  `ticketnumber` varchar(50) NOT NULL,
  `seatno` varchar(50) NOT NULL,
  `time` time(6) NOT NULL,
  `Status` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`userid`, `busid`, `ticketnumber`, `seatno`, `time`, `Status`) VALUES
('Shahid', 'bus123', 'bbgghh123444', '5', '00:00:00.000000', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(25) NOT NULL DEFAULT '',
  `pw` varchar(32) NOT NULL DEFAULT '',
  `real_name` varchar(32) NOT NULL DEFAULT '',
  `extra_info` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `tmp_mail` varchar(50) NOT NULL DEFAULT '',
  `access_level` tinyint(4) NOT NULL DEFAULT '0',
  `active` enum('y','n') NOT NULL DEFAULT 'n',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user` (`login`),
  UNIQUE KEY `mail` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `pw`, `real_name`, `extra_info`, `email`, `tmp_mail`, `access_level`, `active`) VALUES
(1, 'administrator', '40be4e59b9a2a2b5dffb918c0e86b3d7', 'The site administrator', '2015-08-07 20:48:27', 'my@mail.com', '', 10, 'y'),
(2, 'google', 'e10adc3949ba59abbe56e057f20f883e', 'Shahid', '2015-08-07 20:49:59', 'blueshift1234@gmail.com', '', 8, 'y'),
(3, 'Shahid', 'e10adc3949ba59abbe56e057f20f883e', 'Shahid', '2015-08-07 20:49:18', 'shahid@domain.com', '', 8, 'y'),
(4, 'AtifNazir', 'e10adc3949ba59abbe56e057f20f883e', 'Atif Nazir', '2015-08-05 20:09:26', 'google@gmail.com', '', 2, 'y'),
(5, 'groogle', 'e10adc3949ba59abbe56e057f20f883e', 'Muhammad Shahid', 'dfkjlajlajsldjlasjdlasjdljasl', 'blueshift123@gmail.com', '', 1, 'n');

-- --------------------------------------------------------

--
-- Table structure for table `users_profile`
--

CREATE TABLE IF NOT EXISTS `users_profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL DEFAULT '0',
  `language` char(2) NOT NULL DEFAULT '',
  `address` varchar(50) NOT NULL DEFAULT '',
  `postcode` varchar(15) NOT NULL DEFAULT '',
  `city` varchar(50) NOT NULL DEFAULT '',
  `country` char(2) NOT NULL DEFAULT '',
  `phone` varchar(50) NOT NULL DEFAULT '',
  `fax` varchar(50) NOT NULL DEFAULT '',
  `homepage` varchar(100) NOT NULL DEFAULT '',
  `notes` text NOT NULL,
  `user_1` varchar(100) NOT NULL DEFAULT '',
  `user_2` varchar(100) NOT NULL DEFAULT '',
  `user_3` varchar(100) NOT NULL DEFAULT '',
  `user_4` varchar(100) NOT NULL DEFAULT '',
  `last_change` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_id` (`users_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users_profile`
--

INSERT INTO `users_profile` (`id`, `users_id`, `language`, `address`, `postcode`, `city`, `country`, `phone`, `fax`, `homepage`, `notes`, `user_1`, `user_2`, `user_3`, `user_4`, `last_change`) VALUES
(1, 1, 'en', '', '', '', '', '', '', '', '', '', '', '', '', '2015-07-27 15:15:11'),
(2, 2, 'en', 'this that this ', '36000', 'ABC', 'AT', '123654885', '255555555', 'www.google.com', 'smlamldmalmla', 'aldmlasmdlma', '', '', '', '2015-07-27 16:11:23');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
