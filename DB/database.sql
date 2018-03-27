DROP DATABASE IF EXISTS `multi-admin`;
CREATE DATABASE `multi-admin`;
USE `multi-admin`;


CREATE TABLE IF NOT EXISTS `module` (
  `mod_modulegroupcode` varchar(25) NOT NULL,
  `mod_modulegroupname` varchar(50) NOT NULL,
  `mod_modulecode` varchar(25) NOT NULL,
  `mod_modulename` varchar(50) NOT NULL,
  `mod_modulegrouporder` int(3) NOT NULL,
  `mod_moduleorder` int(3) NOT NULL,
  `mod_modulepagename` varchar(255) NOT NULL,
  PRIMARY KEY (`mod_modulegroupcode`,`mod_modulecode`),
  UNIQUE(`mod_modulecode`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `role` (
  `role_rolecode` varchar(50) NOT NULL,
  `role_rolename` varchar(50) NOT NULL,
  PRIMARY KEY (`role_rolecode`)
) ENGINE=INNODB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `role_rights` (
  `rr_rolecode` varchar(50) NOT NULL,
  `rr_modulecode` varchar(25) NOT NULL,
  `rr_create` enum('yes','no')  NOT NULL DEFAULT 'no',
  `rr_edit` enum('yes','no') NOT NULL DEFAULT 'no',
  `rr_delete` enum('yes','no') NOT NULL DEFAULT 'no',
  `rr_view` enum('yes','no') NOT NULL DEFAULT 'no',
  PRIMARY KEY (`rr_rolecode`, `rr_modulecode`),
  FOREIGN KEY (`rr_rolecode`) REFERENCES `role` (`role_rolecode`)  ON UPDATE CASCADE ON DELETE RESTRICT,
  FOREIGN KEY (`rr_modulecode`) REFERENCES `module` (`mod_modulecode`)  ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=INNODB DEFAULT CHARSET=utf8;




CREATE TABLE IF NOT EXISTS `system_users` (
  `u_userid` int(11) AUTO_INCREMENT  NOT NULL,
  `u_username` varchar(100) NOT NULL,
  `u_password` varchar(255) NOT NULL,
  `u_rolecode` varchar(50) NOT NULL,
  PRIMARY KEY (`u_userid`),
  FOREIGN KEY (`u_rolecode`) REFERENCES `role` (`role_rolecode`)  ON UPDATE CASCADE ON DELETE RESTRICT
) ENGINE=INNODB DEFAULT CHARSET=utf8;


-- 

INSERT INTO `role` (`role_rolecode`, `role_rolename`) VALUES
('SUPERADMIN', 'Super Admin'),
('ADMIN', 'Administrator');

INSERT INTO `system_users` (`u_username`, `u_password`, `u_rolecode`) VALUES
('shahrukh', '123456', 'SUPERADMIN'),
('ronaldo', 'ronaldo', 'ADMIN');


INSERT INTO module (mod_modulegroupcode, mod_modulegroupname, mod_modulecode, mod_modulename, mod_modulegrouporder, mod_moduleorder, mod_modulepagename) VALUES 
("INVT","Inventory", "PURCHASES","Purchases", 2, 1,'purchases.php'),
("INVT","Inventory", "STOCKS","Stocks", 2, 2,'stocks.php'),
("INVT","Inventory", "SALES","Sales", 2, 3,'sales.php'),
("CHECKOUT","Checkout","SHIPPING","Shipping", 3, 1,'shipping.php'),
("CHECKOUT","Checkout","PAYMENT","Payment", 3, 2,'payment.php'),
("CHECKOUT","Checkout","TAX","Tax", 3, 3,'tax.php');


INSERT INTO `role_rights` (`rr_rolecode`, `rr_modulecode`, `rr_create`, `rr_edit`, `rr_delete`, `rr_view`) VALUES
('SUPERADMIN', 'PURCHASES', 'yes', 'yes', 'yes', 'yes'),
('SUPERADMIN', 'STOCKS', 'yes', 'yes', 'yes', 'yes'),
('SUPERADMIN', 'SALES', 'yes', 'yes', 'yes', 'yes'),
('SUPERADMIN', 'SHIPPING', 'yes', 'yes', 'yes', 'yes'),
('SUPERADMIN', 'PAYMENT', 'yes', 'yes', 'yes', 'yes'),
('SUPERADMIN', 'TAX', 'yes', 'yes', 'yes', 'yes'),

('ADMIN', 'PURCHASES', 'yes', 'yes', 'yes', 'yes'),
('ADMIN', 'STOCKS', 'no', 'no', 'no', 'yes'),
('ADMIN', 'SALES', 'no', 'no', 'no', 'no'),
('ADMIN', 'SHIPPING', 'yes', 'yes', 'yes', 'yes'),
('ADMIN', 'PAYMENT', 'no', 'no', 'no', 'yes'),
('ADMIN', 'TAX', 'no', 'no', 'no', 'no');


