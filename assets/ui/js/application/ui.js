/*** Toast Success /Error */

function toast_success(message){
	Toastify({
			text: message,
			className: "toast-success",
			duration: 1500,
			close:true,
			gravity:"top",
			newWindow: true,
		}).showToast();
}

function toast_error(message){
	Toastify({
			text: message,
			className: "toast-error",
			duration: 2000,
			close:true,
		}).showToast();
}

/*** Toast Success */

/*** money formate */

function moneyformate(num){
	y=num.toString();
	var lastThree1 = y.substring(y.length-3);
	var otherNumbers1 = y.substring(0,y.length-3);
	if(otherNumbers1 != '')
		lastThree1 = ',' + lastThree1;
	var result = otherNumbers1.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree1;
	return result;
  }

/**** valiadte for email and phone no */
jQuery.validator.addMethod("lettersonly", function(value, element) {
	return this.optional(element) || /^[a-z  .()/-]+$/i.test(value);
}, "Please enter charecter only");

jQuery.validator.addMethod(
	"phone",
	function (phone_number, element) {
		phone_number = phone_number.replace(/\s+/g, "");
		return (
			this.optional(element) ||
			(phone_number.length > 9 && phone_number.length < 12)
		);
	},
	"Please enter valid phone number"
);

jQuery.validator.addMethod(
	"validate_email",
	function (value, element) {
		if (
			/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(
				value
			)
		) {
			return true;
		} else {
			return false;
		}
	},
	"Account Email can contain only ASCII characters. This must be in the format of something@email.com"
);

jQuery.validator.addMethod("validate_ifsc", function(value, element) {

	if (/[A-Z]{4}[0][A-Z0-9]{6}$/.test(value)) {
		return true;
	} else {
		return false;
	}
}, "Please Enter Valid IFSC Code");

$(function () {
	$('[data-toggle="popover"]').popover({html : true});
	$("#price_range_slider").slider({
		range: true,
		min: 0,
		max: 10000,
		values: [0, 10000],
		slide: function (event, ui) {
			$("#price_range_lbl").text(
				"RS." + ui.values[0] + " - RS." + ui.values[1]
			);
			console.log(ui.values[0]);
			// $('#startPrice').val(ui.values[0]);
			// $('#endPrice').val(ui.values[1]);
		},
	});
	$("#price_range_lbl").text(
		"RS." +
			$("#price_range_slider").slider("values", 0) +
			" - RS." +
			$("#price_range_slider").slider("values", 1)
	);
	// $('#startPrice').val($( "#slider-range" ).slider( "values", 0 ));
	// $('#endPrice').val($( "#slider-range" ).slider( "values", 1 ));
});

/*** CREATE PRODUCT GRID*/
function createProductGrid(result, sno, whishList) {
	sno = Number(sno);

	$("#productList").empty();
	for (index in result) {
		var id 					= result[index].product_id;
		var product_name 		= result[index].product_name;
		var short_code 			= result[index].short_code;
		var content 			= result[index].short_description;
		var short_description 	= content.substr(0, 60) + " ...";
		var price 				= result[index].net_price;
		var discount 			= result[index].discount;
		var mrp_price 			= result[index].mrp_price;
		var variants 			= result[index].variants;
		
		
	
		sno += 1;
		var wish_class 				= "";
		var mrp 					= "";
		var variant_list 			= "";
		var array1  = ""
		var product_image 				= result[index].cover_img;
		var product_detail_url 			= base_url + "product-detail/" + short_code +"?pid="+id;
		if (product_image) {
			var img_arr 		= product_image.split("|");
			var img_url 		= base_url + PRODUCT_IMAGE_PATH + id + "/" + product_image;
		} else {
			var img_url 		= base_url + PRODUCT_IMAGE_PATH + id + "/" + product_image;
		}
		if (whishList.length > 0) {
			if ($.inArray(id, whishList) != -1) {
				wish_class 		= "wis_added";
			}
		}

		if(discount != "" && discount != null && discount >0){
			mrp = '  <i class="fa fa-inr"></i><del>'+moneyformate(mrp_price)+'</del>'
		}
		var list = '';
		$.each( variants, function( i, val ) {
			//console.log(i +':'+ val);

			list += '<p class="truncate mg__0 w__100 fs__10">'+val+'</p>';
			
		 });

		var div =
			'<div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1"><div class="product-inner pr"><div class="product-image product__card pr oh lazyload"></span><a class="d-block" href="' +
			product_detail_url +
			'" target="_blank"><div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="' +
			img_url +
			'"></div></a><div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0"><div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="' +
			img_url +
			'"></div></div><div class="nt_add_w ts__03 pa ' +
			wish_class +
			'"><a href="javascript:void(0)" class="wishlistadd cb chp ttip_nt tooltip_right" data-pid="'+ id +'" onclick="additemToWishlost('+ id +')"><span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a></div><div class="product-attr pa ts__03 cw op__0 tc">'+list+'</div></div><div class="product-info mt__15"><h3 class="product-title pr fs__14 mg__0 fwm"><a class="cd chp" href="' +
			product_detail_url +
			'">' +
			product_name +
			'</a></h3><span class="price dib mb__5"><i class="fa fa-inr cr"><ins>' +
			moneyformate(price) + '</ins></i>' + mrp +
			"</span></div></div></div>";

		$("#productList").append(div);
	}
}

function filter__(pagno){
	var filter_category = $('#filterCategoryId').val();
	var filter_color 	= $('#filterColorId').val();
	var filter_brand 	= $('#filterBrandId').val();
	// var min_price 	= $('#min_price').val();
	// var max_price 	= $('#max_price').val();
	
	$.ajax(
		{
			"url" : base_url+"Home/applyFilter/"+pagno,
			type: 'post',
			dataType: 'json',
			data:
			{
				category 		: filter_category,
				color 			: filter_color,
				brand 			: filter_brand,
				// min_price 	: min_price,
				// max_price 	: max_price,
				
			},
			success: function (data)
			{
				$('#pagination').html(data.pagination);
				var totalrecords 		= data.result.length;
				$('.result_count span').text(totalrecords);
				var whishList 			= []
				
				if (data.whish_product.length >= 1) {
					whishList = data.whish_product;
				}
				
				/** CATEGORY FILTER TAG */
				// if(filter_category == null || filter_category == '')
				// {	
				// 	$('.category_tag').addClass('d-none');
				// }else{
				// 	$('.category_tag').remove();
				// 	var cat_filter = '<a href="javascript:void(0)" class="clear_filter dib category_tag">'+data.category_name+'</a>';					
				// 	$('.result_clear').append(cat_filter);
				// }

				/*** COLOR FILTER TAG */
				if(filter_color == null || filter_color == '')
				{	
					$('.color_tag').addClass('d-none');
				}else{
					$('.color_tag').remove();
					var color_filter = '<a href="javascript:void(0)" class="clear_filter dib color_tag">'+data.color_name+'</a>';					
					$('.result_clear').append(color_filter);
				}

				/*** BRAND FILTER TAG */
				if(filter_brand == null || filter_brand == '')
				{	
					$('.brand_tag').addClass('d-none');
				}else{
					$('.brand_tag').remove();
					var brand_filter = '<a href="javascript:void(0)" class="clear_filter dib brand_tag">'+data.brand_name+'</a>';					
					$('.result_clear').append(brand_filter);
				}
				
				if(data.result.length >= 1 ){
					createProductGrid(data.result,data.sno,whishList);
				}
				else
				{
					$('#productList').empty();
					var div = '<h5>No Product found</h5>';
					$('#productList').append(div);	
				}
			},
			error: function (textStatus, errorThrown)
			{
				console.log(textStatus);
			}
		});
}


$(document).ready(function () {
	$("#pagination").on("click", "a", function (e) {
		e.preventDefault();
		var pageno = $(this).attr("data-ci-pagination-page");
		loadProducts(pageno);
	});

	loadProducts(0);

	function loadProducts(pagno) {
		$.ajax({
			url: base_url + "Home/loadProducts/" + pagno,
			type: "get",
			dataType: "json",
			success: function (response) {
				$("#pagination").html(response.pagination);
				if (response.result.length >= 1) {
					var whishList = [];
					if (response.whish_product.length >= 1) {
						whishList = response.whish_product;
					}
					$('.result_count span').text(response.result.length);
					createProductGrid(response.result, response.row, whishList);
				} else {
					$("#productList").empty();
					var div = "<h5 class='text-center'>No Product found</h5>";
					$("#productList").append(div);
				}
			},
		});
	}

	
		
	/*** auto fill attributes name with selected value */
	if ($(".product_detail_page li.is-selected").length) {
		$(".product_detail_page li.is-selected").each(function (index) {
			var attrname = $(this).data("escape");
			$(this).parent().parent().find(".nt_name_current").text(attrname);
		});
	}
	
	$("#txtcountry").select2({dropdownParent: $('#customerAddressModal .modal-content'), width:"100%"});
	$("#txtstate").select2({dropdownParent: $('#customerAddressModal .modal-content'), width:"100%"});

	/*** PRICE SLIDER */

	
});


/*** FILTER BY CATEGORY */
function category_filter(val)
{
	var filter_category = val;
	$('#filterCategoryId').val(filter_category);
	$('.result_clear').removeClass('dn');
	$('.clear-all-filter').removeClass('dn');
	
	filter(0);
}

/*** FILTER BY COLOR */
function color_filter(val)
{
	var filter_color = val;
	$('#filterColorId').val(filter_color);
	$('.result_clear').removeClass('dn');	
	$('.clear-all-filter').removeClass('dn');
	filter(0);
}

/*** FILTER BY BARND */
function brand_filter(val)
{
	var filter_brand = val;
	$('#filterBrandId').val(filter_brand);
	$('.result_clear').removeClass('dn');	
	$('.clear-all-filter').removeClass('dn');
	filter(0);
}

/***CLEARE ALL FILTERS */
$(".clear-all-filter").on("click", function (e) {
	var shop = $(location).attr("href").split('/').pop();
	if(shop == "shop"){
		$('#filterCategoryId').val('');
	}	
	$('#filterColorId').val('');
	$('#filterBrandId').val('');
	$('.clear-all-filter').addClass('dn');
	$('.price_steps_slider')[0].noUiSlider.reset();
	filter(0);
});

/***CLEARE CATEGORY FILTERS */
$(document).delegate('.category_tag', 'click', function() {
	// $('#filterCategoryId').val('');
	filter(0);	
});

/***CLEARE COLOR FILTERS */
$(document).delegate('.color_tag', 'click', function() {
	$('#filterColorId').val('');
	filter(0);	
});
/***CLEARE BRAND FILTERS */
$(document).delegate('.brand_tag', 'click', function() {
	$('#filterBrandId').val('');
	filter(0);	
});
/***CLEARE COLOR FILTERS */
function filterSortBy(value){
	$('#filtersortby').val(value);
	filter(0);
}


/*** add to cart item */
$(".btnAddToCart").on("click", function (e) {
	var product_id = $(".product_detail_page").data("pid");
	var quantity = 1;
	var eleArray = {};
	var error 	 = 0
	$('.product-variants').each(function(index, element) {
		var elemets = $(this).data('elements');
		if($(this).find('li.is-selected').length){
			var value 	= $(this).find('li.is-selected').data('attrid');
			eleArray[elemets] = value;
		}else{
			error++;			
			toast_error('Please select '+ $(this).data('elename'));
		}		
	});
	if(error == 0){
		$.ajax({
			url: base_url + "Home/addtocart",
			type: "POST",
			datatype: "json",
			data: { quantity: quantity, product_id: product_id ,eleArray:eleArray },
			success: function (json) {
				if (json["success"] == "success") {
					toast_success(json['message']);
					if (json["totalCart"]) {
						$(".icon_cart .tcount").text(json["totalCart"]);
						var cartitem = '<div class="mini_cart_item js_cart_item flex al_center pr oh"><div class="ld_cart_bar"></div></div>';
						$(cartitem).appendTo('div.cart_product_list');
						location.reload();
					}
				} else {
					$("#nt_login_canvas").addClass("act_opened");
					$(".mask-overlay").addClass("mask_opened");
					$("html").addClass("hside_opened");
					$("body").addClass("pside_opened");
				}
			},
		});
	}
	
});

/*** add to whishList item */
// $(document).delegate('.wishlistadd', 'click', function() {
	$(".wishlistadd").on("click", function (e) {
	var product_id 	= $(this).data("pid");
	additemToWishlost(product_id);
});

function additemToWishlost(product_id){
	var returnval = '';
	$.ajax({
		url: base_url + "Home/addtowhisList",
		type: "POST",
		datatype: "json",
		data: { product_id: product_id },
		success: function (json) {
			if (json["success"] == "success") {
				if (json["totalWishList"]) {
					toast_success(json['message']);
					$(".icon_like .total-whishlist").text(json["totalWishList"]);
					returnval = true;
				}
			}else if(json["error"] == "error") {
				toast_success(json['message']);
				returnval = false;
			} 
			else if(json["warning"] == "warning") {
				toast_success(json['message']);				
				$('.nt_add_w').removeClass("wis_added");
				$('#nt_login_canvas').addClass('act_opened');
				$(".mask-overlay").addClass('mask_opened');
				$("html").addClass("hside_opened");
				$("body").addClass("pside_opened");
				returnval = false;
				
			}
		},
	});
	return returnval;
}

$(".btnToLogin").on("click", function (e) {
	e.preventDefault();
	$("#nt_cart_canvas").removeClass("act_opened");
	$("#nt_login_canvas").addClass("act_opened");
});

//login validation form
$("form[id='contact-form']").validate({
	// Specify validation rules
	rules: {
		ct_name: {
			required: true,
			//email:true
		},
		ct_email: {
			required: true,
		},
		ct_phone: {
			required: true,
		},
		ct_message: {
			required: true,
		},
	},
	// Specify validation error messages
	messages: {
		ct_name: "Please enter a name",
		ct_email: { required: "Please enter email" },
		ct_phone: { required: "Please enter phone number" },
		ct_message: { required: "Please enter message" },
	},
	submitHandler: function (form) {
		form.submit();
	},
});

$("form[id='customer-login']").validate({
	// Specify validation rules
	rules: {
		txt_cust_email_phone: {
			required: true,
			//validate_email:true
		},
		txt_cust_password: {
			required: true,
		},
	},
	// Specify validation error messages
	messages: {
		txt_cust_email_phone: "Please enter a email/phone",
		txt_cust_password: { required: "Please enter password" },
	},
	submitHandler: function (form) {
		// form.submit();
		$.ajax({
			url: $(form).attr("action"),
			type: $(form).attr("method"),
			data: new FormData($(form)[0]),
			async: false,
			cache: false,
			contentType: false,
			processData: false,
			datatype: "json",
			success: function (json) {				
				if(json["success"]) {	
					toast_success(json["success"]);	
					setTimeout(function() {
						$("#customer-login")[0].reset();
					if (json["redirect"]) {
						location.href = json["redirect"];
					}	
					}, 100);								
				}
				if(json["error"]) {
					toast_error(json["error"]);
				}
			},
		});
	},
});

// Forgot password form
$("form[id='RecoverForm']").validate({
	// Specify validation rules
	rules: {
		recoverEmail: {
			required: true,
			//email:true
		},
	},
	// Specify validation error messages
	messages: {
		recoverEmail: "Please enter a email",
	},
	submitHandler: function (form) {
		form.submit();
	},
});

// Forgot password form
$("form[id='RegisterForm']").validate({
	// Specify validation rules
	rules: {
		name: {
			required: true,
		},
		email: {
			required: true,
			validate_email: true,
		},
		contact_no: {
			required: true,
			phone: true,
		},
		password: {
			required: true,
			//max: 8,
		},
		gender: {
			required: true,
		},
	},
	// Specify validation error messages
	messages: {
		name: "Please enter a name",
		email: { required: "Please enter email" },
		contact_no: { required: "Please enter contact no" },
		password: { required: "Please enter password" },
		gender: { required: "Please select gender" },
	},
	errorPlacement: function (error, element) {
		if (element.attr("name") == "gender")
			error.insertAfter(
				element.parent().parent().find(".form-check-inline").last()
			);
		else if (
			element.parent().hasClass("vd_checkbox") ||
			element.parent().hasClass("vd_radio")
		) {
			element.parent().append(error);
		} else if (element.parent().hasClass("vd_input-wrapper")) {
			error.insertAfter(element.parent());
		} else {
			error.insertAfter(element);
		}
	},
	submitHandler: function (form) {
		// form.submit();
		$.ajax({
			url: $(form).attr("action"),
			type: $(form).attr("method"),
			data: new FormData($(form)[0]),
			async: false,
			cache: false,
			contentType: false,
			processData: false,
			datatype: "json",
			success: function (json) {
				if (json["success"]) {
					toast_success(json["message"]);					
					if (json['redirect']) {
						setTimeout(function() {
							$("#RegisterForm")[0].reset();
							location.href = json['redirect'];
							$("#RegisterForm").removeClass("is_selected");
							$("#customer-login").addClass("is_selected");
						}, 200);						
					}				
					
				}
				if (json["error"]) {
					toast_error(json["message"]);
				}
			},
		});
	},
});

// change password form
$("form[id='change-password']").validate({
	// Specify validation rules
	rules: {
		current_password: {
			required: true,
		},
		new_password: {
			required: true,
		},
		confrim_password: {
			required: true,
			equalTo: "#new_password",
		},
	},
	// Specify validation error messages
	messages: {
		current_password: "Please enter current password",
		new_password: { required: "Please enter new password" },
		confrim_password: { required: "Please confrim password" },
	},
	submitHandler: function (form) {
		// form.submit();
		$.ajax({
			url: $(form).attr("action"),
			type: $(form).attr("method"),
			data: new FormData($(form)[0]),
			async: false,
			cache: false,
			contentType: false,
			processData: false,
			datatype: "json",
			success: function (json) {
				if (json["success"]) {
					toast_success(json["success"]);	
					setTimeout(function() {
						$("#change-password")[0].reset();
						if (json["redirect"]) {
							location.href = json["redirect"];
						}
						$("#change-password").removeClass("is_selected");
					}, 200);
					
				}
				if (json["error"]) {
					//Swal.fire("Error",json['error'], "error");
				}
			},
		});
	},
});


/*** 	REMOVE ITEM FROM CART LIST */
$nt_js_cart = $(".nt_js_cart");
$nt_js_cart.on("click", ".cart_ac_remove", function (evt) {
	evt.preventDefault();
	evt.stopPropagation();
	
	let $this = $(this),
		$wrapItem = $this.closest(".mini_cart_item"),
		$processTag = $wrapItem.find(".ld_cart_bar");
	product_id = $this.data("pid");

	$.ajax({
		url: base_url + "Home/removeFromCart",
		type: "POST",
		datatype: "json",
		data: { product_id: product_id },
		success: function (json) {
			if (json["success"] == "success") {
				toast_success(json['message']);
				$nt_js_cart.addClass("ld_nt_cl");
				if ($processTag.length) {
					$processTag.addClass("on_star");
					setTimeout(() => {
						$processTag.addClass("on_end");
						$wrapItem.slideUp(300, "swing", function () {
							$(this).remove();
							if (!$nt_js_cart.find(".mini_cart_item").length) {
								$nt_js_cart.find(".mini_cart_items , .mini_cart_tool").remove();
								$nt_js_cart.find(".empty.tc").show(300, "swing", function () {
									$(this).removeClass("dn");
								});
							}
						});
						$nt_js_cart.removeClass("ld_nt_cl");
					}, 500);
					
					setTimeout(() => {
						var subtotal 		= 0;
					
					if($('.mini_cart_item .cart_price').length){
						$('.cart_price ins').each(function(index, element) {
							subtotal = subtotal + parseFloat($(this).text()); 
						});
						var cart_length = $('.mini_cart_item .cart_price').length;
						$('.mini_cart_footer .cart_tot_price').text(subtotal.toFixed(2));
						$(".icon_cart .tcount").text(cart_length);
					}else{
						$('.mini_cart_footer .cart_tot_price').text(subtotal.toFixed(2));
					}
					}, 1000);
					
				} else {
					setTimeout(() => {
						$wrapItem.slideUp(300, "swing", function () {
							$(this).remove();
							if (!$nt_js_cart.find(".mini_cart_item").length) {
								$nt_js_cart.find(".mini_cart_items , .mini_cart_tool").remove();
								$nt_js_cart.find(".empty.tc").show(300, "swing", function () {
									$(this).removeClass("dn");
								});
							}
						});
						$nt_js_cart.removeClass("ld_nt_cl");
					}, 1000);
				}
			} else {
			}
		},
	});
});

/**** REMOVE ITEM, FROM CART PAGE */

$(".mini_cart_tool").on("click", ".cart_ac_remove", function () {
	
	var product_id = $(this).data("pid"); console.log(product_id);
	$.ajax({
		url: base_url + "Home/removeFromCart",
		type: "POST",
		datatype: "json",
		data: { product_id: product_id },
		success: function (json) {
			if (json["success"] == "success") {
				toast_success(json['message']);
				$('.cart_item_'+product_id).remove();
				var subtotal 		= 0;
				if($('.cart-item-price').length){
					$('.cart-item-price').each(function(index, element) {
						subtotal = subtotal + parseFloat($(this).text()); 
						
					});
					$('.cart__footer .total .cart_tot_price').text(subtotal.toFixed(2));
				}else{
					window.location.reload();
				}
				
			}
		}
	});		
});


/*** REMOVE ITEM, FROM WHISHLIST */

$(".nt_add_w").on("click", ".wis_remove", function () {
	
	let $product = $(this).closest(".product"),$this = $(this);
	product_id = $this.data("pid");
	$result = removeWishListitem(product_id);
	if($result){
		$product.addClass("kalles-hidden-product");
		setTimeout(() => $product.remove(), 500);
		if($result == 0){
			var emptywishlist = '<div class="col-12 py-5 text-center"><i class="las la-shopping-bag pr mb__10 fs__55"></i><h5 class="text-center">You have no items in your wishlist. Start adding!</h5></div>';
			$('.wishlist-item-div').append(emptywishlist);
		}
	}
	
});

function removeWishListitem(product_id){
	var totalwishlist = 0
	$.ajax({
		url: base_url + "Home/removeFromWishList",
		type: "POST",
		async: false,
		datatype: "json",
		data: { product_id: product_id },
		success: function (json) {
			if (json["success"] == "success") {
				toast_success(json['message']);
				$(".icon_like .total-whishlist").text(json["totalWishList"]);
				totalwishlist = json["totalWishList"];
			}
			if (json["error"]) {
				totalwishlist = 0;
			}
		},
	});
	return totalwishlist;
}


/*** UPDATE ITEM QUANTITY */

function plusItemQty(product_id)
{
	var item_quantity 	= parseInt($('#item_'+product_id).val()) + 1; console.log(item_quantity);
	var stock 			= parseInt($('#txt_stock_'+product_id).val()); console.log(stock);
	if(item_quantity <= stock){
		updateItemqauantity(product_id,item_quantity);
	}else{
		toast_error('Out of Stock');
		setTimeout(function(){
			$('#item_'+product_id).val(stock);
		}, 500);
		
		
	}
}
function minusItemQty(product_id)
{
	var item_quantity = parseInt($('#item_'+product_id).val()) - 1;
	if(item_quantity < 1){
		item_quantity = parseInt($('#item_'+product_id).val());
	}
	updateItemqauantity(product_id,item_quantity);
}

function updateItemqauantity(product_id,quantity){
	
	$.ajax({
		url: base_url + "Home/updateItemQuantity",
		type: "POST",
		datatype: "json",
		data: { product_id: product_id ,quantity:quantity},
		success: function (json) {
			if (json["success"] == "success") {
				
				var net_price 		= json["net_price"];
				var mrp 			= json["mrp"];
				var total 			= json["total_amt"];
				var subtotal 		= 0;
				
				$('.cart_item_'+product_id+ ' .cart-item-price').html(total);
				$('.cart_item_'+product_id+ ' .cart_price ins').html(net_price);
				$('.cart_item_'+product_id+ ' .cart_price del').html(mrp);
				
				$('.cart-item-price').each(function(index, element) {
					subtotal = subtotal + parseFloat($(this).text()); 
					
				});
				$('.cart__footer .total .cart_tot_price').text(subtotal.toFixed(2));
			}
			if (json["error"]) {
			}
		},
	});
}

/*** open modal for ADD ADDRESS */
$(".btn_add_address").on("click", function (e) {
	$('#customerAddressModal').modal('show');
});

/*** open modal for ADD ADDRESS */
$(".btn-add-newaddress").on("click", function (e) {
	$('#changeAddressModal').modal('hide');
	$('#mangeAddressModal').modal('hide');
	$('#customerAddressModal').modal('show');
});


/*** open modal for CHANGE ADDRESS */
$(".btn-chnage-address").on("click", function (e) {
	$('.change_delivery_address .address-list').html('');
	$.ajax({
		url: base_url + "Home/getCustomerDeliveryAddress",
		type: "POST",
		datatype: "json",
		data: {},
		success: function (json) {
			if (json["success"] == "success") {
				var address_list = json["address_list"];
				
				$('.change_delivery_address .address-list').html(address_list);
			}
			if (json["error"]) {
			}
		},
	});
	$('#changeAddressModal').modal('show');
});


// add customer address
// $("#customer_address").validate();

$("form[id='change_delivery_address']").validate({
	// Specify validation rules
	submitHandler: function (form) {
		$.ajax({
			url: $(form).attr("action"),
			type: $(form).attr("method"),
			data: new FormData($(form)[0]),
			async: false,
			cache: false,
			contentType: false,
			processData: false,
			datatype: "json",
			success: function (json) {
				if (json["success"]) {
					$('#changeAddressModal').modal('hide');
					var url1 = base_url + "checkout";
					location.reload();
					
				}
				if (json["error"]) {
					
				}
			},
		});
	},
});

$("form[id='customer_address']").validate({
	// Specify validation rules
	rules: {
		email:{
			validate_email:true,
		},
		mobile_no:{
			phone:true
		}
		},
	// Specify validation error messages
	messages: {
		fname : "enter first name",
		lname : "enter last name",
		mobile_no : "enter mobile no",
		email : "enter email",
		txtcity : "select city",
		txtstate : "selet state",
		txtcountry : "select country",
		pincode : "enter pincode",
		txtaddressTyperadio : "select address type",
		txtaddress : "enter address",
	},
	errorPlacement: function(error, element) {
		if (element.attr("name") == "txtaddressTyperadio"){
		error.insertAfter( element.parent().parent().find(".form-check-inline").last() );
		}
		else if (element.attr("name") == "txtstate" || element.attr("name") == "txtcountry" ){
			element.parent().append(error);
		}
		else {
			error.insertAfter(element);
		}
	}, 
	submitHandler: function (form) {
		$.ajax({
			url: $(form).attr("action"),
			type: $(form).attr("method"),
			data: new FormData($(form)[0]),
			async: false,
			cache: false,
			contentType: false,
			processData: false,
			datatype: "json",
			success: function (json) {
				if (json["success"]) {
					$('#customerAddressModal').modal('hide');
					toast_success(json['message']);
					location.reload();
				}
				if (json["error"]) {
					
				}
			},
		});
	},
});

$('.btn-continue').on('click',function(){
	if ($('#terms').is(':checked')) {
		$('.billing-section').addClass('dn');
		$('.patyment-section').removeClass('dn');
		$('.btn-continue').addClass('dn');
		$('.btn-place-order').removeClass('dn');
		$('#terms').prop('disabled',true);
	}
	else {
		alert('please check terms & conditions');
	}
	
});

$('.btn-place-order').on('click',function(){
	var payment_type = $('input[name="payment_type"]:checked').val();
	$.ajax({
		url: base_url + "place-order",
		type:'POST',
		data: { payment_type : payment_type },
		datatype: "json",
		success: function (json) {
			if (json["success"]) {
				window.location.href = json["redirect"];
			}
			if (json["error"]) {
				toast_error(json["msg"]);
				if(json["redirect"]){
					window.location.href = json["redirect"];
				}				
			}
		},
	});
});


$("#txtcountry").on("change", function() {
	var countrycode = $(this).find(':selected').data('countrycode');
	$.ajax({
		url: base_url + "get-state-by-country",
		type:'POST',
		data: { countrycode : countrycode },
		datatype: "json",
		success: function (json) {
			if (json["success"]) {
				var option = json['option'];
				$('#txtstate').html(option);
			}
			if (json["error"]) {
				
			}
		},
	});
	
});

/*** open modal for CHANGE ADDRESS */
$(".btn_manage_address").on("click", function (e) 
{
	$('#mangeAddressModal .all-address-list').html('');
	bindAllAddress();
	$('#mangeAddressModal').modal('show');
});


function bindAllAddress(){
	
	$.ajax({
		url: base_url + "Home/getCustomerAllAddress",
		type: "POST",
		datatype: "json",
		data: {},
		success: function (json) {
			if (json["success"] == "success") {
				var address_list = json["address_list"];
				
				$('#mangeAddressModal .all-address-list').html(address_list);
			}
			else if (json["error"]) {
				$('#mangeAddressModal .all-address-list').html('<h5 class="text-center">No Address Found !</h5>');
			}
		},
	});
}

/***  GET ADDRESS DATA ***/
$(".all-address-list").on("click", ".btneditaddress", function () {
	var address_id = $(this).data('id'); 
	$.ajax({
		url: base_url + "Home/getAddressData",
		type: "POST",
		datatype: "json",
		data: { address_id : address_id} ,
		success: function (json) {
			if (json["success"] == "success") {
				$('#customer_address')[0].reset();
				var result = json['result'];
				var fname  = result[0]['first_name'];
				var lname  = result[0]['last_name'];
				var email  = result[0]['email'];
				var mobile  = result[0]['mobile'];
				var address  = result[0]['address'];
				var city  = result[0]['city'];
				var state  = result[0]['state'];
				var pincode  = result[0]['pincode'];
				var country  = result[0]['country'];
				var address_type  = result[0]['address_type'];
				var set_default  = result[0]['set_default'];
				
				$('#txtaddressid').val(address_id);
				$('#fname').val(fname);
				$('#lname').val(lname);
				$('#mobile_no').val(mobile);
				$('#email').val(email);
				$('#txtaddress').text(address);
				$('#txtcity').val(city);
				$('#pincode').val(pincode);
				$('#txtcountry').val(country);
				$('#txtcountry').trigger('change');
				setTimeout(function(){
					$('#txtstate').val(state);
					$('#txtstate').trigger('change');
				}, 1500);
				
				$("input[name=txtaddressTyperadio][value='"+address_type+"']").prop('checked', true);
				if(set_default == 1){
					$("input[name=txtdefaultaddress][value='"+set_default+"']").prop('checked', true);
				}
				$('#mangeAddressModal').modal('hide');
				$('#customerAddressModal').modal('show');
			}
			if (json["error"]) {
			}
		},
	});
});

$(".all-address-list").on("click", ".btremoveaddress", function () {
	var address_id = $(this).data('id'); 
	if (confirm('Are you sure you want to delete this address?')) {
		$.ajax({
			url: base_url + "Home/deleteAddress",
			type: "POST",
			datatype: "json",
			data: { address_id : address_id} ,
			success: function (json) {
				if (json["success"] == "success") {
					
					bindAllAddress();
				}
				if (json["error"]) {
				}
			},
		});
	}	
});

/*** FILTER ORDER BY YEAR */
$(".myorder-page").on("click", ".btnfilteryear", function () {
	var filterYear = $(this).data('label');
	$.ajax({
		url: base_url + "Home/getFilterOrderByYear",
		type: "POST",
		datatype: "json",
		data: { filterYear : filterYear} ,
		success: function (json) {
			if (json["success"] == "success") {
				var orderHtml = json['orderHtml'];
				$(".myorder-page .order-list").html('');
				$(".myorder-page .order-list").html(orderHtml);
			}
			if (json["error"]) {
				$(".myorder-page .order-list").html('<div><h5 class="text-center">Sorry, No Results Found !!</h5></div>');
			}
		},
	});
});

/*** OPEN MODAL FOR RETURN /REPLACE ORDER */
$(".btn-return-replace").on("click", function () {
	var title 		= $(this).data('btnname');
	var orderid 	= $(this).data('orderid');
	var productid 	= $(this).data('productid');
	
	$('#txt_product_id').val(productid);
	$('#txt_order_id').val(orderid);
	if(title == "return"){
		var action = base_url + "submit-return";
		$('#return-replace-request-form').attr("action",action);
		$('#refund_div').show();
		$("#refund_div input").prop('required',true);
	}else{
		var action = base_url + 'submit-replace';
		$('#return-replace-request-form').attr("action",action);
		$("#refund_div input").prop('required',false);
		$('#refund_div').hide();
	}

	$.ajax({
		url: base_url + "Home/getOrderedProductDetail",
		type: "POST",
		datatype: "json",
		data: { orderid : orderid,productid:productid},		
		success: function (json){
			if (json["success"] == "success") {
				var result 				= json['result'];
				var total_amt 			= result[0]['total_amt'];
				var shipping_address 	= result[0]['shipping_address'];
				var order_number 		= result[0]['order_number'];
				$('.dilivered-address').html(shipping_address);
				$('.product-price').html('<i class="fa fa-inr"></i> '+total_amt+'');
			}
			if (json["error"]) {

			}
		},
	});
	
	$('#requestTitle').text(title +' Request ');
	$('#returnRequestModal').find('label.error').remove();
	$('#returnRequestModal').modal('show');
});

/****** FORM SUBMIT : RETURN - REPLACE REQUEST*/
$("form[id='return-replace-request-form']").validate({
	// Specify validation rules
	rules: {
		txt_ifsc:{
			validate_ifsc:true,
			maxlength: 11,				
			minlength: 11,	
		},
		txt_acc_no:{
			number:true,
			maxlength: 11,				
			minlength: 11,	
		},
		txt_account_name:{
			lettersonly :true,
		},
		txt_phone_no:{
			phone :true,
		},
	},
	// Specify validation error messages
	messages: {
		txt_reason: 		{required: "Please select reason" },
		txt_ifsc: 			{required: "Please enter IFSC code"},
		txt_acc_no: 		{required:"Please enter account no"},
		txt_account_name: 	{required:"Please enter card holder name"},
		txt_phone_no: 		{required:"Please enter phone no"},
	},
	submitHandler: function (form) {
		// form.submit();
		$.ajax({
			url: $(form).attr("action"),
			type: $(form).attr("method"),
			data: new FormData($(form)[0]),
			async: false,
			cache: false,
			contentType: false,
			processData: false,
			datatype: "json",
			success: function (json) {				
				if(json["success"]) {	
					toast_success(json["msg"]);	
					location.reload();			
				}
				if(json["error"]) {
					toast_error(json["error"]);
				}
				$('#returnRequestModal').modal('hide');
			},
		});
	},
});


/*** OPEN MODAL FOR RETURN /REPLACE ORDER */
$(".product-varient").on("click", function () {
	var attrid 					= $(this).data('attrid');
	var eleid 					= $(this).data('eleid');
	var variant_code 			= $('#txt_variant_code').val();
	if(variant_code != "" && variant_code != null && variant_code != undefined){

		var eleArray = {};
		var error 	 = 0
		
		$('.product-variants').each(function(index, element) {
			var elemets = $(this).data('elements');
			if($(this).find('li.is-selected').length){
				var attrid1 	= $(this).find('li.is-selected').data('attrid');
				var eleid1 	= $(this).find('li.is-selected').data('eleid');
				if(eleid1 != eleid){
					eleArray[eleid1] = attrid1;
				}
			}else{
				error++;			
				
			}		
		});
		
		$.ajax({
			url: base_url + "Home/getDataFromVarientCode",
			type: "POST",
			datatype: "json",
			data: { attrid : attrid,eleid:eleid,variant_code:variant_code,selectedElements:eleArray},		
			success: function (json){
				if (json["success"] == "success") {
					var redirect_url = json["redirect_url"];				
					location.href=redirect_url;				
				}
				if (json["error"]) {

				}
			},
		});
	}
});

function changeurl(url)
{
 var new_url=url;
 window.history.pushState("data","Title",new_url);

}