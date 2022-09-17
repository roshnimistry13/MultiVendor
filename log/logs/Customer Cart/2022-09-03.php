<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 03-09-2022 04:25:18 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/product-detail/sports-shoes-for-men #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/removeFromCart #CurrentURLEnd
#Request : {"product_id":"13"} #Requestend
#Operation :  #Operationend
#Message: 
;
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-09-2022 04:25:56 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/product-detail/sports-shoes-for-men #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/removeFromCart #CurrentURLEnd
#Request : {"product_id":"11"} #Requestend
#Operation : DELETE #Operationend
#Message: 
DELETE FROM customer_cart WHERE 1=1  and product_id = '11' and customer_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-09-2022 22:17:27 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/product-detail/sports-shoes-for-men #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/addtocart #CurrentURLEnd
#Request : {"quantity":"1","product_id":"14"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_cart(`customer_id`, `product_id`, `product_name`, `quantity`, `net_price`, `total_amt`, `mrp`, `discount`, `discount_amt`, `gst`, `gst_amt`, `image`) VALUES('1', '14', 'sports shoes for men', '1', '688.47', 688.47, '1299', '47', '47'_amt, '0', '0'_amt, 'cover_image.jpg');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-09-2022 22:19:38 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/product-detail/mi-5a-80-cm-32-inch-hd-ready-led-smart-android-tv-with-dolby-audio-2022-model #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/addtocart #CurrentURLEnd
#Request : {"quantity":"1","product_id":"12"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_cart(`customer_id`, `product_id`, `product_name`, `quantity`, `net_price`, `total_amt`, `mrp`, `discount`, `discount_amt`, `gst`, `gst_amt`, `image`) VALUES('1', '12', 'Mi 5A 80 cm (32 inch) HD Ready LED Smart Android TV with Dolby Audio (2022 Model)', '1', '13999.44', 13999.44, '24999', '44', '44'_amt, '0', '0'_amt, 'cover_image.jpg');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-09-2022 22:19:47 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/product-detail/tresemme-keratin-smooth-shampoo #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/addtocart #CurrentURLEnd
#Request : {"quantity":"1","product_id":"11"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO customer_cart(`customer_id`, `product_id`, `product_name`, `quantity`, `net_price`, `total_amt`, `mrp`, `discount`, `discount_amt`, `gst`, `gst_amt`, `image`) VALUES('1', '11', 'tresemme Keratin Smooth Shampoo', '1', '607.24', 607.24, '799', '24', '24'_amt, '0', '0'_amt, 'cover_image.jpg');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-09-2022 22:45:18 #Timeend
#IP : ::1 #IPend
#Current URL: http://localhost/MultiVendor/api/MultivendorApi/updateProductQty #CurrentURLEnd
#Request : {"secretkey":"12!@34#$5%","product_id":"14","customer_id":"1","quantity":"2"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE customer_cart SET `quantity` = '2', `total_amt` = 1376.94 WHERE 1=1  and product_id = '14' and customer_id = '1';
#End*******************************************************************************************************

