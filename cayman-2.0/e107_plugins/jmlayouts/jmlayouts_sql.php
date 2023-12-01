CREATE TABLE `jmlayout` (
  `layout_id` int(10) NOT NULL AUTO_INCREMENT,
  `layout_mode` varchar(255) NOT NULL,
  `layout_setting` varchar(255) NOT NULL,
  `layout_title` varchar(255) NOT NULL,
  `layout_order` int(10) NOT NULL,
  `layout_options` text NOT NULL,
  `layout_header`  varchar(250) NOT NULL,
  `layout_footer`  varchar(255) NOT NULL,   
  PRIMARY KEY  (layout_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;