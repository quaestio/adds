
DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int(5) NOT NULL AUTO_INCREMENT,
  `reg_type` varchar(1) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `address_line_1` varchar(200) DEFAULT NULL,
  `address_line_2` varchar(200) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `zip` varchar(10) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `image_id` varchar(50) NOT NULL,
  `restricted` varchar(1) NOT NULL DEFAULT 'N',
  `lastlogin` date DEFAULT NULL,
  `lastupdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `identity_verified` varchar(1) NOT NULL,
  `identity_document` varchar(50) NOT NULL,
  `identity_message` varchar(500) NOT NULL,
  `identity_uploaded` varchar(1) NOT NULL DEFAULT 'N',
  `date_register` date NOT NULL,
  `mobile_otp` varchar(10) NOT NULL,
  `email_otp` varchar(10) NOT NULL,
  `email_verified` varchar(1) NOT NULL DEFAULT 'N',
  `mobile_verified` varchar(1) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`customer_id`),
  KEY `customer_id` (`customer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

ALTER TABLE `add_manager` ADD `org_name` VARCHAR( 200 ) NULL AFTER `customer_id` ;
ALTER TABLE `category` CHANGE `article_id` `page_title` VARCHAR( 200 ) NOT NULL ;

ALTER TABLE `category` ADD `seo_url` VARCHAR( 100 ) NOT NULL AFTER `page_title` ,ADD `key_word` VARCHAR( 200 ) NOT NULL AFTER `seo_url` ,ADD `page_description` VARCHAR( 500 ) NOT NULL AFTER `key_word`;
ALTER TABLE `add_manager` ADD `address_line_1` VARCHAR( 200 ) NOT NULL AFTER `add_title` ;
//===============================
ALTER TABLE `add_manager` CHANGE `add_description` `add_description` VARCHAR( 500 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,
CHANGE `add_title` `add_title` VARCHAR( 1000 ) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ;
ALTER TABLE `add_manager` ADD `contacts` VARCHAR( 200 ) NOT NULL AFTER `pin_code` ;
ALTER TABLE `add_manager` ADD `email` VARCHAR( 100 ) NOT NULL AFTER `contacts` ;
ALTER TABLE `add_manager` ADD `hits` INT( 11 ) NOT NULL DEFAULT '0';
