//Load Product Datatable
jQuery(document).ready(function()
{
	table_name = 'couponDatatable';
	url = base_url + "Admin/Coupon/bindDataTable";
	target = [0,4,5,6];

	toDataTable(table_name,url,target,true);
	
});


//Brand validation form
$("form[id='coupon-form']").validate(
	{
		// Specify validation rules
		ignore: ".ignore",
		rules:
		{
			to_date :{  greater_date: '#from_date' }
		},
		// Specify validation error messages
		messages: {
			text_coupon_code		: {required: "Please enter coupon code"},
			from_date				: {required: "Please select date"},
			to_date					: {required: "Please select date"},
			text_coupon_amt			: {required: "Please enter amount"},
			text_purchase_amt		: {required: "Please enter amount"},
		},
		
		errorPlacement: function(error, element) {
			if (element.attr("name") == "from_date" || element.attr("name") == "to_date" ){
        		error.insertAfter(element.parent());
			}else {
				error.insertAfter(element);
			}
		}, 

		highlight: function (element) {
			$(element).addClass('vd_bd-red');
		},

		unhighlight: function (element) {
			$(element).closest('.control-group').removeClass('error');
		},

		submitHandler: function(form)
		{
			form.submit();
		}
	});

//Update Brand Status
function updateCoupon(id,is_active)
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
						"url" : base_url + "Admin/Coupon/updateStatus",
						type: 'post',
						dataType: 'json',
						data: updateStatus,
						success: function (data)
						{
							if(data.status=="success")
							{
								Swal.fire("Success", "Successsfully Updated.", "success");
								$('#couponDatatable').DataTable().ajax.reload();
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
