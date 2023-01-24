<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 18-01-2023 23:25:10 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/order-detail?id=1 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-replace #CurrentURLEnd
#Request : {"txt_product_id":"1","txt_order_id":"1","txt_reason":"Product with Physical Damage","txtcoment":"test","txt_ifsc":"","txt_acc_no":"","txt_account_name":"","txt_phone_no":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO return_request(`request_type`, `customer_id`, `order_id`, `order_no`, `product_id`, `order_date`, `return_request_date`, `return_reason`, `status`, `comments`, `pickup_address`) VALUES('replace', '1', '1', 'OD202223-11674064115', '1', '2023-01-18', '2023-01-18', 'Product with Physical Damage', 'Replace Request Sent', 'test', '<strong>Roshni Mistry</strong><br>test,30 valsad ,<br>valsad , Haryana ,<br>India - 3963001<br>Phone no : 08866594677');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 18-01-2023 23:37:27 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/order-detail?id=3 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-return #CurrentURLEnd
#Request : {"txt_product_id":"118","txt_order_id":"3","txt_reason":"Fake product","txtcoment":"test test","txt_ifsc":"SBIN0005943","txt_acc_no":"12345678974","txt_account_name":"Roshni Mistry","txt_phone_no":"8866594677"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO return_request(`request_type`, `customer_id`, `order_id`, `order_no`, `product_id`, `order_date`, `return_request_date`, `return_reason`, `status`, `comments`, `pickup_address`, `bank_detail`) VALUES('return', '1', '3', 'OD202223-11674064893', '118', '2023-01-18', '2023-01-18', 'Fake product', 'Return Request Sent', 'test test', '<strong>Roshni Mistry</strong><br>test,30 valsad ,<br>valsad , Haryana ,<br>India - 3963001<br>Phone no : 08866594677', '{"ifsc_code":"SBIN0005943","account_no":"12345678974","account_name":"Roshni Mistry","phone_no":"8866594677"}');
#End*******************************************************************************************************

