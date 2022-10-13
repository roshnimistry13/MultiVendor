//Load Unit Datatable
jQuery(document).ready(function(){
	table_name = 'stockDatatable';
	url = base_url + "Admin/Stock/bindDataTable";
	target = [0,4];

	toDataTable(table_name,url,target);
	$(".datepicker").datepicker();
});

//stock validation form
$("form[id='stock-form']").validate({
		// Specify validation rules
		ignore: ".ignore",
		rules:
		{
			text_product_stock: {
				required: true,
            	number: true
			},
			text_stock_in: {
            	number: true
			},
		},
		// Specify validation error messages
		messages: {
			//text_product_stock		: {required: "Please enter stock", number: "Please enter Number"},
			text_stock_in			: {number: "Please enter Number"},
		},
		submitHandler: function(form)
		{
			form.submit();
		}
});

function viewStockDetail(product_id,product_name){
	table_name 		= 'stockDetailDatatable';
	url 			= base_url + "Admin/Stock/bindStockDetailDataTable?product_id="+product_id;
	target = [0,1,2,3,4];

	toDataTable(table_name,url,target);
	$('.product-name').text(product_name);
	$('#product_stock_detail_modal').modal('show');
}