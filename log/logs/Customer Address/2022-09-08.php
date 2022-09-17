<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 08-09-2022 23:07:44 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/add-cust-address #CurrentURLEnd
#Request : {"fname":"Roshni","lname":"Mistry","mobile_no":"08866594677","email":"mistryroshni13@gmil.com","txtaddress":"test,30 valsad","txtcity":"valsad","txtstate":"1","txtcountry":"1","pincode":"3963001","txtaddressTyperadio":"home"} #Requestend
#Operation :  #Operationend
#Message: 
;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 08-09-2022 23:07:53 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/add-cust-address #CurrentURLEnd
#Request : {"fname":"Roshni","lname":"Mistry","mobile_no":"08866594677","email":"mistryroshni13@gmil.com","txtaddress":"test,30 valsad","txtcity":"valsad","txtstate":"1","txtcountry":"1","pincode":"3963001","txtaddressTyperadio":"home"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_address(`customer_id`, `first_name`, `last_name`, `email`, `mobile`, `address`, `city`, `state`, `pincode`, `country`, `address_type`, `set_default`, `created_by`, `created`, `is_active`) VALUES('1', 'Roshni', 'Mistry', 'mistryroshni13@gmil.com', '08866594677', 'Roshni', 'valsad', '1', '3963001', '1', 'Roshni'_type, NULL, '1', '2022_09-08', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 08-09-2022 23:34:04 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/add-cust-address #CurrentURLEnd
#Request : {"fname":"Roshni","lname":"Mistry","mobile_no":"08866594677","email":"mistryroshni13@gmil.com","txtaddress":"test,30 valsad","txtcity":"valsad","txtstate":"1","txtcountry":"1","pincode":"3963001","txtaddressTyperadio":"home"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_address(`customer_id`, `first_name`, `last_name`, `email`, `mobile`, `address`, `city`, `state`, `pincode`, `country`, `address_type`, `set_default`, `created_by`, `created`, `is_active`) VALUES('1', 'Roshni', 'Mistry', 'mistryroshni13@gmil.com', '08866594677', 'test,30 valsad', 'valsad', '1', '3963001', '1', 'test,30 valsad'_type, NULL, '1', '2022_09-08', 1);
#End*******************************************************************************************************

