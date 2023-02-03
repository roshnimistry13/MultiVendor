<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 24-01-2023 00:31:28 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/EthnicWear/cart #ReferrerEnd
#Current URL: http://localhost/EthnicWear/Home/updateItemQuantity #CurrentURLEnd
#Request : {"product_id":"118","quantity":"2"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_cart SET `quantity` = '2' WHERE 1=1  and customer_id = NULL and product_id = '118';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-01-2023 00:31:29 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/EthnicWear/cart #ReferrerEnd
#Current URL: http://localhost/EthnicWear/Home/updateItemQuantity #CurrentURLEnd
#Request : {"product_id":"118","quantity":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_cart SET `quantity` = '1' WHERE 1=1  and customer_id = NULL and product_id = '118';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-01-2023 00:37:56 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/EthnicWear/cart #ReferrerEnd
#Current URL: http://localhost/EthnicWear/Home/updateItemQuantity #CurrentURLEnd
#Request : {"product_id":"108","quantity":"2"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_cart SET `quantity` = '2' WHERE 1=1  and customer_id = NULL and product_id = '108';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-01-2023 00:37:57 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/EthnicWear/cart #ReferrerEnd
#Current URL: http://localhost/EthnicWear/Home/updateItemQuantity #CurrentURLEnd
#Request : {"product_id":"108","quantity":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_cart SET `quantity` = '1' WHERE 1=1  and customer_id = NULL and product_id = '108';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-01-2023 00:38:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/EthnicWear/cart #ReferrerEnd
#Current URL: http://localhost/EthnicWear/Home/updateItemQuantity #CurrentURLEnd
#Request : {"product_id":"108","quantity":"2"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_cart SET `quantity` = '2' WHERE 1=1  and customer_id = NULL and product_id = '108';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-01-2023 00:52:25 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/EthnicWear/login #ReferrerEnd
#Current URL: http://localhost/EthnicWear/customer-login #CurrentURLEnd
#Request : {"txt_cust_email_phone":"roshni@gmail.com","txt_cust_password":"123456","login":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_cart(`customer_id`, `product_id`, `quantity`, `elements_attributes`) VALUES('1', '108', '1', '{"1":"2","2":"95"}');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-01-2023 02:01:12 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/EthnicWear/login #ReferrerEnd
#Current URL: http://localhost/EthnicWear/customer-login #CurrentURLEnd
#Request : {"txt_cust_email_phone":"roshni@gmail.com","txt_cust_password":"123456","login":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_cart(`customer_id`, `product_id`, `quantity`, `elements_attributes`) VALUES('1', '118', '1', '{"1":"2","2":"86"}');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-01-2023 02:01:12 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/EthnicWear/login #ReferrerEnd
#Current URL: http://localhost/EthnicWear/customer-login #CurrentURLEnd
#Request : {"txt_cust_email_phone":"roshni@gmail.com","txt_cust_password":"123456","login":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_cart SET `quantity` = 2, `elements_attributes` = '{"1":"1","2":"10"}' WHERE 1=1  and cart_id = '1';
#End*******************************************************************************************************

