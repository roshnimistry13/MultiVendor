<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 23-09-2022 23:46:38 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/place-order #CurrentURLEnd
#Request : {"payment_type":"cod"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO order_details(`order_id`, `product_id`, `product_name`, `quantity`, `net_price`, `mrp_price`, `total_amt`, `discount`, `return_or_replace`, `discount_amt`, `gst`, `gst_amt`) VALUES('3', '14', 'sports shoes for men', '1', '795', '1500', 795, '47', NULL, '47'_amt, '0', '0'_amt);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 23-09-2022 23:48:17 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/place-order #CurrentURLEnd
#Request : {"payment_type":"cod"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO order_details(`order_id`, `product_id`, `product_name`, `quantity`, `net_price`, `mrp_price`, `total_amt`, `discount`, `return_or_replace`, `discount_amt`, `gst`, `gst_amt`) VALUES('4', '14', 'sports shoes for men', '1', '795', '1500', 795, '47', 'replace', '47'_amt, '0', '0'_amt);
#End*******************************************************************************************************

