<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 14-01-2023 00:37:06 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/order-confirmed #ReferrerEnd
#Current URL: http://localhost/MultiVendor/update-delivery-status #CurrentURLEnd
#Request : {"orderid":"2","statusid":"2"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE orders SET `delivery_status_id` = '2' WHERE 1=1  and order_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 14-01-2023 00:37:17 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/order-processing #ReferrerEnd
#Current URL: http://localhost/MultiVendor/update-delivery-status #CurrentURLEnd
#Request : {"orderid":"2","statusid":"3"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE orders SET `delivery_status_id` = '3' WHERE 1=1  and order_id = '2';
#End*******************************************************************************************************

