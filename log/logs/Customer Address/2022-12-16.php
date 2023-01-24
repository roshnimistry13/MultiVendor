<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 16-12-2022 02:41:46 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/change-delivery-address #CurrentURLEnd
#Request : {"delivery_address":"21"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_address SET `set_default` = 0 WHERE 1=1  and customer_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 16-12-2022 02:41:46 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/change-delivery-address #CurrentURLEnd
#Request : {"delivery_address":"21"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_address SET `set_default` = 1 WHERE 1=1  and address_id = '21' and customer_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 16-12-2022 02:43:37 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/add-cust-address #CurrentURLEnd
#Request : {"txtaddressid":"","fname":"Sagar","lname":"vslsix","mobile_no":"78945612388","email":"sagarvsl6@gmail.com","txtaddress":"test\r\nApt","txtcity":"City","pincode":"396001","txtcountry":"India","txtstate":"Gujarat","txtaddressTyperadio":"work"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_address SET `set_default` = 0 WHERE 1=1  and customer_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 16-12-2022 02:43:37 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/add-cust-address #CurrentURLEnd
#Request : {"txtaddressid":"","fname":"Sagar","lname":"vslsix","mobile_no":"78945612388","email":"sagarvsl6@gmail.com","txtaddress":"test\r\nApt","txtcity":"City","pincode":"396001","txtcountry":"India","txtstate":"Gujarat","txtaddressTyperadio":"work"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_address(`customer_id`, `first_name`, `last_name`, `email`, `mobile`, `address`, `city`, `state`, `pincode`, `country`, `address_type`, `set_default`, `created_by`, `created`, `is_active`) VALUES('1', 'Sagar', 'vslsix', 'sagarvsl6@gmail.com', '78945612388', 'test
Apt', 'City', 'Gujarat', '396001', 'India', 'test
Apt'_type, NULL, '1', '2022_12-16', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 16-12-2022 04:42:37 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/add-cust-address #CurrentURLEnd
#Request : {"txtaddressid":"","fname":"Nitin","lname":"Patel","mobile_no":"6666666666","email":"alpa@gmail.com","txtaddress":"41,test","txtcity":"vapi","pincode":"396174","txtcountry":"India","txtstate":"Gujarat","txtaddressTyperadio":"home"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_address SET `set_default` = 0 WHERE 1=1  and customer_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 16-12-2022 04:42:37 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/add-cust-address #CurrentURLEnd
#Request : {"txtaddressid":"","fname":"Nitin","lname":"Patel","mobile_no":"6666666666","email":"alpa@gmail.com","txtaddress":"41,test","txtcity":"vapi","pincode":"396174","txtcountry":"India","txtstate":"Gujarat","txtaddressTyperadio":"home"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_address(`customer_id`, `first_name`, `last_name`, `email`, `mobile`, `address`, `city`, `state`, `pincode`, `country`, `address_type`, `set_default`, `created_by`, `created`, `is_active`) VALUES('1', 'Nitin', 'Patel', 'alpa@gmail.com', '6666666666', '41,test', 'vapi', 'Gujarat', '396174', 'India', '41,test'_type, NULL, '1', '2022_12-16', 1);
#End*******************************************************************************************************

