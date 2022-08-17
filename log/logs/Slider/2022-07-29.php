<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 29-07-2022 21:54:02 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-slider #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-slider #CurrentURLEnd
#Request : {"text_slider_id":"","slider_title":"Lorem ipsum dolor sit amet,","slider_position":"1","old_slider_img":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO slider(`slider_title`, `is_active`, `position`) VALUES('Lorem ipsum dolor sit amet,', 1, '1');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 29-07-2022 22:05:07 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-slider/1 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-slider #CurrentURLEnd
#Request : {"text_slider_id":"1","slider_title":"Lorem ipsum dolor sit amet,","slider_position":"1","old_slider_img":"slider-1.jpg","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE slider SET `slider_image` = 'slider-1.jpg', `slider_title` = 'Lorem ipsum dolor sit amet,', `position` = '1', `is_active` = 1 WHERE 1=1  and slider_id = '1';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 29-07-2022 22:05:20 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/add-slider #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-slider #CurrentURLEnd
#Request : {"text_slider_id":"","slider_title":"Lorem ipsum dolor sit amet,","slider_position":"2","old_slider_img":""} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO slider(`slider_title`, `is_active`, `position`) VALUES('Lorem ipsum dolor sit amet,', 1, '2');
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 29-07-2022 22:10:43 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/slider #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Admin/Slider/updateStatus #CurrentURLEnd
#Request : {"id":"2","status":"0"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE slider SET `is_active` = '0' WHERE 1=1  and slider_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 29-07-2022 22:10:45 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/slider #ReferrerEnd
#Current URL: http://localhost/MultiVendor/Admin/Slider/updateStatus #CurrentURLEnd
#Request : {"id":"2","status":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE slider SET `is_active` = '1' WHERE 1=1  and slider_id = '2';
#End*******************************************************************************************************


#Begin*****************************************************************************************************
#Time : 29-07-2022 22:10:55 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/edit-slider/2 #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-slider #CurrentURLEnd
#Request : {"text_slider_id":"2","slider_title":"Lorem ipsum dolor sit amet,","slider_position":"2","old_slider_img":"slider-2.jpg","text_is_active":"1"} #Requestend
#Operation : UPDATE #Operationend
#Message: 
UPDATE slider SET `slider_image` = 'slider-2.jpg', `slider_title` = 'Lorem ipsum dolor sit amet,', `position` = '2', `is_active` = 1 WHERE 1=1  and slider_id = '2';
#End*******************************************************************************************************

