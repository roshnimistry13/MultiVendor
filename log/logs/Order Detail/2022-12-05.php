<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 05-12-2022 21:37:59 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/checkout #ReferrerEnd
#Current URL: http://localhost/MultiVendor/place-order #CurrentURLEnd
#Request : {"payment_type":"cod"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO order_details(`order_id`, `product_id`, `product_name`, `quantity`, `net_price`, `mrp_price`, `total_amt`, `discount`, `return_or_replace`, `return_replace_validity`, `discount_amt`, `gst`, `gst_amt`, `vendor_id`, `elements_attributes`) VALUES('1', '4', 'Men White Pure Cotton T-shirt', '1', '210', '447', 210, '53', 'return,replace', '7', '53'_amt, '12', '12'_amt, '1', '{"Size":"XL","Color":"WHITE"}');
#End*******************************************************************************************************

