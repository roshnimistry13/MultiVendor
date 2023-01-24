<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:45:14 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Men","text_parent_category":"","text_description":"Men","txt_elements":["1","2","3","4","5","6"],"old_category_image":"","check_services":["return","replace"],"txt_return_replace_validity":"7","txt_policy_covers":"Lorem ipsum dolor sit amet, consectetur adipiscing elit,","txt_policy_description":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,Lorem ipsum dolor sit amet, consectetur adipiscing elit,<\/p>"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Men', '-men', '', '1,2,3,4,5,6', 'Men', 'T-shirt_mens1.jpg', '1', 'return,replace', '7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>', '2022-11-26 01:45:14');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:45:14 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Men","text_parent_category":"","text_description":"Men","txt_elements":["1","2","3","4","5","6"],"old_category_image":"","check_services":["return","replace"],"txt_return_replace_validity":"7","txt_policy_covers":"Lorem ipsum dolor sit amet, consectetur adipiscing elit,","txt_policy_description":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,Lorem ipsum dolor sit amet, consectetur adipiscing elit,<\/p>"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1' WHERE 1=1  and category_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:45:14 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Men","text_parent_category":"","text_description":"Men","txt_elements":["1","2","3","4","5","6"],"old_category_image":"","check_services":["return","replace"],"txt_return_replace_validity":"7","txt_policy_covers":"Lorem ipsum dolor sit amet, consectetur adipiscing elit,","txt_policy_description":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,Lorem ipsum dolor sit amet, consectetur adipiscing elit,<\/p>"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '1' WHERE 1=1  and category_id = '';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:46:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Women","text_parent_category":"","text_description":"Women","txt_elements":["1","2","6"],"old_category_image":"","check_services":["return","replace"],"txt_return_replace_validity":"7","txt_policy_covers":"Lorem ipsum dolor sit amet, consectetur adipiscing elit,","txt_policy_description":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<\/p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<\/p>"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Women', '-women', '', '1,2,6', 'Women', 'tops1.jpg', '1', 'return,replace', '7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>', '2022-11-26 01:46:15');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:46:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Women","text_parent_category":"","text_description":"Women","txt_elements":["1","2","6"],"old_category_image":"","check_services":["return","replace"],"txt_return_replace_validity":"7","txt_policy_covers":"Lorem ipsum dolor sit amet, consectetur adipiscing elit,","txt_policy_description":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<\/p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<\/p>"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2' WHERE 1=1  and category_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:46:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Women","text_parent_category":"","text_description":"Women","txt_elements":["1","2","6"],"old_category_image":"","check_services":["return","replace"],"txt_return_replace_validity":"7","txt_policy_covers":"Lorem ipsum dolor sit amet, consectetur adipiscing elit,","txt_policy_description":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<\/p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<\/p>"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '2' WHERE 1=1  and category_id = '';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:46:57 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Kids","text_parent_category":"","text_description":"kids","txt_elements":["1","2"],"old_category_image":"","check_services":["return","replace"],"txt_return_replace_validity":"10","txt_policy_covers":"Lorem ipsum dolor sit amet, consectetur adipiscing elit,","txt_policy_description":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<\/p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<\/p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<\/p>"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Kids', '-kids', '', '1,2', 'kids', 'kids_hoddy.webp', '1', 'return,replace', '10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>', '2022-11-26 01:46:57');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:46:57 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Kids","text_parent_category":"","text_description":"kids","txt_elements":["1","2"],"old_category_image":"","check_services":["return","replace"],"txt_return_replace_validity":"10","txt_policy_covers":"Lorem ipsum dolor sit amet, consectetur adipiscing elit,","txt_policy_description":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<\/p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<\/p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<\/p>"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '3' WHERE 1=1  and category_id = '3';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:46:57 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Kids","text_parent_category":"","text_description":"kids","txt_elements":["1","2"],"old_category_image":"","check_services":["return","replace"],"txt_return_replace_validity":"10","txt_policy_covers":"Lorem ipsum dolor sit amet, consectetur adipiscing elit,","txt_policy_description":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<\/p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<\/p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<\/p>"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '3' WHERE 1=1  and category_id = '';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:47:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Topwear","text_parent_category":"1","text_description":"Topwear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Topwear', 'men-topwear', '1', '', 'Topwear', 'mens_vest1.webp', '1', '', '', '', '', '2022-11-26 01:47:52');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:47:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Topwear","text_parent_category":"1","text_description":"Topwear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,4' WHERE 1=1  and category_id = '4';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:47:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Topwear","text_parent_category":"1","text_description":"Topwear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '4' WHERE 1=1  and category_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:48:20 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Bottomwear","text_parent_category":"1","text_description":"Bottomwear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Bottomwear', 'men-bottomwear', '1', '', 'Bottomwear', 'mens_shorts.jpg', '1', '', '', '', '', '2022-11-26 01:48:20');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:48:20 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Bottomwear","text_parent_category":"1","text_description":"Bottomwear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,5' WHERE 1=1  and category_id = '5';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:48:20 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Bottomwear","text_parent_category":"1","text_description":"Bottomwear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '4,5' WHERE 1=1  and category_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:49:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Indian & Festive Wear","text_parent_category":"1","text_description":"Indian & Festive Wear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Indian & Festive Wear', 'men-indian-festive-wear', '1', '', 'Indian & Festive Wear', 'mens_suits.jpg', '1', '', '', '', '', '2022-11-26 01:49:05');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:49:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Indian & Festive Wear","text_parent_category":"1","text_description":"Indian & Festive Wear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,6' WHERE 1=1  and category_id = '6';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:49:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Indian & Festive Wear","text_parent_category":"1","text_description":"Indian & Festive Wear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '4,5,6' WHERE 1=1  and category_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:49:41 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sports & Active Wear","text_parent_category":"1","text_description":"Sports & Active Wear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Sports & Active Wear', 'men-sports-active-wear', '1', '', 'Sports & Active Wear', 'mens_vest2.webp', '1', '', '', '', '', '2022-11-26 01:49:41');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:49:41 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sports & Active Wear","text_parent_category":"1","text_description":"Sports & Active Wear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,7' WHERE 1=1  and category_id = '7';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:49:41 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sports & Active Wear","text_parent_category":"1","text_description":"Sports & Active Wear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '4,5,6,7' WHERE 1=1  and category_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:50:12 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Innerwear & Sleepwear","text_parent_category":"1","text_description":"Innerwear & Sleepwear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Innerwear & Sleepwear', 'men-innerwear-sleepwear', '1', '', 'Innerwear & Sleepwear', 'mens_singlet.webp', '1', '', '', '', '', '2022-11-26 01:50:12');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:50:12 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Innerwear & Sleepwear","text_parent_category":"1","text_description":"Innerwear & Sleepwear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,8' WHERE 1=1  and category_id = '8';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:50:12 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Innerwear & Sleepwear","text_parent_category":"1","text_description":"Innerwear & Sleepwear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '4,5,6,7,8' WHERE 1=1  and category_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:50:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"T-Shirts","text_parent_category":"4","text_description":"T-Shirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('T-Shirts', 'topwear-t-shirts', '4', '', 'T-Shirts', 'T-shirt_mens2.jpg', '1', '', '', '', '', '2022-11-26 01:50:32');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:50:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"T-Shirts","text_parent_category":"4","text_description":"T-Shirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,4,9' WHERE 1=1  and category_id = '9';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:50:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"T-Shirts","text_parent_category":"4","text_description":"T-Shirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '9' WHERE 1=1  and category_id = '4';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:50:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Casual Shirts","text_parent_category":"4","text_description":"Casual Shirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Casual Shirts', 'topwear-casual-shirts', '4', '', 'Casual Shirts', 'mens_shirt1.jfif', '1', '', '', '', '', '2022-11-26 01:50:52');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:50:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Casual Shirts","text_parent_category":"4","text_description":"Casual Shirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,4,10' WHERE 1=1  and category_id = '10';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:50:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Casual Shirts","text_parent_category":"4","text_description":"Casual Shirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '9,10' WHERE 1=1  and category_id = '4';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:51:17 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Formal Shirts","text_parent_category":"4","text_description":"Formal Shirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Formal Shirts', 'topwear-formal-shirts', '4', '', 'Formal Shirts', 'mens_shirt2.jfif', '1', '', '', '', '', '2022-11-26 01:51:17');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:51:17 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Formal Shirts","text_parent_category":"4","text_description":"Formal Shirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,4,11' WHERE 1=1  and category_id = '11';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:51:17 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Formal Shirts","text_parent_category":"4","text_description":"Formal Shirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '9,10,11' WHERE 1=1  and category_id = '4';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:51:40 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sweatshirts","text_parent_category":"4","text_description":"Sweatshirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Sweatshirts', 'topwear-sweatshirts', '4', '', 'Sweatshirts', 'T-shirt_mens3.jpg', '1', '', '', '', '', '2022-11-26 01:51:40');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:51:40 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sweatshirts","text_parent_category":"4","text_description":"Sweatshirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,4,12' WHERE 1=1  and category_id = '12';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:51:40 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sweatshirts","text_parent_category":"4","text_description":"Sweatshirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '9,10,11,12' WHERE 1=1  and category_id = '4';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:52:27 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Jeans","text_parent_category":"5","text_description":"Jeans","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Jeans', 'bottomwear-jeans', '5', '', 'Jeans', 'mens_jeans1.webp', '1', '', '', '', '', '2022-11-26 01:52:27');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:52:27 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Jeans","text_parent_category":"5","text_description":"Jeans","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,5,13' WHERE 1=1  and category_id = '13';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:52:27 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Jeans","text_parent_category":"5","text_description":"Jeans","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '13' WHERE 1=1  and category_id = '5';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:52:55 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Casual Trousers","text_parent_category":"5","text_description":"Casual Trousers","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Casual Trousers', 'bottomwear-casual-trousers', '5', '', 'Casual Trousers', 'mens_jeans2.webp', '1', '', '', '', '', '2022-11-26 01:52:55');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:52:55 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Casual Trousers","text_parent_category":"5","text_description":"Casual Trousers","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,5,14' WHERE 1=1  and category_id = '14';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:52:55 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Casual Trousers","text_parent_category":"5","text_description":"Casual Trousers","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '13,14' WHERE 1=1  and category_id = '5';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:53:19 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Formal Trousers","text_parent_category":"5","text_description":"Formal Trousers","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Formal Trousers', 'bottomwear-formal-trousers', '5', '', 'Formal Trousers', 'mens_jeans3.webp', '1', '', '', '', '', '2022-11-26 01:53:19');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:53:19 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Formal Trousers","text_parent_category":"5","text_description":"Formal Trousers","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,5,15' WHERE 1=1  and category_id = '15';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:53:19 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Formal Trousers","text_parent_category":"5","text_description":"Formal Trousers","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '13,14,15' WHERE 1=1  and category_id = '5';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:53:46 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Shorts","text_parent_category":"5","text_description":"Shorts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Shorts', 'bottomwear-shorts', '5', '', 'Shorts', 'mens_shorts1.jpg', '1', '', '', '', '', '2022-11-26 01:53:46');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:53:46 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Shorts","text_parent_category":"5","text_description":"Shorts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,5,16' WHERE 1=1  and category_id = '16';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:53:46 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Shorts","text_parent_category":"5","text_description":"Shorts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '13,14,15,16' WHERE 1=1  and category_id = '5';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:54:19 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Track Pants & Joggers","text_parent_category":"5","text_description":"Track Pants & Joggers","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Track Pants & Joggers', 'bottomwear-track-pants-joggers', '5', '', 'Track Pants & Joggers', '', '1', '', '', '', '', '2022-11-26 01:54:19');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:54:19 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Track Pants & Joggers","text_parent_category":"5","text_description":"Track Pants & Joggers","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,5,17' WHERE 1=1  and category_id = '17';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:54:19 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Track Pants & Joggers","text_parent_category":"5","text_description":"Track Pants & Joggers","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '13,14,15,16,17' WHERE 1=1  and category_id = '5';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:54:37 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/17 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"17","text_category_name":"Track Pants & Joggers","text_parent_category":"5","text_description":"Track Pants & Joggers","old_category_image":"","text_is_active":"1","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '13,14,15,16' WHERE 1=1  and category_id = '5';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:54:37 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/17 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"17","text_category_name":"Track Pants & Joggers","text_parent_category":"5","text_description":"Track Pants & Joggers","old_category_image":"","text_is_active":"1","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `category_name` = 'Track Pants & Joggers', `short_code` = 'bottomwear-track-pants-joggers', `parent_category_id` = '5', `hierarchy` = '1,5,17', `element_id` = '', `description` = 'Track Pants & Joggers', `category_image` = 'means_boxer.jpg', `modified_by` = '1', `modified` = '2022-11-26 01:54:37', `return_or_replace` = '', `return_replace_validity` = '', `policy_covers` = '', `return_policy` = '', `is_active` = 1 WHERE 1=1  and category_id = '17';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:54:37 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/17 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"17","text_category_name":"Track Pants & Joggers","text_parent_category":"5","text_description":"Track Pants & Joggers","old_category_image":"","text_is_active":"1","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '13,14,15,16,17' WHERE 1=1  and category_id = '5';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:58:16 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Kurtas & Kurta Sets","text_parent_category":"6","text_description":"Kurtas & Kurta Sets","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Kurtas & Kurta Sets', 'indian-festive-wear-kurtas-kurta-sets', '6', '', 'Kurtas & Kurta Sets', 'kurta.png', '1', '', '', '', '', '2022-11-26 01:58:16');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:58:16 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Kurtas & Kurta Sets","text_parent_category":"6","text_description":"Kurtas & Kurta Sets","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,6,18' WHERE 1=1  and category_id = '18';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:58:16 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Kurtas & Kurta Sets","text_parent_category":"6","text_description":"Kurtas & Kurta Sets","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '18' WHERE 1=1  and category_id = '6';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:58:35 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sherwanis","text_parent_category":"6","text_description":"Sherwanis","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Sherwanis', 'indian-festive-wear-sherwanis', '6', '', 'Sherwanis', 'kurta1.png', '1', '', '', '', '', '2022-11-26 01:58:35');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:58:35 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sherwanis","text_parent_category":"6","text_description":"Sherwanis","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,6,19' WHERE 1=1  and category_id = '19';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 01:58:35 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sherwanis","text_parent_category":"6","text_description":"Sherwanis","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '18,19' WHERE 1=1  and category_id = '6';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:00:19 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Track Pants & Shorts","text_parent_category":"7","text_description":"Track Pants & Shorts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Track Pants & Shorts', 'sports-active-wear-track-pants-shorts', '7', '', 'Track Pants & Shorts', 'mens_shorts2.jpg', '1', '', '', '', '', '2022-11-26 02:00:19');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:00:19 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Track Pants & Shorts","text_parent_category":"7","text_description":"Track Pants & Shorts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,7,20' WHERE 1=1  and category_id = '20';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:00:20 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Track Pants & Shorts","text_parent_category":"7","text_description":"Track Pants & Shorts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '20' WHERE 1=1  and category_id = '7';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:00:42 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Active T-Shirts","text_parent_category":"7","text_description":"Active T-Shirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Active T-Shirts', 'sports-active-wear-active-t-shirts', '7', '', 'Active T-Shirts', 'mens_vest3.webp', '1', '', '', '', '', '2022-11-26 02:00:42');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:00:42 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Active T-Shirts","text_parent_category":"7","text_description":"Active T-Shirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,7,21' WHERE 1=1  and category_id = '21';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:00:42 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Active T-Shirts","text_parent_category":"7","text_description":"Active T-Shirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '20,21' WHERE 1=1  and category_id = '7';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:01:16 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Indian & Fusion Wear","text_parent_category":"2","text_description":"Indian & Fusion Wear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Indian & Fusion Wear', 'women-indian-fusion-wear', '2', '', 'Indian & Fusion Wear', 'CP3QYwA7WkGZtmtlODPxYlK6GcXuHmTDsFIKimTh.jpeg', '1', '', '', '', '', '2022-11-26 02:01:16');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:01:17 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Indian & Fusion Wear","text_parent_category":"2","text_description":"Indian & Fusion Wear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2,22' WHERE 1=1  and category_id = '22';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:01:17 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Indian & Fusion Wear","text_parent_category":"2","text_description":"Indian & Fusion Wear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '22' WHERE 1=1  and category_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:01:38 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Western Wear","text_parent_category":"2","text_description":"Western Wear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Western Wear', 'women-western-wear', '2', '', 'Western Wear', 'tops2.jpg', '1', '', '', '', '', '2022-11-26 02:01:38');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:01:38 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Western Wear","text_parent_category":"2","text_description":"Western Wear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2,23' WHERE 1=1  and category_id = '23';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:01:38 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Western Wear","text_parent_category":"2","text_description":"Western Wear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '22,23' WHERE 1=1  and category_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:45:12 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Kurtas & Suits","text_parent_category":"22","text_description":"Kurtas & Suits","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Kurtas & Suits', 'indian-fusion-wear-kurtas-suits', '22', '', 'Kurtas & Suits', 'CP3QYwA7WkGZtmtlODPxYlK6GcXuHmTDsFIKimTh1.jpeg', '1', '', '', '', '', '2022-11-26 02:45:12');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:45:12 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Kurtas & Suits","text_parent_category":"22","text_description":"Kurtas & Suits","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2,22,24' WHERE 1=1  and category_id = '24';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:45:12 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Kurtas & Suits","text_parent_category":"22","text_description":"Kurtas & Suits","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '24' WHERE 1=1  and category_id = '22';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:45:38 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Tunics & Tops","text_parent_category":"22","text_description":"Tunics & Tops","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Tunics & Tops', 'indian-fusion-wear-tunics-tops', '22', '', 'Tunics & Tops', 'tops3.jpg', '1', '', '', '', '', '2022-11-26 02:45:38');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:45:38 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Tunics & Tops","text_parent_category":"22","text_description":"Tunics & Tops","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2,22,25' WHERE 1=1  and category_id = '25';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:45:38 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Tunics & Tops","text_parent_category":"22","text_description":"Tunics & Tops","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '24,25' WHERE 1=1  and category_id = '22';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:45:56 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sarees","text_parent_category":"22","text_description":"Sarees","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Sarees', 'indian-fusion-wear-sarees', '22', '', 'Sarees', 'sarees1.jpg', '1', '', '', '', '', '2022-11-26 02:45:56');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:45:56 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sarees","text_parent_category":"22","text_description":"Sarees","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2,22,26' WHERE 1=1  and category_id = '26';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:45:56 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sarees","text_parent_category":"22","text_description":"Sarees","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '24,25,26' WHERE 1=1  and category_id = '22';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:46:21 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Ethnic Wear","text_parent_category":"22","text_description":"Ethnic Wear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Ethnic Wear', 'indian-fusion-wear-ethnic-wear', '22', '', 'Ethnic Wear', 'CP3QYwA7WkGZtmtlODPxYlK6GcXuHmTDsFIKimTh2.jpeg', '1', '', '', '', '', '2022-11-26 02:46:21');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:46:21 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Ethnic Wear","text_parent_category":"22","text_description":"Ethnic Wear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2,22,27' WHERE 1=1  and category_id = '27';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:46:21 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Ethnic Wear","text_parent_category":"22","text_description":"Ethnic Wear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '24,25,26,27' WHERE 1=1  and category_id = '22';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:49:28 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Leggings, Salwars & Churidars","text_parent_category":"22","text_description":"Leggings, Salwars & Churidars","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Leggings, Salwars & Churidars', 'indian-fusion-wear-leggings-salwars-churidars', '22', '', 'Leggings, Salwars & Churidars', 'CP3QYwA7WkGZtmtlODPxYlK6GcXuHmTDsFIKimTh3.jpeg', '1', '', '', '', '', '2022-11-26 02:49:28');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:49:28 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Leggings, Salwars & Churidars","text_parent_category":"22","text_description":"Leggings, Salwars & Churidars","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2,22,28' WHERE 1=1  and category_id = '28';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:49:28 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Leggings, Salwars & Churidars","text_parent_category":"22","text_description":"Leggings, Salwars & Churidars","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '24,25,26,27,28' WHERE 1=1  and category_id = '22';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:50:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Tshirts","text_parent_category":"23","text_description":"Tshirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Tshirts', 'western-wear-tshirts', '23', '', 'Tshirts', 'tops4.jpg', '1', '', '', '', '', '2022-11-26 02:50:05');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:50:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Tshirts","text_parent_category":"23","text_description":"Tshirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2,23,29' WHERE 1=1  and category_id = '29';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:50:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Tshirts","text_parent_category":"23","text_description":"Tshirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '29' WHERE 1=1  and category_id = '23';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:50:22 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Jeans","text_parent_category":"23","text_description":"Jeans","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Jeans', 'western-wear-jeans', '23', '', 'Jeans', 'tights.jpg', '1', '', '', '', '', '2022-11-26 02:50:22');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:50:22 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Jeans","text_parent_category":"23","text_description":"Jeans","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2,23,30' WHERE 1=1  and category_id = '30';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:50:22 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Jeans","text_parent_category":"23","text_description":"Jeans","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '29,30' WHERE 1=1  and category_id = '23';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:50:53 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Shorts & Skirts","text_parent_category":"23","text_description":"Shorts & Skirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Shorts & Skirts', 'western-wear-shorts-skirts', '23', '', 'Shorts & Skirts', 'shorts_night_wear.webp', '1', '', '', '', '', '2022-11-26 02:50:53');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:50:53 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Shorts & Skirts","text_parent_category":"23","text_description":"Shorts & Skirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2,23,31' WHERE 1=1  and category_id = '31';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:50:53 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Shorts & Skirts","text_parent_category":"23","text_description":"Shorts & Skirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '29,30,31' WHERE 1=1  and category_id = '23';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:51:18 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Trousers & Capris","text_parent_category":"23","text_description":"Trousers & Capris","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Trousers & Capris', 'western-wear-trousers-capris', '23', '', 'Trousers & Capris', 'leggins.webp', '1', '', '', '', '', '2022-11-26 02:51:18');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:51:18 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Trousers & Capris","text_parent_category":"23","text_description":"Trousers & Capris","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2,23,32' WHERE 1=1  and category_id = '32';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:51:18 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Trousers & Capris","text_parent_category":"23","text_description":"Trousers & Capris","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '29,30,31,32' WHERE 1=1  and category_id = '23';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:51:36 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Jumpsuits","text_parent_category":"23","text_description":"Jumpsuits","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Jumpsuits', 'western-wear-jumpsuits', '23', '', 'Jumpsuits', 'vvoza_512.jpg', '1', '', '', '', '', '2022-11-26 02:51:36');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:51:36 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Jumpsuits","text_parent_category":"23","text_description":"Jumpsuits","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2,23,33' WHERE 1=1  and category_id = '33';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:51:36 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Jumpsuits","text_parent_category":"23","text_description":"Jumpsuits","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '29,30,31,32,33' WHERE 1=1  and category_id = '23';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:52:00 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sweaters & Sweatshirts","text_parent_category":"23","text_description":"Sweaters & Sweatshirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Sweaters & Sweatshirts', 'western-wear-sweaters-sweatshirts', '23', '', 'Sweaters & Sweatshirts', '2a5d2b95-5362-4832-b796-421626026f591628071207813-Roadster-Women-Shirts-9511628071207201-1.jpg', '1', '', '', '', '', '2022-11-26 02:52:00');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:52:00 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sweaters & Sweatshirts","text_parent_category":"23","text_description":"Sweaters & Sweatshirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2,23,34' WHERE 1=1  and category_id = '34';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:52:00 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Sweaters & Sweatshirts","text_parent_category":"23","text_description":"Sweaters & Sweatshirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '29,30,31,32,33,34' WHERE 1=1  and category_id = '23';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:52:18 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Jackets & Coats","text_parent_category":"23","text_description":"Jackets & Coats","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Jackets & Coats', 'western-wear-jackets-coats', '23', '', 'Jackets & Coats', '2a5d2b95-5362-4832-b796-421626026f591628071207813-Roadster-Women-Shirts-9511628071207201-11.jpg', '1', '', '', '', '', '2022-11-26 02:52:18');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:52:18 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Jackets & Coats","text_parent_category":"23","text_description":"Jackets & Coats","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2,23,35' WHERE 1=1  and category_id = '35';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:52:18 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Jackets & Coats","text_parent_category":"23","text_description":"Jackets & Coats","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '29,30,31,32,33,34,35' WHERE 1=1  and category_id = '23';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:52:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Blazers & Waistcoats","text_parent_category":"23","text_description":"Blazers & Waistcoats","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Blazers & Waistcoats', 'western-wear-blazers-waistcoats', '23', '', 'Blazers & Waistcoats', '2a5d2b95-5362-4832-b796-421626026f591628071207813-Roadster-Women-Shirts-9511628071207201-12.jpg', '1', '', '', '', '', '2022-11-26 02:52:32');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:52:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Blazers & Waistcoats","text_parent_category":"23","text_description":"Blazers & Waistcoats","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2,23,36' WHERE 1=1  and category_id = '36';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 02:52:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Blazers & Waistcoats","text_parent_category":"23","text_description":"Blazers & Waistcoats","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '29,30,31,32,33,34,35,36' WHERE 1=1  and category_id = '23';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:01:20 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/3 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"3","text_category_name":"Kids","text_parent_category":"","text_description":"kids","txt_elements":["1","2","10"],"old_category_image":"kids_hoddy.webp","text_is_active":"1","check_services":["return","replace"],"txt_return_replace_validity":"10","txt_policy_covers":"Lorem ipsum dolor sit amet, consectetur adipiscing elit,","txt_policy_description":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<\/p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<\/p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<\/p>"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '' WHERE 1=1  and category_id = '0';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:01:20 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/3 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"3","text_category_name":"Kids","text_parent_category":"","text_description":"kids","txt_elements":["1","2","10"],"old_category_image":"kids_hoddy.webp","text_is_active":"1","check_services":["return","replace"],"txt_return_replace_validity":"10","txt_policy_covers":"Lorem ipsum dolor sit amet, consectetur adipiscing elit,","txt_policy_description":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<\/p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<\/p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<\/p>"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `category_name` = 'Kids', `short_code` = '-kids', `parent_category_id` = '', `hierarchy` = '3', `element_id` = '1,2,10', `description` = 'kids', `category_image` = 'kids_hoddy.webp', `modified_by` = '1', `modified` = '2022-11-26 03:01:20', `return_or_replace` = 'return,replace', `return_replace_validity` = '10', `policy_covers` = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit,', `return_policy` = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>', `is_active` = 1 WHERE 1=1  and category_id = '3';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:01:20 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/3 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"3","text_category_name":"Kids","text_parent_category":"","text_description":"kids","txt_elements":["1","2","10"],"old_category_image":"kids_hoddy.webp","text_is_active":"1","check_services":["return","replace"],"txt_return_replace_validity":"10","txt_policy_covers":"Lorem ipsum dolor sit amet, consectetur adipiscing elit,","txt_policy_description":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<\/p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<\/p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,<\/p>"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '3' WHERE 1=1  and category_id = '';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:06:37 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Boys","text_parent_category":"3","text_description":"Boys","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Boys', 'kids-boys', '3', '', 'Boys', 'kids_jeans.webp', '1', '', '', '', '', '2022-11-26 03:06:37');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:06:37 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Boys","text_parent_category":"3","text_description":"Boys","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '3,37' WHERE 1=1  and category_id = '37';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:06:37 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Boys","text_parent_category":"3","text_description":"Boys","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '37' WHERE 1=1  and category_id = '3';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:07:58 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Girls","text_parent_category":"3","text_description":"kids","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Girls', 'kids-girls', '3', '', 'kids', 'kids_jacket1.webp', '1', '', '', '', '', '2022-11-26 03:07:58');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:07:58 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Girls","text_parent_category":"3","text_description":"kids","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '3,38' WHERE 1=1  and category_id = '38';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:07:58 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Girls","text_parent_category":"3","text_description":"kids","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '37,38' WHERE 1=1  and category_id = '3';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:09:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"T-Shirts","text_parent_category":"37","text_description":"T-Shirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('T-Shirts', 'boys-t-shirts', '37', '', 'T-Shirts', 'kids_tshirt1.jpg', '1', '', '', '', '', '2022-11-26 03:09:15');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:09:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"T-Shirts","text_parent_category":"37","text_description":"T-Shirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '3,37,39' WHERE 1=1  and category_id = '39';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:09:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"T-Shirts","text_parent_category":"37","text_description":"T-Shirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '39' WHERE 1=1  and category_id = '37';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:09:34 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Shirts","text_parent_category":"37","text_description":"Shirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Shirts', 'boys-shirts', '37', '', 'Shirts', 'kids_shirt.webp', '1', '', '', '', '', '2022-11-26 03:09:34');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:09:34 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Shirts","text_parent_category":"37","text_description":"Shirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '3,37,40' WHERE 1=1  and category_id = '40';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:09:34 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Shirts","text_parent_category":"37","text_description":"Shirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '39,40' WHERE 1=1  and category_id = '37';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:09:55 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Shorts","text_parent_category":"37","text_description":"Shorts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Shorts', 'boys-shorts', '37', '', 'Shorts', 'kids_tshirt2.jpg', '1', '', '', '', '', '2022-11-26 03:09:55');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:09:55 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Shorts","text_parent_category":"37","text_description":"Shorts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '3,37,41' WHERE 1=1  and category_id = '41';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:09:55 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Shorts","text_parent_category":"37","text_description":"Shorts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '39,40,41' WHERE 1=1  and category_id = '37';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:10:13 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Jeans","text_parent_category":"37","text_description":"Jeans","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Jeans', 'boys-jeans', '37', '', 'Jeans', 'kids_jeans1.webp', '1', '', '', '', '', '2022-11-26 03:10:13');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:10:13 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Jeans","text_parent_category":"37","text_description":"Jeans","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '3,37,42' WHERE 1=1  and category_id = '42';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:10:13 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Jeans","text_parent_category":"37","text_description":"Jeans","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '39,40,41,42' WHERE 1=1  and category_id = '37';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:10:30 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Ethnic Wear","text_parent_category":"37","text_description":"Ethnic Wear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Ethnic Wear', 'boys-ethnic-wear', '37', '', 'Ethnic Wear', 'kids_traditional_wear.webp', '1', '', '', '', '', '2022-11-26 03:10:30');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:10:30 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Ethnic Wear","text_parent_category":"37","text_description":"Ethnic Wear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '3,37,43' WHERE 1=1  and category_id = '43';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:10:30 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Ethnic Wear","text_parent_category":"37","text_description":"Ethnic Wear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '39,40,41,42,43' WHERE 1=1  and category_id = '37';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:10:49 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Party Wear","text_parent_category":"37","text_description":"Party Wear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Party Wear', 'boys-party-wear', '37', '', 'Party Wear', 'kids_jeans2.webp', '1', '', '', '', '', '2022-11-26 03:10:49');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:10:49 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Party Wear","text_parent_category":"37","text_description":"Party Wear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '3,37,44' WHERE 1=1  and category_id = '44';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:10:49 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Party Wear","text_parent_category":"37","text_description":"Party Wear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '39,40,41,42,43,44' WHERE 1=1  and category_id = '37';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:11:14 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Track Pants & Pyjamas","text_parent_category":"37","text_description":"Track Pants & Pyjamas","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Track Pants & Pyjamas', 'boys-track-pants-pyjamas', '37', '', 'Track Pants & Pyjamas', 'kids_trackpants.webp', '1', '', '', '', '', '2022-11-26 03:11:14');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:11:14 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Track Pants & Pyjamas","text_parent_category":"37","text_description":"Track Pants & Pyjamas","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '3,37,45' WHERE 1=1  and category_id = '45';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:11:14 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Track Pants & Pyjamas","text_parent_category":"37","text_description":"Track Pants & Pyjamas","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '39,40,41,42,43,44,45' WHERE 1=1  and category_id = '37';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:11:41 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Trousers","text_parent_category":"37","text_description":"Trousers","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Trousers', 'boys-trousers', '37', '', 'Trousers', 'kids_shirt1.webp', '1', '', '', '', '', '2022-11-26 03:11:41');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:11:41 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Trousers","text_parent_category":"37","text_description":"Trousers","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '3,37,46' WHERE 1=1  and category_id = '46';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:11:41 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Trousers","text_parent_category":"37","text_description":"Trousers","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '39,40,41,42,43,44,45,46' WHERE 1=1  and category_id = '37';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:19:24 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Dresses","text_parent_category":"38","text_description":"Dresses","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Dresses', 'girls-dresses', '38', '', 'Dresses', 'kids_jacket2.webp', '1', '', '', '', '', '2022-11-26 03:19:24');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:19:24 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Dresses","text_parent_category":"38","text_description":"Dresses","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '3,38,47' WHERE 1=1  and category_id = '47';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:19:24 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Dresses","text_parent_category":"38","text_description":"Dresses","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '47' WHERE 1=1  and category_id = '38';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:19:42 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Tops","text_parent_category":"38","text_description":"Tops","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Tops', 'girls-tops', '38', '', 'Tops', 'kids_jacket3.webp', '1', '', '', '', '', '2022-11-26 03:19:42');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:19:42 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Tops","text_parent_category":"38","text_description":"Tops","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '3,38,48' WHERE 1=1  and category_id = '48';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:19:42 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Tops","text_parent_category":"38","text_description":"Tops","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '47,48' WHERE 1=1  and category_id = '38';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:20:03 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Tshirts","text_parent_category":"38","text_description":"Tshirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Tshirts', 'girls-tshirts', '38', '', 'Tshirts', 'kids_jacket4.webp', '1', '', '', '', '', '2022-11-26 03:20:03');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:20:03 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Tshirts","text_parent_category":"38","text_description":"Tshirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '3,38,49' WHERE 1=1  and category_id = '49';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:20:03 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Tshirts","text_parent_category":"38","text_description":"Tshirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '47,48,49' WHERE 1=1  and category_id = '38';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:21:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Kurta Sets","text_parent_category":"38","text_description":"Kurta Sets","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Kurta Sets', 'girls-kurta-sets', '38', '', 'Kurta Sets', 'kids_jacket5.webp', '1', '', '', '', '', '2022-11-26 03:21:32');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:21:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Kurta Sets","text_parent_category":"38","text_description":"Kurta Sets","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '3,38,50' WHERE 1=1  and category_id = '50';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:21:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Kurta Sets","text_parent_category":"38","text_description":"Kurta Sets","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '47,48,49,50' WHERE 1=1  and category_id = '38';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:21:54 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Party wear","text_parent_category":"38","text_description":"Party wear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Party wear', 'girls-party-wear', '38', '', 'Party wear', 'kids_jacket6.webp', '1', '', '', '', '', '2022-11-26 03:21:54');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:21:54 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Party wear","text_parent_category":"38","text_description":"Party wear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '3,38,51' WHERE 1=1  and category_id = '51';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:21:54 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Party wear","text_parent_category":"38","text_description":"Party wear","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '47,48,49,50,51' WHERE 1=1  and category_id = '38';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:22:09 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Dungarees & Jumpsuits","text_parent_category":"38","text_description":"Dungarees & Jumpsuits","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Dungarees & Jumpsuits', 'girls-dungarees-jumpsuits', '38', '', 'Dungarees & Jumpsuits', 'kids_jacket7.webp', '1', '', '', '', '', '2022-11-26 03:22:09');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:22:09 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Dungarees & Jumpsuits","text_parent_category":"38","text_description":"Dungarees & Jumpsuits","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '3,38,52' WHERE 1=1  and category_id = '52';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:22:09 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Dungarees & Jumpsuits","text_parent_category":"38","text_description":"Dungarees & Jumpsuits","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '47,48,49,50,51,52' WHERE 1=1  and category_id = '38';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:22:26 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Skirts & shorts","text_parent_category":"38","text_description":"Skirts & shorts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Skirts & shorts', 'girls-skirts-shorts', '38', '', 'Skirts & shorts', 'kids_jacket8.webp', '1', '', '', '', '', '2022-11-26 03:22:26');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:22:26 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Skirts & shorts","text_parent_category":"38","text_description":"Skirts & shorts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '3,38,53' WHERE 1=1  and category_id = '53';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:22:26 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Skirts & shorts","text_parent_category":"38","text_description":"Skirts & shorts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '47,48,49,50,51,52,53' WHERE 1=1  and category_id = '38';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:22:45 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Jeans, Trousers & Capris","text_parent_category":"38","text_description":"Jeans, Trousers & Capris","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Jeans, Trousers & Capris', 'girls-jeans-trousers-capris', '38', '', 'Jeans, Trousers & Capris', 'kids_jacket9.webp', '1', '', '', '', '', '2022-11-26 03:22:45');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:22:45 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Jeans, Trousers & Capris","text_parent_category":"38","text_description":"Jeans, Trousers & Capris","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '3,38,54' WHERE 1=1  and category_id = '54';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:22:45 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Jeans, Trousers & Capris","text_parent_category":"38","text_description":"Jeans, Trousers & Capris","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '47,48,49,50,51,52,53,54' WHERE 1=1  and category_id = '38';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:23:04 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Jacket, Sweater & Sweatshirts","text_parent_category":"38","text_description":"Jacket, Sweater & Sweatshirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Jacket, Sweater & Sweatshirts', 'girls-jacket-sweater-sweatshirts', '38', '', 'Jacket, Sweater & Sweatshirts', 'kids_jacket10.webp', '1', '', '', '', '', '2022-11-26 03:23:04');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:23:04 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Jacket, Sweater & Sweatshirts","text_parent_category":"38","text_description":"Jacket, Sweater & Sweatshirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '3,38,55' WHERE 1=1  and category_id = '55';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:23:04 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Jacket, Sweater & Sweatshirts","text_parent_category":"38","text_description":"Jacket, Sweater & Sweatshirts","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '47,48,49,50,51,52,53,54,55' WHERE 1=1  and category_id = '38';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:23:21 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Innerwear & Thermals","text_parent_category":"38","text_description":"Innerwear & Thermals","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Innerwear & Thermals', 'girls-innerwear-thermals', '38', '', 'Innerwear & Thermals', 'kids_jacket11.webp', '1', '', '', '', '', '2022-11-26 03:23:21');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:23:21 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Innerwear & Thermals","text_parent_category":"38","text_description":"Innerwear & Thermals","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '3,38,56' WHERE 1=1  and category_id = '56';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:23:21 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Innerwear & Thermals","text_parent_category":"38","text_description":"Innerwear & Thermals","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '47,48,49,50,51,52,53,54,55,56' WHERE 1=1  and category_id = '38';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:23:37 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Tights & Leggings","text_parent_category":"38","text_description":"Tights & Leggings","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Tights & Leggings', 'girls-tights-leggings', '38', '', 'Tights & Leggings', 'kids_jacket12.webp', '1', '', '', '', '', '2022-11-26 03:23:37');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:23:37 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Tights & Leggings","text_parent_category":"38","text_description":"Tights & Leggings","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '3,38,57' WHERE 1=1  and category_id = '57';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-11-2022 03:23:37 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Tights & Leggings","text_parent_category":"38","text_description":"Tights & Leggings","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '47,48,49,50,51,52,53,54,55,56,57' WHERE 1=1  and category_id = '38';
#End*******************************************************************************************************

