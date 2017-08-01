function login()
{
	jQuery.ajax(
	{
		type : 'POST',
		url : 'doLogin',
		dataType : 'json',
		data : {
			username: jQuery('#username').val(),
			password: jQuery('#password').val()
		},
		success: function(data)
		{
			if(data.validated)
			{
				window.location = '../../dashboard/dashboard/';
			}
			else
			{
				alert('Access denied!');
			}
		},
		error: function(xhr, status, error)
		{
			alert("XHR error: " + xhr.status)
		}
	});
}