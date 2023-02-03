<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 21-01-2023 23:50:02 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/EthnicWear/cart #ReferrerEnd
#Current URL: http://localhost/EthnicWear/Home/clearCart #CurrentURLEnd
#Request : [] #Requestend
#Operation : DELETE #Operationend
#Message: 
DELETE FROM customer_cart WHERE 1=1  and customer_id = NULL;
#End*******************************************************************************************************

