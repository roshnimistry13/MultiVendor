<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 29-07-2022 04:49:18 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-menu #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-menu #CurrentURLEnd
#Request : {"text_menu_id":"","text_menu_name":"Slider","text_menu_link":"slider","text_menu_icon":"sliders","text_menu_position":"12"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO menu_details(`menu_name`, `menu_link`, `menu_icon`, `menu_position`, `submenu_id`, `menu_add_by`, `menu_add_date`, `menu_status`) VALUES('Slider', 'slider', 'sliders', '12', NULL, '1', '2022-07-29 01:19:18', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 29-07-2022 04:51:22 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-menu/12 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-menu #CurrentURLEnd
#Request : {"text_menu_id":"12","text_menu_name":"Slider","text_menu_link":"slider","text_menu_icon":"users","text_menu_position":"12","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE menu_details SET `menu_name` = 'Slider', `menu_link` = 'slider', `menu_icon` = 'users', `menu_position` = '12', `submenu_id` = NULL, `menu_update_by` = '1', `menu_update_date` = '2022-07-29 01:21:22', `menu_status` = 1 WHERE 1=1  and menu_id = '12';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 29-07-2022 04:53:11 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-menu/12 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-menu #CurrentURLEnd
#Request : {"text_menu_id":"12","text_menu_name":"Slider","text_menu_link":"slider","text_menu_icon":"sliders","text_menu_position":"12","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE menu_details SET `menu_name` = 'Slider', `menu_link` = 'slider', `menu_icon` = 'sliders', `menu_position` = '12', `submenu_id` = NULL, `menu_update_by` = '1', `menu_update_date` = '2022-07-29 01:23:11', `menu_status` = 1 WHERE 1=1  and menu_id = '12';
#End*******************************************************************************************************

