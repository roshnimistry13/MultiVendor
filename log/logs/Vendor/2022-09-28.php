<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 28-09-2022 02:32:56 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-vendor/2 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-vendor #CurrentURLEnd
#Request : {"text_vendor_id":"2","text_name":"vendor-two","text_email":"vendor2@gmail.com","text_password":"","text_contact_no":"9696969696","text_company":"Company-2","text_gstin_no":"05ABDCE1234F1Z2","text_pan_no":"ABCTY1234D","text_street":"gunjan","text_city":"vapi","text_state":"gujarat","text_pincode":"396321","text_country":"IN","text_is_active":"1","text_bank_name":"STATE BANK OF INDIA","text_branch_code":"00037","text_ifsc_code":"SBIN000037","text_accountno":"12345678910","text_card_holdername":"ROSHNI MISTRY"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE vendor SET `name` = 'vendor-two', `phone` = '9696969696', `email` = 'vendor2@gmail.com', `company` = 'Company-2', `gstin_no` = '05ABDCE1234F1Z2', `pan_no` = 'ABCTY1234D', `address` = 'gunjan', `city` = 'vapi', `state` = 'gujarat', `pin_code` = '396321', `country` = 'IN', `bank_name` = 'STATE BANK OF INDIA', `branch_code` = '00037', `ifsc_code` = 'SBIN000037', `accountno` = '12345678910', `acc_holder_name` = 'ROSHNI MISTRY', `modified` = '2022-09-28 02:32:56', `is_active` = 1 WHERE 1=1  and vendor_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 28-09-2022 02:46:29 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-vendor/1 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-vendor #CurrentURLEnd
#Request : {"text_vendor_id":"1","text_name":"vendor-one","text_email":"vendor1@gmail.com","text_password":"","text_contact_no":"9898989898","text_company":"Company-1","text_gstin_no":"05ABDCE1234F1Z2","text_pan_no":"ABCTY1234D","text_street":"Char Rasta","text_city":"Vapi","text_state":"Gujarat","text_pincode":"396321","text_country":"IN","text_is_active":"1","text_bank_name":"BANK OF BARODA","text_branch_code":"VJVALS","text_ifsc_code":"BARB0VJVALS","text_accountno":"78954631274","text_card_holdername":"VENDOR VENDOR"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE vendor SET `name` = 'vendor-one', `phone` = '9898989898', `email` = 'vendor1@gmail.com', `company` = 'Company-1', `gstin_no` = '05ABDCE1234F1Z2', `pan_no` = 'ABCTY1234D', `address` = 'Char Rasta', `city` = 'Vapi', `state` = 'Gujarat', `pin_code` = '396321', `country` = 'IN', `bank_name` = 'BANK OF BARODA', `branch_code` = 'VJVALS', `ifsc_code` = 'BARB0VJVALS', `accountno` = '78954631274', `acc_holder_name` = 'VENDOR VENDOR', `modified` = '2022-09-28 02:46:29', `is_active` = 1 WHERE 1=1  and vendor_id = '1';
#End*******************************************************************************************************

