//Load Order Datatable
jQuery(document).ready(function()
{
	var current_url = $(location).attr('href');
	var lastsegment = current_url.split('/').pop();
	var ststus_val = '';
	var order_url = base_url + "Admin/Order/bindDataTable?status_id="+ststus_val;
	
	if(lastsegment == "order-confirmed"){
		ststus_val = 1;
		order_url = base_url + "Admin/Order/bindDataTable?status_id="+ststus_val;
	}
	if(lastsegment == "order-processing"){
		ststus_val = 2;
		order_url = base_url + "Admin/Order/bindDataTable?status_id="+ststus_val;
	}
	if(lastsegment == "order-shipped"){
		ststus_val = 3;
		order_url = base_url + "Admin/Order/bindDataTable?status_id="+ststus_val;
	}
	if(lastsegment == "order-delivered"){
		ststus_val = 4;
		order_url = base_url + "Admin/Order/bindDataTable?status_id="+ststus_val;
	}	
	if(lastsegment == "order-refund"){
		ststus_val = 6;
		order_url = base_url + "Admin/Order/bindDataTable?status_id="+ststus_val;
	}

	table_name = 'orderDatatable';
	url = order_url;
	target = [0,5];
	toDataTable(table_name,url,target);

	if($('#replaceRequestDatatable').length){
		if(lastsegment == "order-return"){
			url1 = base_url + "Admin/Order/bindReturnDataTable";;
		}
		if(lastsegment == "replace-order"){
			url1 = base_url + "Admin/Order/bindReplaceDataTable";;
		}
		table_name1 = 'replaceRequestDatatable';		
		target1 = [0,5];
		toDataTable(table_name1,url1,target1);
	}		
});

$('.table-responsive').on('show.bs.dropdown', function () {
	$('.table-responsive .dataTables_scrollBody').css( "overflow", "inherit" );
});

$('.table-responsive').on('hide.bs.dropdown', function () {
	$('.table-responsive .dataTables_scrollBody').css( "overflow", "auto" );
});

/*** UPDATE DELIVERY STATUS FOR ORDER */

$("#orderDatatable").delegate(".delivery-status", "click", function() {
	
	var orderid= $(this).data('orderid');
	var statusid= $(this).data('statusid');
	showLoader();
	$.ajax({
		url: base_url + "update-delivery-status",
		type:'POST',
		data: { orderid : orderid,statusid:statusid },
		datatype: "json",
		success: function (json) {
			if (json["success"]) {
				hideLoader();
				$('#orderDatatable').DataTable().ajax.reload();;
			}
			if (json["error"]) {
				hideLoader();
				$('#orderDatatable').DataTable().ajax.reload();;
			}
		},
	});
	
});
/*** FILTER DATARECORDS NU DELIVERY STATUS */

$(".filterByDeliveryStatus").on("click", function() {
	
	var statusid = $(this).data('statusid');console.log(statusid);
	table_name = 'orderDatatable';
	url = base_url + "Admin/Order/bindDataTable?status_id="+statusid;
	target = [0,6];

	toDataTable(table_name,url,target);
});

