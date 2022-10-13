//Load Product Datatable
jQuery(document).ready(function()
{
	table_name = 'categoryDatatable';
	url = base_url + "Admin/Category/bindDataTable";
	target = [0,4];

	toDataTable(table_name,url,target);
});

$(document).ready(function() {
    $('#text_parent_category').select2();
    $('#txt_brand_id').select2();
    $('#txt_elements').select2();

	new FroalaEditor('#text_warranty_description ,#txt_policy_description', {
		//imageUploadURL:  base_url+"Admin/Product/uploadImage",
		imageUploadParams:
		{
			id: 'my_editor'
		},
		key: "1C%kZV[IX)_SL}UJHAEFZMUJOYGYQE[\\ZJ]RAe(+%$==",
		attribution: false // to hide "Powered by Froala"
});
});

//Category validation form
$("form[id='category-form']").validate(
	{
		// Specify validation rules
		ignore: ".ignore",
		rules:
		{
			text_category_name: {
				required: true,
			},
		},
		// Specify validation error messages
		messages: {
			'check_services[]'				: {required: "Please select policy"},
			text_category_name				: {required: "Please enter category name"},
			txt_return_replace_validity		: {required: "Please enter validity in days"},
			txt_policy_covers				: {required: "Please enter policy covered"},
			txt_policy_description			: {required: "Please enter policy discription"},
			'txt_elements[]'				: {required: "Please select element"},
		},
		
		errorPlacement: function(error, element) {
			if (element.attr("name") == "txt_elements"){
        		error.insertAfter(element.parent());
			}else if(element.attr("name") == "check_services[]"){
				error.insertAfter(element.parent().parent());
			}
			else {
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

//Update Product Status
function updateCategory(id,is_active)
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
						"url" : base_url + "Admin/Category/updateStatus",
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
								Swal.fire("Success", "Successsfully "+status1+"d Category.", "success");
								$('#categoryDatatable').DataTable().ajax.reload();
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

$('#text_parent_category').on('change', function(){
	var elements = $(this).val();
	if(elements > 0){
		$('.elements-list').hide();
		$('.policy-section').hide();
		$('#txt_elements').removeAttr('required');
		$('.policy-section').find("textarea, input,input[type=checkbox]").removeAttr('required');
	}else{
		$('.elements-list').show();
		$('.policy-section').show();
		$("#txt_elements").attr("required", true);
		$('.policy-section').find("textarea, input,input[type=checkbox]").attr('required',true);
	}
}).change();
