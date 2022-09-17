<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 10-09-2022 22:31:21 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/add-cust-address #CurrentURLEnd
#Request : {"fname":"dainik","lname":"Tandel","mobile_no":"7894561238","email":"sagarvsl6@gmail.com","txtaddress":"20,abc, ztyx,tyu","txtcity":"vapi","txtstate":"1","txtcountry":"1","pincode":"396001","txtaddressTyperadio":"home","txtdefaultaddress":"1"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_address(`customer_id`, `first_name`, `last_name`, `email`, `mobile`, `address`, `city`, `state`, `pincode`, `country`, `address_type`, `set_default`, `created_by`, `created`, `is_active`) VALUES('2', 'dainik', 'Tandel', 'sagarvsl6@gmail.com', '7894561238', '20,abc, ztyx,tyu', 'vapi', '1', '396001', '1', '20,abc, ztyx,tyu'_type, '1', '2', '2022_09-10', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 10-09-2022 22:31:35 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/add-cust-address #CurrentURLEnd
#Request : {"fname":"dainik","lname":"Tandel","mobile_no":"7894561238","email":"sagarvsl6@gmail.com","txtaddress":"20,abc, ztyx,tyu","txtcity":"vapi","txtstate":"1","txtcountry":"1","pincode":"396001","txtaddressTyperadio":"home","txtdefaultaddress":"1"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_address(`customer_id`, `first_name`, `last_name`, `email`, `mobile`, `address`, `city`, `state`, `pincode`, `country`, `address_type`, `set_default`, `created_by`, `created`, `is_active`) VALUES('2', 'dainik', 'Tandel', 'sagarvsl6@gmail.com', '7894561238', '20,abc, ztyx,tyu', 'vapi', '1', '396001', '1', '20,abc, ztyx,tyu'_type, '1', '2', '2022_09-10', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 10-09-2022 22:34:11 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/add-cust-address #CurrentURLEnd
#Request : {"fname":"dainik","lname":"tandel","mobile_no":"7894561238","email":"sagarvsl6@gmail.com","txtaddress":"10-abc,xyz,pqr","txtcity":"vapi","txtstate":"1","txtcountry":"1","pincode":"396001","txtaddressTyperadio":"home","txtdefaultaddress":"1"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_address(`customer_id`, `first_name`, `last_name`, `email`, `mobile`, `address`, `city`, `state`, `pincode`, `country`, `address_type`, `set_default`, `created_by`, `created`, `is_active`) VALUES('2', 'dainik', 'tandel', 'sagarvsl6@gmail.com', '7894561238', '10-abc,xyz,pqr', 'vapi', '1', '396001', '1', '10-abc,xyz,pqr'_type, '1', '2', '2022_09-10', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 10-09-2022 22:34:51 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/change-delivery-address #CurrentURLEnd
#Request : {"delivery_address":"5"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_address SET `set_default` = 0 WHERE 1=1  and customer_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 10-09-2022 22:34:51 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/change-delivery-address #CurrentURLEnd
#Request : {"delivery_address":"5"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_address SET `set_default` = 1 WHERE 1=1  and address_id = '5' and customer_id = '2';
#End*******************************************************************************************************

