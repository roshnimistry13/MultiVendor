<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 22-12-2022 04:35:35 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/order-detail?id=2 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-replace #CurrentURLEnd
#Request : {"txt_product_id":"118","txt_order_id":"2","txt_reason":"Product with Physical Damage","txtcoment":"www","txt_ifsc":"","txt_acc_no":"","txt_account_name":"","txt_phone_no":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO return_request(`request_type`, `customer_id`, `order_id`, `order_no`, `product_id`, `order_date`, `return_request_date`, `return_reason`, `status`, `comments`, `pickup_address`) VALUES('replace', '1', '2', 'OD202223-11671143722', '118', '2022-12-16', '2022-12-22', 'Product with Physical Damage', 'Replace Request Sent', 'www', '');
#End*******************************************************************************************************

