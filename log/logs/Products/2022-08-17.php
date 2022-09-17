<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 18-08-2022 02:26:10 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-product/3 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-product #CurrentURLEnd
#Request : {"text_product_id":"3","text_category_id":"2","text_subcategory_id":"10","text_brand_id":"5","text_product_name":"NIRVANA DOUBLE COMFORTER - 2807197679146","text_product_code":"2807197671690","text_short_description":"eee","text_description":"<p>eee<\/p>","text_vendor_id":"2","txt_element_id":["9"],"txt_attributes_9":["73"],"txt_qty":"250","text_mrp_price":"200","text_discount":"5","text_net_price":"190","text_tax":"5","old_image":"1.jpeg","text_is_new":"1","text_meta_title":"Meta Title","text_meta_description":"Meta Description","text_meta_keyword":"Meta Keyword","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE product_details SET `product_name` = 'NIRVANA DOUBLE COMFORTER - 2807197679146', `product_code` = '2807197671690', `short_code` = 'nirvana-double-comforter-2807197679146', `short_description` = 'eee', `description` = '<p>eee</p>', `brand_id` = '5', `category_id` = '2', `child_category` = '10', `vendor_id` = '2', `mrp_price` = '200', `discount` = '5', `net_price` = '190', `tax` = '5', `qty` = '250', `gst_amt` = 9.5, `discount_amt` = '5'_amt, `meta_title` = 'Meta Title', `meta_keyword` = 'Meta Keyword', `meta_description` = 'Meta Description', `modified_by` = '1', `modified` = '2022-08-17 22:56:10', `is_active` = 1 WHERE 1=1  and product_id = '3';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 18-08-2022 02:26:10 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-product/3 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-product #CurrentURLEnd
#Request : {"text_product_id":"3","text_category_id":"2","text_subcategory_id":"10","text_brand_id":"5","text_product_name":"NIRVANA DOUBLE COMFORTER - 2807197679146","text_product_code":"2807197671690","text_short_description":"eee","text_description":"<p>eee<\/p>","text_vendor_id":"2","txt_element_id":["9"],"txt_attributes_9":["73"],"txt_qty":"250","text_mrp_price":"200","text_discount":"5","text_net_price":"190","text_tax":"5","old_image":"1.jpeg","text_is_new":"1","text_meta_title":"Meta Title","text_meta_description":"Meta Description","text_meta_keyword":"Meta Keyword","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE product_details SET `image` = '1.jpeg' WHERE 1=1  and product_id = '3';
#End*******************************************************************************************************

