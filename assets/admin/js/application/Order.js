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

$(document).ready(function() {
    $('#text_delivery_status').select2();
});

//product validation form
$("form[id='order-form']").validate(
	{
		// Specify validation rules
		ignore: ".ignore",
		
		rules:
		{
			text_delivery_status:
			{
				required: true,
			},
		},
		// Specify validation error messages
		messages: {
			text_delivery_status		: {required: "Please select delivery status"},
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


/*
$(document).ready(function() 
{
	toast1 = document.querySelector(".toast");
	(closeIcon1 = document.querySelector(".close")),
	(progress1 = document.querySelector(".progress"));

	let timer_1, timer_2;
	
	toast1.classList.add("active");
	progress1.classList.add("active");

	timer_1 = setTimeout(() =>
		{
			toast1.classList.remove("active");
		}, 50000);

	timer_2 = setTimeout(() =>
		{
			progress1.classList.remove("active");
		}, 53000);
});


const button = document.querySelector("button"),
toast = document.querySelector(".toast");
(closeIcon = document.querySelector(".close")),
(progress = document.querySelector(".progress"));

let timer1, timer2;

closeIcon.addEventListener("click", () =>
	{
		toast.classList.remove("active");

		setTimeout(() =>
			{
				progress.classList.remove("active");
			}, 300);

		clearTimeout(timer1);
		clearTimeout(timer2);
	});
*/


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
								var update_status = data.update_status;

								if(update_status == 1)
								var status1 = "Enable";
								else if(update_status == 0)
								var status1 = "Disable";
								else
								var status1 = "Delete";
								Swal.fire("Success", "Successsfully "+status1+"d Order.", "success");
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
