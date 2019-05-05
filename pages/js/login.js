$('#submit').click(function () {
	$.post(
		'/login',
		{
			username: $('#username').val(),
			password: $('#password').val()
		},
		function(data) {
			$('#response').text(data);
		}
	);
});
