<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 22-12-2022 23:07:13 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/EthnicWear/order-detail?id=2 #ReferrerEnd
#Current URL: http://localhost/EthnicWear/submit-rating-reviews #CurrentURLEnd
#Request : {"txtProductID":"121","star_rate":"3","review_customer_title":"Superb Product","review_customer_content":"test"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO product_review(`product_id`, `star_rate`, `review_title`, `review_content`, `customer_id`, `customer_name`, `customer_email`, `review_date`) VALUES('121', '3', 'Superb Product', 'test', '1', 'Roshni Mistry', 'roshnimistry@gmail.com', '2022-12-22');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 22-12-2022 23:38:12 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/EthnicWear/order-detail?id=1 #ReferrerEnd
#Current URL: http://localhost/EthnicWear/submit-rating-reviews #CurrentURLEnd
#Request : {"txtProductID":"4","star_rate":"2","review_customer_title":"Superb Product","review_customer_content":"qqqq"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO product_review(`product_id`, `star_rate`, `review_title`, `review_content`, `customer_id`, `customer_name`, `customer_email`, `review_date`) VALUES('4', '2', 'Superb Product', 'qqqq', '1', 'Roshni Mistry', 'roshnimistry@gmail.com', '2022-12-22');
#End*******************************************************************************************************

