

CREATE TABLE `attributes` (
  `attributes_id` int(11) NOT NULL AUTO_INCREMENT,
  `attributes_name` varchar(100) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`attributes_id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;


INSERT INTO attributes VALUES
("1","S","1","0","2022-08-03 09:03:09","0000-00-00 00:00:00","1"),
("2","M","1","0","2022-08-03 09:04:51","0000-00-00 00:00:00","1"),
("3","L","1","0","2022-08-03 09:04:57","0000-00-00 00:00:00","1"),
("4","XL","1","0","2022-08-03 09:05:02","0000-00-00 00:00:00","1"),
("5","XXL","1","1","2022-08-03 00:05:46","2022-08-03 09:05:46","1"),
("6","RED","1","0","2022-08-03 09:12:42","0000-00-00 00:00:00","1"),
("7","YELLOW","1","0","2022-08-03 09:12:50","0000-00-00 00:00:00","1"),
("8","PINK","1","0","2022-08-03 09:12:55","0000-00-00 00:00:00","1"),
("9","BLUE","1","0","2022-08-03 09:13:01","0000-00-00 00:00:00","1"),
("10","BLACK","1","0","2022-08-03 09:13:10","0000-00-00 00:00:00","1"),
("11","WHITE","1","0","2022-08-03 09:13:16","0000-00-00 00:00:00","1"),
("12","OARNAGE","1","0","2022-08-03 09:13:29","0000-00-00 00:00:00","1"),
("13","BROWN","1","0","2022-08-03 09:13:48","0000-00-00 00:00:00","1"),
("14","COTTON","1","0","2022-08-03 09:16:05","0000-00-00 00:00:00","1"),
("15","POLYESTER","1","0","2022-08-03 09:16:24","0000-00-00 00:00:00","1"),
("16","SILK","1","0","2022-08-03 09:16:35","0000-00-00 00:00:00","1"),
("17","BAMBOO","1","0","2022-08-03 09:16:46","0000-00-00 00:00:00","1"),
("18","HEMP","1","0","2022-08-03 09:16:55","0000-00-00 00:00:00","1"),
("19","WOOL","1","0","2022-08-03 09:17:02","0000-00-00 00:00:00","1"),
("20","LINEN","1","0","2022-08-03 09:17:10","0000-00-00 00:00:00","1"),
("21","KHADI","1","0","2022-08-03 09:17:50","0000-00-00 00:00:00","1"),
("22","DENIM","1","0","2022-08-03 09:18:02","0000-00-00 00:00:00","1"),
("23","SATIN","1","0","2022-08-03 09:18:19","0000-00-00 00:00:00","1"),
("24","ORGANZA","1","0","2022-08-03 09:18:43","0000-00-00 00:00:00","1"),
("25","CREPE","1","0","2022-08-03 09:18:57","0000-00-00 00:00:00","1"),
("26","GEORGETTE","1","0","2022-08-03 09:19:19","0000-00-00 00:00:00","1"),
("27","CANVAS","1","0","2022-08-03 09:19:31","0000-00-00 00:00:00","1"),
("28","CHIFFON","1","0","2022-08-03 09:20:25","0000-00-00 00:00:00","1"),
("29","JERSEY","1","0","2022-08-03 09:21:06","0000-00-00 00:00:00","1"),
("30","POLY-COTTON BLEND","1","0","2022-08-03 09:21:45","0000-00-00 00:00:00","1"),
("31","LYCRA","1","0","2022-08-03 09:22:12","0000-00-00 00:00:00","1"),
("32","TWILL","1","0","2022-08-03 09:23:25","0000-00-00 00:00:00","1"),
("33","HALF SLEEVE","1","0","2022-08-03 09:26:22","0000-00-00 00:00:00","1"),
("34","LONG SLEEVE","1","0","2022-08-03 09:26:33","0000-00-00 00:00:00","1"),
("35","POLO COLLAR","1","0","2022-08-03 09:26:41","0000-00-00 00:00:00","1"),
("36","V-NECK","1","0","2022-08-03 09:26:49","0000-00-00 00:00:00","1"),
("37","WIDE NECK","1","0","2022-08-03 09:26:58","0000-00-00 00:00:00","1"),
("38","YOKE NECK","1","0","2022-08-03 09:27:09","0000-00-00 00:00:00","1"),
("39","DOUCHE BAG NECK","1","0","2022-08-03 09:27:19","0000-00-00 00:00:00","1"),
("40","HENLEY COLLAR","1","0","2022-08-03 09:27:26","0000-00-00 00:00:00","1"),
("41","BASEBALL","1","0","2022-08-03 09:27:34","0000-00-00 00:00:00","1"),
("42","RAGLAN SLEEVE","1","0","2022-08-03 09:27:41","0000-00-00 00:00:00","1"),
("43","TURTLE NECK","1","0","2022-08-03 09:27:49","0000-00-00 00:00:00","1"),
("44","RINGER","1","0","2022-08-03 09:27:58","0000-00-00 00:00:00","1"),
("45","CAP SLEEVE","1","0","2022-08-03 09:28:06","0000-00-00 00:00:00","1"),
("46","CHEST/SHOULDER FIT","1","0","2022-08-03 09:30:08","0000-00-00 00:00:00","1"),
("47","NECK FIT","1","0","2022-08-03 09:30:18","0000-00-00 00:00:00","1"),
("48","SLEEVE FIT","1","0","2022-08-03 09:30:28","0000-00-00 00:00:00","1"),
("49","WAIST FIT","1","0","2022-08-03 09:30:36","0000-00-00 00:00:00","1"),
("50","SLIM FIT.","1","0","2022-08-03 09:31:35","0000-00-00 00:00:00","1"),
("51","REGULAR FIT.","1","0","2022-08-03 09:31:45","0000-00-00 00:00:00","1"),
("52","SKINNY FIT","1","0","2022-08-03 09:31:58","0000-00-00 00:00:00","1"),
("53","24 INCH","1","0","2022-08-03 09:35:39","0000-00-00 00:00:00","1"),
("54","26 INCH","1","0","2022-08-03 09:35:51","0000-00-00 00:00:00","1"),
("55","28 INCH","1","0","2022-08-03 09:35:58","0000-00-00 00:00:00","1"),
("56","30 INCH","1","0","2022-08-03 09:36:07","0000-00-00 00:00:00","1"),
("57","40 INCH","1","0","2022-08-03 09:36:15","0000-00-00 00:00:00","1"),
("58","42 INCH","1","0","2022-08-03 09:36:22","0000-00-00 00:00:00","1"),
("59","44 INCH","1","0","2022-08-03 09:36:29","0000-00-00 00:00:00","1"),
("60","46 INCH","1","0","2022-08-03 09:36:36","0000-00-00 00:00:00","1"),
("61","2 GB","1","0","2022-08-03 09:39:57","0000-00-00 00:00:00","1"),
("62","4 GB","1","0","2022-08-03 09:40:07","0000-00-00 00:00:00","1"),
("63","8 GB","1","0","2022-08-03 09:40:14","0000-00-00 00:00:00","1"),
("64","16 GB","1","0","2022-08-03 09:40:21","0000-00-00 00:00:00","1"),
("65","32 GB","1","0","2022-08-03 09:40:30","0000-00-00 00:00:00","1"),
("66","216 GB","1","0","2022-08-03 09:40:43","0000-00-00 00:00:00","1"),
("67","512 GB","1","0","2022-08-03 09:40:50","0000-00-00 00:00:00","1"),
("68","1 TB","1","0","2022-08-03 11:34:48","0000-00-00 00:00:00","1"),
("69","1.5 TB","1","0","2022-08-03 11:34:55","0000-00-00 00:00:00","1"),
("70","2 TB","1","0","2022-08-03 11:35:02","0000-00-00 00:00:00","1"),
("71","4 TB","1","0","2022-08-03 11:35:10","0000-00-00 00:00:00","1"),
("72","5 TB","1","0","2022-08-03 11:35:15","0000-00-00 00:00:00","1"),
("73","G","1","0","2022-08-03 11:56:49","0000-00-00 00:00:00","1"),
("74","KG","1","0","2022-08-03 11:56:59","0000-00-00 00:00:00","1"),
("75","ML","1","0","2022-08-03 11:57:11","0000-00-00 00:00:00","1"),
("76","LTR","1","1","2022-09-01 22:55:13","2022-09-01 22:55:13","1"),
("77","SINGLE","1","0","2022-08-24 00:08:44","0000-00-00 00:00:00","1"),
("78","DOUBLE","1","0","2022-08-24 00:08:51","0000-00-00 00:00:00","1"),
("79","KING","1","0","2022-08-24 00:08:58","0000-00-00 00:00:00","1"),
("80","QUEEN","1","1","2022-09-01 22:55:08","2022-09-01 22:55:08","1");




CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'unique id to identify the row of this table',
  `blog_title` text COMMENT 'title of the blog',
  `short_code` text,
  `blog_author` varchar(45) DEFAULT NULL COMMENT 'owner of the blog',
  `blog_date` timestamp NULL DEFAULT NULL COMMENT 'date of the blog',
  `blog_image` varchar(45) DEFAULT NULL COMMENT 'image of the blog',
  `short_description` text NOT NULL,
  `description` text COMMENT 'content of the blog',
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text,
  `meta_keyword` text,
  `created_by` int(11) DEFAULT NULL COMMENT 'id of user who inserted this data',
  `modified_by` int(11) DEFAULT NULL COMMENT 'id of user who updated this data',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'data inserted date',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'data updated date',
  `is_active` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'field Is Active',
  PRIMARY KEY (`blog_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='blog details';






CREATE TABLE `brand` (
  `brand_id` int(9) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(100) NOT NULL,
  `short_code` varchar(100) NOT NULL,
  `brand_logo` text,
  `created_by` int(9) NOT NULL,
  `modified_by` int(9) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;


INSERT INTO brand VALUES
("1","DELL","dell","","1","0","2022-08-24 02:05:05","0000-00-00 00:00:00","1"),
("2","ACER","acer","","1","0","2022-08-24 02:05:19","0000-00-00 00:00:00","1"),
("3","LG","lg","","1","0","2022-08-24 02:05:26","0000-00-00 00:00:00","1"),
("4","HP","hp","","1","0","2022-08-24 02:05:32","0000-00-00 00:00:00","1"),
("5","SAMSUNG","samsung","","1","0","2022-08-24 02:05:39","0000-00-00 00:00:00","1"),
("6","ONEPLUS","oneplus","","1","0","2022-08-24 02:06:50","0000-00-00 00:00:00","1"),
("7","boAT","boat","","1","0","2022-08-24 02:07:08","0000-00-00 00:00:00","1"),
("8","APPLE","apple","","1","0","2022-08-24 02:07:45","0000-00-00 00:00:00","1"),
("9","REDMI","redmi","","1","0","2022-08-24 02:07:57","0000-00-00 00:00:00","1"),
("10","MI","mi","","1","0","2022-08-24 02:08:01","0000-00-00 00:00:00","1"),
("11","ADDIDAS","addidas","","1","0","2022-08-24 02:08:56","0000-00-00 00:00:00","1"),
("12","Allen Solly","allen-solly","","1","0","2022-08-24 02:09:35","0000-00-00 00:00:00","1"),
("13","MAX","max","","1","0","2022-08-24 02:13:39","0000-00-00 00:00:00","1"),
("14","NIKE","nike","","1","0","2022-08-24 02:13:45","0000-00-00 00:00:00","1"),
("15","PUMA","puma","","1","0","2022-08-24 02:13:52","0000-00-00 00:00:00","1"),
("16","GINI & JONY","gini-&-jony","","1","0","2022-08-24 02:14:08","0000-00-00 00:00:00","1"),
("17","HERE&NOW","here&now","","1","0","2022-08-24 02:14:32","0000-00-00 00:00:00","1"),
("18","United Colors of Benetton","united-colors-of-benetton","","1","0","2022-08-24 02:15:17","0000-00-00 00:00:00","1"),
("19","KILLER","killer","","1","0","2022-08-24 02:15:31","0000-00-00 00:00:00","1"),
("20","Pepe Jeans","pepe-jeans","","1","0","2022-08-24 02:15:43","0000-00-00 00:00:00","1"),
("21","Pantaloons","pantaloons","","1","0","2022-08-24 02:16:24","0000-00-00 00:00:00","1"),
("22","WOW","wow","","1","0","2022-08-24 02:16:39","0000-00-00 00:00:00","1"),
("23","Skechers","skechers","","1","0","2022-08-24 02:17:21","0000-00-00 00:00:00","1"),
("24","RED CHIEF","red-chief","","1","0","2022-08-24 02:17:29","0000-00-00 00:00:00","1"),
("25","WOODLAND","woodland","","1","0","2022-08-24 02:17:38","0000-00-00 00:00:00","1"),
("26","LEE COOPER","lee-cooper","","1","0","2022-08-24 02:17:47","0000-00-00 00:00:00","1"),
("27","WROGN","wrogn","","1","0","2022-08-24 02:17:54","0000-00-00 00:00:00","1"),
("28","Bata","bata","","1","0","2022-08-24 02:18:02","0000-00-00 00:00:00","1"),
("29","Sparx","sparx","","1","0","2022-08-24 02:18:22","0000-00-00 00:00:00","1"),
("30","Roadster","roadster","","1","0","2022-08-24 02:18:40","0000-00-00 00:00:00","1"),
("31","TP-Link","tp-link","","1","0","2022-08-24 02:21:06","0000-00-00 00:00:00","1"),
("32","Huawei","huawei","","1","0","2022-08-24 02:21:16","0000-00-00 00:00:00","1"),
("33","NETGEAR","netgear","","1","0","2022-08-24 02:21:26","0000-00-00 00:00:00","1"),
("34","D-Link","d-link","","1","0","2022-08-24 02:21:44","0000-00-00 00:00:00","1"),
("35","SANDISK","sandisk","","1","0","2022-08-24 02:22:16","0000-00-00 00:00:00","1"),
("36","D-Link","d-link","","1","0","2022-08-24 02:22:44","0000-00-00 00:00:00","1"),
("37","ZEBRONICS","zebronics","","1","0","2022-08-24 02:22:51","0000-00-00 00:00:00","1"),
("38","Lenovo","lenovo","","1","0","2022-08-24 02:23:05","0000-00-00 00:00:00","1"),
("39","PHILIPS","philips","","1","0","2022-08-24 02:23:36","0000-00-00 00:00:00","1"),
("40","iball","iball","","1","0","2022-08-24 02:24:07","0000-00-00 00:00:00","1"),
("41","Seagate","seagate","","1","0","2022-08-24 02:26:53","0000-00-00 00:00:00","1"),
("42","Ampire","ampire","","1","0","2022-08-24 02:28:39","0000-00-00 00:00:00","1"),
("43","Aquire","aquire","","1","0","2022-08-24 02:28:49","0000-00-00 00:00:00","1"),
("44","Titan","titan","","1","0","2022-08-24 02:28:56","0000-00-00 00:00:00","1"),
("45","Insleep","insleep","","1","0","2022-08-24 02:32:10","0000-00-00 00:00:00","1"),
("46","FLO","flo","","1","0","2022-08-24 02:32:47","0000-00-00 00:00:00","1"),
("47","Tata","tata","","1","0","2022-08-24 02:36:00","0000-00-00 00:00:00","1"),
("48","Maggi","maggi","","1","0","2022-08-24 02:36:08","0000-00-00 00:00:00","1"),
("49","FORTUNE","fortune","","1","0","2022-08-24 02:36:15","0000-00-00 00:00:00","1"),
("50","Happilo","happilo","","1","0","2022-08-24 02:36:22","0000-00-00 00:00:00","1"),
("51","Aashirvaad","aashirvaad","","1","0","2022-08-24 02:36:30","0000-00-00 00:00:00","1"),
("52","Mother Dairy","mother-dairy","","1","0","2022-08-24 02:36:38","0000-00-00 00:00:00","1"),
("53","Saffola","saffola","","1","0","2022-08-24 02:36:46","0000-00-00 00:00:00","1"),
("54","DABUR","dabur","","1","0","2022-08-24 02:37:53","0000-00-00 00:00:00","1"),
("55","BOURNVITA","bournvita","","1","0","2022-08-24 02:38:05","0000-00-00 00:00:00","1"),
("56","PARLE","parle","","1","0","2022-08-24 02:38:12","0000-00-00 00:00:00","1"),
("57","Everest","everest","","1","0","2022-08-24 02:40:13","0000-00-00 00:00:00","1"),
("58","Unibic","unibic","","1","0","2022-08-24 02:42:05","0000-00-00 00:00:00","1"),
("59","Sunfeast","sunfeast","","1","0","2022-08-24 02:42:18","0000-00-00 00:00:00","1"),
("60","Britannia","britannia","","1","0","2022-08-24 02:42:28","0000-00-00 00:00:00","1"),
("61","Oreo","oreo","","1","0","2022-08-24 02:42:36","0000-00-00 00:00:00","1"),
("62","VIVO","vivo","","1","0","2022-08-26 21:14:16","0000-00-00 00:00:00","1"),
("63","VEGA","vega","","1","1","2022-08-26 22:08:41","2022-08-27 02:26:02","1"),
("64","Nihar Naturals","nihar-naturals","","1","0","2022-08-26 22:55:13","0000-00-00 00:00:00","1"),
("65","TRESemme","tresemme","","1","0","2022-08-26 23:09:45","0000-00-00 00:00:00","1"),
("66","Panasonic","panasonic","","1","0","2022-08-26 23:21:47","0000-00-00 00:00:00","1");




CREATE TABLE `category` (
  `category_id` int(9) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `short_code` varchar(100) NOT NULL,
  `parent_category_id` int(11) DEFAULT NULL,
  `child_category` text,
  `hierarchy` text,
  `brand_id` varchar(100) DEFAULT NULL,
  `element_id` text,
  `top_menu` tinyint(1) DEFAULT NULL,
  `menu_position` int(5) DEFAULT NULL,
  `description` text,
  `category_image` text,
  `created_by` int(9) NOT NULL,
  `modified_by` int(9) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;


INSERT INTO category VALUES
("1","Electronics","electronics","0","9,10,11,12,13,14,16,17,52","1","","2,7,8","","","Electronics","","1","1","2022-08-24 00:04:24","2022-08-30 21:41:03","1"),
("2","Grocery","grocery","0","18,19,20,21,22,23,24,25,53","2","","9","","","Grocery","","1","0","2022-08-24 00:07:31","2022-08-24 01:56:02","1"),
("3","Appliances","appliances","0","54","3","","2,7,8","","","Appliances","","1","0","2022-08-24 00:12:15","2022-08-24 01:56:11","1"),
("4","Mobiles","mobiles","0","26,55","4","","2,7,8","","","Mobiles","","1","0","2022-08-24 00:13:18","2022-08-24 01:56:20","1"),
("5","Personal Care","personal-care","0","35,36,37,38,39,56","5","","2,9","","","Personal Care","","1","0","2022-08-24 00:15:15","2022-08-24 01:56:48","1"),
("6","Furniture","furniture","0","40,41,42,43,44,45,46,47,57","6","","1,2,7","","","Furniture","","1","0","2022-08-24 00:22:07","2022-08-24 01:57:02","1"),
("7","Sports","sports","0","48,49,50,58","7","","1,2,4,5","","","Sports","","1","1","2022-08-24 00:24:44","2022-08-30 01:50:52","1"),
("8","Home Appliances","home-appliances","0","27,28,29,30,31,32,33,34","8","","2,3,7,9","","","Home Appliances","","1","0","2022-08-24 00:26:22","2022-08-24 00:58:02","1"),
("9","Laptops & Desktops","laptops-&-desktops","1","","1,9","","","","","Laptops & Desktops","","1","0","2022-08-24 00:28:33","2022-08-24 00:28:33","1"),
("10","Headphones & Speakers","headphones-&-speakers","1","","1,10","","","","","Headphones & Speakers","","1","0","2022-08-24 00:29:09","2022-08-24 00:29:09","1"),
("11","Tablets","tablets","1","","1,11","","","","","Tablets","","1","0","2022-08-24 00:29:35","2022-08-24 00:29:35","1"),
("12","Smartwatches & Bands","smartwatches-&-bands","1","","1,12","","","","","Smartwatches & Bands","","1","0","2022-08-24 00:30:06","2022-08-24 00:30:06","1"),
("13","Powerbanks","powerbanks","1","","1,13","","","","","Powerbanks","","1","0","2022-08-24 00:30:32","2022-08-24 00:30:32","1"),
("14","Styling Gadgets","styling-gadgets","1","","1,14","","","","","Styling Gadgets","","1","0","2022-08-24 00:31:09","2022-08-24 00:31:09","1"),
("15","Mobile Accessories","mobile-accessories","4","","4,15","","","","","Mobile Accessories","","1","1","2022-08-24 00:31:38","2022-08-24 00:45:47","1"),
("16","Computer Accessories","computer-accessories","1","","1,16","","","","","Computer Accessories","","1","0","2022-08-24 00:32:03","2022-08-24 00:32:03","1"),
("17","Data Storage","data-storage","1","","1,17","","","","","Data Storage","","1","0","2022-08-24 00:33:31","2022-08-24 00:33:31","1"),
("18","Maslala,Oil & More","maslala-oil-&-more","2","","2,18","","","","","Maslala,Oil & More","","1","0","2022-08-24 00:38:34","2022-08-24 00:38:34","1"),
("19","Buscuits & Cookies","buscuits-&-cookies","2","","2,19","","","","","Buscuits & Cookies","","1","0","2022-08-24 00:39:05","2022-08-24 00:39:05","1"),
("20","Beverages","beverages","2","","2,20","","","","","Beverages","","1","0","2022-08-24 00:39:33","2022-08-24 00:39:33","1"),
("21","Atta , Rice & Dal","atta-rice-&-dal","2","","2,21","","","","","Atta , Rice & Dal","","1","0","2022-08-24 00:40:22","2022-08-24 00:40:22","1"),
("22","Personal Care","personal-care","2","","2,22","","","","","Personal Care","","1","0","2022-08-24 00:40:41","2022-08-24 00:40:41","1"),
("23","HouseHold & Cleaning","household-&-cleaning","2","","2,23","","","","","HouseHold & Cleaning","","1","0","2022-08-24 00:41:10","2022-08-24 00:41:10","1"),
("24","Home & kitchen","home-&-kitchen","2","","2,24","","","","","Home & kitchen","","1","0","2022-08-24 00:41:32","2022-08-24 00:41:32","1"),
("25","Dairy Products","dairy-products","2","","2,25","","","","","Dairy Products","","1","0","2022-08-24 00:41:53","2022-08-24 00:41:53","1"),
("26","Smartphones","smartphones","4","","4,26","","","","","Smartphones","","1","0","2022-08-24 00:46:12","2022-08-24 00:46:12","1"),
("27","Televisions","televisions","8","","8,27","","","","","Televisions","","1","0","2022-08-24 00:50:52","2022-08-24 00:50:52","1"),
("28","Washing Machine","washing-machine","8","","8,28","","","","","Washing Machine","","1","0","2022-08-24 00:51:48","2022-08-24 00:51:48","1"),
("29","Refrigerator","refrigerator","8","","8,29","","","","","Refrigerator","","1","0","2022-08-24 00:52:42","2022-08-24 00:52:42","1"),
("30","Air Cooler","air-cooler","8","","8,30","","","","","Air Cooler ","","1","0","2022-08-24 00:53:29","2022-08-24 00:53:29","1"),
("31","Water Purifier","water-purifier","8","","8,31","","","","","Water Purifier","","1","0","2022-08-24 00:54:49","2022-08-24 00:54:49","1"),
("32","Air Conditioners","air-conditioners","8","","8,32","","","","","Air Conditioners","","1","0","2022-08-24 00:55:39","2022-08-24 00:55:39","1"),
("33","Jucier Mixer Grinders","jucier-mixer-grinders","8","","8,33","","","","","Jucier Mixer Grinders","","1","0","2022-08-24 00:56:22","2022-08-24 00:56:22","1"),
("34","Microwaves","microwaves","8","","8,34","","","","","Microwaves","","1","0","2022-08-24 00:58:02","2022-08-24 00:58:02","1"),
("35","Skin Care","skin-care","5","","5,35","","","","","Skin Care","","1","0","2022-08-24 01:45:51","2022-08-24 01:45:52","1"),
("36","Hair Care","hair-care","5","","5,36","","","","","Hair Care","","1","0","2022-08-24 01:46:11","2022-08-24 01:46:11","1"),
("37","Make-Up","make-up","5","","5,37","","","","","Make-Up","","1","0","2022-08-24 01:46:33","2022-08-24 01:46:33","1"),
("38","Men\'s Grooming","men\'s-grooming","5","","5,38","","","","","Men\'s Grooming","","1","0","2022-08-24 01:46:53","2022-08-24 01:46:54","1"),
("39","Frangraneces","frangraneces","5","","5,39","","","","","Frangraneces","","1","0","2022-08-24 01:47:22","2022-08-24 01:47:22","1"),
("40","Office Chair","office-chair","6","","6,40","","","","","Office Chair","","1","0","2022-08-24 01:48:12","2022-08-24 01:48:12","1"),
("41","Beds","beds","6","","6,41","","","","","Beds","","1","0","2022-08-24 01:48:27","2022-08-24 01:48:27","1"),
("42","Sofas","sofas","6","","6,42","","","","","Sofas","","1","0","2022-08-24 01:48:45","2022-08-24 01:48:45","1"),
("43","Wardrobes","wardrobes","6","","6,43","","","","","Wardrobes","","1","0","2022-08-24 01:49:18","2022-08-24 01:49:18","1"),
("44","Laptop Tables","laptop-tables","6","","6,44","","","","","Laptop Tables","","1","0","2022-08-24 01:49:48","2022-08-24 01:49:48","1"),
("45","Mattresses","mattresses","6","","6,45","","","","","Mattresses","","1","0","2022-08-24 01:50:14","2022-08-24 01:50:14","1"),
("46","TV Units","tv-units","6","","6,46","","","","","TV Units","","1","0","2022-08-24 01:50:39","2022-08-24 01:50:39","1"),
("47","Bean bags","bean-bags","6","","6,47","","","","","Bean bags","","1","0","2022-08-24 01:51:34","2022-08-24 01:51:34","1"),
("48","Sports Shoes","sports-shoes","7","","7,48","","","","","Sports Shoes","","1","0","2022-08-24 01:52:31","2022-08-24 01:52:31","1"),
("49","Sportswear","sportswear","7","","7,49","","","","","Sportswear","","1","0","2022-08-24 01:53:55","2022-08-24 01:53:55","1"),
("50","Sports Gear","sports-gear","7","","7,50","","","","","Sports Gear","","1","0","2022-08-24 01:54:14","2022-08-24 01:54:14","1"),
("51","Others","others","0","","51","","1,2,3,4,5,6,7,8,9","","","Others","","1","0","2022-08-24 01:55:35","2022-08-24 01:55:35","1"),
("52","Other","other","1","","1,52","","","","","Other","","1","0","2022-08-24 01:55:51","2022-08-24 01:55:51","1"),
("53","Other","other","2","","2,53","","","","","Other","","1","0","2022-08-24 01:56:02","2022-08-24 01:56:02","1"),
("54","Other","other","3","","3,54","","","","","Other","","1","0","2022-08-24 01:56:11","2022-08-24 01:56:11","1"),
("55","Other","other","4","","4,55","","","","","Other","","1","0","2022-08-24 01:56:20","2022-08-24 01:56:20","1"),
("56","Other","other","5","","5,56","","","","","Other","","1","0","2022-08-24 01:56:48","2022-08-24 01:56:48","1"),
("57","Other","other","6","","6,57","","","","","Other","","1","0","2022-08-24 01:57:02","2022-08-24 01:57:02","1"),
("58","Other","other","7","","7,58","","","","","Other","","1","0","2022-08-24 01:57:32","2022-08-24 01:57:32","1");




CREATE TABLE `coupon` (
  `coupon_id` int(11) NOT NULL AUTO_INCREMENT,
  `coupon_code` varchar(50) COLLATE utf8_bin NOT NULL,
  `coupon_amount` float DEFAULT '0',
  `start_date` date DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `description` text COLLATE utf8_bin,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(10) DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`coupon_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO coupon VALUES
("1","aa","0","2022-08-01","2022-08-31","","1","1","2022-08-20 01:51:14","2022-08-22 00:03:16","1"),
("2","ABC123","50","2022-08-02","2022-08-23","test","1","1","2022-08-20 18:58:41","2022-08-22 00:36:45","1");




CREATE TABLE `customer_address` (
  `address_id` int(5) NOT NULL AUTO_INCREMENT,
  `customer_id` int(5) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(13) DEFAULT NULL,
  `address` text,
  `city` varchar(45) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `address_type` varchar(100) DEFAULT NULL,
  `set_default` int(11) DEFAULT '0',
  `created_by` int(5) DEFAULT NULL,
  `modified_by` int(5) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`address_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;


INSERT INTO customer_address VALUES
("5","2","dainik","tandel","sagarvsl6@gmail.com","7894561238","10-abc,xyz,pqr","vapi","Gujarat","396001","India","home","1","2","","2022-09-10 00:00:00","2022-09-14 22:53:23","1"),
("12","1","Roshni","Mistry","mistryroshni13@gmil.com","08866594677","test,30 valsad","valsad","Gujarat","3963001","India","home","1","1","","2022-09-18 00:00:00","2022-09-19 22:43:08","1"),
("13","1","Roshni","mistry","mistryroshni13@gmail.com","7418529632","20, shivcharan socity -2,.b/h somnath temple","Bilimora","Gujarat","396321","India","home","0","1","","2022-09-18 00:00:00","2022-09-18 00:47:48","1");




CREATE TABLE `customer_cart` (
  `cart_id` int(5) NOT NULL AUTO_INCREMENT,
  `customer_id` int(5) NOT NULL,
  `product_id` int(5) NOT NULL,
  `quantity` int(5) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


INSERT INTO customer_cart VALUES
("2","1","14","1");




CREATE TABLE `customer_cart_xx` (
  `cart_id` int(5) NOT NULL AUTO_INCREMENT,
  `customer_id` int(5) NOT NULL,
  `product_id` int(5) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `quantity` int(5) NOT NULL,
  `net_price` double DEFAULT NULL,
  `total_amt` float DEFAULT '0',
  `mrp` float DEFAULT NULL,
  `discount` float DEFAULT '0' COMMENT 'in %',
  `discount_amt` float DEFAULT '0' COMMENT 'in rs',
  `gst` float DEFAULT '0' COMMENT 'in %',
  `gst_amt` float DEFAULT '0' COMMENT 'in rs',
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;


INSERT INTO customer_cart_xx VALUES
("22","1","15","AWG ALL WEATHER GEAR","cover_image.jpg","1","699","699","699","0","0","0","0"),
("23","1","13","Panasonic 20L Solo Microwave Oven (NN-ST26JMFDG, Silver, 51 Auto Menus)","cover_image.jpg","1","7076.46","7076.46","7890","24","1893.6","18","1273.76"),
("24","1","11","tresemme Keratin Smooth Shampoo","cover_image.jpg","2","607.24","1214.48","799","24","191.76","0","0"),
("25","1","7","Maggi Professional Pasta Sauce Mix","cover_image.jpg","1","374","374","425","12","51","0","0");




CREATE TABLE `customer_detail` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` text,
  `show_password` text,
  `created_by` int(11) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


INSERT INTO customer_detail VALUES
("1","Roshni Mistry","female","1472583699","roshni123@gmail.com","e10adc3949ba59abbe56e057f20f883e","","","","2022-09-11 03:17:47","2022-09-11 03:17:47","1"),
("2","Dainik Tandel","male","8527419663","dainik@gmail.com","e10adc3949ba59abbe56e057f20f883e","","","","2022-09-10 22:29:04","2022-07-29 13:05:04","1");




CREATE TABLE `delivery_status` (
  `delivery_status_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'delivery status unique identification number',
  `delivery_status` varchar(45) NOT NULL COMMENT 'delivery_status name',
  `is_active` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'save delivery status active or deactive',
  PRIMARY KEY (`delivery_status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COMMENT='delivery status table';


INSERT INTO delivery_status VALUES
("1","Order Confirmed","1"),
("2","Processing","1"),
("3","Shipped","1"),
("4","Delivered","1"),
("5","Returned","1"),
("6","Cancelled","1"),
("7","Refund","1");




CREATE TABLE `invoice_details` (
  `invoice_id` int(7) NOT NULL AUTO_INCREMENT,
  `customer_id` int(9) NOT NULL,
  `order_id` int(5) NOT NULL,
  `invoice_number` varchar(45) NOT NULL,
  `invoice_no` varchar(45) NOT NULL,
  `invoice_date` date NOT NULL,
  `invoice_file` varchar(100) NOT NULL,
  PRIMARY KEY (`invoice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;






CREATE TABLE `menu_details` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `menu_link` varchar(50) COLLATE utf8_bin NOT NULL,
  `menu_icon` varchar(100) COLLATE utf8_bin NOT NULL,
  `menu_position` int(10) DEFAULT NULL,
  `submenu_id` varchar(350) COLLATE utf8_bin DEFAULT NULL,
  `submenu_name` varchar(100) COLLATE utf8_bin NOT NULL,
  `role_id` int(10) NOT NULL,
  `menu_add_by` int(10) NOT NULL,
  `menu_update_by` int(10) NOT NULL,
  `menu_add_date` datetime NOT NULL,
  `menu_update_date` datetime NOT NULL,
  `menu_status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO menu_details VALUES
("1","Brand","brand","tag","1","1,2","","0","1","1","2022-07-21 01:28:33","2022-08-09 21:11:01","1"),
("2","category","category","list","2","3,4","","0","1","1","2022-07-21 01:28:55","2022-08-09 21:13:21","1"),
("3","Elements","element","slack","3","5,6","","0","1","1","2022-07-21 20:13:47","2022-08-17 23:41:14","1"),
("4","Unit","#","thermometer","4","","","0","1","1","2022-07-21 20:13:56","2022-08-05 18:41:11","0"),
("5","attributes","attributes","shield","5","9,10","","0","1","1","2022-07-21 20:14:10","2022-08-09 21:14:02","1"),
("6","Product","product","package","6","11,12","","0","1","1","2022-07-21 23:58:06","2022-08-17 23:41:59","1"),
("7","Order","order","shopping-cart","7","13","","0","1","1","2022-07-21 23:58:22","2022-08-17 23:42:25","1"),
("8","Blog","#","rss","8","14,15","","0","1","1","2022-07-21 23:58:39","2022-07-26 21:01:20","1"),
("9","Testimonial","#","book-open","9","16,17","","0","1","1","2022-07-22 00:00:41","2022-07-26 20:48:25","1"),
("10","Setting","#","settings","11","18,19,20,23","","0","1","1","2022-07-24 11:08:15","2022-07-26 20:49:36","1"),
("11","Vendor","vendor","users","10","21,22","","0","1","1","2022-07-26 01:29:16","2022-07-27 00:46:19","1"),
("12","Slider","slider","sliders","12","","","0","1","1","2022-07-29 01:19:18","2022-07-29 01:23:11","1"),
("13","Coupon","coupon","book-open","12","","","0","1","0","2022-08-20 00:24:49","0000-00-00 00:00:00","1"),
("14","database","database","database","13","24,25","","0","1","1","2022-08-22 03:02:58","2022-08-22 03:05:59","1"),
("15","Stock","stock","layers","14","","","0","1","1","2022-08-25 22:00:02","2022-08-26 02:40:14","1");




CREATE TABLE `order_details` (
  `orderdetail_id` int(7) NOT NULL AUTO_INCREMENT,
  `order_id` int(7) NOT NULL,
  `product_id` int(7) NOT NULL,
  `product_name` text,
  `quantity` int(7) NOT NULL,
  `mrp_price` double DEFAULT NULL,
  `net_price` varchar(20) NOT NULL,
  `total_amt` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `discount_amt` double DEFAULT NULL,
  `gst` int(11) DEFAULT NULL,
  `gst_amt` double DEFAULT NULL,
  `created_by` int(7) NOT NULL,
  `modified_by` int(7) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`orderdetail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;


INSERT INTO order_details VALUES
("1","1","10","Nihar Naturals Non Sticky, Coconut with Methi & Jasmine Hair Oil For Thick & Strong Hair Hair Oil (400 ML)","2","100","90","180","10","20","0","0","0","0","2022-09-14 22:41:14","2022-09-14 22:41:14","0"),
("2","1","11","tresemme Keratin Smooth Shampoo","2","449","341","682","24","215.52","0","0","0","0","2022-09-14 22:41:14","2022-09-14 22:41:14","0"),
("3","2","14","sports shoes for men","1","1500","795","795","47","705","0","0","0","0","2022-09-15 04:49:28","2022-09-15 04:49:28","0");




CREATE TABLE `orders` (
  `order_id` int(5) NOT NULL AUTO_INCREMENT,
  `order_number` text NOT NULL,
  `customer_id` int(5) NOT NULL,
  `total_quantity` int(5) NOT NULL,
  `total_item` int(11) DEFAULT NULL,
  `total_mrp` double DEFAULT NULL,
  `total_amount` varchar(45) NOT NULL,
  `gst_amount` varchar(45) DEFAULT NULL,
  `discount_amt` double DEFAULT NULL,
  `ship_amount` varchar(45) DEFAULT NULL,
  `grand_total` varchar(45) DEFAULT NULL,
  `bill_id` int(7) NOT NULL COMMENT 'Order bill address unique number',
  `order_date` date NOT NULL,
  `delivery_status_id` int(11) NOT NULL COMMENT 'delivery status unique identification number',
  `shipping_address` longtext,
  `created_by` int(5) NOT NULL,
  `modified_by` int(5) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


INSERT INTO orders VALUES
("1","ORD-1","1","4","2","1098","862","0","235.52","","","0","2022-09-14","2","<strong>Roshni Lad</strong><br>05,mahyavanshi area,segvi ,<br>valsad , Gujarat ,<br>India - 3963001<br>Phone no : 08866594677","0","0","2022-09-14 22:41:14","2022-09-16 04:16:12","1"),
("2","ORD-2","1","1","1","1500","795","0","705","","","0","2022-09-15","1","<strong>Roshni Mistry</strong><br>segvi,valsad ,<br>valsad , gujarat ,<br>india - 3963001<br>Phone no : 08866594677","0","0","2022-09-15 04:49:28","2022-09-19 22:36:44","1");




CREATE TABLE `payment_details` (
  `payment_id` int(7) NOT NULL AUTO_INCREMENT,
  `payment_mode` varchar(100) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `order_id` int(11) NOT NULL,
  `total_pay_amount` double DEFAULT NULL,
  `payment_date` date NOT NULL,
  `pay_status` varchar(45) NOT NULL,
  `created_by` int(7) NOT NULL,
  `modified_by` int(7) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;


INSERT INTO payment_details VALUES
("1","cod","1","1","862","2022-09-14","1","0","0","2022-09-14 22:41:14","2022-09-14 22:41:14","1"),
("2","cod","1","2","795","2022-09-15","1","0","0","2022-09-15 04:49:28","2022-09-15 04:49:28","1");




CREATE TABLE `product_details` (
  `product_id` int(9) NOT NULL AUTO_INCREMENT,
  `product_name` text NOT NULL,
  `product_code` varchar(45) NOT NULL,
  `short_code` varchar(100) NOT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `description` text,
  `stock` int(11) DEFAULT '0',
  `vendor_id` int(11) DEFAULT NULL,
  `brand_id` int(9) DEFAULT NULL,
  `category_id` int(9) NOT NULL,
  `child_category` int(11) DEFAULT NULL,
  `qty` varchar(100) DEFAULT NULL,
  `element_id` text,
  `attributes_id` text,
  `unit_price` double DEFAULT NULL,
  `mrp_price` double DEFAULT NULL COMMENT 'mrp price = unit price + gst amt',
  `discount` varchar(45) DEFAULT NULL COMMENT 'in %',
  `discount_amt` float DEFAULT '0' COMMENT 'in Rs',
  `net_price` double DEFAULT NULL COMMENT 'selling price : (mrp - discount)',
  `tag` varchar(150) DEFAULT NULL,
  `tax` varchar(45) DEFAULT NULL COMMENT 'gst in %',
  `gst_amt` float DEFAULT '0',
  `image` text,
  `cover_img` text,
  `is_new_product` int(2) DEFAULT NULL,
  `is_popular_product` int(2) DEFAULT NULL,
  `is_feature_product` int(2) DEFAULT NULL,
  `return_or_replace` varchar(50) DEFAULT NULL,
  `return_replace_validity` text,
  `policy_covers` text,
  `return_policy` longtext,
  `warranty_title` text,
  `warranty_detail` longtext,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` text,
  `meta_keyword` text,
  `created_by` int(9) NOT NULL,
  `modified_by` int(9) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;


INSERT INTO product_details VALUES
("1","Dell Inspiron 3525 Laptop","3525","dell-inspiron-3525-laptop","AMD Athlon Silver 3050U, Win 11 + MSO\'21, 8GB GDDR4, 256Gb SSD, Radeon Graphics, 15.6\" (39.62Cms) HD Anti-Glare (D560766Win9Be, 1.68Kgs)","<ul style=\'box-sizing: border-box; margin: 0px 0px 0px 18px; color: rgb(15, 17, 17); padding: 0px; font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\'><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">Processor: AMD Athlon Silver 3050U (2.30 GHz up to 3.20 GHz)</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">RAM &amp; Storage: 8GB DDR4 (2 DIMM Slots) &amp; 256GB SSD</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">Display: 15.6\" HD AG Narrow Border</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">Software: Win 11 + Office H&amp;S 2021</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">Ports: 2 USB 3.2 Gen 1 ports, 1 USB 2.0 port, 1 Headset jack, 1 HDMI 1.4 port*, 1 SD 3.0 card slot</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">WiFi &amp; BT: 802.11ac 1x1 WiFi and Bluetooth</span></li></ul>","50","2","1","1","9","","","","50000","59000","32","18880","40120","","18","9000","51if47n2aPL._AC_SS450_.jpg|72207604.jpg|in3521nt-cnb-05000ff090-bk.png|peripherals_laptop_latitude_3420nt_gallery_1.png","cover_image.jpg","1","0","0","","","","","","","Dell Inspiron","Dell Inspiron","Dell Inspiron","1","1","2022-08-24 04:17:52","2022-09-13 04:08:09","1"),
("3","HP Pavilion Laptop 15-eg2036TU","Eg2036TU","hp-pavilion-laptop-15-eg2036tu","HP Pavilion Laptop 15","<ul style=\'box-sizing: border-box; margin: 0px 0px 0px 18px; color: rgb(15, 17, 17); padding: 0px; font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\'><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\'color: rgb(90, 90, 90); font-family: \"Montserrat Semibold\"; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 600; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>12th Generation Intel® Core™ i5 processor</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\'color: rgb(90, 90, 90); font-family: \"Montserrat Semibold\"; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 600; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>Windows 11 Home</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\'color: rgb(90, 90, 90); font-family: \"Montserrat Semibold\"; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 600; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>39.6 cm (15.6) diagonal, FHD (1920 x 1080), IPS, micro-edge, anti-glare, Low Blue Light, 300 nits, 100% sRGB</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\'color: rgb(90, 90, 90); font-family: \"Montserrat Semibold\"; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 600; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>Intel® Iris® X? Graphics</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\'color: rgb(90, 90, 90); font-family: \"Montserrat Semibold\"; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 600; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>16 GB DDR4-3200 MHz RAM (2 x 8 GB)</span></li></ul>","10","1","4","1","9","","","","150230","150230","18","27041.4","123189","","0","0","186-1860993_hp-pavilion-gaming-laptop.png|262-2626793_hp-spectre-laptop-hp-360-pen-laptop.png|HP-Laptop-PNG-Transparent-HD-Photo.png|HP-Laptop-Transparent-Image.png|images.jpg|png-transparent-laptop-hp-pavilion-intel-core-i5-pavilion-electronics-netbook-computer.png","cover_image.png","1","0","0","","","","","","","HP Pavilion","HP Pavilion","HP Pavilion","1","1","2022-08-25 00:00:00","2022-09-13 04:08:36","1"),
("4","Vivo Y21G (Midnight Blue, 4GB RAM, 64GB ROM)","Y21G","vivo-y21g-midnight-blue-4gb-ram-64gb-rom","Vivo Y21G (Midnight Blue, 4GB RAM, 64GB ROM)","<ul><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">13MP+2MP Rear Camera | 8MP Selfie Camera</span><ul><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">16.53cm (6.51\") HD+ Display with 1600 x 720 pixels resolution.</span><ul><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">Memory &amp; SIM: 4GB RAM | 64GB internal memory | Dual SIM (nano+nano) dual-standby (4G).</span><ul><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">Funtouch OS 12.0</span><ul><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">18W fast charging with 5000mAh battery (Type-C).</span><ul><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">form_factor:Bar,operating_system:Funtouch OS 12 (Based on Android 11)</span></li></ul></li></ul></li></ul></li><li><br></li></ul></li><li><br></li></ul></li></ul>","-1","1","62","4","26","","","","17990","21228","25","5307","15921","","18","3238.2","41+sLJHyA8L._SY300_SX300_.jpg|51iQpMbgbGL._SX679_.jpg|51wVTI9yswL._SX679_.jpg|71RhcuY9qxL._SX679_.jpg|ps7.1.jpg","cover_image.jpg","1","0","0","","","","","","","Vivo Y21G","Vivo Y21G","Vivo Y21G","1","1","2022-08-26 21:22:07","2022-09-13 22:00:10","1"),
("5","TP-Link TL-WR820N 300 Mbps Speed Wireless WiFi Router","TL-WR820N","tp-link-tl-wr820n-300-mbps-speed-wireless-wifi-router","TP-Link TL-WR820N 300 Mbps Speed Wireless WiFi Router","<ul style=\"list-style-type: disc;\"><li><span style=\'color: rgb(15, 17, 17); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>300Mbps Wireless Speed</span>&nbsp;</li><li><span style=\'color: rgb(15, 17, 17); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>IPv6 Compatible</span></li><li><span style=\'color: rgb(15, 17, 17); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>Compatible Devices : <span style=\'color: rgb(86, 89, 89); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>IPv6, IPTV</span>&nbsp;</span></li><li><span style=\'color: rgb(15, 17, 17); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'><span style=\'color: rgb(15, 17, 17); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>Frequency</span> :&nbsp;<span style=\'color: rgb(86, 89, 89); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>2.4 Hz</span>&nbsp;</span></li></ul><p><br></p>","12","2","31","1","52","","","","1000","1000","15","150","850","","0","0","41GinSaL6NS._SY450_.jpg|51rW0sZJW3S._SY450_.jpg|51Wd5RuGanS._SY450_.jpg|51WI6Lm4vFS._SY450_.jpg|71ZY6xC9sNS._SY450_.jpg","cover_image.jpg","1","0","0","","","","","","","TP-Link TL-WR820N","TP-Link TL-WR820N","TP-Link TL-WR820N","1","1","2022-08-26 21:33:08","2022-09-13 04:09:23","1"),
("6","Samsung Galaxy M13 (Midnight Blue, 4GB, 64GB Storage)","M13 ","samsung-galaxy-m13-midnight-blue-4gb-64gb-storage","Samsung Galaxy M13 (Midnight Blue, 4GB, 64GB Storage) | 6000mAh Battery | Upto 8GB RAM with RAM Plus","<ul style=\'box-sizing: border-box; margin: 0px 0px 0px 18px; color: rgb(15, 17, 17); padding: 0px; font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\'><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">6000mAh lithium-ion battery, 1 year manufacturer warranty for device and 6 months manufacturer warranty for in-box accessories including batteries from the date of purchase</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">Upto 12GB RAM with RAM Plus | 64GB internal memory expandable up to 1TB| Dual Sim (Nano)</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">50MP+5MP+2MP Triple camera setup- True 50MP (F1.8) main camera +5MP(F2.2)+ 2MP (F2.4) | 8MP (F2.2) front cam</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">Android 12,One UI Core 4 with a powerful Octa Core Processor</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">16.72 centimeters (6.6-inch) FHD+ LCD - infinity O Display, FHD+ resolution with 1080 x 2408 pixels resolution, 401 PPI with 16M color</span></li></ul>","-2","1","5","4","26","","","","14999","14999","25","3749.75","11249","","0","0","41Vj+8XWIQL._SY300_SX300_.jpg|51S0XRBj0aL._SX679_.jpg|61mtAwJrQ6L._SX679_.jpg|81vp0PrWedL._SX679_.jpg|81vrWNFfcpL._SX679_.jpg","cover_image.jpg","1","0","0","","","","","","","Samsung Galaxy M13","Samsung Galaxy M13","Samsung Galaxy M13","1","1","2022-08-26 21:50:01","2022-09-13 22:03:09","1"),
("7","Maggi Professional Pasta Sauce Mix","-","maggi-professional-pasta-sauce-mix","Maggi Professional Pasta Sauce Mix, White Sauce - 500g Pouch","<ul style=\'box-sizing: border-box; margin: 0px 0px 0px 18px; color: rgb(15, 17, 17); padding: 0px; font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\'><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">Smooth, creamy &amp; saucy pasta: Maggi professional pasta sauce mix (white sauce) gives a smooth, creamy and saucy mouthfeel to your pasta</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">Flavourful white sauce mix: provides flavour notes of herb and cheese</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">Retains the taste: helps retain texture, appearance and flavour of the dish</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">Rich coating: gives rich coating on the pasta&nbsp;</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">Also try: try the tangy Maggi professional saucy pasta sauce mix, red sauce&nbsp;</span></li></ul>","46","1","48","2","53","500","","","450","450","12","54","396","","0","0","71aQZaxChrL._SX679_.jpg|81LOfXibmaL._SX679_.jpg|81M99EU7P6L._SX679_.jpg|81VNk4E5eiL._SX679_.jpg|81XaPcUsOjL._SX679_.jpg|81z4PQqneYL._SX679_.jpg","cover_image.jpg","0","0","0","","","","","","","Maggi Professional ","Maggi Professional ","Maggi Professional ","1","1","2022-08-26 21:55:51","2022-09-13 04:10:09","1"),
("8","Ashirvaad Atta with Multigrains(2.5 kg)","-","ashirvaad-atta-with-multigrains-2.5-kg","Ashirvaad Atta with Multigrains, 5kg pack, Atta with High Fibre for Healthy Gut and Healthy Life","<ul style=\'box-sizing: border-box; margin: 0px 0px 0px 18px; color: rgb(15, 17, 17); padding: 0px; font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\'><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">Aashirvaad Atta with Multigrains is made with the choicest grains which provides you and your family wholesome nutrition</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">Aashirvaad Atta with Multigrains is a blend of 6 natural grains – wheat, maize, soya, Chana, oats, psyllium husk</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">India’s No. 1 Atta brand, Aashirvaad Atta with Multigrains is Made with love in India with the grains sourced from the fields across the country</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">Aashirvaad Atta with Multigrains is high in fibre which aids in digestion and ensures a healthy gut</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">This multigrain flour is rich in proteins, vitamins, minerals and fibre which ensures a fit, active and healthy life</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">There is no compromise in taste as the rotis made from Aashirvaad Atta with Multigrains are smooth, soft and tasty</span></li></ul>","100","1","51","2","21","2.5","","","200","224","","0","224","","12","24","71NE0tYef0L._SX679_.jpg|71pHmiVucbL._SX679_.jpg|81bNTvvrafL._SX679_.jpg|81jdvrIv1jL._SX679_.jpg|81ZZDWDpXqL._SX679_.jpg|817PrgoJ7+L._SX679_.jpg","cover_image.jpg","1","0","0","","","","","","","Ashirvaad Atta","Ashirvaad Atta","Ashirvaad Atta","1","1","2022-08-26 22:08:54","2022-09-13 04:33:34","1"),
("9","Ashirvaad Atta with Multigrains(5 kg)","#","ashirvaad-atta-with-multigrains-5-kg","Ashirvaad Atta with Multigrains, 5kg pack, Atta with High Fibre for Healthy Gut and Healthy Life","<ul style=\'box-sizing: border-box; margin: 0px 0px 0px 18px; color: rgb(15, 17, 17); padding: 0px; font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\'><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">Aashirvaad Atta with Multigrains is made with the choicest grains which provides you and your family wholesome nutrition</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">Aashirvaad Atta with Multigrains is a blend of 6 natural grains – wheat, maize, soya, Chana, oats, psyllium husk</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">India’s No. 1 Atta brand, Aashirvaad Atta with Multigrains is Made with love in India with the grains sourced from the fields across the country</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">Aashirvaad Atta with Multigrains is high in fibre which aids in digestion and ensures a healthy gut</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">This multigrain flour is rich in proteins, vitamins, minerals and fibre which ensures a fit, active and healthy life</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">There is no compromise in taste as the rotis made from Aashirvaad Atta with Multigrains are smooth, soft and tasty</span></li></ul>","100","1","51","2","21","5","","","250","280","0","0","280","","12","30","71NE0tYef0L._SX679_.jpg|71pHmiVucbL._SX679_.jpg|81bNTvvrafL._SX679_.jpg|81jdvrIv1jL._SX679_.jpg|81ZZDWDpXqL._SX679_.jpg|817PrgoJ7+L._SX679_.jpg","cover_image.jpg","1","0","0","","","","","","","Ashirvaad Atta","Ashirvaad Atta","Ashirvaad Atta","1","1","2022-08-26 22:10:27","2022-09-13 04:33:59","1"),
("10","Nihar Naturals Non Sticky, Coconut with Methi & Jasmine Hair Oil For Thick & Strong Hair Hair Oil (400 ML)","-","nihar-naturals-non-sticky-coconut-with-methi-jasmine-hair-oil-for-thick-strong-hair-hair-oil-400","Nihar Naturals Non Sticky, Coconut with Methi & Jasmine Hair Oil For Thick & Strong Hair Hair Oil  (400 ml)","<p><span style=\"color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">From the house of Marico Limited, home to heritage hair oils like Parachute Advansed and Hair &amp; Care- Nihar Naturals is built on the base of expertise and experience about hair. In todays time women have many more hair concerns than earlier- like rough hair, hairfall, frizzy hair, split.Naturals hair oil for women, your trusted brand understands your evolving hair care needs and is here to help you keep your hair healthy and beautiful. Coconut oil can go 10 layers deep in hair and lock in proteins so hair is not only strong from inside, but soft, shiny from the outside. This non sticky hair oil also helps repair damage the damage hair goes through due to pollution, dust and heat so that hair is always beautiful. Methi as a seed is very effective in helping hair growth and fighting hair fall - use Nihar Naturals hair oil regularly before every hair wash and see the difference. Created with the goodness of Coconut and methi, this oil nourishes hair from root to tip. To use simply take some oil in your palms, apply both on scalp and hair. You can take this relaxing jasmine oil and apply it for an hour or leave it overnight, wash it off with Shampoo Available in two delightful fragrances in the flowery notes of Jasmine and Rose, this fragrant hair oil will uplift your mood after a tiring day. This is a light hair oil non sticky in nature and is suitable for all seasons! Also try other offerings from Nihar Naturals- Nihar Shanti Sarson, Nihar Shanti Badam Amla, Nihar Shanti Jasmine and Nihar Gold!</span></p>","50","1","64","5","36","","","","100","100","10","10","90","","0","0","61ebOK0OigL._SY450_.jpg|61rNy9iJkkL._SY450_.jpg|71BQGO-HF8L._SY450_.jpg|71fvn2ZVrcL._SY450_.jpg|716FWJpC-LL._SY450_.jpg","cover_image.jpg","1","0","0","","","","","","","Nihar Naturals","Nihar Naturals","Nihar Naturals","1","1","2022-08-26 23:00:03","2022-09-14 22:01:27","1"),
("11","tresemme Keratin Smooth Shampoo","-","tresemme-keratin-smooth-shampoo","Tresemme Keratin Smooth Shampoo,With Keratin And Argan Oil For Smoother And Shinier Hair, 1 Ltr","<ul style=\'box-sizing: border-box; margin: 0px 0px 0px 18px; color: rgb(15, 17, 17); padding: 0px; font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\'><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">Our keratin smooth system is infused with Keratin &amp; Argan Oil</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">Nourishes your hair &amp; controls frizz, for upto 3 days</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">Dual action, 100% smoother hair with more shine</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">Lower Sulphate formula,suitable for both natural and chemically-treated hair</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">Makes your tresses smoother, shinier and easier to style</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">Especially formulated for indian hair &amp; suitable for use with oil treatments</span></li></ul>","-5","2","65","5","36","1","","","449","449","24","107.76","341","","0","0","61DTXH1VPdL._SY450_.jpg|61tqYqK-MVL._SY450_.jpg|61yaPZMum-L._SY450_.jpg|616MCnf-8dL._SL1002_.jpg|6125MeSF-DL._SY450_.jpg","cover_image.jpg","1","0","0","","","","","","","Tresemme Keratin Smooth Shampoo","Tresemme Keratin Smooth Shampoo","Tresemme Keratin Smooth Shampoo","1","1","2022-08-26 23:14:48","2022-09-14 22:41:14","1"),
("12","Mi 5A 80 cm (32 inch) HD Ready LED Smart Android TV with Dolby Audio (2022 Model)","Mi 5A","mi-5a-80-cm-32-inch-hd-ready-led-smart-android-tv-with-dolby-audio-2022-model","Mi 5A 80 Cm (32 Inch) HD Ready LED Smart Android TV With Dolby Audio (2022 Model)","<ul style=\"list-style-type: disc;\"><li>Supported Apps: Netflix|Prime Video|Disney+Hotstar|Youtube</li><li>Operating System: Android (Google Assistant &amp; Chromecast in-built)</li><li>Resolution: HD Ready 1366 x 768 Pixels</li><li>Sound Output: 20 W</li><li>Refresh Rate: 60 Hz</li></ul><p><span style=\"color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">You can enjoy your favourite movies, catch up on news, and binge-watch TV series on the Xiaomi L32M7-5AIN HD Smart TV. It features an elegant metal frame with a bezel-less design, allowing you to enjoy a widescreen view. In addition, this TV is sure to enhance your aural experience with Dolby Audio, which provides 20 W high-fidelity sound. Furthermore, boasting a HD display and wide colour gamut, this TV provides high-quality visuals.</span></p>","0","1","10","8","27","","","","17999","17999","20","3599.8","14399","","0","0","51fmHk3km+L._SX300_SY300_.jpg|51yBtjwfDPL._SY450_.jpg|61-LihKQnOL._SY450_.jpg|71u24tMwkfL._SY450_.jpg|81Ef8+Fyz1L._SY450_.jpg","cover_image.jpg","1","0","0","","","","","","","Mi 5A ","Mi 5A ","Mi 5A ","1","1","2022-08-26 23:20:38","2022-09-13 04:12:01","1"),
("13","Panasonic 20L Solo Microwave Oven (NN-ST26JMFDG, Silver, 51 Auto Menus)","ST26JMFDG","panasonic-20l-solo-microwave-oven-nn-st26jmfdg-silver-51-auto-menus","Panasonic 20L Solo Microwave Oven (NN-ST26JMFDG, Silver, 51 Auto Menus)","<ul style=\'box-sizing: border-box; margin: 0px 0px 0px 18px; color: rgb(15, 17, 17); padding: 0px; font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\'><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">Warranty: 1 year on product, 1 years on magnetron</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">20L capacity: Suitable for bachelors &amp; small families; power + innovation 800 watts of high power for fast, Even cooking and delicious results</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">Microwave controls 51 pre auto cook menu items, glass turntable; warranty: 1 year on product</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">Compact design: this countertop microwave with Glass turntable is compact, allowing you to devote less space to electronics and more to interior capacity;</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">Control: touch key pad (membrane) is sensitive to touch and easy to clean</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">Also included in the box: turntable, rotating ring, user manual</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17);\">Vapor clean: cleaning your microwave oven is easy</span></li></ul>","-3","1","66","8","34","20","","","15000","17700","24","4248","13452","","18","2700","71Odjpsi1NL._SX679_.jpg|71OFbgyryTL._SX679_.jpg|71q2il9rXTL._SX679_.jpg|71QjOgnv7qL._SX679_.jpg|71WUtWFGDmL._SX679_.jpg","cover_image.jpg","1","0","0","","","","","","","Microwave ","Microwave ","Microwave ","1","1","2022-08-26 23:42:18","2022-09-13 21:59:07","1"),
("14","sports shoes for men","#","sports-shoes-for-men","Latest Stylish Casual sport shoes for men | running shoes for boys | Lace up Lightweight grey shoes for running, walking, gym, trekking, hiking & party Running Shoes For Men  (Grey)","<table class=\"fr-alternate-rows\" style=\"width: 100%;\"><tbody><tr><td style=\"width: 33.1516%;\"><strong>Color :</strong></td><td style=\"width: 66.7393%;\">Grey</td></tr><tr><td style=\"width: 33.1516%;\"><strong>Inner Material :</strong></td><td style=\"width: 66.7393%;\">Soft Breathable fabric</td></tr><tr><td style=\"width: 33.1516%;\"><strong>Outer material :</strong><br></td><td style=\"width: 66.7393%;\">Mesh<br></td></tr><tr><td style=\"width: 33.1516%;\"><strong>Model name :</strong><br></td><td style=\"width: 66.7393%;\">Creta-12 sports shoes for men | Latest Stylish Casual sport shoes for men |<br></td></tr><tr><td style=\"width: 33.1516%;\"><strong>Ideal for :</strong><br></td><td style=\"width: 66.7393%;\">Men</td></tr><tr><td style=\"width: 33.1516%;\"><strong>Occasion :</strong><br></td><td style=\"width: 66.7393%;\">Sports<br></td></tr><tr><td style=\"width: 33.1516%;\"><strong>Sole material :</strong><br></td><td style=\"width: 66.7393%;\">EVA<br></td></tr><tr><td style=\"width: 33.1516%;\"><strong>Closure :</strong><br></td><td style=\"width: 66.7393%;\">Lace-Ups<br></td></tr><tr><td style=\"width: 33.1516%;\"><strong>Upper Pattern :</strong><br></td><td style=\"width: 66.7393%;\">Solid<br></td></tr><tr><td style=\"width: 33.1516%;\"><strong>Care instructions :</strong><br></td><td style=\"width: 66.7393%;\">Wipe with a clean, dry cloth when needed. These footwear are very easy to clean and wash.<br></td></tr></tbody></table><p><span style=\"font-size: 18px;\">These stylish shoes are the perfect inspiration for a fashionable look. The comfortable sole makes sure that your feet stay comfortable throughout the day and you enjoy optimal Grip. Designed to offer comfort at its best, without compromising on style.</span></p>","-5","1","14","7","48","","","","1500","1500","47","705","795","","0","0","109-1093417_transparent-sport-shoes-png-png-download.png|images (1).jpg|images.jpg","cover_image.jpg","1","1","0","","","","","","","Sports Shoes","Sports Shoes","Sports Shoes","1","1","2022-08-26 23:53:11","2022-09-15 04:49:28","1"),
("15","AWG ALL WEATHER GEAR","#","awg-all-weather-gear","AWG ALL WEATHER GEAR Men\'s Spectra Cotton Casual Sports Jacket - Black","<ul style=\'box-sizing: border-box; margin: 0px 0px 0px 18px; color: rgb(15, 17, 17); padding: 0px; font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\'><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; font-size: 14px !important; line-height: 20px !important; color: rgb(15, 17, 17);\"><strong>Sleeve&nbsp;</strong>Type : Full,&nbsp;</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; font-size: 14px !important; line-height: 20px !important; color: rgb(15, 17, 17);\"><strong>Fit Type&nbsp;</strong>: Regular</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; font-size: 14px !important; line-height: 20px !important; color: rgb(15, 17, 17);\"><span style=\'color: rgb(15, 17, 17); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>Manufacturer</span>&nbsp; : <span style=\'color: rgb(86, 89, 89); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>Switz Inc</span>&nbsp;</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; font-size: 14px !important; line-height: 20px !important; color: rgb(15, 17, 17);\"><span style=\'color: rgb(15, 17, 17); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>Item Weight</span>&nbsp; : <span style=\'color: rgb(86, 89, 89); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>440 g</span>&nbsp;</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; font-size: 14px !important; line-height: 20px !important; color: rgb(15, 17, 17);\"><span style=\'color: rgb(15, 17, 17); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>Care Instructions</span>&nbsp; : <span style=\'color: rgb(86, 89, 89); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>Machine Wash</span>&nbsp;</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; font-size: 14px !important; line-height: 20px !important; color: rgb(15, 17, 17);\"><span style=\'color: rgb(15, 17, 17); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>Pattern</span>&nbsp; :&nbsp;<span style=\'color: rgb(86, 89, 89); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>Plain / Solid</span>&nbsp;</span></li></ul>","-4","1","25","7","50","","","","1000","1050","10","105","945","","5","50","51-vVl9RQ4L._UX679_.jpg|61UHJDc+oAL._UX679_.jpg|61wad5614WL._UX679_.jpg|61YDX2fwpFL._UX679_.jpg|81TF+MsZvCL._UX679_.jpg|518O7o2rEXL._UX679_.jpg","cover_image.jpg","1","1","0","replace","10","Damaged, Defective, Item not as described","<p style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; line-height: 1.5; color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">For products requiring installation, Returns valid only when installed by Flipkart authorized personnel.</p><p style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; line-height: 1.5; color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">If you have received a damaged or defective product or if it is not as described, you can raise a replacement request on the Website/App/Mobile site within 10 days of receiving the product.</p><p style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; line-height: 1.5; color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">We will help you troubleshoot any issues you may have, either through online tools, over the phone, and/or through an in-person technical visit. Only one (1) replacement will be provided in the unlikely event that the product is defective. If no defect is confirmed or the issue is not diagnosed within 10 days of delivery, you will be directed to a brand service centre to resolve any subsequent issues.</p><p style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; line-height: 1.5; color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">In the rare event that you receive a damaged mobile, please create a return within 48 hours of switching on the device. Returning post 48 hours may result in your return being rejected.</p><p style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; line-height: 1.5; color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 12px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\">Successful pick-up of the product is subject to the following conditions being met:</p><ul style=\"list-style-type: disc;\"><li>Correct and complete product (with the original brand/product Id/undetached MRP tag/product&#39;s original packaging/freebies and accessories).</li><li>The product should be in unused, undamaged and original condition without any scratches or dents.</li><li>Before returning a Mobile/Laptop/Tablet, the device should be formatted and screen lock should be disabled. iCloud account should be unlocked for Apple devices.</li></ul>"," 1 Year Comprehensive Warranty on Product and 5 Years on Motor from Haier","<table style=\"width: 100%;\"><tbody><tr><td style=\"width: 50%; vertical-align: top;\"><span style=\"color: rgb(135, 135, 135); font-family: Roboto, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><strong>Covered in Warranty : </strong></span><br></td><td style=\"width: 50.0000%;\"><ul style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none;\">All Parts Excluding Outer Cabinet and Plastic Parts from the Date of Purchase will be Covered Under Warranty. This also Covers all Manufacturing Defects</li></ul><br></td></tr><tr><td style=\"width: 50%; vertical-align: top;\"><span style=\"color: rgb(135, 135, 135); font-family: Roboto, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><strong>Not Covered in Warranty : </strong></span><br></td><td style=\"width: 50%; vertical-align: top;\">Plastic Parts, Drain Pipe, Top Lids, Inlet Pipe, Lint Filter and Cabinet are Not Covered in Warranty</td></tr><tr><td style=\"width: 50.0000%;\"><span style=\"color: rgb(135, 135, 135); font-family: Roboto, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\"><strong>Warranty Service Type : </strong></span><br></td><td style=\"width: 50.0000%;\"><ul style=\"box-sizing: border-box; margin: 0px; padding: 0px; color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\"><li style=\"box-sizing: border-box; margin: 0px; padding: 0px; list-style: none;\">Technician Visit</li></ul></td></tr></tbody></table>","WEATHER GEAR","WEATHER GEAR","WEATHER GEAR","1","1","2022-08-27 02:21:33","2022-09-20 03:13:37","1"),
("16","AWG ALL WEATHER GEAR - (Duplicate)","#","awg-all-weather-gear-duplicate","AWG ALL WEATHER GEAR Men\'s Spectra Cotton Casual Sports Jacket - Black","<ul style=\'box-sizing: border-box; margin: 0px 0px 0px 18px; color: rgb(15, 17, 17); padding: 0px; font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\'><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; font-size: 14px !important; line-height: 20px !important; color: rgb(15, 17, 17);\"><strong>Sleeve&nbsp;</strong>Type : Full,&nbsp;</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; font-size: 14px !important; line-height: 20px !important; color: rgb(15, 17, 17);\"><strong>Fit Type&nbsp;</strong>: Regular</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; font-size: 14px !important; line-height: 20px !important; color: rgb(15, 17, 17);\"><span style=\'color: rgb(15, 17, 17); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>Manufacturer</span>&nbsp; : <span style=\'color: rgb(86, 89, 89); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>Switz Inc</span>&nbsp;</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; font-size: 14px !important; line-height: 20px !important; color: rgb(15, 17, 17);\"><span style=\'color: rgb(15, 17, 17); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>Item Weight</span>&nbsp; : <span style=\'color: rgb(86, 89, 89); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>440 g</span>&nbsp;</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; font-size: 14px !important; line-height: 20px !important; color: rgb(15, 17, 17);\"><span style=\'color: rgb(15, 17, 17); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>Care Instructions</span>&nbsp; : <span style=\'color: rgb(86, 89, 89); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>Machine Wash</span>&nbsp;</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; font-size: 14px !important; line-height: 20px !important; color: rgb(15, 17, 17);\"><span style=\'color: rgb(15, 17, 17); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 700; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>Pattern</span>&nbsp; :&nbsp;<span style=\'color: rgb(86, 89, 89); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>Plain / Solid</span>&nbsp;</span></li></ul>","12","1","25","7","50","","","","400","472","62","292.64","179","","18","72","51-vVl9RQ4L._UX679_.jpg|61UHJDc+oAL._UX679_.jpg|61wad5614WL._UX679_.jpg|61YDX2fwpFL._UX679_.jpg|81TF+MsZvCL._UX679_.jpg|518O7o2rEXL._UX679_.jpg","","1","1","0","","","","","","","WEATHER GEAR","WEATHER GEAR","WEATHER GEAR","1","1","2022-09-09 00:00:00","2022-09-13 03:52:19","0");




CREATE TABLE `product_elements` (
  `element_id` int(11) NOT NULL AUTO_INCREMENT,
  `element_name` varchar(45) NOT NULL,
  `attributes` text,
  `display_name` text,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`element_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;


INSERT INTO product_elements VALUES
("1","Size","1,2,3,4,5,77,78,79,80","Size","1","1","2022-08-24 00:09:48","2022-08-24 00:09:48","1"),
("2","Color","6,7,8,9,10,11,12,13","Color","1","0","2022-08-03 11:09:11","0000-00-00 00:00:00","1"),
("3","Fabric","14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32","Marerial","1","0","2022-08-03 11:10:52","0000-00-00 00:00:00","1"),
("4","T-shirt Type","33,34,35,36,37,38,39,40,41,42,43,44,45","Type","1","1","2022-08-03 02:28:28","2022-08-03 11:28:28","1"),
("5","T-shirt Fits","46,47,48,49,50,51,52","Fits","1","0","2022-08-03 11:29:49","0000-00-00 00:00:00","1"),
("6","Wiast Size (jeans)","53,54,55,56,57,58,59,60","Size","1","0","2022-08-03 11:31:52","0000-00-00 00:00:00","1"),
("7","Capacity","61,62,63,64,65,66,67,75,76","Capacity","1","1","2022-08-03 03:02:49","2022-08-03 12:02:49","1"),
("8","Storage","62,63,64,65","Storage","1","1","2022-08-03 02:35:34","2022-08-03 11:35:34","1"),
("9","Quantity","73,74,75,76","Quantity","1","0","2022-08-03 11:59:17","0000-00-00 00:00:00","1");




CREATE TABLE `product_elements_attributes` (
  `elements_attributes_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `element_id` int(11) NOT NULL,
  `attributes_id` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`elements_attributes_id`)
) ENGINE=InnoDB AUTO_INCREMENT=236 DEFAULT CHARSET=latin1;


INSERT INTO product_elements_attributes VALUES
("196","16","1","2,3,4,5","2022-09-13 03:52:19"),
("197","16","2","6,7,10","2022-09-13 03:52:19"),
("198","16","5","51","2022-09-13 03:52:19"),
("202","14","2","10","2022-09-13 04:00:16"),
("203","13","2","10","2022-09-13 04:03:04"),
("204","13","7","76","2022-09-13 04:03:04"),
("205","13","9","76","2022-09-13 04:03:04"),
("206","1","2","10","2022-09-13 04:08:09"),
("207","1","8","63","2022-09-13 04:08:09"),
("208","3","2","10","2022-09-13 04:08:36"),
("209","3","7","64","2022-09-13 04:08:36"),
("210","3","8","63","2022-09-13 04:08:36"),
("214","5","2","11","2022-09-13 04:09:23"),
("215","6","2","9","2022-09-13 04:09:49"),
("216","7","9","73","2022-09-13 04:10:09"),
("219","10","9","75","2022-09-13 04:11:12"),
("220","11","9","76","2022-09-13 04:11:34"),
("221","12","2","10","2022-09-13 04:12:01"),
("225","8","9","74","2022-09-13 04:33:34"),
("226","9","9","74","2022-09-13 04:33:59"),
("230","4","2","9","2022-09-13 04:38:07"),
("231","4","7","62","2022-09-13 04:38:07"),
("232","4","8","65","2022-09-13 04:38:07"),
("233","15","1","2,3,4,5","2022-09-20 03:13:37"),
("234","15","2","6,7,10","2022-09-20 03:13:37"),
("235","15","5","51","2022-09-20 03:13:37");




CREATE TABLE `role` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `role_description` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `created_by` int(10) NOT NULL,
  `updated_by` int(10) DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO role VALUES
("1","Admin","test","1","1","2022-07-19 11:01:04","2022-08-25 22:00:38","1"),
("2","Developer","#","1","1","2022-07-21 23:25:39","2022-08-25 22:00:32","1"),
("3","Vendor","#","1","1","2022-07-21 23:26:03","2022-08-25 22:00:26","1");




CREATE TABLE `role_details` (
  `role_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` varchar(50) COLLATE utf8_bin NOT NULL,
  `menu_id` varchar(100) COLLATE utf8_bin NOT NULL,
  `submenu_id` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `created_by` int(10) NOT NULL,
  `updated_by` int(10) DEFAULT NULL,
  `create_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`role_details_id`)
) ENGINE=InnoDB AUTO_INCREMENT=249 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO role_details VALUES
("220","3","6","11,12","1","","2022-08-25 22:00:26","","1"),
("221","3","7","13","1","","2022-08-25 22:00:26","","1"),
("222","3","15","","1","","2022-08-25 22:00:26","","1"),
("223","2","1","1,2","1","","2022-08-25 22:00:32","","1"),
("224","2","2","3,4","1","","2022-08-25 22:00:32","","1"),
("225","2","3","5,6","1","","2022-08-25 22:00:32","","1"),
("226","2","5","9,10","1","","2022-08-25 22:00:32","","1"),
("227","2","6","11,12","1","","2022-08-25 22:00:32","","1"),
("228","2","7","13","1","","2022-08-25 22:00:32","","1"),
("229","2","8","14,15","1","","2022-08-25 22:00:32","","1"),
("230","2","9","16,17","1","","2022-08-25 22:00:32","","1"),
("231","2","10","18,19,20,23","1","","2022-08-25 22:00:33","","1"),
("232","2","11","21,22","1","","2022-08-25 22:00:33","","1"),
("233","2","12","","1","","2022-08-25 22:00:33","","1"),
("234","2","13","","1","","2022-08-25 22:00:33","","1"),
("235","2","14","24,25","1","","2022-08-25 22:00:33","","1"),
("236","2","15","","1","","2022-08-25 22:00:33","","1"),
("237","1","1","1,2","1","","2022-08-25 22:00:38","","1"),
("238","1","2","3,4","1","","2022-08-25 22:00:38","","1"),
("239","1","3","5,6","1","","2022-08-25 22:00:38","","1"),
("240","1","5","9,10","1","","2022-08-25 22:00:38","","1"),
("241","1","6","11,12","1","","2022-08-25 22:00:38","","1"),
("242","1","7","13","1","","2022-08-25 22:00:38","","1"),
("243","1","8","14,15","1","","2022-08-25 22:00:38","","1"),
("244","1","9","16,17","1","","2022-08-25 22:00:38","","1"),
("245","1","11","21,22","1","","2022-08-25 22:00:38","","1"),
("246","1","12","","1","","2022-08-25 22:00:38","","1"),
("247","1","13","","1","","2022-08-25 22:00:38","","1"),
("248","1","15","","1","","2022-08-25 22:00:38","","1");




CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_image` varchar(100) DEFAULT NULL,
  `slider_title` text,
  `short_description` text,
  `position` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


INSERT INTO slider VALUES
("1","slider-1.jpg","Lorem ipsum dolor sit amet,","","1","1"),
("2","slider-2.jpg","Lorem ipsum dolor sit amet,","","2","1");




CREATE TABLE `stock` (
  `stock_id` int(7) NOT NULL AUTO_INCREMENT COMMENT 'unique identification number',
  `product_id` int(7) NOT NULL COMMENT 'product table unique identification number',
  `onhand_quantity` varchar(20) NOT NULL COMMENT 'total on hand quantity',
  `created_by` int(7) NOT NULL COMMENT 'User unique number when add data',
  `modified_by` int(7) NOT NULL COMMENT 'User unique number when update data',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'data add date time save',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'data update date time save',
  `is_active` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'stock status : 0 - Deactive,  1 - active, 2 - delete  ',
  PRIMARY KEY (`stock_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


INSERT INTO stock VALUES
("1","1","20","1","0","2022-08-24 04:17:52","2022-08-24 04:17:52","1");




CREATE TABLE `stock_details` (
  `stock_details_id` int(7) NOT NULL AUTO_INCREMENT COMMENT 'unique identification number',
  `product_id` int(11) NOT NULL COMMENT 'stock master unique id',
  `status` int(2) NOT NULL COMMENT 'save status : 1 - Add new stock, 2 - Order stock or minus stock',
  `old_stock` int(11) DEFAULT NULL,
  `current_stock` int(10) DEFAULT NULL COMMENT 'current stock',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Add date time when data added',
  PRIMARY KEY (`stock_details_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1 COMMENT='Stock details ';


INSERT INTO stock_details VALUES
("1","1","1","60","100","2022-08-25 23:36:00"),
("2","1","1","50","50","2022-08-26 02:53:18"),
("3","7","1","50","50","2022-09-10 23:02:02"),
("4","7","0","50","47","2022-09-10 23:07:44"),
("5","7","0","47","46","2022-09-10 23:11:32"),
("6","15","0","","-1","2022-09-11 01:49:51"),
("7","13","0","","-1","2022-09-11 01:49:51"),
("8","14","0","","-2","2022-09-11 01:49:51"),
("9","11","0","","-1","2022-09-11 01:49:51"),
("10","15","0","-1","-2","2022-09-12 22:28:29"),
("11","13","0","-1","-2","2022-09-12 22:28:29"),
("12","14","0","-2","-3","2022-09-13 21:51:09"),
("13","15","0","-2","-3","2022-09-13 21:51:09"),
("14","11","0","-1","-2","2022-09-13 21:51:09"),
("15","15","0","-3","-4","2022-09-13 21:59:07"),
("16","13","0","-2","-3","2022-09-13 21:59:07"),
("17","6","0","","-1","2022-09-13 21:59:07"),
("18","4","0","","-1","2022-09-13 22:00:10"),
("19","6","0","-1","-2","2022-09-13 22:03:09"),
("20","14","0","-3","-4","2022-09-14 00:14:47"),
("21","11","0","-2","-3","2022-09-14 03:25:36"),
("22","11","0","-3","-5","2022-09-14 22:41:14"),
("23","14","0","-4","-5","2022-09-15 04:49:28");




CREATE TABLE `submenu_details` (
  `submenu_id` int(10) NOT NULL AUTO_INCREMENT,
  `submenu_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `submenu_link` varchar(100) COLLATE utf8_bin NOT NULL,
  `submenu_icon` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '<i class="append-icon fa fa-fw fa-circle-thin"></i>',
  `submenu_position` int(5) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`submenu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


INSERT INTO submenu_details VALUES
("1","add brand","add-brand","<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>","1","1","1","2022-07-22 11:33:57","2022-07-22 12:40:02","1"),
("2","brand","brand","<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>","2","1","1","2022-07-22 11:34:13","2022-07-22 12:40:32","1"),
("3","add category","add-category","<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>","1","1","1","2022-07-22 11:34:24","2022-07-23 10:23:08","1"),
("4","category","category","<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>","2","1","1","2022-07-22 11:34:34","2022-07-23 10:23:05","1"),
("5","add element","add-elements","<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>","1","1","1","2022-07-22 11:34:47","2022-08-03 07:35:11","1"),
("6","elements","elements","<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>","2","1","1","2022-07-22 11:35:01","2022-08-03 07:35:43","1"),
("7","add unit","add-unit","<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>","1","1","1","2022-07-22 11:35:14","2022-07-23 10:22:52","1"),
("8","unit","unit","<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>","2","1","1","2022-07-22 11:35:26","2022-07-23 10:22:34","1"),
("9","add attributes","add-attributes","<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>","1","1","1","2022-07-22 11:35:38","2022-08-03 08:45:14","1"),
("10","attributes","attributes","<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>","2","1","1","2022-07-22 11:35:50","2022-08-03 08:45:46","1"),
("11","add product","add-product","<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>","1","1","1","2022-07-22 12:44:08","2022-07-23 10:21:58","1"),
("12","product","all-product","<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>","2","1","1","2022-07-22 12:44:21","2022-07-29 23:00:11","1"),
("13","order","order","<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>","1","1","1","2022-07-22 12:44:31","2022-07-23 10:21:39","1"),
("14","Add Blog","#","<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>","1","1","0","2022-07-22 12:44:51","2022-07-29 08:36:00","1"),
("15","blog","#","<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>","2","1","0","2022-07-22 12:45:03","2022-07-29 08:35:52","1"),
("16","add testimonial","add-testimonial","<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>","1","1","1","2022-07-22 12:45:20","2022-07-23 10:21:17","1"),
("17","testimonial","testimonial","<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>","2","1","1","2022-07-22 12:45:31","2022-07-26 14:19:49","1"),
("18","Menu","menu","<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>","1","1","0","2022-07-27 07:10:54","","1"),
("19","Submenu","submenu","<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>","2","1","0","2022-07-27 07:11:24","","1"),
("20","Role","role","<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>","3","1","0","2022-07-27 07:11:34","","1"),
("21","Vendor","vendor","<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>","2","1","0","2022-07-27 07:35:27","","1"),
("22","Add Vendor","add-vendor","<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>","1","1","0","2022-07-27 07:35:40","","1"),
("23","User","user","<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>","4","1","0","2022-07-27 07:59:43","","1"),
("24","Export Database","export-database","<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>","1","1","0","2022-08-22 15:33:55","","1"),
("25","SQL Operations","sql-operation","<i class=\"append-icon fa fa-fw fa-circle-thin\"></i>","2","1","1","2022-08-22 15:35:31","2022-08-22 15:39:38","1");




CREATE TABLE `testimonial` (
  `testimonial_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'unique id to identify the row of this table',
  `customer_name` varchar(45) DEFAULT NULL COMMENT 'customer name',
  `company_name` varchar(45) DEFAULT NULL COMMENT 'customer''s company name',
  `designation` varchar(100) DEFAULT NULL,
  `customer_review` text COMMENT 'customer''s review',
  `customer_image` varchar(45) DEFAULT NULL COMMENT 'image of the customer',
  `testimonial_date` timestamp NULL DEFAULT NULL COMMENT 'date the customer gave review',
  `created_by` int(11) DEFAULT NULL COMMENT 'id of user who inserted this data',
  `modified_by` int(11) DEFAULT NULL COMMENT 'id of user who updated this data',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'data inserted date',
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'data updated date',
  `is_active` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'field Is Active',
  PRIMARY KEY (`testimonial_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='review details of client';






CREATE TABLE `unit` (
  `unit_id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_in` varchar(45) NOT NULL,
  `unit` varchar(45) NOT NULL,
  `created_by` int(11) NOT NULL,
  `modified_by` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`unit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






CREATE TABLE `user` (
  `user_id` int(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile_photo` text,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `last_login` datetime NOT NULL,
  `last_logout` datetime NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;


INSERT INTO user VALUES
("1","Admin","2","devloperproactii@gmail.com","devloper","21232f297a57a5a743894a0e4a801fc3","","2022-04-13 11:35:19","2022-09-20 00:15:20","2022-09-20 00:15:20","0000-00-00 00:00:00","1"),
("2","Roshni mistry","1","mistryroshni13@gmil.com","roshnimistry","e10adc3949ba59abbe56e057f20f883e","","2022-07-22 14:08:58","2022-08-29 22:54:40","2022-08-29 22:54:40","0000-00-00 00:00:00","1"),
("3","dainik tandel","3","dainik.tandel@gmail.com","dainiktandel","21232f297a57a5a743894a0e4a801fc3","","2022-07-22 14:26:35","2022-07-29 22:23:58","2022-07-29 18:53:58","0000-00-00 00:00:00","1");




CREATE TABLE `vendor` (
  `vendor_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `gstin_no` varchar(100) DEFAULT NULL,
  `pan_no` varchar(100) DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `pin_code` int(11) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `bank_name` text,
  `branch_code` text,
  `ifsc_code` text,
  `accountno` text,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `is_active` int(11) DEFAULT '1',
  PRIMARY KEY (`vendor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


INSERT INTO vendor VALUES
("1","vendor-1","vendor1@gmail.com","9898989898","7c3613dba5171cb6027c67835dd3b9d4","","Company-1","05ABDCE1234F1Z2","ABCTY1234D","","Char Rasta","Vapi","Gujarat","396321","IN","","","","","2022-07-23 09:40:06","2022-07-23 09:52:02","2022-09-09 02:20:07","1"),
("2","vendor-2","vendor2@gmail.com","9696969696","7c3613dba5171cb6027c67835dd3b9d4","","Company-2","05ABDCE1234F1Z2","ABCTY1234D","","gunjan","vapi","gujarat","396321","IN","","","","","2022-07-23 09:57:16","2022-09-20 01:46:41","2022-08-25 22:46:14","1");




CREATE TABLE `whish_list` (
  `whish_list_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`whish_list_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;


INSERT INTO whish_list VALUES
("6","1","14"),
("7","1","12"),
("8","1","7"),
("9","1","5");


