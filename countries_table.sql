CREATE TABLE `Cities` (
  `id` int(11) NOT NULL auto_increment,
  `iso` char(2) NOT NULL default '',
  `name` varchar(100) NOT NULL default '',
  PRIMARY KEY  (`id`)
) Engine= InnoDB;

INSERT INTO `Cities` VALUES (NULL, 'LHR', 'Lahore');
INSERT INTO `Cities` VALUES (NULL, 'Kchi', 'Karachi');
INSERT INTO `Cities` VALUES (NULL, 'FSD', 'Faislabad');
INSERT INTO `Cities` VALUES (NULL, 'PSH', 'Peshawar');
INSERT INTO `Cities` VALUES (NULL, 'Qut', 'Quetta');
INSERT INTO `Cities` VALUES (NULL, 'Abbt', 'Abbotabad');
INSERT INTO `cities` VALUES (NULL, 'ISLD', 'Islamabad');
INSERT INTO `cities` VALUES (NULL, 'RWLPND', 'Rawalpindi');
INSERT INTO `cities` VALUES (NULL, 'SHKHPU', 'Shekhupura');
INSERT INTO `cities` VALUES (NULL, 'Haider', 'Haidrabad');
INSERT INTO `cities` VALUES (NULL, 'ChMN', 'Chaman');
INSERT INTO `cities` VALUES (NULL, 'SIBI', 'Sibi');
INSERT INTO `cities` VALUES (NULL, 'SWAT', 'Swat');
INSERT INTO `cities` VALUES (NULL, 'JHANG', 'Jhang');

INSERT INTO `cities` VALUES (999999, '', 'Other...');

