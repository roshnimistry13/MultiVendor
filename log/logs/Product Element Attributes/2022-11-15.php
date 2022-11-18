<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 15-11-2022 02:05:11 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-parent-product/6 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Admin/Product/removeVarientProduct #CurrentURLEnd
#Request : {"product_id":"17","parent_product_id":"6"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE product_elements_attributes SET `variant_code` = NULL, `parent_product_id` = NULL WHERE 1=1  and product_id = '17';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 15-11-2022 02:05:32 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-parent-product/6 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Admin/Product/addVariantToProduct #CurrentURLEnd
#Request : {"parent_product_id":"6","product_id":"17"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE product_elements_attributes SET `variant_code` = 'CL2H8t', `parent_product_id` = '6' WHERE 1=1  and product_id = '17';
#End*******************************************************************************************************

