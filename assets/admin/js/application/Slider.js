//Load Product Datatable
jQuery(document).ready(function()
{
	table_name = 'sliderDatatable';
	url = base_url + "Admin/Slider/bindDataTable";
	target = [0,3];

	toDataTable(table_name,url,target);
});


//Brand validation form
$("form[id='slider-form']").validate(
	{
		// Specify validation rules
		ignore: ".ignore",
		rules:
		{
			slider_title: {
				required: true,
			}
		},
		// Specify validation error messages
		messages: {
			slider_title		: {required: "Please enter title"},
			slider_position		: {required: "Please enter slider position"},
			slider_img			: {required: "Please select slider image"},
		},
		
		errorPlacement: function(error, element) {
			if (element.attr("name") == "txtgender" || element.attr("name") == "txtmarital_status" )
        		error.insertAfter(element.parent());
			else if (element.parent().hasClass("vd_checkbox") || element.parent().hasClass("vd_radio")){
				element.parent().append(error);
			} else if (element.parent().hasClass("vd_input-wrapper")){
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
function updateSlider(id,is_active)
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
						"url" : base_url + "Admin/Slider/updateStatus",
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
								Swal.fire("Success", "Successsfully "+status1+"d Brand.", "success");
								$('#sliderDatatable').DataTable().ajax.reload();
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
