<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 22-08-2022 03:02:58 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-menu #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-menu #CurrentURLEnd
#Request : {"text_menu_id":"","text_menu_name":"database","text_menu_link":"database","text_menu_icon":"database","text_menu_position":"13"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO menu_details(`menu_name`, `menu_link`, `menu_icon`, `menu_position`, `submenu_id`, `menu_add_by`, `menu_add_date`, `menu_status`) VALUES('database', 'database', 'database', '13', '', '1', '2022-08-22 03:02:58', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 22-08-2022 03:05:59 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-menu/14 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-menu #CurrentURLEnd
#Request : {"text_menu_id":"14","text_menu_name":"database","text_menu_link":"database","text_menu_icon":"database","text_menu_position":"13","text_is_active":"1","submenu":["24","25"]} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE menu_details SET `menu_name` = 'database', `menu_link` = 'database', `menu_icon` = 'database', `menu_position` = '13', `submenu_id` = '24,25', `menu_update_by` = '1', `menu_update_date` = '2022-08-22 03:05:59', `menu_status` = 1 WHERE 1=1  and menu_id = '14';
#End*******************************************************************************************************

