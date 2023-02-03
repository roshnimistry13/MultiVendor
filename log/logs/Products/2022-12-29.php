<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 29-12-2022 01:59:17 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/EthnicWear/add-product #ReferrerEnd
#Current URL: http://localhost/EthnicWear/submit-product #CurrentURLEnd
#Request : {"text_product_id":"","text_category_id":"2","text_subcategory_id":"24","text_brand_id":"77","text_product_name":"Women Magenta & Golden Ethnic Motifs Printed Pure Cotton Kurta","text_product_code":"Kurta","text_vendor_id":"1","text_short_description":"Women Magenta & Golden Ethnic Motifs Printed Pure Cotton Kurta","text_description":"<p>Colour: magenta and golden Ethnic motifs printed Round neck Three-quarter,regular sleeves Straight shape with regular style Calf length with straight hem Machine weave regular cotton<\/p><h6>Size &amp; Fit<\/h6><p>The model (height 5&#39;8) is wearing a size S<\/p><h6>Material &amp; Care<\/h6><p>Pure Cotton<\/p><p>Hand wash<\/p>","txt_element_id":["1","2","6"],"txt_attributes_1":["2"],"txt_attributes_2":["85"],"txt_attributes_6":[""],"txt_qty":"","text_unit_price":"500","text_tax":"12","text_mrp_price":"560","text_discount":"","text_net_price":"560","text_stock":"10","old_image":"","old_cover_image":"","text_meta_title":"","text_meta_description":"","text_meta_keyword":"","txt_warranty_title":"","text_warranty_description":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO product_details(`product_name`, `product_code`, `short_code`, `short_description`, `description`, `brand_id`, `category_id`, `child_category`, `vendor_id`, `unit_price`, `mrp_price`, `discount`, `net_price`, `tax`, `qty`, `gst_amt`, `discount_amt`, `cover_img`, `stock`, `is_new_product`, `is_popular_product`, `is_feature_product`, `meta_title`, `meta_description`, `meta_keyword`, `created_by`, `created`, `warranty_title`, `warranty_detail`) VALUES('Women Magenta & Golden Ethnic Motifs Printed Pure Cotton Kurta', 'Kurta', 'women-magenta-golden-ethnic-motifs-printed-pure-cotton-kurta-m-blush-red-vnky8c75', 'Women Magenta & Golden Ethnic Motifs Printed Pure Cotton Kurta', '<p>Colour: magenta and golden Ethnic motifs printed Round neck Three-quarter,regular sleeves Straight shape with regular style Calf length with straight hem Machine weave regular cotton</p><h6>Size &amp; Fit</h6><p>The model (height 5&#39;8) is wearing a size S</p><h6>Material &amp; Care</h6><p>Pure Cotton</p><p>Hand wash</p>', '77', '2', '24', '1', '500', 560, '', 560, '12', '', 60, ''_amt, 'cover_image.webp', '10', 0, 0, 0, '', '', '', '1', '2022-12-29 01:59:17', '', '');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 29-12-2022 01:59:17 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/EthnicWear/add-product #ReferrerEnd
#Current URL: http://localhost/EthnicWear/submit-product #CurrentURLEnd
#Request : {"text_product_id":"","text_category_id":"2","text_subcategory_id":"24","text_brand_id":"77","text_product_name":"Women Magenta & Golden Ethnic Motifs Printed Pure Cotton Kurta","text_product_code":"Kurta","text_vendor_id":"1","text_short_description":"Women Magenta & Golden Ethnic Motifs Printed Pure Cotton Kurta","text_description":"<p>Colour: magenta and golden Ethnic motifs printed Round neck Three-quarter,regular sleeves Straight shape with regular style Calf length with straight hem Machine weave regular cotton<\/p><h6>Size &amp; Fit<\/h6><p>The model (height 5&#39;8) is wearing a size S<\/p><h6>Material &amp; Care<\/h6><p>Pure Cotton<\/p><p>Hand wash<\/p>","txt_element_id":["1","2","6"],"txt_attributes_1":["2"],"txt_attributes_2":["85"],"txt_attributes_6":[""],"txt_qty":"","text_unit_price":"500","text_tax":"12","text_mrp_price":"560","text_discount":"","text_net_price":"560","text_stock":"10","old_image":"","old_cover_image":"","text_meta_title":"","text_meta_description":"","text_meta_keyword":"","txt_warranty_title":"","text_warranty_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE product_details SET `image` = '1.webp|2.webp|3.webp|4.webp' WHERE 1=1  and product_id = '139';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 29-12-2022 01:59:17 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/EthnicWear/add-product #ReferrerEnd
#Current URL: http://localhost/EthnicWear/submit-product #CurrentURLEnd
#Request : {"text_product_id":"","text_category_id":"2","text_subcategory_id":"24","text_brand_id":"77","text_product_name":"Women Magenta & Golden Ethnic Motifs Printed Pure Cotton Kurta","text_product_code":"Kurta","text_vendor_id":"1","text_short_description":"Women Magenta & Golden Ethnic Motifs Printed Pure Cotton Kurta","text_description":"<p>Colour: magenta and golden Ethnic motifs printed Round neck Three-quarter,regular sleeves Straight shape with regular style Calf length with straight hem Machine weave regular cotton<\/p><h6>Size &amp; Fit<\/h6><p>The model (height 5&#39;8) is wearing a size S<\/p><h6>Material &amp; Care<\/h6><p>Pure Cotton<\/p><p>Hand wash<\/p>","txt_element_id":["1","2","6"],"txt_attributes_1":["2"],"txt_attributes_2":["85"],"txt_attributes_6":[""],"txt_qty":"","text_unit_price":"500","text_tax":"12","text_mrp_price":"560","text_discount":"","text_net_price":"560","text_stock":"10","old_image":"","old_cover_image":"","text_meta_title":"","text_meta_description":"","text_meta_keyword":"","txt_warranty_title":"","text_warranty_description":""} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE product_details SET `short_code` = 'women-magenta-golden-ethnic-motifs-printed-pure-cotton-kurta-m-blush-red-vnky8c75-139' WHERE 1=1  and product_id = '139';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 29-12-2022 02:01:35 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/EthnicWear/edit-product/139 #ReferrerEnd
#Current URL: http://localhost/EthnicWear/submit-product #CurrentURLEnd
#Request : {"text_product_id":"139","text_category_id":"2","text_subcategory_id":"24","text_brand_id":"76","text_product_name":"Women Magenta & Golden Ethnic Motifs Printed Pure Cotton Kurta","text_product_code":"Kurta","text_vendor_id":"1","text_short_description":"Women Magenta & Golden Ethnic Motifs Printed Pure Cotton Kurta","text_description":"<p>Colour: magenta and golden Ethnic motifs printed Round neck Three-quarter,regular sleeves Straight shape with regular style Calf length with straight hem Machine weave regular cotton<\/p><h6>Size &amp; Fit<\/h6><p>The model (height 5'8) is wearing a size S<\/p><h6>Material &amp; Care<\/h6><p>Pure Cotton<\/p><p>Hand wash<\/p>","txt_element_id":["1","2","6"],"txt_attributes_1":["2"],"txt_attributes_2":["85"],"txt_attributes_6":[""],"txt_qty":"","text_unit_price":"500","text_tax":"12","text_mrp_price":"560","text_discount":"","text_net_price":"560","text_stock":"10","old_image":"1.webp|2.webp|3.webp|4.webp","old_cover_image":"cover_image.webp","text_meta_title":"","text_meta_description":"","text_meta_keyword":"","txt_warranty_title":"","text_warranty_description":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE product_details SET `product_name` = 'Women Magenta & Golden Ethnic Motifs Printed Pure Cotton Kurta', `product_code` = 'Kurta', `short_code` = 'women-magenta-golden-ethnic-motifs-printed-pure-cotton-kurta-m-blush-red-vnky8c75-139', `short_description` = 'Women Magenta & Golden Ethnic Motifs Printed Pure Cotton Kurta', `description` = '<p>Colour: magenta and golden Ethnic motifs printed Round neck Three-quarter,regular sleeves Straight shape with regular style Calf length with straight hem Machine weave regular cotton</p><h6>Size &amp; Fit</h6><p>The model (height 5'8) is wearing a size S</p><h6>Material &amp; Care</h6><p>Pure Cotton</p><p>Hand wash</p>', `brand_id` = '76', `category_id` = '2', `child_category` = '24', `vendor_id` = '1', `unit_price` = '500', `mrp_price` = 560, `discount` = '', `net_price` = 560, `tax` = '12', `qty` = '', `gst_amt` = 60, `discount_amt` = ''_amt, `cover_img` = 'cover_image.webp', `is_new_product` = 0, `is_popular_product` = 0, `is_feature_product` = 0, `meta_title` = '', `meta_keyword` = '', `meta_description` = '', `modified_by` = '1', `modified` = '2022-12-29 02:01:35', `warranty_title` = '', `warranty_detail` = '', `is_active` = 1 WHERE 1=1  and product_id = '139';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 29-12-2022 02:01:35 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/EthnicWear/edit-product/139 #ReferrerEnd
#Current URL: http://localhost/EthnicWear/submit-product #CurrentURLEnd
#Request : {"text_product_id":"139","text_category_id":"2","text_subcategory_id":"24","text_brand_id":"76","text_product_name":"Women Magenta & Golden Ethnic Motifs Printed Pure Cotton Kurta","text_product_code":"Kurta","text_vendor_id":"1","text_short_description":"Women Magenta & Golden Ethnic Motifs Printed Pure Cotton Kurta","text_description":"<p>Colour: magenta and golden Ethnic motifs printed Round neck Three-quarter,regular sleeves Straight shape with regular style Calf length with straight hem Machine weave regular cotton<\/p><h6>Size &amp; Fit<\/h6><p>The model (height 5'8) is wearing a size S<\/p><h6>Material &amp; Care<\/h6><p>Pure Cotton<\/p><p>Hand wash<\/p>","txt_element_id":["1","2","6"],"txt_attributes_1":["2"],"txt_attributes_2":["85"],"txt_attributes_6":[""],"txt_qty":"","text_unit_price":"500","text_tax":"12","text_mrp_price":"560","text_discount":"","text_net_price":"560","text_stock":"10","old_image":"1.webp|2.webp|3.webp|4.webp","old_cover_image":"cover_image.webp","text_meta_title":"","text_meta_description":"","text_meta_keyword":"","txt_warranty_title":"","text_warranty_description":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE product_details SET `image` = '1.webp|2.webp|3.webp|4.webp' WHERE 1=1  and product_id = '139';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 29-12-2022 02:01:41 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/EthnicWear/all-product #ReferrerEnd
#Current URL: http://localhost/EthnicWear/Admin/Product/duplicateRecords #CurrentURLEnd
#Request : {"id":"139"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO product_details(`product_name`, `product_code`, `short_code`, `short_description`, `description`, `vendor_id`, `brand_id`, `category_id`, `child_category`, `qty`, `element_id`, `attributes_id`, `unit_price`, `mrp_price`, `discount`, `discount_amt`, `net_price`, `tax`, `tag`, `gst_amt`, `image`, `cover_img`, `is_new_product`, `is_popular_product`, `is_feature_product`, `meta_title`, `meta_description`, `meta_keyword`, `warranty_title`, `warranty_detail`, `created_by`, `created`, `is_active`, `stock`) VALUES('Women Magenta & Golden Ethnic Motifs Printed Pure Cotton Kurta - (Duplicate)', 'Kurta', 'women-magenta-golden-ethnic-motifs-printed-pure-cotton-kurta-m-blush-red-vnky8c75-139', 'Women Magenta & Golden Ethnic Motifs Printed Pure Cotton Kurta', '<p>Colour: magenta and golden Ethnic motifs printed Round neck Three-quarter,regular sleeves Straight shape with regular style Calf length with straight hem Machine weave regular cotton</p><h6>Size &amp; Fit</h6><p>The model (height 5'8) is wearing a size S</p><h6>Material &amp; Care</h6><p>Pure Cotton</p><p>Hand wash</p>', '1', '76', '2', '24', '', NULL, NULL, '500', '560', '', ''_amt, '560', '12', NULL, '60', '1.webp|2.webp|3.webp|4.webp', 'cover_image.webp', '0', '0', '0', '', '', '', '', '', '1', '2022-12-29', 0, '10');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 29-12-2022 02:01:59 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/EthnicWear/edit-product/140 #ReferrerEnd
#Current URL: http://localhost/EthnicWear/submit-product #CurrentURLEnd
#Request : {"text_product_id":"140","text_category_id":"2","text_subcategory_id":"24","text_brand_id":"76","text_product_name":"Women Magenta & Golden Ethnic Motifs Printed Pure Cotton Kurta","text_product_code":"Kurta","text_vendor_id":"1","text_short_description":"Women Magenta & Golden Ethnic Motifs Printed Pure Cotton Kurta","text_description":"<p>Colour: magenta and golden Ethnic motifs printed Round neck Three-quarter,regular sleeves Straight shape with regular style Calf length with straight hem Machine weave regular cotton<\/p><h6>Size &amp; Fit<\/h6><p>The model (height 5'8) is wearing a size S<\/p><h6>Material &amp; Care<\/h6><p>Pure Cotton<\/p><p>Hand wash<\/p>","txt_element_id":["1","2","6"],"txt_attributes_1":["3"],"txt_attributes_2":["85"],"txt_attributes_6":[""],"txt_qty":"","text_unit_price":"500","text_tax":"12","text_mrp_price":"560","text_discount":"","text_net_price":"560","text_stock":"10","old_image":"1.webp|2.webp|3.webp|4.webp","old_cover_image":"cover_image.webp","text_meta_title":"","text_meta_description":"","text_meta_keyword":"","txt_warranty_title":"","text_warranty_description":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE product_details SET `product_name` = 'Women Magenta & Golden Ethnic Motifs Printed Pure Cotton Kurta', `product_code` = 'Kurta', `short_code` = 'women-magenta-golden-ethnic-motifs-printed-pure-cotton-kurta-l-blush-red-vnky8c75-140', `short_description` = 'Women Magenta & Golden Ethnic Motifs Printed Pure Cotton Kurta', `description` = '<p>Colour: magenta and golden Ethnic motifs printed Round neck Three-quarter,regular sleeves Straight shape with regular style Calf length with straight hem Machine weave regular cotton</p><h6>Size &amp; Fit</h6><p>The model (height 5'8) is wearing a size S</p><h6>Material &amp; Care</h6><p>Pure Cotton</p><p>Hand wash</p>', `brand_id` = '76', `category_id` = '2', `child_category` = '24', `vendor_id` = '1', `unit_price` = '500', `mrp_price` = 560, `discount` = '', `net_price` = 560, `tax` = '12', `qty` = '', `gst_amt` = 60, `discount_amt` = ''_amt, `cover_img` = 'cover_image.webp', `is_new_product` = 0, `is_popular_product` = 0, `is_feature_product` = 0, `meta_title` = '', `meta_keyword` = '', `meta_description` = '', `modified_by` = '1', `modified` = '2022-12-29 02:01:59', `warranty_title` = '', `warranty_detail` = '', `is_active` = 1 WHERE 1=1  and product_id = '140';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 29-12-2022 02:01:59 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/EthnicWear/edit-product/140 #ReferrerEnd
#Current URL: http://localhost/EthnicWear/submit-product #CurrentURLEnd
#Request : {"text_product_id":"140","text_category_id":"2","text_subcategory_id":"24","text_brand_id":"76","text_product_name":"Women Magenta & Golden Ethnic Motifs Printed Pure Cotton Kurta","text_product_code":"Kurta","text_vendor_id":"1","text_short_description":"Women Magenta & Golden Ethnic Motifs Printed Pure Cotton Kurta","text_description":"<p>Colour: magenta and golden Ethnic motifs printed Round neck Three-quarter,regular sleeves Straight shape with regular style Calf length with straight hem Machine weave regular cotton<\/p><h6>Size &amp; Fit<\/h6><p>The model (height 5'8) is wearing a size S<\/p><h6>Material &amp; Care<\/h6><p>Pure Cotton<\/p><p>Hand wash<\/p>","txt_element_id":["1","2","6"],"txt_attributes_1":["3"],"txt_attributes_2":["85"],"txt_attributes_6":[""],"txt_qty":"","text_unit_price":"500","text_tax":"12","text_mrp_price":"560","text_discount":"","text_net_price":"560","text_stock":"10","old_image":"1.webp|2.webp|3.webp|4.webp","old_cover_image":"cover_image.webp","text_meta_title":"","text_meta_description":"","text_meta_keyword":"","txt_warranty_title":"","text_warranty_description":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE product_details SET `image` = '1.webp|2.webp|3.webp|4.webp' WHERE 1=1  and product_id = '140';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 29-12-2022 02:02:20 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/EthnicWear/all-product #ReferrerEnd
#Current URL: http://localhost/EthnicWear/Admin/Product/duplicateRecords #CurrentURLEnd
#Request : {"id":"140"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO product_details(`product_name`, `product_code`, `short_code`, `short_description`, `description`, `vendor_id`, `brand_id`, `category_id`, `child_category`, `qty`, `element_id`, `attributes_id`, `unit_price`, `mrp_price`, `discount`, `discount_amt`, `net_price`, `tax`, `tag`, `gst_amt`, `image`, `cover_img`, `is_new_product`, `is_popular_product`, `is_feature_product`, `meta_title`, `meta_description`, `meta_keyword`, `warranty_title`, `warranty_detail`, `created_by`, `created`, `is_active`, `stock`) VALUES('Women Magenta & Golden Ethnic Motifs Printed Pure Cotton Kurta - (Duplicate)', 'Kurta', 'women-magenta-golden-ethnic-motifs-printed-pure-cotton-kurta-l-blush-red-vnky8c75-140', 'Women Magenta & Golden Ethnic Motifs Printed Pure Cotton Kurta', '<p>Colour: magenta and golden Ethnic motifs printed Round neck Three-quarter,regular sleeves Straight shape with regular style Calf length with straight hem Machine weave regular cotton</p><h6>Size &amp; Fit</h6><p>The model (height 5'8) is wearing a size S</p><h6>Material &amp; Care</h6><p>Pure Cotton</p><p>Hand wash</p>', '1', '76', '2', '24', '', NULL, NULL, '500', '560', '', ''_amt, '560', '12', NULL, '60', '1.webp|2.webp|3.webp|4.webp', 'cover_image.webp', '0', '0', '0', '', '', '', '', '', '1', '2022-12-29', 0, '10');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 29-12-2022 02:02:36 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/EthnicWear/edit-product/141 #ReferrerEnd
#Current URL: http://localhost/EthnicWear/submit-product #CurrentURLEnd
#Request : {"text_product_id":"141","text_category_id":"2","text_subcategory_id":"24","text_brand_id":"76","text_product_name":"Women Magenta & Golden Ethnic Motifs Printed Pure Cotton Kurta","text_product_code":"Kurta","text_vendor_id":"1","text_short_description":"Women Magenta & Golden Ethnic Motifs Printed Pure Cotton Kurta","text_description":"<p>Colour: magenta and golden Ethnic motifs printed Round neck Three-quarter,regular sleeves Straight shape with regular style Calf length with straight hem Machine weave regular cotton<\/p><h6>Size &amp; Fit<\/h6><p>The model (height 5'8) is wearing a size S<\/p><h6>Material &amp; Care<\/h6><p>Pure Cotton<\/p><p>Hand wash<\/p>","txt_element_id":["1","2","6"],"txt_attributes_1":["4"],"txt_attributes_2":["85"],"txt_attributes_6":[""],"txt_qty":"","text_unit_price":"500","text_tax":"12","text_mrp_price":"560","text_discount":"","text_net_price":"560","text_stock":"10","old_image":"1.webp|2.webp|3.webp|4.webp","old_cover_image":"cover_image.webp","text_meta_title":"","text_meta_description":"","text_meta_keyword":"","txt_warranty_title":"","text_warranty_description":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE product_details SET `product_name` = 'Women Magenta & Golden Ethnic Motifs Printed Pure Cotton Kurta', `product_code` = 'Kurta', `short_code` = 'women-magenta-golden-ethnic-motifs-printed-pure-cotton-kurta-xl-blush-red-vnky8c75-141', `short_description` = 'Women Magenta & Golden Ethnic Motifs Printed Pure Cotton Kurta', `description` = '<p>Colour: magenta and golden Ethnic motifs printed Round neck Three-quarter,regular sleeves Straight shape with regular style Calf length with straight hem Machine weave regular cotton</p><h6>Size &amp; Fit</h6><p>The model (height 5'8) is wearing a size S</p><h6>Material &amp; Care</h6><p>Pure Cotton</p><p>Hand wash</p>', `brand_id` = '76', `category_id` = '2', `child_category` = '24', `vendor_id` = '1', `unit_price` = '500', `mrp_price` = 560, `discount` = '', `net_price` = 560, `tax` = '12', `qty` = '', `gst_amt` = 60, `discount_amt` = ''_amt, `cover_img` = 'cover_image.webp', `is_new_product` = 0, `is_popular_product` = 0, `is_feature_product` = 0, `meta_title` = '', `meta_keyword` = '', `meta_description` = '', `modified_by` = '1', `modified` = '2022-12-29 02:02:36', `warranty_title` = '', `warranty_detail` = '', `is_active` = 1 WHERE 1=1  and product_id = '141';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 29-12-2022 02:02:36 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/EthnicWear/edit-product/141 #ReferrerEnd
#Current URL: http://localhost/EthnicWear/submit-product #CurrentURLEnd
#Request : {"text_product_id":"141","text_category_id":"2","text_subcategory_id":"24","text_brand_id":"76","text_product_name":"Women Magenta & Golden Ethnic Motifs Printed Pure Cotton Kurta","text_product_code":"Kurta","text_vendor_id":"1","text_short_description":"Women Magenta & Golden Ethnic Motifs Printed Pure Cotton Kurta","text_description":"<p>Colour: magenta and golden Ethnic motifs printed Round neck Three-quarter,regular sleeves Straight shape with regular style Calf length with straight hem Machine weave regular cotton<\/p><h6>Size &amp; Fit<\/h6><p>The model (height 5'8) is wearing a size S<\/p><h6>Material &amp; Care<\/h6><p>Pure Cotton<\/p><p>Hand wash<\/p>","txt_element_id":["1","2","6"],"txt_attributes_1":["4"],"txt_attributes_2":["85"],"txt_attributes_6":[""],"txt_qty":"","text_unit_price":"500","text_tax":"12","text_mrp_price":"560","text_discount":"","text_net_price":"560","text_stock":"10","old_image":"1.webp|2.webp|3.webp|4.webp","old_cover_image":"cover_image.webp","text_meta_title":"","text_meta_description":"","text_meta_keyword":"","txt_warranty_title":"","text_warranty_description":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE product_details SET `image` = '1.webp|2.webp|3.webp|4.webp' WHERE 1=1  and product_id = '141';
#End*******************************************************************************************************

