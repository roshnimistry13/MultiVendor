<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 26-07-2022 04:58:19 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-menu/10 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-menu #CurrentURLEnd
#Request : {"text_menu_id":"10","text_menu_name":"Test","text_menu_link":"test","text_menu_icon":"sssss","text_menu_position":"10","text_is_active":"1","submenu":["1"]} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE menu_details SET `menu_name` = 'Test', `menu_link` = 'test', `menu_icon` = 'sssss', `menu_position` = '10', `submenu_id` = '1', `menu_update_by` = '1', `menu_update_date` = '2022-07-26 01:28:19', `menu_status` = 1 WHERE 1=1  and menu_id = '10';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 04:58:26 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-menu/10 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-menu #CurrentURLEnd
#Request : {"text_menu_id":"10","text_menu_name":"Test","text_menu_link":"test","text_menu_icon":"sssss","text_menu_position":"10","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE menu_details SET `menu_name` = 'Test', `menu_link` = 'test', `menu_icon` = 'sssss', `menu_position` = '10', `submenu_id` = NULL, `menu_update_by` = '1', `menu_update_date` = '2022-07-26 01:28:26', `menu_status` = 1 WHERE 1=1  and menu_id = '10';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 04:59:16 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/add-menu #ReferrerEnd
#Current URL: http://localhost/Admin/submit-menu #CurrentURLEnd
#Request : {"text_menu_id":"","text_menu_name":"Vendor","text_menu_link":"vendor","text_menu_icon":"<i class=\"feather-home\"><\/i>","text_menu_position":"12"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO menu_details(`menu_name`, `menu_link`, `menu_icon`, `menu_position`, `submenu_id`, `menu_add_by`, `menu_add_date`, `menu_status`) VALUES('Vendor', 'vendor', '<i class="feather-home"></i>', '12', NULL, '1', '2022-07-26 01:29:16', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:08:46 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-menu/10 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-menu #CurrentURLEnd
#Request : {"text_menu_id":"10","text_menu_name":"Setting","text_menu_link":"#","text_menu_icon":"<i class=\"feather-home\"><\/i>","text_menu_position":"11","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE menu_details SET `menu_name` = 'Setting', `menu_link` = '#', `menu_icon` = '<i class="feather-home"></i>', `menu_position` = '11', `submenu_id` = NULL, `menu_update_by` = '1', `menu_update_date` = '2022-07-26 18:38:45', `menu_status` = 1 WHERE 1=1  and menu_id = '10';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:09:30 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-menu/11 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-menu #CurrentURLEnd
#Request : {"text_menu_id":"11","text_menu_name":"Vendor","text_menu_link":"vendor","text_menu_icon":"<i class=\"feather-home\"><\/i>","text_menu_position":"10","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE menu_details SET `menu_name` = 'Vendor', `menu_link` = 'vendor', `menu_icon` = '<i class="feather-home"></i>', `menu_position` = '10', `submenu_id` = NULL, `menu_update_by` = '1', `menu_update_date` = '2022-07-26 18:39:30', `menu_status` = 1 WHERE 1=1  and menu_id = '11';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:11:56 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-menu/10 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-menu #CurrentURLEnd
#Request : {"text_menu_id":"10","text_menu_name":"Setting","text_menu_link":"#","text_menu_icon":"<i class=\"feather-home\"><\/i>","text_menu_position":"11","text_is_active":"1","submenu":["18","19","20"]} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE menu_details SET `menu_name` = 'Setting', `menu_link` = '#', `menu_icon` = '<i class="feather-home"></i>', `menu_position` = '11', `submenu_id` = '18,19,20', `menu_update_by` = '1', `menu_update_date` = '2022-07-26 18:41:56', `menu_status` = 1 WHERE 1=1  and menu_id = '10';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:35:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-menu/11 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-menu #CurrentURLEnd
#Request : {"text_menu_id":"11","text_menu_name":"Vendor","text_menu_link":"vendor","text_menu_icon":"<i class=\"feather-home\"><\/i>","text_menu_position":"10","text_is_active":"1","submenu":["21","22"]} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE menu_details SET `menu_name` = 'Vendor', `menu_link` = 'vendor', `menu_icon` = '<i class="feather-home"></i>', `menu_position` = '10', `submenu_id` = '21,22', `menu_update_by` = '1', `menu_update_date` = '2022-07-26 19:05:52', `menu_status` = 1 WHERE 1=1  and menu_id = '11';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:59:56 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-menu/10 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-menu #CurrentURLEnd
#Request : {"text_menu_id":"10","text_menu_name":"Setting","text_menu_link":"#","text_menu_icon":"<i class=\"feather-home\"><\/i>","text_menu_position":"11","text_is_active":"1","submenu":["18","19","20","23"]} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE menu_details SET `menu_name` = 'Setting', `menu_link` = '#', `menu_icon` = '<i class="feather-home"></i>', `menu_position` = '11', `submenu_id` = '18,19,20,23', `menu_update_by` = '1', `menu_update_date` = '2022-07-26 19:29:56', `menu_status` = 1 WHERE 1=1  and menu_id = '10';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 27-07-2022 00:05:58 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-menu/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-menu #CurrentURLEnd
#Request : {"text_menu_id":"2","text_menu_name":"category","text_menu_link":"#","text_menu_icon":"list","text_menu_position":"2","text_is_active":"1","submenu":["3","4"]} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE menu_details SET `menu_name` = 'category', `menu_link` = '#', `menu_icon` = 'list', `menu_position` = '2', `submenu_id` = '3,4', `menu_update_by` = '1', `menu_update_date` = '2022-07-26 20:35:58', `menu_status` = 1 WHERE 1=1  and menu_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 27-07-2022 00:07:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-menu/3 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-menu #CurrentURLEnd
#Request : {"text_menu_id":"3","text_menu_name":"Group","text_menu_link":"#","text_menu_icon":"slack","text_menu_position":"3","text_is_active":"1","submenu":["5","6"]} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE menu_details SET `menu_name` = 'Group', `menu_link` = '#', `menu_icon` = 'slack', `menu_position` = '3', `submenu_id` = '5,6', `menu_update_by` = '1', `menu_update_date` = '2022-07-26 20:37:32', `menu_status` = 1 WHERE 1=1  and menu_id = '3';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 27-07-2022 00:10:09 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-menu/4 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-menu #CurrentURLEnd
#Request : {"text_menu_id":"4","text_menu_name":"Unit","text_menu_link":"#","text_menu_icon":"thermometer","text_menu_position":"4","text_is_active":"1","submenu":["7","8"]} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE menu_details SET `menu_name` = 'Unit', `menu_link` = '#', `menu_icon` = 'thermometer', `menu_position` = '4', `submenu_id` = '7,8', `menu_update_by` = '1', `menu_update_date` = '2022-07-26 20:40:09', `menu_status` = 1 WHERE 1=1  and menu_id = '4';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 27-07-2022 00:12:04 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-menu/5 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-menu #CurrentURLEnd
#Request : {"text_menu_id":"5","text_menu_name":"Group Unit","text_menu_link":"#","text_menu_icon":"shield","text_menu_position":"5","text_is_active":"1","submenu":["9","10"]} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE menu_details SET `menu_name` = 'Group Unit', `menu_link` = '#', `menu_icon` = 'shield', `menu_position` = '5', `submenu_id` = '9,10', `menu_update_by` = '1', `menu_update_date` = '2022-07-26 20:42:04', `menu_status` = 1 WHERE 1=1  and menu_id = '5';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 27-07-2022 00:13:07 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-menu/6 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-menu #CurrentURLEnd
#Request : {"text_menu_id":"6","text_menu_name":"Product","text_menu_link":"#","text_menu_icon":"package","text_menu_position":"6","text_is_active":"1","submenu":["11","12"]} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE menu_details SET `menu_name` = 'Product', `menu_link` = '#', `menu_icon` = 'package', `menu_position` = '6', `submenu_id` = '11,12', `menu_update_by` = '1', `menu_update_date` = '2022-07-26 20:43:07', `menu_status` = 1 WHERE 1=1  and menu_id = '6';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 27-07-2022 00:13:54 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-menu/7 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-menu #CurrentURLEnd
#Request : {"text_menu_id":"7","text_menu_name":"Order","text_menu_link":"#","text_menu_icon":"shopping-cart","text_menu_position":"7","text_is_active":"1","submenu":["13"]} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE menu_details SET `menu_name` = 'Order', `menu_link` = '#', `menu_icon` = 'shopping-cart', `menu_position` = '7', `submenu_id` = '13', `menu_update_by` = '1', `menu_update_date` = '2022-07-26 20:43:54', `menu_status` = 1 WHERE 1=1  and menu_id = '7';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 27-07-2022 00:16:49 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-menu/8 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-menu #CurrentURLEnd
#Request : {"text_menu_id":"8","text_menu_name":"Blog","text_menu_link":"#","text_menu_icon":"file-text","text_menu_position":"8","text_is_active":"1","submenu":["14","15"]} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE menu_details SET `menu_name` = 'Blog', `menu_link` = '#', `menu_icon` = 'file-text', `menu_position` = '8', `submenu_id` = '14,15', `menu_update_by` = '1', `menu_update_date` = '2022-07-26 20:46:49', `menu_status` = 1 WHERE 1=1  and menu_id = '8';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 27-07-2022 00:18:25 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-menu/9 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-menu #CurrentURLEnd
#Request : {"text_menu_id":"9","text_menu_name":"Testimonial","text_menu_link":"#","text_menu_icon":"book-open","text_menu_position":"9","text_is_active":"1","submenu":["16","17"]} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE menu_details SET `menu_name` = 'Testimonial', `menu_link` = '#', `menu_icon` = 'book-open', `menu_position` = '9', `submenu_id` = '16,17', `menu_update_by` = '1', `menu_update_date` = '2022-07-26 20:48:25', `menu_status` = 1 WHERE 1=1  and menu_id = '9';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 27-07-2022 00:18:47 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-menu/8 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-menu #CurrentURLEnd
#Request : {"text_menu_id":"8","text_menu_name":"Blog","text_menu_link":"#","text_menu_icon":"bookmark","text_menu_position":"8","text_is_active":"1","submenu":["14","15"]} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE menu_details SET `menu_name` = 'Blog', `menu_link` = '#', `menu_icon` = 'bookmark', `menu_position` = '8', `submenu_id` = '14,15', `menu_update_by` = '1', `menu_update_date` = '2022-07-26 20:48:47', `menu_status` = 1 WHERE 1=1  and menu_id = '8';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 27-07-2022 00:19:12 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-menu/11 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-menu #CurrentURLEnd
#Request : {"text_menu_id":"11","text_menu_name":"Vendor","text_menu_link":"vendor","text_menu_icon":"users","text_menu_position":"10","text_is_active":"1","submenu":["21","22"]} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE menu_details SET `menu_name` = 'Vendor', `menu_link` = 'vendor', `menu_icon` = 'users', `menu_position` = '10', `submenu_id` = '21,22', `menu_update_by` = '1', `menu_update_date` = '2022-07-26 20:49:12', `menu_status` = 1 WHERE 1=1  and menu_id = '11';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 27-07-2022 00:19:36 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-menu/10 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-menu #CurrentURLEnd
#Request : {"text_menu_id":"10","text_menu_name":"Setting","text_menu_link":"#","text_menu_icon":"settings","text_menu_position":"11","text_is_active":"1","submenu":["18","19","20","23"]} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE menu_details SET `menu_name` = 'Setting', `menu_link` = '#', `menu_icon` = 'settings', `menu_position` = '11', `submenu_id` = '18,19,20,23', `menu_update_by` = '1', `menu_update_date` = '2022-07-26 20:49:36', `menu_status` = 1 WHERE 1=1  and menu_id = '10';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 27-07-2022 00:31:20 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-menu/8 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-menu #CurrentURLEnd
#Request : {"text_menu_id":"8","text_menu_name":"Blog","text_menu_link":"#","text_menu_icon":"rss","text_menu_position":"8","text_is_active":"1","submenu":["14","15"]} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE menu_details SET `menu_name` = 'Blog', `menu_link` = '#', `menu_icon` = 'rss', `menu_position` = '8', `submenu_id` = '14,15', `menu_update_by` = '1', `menu_update_date` = '2022-07-26 21:01:20', `menu_status` = 1 WHERE 1=1  and menu_id = '8';
#End*******************************************************************************************************

