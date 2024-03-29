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
  `product_image` varchar(180) NULL default '',
  `product_name` varchar(180) NOT NULL default '', 
  `product_type` varchar(180) NOT NULL default '', 
  `product_price` int(180) NOT NULL, 
  PRIMARY KEY  (`product_id`) 
);

DROP TABLE IF EXISTS `tbl_inventory`;
CREATE TABLE `tbl_inventory` (
  `product_id` int(180) unsigned NOT NULL auto_increment, 
  `product_qty` varchar(180) NOT NULL, 
  `batch_date` date NOT NULL default '0000-00-00',
  PRIMARY KEY  (`product_id`) 
);

DROP TABLE IF EXISTS `tbl_receive`;
CREATE TABLE `tbl_receive` (
  `rec_id` int(8) unsigned NOT NULL auto_increment, 
  `rec_supplier` varchar(180) NOT NULL default '',
  `rec_description` varchar(180) NOT NULL default '',
  `rec_amount` int(10) NOT NULL default '0',
  `rec_date_added` date NOT NULL default '0000-00-00',
  `rec_time_added` time NOT NULL default '00:00:00',
  `rec_saved` int(1) NOT NULL default '0',	
  `rec_status` int(1) NOT NULL default '0',
  PRIMARY KEY  (`rec_id`)
);

DROP TABLE IF EXISTS `tbl_receive_items`;
CREATE TABLE `tbl_receive_items` (
  `rec_id` int(8) NOT NULL default '0',
  `product_id` int(8) NOT NULL default '0',
  `rec_qty` int(8) NOT NULL default '0',
  KEY  (`rec_id`),
  KEY  (`product_id`)
);

DROP TABLE IF EXISTS `tbl_orders`;
CREATE TABLE `tbl_orders` (
  `order_id` int(8) unsigned NOT NULL auto_increment, 
  `order_amt` varchar(180) NOT NULL default '',
  `order_date_added` date NOT NULL default '0000-00-00',
  `order_time_added` time NOT NULL default '00:00:00',
  `order_saved` int(1) NOT NULL default '0',	
  `order_status` int(1) NOT NULL default '0',
  KEY (`order_id`)
);

DROP TABLE IF EXISTS `tbl_order_items`;
CREATE TABLE `tbl_order_items` (
  `order_id` int(8) unsigned NOT NULL, 
  `product_id` int(8) unsigned NOT NULL, 
  `order_qty` varchar(180) NOT NULL default '',
  `order_amt` varchar(180) NOT NULL default '',
  KEY (`order_id`),
  KEY (`product_id`)
);

DROP TABLE IF EXISTS `tbl_sales`;
CREATE TABLE `tbl_sales` (
  `sales_id` int(8) unsigned NOT NULL auto_increment, 
  `order_id` int(8) NOT NULL, 
  `order_date` date NOT NULL default '0000-00-00',
  `sales_amt` int(8) NOT NULL default '0',
  `sales_qty` int(8) NOT NULL default '0',
  KEY (`sales_id`),
  KEY (`order_id`)
);

DROP TABLE IF EXISTS `tbl_release_inv`;
CREATE TABLE `tbl_release_inv` (
  `rel_id` int(8) NOT NULL default '0',
  `product_id` int(8) NOT NULL default '0',
  `product_qty` int(8) NOT NULL default '0',
  KEY  (`product_id`),
  KEY (`rel_id`)
);

/*
DROP TABLE IF EXISTS `tbl_release`;
CREATE TABLE `tbl_release` (
  `rel_id` int(8) unsigned NOT NULL auto_increment, 
  `rel_customer` varchar(180) NOT NULL default '',
  `rel_description` varchar(180) NOT NULL default '',
  `rel_amount` int(10) NOT NULL default '0',
  `rel_date_added` date NOT NULL default '0000-00-00',
  `rel_time_added` time NOT NULL default '00:00:00',
  `rel_saved` int(1) NOT NULL default '0',	
  `rel_status` int(1) NOT NULL default '0',
  PRIMARY KEY  (`rel_id`)
);
*/

/*
DROP TABLE IF EXISTS `tbl_release_items`;
CREATE TABLE `tbl_release_items` (
  `rel_id` int(8) NOT NULL default '0',
  `product_id` int(8) NOT NULL default '0',
  `rel_qty` int(8) NOT NULL default '0',
  KEY  (`rel_id`),
  KEY  (`product_id`)
);
*/