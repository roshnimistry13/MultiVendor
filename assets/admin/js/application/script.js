$(document).ready(function() {
  
	$(".datepicker").datepicker({
		dateFormat:"d MM yy",
		duration:"medium",
		changeMonth:true,
		changeYear:true,
		// /yearRange: '2010:c+10',
		inline : true,
	});
	  setmenu();
  });


/*** create datatable */

function toDataTable(table_name,url,target,scrollX=false)
{
	
	var dataTable = $('#'+table_name).DataTable(
	{
		"processing":true,
		"serverSide":true,
		"scrollX": scrollX,
		"scrollY": false,
		"order":[],
		"paging": true,
		"pagingType": "full_numbers",
		"pageLength": 10,
		"ajax":
		{
			url: url,
			type:"POST"
		},
		
		dom: "Bfrtip",
		lengthMenu: [
            [ 10, 25, 50, -1 ],
            [ '10 rows', '25 rows', '50 rows', 'Show all' ]
        ],
		buttons: [
            'pageLength',
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            'print',
        ],
		"columnDefs":[
			{
				//"targets" : [target],
				"targets" : target,
				"orderable":false,
			},
		],
		destroy: true,
	});
}

/**** valiadte method for custome validation */
jQuery.validator.addMethod("lettersonly", function(value, element) {
	return this.optional(element) || /^[a-z  .()/-]+$/i.test(value);
}, "Please enter charecter only");

jQuery.validator.addMethod("phone", function (phone_number, element) {
	phone_number = phone_number.replace(/\s+/g, "");
	return this.optional(element) || phone_number.length > 9 && phone_number.length < 12 ;
}, "Please enter valid phone number");

jQuery.validator.addMethod("validate_email", function(value, element) {

	if (/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value)) {
		return true;
	} else {
		return false;
	}
}, "Account Email can contain only ASCII characters. This must be in the format of something@email.com");

jQuery.validator.addMethod("validate_gstin", function(value, element) {

	if (/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9]{1}Z[a-zA-Z0-9]{1}$/.test(value)) {
		return true;
	} else {
		return false;
	}
}, "Please Enter Valid GSTIN Number,i.e '05ABDCE1234F1Z2'");

jQuery.validator.addMethod("validate_pan", function(value, element) {

	if (/[A-Z]{5}[0-9]{4}[A-Z]{1}$/.test(value)) {
		return true;
	} else {
		return false;
	}
}, "Please Enter Valid Pan Number");

jQuery.validator.addMethod("alphanumeric", function(value, element) {

	if (/[a-z0-9A-Z]$/.test(value)) {
		return true;
	} else {
		return false;
	}
}, "Please Enter Only Alphabets and Numbers");

jQuery.validator.addMethod("validate_ifsc", function(value, element) {

	if (/[A-Z]{4}[0][A-Z0-9]{6}$/.test(value)) {
		return true;
	} else {
		return false;
	}
}, "Please Enter Valid IFSC Code");

/*** valdate date  */
jQuery.validator.addMethod("greater_date", function(value, element, startDate) {
	//var startDate = $('#from_date').val();
	return Date.parse($(startDate).val()) < Date.parse(value) || value == "";
}, "End date must be after start date");


var stack_topleft = {"dir1": "down", "dir2": "right", "push": "bottom"};
var stack_topright = {"dir1": "down", "dir2": "left", "push": "bottom"};
var stack_bottomleft = {"dir1": "up", "dir2": "right", "push": "bottom"};
var stack_bottomright = {"dir1": "up", "dir2": "left", "push": "bottom"};

			
function notification(position, notif_type,icon_class,notif_title,notif_text){
	
	var output_title, output_stack;
	if (notif_title==""){output_title="";} else {
		output_title=  notif_title;							
	};
	
	switch (position) {
		case 'topright' : output_stack = stack_topright; break;
		case 'topleft' : output_stack = stack_topleft; break;
		case 'bottomright' : output_stack = stack_bottomright; break;
		case 'bottomleft' : output_stack = stack_bottomleft; break;																
	}

	
	$.pnotify({
//				title: 'My Title',
		title_escape: true,
		text: '<div class="content-list content-image"><div class="list-wrapper mgtp-10 mgbt-xs-10"><div><div class="menu-icon"><i class="'+icon_class+'"></i></div> <div class="menu-text">'+output_title+'<p class="lh-sm">'+notif_text+'</p> </div></div></div></div>',
		cornerclass: '',
		type: notif_type,
		icon: 'false',
		width: '320px',
		closer_hover: false,
		sticker: true,
		opacity: 1,
		animation: {
			effect_in: 'shake',
			effect_out: 'fade'
		},
		addclass: 'stack-'+position,
		stack: output_stack			
		
	});		
}

function showLoader(){
	$('#overlayer').show();
	$('.loader-overlay').show();
}

function hideLoader(){
	$('#overlayer').hide();
	$('.loader-overlay').hide();
}

function setmenu(){
	if($('.sidebar_nav').find('ul.submenu').find('.active')){
		$('.sidebar_nav').find('ul.submenu').find('.active').parent().parent().show();
	}
}

function moneyformate(num){
	y=num.toString();
	var lastThree1 = y.substring(y.length-3);
	var otherNumbers1 = y.substring(0,y.length-3);
	if(otherNumbers1 != '')
		lastThree1 = ',' + lastThree1;
	var result = otherNumbers1.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree1;
	return result;
  }


  
//Lock screen js start
var idleTime = 0;

$(document).ready(function () {
    // Increment the idle time counter every minute.
    var idleInterval = setInterval(timerIncrement, 10000); // 1 minute

    // Zero the idle timer on mouse movement.
    $(this).mousemove(function (e) {
        idleTime = 0;
        //checkLockscreenSession();
        
    });
    $(this).keypress(function (e) {
        idleTime = 0;
        //checkLockscreenSession();
    });
});

function timerIncrement() {
    idleTime = idleTime + 1;
    if (idleTime > 100) 
    {
    	createLockSession();
    }
}

function createLockSession()
{
	$.ajax(
		  {
		  	"url" : "Admin/Lockscreen/createLockSession",
		  	type: 'post',
		  	dataType: 'json',
		  	success: function (data)
		  	{
		  		if(data.status=="success")
		  		{
		  			$("#lockscreenModal").modal('show');
		  			idleTime = 0;
		  		}
		  	},
		  });
}

//Lock screen js end