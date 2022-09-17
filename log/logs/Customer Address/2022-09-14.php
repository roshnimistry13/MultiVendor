<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 14-09-2022 03:25:11 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/add-cust-address #CurrentURLEnd
#Request : {"fname":"Roshni","lname":"Lad","mobile_no":"08866594677","email":"mistryroshni13@gmil.com","txtaddress":"05,mahyavanshi area,segvi","txtcity":"valsad","pincode":"3963001","txtcountry":"India","txtstate":"Gujarat","txtaddressTyperadio":"home"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_address(`customer_id`, `first_name`, `last_name`, `email`, `mobile`, `address`, `city`, `state`, `pincode`, `country`, `address_type`, `set_default`, `created_by`, `created`, `is_active`) VALUES('1', 'Roshni', 'Lad', 'mistryroshni13@gmil.com', '08866594677', '05,mahyavanshi area,segvi', 'valsad', 'Gujarat', '3963001', 'India', '05,mahyavanshi area,segvi'_type, NULL, '1', '2022_09-14', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 14-09-2022 03:25:29 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/change-delivery-address #CurrentURLEnd
#Request : {"delivery_address":"6"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_address SET `set_default` = 0 WHERE 1=1  and customer_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 14-09-2022 03:25:29 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/change-delivery-address #CurrentURLEnd
#Request : {"delivery_address":"6"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_address SET `set_default` = 1 WHERE 1=1  and address_id = '6' and customer_id = '1';
#End*******************************************************************************************************

