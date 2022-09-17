<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:04:24 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Electronics","text_parent_category":"","text_description":"Electronics","txt_elements":["2","7","8"],"old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Electronics', 'electronics', '', '2,7,8', 'Electronics', '', '1', '2022-08-24 00:04:24');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:04:24 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Electronics","text_parent_category":"","text_description":"Electronics","txt_elements":["2","7","8"],"old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1' WHERE 1=1  and category_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:04:24 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Electronics","text_parent_category":"","text_description":"Electronics","txt_elements":["2","7","8"],"old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '1' WHERE 1=1  and category_id = '';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:07:31 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Grocery","text_parent_category":"","text_description":"Grocery","txt_elements":["9"],"old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Grocery', 'grocery', '', '9', 'Grocery', '', '1', '2022-08-24 00:07:31');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:07:31 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Grocery","text_parent_category":"","text_description":"Grocery","txt_elements":["9"],"old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2' WHERE 1=1  and category_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:07:31 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Grocery","text_parent_category":"","text_description":"Grocery","txt_elements":["9"],"old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '2' WHERE 1=1  and category_id = '';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:12:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Appliances","text_parent_category":"","text_description":"Appliances","txt_elements":["2","7","8"],"old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Appliances', 'appliances', '', '2,7,8', 'Appliances', '', '1', '2022-08-24 00:12:15');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:12:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Appliances","text_parent_category":"","text_description":"Appliances","txt_elements":["2","7","8"],"old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '3' WHERE 1=1  and category_id = '3';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:12:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Appliances","text_parent_category":"","text_description":"Appliances","txt_elements":["2","7","8"],"old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '3' WHERE 1=1  and category_id = '';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:13:18 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Mobiles","text_parent_category":"","text_description":"Mobiles","txt_elements":["2","7","8"],"old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Mobiles', 'mobiles', '', '2,7,8', 'Mobiles', '', '1', '2022-08-24 00:13:18');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:13:18 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Mobiles","text_parent_category":"","text_description":"Mobiles","txt_elements":["2","7","8"],"old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '4' WHERE 1=1  and category_id = '4';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:13:18 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Mobiles","text_parent_category":"","text_description":"Mobiles","txt_elements":["2","7","8"],"old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '4' WHERE 1=1  and category_id = '';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:15:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Personal Care","text_parent_category":"","text_description":"Personal Care","txt_elements":["2","9"],"old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Personal Care', 'personal-care', '', '2,9', 'Personal Care', '', '1', '2022-08-24 00:15:15');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:15:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Personal Care","text_parent_category":"","text_description":"Personal Care","txt_elements":["2","9"],"old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '5' WHERE 1=1  and category_id = '5';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:15:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Personal Care","text_parent_category":"","text_description":"Personal Care","txt_elements":["2","9"],"old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '5' WHERE 1=1  and category_id = '';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:22:07 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Furniture","text_parent_category":"","text_description":"Furniture","txt_elements":["1","2","7"],"old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Furniture', 'furniture', '', '1,2,7', 'Furniture', '', '1', '2022-08-24 00:22:07');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:22:07 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Furniture","text_parent_category":"","text_description":"Furniture","txt_elements":["1","2","7"],"old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '6' WHERE 1=1  and category_id = '6';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:22:07 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Furniture","text_parent_category":"","text_description":"Furniture","txt_elements":["1","2","7"],"old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '6' WHERE 1=1  and category_id = '';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:24:44 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sports","text_parent_category":"","text_description":"Sports","txt_elements":["2"],"old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Sports', 'sports', '', '2', 'Sports', '', '1', '2022-08-24 00:24:44');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:24:44 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sports","text_parent_category":"","text_description":"Sports","txt_elements":["2"],"old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '7' WHERE 1=1  and category_id = '7';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:24:44 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sports","text_parent_category":"","text_description":"Sports","txt_elements":["2"],"old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '7' WHERE 1=1  and category_id = '';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:26:22 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Home Appliances","text_parent_category":"","text_description":"Home Appliances","txt_elements":["2","3","7","9"],"old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Home Appliances', 'home-appliances', '', '2,3,7,9', 'Home Appliances', '', '1', '2022-08-24 00:26:22');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:26:22 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Home Appliances","text_parent_category":"","text_description":"Home Appliances","txt_elements":["2","3","7","9"],"old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '8' WHERE 1=1  and category_id = '8';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:26:22 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Home Appliances","text_parent_category":"","text_description":"Home Appliances","txt_elements":["2","3","7","9"],"old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '8' WHERE 1=1  and category_id = '';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:28:33 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Laptops & Desktops","text_parent_category":"1","text_description":"Laptops & Desktops","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Laptops & Desktops', 'laptops-&-desktops', '1', '', 'Laptops & Desktops', '', '1', '2022-08-24 00:28:33');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:28:33 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Laptops & Desktops","text_parent_category":"1","text_description":"Laptops & Desktops","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,9' WHERE 1=1  and category_id = '9';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:28:33 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Laptops & Desktops","text_parent_category":"1","text_description":"Laptops & Desktops","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '9' WHERE 1=1  and category_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:29:09 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Headphones & Speakers","text_parent_category":"1","text_description":"Headphones & Speakers","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Headphones & Speakers', 'headphones-&-speakers', '1', '', 'Headphones & Speakers', '', '1', '2022-08-24 00:29:09');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:29:09 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Headphones & Speakers","text_parent_category":"1","text_description":"Headphones & Speakers","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,10' WHERE 1=1  and category_id = '10';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:29:09 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Headphones & Speakers","text_parent_category":"1","text_description":"Headphones & Speakers","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '9,10' WHERE 1=1  and category_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:29:35 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Tablets","text_parent_category":"1","text_description":"Tablets","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Tablets', 'tablets', '1', '', 'Tablets', '', '1', '2022-08-24 00:29:35');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:29:35 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Tablets","text_parent_category":"1","text_description":"Tablets","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,11' WHERE 1=1  and category_id = '11';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:29:35 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Tablets","text_parent_category":"1","text_description":"Tablets","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '9,10,11' WHERE 1=1  and category_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:30:06 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Smartwatches & Bands","text_parent_category":"1","text_description":"Smartwatches & Bands","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Smartwatches & Bands', 'smartwatches-&-bands', '1', '', 'Smartwatches & Bands', '', '1', '2022-08-24 00:30:06');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:30:06 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Smartwatches & Bands","text_parent_category":"1","text_description":"Smartwatches & Bands","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,12' WHERE 1=1  and category_id = '12';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:30:06 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Smartwatches & Bands","text_parent_category":"1","text_description":"Smartwatches & Bands","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '9,10,11,12' WHERE 1=1  and category_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:30:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Powerbanks","text_parent_category":"1","text_description":"Powerbanks","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Powerbanks', 'powerbanks', '1', '', 'Powerbanks', '', '1', '2022-08-24 00:30:32');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:30:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Powerbanks","text_parent_category":"1","text_description":"Powerbanks","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,13' WHERE 1=1  and category_id = '13';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:30:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Powerbanks","text_parent_category":"1","text_description":"Powerbanks","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '9,10,11,12,13' WHERE 1=1  and category_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:31:09 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Styling Gadgets","text_parent_category":"1","text_description":"Styling Gadgets","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Styling Gadgets', 'styling-gadgets', '1', '', 'Styling Gadgets', '', '1', '2022-08-24 00:31:09');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:31:09 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Styling Gadgets","text_parent_category":"1","text_description":"Styling Gadgets","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,14' WHERE 1=1  and category_id = '14';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:31:09 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Styling Gadgets","text_parent_category":"1","text_description":"Styling Gadgets","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '9,10,11,12,13,14' WHERE 1=1  and category_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:31:38 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Mobile Accessories","text_parent_category":"1","text_description":"Mobile Accessories","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Mobile Accessories', 'mobile-accessories', '1', '', 'Mobile Accessories', '', '1', '2022-08-24 00:31:38');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:31:38 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Mobile Accessories","text_parent_category":"1","text_description":"Mobile Accessories","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,15' WHERE 1=1  and category_id = '15';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:31:38 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Mobile Accessories","text_parent_category":"1","text_description":"Mobile Accessories","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '9,10,11,12,13,14,15' WHERE 1=1  and category_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:32:03 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Computer Accessories","text_parent_category":"1","text_description":"Computer Accessories","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Computer Accessories', 'computer-accessories', '1', '', 'Computer Accessories', '', '1', '2022-08-24 00:32:03');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:32:03 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Computer Accessories","text_parent_category":"1","text_description":"Computer Accessories","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,16' WHERE 1=1  and category_id = '16';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:32:03 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Computer Accessories","text_parent_category":"1","text_description":"Computer Accessories","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '9,10,11,12,13,14,15,16' WHERE 1=1  and category_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:33:31 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Data Storage","text_parent_category":"1","text_description":"Data Storage","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Data Storage', 'data-storage', '1', '', 'Data Storage', '', '1', '2022-08-24 00:33:31');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:33:31 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Data Storage","text_parent_category":"1","text_description":"Data Storage","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,17' WHERE 1=1  and category_id = '17';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:33:31 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Data Storage","text_parent_category":"1","text_description":"Data Storage","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '9,10,11,12,13,14,15,16,17' WHERE 1=1  and category_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:38:34 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Maslala,Oil & More","text_parent_category":"2","text_description":"Maslala,Oil & More","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Maslala,Oil & More', 'maslala-oil-&-more', '2', '', 'Maslala,Oil & More', '', '1', '2022-08-24 00:38:34');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:38:34 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Maslala,Oil & More","text_parent_category":"2","text_description":"Maslala,Oil & More","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2,18' WHERE 1=1  and category_id = '18';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:38:34 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Maslala,Oil & More","text_parent_category":"2","text_description":"Maslala,Oil & More","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '18' WHERE 1=1  and category_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:39:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Buscuits & Cookies","text_parent_category":"2","text_description":"Buscuits & Cookies","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Buscuits & Cookies', 'buscuits-&-cookies', '2', '', 'Buscuits & Cookies', '', '1', '2022-08-24 00:39:05');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:39:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Buscuits & Cookies","text_parent_category":"2","text_description":"Buscuits & Cookies","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2,19' WHERE 1=1  and category_id = '19';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:39:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Buscuits & Cookies","text_parent_category":"2","text_description":"Buscuits & Cookies","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '18,19' WHERE 1=1  and category_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:39:33 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Beverages","text_parent_category":"2","text_description":"Beverages","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Beverages', 'beverages', '2', '', 'Beverages', '', '1', '2022-08-24 00:39:33');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:39:33 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Beverages","text_parent_category":"2","text_description":"Beverages","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2,20' WHERE 1=1  and category_id = '20';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:39:33 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Beverages","text_parent_category":"2","text_description":"Beverages","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '18,19,20' WHERE 1=1  and category_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:40:22 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Atta , Rice & Dal","text_parent_category":"2","text_description":"Atta , Rice & Dal","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Atta , Rice & Dal', 'atta-rice-&-dal', '2', '', 'Atta , Rice & Dal', '', '1', '2022-08-24 00:40:22');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:40:22 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Atta , Rice & Dal","text_parent_category":"2","text_description":"Atta , Rice & Dal","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2,21' WHERE 1=1  and category_id = '21';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:40:22 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Atta , Rice & Dal","text_parent_category":"2","text_description":"Atta , Rice & Dal","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '18,19,20,21' WHERE 1=1  and category_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:40:41 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Personal Care","text_parent_category":"2","text_description":"Personal Care","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Personal Care', 'personal-care', '2', '', 'Personal Care', '', '1', '2022-08-24 00:40:41');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:40:41 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Personal Care","text_parent_category":"2","text_description":"Personal Care","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2,22' WHERE 1=1  and category_id = '22';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:40:41 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Personal Care","text_parent_category":"2","text_description":"Personal Care","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '18,19,20,21,22' WHERE 1=1  and category_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:41:10 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"HouseHold & Cleaning","text_parent_category":"2","text_description":"HouseHold & Cleaning","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('HouseHold & Cleaning', 'household-&-cleaning', '2', '', 'HouseHold & Cleaning', '', '1', '2022-08-24 00:41:10');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:41:10 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"HouseHold & Cleaning","text_parent_category":"2","text_description":"HouseHold & Cleaning","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2,23' WHERE 1=1  and category_id = '23';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:41:10 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"HouseHold & Cleaning","text_parent_category":"2","text_description":"HouseHold & Cleaning","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '18,19,20,21,22,23' WHERE 1=1  and category_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:41:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Home & kitchen","text_parent_category":"2","text_description":"Home & kitchen","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Home & kitchen', 'home-&-kitchen', '2', '', 'Home & kitchen', '', '1', '2022-08-24 00:41:32');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:41:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Home & kitchen","text_parent_category":"2","text_description":"Home & kitchen","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2,24' WHERE 1=1  and category_id = '24';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:41:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Home & kitchen","text_parent_category":"2","text_description":"Home & kitchen","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '18,19,20,21,22,23,24' WHERE 1=1  and category_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:41:53 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Dairy Products","text_parent_category":"2","text_description":"Dairy Products","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Dairy Products', 'dairy-products', '2', '', 'Dairy Products', '', '1', '2022-08-24 00:41:53');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:41:53 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Dairy Products","text_parent_category":"2","text_description":"Dairy Products","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2,25' WHERE 1=1  and category_id = '25';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:41:53 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Dairy Products","text_parent_category":"2","text_description":"Dairy Products","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '18,19,20,21,22,23,24,25' WHERE 1=1  and category_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:45:47 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/15 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"15","text_category_name":"Mobile Accessories","text_parent_category":"4","text_description":"Mobile Accessories","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '9,10,11,12,13,14,16,17' WHERE 1=1  and category_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:45:48 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/15 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"15","text_category_name":"Mobile Accessories","text_parent_category":"4","text_description":"Mobile Accessories","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `category_name` = 'Mobile Accessories', `short_code` = 'mobile-accessories', `parent_category_id` = '4', `hierarchy` = '4,15', `element_id` = '', `description` = 'Mobile Accessories', `category_image` = '', `modified_by` = '1', `modified` = '2022-08-24 00:45:47', `is_active` = 1 WHERE 1=1  and category_id = '15';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:45:48 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/15 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"15","text_category_name":"Mobile Accessories","text_parent_category":"4","text_description":"Mobile Accessories","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = NULL WHERE 1=1  and category_id = '4';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:46:12 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Smartphones","text_parent_category":"4","text_description":"Smartphones","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Smartphones', 'smartphones', '4', '', 'Smartphones', '', '1', '2022-08-24 00:46:12');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:46:12 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Smartphones","text_parent_category":"4","text_description":"Smartphones","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '4,26' WHERE 1=1  and category_id = '26';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:46:12 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Smartphones","text_parent_category":"4","text_description":"Smartphones","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '26' WHERE 1=1  and category_id = '4';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:50:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Televisions","text_parent_category":"8","text_description":"Televisions","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Televisions', 'televisions', '8', '', 'Televisions', '', '1', '2022-08-24 00:50:52');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:50:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Televisions","text_parent_category":"8","text_description":"Televisions","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '8,27' WHERE 1=1  and category_id = '27';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:50:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Televisions","text_parent_category":"8","text_description":"Televisions","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '27' WHERE 1=1  and category_id = '8';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:51:48 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Washing Machine","text_parent_category":"8","text_description":"Washing Machine","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Washing Machine', 'washing-machine', '8', '', 'Washing Machine', '', '1', '2022-08-24 00:51:48');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:51:48 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Washing Machine","text_parent_category":"8","text_description":"Washing Machine","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '8,28' WHERE 1=1  and category_id = '28';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:51:48 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Washing Machine","text_parent_category":"8","text_description":"Washing Machine","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '27,28' WHERE 1=1  and category_id = '8';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:52:42 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Refrigerator","text_parent_category":"8","text_description":"Refrigerator","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Refrigerator', 'refrigerator', '8', '', 'Refrigerator', '', '1', '2022-08-24 00:52:42');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:52:42 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Refrigerator","text_parent_category":"8","text_description":"Refrigerator","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '8,29' WHERE 1=1  and category_id = '29';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:52:42 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Refrigerator","text_parent_category":"8","text_description":"Refrigerator","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '27,28,29' WHERE 1=1  and category_id = '8';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:53:29 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Air Cooler","text_parent_category":"8","text_description":"Air Cooler ","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Air Cooler', 'air-cooler', '8', '', 'Air Cooler ', '', '1', '2022-08-24 00:53:29');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:53:29 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Air Cooler","text_parent_category":"8","text_description":"Air Cooler ","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '8,30' WHERE 1=1  and category_id = '30';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:53:29 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Air Cooler","text_parent_category":"8","text_description":"Air Cooler ","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '27,28,29,30' WHERE 1=1  and category_id = '8';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:54:49 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Water Purifier","text_parent_category":"8","text_description":"Water Purifier","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Water Purifier', 'water-purifier', '8', '', 'Water Purifier', '', '1', '2022-08-24 00:54:49');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:54:49 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Water Purifier","text_parent_category":"8","text_description":"Water Purifier","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '8,31' WHERE 1=1  and category_id = '31';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:54:49 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Water Purifier","text_parent_category":"8","text_description":"Water Purifier","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '27,28,29,30,31' WHERE 1=1  and category_id = '8';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:55:39 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Air Conditioners","text_parent_category":"8","text_description":"Air Conditioners","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Air Conditioners', 'air-conditioners', '8', '', 'Air Conditioners', '', '1', '2022-08-24 00:55:39');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:55:39 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Air Conditioners","text_parent_category":"8","text_description":"Air Conditioners","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '8,32' WHERE 1=1  and category_id = '32';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:55:39 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Air Conditioners","text_parent_category":"8","text_description":"Air Conditioners","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '27,28,29,30,31,32' WHERE 1=1  and category_id = '8';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:56:22 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Jucier Mixer Grinders","text_parent_category":"8","text_description":"Jucier Mixer Grinders","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Jucier Mixer Grinders', 'jucier-mixer-grinders', '8', '', 'Jucier Mixer Grinders', '', '1', '2022-08-24 00:56:22');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:56:22 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Jucier Mixer Grinders","text_parent_category":"8","text_description":"Jucier Mixer Grinders","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '8,33' WHERE 1=1  and category_id = '33';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:56:22 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Jucier Mixer Grinders","text_parent_category":"8","text_description":"Jucier Mixer Grinders","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '27,28,29,30,31,32,33' WHERE 1=1  and category_id = '8';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:58:02 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Microwaves","text_parent_category":"8","text_description":"Microwaves","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Microwaves', 'microwaves', '8', '', 'Microwaves', '', '1', '2022-08-24 00:58:02');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:58:02 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Microwaves","text_parent_category":"8","text_description":"Microwaves","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '8,34' WHERE 1=1  and category_id = '34';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:58:02 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Microwaves","text_parent_category":"8","text_description":"Microwaves","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '27,28,29,30,31,32,33,34' WHERE 1=1  and category_id = '8';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:45:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Skin Care","text_parent_category":"5","text_description":"Skin Care","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Skin Care', 'skin-care', '5', '', 'Skin Care', '', '1', '2022-08-24 01:45:51');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:45:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Skin Care","text_parent_category":"5","text_description":"Skin Care","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '5,35' WHERE 1=1  and category_id = '35';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:45:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Skin Care","text_parent_category":"5","text_description":"Skin Care","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '35' WHERE 1=1  and category_id = '5';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:46:11 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Hair Care","text_parent_category":"5","text_description":"Hair Care","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Hair Care', 'hair-care', '5', '', 'Hair Care', '', '1', '2022-08-24 01:46:11');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:46:11 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Hair Care","text_parent_category":"5","text_description":"Hair Care","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '5,36' WHERE 1=1  and category_id = '36';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:46:11 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Hair Care","text_parent_category":"5","text_description":"Hair Care","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '35,36' WHERE 1=1  and category_id = '5';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:46:33 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Make-Up","text_parent_category":"5","text_description":"Make-Up","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Make-Up', 'make-up', '5', '', 'Make-Up', '', '1', '2022-08-24 01:46:33');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:46:33 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Make-Up","text_parent_category":"5","text_description":"Make-Up","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '5,37' WHERE 1=1  and category_id = '37';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:46:33 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Make-Up","text_parent_category":"5","text_description":"Make-Up","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '35,36,37' WHERE 1=1  and category_id = '5';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:46:54 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Men's Grooming","text_parent_category":"5","text_description":"Men's Grooming","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Men's Grooming', 'men's-grooming', '5', '', 'Men's Grooming', '', '1', '2022-08-24 01:46:53');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:46:54 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Men's Grooming","text_parent_category":"5","text_description":"Men's Grooming","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '5,38' WHERE 1=1  and category_id = '38';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:46:54 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Men's Grooming","text_parent_category":"5","text_description":"Men's Grooming","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '35,36,37,38' WHERE 1=1  and category_id = '5';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:47:22 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Frangraneces","text_parent_category":"5","text_description":"Frangraneces","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Frangraneces', 'frangraneces', '5', '', 'Frangraneces', '', '1', '2022-08-24 01:47:22');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:47:22 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Frangraneces","text_parent_category":"5","text_description":"Frangraneces","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '5,39' WHERE 1=1  and category_id = '39';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:47:22 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Frangraneces","text_parent_category":"5","text_description":"Frangraneces","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '35,36,37,38,39' WHERE 1=1  and category_id = '5';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:48:12 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Office Chair","text_parent_category":"6","text_description":"Office Chair","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Office Chair', 'office-chair', '6', '', 'Office Chair', '', '1', '2022-08-24 01:48:12');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:48:12 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Office Chair","text_parent_category":"6","text_description":"Office Chair","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '6,40' WHERE 1=1  and category_id = '40';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:48:12 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Office Chair","text_parent_category":"6","text_description":"Office Chair","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '40' WHERE 1=1  and category_id = '6';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:48:27 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Beds","text_parent_category":"6","text_description":"Beds","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Beds', 'beds', '6', '', 'Beds', '', '1', '2022-08-24 01:48:27');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:48:27 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Beds","text_parent_category":"6","text_description":"Beds","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '6,41' WHERE 1=1  and category_id = '41';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:48:28 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Beds","text_parent_category":"6","text_description":"Beds","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '40,41' WHERE 1=1  and category_id = '6';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:48:45 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sofas","text_parent_category":"6","text_description":"Sofas","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Sofas', 'sofas', '6', '', 'Sofas', '', '1', '2022-08-24 01:48:45');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:48:45 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sofas","text_parent_category":"6","text_description":"Sofas","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '6,42' WHERE 1=1  and category_id = '42';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:48:45 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sofas","text_parent_category":"6","text_description":"Sofas","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '40,41,42' WHERE 1=1  and category_id = '6';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:49:18 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Wardrobes","text_parent_category":"6","text_description":"Wardrobes","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Wardrobes', 'wardrobes', '6', '', 'Wardrobes', '', '1', '2022-08-24 01:49:18');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:49:18 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Wardrobes","text_parent_category":"6","text_description":"Wardrobes","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '6,43' WHERE 1=1  and category_id = '43';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:49:18 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Wardrobes","text_parent_category":"6","text_description":"Wardrobes","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '40,41,42,43' WHERE 1=1  and category_id = '6';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:49:48 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Laptop Tables","text_parent_category":"6","text_description":"Laptop Tables","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Laptop Tables', 'laptop-tables', '6', '', 'Laptop Tables', '', '1', '2022-08-24 01:49:48');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:49:48 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Laptop Tables","text_parent_category":"6","text_description":"Laptop Tables","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '6,44' WHERE 1=1  and category_id = '44';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:49:48 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Laptop Tables","text_parent_category":"6","text_description":"Laptop Tables","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '40,41,42,43,44' WHERE 1=1  and category_id = '6';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:50:14 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Mattresses","text_parent_category":"6","text_description":"Mattresses","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Mattresses', 'mattresses', '6', '', 'Mattresses', '', '1', '2022-08-24 01:50:14');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:50:14 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Mattresses","text_parent_category":"6","text_description":"Mattresses","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '6,45' WHERE 1=1  and category_id = '45';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:50:14 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Mattresses","text_parent_category":"6","text_description":"Mattresses","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '40,41,42,43,44,45' WHERE 1=1  and category_id = '6';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:50:39 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"TV Units","text_parent_category":"6","text_description":"TV Units","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('TV Units', 'tv-units', '6', '', 'TV Units', '', '1', '2022-08-24 01:50:39');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:50:39 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"TV Units","text_parent_category":"6","text_description":"TV Units","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '6,46' WHERE 1=1  and category_id = '46';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:50:39 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"TV Units","text_parent_category":"6","text_description":"TV Units","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '40,41,42,43,44,45,46' WHERE 1=1  and category_id = '6';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:51:34 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Bean bags","text_parent_category":"6","text_description":"Bean bags","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Bean bags', 'bean-bags', '6', '', 'Bean bags', '', '1', '2022-08-24 01:51:34');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:51:34 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Bean bags","text_parent_category":"6","text_description":"Bean bags","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '6,47' WHERE 1=1  and category_id = '47';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:51:34 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Bean bags","text_parent_category":"6","text_description":"Bean bags","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '40,41,42,43,44,45,46,47' WHERE 1=1  and category_id = '6';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:52:31 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sports Shoes","text_parent_category":"7","text_description":"Sports Shoes","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Sports Shoes', 'sports-shoes', '7', '', 'Sports Shoes', '', '1', '2022-08-24 01:52:31');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:52:31 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sports Shoes","text_parent_category":"7","text_description":"Sports Shoes","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '7,48' WHERE 1=1  and category_id = '48';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:52:31 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sports Shoes","text_parent_category":"7","text_description":"Sports Shoes","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '48' WHERE 1=1  and category_id = '7';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:53:55 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sportswear","text_parent_category":"7","text_description":"Sportswear","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Sportswear', 'sportswear', '7', '', 'Sportswear', '', '1', '2022-08-24 01:53:55');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:53:55 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sportswear","text_parent_category":"7","text_description":"Sportswear","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '7,49' WHERE 1=1  and category_id = '49';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:53:55 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sportswear","text_parent_category":"7","text_description":"Sportswear","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '48,49' WHERE 1=1  and category_id = '7';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:54:14 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sports Gear","text_parent_category":"7","text_description":"Sports Gear","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Sports Gear', 'sports-gear', '7', '', 'Sports Gear', '', '1', '2022-08-24 01:54:14');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:54:14 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sports Gear","text_parent_category":"7","text_description":"Sports Gear","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '7,50' WHERE 1=1  and category_id = '50';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:54:14 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sports Gear","text_parent_category":"7","text_description":"Sports Gear","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '48,49,50' WHERE 1=1  and category_id = '7';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:55:35 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Others","text_parent_category":"","text_description":"Others","txt_elements":["1","2","3","4","5","6","7","8","9"],"old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Others', 'others', '', '1,2,3,4,5,6,7,8,9', 'Others', '', '1', '2022-08-24 01:55:35');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:55:35 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Others","text_parent_category":"","text_description":"Others","txt_elements":["1","2","3","4","5","6","7","8","9"],"old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '51' WHERE 1=1  and category_id = '51';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:55:35 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Others","text_parent_category":"","text_description":"Others","txt_elements":["1","2","3","4","5","6","7","8","9"],"old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '51' WHERE 1=1  and category_id = '';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:55:51 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"1","text_description":"Other","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Other', 'other', '1', '', 'Other', '', '1', '2022-08-24 01:55:51');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:55:51 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"1","text_description":"Other","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,52' WHERE 1=1  and category_id = '52';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:55:51 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"1","text_description":"Other","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '9,10,11,12,13,14,16,17,52' WHERE 1=1  and category_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:56:02 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"2","text_description":"Other","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Other', 'other', '2', '', 'Other', '', '1', '2022-08-24 01:56:02');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:56:02 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"2","text_description":"Other","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2,53' WHERE 1=1  and category_id = '53';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:56:02 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"2","text_description":"Other","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '18,19,20,21,22,23,24,25,53' WHERE 1=1  and category_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:56:11 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"3","text_description":"Other","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Other', 'other', '3', '', 'Other', '', '1', '2022-08-24 01:56:11');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:56:11 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"3","text_description":"Other","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '3,54' WHERE 1=1  and category_id = '54';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:56:11 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"3","text_description":"Other","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '54' WHERE 1=1  and category_id = '3';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:56:20 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"4","text_description":"Other","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Other', 'other', '4', '', 'Other', '', '1', '2022-08-24 01:56:20');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:56:20 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"4","text_description":"Other","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '4,55' WHERE 1=1  and category_id = '55';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:56:20 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"4","text_description":"Other","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '26,55' WHERE 1=1  and category_id = '4';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:56:48 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"5","text_description":"Other","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Other', 'other', '5', '', 'Other', '', '1', '2022-08-24 01:56:48');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:56:48 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"5","text_description":"Other","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '5,56' WHERE 1=1  and category_id = '56';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:56:48 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"5","text_description":"Other","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '35,36,37,38,39,56' WHERE 1=1  and category_id = '5';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:57:02 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"6","text_description":"Other","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Other', 'other', '6', '', 'Other', '', '1', '2022-08-24 01:57:02');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:57:02 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"6","text_description":"Other","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '6,57' WHERE 1=1  and category_id = '57';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:57:02 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"6","text_description":"Other","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '40,41,42,43,44,45,46,47,57' WHERE 1=1  and category_id = '6';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:57:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"7","text_description":"Other","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Other', 'other', '7', '', 'Other', '', '1', '2022-08-24 01:57:32');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:57:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"7","text_description":"Other","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '7,58' WHERE 1=1  and category_id = '58';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 01:57:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"7","text_description":"Other","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '48,49,50,58' WHERE 1=1  and category_id = '7';
#End*******************************************************************************************************

