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
INSERT INTO return_list(`product_id`, `quantity`, `date`) VALUES('10', '1', '2022-12-27');
#End*******************************************************************************************************

