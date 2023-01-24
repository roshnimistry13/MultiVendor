<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 20-01-2023 02:11:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-menu/16 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-menu #CurrentURLEnd
#Request : {"text_menu_id":"16","text_menu_name":"Offer","text_menu_link":"offer","text_menu_icon":"gift","text_menu_position":"15","text_is_active":"1","submenu":["35"]} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE menu_details SET `menu_name` = 'Offer', `menu_link` = 'offer', `menu_icon` = 'gift', `menu_position` = '15', `submenu_id` = '35', `menu_update_by` = '1', `menu_update_date` = '2023-01-20 02:11:05', `menu_status` = 1 WHERE 1=1  and menu_id = '16';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 20-01-2023 02:13:06 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-menu/16 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-menu #CurrentURLEnd
#Request : {"text_menu_id":"16","text_menu_name":"Offer","text_menu_link":"offer","text_menu_icon":"gift","text_menu_position":"15","text_is_active":"1","submenu":["35","36"]} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE menu_details SET `menu_name` = 'Offer', `menu_link` = 'offer', `menu_icon` = 'gift', `menu_position` = '15', `submenu_id` = '35,36', `menu_update_by` = '1', `menu_update_date` = '2023-01-20 02:13:06', `menu_status` = 1 WHERE 1=1  and menu_id = '16';
#End*******************************************************************************************************

