<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 27-12-2022 00:24:46 #Timeend
#IP : ::1 #IPend
#Current URL: http://localhost/MultiVendor/api/MultivendorApi/addOrder #CurrentURLEnd
#Request : {"secretkey":"12!@34#$5%","customer_id":"1","product_id":"10"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO order_details(`order_id`, `product_id`, `product_name`, `quantity`, `net_price`, `mrp_price`, `total_amt`, `discount`, `return_or_replace`, `return_replace_validity`, `discount_amt`, `gst`, `gst_amt`, `vendor_id`, `elements_attributes`, `order_date`) VALUES('3', '10', 'Men Navy Blue & White Placement Striped Pure Cotton Slim Fit T-shirt', '1', '1075', '1792', 1075, '40', 'return,replace', '7', '40'_amt, '12', '12'_amt, '1', '{"Size":"M","Color":"BLUE","T-shirt Fits":"SLIM FIT."}', '2022-12-27');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 27-12-2022 00:27:19 #Timeend
#IP : ::1 #IPend
#Current URL: http://localhost/MultiVendor/api/MultivendorApi/addOrder #CurrentURLEnd
#Request : {"secretkey":"12!@34#$5%","customer_id":"1","product_id":"1"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO order_details(`order_id`, `product_id`, `product_name`, `quantity`, `net_price`, `mrp_price`, `total_amt`, `discount`, `return_or_replace`, `return_replace_validity`, `discount_amt`, `gst`, `gst_amt`, `vendor_id`, `elements_attributes`, `order_date`) VALUES('4', '1', 'Men White Pure Cotton T-shirt', '1', '210', '447', 210, '53', 'return,replace', '7', '53'_amt, '12', '12'_amt, '1', '{"Size":"S","Color":"WHITE"}', '2022-12-27');
#End*******************************************************************************************************

