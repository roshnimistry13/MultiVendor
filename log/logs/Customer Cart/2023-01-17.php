<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 17-01-2023 23:37:37 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/shop #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/removeFromCart #CurrentURLEnd
#Request : {"product_id":"2"} #Requestend
#Operation : DELETE #Operationend
#Message: 
DELETE FROM customer_cart WHERE 1=1  and product_id = '2' and customer_id = NULL;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 17-01-2023 23:38:08 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/shop #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/removeFromCart #CurrentURLEnd
#Request : {"product_id":"3"} #Requestend
#Operation : DELETE #Operationend
#Message: 
DELETE FROM customer_cart WHERE 1=1  and product_id = '3' and customer_id = NULL;
#End*******************************************************************************************************

