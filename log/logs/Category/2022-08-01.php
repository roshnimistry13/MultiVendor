<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 01-08-2022 23:04:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/1 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"1","text_category_name":"Category -1","text_parent_category":"","text_description":"Category -1","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `category_name` = 'Category -1', `short_code` = 'category-1', `parent_category_id` = '', `brand_id` = '', `description` = 'Category -1', `category_image` = 'magazine1_1603974341.png', `modified_by` = '1', `modified` = '2022-08-01 19:34:32', `is_active` = 1 WHERE 1=1  and category_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 01-08-2022 23:34:40 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/5 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"5","text_category_name":"Category -1.1","text_parent_category":"1","text_description":"Category -1.1","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `category_name` = 'Category -1.1', `short_code` = 'category-1.1', `parent_category_id` = '1', `brand_id` = '', `description` = 'Category -1.1', `category_image` = '', `modified_by` = '1', `modified` = '2022-08-01 20:04:40', `is_active` = 1 WHERE 1=1  and category_id = '5';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 01-08-2022 23:53:33 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Main","text_parent_category":"","text_description":"Main","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Main', 'main', '', '', 'Main', '', '1', '2022-08-01 20:23:33');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 01-08-2022 23:53:33 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Main","text_parent_category":"","text_description":"Main","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '9' WHERE 1=1  and category_id = '9';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 01-08-2022 23:53:33 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Main","text_parent_category":"","text_description":"Main","old_category_image":""} #Requestend
#Operation :  #Operationend
#Message: 
;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 01-08-2022 23:54:11 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Main 1","text_parent_category":"9","text_description":"Main 1","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Main 1', 'main-1', '9', '', 'Main 1', '', '1', '2022-08-01 20:24:11');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 01-08-2022 23:54:11 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Main 1","text_parent_category":"9","text_description":"Main 1","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '9,10' WHERE 1=1  and category_id = '10';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 01-08-2022 23:54:11 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Main 1","text_parent_category":"9","text_description":"Main 1","old_category_image":""} #Requestend
#Operation :  #Operationend
#Message: 
;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 01-08-2022 23:54:40 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Main 2","text_parent_category":"9","text_description":"Main 2","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Main 2', 'main-2', '9', '', 'Main 2', '', '1', '2022-08-01 20:24:40');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 01-08-2022 23:54:40 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Main 2","text_parent_category":"9","text_description":"Main 2","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '9,11' WHERE 1=1  and category_id = '11';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 01-08-2022 23:54:40 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Main 2","text_parent_category":"9","text_description":"Main 2","old_category_image":""} #Requestend
#Operation :  #Operationend
#Message: 
;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 01-08-2022 23:58:33 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Main 3","text_parent_category":"9","text_description":"Main 3","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Main 3', 'main-3', '9', '', 'Main 3', '', '1', '2022-08-01 20:28:33');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 01-08-2022 23:58:33 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Main 3","text_parent_category":"9","text_description":"Main 3","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '9,12' WHERE 1=1  and category_id = '12';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 01-08-2022 23:58:33 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Main 3","text_parent_category":"9","text_description":"Main 3","old_category_image":""} #Requestend
#Operation :  #Operationend
#Message: 
;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 00:17:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/12 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"12","text_category_name":"Main 1.1","text_parent_category":"10","text_description":"Main 1.1","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '10,11' WHERE 1=1  and category_id = '9';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 00:17:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/12 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"12","text_category_name":"Main 1.1","text_parent_category":"10","text_description":"Main 1.1","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `category_name` = 'Main 1.1', `short_code` = 'main-1.1', `parent_category_id` = '10', `hierarchy` = '9,10,12', `brand_id` = '', `description` = 'Main 1.1', `category_image` = '', `modified_by` = '1', `modified` = '2022-08-01 20:47:52', `is_active` = 1 WHERE 1=1  and category_id = '12';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 00:17:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/12 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"12","text_category_name":"Main 1.1","text_parent_category":"10","text_description":"Main 1.1","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '12' WHERE 1=1  and category_id = '10';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 00:18:59 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Main 1.2","text_parent_category":"10","text_description":"Main 1.2","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Main 1.2', 'main-1.2', '10', '', 'Main 1.2', '', '1', '2022-08-01 20:48:59');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 00:18:59 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Main 1.2","text_parent_category":"10","text_description":"Main 1.2","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '9,10,13' WHERE 1=1  and category_id = '13';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 00:18:59 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Main 1.2","text_parent_category":"10","text_description":"Main 1.2","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '12,13' WHERE 1=1  and category_id = '10';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 00:19:17 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Main 4","text_parent_category":"9","text_description":"Main 4","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Main 4', 'main-4', '9', '', 'Main 4', '', '1', '2022-08-01 20:49:17');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 00:19:17 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Main 4","text_parent_category":"9","text_description":"Main 4","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '9,14' WHERE 1=1  and category_id = '14';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 00:19:18 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Main 4","text_parent_category":"9","text_description":"Main 4","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '10,11,14' WHERE 1=1  and category_id = '9';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 00:20:36 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Main 5","text_parent_category":"9","text_description":"Main 5","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Main 5', 'main-5', '9', '', 'Main 5', '', '1', '2022-08-01 20:50:36');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 00:20:36 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Main 5","text_parent_category":"9","text_description":"Main 5","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '9,15' WHERE 1=1  and category_id = '15';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 00:20:36 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Main 5","text_parent_category":"9","text_description":"Main 5","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '10,11,14,15' WHERE 1=1  and category_id = '9';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 00:21:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/14 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"14","text_category_name":"Main 1.1.1","text_parent_category":"10","text_description":"Main 1.1.1","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '10,11,15' WHERE 1=1  and category_id = '9';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 00:21:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/14 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"14","text_category_name":"Main 1.1.1","text_parent_category":"10","text_description":"Main 1.1.1","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `category_name` = 'Main 1.1.1', `short_code` = 'main-1.1.1', `parent_category_id` = '10', `hierarchy` = '9,10,14', `brand_id` = '', `description` = 'Main 1.1.1', `category_image` = '', `modified_by` = '1', `modified` = '2022-08-01 20:51:31', `is_active` = 1 WHERE 1=1  and category_id = '14';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 00:21:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/14 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"14","text_category_name":"Main 1.1.1","text_parent_category":"10","text_description":"Main 1.1.1","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '12,13,14' WHERE 1=1  and category_id = '10';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 00:22:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/14 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"14","text_category_name":"Main 1.1.1","text_parent_category":"12","text_description":"Main 1.1.1","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '12,13' WHERE 1=1  and category_id = '10';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 00:22:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/14 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"14","text_category_name":"Main 1.1.1","text_parent_category":"12","text_description":"Main 1.1.1","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `category_name` = 'Main 1.1.1', `short_code` = 'main-1.1.1', `parent_category_id` = '12', `hierarchy` = '9,10,12,14', `brand_id` = '', `description` = 'Main 1.1.1', `category_image` = '', `modified_by` = '1', `modified` = '2022-08-01 20:52:32', `is_active` = 1 WHERE 1=1  and category_id = '14';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 00:22:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/14 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"14","text_category_name":"Main 1.1.1","text_parent_category":"12","text_description":"Main 1.1.1","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '14' WHERE 1=1  and category_id = '12';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:34:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/9 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"9","text_category_name":"Category-9","text_parent_category":"","text_description":"Category-9","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '' WHERE 1=1  and category_id = NULL;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:34:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/9 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"9","text_category_name":"Category-9","text_parent_category":"","text_description":"Category-9","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `category_name` = 'Category-9', `short_code` = 'category-9', `parent_category_id` = '', `hierarchy` = '9', `brand_id` = '', `description` = 'Category-9', `category_image` = '', `modified_by` = '1', `modified` = '2022-08-01 23:04:32', `is_active` = 1 WHERE 1=1  and category_id = '9';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:34:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/9 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"9","text_category_name":"Category-9","text_parent_category":"","text_description":"Category-9","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '9' WHERE 1=1  and category_id = '';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:34:49 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/10 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"10","text_category_name":"Category-10","text_parent_category":"9","text_description":"Main 1","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '' WHERE 1=1  and category_id = '0';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:34:49 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/10 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"10","text_category_name":"Category-10","text_parent_category":"9","text_description":"Main 1","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `category_name` = 'Category-10', `short_code` = 'category-10', `parent_category_id` = '9', `hierarchy` = '9,10', `brand_id` = '', `description` = 'Main 1', `category_image` = '', `modified_by` = '1', `modified` = '2022-08-01 23:04:49', `is_active` = 1 WHERE 1=1  and category_id = '10';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:34:49 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/10 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"10","text_category_name":"Category-10","text_parent_category":"9","text_description":"Main 1","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '10,11,15,10' WHERE 1=1  and category_id = '9';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:36:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category -5","text_parent_category":"","txt_brand_id":["1","5","7"],"text_description":"Category -5","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category -5', 'category-5', '', '1,5,7', 'Category -5', '', '1', '2022-08-01 23:06:15');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:36:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category -5","text_parent_category":"","txt_brand_id":["1","5","7"],"text_description":"Category -5","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '5' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:36:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category -5","text_parent_category":"","txt_brand_id":["1","5","7"],"text_description":"Category -5","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '5' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:36:34 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category -5","text_parent_category":"","txt_brand_id":["1","5","7"],"text_description":"Category -5","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category -5', 'category-5', '', '1,5,7', 'Category -5', '', '1', '2022-08-01 23:06:34');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:36:34 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category -5","text_parent_category":"","txt_brand_id":["1","5","7"],"text_description":"Category -5","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '6' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:36:34 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category -5","text_parent_category":"","txt_brand_id":["1","5","7"],"text_description":"Category -5","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '6' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:41:51 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category -5","text_parent_category":"","txt_brand_id":["1","5","7"],"text_description":"Category -5","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category -5', 'category-5', '', '1,5,7', 'Category -5', '', '1', '2022-08-01 23:11:51');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:41:51 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category -5","text_parent_category":"","txt_brand_id":["1","5","7"],"text_description":"Category -5","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '7' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:41:51 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category -5","text_parent_category":"","txt_brand_id":["1","5","7"],"text_description":"Category -5","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '7' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:43:16 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category -1","text_parent_category":"","txt_brand_id":["1","2"],"text_description":"Category -1","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category -1', 'category-1', '', '1,2', 'Category -1', '', '1', '2022-08-01 23:13:16');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:43:16 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category -1","text_parent_category":"","txt_brand_id":["1","2"],"text_description":"Category -1","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:43:16 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category -1","text_parent_category":"","txt_brand_id":["1","2"],"text_description":"Category -1","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '1' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:45:23 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1","text_parent_category":"","txt_brand_id":["1","2"],"text_description":"Category-1","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category-1', 'category-1', '', '1,2', 'Category-1', '', '1', '2022-08-01 23:15:23');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:45:23 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1","text_parent_category":"","txt_brand_id":["1","2"],"text_description":"Category-1","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:45:23 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1","text_parent_category":"","txt_brand_id":["1","2"],"text_description":"Category-1","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:45:47 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-2","text_parent_category":"","txt_brand_id":["3","4"],"text_description":"Category-2","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category-2', 'category-2', '', '3,4', 'Category-2', '', '1', '2022-08-01 23:15:47');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:45:47 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-2","text_parent_category":"","txt_brand_id":["3","4"],"text_description":"Category-2","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:45:47 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-2","text_parent_category":"","txt_brand_id":["3","4"],"text_description":"Category-2","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:46:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category -3","text_parent_category":"","txt_brand_id":["5","8"],"text_description":"Category -3","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category -3', 'category-3', '', '5,8', 'Category -3', '', '1', '2022-08-01 23:16:05');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:46:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category -3","text_parent_category":"","txt_brand_id":["5","8"],"text_description":"Category -3","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '3' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:46:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category -3","text_parent_category":"","txt_brand_id":["5","8"],"text_description":"Category -3","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:46:21 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category -4","text_parent_category":"","txt_brand_id":["5","8"],"text_description":"Category -4","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category -4', 'category-4', '', '5,8', 'Category -4', '', '1', '2022-08-01 23:16:21');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:46:21 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category -4","text_parent_category":"","txt_brand_id":["5","8"],"text_description":"Category -4","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '4' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:46:21 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category -4","text_parent_category":"","txt_brand_id":["5","8"],"text_description":"Category -4","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:46:44 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-5","text_parent_category":"","txt_brand_id":["2","7"],"text_description":"Category-5","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category-5', 'category-5', '', '2,7', 'Category-5', '', '1', '2022-08-01 23:16:44');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:46:44 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-5","text_parent_category":"","txt_brand_id":["2","7"],"text_description":"Category-5","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '5' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:46:44 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-5","text_parent_category":"","txt_brand_id":["2","7"],"text_description":"Category-5","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:47:23 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1.1","text_parent_category":"1","text_description":"Category-1.1","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category-1.1', 'category-1.1', '1', '', 'Category-1.1', '', '1', '2022-08-01 23:17:23');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:47:23 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1.1","text_parent_category":"1","text_description":"Category-1.1","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '5,6' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:47:23 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1.1","text_parent_category":"1","text_description":"Category-1.1","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:47:44 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1.2","text_parent_category":"1","text_description":"Category-1.2","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category-1.2', 'category-1.2', '1', '', 'Category-1.2', '', '1', '2022-08-01 23:17:44');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:47:44 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1.2","text_parent_category":"1","text_description":"Category-1.2","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '5,6,7' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:47:44 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1.2","text_parent_category":"1","text_description":"Category-1.2","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:48:16 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1.3","text_parent_category":"1","text_description":"Category-1.3","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category-1.3', 'category-1.3', '1', '', 'Category-1.3', '', '1', '2022-08-01 23:18:16');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:48:16 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1.3","text_parent_category":"1","text_description":"Category-1.3","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '5,6,7,8' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:48:16 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1.3","text_parent_category":"1","text_description":"Category-1.3","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:48:28 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1.4","text_parent_category":"1","text_description":"Category-1.4","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category-1.4', 'category-1.4', '1', '', 'Category-1.4', '', '1', '2022-08-01 23:18:28');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:48:28 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1.4","text_parent_category":"1","text_description":"Category-1.4","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '5,6,7,8,9' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:48:28 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1.4","text_parent_category":"1","text_description":"Category-1.4","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:55:09 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1","text_parent_category":"","txt_brand_id":["1"],"text_description":"Category-1","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category-1', 'category-1', '', '1', 'Category-1', '', '1', '2022-08-01 23:25:09');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:55:09 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1","text_parent_category":"","txt_brand_id":["1"],"text_description":"Category-1","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:55:09 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1","text_parent_category":"","txt_brand_id":["1"],"text_description":"Category-1","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:55:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-2","text_parent_category":"","txt_brand_id":["2"],"text_description":"Category-2","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category-2', 'category-2', '', '2', 'Category-2', '', '1', '2022-08-01 23:25:32');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:55:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-2","text_parent_category":"","txt_brand_id":["2"],"text_description":"Category-2","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:55:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-2","text_parent_category":"","txt_brand_id":["2"],"text_description":"Category-2","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:58:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category -3","text_parent_category":"","txt_brand_id":["5"],"text_description":"Category -3","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category -3', 'category-3', '', '5', 'Category -3', '', '1', '2022-08-01 23:28:05');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 02:59:25 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category -3","text_parent_category":"","text_description":"Category -3","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category -3', 'category-3', '', '', 'Category -3', '', '1', '2022-08-01 23:29:25');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:00:02 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category -3","text_parent_category":"","text_description":"Category -3","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category -3', 'category-3', '', '', 'Category -3', '', '1', '2022-08-01 23:30:02');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:00:41 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category -1","text_parent_category":"","text_description":"Category -1","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category -1', 'category-1', '', '', 'Category -1', '', '1', '2022-08-01 23:30:41');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:02:50 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category -1","text_parent_category":"","text_description":"Category -1","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category -1', 'category-1', '', '', 'Category -1', '', '1', '2022-08-01 23:32:50');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:02:50 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category -1","text_parent_category":"","text_description":"Category -1","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1' WHERE 1=1  and category_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:02:50 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category -1","text_parent_category":"","text_description":"Category -1","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:04:12 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-2","text_parent_category":"","text_description":"Category-2","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category-2', 'category-2', '', '', 'Category-2', '', '1', '2022-08-01 23:34:12');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:04:12 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-2","text_parent_category":"","text_description":"Category-2","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2' WHERE 1=1  and category_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:04:12 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-2","text_parent_category":"","text_description":"Category-2","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:04:31 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category -3","text_parent_category":"","text_description":"Category -3","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category -3', 'category-3', '', '', 'Category -3', '', '1', '2022-08-01 23:34:31');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:04:31 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category -3","text_parent_category":"","text_description":"Category -3","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '3' WHERE 1=1  and category_id = '3';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:04:31 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category -3","text_parent_category":"","text_description":"Category -3","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:04:54 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-4","text_parent_category":"","text_description":"Category-4","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category-4', 'category-4', '', '', 'Category-4', '', '1', '2022-08-01 23:34:54');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:04:54 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-4","text_parent_category":"","text_description":"Category-4","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '4' WHERE 1=1  and category_id = '4';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:04:54 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-4","text_parent_category":"","text_description":"Category-4","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:05:51 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1.1","text_parent_category":"1","text_description":"Category-1.1","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category-1.1', 'category-1.1', '1', '', 'Category-1.1', '', '1', '2022-08-01 23:35:51');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:05:51 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1.1","text_parent_category":"1","text_description":"Category-1.1","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,5' WHERE 1=1  and category_id = '5';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:05:51 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1.1","text_parent_category":"1","text_description":"Category-1.1","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:07:28 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/5 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"5","text_category_name":"Category-1.1","text_parent_category":"1","text_description":"Category-1.1","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '' WHERE 1=1  and category_id = '0';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:07:28 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/5 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"5","text_category_name":"Category-1.1","text_parent_category":"1","text_description":"Category-1.1","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `category_name` = 'Category-1.1', `short_code` = 'category-1.1', `parent_category_id` = '1', `hierarchy` = '1,5', `brand_id` = '', `description` = 'Category-1.1', `category_image` = '', `modified_by` = '1', `modified` = '2022-08-01 23:37:28', `is_active` = 1 WHERE 1=1  and category_id = '5';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:07:28 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/5 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"5","text_category_name":"Category-1.1","text_parent_category":"1","text_description":"Category-1.1","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '5' WHERE 1=1  and category_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:07:59 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1.2","text_parent_category":"1","text_description":"Category-1.2","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category-1.2', 'category-1.2', '1', '', 'Category-1.2', '', '1', '2022-08-01 23:37:59');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:07:59 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1.2","text_parent_category":"1","text_description":"Category-1.2","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,6' WHERE 1=1  and category_id = '6';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:07:59 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1.2","text_parent_category":"1","text_description":"Category-1.2","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '5,6' WHERE 1=1 ;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:09:31 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1.3","text_parent_category":"1","text_description":"","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category-1.3', 'category-1.3', '1', '', '', '', '1', '2022-08-01 23:39:31');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:09:31 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1.3","text_parent_category":"1","text_description":"","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,7' WHERE 1=1  and category_id = '7';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:09:31 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1.3","text_parent_category":"1","text_description":"","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '5,6,7' WHERE 1=1  and category_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:10:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-2.1","text_parent_category":"2","text_description":"Category-2.1","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category-2.1', 'category-2.1', '2', '', 'Category-2.1', '', '1', '2022-08-01 23:40:15');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:10:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-2.1","text_parent_category":"2","text_description":"Category-2.1","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2,8' WHERE 1=1  and category_id = '8';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:10:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-2.1","text_parent_category":"2","text_description":"Category-2.1","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '8' WHERE 1=1  and category_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:11:17 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-2.2","text_parent_category":"2","text_description":"Category-2.2","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category-2.2', 'category-2.2', '2', '', 'Category-2.2', '', '1', '2022-08-01 23:41:17');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:11:17 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-2.2","text_parent_category":"2","text_description":"Category-2.2","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2,9' WHERE 1=1  and category_id = '9';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:11:17 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-2.2","text_parent_category":"2","text_description":"Category-2.2","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '8,9' WHERE 1=1  and category_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:11:40 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-2.3","text_parent_category":"2","text_description":"Category-2.2","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category-2.3', 'category-2.3', '2', '', 'Category-2.2', '', '1', '2022-08-01 23:41:40');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:11:41 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-2.3","text_parent_category":"2","text_description":"Category-2.2","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2,10' WHERE 1=1  and category_id = '10';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:11:41 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-2.3","text_parent_category":"2","text_description":"Category-2.2","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '8,9,10' WHERE 1=1  and category_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:11:53 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/10 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"10","text_category_name":"Category-2.3","text_parent_category":"2","text_description":"Category-2.3","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '' WHERE 1=1  and category_id = '0';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:11:53 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/10 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"10","text_category_name":"Category-2.3","text_parent_category":"2","text_description":"Category-2.3","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `category_name` = 'Category-2.3', `short_code` = 'category-2.3', `parent_category_id` = '2', `hierarchy` = '2,10', `brand_id` = '', `description` = 'Category-2.3', `category_image` = '', `modified_by` = '1', `modified` = '2022-08-01 23:41:53', `is_active` = 1 WHERE 1=1  and category_id = '10';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:11:53 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/10 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"10","text_category_name":"Category-2.3","text_parent_category":"2","text_description":"Category-2.3","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '8,9,10,10' WHERE 1=1  and category_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:12:20 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-3.1","text_parent_category":"3","text_description":"Category-3.1","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category-3.1', 'category-3.1', '3', '', 'Category-3.1', '', '1', '2022-08-01 23:42:20');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:12:20 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-3.1","text_parent_category":"3","text_description":"Category-3.1","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '3,11' WHERE 1=1  and category_id = '11';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:12:20 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-3.1","text_parent_category":"3","text_description":"Category-3.1","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '11' WHERE 1=1  and category_id = '3';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:12:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-3.2","text_parent_category":"3","text_description":"Category-3.2","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category-3.2', 'category-3.2', '3', '', 'Category-3.2', '', '1', '2022-08-01 23:42:32');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:12:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-3.2","text_parent_category":"3","text_description":"Category-3.2","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '3,12' WHERE 1=1  and category_id = '12';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:12:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-3.2","text_parent_category":"3","text_description":"Category-3.2","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '11,12' WHERE 1=1  and category_id = '3';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:12:45 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-3.3","text_parent_category":"3","text_description":"Category-3.3","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category-3.3', 'category-3.3', '3', '', 'Category-3.3', '', '1', '2022-08-01 23:42:45');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:12:45 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-3.3","text_parent_category":"3","text_description":"Category-3.3","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '3,13' WHERE 1=1  and category_id = '13';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:12:45 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-3.3","text_parent_category":"3","text_description":"Category-3.3","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '11,12,13' WHERE 1=1  and category_id = '3';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:13:02 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-4.1","text_parent_category":"4","text_description":"Category-4.1","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category-4.1', 'category-4.1', '4', '', 'Category-4.1', '', '1', '2022-08-01 23:43:02');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:13:02 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-4.1","text_parent_category":"4","text_description":"Category-4.1","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '4,14' WHERE 1=1  and category_id = '14';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:13:02 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-4.1","text_parent_category":"4","text_description":"Category-4.1","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '14' WHERE 1=1  and category_id = '4';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:13:19 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-4.2","text_parent_category":"4","text_description":"Category-4.2","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category-4.2', 'category-4.2', '4', '', 'Category-4.2', '', '1', '2022-08-01 23:43:19');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:13:19 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-4.2","text_parent_category":"4","text_description":"Category-4.2","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '4,15' WHERE 1=1  and category_id = '15';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:13:19 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-4.2","text_parent_category":"4","text_description":"Category-4.2","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '14,15' WHERE 1=1  and category_id = '4';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:13:30 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-4.3","text_parent_category":"4","text_description":"Category-4.3","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category-4.3', 'category-4.3', '4', '', 'Category-4.3', '', '1', '2022-08-01 23:43:30');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:13:30 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-4.3","text_parent_category":"4","text_description":"Category-4.3","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '4,16' WHERE 1=1  and category_id = '16';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:13:30 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-4.3","text_parent_category":"4","text_description":"Category-4.3","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '14,15,16' WHERE 1=1  and category_id = '4';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:14:48 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1.1.1","text_parent_category":"5","text_description":"Category-1.1.1","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category-1.1.1', 'category-1.1.1', '5', '', 'Category-1.1.1', '', '1', '2022-08-01 23:44:48');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:14:48 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1.1.1","text_parent_category":"5","text_description":"Category-1.1.1","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,5,17' WHERE 1=1  and category_id = '17';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:14:48 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1.1.1","text_parent_category":"5","text_description":"Category-1.1.1","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '17' WHERE 1=1  and category_id = '5';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:16:03 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1.1.2","text_parent_category":"5","text_description":"Category-1.1.2","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category-1.1.2', 'category-1.1.2', '5', '', 'Category-1.1.2', '', '1', '2022-08-01 23:46:03');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:16:03 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1.1.2","text_parent_category":"5","text_description":"Category-1.1.2","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,5,18' WHERE 1=1  and category_id = '18';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:16:03 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1.1.2","text_parent_category":"5","text_description":"Category-1.1.2","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '17,18' WHERE 1=1  and category_id = '5';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:16:18 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1.1.3","text_parent_category":"5","text_description":"Category-1.1.3","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category-1.1.3', 'category-1.1.3', '5', '', 'Category-1.1.3', '', '1', '2022-08-01 23:46:18');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:16:18 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1.1.3","text_parent_category":"5","text_description":"Category-1.1.3","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,5,19' WHERE 1=1  and category_id = '19';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:16:18 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-1.1.3","text_parent_category":"5","text_description":"Category-1.1.3","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '17,18,19' WHERE 1=1  and category_id = '5';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:17:24 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-2.1.1","text_parent_category":"8","text_description":"Category-2.1.1","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category-2.1.1', 'category-2.1.1', '8', '', 'Category-2.1.1', '', '1', '2022-08-01 23:47:24');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:17:24 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-2.1.1","text_parent_category":"8","text_description":"Category-2.1.1","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2,8,20' WHERE 1=1  and category_id = '20';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:17:24 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-2.1.1","text_parent_category":"8","text_description":"Category-2.1.1","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '20' WHERE 1=1  and category_id = '8';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:17:39 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-2.1.2","text_parent_category":"8","text_description":"Category-2.1.2","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category-2.1.2', 'category-2.1.2', '8', '', 'Category-2.1.2', '', '1', '2022-08-01 23:47:39');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:17:39 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-2.1.2","text_parent_category":"8","text_description":"Category-2.1.2","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2,8,21' WHERE 1=1  and category_id = '21';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:17:39 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-2.1.2","text_parent_category":"8","text_description":"Category-2.1.2","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '20,21' WHERE 1=1  and category_id = '8';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:17:58 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-2.1.3","text_parent_category":"8","text_description":"Category-2.1.3","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category-2.1.3', 'category-2.1.3', '8', '', 'Category-2.1.3', '', '1', '2022-08-01 23:47:57');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:17:58 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-2.1.3","text_parent_category":"8","text_description":"Category-2.1.3","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2,8,22' WHERE 1=1  and category_id = '22';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 03:17:58 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-2.1.3","text_parent_category":"8","text_description":"Category-2.1.3","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '20,21,22' WHERE 1=1  and category_id = '8';
#End*******************************************************************************************************

