<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 30-08-2022 01:50:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/7 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"7","text_category_name":"Sports","text_parent_category":"","text_description":"Sports","txt_elements":["1","2","4","5"],"old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '' WHERE 1=1  and category_id = '0';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 30-08-2022 01:50:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/7 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"7","text_category_name":"Sports","text_parent_category":"","text_description":"Sports","txt_elements":["1","2","4","5"],"old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `category_name` = 'Sports', `short_code` = 'sports', `parent_category_id` = '', `hierarchy` = '7', `element_id` = '1,2,4,5', `description` = 'Sports', `category_image` = '', `modified_by` = '1', `modified` = '2022-08-30 01:50:52', `is_active` = 1 WHERE 1=1  and category_id = '7';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 30-08-2022 01:50:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/7 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"7","text_category_name":"Sports","text_parent_category":"","text_description":"Sports","txt_elements":["1","2","4","5"],"old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '7' WHERE 1=1  and category_id = '';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 30-08-2022 21:41:03 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/1 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"1","text_category_name":"Electronics","text_parent_category":"","text_description":"Electronics","txt_elements":["2","7","8"],"old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '' WHERE 1=1  and category_id = '0';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 30-08-2022 21:41:03 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/1 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"1","text_category_name":"Electronics","text_parent_category":"","text_description":"Electronics","txt_elements":["2","7","8"],"old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `category_name` = 'Electronics', `short_code` = 'electronics', `parent_category_id` = '', `hierarchy` = '1', `element_id` = '2,7,8', `description` = 'Electronics', `category_image` = '', `modified_by` = '1', `modified` = '2022-08-30 21:41:03', `is_active` = 1 WHERE 1=1  and category_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 30-08-2022 21:41:03 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/1 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"1","text_category_name":"Electronics","text_parent_category":"","text_description":"Electronics","txt_elements":["2","7","8"],"old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '1' WHERE 1=1  and category_id = '';
#End*******************************************************************************************************

