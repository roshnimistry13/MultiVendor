<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 28-07-2022 23:32:55 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-category/6 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-category #CurrentURLEnd
#Request : {"text_categroy_id":"6","text_category_name":"Category -6","text_description":"Category -6","old_category_image":"","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE category SET `category_name` = 'Category -6', `short_code` = 'category-6', `description` = 'Category -6', `category_image` = 'coffe-glass.png', `modified_by` = NULL, `modified` = '2022-07-28 20:02:55', `is_active` = 1 WHERE 1=1  and category_id = '6';
#End*******************************************************************************************************

