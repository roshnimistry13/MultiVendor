<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 27-12-2022 23:10:45 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/order-detail?id=3 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-return #CurrentURLEnd
#Request : {"txt_product_id":"10","txt_order_id":"3","txt_reason":"Item received is different from their description","txtcoment":"test","txt_ifsc":"SBIN0000337","txt_acc_no":"12345678963","txt_account_name":"ROSHNI","txt_phone_no":"7894561231"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO return_request(`request_type`, `customer_id`, `order_id`, `order_no`, `product_id`, `order_date`, `return_request_date`, `return_reason`, `status`, `comments`, `pickup_address`, `bank_detail`) VALUES('return', '1', '3', 'OD202223-11672080886', '10', '2022-12-27', '2022-12-27', 'Item received is different from their description', 'Return Request Sent', 'test', '"t"', '{"ifsc_code":"SBIN0000337","account_no":"12345678963","account_name":"ROSHNI","phone_no":"7894561231"}');
#End*******************************************************************************************************

