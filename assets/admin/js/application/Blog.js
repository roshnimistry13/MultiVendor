//Load Blog Datatable
jQuery(document).ready(function()
{
	table_name = 'blogDatatable';
	url = base_url + "Admin/Blog/bindDataTable";
	target = [0,5];

	toDataTable(table_name,url,target);
		
	//product description editor	
	new FroalaEditor('#text_description',
		{
			imageUploadURL:  base_url+"Admin/Blog/uploadImage",
			imageUploadParams:
			{
				id: 'my_editor'
			},
			key: "1C%kZV[IX)_SL}UJHAEFZMUJOYGYQE[\\ZJ]RAe(+%$==",
			attribution: false // to hide "Powered by Froala"
		});
});

//blog validation form
$("form[id='blog-form']").validate(
	{
		// Specify validation rules
		ignore: ".ignore",
		
		rules:
		{
			text_blog_title:
			{
				required: true,
			},
			text_blog_author:
			{
				required: true,
			},
			text_blog_date:
			{
				required: true
			},
			text_short_description:
			{
				required: true,
				maxlength: 100
			},
			text_description:
			{
				required: true
			},
			
		},
		// Specify validation error messages
		messages: {
			text_blog_title			: {required: "Please enter blog title"},
			text_blog_author		: {required: "Please enter blog author"},
			text_blog_date			: {required: "Please enter blog date"},
			text_short_description	: {required: "Please enter short description"},
			text_description		: {required: "Please enter description"},
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

//Update Blog Status
function updateBlog(id,is_active)
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
						"url" : base_url + "Admin/Blog/updateStatus",
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
								Swal.fire("Success", "Successsfully "+status1+"d Blog.", "success");
								$('#blogDatatable').DataTable().ajax.reload();
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
