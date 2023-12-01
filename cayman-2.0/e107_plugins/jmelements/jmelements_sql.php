CREATE TABLE `jmelement` (
  `element_id` int(10) NOT NULL AUTO_INCREMENT,
  `element_mode` varchar(255) NOT NULL,
  `element_setting` varchar(255) NOT NULL,
  `element_description` varchar(255) NOT NULL,
  `element_items` tinyint(3) unsigned NOT NULL default '0',
  `element_title` varchar(255) NOT NULL,
  `element_image` varchar(255) NOT NULL,
  `element_template` varchar(50) NOT NULL,
  `element_order` int(10) NOT NULL,
  `element_options` text NOT NULL,
  `element_active` int(1) NOT NULL default '1',
  PRIMARY KEY  (element_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;