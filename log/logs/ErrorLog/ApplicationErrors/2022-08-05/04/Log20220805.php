<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 05-08-2022 04:36:45 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-product/1 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-product #CurrentURLEnd
#Request : {"text_product_id":"1","text_category_id":"1","text_subcategory_id":"17","text_brand_id":"1","text_product_name":"Lorem Ipsum - 2807197673632","text_product_code":"2807197673632","text_short_description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. ","text_description":"<p><span style='color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare ipsum a erat tincidunt faucibus. Vivamus augue libero, accumsan quis varius id, efficitur et sapien. Maecenas vel nisi nunc.<\/span><\/p>","text_vendor_id":"1","txt_element_id":["","","","","",""],"txt_attributes_1":["1","2","3","4","5"],"txt_attributes_2":["6","7","8","9","10"],"txt_attributes_3":["14","17","29"],"txt_attributes_4":["33","34"],"txt_attributes_5":["46","48"],"text_mrp_price":"350","text_discount":"","text_net_price":"350","text_tax":"0","text_stock":"200","old_image":"pr-11.jpg|pr-12.jpg|pr-15.jpg|pr-16.jpg|pr-26.jpg|pr-28.jpg","text_meta_title":"Lorem ipsum dolor sit amet,","text_meta_description":"Lorem ipsum dolor sit amet,","text_meta_keyword":"Lorem ipsum dolor sit amet,","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#status: 
error;
#message: 
Update Failed: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'group_id' in 'field list';
#trace: 
SQLSTATE[42S22]: Column not found: 1054 Unknown column 'group_id' in 'field list';
#query: 
UPDATE product_details SET `product_name` = 'Lorem Ipsum - 2807197673632', `product_code` = '2807197673632', `short_code` = 'lorem-ipsum-2807197673632', `short_description` = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', `description` = '<p><span style='color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare ipsum a erat tincidunt faucibus. Vivamus augue libero, accumsan quis varius id, efficitur et sapien. Maecenas vel nisi nunc.</span></p>', `brand_id` = '1', `category_id` = '1', `group_id` = NULL, `group_unit_id` = NULL, `reach_in` = NULL, `mrp_price` = '350', `discount` = '', `net_price` = '350', `tax` = '0', `is_new` = 0, `is_best_seller` = 0, `meta_title` = 'Lorem ipsum dolor sit amet,', `meta_keyword` = 'Lorem ipsum dolor sit amet,', `meta_description` = 'Lorem ipsum dolor sit amet,', `modified_by` = '1', `modified` = '2022-08-05 01:06:45', `is_active` = 1 WHERE 1=1  and product_id = '1';
#End*******************************************************************************************************

