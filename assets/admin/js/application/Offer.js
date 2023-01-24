//Load Product Datatable
jQuery(document).ready(function()
{
	table_name = 'offerDatatable';
	url = base_url + "Admin/Offer/bindDataTable";
	target = [0,6];

	toDataTable(table_name,url,target);
	
	table_name = 'specialofferDatatable';
	url = base_url + "Admin/Offer/bindSpecialOfferDataTable";
	target = [0,6];

	toDataTable(table_name,url,target);
	$('#text_offer_category').select2();

	new FroalaEditor('#text_description',
		{
			key: "1C%kZV[IX)_SL}UJHAEFZMUJOYGYQE[\\ZJ]RAe(+%$==",
			attribution: false // to hide "Powered by Froala"
		});
	
});

jQuery.validator.addMethod("greaterStart", function (value, element, params) {
    return this.optional(element) || new Date(value) >= new Date($(params).val());
},'Must be greater than start date.');

//Brand validation form
$("form[id='offer-form']").validate(
	{
		// Specify validation rules
		ignore: ".ignore",
		rules:
		{
			from_date :{
				required :true,
			},
			to_date :{
				required :true,
				greaterStart: "#from_date"
			}
		},
		// Specify validation error messages
		messages: {
			text_offer_keyword		: {required: "Please select offer keyword"},
			text_title				: {required: "Please enter offer title"},
			text_offer_element		: {required: "Please select offer element"},
			text_offer_amt			: {required: "Please enter amount"},
			from_date				: {required: "Please select date"},
			to_date					: {required: "Please select date"},
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
function updateOffer(id,is_active)
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
						"url" : base_url + "Admin/Offer/updateStatus",
						type: 'post',
						dataType: 'json',
						data: updateStatus,
						success: function (data)
						{
							if(data.status=="success")
							{
								Swal.fire("Success", "Successsfully Updated.", "success");
								$('#offerDatatable').DataTable().ajax.reload();
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
/**** DELETE OFFER */
function deleteOffer(id)
{
		Swal.fire(
		{
			title: 'Want to DELETE Record ?',
			text: "You won't be able to revert this!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, Delete it!'
		}).then((result) =>
		{
			if (result.value)
			{
				var updateStatus =
				{
					id : id,
				}
				$.ajax(
					{
						"url" : base_url + "Admin/Offer/deleteoffer",
						type: 'post',
						dataType: 'json',
						data: updateStatus,
						success: function (data)
						{
							if(data.status=="success")
							{
								Swal.fire("Success", "Successsfully Deleted.", "success");
								$('#offerDatatable').DataTable().ajax.reload();
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


$("form[id='special-offer-form']").validate(
	{
		// Specify validation rules
		ignore: ".ignore",
		rules:
		{
			from_date :{
				required :true,
			},
			to_date :{
				required :true,
				greaterStart: "#from_date"
			}
		},
		// Specify validation error messages
		messages: {
			text_offer_keyword		: {required: "Please select offer keyword"},
			text_title				: {required: "Please enter offer title"},
			text_offer_element		: {required: "Please select offer element"},
			text_offer_amt			: {required: "Please enter amount"},
			from_date				: {required: "Please select date"},
			to_date					: {required: "Please select date"},
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

