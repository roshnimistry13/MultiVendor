<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 03-08-2022 13:03:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-product #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-product #CurrentURLEnd
#Request : {"text_product_id":"","text_category_id":"1","text_subcategory_id":"17","text_brand_id":"1","text_product_name":"Product 2","text_product_code":"PROD234TTRED$","text_short_description":"fdsfsdfdsfsdfds","text_description":"<p>fdfdsfds<\/p>","text_vendor_id":"","txt_element_id":["1","2","3","4","5",""],"txt_attributes_1":["1","2","3"],"txt_attributes_2":["6","7","13"],"txt_attributes_3":["14","15"],"txt_attributes_4":["33","35","39","44"],"txt_attributes_5":["46","47","48"],"text_mrp_price":"500","text_discount":"50","text_net_price":"250","text_tax":"0","text_stock":"154","old_image":"","text_is_new":"1","text_popular_product":"1","text_is_feature_product":"1","text_meta_title":"","text_meta_description":"","text_meta_keyword":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `stock` (`product_id`, `onhand_quantity`, `created_by`, `created`) VALUES ('2', '154', '1', '2022-08-03 09:33:05');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 13:03:05 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-product #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-product #CurrentURLEnd
#Request : {"text_product_id":"","text_category_id":"1","text_subcategory_id":"17","text_brand_id":"1","text_product_name":"Product 2","text_product_code":"PROD234TTRED$","text_short_description":"fdsfsdfdsfsdfds","text_description":"<p>fdfdsfds<\/p>","text_vendor_id":"","txt_element_id":["1","2","3","4","5",""],"txt_attributes_1":["1","2","3"],"txt_attributes_2":["6","7","13"],"txt_attributes_3":["14","15"],"txt_attributes_4":["33","35","39","44"],"txt_attributes_5":["46","47","48"],"text_mrp_price":"500","text_discount":"50","text_net_price":"250","text_tax":"0","text_stock":"154","old_image":"","text_is_new":"1","text_popular_product":"1","text_is_feature_product":"1","text_meta_title":"","text_meta_description":"","text_meta_keyword":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `stock_details` (`stock_id`, `status`, `quantity`, `created`) VALUES (2, 1, '154', '2022-08-03 09:33:05');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 13:54:19 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-product #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-product #CurrentURLEnd
#Request : {"text_product_id":"","text_category_id":"1","text_subcategory_id":"17","text_brand_id":"2","text_product_name":"Product 3","text_product_code":"PRO123OUUER","text_short_description":"Pruu udso fsdklnfds","text_description":"<p>dfs fds fdgdf hd bfgbdfgrf<\/p>","text_vendor_id":"1","txt_element_id":["","2","3","4","5","6"],"txt_attributes_2":["6","7","8"],"txt_attributes_3":["30","31","32"],"txt_attributes_4":["43","44","45"],"txt_attributes_5":["49","51"],"txt_attributes_6":["54","55"],"text_mrp_price":"500","text_discount":"50","text_net_price":"250","text_tax":"0","text_stock":"784","old_image":"","text_is_new":"1","text_popular_product":"1","text_meta_title":"","text_meta_description":"","text_meta_keyword":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `stock` (`product_id`, `onhand_quantity`, `created_by`, `created`) VALUES ('3', '784', '1', '2022-08-03 10:24:19');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 13:54:19 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-product #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-product #CurrentURLEnd
#Request : {"text_product_id":"","text_category_id":"1","text_subcategory_id":"17","text_brand_id":"2","text_product_name":"Product 3","text_product_code":"PRO123OUUER","text_short_description":"Pruu udso fsdklnfds","text_description":"<p>dfs fds fdgdf hd bfgbdfgrf<\/p>","text_vendor_id":"1","txt_element_id":["","2","3","4","5","6"],"txt_attributes_2":["6","7","8"],"txt_attributes_3":["30","31","32"],"txt_attributes_4":["43","44","45"],"txt_attributes_5":["49","51"],"txt_attributes_6":["54","55"],"text_mrp_price":"500","text_discount":"50","text_net_price":"250","text_tax":"0","text_stock":"784","old_image":"","text_is_new":"1","text_popular_product":"1","text_meta_title":"","text_meta_description":"","text_meta_keyword":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `stock_details` (`stock_id`, `status`, `quantity`, `created`) VALUES (3, 1, '784', '2022-08-03 10:24:19');
#End*******************************************************************************************************

