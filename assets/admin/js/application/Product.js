//Load Product Datatable
jQuery(document).ready(function()
{
	table_name = 'productDatatable';
	url = base_url + "Admin/Product/bindDataTable";
	target = [0,6];

	toDataTable(table_name,url,target,true);

	if($('#parentproductDatatable').length){
		table_name = 'parentproductDatatable';
		url = base_url + "Admin/Product/bindparentProductDataTable";
		target = [0,5];
		toDataTable(table_name,url,target,true);
	}		
		
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

	new FroalaEditor('#text_warranty_description ,#txt_policy_description', {
			//imageUploadURL:  base_url+"Admin/Product/uploadImage",
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
				//maxlength: 100
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
			text_vendor_id:
			{
				required: true
			},			
			text_net_price:
			{
				required: true,
            	number: true
			},
			text_unit_price:
			{
				required: true,
            	number: true
			},
			text_stock:
			{
				required: true,
            	number: true
			},
			text_stock_limit:
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
			text_vendor_id			: {required: "Please select vendor"},
			text_category_id		: {required: "Please select category"},			
			text_net_price			: { required: "Please enter Net price", number: "Please enter Number" },
			text_unit_price			: { required: "Please enter Unit price", number: "Please enter Number" },
			text_stock				: { required: "Please enter stock",number: "Please enter Number" },
			text_stock_limit		: { required: "Please enter stock limit",number: "Please enter Number" },
		},
		
		errorPlacement: function(error, element) {
			if (element.hasClass("select2")){
        		error.insertAfter(element.parent());
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
//Update Product Status
function duplicateProduct(id)
{
	Swal.fire(
		{
			title: 'Want to DUPLICATE Record ?',
			text: "You won't be able to revert this!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, DUPLICATE it!'
		}).then((result) =>
		{
			if (result.value)
			{
				
				$.ajax(
					{
						"url" : base_url + "Admin/Product/duplicateRecords",
						type: 'post',
						dataType: 'json',
						data: {id : id},
						success: function (data)
						{
							if(data.status=="success")
							{
								Swal.fire("Success", "Successsfully Added ", "success");
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
				var category_option 		= json['category_option'];
				var breadcrumbs 			= json['breadcrumbs'];
				//$('#text_subcategory_id').html(category_option);
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

/*** calculate selling price and mrp */

function calculateSellingprice(){
	var unit_price 		= $('#text_unit_price').val();
	var gst 			= $('#text_tax').val();
	var discount 		= $('#text_discount').val();
	var mrp_price		= 0
	var selling_price	= 0

	if(gst != "" && gst != NaN && gst != undefined && gst > 0){
		var gst_rs = (parseFloat(unit_price) * parseFloat(gst)) / 100;	
		mrp_price = (parseFloat(unit_price) + parseFloat(gst_rs)); 
		$('#text_mrp_price').val(Math.round(mrp_price));
		$('#text_net_price').val(Math.round(mrp_price));
	}else{
		$('#text_mrp_price').val(unit_price);
		$('#text_net_price').val(unit_price);
		mrp_price = $('#text_mrp_price').val();
	}

	if(discount != "" && discount != NaN && discount != undefined && discount > 0){
		var discount_rs = (parseFloat(mrp_price) * parseFloat(discount)) / 100;	console.log(discount_rs);
		selling_price = parseFloat(mrp_price) - discount_rs;		
		selling_price = Math.round(selling_price);
		$('#text_net_price').val(selling_price);	
	}

}


$('.cal-discount').on('change', function(){
	calculateSellingprice();
	
});

/** calculate Gst on  */
$('#text_tax, #text_unit_price').on('change', function(){
	calculateSellingprice();
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

//product validation form
$("form[id='parent-product-form']").validate(
	{
		// Specify validation rules
		ignore: ".ignore",
		
		rules:
		{
		},
		// Specify validation error messages
		messages: {
			text_parent_product_name		: {required: "Please enter product parent name"},
		},
		
		errorPlacement: function(error, element) {
			if (element.hasClass("select2")){
        		error.insertAfter(element.parent());
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

$('#all_product_list').on('change', function(){
	var product_id 			= $('#all_product_list').val();
	var parent_product_id 	= $('#text_parent_product_id').val();
	showLoader();
	$.ajax({
		url : base_url  + "Admin/Product/addVariantToProduct",
		type : 'POST',
		datatype :'json',
		data: {'parent_product_id':parent_product_id,'product_id':product_id},
		success: function(json) {
			hideLoader();
			if(json['success'] == "success"){
				$('#all_product_list').html('');
				var varientProduct  = json['varientProduct'];
				var product_list  = json['product_list'];
				$('.product-variant-form .table-responsive').html('');
				$('.product-variant-form .table-responsive').html(varientProduct);
				$('#all_product_list').html(product_list);
			}else{
				
			}
		}
	});	

});

function removeVarientProduct(product_id){
	Swal.fire(
		{
			title: 'Want to REMOVE Product ?',
			text: "You won't be able to revert this!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, REMOVE it!'
		}).then((result) =>
		{
			if (result.value)
			{				
				var parent_product_id 	= $('#text_parent_product_id').val();
				$.ajax(
					{
						"url" : base_url + "Admin/Product/removeVarientProduct",
						type: 'post',
						dataType: 'json',
						data: {product_id : product_id,parent_product_id:parent_product_id},
						success: function (json)
						{
							if(json['success'] == "success"){
								$('#all_product_list').html('');
								var varientProduct  = json['varientProduct'];
								var product_list  = json['product_list'];
								$('.product-variant-form .table-responsive').html('');
								$('.product-variant-form .table-responsive').html(varientProduct);
								$('#all_product_list').html(product_list);
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
