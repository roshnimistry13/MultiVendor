<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 03-08-2022 12:58:49 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-product #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-product #CurrentURLEnd
#Request : {"text_product_id":"","text_category_id":"1","text_subcategory_id":"18","text_brand_id":"2","text_product_name":"Test my products","text_product_code":"TEST123FF423","text_short_description":"TESS hfduifh fds huuujr kdfhf ljsdl jkljfd","text_description":"<p>TESS hfduifh fds huuujr kdfhf ljsdl jkljfd<\/p>","text_vendor_id":"1","txt_element_id":["1","","3","4","5",""],"txt_attributes_1":["1","2","3","4","5"],"txt_attributes_3":["14","15","16","19","20"],"txt_attributes_4":["33","34","38","39","40","43","44"],"txt_attributes_5":["46","47","48"],"text_mrp_price":"500","text_discount":"50","text_net_price":"250","text_tax":"5","text_stock":"145","old_image":"","text_is_new":"1","text_popular_product":"1","text_meta_title":"sdfdfdsfds","text_meta_description":"fdfdfds","text_meta_keyword":"fdsfdfdsfds"} #Requestend
#Operation : INSERT #Operationend
#status: 
error;
#message: 
Insert Failed: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'is_popular_product' in 'field list';
#trace: 
SQLSTATE[42S22]: Column not found: 1054 Unknown column 'is_popular_product' in 'field list';
#query: 
INSERT INTO product_details(`product_name`, `product_code`, `short_code`, `short_description`, `description`, `brand_id`, `category_id`, `mrp_price`, `discount`, `net_price`, `tax`, `is_new_product`, `is_popular_product`, `is_feature_product`, `meta_title`, `meta_description`, `meta_keyword`, `created_by`, `created`) VALUES('Test my products', 'TEST123FF423', 'test-my-products', 'TESS hfduifh fds huuujr kdfhf ljsdl jkljfd', '<p>TESS hfduifh fds huuujr kdfhf ljsdl jkljfd</p>', '2', '18', '500', '50', '250', '5', 1, 1, 0, 'sdfdfdsfds', 'fdfdfds', 'fdsfdfdsfds', '1', '2022-08-03 09:28:49');
#End*******************************************************************************************************

