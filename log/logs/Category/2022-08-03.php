<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 03-08-2022 03:30:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/1 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"1","text_category_name":"Category -1","text_parent_category":"","txt_elements":["1","2"],"text_description":"Category -1","old_category_image":"coronavirus_1638032825.png","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '' WHERE 1=1  and category_id = NULL;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 03:30:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/1 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"1","text_category_name":"Category -1","text_parent_category":"","txt_elements":["1","2"],"text_description":"Category -1","old_category_image":"coronavirus_1638032825.png","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `category_name` = 'Category -1', `short_code` = 'category-1', `parent_category_id` = '', `hierarchy` = '1', `brand_id` = '', `element_id` = '1,2', `description` = 'Category -1', `category_image` = 'coronavirus_1638032825.png', `modified_by` = '1', `modified` = '2022-08-03 00:00:05', `is_active` = 1 WHERE 1=1  and category_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 03:30:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/1 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"1","text_category_name":"Category -1","text_parent_category":"","txt_elements":["1","2"],"text_description":"Category -1","old_category_image":"coronavirus_1638032825.png","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '1' WHERE 1=1  and category_id = '';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 04:02:55 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"rr","text_parent_category":"1","text_description":"","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('rr', 'rr', '1', '', '', '', '', '1', '2022-08-03 00:32:55');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 04:02:55 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"rr","text_parent_category":"1","text_description":"","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,23' WHERE 1=1  and category_id = '23';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 04:02:55 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"rr","text_parent_category":"1","text_description":"","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '5,6,7,23' WHERE 1=1  and category_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 04:04:13 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/1 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"1","text_category_name":"Category -1","text_parent_category":"","txt_elements":["1","2","3","4","5","6"],"text_description":"Category -1","old_category_image":"coronavirus_1638032825.png","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '' WHERE 1=1  and category_id = NULL;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 04:04:13 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/1 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"1","text_category_name":"Category -1","text_parent_category":"","txt_elements":["1","2","3","4","5","6"],"text_description":"Category -1","old_category_image":"coronavirus_1638032825.png","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `category_name` = 'Category -1', `short_code` = 'category-1', `parent_category_id` = '', `hierarchy` = '1', `brand_id` = '', `element_id` = '1,2,3,4,5,6', `description` = 'Category -1', `category_image` = 'coronavirus_1638032825.png', `modified_by` = '1', `modified` = '2022-08-03 00:34:13', `is_active` = 1 WHERE 1=1  and category_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 04:04:13 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/1 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"1","text_category_name":"Category -1","text_parent_category":"","txt_elements":["1","2","3","4","5","6"],"text_description":"Category -1","old_category_image":"coronavirus_1638032825.png","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '1' WHERE 1=1  and category_id = '';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 04:04:34 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/2 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"2","text_category_name":"Category-2","text_parent_category":"","txt_elements":["9"],"text_description":"Category-2","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '' WHERE 1=1  and category_id = NULL;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 04:04:34 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/2 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"2","text_category_name":"Category-2","text_parent_category":"","txt_elements":["9"],"text_description":"Category-2","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `category_name` = 'Category-2', `short_code` = 'category-2', `parent_category_id` = '', `hierarchy` = '2', `brand_id` = '', `element_id` = '9', `description` = 'Category-2', `category_image` = '', `modified_by` = '1', `modified` = '2022-08-03 00:34:34', `is_active` = 1 WHERE 1=1  and category_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 04:04:34 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/2 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"2","text_category_name":"Category-2","text_parent_category":"","txt_elements":["9"],"text_description":"Category-2","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '2' WHERE 1=1  and category_id = '';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 04:04:45 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/3 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"3","text_category_name":"Category -3","text_parent_category":"","txt_elements":["8"],"text_description":"Category -3","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '' WHERE 1=1  and category_id = NULL;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 04:04:45 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/3 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"3","text_category_name":"Category -3","text_parent_category":"","txt_elements":["8"],"text_description":"Category -3","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `category_name` = 'Category -3', `short_code` = 'category-3', `parent_category_id` = '', `hierarchy` = '3', `brand_id` = '', `element_id` = '8', `description` = 'Category -3', `category_image` = '', `modified_by` = '1', `modified` = '2022-08-03 00:34:45', `is_active` = 1 WHERE 1=1  and category_id = '3';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 04:04:45 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/3 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"3","text_category_name":"Category -3","text_parent_category":"","txt_elements":["8"],"text_description":"Category -3","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '3' WHERE 1=1  and category_id = '';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 04:05:00 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/4 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"4","text_category_name":"Category-4","text_parent_category":"","txt_elements":["7"],"text_description":"Category-4","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '' WHERE 1=1  and category_id = NULL;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 04:05:00 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/4 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"4","text_category_name":"Category-4","text_parent_category":"","txt_elements":["7"],"text_description":"Category-4","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `category_name` = 'Category-4', `short_code` = 'category-4', `parent_category_id` = '', `hierarchy` = '4', `brand_id` = '', `element_id` = '7', `description` = 'Category-4', `category_image` = '', `modified_by` = '1', `modified` = '2022-08-03 00:35:00', `is_active` = 1 WHERE 1=1  and category_id = '4';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 04:05:00 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/4 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"4","text_category_name":"Category-4","text_parent_category":"","txt_elements":["7"],"text_description":"Category-4","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '4' WHERE 1=1  and category_id = '';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 04:30:48 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/23 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"23","text_category_name":"rr","text_parent_category":"1","text_description":"","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '' WHERE 1=1  and category_id = '0';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 04:31:02 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/23 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"23","text_category_name":"rr","text_parent_category":"1","text_description":"","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '' WHERE 1=1  and category_id = '0';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 04:31:02 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/23 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"23","text_category_name":"rr","text_parent_category":"1","text_description":"","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `category_name` = 'rr', `short_code` = 'rr', `parent_category_id` = '1', `hierarchy` = '1,23', `brand_id` = '', `element_id` = '', `description` = '', `category_image` = '', `modified_by` = '1', `modified` = '2022-08-03 01:01:02', `is_active` = 1 WHERE 1=1  and category_id = '23';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 04:31:02 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/23 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"23","text_category_name":"rr","text_parent_category":"1","text_description":"","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '5,6,7,23,23' WHERE 1=1  and category_id = '1';
#End*******************************************************************************************************

