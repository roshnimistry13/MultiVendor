//Load Product Datatable
jQuery(document).ready(function()
{
	table_name = 'customerDatatable';
	url = base_url + "Admin/Customer/bindDataTable";
	target = [0,5];

	toDataTable(table_name,url,target);
});
