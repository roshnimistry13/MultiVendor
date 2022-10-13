<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 11-10-2022 03:10:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-submenu #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-submenu #CurrentURLEnd
#Request : {"text_submenu_id":"","text_submenu_name":"Replace Order","text_submenu_link":"replace-order","text_submenu_position":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO submenu_details(`submenu_name`, `submenu_link`, `submenu_position`, `created_by`, `created`) VALUES('Replace Order', 'replace-order', '', '1', '2022-10-11 03:10:15');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 11-10-2022 22:29:01 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-submenu/32 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-submenu #CurrentURLEnd
#Request : {"text_submenu_id":"32","text_submenu_name":"Cancelled Order","text_submenu_link":"order-cancel","text_submenu_position":"0"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE submenu_details SET `submenu_name` = 'Cancelled Order', `submenu_link` = 'order-cancel', `submenu_position` = '0', `modified_by` = '1', `modified` = '2022-10-11 22:29:01', `is_active` = 0 WHERE 1=1  and submenu_id = '32';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 11-10-2022 23:31:18 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-submenu/33 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-submenu #CurrentURLEnd
#Request : {"text_submenu_id":"33","text_submenu_name":"Replace Request","text_submenu_link":"replace-order","text_submenu_position":"0","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE submenu_details SET `submenu_name` = 'Replace Request', `submenu_link` = 'replace-order', `submenu_position` = '0', `modified_by` = '1', `modified` = '2022-10-11 23:31:18', `is_active` = 1 WHERE 1=1  and submenu_id = '33';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 11-10-2022 23:31:27 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-submenu/30 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-submenu #CurrentURLEnd
#Request : {"text_submenu_id":"30","text_submenu_name":"Return Request","text_submenu_link":"order-return","text_submenu_position":"0","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE submenu_details SET `submenu_name` = 'Return Request', `submenu_link` = 'order-return', `submenu_position` = '0', `modified_by` = '1', `modified` = '2022-10-11 23:31:27', `is_active` = 1 WHERE 1=1  and submenu_id = '30';
#End*******************************************************************************************************

