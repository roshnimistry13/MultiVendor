<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 07-09-2022 00:38:23 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/cart #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/updateItemQuantity #CurrentURLEnd
#Request : {"product_id":"7","quantity":"2"} #Requestend
#Operation : UPDATE #Operationend
#status: 
error;
#message: 
Update Failed: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'net_price' in 'field list';
#trace: 
SQLSTATE[42S22]: Column not found: 1054 Unknown column 'net_price' in 'field list';
#query: 
UPDATE customer_cart SET `quantity` = '2', `net_price` = '374', `total_amt` = 748 WHERE 1=1  and customer_id = '1' and product_id = '7';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 07-09-2022 00:38:26 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/cart #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/updateItemQuantity #CurrentURLEnd
#Request : {"product_id":"7","quantity":"1"} #Requestend
#Operation : UPDATE #Operationend
#status: 
error;
#message: 
Update Failed: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'net_price' in 'field list';
#trace: 
SQLSTATE[42S22]: Column not found: 1054 Unknown column 'net_price' in 'field list';
#query: 
UPDATE customer_cart SET `quantity` = '1', `net_price` = '374', `total_amt` = 374 WHERE 1=1  and customer_id = '1' and product_id = '7';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 07-09-2022 00:44:27 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/cart #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/updateItemQuantity #CurrentURLEnd
#Request : {"product_id":"6","quantity":"2"} #Requestend
#Operation : UPDATE #Operationend
#status: 
error;
#message: 
Update Failed: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'net_price' in 'field list';
#trace: 
SQLSTATE[42S22]: Column not found: 1054 Unknown column 'net_price' in 'field list';
#query: 
UPDATE customer_cart SET `quantity` = '2', `net_price` = '11999.2', `total_amt` = 23998.4 WHERE 1=1  and customer_id = '1' and product_id = '6';
#End*******************************************************************************************************

