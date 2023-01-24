<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 07-12-2022 21:37:26 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/product-detail/boys-pack-of-3-mickey-mouse-donald-duck-goofy-printed-t-shirts-4y-5y-vnky8c75-129 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/addtocart #CurrentURLEnd
#Request : {"quantity":"1","product_id":"129","eleArray":{"10":"144"}} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_cart(`customer_id`, `product_id`, `quantity`, `elements_attributes`) VALUES('1', '129', '1', '{"10":"144"}');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 07-12-2022 21:40:13 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/cart #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/updateItemQuantity #CurrentURLEnd
#Request : {"product_id":"129","quantity":"2"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_cart SET `quantity` = '2' WHERE 1=1  and customer_id = '1' and product_id = '129';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 07-12-2022 21:40:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/cart #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/updateItemQuantity #CurrentURLEnd
#Request : {"product_id":"129","quantity":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_cart SET `quantity` = '1' WHERE 1=1  and customer_id = '1' and product_id = '129';
#End*******************************************************************************************************

