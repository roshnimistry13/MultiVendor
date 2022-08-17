<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 05-08-2022 21:37:17 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/1 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"1","text_category_name":"Category -1","text_parent_category":"","text_description":"Category -1","txt_elements":["1","2","3","4","5","6"],"old_category_image":"coronavirus_1638032825.png","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '' WHERE 1=1  and category_id = NULL;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 05-08-2022 21:37:17 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/1 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"1","text_category_name":"Category -1","text_parent_category":"","text_description":"Category -1","txt_elements":["1","2","3","4","5","6"],"old_category_image":"coronavirus_1638032825.png","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `category_name` = 'Category -1', `short_code` = 'category-1', `parent_category_id` = '', `hierarchy` = '1', `element_id` = '1,2,3,4,5,6', `description` = 'Category -1', `category_image` = 'coronavirus_1638032825.png', `modified_by` = '1', `modified` = '2022-08-05 18:07:17', `is_active` = 1 WHERE 1=1  and category_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 05-08-2022 21:37:17 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/1 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"1","text_category_name":"Category -1","text_parent_category":"","text_description":"Category -1","txt_elements":["1","2","3","4","5","6"],"old_category_image":"coronavirus_1638032825.png","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '1' WHERE 1=1  and category_id = '';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 05-08-2022 22:39:11 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"","text_description":"Other","txt_elements":["1","2","3","4","5","6","7","8","9"],"old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Other', 'other', '', '1,2,3,4,5,6,7,8,9', 'Other', '', '1', '2022-08-05 19:09:11');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 05-08-2022 22:39:11 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"","text_description":"Other","txt_elements":["1","2","3","4","5","6","7","8","9"],"old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '24' WHERE 1=1  and category_id = '24';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 05-08-2022 22:39:11 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"","text_description":"Other","txt_elements":["1","2","3","4","5","6","7","8","9"],"old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '24' WHERE 1=1  and category_id = '';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 05-08-2022 22:39:50 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"1","text_description":"Other For category 1","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Other', 'other', '1', '', 'Other For category 1', '', '1', '2022-08-05 19:09:50');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 05-08-2022 22:39:50 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"1","text_description":"Other For category 1","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,25' WHERE 1=1  and category_id = '25';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 05-08-2022 22:39:50 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"1","text_description":"Other For category 1","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '5,6,7,23,25' WHERE 1=1  and category_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 05-08-2022 22:54:33 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Admin/Category/updateStatus #CurrentURLEnd
#Request : {"id":"24","status":"0"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `modified_by` = '1', `modified` = '2022-08-05 19:24:33', `is_active` = '0' WHERE 1=1  and category_id = '24';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 05-08-2022 22:54:36 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Admin/Category/updateStatus #CurrentURLEnd
#Request : {"id":"25","status":"0"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `modified_by` = '1', `modified` = '2022-08-05 19:24:36', `is_active` = '0' WHERE 1=1  and category_id = '25';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 05-08-2022 23:03:58 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Admin/Category/updateStatus #CurrentURLEnd
#Request : {"id":"24","status":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `modified_by` = '1', `modified` = '2022-08-05 19:33:58', `is_active` = '1' WHERE 1=1  and category_id = '24';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 05-08-2022 23:04:00 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Admin/Category/updateStatus #CurrentURLEnd
#Request : {"id":"25","status":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `modified_by` = '1', `modified` = '2022-08-05 19:34:00', `is_active` = '1' WHERE 1=1  and category_id = '25';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 05-08-2022 23:04:38 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"2","text_description":"other for category 2","txt_elements":["1","2","3","4","5","6","7","8","9"],"old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Other', 'other', '2', '1,2,3,4,5,6,7,8,9', 'other for category 2', '', '1', '2022-08-05 19:34:38');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 05-08-2022 23:04:38 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"2","text_description":"other for category 2","txt_elements":["1","2","3","4","5","6","7","8","9"],"old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2,26' WHERE 1=1  and category_id = '26';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 05-08-2022 23:04:38 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Other","text_parent_category":"2","text_description":"other for category 2","txt_elements":["1","2","3","4","5","6","7","8","9"],"old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '8,9,10,10,26' WHERE 1=1  and category_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 05-08-2022 23:05:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"other","text_parent_category":"3","text_description":"other for category 3","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('other', 'other', '3', '', 'other for category 3', '', '1', '2022-08-05 19:35:05');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 05-08-2022 23:05:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"other","text_parent_category":"3","text_description":"other for category 3","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '3,27' WHERE 1=1  and category_id = '27';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 05-08-2022 23:05:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"other","text_parent_category":"3","text_description":"other for category 3","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '11,12,13,27' WHERE 1=1  and category_id = '3';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 05-08-2022 23:05:25 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"other","text_parent_category":"5","text_description":"","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `created`) VALUES('other', 'other', '5', '', '', '', '1', '2022-08-05 19:35:25');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 05-08-2022 23:05:25 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"other","text_parent_category":"5","text_description":"","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '1,5,28' WHERE 1=1  and category_id = '28';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 05-08-2022 23:05:25 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"other","text_parent_category":"5","text_description":"","old_category_image":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '17,18,19,28' WHERE 1=1  and category_id = '5';
#End*******************************************************************************************************

