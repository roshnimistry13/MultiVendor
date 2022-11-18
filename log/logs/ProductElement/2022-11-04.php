<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 04-11-2022 02:05:12 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-elements/5 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-elements #CurrentURLEnd
#Request : {"text_element_id":"5","text_element":"T-shirt Fits","text_display_name":"Fits","txt_attributes":["46","47","48","49","50","51","52"],"text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE product_elements SET `element_name` = 'T-shirt Fits', `display_name` = 'Fits', `attributes` = '46,47,48,49,50,51,52', `modified_by` = '999', `modified` = '2022-11-04 02:05:12', `is_active` = 1 WHERE 1=1  and element_id = '5';
#End*******************************************************************************************************

