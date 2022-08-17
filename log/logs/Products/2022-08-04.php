<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 04-08-2022 09:18:33 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-product #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-product #CurrentURLEnd
#Request : {"text_product_id":"","text_category_id":"1","text_subcategory_id":"17","text_brand_id":"1","text_product_name":"ttttttttttttt","text_product_code":"tttt","text_short_description":"ttttttttttttt","text_description":"<p>ttttttttttttttttttttttt<\/p>","text_vendor_id":"1","txt_element_id":["1","2","3","","5",""],"txt_attributes_1":["2","3"],"txt_attributes_2":["7"],"txt_attributes_3":["14","15"],"txt_attributes_5":["46","47"],"text_mrp_price":"500","text_discount":"50","text_net_price":"250","text_tax":"0","text_stock":"12","old_image":"","text_meta_title":"","text_meta_description":"","text_meta_keyword":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO product_details(`product_name`, `product_code`, `short_code`, `short_description`, `description`, `brand_id`, `category_id`, `vendor_id`, `mrp_price`, `discount`, `net_price`, `tax`, `is_new_product`, `is_popular_product`, `is_feature_product`, `meta_title`, `meta_description`, `meta_keyword`, `created_by`, `created`) VALUES('ttttttttttttt', 'tttt', 'ttttttttttttt', 'ttttttttttttt', '<p>ttttttttttttttttttttttt</p>', '1', '17', '1', '500', '50', '250', '0', 0, 0, 0, '', '', '', '1', '2022-08-04 05:48:33');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 04-08-2022 09:18:34 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-product #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-product #CurrentURLEnd
#Request : {"text_product_id":"","text_category_id":"1","text_subcategory_id":"17","text_brand_id":"1","text_product_name":"ttttttttttttt","text_product_code":"tttt","text_short_description":"ttttttttttttt","text_description":"<p>ttttttttttttttttttttttt<\/p>","text_vendor_id":"1","txt_element_id":["1","2","3","","5",""],"txt_attributes_1":["2","3"],"txt_attributes_2":["7"],"txt_attributes_3":["14","15"],"txt_attributes_5":["46","47"],"text_mrp_price":"500","text_discount":"50","text_net_price":"250","text_tax":"0","text_stock":"12","old_image":"","text_meta_title":"","text_meta_description":"","text_meta_keyword":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE product_details SET `image` = 'Mustard Oil 5 ltr 1.png' WHERE 1=1  and product_id = '4';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 04-08-2022 22:58:06 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-product #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-product #CurrentURLEnd
#Request : {"text_product_id":"","text_category_id":"1","text_subcategory_id":"17","text_brand_id":"1","text_product_name":"AMARA 210 TC - 2807197671010","text_product_code":"2807197671010","text_short_description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit.","text_description":"<p><span style='color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare ipsum a erat tincidunt faucibus. Vivamus augue libero, accumsan quis varius id, efficitur et sapien. Maecenas vel nisi nunc.<\/span> <\/p>","text_vendor_id":"1","txt_element_id":["1","2","3","4","5",""],"txt_attributes_1":["1","2","3"],"txt_attributes_2":["11","12","13"],"txt_attributes_3":["14","15","16","18"],"txt_attributes_4":["33","34","35"],"txt_attributes_5":["46"],"text_mrp_price":"450","text_discount":"","text_net_price":"450","text_tax":"0","text_stock":"100","old_image":"","text_is_new":"1","text_meta_title":"Lorem ipsum dolor sit amet","text_meta_description":"Lorem ipsum dolor sit amet","text_meta_keyword":"Lorem ipsum dolor sit amet"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO product_details(`product_name`, `product_code`, `short_code`, `short_description`, `description`, `brand_id`, `category_id`, `child_category`, `vendor_id`, `mrp_price`, `discount`, `net_price`, `tax`, `is_new_product`, `is_popular_product`, `is_feature_product`, `meta_title`, `meta_description`, `meta_keyword`, `created_by`, `created`) VALUES('AMARA 210 TC - 2807197671010', '2807197671010', 'amara-210-tc-2807197671010', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', '<p><span style='color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare ipsum a erat tincidunt faucibus. Vivamus augue libero, accumsan quis varius id, efficitur et sapien. Maecenas vel nisi nunc.</span> </p>', '1', '1', '17', '1', '450', '', '450', '0', 1, 0, 0, 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet', '1', '2022-08-04 19:28:06');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 04-08-2022 22:58:06 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-product #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-product #CurrentURLEnd
#Request : {"text_product_id":"","text_category_id":"1","text_subcategory_id":"17","text_brand_id":"1","text_product_name":"AMARA 210 TC - 2807197671010","text_product_code":"2807197671010","text_short_description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit.","text_description":"<p><span style='color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare ipsum a erat tincidunt faucibus. Vivamus augue libero, accumsan quis varius id, efficitur et sapien. Maecenas vel nisi nunc.<\/span> <\/p>","text_vendor_id":"1","txt_element_id":["1","2","3","4","5",""],"txt_attributes_1":["1","2","3"],"txt_attributes_2":["11","12","13"],"txt_attributes_3":["14","15","16","18"],"txt_attributes_4":["33","34","35"],"txt_attributes_5":["46"],"text_mrp_price":"450","text_discount":"","text_net_price":"450","text_tax":"0","text_stock":"100","old_image":"","text_is_new":"1","text_meta_title":"Lorem ipsum dolor sit amet","text_meta_description":"Lorem ipsum dolor sit amet","text_meta_keyword":"Lorem ipsum dolor sit amet"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE product_details SET `image` = 'color-white-cream.jpg|shop-banner.jpg|sidebar-product-02.jpg' WHERE 1=1  and product_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 04-08-2022 23:13:24 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-product #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-product #CurrentURLEnd
#Request : {"text_product_id":"","text_category_id":"1","text_subcategory_id":"17","text_brand_id":"1","text_product_name":"Lorem Ipsum - 2807197673632","text_product_code":"2807197673632","text_short_description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. ","text_description":"<p><span style='color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare ipsum a erat tincidunt faucibus. Vivamus augue libero, accumsan quis varius id, efficitur et sapien. Maecenas vel nisi nunc.<\/span> <\/p>","text_vendor_id":"1","txt_element_id":["1","2","3","4","5",""],"txt_attributes_1":["1","2","3"],"txt_attributes_2":["6","7","8"],"txt_attributes_3":["14","29"],"txt_attributes_4":["33"],"txt_attributes_5":["46"],"text_mrp_price":"350","text_discount":"","text_net_price":"350","text_tax":"0","text_stock":"200","old_image":"","text_is_new":"1","text_meta_title":"Lorem ipsum dolor sit amet,","text_meta_description":"Lorem ipsum dolor sit amet,","text_meta_keyword":"Lorem ipsum dolor sit amet,"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO product_details(`product_name`, `product_code`, `short_code`, `short_description`, `description`, `brand_id`, `category_id`, `child_category`, `vendor_id`, `mrp_price`, `discount`, `net_price`, `tax`, `is_new_product`, `is_popular_product`, `is_feature_product`, `meta_title`, `meta_description`, `meta_keyword`, `created_by`, `created`) VALUES('Lorem Ipsum - 2807197673632', '2807197673632', 'lorem-ipsum-2807197673632', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. ', '<p><span style='color: rgb(0, 0, 0); font-family: "Open Sans", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare ipsum a erat tincidunt faucibus. Vivamus augue libero, accumsan quis varius id, efficitur et sapien. Maecenas vel nisi nunc.</span> </p>', '1', '1', '17', '1', '350', '', '350', '0', 1, 0, 0, 'Lorem ipsum dolor sit amet,', 'Lorem ipsum dolor sit amet,', 'Lorem ipsum dolor sit amet,', '1', '2022-08-04 19:43:24');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 04-08-2022 23:13:24 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-product #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-product #CurrentURLEnd
#Request : {"text_product_id":"","text_category_id":"1","text_subcategory_id":"17","text_brand_id":"1","text_product_name":"Lorem Ipsum - 2807197673632","text_product_code":"2807197673632","text_short_description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. ","text_description":"<p><span style='color: rgb(0, 0, 0); font-family: \"Open Sans\", Arial, sans-serif; font-size: 14px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: justify; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;'>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ornare ipsum a erat tincidunt faucibus. Vivamus augue libero, accumsan quis varius id, efficitur et sapien. Maecenas vel nisi nunc.<\/span> <\/p>","text_vendor_id":"1","txt_element_id":["1","2","3","4","5",""],"txt_attributes_1":["1","2","3"],"txt_attributes_2":["6","7","8"],"txt_attributes_3":["14","29"],"txt_attributes_4":["33"],"txt_attributes_5":["46"],"text_mrp_price":"350","text_discount":"","text_net_price":"350","text_tax":"0","text_stock":"200","old_image":"","text_is_new":"1","text_meta_title":"Lorem ipsum dolor sit amet,","text_meta_description":"Lorem ipsum dolor sit amet,","text_meta_keyword":"Lorem ipsum dolor sit amet,"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE product_details SET `image` = 'pr-11.jpg|pr-12.jpg|pr-15.jpg|pr-16.jpg|pr-26.jpg|pr-28.jpg' WHERE 1=1  and product_id = '1';
#End*******************************************************************************************************

