<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 30-07-2022 03:54:50 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/7 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"7","text_category_name":"Category-7","text_parent_category":"1","txt_brand_id":"3","text_description":"Category-7","old_category_image":"icmoneybhaskar1_1585399179.png","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `category_name` = 'Category-7', `short_code` = 'category-7', `parent_category_id` = '1', `brand_id` = NULL, `description` = 'Category-7', `category_image` = 'icmoneybhaskar1_1585399179.png', `modified_by` = '1', `modified` = '2022-07-30 00:24:50', `is_active` = 1 WHERE 1=1  and category_id = '7';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 30-07-2022 03:58:12 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/7 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"7","text_category_name":"Category-7","text_parent_category":"1","txt_brand_id":["1","2","3"],"text_description":"Category-7","old_category_image":"icmoneybhaskar1_1585399179.png","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `category_name` = 'Category-7', `short_code` = 'category-7', `parent_category_id` = '1', `brand_id` = '1,2,3', `description` = 'Category-7', `category_image` = 'icmoneybhaskar1_1585399179.png', `modified_by` = '1', `modified` = '2022-07-30 00:28:12', `is_active` = 1 WHERE 1=1  and category_id = '7';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 30-07-2022 04:11:53 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/6 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"6","text_category_name":"Category -6","text_parent_category":"","txt_brand_id":"7","text_description":"Category -6","old_category_image":"coffe-glass.png","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `category_name` = 'Category -6', `short_code` = 'category-6', `parent_category_id` = '', `brand_id` = NULL, `description` = 'Category -6', `category_image` = 'coffe-glass.png', `modified_by` = '1', `modified` = '2022-07-30 00:41:53', `is_active` = 1 WHERE 1=1  and category_id = '6';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 30-07-2022 04:12:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/6 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"6","text_category_name":"Category -6","text_parent_category":"","txt_brand_id":["5","7"],"text_description":"Category -6","old_category_image":"coffe-glass.png","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `category_name` = 'Category -6', `short_code` = 'category-6', `parent_category_id` = '', `brand_id` = '5,7', `description` = 'Category -6', `category_image` = 'coffe-glass.png', `modified_by` = '1', `modified` = '2022-07-30 00:42:32', `is_active` = 1 WHERE 1=1  and category_id = '6';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 30-07-2022 04:13:11 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/6 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"6","text_category_name":"Category -6","text_parent_category":"","txt_brand_id":["5","7"],"text_description":"Category -6","old_category_image":"coffe-glass.png","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `category_name` = 'Category -6', `short_code` = 'category-6', `parent_category_id` = '', `brand_id` = '5,7', `description` = 'Category -6', `category_image` = 'coffe-glass.png', `modified_by` = '1', `modified` = '2022-07-30 00:43:11', `is_active` = 1 WHERE 1=1  and category_id = '6';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 30-07-2022 22:11:01 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-category #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Category-8","text_parent_category":"","txt_brand_id":["1"],"text_description":"Lorem ipsum dolor sit ame","old_category_image":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `brand_id`, `description`, `category_image`, `created_by`, `created`) VALUES('Category-8', 'category-8', '', '1', 'Lorem ipsum dolor sit ame', '', '2', '2022-07-30 18:41:01');
#End*******************************************************************************************************

