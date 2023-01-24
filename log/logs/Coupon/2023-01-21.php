<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 21-01-2023 00:00:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-coupon/1 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-coupon #CurrentURLEnd
#Request : {"text_coupon_id":"1","text_coupon_title":" Rs. 200 off on minimum purchase of Rs. 799 .","text_coupon_code":"aa","from_date":"01 August 2022","to_date":"31 August 2022","text_coupon_amt":"200","text_purchase_amt":"799","text_coupon_desc":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE coupon SET `coupon_code` = 'aa', `coupon_title` = 'Rs. 200 off on minimum purchase of Rs. 799 .', `coupon_amount` = '200', `description` = '', `start_date` = '2022-08-01', `expiry_date` = '2022-08-31', `updated_by` = '1', `update_at` = '2023-01-21 00:00:32', `is_active` = 1 WHERE 1=1  and coupon_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 21-01-2023 00:01:44 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-coupon/1 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-coupon #CurrentURLEnd
#Request : {"text_coupon_id":"1","text_coupon_title":"Rs. 200 off on minimum purchase of Rs. 799 .","text_coupon_code":"MV200","from_date":"01 August 2022","to_date":"31 August 2022","text_coupon_amt":"200","text_purchase_amt":"799","text_coupon_desc":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE coupon SET `coupon_code` = 'MV200', `coupon_title` = 'Rs. 200 off on minimum purchase of Rs. 799 .', `coupon_amount` = '200', `description` = '', `start_date` = '2022-08-01', `expiry_date` = '2022-08-31', `updated_by` = '1', `update_at` = '2023-01-21 00:01:44', `is_active` = 1 WHERE 1=1  and coupon_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 21-01-2023 00:03:40 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-coupon/1 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-coupon #CurrentURLEnd
#Request : {"text_coupon_id":"1","text_coupon_title":"Rs. 200 off on minimum purchase of Rs. 799 .","text_coupon_code":"MV200","from_date":"01 August 2022","to_date":"31 August 2022","text_coupon_amt":"200","text_purchase_amt":"799","text_coupon_desc":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE coupon SET `coupon_code` = 'MV200', `coupon_title` = 'Rs. 200 off on minimum purchase of Rs. 799 .', `coupon_amount` = '200', `purchase_amount` = '799', `description` = '', `start_date` = '2022-08-01', `expiry_date` = '2022-08-31', `updated_by` = '1', `update_at` = '2023-01-21 00:03:40', `is_active` = 1 WHERE 1=1  and coupon_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 21-01-2023 00:03:47 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-coupon/2 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-coupon #CurrentURLEnd
#Request : {"text_coupon_id":"2","text_coupon_title":"Rs. 100 off on minimum purchase of Rs. 599 .","text_coupon_code":"ABC123","from_date":"02 August 2022","to_date":"23 August 2022","text_coupon_amt":"100","text_purchase_amt":"599","text_coupon_desc":"test","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE coupon SET `coupon_code` = 'ABC123', `coupon_title` = 'Rs. 100 off on minimum purchase of Rs. 599 .', `coupon_amount` = '100', `purchase_amount` = '599', `description` = 'test', `start_date` = '2022-08-02', `expiry_date` = '2022-08-23', `updated_by` = '1', `update_at` = '2023-01-21 00:03:47', `is_active` = 1 WHERE 1=1  and coupon_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 21-01-2023 00:04:06 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-coupon/2 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-coupon #CurrentURLEnd
#Request : {"text_coupon_id":"2","text_coupon_title":"Rs. 100 off on minimum purchase of Rs. 599 .","text_coupon_code":"MV100","from_date":"02 August 2022","to_date":"23 August 2022","text_coupon_amt":"100","text_purchase_amt":"599","text_coupon_desc":"test","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE coupon SET `coupon_code` = 'MV100', `coupon_title` = 'Rs. 100 off on minimum purchase of Rs. 599 .', `coupon_amount` = '100', `purchase_amount` = '599', `description` = 'test', `start_date` = '2022-08-02', `expiry_date` = '2022-08-23', `updated_by` = '1', `update_at` = '2023-01-21 00:04:06', `is_active` = 1 WHERE 1=1  and coupon_id = '2';
#End*******************************************************************************************************

