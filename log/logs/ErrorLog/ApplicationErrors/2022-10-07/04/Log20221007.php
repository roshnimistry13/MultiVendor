<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 07-10-2022 04:11:46 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/offer #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Admin/Offer/updateStatus #CurrentURLEnd
#Request : {"id":"5","status":"0"} #Requestend
#Operation : UPDATE #Operationend
#status: 
error;
#message: 
Update Failed: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'updated_by' in 'field list';
#trace: 
SQLSTATE[42S22]: Column not found: 1054 Unknown column 'updated_by' in 'field list';
#query: 
UPDATE offer SET `updated_by` = '1', `update_at` = '2022-10-07 04:11:46', `is_active` = '0' WHERE 1=1  and offer_id = '5';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 07-10-2022 04:13:10 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/offer #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Admin/Offer/updateStatus #CurrentURLEnd
#Request : {"id":"5","status":"0"} #Requestend
#Operation : UPDATE #Operationend
#status: 
error;
#message: 
Update Failed: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'updated_by' in 'field list';
#trace: 
SQLSTATE[42S22]: Column not found: 1054 Unknown column 'updated_by' in 'field list';
#query: 
UPDATE offer SET `updated_by` = '1', `update_at` = '2022-10-07 04:13:10', `is_active` = '0' WHERE 1=1  and offer_id = '5';
#End*******************************************************************************************************

