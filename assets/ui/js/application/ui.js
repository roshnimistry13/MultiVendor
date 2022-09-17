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
			duration: 1000,
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

$(function () {
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
		var discount 				= result[index].discount;
		var mrp_price 			= result[index].mrp_price;
		sno += 1;
		var wish_class 			= "";
		var mrp 			= "";

		var product_image 				= result[index].cover_img;
		var product_detail_url 			= base_url + "product-detail/" + short_code;
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

		var div =
			'<div class="col-lg-3 col-md-3 col-6 pr_animated done mt__30 pr_grid_item product nt_pr desgin__1"><div class="product-inner pr"><div class="product-image product__card pr oh lazyload"></span><a class="d-block" href="' +
			product_detail_url +
			'"><div class="pr_lazy_img main-img nt_img_ratio nt_bg_lz lazyload padding-top__127_571" data-bgset="' +
			img_url +
			'"></div></a><div class="hover_img pa pe_none t__0 l__0 r__0 b__0 op__0"><div class="pr_lazy_img back-img pa nt_bg_lz lazyload padding-top__127_571" data-bgset="' +
			img_url +
			'"></div></div><div class="nt_add_w ts__03 pa ' +
			wish_class +
			'"><a href="#" class="wishlistadd cb chp ttip_nt tooltip_right"><span class="tt_txt">Add to Wishlist</span><i class="facl facl-heart-o"></i></a></div><div class="hover_button op__0 tc pa flex column ts__03"><a href="#" class="pr pr_atc cd br__40 bgw tc dib js__qs cb chp ttip_nt tooltip_top_left"><span class="tt_txt">Quick Shop</span><i class="iccl iccl-cart"></i><span>Quick Shop</span></a></div></div><div class="product-info mt__15"><h3 class="product-title pr fs__14 mg__0 fwm"><a class="cd chp" href="' +
			product_detail_url +
			'">' +
			product_name +
			'</a></h3><span class="price dib mb__5"><i class="fa fa-inr cr"><ins>' +
			moneyformate(price) + '</ins></i>' + mrp +
			"</span></div></div></div>";

		$("#productList").append(div);
	}
}

function filter(pagno){
	var filter_category = $('#filterCategoryId').val();
	
	$.ajax(
		{
			"url" : base_url+"Home/applyFilter/"+pagno,
			type: 'post',
			dataType: 'json',
			data:
			{
				category : filter_category,
				
			},
			success: function (data)
			{
				console.log(data);
				$('#pagination').html(data.pagination);
				var whishList = []
				if (data.whish_product.length >= 1) {
					whishList = data.whish_product;
				}
				// $('#divFilterFor').addClass('d-block');
				// $('#divFilterFor').removeClass('d-none');
				
				if(filter_category == null || filter_category == '')
				{
					$('.category_tag').addClass('d-none');
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

					createProductGrid(response.result, response.row, whishList);
				} else {
					$("#productList").empty();
					var div = "<h5>No Product found</h5>";
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
});


/*** FILTER BY CATEGORY */
function category_filter(val)
{
	var filter_category = val;
	$('#filterCategoryId').val(filter_category);
	
	filter(0);
}


/*** add to cart item */
$(".btnAddToCart").on("click", function (e) {
	var product_id = $(".product_detail_page").data("pid");
	var quantity = $("#txt_quantity").val();

	$.ajax({
		url: base_url + "Home/addtocart",
		type: "POST",
		datatype: "json",
		data: { quantity: quantity, product_id: product_id },
		success: function (json) {
			if (json["success"] == "success") {
				toast_success(json['message']);
				if (json["totalCart"]) {
					$(".icon_cart .tcount").text(json["totalCart"]);
					var cartitem = '<div class="mini_cart_items js_cat_items lazyload cart_product_list"></div>';
					$(cartitem).insertAfter('div.cart_product_list');
				}
			} else {
				$("#nt_login_canvas").addClass("act_opened");
				$(".mask-overlay").addClass("mask_opened");
				$("html").addClass("hside_opened");
				$("body").addClass("pside_opened");
			}
		},
	});
});

/*** add to whishList item */
$(".wishlistadd").on("click", function (e) {
	var product_id = $(".product_detail_page").data("pid");

	$.ajax({
		url: base_url + "Home/addtowhisList",
		type: "POST",
		datatype: "json",
		data: { product_id: product_id },
		success: function (json) {
			if (json["success"] == "success") {
				if (json["totalWishList"]) {
					$(".icon_like .total-whishlist").text(json["totalWishList"]);
				}
			} else {
				// $('#nt_login_canvas').addClass('act_opened');
				// $(".mask-overlay").addClass('mask_opened');
				// $("html").addClass("hside_opened");
				// $("body").addClass("pside_opened");
			}
		},
	});
});

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
	$.ajax({
		url: base_url + "Home/removeFromWishList",
		type: "POST",
		datatype: "json",
		data: { product_id: product_id },
		success: function (json) {
			if (json["success"] == "success") {
				toast_success(json['message']);
				$product.addClass("kalles-hidden-product");
				setTimeout(() => $product.remove(), 500);
			}
			if (json["error"]) {
			}
		},
	});
});


/*** UPDATE ITEM QUANTITY */

function plusItemQty(product_id)
{
	var item_quantity = parseInt($('#item_'+product_id).val()) + 1;
	updateItemqauantity(product_id,item_quantity);
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
		$('#terms').prop('disabled',true)
	}
	else {
		alert('please check terms & conditions')
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