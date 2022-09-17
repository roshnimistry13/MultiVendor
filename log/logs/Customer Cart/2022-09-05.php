<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 05-09-2022 21:14:36 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/cart #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/removeFromCart #CurrentURLEnd
#Request : [] #Requestend
#Operation : DELETE #Operationend
#Message: 
DELETE FROM customer_cart WHERE 1=1  and product_id = NULL and customer_id = '1';
#End*******************************************************************************************************

