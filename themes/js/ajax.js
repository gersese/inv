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
				window.location = '../../Main';
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
		url : 'main/signOut',
		dataType : 'json',
		success : function(data)
		{
			window.location = 'module/user/login';
		},
		error : function(data)
		{
			alert(data.status);
		}
	});
}

function showPreferences()
{
	jQuery('#main').load('module/preferences/preferences');
}

function showDashboard()
{
	jQuery('#main').load('module/dashboard/dashboard');
}

function showPurchaseOrder()
{
	jQuery('#main').load('module/purchase_order/purchase_order');
}

function showTransactions()
{
	jQuery('#main').load('module/transaction/transaction');
}