$("form[id='sql-fetch']").validate(
	{
		// Specify validation rules
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
						console.log('Success');
						$('#divQueryResult').removeClass('d-none');
						$('#divResult').html(json["table"]);
						$('#query_datatable_result').DataTable({
							scrollX: true,										
						});						
					}
					if (json["error"]) {
						$('#divResult').html(json["table"]);
						$('#divQueryResult').removeClass('d-none');
					}
				},
			});
		}
});