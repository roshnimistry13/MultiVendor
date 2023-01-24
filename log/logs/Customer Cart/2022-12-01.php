<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 01-12-2022 02:59:59 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/cart #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/removeFromCart #CurrentURLEnd
#Request : {"product_id":"9"} #Requestend
#Operation : DELETE #Operationend
#Message: 
DELETE FROM customer_cart WHERE 1=1  and product_id = '9' and customer_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 01-12-2022 02:59:59 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/cart #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/removeFromCart #CurrentURLEnd
#Request : {"product_id":"9"} #Requestend
#Operation : DELETE #Operationend
#Message: 
DELETE FROM customer_cart WHERE 1=1  and product_id = '9' and customer_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 01-12-2022 03:00:00 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/cart #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/removeFromCart #CurrentURLEnd
#Request : {"product_id":"103"} #Requestend
#Operation : DELETE #Operationend
#Message: 
DELETE FROM customer_cart WHERE 1=1  and product_id = '103' and customer_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 01-12-2022 03:00:00 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/cart #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/removeFromCart #CurrentURLEnd
#Request : {"product_id":"103"} #Requestend
#Operation : DELETE #Operationend
#Message: 
DELETE FROM customer_cart WHERE 1=1  and product_id = '103' and customer_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 01-12-2022 04:45:21 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/product-detail/men-green-solid-regular-fit-round-neck-t-shirt-xl-green-vnky8c75-5 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/addtocart #CurrentURLEnd
#Request : {"quantity":"1","product_id":"5","eleArray":{"1":"4","2":"109"}} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_cart(`customer_id`, `product_id`, `quantity`, `elements_attributes`) VALUES('1', '5', '1', '{"1":"4","2":"109"}');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 01-12-2022 04:47:47 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/product-detail/men-white-pure-cotton-t-shirt-l-white-vnky8c75-3 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/addtocart #CurrentURLEnd
#Request : {"quantity":"1","product_id":"3","eleArray":{"1":"3","2":"11"}} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_cart(`customer_id`, `product_id`, `quantity`, `elements_attributes`) VALUES('1', '3', '1', '{"1":"3","2":"11"}');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 01-12-2022 04:47:53 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/product-detail/men-white-pure-cotton-t-shirt-l-white-vnky8c75-3 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/addtocart #CurrentURLEnd
#Request : {"quantity":"1","product_id":"3","eleArray":{"1":"3","2":"11"}} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_cart SET `quantity` = 2, `elements_attributes` = '{"1":"3","2":"11"}' WHERE 1=1  and cart_id = '8';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 01-12-2022 04:48:02 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/cart #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/updateItemQuantity #CurrentURLEnd
#Request : {"product_id":"3","quantity":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_cart SET `quantity` = '1' WHERE 1=1  and customer_id = '1' and product_id = '3';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 01-12-2022 04:49:55 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/product-detail/men-green-solid-regular-fit-round-neck-t-shirt-m-green-vnky8c75-6 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/addtocart #CurrentURLEnd
#Request : {"quantity":"1","product_id":"6","eleArray":{"1":"2","2":"109"}} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_cart(`customer_id`, `product_id`, `quantity`, `elements_attributes`) VALUES('1', '6', '1', '{"1":"2","2":"109"}');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 01-12-2022 04:57:22 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/product-detail/men-teal-green-slim-fit-tropical-printed-pure-cotton-t-shirt-s-teal-vnky8c75-14 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/addtocart #CurrentURLEnd
#Request : {"quantity":"1","product_id":"14","eleArray":{"1":"1","2":"115"}} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_cart(`customer_id`, `product_id`, `quantity`, `elements_attributes`) VALUES('1', '14', '1', '{"1":"1","2":"115"}');
#End*******************************************************************************************************

