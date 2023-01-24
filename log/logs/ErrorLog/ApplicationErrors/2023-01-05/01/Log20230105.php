<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 05-01-2023 01:41:37 #Timeend
#IP : ::1 #IPend
#Current URL: https://localhost/MultiVendor/api/MultivendorApi/searchBykeywords #CurrentURLEnd
#Request : {"secretkey":"12!@34#$5%","keyword":"Tunics","customer_id":"1","category":"women"} #Requestend
#Operation : INSERT #Operationend
#status: 
error;
#message: 
Insert Failed: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'category' in 'field list';
#trace: 
SQLSTATE[42S22]: Column not found: 1054 Unknown column 'category' in 'field list';
#query: 
INSERT INTO recent_search(`keyword`, `customer_id`, `category`, `created_at`) VALUES('Tunics', '1', 'women', '2023-01-05');
#End*******************************************************************************************************

