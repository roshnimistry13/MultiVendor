<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 10-12-2022 03:21:41 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/product-detail/allen-solly-womens-regular-fit-t-shirt-m-red-vnky8c75-118 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/addtocart #CurrentURLEnd
#Request : {"quantity":"1","product_id":"118","eleArray":{"1":"2","2":"6"}} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_cart(`customer_id`, `product_id`, `quantity`, `elements_attributes`) VALUES('1', '118', '1', '{"1":"2","2":"6"}');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 10-12-2022 03:21:45 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/product-detail/allen-solly-womens-regular-fit-t-shirt-m-red-vnky8c75-118 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/addtocart #CurrentURLEnd
#Request : {"quantity":"1","product_id":"118","eleArray":{"1":"2","2":"6"}} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_cart SET `quantity` = 2, `elements_attributes` = '{"1":"2","2":"6"}' WHERE 1=1  and cart_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 10-12-2022 22:25:20 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/cart #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/removeFromCart #CurrentURLEnd
#Request : {"product_id":"118"} #Requestend
#Operation : DELETE #Operationend
#Message: 
DELETE FROM customer_cart WHERE 1=1  and product_id = '118' and customer_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 10-12-2022 22:25:20 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/cart #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/removeFromCart #CurrentURLEnd
#Request : {"product_id":"118"} #Requestend
#Operation : DELETE #Operationend
#Message: 
DELETE FROM customer_cart WHERE 1=1  and product_id = '118' and customer_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 10-12-2022 22:32:45 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/product-detail/allen-solly-womens-regular-fit-t-shirt-m-red-vnky8c75-118 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/addtocart #CurrentURLEnd
#Request : {"quantity":"1","product_id":"118","eleArray":{"1":"2","2":"6"}} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_cart(`customer_id`, `product_id`, `quantity`, `elements_attributes`) VALUES('1', '118', '1', '{"1":"2","2":"6"}');
#End*******************************************************************************************************

