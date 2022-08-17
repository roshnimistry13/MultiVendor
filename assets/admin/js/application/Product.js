//Load Product Datatable
jQuery(document).ready(function()
{
	table_name = 'productDatatable';
	url = base_url + "Admin/Product/bindDataTable";
	target = [0,6];

	toDataTable(table_name,url,target);
		
	//product description editor	
	new FroalaEditor('#text_description',
		{
			imageUploadURL:  base_url+"Admin/Product/uploadImage",
			imageUploadParams:
			{
				id: 'my_editor'
			},
			key: "1C%kZV[IX)_SL}UJHAEFZMUJOYGYQE[\\ZJ]RAe(+%$==",
			attribution: false // to hide "Powered by Froala"
		});

		$('#text_category_id').select2();
		$('#text_brand_id').select2();
		$('#text_group').select2();
		$('#text_group_unit').select2();
		$('#text_vendor_id').select2();
		$('#text_subcategory_id').select2();
		$('#txt_elements').select2();
		$('#txt_Attributes').select2();
		$('.select2').select2();

		if($('.elements_attributes').length){
			$('.elements_attributes').trigger('change');
		}
		
		
});

//product validation form
$("form[id='product-form']").validate(
	{
		// Specify validation rules
		ignore: ".ignore",
		
		rules:
		{
			text_product_name:
			{
				required: true,
			},
			text_product_code:
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
			text_brand_id:
			{
				required: true
			},
			text_category_id:
			{
				required: true
			},
			text_group:
			{
				required: true
			},
			text_group_unit:
			{
				required: true
			},
			text_reach_in:
			{
				required: true
			},
			text_net_price:
			{
				required: true,
            	number: true
			}
		},
		// Specify validation error messages
		messages: {
			text_product_name		: {required: "Please enter product name"},
			text_product_code		: {required: "Please enter product code"},
			text_short_description	: {required: "Please enter short description"},
			text_description		: {required: "Please enter description"},
			text_brand_id			: {required: "Please select Brand"},
			text_category_id		: {required: "Please select category"},
			text_group			: {required: "Please select Group"},
			text_group_unit			: {required: "Please select Group Unit"},
			text_reach_in			: {required: "Please enter Reach in"},
			text_net_price				: {
										required: "Please enter Net price",
										number: "Please enter Number"
										},
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


//Update Product Status
function updateProduct(id,is_active)
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
						"url" : base_url + "Admin/Product/updateStatus",
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
								Swal.fire("Success", "Successsfully "+status1+"d Product.", "success");
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

function deleteImage(element_id,image_name,product_id)
{
		Swal.fire(
		{
			title: 'Are you sure you want to Remove this Image?',
			text: "You won't be able to revert this!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, Remove it!'
		}).then((result) =>
		{
			if (result.value)
			{
				$.ajax(
					{
						url:  base_url+"Admin/Product/deleteProductImage",
		                type:'post',
		                dataType: 'json',
						data:
		                {
		                    "image_name" : image_name,
		                    "product_images" : $("#old_image").val(),
		                    "product_id" : product_id
		                },
						success: function (data)
						{
							if(data.status == "success")
		                    {
		                        $("#"+element_id).remove();
		                        $("#old_image").val(data.new_product_images);
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

function bindChildcategoryByparent(id){
	showLoader();
	var second_last_child = $('#txt_second_last_child').val();
	var product_id = $('#text_product_id').val();

	$.ajax({
		url : base_url  + "Admin/Product/getCategoryValue",
		type : 'POST',
		datatype :'json',
		data: {'id' : id,'second_last_child':second_last_child,'product_id':product_id},
		success: function(json) {
			hideLoader();
			if(json['success'] == "success"){
				var category_option 		= json['category_option'];
				var breadcrumbs 			= json['breadcrumbs'];
				
				$('#text_subcategory_id').html('');
				$('#text_subcategory_id').html(category_option);
				$('ul#category_breadcrumb').html(breadcrumbs);
				
			}else{
				var category_option = json['category_option'];
				var breadcrumbs 			= json['breadcrumbs'];
				$('ul#category_breadcrumb').html(breadcrumbs);
				//Swal.fire("Error", "No Data Found!!", "error");
			}
		}
	});	
}
function bindElements(id){
	var product_id = $('#text_product_id').val();
	//$('#divElements').html('');
	$.ajax({
		url : base_url  + "Admin/Product/getElements",
		type : 'POST',
		datatype :'json',
		data: {'id' : id,'product_id':product_id},
		success: function(json) {
			if(json['success'] == "success"){
				var elements_html = json['elements_html'];			
					
				$('#divElements').html(elements_html);	
				$('.qty-ele-attr').addClass('d-none');
				if($('.elements_attributes').length){
					$('.qty-ele-attr').removeClass('d-none');
				}
				$('.select2').select2();
				
			}else{
				Swal.fire("Error", "No Data Found!!", "error");
			}
		}
	});	
}

$('#text_category_id').on('change', function(){
	var id 			= $(this).val();
	var cat_name 	=  $(this).find('option:selected').text();
	
	if(id != "" && id != null && id != undefined){
		bindChildcategoryByparent(id);
		bindElements(id);
		
		$('ul#category_breadcrumb').html('');
		var cat_li = '<li class="atbd-breadcrumb__item" data-id='+ id +'><a href="javascript:void(0)" class="mr-1">'+ cat_name +': </a></li>';
		// $('#category_breadcrumb').append(cat_li);
		// $('#category_breadcrumb').removeClass('d-none');
	}
});

$('#text_subcategory_id').on('change', function(){
	var id 		= $(this).val();
	var cat_name =  $(this).find('option:selected').text();
	if(id != "" && id != null && id != undefined){
		bindChildcategoryByparent(id); 
		if($('ul#category_breadcrumb li').length < 1){
			var cat_li = '<li class="atbd-breadcrumb__item" data-id='+ id +'><a href="javascript:void(0)" class="mr-1">'+ cat_name +': </a></li>';
		}else{
			var cat_li = '<li class="atbd-breadcrumb__item" data-id='+ id +'><a href="javascript:void(0)">'+ cat_name +'</a><span class="breadcrumb__seperator"><span class="la la-angle-right"></span></span></li>';
		}	

		// $('#category_breadcrumb').append(cat_li);
		// $('#category_breadcrumb').removeClass('d-none');
	}
});
// }).change();



/*** calculate discount price */
$('.cal-discount').on('change', function(){
	var mrp_price	 	= $('#text_mrp_price').val();
	var discount 		= $('#text_discount').val();
	console.log(discount);
	
	if(discount != "" && discount != NaN && discount != undefined){
		if(discount > 0){
			var discount_rs = (parseFloat(mrp_price) * parseFloat(discount)) / 100; console.log(discount);
			var final_price = parseFloat(mrp_price) - discount_rs;
			$('#text_net_price').val(final_price);
		}else{
			$('#text_net_price').val(mrp_price);
			Swal.fire("warning", "Discount not to be 0!!", "warning");
		}		
	}
	else{
		$('#text_net_price').val(mrp_price);
	}
});


/*** hide /show Quantity input */
$(document).delegate('.elements_attributes', 'change', function() {
	var ele_name = $(this).data('name');
	if(ele_name.toLowerCase() == "quantity"){
		$('.qty-ele-attr').removeClass('d-none');
	}else{
		$('.qty-ele-attr').addClass('d-none');
	}
});
