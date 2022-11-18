$(document).ajaxStart(function(){
	// Show image container
	showLoader();
  });
  $(document).ajaxComplete(function(){
	// Hide image container
	hideLoader();
  });

$("form[id='sql-fetch']").validate({
		submitHandler: function(form)
		{
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
					if (json["success"]) 
					{
						$('#divResult').html('');
						$('#divQueryResult').removeClass('d-none');
						$('#divResult').html(json["table"]);
						$('#query_datatable_result').DataTable({
							scrollX: true,										
						});						
					}
					if (json["error"]) {
						$('#divQueryResult').addClass('d-none');
						Swal.fire("Error", json["error"], "error");
					}
				},
			});
		}
});

$("form[id='import_sql']").validate( {
		submitHandler: function(form)
		{		
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
					if (json["success"]) 
					{
						Swal.fire("Success", json["success"], "success");					
					}
					if (json["error"]) {
						Swal.fire("Error", json["error"], "error");				
					}
				},
			});
		}
});