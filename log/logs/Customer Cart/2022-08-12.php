<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 12-08-2022 22:18:48 #Timeend
#IP : ::1 #IPend
#Current URL: http://localhost/MultiVendor/api/MultivendorApi/updateProductQty #CurrentURLEnd
#Request : {"secretkey":"12!@34#$5%","product_id":"1","customer_id":"1","quantity":"2"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_cart SET `quantity` = '2' WHERE 1=1  and product_id = '1' and customer_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 13-08-2022 03:16:00 #Timeend
#IP : ::1 #IPend
#Current URL: http://localhost/MultiVendor/api/MultivendorApi/addToCart #CurrentURLEnd
#Request : {"secretkey":"12!@34#$5%","product_id":"2","product_name":"Naked Wall Light Sconces Vintage","quantity":"1","net_price":"300","customer_id":"2"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_cart(`customer_id`, `product_id`, `product_name`, `quantity`, `net_price`) VALUES('2', '2', 'Naked Wall Light Sconces Vintage', '1', '300');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 13-08-2022 03:16:18 #Timeend
#IP : ::1 #IPend
#Current URL: http://localhost/MultiVendor/api/MultivendorApi/addToCart #CurrentURLEnd
#Request : {"secretkey":"12!@34#$5%","product_id":"1","product_name":"Naked Wall Light Sconces Vintage","quantity":"1","net_price":"300","customer_id":"2"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_cart(`customer_id`, `product_id`, `product_name`, `quantity`, `net_price`) VALUES('2', '1', 'Naked Wall Light Sconces Vintage', '1', '300');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 13-08-2022 03:16:41 #Timeend
#IP : ::1 #IPend
#Current URL: http://localhost/MultiVendor/api/MultivendorApi/addToCart #CurrentURLEnd
#Request : {"secretkey":"12!@34#$5%","product_id":"3","product_name":"product-3","quantity":"1","net_price":"300","customer_id":"2"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_cart(`customer_id`, `product_id`, `product_name`, `quantity`, `net_price`) VALUES('2', '3', 'product-3', '1', '300');
#End*******************************************************************************************************

