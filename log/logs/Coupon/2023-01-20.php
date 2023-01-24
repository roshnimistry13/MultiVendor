<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 20-01-2023 23:36:56 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-coupon/2 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-coupon #CurrentURLEnd
#Request : {"text_coupon_id":"2","text_coupon_title":" Rs. 100 off on minimum purchase of Rs. 599 .","text_coupon_code":"ABC123","from_date":"02 August 2022","to_date":"23 August 2022","text_coupon_amt":"100","text_purchase_amt":"599","text_coupon_desc":"test","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE coupon SET `coupon_code` = 'ABC123', `coupon_title` = 'Rs. 100 off on minimum purchase of Rs. 599 .', `coupon_amount` = '100', `description` = 'test', `start_date` = '2022-08-02', `expiry_date` = '2022-08-23', `updated_by` = '1', `update_at` = '2023-01-20 23:36:56', `is_active` = 1 WHERE 1=1  and coupon_id = '2';
#End*******************************************************************************************************

