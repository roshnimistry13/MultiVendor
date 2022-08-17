<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 13-08-2022 05:12:10 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-product/3 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-product #CurrentURLEnd
#Request : {"text_product_id":"3","text_category_id":"2","text_subcategory_id":"10","text_brand_id":"5","text_product_name":"NIRVANA DOUBLE COMFORTER - 2807197679146","text_product_code":"2807197671690","text_short_description":"eee","text_description":"<p>eee<\/p>","text_vendor_id":"2","txt_element_id":["9"],"txt_attributes_9":["73"],"txt_qty":"","text_mrp_price":"200","text_discount":"","text_net_price":"200","text_tax":"5","old_image":"1.jpeg","text_meta_title":"","text_meta_description":"","text_meta_keyword":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE product_details SET `product_name` = 'NIRVANA DOUBLE COMFORTER - 2807197679146', `product_code` = '2807197671690', `short_code` = 'nirvana-double-comforter-2807197679146', `short_description` = 'eee', `description` = '<p>eee</p>', `brand_id` = '5', `category_id` = '2', `child_category` = '10', `vendor_id` = '2', `mrp_price` = '200', `discount` = '', `net_price` = '200', `tax` = '5', `qty` = '', `meta_title` = '', `meta_keyword` = '', `meta_description` = '', `modified_by` = '1', `modified` = '2022-08-13 01:42:10', `is_active` = 1 WHERE 1=1  and product_id = '3';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 13-08-2022 05:12:10 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-product/3 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-product #CurrentURLEnd
#Request : {"text_product_id":"3","text_category_id":"2","text_subcategory_id":"10","text_brand_id":"5","text_product_name":"NIRVANA DOUBLE COMFORTER - 2807197679146","text_product_code":"2807197671690","text_short_description":"eee","text_description":"<p>eee<\/p>","text_vendor_id":"2","txt_element_id":["9"],"txt_attributes_9":["73"],"txt_qty":"","text_mrp_price":"200","text_discount":"","text_net_price":"200","text_tax":"5","old_image":"1.jpeg","text_meta_title":"","text_meta_description":"","text_meta_keyword":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE product_details SET `image` = '1.jpeg' WHERE 1=1  and product_id = '3';
#End*******************************************************************************************************

