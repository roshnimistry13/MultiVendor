<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 10-08-2022 03:30:28 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-product #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-product #CurrentURLEnd
#Request : {"text_product_id":"","text_category_id":"2","text_subcategory_id":"10","text_brand_id":"5","text_product_name":"NIRVANA DOUBLE COMFORTER - 2807197679146","text_product_code":"2807197671690","text_short_description":"eee","text_description":"<p>eee<\/p>","text_vendor_id":"1","txt_element_id":["9"],"txt_attributes_9":["73"],"txt_qty":"2","text_mrp_price":"200","text_discount":"","text_net_price":"200","text_tax":"0","text_stock":"100","old_image":"","text_is_new":"1","text_meta_title":"","text_meta_description":"","text_meta_keyword":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO product_details(`product_name`, `product_code`, `short_code`, `short_description`, `description`, `brand_id`, `category_id`, `child_category`, `vendor_id`, `mrp_price`, `discount`, `net_price`, `tax`, `qty`, `is_new_product`, `is_popular_product`, `is_feature_product`, `meta_title`, `meta_description`, `meta_keyword`, `created_by`, `created`) VALUES('NIRVANA DOUBLE COMFORTER - 2807197679146', '2807197671690', 'nirvana-double-comforter-2807197679146', 'eee', '<p>eee</p>', '5', '2', '10', '1', '200', '', '200', '0', '2', 1, 0, 0, '', '', '', '1', '2022-08-10 00:00:28');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 10-08-2022 03:30:28 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-product #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-product #CurrentURLEnd
#Request : {"text_product_id":"","text_category_id":"2","text_subcategory_id":"10","text_brand_id":"5","text_product_name":"NIRVANA DOUBLE COMFORTER - 2807197679146","text_product_code":"2807197671690","text_short_description":"eee","text_description":"<p>eee<\/p>","text_vendor_id":"1","txt_element_id":["9"],"txt_attributes_9":["73"],"txt_qty":"2","text_mrp_price":"200","text_discount":"","text_net_price":"200","text_tax":"0","text_stock":"100","old_image":"","text_is_new":"1","text_meta_title":"","text_meta_description":"","text_meta_keyword":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE product_details SET `image` = '1.jpeg' WHERE 1=1  and product_id = '3';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 10-08-2022 03:45:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-product/3 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-product #CurrentURLEnd
#Request : {"text_product_id":"3","text_category_id":"2","text_subcategory_id":"10","text_brand_id":"5","text_product_name":"NIRVANA DOUBLE COMFORTER - 2807197679146","text_product_code":"2807197671690","text_short_description":"eee","text_description":"<p>eee<\/p>","text_vendor_id":"2","txt_element_id":["9"],"txt_attributes_9":["73"],"txt_qty":"","text_mrp_price":"200","text_discount":"","text_net_price":"200","text_tax":"0","old_image":"1.jpeg","text_meta_title":"","text_meta_description":"","text_meta_keyword":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE product_details SET `product_name` = 'NIRVANA DOUBLE COMFORTER - 2807197679146', `product_code` = '2807197671690', `short_code` = 'nirvana-double-comforter-2807197679146', `short_description` = 'eee', `description` = '<p>eee</p>', `brand_id` = '5', `category_id` = '2', `mrp_price` = '200', `discount` = '', `net_price` = '200', `tax` = '0', `qty` = '', `meta_title` = '', `meta_keyword` = '', `meta_description` = '', `modified_by` = '1', `modified` = '2022-08-10 00:15:15', `is_active` = 1 WHERE 1=1  and product_id = '3';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 10-08-2022 03:45:15 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-product/3 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-product #CurrentURLEnd
#Request : {"text_product_id":"3","text_category_id":"2","text_subcategory_id":"10","text_brand_id":"5","text_product_name":"NIRVANA DOUBLE COMFORTER - 2807197679146","text_product_code":"2807197671690","text_short_description":"eee","text_description":"<p>eee<\/p>","text_vendor_id":"2","txt_element_id":["9"],"txt_attributes_9":["73"],"txt_qty":"","text_mrp_price":"200","text_discount":"","text_net_price":"200","text_tax":"0","old_image":"1.jpeg","text_meta_title":"","text_meta_description":"","text_meta_keyword":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE product_details SET `image` = '1.jpeg' WHERE 1=1  and product_id = '3';
#End*******************************************************************************************************

