<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 27-12-2022 23:12:06 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/order #ReferrerEnd
#Current URL: http://localhost/MultiVendor/update-delivery-status #CurrentURLEnd
#Request : {"orderid":"3","statusid":"4"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE order_details SET `deliver_date` = '2022-12-27' WHERE 1=1  and order_id = '3';
#End*******************************************************************************************************

