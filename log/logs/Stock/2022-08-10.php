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
INSERT INTO `stock` (`product_id`, `onhand_quantity`, `created_by`, `created`) VALUES ('3', '100', '1', '2022-08-10 00:00:28');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 10-08-2022 03:30:28 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-product #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-product #CurrentURLEnd
#Request : {"text_product_id":"","text_category_id":"2","text_subcategory_id":"10","text_brand_id":"5","text_product_name":"NIRVANA DOUBLE COMFORTER - 2807197679146","text_product_code":"2807197671690","text_short_description":"eee","text_description":"<p>eee<\/p>","text_vendor_id":"1","txt_element_id":["9"],"txt_attributes_9":["73"],"txt_qty":"2","text_mrp_price":"200","text_discount":"","text_net_price":"200","text_tax":"0","text_stock":"100","old_image":"","text_is_new":"1","text_meta_title":"","text_meta_description":"","text_meta_keyword":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `stock_details` (`stock_id`, `status`, `quantity`, `created`) VALUES (3, 1, '100', '2022-08-10 00:00:28');
#End*******************************************************************************************************

