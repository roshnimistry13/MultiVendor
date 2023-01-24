<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 29-12-2022 00:44:53 #Timeend
#IP : ::1 #IPend
#Current URL: http://localhost/MultiVendor/api/MultivendorApi/addProductRatingReviews #CurrentURLEnd
#Request : {"secretkey":"12!@34#$5%","product_id":"10","customer_id":"1","customer_name":"Roshni nMistry","star_rate":"2","review":"Kurta was nice but material is not so good"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO product_review(`product_id`, `star_rate`, `review_title`, `review_content`, `customer_id`, `customer_name`, `customer_email`, `review_date`) VALUES('10', '2', '', 'Kurta was nice but material is not so good', '1', 'Roshni nMistry', '', '2022-12-29');
#End*******************************************************************************************************

