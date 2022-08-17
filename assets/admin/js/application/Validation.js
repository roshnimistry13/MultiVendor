//Function is used for check value is null or not
function isNull(id){
	//alert(id);
	var $msg=$("#"+id).parent().find("span.val-msg");
	
	if($('#'+id).val() == "" || $('#'+id).val() == null )					
	{
		$('#'+id).closest('.form-group').addClass('has-error');
		$msg.text('Please enter value');
		$('#'+id).focus();
		return false;
	}
	else
	{
		$('#'+id).closest('.form-group').removeClass('has-error');
		$('#'+id).closest('.form-group').addClass('has-sucess');
		$msg.text('');
		return true;
	}
}

//Function is used for check value is only text or not
function isText(id){
	//alert(id);
	var $msg=$("#"+id).parent().find("span.val-msg");
	
	
	if($('#'+id).val() == "" || $('#'+id).val() == null )					
	{
		$('#'+id).closest('.form-group').addClass('has-error');
		$msg.text('Please enter Text');
		$('#'+id).focus();
		return false;
	}
	else
	{
		var regexp = /^[a-zA-Z ]+$/;
	}
	
	if($('#'+id).val().match(regexp))					
	{
		$('#'+id).closest('.form-group').removeClass('has-error');
		$('#'+id).closest('.form-group').addClass('has-sucess');
		$msg.text('');
		return true;
	}
	else
	{
		$('#'+id).closest('.form-group').addClass('has-error');
		$msg.text("This field accepts only Characters(A-Z & a-z)");
		$('#'+id).focus();
		return false;
	}
}

//function is for used for check combo box is null or not
function isDrop(id){
	var $msg=$("#"+id).parent().find("span.val-msg");
	$('#'+id).valid();
	
	if($('#'+id).val() == "" || $('#'+id).val() == null )					
	{
		$('#'+id).closest('.form-group').addClass('has-error');
		//$msg.text('Please select value.');
		$('#'+id).focus();
		return false;
	}
	else
	{
		$('#'+id).closest('.form-group').removeClass('has-error');
		$('#'+id).closest('.form-group').addClass('has-sucess');
		$msg.text('');
		return true;
	}
}

//function is for take input only text and number
function isTextNum(id){
	//alert(id);
	var $msg=$("#"+id).parent().find("span.val-msg");
	
	
	if($('#'+id).val() == "" || $('#'+id).val() == null )					
	{
		$('#'+id).closest('.form-group').addClass('has-error');
		$msg.text('Please enter value');
		$('#'+id).focus();
		return false;
	}
	else
	{
		var regexp = /^[A-Za-z0-9_ ]+$/;
		//var regexp = /^[a-zA-Z ]+$/;
	}
	
	if($('#'+id).val().match(regexp))					
	{
		$('#'+id).closest('.form-group').removeClass('has-error');
		$('#'+id).closest('.form-group').addClass('has-sucess');
		$msg.text('');
		return true;
	}
	else
	{
		$('#'+id).closest('.form-group').addClass('has-error');
		$msg.text("Please enter only AplhaNumerics(A-Z , 0-9).");
		$('#'+id).focus();
		return false;
	}
}

//validation for take mobile number
function isMobile(id){
	var $msg=$("#"+id).parent().find("span.val-msg");
	
	var mbno = $('#'+id).val();
	
	if(mbno.charAt(0)=="0")
	{
		if(mbno.charAt(1)=="1" || mbno.charAt(1)=="2" || mbno.charAt(1)=="3" || mbno.charAt(1)=="4" || mbno.charAt(1)=="5")
		{
			$('#'+id).closest('.form-group').addClass('has-error');
			$msg.text("Invalid Mobile Number");
			$('#'+id).focus();
			return false;
		}
		else
			var phoneno = /^\d{11}$/;
	}
	else if(mbno.charAt(0)=="1" || mbno.charAt(0)=="2" || mbno.charAt(0)=="3" || mbno.charAt(0)=="4" || mbno.charAt(0)=="5")
	{
		$('#'+id).closest('.form-group').addClass('has-error');
		$msg.text("Mobile Number starts with only 6,7,8,9,0");
		$('#'+id).focus();
		return false;
	}
	else
	{
		var phoneno = /^\d{10}$/;
		//var phoneno = /^[0][1-9]\d{10}$|^[1-9]\d{10}$/;
	}
	
	if(mbno.match(phoneno))
	{
		$('#'+id).closest('.form-group').removeClass('has-error');
		$('#'+id).closest('.form-group').addClass('has-sucess');
		$msg.text('');
		return true;
	}
	else
	{
		$('#'+id).closest('.form-group').addClass('has-error');
		//$('#'+id).val('');
		$msg.text("Please Enter valid Mobile Number");
		return false;
	}
}

//validation for email id
function isEmail(id)
{
	var $msg=$("#"+id).parent().find("span.val-msg");
	var email = $("#"+id).val();
	
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(email == "")
	{
		$('#'+id).closest('.form-group').addClass('has-error');
		$msg.text('Please Enter email id');
		return true;
	}
	else
	{
		if(email.match(mailformat))
		{
			$('#'+id).closest('.form-group').removeClass('has-error');
			$('#'+id).closest('.form-group').addClass('has-sucess');
			$msg.text('');
			return true;
		}
		else
		{
			$('#'+id).closest('.form-group').addClass('has-error');
			$msg.text("You have enter an invalid email address ! ");
			//msgBox("You have entered an invalid email address ! ","Invalid Entry","error");
			//$("#"+id).focus();
			return false;
		}
	}
}

//validation for take number
function isNumber(id)
{
	var $msg = $("#"+id).parent().find("span.val-msg");
	//var mt2 = "";

	if($('#'+id).val() == "" || $('#'+id).val() == null )					
	{
	//	mt += String.fromCharCode(unicode);
		$('#'+id).closest('.form-group').removeClass('has-error');
		$('#'+id).closest('.form-group').addClass('has-sucess');
		$msg.text('Please enter number');
		return false;

	}
	else
	{
		var regexp = /^[0-9]+$/;
	}
	
	if($('#'+id).val().match(regexp))					
	{
		$('#'+id).closest('.form-group').removeClass('has-error');
		$('#'+id).closest('.form-group').addClass('has-sucess');
		$msg.text('');
		return true;
	}
	else
	{
		$('#'+id).closest('.form-group').addClass('has-error');
		$msg.text("Please enter only number");
		$('#'+id).focus();
		return false;
	}
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
		Swal.fire("Error", "This field accepts only Numbers(0-9)", "error");
		/*msgBox("This field accepts only Numbers(0-9)", "Invalid Entry", "error");*/
		return false;
	}
}

function isAlpha(e)
{
	var mt2 = "";
	
	var unicode = e.charCode ? e.charCode : e.keyCode;
	var allowedChars = "& / . ," ;

	if ((allowedChars.indexOf(String.fromCharCode(unicode)) >= 0) || (unicode == 8) || (unicode == 32) || (unicode == 37) || (unicode > 15 && unicode < 19) || (unicode == 20) || (unicode == 9) || (unicode > 64 && unicode < 92) || (unicode > 95 && unicode < 134))
	{
		mt2 += String.fromCharCode(unicode);
		return true;

	}
	else
	{
		//alert("This field accepts only Characters(A-Z & a-z)");
		Swal.fire("Error", "This field accepts only Characters(A-Z & a-z)", "error");

		//msgBox("This field accepts only Characters(A-Z & a-z)", "Invalid Entry", "error");
		return false;
	}
}


function isAlphaNum(e)
{
	var mt = "";
	var allowedChars = " ! @ # $ %  ^ & * ( ) [ ] / ? . > , < ; : - _ + = ~ |  " ;
	var unicode = e.charCode ? e.charCode : e.keyCode;
	if ((allowedChars.indexOf(String.fromCharCode(unicode)) >= 0) || (unicode == 8) || (unicode >= 32 && unicode <= 34) || (unicode == 37) || unicode == 188 ||
		(unicode > 15 && unicode < 19) || (unicode == 20) || (unicode == 9) || 
		(unicode > 43 && unicode < 58) || (unicode > 64 && unicode < 92) || (unicode > 95 && unicode < 134))
	{
		mt += String.fromCharCode(unicode);
		return true;

	}
	else
	{
		e.preventDefault();
		//alert("This field accepts only AplhaNumerics(A-Z , 0-9 ," + allowedChars + ")");
		Swal.fire("Error", "This field accepts only AplhaNumerics(A-Z , 0-9 ," + allowedChars + ")", "error");

		//msgBox("This field accepts only AplhaNumerics(A-Z , 0-9 ," + allowedChars + ")", "Invalid Entry", "error");
		return false;
	}
}
  