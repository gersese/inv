function login()
{
	jQuery.ajax(
	{
		type : 'POST',
		url : 'login/doLogin',
		dataType : 'json',
		data : {
			username: jQuery('#username').val(),
			password: jQuery('#password').val()
		},
		success: function(data)
		{
			if(data.validated)
			{
				window.location = '../../module/dashboard/dashboard/';
			}
			else
			{
				jQuery("#login_message").html('Access denied!');
			}
		},
		error: function(xhr, status, error)
		{
			alert("XHR error: " + xhr.status)
		}
	});
}

function signOut()
{
	jQuery.ajax(
	{
		type : 'POST',
		url : 'signOut',
		dataType : 'json',
		success : function(data)
		{
			window.location = '../dashboard/';
		}
	});
}

function showPreferences()
{
	window.location = 'module/preferences/preferences';
}