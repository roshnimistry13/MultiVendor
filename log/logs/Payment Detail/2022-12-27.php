<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 27-12-2022 00:24:46 #Timeend
#IP : ::1 #IPend
#Current URL: http://localhost/MultiVendor/api/MultivendorApi/addOrder #CurrentURLEnd
#Request : {"secretkey":"12!@34#$5%","customer_id":"1","product_id":"10"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO payment_details(`payment_mode`, `order_id`, `customer_id`, `total_pay_amount`, `payment_date`, `pay_status`) VALUES('cod', '3', '1', 1075, '2022-12-27', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 27-12-2022 00:27:19 #Timeend
#IP : ::1 #IPend
#Current URL: http://localhost/MultiVendor/api/MultivendorApi/addOrder #CurrentURLEnd
#Request : {"secretkey":"12!@34#$5%","customer_id":"1","product_id":"1"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO payment_details(`payment_mode`, `order_id`, `customer_id`, `total_pay_amount`, `payment_date`, `pay_status`) VALUES('cod', '4', '1', 210, '2022-12-27', 1);
#End*******************************************************************************************************

