<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 12-10-2022 21:10:59 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/order #ReferrerEnd
#Current URL: http://localhost/MultiVendor/update-delivery-status #CurrentURLEnd
#Request : {"orderid":"5","statusid":"3"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE orders SET `delivery_status_id` = '3' WHERE 1=1  and order_id = '5';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 12-10-2022 21:11:02 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/order #ReferrerEnd
#Current URL: http://localhost/MultiVendor/update-delivery-status #CurrentURLEnd
#Request : {"orderid":"5","statusid":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE orders SET `delivery_status_id` = '1' WHERE 1=1  and order_id = '5';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 12-10-2022 21:11:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/order #ReferrerEnd
#Current URL: http://localhost/MultiVendor/update-delivery-status #CurrentURLEnd
#Request : {"orderid":"5","statusid":"4"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE orders SET `delivery_status_id` = '4' WHERE 1=1  and order_id = '5';
#End*******************************************************************************************************

