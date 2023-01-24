<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 24-12-2022 01:53:23 #Timeend
#IP : ::1 #IPend
#Current URL: http://localhost/MultiVendor/api/MultivendorApi/addOrder #CurrentURLEnd
#Request : {"secretkey":"12!@34#$5%","customer_id":"1","product_id":"5,10,14"} #Requestend
#Operation : INSERT #Operationend
#status: 
error;
#message: 
Insert Failed: SQLSTATE[23000]: Integrity constraint violation: 1048 Column 'payment_mode' cannot be null;
#trace: 
SQLSTATE[23000]: Integrity constraint violation: 1048 Column 'payment_mode' cannot be null;
#query: 
INSERT INTO payment_details(`payment_mode`, `order_id`, `customer_id`, `total_pay_amount`, `payment_date`, `pay_status`) VALUES(NULL, '8', '1', 12687, '2022-12-24', 1);
#End*******************************************************************************************************

