<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 20-01-2023 04:03:26 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-special-offer #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-special-offer #CurrentURLEnd
#Request : {"text_offer_id":"","txt_offer_title":"10% off on Orders above Rs. 999","text_description":"<ul style=\"list-style-type: disc;\"><li>This offer is valid until stocks last or till the offer ends.<\/li><li>Final Price is inclusive of the offer. &nbsp;<\/li><li>Offer is applicable on select products and brands. In the event the user returns any\/all products in the order placed during the Offer Period, thereby not maintaining the minimum purchase value, as required to avail the Offer, he\/she shall not be eligible for the Offer. Accordingly, the amount availed as a discount under the Offer shall stand deducted from any refund(s) processed for the returned product(s).<\/li><\/ul>","text_offer_keyword":"flat","text_offer_amt":"10","text_offer_element":"discount","txt_order_value":"999","from_date":"22 January 2023","to_date":"10 February 2023","text_is_active":"1"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO offer(`title`, `description`, `keywords`, `symbol`, `offer_on_element`, `offer_value`, `user_type`, `category_id`, `from_date`, `to_date`, `ordered_amount`, `created_at`, `is_active`) VALUES('10% off on Orders above Rs. 999', '<ul style="list-style-type: disc;"><li>This offer is valid until stocks last or till the offer ends.</li><li>Final Price is inclusive of the offer. &nbsp;</li><li>Offer is applicable on select products and brands. In the event the user returns any/all products in the order placed during the Offer Period, thereby not maintaining the minimum purchase value, as required to avail the Offer, he/she shall not be eligible for the Offer. Accordingly, the amount availed as a discount under the Offer shall stand deducted from any refund(s) processed for the returned product(s).</li></ul>', 'flat', '', 'discount', '10', 'admin', NULL, '2023-01-22', '2023-02-10', '999', '2023-01-20 04:03:26', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 20-01-2023 04:04:59 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-special-offer #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-special-offer #CurrentURLEnd
#Request : {"text_offer_id":"","txt_offer_title":"10% off on Orders above Rs. 999","text_description":"<ul style=\"list-style-type: circle;\"><li>This offer is valid until stocks last or till the offer ends.<\/li><li>Final Price is inclusive of the offer.<\/li><li>Offer is applicable on select products and brands. In the event the user returns any\/all products in the order placed during the Offer Period, thereby not maintaining the minimum purchase value, as required to avail the Offer, he\/she shall not be eligible for the Offer. Accordingly, the amount availed as a discount under the Offer shall stand deducted from any refund(s) processed for the returned product(s).<\/li><\/ul>","text_offer_keyword":"flat","text_offer_amt":"10","text_offer_element":"discount","txt_order_value":"999","from_date":"22 January 2023","to_date":"10 February 2023","text_is_active":"1"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO specialoffer(`title`, `description`, `keywords`, `symbol`, `offer_on_element`, `offer_value`, `user_type`, `category_id`, `from_date`, `to_date`, `ordered_amount`, `created_at`, `is_active`) VALUES('10% off on Orders above Rs. 999', '<ul style="list-style-type: circle;"><li>This offer is valid until stocks last or till the offer ends.</li><li>Final Price is inclusive of the offer.</li><li>Offer is applicable on select products and brands. In the event the user returns any/all products in the order placed during the Offer Period, thereby not maintaining the minimum purchase value, as required to avail the Offer, he/she shall not be eligible for the Offer. Accordingly, the amount availed as a discount under the Offer shall stand deducted from any refund(s) processed for the returned product(s).</li></ul>', 'flat', '', 'discount', '10', 'admin', NULL, '2023-01-22', '2023-02-10', '999', '2023-01-20 04:04:59', 1);
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 20-01-2023 04:13:47 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-special-offer/1 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-special-offer #CurrentURLEnd
#Request : {"text_offer_id":"1","txt_offer_title":"10% off on Orders above Rs. 1000","text_description":"<ul style=\"list-style-type: circle;\"><li>This offer is valid until stocks last or till the offer ends.<\/li><li>Final Price is inclusive of the offer.<\/li><li>Offer is applicable on select products and brands. In the event the user returns any\/all products in the order placed during the Offer Period, thereby not maintaining the minimum purchase value, as required to avail the Offer, he\/she shall not be eligible for the Offer. Accordingly, the amount availed as a discount under the Offer shall stand deducted from any refund(s) processed for the returned product(s).<\/li><\/ul>","text_offer_keyword":"flat","text_offer_amt":"10","text_offer_element":"discount","txt_order_value":"999","from_date":"22 January 2023","to_date":"10 February 2023","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE specialoffer SET `title` = '10% off on Orders above Rs. 1000', `description` = '<ul style="list-style-type: circle;"><li>This offer is valid until stocks last or till the offer ends.</li><li>Final Price is inclusive of the offer.</li><li>Offer is applicable on select products and brands. In the event the user returns any/all products in the order placed during the Offer Period, thereby not maintaining the minimum purchase value, as required to avail the Offer, he/she shall not be eligible for the Offer. Accordingly, the amount availed as a discount under the Offer shall stand deducted from any refund(s) processed for the returned product(s).</li></ul>', `keywords` = 'flat', `symbol` = '', `offer_on_element` = 'discount', `offer_value` = '10', `user_type` = 'admin', `category_id` = NULL, `from_date` = '2023-01-22', `to_date` = '2023-02-10', `ordered_amount` = '999', `modified_by` = '1', `modified_at` = '2023-01-20 04:13:47', `is_active` = 1 WHERE 1=1  and offer_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 20-01-2023 04:14:01 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-special-offer/1 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-special-offer #CurrentURLEnd
#Request : {"text_offer_id":"1","txt_offer_title":"10% off on Orders above Rs. 999","text_description":"<ul style=\"list-style-type: circle;\"><li>This offer is valid until stocks last or till the offer ends.<\/li><li>Final Price is inclusive of the offer.<\/li><li>Offer is applicable on select products and brands. In the event the user returns any\/all products in the order placed during the Offer Period, thereby not maintaining the minimum purchase value, as required to avail the Offer, he\/she shall not be eligible for the Offer. Accordingly, the amount availed as a discount under the Offer shall stand deducted from any refund(s) processed for the returned product(s).<\/li><\/ul>","text_offer_keyword":"flat","text_offer_amt":"10","text_offer_element":"discount","txt_order_value":"9999","from_date":"22 January 2023","to_date":"10 February 2023","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE specialoffer SET `title` = '10% off on Orders above Rs. 999', `description` = '<ul style="list-style-type: circle;"><li>This offer is valid until stocks last or till the offer ends.</li><li>Final Price is inclusive of the offer.</li><li>Offer is applicable on select products and brands. In the event the user returns any/all products in the order placed during the Offer Period, thereby not maintaining the minimum purchase value, as required to avail the Offer, he/she shall not be eligible for the Offer. Accordingly, the amount availed as a discount under the Offer shall stand deducted from any refund(s) processed for the returned product(s).</li></ul>', `keywords` = 'flat', `symbol` = '', `offer_on_element` = 'discount', `offer_value` = '10', `user_type` = 'admin', `category_id` = NULL, `from_date` = '2023-01-22', `to_date` = '2023-02-10', `ordered_amount` = '9999', `modified_by` = '1', `modified_at` = '2023-01-20 04:14:01', `is_active` = 1 WHERE 1=1  and offer_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 20-01-2023 04:14:07 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-special-offer/1 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-special-offer #CurrentURLEnd
#Request : {"text_offer_id":"1","txt_offer_title":"10% off on Orders above Rs. 999","text_description":"<ul style=\"list-style-type: circle;\"><li>This offer is valid until stocks last or till the offer ends.<\/li><li>Final Price is inclusive of the offer.<\/li><li>Offer is applicable on select products and brands. In the event the user returns any\/all products in the order placed during the Offer Period, thereby not maintaining the minimum purchase value, as required to avail the Offer, he\/she shall not be eligible for the Offer. Accordingly, the amount availed as a discount under the Offer shall stand deducted from any refund(s) processed for the returned product(s).<\/li><\/ul>","text_offer_keyword":"flat","text_offer_amt":"10","text_offer_element":"discount","txt_order_value":"999","from_date":"22 January 2023","to_date":"10 February 2023","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE specialoffer SET `title` = '10% off on Orders above Rs. 999', `description` = '<ul style="list-style-type: circle;"><li>This offer is valid until stocks last or till the offer ends.</li><li>Final Price is inclusive of the offer.</li><li>Offer is applicable on select products and brands. In the event the user returns any/all products in the order placed during the Offer Period, thereby not maintaining the minimum purchase value, as required to avail the Offer, he/she shall not be eligible for the Offer. Accordingly, the amount availed as a discount under the Offer shall stand deducted from any refund(s) processed for the returned product(s).</li></ul>', `keywords` = 'flat', `symbol` = '', `offer_on_element` = 'discount', `offer_value` = '10', `user_type` = 'admin', `category_id` = NULL, `from_date` = '2023-01-22', `to_date` = '2023-02-10', `ordered_amount` = '999', `modified_by` = '1', `modified_at` = '2023-01-20 04:14:07', `is_active` = 1 WHERE 1=1  and offer_id = '1';
#End*******************************************************************************************************

