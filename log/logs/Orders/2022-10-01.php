<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 01-10-2022 04:32:24 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/order #ReferrerEnd
#Current URL: http://localhost/MultiVendor/update-delivery-status #CurrentURLEnd
#Request : {"orderid":"1","statusid":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE orders SET `delivery_status_id` = '1' WHERE 1=1  and order_id = '1';
#End*******************************************************************************************************

