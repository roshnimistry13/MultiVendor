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

//Update Order Status
function updateOrder(id,is_active)
{
	if(is_active == 1)
		var isActive = "Enable";
	else if(is_active == 0)
		var isActive = "Disable";
	else
		var isActive = "Delete";

	Swal.fire(
		{
			title: 'Want to '+isActive+' Record ?',
			text: "You won't be able to revert this!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, '+isActive+' it!'
		}).then((result) =>
		{
			if (result.value)
			{
				var updateStatus =
				{
					id : id,
					status	:	is_active
				}
				$.ajax(
					{
						"url" : base_url + "Admin/Order/updateStatus",
						type: 'post',
						dataType: 'json',
						data: updateStatus,
						success: function (data)
						{
							if(data.status=="success")
							{
								Swal.fire("Success", "Successsfully Updated.", "success");
								$('#productDatatable').DataTable().ajax.reload();
							}
							else if(data.status=="error")
							{
								Swal.fire("Error", "Something went wrong!!", "error");
							}
						},
						error: function (textStatus, errorThrown)
						{
							console.log(textStatus);
						}
					});
			}
		})
}
