<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/userguide3/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller']    = 'Home/index';
$route['404_override']          = '';
$route['translate_uri_dashes']  = FALSE;

/* **************Admin route ******************** */
//Login
$route['Admin']                     = 'Admin/Login/index';
$route['admin']                     = 'Admin/Login/index';
$route['login-check']               ='Admin/Login/checkLogin';
$route['forget-password']           ='Admin/Login/forgetPassword';
$route['submit-forget-password']    ='Admin/Login/submitForgetPassword';


$route['dashboard']                 ='Admin/Dashboard';
$route['dev-logon']                  ='Admin/Login/userLogoin';
$route['devlogin']                  ='Admin/Login/devLogin';

//Brand route here
$route['brand']                     ='Admin/Brand';
$route['add-brand']                 ='Admin/Brand/addBrand';
$route['edit-brand/(:any)']         ='Admin/Brand/editBrand';
$route['submit-brand']              ='Admin/Brand/submitBrand';

//category route here
$route['category']              ='Admin/Category';
$route['add-category']          ='Admin/Category/addCategory';
$route['edit-category/(:any)']  ='Admin/Category/editCategory';
$route['submit-category']       ='Admin/Category/submitCategory';

//Group routes
$route['group']                 ="Admin/Group/index";
$route['add-group']             ="Admin/Group/addGroup";
$route['edit-group/(:any)']     ="Admin/Group/editGroup";
$route['submit-group']          ="Admin/Group/submitGroup";

// Unit routes
$route['unit']                  ="Admin/Unit/index";
$route['add-unit']              ="Admin/Unit/addUnit";
$route['edit-unit/(:any)']      ="Admin/Unit/editUnit";
$route['submit-unit']           ="Admin/Unit/submitUnit";


// Product Group routes
$route['elements']                 ="Admin/Element/index";
$route['add-elements']             ="Admin/Element/addElement";
$route['edit-elements/(:any)']     ="Admin/Element/editElement";
$route['submit-elements']          ="Admin/Element/submitElement";

// Group Unit routes
$route['attributes']                    ="Admin/Attributes/index";
$route['add-attributes']                ="Admin/Attributes/addAttributes";
$route['edit-attributes/(:any)']        ="Admin/Attributes/editAttributes";
$route['submit-attributes']             ="Admin/Attributes/submitAttributes";

//Product route
$route['all-product']                   ='Admin/Product/index';
$route['add-product']                   ='Admin/Product/addProduct';
$route['edit-product/(:any)']           ='Admin/Product/editProduct';
$route['submit-product']                ='Admin/Product/submitProduct';
$route['parent-product']                ='Admin/Product/parentProducts';
$route['add-parent-product']            ='Admin/Product/addparentProduct';
$route['submit-parent-product']         ='Admin/Product/submitParentProduct';
$route['edit-parent-product/(:any)']           ='Admin/Product/editParentProduct';

//Submenu routes
$route['submenu']            	        = "Admin/Submenu/index";
$route['add-submenu']   		        = "Admin/Submenu/addSubmenu";
$route['edit-submenu/(:any)']           = "Admin/Submenu/editSubmenu";
$route['submit-submenu']                = "Admin/Submenu/submitSubmenu";

//Role 
$route['role']            	    = "Admin/Role/index";
$route['add-role']   		    = "Admin/Role/addRole";
$route['edit-role/(:any)']      = "Admin/Role/editSubmenu";
$route['submit-role']           = "Admin/Role/submitRole";

//Menu
$route['menu']            	    = "Admin/Menu/index";
$route['add-menu']   		    = "Admin/Menu/addMenu";
$route['edit-menu/(:any)']      = "Admin/Menu/editMenu";
$route['submit-menu']           = "Admin/Menu/submitMenu";

//User
$route['user']            	    = "Admin/User/index";
$route['add-user']   		    = "Admin/User/addUser";
$route['edit-user/(:any)']      = "Admin/User/editUser";
$route['submit-user']           = "Admin/User/submitUser";

//Vendor
$route['vendor']            	   = "Admin/Vendor/index";
$route['add-vendor']   		       = "Admin/Vendor/addVendor";
$route['edit-vendor/(:any)']       = "Admin/Vendor/editVendor";
$route['submit-vendor']            = "Admin/Vendor/submitVendor";

//Slider
$route['slider']            	   = "Admin/Slider/index";
$route['add-slider']               = "Admin/Slider/addSlider";
$route['edit-slider/(:any)']       = "Admin/Slider/editSlider";
$route['submit-slider']            = "Admin/Slider/submitSlider";

/** Order */
$route['order']            	        = "Admin/Order/index";
$route['order-confirmed']           = "Admin/Order/index";
$route['order-processing']          = "Admin/Order/index";
$route['order-shipped']             = "Admin/Order/index";
$route['order-delivered']           = "Admin/Order/index";
$route['order-return']              = "Admin/Order/returnOrder";
$route['order-refund']              = "Admin/Order/index";
$route['order-cancel']              = "Admin/Order/index";
$route['replace-order']             = "Admin/Order/replaceOrder";
$route['view-order/(:any)']         = "Admin/Order/ViewOrder";
$route['view-request/(:any)']         = "Admin/Order/ViewRequest";
$route['update-delivery-status']    = "Admin/Order/updateDeliveryStatus";


/** coupon */
$route['coupon']            	        = "Admin/Coupon/index";
$route['add-coupon']            	    = "Admin/Coupon/addCoupon";
$route['edit-coupon/(:any)']            = "Admin/Coupon/editCopoun";
$route['submit-coupon']            	    = "Admin/Coupon/submitCoupon";


/** Offer */
$route['offer']            	            = "Admin/Offer/index";
$route['add-offer']            	        = "Admin/Offer/addOffer";
$route['edit-offer/(:any)']             = "Admin/Offer/editOffer";
$route['submit-offer']            	    = "Admin/Offer/submitOffer";
$route['special-offer']            	    = "Admin/Offer/specialoffer";
$route['add-special-offer']            	= "Admin/Offer/addSpecialOffer";
$route['submit-special-offer']          = "Admin/Offer/submitSpecialOffer";
$route['edit-special-offer/(:any)']     = "Admin/Offer/editSpecialOffer";

/** stock */

$route['stock']            	        = "Admin/Stock/index";
$route['edit-stock/(:any)']         = "Admin/Stock/editStock";
$route['submit-stock']              = "Admin/Stock/submitStock";

/*** Customer */
$route['customer']            	        = "Admin/Customer/index";

/***profile */
$route['profile']            	     = "Admin/Profile/index";
$route['update-profile']             = "Admin/Profile/updateProfile";
$route['update-password']            = "Admin/Profile/updatePassword";
$route['send-otp']                   = "Admin/Profile/sendOtp";

/*** */
$route['admin-logout']          = 'Admin/login/logout';
$route['error-page']            = 'Admin/login/error_page';
$route['sql-operation']         = 'Admin/Operation/AddSql';
$route['submit-sql']            = 'Admin/Operation/alterDBTableFiled';
$route['export-database']       = 'Admin/Operation/databaseBackUp';
$route['fetch-query']           = 'Admin/Operation/fetchResult';
$route['fetch-result']          = 'Admin/Operation/fetchSqlResult';
$route['import-sql']            = 'Admin/Operation/importSql';
$route['import-database']       = 'Admin/Operation/importDatabase';
$route['export-mail-database']  = 'Admin/Operation/databaseBackUpAndMail';
$route['drop-all-tables']       = 'Admin/Operation/dropAllTables';

/* **************UI route ******************** */
$route['/']                         = "Home/index";
$route['home']                      = "Home/index";
$route['about-us']                  = "Home/aboutUs";
$route['contact-us']                = "Home/contactUs";
$route['shop']                      = "Home/product";
// $route['product']                   = "Home/product";
$route['product-detail/(:any)']     = "Home/productDetail";
$route['blog']                      = "Home/blog";
$route['cart']                      = "Home/cart";
$route['whishlist']                 = "Home/whishlist";
$route['checkout']                  = "Home/checkout";
$route['register-customer']         = "Home/registerCustomer";
$route['customer-login']            = "Home/customerLogin";
$route['login']                     = "Home/login";
$route['logout']                    = "Home/logout";
$route['register']                  = "Home/register";
$route['change-password']           = "Home/changePassword";
$route['subscribe-newsletter']      = "Home/subscribeNewsletter";
$route['add-cust-address']          = "Home/submitCustomerAddress";
$route['change-delivery-address']   = "Home/changeDeliveryAddress";
$route['place-order']               = "Home/placeOrder";
$route['get-state-by-country']      = "Home/getStateByCountry";
$route['my-account']                = "Home/myAccount";
$route['order-history']             = "Home/myOrders";
$route['order-detail']              = "Home/orderDetail";
$route['createPdf']                 = "Home/createPdf";
$route['404-error']                 = "Home/errorPage";
$route['submit-return']             = "Home/submitReturn";
$route['submit-replace']            = "Home/submitReplace";
$route['submit-rating-reviews']     = "Home/submitProductRatingReview";

