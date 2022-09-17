<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:08:44 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-attributes #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-attributes #CurrentURLEnd
#Request : {"text_attributes_id":"","text_attribute_name":"Single"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO attributes(`attributes_name`, `created_by`, `created`) VALUES('SINGLE', '1', '2022-08-24 00:08:44');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:08:51 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-attributes #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-attributes #CurrentURLEnd
#Request : {"text_attributes_id":"","text_attribute_name":"Double"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO attributes(`attributes_name`, `created_by`, `created`) VALUES('DOUBLE', '1', '2022-08-24 00:08:51');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:08:58 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-attributes #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-attributes #CurrentURLEnd
#Request : {"text_attributes_id":"","text_attribute_name":"King"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO attributes(`attributes_name`, `created_by`, `created`) VALUES('KING', '1', '2022-08-24 00:08:58');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:09:09 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-attributes #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-attributes #CurrentURLEnd
#Request : {"text_attributes_id":"","text_attribute_name":"Queen"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO attributes(`attributes_name`, `created_by`, `created`) VALUES('QUEEN', '1', '2022-08-24 00:09:09');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 24-08-2022 00:10:07 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-attributes/76 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-attributes #CurrentURLEnd
#Request : {"text_attributes_id":"76","text_attribute_name":"Ltr","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE attributes SET `attributes_name` = 'LTR', `modified_by` = '1', `modified` = '2022-08-24 00:10:07', `is_active` = 1 WHERE 1=1  and attributes_id = '76';
#End*******************************************************************************************************

