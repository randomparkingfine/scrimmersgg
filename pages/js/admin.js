$.ajax({
	url:"/server/admin.php",
	type:"GET",
	dataType:"json",
	success:function (data) {
		console.log(data);
		for (var i = 1; i < data.length; i++) {
			var key = data[i];
			$("#results").append("<tr><td>" + key['username'] + "</td><td>" + key['email'] + "</td><td>  <button type='button' onclick = 'removeUser(this)' id='"+key['username'] + "' value='"+key['username']+ "'>Delete</button> <button type='button' onclick = 'promote(this)' id='"+key['username'] + 1 + "' value ='" + key['email'] + "'>Promote</button></td></tr>");//"' id='"+key['username']+
		}
	}
});
$("#filter").on("click",function () {
	$("#results").empty();
	$.post(
			"/server/adminSearch.php",
			{
				srch: $("#search").val(),
			},
			function(data) {
				console.log(data);
				for (var i = 0; i < data.length; i++) {
					var key = data[i];
					if (!key['username'] == "") {
						$("#results").append("<tr><td>" + key['username'] + "</td><td>" + key['email'] + "</td><td>  <button type='button' onclick = 'removeUser(this)' id='"+key['username'] + "' value='"+key['username']+ "'>Delete</button> <button type='button' onclick = 'promote(this)' id='"+key['username'] + 1 + "' value ='" + key['email'] + "'>Promote</button></td></tr>");//"' id='"+key['username']+
					}
				}
			},
			"json"
		);
})


function removeUser(test) {

	$.post(
		"/server/remove.php",
		{
			remUser:test.id,
		},
		function(data) {
			console.log(data);
		},
		"json"
	);
}
function promote(test) {
//	console.log(test.id);
//	var test = $(test).val()
//	console.log(test);
	$.post(
		"/server/promote.php",
		{
			promUser:test.id,
			email:$(test).val(),
		},
		function(data) {
			console.log(data);
		},
		"json"
	);
}
