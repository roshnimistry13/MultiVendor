<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 27-09-2022 21:12:04 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/place-order #CurrentURLEnd
#Request : {"payment_type":"cod"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO order_details(`order_id`, `product_id`, `product_name`, `quantity`, `net_price`, `mrp_price`, `total_amt`, `discount`, `return_or_replace`, `discount_amt`, `gst`, `gst_amt`) VALUES('1', '6', 'Dennis Lingo Men Shirt', '1', '683', '2071', 683, '67', NULL, '67'_amt, '12', '12'_amt);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 27-09-2022 21:18:08 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/place-order #CurrentURLEnd
#Request : {"payment_type":"cod"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO order_details(`order_id`, `product_id`, `product_name`, `quantity`, `net_price`, `mrp_price`, `total_amt`, `discount`, `return_or_replace`, `discount_amt`, `gst`, `gst_amt`) VALUES('1', '6', 'Dennis Lingo Men Shirt', '1', '683', '2071', 683, '67', 'return,replace', '67'_amt, '12', '12'_amt);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 27-09-2022 21:20:26 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/place-order #CurrentURLEnd
#Request : {"payment_type":"cod"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO order_details(`order_id`, `product_id`, `product_name`, `quantity`, `net_price`, `mrp_price`, `total_amt`, `discount`, `return_or_replace`, `discount_amt`, `gst`, `gst_amt`, `vendor_id`) VALUES('2', '4', 'Allen Solly Women's Regular fit T-Shirt', '1', '616', '1231', 616, '50', 'return,replace', '50'_amt, '12', '12'_amt, '1');
#End*******************************************************************************************************

