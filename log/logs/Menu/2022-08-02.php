<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 02-08-2022 22:34:35 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-menu/3 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-menu #CurrentURLEnd
#Request : {"text_menu_id":"3","text_menu_name":"Elements","text_menu_link":"#","text_menu_icon":"slack","text_menu_position":"3","text_is_active":"1","submenu":["5","6"]} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE menu_details SET `menu_name` = 'Elements', `menu_link` = '#', `menu_icon` = 'slack', `menu_position` = '3', `submenu_id` = '5,6', `menu_update_by` = '1', `menu_update_date` = '2022-08-02 19:04:35', `menu_status` = 1 WHERE 1=1  and menu_id = '3';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-08-2022 23:44:47 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-menu/5 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-menu #CurrentURLEnd
#Request : {"text_menu_id":"5","text_menu_name":"attributes","text_menu_link":"#","text_menu_icon":"shield","text_menu_position":"5","text_is_active":"1","submenu":["9","10"]} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE menu_details SET `menu_name` = 'attributes', `menu_link` = '#', `menu_icon` = 'shield', `menu_position` = '5', `submenu_id` = '9,10', `menu_update_by` = '1', `menu_update_date` = '2022-08-02 20:14:47', `menu_status` = 1 WHERE 1=1  and menu_id = '5';
#End*******************************************************************************************************

