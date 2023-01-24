<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 25-11-2022 21:06:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/whishlist #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Home/removeFromWishList #CurrentURLEnd
#Request : {"product_id":"7"} #Requestend
#Operation : DELETE #Operationend
#Message: 
DELETE FROM whish_list WHERE 1=1  and product_id = '7' and customer_id = '1';
#End*******************************************************************************************************

