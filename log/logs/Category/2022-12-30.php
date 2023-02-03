<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 30-12-2022 22:34:27 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/EthnicWear/add-category #ReferrerEnd
#Current URL: http://localhost/EthnicWear/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Skirts Palazzos","text_parent_category":"22","text_description":"Skirts Palazzos","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO category(`category_name`, `short_code`, `parent_category_id`, `element_id`, `description`, `category_image`, `created_by`, `return_or_replace`, `return_replace_validity`, `policy_covers`, `return_policy`, `created`) VALUES('Skirts Palazzos', 'indian-fusion-wear-skirts-palazzos', '22', '', 'Skirts Palazzos', 'display.webp', '999', '', '', '', '', '2022-12-30 22:34:27');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 30-12-2022 22:34:27 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/EthnicWear/add-category #ReferrerEnd
#Current URL: http://localhost/EthnicWear/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Skirts Palazzos","text_parent_category":"22","text_description":"Skirts Palazzos","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `hierarchy` = '2,22,58' WHERE 1=1  and category_id = '58';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 30-12-2022 22:34:27 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/EthnicWear/add-category #ReferrerEnd
#Current URL: http://localhost/EthnicWear/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"","text_category_name":"Skirts Palazzos","text_parent_category":"22","text_description":"Skirts Palazzos","old_category_image":"","txt_return_replace_validity":"","txt_policy_covers":"","txt_policy_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `child_category` = '24,25,26,27,28,58' WHERE 1=1  and category_id = '22';
#End*******************************************************************************************************

