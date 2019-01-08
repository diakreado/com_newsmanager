DROP TABLE IF EXISTS `#__newsmanager`;

CREATE TABLE IF NOT EXISTS `#__newsmanager` (
	`id` int(11) NOT NULL auto_increment,
	`title` VARCHAR(200) NOT NULL,
	`alias` VARCHAR(200) DEFAULT NULL,
	`text` TEXT NOT NULL,
	`published` INT(2) DEFAULT NULL,
	`media` VARCHAR(1024) NOT NULL DEFAULT '',
	`published_up` datetime  DEFAULT NULL,
	PRIMARY KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=0;