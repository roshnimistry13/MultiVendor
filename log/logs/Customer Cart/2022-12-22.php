<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 22-12-2022 02:25:57 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/EthnicWear/cart #ReferrerEnd
#Current URL: http://localhost/EthnicWear/Home/updateItemQuantity #CurrentURLEnd
#Request : {"product_id":"118","quantity":"2"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_cart SET `quantity` = '2' WHERE 1=1  and customer_id = '1' and product_id = '118';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 22-12-2022 02:25:59 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/EthnicWear/cart #ReferrerEnd
#Current URL: http://localhost/EthnicWear/Home/updateItemQuantity #CurrentURLEnd
#Request : {"product_id":"118","quantity":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_cart SET `quantity` = '1' WHERE 1=1  and customer_id = '1' and product_id = '118';
#End*******************************************************************************************************

