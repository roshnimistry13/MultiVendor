<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 11-09-2022 03:31:33 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/whishlist #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/removeFromWishList #CurrentURLEnd
#Request : {"product_id":"13"} #Requestend
#Operation : DELETE #Operationend
#Message: 
DELETE FROM whish_list WHERE 1=1  and product_id = '13' and customer_id = '1';
#End*******************************************************************************************************

