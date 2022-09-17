<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 20-08-2022 05:18:42 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-coupon #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-coupon #CurrentURLEnd
#Request : {"text_coupon_id":"","text_coupon_code":"ABC123","from_date":"1 August 2022","to_date":"19 August 2022"} #Requestend
#Operation : INSERT #Operationend
#status: 
error;
#message: 
Insert Failed: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'created' in 'field list';
#trace: 
SQLSTATE[42S22]: Column not found: 1054 Unknown column 'created' in 'field list';
#query: 
INSERT INTO coupon(`coupon_code`, `start_date`, `expiry_date`, `created_by`, `created`) VALUES('ABC123', '2022-08-01', '2022-08-19', '1', '2022-08-20 01:48:42');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 20-08-2022 05:19:20 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-coupon #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-coupon #CurrentURLEnd
#Request : {"text_coupon_id":"","text_coupon_code":"AAA","from_date":"23 August 2022","to_date":"23 August 2022"} #Requestend
#Operation : INSERT #Operationend
#status: 
error;
#message: 
Insert Failed: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'created' in 'field list';
#trace: 
SQLSTATE[42S22]: Column not found: 1054 Unknown column 'created' in 'field list';
#query: 
INSERT INTO coupon(`coupon_code`, `start_date`, `expiry_date`, `created_by`, `created`) VALUES('AAA', '2022-08-23', '2022-08-23', '1', '2022-08-20 01:49:20');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 20-08-2022 05:20:52 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-coupon #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-coupon #CurrentURLEnd
#Request : {"text_coupon_id":"","text_coupon_code":"aa","from_date":"1 August 2022","to_date":"19 August 2022"} #Requestend
#Operation : INSERT #Operationend
#status: 
error;
#message: 
Insert Failed: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'created' in 'field list';
#trace: 
SQLSTATE[42S22]: Column not found: 1054 Unknown column 'created' in 'field list';
#query: 
INSERT INTO coupon(`coupon_code`, `start_date`, `expiry_date`, `created_by`, `created`) VALUES('aa', '2022-08-01', '2022-08-19', '1', '2022-08-20 01:50:52');
#End*******************************************************************************************************

