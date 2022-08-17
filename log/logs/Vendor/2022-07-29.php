<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 30-07-2022 00:18:54 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-vendor/2 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-vendor #CurrentURLEnd
#Request : {"text_vendor_id":"2","text_name":"vendor-2","text_email":"vendor2@gmail.com","text_password":"vendor","text_contact_no":"9696969696","text_company":"Company-2","text_gstin_no":"05ABDCE1234F1Z2","text_pan_no":"ABCTY1234D","text_street":"gunjan","text_city":"vapi","text_state":"gujarat","text_pincode":"396321","text_country":"IN","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE vendor SET `password` = '7c3613dba5171cb6027c67835dd3b9d4', `name` = 'vendor-2', `phone` = '9696969696', `email` = 'vendor2@gmail.com', `company` = 'Company-2', `gstin_no` = '05ABDCE1234F1Z2', `pan_no` = 'ABCTY1234D', `address` = 'gunjan', `city` = 'vapi', `state` = 'gujarat', `pin_code` = '396321', `country` = 'IN', `modified` = '2022-07-29 20:48:54', `is_active` = 1 WHERE 1=1  and vendor_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 30-07-2022 00:34:47 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/admin #ReferrerEnd
#Current URL: http://localhost/MultiVendor/login-check #CurrentURLEnd
#Request : {"email_username":"vendor2@gmail.com","password":"vendor","radio_user_type":"vendor"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE vendor SET `last_login` = '2022-07-29 21:04:47' WHERE 1=1  and vendor_id = '2';
#End*******************************************************************************************************

