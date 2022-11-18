<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 07-11-2022 22:54:21 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-menu/6 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-menu #CurrentURLEnd
#Request : {"text_menu_id":"6","text_menu_name":"Product","text_menu_link":"product","text_menu_icon":"package","text_menu_position":"6","text_is_active":"1","submenu":["11","12","34"]} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE menu_details SET `menu_name` = 'Product', `menu_link` = 'product', `menu_icon` = 'package', `menu_position` = '6', `submenu_id` = '11,12,34', `menu_update_by` = '999', `menu_update_date` = '2022-11-07 22:54:21', `menu_status` = 1 WHERE 1=1  and menu_id = '6';
#End*******************************************************************************************************

