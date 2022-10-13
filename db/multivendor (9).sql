

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
  `return_or_replace` text,
  `return_replace_validity` text,
  `policy_covers` text,
  `return_policy` longtext,
  `created_by` int(9) NOT NULL,
  `modified_by` int(9) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;


INSERT INTO category VALUES
("1","Electronics","electronics","0","9,10,11,12,13,14,16,17,52","1","","2,7,8","","","Electronics","","","","","","1","1","2022-08-24 00:04:24","2022-08-30 21:41:03","1"),
("2","Grocery","grocery","0","18,19,20,21,22,23,24,25,53","2","","9","","","Grocery","","","","","","1","0","2022-08-24 00:07:31","2022-08-24 01:56:02","1"),
("3","Appliances","appliances","0","54","3","","2,7,8","","","Appliances","","","","","","1","0","2022-08-24 00:12:15","2022-08-24 01:56:11","1"),
("4","Mobiles","mobiles","0","26,55","4","","2,7,8","","","Mobiles","","","","","","1","0","2022-08-24 00:13:18","2022-08-24 01:56:20","1"),
("5","Personal Care","personal-care","0","35,36,37,38,39,56","5","","2,9","","","Personal Care","","","","","","1","0","2022-08-24 00:15:15","2022-08-24 01:56:48","1"),
("6","Furniture","furniture","0","40,41,42,43,44,45,46,47,57","6","","1,2,7","","","Furniture","","","","","","1","0","2022-08-24 00:22:07","2022-08-24 01:57:02","1"),
("7","Sports","sports","0","48,49,50,58","7","","1,2,4,5","","","Sports","","","","","","1","1","2022-08-24 00:24:44","2022-08-30 01:50:52","1"),
("8","Home Appliances","home-appliances","0","27,28,29,30,31,32,33,34","8","","2,3,7,9","","","Home Appliances","","","","","","1","0","2022-08-24 00:26:22","2022-08-24 00:58:02","1"),
("9","Laptops & Desktops","laptops-&-desktops","1","","1,9","","","","","Laptops & Desktops","","","","","","1","0","2022-08-24 00:28:33","2022-08-24 00:28:33","1"),
("10","Headphones & Speakers","headphones-&-speakers","1","","1,10","","","","","Headphones & Speakers","","","","","","1","0","2022-08-24 00:29:09","2022-08-24 00:29:09","1"),
("11","Tablets","tablets","1","","1,11","","","","","Tablets","","","","","","1","0","2022-08-24 00:29:35","2022-08-24 00:29:35","1"),
("12","Smartwatches & Bands","smartwatches-&-bands","1","","1,12","","","","","Smartwatches & Bands","","","","","","1","0","2022-08-24 00:30:06","2022-08-24 00:30:06","1"),
("13","Powerbanks","powerbanks","1","","1,13","","","","","Powerbanks","","","","","","1","0","2022-08-24 00:30:32","2022-08-24 00:30:32","1"),
("14","Styling Gadgets","styling-gadgets","1","","1,14","","","","","Styling Gadgets","","","","","","1","0","2022-08-24 00:31:09","2022-08-24 00:31:09","1"),
("15","Mobile Accessories","mobile-accessories","4","","4,15","","","","","Mobile Accessories","","","","","","1","1","2022-08-24 00:31:38","2022-08-24 00:45:47","1"),
("16","Computer Accessories","computer-accessories","1","","1,16","","","","","Computer Accessories","","","","","","1","0","2022-08-24 00:32:03","2022-08-24 00:32:03","1"),
("17","Data Storage","data-storage","1","","1,17","","","","","Data Storage","","","","","","1","0","2022-08-24 00:33:31","2022-08-24 00:33:31","1"),
("18","Maslala,Oil & More","maslala-oil-&-more","2","","2,18","","","","","Maslala,Oil & More","","","","","","1","0","2022-08-24 00:38:34","2022-08-24 00:38:34","1"),
("19","Buscuits & Cookies","buscuits-&-cookies","2","","2,19","","","","","Buscuits & Cookies","","","","","","1","0","2022-08-24 00:39:05","2022-08-24 00:39:05","1"),
("20","Beverages","beverages","2","","2,20","","","","","Beverages","","","","","","1","0","2022-08-24 00:39:33","2022-08-24 00:39:33","1"),
("21","Atta , Rice & Dal","atta-rice-&-dal","2","","2,21","","","","","Atta , Rice & Dal","","","","","","1","0","2022-08-24 00:40:22","2022-08-24 00:40:22","1"),
("22","Personal Care","personal-care","2","","2,22","","","","","Personal Care","","","","","","1","0","2022-08-24 00:40:41","2022-08-24 00:40:41","1"),
("23","HouseHold & Cleaning","household-&-cleaning","2","","2,23","","","","","HouseHold & Cleaning","","","","","","1","0","2022-08-24 00:41:10","2022-08-24 00:41:10","1"),
("24","Home & kitchen","home-&-kitchen","2","","2,24","","","","","Home & kitchen","","","","","","1","0","2022-08-24 00:41:32","2022-08-24 00:41:32","1"),
("25","Dairy Products","dairy-products","2","","2,25","","","","","Dairy Products","","","","","","1","0","2022-08-24 00:41:53","2022-08-24 00:41:53","1"),
("26","Smartphones","smartphones","4","","4,26","","","","","Smartphones","","","","","","1","0","2022-08-24 00:46:12","2022-08-24 00:46:12","1"),
("27","Televisions","televisions","8","","8,27","","","","","Televisions","","","","","","1","0","2022-08-24 00:50:52","2022-08-24 00:50:52","1"),
("28","Washing Machine","washing-machine","8","","8,28","","","","","Washing Machine","","","","","","1","0","2022-08-24 00:51:48","2022-08-24 00:51:48","1"),
("29","Refrigerator","refrigerator","8","","8,29","","","","","Refrigerator","","","","","","1","0","2022-08-24 00:52:42","2022-08-24 00:52:42","1"),
("30","Air Cooler","air-cooler","8","","8,30","","","","","Air Cooler ","","","","","","1","0","2022-08-24 00:53:29","2022-08-24 00:53:29","1"),
("31","Water Purifier","water-purifier","8","","8,31","","","","","Water Purifier","","","","","","1","0","2022-08-24 00:54:49","2022-08-24 00:54:49","1"),
("32","Air Conditioners","air-conditioners","8","","8,32","","","","","Air Conditioners","","","","","","1","0","2022-08-24 00:55:39","2022-08-24 00:55:39","1"),
("33","Jucier Mixer Grinders","jucier-mixer-grinders","8","","8,33","","","","","Jucier Mixer Grinders","","","","","","1","0","2022-08-24 00:56:22","2022-08-24 00:56:22","1"),
("34","Microwaves","microwaves","8","","8,34","","","","","Microwaves","","","","","","1","0","2022-08-24 00:58:02","2022-08-24 00:58:02","1"),
("35","Skin Care","skin-care","5","","5,35","","","","","Skin Care","","","","","","1","0","2022-08-24 01:45:51","2022-08-24 01:45:52","1"),
("36","Hair Care","hair-care","5","","5,36","","","","","Hair Care","","","","","","1","0","2022-08-24 01:46:11","2022-08-24 01:46:11","1"),
("37","Make-Up","make-up","5","","5,37","","","","","Make-Up","","","","","","1","0","2022-08-24 01:46:33","2022-08-24 01:46:33","1"),
("38","Men\'s Grooming","men\'s-grooming","5","","5,38","","","","","Men\'s Grooming","","","","","","1","0","2022-08-24 01:46:53","2022-08-24 01:46:54","1"),
("39","Frangraneces","frangraneces","5","","5,39","","","","","Frangraneces","","","","","","1","0","2022-08-24 01:47:22","2022-08-24 01:47:22","1"),
("40","Office Chair","office-chair","6","","6,40","","","","","Office Chair","","","","","","1","0","2022-08-24 01:48:12","2022-08-24 01:48:12","1"),
("41","Beds","beds","6","","6,41","","","","","Beds","","","","","","1","0","2022-08-24 01:48:27","2022-08-24 01:48:27","1"),
("42","Sofas","sofas","6","","6,42","","","","","Sofas","","","","","","1","0","2022-08-24 01:48:45","2022-08-24 01:48:45","1"),
("43","Wardrobes","wardrobes","6","","6,43","","","","","Wardrobes","","","","","","1","0","2022-08-24 01:49:18","2022-08-24 01:49:18","1"),
("44","Laptop Tables","laptop-tables","6","","6,44","","","","","Laptop Tables","","","","","","1","0","2022-08-24 01:49:48","2022-08-24 01:49:48","1"),
("45","Mattresses","mattresses","6","","6,45","","","","","Mattresses","","","","","","1","0","2022-08-24 01:50:14","2022-08-24 01:50:14","1"),
("46","TV Units","tv-units","6","","6,46","","","","","TV Units","","","","","","1","0","2022-08-24 01:50:39","2022-08-24 01:50:39","1"),
("47","Bean bags","bean-bags","6","","6,47","","","","","Bean bags","","","","","","1","0","2022-08-24 01:51:34","2022-08-24 01:51:34","1"),
("48","Sports Shoes","sports-shoes","7","","7,48","","","","","Sports Shoes","","","","","","1","0","2022-08-24 01:52:31","2022-08-24 01:52:31","1"),
("49","Sportswear","sportswear","7","","7,49","","","","","Sportswear","","","","","","1","0","2022-08-24 01:53:55","2022-08-24 01:53:55","1"),
("50","Sports Gear","sports-gear","7","","7,50","","","","","Sports Gear","","","","","","1","0","2022-08-24 01:54:14","2022-08-24 01:54:14","1"),
("51","Others","others","0","","51","","1,2,3,4,5,6,7,8,9","","","Others","","","","","","1","0","2022-08-24 01:55:35","2022-08-24 01:55:35","1"),
("52","Other","other","1","","1,52","","","","","Other","","","","","","1","0","2022-08-24 01:55:51","2022-08-24 01:55:51","1"),
("53","Other","other","2","","2,53","","","","","Other","","","","","","1","0","2022-08-24 01:56:02","2022-08-24 01:56:02","1"),
("54","Other","other","3","","3,54","","","","","Other","","","","","","1","0","2022-08-24 01:56:11","2022-08-24 01:56:11","1"),
("55","Other","other","4","","4,55","","","","","Other","","","","","","1","0","2022-08-24 01:56:20","2022-08-24 01:56:20","1"),
("56","Other","other","5","","5,56","","","","","Other","","","","","","1","0","2022-08-24 01:56:48","2022-08-24 01:56:48","1"),
("57","Other","other","6","","6,57","","","","","Other","","","","","","1","0","2022-08-24 01:57:02","2022-08-24 01:57:02","1"),
("58","Other","other","7","","7,58","","","","","Other","","","","","","1","0","2022-08-24 01:57:32","2022-08-24 01:57:32","1"),
("59","Clothing","clothing","0","60,61,62,63","59","","1,2,3,4,5,6","","","Clothing","","return,replace","10","All return reasons","<p><span style=\'color: rgb(15, 17, 17); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>Full Refund, Exchange with a different size/color</span></p>","1","1","2022-09-26 23:29:59","2022-09-27 02:22:17","1"),
("60","Women","women","59","64,65,66","59,60","","","","","Women\'s Cloting","","0","0","","","1","0","2022-09-26 23:33:41","2022-09-26 23:37:52","1"),
("61","Men","men","59","67,68,69,70,71","59,61","","","","","Men\'s Clothing","","0","0","","","1","0","2022-09-26 23:34:09","2022-09-27 00:10:51","1"),
("62","Kids","kids","59","72,73,74","59,62","","","","","Kids wear","","0","0","","","1","0","2022-09-26 23:34:40","2022-09-27 00:29:34","1"),
("63","Other","other","59","","59,63","","","","","other","","0","0","","","1","0","2022-09-26 23:34:54","2022-09-26 23:34:54","1"),
("64","Western Wear","western-wear","60","","59,60,64","","","","","Western Wear for women","","0","0","","","1","0","2022-09-26 23:37:19","2022-09-26 23:37:19","1"),
("65","Ethnic Wear","ethnic-wear","60","","59,60,65","","","","","Ethnic Wear","","0","0","","","1","0","2022-09-26 23:37:34","2022-09-26 23:37:34","1"),
("66","Sportswear","sportswear","60","","59,60,66","","","","","Sportswear for women","","0","0","","","1","0","2022-09-26 23:37:52","2022-09-26 23:37:52","1"),
("67","T-Shirts & Polos","t-shirts-&-polos","61","","59,61,67","","","","","T-Shirts & Polos for Mens","","0","0","","","1","0","2022-09-26 23:39:40","2022-09-26 23:39:40","1"),
("68","Shirts","shirts","61","","59,61,68","","","","","Shirts for Mens","","0","0","","","1","0","2022-09-26 23:39:55","2022-09-26 23:39:55","1"),
("69","Jeans","jeans","61","","59,61,69","","","","","Jeans for Men","","0","0","","","1","0","2022-09-26 23:40:17","2022-09-26 23:40:17","1"),
("70","Sportswear","sportswear","61","","59,61,70","","","","","Sportswear for Mens","","0","0","","","1","0","2022-09-26 23:40:39","2022-09-26 23:40:39","1"),
("71","Winter Wear","winter-wear","61","","59,61,71","","","","","Winter Wear for Men","","0","0","","","1","0","2022-09-27 00:10:51","2022-09-27 00:10:51","1"),
("72","Tops & Tees","tops-&-tees","62","","59,62,72","","","","","Tops & Tees","","0","0","","","1","0","2022-09-27 00:28:16","2022-09-27 00:28:16","1"),
("73","Bottom Wear","bottom-wear","62","","59,62,73","","","","","Bottom Wear for Kids","","0","0","","","1","0","2022-09-27 00:28:53","2022-09-27 00:28:53","1"),
("74","Winter Wear","winter-wear","62","","59,62,74","","","","","Winter Wear","","0","0","","","1","0","2022-09-27 00:29:34","2022-09-27 00:29:34","1");




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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;


INSERT INTO customer_address VALUES
("5","2","dainik","tandel","sagarvsl6@gmail.com","7894561238","10-abc,xyz,pqr","vapi","Gujarat","396001","India","home","1","2","","2022-09-10 00:00:00","2022-09-14 22:53:23","1"),
("20","1","Roshni","Mistry","mistryroshni13@gmil.com","08866594677","test,30 valsad","valsad","Haryana","3963001","India","home","1","1","","2022-09-21 00:00:00","2022-09-23 22:22:39","1"),
("21","1","Sagar","vslsix","sagarvsl6@gmail.com","7894561234","test\nApt","City","Dhofar Governorate","396001","Oman","work","0","1","","2022-09-21 00:00:00","2022-09-23 22:22:39","1");




CREATE TABLE `customer_cart` (
  `cart_id` int(5) NOT NULL AUTO_INCREMENT,
  `customer_id` int(5) NOT NULL,
  `product_id` int(5) NOT NULL,
  `quantity` int(5) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;






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
  `vendor_id` int(11) DEFAULT NULL,
  `product_name` text,
  `quantity` int(7) NOT NULL,
  `mrp_price` double DEFAULT NULL,
  `net_price` varchar(20) NOT NULL,
  `total_amt` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `discount_amt` double DEFAULT NULL,
  `gst` int(11) DEFAULT NULL,
  `gst_amt` double DEFAULT NULL,
  `return_or_replace` text,
  `return_replace_validity` int(11) DEFAULT NULL,
  `created_by` int(7) NOT NULL,
  `modified_by` int(7) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`orderdetail_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;


INSERT INTO order_details VALUES
("1","1","6","1","Dennis Lingo Men Shirt","1","2071","683","683","67","1387.57","12","221.88","return,replace","10","0","0","2022-09-27 21:18:08","2022-09-27 22:35:35","0"),
("2","2","4","1","Allen Solly Women\'s Regular fit T-Shirt","1","1231","616","616","50","615.5","12","131.88","return,replace","7","0","0","2022-09-27 21:20:26","2022-09-27 22:35:41","0"),
("3","3","2","1","Casual Regular Sleeves Floral Print Women Maroon Top","1","1679","638","638","62","1040.98","12","179.88","return,replace","10","0","0","2022-09-28 04:09:21","2022-09-28 04:09:21","0");




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
  `delivery_date` date DEFAULT NULL,
  `delivery_status_id` int(11) NOT NULL COMMENT 'delivery status unique identification number',
  `shipping_address` longtext,
  `created_by` int(5) NOT NULL,
  `modified_by` int(5) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;


INSERT INTO orders VALUES
("1","OD202223-11664293688","1","1","1","2071","683","221.88","1387.57","","","0","2022-09-27","","1","<strong>Roshni Mistry</strong><br>test,30 valsad ,<br>valsad , Haryana ,<br>India - 3963001<br>Phone no : 08866594677","0","0","2022-09-27 21:18:08","2022-09-27 21:18:08","1"),
("2","OD202223-11664293826","1","1","1","1231","616","131.88","615.5","","","0","2022-09-27","","1","<strong>Roshni Mistry</strong><br>test,30 valsad ,<br>valsad , Haryana ,<br>India - 3963001<br>Phone no : 08866594677","0","0","2022-09-27 21:20:26","2022-09-27 21:20:26","1"),
("3","OD202223-11664318361","1","1","1","1679","638","179.88","1040.98","","","0","2022-09-28","","1","<strong>Roshni Mistry</strong><br>test,30 valsad ,<br>valsad , Haryana ,<br>India - 3963001<br>Phone no : 08866594677","0","0","2022-09-28 04:09:21","2022-09-28 04:09:21","1");




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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;


INSERT INTO payment_details VALUES
("1","cod","1","1","683","2022-09-27","1","0","0","2022-09-27 21:18:08","2022-09-27 21:18:08","1"),
("2","cod","1","2","616","2022-09-27","1","0","0","2022-09-27 21:20:26","2022-09-27 21:20:26","1"),
("3","cod","1","3","638","2022-09-28","1","0","0","2022-09-28 04:09:21","2022-09-28 04:09:21","1");




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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;


INSERT INTO product_details VALUES
("2","Casual Regular Sleeves Floral Print Women Maroon Top","Product-01","casual-regular-sleeves-floral-print-women-maroon-top","Casual Regular Sleeves Floral Print Women Maroon Top","<table style=\"width: 100%;\"><tbody><tr><td style=\"width: 35.5769%;\"><span style=\"color: rgb(135, 135, 135); font-family: Roboto, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 500; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Neck</span><br></td><td style=\"width: 64.1026%;\"><span style=\"color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Mandarin Collar</span>&nbsp;</td></tr><tr><td style=\"width: 35.5769%;\"><span style=\"color: rgb(135, 135, 135); font-family: Roboto, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 500; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Sleeve Style</span><br></td><td style=\"width: 64.1026%;\"><span style=\"color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Regular Sleeves</span><br></td></tr><tr><td style=\"width: 35.5769%;\"><span style=\"color: rgb(135, 135, 135); font-family: Roboto, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 500; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Sleeve Length</span><br></td><td style=\"width: 64.1026%;\"><span style=\"color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">3/4 Sleeve</span><br></td></tr><tr><td style=\"width: 35.5769%;\"><span style=\"color: rgb(135, 135, 135); font-family: Roboto, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 500; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Fit</span><br></td><td style=\"width: 64.1026%;\"><span style=\"color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Regular</span>&nbsp;</td></tr><tr><td style=\"width: 35.5769%;\"><span style=\"color: rgb(135, 135, 135); font-family: Roboto, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 500; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Fabric</span><br></td><td style=\"width: 64.1026%;\"><span style=\"color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Pure Cotton</span><br></td></tr><tr><td style=\"width: 35.5769%;\"><span style=\"color: rgb(135, 135, 135); font-family: Roboto, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 500; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Type</span><br></td><td style=\"width: 64.1026%;\"><span style=\"color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Regular Top</span><br></td></tr><tr><td style=\"width: 35.5769%;\"><span style=\"color: rgb(135, 135, 135); font-family: Roboto, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 500; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Color</span><br></td><td style=\"width: 64.1026%;\"><span style=\"color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Maroon</span>&nbsp;</td></tr><tr><td style=\"width: 35.5769%;\"><span style=\"color: rgb(135, 135, 135); font-family: Roboto, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 500; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">Style Code</span><br></td><td style=\"width: 64.1026%;\"><span style=\"color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\">KK104MH</span>&nbsp;</td></tr></tbody></table>","50","1","13","59","64","","","","1499","1679","62","1040.98","638","","12","179.88","61Fxn7u8yGL._UY679_.jpg|71Ae0QRs96L._UY679_.jpg|71LGVM1nBAL._UY679_.jpg|71rciujqJGL._UY679_.jpg|711QuZlXbrL._UY679_.jpg","cover_image.jpg","1","0","0","","","Casual Regular Sleeves","Casual Regular Sleeves","Casual Regular Sleeves","1","1","2022-09-27 01:47:56","2022-09-27 03:15:24","1"),
("3","Greciilooks Women\'s Casual Digital Printed Shirt Ruffle Sleeve Tops","Product-02","greciilooks-womens-casual-digital-printed-shirt-ruffle-sleeve-tops","Floral Printed Shaded Shirt for Women","<table style=\"width: 100%;\"><tbody><tr><td style=\"width: 50.0000%;\"><span style=\'color: rgb(15, 17, 17); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>Care Instructions:</span><br></td><td style=\"width: 50.0000%;\"><span style=\'color: rgb(15, 17, 17); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>Dry Clean Only</span>&nbsp;</td></tr><tr><td style=\"width: 50.0000%;\"><span style=\'color: rgb(15, 17, 17); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>Fit Type</span><br></td><td style=\"width: 50.0000%;\"><span style=\'color: rgb(15, 17, 17); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>Regular Fit</span>&nbsp;</td></tr><tr><td style=\"width: 50.0000%;\"><span style=\'color: rgb(15, 17, 17); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>Fabric</span><br></td><td style=\"width: 50.0000%;\"><span style=\'color: rgb(15, 17, 17); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>Rayon White shirt for women</span><br></td></tr><tr><td style=\"width: 50.0000%;\"><span style=\'color: rgb(15, 17, 17); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>Sleeve Type</span><br></td><td style=\"width: 50.0000%;\"><span style=\'color: rgb(15, 17, 17); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>Half sleeve shirt Button Down shirt</span><br></td></tr><tr><td style=\"width: 50.0000%;\"><span style=\'color: rgb(15, 17, 17); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>OCCASION&nbsp;</span><br></td><td style=\"width: 50.0000%;\"><span style=\'color: rgb(15, 17, 17); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;\'>Casual &amp; Festive, Party Wear, Highlight : Embellished With Buttons</span><br></td></tr></tbody></table><p><br></p><ul style=\'box-sizing: border-box; margin: 0px 0px 0px 18px; color: rgb(15, 17, 17); padding: 0px; font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;\'><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\"><strong>IMPORTANT NOTE :-</strong> Please Confirm Your Size Before Ordering The Product Using Size Chart Enclosed With The Product. :: There Might Be Minor Color Variation Between Actual Product And Image Shown On Screen Due To Lighting On The Photography.</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">This well-fitted, comfortable tee is stitched to perfection and can be worn by both men and women.</span></li></ul>","50","2","22","59","64","","","","359","377","","0","377","","5","17.95","71LMGs6dccL._UY679_.jpg|71xr4Euv9iL._UY679_.jpg|81NNTyDbdAL._UY679_.jpg|81tYm5LvsYL._UY679_.jpg|81-Wa745J0L._UY679_.jpg|81xtjx-EYfL._UY679_.jpg","cover_image.jpg","1","0","0","","","Floral Printed","Floral Printed","Floral Printed","1","1","2022-09-27 02:08:51","2022-09-27 03:12:40","1"),
("4","Allen Solly Yellow Womens Regular fit T-Shirt","Product-03","allen-solly-yellow-womens-regular-fit-t-shirt","Allen Solly Women\'s Regular fit T-Shirt","<ul><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Care Instructions: Machine Wash</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Fit Type: regular fit</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Occasion : Casual</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Fit : Regular Fit</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Material : 95% Cotton and 5% Elastane</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Neck : Polo Neck</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Pattern : Textured</span></li></ul>","100","1","12","59","64","","","","1099","1231","50","615.5","616","","12","131.88","81ba9TOk4mL._SX522._SX._UX._SY._UY_.jpg|81duyv-ifNL._SX522._SX._UX._SY._UY_.jpg|81pl8fnsE5L._SX522._SX._UX._SY._UY_.jpg|91EiZlO4hCL._SX522._SX._UX._SY._UY_.jpg|91MfCWLBI8L._SX522._SX._UX._SY._UY_.jpg","cover_image.jpg","1","0","0","","","Regular fit T-Shirt","Regular fit T-Shirt","Regular fit T-Shirt","1","1","2022-09-27 02:42:13","2022-09-29 01:57:24","1"),
("5","Allen Solly Pink Womens Regular fit T-Shirt","Product-05","allen-solly-pink-womens-regular-fit-t-shirt","Allen Solly Women\'s Regular fit T-Shirt","<ul><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Care Instructions: Machine Wash</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Fit Type: regular fit</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Occasion : Casual</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Fit : Regular Fit</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Material : 95% Cotton and 5% Elastane</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Neck : Polo Neck</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Pattern : Textured</span></li></ul>","100","1","12","59","64","","","","1099","1231","50","615.5","616","","12","131.88","71ZNyHI8DGL._SX522._SX._UX._SY._UY_.jpg|81lMlzL6oaL._SX522._SX._UX._SY._UY_.jpg|81U7oUSUhJL._SX522._SX._UX._SY._UY_.jpg|81xMej+Yg1L._SX522._SX._UX._SY._UY_.jpg|91ePds0EXrL._SX522._SX._UX._SY._UY_ (1).jpg|819fwBHyTDL._SX522._SX._UX._SY._UY_.jpg","cover_image.jpg","1","0","0","","","Regular fit T-Shirt","Regular fit T-Shirt","Regular fit T-Shirt","1","1","2022-09-27 00:00:00","2022-09-29 01:57:07","1"),
("6","Dennis Lingo Men Shirt","B0B7RKFPH1","dennis-lingo-men-shirt","Dennis Lingo Men Shirt","<ul><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Care Instructions: Machine Wash</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Fit Type: Slim Fit</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Fabric - 100% Premium Cotton, Pre-Washed for extremely soft finish and Guaranteed 0% Shrinkage Post Washing</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Style - Enhance your look by wearing this Casual Stylish Men&#39;s shirt, Team it with a pair of tapered denims Or Solid Chinos and Loafers for a fun Smart Casual look</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Fit Type - Modern Slim Fit. Size chart - S-38, M-40, L-42, XL-44, XXL-46. Please Check the Size chart before Ordering for the Perfect Fit</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">About the Brand DENNIS LINGO - Finding Basic Menswear for daily use can be hard among todays Over priced Fast fashion world, where trends change daily. That&rsquo;s why we started Dennis Lingo, to create a one stop shop for premium essential clothing for everyday use at lowest prices and bring Basics back in trend.</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Closure Type: Button; Collar Style: Spread</span></li></ul>","50","1","21","59","68","","","","1849","2071","67","1387.57","683","","12","221.88","51fINxhUNwL._SY679._SX._UX._SY._UY_.jpg|51smAeTCuFL._SX679._SX._UX._SY._UY_.jpg|51Usps+YB1L._SY679._SX._UX._SY._UY_.jpg|61hZHfF+N-L._SY679._SX._UX._SY._UY_.jpg","cover_image.jpg","1","0","0","","","","","","1","0","2022-09-27 03:34:15","2022-09-27 03:34:15","1"),
("7","Dennis Lingo Men Shirt","B08CKTCGWT","dennis-lingo-men-shirt","Dennis Lingo Men Shirt","<ul><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Care Instructions: Machine Wash</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Fit Type: Slim Fit</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Fabric - 100% Premium Cotton, Pre-Washed for extremely soft finish and Guaranteed 0% Shrinkage Post Washing</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Style - Enhance your look by wearing this Casual Stylish Men\'s shirt, Team it with a pair of tapered denims Or Solid Chinos and Loafers for a fun Smart Casual look</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Fit Type - Modern Slim Fit. Size chart - S-38, M-40, L-42, XL-44, XXL-46. Please Check the Size chart before Ordering for the Perfect Fit</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">About the Brand DENNIS LINGO - Finding Basic Menswear for daily use can be hard among todays Over priced Fast fashion world, where trends change daily. That’s why we started Dennis Lingo, to create a one stop shop for premium essential clothing for everyday use at lowest prices and bring Basics back in trend.</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Closure Type: Button; Collar Style: Spread</span></li></ul>","50","1","21","59","68","","","","1849","2071","73","1511.83","559","","12","221.88","61JipNNbkZL._SX679._SX._UX._SY._UY_.jpg|512+G95WuhL._SY679._SX._UX._SY._UY_.jpg|613h3u6cvJL._SY679._SX._UX._SY._UY_ (1).jpg|613h3u6cvJL._SY679._SX._UX._SY._UY_.jpg|618EE6mXecL._SY679._SX._UX._SY._UY_.jpg","cover_image.jpg","1","0","0","","","","","","1","1","2022-09-27 00:00:00","2022-09-27 03:38:36","1"),
("8","Allen Solly Pink Womens Regular fit T-Shirt","Product-05","allen-solly-pink-womens-regular-fit-t-shirt","Allen Solly Women\'s Regular fit T-Shirt","<ul><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Care Instructions: Machine Wash</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Fit Type: regular fit</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Occasion : Casual</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Fit : Regular Fit</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Material : 95% Cotton and 5% Elastane</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Neck : Polo Neck</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Pattern : Textured</span></li></ul>","100","1","12","59","64","","","","1199","1343","50","671.5","672","","12","143.88","71ZNyHI8DGL._SX522._SX._UX._SY._UY_.jpg|81lMlzL6oaL._SX522._SX._UX._SY._UY_.jpg|81U7oUSUhJL._SX522._SX._UX._SY._UY_.jpg|91ePds0EXrL._SX522._SX._UX._SY._UY_.jpg|91IME0Jo+jL._SX522._SX._UX._SY._UY_.jpg","cover_image.jpg","1","0","0","","","Regular fit T-Shirt","Regular fit T-Shirt","Regular fit T-Shirt","1","1","2022-09-29 00:00:00","2022-09-29 01:56:53","1"),
("9","Allen Solly Yellow Womens Regular fit T-Shirt","Product-03","allen-solly-yellow-womens-regular-fit-t-shirt","Allen Solly Women\'s Regular fit T-Shirt","<ul><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Care Instructions: Machine Wash</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Fit Type: regular fit</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Occasion : Casual</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Fit : Regular Fit</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Material : 95% Cotton and 5% Elastane</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Neck : Polo Neck</span></li><li style=\"box-sizing: border-box; list-style: disc; overflow-wrap: break-word; margin: 0px;\"><span style=\"box-sizing: border-box; color: rgb(15, 17, 17); overflow-wrap: break-word; display: block;\">Pattern : Textured</span></li></ul>","100","1","12","59","64","","","","1199","1343","50","671.5","672","","12","143.88","81ba9TOk4mL._SX522._SX._UX._SY._UY_.jpg|81duyv-ifNL._SX522._SX._UX._SY._UY_.jpg|81pl8fnsE5L._SX522._SX._UX._SY._UY_.jpg|91EiZlO4hCL._SX522._SX._UX._SY._UY_.jpg|91MfCWLBI8L._SX522._SX._UX._SY._UY_.jpg","cover_image.jpg","1","0","0","","","Regular fit T-Shirt","Regular fit T-Shirt","Regular fit T-Shirt","1","1","2022-09-29 00:00:00","2022-09-29 01:56:40","1");




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
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;


INSERT INTO product_elements_attributes VALUES
("47","3","1","1,2,3","2022-09-27 03:12:40"),
("48","3","2","11","2022-09-27 03:12:40"),
("51","2","1","1,2,3,4","2022-09-27 03:15:24"),
("52","2","2","6","2022-09-27 03:15:24"),
("53","6","1","1,2,3,4","2022-09-27 03:34:15"),
("54","6","2","10","2022-09-27 03:34:15"),
("55","6","5","50","2022-09-27 03:34:15"),
("62","7","1","1,2,3,4","2022-09-27 03:38:36"),
("63","7","2","9","2022-09-27 03:38:36"),
("64","7","5","50","2022-09-27 03:38:37"),
("89","9","1","5","2022-09-29 01:56:40"),
("90","9","2","7","2022-09-29 01:56:40"),
("91","9","4","35","2022-09-29 01:56:40"),
("92","9","5","51","2022-09-29 01:56:40"),
("93","8","1","5","2022-09-29 01:56:53"),
("94","8","2","8","2022-09-29 01:56:53"),
("95","8","4","35","2022-09-29 01:56:53"),
("96","8","5","51","2022-09-29 01:56:53"),
("97","5","1","1,2,3,4","2022-09-29 01:57:07"),
("98","5","2","8","2022-09-29 01:57:07"),
("99","5","4","35","2022-09-29 01:57:07"),
("100","5","5","51","2022-09-29 01:57:07"),
("101","4","1","1,2,3,4","2022-09-29 01:57:24"),
("102","4","2","7","2022-09-29 01:57:24"),
("103","4","4","35","2022-09-29 01:57:24"),
("104","4","5","51","2022-09-29 01:57:24");




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
) ENGINE=InnoDB DEFAULT CHARSET=utf8;






CREATE TABLE `stock_details` (
  `stock_details_id` int(7) NOT NULL AUTO_INCREMENT COMMENT 'unique identification number',
  `product_id` int(11) NOT NULL COMMENT 'stock master unique id',
  `status` int(2) NOT NULL COMMENT 'save status : 1 - Add new stock, 2 - Order stock or minus stock',
  `old_stock` int(11) DEFAULT NULL,
  `current_stock` int(10) DEFAULT NULL COMMENT 'current stock',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Add date time when data added',
  PRIMARY KEY (`stock_details_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Stock details ';






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
("1","Admin","2","devloperproactii@gmail.com","devloper","21232f297a57a5a743894a0e4a801fc3","","2022-04-13 11:35:19","2022-09-28 22:52:03","2022-09-28 22:52:03","0000-00-00 00:00:00","1"),
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
  `acc_holder_name` text,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `is_active` int(11) DEFAULT '1',
  PRIMARY KEY (`vendor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


INSERT INTO vendor VALUES
("1","vendor-one","vendor1@gmail.com","9898989898","7c3613dba5171cb6027c67835dd3b9d4","","Company-1","05ABDCE1234F1Z2","ABCTY1234D","","Char Rasta","Vapi","Gujarat","396321","IN","BANK OF BARODA","VJVALS","BARB0VJVALS","78954631274","VENDOR VENDOR","2022-07-23 09:40:06","2022-09-28 02:46:29","2022-09-09 02:20:07","1"),
("2","vendor-two","vendor2@gmail.com","9696969696","7c3613dba5171cb6027c67835dd3b9d4","","Company-2","05ABDCE1234F1Z2","ABCTY1234D","","gunjan","vapi","gujarat","396321","IN","STATE BANK OF INDIA","00037","SBIN000037","12345678910","ROSHNI MISTRY","2022-07-23 09:57:16","2022-09-28 02:32:56","2022-08-25 22:46:14","1");




CREATE TABLE `whish_list` (
  `whish_list_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`whish_list_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;


INSERT INTO whish_list VALUES
("6","1","14"),
("7","1","12");


