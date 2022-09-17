<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 22-08-2022 03:03:55 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-submenu #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-submenu #CurrentURLEnd
#Request : {"text_submenu_id":"","text_submenu_name":"Export Database","text_submenu_link":"export-database","text_submenu_position":"1"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO submenu_details(`submenu_name`, `submenu_link`, `submenu_position`, `created_by`, `created`) VALUES('Export Database', 'export-database', '1', '1', '2022-08-22 03:03:55');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 22-08-2022 03:05:31 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-submenu #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-submenu #CurrentURLEnd
#Request : {"text_submenu_id":"","text_submenu_name":"Alter DB\/Table","text_submenu_link":"alter-table","text_submenu_position":"2"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO submenu_details(`submenu_name`, `submenu_link`, `submenu_position`, `created_by`, `created`) VALUES('Alter DB/Table', 'alter-table', '2', '1', '2022-08-22 03:05:31');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 22-08-2022 03:09:38 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-submenu/25 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-submenu #CurrentURLEnd
#Request : {"text_submenu_id":"25","text_submenu_name":"SQL Operations","text_submenu_link":"sql-operation","text_submenu_position":"2","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE submenu_details SET `submenu_name` = 'SQL Operations', `submenu_link` = 'sql-operation', `submenu_position` = '2', `modified_by` = '1', `modified` = '2022-08-22 03:09:38', `is_active` = 1 WHERE 1=1  and submenu_id = '25';
#End*******************************************************************************************************

