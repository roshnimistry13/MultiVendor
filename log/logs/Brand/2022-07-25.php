<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 26-07-2022 00:46:22 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/add-brand #ReferrerEnd
#Current URL: http://localhost/Admin/submit-brand #CurrentURLEnd
#Request : {"text_brand_id":"","text_brand_name":"Brand -6","old_brand_logo":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO brand(`brand_name`, `short_code`, `brand_logo`, `created_by`, `created`) VALUES('Brand -6', 'brand-6', '', '1', '2022-07-25 21:16:22');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 00:50:22 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-brand/6 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-brand #CurrentURLEnd
#Request : {"text_brand_id":"6","text_brand_name":"Brand -6","old_brand_logo":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE brand SET `brand_name` = 'Brand -6', `short_code` = 'brand-6', `brand_logo` = '', `modified_by` = '1', `modified` = '2022-07-25 21:20:22', `is_active` = 1 WHERE 1=1  and brand_id = '6';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 00:50:55 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/brand #ReferrerEnd
#Current URL: http://localhost/Admin/Admin/Brand/updateStatus #CurrentURLEnd
#Request : {"id":"6","status":"0"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE brand SET `modified_by` = '1', `modified` = '2022-07-25 21:20:55', `is_active` = '0' WHERE 1=1  and brand_id = '6';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-07-2022 00:50:58 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/brand #ReferrerEnd
#Current URL: http://localhost/Admin/Admin/Brand/updateStatus #CurrentURLEnd
#Request : {"id":"6","status":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE brand SET `modified_by` = '1', `modified` = '2022-07-25 21:20:58', `is_active` = '1' WHERE 1=1  and brand_id = '6';
#End*******************************************************************************************************

