<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 27-07-2022 04:16:19 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-menu/11 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-menu #CurrentURLEnd
#Request : {"text_menu_id":"11","text_menu_name":"Vendor","text_menu_link":"vendor","text_menu_icon":"users","text_menu_position":"10","text_is_active":"1","submenu":["21","22"]} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE menu_details SET `menu_name` = 'Vendor', `menu_link` = 'vendor', `menu_icon` = 'users', `menu_position` = '10', `submenu_id` = '21,22', `menu_update_by` = '1', `menu_update_date` = '2022-07-27 00:46:19', `menu_status` = 1 WHERE 1=1  and menu_id = '11';
#End*******************************************************************************************************

