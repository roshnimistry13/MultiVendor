<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 26-08-2022 02:50:14 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-stock/1 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-stock #CurrentURLEnd
#Request : {"text_product_id":"1","text_product_stock":"120"} #Requestend
#Operation : INSERT #Operationend
#status: 
error;
#message: 
Insert Failed: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'quantity' in 'field list';
#trace: 
SQLSTATE[42S22]: Column not found: 1054 Unknown column 'quantity' in 'field list';
#query: 
INSERT INTO stock_details(`product_id`, `status`, `old_stock`, `quantity`, `created`) VALUES('1', 1, '100', '120', '2022-08-26 02:50:14');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-08-2022 02:51:57 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-stock/1 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-stock #CurrentURLEnd
#Request : {"text_product_id":"1","text_product_stock":"80"} #Requestend
#Operation : INSERT #Operationend
#status: 
error;
#message: 
Insert Failed: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'quantity' in 'field list';
#trace: 
SQLSTATE[42S22]: Column not found: 1054 Unknown column 'quantity' in 'field list';
#query: 
INSERT INTO stock_details(`product_id`, `status`, `old_stock`, `quantity`, `created`) VALUES('1', 1, '120', '80', '2022-08-26 02:51:57');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 26-08-2022 02:52:56 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-stock/1 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-stock #CurrentURLEnd
#Request : {"text_product_id":"1","text_product_stock":"50"} #Requestend
#Operation : INSERT #Operationend
#status: 
error;
#message: 
Insert Failed: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'quantity' in 'field list';
#trace: 
SQLSTATE[42S22]: Column not found: 1054 Unknown column 'quantity' in 'field list';
#query: 
INSERT INTO stock_details(`product_id`, `status`, `old_stock`, `quantity`, `created`) VALUES('1', 1, '80', '50', '2022-08-26 02:52:56');
#End*******************************************************************************************************

