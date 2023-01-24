<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 23-12-2022 23:56:36 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/order #ReferrerEnd
#Current URL: http://localhost/MultiVendor/update-delivery-status #CurrentURLEnd
#Request : {"orderid":"1","statusid":"4"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE order_details SET `deliver_date` = '2022-12-23' WHERE 1=1  and order_id = '1';
#End*******************************************************************************************************

