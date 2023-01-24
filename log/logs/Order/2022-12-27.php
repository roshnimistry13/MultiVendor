<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 27-12-2022 00:24:46 #Timeend
#IP : ::1 #IPend
#Current URL: http://localhost/MultiVendor/api/MultivendorApi/addOrder #CurrentURLEnd
#Request : {"secretkey":"12!@34#$5%","customer_id":"1","product_id":"10"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO orders(`order_number`, `customer_id`, `total_item`, `total_mrp`, `total_quantity`, `total_amount`, `gst_amount`, `discount_amt`, `order_date`, `is_active`, `delivery_status_id`, `shipping_address`) VALUES('OD202223-11672080886', '1', 1, 1792, 1, 1075, 192, 716.8, '2022-12-27', 1, 1, '"t"');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 27-12-2022 00:27:19 #Timeend
#IP : ::1 #IPend
#Current URL: http://localhost/MultiVendor/api/MultivendorApi/addOrder #CurrentURLEnd
#Request : {"secretkey":"12!@34#$5%","customer_id":"1","product_id":"1"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO orders(`order_number`, `customer_id`, `total_item`, `total_mrp`, `total_quantity`, `total_amount`, `gst_amount`, `discount_amt`, `order_date`, `is_active`, `delivery_status_id`, `shipping_address`) VALUES('OD202223-11672081039', '1', 1, 447, 1, 210, 47.88, 236.91, '2022-12-27', 1, 1, '{"name":"Roshni Mistry","mobile":"08866594677","address":"test,30 valsad ,\u003Cbr\u003Evalsad , Haryana ,\u003Cbr\u003EIndia - 3963001","city":"valsad","state":"Haryana","country":"India","pincode":"3963001"}');
#End*******************************************************************************************************

