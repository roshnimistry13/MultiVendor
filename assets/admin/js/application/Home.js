var base_url = $('#base').val();
var previouspage =  document.referrer;
var prevarr =previouspage.split('/');//arr[0]='HMDesigns'
var PREVPAGE=prevarr[prevarr.length-1].split('?');

var URL = window.location.pathname;//  /HMDesigns/HomeProduct
var arr=URL.split('/');//arr[0]='HMDesigns'
//arr[1]='HomeProduct'
var PAGE=arr[arr.length-1].split('?');//HomeProduct
var urlParams = new URLSearchParams(window.location.search);

var form_register = $('#userRegisterFrm');

form_register.validate(
	{
		rules:
		{
			registerName:
			{
				minlength: 3,
				maxlength: 30,
				required: true
			},
			registerEmail:
			{
				minlength: 10,
				maxlength: 50,
				required: true,
				email:true
			},
			registerMobileNo:
			{
				minlength: 10,
				maxlength: 12,
				required: true,
				//regex:"((\+*)((0[ -]+)*|(91 )*)(\d{12}|\d{10}))|\d{5}([- ]*)\d{6}",
			},
			registerPassword:
			{
				minlength: 6,
				maxlength: 30,
				required: true
			},
			registerCPassword:
			{
				minlength: 6,
				maxlength: 30,
				required: true,
				equalTo : "#registerPassword"
			},
		},

		messages:
		{
			registerName:
			{
				required: "Please Enter your Name"
			},
			registerEmail:
			{
				required:"Please Enter valid email address"
			},
			registerMobileNo:
			{
				required:"Please Enter valid Mobile Number",
				regex:"Please Enter valid Mobile Number",
				digit:"Please Enter digits"
			},
			registerPassword:
			{
				required:"Please Enter Password"
			},
			registerCPassword:
			{
				required:"Please Enter Confirm Password",
				equalTo:"Confirm password and password not matched",
			},
		},
	});

var form_login = $('#userLoginFrm');

form_login.validate(
	{
		rules:
		{
			loginEmail:
			{
				minlength: 10,
				maxlength: 50,
				required: true,
				email:true
			},
			loginPassword:
			{
				minlength: 5,
				maxlength: 30,
				required: true
			},
		},
		messages:
		{
			/*loginEmail:
			{
				required:"Please Enter valid email address"
			},*/
			loginPassword:
			{
				required:"Please Enter Password"
			},
		},
	});


var form_address = $('#address_Frm');

form_address.validate(
	{
		rules:
		{
			AddrName:
			{
				required: true,
			},
			AddrPhn:
			{
				minlength: 10,
				maxlength: 12,
				required: true,
				number: true,
				//regex:"((\+*)((0[ -]+)*|(91 )*)(\d{12}|\d{10}))|\d{5}([- ]*)\d{6}",
				/*				pattern: "((\+*)((0[ -]+)*|(91 )*)(\d{12}|\d{10}))|\d{5}([- ]*)\d{6}",*/
			},
			user_address:
			{
				required: true,
			},
			locality:
			{
				required: true,
			},
			landmark:
			{
				required: true,
			},
			city:
			{
				required: true,
			},
			district:
			{
				required: true,
			},
			state:
			{
				required: true,
			},
			pincode:
			{
				minlength: 6,
				maxlength: 6,
				required: true,
				number: true,
				//regex:"((\+*)((0[ -]+)*|(91 )*)(\d{12}|\d{10}))|\d{5}([- ]*)\d{6}",
			},
			radio_addType:
			{
				required: true,
			},
		},
		errorPlacement: function(error, element)
		{

			if ( element.parents('.radioerror') )
			{
				error.appendTo( element.parents('.radioerror') );
				if (element.attr("type") == "radio")
				{
					error.css({'float':'right','margin-right':'25%'});
				}

			} else
			{
				// This is the default behavior
				error.insertAfter( element );
			}
		},
		submitHandler: function(form)
		{
			form.submit();
		}
	});
$('#frm_otp').validate(
	{
		rules:
		{
			otp:
			{
				minlength: 4,
				maxlength: 4,
				number: true,
				required: true,
			},
		},
	});

$('#reason_Frm').validate(
	{
		rules:
		{
			reason:
			{
				required: true,
			},
		},
	});
$('#userReviewFrm').validate(
	{
		rules:
		{
			txt_review:
			{
				required: true,
			},
		},
	});
$('#contact-form').validate(
	{
		rules:
		{
			user_name:
			{
				required: true,
			},
			user_email:
			{
				required: true,
				email: true,
			},
			user_message:
			{
				required: true,
			},
		},
	});

$('#userAccountFrm').validate(
	{
		rules:
		{
			firstname:
			{
				required: true,
			},
			lastname:
			{
				required: true,
			},
			email:
			{
				required: true,
				email: true,
			},
			mobile_no:
			{
				minlength: 10,
				maxlength: 12,
				required: true,
				number: true,
			},
			newpwd:
			{
				minlength: 6,
				maxlength: 30,
			},
			confirmpwd:
			{
				minlength: 6,
				maxlength: 30,
				equalTo : "#newpwd"
			}
		},
	});

$('#userResetFrm').validate(
	{
		rules:
		{
			resetEmail:
			{
				required: true,
				email: true,

			},
		},
	});

jQuery(document).ready(function()
	{
		//myalert("decjsdcvj");
		//error("decjsdcvj");
		//success("decjsdcvj");
		$("#userRegisterFrm,#userLoginFrm,#userAccountFrm,#userCheckoutFrm,#userReviewFrm,#contact-form,#verifyemailbtn,#verifyphnnobtn").submit(function()
			{
				return false;
			});
		checkIfLogin();
		showCart();
		if (PAGE == "HomeShoppingCart")
		{
			showShoppingCart();
		}
		if (PAGE == "HomeCheckout")
		{
			showShippingAddress();
			showItemPurchase();
		}
		if (PAGE == "HomeAccount" && PREVPAGE == "HomeCheckout")
		{
			showAccountDetails();
			$('#userOrders')[0].click();
			$( "#account-info" ).removeClass( "active show" );
			$( "#orders" ).addClass( "active show" );

		}
		if (PAGE == "HomeAccount")
		{
			showAccountDetails();
		}
		if (PAGE == "HomeProduct")
		{
			viewSimilarProducts();

		}
	});

//view Product details
function viewProduct(product_id, category_id)
{
	//var category_id = $('#text_category_id').val();
	window.location = base_url+'HomeProduct?product_id=' + product_id+'&cat_id='+ category_id;
}
function viewCategorizedProduct(category_id)
{
	window.location = base_url+'HomeCategory?category_id=' + category_id;
}
function viewAbout()
{
	window.location = base_url+'HomeAbout';
}
function viewGallery()
{
	window.location = base_url+'HomeGallery';
}
function viewContactUs()
{
	window.location = base_url+'HomeContactUs';
}
function checkoutPage()
{
	window.location = base_url+'HomeCheckout';
}
function viewAccount()
{
	window.location = base_url+'HomeAccount';
}
function viewCustLogin()
{
	window.location = base_url+'HomeCustLogin';
}
function custLogout()
{
	$.ajax(
		{
			"url" : "Home/custLogout",
			type: 'post',
			dataType: 'json',
			success: function (data)
			{
				if (data.status == "success")
				{
					location.reload();

				}
				if (data.status == "error")
				{
				}
			},
			error: function (textStatus, errorThrown)
			{
				console.log(textStatus);
			}
		});
}
function checkIfLogin()
{
	$.ajax(
		{
			"url" : "Home/checkIfLogin",
			type: 'post',
			dataType: 'json',
			success: function (data)
			{
				if (data.status == "success")
				{
					$('#loginRegister').text("Log Out");
					$(".header-login").each(function()
						{
							$(this).show();
						});
					$("#loginRegister").attr("href", "javascript:custLogout()");
					$("#customer_id").val(data.customer_id);
				}
				if (data.status == "error")
				{
					$('#loginRegister').text("Login | Register");
					$(".header-login").each(function()
						{
							$(this).hide();
						});
					$("#loginRegister").attr("href", "javascript:viewCustLogin()");
				}
			},
			error: function (textStatus, errorThrown)
			{
				console.log(textStatus);
			}
		});
}
function viewMoreProducts()
{
	var text_category_id = $('#text_category_id').val();
	var page_start_from = $('#page_start_from').val();
	$.ajax(
		{
			"url" : "HomeCategory/showMoreProducts",
			type: 'post',
			dataType: 'json',
			data:
			{
				text_category_id:text_category_id,page_start_from:page_start_from
			},
			success: function (data)
			{
				if (data.status=="success")
				{
					var dataa = data.data;
					dataa.forEach(function (dataa)
						{
							if (parseFloat(dataa.mrp_price) > parseFloat(dataa.net_rate))
							{
								var price = '<span class="old">Rs. '+dataa.mrp_price+'</span>';
							} else
							{
								var price ="";
							}
							var add = 'style="display: block;"';
							var go = 'style="display: none;"';
							if(data.cart != null || data.cart != undefined)
							{
								if(data.cart.includes(dataa.product_id))
								{
									var add = 'style="display: none;"';
									var go = 'style="display: block;"';
								}
							}


							$(".products").append('<div class="col"><div class="product"><div class="product-thumb"><a href="javascript:viewProduct('+dataa.product_id+', '+text_category_id+')" class="image"><img src="'+base_url+productimageURL+dataa.p_image+'" alt="Product Image" style="width: 270px !important;height: 270px !important;"><img class="image-hover " src="'+base_url+productimageURL+dataa.p_image+'" alt="Product Image" style="width: 270px !important;height: 270px !important;"></a><!--<a href="#" class="add-to-wishlist hintT-left" data-hint="Add to wishlist"><i class="far fa-heart"></i></a>--></div><div class="product-info"><h6 class="title"><a href="'+base_url+'Home/product">'+dataa.product_name+'</a></h6><span class="price">'+price+'<span class="new">Rs. '+dataa.net_rate+'</span></span><div class="product-buttons"><a href="javascript:quickViewModal('+dataa.product_id+')" class="product-button hintT-top" data-hint="Quick View"><i class="fal fa-search"></i></a><a href="javascript:addToCart('+dataa.product_id+')" id="AddCart_'+dataa.product_id+'" class="product-button hintT-top" data-hint="Add to Cart" '+add+'><i class="fal fa-shopping-cart"></i></a><a href="'+base_url+'HomeShoppingCart" id="GoCart_'+dataa.product_id+'" class="product-button hintT-top" data-hint="View Cart" '+go+'><i class="fal fa-shopping-cart"></i></a></div></div></div></div>');
						});

					$("#page_start_from").val(parseInt(page_start_from) + parseInt(record_per_page));
					if (parseFloat(data.data_count) < parseFloat(record_per_page))
					{
						$('.more_btn').hide();
					}
				}
				if (data.status=="error")
				{
					error(data.error);
				}
			},
			error: function (textStatus, errorThrown)
			{
				console.log(textStatus);
			}
		});
}
function register()
{
	if(!$("#userRegisterFrm").valid())
	{
		$("#userRegisterFrm,#registerPassword,#registerCPassword").submit(function()
			{
				return false;
			});
		return false;

	}
	else
	{
		var registerName = $('#registerName').val();
		var registerEmail = $('#registerEmail').val();
		var registerMobileNo = $('#registerMobileNo').val();
		var registerCPassword = $('#registerCPassword').val();
		var registerPassword = $('#registerPassword').val();

		if (registerName == "" && registerEmail == "" && registerMobileNo == ""&& registerCPassword == ""&& registerPassword == "")
		{
			alert("Fill All details");
			$('#userRegisterFrm').addClass('has-error');
			var $msg = $("#userRegisterFrm").find("span.vali-msg");
			//$msg.text('Please fill all the details.');
			$('#userRegisterFrm').focus();
			return false;
		} else
		{
			if (registerName == "")
			{
				$('#registerName').closest('div').addClass('has-error');
				var $msg = $("#registerName").parent().find("span.vali-msg");
				alert($msg);
				$msg.text('Please Enter Name');
				$("#registerName").attr("placeholder", "Please Enter Name");
				$('#registerName').focus();
				return false;
			} else if (registerEmail == "")
			{
				$('#registerEmail').closest('div').addClass('has-error');
				var $msg = $("#registerEmail").parent().find("span.val-msg");
				$msg.text('Please enter EmailId.');
				$("#registerEmail").attr("placeholder", "Please enter EmailId.");
				$('#registerEmail').focus();
				return false;
			} else if (registerMobileNo == "")
			{
				$('#registerMobileNo').closest('div').addClass('has-error');
				var $msg = $("#registerMobileNo").parent().find("span.val-msg");
				$("#registerMobileNo").attr("placeholder", "Please enter Mobile Number");
				$msg.text('Please enter Mobile Number');
				$('#registerMobileNo').focus();
				return false;
			} else if (registerCPassword == "")
			{
				$('#registerCPassword').closest('div').addClass('has-error');
				var $msg = $("#registerCPassword").parent().find("span.val-msg");
				$msg.text('Please confrim Password.');
				$("#registerCPassword").attr("placeholder", "Please confrim Password.");
				$('#registerCPassword').focus();
				return false;
			} else if (registerPassword == "")
			{
				$('#registerPassword').closest('div').addClass('has-error');
				var $msg = $("#registerPassword").parent().find("span.val-msg");
				$msg.text('Please enter Password');
				$("#registerPassword").attr("placeholder", "Please enter Password");
				$('#registerPassword').focus();
				return false;
			} else
			{
				var userRegisterDetails = new FormData($('#userRegisterFrm')[0]);
				$.ajax(
					{
						"url" : "HomeCustLogin/userRegistration",
						type: 'post',
						dataType: 'json',
						data: userRegisterDetails,
						mimeType: "multipart/form-data",
						contentType: false,
						cache: false,
						processData: false,
						success: function (data)
						{
							if (data.status=="success")
							{
								alert(data.message);
								$('#userRegisterFrm')[0].reset();
							} else if (data.status=="error")
							{
								alert(data.message);
							}
						},
						error: function (textStatus, errorThrown)
						{
							console.log(textStatus);
						}
					});
			}
		}
	}

}
function login()
{
	if(!$("#userLoginFrm").valid())
	{
		$("#userLoginFrm").submit(function()
			{
				return false;
			});
		return false;
	}
	else
	{
		var userLoginDetails = new FormData($('#userLoginFrm')[0]);
		$.ajax(
			{
				"url" : "HomeCustLogin/userLogin",
				type: 'post',
				dataType: 'json',
				data: userLoginDetails,
				mimeType: "multipart/form-data",
				contentType: false,
				cache: false,
				processData: false,
				success: function (data)
				{
					if (data.status=="success")
					{
						//alert(data.message);
						$('#userLoginFrm')[0].reset();
						window.location.href = data.redirect;
					} else if (data.status=="error")
					{
						alert(data.message);
					}
				},
				error: function (textStatus, errorThrown)
				{
					console.log(textStatus);
				}
			});
	}
}
function addToCart(product_id)
{
	var quantity = $('#input-qty').val();
	var customer_id = $('#customer_id').val();
	$.ajax(
		{
			"url" : "Home/addToCart",
			type: 'post',
			dataType: 'json',
			data:
			{
				"product_id":product_id,"quantity":quantity,"customer_id":customer_id
			},
			success: function (data)
			{
				if (data.status=="success")
				{
					$('#togcart')[0].click();
					showCart();
					if (PAGE == "HomeProduct")
					{
						document.getElementById("goCartBtn").style.display = "block";
						document.getElementById("addCartBtn").style.display = "none";
						$("#AddCart_"+product_id).hide();
						$("#GoCart_"+product_id).show();
					} else if (PAGE == "HomeCategory")
					{
						$("#AddCart_"+product_id).hide();
						$("#GoCart_"+product_id).show();

					}
					else if (PAGE == "Home")
					{
						$("#AddCart_"+product_id).hide();
						$("#GoCart_"+product_id).show();

					}

				} else
				{
					alert("error in adding to cart");
				}
			},
			error: function (textStatus, errorThrown)
			{
				console.log(textStatus);
			}
		});
}
function showCart()
{
	var customer_id = $('#customer_id').val();
	$.ajax(
		{
			"url"   : "Home/showCart",
			type    : 'post',
			dataType: 'json',
			data	:
			{
				"customer_id":customer_id
			},
			success : function (data)
			{
				if (data.status == "success")
				{
					$('#minicart').empty();
					$(".minicart-product-list").append(data.data);
					$('#subtotal').text("Rs. "+data.amount);
					if (data.numProduct > 0)
					{
						$('.cart-count').show();
						$('.cart-count').text(data.numProduct);
					}
					document.getElementById("checkout_btn").style.display = "block";
					document.getElementById("viewCart_btn").style.display = "block";
					document.getElementById("shop").style.display = "none";
				} else if (data.status=="error")
				{
					$('#minicart').empty();
					//$('#cart_footer').hide();
					$(".minicart-product-list").append('<i class="fas fa-cart-arrow-down" style="font-size:48px;"></i><br/><li>CART IS EMPTY !! </li>');
					$('.cart-count').text('0');

					$('.cart-count').hide();
					$('#subtotal').hide();
					document.getElementById("checkout_btn").style.display = "none";
					document.getElementById("viewCart_btn").style.display = "none";
					document.getElementById("subTotal").style.display = "none";
					document.getElementById("shop").style.display = "block";

					//$("#cart_footer").append('<div class="buttons"><a id="shop" href="'+base_url+'Home" class="btn btn-dark btn-hover-primary">Shop</a></div>');

				}
			},
			error: function (textStatus, errorThrown)
			{
				console.log(textStatus);
			}
		});
}
function removeFromCart(product_id)
{
	var customer_id  = $('#customer_id').val();
	$.ajax(
		{
			"url" : "Home/removeFromCart",
			type: 'post',
			dataType: 'json',
			data:
			{
				"product_id":product_id,"customer_id":customer_id
			},
			success: function (data)
			{
				if (data.status=="success")
				{

					showCart();

					var URL = window.location.pathname;//  /HMDesigns/HomeProduct
					var arr=URL.split('/');//arr[0]='HMDesigns'
					//arr[1]='HomeProduct'

					var PAGE=arr[arr.length-1].split('?');//HomeProduct
					if (PAGE == "HomeProduct")
					{
						document.getElementById("goCartBtn").style.display = "none";
						document.getElementById("addCartBtn").style.display = "block";
						$("#AddCart_"+product_id).show();
						$("#GoCart_"+product_id).hide();
					} else if (PAGE == "HomeShoppingCart")
					{
						showShoppingCart();

					} else if (PAGE == "HomeCheckout")
					{
						showItemPurchase();

					}else if (PAGE == "HomeCategory")
					{
						$("#AddCart_"+product_id).show();
						$("#GoCart_"+product_id).hide();

					}else if (PAGE == "Home")
					{
						$("#AddCart_"+product_id).show();
						$("#GoCart_"+product_id).hide();
					}

				} else
				{
					alert("error in removing from cart");
				}
			},
			error: function (textStatus, errorThrown)
			{
				console.log(textStatus);
			}
		});
}
function editAddress(add_id)
{
	$.ajax(
		{
			"url" : "HomeAccount/editAddress",
			type: 'post',
			dataType: 'json',
			data:
			{
				"add_id":add_id
			},
			success: function (data)
			{
				if (data.status == "success")
				{
					$('#viewNewAddressModal').show();

					$('#modal-title').text('Update Address');
					$('#hidden_div').empty();

					$('#hidden_div').append('<input type="hidden" id="AddrID" name="AddrID" value="'+data.address_data.address_id+'">');
					$('#AddrName').val(data.address_data.name);
					$('#AddrPhn').val(data.address_data.mobile_no);
					$('#user_address').val(data.address_data.address);
					$('#locality').val(data.address_data.locality);
					$('#landmark').val(data.address_data.landmark);
					$('#city').val(data.address_data.city);
					$('#district').val(data.address_data.district);
					$('#state').val(data.address_data.state);
					$('#pincode').val(data.address_data.pincode);
					if (data.address_data.address_type == "Home")
					$( "#radio_addType_Home" ).prop( "checked", true );
					else if (data.address_data.address_type == "Work")
					$( "#radio_addType_Work" ).prop( "checked", true );

					$('#updateAddress_btn').show();
					$('#saveAddress_btn').hide();

				} else if (data.status=="error")
				{

				}
			},
			error: function (textStatus, errorThrown)
			{
				console.log(textStatus);
			}
		});
}
function addNewAddress()
{
	$('#viewNewAddressModal').show();
	$('#modal-title').text('Add Address');
	$('#hidden_div').empty();
	$('#address_Frm')[0].reset();
	$('#updateAddress_btn').hide();
	$('#saveAddress_btn').show();

}
function closeNewAddressModal()
{
	$('#viewNewAddressModal').hide();
}
function updateAddress()
{
	if(!$("#address_Frm").valid())
	{
		$("#address_Frm").submit(function()
			{
				return false;
			});
		return false;
	}
	else
	{
		var addressFrm = new FormData($('#address_Frm')[0]);

		var AddrName  = $('#AddrName').val();
		var AddrID  = $('#AddrID').val();
		var AddrPhn  = $('#AddrPhn').val();
		var user_address  = $('#user_address').val();
		var locality  = $('#locality').val();
		var landmark  = $('#landmark').val();
		var city  = $('#city').val();
		var district  = $('#district').val();
		var state  = $('#state').val();
		var pincode  = $('#pincode').val();
		var add_type = $("input[name='radio_addType']:checked").val();
		$.ajax(
			{
				"url" : "HomeAccount/UpdateAdress",
				type: 'post',
				dataType: 'json',
				data:
				{
					"AddrName":AddrName , "AddrPhn":AddrPhn , "user_address":user_address , "locality":locality , "landmark":landmark , "city":city , "district":district , "state":state , "pincode":pincode , "add_type":add_type , "AddrID":AddrID
				},
				success: function (data)
				{
					if (data.status=="success")
					{
						alert(data.message);
						$('#viewNewAddressModal').hide();
						showAccountDetails();
					} else if (data.status=="error")
					{
						alert(data.message);
					}
				},
				error: function (textStatus, errorThrown)
				{
					console.log(textStatus);
				}
			});
	}
}
function saveAddress()
{
	if(!$("#address_Frm").valid())
	{
		$("#address_Frm").submit(function()
			{
				return false;
			});
		return false;
	}
	else
	{
		var addressFrm = new FormData($('#addressFrm')[0]);
		var AddrName  = $('#AddrName').val();
		var AddrPhn  = $('#AddrPhn').val();
		var user_address  = $('#user_address').val();
		var locality  = $('#locality').val();
		var landmark  = $('#landmark').val();
		var city  = $('#city').val();
		var district  = $('#district').val();
		var state  = $('#state').val();
		var pincode  = $('#pincode').val();
		var add_type = $("input[name='radio_addType']:checked").val();
		$.ajax(
			{
				"url" : "HomeAccount/addAdress",
				type: 'post',
				dataType: 'json',
				data:
				{
					"AddrName":AddrName , "AddrPhn":AddrPhn , "user_address":user_address , "locality":locality , "landmark":landmark , "city":city , "district":district , "state":state , "pincode":pincode , "add_type":add_type
				},
				success: function (data)
				{
					if (data.status=="success")
					{
						alert(data.message);
						if ($('#viewNewAddressModal').show())
						{
							$('#viewNewAddressModal').hide();
						}
						showAccountDetails();
					} else if (data.status=="error")
					{
						alert(data.message);
					}
				},
				error: function (textStatus, errorThrown)
				{
					console.log(textStatus);
				}
			});
	}

}
function showItemPurchase()
{
	$.ajax(
		{
			"url" : "HomeCheckout/showItemPurchase",
			type: 'post',
			dataType: 'json',
			success: function (data)
			{
				if (data.status == "success")
				{
					$("#purchaseCart").empty();
					$("#purchaseCart").append(data.data);
					$('#sub_total').text("Rs. "+data.amount);
					$('#total').text("Rs. "+data.amount);
					$('#order_amount').val(data.amount);
					$('#total_order_quantity').val(data.totalQuantity);
					if (data.numProduct > 0)
					{
						$('.cart-count').show();
						$('.cart-count').text(data.numProduct);
					}

				} else if (data.status=="error")
				{
					$("#purchaseCart").empty();
					$("#purchaseCart").append('<i class="fas fa-cart-arrow-down" style="font-size:48px;"></i><br/><li>CART IS EMPTY</li>');
					$('#sub_total').text("Rs. 0");
					$('#total').text("Rs. 0");
				}
			},
			error: function (textStatus, errorThrown)
			{
				console.log(textStatus);
			}
		});
}
function showAccountDetails()
{
	$.ajax(
		{
			"url" : "HomeAccount/showAccountDetails",
			type: 'post',
			dataType: 'json',
			success: function (data)
			{
				if (data.status == "success")
				{
					$("#OrdersTable").empty();
					if(data.orderDetails != undefined)
					{
						$("#OrdersTable").append(data.orderDetails);
					}
					else
					{
						$("#tableOfOrder").hide();
						$("#tableOfOrder").parent().append("No Orders yet");
					}
					if(data.addressDetails != undefined)
					{
						$("#address_list").empty();

						$("#address_list").append('<div class="col-md-6 col-12 learts-mb-30"><div class="col-12 learts-mb-30"><button id="addaddress_btn" class="btn btn-dark btn-outline-hover-dark" onclick="addNewAddress()"><i class="fa fa-plus" aria-hidden="true"></i> Add Address</button></div></div>');
						$("#address_list").append(data.addressDetails);
					}
					else
					{
						//$("#address_list").empty();
						//$("#editAddress").show();
					}
					if(data.customerData != undefined)
					{
						var name = data.customerData.customer_name.split(" ");
						$('#firstname').val(name[0]);
						$('#lastname').val(name[1]);
						$('#email').val(data.customerData.email_id);
						$('#hidden_email').val(data.customerData.email_id);
						$('#chkemail_verify').empty();
						$('#chkemail_verify').show();
						if(data.customerData.verify_email == 1)
						{
							$('#chkemail_verify').append("verified");
						}
						else
						{
							$('#chkemail_verify').append('<button id="verifyemailbtn" class="btn btn-dark btn-outline-hover-dark" onclick="javascript:verifyEmail();">Verify</button>');
						}
						$('#mobile_no').val(data.customerData.mobile_no);
						$('#hidden_mobile_no').val(data.customerData.mobile_no);
						$('#chkphn_verify').empty();
						$('#chkphn_verify').show();

						if(data.customerData.verify_mobileno == 1)
						{
							$('#chkphn_verify').append("verified");
						}
						else
						{
							$('#chkphn_verify').append('<button class="btn btn-dark btn-outline-hover-dark" id="verifyphnnobtn" onclick="javascript:verifyPhoneno();">Verify</button>');
						}

					}

				} else if (data.status=="error")
				{

				}
			},
			error: function (textStatus, errorThrown)
			{
				console.log(textStatus);
			}
		});
}
function showShoppingCart()
{
	$.ajax(
		{
			"url" : "Home/showShoppingCart",
			type: 'post',
			dataType: 'json',
			success: function (data)
			{
				if (data.status=="success")
				{
					$('#cartItems_table').empty();
					$("#cartItems_table").append(data.data);
					$('#subtotal_amount').text("Rs. "+data.amount);
					$('#total_amount').text("Rs. "+data.amount);
					//document.getElementById("emptyCart_btn").style.display = "block";

					if (data.numProduct > 0)
					{
						$('.cart-count').show();
						$('.cart-count').text(data.numProduct);
					}
				} else if (data.status=="error")
				{
					$('#minicart').empty();
					$(".minicart-product-list").append('<i class="fas fa-cart-arrow-down" style="font-size:48px;"></i><br/><li>CART IS EMPTY</li>');
					$("#cart_form").prepend('<div style="text-align: center;"><i class="fas fa-cart-arrow-down" style="font-size:48px;"></i><br/><b>CART IS EMPTY</b></div><br/><br/>');
					$('#cartItems_table').empty();
					$("#cart_item_table").hide();
					$("#cart_totals").hide();
					$('.amount').text("Rs. 0");
					document.getElementById("checkout_btn").style.display = "none";
					document.getElementById("emptyCart_btn").style.display = "none";
				}
			},
			error: function (textStatus, errorThrown)
			{
				console.log(textStatus);
			}
		});
}
function emptyCart()
{
	$.ajax(
		{
			"url" : "Home/emptyCart",
			type: 'post',
			dataType: 'json',
			success: function (data)
			{
				if (data.status=="success")
				{

					showCart();
					showShoppingCart();
					//$('#togcart')[0].click();

					var URL = window.location.pathname;//  /HMDesigns/HomeProduct
					var arr=URL.split('/');//arr[0]='HMDesigns'
					//arr[1]='HomeProduct'

					var PAGE=arr[arr.length-1].split('?');//HomeProduct
					if (PAGE == "HomeProduct")
					{
						document.getElementById("goCartBtn").style.display = "none";
						document.getElementById("addCartBtn").style.display = "block";
					} else if (PAGE == "HomeShoppingCart")
					{
						window.location = base_url+'HomeShoppingCart';
					} else if (PAGE == "HomeCheckout")
					{
						showItemPurchase();
					}

				} else
				{
					alert("error in removing from cart");
				}
			},
			error: function (textStatus, errorThrown)
			{
				console.log(textStatus);
			}
		});
}
function qtyChange(product_id, option, net_rate)
{
	var oldValue = $('#item_qty_'+product_id).val();
	if (option == 1)
	{
		var newVal = parseFloat(oldValue) + 1;
	} else if(option == 0)
	{
		// Don't allow decrementing below zero
		if (oldValue > 1)
		{
			var newVal = parseFloat(oldValue) - 1;
		} else
		{
			newVal = 1;
		}
	}else
	{
		var newVal = oldValue;
	}

	$.ajax(
		{
			"url" : "Home/changeQty",
			type: 'post',
			data:
			{
				product_id:product_id, newQty:newVal
			},
			dataType: 'json',
			success: function (data)
			{
				if (data.status=="success")
				{
					var total = newVal * net_rate;
					if(option == 1 || option == 0)
					{
						$('#item_qty_'+product_id).val(newVal);
					}
					$('#total_'+product_id).text(total);
					showCart();
					showShoppingCart();
					if (PAGE == "HomeCheckout")
					{
						showItemPurchase();
					}
				} else
				{
					alert("error in changing quantity.");
				}
			},
			error: function (textStatus, errorThrown)
			{
				console.log(textStatus);
			}
		});
}
function verifyEmail()//todo add validation
{
	var email_id = $('#email').val();
	var customer_id = $('#customer_id').val();
	if (email_id == "")
	{
		alert("Add email Id");

		return false;
	} else
	{
		$.ajax(
			{
				"url" : "HomeAccount/verifyEmail",
				type: 'post',
				dataType: 'json',
				data:
				{
					"emailId" : email_id,"customer_id" : customer_id
				},
				success: function (data)
				{
					if (data.status=="success")
					{
						alert("Check your Mail to Verify!!!");
					} else if (data.status=="error")
					{
						alert("Error in Verifying your email... Try Later");
					}
				},
				error: function (textStatus, errorThrown)
				{
					console.log(textStatus);
				}
			});

	}
}
function verifyPhoneno()
{
	var mobile_no = $('#mobile_no').val();
	var customer_id = $('#customer_id').val();
	if (mobile_no == "")
	{
		alert("Add phone number");
		return false;
	} else
	{
		$.ajax(
			{
				"url" : "HomeAccount/verifyPhoneno",
				type: 'post',
				dataType: 'json',
				data:
				{
					"mobile_no" : mobile_no,"customer_id" : customer_id
				},
				success: function (data)
				{
					if (data.status=="success")
					{
						alert("Check your Phone SMS to Verify!!!");
						$('#viewOtpModal').show();
					} else if (data.status=="error")
					{
						alert("Error in Verifying your Phoneno... Try Later");
					}
				},
				error: function (textStatus, errorThrown)
				{
					console.log(textStatus);
				}
			});

	}
}
function closeOtpModal()
{
	$('#otp').val("");
	$('#viewOtpModal').hide();
}
function verifyOtp()
{

	if(!$("#frm_otp").valid())
	{
		$("#frm_otp,#otp").submit(function()
			{
				return false;
			});
		return false;
	}
	else
	{
		var otp = $('#otp').val();
		var customer_id = $('#customer_id').val();
		var mobile_no = $('#mobile_no').val();

		$.ajax(
			{
				"url" : "HomeVerification/verifyOtp",
				type: 'post',
				dataType: 'json',
				data:
				{
					"mobile_no" : mobile_no,"customer_id" : customer_id,"otp" :otp
				},
				success: function (data)
				{
					if (data.status=="success")
					{
						closeOtpModal();
						showAccountDetails();
					} else if (data.status=="error")
					{
						alert("Invalid OTP!!!");
					}
				},
				error: function (textStatus, errorThrown)
				{
					console.log(textStatus);
				}
			});

	}
}
function addBankDetails()
{
	$("#viewNewBankDetailModal").show();
}


function placeOrder()
{
	var customer_id = $('#customer_id').val();
	var order_amount = $('#order_amount').val();
	var total_order_quantity = $('#total_order_quantity').val();
	var discounted_total = $('#new_total').val();
	var coupon_code =  $('#coupon_code').val();
	var bdOrderNote =  $('#bdOrderNote').val();

	var selectedAddress = $("input[name='address_use']:checked").val();

	if(total_order_quantity == "" || total_order_quantity == null || total_order_quantity == undefined)
	{
		alert("PLEASE ADD PRODUCTS!!!");
	}
	else
	{
		$.ajax(
			{
				"url" : "HomeCheckout/placeOrder",
				type: 'post',
				data:
				{
					"customer_id":customer_id,"order_amount":order_amount,"total_order_quantity":total_order_quantity,"coupon_code":coupon_code,"discounted_total":discounted_total,"selectedAddress":selectedAddress,"bdOrderNote":bdOrderNote
				},
				dataType: 'json',
				success: function (data)
				{
					if (data.status == "success")
					{
						alert("successfully ordered!!");
						$('#userCheckoutFrm')[0].reset();
						window.location = base_url+'HomeAccount';
						//$('#userOrders')[0].click();

					} else if (data.status=="error")
					{

					}
				},
				error: function (textStatus, errorThrown)
				{
					console.log(textStatus);
				}
			});
	}

}
function viewOrderDetails(order_id)
{
	$('#viewOrdDetailsModal').show();
	$.ajax(
		{
			"url" : "HomeAccount/orderDetails",
			type: 'post',
			dataType: 'json',
			data:
			{
				"order_id" : order_id
			},
			success: function (data)
			{
				if (data.status=="success")
				{
					$('#OrderDetailsTable').empty();
					$("#OrderDetailsTable").append(data.data);
				} else if (data.status=="error")
				{
					alert("Error");
				}
			},
			error: function (textStatus, errorThrown)
			{
				console.log(textStatus);
			}
		});
}
function closeOrdDetailsModal()
{
	$('#OrderDetailsTable').empty();
	$('#viewOrdDetailsModal').hide();
}
function viewSimilarProducts()
{
	var urlParams = new URLSearchParams(window.location.search);
	var product_id = urlParams.get('product_id');
	var category_id = urlParams.get('cat_id');
	$.ajax(
		{
			"url" : "HomeProduct/viewSimilarProducts",
			type: 'post',
			dataType: 'json',
			data:
			{
				"product_id" : product_id,"category_id" : category_id
			},
			success: function (data)
			{
				if (data.status=="success")
				{
					var dataa = data.data;
					/*dataa.forEach(function (dataa)
					{*/
					/*$("#similar_product").append('<div class="col"><div class="testimonial"><a href="javascript:viewProduct('+dataa.product_id+')" class="image"></a><div class="author"><div class="content"><h6 class="name">'+dataa.product_name+'</h6><span class="title">'+dataa.description+'</span></div></div></div></div>');*/

					/*<img src="'+base_url+productimageURL+dataa.p_image+'" alt="Product Image"><img class="image-hover " src="'+base_url+productimageURL+dataa.p_image2+'" alt="Product Image">*/



					/*});*/
					//$("#similar_product").html(dataa);
				} else if (data.status=="error")
				{

				}
			},
			error: function (textStatus, errorThrown)
			{
				console.log(textStatus);
			}
		});
}
function showShippingAddress()
{
	$.ajax(
		{
			"url" : "HomeCheckout/showShippingAddress",
			type: 'post',
			dataType: 'json',
			success: function (data)
			{
				if (data.status == "success")
				{

					if(data.addressDetails != undefined)
					{
						$("#allAddresses").append(data.addressDetails);

					}
					else
					{

					}

				} else if (data.status=="error")
				{

				}
			},
			error: function (textStatus, errorThrown)
			{
				console.log(textStatus);
			}
		});
}
function showCoupons()
{
	var coupon_code = $("#coupon_code").val();
	$('#viewCouponsModal').show();
	$.ajax(
		{
			"url" : "HomeCheckout/showCoupons",
			type: 'post',
			dataType: 'json',
			success: function (data)
			{
				if (data.status == "success")
				{
					$('#coupons').empty();
					$("#coupons").append(data.offerDetails);
					if(coupon_code != "")
					{
						$('#removecoupon_btn').show();
					}
				} else if (data.status == "error")
				{
					$('#coupons').empty();
					$("#coupons").append("NO COUPONS AVAILABLE!");
					$("#applycoupon_btn").hide();
				}
			},
			error: function (textStatus, errorThrown)
			{
				console.log(textStatus);
			}
		});
}
function closeCouponsModal()
{
	$('#viewCouponsModal').hide();
}
function applyCoupon()
{
	var selectedCoupon = $("input[name='radio_coupons']:checked").val();
	var order_amount  = $('#order_amount').val();

	$.ajax(
		{
			"url" : "HomeCheckout/applyCoupons",
			type: 'post',
			data:
			{
				"selectedCoupon":selectedCoupon,"order_amount":order_amount
			},
			dataType: 'json',
			success: function (data)
			{
				if (data.status == "success")
				{
					$('#viewCouponsModal').hide();
					$('#discount_amt').show();
					$('#discount').text("Rs. "+data.dis_amount);
					$('#total').text("Rs. "+data.amount);
					$('#new_total').val(data.amount);
					$('#coupon_code').val(data.couponDetails.offer_code);
					alert("you applied "+data.couponDetails.offer_code);

				} else if (data.status == "error")
				{

				}
			},
			error: function (textStatus, errorThrown)
			{

				console.log(textStatus);
			}
		});
}
//validation for take  number
function isNum(e)
{
	var mt2 = "";

	var unicode = e.charCode ? e.charCode : e.keyCode;
	if ((unicode == 8) || (unicode == 9) || (unicode == 46) || (unicode > 47 && unicode < 58))
	{
		mt2 += String.fromCharCode(unicode);
		return true;

	}
	else
	{
		//alert("This field accepts only Numbers(0-9)");
		//error("This field accepts only Numbers(0-9)");
		/*msgBox("This field accepts only Numbers(0-9)", "Invalid Entry", "error");*/
		return false;
	}
}
function addReview()
{
	if(!$("#userReviewFrm").valid())
	{
		$("#userReviewFrm,#txt_review").submit(function()
			{
				return false;
			});
		return false;
	}
	else
	{
		var txt_review = $("#txt_review").val();
		var product_id = urlParams.get('product_id');

		$.ajax(
			{
				"url" : "HomeProduct/addReviewDetails",
				type: 'post',
				dataType: 'json',
				data:
				{
					"txt_review":txt_review,"product_id":product_id
				},
				success: function (data)
				{
					if(data.status == "success")
					{
						/*					alert("Successsfully Add Review.");
						*/					$('#userReviewFrm')[0].reset();
						showReview();
					}
					if(data.status=="error")
					{
						error(data.error);
					}
				},
				error: function (textStatus, errorThrown)
				{
					console.log(textStatus);
				}
			});
	}
}
function showReview()
{
	var product_id = urlParams.get('product_id');
	$.ajax(
		{
			"url" : "HomeProduct/showReview",
			type: 'post',
			dataType: 'json',
			data:
			{
				"product_id":product_id
			},
			success: function (data)
			{
				if (data.status == "success")
				{
					$("#review_list").show();
					$("#review_count").show();
					$("#review_list").empty();
					$("#review_count").text(data.totalReview+" Reviews for "+data.product_name);
					if(data.reviewDetails != undefined)
					{
						$("#review_list").append(data.reviewDetails);
					}
				} else if (data.status=="error")
				{
				}
			},
			error: function (textStatus, errorThrown)
			{
				console.log(textStatus);
			}
		});
}
function deleteAddress(add_id)
{
	if (confirm("Are You Sure?"))
	{
		$.ajax(
			{
				"url" : "HomeAccount/deleteAddress",
				type: 'post',
				dataType: 'json',
				data:
				{
					"add_id":add_id
				},
				success: function (data)
				{
					if(data.status == "success")
					{
						showAccountDetails();
					}
					if(data.status=="error")
					{
						error("Something Wrong.!!");
					}
				},
				error: function (textStatus, errorThrown)
				{
					console.log(textStatus);
				}
			});
	} else
	{
		return false;
	}
}
function deleteOrderDetails()
{
	if(!$("#reason_Frm").valid())
	{
		$("#reason_Frm,#reason").submit(function()
			{
				return false;
			});
		return false;
	}
	else
	{
		var reason = $('#reason').val();
		var order_id = $('#order_id').val();
		$.ajax(
			{
				"url" : "HomeAccount/deleteOrder",
				type: 'post',
				dataType: 'json',
				data:
				{
					"order_id":order_id,"reason":reason
				},
				success: function (data)
				{
					if(data.status == "success")
					{
						closeCancelReasonModal();
						alert("Cancelled your Order");
						showAccountDetails();
					}
					if(data.status=="error")
					{
						error("Something Wrong.!!");
					}
				},
				error: function (textStatus, errorThrown)
				{
					console.log(textStatus);
				}
			});
	}
}
function showCancelModal(odr_id)
{
	if (confirm("Are You Sure?"))
	{
		$('#viewCancelReasonModal').show();
		$('#order_id').val(odr_id);
	} else
	{
		return false;
	}
}
function closeCancelReasonModal()
{
	$('#reason').val("");
	$('#viewCancelReasonModal').hide();
}
function addCustMessage()
{
	if(!$("#contact-form").valid())
	{
		$("#contact-form,#btn_usrmessage").submit(function()
			{
				return false;
			});
		return false;
	}
	else
	{

		var user_name = $("#user_name").val();
		var user_email = $("#user_email").val();
		var user_message = $("#user_message").val();

		$.ajax(
			{
				"url" : "Home/addUserMessage",
				type: 'post',
				dataType: 'json',
				data:
				{
					"user_name":user_name,"user_email":user_email,"user_message":user_message
				},
				success: function (data)
				{
					if(data.status == "success")
					{
						alert("sent your message");
						$('#contact-form')[0].reset();
					}
					if(data.status=="error")
					{
						error(data.error);
					}
				},
				error: function (textStatus, errorThrown)
				{
					console.log(textStatus);
				}
			});
	}
}
function updateUserDetails()
{
	if(!$("#userAccountFrm").valid())
	{
		$("#userAccountFrm,#btn_usrmessage").submit(function()
			{
				return false;
			});
		return false;
	}
	else
	{
		var firstname = $("#firstname").val();
		var lastname = $("#lastname").val();
		var email = $("#email").val();
		var mobile_no = $("#mobile_no").val();
		var newpwd = $("#newpwd").val();
		var confirmpwd = $("#confirmpwd").val();
		var currentpwd = $("#currentpwd").val();
		if(newpwd != "" && currentpwd == "")
		{
			$("#currentpwd_error").show();
			$("#currentpwd").focus();

			return false;
		}
		else
		{
			$("#currentpwd_error").hide();
		}

		$.ajax(
			{
				"url" : "HomeAccount/updateUserData",
				type: 'post',
				dataType: 'json',
				data:
				{
					"firstname":firstname,"lastname":lastname,"email":email,"mobile_no":mobile_no,"newpwd":newpwd,"confirmpwd":confirmpwd,"currentpwd":currentpwd
				},
				success: function (data)
				{
					if(data.status == "success")
					{
						alert("Changesd your Data");
						$('#userAccountFrm')[0].reset();
						showAccountDetails();
					}
					if(data.status == "error")
					{
						alert(data.message);
						$("#currentpwd_error").show();
						$("#currentpwd_error").text('Incorrect Current Passwords');
						$("#currentpwd").focus();
					}
				},
				error: function (textStatus, errorThrown)
				{
					console.log(textStatus);
				}
			});
	}
}
function removeError()
{
	$("#currentpwd_error").hide();
}
function quickViewModal(product_id)
{
	$.ajax(
		{
			"url" : "Home/quickViewData",
			type: 'post',
			dataType: 'json',
			data:
			{
				"product_id":product_id
			},
			success: function (data)
			{
				if(data.status == "success")
				{
					$("#viewProdQuickViewModal").show();
					//$("#product_img").attr("data-image", ""+base_url+productimageURL+data.productDetails.p_image+"");
					$("#product_img1").attr("src", ""+base_url+productimageURL+data.productDetails.p_image+"");
					$(".product-title").text(data.productDetails.product_name);
					$(".product_code").text("Code :"+data.productDetails.product_sku);
					$(".product-price").text("Rs. "+data.productDetails.net_rate);
					$(".product-description").find("p").text(data.productDetails.short_description);
				}
				if(data.status == "error")
				{
					console.log("error in showing quick view of product");
				}
			},
			error: function (textStatus, errorThrown)
			{
				console.log(textStatus);
			}
		});
	$("#viewProdQuickViewModal").show();
}
function closeQuickViewModal()
{
	$("#viewProdQuickViewModal").hide();
}
function forgotPassword()
{
	$("#viewResetPasswordModal").show();
}
function resetpassword()
{
	if(!$("#userResetFrm").valid())
	{
		$("#userResetFrm,.btn btn-dark btn-outline-hover-dark").submit(function()
			{
				return false;
			});
		return false;
	}
	else
	{
		var resetEmail = $("#resetEmail").val();
		$.ajax(
			{
				"url" : "Home/resetpassword",
				type: 'post',
				dataType: 'json',
				data:
				{
					"resetEmail":resetEmail
				},
				success: function (data)
				{
					if(data.status == "success")
					{
						alert("Please check your mail.");
						$("#viewResetPasswordModal").hide();
					}
					if(data.status == "error")
					{
						console.log("error in resetting password!");
					}
				},
				error: function (textStatus, errorThrown)
				{
					console.log(textStatus);
				}
			});
	}
}
function removeCoupon()
{
	$("#coupon_code").val('');
	$('#discount_amt').hide();
	var order_amount = $('#order_amount').val();
	$('#discount').text("");
	$('#total').text("Rs. "+order_amount);
	$('#new_total').val(order_amount);
	closeCouponsModal();

}
function checkVerification(value,id)
{
	if(id == "mobile_no")
	{
		var hidden_mobile_no = $("#hidden_mobile_no").val();
		if(value != hidden_mobile_no)
		{
			$("#chkphn_verify").hide();
		}
		else
		{
			$("#chkphn_verify").show();
		}

	}
	else if(id == "email")
	{
		var hidden_email = $("#hidden_email").val();
		if(value != hidden_email)
		{
			$("#chkemail_verify").hide();
		}
		else
		{
			$("#chkemail_verify").show();
		}
	}
}