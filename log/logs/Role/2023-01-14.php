<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 14-01-2023 03:44:18 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-role/3 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-role #CurrentURLEnd
#Request : {"text_role_id":"3","text_role_name":"Vendor","text_description":"#","text_is_active":"1","menu":["1","6","7","15","17"],"submenu_1":["1","2"],"submenu_6":["11","12","34"],"submenu_7":["13","26","27","28","29","30","31","33"]} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE role SET `role_name` = 'Vendor', `role_description` = '#', `updated_by` = '999', `update_at` = '2023-01-14 03:44:18', `is_active` = 1 WHERE 1=1  and role_id = '3';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 14-01-2023 03:44:18 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-role/3 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-role #CurrentURLEnd
#Request : {"text_role_id":"3","text_role_name":"Vendor","text_description":"#","text_is_active":"1","menu":["1","6","7","15","17"],"submenu_1":["1","2"],"submenu_6":["11","12","34"],"submenu_7":["13","26","27","28","29","30","31","33"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('3', '1', '1,2', '999', '2023-01-14 03:44:18', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 14-01-2023 03:44:18 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-role/3 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-role #CurrentURLEnd
#Request : {"text_role_id":"3","text_role_name":"Vendor","text_description":"#","text_is_active":"1","menu":["1","6","7","15","17"],"submenu_1":["1","2"],"submenu_6":["11","12","34"],"submenu_7":["13","26","27","28","29","30","31","33"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('3', '6', '11,12,34', '999', '2023-01-14 03:44:18', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 14-01-2023 03:44:18 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-role/3 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-role #CurrentURLEnd
#Request : {"text_role_id":"3","text_role_name":"Vendor","text_description":"#","text_is_active":"1","menu":["1","6","7","15","17"],"submenu_1":["1","2"],"submenu_6":["11","12","34"],"submenu_7":["13","26","27","28","29","30","31","33"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('3', '7', '13,26,27,28,29,30,31,33', '999', '2023-01-14 03:44:18', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 14-01-2023 03:44:18 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-role/3 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-role #CurrentURLEnd
#Request : {"text_role_id":"3","text_role_name":"Vendor","text_description":"#","text_is_active":"1","menu":["1","6","7","15","17"],"submenu_1":["1","2"],"submenu_6":["11","12","34"],"submenu_7":["13","26","27","28","29","30","31","33"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('3', '15', '', '999', '2023-01-14 03:44:18', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 14-01-2023 03:44:18 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-role/3 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-role #CurrentURLEnd
#Request : {"text_role_id":"3","text_role_name":"Vendor","text_description":"#","text_is_active":"1","menu":["1","6","7","15","17"],"submenu_1":["1","2"],"submenu_6":["11","12","34"],"submenu_7":["13","26","27","28","29","30","31","33"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('3', '17', '', '999', '2023-01-14 03:44:18', 1);
#End*******************************************************************************************************

