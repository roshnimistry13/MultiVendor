<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 13-09-2022 23:53:17 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/addtocart #CurrentURLEnd
#Request : [] #Requestend
#Operation : INSERT #Operationend
#status: 
error;
#message: 
Insert Failed: SQLSTATE[23000]: Integrity constraint violation: 1048 Column 'product_id' cannot be null;
#trace: 
SQLSTATE[23000]: Integrity constraint violation: 1048 Column 'product_id' cannot be null;
#query: 
INSERT INTO customer_cart(`customer_id`, `product_id`, `quantity`) VALUES('1', NULL, 1);
#End*******************************************************************************************************

