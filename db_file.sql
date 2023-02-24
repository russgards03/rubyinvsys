CREATE DATABASE IF NOT EXISTS db_wbapp;
USE db_wbapp;
DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE `tbl_users` (
  `user_id` int(8) unsigned NOT NULL auto_increment, 
  `user_lastname` varchar(180) NOT NULL default '',
  `user_firstname` varchar(180) NOT NULL default '',
  `user_email` varchar(180) NOT NULL default '',
  `user_password` varchar(180) NOT NULL default '',
  `user_date_added` date NOT NULL default '0000-00-00',
  `user_time_added` time NOT NULL default '00:00:00',	
  `user_date_updated` date NOT NULL default '0000-00-00',
  `user_time_updated` time NOT NULL default '00:00:00',
  `user_status` int(1) NOT NULL default '0',
  `user_access` varchar(180) NOT NULL default '',
  PRIMARY KEY  (`user_id`)
);

DROP TABLE IF EXISTS `tbl_products`;
CREATE TABLE `tbl_products` (
  `product_id` int(180) unsigned NOT NULL auto_increment, 
  `product_name` varchar(180) NOT NULL default '', 
  `product_price`varchar(180) NOT NULL default '', 
  PRIMARY KEY  (`product_id`) 
);

DROP TABLE IF EXISTS `tbl_inventory`;
CREATE TABLE `tbl_inventory` (
  `product_id` int(180) unsigned NOT NULL auto_increment, 
  `product_qty` varchar(180) NOT NULL, 
  `batch_date` date NOT NULL default '0000-00-00',
  PRIMARY KEY  (`product_id`) 
);

DROP TABLE IF EXISTS `tbl_orders`;
CREATE TABLE `tbl_orders` (
  `order_id` int(8) unsigned NOT NULL auto_increment, 
  `order_date` date NOT NULL default '0000-00-00',
  `total_orderamt` varchar(180) NOT NULL default '',
  `total_orderqty` varchar(180) NOT NULL default '',
  KEY (`order_id`)
);

DROP TABLE IF EXISTS `tbl_orderitems`;
CREATE TABLE `tbl_orderitems` (
  `order_id` int(8) unsigned NOT NULL, 
  `product_id` int(8) unsigned NOT NULL, 
  `order_date` date NOT NULL default '0000-00-00',
  `order_qty` varchar(180) NOT NULL default '',
  `order_price` varchar(180) NOT NULL default '',
  KEY (`order_id`),
  KEY (`product_id`)
);

DROP TABLE IF EXISTS `tbl_sales`;
CREATE TABLE `tbl_sales` (
  `sales_id` int(8) unsigned NOT NULL auto_increment, 
  `order_id` int(8) NOT NULL, 
  `order_date` date NOT NULL default '0000-00-00',
  `sales_amt` varchar(180) NOT NULL default '',
  `sales_qty` varchar(180) NOT NULL default '',
  PRIMARY KEY (`sales_id`),
  KEY (`order_id`)
);