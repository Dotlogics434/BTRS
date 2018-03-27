CREATE TABLE IF NOT EXISTS `users` (
  `userId` int(8) NOT NULL AUTO_INCREMENT,
  `userName` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `firstName` varchar(55) NOT NULL,
  `lastName` varchar(55) NOT NULL,
  PRIMARY KEY (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `password`, `firstName`, `lastName`) VALUES
(24, 'joeltom', 'joe123', 'Joel', 'Thomas'),
(26, 'merlinsofia', 'sofia123', 'merlin', 'sofia'),
(27, 'Matt', 'matt123', 'Matthew Benedict', 'Matthew Benedict'),
(28, 'Mike', 'mike123', 'mike', 'anto');