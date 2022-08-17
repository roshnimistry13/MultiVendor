//Load Group Unit Datatable
jQuery(document).ready(function()
{
	table_name = 'attributesDatatable';
	url = base_url + "Admin/Attributes/bindDataTable";
	target = [0,3];

	toDataTable(table_name,url,target);
});

//Group Unit validation form
$("form[id='attributes-form']").validate(
	{
		// Specify validation rules
		ignore: ".ignore",
		rules:
		{
			
		},
		// Specify validation error messages
		messages: {
			text_attribute_name		: { required: "Please enter attribute name" },
		},
		submitHandler: function(form)
		{
			form.submit();
		}
	});


//Update Group Unit Status
function updateattributes(id,is_active)
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
						"url" : base_url + "Admin/Attributes/updateStatus",
						type: 'post',
						dataType: 'json',
						data: updateStatus,
						success: function (data)
						{
							if(data.status=="success")
							{
								var update_status = data.update_status;

								if(update_status == 1)
								var status1 = "Enable";
								else if(update_status == 0)
								var status1 = "Disable";
								else
								var status1 = "Delete";
								Swal.fire("Success", "Successsfully "+status1+"d Group Unit.", "success");
								$('#attributesDatatable').DataTable().ajax.reload();
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
