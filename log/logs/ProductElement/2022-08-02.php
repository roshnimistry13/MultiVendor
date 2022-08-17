<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 03-08-2022 01:18:06 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-elements #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-elements #CurrentURLEnd
#Request : {"text_element_id":"","text_element":"Size","text_display_name":"Size","txt_attributes":["1","2","3","4","5"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO product_elements(`element_name`, `display_name`, `attributes`, `created_by`, `created`) VALUES('', '', '1,2,3,4,5', '1', '2022-08-02 21:48:06');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 01:20:20 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-elements #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-elements #CurrentURLEnd
#Request : {"text_element_id":"","text_element":"Size","text_display_name":"Size","txt_attributes":["1","2","3","4","5"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO product_elements(`element_name`, `display_name`, `attributes`, `created_by`, `created`) VALUES('Size', 'Size', '1,2,3,4,5', '1', '2022-08-02 21:50:20');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 01:28:33 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/elements #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Admin/Element/updateStatus #CurrentURLEnd
#Request : {"id":"1","status":"0"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE product_elements SET `modified_by` = '1', `modified` = '2022-08-02 21:58:33', `is_active` = '0' WHERE 1=1  and element_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 01:28:36 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/elements #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Admin/Element/updateStatus #CurrentURLEnd
#Request : {"id":"1","status":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE product_elements SET `modified_by` = '1', `modified` = '2022-08-02 21:58:36', `is_active` = '1' WHERE 1=1  and element_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 02:09:11 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-elements #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-elements #CurrentURLEnd
#Request : {"text_element_id":"","text_element":"Color","text_display_name":"Color","txt_attributes":["6","7","8","9","10","11","12","13"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO product_elements(`element_name`, `display_name`, `attributes`, `created_by`, `created`) VALUES('Color', 'Color', '6,7,8,9,10,11,12,13', '1', '2022-08-02 22:39:11');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 02:10:53 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-elements #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-elements #CurrentURLEnd
#Request : {"text_element_id":"","text_element":"Fabric","text_display_name":"Marerial","txt_attributes":["14","15","16","17","18","19","20","21","22","23","24","25","26","27","28","29","30","31","32"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO product_elements(`element_name`, `display_name`, `attributes`, `created_by`, `created`) VALUES('Fabric', 'Marerial', '14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32', '1', '2022-08-02 22:40:52');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 02:27:26 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-elements #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-elements #CurrentURLEnd
#Request : {"text_element_id":"","text_element":"T-shirt-neck-pattern","text_display_name":"Type","txt_attributes":["33","34","35","36","37","38","39","40","41","42","43","44","45"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO product_elements(`element_name`, `display_name`, `attributes`, `created_by`, `created`) VALUES('T-shirt-neck-pattern', 'Type', '33,34,35,36,37,38,39,40,41,42,43,44,45', '1', '2022-08-02 22:57:26');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 02:28:28 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-elements/4 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-elements #CurrentURLEnd
#Request : {"text_element_id":"4","text_element":"T-shirt Type","text_display_name":"Type","txt_attributes":["33","34","35","36","37","38","39","40","41","42","43","44","45"],"text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE product_elements SET `element_name` = 'T-shirt Type', `display_name` = 'Type', `attributes` = '33,34,35,36,37,38,39,40,41,42,43,44,45', `modified_by` = '1', `modified` = '2022-08-02 22:58:28', `is_active` = 1 WHERE 1=1  and element_id = '4';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 02:29:49 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-elements #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-elements #CurrentURLEnd
#Request : {"text_element_id":"","text_element":"T-shirt Fits","text_display_name":"Fits","txt_attributes":["46","47","48","49","50","51","52"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO product_elements(`element_name`, `display_name`, `attributes`, `created_by`, `created`) VALUES('T-shirt Fits', 'Fits', '46,47,48,49,50,51,52', '1', '2022-08-02 22:59:49');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 02:31:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-elements #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-elements #CurrentURLEnd
#Request : {"text_element_id":"","text_element":"Wiast Size (jeans)","text_display_name":"Size","txt_attributes":["53","54","55","56","57","58","59","60"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO product_elements(`element_name`, `display_name`, `attributes`, `created_by`, `created`) VALUES('Wiast Size (jeans)', 'Size', '53,54,55,56,57,58,59,60', '1', '2022-08-02 23:01:52');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 02:32:33 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-elements #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-elements #CurrentURLEnd
#Request : {"text_element_id":"","text_element":"Capacity","text_display_name":"Capacity","txt_attributes":["65","66","67"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO product_elements(`element_name`, `display_name`, `attributes`, `created_by`, `created`) VALUES('Capacity', 'Capacity', '65,66,67', '1', '2022-08-02 23:02:33');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 02:32:42 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-elements/7 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-elements #CurrentURLEnd
#Request : {"text_element_id":"7","text_element":"Capacity","text_display_name":"Capacity","txt_attributes":["63","64","65","66","67"],"text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE product_elements SET `element_name` = 'Capacity', `display_name` = 'Capacity', `attributes` = '63,64,65,66,67', `modified_by` = '1', `modified` = '2022-08-02 23:02:42', `is_active` = 1 WHERE 1=1  and element_id = '7';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 02:32:50 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-elements/7 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-elements #CurrentURLEnd
#Request : {"text_element_id":"7","text_element":"Capacity","text_display_name":"Capacity","txt_attributes":["61","62","63","64","65","66","67"],"text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE product_elements SET `element_name` = 'Capacity', `display_name` = 'Capacity', `attributes` = '61,62,63,64,65,66,67', `modified_by` = '1', `modified` = '2022-08-02 23:02:50', `is_active` = 1 WHERE 1=1  and element_id = '7';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 02:34:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-elements #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-elements #CurrentURLEnd
#Request : {"text_element_id":"","text_element":"Storage","text_display_name":"Storage","txt_attributes":["62","63","64","65"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO product_elements(`element_name`, `display_name`, `attributes`, `created_by`, `created`) VALUES('Storage', 'Storage', '62,63,64,65', '1', '2022-08-02 23:04:32');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 02:35:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/elements #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Admin/Element/updateStatus #CurrentURLEnd
#Request : {"id":"8","status":"0"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE product_elements SET `modified_by` = '1', `modified` = '2022-08-02 23:05:32', `is_active` = '0' WHERE 1=1  and element_id = '8';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 02:35:34 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/elements #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Admin/Element/updateStatus #CurrentURLEnd
#Request : {"id":"8","status":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE product_elements SET `modified_by` = '1', `modified` = '2022-08-02 23:05:34', `is_active` = '1' WHERE 1=1  and element_id = '8';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 02:59:17 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-elements #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-elements #CurrentURLEnd
#Request : {"text_element_id":"","text_element":"Quantity","text_display_name":"Quantity","txt_attributes":["73","74","75","76"]} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO product_elements(`element_name`, `display_name`, `attributes`, `created_by`, `created`) VALUES('Quantity', 'Quantity', '73,74,75,76', '1', '2022-08-02 23:29:17');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 03-08-2022 03:02:49 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-elements/7 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-elements #CurrentURLEnd
#Request : {"text_element_id":"7","text_element":"Capacity","text_display_name":"Capacity","txt_attributes":["61","62","63","64","65","66","67","75","76"],"text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE product_elements SET `element_name` = 'Capacity', `display_name` = 'Capacity', `attributes` = '61,62,63,64,65,66,67,75,76', `modified_by` = '1', `modified` = '2022-08-02 23:32:49', `is_active` = 1 WHERE 1=1  and element_id = '7';
#End*******************************************************************************************************

