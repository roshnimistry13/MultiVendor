<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 14-01-2023 04:23:38 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-brand #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-brand #CurrentURLEnd
#Request : {"text_brand_id":"","text_brand_name":"Johnson & Johnson","old_brand_logo":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO brand(`brand_name`, `short_code`, `brand_logo`, `created_by`, `created`) VALUES('Johnson & Johnson', 'johnson-johnson', '', '2', '2023-01-14 04:23:38');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 14-01-2023 04:25:01 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-brand/84 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-brand #CurrentURLEnd
#Request : {"text_brand_id":"84","text_brand_name":"Johnson & Johnson","old_brand_logo":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE brand SET `brand_name` = 'Johnson & Johnson', `short_code` = 'johnson-johnson', `brand_logo` = 'download.png', `modified_by` = '2', `modified` = '2023-01-14 04:25:01', `is_active` = 1 WHERE 1=1  and brand_id = '84';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 14-01-2023 04:53:04 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-brand/84 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-brand #CurrentURLEnd
#Request : {"text_brand_id":"84","text_brand_name":"Johnson & Johnson","old_brand_logo":"download.png","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE brand SET `brand_name` = 'Johnson & Johnson', `short_code` = 'johnson-johnson', `brand_logo` = 'download.png', `modified_by` = '999', `modified` = '2023-01-14 04:53:04', `is_active` = 1 WHERE 1=1  and brand_id = '84';
#End*******************************************************************************************************

