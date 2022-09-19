<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 20-09-2022 01:46:41 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-vendor/2 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-vendor #CurrentURLEnd
#Request : {"text_vendor_id":"2","text_name":"vendor-2","text_email":"vendor2@gmail.com","text_password":"","text_contact_no":"9696969696","text_company":"Company-2","text_gstin_no":"05ABDCE1234F1Z2","text_pan_no":"ABCTY1234D","text_street":"gunjan","text_city":"vapi","text_state":"gujarat","text_pincode":"396321","text_country":"IN","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE vendor SET `name` = 'vendor-2', `phone` = '9696969696', `email` = 'vendor2@gmail.com', `company` = 'Company-2', `gstin_no` = '05ABDCE1234F1Z2', `pan_no` = 'ABCTY1234D', `address` = 'gunjan', `city` = 'vapi', `state` = 'gujarat', `pin_code` = '396321', `country` = 'IN', `bank_name` = NULL, `branch_code` = NULL, `ifsc_code` = NULL, `accountno` = NULL, `modified` = '2022-09-20 01:46:41', `is_active` = 1 WHERE 1=1  and vendor_id = '2';
#End*******************************************************************************************************

