-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2015 at 04:24 PM
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
(1, 'AR', 'Argentina'),
(2, 'AU', 'Australia'),
(3, 'AT', 'Austria'),
(4, 'BS', 'Bahamas'),
(5, 'BE', 'Belgium'),
(6, 'BO', 'Bolivia'),
(7, 'BR', 'Brazil'),
(8, 'CA', 'Canada'),
(9, 'CL', 'Chile'),
(10, 'CN', 'China'),
(11, 'CO', 'Colombia'),
(12, 'CR', 'Costa Rica'),
(13, 'HR', 'Croatia'),
(14, 'CU', 'Cuba'),
(15, 'CZ', 'Czech, Rep.'),
(16, 'DK', 'Denmark'),
(17, 'DO', 'Dominican, Rep.'),
(18, 'EC', 'Ecuador'),
(19, 'EG', 'Egypt'),
(20, 'SV', 'El Salvador'),
(21, 'FI', 'Finland'),
(22, 'FR', 'France'),
(23, 'DE', 'Germany'),
(24, 'GB', 'Great Britain'),
(25, 'GR', 'Greece'),
(26, 'GT', 'Guatemala'),
(27, 'HN', 'Honduras'),
(28, 'HK', 'Hong Kong'),
(29, 'IN', 'India'),
(30, 'IE', 'Ireland'),
(31, 'IL', 'Israel'),
(32, 'IT', 'Italy'),
(33, 'JM', 'Jamaica'),
(34, 'JP', 'Japan'),
(35, 'LU', 'Luxembourg'),
(36, 'MX', 'Mexico'),
(37, 'MA', 'Morocco'),
(38, 'NL', 'Netherlands'),
(39, 'NZ', 'New Zealand'),
(40, 'NI', 'Nicaragua'),
(41, 'NG', 'Nigeria'),
(42, 'NO', 'Norway'),
(43, 'PY', 'Paraguay'),
(44, 'PE', 'Peru'),
(45, 'PL', 'Poland'),
(46, 'PT', 'Portugal'),
(47, 'PR', 'Puerto Rico'),
(48, 'RU', 'Russia'),
(49, 'SA', 'Saudi Arabia'),
(50, 'ZA', 'South Africa'),
(51, 'ES', 'Spain'),
(52, 'SE', 'Sweden'),
(53, 'CH', 'Switzerland'),
(54, 'TW', 'Taiwan'),
(55, 'TR', 'Turkey'),
(56, 'US', 'United States'),
(57, 'UY', 'Uruguay'),
(58, 'VE', 'Venezuela'),
(999999, '', 'Other...');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE IF NOT EXISTS `reservations` (
  `userid` varchar(50) NOT NULL,
  `busid` varchar(50) NOT NULL,
  `ticketnumber` varchar(50) NOT NULL,
  `seatno` int(50) NOT NULL,
  `time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `pw`, `real_name`, `extra_info`, `email`, `tmp_mail`, `access_level`, `active`) VALUES
(1, 'administrator', '40be4e59b9a2a2b5dffb918c0e86b3d7', 'The site administrator', '2015-08-04 11:37:54', 'my@mail.com', '', 10, 'y'),
(2, 'google', 'c822c1b63853ed273b89687ac505f9fa', 'Shahid', '2015-08-04 09:02:44', 'blueshift1234@gmail.com', '', 2, 'y'),
(3, 'Shahid', 'e10adc3949ba59abbe56e057f20f883e', 'Shahid', 'aosdoad', 'shahid@domain.com', '', 1, 'n');

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
