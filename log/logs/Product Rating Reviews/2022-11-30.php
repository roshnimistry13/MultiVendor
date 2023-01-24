<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 30-11-2022 23:10:12 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/order-detail?id=1 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-rating-reviews #CurrentURLEnd
#Request : {"txtProductID":"","rate":"5","review_customer_title":"Superb Product","review_customer_content":"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. "} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO product_review(`product_id`, `star_rate`, `review_title`, `review_content`, `customer_id`, `customer_name`, `customer_email`, `review_date`) VALUES('', '5', 'Superb Product', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', '1', 'Roshni Mistry', 'roshni123@gmail.com', '2022-11-30');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 30-11-2022 23:11:04 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/order-detail?id=1 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-rating-reviews #CurrentURLEnd
#Request : {"txtProductID":"7","rate":"3","review_customer_title":"Superb Product","review_customer_content":"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. "} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO product_review(`product_id`, `star_rate`, `review_title`, `review_content`, `customer_id`, `customer_name`, `customer_email`, `review_date`) VALUES('7', '3', 'Superb Product', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', '1', 'Roshni Mistry', 'roshni123@gmail.com', '2022-11-30');
#End*******************************************************************************************************

