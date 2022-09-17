<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 13-09-2022 23:53:17 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/change-delivery-address #CurrentURLEnd
#Request : {"delivery_address":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_address SET `set_default` = 0 WHERE 1=1  and customer_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 13-09-2022 23:53:17 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/change-delivery-address #CurrentURLEnd
#Request : {"delivery_address":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_address SET `set_default` = 1 WHERE 1=1  and address_id = '1' and customer_id = '1';
#End*******************************************************************************************************

