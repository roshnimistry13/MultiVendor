<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 08-11-2022 02:05:34 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-parent-product/2 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Admin/Product/addVariantToProduct #CurrentURLEnd
#Request : {"parent_product_id":"2","product_id":"2"} #Requestend
#Operation : UPDATE #Operationend
#status: 
error;
#message: 
Update Failed: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'parent_product_listing_id' in 'where clause';
#trace: 
SQLSTATE[42S22]: Column not found: 1054 Unknown column 'parent_product_listing_id' in 'where clause';
#query: 
UPDATE product_details SET `variant_code` = 'gXvJez', `parent_product_id` = '2' WHERE 1=1  and parent_product_listing_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 08-11-2022 02:05:34 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-parent-product/2 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Admin/Product/addVariantToProduct #CurrentURLEnd
#Request : {"parent_product_id":"2","product_id":"2"} #Requestend
#Operation : UPDATE #Operationend
#status: 
error;
#message: 
Update Failed: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'parent_product_listing_id' in 'where clause';
#trace: 
SQLSTATE[42S22]: Column not found: 1054 Unknown column 'parent_product_listing_id' in 'where clause';
#query: 
UPDATE product_elements_attributes SET `variant_code` = 'gXvJez', `parent_product_id` = '2' WHERE 1=1  and parent_product_listing_id = '2';
#End*******************************************************************************************************

