<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 21-12-2022 23:14:40 #Timeend
#IP : ::1 #IPend
#Current URL: http://localhost/MultiVendor/api/MultivendorApi/addToCart #CurrentURLEnd
#Request : {"secretkey":"12!@34#$5%","product_id":"10","quantity":"2","customer_id":"1"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_cart(`customer_id`, `product_id`, `quantity`, `elements_attributes`) VALUES('1', '10', '2', );
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 21-12-2022 23:15:44 #Timeend
#IP : ::1 #IPend
#Current URL: http://localhost/MultiVendor/api/MultivendorApi/addToCart #CurrentURLEnd
#Request : {"secretkey":"12!@34#$5%","product_id":"10","quantity":"2","customer_id":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_cart SET `quantity` = 4, `elements_attributes` = '' WHERE 1=1  and cart_id = '7';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 21-12-2022 23:15:47 #Timeend
#IP : ::1 #IPend
#Current URL: http://localhost/MultiVendor/api/MultivendorApi/addToCart #CurrentURLEnd
#Request : {"secretkey":"12!@34#$5%","product_id":"10","quantity":"2","customer_id":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_cart SET `quantity` = 6, `elements_attributes` = '' WHERE 1=1  and cart_id = '7';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 21-12-2022 23:15:55 #Timeend
#IP : ::1 #IPend
#Current URL: http://localhost/MultiVendor/api/MultivendorApi/addToCart #CurrentURLEnd
#Request : {"secretkey":"12!@34#$5%","product_id":"10","quantity":"2","customer_id":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_cart SET `quantity` = 8, `elements_attributes` = '' WHERE 1=1  and cart_id = '7';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 21-12-2022 23:16:03 #Timeend
#IP : ::1 #IPend
#Current URL: http://localhost/MultiVendor/api/MultivendorApi/addToCart #CurrentURLEnd
#Request : {"secretkey":"12!@34#$5%","product_id":"10","quantity":"2","customer_id":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_cart SET `quantity` = 10, `elements_attributes` = '' WHERE 1=1  and cart_id = '7';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 21-12-2022 23:16:17 #Timeend
#IP : ::1 #IPend
#Current URL: http://localhost/MultiVendor/api/MultivendorApi/addToCart #CurrentURLEnd
#Request : {"secretkey":"12!@34#$5%","product_id":"10","quantity":"1","customer_id":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_cart SET `quantity` = 11, `elements_attributes` = '' WHERE 1=1  and cart_id = '7';
#End*******************************************************************************************************

