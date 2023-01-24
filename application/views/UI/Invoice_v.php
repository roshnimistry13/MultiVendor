<?php 

        $logo_path = UI_ASSETS.'imgs/mv-logo.png';
	    $logo_type = pathinfo($logo_path, PATHINFO_EXTENSION);
		$logo_data = file_get_contents($logo_path);
		$logo_base64 = 'data:image/' . $logo_type . ';base64,' . base64_encode($logo_data);
        
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>
        Invoice Demo
    </title>
</head>

<body style="margin:0;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <img src="<?php echo $logo_base64; ?>" width="150" />
            </td>
            <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:15px;" align="right">
                Tax Invoice/Bill of Supply Cash Memo <br>
                <span style="font-weight:300; font-size:13px;">
                    (Original For Recipient)
                </span>
            </td>
        </tr>

        <tr>
            <td colspan="2">
                &nbsp;
            </td>
        </tr>
        <!--<tr>
				<td colspan="2">
					&nbsp;
				</td>
			</tr>-->
        <tr>
            <td width="49%">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td>
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td
                                        style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px;">
                                        Sold By:
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:11px;">
                                        Appario Retail Private Ltd
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:11px;">
                                        Building No. 5, BGR Warehousing Complex,
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:11px;">
                                        Near Shiv Sagar Hotel, Village Vahuli, Bhiwandi, <br>Thane BHIWANDI,
                                        MAHARASHTRA, 421302
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>
                                <!--<tr>
										<td>
											&nbsp;
										</td>
									</tr>-->
                                <tr>
                                    <td
                                        style="font-family:Verdana, Geneva, sans-serif;font-weight:600; font-size:15px;">
                                        PAN No.:
                                        <span style="font-weight:300; font-size:11px;">
                                            AALCA0171E
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="font-family:Verdana, Geneva, sans-serif;font-weight:600; font-size:15px;">
                                        GST Registration No.:
                                        <span style="font-weight:300; font-size:11px;">
                                            27AALCA0171E1ZZ
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        &nbsp;
                                    </td>
                                </tr>                                
                                <tr>
                                    <td
                                        style="font-family:Verdana, Geneva, sans-serif;font-weight:600; font-size:15px;">
                                        Order Number:
                                        <span style="font-weight:300; font-size:11px;">
                                            <?php echo $orderdata[0]['order_number'];?>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td
                                        style="font-family:Verdana, Geneva, sans-serif;font-weight:600; font-size:15px;">
                                        Order Date:
                                        <span style="font-weight:300; font-size:11px;">
                                            <?php echo date('d-m-Y',strtotime($orderdata[0]['order_date']));?>
                                        </span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
            <td width="51%" valign="top">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px;"
                            align="right">
                            Billing Address:
                        </td>
                    </tr>
                    <tr>
                        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:12px;"
                            align="right">
                            <?php echo $orderdata[0]['shipping_address'];?>
                        </td>
                    </tr>                    
                    <tr>
                        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:15px;"
                            align="right">
                            &nbsp;
                        </td>
                    </tr>                    
                    <tr>
                        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px;"
                            align="right">
                            Shipping Address:
                        </td>
                    </tr>
                    <tr>
                        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:12px;"
                            align="right">
                            <?php echo $orderdata[0]['shipping_address'];?>
                        </td>
                    </tr>                    
                    <tr>
                        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:15px;"
                            align="right">
                            &nbsp;
                        </td>
                    </tr>
                    <tr>
                        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:15px;"
                            align="right">
                            Invoice Number:
                            <span style="font-weight:300; font-size:11px;">
                                DOB734-346593
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:15px;"
                            align="right">
                            Invoice Details:
                            <span style="font-weight:300; font-size:11px;">
                                DOB734-346593
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:15px;"
                            align="right">
                            Invoice Date:
                            <span style="font-weight:300; font-size:11px;">
                                <?php echo date('d-m-Y',strtotime($orderdata[0]['order_date']));?>
                            </span>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                &nbsp;
            </td>
        </tr>
        <tr>
            <td colspan="2">

            </td>
        </tr>       
       
    </table>

    <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
            <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-left:1px solid #333; border-right:1px solid #333; background-color: #ddd;"
                width="5%" height="32" align="center">
                Sr/No.
            </td>
            <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-left:1px solid #333; border-right:1px solid #333; background-color: #ddd;"
                width="30%" height="32" align="center">
                Products
            </td>
            <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-right:1px solid #333; background-color: #ddd;"
                width="10%" align="center">
                Unit Price
            </td>
            <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-right:1px solid #333; border-right:1px solid #333; background-color: #ddd;"
                width="10%" align="center">
                Net Amount
            </td>
            <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-right:1px solid #333; background-color: #ddd;"
                width="5%" align="center">
                Qty
            </td>
            <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-right:1px solid #333; background-color: #ddd;"
                width="10%" align="center">
                Discount
            </td>
            <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-right:1px solid #333; border-right:1px solid #333; background-color: #ddd;"
                width="10%" align="center">
                Tax Rate
            </td>
            <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-right:1px solid #333; border-right:1px solid #333; background-color: #ddd;"
                width="10%" align="center">
                Tax Amount
            </td>
            <td style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-top:1px solid #333; border-bottom:1px solid #333; border-right:1px solid #333; border-right:1px solid #333; background-color: #ddd;"
                width="10%" align="center">
                Total Amount
            </td>
        </tr>
        <?php 
            $i = 1;
            foreach($productdata as $row){?>
        <tr>
            <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px; border-bottom:1px solid #333; border-left:1px solid #333; border-right:1px solid #333;"
                align="center">
                <?php echo $i++; ?>
            </td>
            <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:11px; border-bottom:1px solid #333; border-left:1px solid #333; border-right:1px solid #333;"
                align="center">
                <?php echo $row['product_name'];?>
            </td>
            <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:11px; border-bottom:1px solid #333; border-right:1px solid #333;"
                align="center">
                <?php echo $row['mrp_price'];?>
            </td>
            <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:11px; border-bottom:1px solid #333; border-right:1px solid #333;"
                align="center">
                <?php echo $row['net_price'];?>
            </td>
            <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:11px; border-bottom:1px solid #333; border-right:1px solid #333;"
                align="center">
                <?php echo $row['quantity'];?>
            </td>
            <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:11px; border-bottom:1px solid #333; border-right:1px solid #333; border-right:1px solid #333;"
                align="center">
                <?php echo $row['discount_amt'];?>
            </td>
            <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:11px; border-bottom:1px solid #333; border-right:1px solid #333; border-right:1px solid #333;"
                align="center">
                <?php echo $row['gst'];?>
            </td>
            <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:11px; border-bottom:1px solid #333; border-right:1px solid #333; border-right:1px solid #333;"
                align="center">
                <?php echo $row['gst_amt'];?>
            </td>
            <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:11px; border-bottom:1px solid #333; border-right:1px solid #333; border-right:1px solid #333;"
                align="center">
                <?php echo $row['total_amt'];?>
            </td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="7"
                style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:11px; border-bottom:1px solid #333; border-left:1px solid #333; border-right:1px solid #333;"
                height="20" align="center">
            </td>

            <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:11px; border-bottom:1px solid #333; border-right:1px solid #333; border-right:1px solid #333; background-color: #ddd;"
                align="center">
                <?php echo $orderdata[0]['gst_amount'];?>
            </td>
            <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:11px; border-bottom:1px solid #333; border-right:1px solid #333; border-right:1px solid #333; background-color: #ddd;"
                align="center">
                <?php echo $orderdata[0]['total_amount'];?>
            </td>
        </tr>
        <tr>
            <td colspan="9"
                style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:11px; border-bottom:1px solid #333; border-left:1px solid #333; border-right:1px solid #333;"
                height="20" align="left">
                Amount in Words:
                <span style="font-weight:300; font-size:11px;">
                <?php echo convertToIndianCurrency($orderdata[0]['total_amount']);?>
                </span>
            </td>
        </tr>
        <tr>
            <td colspan="9"
                style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-bottom:1px solid #333; border-left:1px solid #333; border-right:1px solid #333; padding-right: 15px;"
                height="32" align="right">
                <img src="<?php echo $logo_base64; ?>" width="150" />
            </td>
        </tr>
        <tr>
            <td colspan="9"
                style="font-family:Verdana, Geneva, sans-serif; font-weight:600; font-size:13px; border-bottom:1px solid #333; border-left:1px solid #333; border-right:1px solid #333; padding-right: 15px;"
                height="20" align="right">
                Authorised Signatory
            </td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
            <td colspan="9">
                &nbsp;
            </td>
        </tr>
            <tr>
                <td style="font-family:Verdana, Geneva, sans-serif; font-weight:300; font-size:13px;" colspan="9"
                    align="center">
                    (This is computer generated receipt and does not require physical signature.)
                </td>
            </tr>
        </tfoot>
    </table>
</body>

</html>