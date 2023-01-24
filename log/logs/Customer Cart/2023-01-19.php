<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 19-01-2023 00:16:37 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/product-detail/men-white-pure-cotton-t-shirt-s-white-vnky8c75-1 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/customer-login #CurrentURLEnd
#Request : {"txt_cust_email_phone":"roshni123@gmail.com","txt_cust_password":"123456"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_cart(`customer_id`, `product_id`, `quantity`, `elements_attributes`) VALUES('1', '1', '1', '{"1":"1","2":"11"}');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 19-01-2023 01:35:37 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/product-detail/men-maroon-regular-kurta-pyjamas-with-jacket-s-maroon-vnky8c75-61 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/addtocart #CurrentURLEnd
#Request : {"quantity":"1","product_id":"61","eleArray":{"1":"1","2":"86"}} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_cart(`customer_id`, `product_id`, `quantity`, `elements_attributes`) VALUES('1', '61', '1', '{"1":"1","2":"86"}');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 19-01-2023 01:35:42 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/product-detail/men-maroon-regular-kurta-pyjamas-with-jacket-s-maroon-vnky8c75-61 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/removeFromCart #CurrentURLEnd
#Request : {"product_id":"1"} #Requestend
#Operation : DELETE #Operationend
#Message: 
DELETE FROM customer_cart WHERE 1=1  and product_id = '1' and customer_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 19-01-2023 01:45:53 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/product-detail/men-maroon-regular-kurta-pyjamas-with-jacket-m-maroon-vnky8c75-62 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/addtocart #CurrentURLEnd
#Request : {"quantity":"1","product_id":"62","eleArray":{"1":"2","2":"86"}} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_cart(`customer_id`, `product_id`, `quantity`, `elements_attributes`) VALUES('1', '62', '1', '{"1":"2","2":"86"}');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 19-01-2023 01:51:25 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/product-detail/men-maroon-regular-kurta-pyjamas-with-jacket-l-maroon-vnky8c75-63 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/addtocart #CurrentURLEnd
#Request : {"quantity":"1","product_id":"63","eleArray":{"1":"3","2":"86"}} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_cart(`customer_id`, `product_id`, `quantity`, `elements_attributes`) VALUES('1', '63', '1', '{"1":"3","2":"86"}');
#End*******************************************************************************************************

