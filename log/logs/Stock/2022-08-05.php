<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 05-08-2022 23:18:33 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-product #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-product #CurrentURLEnd
#Request : {"text_product_id":"","text_category_id":"24","text_subcategory_id":"","text_brand_id":"1","text_product_name":"PLUMERIA CURTAINS - 2807197674691","text_product_code":"2807197673632","text_short_description":"Lorem ipsum dolor sit amet","text_description":"<p><span style='color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>Lorem ipsum dolor sit amet<\/span> <\/p>","text_vendor_id":"1","txt_element_id":["1","2","3","4","5","6","7","8","9"],"txt_attributes_1":["4"],"txt_attributes_2":["9"],"txt_attributes_3":["17"],"txt_attributes_4":["33"],"txt_attributes_5":["46"],"txt_attributes_6":["53"],"txt_attributes_7":["61"],"txt_attributes_8":["62"],"text_mrp_price":"350","text_discount":"10","text_net_price":"315","text_tax":"0","text_stock":"","old_image":"","text_is_new":"1","text_meta_title":"","text_meta_description":"","text_meta_keyword":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `stock` (`product_id`, `onhand_quantity`, `created_by`, `created`) VALUES ('2', 0, '1', '2022-08-05 19:48:33');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 05-08-2022 23:18:33 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-product #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-product #CurrentURLEnd
#Request : {"text_product_id":"","text_category_id":"24","text_subcategory_id":"","text_brand_id":"1","text_product_name":"PLUMERIA CURTAINS - 2807197674691","text_product_code":"2807197673632","text_short_description":"Lorem ipsum dolor sit amet","text_description":"<p><span style='color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>Lorem ipsum dolor sit amet<\/span> <\/p>","text_vendor_id":"1","txt_element_id":["1","2","3","4","5","6","7","8","9"],"txt_attributes_1":["4"],"txt_attributes_2":["9"],"txt_attributes_3":["17"],"txt_attributes_4":["33"],"txt_attributes_5":["46"],"txt_attributes_6":["53"],"txt_attributes_7":["61"],"txt_attributes_8":["62"],"text_mrp_price":"350","text_discount":"10","text_net_price":"315","text_tax":"0","text_stock":"","old_image":"","text_is_new":"1","text_meta_title":"","text_meta_description":"","text_meta_keyword":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `stock_details` (`stock_id`, `status`, `quantity`, `created`) VALUES (2, 1, 0, '2022-08-05 19:48:33');
#End*******************************************************************************************************

