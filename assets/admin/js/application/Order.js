//Load Order Datatable
jQuery(document).ready(function()
{
	table_name = 'orderDatatable';
	url = base_url + "Admin/Order/bindDataTable";
	target = [0,6];

	toDataTable(table_name,url,target);
		
	//product description editor	
	/*new FroalaEditor('#text_description',
		{
			imageUploadURL:  base_url+"Admin/Product/uploadImage",
			imageUploadParams:
			{
				id: 'my_editor'
			},
			key: "1C%kZV[IX)_SL}UJHAEFZMUJOYGYQE[\\ZJ]RAe(+%$==",
			attribution: false // to hide "Powered by Froala"
		});*/

		
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