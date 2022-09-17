<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 31-08-2022 04:03:51 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/product-detail/awg-all-weather-gear #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/addtocart #CurrentURLEnd
#Request : {"quantity":"1","product_id":"15"} #Requestend
#Operation : INSERT #Operationend
#status: 
error;
#message: 
Insert Failed: SQLSTATE[23000]: Integrity constraint violation: 1048 Column 'customer_id' cannot be null;
#trace: 
SQLSTATE[23000]: Integrity constraint violation: 1048 Column 'customer_id' cannot be null;
#query: 
INSERT INTO customer_cart(`customer_id`, `product_id`, `product_name`, `quantity`, `net_price`, `total_amt`, `mrp`, `discount`, `discount_amt`, `gst`, `gst_amt`, `image`) VALUES(NULL, '15', 'AWG ALL WEATHER GEAR', '1', '699', 699, '699', '', ''_amt, '0', '0'_amt, 'cover_image.jpg');
#End*******************************************************************************************************

