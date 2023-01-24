<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 22-12-2022 04:33:27 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/EthnicWear/order-detail?id=2 #ReferrerEnd
#Current URL: http://localhost/EthnicWear/submit-return-replace #CurrentURLEnd
#Request : {"txt_product_id":"121","txt_order_id":"2","request_type":"replace","txt_reason":"Product with Manufacturing Defect","txtcoment":"test","txt_ifsc":"","txt_acc_no":"","txt_account_name":"","txt_phone_no":"","submit":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO return_request(`request_type`, `customer_id`, `order_id`, `order_no`, `product_id`, `order_date`, `return_request_date`, `return_reason`, `status`, `comments`, `pickup_address`) VALUES('replace', '1', '2', 'OD202223-11671209379', '121', '2022-12-16', '2022-12-22', 'Product with Manufacturing Defect', 'Replace Request Sent', 'test', '<strong>Nitin Patel</strong><br>41,test ,<br>vapi , Gujarat ,<br>India - 396174<br>Phone no : 8888888888');
#End*******************************************************************************************************

