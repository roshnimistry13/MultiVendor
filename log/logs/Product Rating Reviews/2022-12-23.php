<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 23-12-2022 22:34:28 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/order-detail?id=5 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-rating-reviews #CurrentURLEnd
#Request : {"txtProductID":"5","rate":"5","review_customer_title":"Superb Product","review_customer_content":"sdsdsd"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO product_review(`product_id`, `star_rate`, `review_title`, `review_content`, `customer_id`, `customer_name`, `customer_email`, `review_date`) VALUES('5', '5', 'Superb Product', 'sdsdsd', '1', 'Roshni Mistry', 'roshnimistry@gmail.com', '2022-12-23');
#End*******************************************************************************************************

