<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:29:59 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Clothing","text_parent_category":"","text_description":"Clothing","txt_elements":["1","2","3","4","5","6"],"old_category_image":"","check_services":["return","replace"],"txt_return_replace_validity":"10","txt_policy_covers":"All return reasons","txt_policy_description":"<p><span style='color: rgb(15, 17, 17); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>Full Refund, Exchange with a different size\/color<\/span> <\/p>"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Clothing', 'clothing', '', '1,2,3,4,5,6', 'Clothing', '', '1', 'return,replace', '10', 'All return reasons', '<p><span style='color: rgb(15, 17, 17); font-family: "Amazon Ember", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>Full Refund, Exchange with a different size/color</span> </p>', '2022-09-26 23:29:59');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:29:59 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Clothing","text_parent_category":"","text_description":"Clothing","txt_elements":["1","2","3","4","5","6"],"old_category_image":"","check_services":["return","replace"],"txt_return_replace_validity":"10","txt_policy_covers":"All return reasons","txt_policy_description":"<p><span style='color: rgb(15, 17, 17); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>Full Refund, Exchange with a different size\/color<\/span> <\/p>"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '59' WHERE 1=1  and category_id = '59';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:29:59 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Clothing","text_parent_category":"","text_description":"Clothing","txt_elements":["1","2","3","4","5","6"],"old_category_image":"","check_services":["return","replace"],"txt_return_replace_validity":"10","txt_policy_covers":"All return reasons","txt_policy_description":"<p><span style='color: rgb(15, 17, 17); font-family: \"Amazon Ember\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>Full Refund, Exchange with a different size\/color<\/span> <\/p>"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '59' WHERE 1=1  and category_id = '';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:33:41 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Women","text_parent_category":"59","text_description":"Women's Cloting","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Women', 'women', '59', '', 'Women's Cloting', '', '1', '', '', '', '', '2022-09-26 23:33:41');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:33:41 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Women","text_parent_category":"59","text_description":"Women's Cloting","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '59,60' WHERE 1=1  and category_id = '60';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:33:41 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Women","text_parent_category":"59","text_description":"Women's Cloting","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '60' WHERE 1=1  and category_id = '59';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:34:09 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Men","text_parent_category":"59","text_description":"Men's Clothing","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Men', 'men', '59', '', 'Men's Clothing', '', '1', '', '', '', '', '2022-09-26 23:34:09');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:34:09 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Men","text_parent_category":"59","text_description":"Men's Clothing","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '59,61' WHERE 1=1  and category_id = '61';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:34:09 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Men","text_parent_category":"59","text_description":"Men's Clothing","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '60,61' WHERE 1=1  and category_id = '59';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:34:40 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Kids","text_parent_category":"59","text_description":"Kids wear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Kids', 'kids', '59', '', 'Kids wear', '', '1', '', '', '', '', '2022-09-26 23:34:40');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:34:40 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Kids","text_parent_category":"59","text_description":"Kids wear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '59,62' WHERE 1=1  and category_id = '62';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:34:40 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Kids","text_parent_category":"59","text_description":"Kids wear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '60,61,62' WHERE 1=1  and category_id = '59';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:34:54 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"59","text_description":"other","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Other', 'other', '59', '', 'other', '', '1', '', '', '', '', '2022-09-26 23:34:54');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:34:54 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"59","text_description":"other","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '59,63' WHERE 1=1  and category_id = '63';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:34:54 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"59","text_description":"other","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '60,61,62,63' WHERE 1=1  and category_id = '59';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:37:19 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Western Wear","text_parent_category":"60","text_description":"Western Wear for women","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Western Wear', 'western-wear', '60', '', 'Western Wear for women', '', '1', '', '', '', '', '2022-09-26 23:37:19');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:37:19 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Western Wear","text_parent_category":"60","text_description":"Western Wear for women","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '59,60,64' WHERE 1=1  and category_id = '64';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:37:19 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Western Wear","text_parent_category":"60","text_description":"Western Wear for women","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '64' WHERE 1=1  and category_id = '60';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:37:34 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Ethnic Wear","text_parent_category":"60","text_description":"Ethnic Wear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Ethnic Wear', 'ethnic-wear', '60', '', 'Ethnic Wear', '', '1', '', '', '', '', '2022-09-26 23:37:34');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:37:34 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Ethnic Wear","text_parent_category":"60","text_description":"Ethnic Wear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '59,60,65' WHERE 1=1  and category_id = '65';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:37:34 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Ethnic Wear","text_parent_category":"60","text_description":"Ethnic Wear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '64,65' WHERE 1=1  and category_id = '60';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:37:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sportswear","text_parent_category":"60","text_description":"Sportswear for women","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Sportswear', 'sportswear', '60', '', 'Sportswear for women', '', '1', '', '', '', '', '2022-09-26 23:37:52');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:37:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sportswear","text_parent_category":"60","text_description":"Sportswear for women","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '59,60,66' WHERE 1=1  and category_id = '66';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:37:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sportswear","text_parent_category":"60","text_description":"Sportswear for women","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '64,65,66' WHERE 1=1  and category_id = '60';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:39:40 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"T-Shirts & Polos","text_parent_category":"61","text_description":"T-Shirts & Polos for Mens","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('T-Shirts & Polos', 't-shirts-&-polos', '61', '', 'T-Shirts & Polos for Mens', '', '1', '', '', '', '', '2022-09-26 23:39:40');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:39:40 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"T-Shirts & Polos","text_parent_category":"61","text_description":"T-Shirts & Polos for Mens","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '59,61,67' WHERE 1=1  and category_id = '67';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:39:40 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"T-Shirts & Polos","text_parent_category":"61","text_description":"T-Shirts & Polos for Mens","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '67' WHERE 1=1  and category_id = '61';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:39:55 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Shirts","text_parent_category":"61","text_description":"Shirts for Mens","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Shirts', 'shirts', '61', '', 'Shirts for Mens', '', '1', '', '', '', '', '2022-09-26 23:39:55');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:39:55 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Shirts","text_parent_category":"61","text_description":"Shirts for Mens","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '59,61,68' WHERE 1=1  and category_id = '68';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:39:55 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Shirts","text_parent_category":"61","text_description":"Shirts for Mens","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '67,68' WHERE 1=1  and category_id = '61';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:40:17 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Jeans","text_parent_category":"61","text_description":"Jeans for Men","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Jeans', 'jeans', '61', '', 'Jeans for Men', '', '1', '', '', '', '', '2022-09-26 23:40:17');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:40:17 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Jeans","text_parent_category":"61","text_description":"Jeans for Men","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '59,61,69' WHERE 1=1  and category_id = '69';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:40:17 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Jeans","text_parent_category":"61","text_description":"Jeans for Men","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '67,68,69' WHERE 1=1  and category_id = '61';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:40:39 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sportswear","text_parent_category":"61","text_description":"Sportswear for Mens","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Sportswear', 'sportswear', '61', '', 'Sportswear for Mens', '', '1', '', '', '', '', '2022-09-26 23:40:39');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:40:39 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sportswear","text_parent_category":"61","text_description":"Sportswear for Mens","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '59,61,70' WHERE 1=1  and category_id = '70';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-09-2022 23:40:39 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sportswear","text_parent_category":"61","text_description":"Sportswear for Mens","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '67,68,69,70' WHERE 1=1  and category_id = '61';
#End*******************************************************************************************************

