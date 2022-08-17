<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 13-08-2022 00:53:47 #Timeend
#IP : ::1 #IPend
#Current URL: http://localhost/MultiVendor/api/MultivendorApi/addOrder #CurrentURLEnd
#Request : {"secretkey":"12!@34#$5%","customer_id":"1"} #Requestend
#Operation : INSERT #Operationend
#status: 
error;
#message: 
Insert Failed: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'order_number' in 'field list';
#trace: 
SQLSTATE[42S22]: Column not found: 1054 Unknown column 'order_number' in 'field list';
#query: 
INSERT INTO order_details(`order_number`, `customer_id`, `total_quantity`, `total_amount`, `order_date`) VALUES('ORD-1', '1', '5', '1100', '2022-08-12');
#End*******************************************************************************************************

