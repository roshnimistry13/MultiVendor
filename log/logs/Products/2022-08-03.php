<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 03-08-2022 12:58:49 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-product #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-product #CurrentURLEnd
#Request : {"text_product_id":"","text_category_id":"1","text_subcategory_id":"18","text_brand_id":"2","text_product_name":"Test my products","text_product_code":"TEST123FF423","text_short_description":"TESS hfduifh fds huuujr kdfhf ljsdl jkljfd","text_description":"<p>TESS hfduifh fds huuujr kdfhf ljsdl jkljfd<\/p>","text_vendor_id":"1","txt_element_id":["1","","3","4","5",""],"txt_attributes_1":["1","2","3","4","5"],"txt_attributes_3":["14","15","16","19","20"],"txt_attributes_4":["33","34","38","39","40","43","44"],"txt_attributes_5":["46","47","48"],"text_mrp_price":"500","text_discount":"50","text_net_price":"250","text_tax":"5","text_stock":"145","old_image":"","text_is_new":"1","text_popular_product":"1","text_meta_title":"sdfdfdsfds","text_meta_description":"fdfdfds","text_meta_keyword":"fdsfdfdsfds"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO product_details(`product_name`, `product_code`, `short_code`, `short_description`, `description`, `brand_id`, `category_id`, `mrp_price`, `discount`, `net_price`, `tax`, `is_new_product`, `is_popular_product`, `is_feature_product`, `meta_title`, `meta_description`, `meta_keyword`, `created_by`, `created`) VALUES('Test my products', 'TEST123FF423', 'test-my-products', 'TESS hfduifh fds huuujr kdfhf ljsdl jkljfd', '<p>TESS hfduifh fds huuujr kdfhf ljsdl jkljfd</p>', '2', '18', '500', '50', '250', '5', 1, 1, 0, 'sdfdfdsfds', 'fdfdfds', 'fdsfdfdsfds', '1', '2022-08-03 09:28:49');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 13:03:03 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-product #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-product #CurrentURLEnd
#Request : {"text_product_id":"","text_category_id":"1","text_subcategory_id":"17","text_brand_id":"1","text_product_name":"Product 2","text_product_code":"PROD234TTRED$","text_short_description":"fdsfsdfdsfsdfds","text_description":"<p>fdfdsfds<\/p>","text_vendor_id":"","txt_element_id":["1","2","3","4","5",""],"txt_attributes_1":["1","2","3"],"txt_attributes_2":["6","7","13"],"txt_attributes_3":["14","15"],"txt_attributes_4":["33","35","39","44"],"txt_attributes_5":["46","47","48"],"text_mrp_price":"500","text_discount":"50","text_net_price":"250","text_tax":"0","text_stock":"154","old_image":"","text_is_new":"1","text_popular_product":"1","text_is_feature_product":"1","text_meta_title":"","text_meta_description":"","text_meta_keyword":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO product_details(`product_name`, `product_code`, `short_code`, `short_description`, `description`, `brand_id`, `category_id`, `mrp_price`, `discount`, `net_price`, `tax`, `is_new_product`, `is_popular_product`, `is_feature_product`, `meta_title`, `meta_description`, `meta_keyword`, `created_by`, `created`) VALUES('Product 2', 'PROD234TTRED$', 'product-2', 'fdsfsdfdsfsdfds', '<p>fdfdsfds</p>', '1', '17', '500', '50', '250', '0', 1, 1, 1, '', '', '', '1', '2022-08-03 09:33:03');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 13:03:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-product #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-product #CurrentURLEnd
#Request : {"text_product_id":"","text_category_id":"1","text_subcategory_id":"17","text_brand_id":"1","text_product_name":"Product 2","text_product_code":"PROD234TTRED$","text_short_description":"fdsfsdfdsfsdfds","text_description":"<p>fdfdsfds<\/p>","text_vendor_id":"","txt_element_id":["1","2","3","4","5",""],"txt_attributes_1":["1","2","3"],"txt_attributes_2":["6","7","13"],"txt_attributes_3":["14","15"],"txt_attributes_4":["33","35","39","44"],"txt_attributes_5":["46","47","48"],"text_mrp_price":"500","text_discount":"50","text_net_price":"250","text_tax":"0","text_stock":"154","old_image":"","text_is_new":"1","text_popular_product":"1","text_is_feature_product":"1","text_meta_title":"","text_meta_description":"","text_meta_keyword":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE product_details SET `image` = 'Mustard Oil 5 ltr 1.png|Mustard Oil 5 ltr 2.png' WHERE 1=1  and product_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 13:54:18 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-product #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-product #CurrentURLEnd
#Request : {"text_product_id":"","text_category_id":"1","text_subcategory_id":"17","text_brand_id":"2","text_product_name":"Product 3","text_product_code":"PRO123OUUER","text_short_description":"Pruu udso fsdklnfds","text_description":"<p>dfs fds fdgdf hd bfgbdfgrf<\/p>","text_vendor_id":"1","txt_element_id":["","2","3","4","5","6"],"txt_attributes_2":["6","7","8"],"txt_attributes_3":["30","31","32"],"txt_attributes_4":["43","44","45"],"txt_attributes_5":["49","51"],"txt_attributes_6":["54","55"],"text_mrp_price":"500","text_discount":"50","text_net_price":"250","text_tax":"0","text_stock":"784","old_image":"","text_is_new":"1","text_popular_product":"1","text_meta_title":"","text_meta_description":"","text_meta_keyword":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO product_details(`product_name`, `product_code`, `short_code`, `short_description`, `description`, `brand_id`, `category_id`, `mrp_price`, `discount`, `net_price`, `tax`, `is_new_product`, `is_popular_product`, `is_feature_product`, `meta_title`, `meta_description`, `meta_keyword`, `created_by`, `created`) VALUES('Product 3', 'PRO123OUUER', 'product-3', 'Pruu udso fsdklnfds', '<p>dfs fds fdgdf hd bfgbdfgrf</p>', '2', '17', '500', '50', '250', '0', 1, 1, 0, '', '', '', '1', '2022-08-03 10:24:18');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 13:54:19 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-product #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-product #CurrentURLEnd
#Request : {"text_product_id":"","text_category_id":"1","text_subcategory_id":"17","text_brand_id":"2","text_product_name":"Product 3","text_product_code":"PRO123OUUER","text_short_description":"Pruu udso fsdklnfds","text_description":"<p>dfs fds fdgdf hd bfgbdfgrf<\/p>","text_vendor_id":"1","txt_element_id":["","2","3","4","5","6"],"txt_attributes_2":["6","7","8"],"txt_attributes_3":["30","31","32"],"txt_attributes_4":["43","44","45"],"txt_attributes_5":["49","51"],"txt_attributes_6":["54","55"],"text_mrp_price":"500","text_discount":"50","text_net_price":"250","text_tax":"0","text_stock":"784","old_image":"","text_is_new":"1","text_popular_product":"1","text_meta_title":"","text_meta_description":"","text_meta_keyword":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE product_details SET `image` = 'Mustard Oil 5 ltr 1.png|Mustard Oil 5 ltr 2.png' WHERE 1=1  and product_id = '3';
#End*******************************************************************************************************

