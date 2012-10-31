CREATE TABLE IF NOT EXISTS `#__timedlinklist_link` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`ordering` INT(11)  NOT NULL ,
`state` TINYINT(1)  NOT NULL DEFAULT '1',
`checked_out` INT(11)  NOT NULL ,
`checked_out_time` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
`id_type` INT(11)  NOT NULL ,
`title` VARCHAR(255)  NOT NULL ,
`url` VARCHAR(255)  NOT NULL ,
`date_created` DATETIME NOT NULL ,
`date_modified` DATETIME NOT NULL ,
`date_start_publishing` DATETIME NOT NULL ,
`date_finish_publishing` DATETIME NOT NULL ,
`article_id` INT(11),
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT COLLATE=utf8_general_ci;

CREATE TABLE IF NOT EXISTS `#__timedlinklist_type` (
`id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
`ordering` INT(11)  NOT NULL ,
`state` TINYINT(1)  NOT NULL DEFAULT '1',
`checked_out` INT(11)  NOT NULL ,
`checked_out_time` DATETIME NOT NULL DEFAULT '0000-00-00 00:00:00',
`title` VARCHAR(255)  NOT NULL ,
`description` VARCHAR(255)  NOT NULL ,
`date_added` DATETIME NOT NULL ,
`date_modified` DATETIME NOT NULL ,
PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT COLLATE=utf8_general_ci;

