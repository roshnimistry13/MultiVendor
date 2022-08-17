<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 26-07-2022 05:23:43 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/3 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"3","text_role_name":"vendor1","text_description":"#","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE role SET `role_name` = 'vendor1', `role_description` = '#', `updated_by` = '1', `update_at` = '2022-07-26 01:53:43', `is_active` = 1 WHERE 1=1  and role_id = '3';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 05:23:47 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/3 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"3","text_role_name":"vendor","text_description":"#","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE role SET `role_name` = 'vendor', `role_description` = '#', `updated_by` = '1', `update_at` = '2022-07-26 01:53:47', `is_active` = 1 WHERE 1=1  and role_id = '3';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:03:43 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/1 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"1","text_role_name":"Admin","text_description":"test","text_is_active":"1","menu":["1","2","3","4","11"],"submenu_1":["1","2"],"submenu_2":["3"],"submenu_3":["6"],"submenu_4":["8"]} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE role SET `role_name` = 'Admin', `role_description` = 'test', `updated_by` = '1', `update_at` = '2022-07-26 18:33:43', `is_active` = 1 WHERE 1=1  and role_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:03:43 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/1 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"1","text_role_name":"Admin","text_description":"test","text_is_active":"1","menu":["1","2","3","4","11"],"submenu_1":["1","2"],"submenu_2":["3"],"submenu_3":["6"],"submenu_4":["8"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('1', '1', '1,2', '1', '2022-07-26 18:33:43', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:03:43 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/1 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"1","text_role_name":"Admin","text_description":"test","text_is_active":"1","menu":["1","2","3","4","11"],"submenu_1":["1","2"],"submenu_2":["3"],"submenu_3":["6"],"submenu_4":["8"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('1', '2', '3', '1', '2022-07-26 18:33:43', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:03:44 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/1 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"1","text_role_name":"Admin","text_description":"test","text_is_active":"1","menu":["1","2","3","4","11"],"submenu_1":["1","2"],"submenu_2":["3"],"submenu_3":["6"],"submenu_4":["8"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('1', '3', '6', '1', '2022-07-26 18:33:43', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:03:44 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/1 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"1","text_role_name":"Admin","text_description":"test","text_is_active":"1","menu":["1","2","3","4","11"],"submenu_1":["1","2"],"submenu_2":["3"],"submenu_3":["6"],"submenu_4":["8"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('1', '4', '8', '1', '2022-07-26 18:33:44', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:03:44 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/1 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"1","text_role_name":"Admin","text_description":"test","text_is_active":"1","menu":["1","2","3","4","11"],"submenu_1":["1","2"],"submenu_2":["3"],"submenu_3":["6"],"submenu_4":["8"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('1', '11', '', '1', '2022-07-26 18:33:44', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:04:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"]} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE role SET `role_name` = 'Developer', `role_description` = '#', `updated_by` = '1', `update_at` = '2022-07-26 18:34:52', `is_active` = 1 WHERE 1=1  and role_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:04:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '1', '1,2', '1', '2022-07-26 18:34:52', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:04:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '2', '3,4', '1', '2022-07-26 18:34:52', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:04:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '3', '5,6', '1', '2022-07-26 18:34:52', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:04:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '4', '7,8', '1', '2022-07-26 18:34:52', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:04:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '5', '9,10', '1', '2022-07-26 18:34:52', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:04:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '6', '11,12', '1', '2022-07-26 18:34:52', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:04:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '7', '13', '1', '2022-07-26 18:34:52', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:04:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '8', '14,15', '1', '2022-07-26 18:34:52', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:04:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '9', '16,17', '1', '2022-07-26 18:34:52', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:04:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '10', '', '1', '2022-07-26 18:34:52', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:04:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '11', '', '1', '2022-07-26 18:34:52', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:12:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20"]} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE role SET `role_name` = 'Developer', `role_description` = '#', `updated_by` = '1', `update_at` = '2022-07-26 18:42:15', `is_active` = 1 WHERE 1=1  and role_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:12:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '1', '1,2', '1', '2022-07-26 18:42:15', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:12:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '2', '3,4', '1', '2022-07-26 18:42:15', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:12:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '3', '5,6', '1', '2022-07-26 18:42:15', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:12:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '4', '7,8', '1', '2022-07-26 18:42:15', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:12:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '5', '9,10', '1', '2022-07-26 18:42:15', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:12:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '6', '11,12', '1', '2022-07-26 18:42:15', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:12:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '7', '13', '1', '2022-07-26 18:42:15', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:12:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '8', '14,15', '1', '2022-07-26 18:42:15', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:12:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '9', '16,17', '1', '2022-07-26 18:42:15', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:12:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '10', '18,19,20', '1', '2022-07-26 18:42:15', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:12:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '11', '', '1', '2022-07-26 18:42:15', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:36:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20"],"submenu_11":["21","22"]} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE role SET `role_name` = 'Developer', `role_description` = '#', `updated_by` = '1', `update_at` = '2022-07-26 19:06:05', `is_active` = 1 WHERE 1=1  and role_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:36:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20"],"submenu_11":["21","22"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '1', '1,2', '1', '2022-07-26 19:06:05', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:36:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20"],"submenu_11":["21","22"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '2', '3,4', '1', '2022-07-26 19:06:05', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:36:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20"],"submenu_11":["21","22"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '3', '5,6', '1', '2022-07-26 19:06:05', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:36:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20"],"submenu_11":["21","22"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '4', '7,8', '1', '2022-07-26 19:06:05', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:36:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20"],"submenu_11":["21","22"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '5', '9,10', '1', '2022-07-26 19:06:05', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:36:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20"],"submenu_11":["21","22"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '6', '11,12', '1', '2022-07-26 19:06:05', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:36:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20"],"submenu_11":["21","22"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '7', '13', '1', '2022-07-26 19:06:05', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:36:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20"],"submenu_11":["21","22"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '8', '14,15', '1', '2022-07-26 19:06:05', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:36:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20"],"submenu_11":["21","22"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '9', '16,17', '1', '2022-07-26 19:06:05', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:36:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20"],"submenu_11":["21","22"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '10', '18,19,20', '1', '2022-07-26 19:06:05', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 22:36:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20"],"submenu_11":["21","22"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '11', '21,22', '1', '2022-07-26 19:06:05', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 23:00:11 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20","23"],"submenu_11":["21","22"]} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE role SET `role_name` = 'Developer', `role_description` = '#', `updated_by` = '1', `update_at` = '2022-07-26 19:30:11', `is_active` = 1 WHERE 1=1  and role_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 23:00:11 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20","23"],"submenu_11":["21","22"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '1', '1,2', '1', '2022-07-26 19:30:11', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 23:00:11 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20","23"],"submenu_11":["21","22"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '2', '3,4', '1', '2022-07-26 19:30:11', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 23:00:11 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20","23"],"submenu_11":["21","22"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '3', '5,6', '1', '2022-07-26 19:30:11', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 23:00:11 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20","23"],"submenu_11":["21","22"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '4', '7,8', '1', '2022-07-26 19:30:11', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 23:00:11 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20","23"],"submenu_11":["21","22"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '5', '9,10', '1', '2022-07-26 19:30:11', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 23:00:11 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20","23"],"submenu_11":["21","22"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '6', '11,12', '1', '2022-07-26 19:30:11', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 23:00:11 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20","23"],"submenu_11":["21","22"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '7', '13', '1', '2022-07-26 19:30:11', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 23:00:11 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20","23"],"submenu_11":["21","22"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '8', '14,15', '1', '2022-07-26 19:30:11', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 23:00:11 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20","23"],"submenu_11":["21","22"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '9', '16,17', '1', '2022-07-26 19:30:11', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 23:00:11 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20","23"],"submenu_11":["21","22"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '10', '18,19,20,23', '1', '2022-07-26 19:30:11', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 23:00:11 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-role/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-role #CurrentURLEnd
#Request : {"text_role_id":"2","text_role_name":"Developer","text_description":"#","text_is_active":"1","menu":["1","2","3","4","5","6","7","8","9","10","11"],"submenu_1":["1","2"],"submenu_2":["3","4"],"submenu_3":["5","6"],"submenu_4":["7","8"],"submenu_5":["9","10"],"submenu_6":["11","12"],"submenu_7":["13"],"submenu_8":["14","15"],"submenu_9":["16","17"],"submenu_10":["18","19","20","23"],"submenu_11":["21","22"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `role_details` (`role_id`, `menu_id`, `submenu_id`, `created_by`, `create_at`, `is_active`) VALUES ('2', '11', '21,22', '1', '2022-07-26 19:30:11', 1);
#End*******************************************************************************************************

