<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 17-12-2022 00:51:38 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/my-account #ReferrerEnd
#Current URL: http://localhost/MultiVendor/add-cust-address #CurrentURLEnd
#Request : {"txtaddressid":"20","fname":"Roshni","lname":"Mistry","mobile_no":"08866594677","email":"mistryroshni13@gmil.com","txtaddress":"test,30 valsad","txtcity":"valsad","pincode":"3963001","txtcountry":"India","txtstate":"Haryana","txtaddressTyperadio":"home","txtdefaultaddress":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_address SET `set_default` = 0 WHERE 1=1  and customer_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 17-12-2022 00:51:38 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/my-account #ReferrerEnd
#Current URL: http://localhost/MultiVendor/add-cust-address #CurrentURLEnd
#Request : {"txtaddressid":"20","fname":"Roshni","lname":"Mistry","mobile_no":"08866594677","email":"mistryroshni13@gmil.com","txtaddress":"test,30 valsad","txtcity":"valsad","pincode":"3963001","txtcountry":"India","txtstate":"Haryana","txtaddressTyperadio":"home","txtdefaultaddress":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_address SET `customer_id` = '1', `first_name` = 'Roshni', `last_name` = 'Mistry', `email` = 'mistryroshni13@gmil.com', `mobile` = '08866594677', `address` = 'test,30 valsad', `city` = 'valsad', `state` = 'Haryana', `pincode` = '3963001', `country` = 'India', `address_type` = 'test,30 valsad'_type, `set_default` = '1', `modified` = '2022_12-17' WHERE 1=1  and address_id = '20' and customer_id = '1';
#End*******************************************************************************************************

