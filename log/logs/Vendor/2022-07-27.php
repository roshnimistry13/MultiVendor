<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 27-07-2022 04:33:21 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/Admin/edit-vendor/2 #ReferrerEnd
#Current URL: http://localhost/Admin/submit-vendor #CurrentURLEnd
#Request : {"text_vendor_id":"2","text_name":"vendor-2","text_email":"vendor2@gmail.com","text_contact_no":"9696969696","text_company":"Company-2","text_gstin_no":"05ABDCE1234F1Z2","text_pan_no":"ABCTY1234D","text_street":"gunjan","text_city":"vapi","text_state":"gujarat","text_pincode":"396321","text_country":"IN","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE vendor SET `name` = 'vendor-2', `phone` = '9696969696', `email` = 'vendor2@gmail.com', `company` = 'Company-2', `gstin_no` = '05ABDCE1234F1Z2', `pan_no` = 'ABCTY1234D', `address` = 'gunjan', `city` = 'vapi', `state` = 'gujarat', `pin_code` = '396321', `country` = 'IN', `modified` = '2022-07-27 01:03:21', `is_active` = 1 WHERE 1=1  and vendor_id = '2';
#End*******************************************************************************************************

