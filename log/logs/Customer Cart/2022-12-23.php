<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 23-12-2022 03:24:28 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/EthnicWear/cart #ReferrerEnd
#Current URL: http://localhost/EthnicWear/Home/clearCart #CurrentURLEnd
#Request : [] #Requestend
#Operation : DELETE #Operationend
#Message: 
DELETE FROM customer_cart WHERE 1=1  and customer_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 23-12-2022 03:24:43 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/EthnicWear/product-detail/womens-casual-digital-printed-shirt-ruffle-sleeve-tops-s-black-vnky8c75-115 #ReferrerEnd
#Current URL: http://localhost/EthnicWear/Home/addtocart #CurrentURLEnd
#Request : {"quantity":"1","product_id":"115","eleArray":{"1":"1","2":"10"}} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_cart(`customer_id`, `product_id`, `quantity`, `elements_attributes`) VALUES('1', '115', '1', '{"1":"1","2":"10"}');
#End*******************************************************************************************************

