<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 13-08-2022 22:18:54 #Timeend
#IP : ::1 #IPend
#Current URL: http://localhost/MultiVendor/api/MultivendorApi/updateProductQty #CurrentURLEnd
#Request : {"secretkey":"12!@34#$5%","product_id":"3","quantity":"1","net_price":"300","customer_id":"2"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_cart SET `quantity` = '1' WHERE 1=1  and product_id = '3' and customer_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 13-08-2022 22:21:33 #Timeend
#IP : ::1 #IPend
#Current URL: http://localhost/MultiVendor/api/MultivendorApi/addToCart #CurrentURLEnd
#Request : {"secretkey":"12!@34#$5%","product_id":"3","quantity":"1","net_price":"300","customer_id":"2"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_cart(`customer_id`, `product_id`, `product_name`, `quantity`, `net_price`) VALUES('2', '3', 'NIRVANA DOUBLE COMFORTER - 2807197679146', '1', '300');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 14-08-2022 01:12:39 #Timeend
#IP : ::1 #IPend
#Current URL: http://localhost/MultiVendor/api/MultivendorApi/addToCart #CurrentURLEnd
#Request : {"secretkey":"12!@34#$5%","product_id":"3","quantity":"1","customer_id":"1"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_cart(`customer_id`, `product_id`, `product_name`, `quantity`, `net_price`, `total_amt`) VALUES('1', '3', 'NIRVANA DOUBLE COMFORTER - 2807197679146', '1', '200', 200);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 14-08-2022 01:14:54 #Timeend
#IP : ::1 #IPend
#Current URL: http://localhost/MultiVendor/api/MultivendorApi/addToCart #CurrentURLEnd
#Request : {"secretkey":"12!@34#$5%","product_id":"2","quantity":"2","customer_id":"1"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_cart(`customer_id`, `product_id`, `product_name`, `quantity`, `net_price`, `total_amt`) VALUES('1', '2', 'PLUMERIA CURTAINS - 2807197674691', '2', '315', 630);
#End*******************************************************************************************************

