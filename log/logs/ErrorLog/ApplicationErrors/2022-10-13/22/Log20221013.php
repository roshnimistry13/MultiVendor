<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 13-10-2022 22:16:22 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/place-order #CurrentURLEnd
#Request : {"payment_type":"cod"} #Requestend
#Operation : INSERT #Operationend
#status: 
error;
#message: 
Insert Failed: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'ordered_qty' in 'field list';
#trace: 
SQLSTATE[42S22]: Column not found: 1054 Unknown column 'ordered_qty' in 'field list';
#query: 
INSERT INTO stock_details(`product_id`, `old_stock`, `ordered_qty`, `current_stock`, `status`) VALUES('3', 49, '1', 48, 2);
#End*******************************************************************************************************

