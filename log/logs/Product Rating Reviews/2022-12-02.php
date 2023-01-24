<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 02-12-2022 21:16:11 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/order-detail?id=1 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-rating-reviews #CurrentURLEnd
#Request : {"txtProductID":"9","rate":"5","review_customer_title":"Perfect Product","review_customer_content":"qqq"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO product_review(`product_id`, `star_rate`, `review_title`, `review_content`, `customer_id`, `customer_name`, `customer_email`, `review_date`) VALUES('9', '5', 'Perfect Product', 'qqq', '1', 'Roshni Mistry', 'roshni123@gmail.com', '2022-12-02');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 02-12-2022 21:25:27 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/order-detail?id=1 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-rating-reviews #CurrentURLEnd
#Request : {"txtProductID":"1","rate":"5","review_customer_title":"Superb Product","review_customer_content":"vv"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO product_review(`product_id`, `star_rate`, `review_title`, `review_content`, `customer_id`, `customer_name`, `customer_email`, `review_date`) VALUES('1', '5', 'Superb Product', 'vv', '1', 'Roshni Mistry', 'roshni123@gmail.com', '2022-12-02');
#End*******************************************************************************************************

