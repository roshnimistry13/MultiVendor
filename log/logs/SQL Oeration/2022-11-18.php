<?php
			if ( ! defined('dainik')) exit('No direct script access allowed');


#Begin*****************************************************************************************************
#Time : 18-11-2022 02:51:24 #Timeend
#IP : ::1 #IPend
#Referrer : http://localhost/MultiVendor/sql-operation #ReferrerEnd
#Current URL: http://localhost/MultiVendor/submit-sql #CurrentURLEnd
#Request : {"text_sql":"INSERT INTO `attributes` (`attributes_id`, `attributes_name`, `attribute_code`, `created_by`, `modified_by`, `created`, `modified`, `is_active`) \r\nVALUES (81, 'CHERRY RED', '#990F02', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(82, 'ROSE', '#E3242B', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(83, 'WINE', '#4E0707', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(84, 'BRICK', '#7E2811', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(85, 'BLUSH RED', '#BC544B', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(86, 'MAROON', '#800000', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(87, 'BURGUNDY', '#8D021F', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(88, 'MERIGOLD', '#FCAE1E', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(89, 'RUST', '#8D4004', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(90, 'GINGER', '#BE5504', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(91, 'BRONZE', '#B2560D', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(92, 'HONEY', '#EC9706', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(93, 'CARROT', '#ED7117', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(94, 'DARK ORANGE', '#FF8C00', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(95, 'ORANGE-RED', '#FF4500', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(96, 'METALLIC ORANGE', '#E26310', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(97, 'ROYAL ORANGE', '#FF9944', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(98, 'ASTEL ORANGE', '#FEBA4F', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(99, 'TAN', '#E6DBAC', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(100, 'BEIGE', '#EEDC9A', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(101, 'MACAROON', '#F9E076', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(102, 'LEMON YELLOW', '#FDFF00', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(103, 'HAZELNUT', '#BDA55D', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(104, 'CLOVER LIME', '#FCE883', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(105, 'CLOVER LIME', '#FCE883', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(106, 'GOLD', '#FFD700', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(107, 'BRIGHT YELLOW', '#FFFD01', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(108, 'MUSTARD', '#FEDC56', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(109, 'GREEN', '#7A4988', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(110, 'LIME', '#AEF359', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(111, 'SLATE', '#757C88', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(112, 'SKY', '#63C5DA', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(113, 'NAVY', '#0A1172', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(114, 'INDIGO', '#281E5D', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(115, 'TEAL', '#48AAAD', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(116, 'PURPLE', '#A32CC4', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(117, 'DARK VIOLET', '#710193', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(118, 'MAGENTA', '#8B008B', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(119, 'FLAMINGO', '#FDA4BA', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(120, 'PEACH', '#FC9483', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(121, 'STRAWBERRY', '#FC4C4E', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(122, 'LIGHT PINK', '#FFB6C1', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(123, 'PASTEL PINK', '#FFD1DC', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(124, 'ROASTED COFFEE', '#4B371C', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(125, 'PEANUT BROWN', '#795C34', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(126, 'COFFEE', '#6F4E37', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(127, 'DARK BROWN', '#654321', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(128, 'GOLDEN BROWN', '#996515', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(129, 'KHAKI', '#C3B091', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(130, 'LIGHT BROWN', '#B5651D', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(131, 'CHARCOAL', '#28231D', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(132, 'GRAY ', '#808080', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(133, 'LightGrey', '#D3D3D3', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(134, 'DarkGray', '#A9A9A9', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(135, 'PEARL', '#FBFCF8', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(136, 'CREAM', '#FFFADA', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),\r\n(137, 'IVORY', '#FFFFF0', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1');"} #Requestend
#Operation : INSERT #Operationend
#Message: 
INSERT INTO `attributes` (`attributes_id`, `attributes_name`, `attribute_code`, `created_by`, `modified_by`, `created`, `modified`, `is_active`) 
VALUES (81, 'CHERRY RED', '#990F02', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(82, 'ROSE', '#E3242B', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(83, 'WINE', '#4E0707', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(84, 'BRICK', '#7E2811', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(85, 'BLUSH RED', '#BC544B', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(86, 'MAROON', '#800000', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(87, 'BURGUNDY', '#8D021F', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(88, 'MERIGOLD', '#FCAE1E', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(89, 'RUST', '#8D4004', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(90, 'GINGER', '#BE5504', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(91, 'BRONZE', '#B2560D', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(92, 'HONEY', '#EC9706', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(93, 'CARROT', '#ED7117', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(94, 'DARK ORANGE', '#FF8C00', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(95, 'ORANGE-RED', '#FF4500', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(96, 'METALLIC ORANGE', '#E26310', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(97, 'ROYAL ORANGE', '#FF9944', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(98, 'ASTEL ORANGE', '#FEBA4F', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(99, 'TAN', '#E6DBAC', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(100, 'BEIGE', '#EEDC9A', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(101, 'MACAROON', '#F9E076', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(102, 'LEMON YELLOW', '#FDFF00', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(103, 'HAZELNUT', '#BDA55D', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(104, 'CLOVER LIME', '#FCE883', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(105, 'CLOVER LIME', '#FCE883', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(106, 'GOLD', '#FFD700', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(107, 'BRIGHT YELLOW', '#FFFD01', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(108, 'MUSTARD', '#FEDC56', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(109, 'GREEN', '#7A4988', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(110, 'LIME', '#AEF359', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(111, 'SLATE', '#757C88', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(112, 'SKY', '#63C5DA', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(113, 'NAVY', '#0A1172', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(114, 'INDIGO', '#281E5D', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(115, 'TEAL', '#48AAAD', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(116, 'PURPLE', '#A32CC4', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(117, 'DARK VIOLET', '#710193', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(118, 'MAGENTA', '#8B008B', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(119, 'FLAMINGO', '#FDA4BA', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(120, 'PEACH', '#FC9483', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(121, 'STRAWBERRY', '#FC4C4E', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(122, 'LIGHT PINK', '#FFB6C1', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(123, 'PASTEL PINK', '#FFD1DC', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(124, 'ROASTED COFFEE', '#4B371C', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(125, 'PEANUT BROWN', '#795C34', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(126, 'COFFEE', '#6F4E37', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(127, 'DARK BROWN', '#654321', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(128, 'GOLDEN BROWN', '#996515', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(129, 'KHAKI', '#C3B091', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(130, 'LIGHT BROWN', '#B5651D', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(131, 'CHARCOAL', '#28231D', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(132, 'GRAY ', '#808080', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(133, 'LightGrey', '#D3D3D3', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(134, 'DarkGray', '#A9A9A9', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(135, 'PEARL', '#FBFCF8', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(136, 'CREAM', '#FFFADA', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1'),
(137, 'IVORY', '#FFFFF0', '1', '0', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000', '1');;
#End*******************************************************************************************************

