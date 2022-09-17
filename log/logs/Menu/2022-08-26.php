<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 26-08-2022 02:40:14 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-menu/15 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-menu #CurrentURLEnd
#Request : {"text_menu_id":"15","text_menu_name":"Stock","text_menu_link":"stock","text_menu_icon":"layers","text_menu_position":"14","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE menu_details SET `menu_name` = 'Stock', `menu_link` = 'stock', `menu_icon` = 'layers', `menu_position` = '14', `submenu_id` = '', `menu_update_by` = '1', `menu_update_date` = '2022-08-26 02:40:14', `menu_status` = 1 WHERE 1=1  and menu_id = '15';
#End*******************************************************************************************************

