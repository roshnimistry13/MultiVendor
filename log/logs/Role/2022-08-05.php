<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 05-08-2022 22:10:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-role/3 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-role #CurrentURLEnd
#Request : {"text_role_id":"3","text_role_name":"Vendor","text_description":"#","text_is_active":"1","menu":["6","7"],"submenu_6":["11","12"],"submenu_7":["13"]} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE role SET `role_name` = 'Vendor', `role_description` = '#', `updated_by` = '1', `update_at` = '2022-08-05 18:40:15', `is_active` = 1 WHERE 1=1  and role_id = '3';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 05-08-2022 22:10:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-role/3 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-role #CurrentURLEnd
#Request : {"text_role_id":"3","text_role_name":"Vendor","text_description":"#","text_is_active":"1","menu":["6","7"],"submenu_6":["11","12"],"submenu_7":["13"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('3', '6', '11,12', '1', '2022-08-05 18:40:15', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 05-08-2022 22:10:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-role/3 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-role #CurrentURLEnd
#Request : {"text_role_id":"3","text_role_name":"Vendor","text_description":"#","text_is_active":"1","menu":["6","7"],"submenu_6":["11","12"],"submenu_7":["13"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('3', '7', '13', '1', '2022-08-05 18:40:15', 1);
#End*******************************************************************************************************

