<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 20-01-2023 02:10:49 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-submenu #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-submenu #CurrentURLEnd
#Request : {"text_submenu_id":"","text_submenu_name":"Available Offer","text_submenu_link":"available-offer","text_submenu_position":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO submenu_details(`submenu_name`, `submenu_link`, `submenu_position`, `created_by`, `created`) VALUES('Available Offer', 'available-offer', '', '1', '2023-01-20 02:10:49');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 20-01-2023 02:12:58 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-submenu #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-submenu #CurrentURLEnd
#Request : {"text_submenu_id":"","text_submenu_name":"Category Offer ","text_submenu_link":"offer","text_submenu_position":"1"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO submenu_details(`submenu_name`, `submenu_link`, `submenu_position`, `created_by`, `created`) VALUES('Category Offer ', 'offer', '1', '1', '2023-01-20 02:12:58');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 20-01-2023 02:16:54 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-submenu/35 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-submenu #CurrentURLEnd
#Request : {"text_submenu_id":"35","text_submenu_name":"Special Offer","text_submenu_link":"special-offer","text_submenu_position":"0","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE submenu_details SET `submenu_name` = 'Special Offer', `submenu_link` = 'special-offer', `submenu_position` = '0', `modified_by` = '1', `modified` = '2023-01-20 02:16:54', `is_active` = 1 WHERE 1=1  and submenu_id = '35';
#End*******************************************************************************************************

