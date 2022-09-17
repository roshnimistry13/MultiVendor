<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 18-09-2022 00:28:16 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/add-cust-address #CurrentURLEnd
#Request : {"fname":"Roshni","lname":"Mistry","mobile_no":"08866594677","email":"mistryroshni13@gmil.com","txtaddress":"test,30 valsad","txtcity":"valsad","pincode":"3963001","txtcountry":"India","txtstate":"Gujarat","txtaddressTyperadio":"home"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_address(`customer_id`, `first_name`, `last_name`, `email`, `mobile`, `address`, `city`, `state`, `pincode`, `country`, `address_type`, `set_default`, `created_by`, `created`, `is_active`) VALUES('1', 'Roshni', 'Mistry', 'mistryroshni13@gmil.com', '08866594677', 'test,30 valsad', 'valsad', 'Gujarat', '3963001', 'India', 'test,30 valsad'_type, NULL, '1', '2022_09-18', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 18-09-2022 00:29:49 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/change-delivery-address #CurrentURLEnd
#Request : {"delivery_address":"10"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_address SET `set_default` = 0 WHERE 1=1  and customer_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 18-09-2022 00:29:49 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/change-delivery-address #CurrentURLEnd
#Request : {"delivery_address":"10"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_address SET `set_default` = 1 WHERE 1=1  and address_id = '10' and customer_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 18-09-2022 00:30:19 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/add-cust-address #CurrentURLEnd
#Request : {"fname":"Roshni","lname":"Mistry","mobile_no":"08866594677","email":"mistryroshni13@gmil.com","txtaddress":"bilimora","txtcity":"bilimora","pincode":"3963001","txtcountry":"India","txtstate":"Gujarat","txtaddressTyperadio":"home"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_address(`customer_id`, `first_name`, `last_name`, `email`, `mobile`, `address`, `city`, `state`, `pincode`, `country`, `address_type`, `set_default`, `created_by`, `created`, `is_active`) VALUES('1', 'Roshni', 'Mistry', 'mistryroshni13@gmil.com', '08866594677', 'bilimora', 'bilimora', 'Gujarat', '3963001', 'India', 'bilimora'_type, NULL, '1', '2022_09-18', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 18-09-2022 00:30:54 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/change-delivery-address #CurrentURLEnd
#Request : {"delivery_address":"11"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_address SET `set_default` = 0 WHERE 1=1  and customer_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 18-09-2022 00:30:54 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/change-delivery-address #CurrentURLEnd
#Request : {"delivery_address":"11"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_address SET `set_default` = 1 WHERE 1=1  and address_id = '11' and customer_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 18-09-2022 00:46:54 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/add-cust-address #CurrentURLEnd
#Request : {"fname":"Roshni","lname":"Mistry","mobile_no":"08866594677","email":"mistryroshni13@gmil.com","txtaddress":"test,30 valsad","txtcity":"valsad","pincode":"3963001","txtcountry":"India","txtstate":"Gujarat","txtaddressTyperadio":"home"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_address(`customer_id`, `first_name`, `last_name`, `email`, `mobile`, `address`, `city`, `state`, `pincode`, `country`, `address_type`, `set_default`, `created_by`, `created`, `is_active`) VALUES('1', 'Roshni', 'Mistry', 'mistryroshni13@gmil.com', '08866594677', 'test,30 valsad', 'valsad', 'Gujarat', '3963001', 'India', 'test,30 valsad'_type, NULL, '1', '2022_09-18', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 18-09-2022 00:47:28 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/add-cust-address #CurrentURLEnd
#Request : {"fname":"Roshni","lname":"mistry","mobile_no":"7418529632","email":"mistryroshni13@gmail.com","txtaddress":"20, shivcharan socity -2,.b\/h somnath temple","txtcity":"Bilimora","pincode":"396321","txtcountry":"India","txtstate":"Gujarat","txtaddressTyperadio":"home"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_address(`customer_id`, `first_name`, `last_name`, `email`, `mobile`, `address`, `city`, `state`, `pincode`, `country`, `address_type`, `set_default`, `created_by`, `created`, `is_active`) VALUES('1', 'Roshni', 'mistry', 'mistryroshni13@gmail.com', '7418529632', '20, shivcharan socity -2,.b/h somnath temple', 'Bilimora', 'Gujarat', '396321', 'India', '20, shivcharan socity -2,.b/h somnath temple'_type, NULL, '1', '2022_09-18', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 18-09-2022 00:47:42 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/change-delivery-address #CurrentURLEnd
#Request : {"delivery_address":"13"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_address SET `set_default` = 0 WHERE 1=1  and customer_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 18-09-2022 00:47:42 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/change-delivery-address #CurrentURLEnd
#Request : {"delivery_address":"13"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_address SET `set_default` = 1 WHERE 1=1  and address_id = '13' and customer_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 18-09-2022 00:47:48 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/change-delivery-address #CurrentURLEnd
#Request : {"delivery_address":"12"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_address SET `set_default` = 0 WHERE 1=1  and customer_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 18-09-2022 00:47:48 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/change-delivery-address #CurrentURLEnd
#Request : {"delivery_address":"12"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_address SET `set_default` = 1 WHERE 1=1  and address_id = '12' and customer_id = '1';
#End*******************************************************************************************************

