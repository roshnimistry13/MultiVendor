<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 14-09-2022 21:54:18 #Timeend
#IP : ::1 #IPend
#Current URL: http://localhost/MultiVendor/api/MultivendorApi/addOrder #CurrentURLEnd
#Request : {"secretkey":"12!@34#$5%","customer_id":"1"} #Requestend
#Operation : INSERT #Operationend
#status: 
error;
#message: 
Insert Failed: SQLSTATE[23000]: Integrity constraint violation: 1048 Column 'payment_mode' cannot be null;
#trace: 
SQLSTATE[23000]: Integrity constraint violation: 1048 Column 'payment_mode' cannot be null;
#query: 
INSERT INTO payment_details(`payment_mode`, `order_id`, `customer_id`, `total_pay_amount`, `payment_date`, `pay_status`) VALUES(NULL, '1', '1', 270, '2022-09-14', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 14-09-2022 21:57:43 #Timeend
#IP : ::1 #IPend
#Current URL: http://localhost/MultiVendor/api/MultivendorApi/addOrder #CurrentURLEnd
#Request : {"secretkey":"12!@34#$5%","customer_id":"1"} #Requestend
#Operation : INSERT #Operationend
#status: 
error;
#message: 
Insert Failed: SQLSTATE[23000]: Integrity constraint violation: 1048 Column 'payment_mode' cannot be null;
#trace: 
SQLSTATE[23000]: Integrity constraint violation: 1048 Column 'payment_mode' cannot be null;
#query: 
INSERT INTO payment_details(`payment_mode`, `order_id`, `customer_id`, `total_pay_amount`, `payment_date`, `pay_status`) VALUES(NULL, '1', '1', 180, '2022-09-14', 1);
#End*******************************************************************************************************

