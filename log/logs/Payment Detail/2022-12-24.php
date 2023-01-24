<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 24-12-2022 01:53:23 #Timeend
#IP : ::1 #IPend
#Current URL: http://localhost/MultiVendor/api/MultivendorApi/addOrder #CurrentURLEnd
#Request : {"secretkey":"12!@34#$5%","customer_id":"1","product_id":"5,10,14"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO payment_details(`payment_mode`, `order_id`, `customer_id`, `total_pay_amount`, `payment_date`, `pay_status`) VALUES(NULL, '8', '1', 12687, '2022-12-24', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-12-2022 02:07:12 #Timeend
#IP : ::1 #IPend
#Current URL: http://localhost/MultiVendor/api/MultivendorApi/addOrder #CurrentURLEnd
#Request : {"secretkey":"12!@34#$5%","customer_id":"1","product_id":"1,5,28"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO payment_details(`payment_mode`, `order_id`, `customer_id`, `total_pay_amount`, `payment_date`, `pay_status`) VALUES('cod', '1', '1', 1274, '2022-12-24', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-12-2022 02:15:22 #Timeend
#IP : ::1 #IPend
#Current URL: http://localhost/MultiVendor/api/MultivendorApi/addOrder #CurrentURLEnd
#Request : {"secretkey":"12!@34#$5%","customer_id":"1","product_id":"115,107,99"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO payment_details(`payment_mode`, `order_id`, `customer_id`, `total_pay_amount`, `payment_date`, `pay_status`) VALUES('cod', '3', '1', 1456, '2022-12-24', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-12-2022 02:17:46 #Timeend
#IP : ::1 #IPend
#Current URL: http://localhost/MultiVendor/api/MultivendorApi/addOrder #CurrentURLEnd
#Request : {"secretkey":"12!@34#$5%","customer_id":"1","product_id":"48,107,99"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO payment_details(`payment_mode`, `order_id`, `customer_id`, `total_pay_amount`, `payment_date`, `pay_status`) VALUES('cod', '1', '1', 2542, '2022-12-24', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-12-2022 02:22:21 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/place-order #CurrentURLEnd
#Request : {"payment_type":"cod"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO payment_details(`payment_mode`, `order_id`, `customer_id`, `total_pay_amount`, `payment_date`, `pay_status`) VALUES('cod', '2', '1', 770, '2022-12-24', 1);
#End*******************************************************************************************************

