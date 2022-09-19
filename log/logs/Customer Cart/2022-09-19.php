<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 19-09-2022 22:18:31 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/product-detail/awg-all-weather-gear #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/addtocart #CurrentURLEnd
#Request : {"quantity":"1","product_id":"15"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_cart(`customer_id`, `product_id`, `quantity`) VALUES('1', '15', '1');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 19-09-2022 22:21:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/product-detail/sports-shoes-for-men #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/addtocart #CurrentURLEnd
#Request : {"quantity":"1","product_id":"14"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_cart(`customer_id`, `product_id`, `quantity`) VALUES('1', '14', '1');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 19-09-2022 22:21:45 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/product-detail/sports-shoes-for-men #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/removeFromCart #CurrentURLEnd
#Request : {"product_id":"15"} #Requestend
#Operation : DELETE #Operationend
#Message: 
DELETE FROM customer_cart WHERE 1=1  and product_id = '15' and customer_id = '1';
#End*******************************************************************************************************

